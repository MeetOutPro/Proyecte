<?php

namespace AppBundle\Controller;

use AppBundle\Form\RegistrationType;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\RegistrationController as BaseController;

class RegistryController extends BaseController
{
    /**
     * @Route("/register", name="registerpage")
     */
    public function registerAction(Request $request)
    {
        $user = new user();
        $form_registry = $this->createForm(RegistrationType::class, $user);

        return $this->render('register/index.html.twig',
            array('form' => $form_registry->createView()));
    }
}
