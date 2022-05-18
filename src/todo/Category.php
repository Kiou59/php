<?php declare(strict_types = 1);

namespace App\todo;

class Category
{
private $id;
private $name;

public function __construct(int $id, $name)
{
    $this->id = $id;
    $this->name = $name;
    
}


/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Get the value of name
 */ 
public function getName()
{
return $this->name;
}

/**
 * Set the value of name
 *
 * @return  self
 */ 
public function setName($name)
{
$this->name = $name;

return $this;
}
}