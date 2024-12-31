<?php

namespace App\Controler;
use App\Entity\Sanction;
use Doctrine\ORM\EntityManager;

class SanctionControler extends AbstractControler
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function createSanction(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $annee = $_REQUEST["annee"];
            $libelle = $_REQUEST["libelle"];
            $promotion = new CreateSanction($this->entityManager);

            try{
                //$promotion->execute($annee, $libelle);
                //$this->redirect('/');
            } catch(\Exception $e){
                $_SESSION["errorMessage"] = $e->getMessage();
            }
        }
        $this->render('/promo/createSanction');
        unset($_SESSION["errorMessage"]);

    }

    public function afficherPromotion(): array{
        return $this->entityManager->getRepository(Sanction::class)->findAll();
    }
}