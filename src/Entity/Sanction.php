<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: 'sanctions')]
class Sanction{

    #[ORM\Id]
    #[ORM\Column(name:'id_sanction', type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id_sanction;

    #[ORM\ManyToOne(targetEntity: Eleve::class)]
    #[ORM\JoinColumn(name: 'id_eleve',referencedColumnName: 'id_eleve', nullable: false)]
    protected Promotion $id_eleve;
    
    #[ORM\Column(name: 'nom_demandeur', type: 'string', length: 255)]
    protected Promotion $nom_demandeur;

    #[ORM\Column(name: 'motif', type: 'string', length: 255)]
    protected Promotion $motif;

    #[ORM\Column(name: 'description', type: 'string')]
    protected Promotion $description;

    #[ORM\Column(name: 'date_incident', type: 'date')]
    protected Promotion $date_incident;

    #[ORM\Column(name: 'date_creation', type: 'date')]
    protected Promotion $date_creation;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'id_user',referencedColumnName: 'id_user', nullable: false)]
    protected Promotion $id_user;

    public function getIdSanction(): int
    {
        return $this->id_sanction;
    }

    public function setIdSanction(int $id_sanction): void
    {
        $this->id_sanction = $id_sanction;
    }

    public function getIdEleve(): Promotion
    {
        return $this->id_eleve;
    }

    public function setIdEleve(Promotion $id_eleve): void
    {
        $this->id_eleve = $id_eleve;
    }

    public function getNomDemandeur(): Promotion
    {
        return $this->nom_demandeur;
    }

    public function setNomDemandeur(Promotion $nom_demandeur): void
    {
        $this->nom_demandeur = $nom_demandeur;
    }

    public function getMotif(): Promotion
    {
        return $this->motif;
    }

    public function setMotif(Promotion $motif): void
    {
        $this->motif = $motif;
    }

    public function getDescription(): Promotion
    {
        return $this->description;
    }

    public function setDescription(Promotion $description): void
    {
        $this->description = $description;
    }

    public function getDateIncident(): Promotion
    {
        return $this->date_incident;
    }

    public function setDateIncident(Promotion $date_incident): void
    {
        $this->date_incident = $date_incident;
    }

    public function getDateCreation(): Promotion
    {
        return $this->date_creation;
    }

    public function setDateCreation(Promotion $date_creation): void
    {
        $this->date_creation = $date_creation;
    }

    public function getIdUser(): Promotion
    {
        return $this->id_user;
    }

    public function setIdUser(Promotion $id_user): void
    {
        $this->id_user = $id_user;
    }

}