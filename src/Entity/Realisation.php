<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\RealisationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: RealisationRepository::class)]
#[ApiResource]
#[Vich\Uploadable]
class Realisation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $sousTitre = null;

    #[ORM\Column(length: 255)]
    private ?string $titreIntroduction = null;

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
    private array $introduction = [];

    #[ORM\Column(length: 255)]
    private ?string $titretemoignages = null;

    #[ORM\Column(length: 255)]
    private ?string $accrocheTemoignages = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getSousTitre(): ?string
    {
        return $this->sousTitre;
    }

    public function setSousTitre(string $sousTitre): static
    {
        $this->sousTitre = $sousTitre;

        return $this;
    }

    public function getTitreIntroduction(): ?string
    {
        return $this->titreIntroduction;
    }

    public function setTitreIntroduction(string $titreIntroduction): static
    {
        $this->titreIntroduction = $titreIntroduction;

        return $this;
    }

    public function getIntroduction(): array
    {
        return $this->introduction;
    }

    public function setIntroduction(array $introduction): static
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getTitretemoignages(): ?string
    {
        return $this->titretemoignages;
    }

    public function setTitretemoignages(string $titretemoignages): static
    {
        $this->titretemoignages = $titretemoignages;

        return $this;
    }

    public function getAccrocheTemoignages(): ?string
    {
        return $this->accrocheTemoignages;
    }

    public function setAccrocheTemoignages(string $accrocheTemoignages): static
    {
        $this->accrocheTemoignages = $accrocheTemoignages;

        return $this;
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
}
