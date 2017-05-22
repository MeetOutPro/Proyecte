<?php

namespace AppBundle\Controller;

use AppBundle\Form\RegistrationType;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboardpage")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getUser();

        if($user == null){
            return $this->redirect("/");
        }
        // replace this example code with whatever you need
        return $this->render('dashboard/index.html.twig');
    }
}
