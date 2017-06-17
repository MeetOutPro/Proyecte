<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AsistentesRepository extends EntityRepository
{

    public function RelationExistbyId($event,$user){

        $user           = $user->getId();
        $quedada        = $event->getId();

        $em = $this->getEntityManager();

        $relation = $em->createQuery("SELECT a
                                      FROM AppBundle:Asistentes a
                                      WHERE a.asistentes =:user AND a.quedada =:event")
                                      ->setParameter('user',$user)
                                      ->setParameter('event',$quedada)
                                      ->getResult();

        if($relation){

            return $relation;

        }

        return false;
    }

    public function RelationExistbyArray(array $events,$user){

        $user = $user->getId();
        $quedadas = array();

        foreach ($events as $event){
            array_push($quedadas,$event->getId());
        }

        $em = $this->getEntityManager();

        $relation = $em->createQuery("SELECT a
                                          FROM AppBundle:Asistentes a
                                          WHERE a.quedada IN (:events) AND a.asistentes = :user  ")
            ->setParameter('user',$user)
            ->setParameter('events',$quedadas)
            ->getResult();

        if($relation){

            return $relation;

        }

        return false;
    }

}