<?php

namespace AppBundle\Entity;

/**
 * DetalleComentarioQuedada
 */
class DetalleComentarioQuedada
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;

    /**
     * @var \AppBundle\Entity\Comentarios
     */
    private $comentario;

    /**
     * @var \AppBundle\Entity\Quedadas
     */
    private $quedada;


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
     * @return DetalleComentarioQuedada
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

    /**
     * Set comentario
     *
     * @param \AppBundle\Entity\Comentarios $comentario
     *
     * @return DetalleComentarioQuedada
     */
    public function setComentario(\AppBundle\Entity\Comentarios $comentario = null)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return \AppBundle\Entity\Comentarios
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set quedada
     *
     * @param \AppBundle\Entity\Quedadas $quedada
     *
     * @return DetalleComentarioQuedada
     */
    public function setQuedada(\AppBundle\Entity\Quedadas $quedada = null)
    {
        $this->quedada = $quedada;

        return $this;
    }

    /**
     * Get quedada
     *
     * @return \AppBundle\Entity\Quedadas
     */
    public function getQuedada()
    {
        return $this->quedada;
    }
}
