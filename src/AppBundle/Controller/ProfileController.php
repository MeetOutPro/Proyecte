<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Asistentes;
use AppBundle\Entity\Seguidores;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{

    public function indexAction($page)
    {
        $user = $this->getUser();

        if(!$user){
            return $this->redirect('/');
        }

        $em = $this->getDoctrine()->getManager();

        $user_profile = $em->getRepository('AppBundle:User')->find($page);

        $user_temas = $em->getRepository('AppBundle:UserTemas')->findBy(array('user'=>$user_profile->getId()));

        $user_profile->settema($user_temas);

        $follow =  $em->getRepository('AppBundle:Seguidores')->RelationExistbyId($user_profile,$user);

        if($follow){

            $user->following = 1;

        }

        $posts = $em->getRepository('AppBundle:Posts')->get_UserPosts($user_profile);

        $quedadas =  $em->getRepository('AppBundle:Quedadas')->get_quedadaProfile($user_profile);

        foreach ($posts as $post){

            if($post){

                if (strlen($post->getDescripcion()) > 100){

                    $post->setDescripcion(substr($post->getDescripcion(), 0, 100) . '...');

                }

            }
        }

        foreach ($quedadas as $quedada){

            if($quedada){

                $quedada->joined = 1 ;
                $quedada->setFechaQuedada( date_format($quedada->getFechaQuedada(),'Y-m-d H:i:s'));

                if (strlen($quedada->getDescripcion()) > 20) {

                    $quedada->setDescripcion(substr($quedada->getDescripcion(), 0, 20) . '...');

                }
                if (strlen($quedada->getTitulo()) > 10) {

                    $quedada->setTitulo(substr($quedada->getTitulo(), 0, 10) . '...');

                }

            }

        }

        $data = array(
            'quedadas'      => $quedadas,
            'user'          => $user,
            'user_profile'  => $user_profile,
            'posts'         => $posts
        );

        return $this->render('profile/index.html.twig',$data);
    }

    public function newfollowAction(Request $request){

        $data = $request->request->all();

        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($data['user']);

        $user_profile = $this->getDoctrine()->getRepository('AppBundle:User')->find($data['id_profile']);

        $followers = $this->getDoctrine()->getRepository('AppBundle:Seguidores')
                          ->RelationExistbyId($user_profile,$user);

        if(!$followers){

            $follow = new Seguidores();

            $follow->setUserASeguir($user_profile);

            $follow->setUserSeguido($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($follow);
            $em->flush();

            return new JsonResponse(true);
        }

        return new JsonResponse(false);


    }


    public function unfollowAction(Request $request ){

        $data = $request->request->all();

        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($data['user']);

        $user_profile = $this->getDoctrine()->getRepository('AppBundle:User')->find($data['id_profile']);

        $followers = $this->getDoctrine()->getRepository('AppBundle:Seguidores')
            ->RelationExistbyId($user_profile,$user);

        if($followers){

            $em = $this->getDoctrine()->getManager();
            $em->remove($followers[0]);
            $em->flush();

            return new JsonResponse(true);
        }

        return new JsonResponse(false);


    }

    public function joinEventProfileAction(Request $request){

        $data = $request->request->all();

        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($data['user']);

        $event = $this->getDoctrine()->getRepository('AppBundle:Quedadas')->find($data['event']);

        $join = $this->getDoctrine()->getRepository('AppBundle:Asistentes')
            ->RelationExistbyId($event,$user);

        if(!$join){

            $joining = new Asistentes();

            $joining->setAsistentes($user);

            $joining->setQuedada($event);

            $em = $this->getDoctrine()->getManager();
            $em->persist($joining);
            $em->flush();

            return new JsonResponse(true);
        }

        return new JsonResponse(false);

    }

    public function unjoinEventProfileAction(Request $request){

        $data = $request->request->all();

        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($data['user']);

        $event = $this->getDoctrine()->getRepository('AppBundle:Quedadas')->find($data['event']);

        $join = $this->getDoctrine()->getRepository('AppBundle:Asistentes')
            ->RelationExistbyId($event,$user);

        if($join){

            $em = $this->getDoctrine()->getManager();
            $em->remove($join[0]);
            $em->flush();

            return new JsonResponse(true);
        }

        return new JsonResponse(false);

    }

}

