<?php

namespace App\DataFixtures;

use App\Entity\LigneFraisHorsForfait;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class LigneFraisHorsForfaitFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $lignefraishorsforfait = new LigneFraisHorsForfait();
        $lignefraishorsforfait->setLibelle(null);
        $lignefraishorsforfait->setMontant(null);
        $lignefraishorsforfait->setDate(null);
        $lignefraishorsforfait->setFiche($this->getReference('fiche'));
        $manager->persist($lignefraishorsforfait);

        $lignefraishorsforfait1 = new LigneFraisHorsForfait();
        $lignefraishorsforfait1->setLibelle(null);
        $lignefraishorsforfait1->setMontant(null);
        $lignefraishorsforfait1->setDate(null);
        $lignefraishorsforfait1->setFiche($this->getReference('fiche'));
        $manager->persist($lignefraishorsforfait1);

        $lignefraishorsforfait2 = new LigneFraisHorsForfait();
        $lignefraishorsforfait2->setLibelle(null);
        $lignefraishorsforfait2->setMontant(null);
        $lignefraishorsforfait2->setDate(null);
        $lignefraishorsforfait2->setFiche($this->getReference('fiche2'));
        $manager->persist($lignefraishorsforfait2);

        $lignefraishorsforfait3 = new LigneFraisHorsForfait();
        $lignefraishorsforfait3->setLibelle(null);
        $lignefraishorsforfait3->setMontant(null);
        $lignefraishorsforfait3->setDate(null);
        $lignefraishorsforfait3->setFiche($this->getReference('fiche3'));
        $manager->persist($lignefraishorsforfait3);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            FicheFraisFixtures::class,
        );
    }
}