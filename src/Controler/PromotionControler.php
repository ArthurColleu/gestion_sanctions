<?php

namespace App\Controler;
use App\Entity\Promotion;
use App\UserStory\CreatePromotion;
use Doctrine\ORM\EntityManager;

class PromotionControler extends AbstractControler
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function createPromo(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $annee = $_REQUEST["annee"];
            $libelle = $_REQUEST["libelle"];
            $promotion = new CreatePromotion($this->entityManager);

            try{
                $promotion->execute($annee, $libelle);
                $this->redirect('/');
            } catch(\Exception $e){
                $_SESSION["errorMessage"] = $e->getMessage();
            }
        }
        $this->render('/promo/create');
        unset($_SESSION["errorMessage"]);

    }

    public function afficherPromotion(): array{
        return $this->entityManager->getRepository(Promotion::class)->findAll();
    }
}