<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SeguidoresRepository extends EntityRepository
{

    public function RelationExistbyId($profile,$user){

        $id_follow      = $user->getId();
        $id_tofollow    = $profile->getId();

        $em = $this->getEntityManager();

        $relation = $em->createQuery("SELECT s
                                      FROM AppBundle:Seguidores s
                                      WHERE s.userSeguido =:follower AND s.userASeguir =:follow")
                                      ->setParameter('follower',$id_follow)
                                      ->setParameter('follow',$id_tofollow)
                                      ->getResult();

        if($relation){

            return $relation;

        }

        return false;
    }

}