<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temas
 *
 * @ORM\Table(name="temas", uniqueConstraints={@ORM\UniqueConstraint(name="nombre", columns={"nombre"})}, indexes={@ORM\Index(name="FK_temas_imagenes", columns={"imagen"})})
 * @ORM\Entity
 */
class Temas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="temas", type="integer", nullable=true)
     */
    private $temas;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Imagenes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Imagenes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imagen", referencedColumnName="id")
     * })
     */
    private $imagen;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Temas
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
     * Set temas
     *
     * @param integer $temas
     *
     * @return Temas
     */
    public function setTemas($temas)
    {
        $this->temas = $temas;

        return $this;
    }

    /**
     * Get temas
     *
     * @return integer
     */
    public function getTemas()
    {
        return $this->temas;
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
     * Set imagen
     *
     * @param \AppBundle\Entity\Imagenes $imagen
     *
     * @return Temas
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

}
