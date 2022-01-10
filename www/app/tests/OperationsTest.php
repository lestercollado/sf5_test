<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OperationsTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();
        $client->request('GET', 'api/add/4/5');

        $this->assertResponseIsSuccessful();
    }

    public function testDiv()
    {
        $client = static::createClient();
        $client->request('GET', 'api/div/24/4');

        $this->assertResponseIsSuccessful();
    }
}