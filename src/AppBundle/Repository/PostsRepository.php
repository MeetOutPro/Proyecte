<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PostsRepository extends EntityRepository
{

    public function get_posts($user){

        $em = $this->getEntityManager();

        $temas_user = $user->gettema();

        $temas = array();

        foreach ($temas_user as $tema){
          array_push($temas,$tema->getTema()->getId());
        }

        $posts_db = $em->createQuery("SELECT p
                                    FROM AppBundle:Posts p 
                                    WHERE p.tema IN(:temas)")
                                    ->setParameter('temas',$temas)
                                    ->getResult();

        $imagenes = $em->createQuery("SELECT  i
                                    FROM AppBundle:Imagenes i")
                                    ->getResult();

        $detalle_imagenes = $em->createQuery("SELECT  di
                                    FROM AppBundle:DetalleImagen di
                                    WHERE di.post IN(:posts)")
                                     ->setParameter('posts',$posts_db)
                                     ->getResult();

        $posts = array();

        $post = null;

        foreach ($detalle_imagenes as $detalle_imagen){

            if($post != $detalle_imagen->getPost() ){

                if($post != null){
                    array_push($posts,$post);
                }

                $post = $detalle_imagen->getPost();
                $imag = array();

            }

            array_push($imag,$detalle_imagen->getImagen());

            $post->setimagen($imag);

        }

        array_push($posts,$post);

        return $posts;

    }
}