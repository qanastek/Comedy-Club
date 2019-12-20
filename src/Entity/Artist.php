<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArtistRepository")
 */
class Artist extends User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facebook_url;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twitter_url;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $instagram_url;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Event", mappedBy="artist")
     */
    private $events;

    public function __construct()
    {
        parent::__construct();
        $this->events = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTwitterUrl(): ?string
    {
        return $this->twitter_url;
    }

    public function setTwitterUrl(?string $twitter_url): self
    {
        $this->twitter_url = $twitter_url;

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

    /**
     * @return Collection|Event[]
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): self
    {
        if (!$this->events->contains($event)) {
            $this->events[] = $event;
            $event->addArtist($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): self
    {
        if ($this->events->contains($event)) {
            $this->events->removeElement($event);
            $event->removeArtist($this);
        }

        return $this;
    }
}
