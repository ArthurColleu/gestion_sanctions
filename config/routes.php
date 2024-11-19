<?php

return [
    'defaut' => ['BaseControler', 'defaut', ["connecte" => $connectionStatus, "errorMessage" => ""]],
    'login'=> ['ConnexionControler' , 'connexion', ["connecte" => $connectionStatus, "errorMessage" => ""]],
    'create'=> ['UserCreateControler' , 'create', ["connecte" => $connectionStatus, "errorMessage" => ""]],
    'disconnect'=> ['DisconnectionControler' , 'disconnect', ["connecte" => $connectionStatus, "errorMessage" => ""]],
    'mentionsLegale'=> ['BaseControler' , 'mentionsLegale', ["connecte" => $connectionStatus, "errorMessage" => ""]]

];