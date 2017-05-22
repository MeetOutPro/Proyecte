<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleComentarioQuedada
 *
 * @ORM\Table(name="detalle_comentario_quedada", indexes={@ORM\Index(name="FK_detalle_comentario_quedada", columns={"quedada"}), @ORM\Index(name="FK_detalle_comentario_quedadacomentario", columns={"comentario"}), @ORM\Index(name="FK_detalle_comentario_quedada_user", columns={"user"})})
 * @ORM\Entity
 */
class DetalleComentarioQuedada
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
     * @var \AppBundle\Entity\Comentarios
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Comentarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comentario", referencedColumnName="id")
     * })
     */
    private $comentario;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comentario
     *
     * @param \AppBundle\Entity\Comentarios $comentario
     *
     * @return DetalleComentarioQuedada
     */
    public function setComentario(\AppBundle\Entity\Comentarios $comentario = null)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return \AppBundle\Entity\Comentarios
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return DetalleComentarioQuedada
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set quedada
     *
     * @param \AppBundle\Entity\Quedadas $quedada
     *
     * @return DetalleComentarioQuedada
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
}
