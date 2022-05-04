<?php

use evanfranzman\package;

class Location 
{
    private $city;
    private $state;
    private $country;

    public function __construct($city, $state, $country)
    {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }
    
    public function getCity()
    {
        return $this->city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getCountry()
    {
        return $this->country;
    }
}

?>