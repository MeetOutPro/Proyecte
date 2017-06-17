<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PostsRepository extends EntityRepository
{

    public function get_posts($user)
    {

        $em = $this->getEntityManager();

        $temas_user = $user->gettema();

        $temas = array();

        foreach ($temas_user as $tema){
          array_push($temas,$tema->getTema()->getId());
        }

        $detalle_imagenes = $em->createQuery("SELECT  di
                                    FROM AppBundle:Imagenes i
                                    INNER JOIN AppBundle:DetalleImagen di
                                    WITH i.id = di.imagen
                                    INNER JOIN AppBundle:Posts p
                                    WITH di.post = p.id
                                    WHERE p.tema IN(:temas)
                                    ORDER BY p.fechaPublicacion DESC")
                                    ->setParameter('temas',$temas)
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

    public function get_UserPosts($user)
    {

        $em = $this->getEntityManager();

        $id = $user->getId();

        $detalle_imagenes = $em->createQuery("SELECT  di
                                    FROM AppBundle:Imagenes i
                                    INNER JOIN AppBundle:DetalleImagen di
                                    WITH i.id = di.imagen
                                    INNER JOIN AppBundle:Posts p
                                    WITH di.post = p.id
                                    WHERE p.creador IN(:user)
                                    ORDER BY p.fechaPublicacion DESC")
            ->setParameter('user',$id)
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