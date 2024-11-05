<?php
$Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());

switch ($page){
    case "accueil":
    case "defaut":
        $Vue->addToCorps(new \App\Vues\Vue_accueil());
        break;
    case "creationCompte":
        include "CreationCompte.php";
        break;
    case "connexion":
        include "connexionCompte.php";
        break;
}
$Vue->setBasDePage(new \App\Vues\Vue_footer());