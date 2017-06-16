<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Imagenes;
use AppBundle\Entity\User;
use AppBundle\Entity\UserTemas;
use AppBundle\Form\RegistrationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\RegistrationController as BaseController;

class RegistryController extends BaseController
{

    public function registerAction(Request $request)
    {
        $session = $request->getSession();

        $user_session = $session->get('user');

        if($user_session == null){
            return $this->redirect('/');
        }

        $user = new User();

        $user->setNombreCompleto($user_session->getUsername());
        $user->setEmail($user_session->getEmail());

        $form_registry = $this->createForm(RegistrationType::class, $user);

        $form_registry->handleRequest($request);

        /** @var $userManager UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        $login_manager = $this->get('fos_user.security.login_manager');

        if($form_registry->isSubmitted() && $form_registry->isValid()){

            $inputs = $form_registry->getData();

            $em = $this->getDoctrine()->getManager();

            if(!empty($inputs->getImagenProfile())){

                $imagen = $inputs->getImagenProfile();
                $imagen_obj = new Imagenes();
                $imagen_obj->setFile($imagen);
                $imagen_obj->setRuta('profile/');
                $imagen_obj->upload();

                $em->persist($imagen_obj);
                $em->flush();

            }else{

                $imagen_obj = new Imagenes();
                $imagen_obj->setRuta('img/profile/default/user.png');

                $em->persist($imagen_obj);
                $em->flush();

            }

            $user->setImagen($imagen_obj);

            try{
                $userManager->updateUser($user);
            }catch (Exception $e){
                echo 'El usuario ya esta Registrado:',  $e->getMessage(), "\n";
            }

            $firewallName = $this->container->getParameter('fos_user.firewall_name');

            $login_manager->loginUser($firewallName,$user);

            $user = $this->getUser();

            $em = $this->getDoctrine()->getManager();

            foreach ( $inputs->gettema() as $tema){
                $user_tema = new UserTemas();
                $user_tema->setTema($tema);
                $user_tema->setUser($user);

                $em->persist($user_tema);
                $em->flush();
            }

            return $this->redirect('/dashboard');

        }

        $data = array(
            'form'          => $form_registry->createView(),
            'user'          => $user_session
        );

        return $this->render('register/index.html.twig',$data);
    }

}
