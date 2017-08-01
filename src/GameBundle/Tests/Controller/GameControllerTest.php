<?php

namespace GameBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GameControllerTest extends WebTestCase
{
    public function testGoto()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/goToAction/{id}');
    }

}
