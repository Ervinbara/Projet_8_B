<?php

namespace App\Tests\AppBundle\Controller;

use App\Entity\Task;
use App\Tests\AppBundle\Traits\LoginTest;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class TaskControllerTest extends WebTestCase
{
    use LoginTest;

    /**
     * User Auth, access to tasks list
     */
    public function testTasksAccessAuthUser()
    {
        $client = $this->getClientUser();
        $client->request('GET', '/tasks');
        $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }

    /**
     * No Auth, access to tasks list
     */
    public function testTasksAccessNoAuth()
    {
        $client = $this->getClientNoAuth();
        $client->request('GET', '/tasks');
        $this->assertSame(Response::HTTP_FOUND, $client->getResponse()->getStatusCode());
        $this->assertMatchesRegularExpression('/\/login/',$client->getResponse()->headers->get('Location'));
    }

    /**
     * User Auth, access to tasks done list
     */
    public function testTasksDoneAccessAuth()
    {
        $client = $this->getClientUser();
        $client->request('GET', '/tasksDone');
        $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }

    /**
     * No Auth, access to tasks done list
     */
    public function testTasksDoneAccessNoAuth()
    {
        $client = $this->getClientNoAuth();
        $client->request('GET', '/tasksDone');
        $this->assertSame(Response::HTTP_FOUND, $client->getResponse()->getStatusCode());
        $this->assertMatchesRegularExpression('/\/login/',$client->getResponse()->headers->get('Location'));
    }


    // Test Task Create correct data and bad data
    /**
     * Test Create Task with correct data - Redirect tasks to do list & Flash success
     */
    public function testCreateTaskFullData()
    {
        $client = $this->getClientUser();
        $crawler = $client->request('GET', '/tasks/create');
        $form = $crawler->selectButton('Ajouter')->form([
            'task[title]' => 'ervin',
            'task[content]' => 'azerty'
        ]);
        $client->submit($form);

        $this->assertMatchesRegularExpression('/\/tasks/',$client->getResponse()->headers->get('Location'));
    }

    /**
     * Test Create Task with correct data - Redirect tasks to do list & Flash success
     */
    // TODO : Ajouter un test sur le sur la classe .help-block lors de la montée de version symfony
    public function testCreateTaskEmptyData()
    {
        $client = $this->getClientUser();
        $crawler = $client->request('GET', '/tasks/create');
        $form = $crawler->selectButton('Ajouter')->form([
            'task[title]' => null,
            'task[content]' => 'Bonjour'
        ]);
        $client->submit($form);
        $this->assertNull($client->getResponse()->headers->get('Location'));
    }

    /**
     * Test edit task no auth user
     */
    public function testAccessEditTaskNoAuthUser() {
        $client = $this->getClientNoAuth();
        $taskId = $client->getContainer()->get('doctrine')->getRepository(Task::class)->findOneBy(['title' => 'testUserA'])->getId();

        $client->request('GET', '/tasks/'. $taskId . '/edit');
        $this->assertMatchesRegularExpression('/\/login/',$client->getResponse()->headers->get('Location'));
    }

    /**
     * Test edit no task auth user 
     */
    public function testAccessEditTaskAuthUser() {
        $client = $this->getClientUser();
        $taskId = $client->getContainer()->get('doctrine')->getRepository(Task::class)->findOneBy(['title' => 'testUserA'])->getId();

        $client->request('GET', '/tasks/'. $taskId . '/edit');
        $this->assertMatchesRegularExpression('/\/tasks/',$client->getResponse()->headers->get('Location'));
    }

    /**
     * Si erreur, regarder si la tâche possède tjrs le même titre
     * Test user edit his own task
     */
    public function testAccessEditTaskAuthUserWithRight() {
        $client = $this->getClientAdmin();
        $taskId = $client->getContainer()->get('doctrine')->getRepository(Task::class)->findOneBy(['title' => 'testUserA'])->getId();

            $crawler = $client->request('GET', '/tasks/'. $taskId . '/edit');
        $form = $crawler->selectButton('Modifier')->form([
            'task[title]' => 'testUserA',
            'task[content]' => 'azerty'
        ]);
        $client->submit($form);
        $this->assertMatchesRegularExpression('/\/tasks/',$client->getResponse()->headers->get('Location'));
    }

    /**
     * Test user delete his own task
     */
    public function testDeleteTask() {
        $client = $this->getClientUser();

        $task = $client->getContainer()->get('doctrine')->getRepository(Task::class)->findOneBy(['title' => 'testUser'])->getId();

        $client->request('GET', '/tasks/'. $task . '/delete');
        $this->assertMatchesRegularExpression('/\/tasks/',$client->getResponse()->headers->get('Location'));

    }

    /**
     * Test task delete no auth
     */
    public function testDeleteTaskNoAuth() {
        $client = $this->getClientNoAuth();

        $task = $client->getContainer()->get('doctrine')->getRepository(Task::class)->findOneBy(['title' => 'Test anonyme 2'])->getId();

        $client->request('GET', '/tasks/'. $task . '/delete');
        $this->assertMatchesRegularExpression('/\/login/',$client->getResponse()->headers->get('Location'));

    }

    /**
     * Admin trying to delete anonyme task
     */
    public function testDeleteTaskNoAuthorUser() {
        $client = $this->getClientAdmin();

        $task = $client->getContainer()->get('doctrine')->getRepository(Task::class)->findOneBy(['title' => 'Test anonyme 2']);
        $taskId = $task->getId();

        $client->request('GET', '/tasks/'. $taskId . '/delete');
        $this->assertMatchesRegularExpression('/\/tasks/',$client->getResponse()->headers->get('Location'));

    }

}