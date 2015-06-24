<?php
namespace Benchmark\ProductBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testApi()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/api/products.json');

        $response = $client->getResponse();
        //print_r($response->getContent());
        $content = json_decode($response->getContent());
        $this->assertTrue(isset($content->result));
        $this->assertJsonResponse($response, 200);
    }


    protected function assertJsonResponse($response, $statusCode = 200)
    {
        $this->assertEquals(
            $statusCode, $response->getStatusCode(),
            $response->getContent()
        );
        $this->assertTrue(
            $response->headers->contains('Content-Type', 'application/json'),
            $response->headers
        );
    }

}
