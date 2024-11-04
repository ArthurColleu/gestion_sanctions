<?php

namespace App\Vues;

use App\Utilitaire\Vue_Composant;

class Vue_Menu_Non_Connecter extends Vue_Composant
{
    public function __construct(string $msgErreur =""){}

    function donneTexte(): string
    {
        return "
        <header>
            <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?page=accueil'>Accueil</a></li>
                <li><a href='?page=connexion'>Se connecter</a></li>
                <li><a href='?page=creationCompte'>créer un compte</a></li>
              </ul>
            </nav> 
        </header>    
            " ;
    }
}