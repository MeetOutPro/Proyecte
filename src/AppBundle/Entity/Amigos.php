<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Amigos
 *
 * @ORM\Table(name="amigos", indexes={@ORM\Index(name="FK_amigos_users", columns={"user_solicita"}), @ORM\Index(name="FK_amigos_users2", columns={"user_acepta"})})
 * @ORM\Entity
 */
class Amigos
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
     *   @ORM\JoinColumn(name="user_acepta", referencedColumnName="id")
     * })
     */
    private $userAcepta;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_solicita", referencedColumnName="id")
     * })
     */
    private $userSolicita;


}

