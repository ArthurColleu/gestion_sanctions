<?php
namespace App\Entity;

use DateTime;
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
    private Eleve $id_eleve;
    
    #[ORM\Column(name: 'nom_demandeur', type: 'string', length: 255)]
    private string $nom_demandeur;

    #[ORM\Column(name: 'motif', type: 'string', length: 255)]
    private string $motif;

    #[ORM\Column(name: 'description', type: 'string')]
    private string $description;

    #[ORM\Column(name: 'date_incident', type: 'date')]
    private \DateTimeInterface  $date_incident;

    #[ORM\Column(name: 'date_creation', type: 'date')]
    private \DateTimeInterface $date_creation;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'id_user',referencedColumnName: 'id_user', nullable: false)]
    protected User $id_user;

    public function getIdSanction(): int
    {
        return $this->id_sanction;
    }

    public function setIdSanction(int $id_sanction): void
    {
        $this->id_sanction = $id_sanction;
    }

    public function getIdEleve(): Eleve
    {
        return $this->id_eleve;
    }

    public function setIdEleve(Eleve $id_eleve): void
    {
        $this->id_eleve = $id_eleve;
    }

    public function getNomDemandeur(): string
    {
        return $this->nom_demandeur;
    }

    public function setNomDemandeur(string $nom_demandeur): void
    {
        $this->nom_demandeur = $nom_demandeur;
    }

    public function getMotif(): string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): void
    {
        $this->motif = $motif;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDateIncident(): \DateTimeInterface
    {
        return $this->date_incident;
    }

    public function setDateIncident(string $date_incident): void
    {
        $this->date_incident = new \DateTime($date_incident);
    }

    public function getDateCreation(): \DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): void
    {
        $this->date_creation =  $date_creation;
    }

    public function getIdUser(): User
    {
        return $this->id_user;
    }

    public function setIdUser(User $id_user): void
    {
        $this->id_user = $id_user;
    }


}