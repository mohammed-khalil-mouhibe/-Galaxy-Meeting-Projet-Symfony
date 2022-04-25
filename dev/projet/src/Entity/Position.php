<?php

namespace App\Entity;

use App\Repository\PositionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PositionRepository::class)]
class Position
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $idEtoile;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $raHour;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $raMin;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $raSec;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $decDeg;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $decMin;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $decSec;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $magnitude;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $longitude;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $lattitude;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEtoile(): ?int
    {
        return $this->idEtoile;
    }

    public function setIdEtoile(?int $idEtoile): self
    {
        $this->idEtoile = $idEtoile;

        return $this;
    }

    public function getRaHour(): ?int
    {
        return $this->raHour;
    }

    public function setRaHour(?int $raHour): self
    {
        $this->raHour = $raHour;

        return $this;
    }

    public function getRaMin(): ?int
    {
        return $this->raMin;
    }

    public function setRaMin(?int $raMin): self
    {
        $this->raMin = $raMin;

        return $this;
    }

    public function getRaSec(): ?int
    {
        return $this->raSec;
    }

    public function setRaSec(?int $raSec): self
    {
        $this->raSec = $raSec;

        return $this;
    }

    public function getDecDeg(): ?int
    {
        return $this->decDeg;
    }

    public function setDecDeg(?int $decDeg): self
    {
        $this->decDeg = $decDeg;

        return $this;
    }

    public function getDecMin(): ?int
    {
        return $this->decMin;
    }

    public function setDecMin(?int $decMin): self
    {
        $this->decMin = $decMin;

        return $this;
    }

    public function getDecSec(): ?int
    {
        return $this->decSec;
    }

    public function setDecSec(?int $decSec): self
    {
        $this->decSec = $decSec;

        return $this;
    }

    public function getMagnitude(): ?int
    {
        return $this->magnitude;
    }

    public function setMagnitude(?int $magnitude): self
    {
        $this->magnitude = $magnitude;

        return $this;
    }

    public function getLongitude(): ?int
    {
        return $this->longitude;
    }

    public function setLongitude(?int $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLattitude(): ?int
    {
        return $this->lattitude;
    }

    public function setLattitude(?int $lattitude): self
    {
        $this->lattitude = $lattitude;

        return $this;
    }
}
