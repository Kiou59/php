<?php declare(strict_types = 1);

namespace App\todo;
use App\Todo\Task;

class Tags
{
    private $id;
    private $description;
    private $tasks;

    public function __construct(int $id, string $description, ?array $tasks=[])
    {
        $this->id =$id;
        $this->description=$description;
        $this->tasks= $tasks ;
    }

    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription():string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description):self
    {
        $this->description = $description;

        return $this;
    }

        /**
         * Get the value of tasks
         */ 
        public function getTasks():?array
        {
                return $this->tasks;
        }

        /**
         * Set the value of tasks
         *
         * @return  self
         */ 
        public function setTasks(?array $tasks):self
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