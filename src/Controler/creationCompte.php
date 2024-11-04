<?php
$entityManager = require_once __DIR__.'/../../config/bootstrap.php';
use App\Utilitaire\Vue;
$Vue = new Vue();
$Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());
$Vue->addToCorps(new \App\Vues\Vue_creationCompte());
$Vue->setBasDePage(new \App\Vues\Vue_footer());
if (isset($_REQUEST["email"]) && isset($_REQUEST["pseudo"]) && isset($_REQUEST["password"])){
    $email = $_REQUEST["email"];
    $pseudo = $_REQUEST["pseudo"];
    $password = $_REQUEST["password"];
    $account = new \App\UserStory\CreateAccount($entityManager);
    try {
        $account->execute($pseudo,$email,$password);
    } catch (\Exception $e){
        echo $e->getMessage();
    }

}

