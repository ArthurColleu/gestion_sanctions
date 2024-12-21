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
    public function ajoutEleve($promotion , $ListeElevesCSV){
        if(empty($promotion) && empty($ListeElevesCSV)){
            throw new \Exception("Veuillez remplir tous les champ du formulaire");
        }

        //load the CSV document from a file path
        $csv = Reader::createFromPath($ListeElevesCSV, 'r');
        $csv->setHeaderOffset(0);

        $ListeEleves=iterator_to_array($csv,true);
        $eleves=new Eleve();
        foreach($ListeEleves as $eleve){
            $eleves->setPrenomEleve($eleve["Prénom"]);
            $eleves->setNomEleve($eleve["Nom"]);
            $eleve->setIdPromotion($promotion);
        }
    }
}