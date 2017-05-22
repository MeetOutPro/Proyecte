<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleComentario
 *
 * @ORM\Table(name="detalle_comentario", indexes={@ORM\Index(name="FK_detalle_comentario_post", columns={"post"}), @ORM\Index(name="FK_ddetalle_comentario_comentario", columns={"comentario"}), @ORM\Index(name="FK_ddetalle_comentario_user", columns={"user"})})
 * @ORM\Entity
 */
class DetalleComentario
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
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;

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
     * @return DetalleComentario
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return DetalleComentario
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
     * Set comentario
     *
     * @param \AppBundle\Entity\Comentarios $comentario
     *
     * @return DetalleComentario
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
}
