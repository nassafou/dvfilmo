<?php

namespace Myapp\FilmothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $message ="Premier message";
        return $this->render('FilmothequeBundle:Default:index.html.twig', array('message' => $message));
    }
}
