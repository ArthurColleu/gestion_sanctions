<?php

namespace App\Controler;

use App\UserStory\AjoutEleve;
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
            $eleve = $_REQUEST["eleves"];
            $listeEleves = new AjoutEleve($this->entityManager);

            try{
                $listeEleves->ajoutEleve($promotion, $eleve);
            } catch(\Exception $e){
                $_SESSION["errorMessage"] = $e->getMessage();
            }
        }
        $this->render("eleve/ajout_eleve");
    }
}