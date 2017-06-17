<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DetalleImagen;
use AppBundle\Entity\DetalleImagenQuedada;
use AppBundle\Entity\Imagenes;
use AppBundle\Entity\Posts;
use AppBundle\Entity\Quedadas;
use AppBundle\Form\PostsType;
use AppBundle\Form\QuedadasType;
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

        $user = $this->getUser();

        if(!$user){
            $this->redirect('/');
        }

        $user_temas = $this->getDoctrine()->getRepository('AppBundle:UserTemas')->findBy(array('user'=>$user->getId()));

        $user->settema($user_temas);

        $form_post = $this->newPostAction($request);

        $form_quedada = $this->newQuedadaAction($request);

        $em = $this->getDoctrine()->getManager();

        $user->followers = $em->getRepository('AppBundle:Seguidores')->get_followers($user);

        $posts = $em->getRepository('AppBundle:Posts')
            ->get_posts($user);

        $quedadas = $em->getRepository('AppBundle:Quedadas')
            ->get_quedadas($user);

        foreach ($posts as $post){
            if($post){
                if (strlen($post->getDescripcion()) > 200)
                    $post->setDescripcion(substr($post->getDescripcion(), 0, 200) . '...');
            }
        }

        foreach ($quedadas as $quedada){
            if($quedada){
                if (strlen($quedada->getDescripcion()) > 50)
                    $quedada->setDescripcion(substr($quedada->getDescripcion(), 0, 50) . '...');
            }
        }


        $data = array(
            'user'          => $user,
            'form_post'     => $form_post,
            'form_quedada'  => $form_quedada,
            'posts'         => $posts,
            'quedadas'      => $quedadas
        );
        // replace this example code with whatever you need
        return $this->render('dashboard/index.html.twig',$data);
    }


    /**
     * @Route(name="newpost")
     */
    public function newPostAction(Request $request)
    {

        $user = $this->getUser();

        $post = new Posts();

        $form_post = $this->createForm(PostsType::class,$post);

        $form_post->handleRequest($request);

        if($form_post->isSubmitted() && $form_post->isValid()){

            $inputs = $form_post->getData();

            $post->setFechaCreacion(new \DateTime());

            $post->setFechaPublicacion(new \DateTime());

            $post->setCreador($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $em = $this->getDoctrine()->getManager();

            foreach ( $inputs->getimagen() as $imagen){

                $imagen_obj = new Imagenes();
                $imagen_obj->setFile($imagen);
                $imagen_obj->setRuta('posts/');
                $imagen_obj->upload();

                $em->persist($imagen_obj);
                $em->flush();

                $detalle_imagen = new DetalleImagen();
                $detalle_imagen->setImagen($imagen_obj);
                $detalle_imagen->setPost($post);

                $em->persist($detalle_imagen);
                $em->flush();
            }


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

    public function newQuedadaAction(Request $request){

        $user = $this->getUser();

        $quedada = new Quedadas();

        $form_quedada = $this->createForm(QuedadasType::class,$quedada);

        $form_quedada->handleRequest($request);

        if($form_quedada->isSubmitted() && $form_quedada->isValid()){

            $inputs = $form_quedada->getData();

            $quedada->setFechaCreacion(new \DateTime());

            $quedada->setCreador($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($quedada);
            $em->flush();

            $em = $this->getDoctrine()->getManager();

            foreach ( $inputs->getimagen() as $imagen){

                $imagen_obj = new Imagenes();
                $imagen_obj->setFile($imagen);
                $imagen_obj->setRuta('quedadas/');
                $imagen_obj->upload();

                $em->persist($imagen_obj);
                $em->flush();

                $detalle_imagen = new DetalleImagenQuedada();
                $detalle_imagen->setImagen($imagen_obj);
                $detalle_imagen->setQuedada($quedada);

                $em->persist($detalle_imagen);
                $em->flush();
            }


            return $this->redirect('/dashboard/');
        }

        return  $form_quedada->createView();
    }


}
