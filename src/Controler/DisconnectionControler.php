<?php

namespace App\Controler;
use App\UserStory;
use App\UserStory\ConnexionAccount;
use Exception;

class DisconnectionControler extends BaseControler
{
    public function disconnect(): void
    {
        unset($_SESSION);
    }
}