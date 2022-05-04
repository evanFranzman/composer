<?php

use evanfranzman\package;

class OpenWeatherClient
{
    /**
     * fields per the assignment class diagram
     */
    private $apiKey;
    /**
     * Constructor to initialize the api key
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
    /**
     * Get the weather for a given location via guzzle
     */
    public function getCurrentWeather($location) {
        $client = new GuzzleHttp\Client();
        $response = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => $location,
                'appid' => $this->apiKey,
                'units' => 'imperial'
            ]
        ]);

        $data = json_decode($response->getBody());

        return new evanfranzman\package\WeatherDay(new 
            DateTime('now'), 'imperial', $data->main->temp, $data->main->feels_like, $data->main->pressure, $data->main->humidity);
    }
}

?>