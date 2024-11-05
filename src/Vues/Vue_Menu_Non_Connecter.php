<?php

namespace App\Vues;

use App\Utilitaire\Vue_Composant;

class Vue_Menu_Non_Connecter extends Vue_Composant
{
    public function __construct(string $msgErreur =""){}

    function donneTexte(): string
    {
        return "
        <header class='bg-success py-1'>
            <nav id='menu'>
              <div class='d-flex justify-content-end py-2 ' id='menu-closed'> 
                <a class='mx-2  text-black link-underline link-underline-opacity-0' href='?page=accueil'>Accueil</a>
                <a class='mx-2  text-black link-underline link-underline-opacity-0' href='?page=connexion'>Se connecter</a>
                <a class='mx-2 text-black link-underline link-underline-opacity-0 me-5' href='?page=creationCompte'>créer un compte</a>
              </div>
            </nav> 
        </header>    
            " ;
    }
}