<?php

namespace App\UserStory;

use App\Entity\Promotion;
use Doctrine\DBAL\Driver\PDO\Exception;
use Doctrine\ORM\EntityManager;
class CreatePromotion
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function execute(string $annee, string $libelle)
    {
        $promotionsVerif = $this->entityManager->getRepository(Promotion::class);

        //Vérifier que les données sont présentes
        //Si tel n'est pas le cas, lancer une exception
        if (empty($libelle) || empty($annee)) {
            throw  new \Exception("Veuillez renseigner tous les champs");
        }
        //Vérifier que la date ne contient que des chiffre
        //Si tel est le cas, lancer une exception
        if (!preg_match( '/[0-9]/', $annee) && $annee <= 0){
            throw  new \Exception("Veuillez une date valide");
        }
        //Vérifier que la promotions existe déjà
        //Si tel n'est pas le cas, lancer une exception
        if ($promotionsVerif->findOneBy(['annee' => $annee]) && $promotionsVerif->findOneBy(['libelle' => $libelle])) {
            throw new \Exception("Cette promotion existe déjà");
        }

        $promotion = new Promotion();
        $promotion->setLibelle($libelle);
        $promotion->setAnnee($annee);

        $this->entityManager->persist($promotion);
        $this->entityManager->flush();

        $_SESSION["msg_Creation_Promotion"] = "Création de promotion réussie";
        return $promotion;
    }

}