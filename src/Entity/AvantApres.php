<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AvantApresRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: AvantApresRepository::class)]
#[ApiResource]
#[Vich\Uploadable]
class AvantApres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Vich\UploadableField(mapping: "images", fileNameProperty: "avantName")]
    private ?File $avantFile = null;

    #[ORM\Column(length: 1000)]
    private ?string $avantText = null;

    #[Vich\UploadableField(mapping: "images", fileNameProperty: "apresName")]
    private ?File $apresFile = null;

    #[ORM\Column(length: 1000)]
    private ?string $ApresText = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $avantName = 'avant.png';

    #[ORM\Column(length: 255)]
    private ?string $apresName = 'apres.png';

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\\Symfony\\Component\\HttpFoundation\\File\\UploadedFile|null $avantFile
     */
    public function setAvantFile(?File $avantFile = null): void
    {
        $this->avantFile = $avantFile;
    }

    public function getAvantFile(): ?File
    {
        return $this->avantFile;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\\Symfony\\Component\\HttpFoundation\\File\\UploadedFile|null $apresFile
     */
    public function setApresFile(?File $apresFile = null): void
    {
        $this->apresFile = $apresFile;
    }

    public function getApresFile(): ?File
    {
        return $this->apresFile;
    }

    public function getAvantName(): ?string
    {
        return $this->avantName;
    }

    public function setAvantName(?string $avantName): void
    {
        $this->avantName = $avantName;
    }

    public function getApresName(): ?string
    {
        return $this->apresName;
    }

    public function setApresName(?string $apresName): void
    {
        $this->apresName = $apresName;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvantText(): ?string
    {
        return $this->avantText;
    }

    public function setAvantText(string $avantText): static
    {
        $this->avantText = $avantText;

        return $this;
    }

    public function getApresText(): ?string
    {
        return $this->ApresText;
    }

    public function setApresText(string $ApresText): static
    {
        $this->ApresText = $ApresText;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

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
