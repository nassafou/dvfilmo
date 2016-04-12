<?php

namespace Myapp\FilmothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\FilmothequeBundle\Entity\Categorie;
use Myapp\FilmothequeBundle\Entity\Acteur;


class ActeurController extends Controller
{
    
    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $acteurs = $em->getRepository('Myapp\FilmothequeBundle\Entity\Acteur');
        
        return $this->render('FilmothequeBundle:Acteur:lister.html.twig', array('liste' => $acteurs));
        
    }
    public function ajouterAction()
    {
    return $this->render('FilmothequeBundle:Acteur:ajouter.html.twig');
    }
    
    public function modifierAction($id)
    {
      return $this->render('FilmothequeBundle:Acteur:modifier.html.twig');  
    }
    public function supprimerAction($id)
    {
        return $this->render('FilmothequeBundle:Acteur:supprimer.html.twig');
    }
}
