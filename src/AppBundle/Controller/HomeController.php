<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->new_user();

        // replace this example code with whatever you need
        return $this->render('home/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function new_user(Request $request){

        //instanciamos un objeto de tipo usuario
        $user = new User();

        //nos basamos en el objeto usuario para crear el formulario de registro de usuarios
        $form = $this->createFormBuilder($user)
            ->add('nombrecompleto', TextType::class)
            ->add('username', TextType::class)
            ->add('contrasenya', TextType::class)
            ->add('email', TextType::class)
            ->add('ciudad', TextType::class)
            ->add('imagen', TextType::class)
            ->add('sexo', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Registrate'))
            ->getForm();

        return $form;
    }

}
