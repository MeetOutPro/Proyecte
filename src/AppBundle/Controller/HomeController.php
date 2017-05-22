<?php

namespace AppBundle\Controller;

use AppBundle\Form\RegistrationType;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user = new user();
        $form_registry = $this->createForm(RegistrationType::class, $user);

        $form_registry->handleRequest($request);
            if($form_registry->isSubmitted() && $form_registry->isValid()){
                return $this->render('register/index.html.twig',
                    array('form_registry' => $form_registry->createView())
                );
            }
        // replace this example code with whatever you need
        return $this->render('home/index.html.twig',
            array('form_registry' => $form_registry->createView())
        );
    }


}
