<div class="container">
    <h1 class='text-center'>Connexion</h1>
    <?php if (isset($_SESSION["errorMessage"])){
        echo "<div class='fw-bold text-center text-danger'>". $_SESSION['errorMessage']." </div>";
    } ?>
    <form action='/users/login' name='connecter' method='post' style='max-width: 300px; margin-left: auto; margin-right: auto; margin-bottom: 100px'>
        <div>
            <label for='connexionEmail' style='display: block;'>Entrez votre email : </label>
            <input type='email'
                   name='connexionEmail'
                   value="<?= (isset($_SESSION["errorMessage"])) ? $_POST['connexionEmail'] : ''  ?>" style='width: 100%;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='connexionPassword' style='display: block;'>Entrez mot de passe : </label>
            <input type='password'
                   name='connexionPassword'
                   style='width: 100%;'>
        </div>
        <button type='submit' style='width: 100%;'>Se connecter</button>
    </form>
</div>