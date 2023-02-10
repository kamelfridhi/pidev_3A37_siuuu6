<?php

namespace App\Entity;

use App\Repository\CommentairenewsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentairenewsRepository::class)]
class Commentairenews
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?news $newsid = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?user $userid = null;

    #[ORM\Column(length: 255)]
    private ?string $descrition = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNewsid(): ?news
    {
        return $this->newsid;
    }

    public function setNewsid(?news $newsid): self
    {
        $this->newsid = $newsid;

        return $this;
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

    public function getDescrition(): ?string
    {
        return $this->descrition;
    }

    public function setDescrition(string $descrition): self
    {
        $this->descrition = $descrition;

        return $this;
    }
}
