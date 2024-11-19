<?php
namespace App\Controler;
use App\Entity\User;
use App\UserStory\CreateAccount;

class UserCreateControler extends BaseControler {
    public function createUser () : void {
        $email = $_REQUEST["email"];
        $prenom = $_REQUEST["prenom"];
        $nom = $_REQUEST["nom"];
        $password = $_REQUEST["password"];
        $confirmePassword = $_REQUEST["confirmePassword"];

        $creator = new CreateAccount($this->entityManager);
        try{
            $creator->execute($nom, $prenom, $email, $password, $confirmePassword);
        } catch(\Exception $e){
            $_SESSION["errorMessage"] = $e->getMessage();
        }

    }
}