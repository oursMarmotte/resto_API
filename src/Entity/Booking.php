<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Serializer\Attribute\MaxDepth as AttributeMaxDepth;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $guestNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $orderDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $orderHour = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $allergy = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

   

   

    #[ORM\ManyToOne()]
    
    private ?Restaurant $restaurant = null;

    #[ORM\ManyToOne(inversedBy: 'bookings')]
    
    private ?User $client = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGuestNumber(): ?int
    {
        return $this->guestNumber;
    }

    public function setGuestNumber(int $guestNumber): static
    {
        $this->guestNumber = $guestNumber;

        return $this;
    }

    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }

    public function setOrderDate(string $orderDate): static
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    public function getOrderHour(): ?string
    {
        return $this->orderHour;
    }

    public function setOrderHour(string $orderHour): static
    {
        $this->orderHour = $orderHour;

        return $this;
    }

    public function getAllergy(): ?string
    {
        return $this->allergy;
    }

    public function setAllergy(?string $allergy): static
    {
        $this->allergy = $allergy;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

   

   

   

    

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): static
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    public function getClient(): ?User
    {
        return $this->client;
    }

    public function setClient(?User $client): static
    {
        $this->client = $client;

        return $this;
    }
}
