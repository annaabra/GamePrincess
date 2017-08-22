<?php

namespace GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GameController extends Controller
{
    /**
     * @Route("/goToAction/{id}")
     */
    public function goToAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('GameBundle:Locations');
        $location = $repository->find($id);
        $links = $location->getLinks();
        $description = $repository->find($id);
        return $this->render('GameBundle:Game:go_to.html.twig',    ["title"=>$location->getLocationName(),"description"=>$description->getDescription(),"links"=>$links]);
    }

}
