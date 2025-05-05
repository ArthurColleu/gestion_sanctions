<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

// Récupération des routes
$routes = require_once __DIR__ . '/../config/routes.php';

// Récupération des routes
$entityManager = require_once __DIR__ . '/../config/bootstrap.php';

// Récupération de l'URL actuelle
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Recherche de la route correspondante
if (!isset($routes[$uri])) {
    $errorController = new \App\Controler\ErrorControler();
    $errorController->error404();
    exit;
}
// Récupération du contrôleur et de l'action
try {
    [$controllerName, $action] = $routes[$uri];
} catch (\Exception $e) {
    error_log($e->getMessage());
    $errorController = new \App\Controler\ErrorControler();
    $errorController->error404();
}

//var_dump($controllerName, $action);
$controllerClass = "App\\Controler\\{$controllerName}";

try {
    // Instanciation du contrôleur et appel de l'action
    $controller = new $controllerClass($entityManager); // Appel du constructeur du controleur
    $controller->$action();

} catch (\Exception $e) {
    error_log($e->getMessage());
    $errorController = new \App\Controler\ErrorControler();
    $errorController->error500();
}

