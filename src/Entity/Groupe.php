<?php

namespace App\Entity;

use App\Repository\GroupeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupeRepository::class)]
class Groupe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_groupe = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $nbr_user = null;

    #[ORM\Column]
    private ?int $nbr_max = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGroupe(): ?string
    {
        return $this->Nom_groupe;
    }

    public function setNomGroupe(string $Nom_groupe): self
    {
        $this->Nom_groupe = $Nom_groupe;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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

    public function getNbrUser(): ?int
    {
        return $this->nbr_user;
    }

    public function setNbrUser(int $nbr_user): self
    {
        $this->nbr_user = $nbr_user;

        return $this;
    }

    public function getNbrMax(): ?int
    {
        return $this->nbr_max;
    }

    public function setNbrMax(int $nbr_max): self
    {
        $this->nbr_max = $nbr_max;

        return $this;
    }
}
