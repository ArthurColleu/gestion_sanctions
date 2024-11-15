<?php

namespace App\Vues;

use App\Utilitaire\Vue_Composant;

class Vue_creationCompte extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Créer votre compte✋😌</h1>
<form action='/?case=nonConnecter&page=creationCompte' method='post'>
    <div>
        <label for='prenom'>Prénom : </label>
        <input type='text' name='prenom'>
    </div>
    <div>
        <label for='nom'>Nom : </label>
        <input type='text' name='nom'>
    </div>
    <div>
        <label for='email'>Entrez votre email : </label>
        <input type='email' name='email'>
    </div>
    <div>
        <label for='password'>Mot de passe : </label>
        <input type='text' name='password'>
    </div>
    <div>
        <label for='confirmePassword'>Confirmation de mot de passe : </label>
        <input type='text' name='confirmePassword'>
    </div>
    <button type='submit'>créer son compte</button>
</form>
        $this->msgErreur
    ";
        return $str ;
    }
}