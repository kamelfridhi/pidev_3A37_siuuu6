<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idowner = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_team = null;

    #[ORM\Column]
    private ?int $nb_joueurs = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdowner(): ?int
    {
        return $this->idowner;
    }

    public function setIdowner(int $idowner): self
    {
        $this->idowner = $idowner;

        return $this;
    }

    public function getNomTeam(): ?string
    {
        return $this->nom_team;
    }

    public function setNomTeam(string $nom_team): self
    {
        $this->nom_team = $nom_team;

        return $this;
    }

    public function getNbJoueurs(): ?int
    {
        return $this->nb_joueurs;
    }

    public function setNbJoueurs(int $nb_joueurs): self
    {
        $this->nb_joueurs = $nb_joueurs;

        return $this;
    }
}
