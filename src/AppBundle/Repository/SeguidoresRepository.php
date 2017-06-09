<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SeguidoresRepository extends EntityRepository
{

    public function RelationExistbyId($id_tofollow,$id_follow){
        $p=$this->getEntityManager()
            ->createQuery('SELECT * FROM AppBundle:Seguidores WHERE user_a_seguir ='.$id_tofollow.' AND user_seguido = '.$id_follow)
            ->getResult();
        return;
    }
}