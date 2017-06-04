<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{

    public function indexAction($page)
    {
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($page);

        $posts = $this->getDoctrine()->getRepository('AppBundle:Posts')->findBy(array('creador' => $user));

        $data = array(
            'user'  => $user,
            'posts' => $posts
        );
        // replace this example code with whatever you need
        return $this->render('profile/index.html.twig',$data);
    }
}

