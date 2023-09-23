<?php

namespace App\tests\Entity;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetLastname()
    {
        // création d'une nouvelle instance de test
        $user = new User();

        // défintion d'un nom pour cette instance
        $lastname = "testnom";
        $user->setLastname($lastname);

        // vérification de que la fonction getLastname retourne bien le mot
        $this->assertEquals($lastname, $user->getLastname());
    }
}