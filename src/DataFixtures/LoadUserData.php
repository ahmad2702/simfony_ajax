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

        // Beispile
        $user5 = new User();
        $user5->setUsername('peter');
        $user5->setPassword($this->encoder->encodePassword($user5, '1111'));
        $manager->persist($user5);

        $user6 = new User();
        $user6->setUsername('petra');
        $user6->setPassword($this->encoder->encodePassword($user6, '1111'));
        $manager->persist($user6);

        $user7 = new User();
        $user7->setUsername('paul');
        $user7->setPassword($this->encoder->encodePassword($user7, '1111'));
        $manager->persist($user7);

        $user8 = new User();
        $user8->setUsername('maria');
        $user8->setPassword($this->encoder->encodePassword($user8, '1111'));
        $manager->persist($user8);

        $user9 = new User();
        $user9->setUsername('jakob');
        $user9->setPassword($this->encoder->encodePassword($user9, '1111'));
        $manager->persist($user9);

        $user10 = new User();
        $user10->setUsername('claude');
        $user10->setPassword($this->encoder->encodePassword($user10, '1111'));
        $manager->persist($user10);

        $user11 = new User();
        $user11->setUsername('klaus');
        $user11->setPassword($this->encoder->encodePassword($user11, '1111'));
        $manager->persist($user11);

        $user12 = new User();
        $user12->setUsername('marta');
        $user12->setPassword($this->encoder->encodePassword($user12, '1111'));
        $manager->persist($user12);


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