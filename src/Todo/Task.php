<?php declare(strict_types = 1);

namespace App\todo;
use App\Todo\Tag;
use App\Todo\User;
use App\Todo\Category;
use DateTime;

class Task
{
    private $id;
    private $title;
    private $limitDate;
    private $done;
    private $manager;
    private $tags;
    private $category;

public function __construct(int $id,string $title,DateTime $deadline,bool $done,User $manager, array $tags=[],Category $category)
{
$this->id=$id;
$this->title = $title;
$this->deadline = $deadline;
$this->done=$done;
$this ->manager=$manager;
$this->tags=$tags;
$this->category = $category;
}

    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle():string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title):self
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
    public function isDone():bool
    {
        return $this->done;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setDone(bool $done):self
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get the value of manager
     */ 
    public function getManager():User
    {
        return $this->manager;
    }

    /**
     * Set the value of manager
     *
     * @return  self
     */ 
    public function setManager(User $manager):self
    {
        $this->manager = $manager;

        return $this;
    }

/**
 * Get the value of tags
 */ 
public function getTags():array
{
return $this->tags;
}

/**
 * Set the value of tags
 *
 * @return  self
 */ 
public function setTags(array $tags):self
{
$this->tags = $tags;

return $this;
}
public function addTags(Tag $tag):self
{
    if (!in_array($tag, $this->tags)){
    $this->tags[]= $tag;
}

    return $this;
}
public function removeTag(Tag $tag):self
{
    $index = array_seach($tag, $this->tags);

    if($index !== false){
        array_splice($this->tags, $index,1);
    }
    return $this;
}

/**
 * Get the value of category
 */ 
public function getCategory():Category
{
return $this->category;
}

/**
 * Set the value of category
 *
 * @return  self
 */ 
public function setCategory(Category $category):self
{
$this->category = $category;

return $this;
}
}