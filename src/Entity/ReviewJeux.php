<?php

namespace App\Entity;

use App\Repository\ReviewJeuxRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewJeuxRepository::class)]
class ReviewJeux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idGamer = null;

    #[ORM\Column]
    private ?int $idJeux = null;

    #[ORM\Column]
    private ?float $rating = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdGamer(): ?int
    {
        return $this->idGamer;
    }

    public function setIdGamer(int $idGamer): self
    {
        $this->idGamer = $idGamer;

        return $this;
    }

    public function getIdJeux(): ?int
    {
        return $this->idJeux;
    }

    public function setIdJeux(int $idJeux): self
    {
        $this->idJeux = $idJeux;

        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }
}
