<?php

return [
    '/' => ['HomeControler', 'index'],
    '/users/login'=> ['AuthentificationControler' , 'login'],
    '/users/create'=> ['AuthentificationControler' , 'create'],
    '/users/disconnect'=> ['AuthentificationControler' , 'disconnect'],
    '/promo/create'=> ['PromotionControler' , 'createPromo'],
    '/eleve/ajout_eleve'=> ['EleveControler' , 'ajouterEleve'],
    '/mentionsLegale'=> ['HomeControler' , 'mentionsLegale']
];