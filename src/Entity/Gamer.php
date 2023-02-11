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


    #[ORM\OneToMany(mappedBy: 'id_gamer', targetEntity: HistoriqueAchat::class)]
    private Collection $historiqueAchats;

    #[ORM\OneToMany(mappedBy: 'idGamer', targetEntity: Planning::class)]
    private Collection $plannings;

    #[ORM\OneToMany(mappedBy: 'idGamer', targetEntity: UserCourses::class)]
    private Collection $userCourses;

    public function __construct()
    {
        $this->historiqueAchats = new ArrayCollection();

        $this->plannings = new ArrayCollection();
        $this->userCourses = new ArrayCollection();

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

     * @return Collection<int, HistoriqueAchat>
     */
    public function getHistoriqueAchats(): Collection
    {
        return $this->historiqueAchats;
    }

    public function addHistoriqueAchat(HistoriqueAchat $historiqueAchat): self
    {
        if (!$this->historiqueAchats->contains($historiqueAchat)) {
            $this->historiqueAchats->add($historiqueAchat);
            $historiqueAchat->setIdGamer($this);

        }

        return $this;
    }


    public function removeHistoriqueAchat(HistoriqueAchat $historiqueAchat): self
    {
        if ($this->historiqueAchats->removeElement($historiqueAchat)) {
            // set the owning side to null (unless already changed)
            if ($historiqueAchat->getIdGamer() === $this) {
                $historiqueAchat->setIdGamer(null);

            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Planning>
     */
    public function getPlannings(): Collection
    {
        return $this->plannings;
    }

    public function addPlanning(Planning $planning): self
    {
        if (!$this->plannings->contains($planning)) {
            $this->plannings->add($planning);
            $planning->setIdGamer($this);
        }

        return $this;
    }

    public function removePlanning(Planning $planning): self
    {
        if ($this->plannings->removeElement($planning)) {
            // set the owning side to null (unless already changed)
            if ($planning->getIdGamer() === $this) {
                $planning->setIdGamer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, UserCourses>
     */
    public function getUserCourses(): Collection
    {
        return $this->userCourses;
    }

    public function addUserCourse(UserCourses $userCourse): self
    {
        if (!$this->userCourses->contains($userCourse)) {
            $this->userCourses->add($userCourse);
            $userCourse->setIdGamer($this);
        }

        return $this;
    }

    public function removeUserCourse(UserCourses $userCourse): self
    {
        if ($this->userCourses->removeElement($userCourse)) {
            // set the owning side to null (unless already changed)
            if ($userCourse->getIdGamer() === $this) {
                $userCourse->setIdGamer(null);
            }
        }

        return $this;
    }
}
