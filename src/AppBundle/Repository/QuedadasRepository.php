<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class QuedadasRepository extends EntityRepository
{

    public function get_quedadas($user)
    {

        $em = $this->getEntityManager();

        $provincia_user = $user->getProvincia();

        $detalle_imagenes = $em->createQuery("SELECT  di
                                    FROM AppBundle:Imagenes i 
                                    INNER JOIN AppBundle:DetalleImagenQuedada di
                                    WITH  i.id = di.imagen
                                    INNER JOIN AppBundle:Quedadas q
                                    WITH di.quedada = q.id
                                    WHERE q.municipio IN(:provincia)
                                    ORDER BY q.fechaQuedada ASC")
                                    ->setParameter('provincia',$provincia_user)
                                     ->getResult();

        $quedadas = array();

        $quedada = null;

        foreach ($detalle_imagenes as $detalle_imagen){

            if($quedada != $detalle_imagen->getQuedada() ){

                if($quedada != null){
                    array_push($quedadas,$quedada);
                }

                $quedada = $detalle_imagen->getQuedada();
                $imag = array();

            }

            array_push($imag,$detalle_imagen->getImagen());

            $quedada->setimagen($imag);

        }

        array_push($quedadas,$quedada);

        return $quedadas;

    }

    public function get_quedadaProfile($user){

        $user_profile = $user->getId();

        $em = $this->getEntityManager();

        $detalle_imagenes = $em->createQuery("SELECT di
                                    FROM AppBundle:Imagenes i 
                                    INNER JOIN AppBundle:DetalleImagenQuedada di
                                    WITH  i.id = di.imagen
                                    INNER JOIN AppBundle:Quedadas q
                                    WITH di.quedada = q.id
                                    INNER JOIN AppBundle:Asistentes a
                                    WITH q.id = a.quedada
                                    WHERE a.asistentes = :user
                                    ORDER BY q.fechaQuedada ASC")
            ->setParameter('user',$user_profile)
            ->getResult();

        $quedadas = array();

        $quedada = null;

        foreach ($detalle_imagenes as $detalle_imagen){

            if($quedada != $detalle_imagen->getQuedada() ){

                if($quedada != null){
                    array_push($quedadas,$quedada);
                }

                $quedada = $detalle_imagen->getQuedada();
                $imag = array();

            }

            array_push($imag,$detalle_imagen->getImagen());

            $quedada->setimagen($imag);

        }

        array_push($quedadas,$quedada);

        return $quedadas;

    }

}