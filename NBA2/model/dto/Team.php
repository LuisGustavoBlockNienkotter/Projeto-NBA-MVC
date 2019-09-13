<?php

namespace Dto;

class Team
{
    
    private $id;
    private $abbreviation;
    private $city;
    private $conference;
    private $division;
    private $full_name;
    private $name;

    public function __construct($id = 0, $abbreviation = "", $city = "", $conference = "", $division = "", $full_name = "", $name = "") {
        $this->id = $id;
        $this->abbreviation = $abbreviation;
        $this->city = $city;
        $this->conference = $conference;
        $this->division = $division;
        $this->full_name = $full_name;
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
     * Get the value of abbreviation
     */ 
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Set the value of abbreviation
     *
     * @return  self
     */ 
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of conference
     */ 
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * Set the value of conference
     *
     * @return  self
     */ 
    public function setConference($conference)
    {
        $this->conference = $conference;

        return $this;
    }

    /**
     * Get the value of division
     */ 
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set the value of division
     *
     * @return  self
     */ 
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get the value of full_name
     */ 
    public function getFull_name()
    {
        return $this->full_name;
    }

    /**
     * Set the value of full_name
     *
     * @return  self
     */ 
    public function setFull_name($full_name)
    {
        $this->full_name = $full_name;

        return $this;
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

    public function getColor(){
        switch ($this->getFull_name()) {
            case 'Boston Celtics':
                return "#00cc55";
                break;
            case 'Brooklyn Nets':
                return "#8c8c8c";
                break;
            case 'New York Knicks':
                return "#f6903c";
                break;
            case 'Philadelphia 76ers':
                return "#006BB6";
                break;
            case 'Chicago Bulls':
                return "#ee2b5b";
                break;
            case 'Cleveland Cavaliers':
                return "#be4169";
                break;
            case 'Atlanta Hawks':
                return "#E03A3E";
                break;
            case 'Charlotte Hornets':
                return "#0098b3";
                break;
            case 'Dallas Mavericks':
                return "#008ae6";
                break;
            case 'Denver Nuggets':
                return "#1f4e93";
                break;
            case 'Detroit Pistons':
                return "#ee2b4b";
                break;
            case 'Golden State Warriors':
                return "#2d64d2";
                break;
            case 'Houston Rockets':
                return "#ee2b5b";
                break;
            case 'Indiana Pacers':
                return "#0053b3";
                break;
            case 'Los Angeles Clippers':
                return "#ee2b4b";
                break;
            case 'Los Angeles Lakers':
                return "#fdb927";
                break;
            case 'Memphis Grizzlies':
                return "#5D76A9";
                break;
            case 'Miami Heat':
                return "#e60045";
                break;
            case 'Milwaukee Bucks':
                return "#00b344";
                break;
            case 'Minnesota Timberwolves':
                return "#1c5397";
                break;
            case 'New Orleans Pelicans':
                return "#ab966d";
                break;
            case 'Oklahoma City Thunder':
                return "#1aabff";
                break;
            case 'Orlando Magic':
                return "#0077C0";
                break;
            case 'Phoenix Suns':
                return "#e76b32";
                break;
            case 'Portland Trail Blazers':
                return "#E03A3E";
                break;
            case 'Sacramento Kings':
                return "#8442bd";
                break;
            case 'San Antonio Spurs':
                return "#C4CED4";
                break;
            case 'Utah Jazz':
                return "#002b5c";
                break;
            case 'Washington Wizards':
                return "#e92f4b";
                break;
            case 'Toronto Raptors':
                return "#ee2b5b";
                break;
            default:
                return "#fffff";
                break;
        }
    }

    public function __toString()
    {
        return "Team:<br>".
                    "ID: ". $this->getId(). " | Name: ". $this->getFull_name().
                    " | Abbreviation: ". $this->getAbbreviation(). " | City: ". $this->getCity().
                    " | Conference: ". $this->getConference(). " | Division: ". $this->getDivision();
    }
}


?>