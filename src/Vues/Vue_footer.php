<?php

namespace App\Vues;

use App\Utilitaire\Vue_Composant;

class Vue_footer extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        return "
        <footer class='bg-body-secondary fixed-bottom text-center'>
        <div class='container text-center'>
            <div class='col'>
                <div class='d-inline'>Mentions légales </div>
                <div class='d-inline'> Contact</div>
            </div>
        </div>

            © 2024 Gestion de tâches , tout droits réserver
        </footer>
            " ;
    }
}