<?php

namespace App\Tests\AppBundle\Controller;

use App\Tests\AppBundle\Traits\LoginTest;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class AuthentificationControllerTest extends WebTestCase
{
    use LoginTest;

    public function testAccessAdminPageNoAuth()
    {
        $client = $this->getClientNoAuth();
        $client->request('GET', '/admin/users/create');
        // var_dump($client->getResponse()->headers->get('Location'));
        $this->assertInstanceOf(RedirectResponse::class, $client->getResponse());
        // Vérifie si on retourne bien sur la page de login
        $this->assertMatchesRegularExpression('/\/login/',$client->getResponse()->headers->get('Location'));
    }

    public function testLoginWithBadCredentials()
    {
        $client = $this->getClientNoAuth();
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'john@doe.fr',
            '_password' => 'fakepassword'
        ]);
        
        $client->submit($form);
        $this->assertMatchesRegularExpression('/\/login/',$client->getResponse()->headers->get('Location'));
    }

    public function testSuccessCorrectCredentials ()
    {
        $client = $this->getClientNoAuth();
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'ervin',
            '_password' => 'azerty'
        ]);
        $client->submit($form);
        // Si le formulaire est validé on est redirigée sur / (page d'acceuil)
        $this->assertMatchesRegularExpression('/\//',$client->getResponse()->headers->get('Location'));
    }

    public function testAccessAdminPageWhenAuthWithUserRole() {
        $client = $this->getClientUser();
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'ervin',
            '_password' => 'azerty'
        ]);
        $client->submit($form);
        // Si le formulaire est validé on est redirigée sur / (page d'accueil)
        $this->assertMatchesRegularExpression('/\//',$client->getResponse()->headers->get('Location'));
        // On essai d'accèder à une page liée à l'admin
        $crawler = $client->request('GET', '/admin/users/create');
        // Si on est connecter et essai d'accéder à une page de l'admin on est redirigé sur la homepage
        $this->assertMatchesRegularExpression('/\//',$client->getResponse()->headers->get('Location'));
        // $this->assertSame('Bienvenue sur Todo List, l\'application vous permettant de gérer l\'ensemble de vos tâches sans effort !', $crawler->filter('h1')->text());
    }

    /**
     * Test Logout - Redirection login
     */
    public function testLogoutAuthUser()
    {
        $client = $this->getClientNoAuth();
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Se connecter')->form([
            '_username' => 'ervin',
            '_password' => 'azerty'
        ]);
        $client->submit($form);
        // Si le formulaire est validé on est redirigée sur / (page d'accueil)
        $this->assertMatchesRegularExpression('/\//',$client->getResponse()->headers->get('Location'));
        // Déconnection
        $client->request('GET', '/logout');
//        $this->client->followRedirects(true);
        $this->assertSame(Response::HTTP_FOUND, $client->getResponse()->getStatusCode());
        // Une fois déconnecter on retourne sur la page de login
//
        $client->request('GET', '/');
//        $this->assertSame('Se connecter', $crawler->filter('button')->text());
        $this->assertMatchesRegularExpression('/\/login/',$client->getResponse()->headers->get('Location'));

    }

}