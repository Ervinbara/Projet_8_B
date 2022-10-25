<?php

namespace App\Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

// class DefaultControllerTest extends WebTestCase
// {
//     public function testIndex()
//     {
// //        $client = static::createClient();
// //        $token = new UsernamePasswordToken('admin', null, "azerty", ['ROLE_ADMIN']);

//         $client = static::createClient([], [
//             'PHP_AUTH_USER' => 'a',
//             'PHP_AUTH_PW'   => 'azerty',
//         ]);

//         $crawler = $client->request('GET', '/');

//         $this->assertEquals(200, $client->getResponse()->getStatusCode());
//         $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
//     }
// }
