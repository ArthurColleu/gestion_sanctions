<?php

namespace App\Controler;
use App\UserStory;

class ConnexionControler extends BaseControler
{
    public function login(): void
    {
        if (!empty($_POST["connexionEmail"]) && !empty($_POST["connexionPassword"])) {
            $email = trim($_POST["connexionEmail"]);
            $password = trim($_POST["connexionPassword"]);

            $connexion = new ConnexionAccount($this->entityManager);

            try {
                $connexion->connexion($email, $password);

                $repository = $this->entityManager->getRepository(User::class);
                $user = $repository->findOneBy(["email" => $email]);

                if ($user) {
                    $_SESSION["prenom"] = $user->getPrenom();
                    $_SESSION["nom"] = $user->getNom();
                }
            } catch (\Exception $e) {
                echo "<div class='text-danger'>Erreur : " . $e->getMessage() . "</div>";
            }
        }
    }
}