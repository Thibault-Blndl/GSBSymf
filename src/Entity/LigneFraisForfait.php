<?php

namespace App\Entity;

use App\Repository\LigneFraisForfaitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneFraisForfaitRepository::class)
 */
class LigneFraisForfait
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=FraisForfait::class, inversedBy="ligneFraisForfait")
     */
    private $fraisForfait;

    /**
     * @ORM\ManyToOne(targetEntity=FicheFrais::class, inversedBy="ligneFraisForfait")
     */
    private $fiche;

    /**
     * @return mixed
     */
    public function getFiche(): ?FicheFrais
    {
        return $this->fiche;
    }

    /**
     * @param mixed $fiche
     */
    public function setFiche(?FicheFrais $fiche): self
    {
        $this->fiche = $fiche;
        return $this;
    }

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFraisForfait(): ?FraisForfait
    {
        return $this->fraisForfait;
    }

    public function setFraisForfait(?FraisForfait $fraisForfait): self
    {
        $this->fraisForfait = $fraisForfait;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function __toString()
    {
       return $this->getId()."";
    }

}
