<?php declare(strict_types = 1);

namespace App\todo;

use App\Todo\Task;
class Category
{
private $id;
private $name;
private $tasks;

public function __construct(int $id, string $name, array $tasks=[])
{
    $this->id = $id;
    $this->name = $name;
    $this->tasks=$tasks;
    
}


/**
 * Get the value of id
 */ 
public function getId():int
{
return $this->id;
}

/**
 * Get the value of name
 */ 
public function getName():string
{
return $this->name;
}

/**
 * Set the value of name
 *
 * @return  self
 */ 
public function setName(string $name):self
{
$this->name = $name;

return $this;
}

    /**
     * Get the value of tasks
     */ 
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set the value of tasks
     *
     * @return  self
     */ 
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;

        return $this;
    }
    public function addTask(Task $task)
{
    if (!in_array($task, $this->tasks)){
    $this->tasks[]= $task;
}

    return $this;
}
public function removeTask(Task $task):self
{
    $index = array_seach($task, $this->tasks);

    if($index !== false){
        array_splice($this->tasks, $index,1);
    }
    return $this;
}
}