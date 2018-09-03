<?php

namespace App\Controller;

use FOS\RestBundle\Controller\FOSRestController as Controller;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class ProjectsController extends Controller
{
    
    public function getProjectsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rm = new ResultSetMappingBuilder($em);
        $rm->addRootEntityFromClassMetadata('App\Entity\Projects', 'p');
        $query = $em->createNativeQuery("SELECT p.* FROM projects p", $rm);
        
        $result = $query->getResult();
        
        return $this->json($result);
    }
    
    
}
