<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TemoignageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TemoignageRepository::class)]
#[ApiResource]
#[Vich\Uploadable]
class Temoignage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Vich\UploadableField(mapping: "videos", fileNameProperty: "temoignageName")]
    #[Assert\File(
        maxSize: '128M',
        extensions: ['mp4'],
        extensionsMessage: 'Uniquement une vidéo .MP4',
        maxSizeMessage: 'Vidéo trop lourde : 128MO maximum'
    )]
    private ?File $temoignageFile = null;

    #[ORM\Column(length: 255)]
    private ?string $temoignageName = null;
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\\Symfony\\Component\\HttpFoundation\\File\\UploadedFile|null $temoignageFile
     */
    public function setTemoignageFile(?File $temoignageFile = null): void
    {
        $this->temoignageFile = $temoignageFile;
    }

    public function getTemoignageFile(): ?File
    {
        return $this->temoignageFile;
    }

    public function setTemoignageName(?string $temoignageName): void
    {
        $this->temoignageName = $temoignageName;
    }

    public function getTemoignageName(): ?string
    {
        return $this->temoignageName;
    }


    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $link = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): static
    {
        $this->link = $link;

        return $this;
    }
}
