<?php
namespace Application\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class Todo 
{
    /**
     * @var string
     * @ODM\Id
     */
    private $id;

    /**
     * @var bool
     * @ODM\Boolean
     */
    private $complete = false;

    /**
     * @var string
     * @ODM\String
     */
    private $name;

    /**
     * @param boolean $complete
     * @return $this
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isComplete()
    {
        return $this->complete;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}