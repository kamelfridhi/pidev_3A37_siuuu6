<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $iduser = null;

    #[ORM\Column]
    private ?int $idgroupe = null;

    #[ORM\Column(length: 255)]
    private ?string $nompost = null;

    #[ORM\Column(length: 255)]
    private ?string $contenu = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column]
    private ?int $nbr_like = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdgroupe(): ?int
    {
        return $this->idgroupe;
    }

    public function setIdgroupe(int $idgroupe): self
    {
        $this->idgroupe = $idgroupe;

        return $this;
    }

    public function getNompost(): ?string
    {
        return $this->nompost;
    }

    public function setNompost(string $nompost): self
    {
        $this->nompost = $nompost;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

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

    public function getNbrLike(): ?int
    {
        return $this->nbr_like;
    }

    public function setNbrLike(int $nbr_like): self
    {
        $this->nbr_like = $nbr_like;

        return $this;
    }
}
