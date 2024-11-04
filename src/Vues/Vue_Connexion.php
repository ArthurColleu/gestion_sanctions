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
<h1>Connexion✋😌</h1>
<form action='/?case=nonConnecter&page=connexion' name='connecter' method='post'>
    <div>
        <label for='connexionEmail'>Entrez votre email : </label>
        <input type='email' name='connexionEmail'>
    </div>
    <div>
        <label for='connexionPassword'>Entrez mot de passe : </label>
        <input type='text' name='connexionPassword'>
    </div>    
    <button type='submit'>Se connecter</button>
</form>
        $this->msgErreur
    ";
        return $str ;
    }
}