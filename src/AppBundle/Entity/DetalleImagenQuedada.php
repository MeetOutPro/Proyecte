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
     * @var \AppBundle\Entity\Imagenes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Imagenes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imagen", referencedColumnName="id")
     * })
     */
    private $imagen;

    /**
     * @var \AppBundle\Entity\Quedadas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Quedadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quedada", referencedColumnName="id")
     * })
     */
    private $quedada;


}

