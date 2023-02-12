<?php

namespace App\Entity;

use App\Repository\ClassementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClassementRepository::class)]
class Classement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $score = null;

    #[ORM\ManyToOne(inversedBy: 'classements')]
    private ?Tournoi $idtournoi = null;

    #[ORM\ManyToOne(inversedBy: 'classements')]
    private ?Team $idteam = null;

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(float $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getIdtournoi(): ?Tournoi
    {
        return $this->idtournoi;
    }

    public function setIdtournoi(?Tournoi $idtournoi): self
    {
        $this->idtournoi = $idtournoi;

        return $this;
    }

    public function getIdteam(): ?Team
    {
        return $this->idteam;
    }

    public function setIdteam(?Team $idteam): self
    {
        $this->idteam = $idteam;

        return $this;
    }
}
