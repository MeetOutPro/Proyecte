<?php

namespace AppBundle\Entity;

/**
 * Provincias
 */
class Provincias
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Autonomas
     */
    private $autonoma;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Provincias
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
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
     * Set autonoma
     *
     * @param \AppBundle\Entity\Autonomas $autonoma
     *
     * @return Provincias
     */
    public function setAutonoma(\AppBundle\Entity\Autonomas $autonoma = null)
    {
        $this->autonoma = $autonoma;

        return $this;
    }

    /**
     * Get autonoma
     *
     * @return \AppBundle\Entity\Autonomas
     */
    public function getAutonoma()
    {
        return $this->autonoma;
    }
}
