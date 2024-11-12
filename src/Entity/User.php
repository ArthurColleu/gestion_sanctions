<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\Column(name: 'id_user', type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;
    #[ORM\Column(name: 'nom_user', type: 'string', length: 50)]
    private string $nom;
    #[ORM\Column(name: 'prenom_user', type: 'string', length: 50)]
    private string $prenom;
    #[ORM\Column(name: 'email_user', type: 'string', length: 100, unique: true)]
    private string $email;
    #[ORM\Column(name: 'password_user', type: 'string')]
    private string $password;

    public function getPrenom(): string
    {
        return $this->prenomUser;
    }

    public function setPrenom(string $prenomUser): void
    {
        $this->prenomUser = $prenomUser;
    }

    public function getNom(): string
    {
        return $this->nomUser;
    }

    public function setNom(string $nomUser): void
    {
        $this->nomUser = $nomUser;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function authenticate(string $password, callable $checkHash): bool
    {
        return $checkHash($password, $this->password);
    }

}