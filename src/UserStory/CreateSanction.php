<?php

namespace App\UserStory;

use App\Entity\Sanction;
use App\Entity\Eleve;
use App\Entity\User;
use Doctrine\DBAL\Driver\PDO\Exception;
use Doctrine\ORM\EntityManager;
class CreateSanction
{
    private EntityManager $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function execute(string $id_eleve ,
        string $motif,
        string $description,
        string $nomDemandeur,
        string $date_incident,
        string $dateCreationSanction,
        int $createurSanction)
    {
        //Vérifier que les données sont présentes
        //Si tel n'est pas le cas, lancer une exception
        if (empty($id_eleve) 
            || empty($description) 
            || empty($nomDemandeur ) 
            || empty($date_incident) 
            || empty($dateCreationSanction) 
            || empty($createurSanction ))
        {
            throw  new \Exception("Veuillez renseigner tous les champs");
        }
        $eleveRepository = $this->entityManager->getRepository(Eleve::class);
        $eleve = $eleveRepository->findOneBy(array('id_eleve'=>"$id_eleve"));
        if(empty($eleve)){
            throw new \Exception("L'élève choisie n'existe pas");
        }
        if($date_incident > date("Y-m-d")){
            throw new \Exception("Une erreur est survenu dans le saisie de la date de l'incident");
        }
        $createurSanctionRepository = $this->entityManager->getRepository(User::class);
        $createurSanction = $createurSanctionRepository->findOneBy(array('id'=>"$createurSanction"));


        $sanction = new Sanction();
        $sanction->setIdEleve($eleve);
        $sanction->setNomDemandeur($nomDemandeur);
        $sanction->setMotif($motif);
        $sanction->setDescription($description);
        $sanction->setDateIncident($date_incident);
        $sanction->setDateCreation(new \DateTime($dateCreationSanction));
        $sanction->setIdUser($createurSanction);

        $this->entityManager->persist($sanction);
        $this->entityManager->flush();

        return $sanction;
    }

}