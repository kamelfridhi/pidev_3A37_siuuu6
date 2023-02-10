<?php

namespace App\Entity;

use App\Repository\GroupeMembreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupeMembreRepository::class)]
class GroupeMembre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $DateRejoindre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRejoindre(): ?\DateTimeInterface
    {
        return $this->DateRejoindre;
    }

    public function setDateRejoindre(\DateTimeInterface $DateRejoindre): self
    {
        $this->DateRejoindre = $DateRejoindre;

        return $this;
    }
}
