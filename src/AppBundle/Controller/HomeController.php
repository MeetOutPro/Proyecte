<?php

namespace AppBundle\Controller;


use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use FOS\UserBundle\Controller\SecurityController;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Security;

class HomeController extends BaseController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $user = new user();

        $session = $request->getSession();

        $form = $this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        $lastUsernameKey = Security::LAST_USERNAME;

        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

        if($form->isSubmitted() && $form->isValid()){

            $inputs = $form->getData();

            $session->set('user',$inputs);

            return $this->redirect('register');
        }



        $data = array(
            'form'          => $form->createView(),
            'last_username' => $lastUsername,
        );

        return $this->render('home/index.html.twig' ,$data) ;
    }
}
