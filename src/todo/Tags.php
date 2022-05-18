<?php declare(strict_types = 1);

namespace App\todo;

class Tags
{
    private $id;
    private $description;
    private $tasks;

    public function __construct($id, $description, $tasks=[])
    {
        $this->id =$id;
        $this->description=$description;
        $this->tasks= $tasks ;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

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
public function addTasks($task)
{
    if (!in_array($task, $this->tasks)){
    $this->tasks[]= $task;
}

    return $this;
}
public function removeTag($task)
{
    $index = array_seach($task, $this->tasks);

    if($index !== false){
        array_splice($this->tasks, $index,1);
    }
    return $this;
}
}