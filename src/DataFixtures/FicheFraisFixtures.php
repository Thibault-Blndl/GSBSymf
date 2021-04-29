<?php

namespace App\DataFixtures;

use App\Entity\FicheFrais;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class FicheFraisFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $fichefrais = new FicheFrais();
        $fichefrais->setUser($this->getReference('user'));
        $fichefrais->setDateModif(new \DateTime("2021-02-01"));
        $fichefrais->setEtat($this->getReference("FSSC"));
        $fichefrais->setMois(new \DateTime('2021-02-01'));
        $fichefrais->setMontantValide('0');
        $fichefrais->setNbJustificatifs('0');
        $fichefrais->setMotifRefus(null);
        $this->addReference('fiche', $fichefrais);
        $manager->persist($fichefrais);

        $fichefrais2 = new FicheFrais();
        $fichefrais2->setUser($this->getReference('user'));
        $fichefrais2->setDateModif(new \DateTime("2021-03-01"));
        $fichefrais2->setEtat($this->getReference("FSSC"));
        $fichefrais2->setMois(new \DateTime('2021-03-01'));
        $fichefrais2->setMontantValide('0');
        $fichefrais2->setNbJustificatifs('0');
        $fichefrais2->setMotifRefus(null);
        $this->addReference('fiche2', $fichefrais2);
        $manager->persist($fichefrais2);

        $fichefrais3 = new FicheFrais();
        $fichefrais3->setUser($this->getReference('user'));
        $fichefrais3->setDateModif(new \DateTime("2021-04-01"));
        $fichefrais3->setEtat($this->getReference("FSSC"));
        $fichefrais3->setMois(new \DateTime('2021-04-01'));
        $fichefrais3->setMontantValide('0');
        $fichefrais3->setNbJustificatifs('0');
        $fichefrais3->setMotifRefus(null);
        $this->addReference('fiche3', $fichefrais3);
        $manager->persist($fichefrais3);

        $fichefrais4 = new FicheFrais();
        $fichefrais4->setUser($this->getReference('user3'));
        $fichefrais4->setDateModif(new \DateTime("2021-04-01"));
        $fichefrais4->setEtat($this->getReference("FSSC"));
        $fichefrais4->setMois(new \DateTime('2021-04-01'));
        $fichefrais4->setMontantValide('0');
        $fichefrais4->setNbJustificatifs('0');
        $fichefrais4->setMotifRefus(null);
        $this->addReference('fiche4', $fichefrais4);
        $manager->persist($fichefrais4);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
            EtatFixtures::class
        );
    }
}