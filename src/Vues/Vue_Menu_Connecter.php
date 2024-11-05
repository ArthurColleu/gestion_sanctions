<?php

namespace App\Vues;

use App\Utilitaire\Vue_Composant;

class Vue_Menu_Connecter extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        return "
        <header class='bg-'>
            <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?case=connecter&page=accueil'>Accueil</a></li>
                <li><a href='?case=connecter&page=deconnexion'>Se déconnecter</a></li>     
              </ul>
            </nav>
        </header>    
            " ;
    }
}