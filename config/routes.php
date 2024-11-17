<?php

return [
    'defaut' => ['BaseControler', 'defaut', ["connecte" => $connectionStatus]],
    'login'=> ['ConnexionControler' , 'connexion', ["connecte" => $connectionStatus]],
    'create'=> ['BaseControler' , 'create', ["connecte" => $connectionStatus]]
];