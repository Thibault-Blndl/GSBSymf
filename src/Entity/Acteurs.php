<?php

namespace App\Entity;

use App\Repository\ActeursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActeursRepository::class)
 */
class Acteurs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cabinet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $docteur;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\FicheFrais", inversedBy="acteurs")
    */
    private $fichefrais;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCabinet(): ?string
    {
        return $this->cabinet;
    }

    public function setCabinet(string $cabinet): self
    {
        $this->cabinet = $cabinet;

        return $this;
    }
    public function getDocteur(): ?string
    {
        return $this->docteur;
    }

    public function setDocteur(string $docteur): self
    {
        $this->docteur = $docteur;

        return $this;
    }
}
