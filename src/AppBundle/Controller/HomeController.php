<?php

namespace AppBundle\Controller;


use AppBundle\Form\RegistrationType;
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

        $form = $this->createForm(RegistrationType::class,$user);

        $form->handleRequest($request);

        $lastUsernameKey = Security::LAST_USERNAME;

        $login = $this->loginAction($request);

        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

        if($form->isSubmitted() && $form->isValid()){

            $inputs = $form->getData();

            $session->set('user',$inputs);

            return $this->redirect('register');
        }



        $data = array(
            'form'          => $form->createView(),
            'last_username' => $lastUsername,
            'error'         => $login['error'],
            'csrf_token'    => $login['csrf_token']
        );

        return $this->render('home/index.html.twig' ,$data) ;
    }


    public function loginAction(Request $request)
    {
        /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $session = $request->getSession();

        $authErrorKey = Security::AUTHENTICATION_ERROR;
        $lastUsernameKey = Security::LAST_USERNAME;

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has($authErrorKey)) {
            $error = $request->attributes->get($authErrorKey);
        } elseif (null !== $session && $session->has($authErrorKey)) {
            $error = $session->get($authErrorKey);
            $session->remove($authErrorKey);
        } else {
            $error = null;
        }

        if (!$error instanceof AuthenticationException) {
            $error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

        $csrfToken = $this->has('security.csrf.token_manager')
            ? $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue()
            : null;

        $data = array(
            'last_username'     => $lastUsername,
            'error'             => $error,
            'csrf_token'        => $csrfToken,
        );

        return $data;
    }
}
