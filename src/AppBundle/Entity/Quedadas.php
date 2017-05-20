<?php

namespace AppBundle\Entity;

/**
 * Quedadas
 */
class Quedadas
{
    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $lugar;

    /**
     * @var \DateTime
     */
    private $fechaQuedada;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Provincias
     */
    private $municipio;

    /**
     * @var \AppBundle\Entity\User
     */
    private $creador;


    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Quedadas
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Quedadas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Quedadas
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set fechaQuedada
     *
     * @param \DateTime $fechaQuedada
     *
     * @return Quedadas
     */
    public function setFechaQuedada($fechaQuedada)
    {
        $this->fechaQuedada = $fechaQuedada;

        return $this;
    }

    /**
     * Get fechaQuedada
     *
     * @return \DateTime
     */
    public function getFechaQuedada()
    {
        return $this->fechaQuedada;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Quedadas
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
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
     * Set municipio
     *
     * @param \AppBundle\Entity\Provincias $municipio
     *
     * @return Quedadas
     */
    public function setMunicipio(\AppBundle\Entity\Provincias $municipio = null)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return \AppBundle\Entity\Provincias
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set creador
     *
     * @param \AppBundle\Entity\User $creador
     *
     * @return Quedadas
     */
    public function setCreador(\AppBundle\Entity\User $creador = null)
    {
        $this->creador = $creador;

        return $this;
    }

    /**
     * Get creador
     *
     * @return \AppBundle\Entity\User
     */
    public function getCreador()
    {
        return $this->creador;
    }
}
