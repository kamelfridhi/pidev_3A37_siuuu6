<?php

namespace App\Entity;

use App\Repository\TournoiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TournoiRepository::class)]
class Tournoi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nb_team = null;

    #[ORM\Column]
    private ?int $nb_joueur_team = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbTeam(): ?int
    {
        return $this->nb_team;
    }

    public function setNbTeam(int $nb_team): self
    {
        $this->nb_team = $nb_team;

        return $this;
    }

    public function getNbJoueurTeam(): ?int
    {
        return $this->nb_joueur_team;
    }

    public function setNbJoueurTeam(int $nb_joueur_team): self
    {
        $this->nb_joueur_team = $nb_joueur_team;

        return $this;
    }
}
