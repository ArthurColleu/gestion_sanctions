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
<h1 class='text-center'>Créer votre compte✋😌</h1>
<form action='/?case=nonConnecter&page=creationCompte' method='post' style='max-width: 300px; margin-left: auto; margin-right: auto; margin-bottom: 100px'>
    <div style='margin-bottom: 15px;'>
        <label for='prenom' style='display: block;'>Prénom :</label>
        <input type='text' name='prenom' style='width: 100%;'>
    </div>
    <div style='margin-bottom: 15px;'>
        <label for='nom' style='display: block;'>Nom :</label>
        <input type='text' name='nom' style='width: 100%;'>
    </div>
    <div style='margin-bottom: 15px;'>
        <label for='email' style='display: block;'>Entrez votre email :</label>
        <input type='email' name='email' style='width: 100%;'>
    </div>
    <div style='margin-bottom: 15px;'>
        <label for='password' style='display: block;'>Mot de passe :</label>
        <input type='password' name='password' style='width: 100%;'>
    </div>
    <div style='margin-bottom: 15px;'>
        <label for='confirmePassword' style='display: block;'>Confirmation de mot de passe :</label>
        <input type='password' name='confirmePassword' style='width: 100%;'>
    </div>
    <button type='submit' style='width: 100%;'>Créer son compte</button>
</form>
        $this->msgErreur
    ";
        return $str ;
    }
}