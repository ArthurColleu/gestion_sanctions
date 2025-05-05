<div class="container">
    <h1 class='text-center'>Créer votre compte</h1>
    <form action='/users/create' method='post' style='max-width: 300px; margin-left: auto; margin-right: auto; margin-bottom: 100px'>
        <div style='margin-bottom: 15px;'>
            <label for='prenom' style='display: block;'>Prénom :</label>
            <input type='text'
                   name='prenom'
                   value='<?php (!isset($_SESSION["errorMessage"])) ? $_POST['prenom'] : ''  ?>'
                   style='width: 100%;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='nom' style='display: block;'>Nom :</label>
            <input type='text'
                   name='nom'
                   value="<?= (!isset($_SESSION["errorMessage"])) ? $_POST['nom'] : ''  ?>"
                   style='width: 100%;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='email' style='display: block;'>Entrez votre email :</label>
            <input type='email'
                   name='email'
                   value="<?= (!isset($_SESSION["errorMessage"])) ? $_POST['email'] : ''  ?>"
                   style='width: 100%;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='password' style='display: block;'>Mot de passe :</label>
            <input type='password' name='password' style='width: 100%;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='confirmePassword' style='display: block;'>Confirmation de mot de passe :</label>
            <input type='password'
                   name='confirmePassword'
                   style='width: 100%;'>
        </div>
        <button type='submit' style='width: 100%;'>Créer son compte</button>
    </form>
</div>
