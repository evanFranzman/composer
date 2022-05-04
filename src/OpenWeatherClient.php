<?php

use evanfranzman\package;

class OpenWeatherClient
{
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

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