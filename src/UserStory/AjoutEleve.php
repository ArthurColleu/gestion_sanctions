<?php

namespace App\UserStory;

use App\Entity\Eleve;
use App\Entity\Promotion;
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
        if(empty($promotion) || empty($ListeElevesCSV)){
            throw new \Exception("Veuillez remplir tous les champ du formulaire");
        }
        $promotion = explode( " - ",$promotion);
        $promotionRepository = $this->entityManager->getRepository(Promotion::class);
        $promotion = $promotionRepository->findOneBy(array('libelle'=>"$promotion[0]", "annee"=>$promotion[1]));
        //var_dump($promotion);
        //load the CSV document from a file path
        $csv = Reader::createFromPath($ListeElevesCSV);
        $csv->setHeaderOffset(0);
        $ListeEleves=iterator_to_array($csv,true);
        //return $ListeEleves;
        //var_dump($ListeEleves);

        foreach ($ListeEleves as $eleve) {
            $eleveExistant = $this->entityManager->getRepository(Eleve::class)->findOneBy([
                'prenom_eleve' => $eleve["Prénom"],
                'nom_eleve' => $eleve["Nom"],
                'idPromotion' => $promotion
            ]);
    
            if ($eleveExistant) {
                $elevesExistant[] = "{$eleve["Prénom"]} {$eleve["Nom"]}";
            }
        }

        if (!empty($elevesExistant)) {
            $elevesListe = implode("<br>- ", $elevesExistant);
            throw new \Exception("Les élèves suivants sont déjà enregistrés dans cette promotion :<br>- $elevesListe.");
        }

        foreach($ListeEleves as $eleve){
            $eleves=new Eleve();
            $eleves->setPrenomEleve($eleve["Prénom"]);
            $eleves->setNomEleve($eleve["Nom"]);
            $eleves->setIdPromotion($promotion);

            $this->entityManager->persist($eleves);
        }
        $this->entityManager->flush();
    }
}