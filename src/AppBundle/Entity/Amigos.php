<?php

namespace AppBundle\Entity;

/**
 * Amigos
 */
class Amigos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     */
    private $userAcepta;

    /**
     * @var \AppBundle\Entity\User
     */
    private $userSolicita;


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
     * Set userAcepta
     *
     * @param \AppBundle\Entity\User $userAcepta
     *
     * @return Amigos
     */
    public function setUserAcepta(\AppBundle\Entity\User $userAcepta = null)
    {
        $this->userAcepta = $userAcepta;

        return $this;
    }

    /**
     * Get userAcepta
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserAcepta()
    {
        return $this->userAcepta;
    }

    /**
     * Set userSolicita
     *
     * @param \AppBundle\Entity\User $userSolicita
     *
     * @return Amigos
     */
    public function setUserSolicita(\AppBundle\Entity\User $userSolicita = null)
    {
        $this->userSolicita = $userSolicita;

        return $this;
    }

    /**
     * Get userSolicita
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserSolicita()
    {
        return $this->userSolicita;
    }
}
