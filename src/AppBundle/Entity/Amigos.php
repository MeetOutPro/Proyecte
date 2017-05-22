<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Amigos
 *
 * @ORM\Table(name="amigos", indexes={@ORM\Index(name="FK_amigos_user", columns={"user_solicita"}), @ORM\Index(name="FK_amigos_user2", columns={"user_acepta"})})
 * @ORM\Entity
 */
class Amigos
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
     *   @ORM\JoinColumn(name="user_acepta", referencedColumnName="id")
     * })
     */
    private $userAcepta;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_solicita", referencedColumnName="id")
     * })
     */
    private $userSolicita;



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
     * Set userAcepta
     *
     * @param \AppBundle\Entity\User $userAcepta
     *
     * @return Amigos
     */
    public function setUserAcepta(\AppBundle\Entity\User $userAcepta = null)
    {
        $this->userAcepta = $userAcepta;

        return $this;
    }

    /**
     * Get userAcepta
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserAcepta()
    {
        return $this->userAcepta;
    }

    /**
     * Set userSolicita
     *
     * @param \AppBundle\Entity\User $userSolicita
     *
     * @return Amigos
     */
    public function setUserSolicita(\AppBundle\Entity\User $userSolicita = null)
    {
        $this->userSolicita = $userSolicita;

        return $this;
    }

    /**
     * Get userSolicita
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserSolicita()
    {
        return $this->userSolicita;
    }
}
