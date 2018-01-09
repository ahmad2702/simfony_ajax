<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\TrackerLine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LoadUserData extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager) {

        // User Accounts
        $user1 = new User();
        $user1->setUsername('alex');
        $user1->setPassword($this->encoder->encodePassword($user1, '1111'));
        $manager->persist($user1);


        $user2 = new User();
        $user2->setUsername('jan');
        $user2->setPassword($this->encoder->encodePassword($user2, '1111'));
        $manager->persist($user2);


        $user3 = new User();
        $user3->setUsername('tim');
        $user3->setPassword($this->encoder->encodePassword($user3, '1111'));
        $manager->persist($user3);

        $user4 = new User();
        $user4->setUsername('michael');
        $user4->setPassword($this->encoder->encodePassword($user4, '1111'));
        $manager->persist($user4);


/**
        // user data
        $eintrag1 = new TrackerLine('alex', new \DateTime('2017-11-11'), 11, 3600);
        $manager->persist($eintrag1);

        $eintrag2 = new TrackerLine('alex', new \DateTime('2017-11-12'), 22, 3600);
        $manager->persist($eintrag2);

        $eintrag3 = new TrackerLine('jan', new \DateTime('2017-11-13'), 33, 3600);
        $manager->persist($eintrag3);

        $eintrag4 = new TrackerLine('jan', new \DateTime('2017-11-14'), 22, 3600);
        $manager->persist($eintrag4);

        $eintrag5 = new TrackerLine('tim', new \DateTime('2017-11-15'), 33, 3600);
        $manager->persist($eintrag5);

        $eintrag6 = new TrackerLine('tim', new \DateTime('2017-11-16'), 11, 3600);
        $manager->persist($eintrag6);
*/




        $manager->flush();

    }


}