<?php

namespace App\Controler;
use App\UserStory;
use App\UserStory\ConnexionAccount;
use Exception;

class ConnexionControler extends BaseControler
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
}