<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleImagen
 *
 * @ORM\Table(name="detalle_imagen", indexes={@ORM\Index(name="FK_detalle_imagen_post", columns={"post"}), @ORM\Index(name="FK_detalle_imagen_imagen", columns={"imagen"})})
 * @ORM\Entity
 */
class DetalleImagen
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
     * @var \AppBundle\Entity\Posts
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Posts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post", referencedColumnName="id")
     * })
     */
    private $post;

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
     * Set post
     *
     * @param \AppBundle\Entity\Posts $post
     *
     * @return DetalleImagen
     */
    public function setPost(\AppBundle\Entity\Posts $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \AppBundle\Entity\Posts
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set imagen
     *
     * @param \AppBundle\Entity\Imagenes $imagen
     *
     * @return DetalleImagen
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
