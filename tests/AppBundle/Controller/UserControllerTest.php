<?php

namespace App\Tests\AppBundle\Controller;

use App\Entity\User;
use App\Tests\AppBundle\Traits\LoginTest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    use LoginTest;

    public function testAccessCreateUserAuthUser()
    {
        $client = $this->getClientUser();
        $crawler = $client->request('GET', '/admin/users/create');
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

    // TODO : Comportement très étrange à voir plus tard
    public function testCreateUserAuthAdminFullData()
    {
        $client = $this->getClientAdmin();
        $crawler = $client->request('GET', '/admin/users/create');
        $form = $crawler->selectButton('Ajouter')->form([
            'user[username]' => 'Benitotodszfefdeddsddsdsssqaqassto',
            'user[password][first]' => 'Bonjour',
            'user[password][second]' => 'Bonjour',
            'user[email]' => 'Benitodsfdfdfdsdsdqsssaqatoto@gmail.com',
        ]);
        $client->submit($form);
        // $this->assertResponseRedirects('/admin/users');
        // $this->client->followRedirect();
        // $this->assertSelectorExists('.alert.alert-success');
        // $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
        $this->assertMatchesRegularExpression('/\/admin/users/',$client->getResponse()->headers->get('Location'));
    }


    public function testCreateUserAuthAdminEmptyData()
    {
        $client = $this->getClientAdmin();
        $crawler = $client->request('GET', '/admin/users/create');
        $form = $crawler->selectButton('Ajouter')->form([
            'user[username]' => null,
            'user[password][first]' => 'Bonjour',
            'user[password][second]' => 'Bonjour',
            'user[email]' => 'beniiitoo@gmail.com',
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
            'user[username]' => 'ervin',
            'user[password][first]' => 'Bonjour',
            'user[password][second]' => 'Bonjour',
            'user[email]' => 'beniiitoo@gmail.com',
        ]);
        $client->submit($form);
        $this->assertNull($client->getResponse()->headers->get('Location'));
    }

    // TODO : Voir comment décocher une checkbox avant validation du formulaire
    public function testUpdateUserAuthAdminFullData()
    {
        $client = $this->getClientAdmin();
        $userId = $client->getContainer()->get('doctrine')->getRepository(User::class)->findOneByUsername('symfonyfan')->getId();
        $crawler = $client->request('GET', '/admin/users/'.$userId.'/edit');
        $form = $crawler->selectButton('Modifier')->form();
        $form['user_edit[username]'] = 'symfonyfan';
        $form['user_edit[email]'] = 'anypass@gmail.com';
        // $form->disableValidation();
        $form->setValues(['user_edit' => [
            'roles' => ['ROLE_USER'], // it uses the input value to determine which checkbox to tick
        ]]);
        $client->submit($form);
        $this->assertMatchesRegularExpression('/\/users/',$client->getResponse()->headers->get('Location'));
    }

    // TODO : Ajouter un test sur le sur la classe .help-block lors de la montée de version symfony
    public function testUpdateUserAuthAdminEmptyData()
    {
        $client = $this->getClientAdmin();
        $userId = $client->getContainer()->get('doctrine')->getRepository(User::class)->findOneByUsername('symfonyfan')->getId();
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