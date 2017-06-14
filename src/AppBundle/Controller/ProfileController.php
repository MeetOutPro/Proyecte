<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Seguidores;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{

    public function indexAction($page)
    {
        $user = $this->getUser();

        $user_profile = $this->getDoctrine()->getRepository('AppBundle:User')->find($page);

        $user_temas = $this->getDoctrine()->getRepository('AppBundle:UserTemas')->findBy(array('user'=>$user_profile->getId()));

        $user_profile->settema($user_temas);

        $em = $this->getDoctrine()->getManager();


        $posts = $em->getRepository('AppBundle:Posts')
            ->get_UserPosts($user_profile);

        foreach ($posts as $post){
            if($post){
                if (strlen($post->getDescripcion()) > 100)
                    $post->setDescripcion(substr($post->getDescripcion(), 0, 100) . '...');
            }
        }

        $data = array(
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
            ->RelationExistbyId($data['id_profile'],$data['user']);

        $follow = new Seguidores();

        $follow->setUserASeguir($user_profile);

        $follow->setUserSeguido($user);

        $em = $this->getDoctrine()->getManager();
        $em->persist($follow);
        $em->flush();

        return true;
    }

}

