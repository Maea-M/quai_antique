<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setFirstName("Siam");
        $user->setLastname("Mahe");
        $user->setEmail("siam@mahe.com");
        $user->setRoles(['ROLE_USER']);
        $user->setPassword("chat1/2022");


        $manager->persist($user);
        $manager->flush();
    }
}
