<?php

namespace App\Vues;

use App\Utilitaire\Vue_Composant;

class Vue_accueil extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
            <h1 class='text-center'>Bienvenue sur le site du lycée Gaudper</h1>
            <p class='text-center'>Bienvenue dans la page d'accueil du site du lycée Gaudper pour mettre des sanctions aux élèves qui ne 
            sont pas sages.</p>
        $this->msgErreur
    ";
        return $str ;
    }
}