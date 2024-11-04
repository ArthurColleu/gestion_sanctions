<?php

namespace App\Vues;

use App\Utilitaire\Vue_Composant;

class Vue_Afficher_Message extends Vue_Composant
{
    private string $msg;
    public function __construct(string $msg)
    {
        $this->msg=$msg;
    }

    function donneTexte(): string
    {
        return $this->msg;
    }
}