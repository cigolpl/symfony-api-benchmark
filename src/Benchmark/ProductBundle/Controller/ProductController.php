<?php
namespace Benchmark\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\View\RouteRedirectView;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\RouteResource;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * @RouteResource("Product")
 */
class ProductController extends FOSRestController implements ClassResourceInterface
{
    /**
    * Return sales
    *
    * @ApiDoc(
    *  resource=true
    * )
    * @QueryParam(name="page", requirements="\d+", default="1")
    * @QueryParam(name="limit", requirements="\d+", default="10")
    * @param ParamFetcher $paramFetcher
    */
    public function cgetAction(ParamFetcher $paramFetcher)
    {
        $view = new View(['result' => 'Hello world']);
        return $this->get('fos_rest.view_handler')->handle($view);
    }
}
