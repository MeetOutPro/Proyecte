<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersTemas
 *
 * @ORM\Table(name="users_temas", indexes={@ORM\Index(name="FK_users_temas_temas", columns={"tema"}), @ORM\Index(name="FK_users_temas_users", columns={"user"})})
 * @ORM\Entity
 */
class UsersTemas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Users_id", type="integer", nullable=false)
     */
    private $usersId;

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

    /**
     * @var \AppBundle\Entity\Temas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Temas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tema", referencedColumnName="id")
     * })
     */
    private $tema;


}

