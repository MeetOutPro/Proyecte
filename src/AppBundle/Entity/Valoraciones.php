<?php

namespace AppBundle\Entity;

/**
 * Valoraciones
 */
class Valoraciones
{
    /**
     * @var integer
     */
    private $post;

    /**
     * @var integer
     */
    private $valoracion = '0';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * Set post
     *
     * @param integer $post
     *
     * @return Valoraciones
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return integer
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set valoracion
     *
     * @param integer $valoracion
     *
     * @return Valoraciones
     */
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;

        return $this;
    }

    /**
     * Get valoracion
     *
     * @return integer
     */
    public function getValoracion()
    {
        return $this->valoracion;
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Valoraciones
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
