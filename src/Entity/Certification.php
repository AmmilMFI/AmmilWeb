<?php

namespace App\Entity;

use App\Repository\CertificationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CertificationRepository::class)
 */
class Certification
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
    private $issuer;

    /**
     * @Groups("profile")
     * @ORM\Column(type="string", length=255)
     */
    private $certification;

    /**
     * @Groups("user")
     * @ORM\ManyToOne(targetEntity=Profile::class, inversedBy="certifications")
     */
    private $profile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIssuer(): ?string
    {
        return $this->issuer;
    }

    public function setIssuer(string $issuer): self
    {
        $this->issuer = $issuer;

        return $this;
    }

    public function getCertification(): ?string
    {
        return $this->certification;
    }

    public function setCertification(string $certification): self
    {
        $this->certification = $certification;

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
}
