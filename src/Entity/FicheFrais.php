<?php

namespace App\Entity;

use App\Repository\FicheFraisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FicheFraisRepository::class)
 */
class FicheFrais
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $mois;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbJustificatifs;

    /**
     * @ORM\Column(type="decimal", precision=0, scale=2, nullable=true)
     */
    private $montantValide;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateModif;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="fiches")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Etat::class, inversedBy="fiches")
     */
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity=LigneFraisForfait::class, mappedBy="fiche")
     */
    private $ligneFraisForfait;

    /**
     * @ORM\OneToMany(targetEntity=LigneFraisHorsForfait::class, mappedBy="fiche")
     */
    private $lignesFraisHorsForfait;

    /**
     * @return mixed
     */
    public function getMotifRefus()
    {
        return $this->motifRefus;
    }

    /**
     * @param mixed $motifRefus
     */
    public function setMotifRefus($motifRefus): void
    {
        $this->motifRefus = $motifRefus;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $motifRefus;

    public function __construct()
    {
        $this->lignesFraisHorsForfait = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getEtat(): ?Etat
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat(?Etat $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMois(): ?\DateTime
    {
        return $this->mois;
    }

    public function setMois(?\DateTime $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getNbJustificatifs(): ?int
    {
        return $this->nbJustificatifs;
    }

    public function setNbJustificatifs(?int $nbJustificatifs): self
    {
        $this->nbJustificatifs = $nbJustificatifs;

        return $this;
    }

    public function getMontantValide(): ?string
    {
        return $this->montantValide;
    }

    public function setMontantValide(?string $montantValide): self
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(?\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    public function getActeurs(): ?string
    {
        return $this->acteurs;
    }

    public function setActeurs(?string $acteurs): self
    {
        $this->acteurs = $acteurs;

        return $this;
    }

    /**
     * @return Collection|LigneFraisForfait[]
     */
    public function getLignesFraisForfait(): Collection
    {
        return $this->ligneFraisForfait;
    }

    public function addLignesFraisForfait(LigneFraisForfait $lignesFraisForfait): self
    {
        if (!$this->ligneFraisForfait->contains($lignesFraisForfait)) {
            $this->ligneFraisForfait[] = $lignesFraisForfait;
            $lignesFraisForfait->setFiche($this);
        }

        return $this;
    }

    public function removeLignesFraisForfait(LigneFraisForfait $lignesFraisForfait): self
    {
        if ($this->ligneFraisForfait->removeElement($lignesFraisForfait)) {
            // set the owning side to null (unless already changed)
            if ($lignesFraisForfait->getFiche() === $this) {
                $lignesFraisForfait->setFiche(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|LigneFraisHorsForfait[]
     */
    public function getLignesFraisHorsForfait(): Collection
    {
        return $this->lignesFraisHorsForfait;
    }

    public function addLignesFraisHorsForfait(LigneFraisHorsForfait $lignesFraisHorsForfait): self
    {
        if (!$this->lignesFraisHorsForfait->contains($lignesFraisHorsForfait)) {
            $this->lignesFraisHorsForfait[] = $lignesFraisHorsForfait;
            $lignesFraisHorsForfait->setFiche($this);
        }

        return $this;
    }

    public function removeLignesFraisHorsForfait(LigneFraisHorsForfait $lignesFraisHorsForfait): self
    {
        if ($this->lignesFraisHorsForfait->removeElement($lignesFraisHorsForfait)) {
            // set the owning side to null (unless already changed)
            if ($lignesFraisHorsForfait->getFiche() === $this) {
                $lignesFraisHorsForfait->setFiche(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getId()."";
    }
}
