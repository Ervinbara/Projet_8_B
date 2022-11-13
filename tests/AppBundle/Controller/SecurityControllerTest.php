<?php

namespace App\Tests\AppBundle\Controller;

use App\Tests\AppBundle\Traits\LoginTest;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class SecurityControllerTest extends WebTestCase
{
    private $client = null;
    use loginTest;

    public function setUp():void
    {
        $this->client = $this->getClientUser();
    }

    public function testLogin()
    {
        $crawler = $this->client->request('GET', '/');

        $this->assertSame(Response::HTTP_OK, $this->client->getResponse()->getStatusCode());
        $this->assertSame('Bienvenue sur Todo List, l\'application vous permettant de gérer l\'ensemble de vos tâches sans effort !', $crawler->filter('h1')->text());
    }


    public function testTasksAuthAccess()
    {
        $this->client->request('GET', '/tasks');
        $this->assertSame(Response::HTTP_OK, $this->client->getResponse()->getStatusCode());
    }

    /**
     * Test d'accès à une page liée à l'administration en étant user
     */
    public function testAccessToAdminPage()
    {
        $this->client->request('GET', '/admin/users');
        $this->assertSame(Response::HTTP_FOUND, $this->client->getResponse()->getStatusCode());
    }



}