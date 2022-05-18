<?php declare(strict_types = 1);

namespace App\todo;
use DateTime;

class Task
{
    private $id;
    private $title;
    private $limitDate;
    private $done;
    //private $responsible;
    private $tags;

public function __construct(int $id,string $title,DateTime $deadline,bool $done, ?array $tags=[])
{
$this->id=$id;
$this->title = $title;
$this->deadline = $deadline;
$this->done=$done;

$this->tags=$tags;
}

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of deadline
     */ 
    public function getDeadline():DateTime
    {
        return $this->deadline;
    }

    /**
     * Set the value of deadline
     *
     * @return  self
     */ 
    public function setDeadline(DateTime $deadline):self
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get the value of done
     */ 
    public function isDone()
    {
        return $this->done;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get the value of manager
     */ 
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set the value of manager
     *
     * @return  self
     */ 
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

/**
 * Get the value of tags
 */ 
public function getTags()
{
return $this->tags;
}

/**
 * Set the value of tags
 *
 * @return  self
 */ 
public function setTags($tags)
{
$this->tags = $tags;

return $this;
}
public function addTags($tag)
{
    if (!in_array($tag, $this->tags)){
    $this->tags[]= $tag;
}

    return $this;
}
public function removeTag($tag)
{
    $index = array_seach($tag, $this->tags);

    if($index !== false){
        array_splice($this->tags, $index,1);
    }
    return $this;
}
}