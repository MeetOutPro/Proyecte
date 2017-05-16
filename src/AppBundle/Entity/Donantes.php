<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Donantes
 *
 * @ORM\Table(name="Donantes", indexes={@ORM\Index(name="FK_Donantes_users", columns={"user_a_donar"}), @ORM\Index(name="FK_Donantes_users2", columns={"user_donante"})})
 * @ORM\Entity
 */
class Donantes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="catidad", type="integer", nullable=false)
     */
    private $catidad = '0';

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
     *   @ORM\JoinColumn(name="user_donante", referencedColumnName="id")
     * })
     */
    private $userDonante;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_a_donar", referencedColumnName="id")
     * })
     */
    private $userADonar;


}

