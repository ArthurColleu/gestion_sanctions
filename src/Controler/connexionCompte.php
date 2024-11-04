<?php
$entityManager = require_once __DIR__.'/../../config/bootstrap.php';
use App\Utilitaire\Vue;
$Vue = new Vue();
$Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());
$Vue->addToCorps(new App\Vues\Vue_Connexion());
$Vue->setBasDePage(new \App\Vues\Vue_footer());
if (isset($_REQUEST["connexionEmail"]) && isset($_REQUEST["connexionPassword"])){
    $email = $_REQUEST["connexionEmail"];
    $password = $_REQUEST["connexionPassword"];
    $connexion = new App\UserStory\ConnexionAccount($entityManager);
    try {
        $connexion->connexion($email,$password);
        $Vue= new Vue();
        $Vue->setMenu(new \App\Vues\Vue_Menu_Connecter());
        $Vue->addToCorps(new App\Vues\Vue_accueil());
    } catch (\Exception $e){
        echo $e->getMessage();
    }
}

