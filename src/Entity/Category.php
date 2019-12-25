<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GalleryEntity", mappedBy="category")
     */
    private $galleryEntities;

    public function __construct()
    {
        $this->galleryEntities = new ArrayCollection();
    }

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

    /**
     * @return Collection|GalleryEntity[]
     */
    public function getGalleryEntities(): Collection
    {
        return $this->galleryEntities;
    }

    public function addGalleryEntity(GalleryEntity $galleryEntity): self
    {
        if (!$this->galleryEntities->contains($galleryEntity)) {
            $this->galleryEntities[] = $galleryEntity;
            $galleryEntity->setCategory($this);
        }

        return $this;
    }

    public function removeGalleryEntity(GalleryEntity $galleryEntity): self
    {
        if ($this->galleryEntities->contains($galleryEntity)) {
            $this->galleryEntities->removeElement($galleryEntity);
            // set the owning side to null (unless already changed)
            if ($galleryEntity->getCategory() === $this) {
                $galleryEntity->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;        
    }
}
