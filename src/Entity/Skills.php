<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillsRepository::class)]
class Skills
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idCoach = null;

    #[ORM\Column]
    private ?int $idJeux = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCoach(): ?int
    {
        return $this->idCoach;
    }

    public function setIdCoach(int $idCoach): self
    {
        $this->idCoach = $idCoach;

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

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }
}
