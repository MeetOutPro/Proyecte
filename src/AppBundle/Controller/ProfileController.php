<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{
    /**
     * @Route("/profile", name="profilepage")
     */

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('profile/index.html.twig');
    }
}

