<?php
session_start();
$prenom = $_SESSION["prenom"];
$nom = $_SESSION["nom"];
$Vue->setMenu(new \App\Vues\Vue_Menu_Connecter());
switch ($page) {
    case "accueil":
    case "defaut":
    echo "<div class='text-white bg-black'>Vous êtes connecté en tant que $prenom $nom </div>";
    $Vue->addToCorps(new \App\Vues\Vue_accueil());
        break;
    case "mentionsLegale":
        $Vue->addToCorps(new \App\Vues\Vue_Mentions_Legales());
        break;
    case "deconnexion":
        unset($_SESSION["prenom"]);
        unset($_SESSION["nom"]);
        $Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());
        $Vue->addToCorps(new \App\Vues\Vue_Deconnexion());
        break;
}
$Vue->setBasDePage(new \App\Vues\Vue_footer());