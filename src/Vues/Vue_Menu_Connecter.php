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
        <header class='bg-black py-1 '>
            <nav class='navbar navbar-expand-sm'>
                <img src='images/logo_lycee_Gaudper.png' class='mx-2 ' alt='logo' style='height:75px'> 
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='container-fluid'>
                    <div class='collapse navbar-collapse' id='navbarNav'>
                        <div class='navbar-nav'>
                            <a class='mx-2 text-white text-center link-underline link-underline-opacity-0' href='?case=connecter&page=accueil'>Accueil</a>
                            <a class='mx-2 text-white text-center link-underline link-underline-opacity-0' href='?case=connecter&page=deconnexion'>Se déconnecter</a>                            
                        </div>
                    </div>
                </div>
            </nav>
        </header>   
            " ;
    }
}