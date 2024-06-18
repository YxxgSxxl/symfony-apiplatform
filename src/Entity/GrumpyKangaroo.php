<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\GrumpyKangarooRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GrumpyKangarooRepository::class)]
#[ApiResource]
class GrumpyKangaroo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?int $age = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $bornAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $diedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(string $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getBornAt(): ?\DateTimeImmutable
    {
        return $this->bornAt;
    }

    public function setBornAt(\DateTimeImmutable $bornAt): static
    {
        $this->bornAt = $bornAt;

        return $this;
    }

    public function getDiedAt(): ?\DateTimeImmutable
    {
        return $this->diedAt;
    }

    public function setDiedAt(\DateTimeImmutable $diedAt): static
    {
        $this->diedAt = $diedAt;

        return $this;
    }
}
