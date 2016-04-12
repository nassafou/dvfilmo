<?php

namespace Myapp\FilmothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\FilmothequeBundle\Entity\Categorie;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $categorie1 = new Categorie();
        $categorie1-> setNom('drame');
        $em->persist($categorie1);
        
        $categorie2 = new Categorie();
        $categorie2 -> setNom('science-fiction');
        $em->persist($categorie2);
        
        $em->flush();
        
        $message = 'Categories créées avec succès';
        return $this->render('FilmothequeBundle:Default:index.html.twig', array('message' => $message));
    }
}
