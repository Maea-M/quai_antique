<?php

namespace App\Entity;

use App\Repository\OpenHourRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpenHourRepository::class)]
class OpenHour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $open_time = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOpenTime(): ?string
    {
        return $this->open_time;
    }

    public function setOpenTime(string $open_time): self
    {
        $this->open_time = $open_time;

        return $this;
    }
}
