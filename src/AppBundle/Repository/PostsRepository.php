<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PostsRepository extends EntityRepository
{

    public function ImagePost()
    {
        return "test";
    }
}