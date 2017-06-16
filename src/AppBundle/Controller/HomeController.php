<?php

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use AppBundle\Form\LoginType;
use AppBundle\Form\RegistrationHomeType;
use AppBundle\Form\RegistrationType;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Security;

class HomeController extends BaseController
{

    public function indexAction(Request $request)
    {

        $form_register  = $this->registerAction($request);

        $form_login     = $this->loginAction($request);

        $data = array(
            'form_register' => $form_register->createView(),
            'form_login'    => $form_login->createView(),
        );

        return $this->render('home/index.html.twig' ,$data) ;
    }

    public function registerAction(Request $request){

        $user = new User();

        $session = $request->getSession();

        $form = $this->createForm(RegistrationHomeType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $inputs = $form->getData();

            $session->set('user',$inputs);

            return $this->redirect('/register');
        }

        return $form;

    }

    public function loginAction(Request $request){

        $user = new User();

        $form = $this->createForm(LoginType::class,$user);

        $form->handleRequest($request);

        $login_manager = $this->get('fos_user.security.login_manager');

        if($form->isSubmitted() && $form->isValid()){

            $firewallName = $this->container->getParameter('fos_user.firewall_name');

            $login_manager->loginUser($firewallName,$user);

            $user = $this->getUser();

            return $this->redirect('/dashboard');

        }

        return $form;
    }
}
