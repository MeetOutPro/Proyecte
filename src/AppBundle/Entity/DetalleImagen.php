<?php

namespace AppBundle\Entity;

/**
 * DetalleImagen
 */
class DetalleImagen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Imagenes
     */
    private $imagen;

    /**
     * @var \AppBundle\Entity\Posts
     */
    private $post;


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
     * Set imagen
     *
     * @param \AppBundle\Entity\Imagenes $imagen
     *
     * @return DetalleImagen
     */
    public function setImagen(\AppBundle\Entity\Imagenes $imagen = null)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return \AppBundle\Entity\Imagenes
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set post
     *
     * @param \AppBundle\Entity\Posts $post
     *
     * @return DetalleImagen
     */
    public function setPost(\AppBundle\Entity\Posts $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Posts
     */
    public function getPost()
    {
        return $this->post;
    }
}
