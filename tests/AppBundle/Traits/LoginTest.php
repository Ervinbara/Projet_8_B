<?php

namespace App\Tests\AppBundle\Traits;
use App\Repository\UserRepository;

trait LoginTest
{
    public function getClientUser()
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('ervin@gmail.com');
        $client->loginUser($testUser);
        return $client;
    }

    public function getClientAdmin()
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('a@gmail.com');
        $client->loginUser($testUser);
        return $client;
    }

    public function getClientNoAuth()
    {
        return static::createClient();
    }
}