<?php

namespace Dto;

class Player
{
    private $id;
    private $first_name;
    private $last_name;
    private $position;
    private $height_feet;
    private $height_inches;
    private $weight_pounds;
    private $team;
    
    public function __construct($id = 0, $first_name = "", $last_name = "", $position = "", $height_feet = "",
                                $height_inches = "", $weight_pounds = "", $team = null) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->position = $position;
        $this->height_feet = $height_feet;
        $this->height_inches = $height_inches;
        $this->weight_pounds = $weight_pounds;
        if ($team instanceof Team) {
            $this->team = $team;
        }
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of position
     */ 
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */ 
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of height_feet
     */ 
    public function getHeight_feet()
    {
        return $this->height_feet;
    }

    /**
     * Set the value of height_feet
     *
     * @return  self
     */ 
    public function setHeight_feet($height_feet)
    {
        $this->height_feet = $height_feet;

        return $this;
    }

    /**
     * Get the value of height_inches
     */ 
    public function getHeight_inches()
    {
        return $this->height_inches;
    }

    /**
     * Set the value of height_inches
     *
     * @return  self
     */ 
    public function setHeight_inches($height_inches)
    {
        $this->height_inches = $height_inches;

        return $this;
    }

    public function getHeight()
    {
        return $this->getHeight_feet()."'".$this->getHeight_inches();
    }

    /**
     * Get the value of weight_pounds
     */ 
    public function getWeight_pounds()
    {
        return $this->weight_pounds;
    }

    /**
     * Set the value of weight_pounds
     *
     * @return  self
     */ 
    public function setWeight_pounds($weight_pounds)
    {
        $this->weight_pounds = $weight_pounds;

        return $this;
    }

    public function getWeight()
    {
        return $this->getWeight_pounds()/2.2046;
    }

    /**
     * Get the value of team
     */ 
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set the value of team
     *
     * @return  self
     */ 
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    public function getName()
    {
        return $this->getFirst_name() ." ". $this->getLast_name();
    }

    public function __toString()
    {
        return "Player:<br>".
                    "ID: ". $this->getId(). " | Name: ". $this->getFirst_name() ." ". $this->getLast_name().
                    " | Position: ". $this->getPosition(). " | Height: ". $this->getHeight_feet()."'".$this->getHeight_inches() . 
                    " | Pounds: ". $this->getWeight_pounds(). " | Team: ". $this->getTeam()->getFull_name();
    }

}


?>