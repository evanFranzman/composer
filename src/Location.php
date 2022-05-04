<?php

use evanfranzman\package;

class Location 
{
    /**
     * fields per the assignment class diagram
     */
    private $city;
    private $state;
    private $country;

    /**
     * Constructor to initialize the city, state, and country
     */
    public function __construct($city, $state, $country)
    {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }
    /**
     * Get the city
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Get the state
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Get the country
     */
    public function getCountry()
    {
        return $this->country;
    }
}

?>