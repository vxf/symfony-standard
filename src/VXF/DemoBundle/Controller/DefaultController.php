<?php

namespace VXF\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VXFDemoBundle:Page:index.html.twig', array());
    }
}
