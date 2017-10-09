<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\RouteResource;

/**
 * @RouteResource("User", pluralize=false)
 */
class DefaultController
{
    /**
     * DefaultController constructor.
     */
    public function __construct()
    {

    }

    public function cgetAction(Request $request)
    {
        return array("data"=>[]);
    }
}
