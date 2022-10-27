<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table("user")
 * @ORM\Entity
 * @UniqueEntity("email")
 * @UniqueEntity("username")
 */
class User implements UserInterface,PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     * @Assert\NotBlank(message="Vous devez saisir un nom d'utilisateur.")
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", unique=true)
     * @Assert\NotBlank(message="Vous devez saisir une adresse email.")
     * @Assert\Email(message="Le format de l'adresse n'est pas correcte.")
     */
    private $email;


    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="author")
     */
    private $tasks;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getSalt()
    {
        return null;
    }

    public function getPassword():?string
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles():array
    {
        return $this->roles;
    }

    public function setRoles($roles){
        $this->roles = $roles;
    }

    public function eraseCredentials()
    {
    }


    public function getTasks()
    {
        return $this->tasks;
    }

    public function addTask(Task $task)
    {
        if (!$this->tasks->contains($task)) {
            $this->tasks[] = $task;
            $task->setAuthor($this);
        }

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return $this->id;
    }
}
