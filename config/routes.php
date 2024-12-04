<?php

return [
    '/' => ['HomeControler', 'index'],
    '/users/login'=> ['AuthentificationControler' , 'login'],
    '/users/create'=> ['AuthentificationControler' , 'create'],
    '/users/disconnect'=> ['AuthentificationControler' , 'disconnect'],
    '/mentionsLegale'=> ['HomeControler' , 'mentionsLegale']
];