<?php

namespace Api\SoapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/api", name="soapx")
     */
    public function indexAction()
    {
        return $this->render('SoapBundle:Default:index.html.twig');
    }
}
