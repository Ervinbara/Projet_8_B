<?php

namespace App\Tests\AppBundle\Controller;

use App\Entity\User;
use App\Tests\AppBundle\Traits\LoginTest;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    use LoginTest;

    public function testAccessCreateUserAuthUser()
    {
        $client = $this->getClientUser();
        $client->request('GET', '/admin/users/create');
        $this->assertMatchesRegularExpression('/\//',$client->getResponse()->headers->get('Location'));  
    }

    public function testAccessCreateUserNoAuthUser()
    {
        $client = $this->getClientNoAuth();
        $client->request('GET', '/admin/users/create');
        $this->assertMatchesRegularExpression('/\/login/',$client->getResponse()->headers->get('Location'));
    }

    public function testAccessCreateUserAuthAdmin()
    {
        $client = $this->getClientAdmin();
        $crawler = $client->request('GET', '/admin/users/create');
        $this->assertSame('Créer un utilisateur', $crawler->filter('h1')->text());

    }

    public function testCreateUserAuthAdminFullData()
    {
        $client = $this->getClientAdmin();
        $crawler = $client->request('GET', '/admin/users/create');
        $form = $crawler->selectButton('Ajouter')->form([
            'user[username]' => 'Test12345',
            'user[password][first]' => 'Bonjour',
            'user[password][second]' => 'Bonjour',
            'user[email]' => 'Test12345@gmail.com',
        ]);
        $client->submit($form);
        
        $this->assertMatchesRegularExpression('/\/admin\/users/',$client->getResponse()->headers->get('Location'));
    }


    public function testCreateUserAuthAdminEmptyData()
    {
        $client = $this->getClientAdmin();
        $crawler = $client->request('GET', '/admin/users/create');
        $form = $crawler->selectButton('Ajouter')->form([
            'user[username]' => null,
            'user[password][first]' => 'Bonjour',
            'user[password][second]' => 'Bonjour',
            'user[email]' => 'TestCreateEmptyData@gmail.com',
        ]);
        $client->submit($form);
//        $this->assertSelectorExists('.help-block');
        $this->assertNull($client->getResponse()->headers->get('Location'));
    }

    public function testCreateUserAuthAdminWithAlreadyExistData()
    {
        $client = $this->getClientAdmin();
        $crawler = $client->request('GET', '/admin/users/create');
        $form = $crawler->selectButton('Ajouter')->form([
            'user[username]' => 'Test12345',
            'user[password][first]' => 'Bonjour',
            'user[password][second]' => 'Bonjour',
            'user[email]' => 'Test12345@gmail.com',
        ]);
        $client->submit($form);
        $this->assertNull($client->getResponse()->headers->get('Location'));
    }

    public function testUpdateUserAuthAdminFullData()
    {
        $client = $this->getClientAdmin();
        $userId = $client->getContainer()->get('doctrine')->getRepository(User::class)->findOneByUsername('user2')->getId();
        $crawler = $client->request('GET', '/admin/users/'.$userId.'/edit');
        $form = $crawler->selectButton('Modifier')->form();
        $form['user_edit[username]'] = 'user2';
        $form['user_edit[email]'] = 'anypass@gmail.com';
        
        $form['user_edit[roles][1]']->tick();
        $form['user_edit[roles][0]']->untick();

        $client->submit($form);
        $this->assertMatchesRegularExpression('/\/users/',$client->getResponse()->headers->get('Location'));
    }

    // TODO : Ajouter un test sur le sur la classe .help-block lors de la montée de version symfony
    public function testUpdateUserAuthAdminEmptyData()
    {
        $client = $this->getClientAdmin();
        $userId = $client->getContainer()->get('doctrine')->getRepository(User::class)->findOneByUsername('user')->getId();
        $crawler = $client->request('GET', '/admin/users/'.$userId.'/edit');
        $form = $crawler->selectButton('Modifier')->form([
            'user_edit[username]' => '',
            'user_edit[email]' => 'b@gmail.com',
        ]);
        $form->disableValidation();
        $form->setValues(['user_edit' => [
            'roles' => ['ROLE_ADMIN','ROLE_USER'] // it uses the input value to determine which checkbox to tick
        ]]);
        $crawler = $client->submit($form);
        $this->assertNull($client->getResponse()->headers->get('Location'));
    }
}