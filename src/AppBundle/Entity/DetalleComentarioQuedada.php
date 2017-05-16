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
     * @var \AppBundle\Entity\Quedadas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Quedadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quedada", referencedColumnName="id")
     * })
     */
    private $quedada;


}

