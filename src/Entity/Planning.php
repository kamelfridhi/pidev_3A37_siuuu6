<?php

namespace App\Entity;

use App\Repository\PlanningRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanningRepository::class)]
class Planning
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $urlMeet = null;

    #[ORM\Column]
    private ?bool $etat = null;

    #[ORM\Column]
    private ?int $nbreHeureSeance = null;

    #[ORM\Column(nullable: true)]
    private ?int $prixHeure = null;

    #[ORM\ManyToOne(inversedBy: 'plannings')]
    private ?Gamer $idGamer = null;

    #[ORM\ManyToOne(inversedBy: 'plannings')]
    private ?Coach $idCoach = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getUrlMeet(): ?string
    {
        return $this->urlMeet;
    }

    public function setUrlMeet(?string $urlMeet): self
    {
        $this->urlMeet = $urlMeet;

        return $this;
    }

    public function isEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getNbreHeureSeance(): ?int
    {
        return $this->nbreHeureSeance;
    }

    public function setNbreHeureSeance(int $nbreHeureSeance): self
    {
        $this->nbreHeureSeance = $nbreHeureSeance;

        return $this;
    }

    public function getPrixHeure(): ?int
    {
        return $this->prixHeure;
    }

    public function setPrixHeure(?int $prixHeure): self
    {
        $this->prixHeure = $prixHeure;

        return $this;
    }

    public function getIdGamer(): ?Gamer
    {
        return $this->idGamer;
    }

    public function setIdGamer(?Gamer $idGamer): self
    {
        $this->idGamer = $idGamer;

        return $this;
    }

    public function getIdCoach(): ?Coach
    {
        return $this->idCoach;
    }

    public function setIdCoach(?Coach $idCoach): self
    {
        $this->idCoach = $idCoach;

        return $this;
    }
}
