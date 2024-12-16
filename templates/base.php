<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>GAUDPER - Etablissement Scolaire</title>
</head>

<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////// BASE PHP //////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<?php
echo "<header class='bg-black py-1 '>
            <nav class='navbar navbar-expand-sm'>
                <img src='/images/logo_lycee_Gaudper.png' class='mx-2 ' alt='logo' style='height:75px'> 
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='container-fluid'>
                    <div class='collapse navbar-collapse' id='navbarNav'>
                        <div class='navbar-nav'>
                            <a class='mx-2 text-white text-center link-underline link-underline-opacity-0' href='/'>Accueil</a>";
                            //var_dump($_SESSION);
                            if ( !isset($_SESSION["connectionStatus"]) || $_SESSION["connectionStatus"] === 'no'){
                                echo "
                                    <a class='mx-2 text-white text-center link-underline link-underline-opacity-0' href='/users/login'>Se connecter</a>
                                    <a class='mx-2 text-white text-center link-underline link-underline-opacity-0' href='/users/create'>créer un compte</a>";
                            } else {
                                echo "
                                    <a class='mx-2 text-white text-center link-underline link-underline-opacity-0' href='/eleve/ajout_eleve'>Ajouter des élèves</a>
                                    <a class='mx-2 text-white text-center link-underline link-underline-opacity-0' href='/promo/create'>Créer une promotion</a>
                                    <a class='mx-2 text-white text-center link-underline link-underline-opacity-0' href='/users/disconnect'>Déconnexion</a>
                                    ";
                            }
                            echo "</div>
                    </div>
                </div>
            </nav>
        </header>";
        if(isset($_SESSION["prenom_user"]) && isset($_SESSION["nom_user"])){
            echo "<div> Vous êtes connecté en tant que " . $_SESSION["prenom_user"] . " " . $_SESSION["nom_user"] . " </div>";
        }
?>

<?php
//-------- HEADER ----------//
?>

<main class="container">
    
    <?php
    //if(isset($session)) {
    //    echo "<div class='text-black'>" . var_dump($session) . " </div>";
    //}
    if(isset($errorMessage) && !empty($errorMessage)){
        echo "<div class='text-red'>$errorMessage </div>";
    }
    echo $content; ?>
</main>

<?php
//--------- FOOTER --------//
?>

<footer class='bg-body-secondary fixed-bottom text-center text-black'>
    <div class='container text-center'>
        <div class='col'>
            <a class='d-inline text-black link-underline link-underline-opacity-0'  href='/mentionsLegale'> Mentions légales, </a>
            <div class='d-inline'> Contact</div>
        </div>
    </div>
    <div>
        © 2024 Gestion de tâches , tout droits réserver
    </div>
    <div>
        <i class='bi bi-twitter-x'> </i><i class='bi bi-instagram'> </i><i class='bi bi-facebook'></i>
    </div>
</footer>


</html>