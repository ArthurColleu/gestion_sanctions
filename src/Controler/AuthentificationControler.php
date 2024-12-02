<?php

namespace App\Controler;

use App\UserStory\ConnexionAccount;
use App\UserStory\CreateAccount;

class AuthentificationControler
{
    public function login(): string
    {
        $email = $_REQUEST["connexionEmail"];
        $password = $_REQUEST["connexionPassword"];

        $connector = new ConnexionAccount($this->entityManager);
        try{
            $connector->connexion($email, $password);
            $_SESSION["connectionStatus"] = "yes";
            return "http://" . $_SERVER["HTTP_HOST"];
            //var_dump($_SESSION);
        } catch(\Exception $e){
            $_SESSION["connectionStatus"] = "no";
            //var_dump($_SESSION);
            $_SESSION["errorMessage"] = $e->getMessage();
        }
        return "";
    }
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
    public function disconnect(): void
    {
        $_SESSION["connectionStatus"] = "no";
        unset($_SESSION["prenom"]);
        unset($_SESSION["nom"]);

    }
    public function redirectHome(): void
    {
        header('Refresh: 5; URL=http://' . $_SERVER["HTTP_HOST"]);
    }
}