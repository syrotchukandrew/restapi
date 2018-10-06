<?php

/*
 * This file is part of the Restapi.
 */

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Rest\RouteResource("tmsg", pluralize=false)
 */
class TiMessageController extends AbstractController implements ClassResourceInterface
{
    /**
     * @param Request $request
     */
    public function postAction(Request $request)
    {
    }
}
