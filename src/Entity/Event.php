<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'date')]
    private \DateTime $date;

    #[ORM\Column(type: 'time', nullable: true)]
    private ?\DateTime $startTime;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description;

    #[ORM\Column(type: 'string', length: 1000, nullable: true)]
    private ?string $imageLink;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $capacity;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $contactEmail;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private ?string $contactPhone;

    #[ORM\Column(type: 'string', length: 500, nullable: true)]
    private ?string $address;

    #[ORM\Column(name: 'ZIP_code', type: 'string', length: 10, nullable: true)]
    private ?string $zipCode;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $cityName;

    #[ORM\Column(type: 'string', length: 1000, nullable: true)]
    private ?string $eventUrl;

    #[ORM\Column(name: 'event_type', type: 'string', length: 255, nullable: true)]
    private ?string $eventType;

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

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getStartTime(): ?\DateTime
    {
        return $this->startTime;
    }

    public function setStartTime(?\DateTime $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getImageLink(): ?string
    {
        return $this->imageLink;
    }

    public function setImageLink(?string $imageLink): self
    {
        $this->imageLink = $imageLink;
        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(?int $capacity): self
    {
        $this->capacity = $capacity;
        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    public function setContactPhone(?string $contactPhone): self
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;
        return $this;
    }

    public function getEventUrl(): ?string
    {
        return $this->eventUrl;
    }

    public function setEventUrl(?string $eventUrl): self
    {
        $this->eventUrl = $eventUrl;
        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }
}