<?php
$Vue->setMenu(new \App\Vues\Vue_Menu_Connecter());
switch ($page) {
    case "accueil":
    case "defaut":
        $Vue->addToCorps(new \App\Vues\Vue_accueil());
        break;
    case "deconnexion":
        unset($_REQUEST["email"]);
        unset($_REQUEST["pseudo"]);
        unset($_REQUEST["password"]);
        $Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());
        $Vue->addToCorps(new \App\Vues\Vue_Deconnexion());
        break;
}
$Vue->setBasDePage(new \App\Vues\Vue_footer());