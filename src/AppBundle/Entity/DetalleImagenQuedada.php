<?php

namespace AppBundle\Entity;

/**
 * DetalleImagenQuedada
 */
class DetalleImagenQuedada
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
     * Set imagen
     *
     * @param \AppBundle\Entity\Imagenes $imagen
     *
     * @return DetalleImagenQuedada
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
     * Set quedada
     *
     * @param \AppBundle\Entity\Quedadas $quedada
     *
     * @return DetalleImagenQuedada
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
