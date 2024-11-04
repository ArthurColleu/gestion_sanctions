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
            <h1>User Story✋😌</h1>
        $this->msgErreur
    ";
        return $str ;
    }
}