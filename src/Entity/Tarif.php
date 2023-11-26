<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TarifRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TarifRepository::class)]
#[ApiResource()]
class Tarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column]
    private ?bool $isActive = true;

    #[ORM\Column(length: 255)]
    private ?string $tarifs = null;

    #[ORM\Column(nullable: true, length: 255)]
    private ?string $horaires;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $contenuSeance = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }


    public function getTarifs(): ?string
    {
        return $this->tarifs;
    }

    public function setTarifs(string $tarifs): static
    {
        $this->tarifs = $tarifs;

        return $this;
    }

    public function getHoraires(): ?string
    {
        return $this->horaires;
    }

    public function setHoraires(string $horaires): static
    {
        $this->horaires = $horaires;

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

    /**
     * Get the value of isActive
     *
     * @return ?bool
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Set the value of isActive
     *
     * @param ?bool $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getContenuSeance(): array
    {
        return $this->contenuSeance;
    }

    public function setContenuSeance(array $contenuSeance): static
    {
        $this->contenuSeance = $contenuSeance;

        return $this;
    }
}
