<?php

namespace AppBundle\Entity;

/**
 * Donantes
 */
class Donantes
{
    /**
     * @var integer
     */
    private $catidad = '0';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     */
    private $userDonante;

    /**
     * @var \AppBundle\Entity\User
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
