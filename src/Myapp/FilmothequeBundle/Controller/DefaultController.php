<?php

namespace Myapp\FilmothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categorie = new Categorie();
        return $this->render('FilmothequeBundle:Default:index.html.twig', array('message' => $message));
    }
}
