<?php
$entityManager = require_once __DIR__ . '/config/bootstrap.php';
$eleve = new \App\UserStory\AjoutEleve($entityManager);
print_r($eleve->ajoutEleve(5,'csv/sio2.csv'));