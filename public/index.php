<?php
session_start();
require_once __DIR__ . "/../vendor/autoload.php";
use App\Utilitaire\Vue;

if (isset($_SESSION["prenom"])) {
    $connectionStatus="yes";
} else {
    $connectionStatus="no";
}
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
} else {
    $action = "";
}
if (isset($_REQUEST["case"]))
    $case = $_REQUEST["case"];
else
    $case = "defaut";



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
$entityManager = require_once __DIR__ . '/../config/bootstrap.php';
$routes = require_once __DIR__ . '/../config/routes.php';
[$controllerName, $template, $param] = $routes[$case];
$controllerClass = "App\\Controler\\{$controllerName}";
$controler = new $controllerClass($entityManager);
if ( ! empty($action)){
    if (method_exists($controler, $action)) {
        $controler->{$action}();
    } else {
        echo "Unknown method $action on Controler";
    }
}
$parameters = array_merge($param, $_SESSION);
$controler->render($template,$parameters);
$Vue->afficher();
unset($_SESSION["errorMessage"]);
?>
<script src="js/bootstrap.min.js" ></script>
    </body>
</html>
