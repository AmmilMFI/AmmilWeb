<?php

namespace App\Entity;

use App\Repository\EducationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=EducationRepository::class)
 */
class Education
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
    private $degree;

    /**
     * @Groups("user")
     * @ORM\ManyToOne(targetEntity=Profile::class, inversedBy="education")
     */
    private $profile;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yearObtained;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDegree(): ?string
    {
        return $this->degree;
    }

    public function setDegree(string $degree): self
    {
        $this->degree = $degree;

        return $this;
    }


    public function getProfile(): ?Profile
    {
        return $this->profile;
    }

    public function setProfile(?Profile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getYearObtained(): ?int
    {
        return $this->yearObtained;
    }

    public function setYearObtained(int $yearObtained): self
    {
        $this->yearObtained = $yearObtained;

        return $this;
    }
}
