<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Donantes
 *
 * @ORM\Table(name="Donantes", indexes={@ORM\Index(name="FK_Donantes_user", columns={"user_a_donar"}), @ORM\Index(name="FK_Donantes_user2", columns={"user_donante"})})
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
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_donante", referencedColumnName="id")
     * })
     */
    private $userDonante;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_a_donar", referencedColumnName="id")
     * })
     */
    private $userADonar;



    /**
     * Set catidad
     *
     * @param integer $catidad
     *
     * @return Donantes
     */
    public function setCatidad($catidad)
    {
        $this->catidad = $catidad;

        return $this;
    }

    /**
     * Get catidad
     *
     * @return integer
     */
    public function getCatidad()
    {
        return $this->catidad;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userDonante
     *
     * @param \AppBundle\Entity\User $userDonante
     *
     * @return Donantes
     */
    public function setUserDonante(\AppBundle\Entity\User $userDonante = null)
    {
        $this->userDonante = $userDonante;

        return $this;
    }

    /**
     * Get userDonante
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserDonante()
    {
        return $this->userDonante;
    }

    /**
     * Set userADonar
     *
     * @param \AppBundle\Entity\User $userADonar
     *
     * @return Donantes
     */
    public function setUserADonar(\AppBundle\Entity\User $userADonar = null)
    {
        $this->userADonar = $userADonar;

        return $this;
    }

    /**
     * Get userADonar
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserADonar()
    {
        return $this->userADonar;
    }
}
