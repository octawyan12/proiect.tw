<?php

namespace Manager\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ManagerAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
