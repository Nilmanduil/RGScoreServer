<?php

namespace tgoudouneix\RGScoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('tgoudouneixRGScoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
