<?php

namespace App\DataFixtures;

use App\Entity\Task;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {   
    // Création des utilisateurs
        // Création d'un admin
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setEmail('admin@gmail.com');
        $userAdmin->setRoles(["ROLE_ADMIN"]);

        $password = $this->hasher->hashPassword($userAdmin, 'azerty');
        $userAdmin->setPassword($password);

        $manager->persist($userAdmin);
        $manager->flush();
       
        // Création d'un user
        $user = new User();
        $user->setUsername('user');
        $user->setEmail('user@gmail.com');
        $user->setRoles(["ROLE_USER"]);

        $password = $this->hasher->hashPassword($user, 'azerty');
        $user->setPassword($password);
        
        $manager->persist($user);
        $manager->flush();


        // Création d'un deuxième user
        $user2 = new User();
        $user2->setUsername('user2');
        $user2->setEmail('user2@gmail.com');
        $user2->setRoles(["ROLE_USER"]);

        $password = $this->hasher->hashPassword($user2, 'azerty');
        $user2->setPassword($password);
        
        $manager->persist($user2);
        $manager->flush();
        

        // Création d'un user anonyme
        $userAnonyme = new User();
        $userAnonyme->setUsername('userAnonyme');
        $userAnonyme->setEmail('anonyme@gmail.com');

        $password = $this->hasher->hashPassword($userAnonyme, 'azerty');
        $userAnonyme->setPassword($password);

        $manager->persist($userAnonyme);
        $manager->flush();

        // Création des tâches
        // Tâche admin
        $taskAdmin = new Task();
        $taskAdmin->setTitle('testAdmin'); 
        $taskAdmin->setContent('testAdmin'); 
        $taskAdmin->setCreatedAt(new \DateTime('now'));
        $taskAdmin->isDone();
        $taskAdmin->setAuthor($userAdmin); 

        $manager->persist($taskAdmin);

        // Tâche user
        $taskUser = new Task();
        $taskUser->setTitle('testUser'); 
        $taskUser->setContent('testUser'); 
        $taskUser->setCreatedAt(new \DateTime('now'));
        $taskUser->isDone();
        $taskUser->setAuthor($user); 

        $manager->persist($taskUser);

        // Tâche user Anonyme
        $taskUserA = new Task();
        $taskUserA->setTitle('testUserA'); 
        $taskUserA->setContent('testUserA'); 
        $taskUserA->setCreatedAt(new \DateTime('now'));
        $taskUserA->setAuthor($userAnonyme); 

        $manager->persist($taskUserA);
        $manager->flush();
    }
}
