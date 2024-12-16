<?php

namespace App\UserStory;

use App\Entity\Eleve;
use Doctrine\ORM\EntityManager;

class AjoutEleve
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
    public function ajoutEleve($promotion , $eleve){

    }
}