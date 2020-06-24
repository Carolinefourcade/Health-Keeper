<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    const USER = [
        'email' => 'user@gmail.fr',
        'roles' => ['ROLE_USER'],
        'name'  => 'Ludo',
        'password' => 'oui'
    ];

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setEmail(self::USER['email']);
        $user->setName(self::USER['name']);
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            (string)self::USER
        ));

        $manager->persist($user);

        $manager->flush();
    }
}
