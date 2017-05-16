<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valoraciones
 *
 * @ORM\Table(name="valoraciones", indexes={@ORM\Index(name="FK_valoraciones_users", columns={"user"})})
 * @ORM\Entity
 */
class Valoraciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="post", type="integer", nullable=false)
     */
    private $post;

    /**
     * @var integer
     *
     * @ORM\Column(name="valoracion", type="integer", nullable=false)
     */
    private $valoracion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;


}

