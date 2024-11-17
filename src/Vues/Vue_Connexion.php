<?php

namespace App\Vues;

use App\Utilitaire\Vue_Composant;

class Vue_Connexion extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1 class='text-center'>Connexion✋😌</h1>
<form action='/?case=nonConnecter&page=connexion' name='connecter' method='post' style='max-width: 300px; margin-left: auto; margin-right: auto; margin-bottom: 100px'>
    <div>
        <label for='connexionEmail' style='display: block;'>Entrez votre email : </label>
        <input type='email' name='connexionEmail' style='width: 100%;'>
    </div>
    <div style='margin-bottom: 15px;'>
        <label for='connexionPassword' style='display: block;'>Entrez mot de passe : </label>
        <input type='password' name='connexionPassword' style='width: 100%;'>
    </div>    
    <button type='submit' style='width: 100%;'>Se connecter</button>
</form>
        $this->msgErreur
    ";
        return $str ;
    }
}