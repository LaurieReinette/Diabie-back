<?php

namespace App\Entity;

use App\Repository\BloodsugarRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=BloodsugarRepository::class)
 */
class Bloodsugar
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"apiv0"})
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Groups({"apiv0"})
     */
    private $rate;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="bloodsugars")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups({"apiv0"})
     */
    private $correction;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"apiv0"})
     */
    private $corrected;

    /**
     * @ORM\Column(type="string", length=30)
     * @Groups({"apiv0"})
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=30)
     * @Groups({"apiv0"})
     */
    private $time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCorrection(): ?string
    {
        return $this->correction;
    }

    public function setCorrection(?string $correction): self
    {
        $this->correction = $correction;

        return $this;
    }

    public function getCorrected(): ?bool
    {
        return $this->corrected;
    }

    public function setCorrected(bool $corrected): self
    {
        $this->corrected = $corrected;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }
}
