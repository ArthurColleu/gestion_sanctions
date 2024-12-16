<?php

namespace App\Controler;
use App\Entity\User;
use App\UserStory\ConnexionAccount;
use App\UserStory\CreateAccount;
use Doctrine\ORM\EntityManager;

class AuthentificationControler extends AbstractControler
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_REQUEST["connexionEmail"];
            $password = $_REQUEST["connexionPassword"];

            $connector = new ConnexionAccount($this->entityManager);
            try {
                $connector->connexion($email, $password);
                $_SESSION["connectionStatus"] = "yes";
                //var_dump($_SESSION);
                $this->redirect("/");
            } catch (\Exception $e) {
                $_SESSION["connectionStatus"] = "no";
                $_SESSION["errorMessage"] = $e->getMessage();
            }
        }
        $this->render('users/login');
    }
    public function create () : void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_REQUEST["email"];
            $prenom = $_REQUEST["prenom"];
            $nom = $_REQUEST["nom"];
            $password = $_REQUEST["password"];
            $confirmePassword = $_REQUEST["confirmePassword"];

            $creator = new CreateAccount($this->entityManager);
            try{
                $creator->execute($nom, $prenom, $email, $password, $confirmePassword);
                $this->redirect('/users/login');
            } catch(\Exception $e){
                $_SESSION["errorMessage"] = $e->getMessage();
            }
        }
        $this->render('users/create');
    }
    public function disconnect(): void
    {
        $_SESSION["connectionStatus"] = "no";
        unset($_SESSION["errorMessage"]);
        unset($_SESSION["prenom_user"]);
        unset($_SESSION["nom_user"]);
        unset($_SESSION["email_user"]);
        $this->redirect('/users/login');
    }
}