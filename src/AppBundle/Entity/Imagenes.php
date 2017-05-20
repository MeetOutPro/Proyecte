<?php

namespace AppBundle\Entity;

/**
 * Imagenes
 */
class Imagenes
{
    /**
     * @var string
     */
    private $ruta;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set ruta
     *
     * @param string $ruta
     *
     * @return Imagenes
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string
     */
    public function getRuta()
    {
        return $this->ruta;
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
}
