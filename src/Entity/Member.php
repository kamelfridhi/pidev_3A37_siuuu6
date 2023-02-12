<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MemberRepository::class)]
class Member
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $points = null;

    #[ORM\ManyToOne(inversedBy: 'members')]
    private ?Team $idteam = null;

    #[ORM\ManyToOne(inversedBy: 'members')]
    private ?Gamer $idgamer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

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

    public function getIdgamer(): ?Gamer
    {
        return $this->idgamer;
    }

    public function setIdgamer(?Gamer $idgamer): self
    {
        $this->idgamer = $idgamer;

        return $this;
    }
}
