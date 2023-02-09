<?php

namespace App\Entity;

use App\Repository\HistoriqueAchatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoriqueAchatRepository::class)]
class HistoriqueAchat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idProduit = null;

    #[ORM\Column]
    private ?int $idGamer = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_dachat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function setIdProduit(int $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
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

    public function getDateDachat(): ?\DateTimeInterface
    {
        return $this->date_dachat;
    }

    public function setDateDachat(\DateTimeInterface $date_dachat): self
    {
        $this->date_dachat = $date_dachat;

        return $this;
    }
}
