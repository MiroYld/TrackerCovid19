<?php

namespace App\Service;

use DateTime;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    private function getApi(string $var)
    {
        $response = $this->client->request(
            'GET',
            'https://coronavirusapifr.herokuapp.com/' . $var
        );

        return $response->toArray();
    }

    public function getFranceData(): array
    {
        return $this->getApi('data/live/france');
    }

    public function getDepData(): array
    {
        return $this->getApi('data/live/departements');
    }

    public function getTotalByCountry(): array
    {
        $response = $this->client->request('GET', "https://api.covid19api.com/total/country/france");
        $data = json_decode($response->getContent(), true);

        $total = [];

        foreach ($data as $dailyData) {
            $date = (new \DateTime($dailyData['Date']))->format('Y-m-d');
            $total[$date] = $dailyData;
        }
        return $total;
    }
}
