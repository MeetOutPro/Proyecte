<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class QuedadasRepository extends EntityRepository
{

    public function get_quedadas($user)
    {

        $em = $this->getEntityManager();

        $provincia_user = $user->getProvincia();

        $quedadas_db = $em->createQuery("SELECT q
                                    FROM AppBundle:Quedadas q 
                                    WHERE q.municipio IN(:provincia)")
                                    ->setParameter('provincia',$provincia_user)
                                    ->getResult();

        $imagenes = $em->createQuery("SELECT  i
                                    FROM AppBundle:Imagenes i")
                                    ->getResult();

        $detalle_imagenes = $em->createQuery("SELECT  di
                                    FROM AppBundle:DetalleImagenQuedada di
                                    WHERE di.quedada IN(:quedadas)")
                                     ->setParameter('quedadas',$quedadas_db)
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