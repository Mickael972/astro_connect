<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SkyMapcacheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkyMapcacheRepository::class)]
#[ApiResource]
class SkyMapcache
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $jsonData = null;

    #[ORM\ManyToOne(inversedBy: 'skyMapcaches')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getJsonData(): ?string
    {
        return $this->jsonData;
    }

    public function setJsonData(string $jsonData): static
    {
        $this->jsonData = $jsonData;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
