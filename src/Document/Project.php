<?php

namespace App\Document;

use App\Config\StatusType;
use ApiPlatform\Metadata\ApiResource;
use DateTimeImmutable;
use Ramsey\Uuid\Guid\Guid as RamseyGuid;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

#[ApiResource]
#[ODM\Document(collection: 'project')]

class Project
{
    #[ODM\Id(strategy: 'NONE')]
    private ?string $id = null;

    #[ODM\Field(type: 'string')]
    private ?string $name = null;

    #[ODM\Field(type: 'string')]
    private ?string $description = null;

    #[ODM\Field]
    private ?StatusType $state = null;
    
    #[ODM\Field]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->id = RamseyGuid::uuid4()->toString();
        $this->createdAt = new DateTimeImmutable();
    }

    public function getId(): ?string
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getState(): ?StatusType
    {
        return $this->state;
    }

    public function setState(StatusType $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}