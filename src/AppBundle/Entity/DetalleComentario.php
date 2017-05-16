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
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
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
     * @var \AppBundle\Entity\Posts
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Posts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post", referencedColumnName="id")
     * })
     */
    private $post;


}

