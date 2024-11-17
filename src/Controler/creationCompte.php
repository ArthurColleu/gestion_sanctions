<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\UserStory\CreateAccount;
use App\Utilitaire\Vue;

class CreateAccountController extends AbstractController
{
    #[Route('/create-account', name: 'create_account', methods: ['GET', 'POST'])]
    public function createAccount(Request $request, CreateAccount $account): Response
    {
        // Initialisation de la vue
        $Vue = new Vue();
        $Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());
        $Vue->setBasDePage(new \App\Vues\Vue_footer());
        $Vue->addToCorps(new \App\Vues\Vue_creationCompte());

        if ($request->isMethod('POST')) {
            // Récupération des données du formulaire
            $email = $request->request->get('email');
            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $password = $request->request->get('password');
            $verifPassword = $request->request->get('confirmePassword');

            try {
                // Exécution de la logique métier pour créer un compte
                $account->execute($nom, $prenom, $email, $password, $verifPassword);

                // Mise à jour de la vue en cas de succès
                $Vue->setMenu(new \App\Vues\Vue_Menu_Connecter());
                $Vue->addToCorps(new \App\Vues\Vue_Connexion());

                // Message de succès
                $this->addFlash('success', 'Création de compte terminée.');
            } catch (\Exception $e) {
                // Message d'erreur
                $this->addFlash('error', $e->getMessage());
            }
        }

        // Rendu de la vue
        return $this->render('create_account.html.twig', [
            'vue' => $Vue,
        ]);
    }
}

