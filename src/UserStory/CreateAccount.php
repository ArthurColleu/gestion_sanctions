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
    public function execute(string $nom,string $prenom, string $email, string $password, string $confirmPassword){
        //Vérifier que les données sont présentes
        //Si tel n'est pas le cas, lancer une exception
        if (empty($nom) ||empty($prenom) || empty($email) || empty($password) || empty($confirmPassword)){
            throw new Exception("Veuillez entrer tous les champs");
        }
        //Verifier si l'email est valide
        //Si tel n'est pas le cas, lancer une exception
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new Exception("Veuillez entrer un mail valide");
        }
        //Verifier si le mot de passe est au moins 8 caractères, lancer une exception
        //Si tel n'est pas le cas, lancer une exception
        if (strlen($password)<8){
            throw new Exception("Le mot de passe doit contenir au moins 8 caractères");
        }
        //Verifier si le mot de passe est valide
        //Si tel n'est pas le cas, lancer une exception
        if ($password != $confirmPassword){
            throw new Exception("Les mots de passe ne correspondent pas");
        }

        //Verifier si le mot de passe est sécurisé, lancer une exception
        //Si tel n'est pas le cas, lancer une exception
        if (!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $password)){
            throw new Exception("Votre mot de passe doit contenir au moins une minuscule, une majuscule , un chiffre et un caractères spéciale.");
        }
        //Verifier si l'unicité de l'email
        //Si tel n'est pas le cas, lancer une exception
        $verifEmail = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        if ($verifEmail){
            throw new Exception("l'email est déjà utilisé");
        }
        //Insérer les données dans la base de données
        // 1.Hash le mot de passe
        $password = password_hash($password, PASSWORD_DEFAULT);

        // 2.Créer une instance de classe User
        $user = new User(); //setter
        $user->setNom($nom);
        $user->setPrenom($prenom);
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