<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts", indexes={@ORM\Index(name="FK_posts_user", columns={"creador"}), @ORM\Index(name="FK_posts_temas", columns={"tema"})})
 * @ORM\Entity
 */
class Posts
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_publicacion", type="datetime", nullable=false)
     */
    private $fechaPublicacion;

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
     * @var \AppBundle\Entity\Temas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Temas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tema", referencedColumnName="id")
     * })
     */
    private $tema;



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
}
