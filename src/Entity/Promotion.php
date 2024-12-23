<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'promotions')]
class Promotion
{
    #[ORM\Id]
    #[ORM\Column(name:'id_promo', type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id_promo;
    #[ORM\Column(name: 'libelle_promo', type: 'string', length: 255)]
    private string $libelle;
    #[ORM\Column(name: 'annee_promo', type: 'string', length: 10)]
    private string $annee;

    public function getIdPromo(): int
    {
        return $this->id_promo;
    }

    public function setIdPromo(int $id_promo): void
    {
        $this->id_promo = $id_promo;
    }

    public function getAnnee(): string
    {
        return $this->annee;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

    public function setAnnee(string $annee): void
    {
        $this->annee = $annee;
    }
}