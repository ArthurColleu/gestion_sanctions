<?php

require_once __DIR__."/vendor/autoload.php";
use App\Utilitaire\Vue;

if (isset($_REQUEST["case"]))
    $case = $_REQUEST["case"];
else
    $case = "defaut";

if (isset($_REQUEST["page"]))
    $page = $_REQUEST["page"];
else
    $page = "defaut";

$Vue = new Vue();
switch ($case) {
    case "nonConnecter":
    case "defaut":
        include "./src/Controler/Non_connecter.php";
        break;
    case "connecter":
        include "./src/Controler/connecter.php";
        break;
}
$Vue->afficher();
