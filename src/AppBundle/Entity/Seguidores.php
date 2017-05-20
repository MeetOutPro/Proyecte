<?php

namespace AppBundle\Entity;

/**
 * Seguidores
 */
class Seguidores
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     */
    private $userSeguido;

    /**
     * @var \AppBundle\Entity\User
     */
    private $userASeguir;


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
     * Set userSeguido
     *
     * @param \AppBundle\Entity\User $userSeguido
     *
     * @return Seguidores
     */
    public function setUserSeguido(\AppBundle\Entity\User $userSeguido = null)
    {
        $this->userSeguido = $userSeguido;

        return $this;
    }

    /**
     * Get userSeguido
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserSeguido()
    {
        return $this->userSeguido;
    }

    /**
     * Set userASeguir
     *
     * @param \AppBundle\Entity\User $userASeguir
     *
     * @return Seguidores
     */
    public function setUserASeguir(\AppBundle\Entity\User $userASeguir = null)
    {
        $this->userASeguir = $userASeguir;

        return $this;
    }

    /**
     * Get userASeguir
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserASeguir()
    {
        return $this->userASeguir;
    }
}
