<?php

namespace App\DataFixtures;

use App\Entity\TypeUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use MongoDB\BSON\Type;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) #important
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setNom("Villechalane");
        $user->setPrenom("Louis");
        $user->setUsername("QQQ");
        $encoded = $this->encoder->encodePassword($user,"QQQ");
        $user->setPassword($encoded);
        $user->setAdresse("8 rue des Charmes");
        $user->setCodePostal("46000");
        $user->setVille("Cahors");
        $user->setDateEmbauche(new \DateTime("2020-12-21"));
        $user->setRoles(["ROLE_USER"]);
        $user->setTypeUser($this->getReference("visiteur"));
        $this->addReference('user',$user);
        $manager->persist($user);

        $user1 = new User();
        $user1->setNom("Tusseau");
        $user1->setPrenom("Louis");
        $user1->setUsername("TTT");
        $encoded = $this->encoder->encodePassword($user1,"TTT");
        $user1->setPassword($encoded);
        $user1->setAdresse("22 rue des Ternes");
        $user1->setCodePostal("46123");
        $user1->setVille("Gramat");
        $user1->setDateEmbauche(new \DateTime("2017-05-01"));
        $user1->setRoles(["ROLE_USER"]);
        $user1->setTypeUser($this->getReference("comptable"));
        $this->addReference('user1',$user1);
        $manager->persist($user1);

        $user2 = new User();
        $user2->setNom("Blondel");
        $user2->setPrenom("Thibault");
        $user2->setUsername("tblondel");
        $encoded = $this->encoder->encodePassword($user2,"0qdyTjvk");
        $user2->setPassword($encoded);
        $user2->setAdresse("1 Avenue Charles de Gaulle");
        $user2->setCodePostal("62217");
        $user2->setVille("Tilloy-les-Mofflaines");
        $user2->setDateEmbauche(new \DateTime("2018-05-01"));
        $user2->setRoles(["ROLE_ADMIN"]);
        $user2->setTypeUser($this->getReference("admin"));
        $this->addReference('user2',$user2);
        $manager->persist($user2);

        $user3 = new User();
        $user3->setNom("AAA");
        $user3->setPrenom("AAA");
        $user3->setUsername("AAA");
        $encoded = $this->encoder->encodePassword($user3,"AAA");
        $user3->setPassword($encoded);
        $user3->setAdresse("AAA");
        $user3->setCodePostal("AAA");
        $user3->setVille("AAA");
        $user3->setDateEmbauche(new \DateTime("2019-12-21"));
        $user3->setRoles(["ROLE_USER"]);
        $user3->setTypeUser($this->getReference("visiteur"));
        $this->addReference('user3',$user3);
        $manager->persist($user3);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            TypeUserFixtures::class,
        );
    }

}