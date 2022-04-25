<?php

namespace App\Entity;

use App\Repository\ConstelationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConstelationRepository::class)]
class Constelation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $codeConstelation;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $saison;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etoilePrincipale;

    #[ORM\Column(type: 'string', length: 1000, nullable: true)]
    private $image;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateDebut;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateFin;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $jourDebut;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $moisDebut;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $jourFin;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $moisFin;

    #[ORM\Column(type: 'text', nullable: true)]
    private $prediction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeConstelation(): ?string
    {
        return $this->codeConstelation;
    }

    public function setCodeConstelation(?string $codeConstelation): self
    {
        $this->codeConstelation = $codeConstelation;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSaison(): ?string
    {
        return $this->saison;
    }

    public function setSaison(?string $saison): self
    {
        $this->saison = $saison;

        return $this;
    }

    public function getEtoilePrincipale(): ?string
    {
        return $this->etoilePrincipale;
    }

    public function setEtoilePrincipale(?string $etoilePrincipale): self
    {
        $this->etoilePrincipale = $etoilePrincipale;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }
    public function getMois($format = 'm'): ?int
    {


        return $this->dateDebut->format($format);
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getJourDebut(): ?int
    {
        return $this->jourDebut;
    }

    public function setJourDebut(?int $jourDebut): self
    {
        $this->jourDebut = $jourDebut;

        return $this;
    }

    public function getMoisDebut(): ?int
    {
        return $this->moisDebut;
    }

    public function setMoisDebut(?int $moisDebut): self
    {
        $this->moisDebut = $moisDebut;

        return $this;
    }

    public function getJourFin(): ?int
    {
        return $this->jourFin;
    }

    public function setJourFin(?int $jourFin): self
    {
        $this->jourFin = $jourFin;

        return $this;
    }

    public function getMoisFin(): ?int
    {
        return $this->moisFin;
    }

    public function setMoisFin(?int $moisFin): self
    {
        $this->moisFin = $moisFin;

        return $this;
    }

    public function getPrediction(): ?string
    {
        return $this->prediction;
    }

    public function setPrediction(?string $prediction): self
    {
        $this->prediction = $prediction;

        return $this;
    }
}
