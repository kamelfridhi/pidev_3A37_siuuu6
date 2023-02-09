<?php

namespace App\Entity;

use App\Repository\CommentaireNewsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireNewsRepository::class)]
class CommentaireNews
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idNews = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdNews(): ?int
    {
        return $this->idNews;
    }

    public function setIdNews(int $idNews): self
    {
        $this->idNews = $idNews;

        return $this;
    }

    public function getdescription(): ?string
    {
        return $this->description;
    }

    public function setdescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
