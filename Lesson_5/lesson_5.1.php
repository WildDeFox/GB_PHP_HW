<?php

class Task
{
  private User $user;
  private int $priority;
  private string $description;
  private string $dataCreated;
  private string $dateUpdated;
  private bool $isDone = false;
  private string $dateDone;

  function __construct(User $user, int $priority, string $description)
  {
    $this->user = $user;
    $this->priority = $priority;
    $this->description = $description;
    $this->dateCreated = $this->dateUpdated = date('Y-m-d H:i:s');
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
    $this->dateUpdated = date('Y-m-d H:i:s');
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function markAsDone(): void
  {
    $this->dateDone = $this->dateUpdated = date('Y-m-d H:i:s');
    $this->isDone = true;
  }

}

class User 
{
  private string $username;
  private string $email;

  function __construct(string $username, string $email)
  {
    $this->username = $username;
    $this->email = $email;
  }
}

$user = new User('Nikita', 'test@mail.ru');
$task = new Task($user, 2, 'test');
$task->setDescription('newDescription');
$task->markAsDone();
var_dump($task);