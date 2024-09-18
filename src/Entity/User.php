<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $cities = null;

    #[ORM\Column(length: 50)]
    private ?string $os = null;

    #[ORM\Column(length: 50)]
    private ?string $gender = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCities(): ?string
    {
        return $this->cities;
    }

    public function setCities(string $cities): static
    {
        $this->cities = $cities;

        return $this;
    }

    public function getOs(): ?string
    {
        return $this->os;
    }

    public function setOs(string $os): static
    {
        $this->os = $os;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }
}
