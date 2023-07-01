<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null; 

    #[Assert\Length( 
        min: 2,
        max: 60,
        minMessage: 'Le nom de la réservation doit dépasser {{ limit }} caractères',
        maxMessage: 'Le nom de la réservation ne doit pas dépasser {{ limit }} caractères',
    )]
    #[Assert\Regex(pattern: "/^[a-zA-ZÀ-ÿ -]+$/", message: "Le nom de la réservation ne peut contenir uniquement des lettres")]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[Assert\Range(
        min: 1,
        max: 15,
        notInRangeMessage: 'Vous devez au minimum être {{ min }} et {{ max }} au maximum pour la réservation',
    )]
    #[ORM\Column]
    private ?int $number_guest = null; 

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThan("now", message: "Votre réservation ne peut pas être inférieure à la date d'aujourd'hui")]
    #[Assert\LessThan("2025-01-01", message:"La date de réservation ne peut pas être après le 1er janvier 2025")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $hour = null;

    
    #[ORM\Column(type: Types::TEXT)]
    private ?string $allergy = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNumberGuest(): ?int
    {
        return $this->number_guest;
    }

    public function setNumberGuest(int $number_guest): self
    {
        $this->$number_guest= $number_guest;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHour(): ?\DateTimeInterface
    {
        return $this->hour;
    }

    public function setHour(\DateTimeInterface $hour): self
    {
        $this->hour = $hour;

        return $this;
    }

    public function getAllergy(): ?string
    {
        return $this->allergy;
    }

    public function setAllergy(string $allergy): self
    {
        $this->allergy = $allergy;

        return $this;
    }

}