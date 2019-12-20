<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WebsiteRepository")
 */
class Website
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $motto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $favicon;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cover_home;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone_contact;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone_book;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Location", cascade={"persist", "remove"})
     */
    private $location;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $location_informations;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facebook_url;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $instagram_url;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twitter_url;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $terms_of_use;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMotto(): ?string
    {
        return $this->motto;
    }

    public function setMotto(?string $motto): self
    {
        $this->motto = $motto;

        return $this;
    }

    public function getFavicon(): ?string
    {
        return $this->favicon;
    }

    public function setFavicon(?string $favicon): self
    {
        $this->favicon = $favicon;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getCoverHome(): ?string
    {
        return $this->cover_home;
    }

    public function setCoverHome(?string $cover_home): self
    {
        $this->cover_home = $cover_home;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }

    public function setCompanyName(string $company_name): self
    {
        $this->company_name = $company_name;

        return $this;
    }

    public function getPhoneContact(): ?string
    {
        return $this->phone_contact;
    }

    public function setPhoneContact(?string $phone_contact): self
    {
        $this->phone_contact = $phone_contact;

        return $this;
    }

    public function getPhoneBook(): ?string
    {
        return $this->phone_book;
    }

    public function setPhoneBook(?string $phone_book): self
    {
        $this->phone_book = $phone_book;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getLocationInformations(): ?string
    {
        return $this->location_informations;
    }

    public function setLocationInformations(?string $location_informations): self
    {
        $this->location_informations = $location_informations;

        return $this;
    }

    public function getFacebookUrl(): ?string
    {
        return $this->facebook_url;
    }

    public function setFacebookUrl(?string $facebook_url): self
    {
        $this->facebook_url = $facebook_url;

        return $this;
    }

    public function getInstagramUrl(): ?string
    {
        return $this->instagram_url;
    }

    public function setInstagramUrl(?string $instagram_url): self
    {
        $this->instagram_url = $instagram_url;

        return $this;
    }

    public function getTwitterUrl(): ?string
    {
        return $this->twitter_url;
    }

    public function setTwitterUrl(?string $twitter_url): self
    {
        $this->twitter_url = $twitter_url;

        return $this;
    }

    public function getTermsOfUse(): ?string
    {
        return $this->terms_of_use;
    }

    public function setTermsOfUse(?string $terms_of_use): self
    {
        $this->terms_of_use = $terms_of_use;

        return $this;
    }
}
