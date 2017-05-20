<?php

namespace AppBundle\Entity;

/**
 * Ciudades
 */
class Ciudades
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
     * @var \AppBundle\Entity\Provincias
     */
    private $provincia;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Ciudades
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
     * Set provincia
     *
     * @param \AppBundle\Entity\Provincias $provincia
     *
     * @return Ciudades
     */
    public function setProvincia(\AppBundle\Entity\Provincias $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \AppBundle\Entity\Provincias
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}
