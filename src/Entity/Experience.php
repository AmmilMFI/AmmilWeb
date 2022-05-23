<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ExperienceRepository::class)
 */
class Experience
{
    /**
     * @Groups("profile")
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups("profile")
     * @ORM\Column(type="string", length=255)
     */
    private $experience;

    /**
     * @Groups("profile")
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fromYear;

    /**
     * @Groups("profile")
     * @ORM\Column(type="integer", nullable=true)
     */
    private $toyear;

    /**
     * @Groups("user")
     * @ORM\ManyToOne(targetEntity=Profile::class, inversedBy="experiences")
     */
    private $profile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getFromYear(): ?int
    {
        return $this->fromYear;
    }

    public function setFromYear(int $fromYear): self
    {
        $this->fromYear = $fromYear;

        return $this;
    }

    public function getToyear(): ?int
    {
        return $this->toyear;
    }

    public function setToyear(int $toyear): self
    {
        $this->toyear = $toyear;

        return $this;
    }

    public function getProfile(): ?Profile
    {
        return $this->profile;
    }

    public function setProfile(?Profile $Profile): self
    {
        $this->profile = $Profile;

        return $this;
    }
}
