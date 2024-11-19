<?php

namespace App\Controler;
use App\UserStory;
use App\UserStory\ConnexionAccount;
use Exception;

class ConnexionControler extends BaseControler
{
    public function login(): void
    {
        $email = $_REQUEST["connexionEmail"];
        $password = $_REQUEST["connexionPassword"];

        $connector = new ConnexionAccount($this->entityManager);
        try{
            $connector->connexion($email, $password);
        } catch(\Exception $e){
            $_SESSION["errorMessage"] = $e->getMessage();
        }
    }
}