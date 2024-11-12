<?php

require_once __DIR__ . "/../vendor/autoload.php";
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
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
    <body>

<?php
switch ($case) {
    case "nonConnecter":
    case "defaut":
        include "../src/Controler/Non_connecter.php";
        break;
    case "connecter":
        include "../src/Controler/connecter.php";
        break;
}
$Vue->afficher();
?>
<script src="js/bootstrap.min.js" ></script>
    </body>
</html>
