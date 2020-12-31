<?php

namespace Aoc\Tests;

use Aoc\Client;

use PHPUnit\Framework\TestCase;
 
class ClientTest extends TestCase
{
    public function testGetInputBy(): void
    {
        $client = new Client();

        $input = $client->getInputBy(2020, 23);

        $this->assertEquals($input, 643719258);
    }
}
