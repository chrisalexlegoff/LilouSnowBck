<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TarifRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: TarifRepository::class)]
#[ApiResource()]
#[Vich\Uploadable]
class Tarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[Vich\UploadableField(mapping: "images", fileNameProperty: "imageName")]
    private ?File $imageFile = null;

    #[ORM\Column(length: 255)]
    private ?string $imageName = 'tarif.png';

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\\Symfony\\Component\\HttpFoundation\\File\\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    #[ORM\Column]
    private array $description = [];

    #[ORM\Column(length: 255)]
    private ?string $alternateName = null;

    #[ORM\Column]
    private ?int $tarifBase = null;

    #[ORM\Column]
    private ?int $tarifSup = null;

    #[ORM\Column]
    private ?int $horaireDebut = null;

    #[ORM\Column]
    private ?int $horaireFin = null;

    #[ORM\Column]
    private array $contenuSeance = [];

    #[ORM\Column]
    private ?bool $isActive = null;

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

    public function getDescription(): array
    {
        return $this->description;
        // guarantee every user at least has ROLE_USER
        $description[] = 'Mon action se pratique sous anesthésie locale. Les séances sont physiques mais le résultat en vaut la peine !';

        return array_unique($description);
    }

    public function setDescription(array $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAlternateName(): ?string
    {
        return $this->alternateName;
    }

    public function setAlternateName(string $alternateName): static
    {
        $this->alternateName = $alternateName;

        return $this;
    }

    public function getTarifBase(): ?int
    {
        return $this->tarifBase;
    }

    public function setTarifBase(int $tarifBase): static
    {
        $this->tarifBase = $tarifBase;

        return $this;
    }

    public function getTarifSup(): ?int
    {
        return $this->tarifSup;
    }

    public function setTarifSup(int $tarifSup): static
    {
        $this->tarifSup = $tarifSup;

        return $this;
    }

    public function getHoraireDebut(): ?int
    {
        return $this->horaireDebut;
    }

    public function setHoraireDebut(int $horaireDebut): static
    {
        $this->horaireDebut = $horaireDebut;

        return $this;
    }

    public function getHoraireFin(): ?int
    {
        return $this->horaireFin;
    }

    public function setHoraireFin(int $horaireFin): static
    {
        $this->horaireFin = $horaireFin;

        return $this;
    }

    public function getContenuSeance(): array
    {
        return $this->contenuSeance;

        // guarantee every user at least has ROLE_USER
        $contenuSeance[] = 'La recherche colorimétrique';

        return array_unique($contenuSeance);
    }

    public function setContenuSeance(array $contenuSeance): static
    {
        $this->contenuSeance = $contenuSeance;

        return $this;
    }
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive = true;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }
}
