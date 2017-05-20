<?php

namespace AppBundle\Entity;

/**
 * Posts
 */
class Posts
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
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaPublicacion;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Temas
     */
    private $tema;

    /**
     * @var \AppBundle\Entity\User
     */
    private $creador;


    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Posts
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
     * @return Posts
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Posts
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
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     *
     * @return Posts
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
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
     * Set tema
     *
     * @param \AppBundle\Entity\Temas $tema
     *
     * @return Posts
     */
    public function setTema(\AppBundle\Entity\Temas $tema = null)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return \AppBundle\Entity\Temas
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set creador
     *
     * @param \AppBundle\Entity\User $creador
     *
     * @return Posts
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
