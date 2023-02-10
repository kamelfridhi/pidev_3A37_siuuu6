<?php

namespace App\Entity;

use App\Repository\ReviewuserjeuxRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewuserjeuxRepository::class)]
class Reviewuserjeux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?user $userid = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?jeux $jeuxid = null;

    #[ORM\Column]
    private ?int $rating = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?user
    {
        return $this->userid;
    }

    public function setUserid(?user $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getJeuxid(): ?jeux
    {
        return $this->jeuxid;
    }

    public function setJeuxid(?jeux $jeuxid): self
    {
        $this->jeuxid = $jeuxid;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }
}
