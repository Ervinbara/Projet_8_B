<?php

namespace App\Tests\Security;

use App\Entity\Task;
use App\Entity\User;
use App\Security\TaskVoter;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class TaskVoterTest extends TestCase
{
    public function testTaskSupported()
    {
        $decisionManager = $this->getMockBuilder(AccessDecisionManagerInterface::class)->getMock();
        $taskVoter = new TaskVoter($decisionManager);
        $support = $taskVoter->supports(TaskVoter::TASK_EDIT, new Task());
        $this->assertTrue($support);
        $support = $taskVoter->supports(TaskVoter::TASK_EDIT, new User());
        $this->assertFalse($support);
    }

    public function testVoteOnAttribute()
    {
        $decisionManager = $this->getMockBuilder(AccessDecisionManagerInterface::class)->getMock();
        $decisionManager->method('decide')
                        ->willReturn(true);
        $author = new User();
        $taskVoter = new TaskVoter($decisionManager);
        $token = $this
            ->getMockBuilder(TokenInterface::class)
            ->getMock();
        $token->method('getUser')
            ->willReturn($author);
        $task = new Task();
        $author->setUsername('admin');
        $task->setAuthor($author);

        $vote = $taskVoter->voteOnAttribute(TaskVoter::TASK_EDIT, $task, $token);
        $this->assertTrue($vote);
    }

    public function testVoteOnAttributeWithoutUser()
    {
        $decisionManager = $this->getMockBuilder(AccessDecisionManagerInterface::class)->getMock();
        $decisionManager->method('decide')
            ->willReturn(true);
        $author = new User();
        $taskVoter = new TaskVoter($decisionManager);
        $token = $this
            ->getMockBuilder(TokenInterface::class)
            ->getMock();
        $token->method('getUser')
            ->willReturn(null);
        $task = new Task();
        $author->setUsername('admin');
        $task->setAuthor($author);

        $vote = $taskVoter->voteOnAttribute(TaskVoter::TASK_EDIT, $task, $token);
        $this->assertFalse($vote);
    }

    public function testVoteOnAttributeWithoutAttribut()
    {
        $decisionManager = $this->getMockBuilder(AccessDecisionManagerInterface::class)->getMock();
        $decisionManager->method('decide')
            ->willReturn(true);
        $author = new User();
        $taskVoter = new TaskVoter($decisionManager);
        $token = $this
            ->getMockBuilder(TokenInterface::class)
            ->getMock();
        $token->method('getUser')
            ->willReturn($author);
        $task = new Task();
        $author->setUsername('admin');
        $task->setAuthor($author);

        $this->expectException(\LogicException::class);
        $vote = $taskVoter->voteOnAttribute('NONO', $task, $token);
    }
}
