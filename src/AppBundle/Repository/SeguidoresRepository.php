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
<<<<<<< Updated upstream
=======
    }

    public function get_followers($user){

        $id = $user->getId();

        $em = $this->getEntityManager();

        $count = $em->createQuery("SELECT COUNT(s)
                                      FROM AppBundle:Seguidores s
                                      WHERE s.userASeguir =:id ")
            ->setParameter('id',$id)
            ->getResult();

        if($count){

            return $count[0];

        }

        return 0;

>>>>>>> Stashed changes
    }

}