<?php
namespace App\Security;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class TaskVoter extends Voter
{
    // these strings are just invented: you can use anything
    public const TASK_EDIT = 'task_edit';
    public const TASK_DELETE = 'task_delete';

    private AccessDecisionManagerInterface $decisionManager;

    public function __construct(AccessDecisionManagerInterface $decisionManager)
    {
        $this->decisionManager = $decisionManager;
    }

    protected function supports(string $attribute, mixed $subject):bool
    {
        // if the attribute isn't one we support, return false
        if (!in_array($attribute, [self::TASK_EDIT, self::TASK_DELETE])) {
            return false;
        }

        // Check if task object
        if (!$subject instanceof Task) {
            return false;
        }

        return true;
    }

    /**
     * @param $attribute
     * @param Task $subject
     * @param TokenInterface $token
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token):bool
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            // the user must be logged in; if not, deny access
            return false;
        }

        if ($this->decisionManager->decide($token, ['ROLE_ADMIN']) && $subject->getAuthor()->getUsername() === "userAnonyme") {
            return true;
        }
        // you know $task is a Post object, thanks to `supports()`
        /** @var Task $subject */

        switch ($attribute) {
            case self::TASK_EDIT:
            case self::TASK_DELETE:
                return $this->canEdit($subject, $user);
        }

        throw new \LogicException('This code should not be reached!');
    }


    private function canEdit(Task $task, User $user): bool
    {
        return $user === $task->getAuthor();
    }
}
