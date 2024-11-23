<?php

namespace App\Controler;
use App\UserStory;
use App\UserStory\ConnexionAccount;
use Exception;

class DisconnectionControler extends BaseControler
{
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