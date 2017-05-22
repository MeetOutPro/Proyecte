<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valoraciones
 *
 * @ORM\Table(name="valoraciones", indexes={@ORM\Index(name="FK_valoraciones_user", columns={"user"})})
 * @ORM\Entity
 */
class Valoraciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="post", type="integer", nullable=false)
     */
    private $post;

    /**
     * @var integer
     *
     * @ORM\Column(name="valoracion", type="integer", nullable=false)
     */
    private $valoracion = '0';

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
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set post
     *
     * @param integer $post
     *
     * @return Valoraciones
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return integer
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set valoracion
     *
     * @param integer $valoracion
     *
     * @return Valoraciones
     */
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;

        return $this;
    }

    /**
     * Get valoracion
     *
     * @return integer
     */
    public function getValoracion()
    {
        return $this->valoracion;
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Valoraciones
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
}
