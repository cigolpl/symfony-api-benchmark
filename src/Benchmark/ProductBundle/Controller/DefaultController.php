<?php

namespace Benchmark\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/products")
     */
    public function productsAction()
    {
        $response = new Response(json_encode(['result' => 'Hello world']));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
