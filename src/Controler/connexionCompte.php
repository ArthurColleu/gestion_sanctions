<?php
$entityManager = require_once __DIR__ . '/../../config/bootstrap.php';

use App\Utilitaire\Vue;
use App\Entity\User;

$Vue = new Vue();
$Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());
$Vue->addToCorps(new App\Vues\Vue_Connexion());
$Vue->setBasDePage(new \App\Vues\Vue_footer());

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérifier si les champs email et mot de passe sont renseignés
    if (!empty($_POST["connexionEmail"]) && !empty($_POST["connexionPassword"])) {
        $email = trim($_POST["connexionEmail"]);
        $password = trim($_POST["connexionPassword"]);

        $connexion = new App\UserStory\ConnexionAccount($entityManager);

        try {
            $connexion->connexion($email, $password);

            $repository = $entityManager->getRepository(User::class);
            $user = $repository->findOneBy(["email" => $email]);

            if ($user) {
                $_SESSION["prenom"] = $user->getPrenom();
                $_SESSION["nom"] = $user->getNom();

                $Vue = new Vue();
                $Vue->setMenu(new \App\Vues\Vue_Menu_Connecter());
                echo "<div class='text-white bg-black'>Vous êtes connecté en tant que {$_SESSION['prenom']} {$_SESSION['nom']}</div>";
                $Vue->addToCorps(new App\Vues\Vue_accueil());
            } else {
                echo "<div class='text-danger'>Utilisateur non trouvé.</div>";
            }
        } catch (\Exception $e) {
            echo "<div class='text-danger'>Erreur : " . $e->getMessage() . "</div>";
        }
    }
    else {
        echo "<div class='text-danger'>Veuillez remplir tous les champs.</div>";
    }
}
