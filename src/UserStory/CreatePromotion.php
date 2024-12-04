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
        //Vérifier que les données sont présentes
        //Si tel n'est pas le cas, lancer une exception
        if (empty($libelle) || empty($annee)) {
            throw  new \Exception("Veuillez renseigner tous les champs");
        }


    }

}