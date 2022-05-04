<?php

use evanfranzman\package;

class WeatherDay
{
    /**
     * fields per the assignment class diagram
     */
    private $date;
    private $unit;
    private $temperature;
    private $feelsLike;
    private $pressure;
    private $humidity;   

    /**
     * Constructor to initialize the date, unit, temperature, feels like, pressure, and humidity
     */
    public function __construct($date, $unit, $temperature, $feelsLike, $pressure, $humidity)
    {
        $this->date = $date;
        $this->unit = $unit;
        $this->temperature = $temperature;
        $this->feelsLike = $feelsLike;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
    }
    /**
     * Get the date
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Get the unit
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Get the temperature
     */
    public function getTemperature()
    {
        return $this->temperature;
    }
    /**
     * Get the feels like
     */
    public function getFeelsLike()
    {
        return $this->feelsLike;
    }
    /**
     * Get the pressure
     */
    public function getPressure()
    {
        return $this->pressure;
    }
    /**
     * Get the humidity
     */
    public function getHumidity()
    {
        return $this->humidity;
    }
}

?>