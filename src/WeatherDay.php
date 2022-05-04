<?php

use evanfranzman\package;

class WeatherDay
{
    private $date;
    private $unit;
    private $temperature;
    private $feelsLike;
    private $pressure;
    private $humidity;   

    public function __construct($date, $unit, $temperature, $feelsLike, $pressure, $humidity)
    {
        $this->date = $date;
        $this->unit = $unit;
        $this->temperature = $temperature;
        $this->feelsLike = $feelsLike;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }
    
    public function getFeelsLike()
    {
        return $this->feelsLike;
    }
    
    public function getPressure()
    {
        return $this->pressure;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }
}

?>