<?php

namespace MMC\TEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MMCTEBundle:Default:index.html.twig');
    }
}
