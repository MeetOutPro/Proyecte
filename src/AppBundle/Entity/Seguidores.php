<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguidores
 *
 * @ORM\Table(name="seguidores", indexes={@ORM\Index(name="FK_seguidores_user", columns={"user_a_seguir"}), @ORM\Index(name="FK_seguidores_user2", columns={"user_seguido"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="src\AppBundle\Seguidores\SeguidoresRepository")
 */
class Seguidores
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
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_seguido", referencedColumnName="id")
     * })
     */
    private $userSeguido;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_a_seguir", referencedColumnName="id")
     * })
     */
    private $userASeguir;



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
     * Set userSeguido
     *
     * @param \AppBundle\Entity\User $userSeguido
     *
     * @return Seguidores
     */
    public function setUserSeguido(\AppBundle\Entity\User $userSeguido = null)
    {
        $this->userSeguido = $userSeguido;

        return $this;
    }

    /**
     * Get userSeguido
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserSeguido()
    {
        return $this->userSeguido;
    }

    /**
     * Set userASeguir
     *
     * @param \AppBundle\Entity\User $userASeguir
     *
     * @return Seguidores
     */
    public function setUserASeguir(\AppBundle\Entity\User $userASeguir = null)
    {
        $this->userASeguir = $userASeguir;

        return $this;
    }

    /**
     * Get userASeguir
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserASeguir()
    {
        return $this->userASeguir;
    }
}
