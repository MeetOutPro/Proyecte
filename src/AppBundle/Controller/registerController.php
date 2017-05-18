<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class registerController extends Controller
{
    /**
     * @Route("/register", name="registrypage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('register/index.html.twig');
    }
}

