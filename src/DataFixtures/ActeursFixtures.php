<?php

namespace App\DataFixtures;

use App\Entity\Acteurs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActeursFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $acteur1 = new Acteurs();
        $acteur1->setCabinet("GroupeSanté");
        $acteur1->setDocteur("Dujardin Philippe");
        $manager->persist($acteur1);

        $acteur2 = new Acteurs();
        $acteur2->setCabinet("MedicalPlus");
        $acteur2->setDocteur("Carrette Gérard");
        $manager->persist($acteur2);

        $acteur3 = new Acteurs();
        $acteur3->setCabinet("MedicalPlus");
        $acteur3->setDocteur("Momale Albert");
        $manager->persist($acteur3);

        $manager->flush();
    }
}