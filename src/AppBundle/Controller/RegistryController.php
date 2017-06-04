<?php

namespace AppBundle\Controller;

use AppBundle\Form\RegistrationType;
use AppBundle\Entity\User;
use FOS\UserBundle\Controller\SecurityController;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Security;

class RegistryController extends BaseController
{
    /**
     * @Route("/register", name="registerpage")
     */
    public function registerAction(Request $request)
    {
        $session = $request->getSession();

        $user_session = $session->get('user');

        if($user_session == null){
            return $this->redirect('/');
        }

        $user = new user();

        $form_registry = $this->createForm(RegistrationType::class, $user);

        $temas = $this->getDoctrine()
            ->getRepository('AppBundle:Temas')
            ->findAll();

        $form_registry->setData($user);

        $form_registry->handleRequest($request);

        /** @var $userManager UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        $login_manager = $this->get('fos_user.security.login_manager');

        if($form_registry->isSubmitted() && $form_registry->isValid()){

            $inputs = $form_registry->getData();

            try{

                $userManager->updateUser($user);

            }catch (Exception $e){

                echo 'Falló la conexión: ' . $e->getMessage();

            }

            $firewallName = $this->container->getParameter('fos_user.firewall_name');

            $login_manager->loginUser($firewallName,$user);

            return $this->redirect('/dashboard');

        }

        $data = array(
            'form'  => $form_registry->createView(),
            'temas' => $temas,
            'user'  => $user_session
        );

        return $this->render('register/index.html.twig',$data);
    }

}
