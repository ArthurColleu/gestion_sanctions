<?php

namespace App\Controler;
use App\Entity\Sanction;
use DateTime;
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
            $id_eleve = $_POST["eleve"];
            $motif = $_POST["motif"];
            $description = $_POST["description"];
            $nomDemandeur= $_POST["demandeur"];
            $date_incident= $_POST["date_incident"];
            //gettype($date_incident);
            $dateCreationSanction =  date("Y-m-d");
            $createurSanction = $_SESSION["id_user"];

            $promotion = new \App\UserStory\CreateSanction($this->entityManager);
            
            try{
                $promotion->execute($id_eleve,$motif,$description,$nomDemandeur,
                $date_incident,$dateCreationSanction,$createurSanction);

                $this->redirect('/');
            } catch(\Exception $e){
                $_SESSION["errorMessage"] = $e->getMessage();
            }
        }
        $this->render('/sanction/createSanction');
        unset($_SESSION["errorMessage"]);
    }

    public function afficherSanction(): array{
        return $this->entityManager->getRepository(Sanction::class)->findAll();
    }
}