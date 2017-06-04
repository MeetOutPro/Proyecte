<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Posts;
use AppBundle\Form\PostsType;
use AppBundle\Form\RegistrationType;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
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

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $form_post = $this->newPostAction($request);

        $posts = $this->getDoctrine()
            ->getRepository('AppBundle:Posts')
            ->findby( array(), array('fechaPublicacion' => 'DESC') );


        $data = array(
            'user' => $user,
            'form_post' => $form_post,
            'posts' => $posts
        );
        // replace this example code with whatever you need
        return $this->render('dashboard/index.html.twig',$data);
    }


    /**
     * @Route(name="newpost")
     */
    public function newPostAction(Request $request)
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $post = new Posts();

        $form_post = $this->createForm(PostsType::class,$post);

        $form_post->handleRequest($request);

        if($form_post->isSubmitted() && $form_post->isValid()){

            $post->setFechaCreacion(new \DateTime());

            $post->setFechaPublicacion(new \DateTime());

            $post->setCreador($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirect('/dashboard/');
        }

        return  $form_post->createView();

    }

    public function showPostAction($page)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $post =  $this->getDoctrine()
            ->getRepository('AppBundle:Posts')
            ->find($page);


        $data = array(
            'post'    => $post,

        );

        return $this->render('posts/index.html.twig',$data);

    }


}
