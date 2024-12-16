<?php

namespace App\Controler;

use App\UserStory\CreatePromotion;
use Doctrine\ORM\EntityManager;

class EleveControler extends AbstractControler
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function ajouterEleve(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $promotion = $_REQUEST["promotion"];
            $eleve = $_REQUEST["eleve"];
            $promotion = new CreatePromotion($this->entityManager);

            try{
                $promotion->execute($annee, $libelle);
                $this->redirect('/');
            } catch(\Exception $e){
                $_SESSION["errorMessage"] = $e->getMessage();
            }
        }
    }
}