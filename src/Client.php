<?php

namespace Aoc;

use GuzzleHttp\Client as GuzzleHttp;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Exception\RequestException;

class Client
{
    private GuzzleHttp $client;

    private const SESSION_DOMAIN = 'adventofcode.com';

    private const API_INPUT = 'https://adventofcode.com/%d/day/%d/input';

    public function __construct()
    {
        $cookieJar = CookieJar::fromArray(['session' => $_ENV['SESSION_AOC']], self::SESSION_DOMAIN);

        $this->client = new GuzzleHttp(['cookies' => $cookieJar]);
    }

    public function getInputBy(int $year, int $day): string
    {
        try {
            $response = $this->client->request('GET', sprintf(self::API_INPUT, $year, $day));

            return (string)$response->getBody()->read(1024);
        } catch (RequestException $exception) {
            throw new \Exception(sprintf('Error %d', $exception->getResponse()->getStatusCode()));
        }
    }
}
