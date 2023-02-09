<?php

namespace App\Entity;

use App\Repository\CoachRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoachRepository::class)]
class Coach
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $etat = null;

    #[ORM\Column(nullable: true)]
    private ?float $review = null;

    #[ORM\Column]
    private ?float $prix_heure = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getReview(): ?float
    {
        return $this->review;
    }

    public function setReview(?float $review): self
    {
        $this->review = $review;

        return $this;
    }

    public function getPrixHeure(): ?float
    {
        return $this->prix_heure;
    }

    public function setPrixHeure(float $prix_heure): self
    {
        $this->prix_heure = $prix_heure;

        return $this;
    }
}
