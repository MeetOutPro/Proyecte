<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleImagenQuedada
 *
 * @ORM\Table(name="detalle_imagen_quedada", indexes={@ORM\Index(name="FKdetalle_imagen_quedada", columns={"quedada"}), @ORM\Index(name="FK_detalle_imagen_quedada_imagen", columns={"imagen"})})
 * @ORM\Entity
 */
class DetalleImagenQuedada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Quedadas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Quedadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quedada", referencedColumnName="id")
     * })
     */
    private $quedada;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
}
