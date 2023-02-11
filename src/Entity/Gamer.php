<?php

namespace App\Entity;

use App\Repository\GamerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GamerRepository::class)]
class Gamer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 255)]
    private ?string $tag = null;

    #[ORM\OneToMany(mappedBy: 'idGamer', targetEntity: GroupeMembre::class)]
    private Collection $groupeMembres;

    public function __construct()
    {
        $this->groupeMembres = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return Collection<int, GroupeMembre>
     */
    public function getGroupeMembres(): Collection
    {
        return $this->groupeMembres;
    }

    public function addGroupeMembre(GroupeMembre $groupeMembre): self
    {
        if (!$this->groupeMembres->contains($groupeMembre)) {
            $this->groupeMembres->add($groupeMembre);
            $groupeMembre->setIdGamer($this);
        }

        return $this;
    }

    public function removeGroupeMembre(GroupeMembre $groupeMembre): self
    {
        if ($this->groupeMembres->removeElement($groupeMembre)) {
            // set the owning side to null (unless already changed)
            if ($groupeMembre->getIdGamer() === $this) {
                $groupeMembre->setIdGamer(null);
            }
        }

        return $this;
    }
}
