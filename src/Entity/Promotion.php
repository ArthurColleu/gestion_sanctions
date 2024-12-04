<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'promotions')]
class Promotion
{
    #[ORM\Id]
    #[ORM\Column(name: 'libelle', type: 'string', length: 255)]
    private string $Libelle;
    #[ORM\Column(name: 'annee', type: 'string', length: 10)]
    private string $annee;

    public function getLibelle(): string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): void
    {
        $this->Libelle = $Libelle;
    }

    public function getAnnee(): string
    {
        return $this->annee;
    }

    public function setAnnee(string $annee): void
    {
        $this->annee = $annee;
    }
}