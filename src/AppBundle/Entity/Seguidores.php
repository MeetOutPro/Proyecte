<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguidores
 *
 * @ORM\Table(name="seguidores", indexes={@ORM\Index(name="FK_seguidores_users", columns={"user_a_seguir"}), @ORM\Index(name="FK_seguidores_users2", columns={"user_seguido"})})
 * @ORM\Entity
 */
class Seguidores
{
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
     *   @ORM\JoinColumn(name="user_seguido", referencedColumnName="id")
     * })
     */
    private $userSeguido;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_a_seguir", referencedColumnName="id")
     * })
     */
    private $userASeguir;


}

