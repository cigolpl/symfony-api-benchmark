<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $response = $client->getResponse();
        print_r($response->getContent());
        exit;
        $this->assertTrue($crawler->filter('html:contains("Homepage")')->count() > 0);
        //$content = json_decode($response->getContent());
        $this->assertJsonResponse($response, 200);
        $content = json_decode($response->getContent());
        $this->assertSame(1, $content->count);
        $this->assertJsonResponse($response, 200);
    }
}

?>
