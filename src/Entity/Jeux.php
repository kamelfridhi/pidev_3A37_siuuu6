<?php

namespace App\Entity;

use App\Repository\JeuxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JeuxRepository::class)]
class Jeux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $NomGame = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $data_ajout = null;

    #[ORM\Column]
    private ?int $max_joueurs = null;

    #[ORM\Column]
    private ?float $prix_jeux = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGame(): ?string
    {
        return $this->NomGame;
    }

    public function setNomGame(string $NomGame): self
    {
        $this->NomGame = $NomGame;

        return $this;
    }

    public function getDataAjout(): ?\DateTimeInterface
    {
        return $this->data_ajout;
    }

    public function setDataAjout(\DateTimeInterface $data_ajout): self
    {
        $this->data_ajout = $data_ajout;

        return $this;
    }

    public function getMaxJoueurs(): ?int
    {
        return $this->max_joueurs;
    }

    public function setMaxJoueurs(int $max_joueurs): self
    {
        $this->max_joueurs = $max_joueurs;

        return $this;
    }

    public function getPrixJeux(): ?float
    {
        return $this->prix_jeux;
    }

    public function setPrixJeux(float $prix_jeux): self
    {
        $this->prix_jeux = $prix_jeux;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
