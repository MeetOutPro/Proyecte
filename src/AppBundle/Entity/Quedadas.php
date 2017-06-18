<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quedadas
 *
 * @ORM\Table(name="quedadas", indexes={@ORM\Index(name="FK_quedadas_user", columns={"creador"}), @ORM\Index(name="FK_quedadas_municipio", columns={"municipio"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuedadasRepository")
 */
class Quedadas
{
    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=20, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=50, nullable=false)
     */
    private $lugar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_quedada", type="datetime", nullable=false)
     */
    private $fechaQuedada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creador", referencedColumnName="id")
     * })
     */
    private $creador;

    /**
     * @var \AppBundle\Entity\Provincias
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Provincias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="municipio", referencedColumnName="id")
     * })
     */
    private $municipio;

    /**
     * Many User have Many Imagenes.
     * @ORM\ManyToMany(targetEntity="Imagenes")
     * @ORM\JoinTable(name="DetalleImagenQuedada",
     *      joinColumns={@ORM\JoinColumn(name="quedada", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="imagen", referencedColumnName="id")}
     *      )
     */
    private $imagen;

    public function __construct()
    {
        $this->imagen = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return User
     */
    public function setimagen($imagen)
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
}
