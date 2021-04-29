<?php

namespace App\DataFixtures;

use App\Entity\LigneFraisForfait;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class LigneFraisForfaitFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $lignefraisforfaitF1 = new LigneFraisForfait();
        $lignefraisforfaitF1->setFiche($this->getReference('fiche'));
        $lignefraisforfaitF1->setFraisForfait($this->getReference('fraisforfait'));
        $lignefraisforfaitF1->setQuantite(0);
        $manager->persist($lignefraisforfaitF1);

        $lignefraisforfait2F1 = new LigneFraisForfait();
        $lignefraisforfait2F1->setFiche($this->getReference('fiche'));
        $lignefraisforfait2F1->setFraisForfait($this->getReference('fraisforfait2'));
        $lignefraisforfait2F1->setQuantite(0);
        $manager->persist($lignefraisforfait2F1);

        $lignefraisforfait3F1 = new LigneFraisForfait();
        $lignefraisforfait3F1->setFiche($this->getReference('fiche'));
        $lignefraisforfait3F1->setFraisForfait($this->getReference('fraisforfait3'));
        $lignefraisforfait3F1->setQuantite(0);
        $manager->persist($lignefraisforfait3F1);

        $lignefraisforfait4F1 = new LigneFraisForfait();
        $lignefraisforfait4F1->setFiche($this->getReference('fiche'));
        $lignefraisforfait4F1->setFraisForfait($this->getReference('fraisforfait4'));
        $lignefraisforfait4F1->setQuantite(0);
        $manager->persist($lignefraisforfait4F1);

        $lignefraisforfait1F2 = new LigneFraisForfait();
        $lignefraisforfait1F2->setFiche($this->getReference('fiche2'));
        $lignefraisforfait1F2->setFraisForfait($this->getReference('fraisforfait'));
        $lignefraisforfait1F2->setQuantite(0);
        $manager->persist($lignefraisforfait1F2);

        $lignefraisforfait2F2 = new LigneFraisForfait();
        $lignefraisforfait2F2->setFiche($this->getReference('fiche2'));
        $lignefraisforfait2F2->setFraisForfait($this->getReference('fraisforfait2'));
        $lignefraisforfait2F2->setQuantite(0);
        $manager->persist($lignefraisforfait2F2);

        $lignefraisforfait3F2 = new LigneFraisForfait();
        $lignefraisforfait3F2->setFiche($this->getReference('fiche2'));
        $lignefraisforfait3F2->setFraisForfait($this->getReference('fraisforfait3'));
        $lignefraisforfait3F2->setQuantite(0);
        $manager->persist($lignefraisforfait3F2);

        $lignefraisforfait4F2 = new LigneFraisForfait();
        $lignefraisforfait4F2->setFiche($this->getReference('fiche2'));
        $lignefraisforfait4F2->setFraisForfait($this->getReference('fraisforfait4'));
        $lignefraisforfait4F2->setQuantite(0);
        $manager->persist($lignefraisforfait4F2);

        $lignefraisforfait1F3 = new LigneFraisForfait();
        $lignefraisforfait1F3->setFiche($this->getReference('fiche3'));
        $lignefraisforfait1F3->setFraisForfait($this->getReference('fraisforfait'));
        $lignefraisforfait1F3->setQuantite(0);
        $manager->persist($lignefraisforfait1F3);

        $lignefraisforfait2F3 = new LigneFraisForfait();
        $lignefraisforfait2F3->setFiche($this->getReference('fiche3'));
        $lignefraisforfait2F3->setFraisForfait($this->getReference('fraisforfait2'));
        $lignefraisforfait2F3->setQuantite(0);
        $manager->persist($lignefraisforfait2F3);

        $lignefraisforfait3F3 = new LigneFraisForfait();
        $lignefraisforfait3F3->setFiche($this->getReference('fiche3'));
        $lignefraisforfait3F3->setFraisForfait($this->getReference('fraisforfait3'));
        $lignefraisforfait3F3->setQuantite(0);
        $manager->persist($lignefraisforfait3F3);

        $lignefraisforfait4F3 = new LigneFraisForfait();
        $lignefraisforfait4F3->setFiche($this->getReference('fiche3'));
        $lignefraisforfait4F3->setFraisForfait($this->getReference('fraisforfait4'));
        $lignefraisforfait4F3->setQuantite(0);
        $manager->persist($lignefraisforfait4F3);

        $lignefraisforfait1F4 = new LigneFraisForfait();
        $lignefraisforfait1F4->setFiche($this->getReference('fiche4'));
        $lignefraisforfait1F4->setFraisForfait($this->getReference('fraisforfait'));
        $lignefraisforfait1F4->setQuantite(0);
        $manager->persist($lignefraisforfait1F4);

        $lignefraisforfait2F4 = new LigneFraisForfait();
        $lignefraisforfait2F4->setFiche($this->getReference('fiche4'));
        $lignefraisforfait2F4->setFraisForfait($this->getReference('fraisforfait2'));
        $lignefraisforfait2F4->setQuantite(0);
        $manager->persist($lignefraisforfait2F4);

        $lignefraisforfait3F4 = new LigneFraisForfait();
        $lignefraisforfait3F4->setFiche($this->getReference('fiche4'));
        $lignefraisforfait3F4->setFraisForfait($this->getReference('fraisforfait3'));
        $lignefraisforfait3F4->setQuantite(0);
        $manager->persist($lignefraisforfait3F4);

        $lignefraisforfait4F4 = new LigneFraisForfait();
        $lignefraisforfait4F4->setFiche($this->getReference('fiche4'));
        $lignefraisforfait4F4->setFraisForfait($this->getReference('fraisforfait4'));
        $lignefraisforfait4F4->setQuantite(0);
        $manager->persist($lignefraisforfait4F4);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            FicheFraisFixtures::class,
            FraisForfaitFixtures::class
        );
    }
}