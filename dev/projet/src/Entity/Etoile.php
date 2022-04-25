<?php

namespace App\Entity;

use App\Repository\EtoileRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtoileRepository::class)]
class Etoile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $idEtoile;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $codeConstelation;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
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
}
