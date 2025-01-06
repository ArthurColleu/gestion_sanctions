<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: 'eleve')]
class Eleve
{
    #[ORM\Id]
    #[ORM\Column(name:'id_eleve', type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id_eleve;
    
    #[ORM\Column(name: 'nom_eleve', type: 'string', length: 50)]
    private string $nom_eleve;

    #[ORM\Column(name: 'prenom_eleve', type: 'string', length: 50)]
    private string $prenom_eleve;

    #[ORM\ManyToOne(targetEntity: Promotion::class)]
    #[ORM\JoinColumn(name: 'id_promotion',referencedColumnName: 'id_promo', nullable: false)]
    protected Promotion $idPromotion;

    public function getIdEleve(): int
    {
        return $this->id_eleve;
    }
    public function setIdEleve(int $id_eleve): void
    {
        $this->id_eleve = $id_eleve;
    }
    public function getPrenomEleve(): string
    {
        return $this->prenom_eleve;
    }
    public function setPrenomEleve(string $prenom_eleve): void
    {
        $this->prenom_eleve = $prenom_eleve;
    }

    public function getIdPromotion(): Promotion
    {
        return $this->idPromotion;
    }

    public function setIdPromotion(Promotion $idPromotion): void
    {
        $this->idPromotion = $idPromotion;
    }

    public function getNomEleve(): string
    {
        return $this->nom_eleve;
    }
    public function setNomEleve(string $nom_eleve): void
    {
        $this->nom_eleve = $nom_eleve;
    }
}
