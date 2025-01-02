<?php

namespace App\UserStory;

use App\Entity\User;
use Doctrine\DBAL\Driver\PDO\Exception;
use Doctrine\ORM\EntityManager;

class ConnexionAccount
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        //L'EntityManager est injecté par dépendance
        $this->entityManager = $entityManager;
    }

    //Cette méthode permettra d'exécuter la user story
    public function connexion(string $email, string $password){
        //Vérifier que les données sont présentes
        //Si tel n'est pas le cas, lancer une exception
        if (empty($email) || empty($password)){
            throw new \Exception("Veuillez entrer tous les champs");
        }
        //Verifier si l'email est valide
        //Si tel n'est pas le cas, lancer une exception
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new \Exception("Veuillez entrer un mail valide");
        }
        //Verifier si le mot de passe est valide
        //Si tel est le cas, lancer une exception
        $repository = $this->entityManager->getRepository(User::class);
        $user = $repository->findOneBy(array("email" => $email));
        if (!isset($user)){
            throw new \Exception("Email introuvable");
        }
        if (password_verify($password, $user->getPassword())) {
            throw new \Exception("Mot de passe incorrect");
        }
        $_SESSION["prenom_user"] = $user->getPrenom();
        $_SESSION["nom_user"] = $user->getNom();
        $_SESSION["email_user"] = $user->getEmail();
        $_SESSION["id_user"] = $user->getId();

    }
}