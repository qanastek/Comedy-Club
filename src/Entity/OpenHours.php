<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OpenHoursRepository")
 */
class OpenHours
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $monday_start;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $monday_end;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $tuesday_start;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $tuesday_end;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $wednesday_start;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $wednesday_end;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $thursday_start;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $thursday_end;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $friday_start;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $friday_end;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $saturday_start;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $saturday_end;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $sunday_start;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $sunday_end;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMondayStart(): ?\DateTimeInterface
    {
        return $this->monday_start;
    }

    public function setMondayStart(?\DateTimeInterface $monday_start): self
    {
        $this->monday_start = $monday_start;

        return $this;
    }

    public function getMondayEnd(): ?\DateTimeInterface
    {
        return $this->monday_end;
    }

    public function setMondayEnd(?\DateTimeInterface $monday_end): self
    {
        $this->monday_end = $monday_end;

        return $this;
    }

    public function getTuesdayStart(): ?\DateTimeInterface
    {
        return $this->tuesday_start;
    }

    public function setTuesdayStart(?\DateTimeInterface $tuesday_start): self
    {
        $this->tuesday_start = $tuesday_start;

        return $this;
    }

    public function getTuesdayEnd(): ?\DateTimeInterface
    {
        return $this->tuesday_end;
    }

    public function setTuesdayEnd(?\DateTimeInterface $tuesday_end): self
    {
        $this->tuesday_end = $tuesday_end;

        return $this;
    }

    public function getWednesdayStart(): ?\DateTimeInterface
    {
        return $this->wednesday_start;
    }

    public function setWednesdayStart(?\DateTimeInterface $wednesday_start): self
    {
        $this->wednesday_start = $wednesday_start;

        return $this;
    }

    public function getWednesdayEnd(): ?\DateTimeInterface
    {
        return $this->wednesday_end;
    }

    public function setWednesdayEnd(?\DateTimeInterface $wednesday_end): self
    {
        $this->wednesday_end = $wednesday_end;

        return $this;
    }

    public function getThursdayStart(): ?\DateTimeInterface
    {
        return $this->thursday_start;
    }

    public function setThursdayStart(?\DateTimeInterface $thursday_start): self
    {
        $this->thursday_start = $thursday_start;

        return $this;
    }

    public function getThursdayEnd(): ?\DateTimeInterface
    {
        return $this->thursday_end;
    }

    public function setThursdayEnd(?\DateTimeInterface $thursday_end): self
    {
        $this->thursday_end = $thursday_end;

        return $this;
    }

    public function getFridayStart(): ?\DateTimeInterface
    {
        return $this->friday_start;
    }

    public function setFridayStart(?\DateTimeInterface $friday_start): self
    {
        $this->friday_start = $friday_start;

        return $this;
    }

    public function getFridayEnd(): ?\DateTimeInterface
    {
        return $this->friday_end;
    }

    public function setFridayEnd(?\DateTimeInterface $friday_end): self
    {
        $this->friday_end = $friday_end;

        return $this;
    }

    public function getSaturdayStart(): ?\DateTimeInterface
    {
        return $this->saturday_start;
    }

    public function setSaturdayStart(?\DateTimeInterface $saturday_start): self
    {
        $this->saturday_start = $saturday_start;

        return $this;
    }

    public function getSaturdayEnd(): ?\DateTimeInterface
    {
        return $this->saturday_end;
    }

    public function setSaturdayEnd(?\DateTimeInterface $saturday_end): self
    {
        $this->saturday_end = $saturday_end;

        return $this;
    }

    public function getSundayStart(): ?\DateTimeInterface
    {
        return $this->sunday_start;
    }

    public function setSundayStart(?\DateTimeInterface $sunday_start): self
    {
        $this->sunday_start = $sunday_start;

        return $this;
    }

    public function getSundayEnd(): ?\DateTimeInterface
    {
        return $this->sunday_end;
    }

    public function setSundayEnd(?\DateTimeInterface $sunday_end): self
    {
        $this->sunday_end = $sunday_end;

        return $this;
    }
}
