<?php

namespace App\Entity;

use App\Repository\FraisForfaitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FraisForfaitRepository::class)
 */
class FraisForfait
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $montant;

    /**
     * @ORM\OneToMany(targetEntity=LigneFraisForfait::class, mappedBy="fraisForfait")
     */
    private $ligneFraisForfait;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getLigneFraisForfait(): ?LigneFraisForfait
    {
        return $this->ligneFraisForfait;
    }

    public function setLigneFraisForfait(?LigneFraisForfait $ligneFraisForfait): self
    {
        // unset the owning side of the relation if necessary
        if ($ligneFraisForfait === null && $this->ligneFraisForfait !== null) {
            $this->ligneFraisForfait->setFraisForfait(null);
        }

        // set the owning side of the relation if necessary
        if ($ligneFraisForfait !== null && $ligneFraisForfait->getFraisForfait() !== $this) {
            $ligneFraisForfait->setFraisForfait($this);
        }

        $this->ligneFraisForfait = $ligneFraisForfait;

        return $this;
    }

    public function __toString()
    {
        return $this->getLibelle() . " " . $this->getMontant();
    }


}
