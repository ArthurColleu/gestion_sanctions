<?php

namespace App\UserStory;

use App\Entity\Eleve;
use Doctrine\ORM\EntityManager;
use League\Csv\Reader;

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
        if(empty($promotion) && empty($eleve)){
            throw new \Exception("Veuillez remplir tous les champ du formulaire");
        }

        //load the CSV document from a file path
        $csv = Reader::createFromPath($eleve, 'r');
        $csv->setHeaderOffset(0);

        $eleves=iterator_to_array($csv,true);

        $eleve = new Eleve();
        foreach ($eleves as $eleve) {

        }
    }
}