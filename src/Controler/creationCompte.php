<?php

$entityManager = require_once __DIR__.'/../../config/bootstrap.php';

use App\Utilitaire\Vue;

$Vue = new Vue();
$Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());
$Vue->addToCorps(new \App\Vues\Vue_creationCompte());
$Vue->setBasDePage(new \App\Vues\Vue_footer());

if (isset($_POST["confirmePassword"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["password"]))
{

    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $password = $_POST["password"];
    $verifPassword = $_POST["confirmePassword"];

    $account = new \App\UserStory\CreateAccount($entityManager);
    try {
        $account->execute($nom, $prenom,$email,$password, $verifPassword);
        $Vue = new Vue();
        $Vue->setMenu(new \App\Vues\Vue_Menu_Connecter());
        echo "<div class='text-white bg-black'>Création de compte terminée</div>";
        $Vue->addToCorps(new \App\Vues\Vue_Connexion());
    } catch (\Exception $e){
        echo $e->getMessage();
    }

}

