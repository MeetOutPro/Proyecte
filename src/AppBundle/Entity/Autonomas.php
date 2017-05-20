<?php

namespace AppBundle\Entity;

/**
 * Autonomas
 */
class Autonomas
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
     * @var \AppBundle\Entity\Paises
     */
    private $pais;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Autonomas
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
     * Set pais
     *
     * @param \AppBundle\Entity\Paises $pais
     *
     * @return Autonomas
     */
    public function setPais(\AppBundle\Entity\Paises $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \AppBundle\Entity\Paises
     */
    public function getPais()
    {
        return $this->pais;
    }
}
