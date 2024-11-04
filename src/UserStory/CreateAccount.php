<?php

namespace App\UserStory;

use App\Entity\User;
use Doctrine\DBAL\Driver\PDO\Exception;
use Doctrine\ORM\EntityManager;

class CreateAccount
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        //L'EntityManager est injecté par dépendance
        $this->entityManager = $entityManager;
    }

    //Cette méthode permettra d'exécuter la user story
    public function execute(string $pseudo, string $email, string $password){
        //Vérifier que les données sont présentes
        //Si tel n'est pas le cas, lancer une exception
        if (empty($pseudo) || empty($email) || empty($password)){
            throw new Exception("Veuillez entrer tous les champs");
        }
        //Verifier si l'email est valide
        //Si tel n'est pas le cas, lancer une exception

        //Verifier si le pseudo est entre 2 et 50 caractères, lancer une exception
        //Si tel n'est pas le cas, lancer une exception

        //Verifier si le mot de passe est sécurisé, lancer une exception
        //Si tel n'est pas le cas, lancer une exception
        if (strlen($password)<8){
            throw new Exception("Le mot de passe doit contenir au moins 8 caractères");
        }

        //Verifier si l'unicité de l'email
        //Si tel n'est pas le cas, lancer une exception

        //Insérer les données dans la base de données
        // 1.Hash le mot de passe
        $password = password_hash($password, PASSWORD_DEFAULT);

        // 2.Créer une instance de classe User
        $user = new User(); //setter
        $user->setPseudo($pseudo);
        $user->setEmail($email);
        $user->setPassword($password);

        // 3.Persist l'instance en utilisannt l'EntityManager
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        // Envoi du mail de confirmation
        echo "Un mail à été envoyé à l'utilisateur";

        return $user;
    }

}