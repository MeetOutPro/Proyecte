<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTemas
 *
 * @ORM\Table(name="user_temas", indexes={@ORM\Index(name="FK_user_temas_temas", columns={"tema"}), @ORM\Index(name="FK_user_temas_user", columns={"user"})})
 * @ORM\Entity
 */
class UserTemas
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
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \AppBundle\Entity\Temas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Temas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tema", referencedColumnName="id")
     * })
     */
    private $tema;


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
     * @return UserTemas
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
     * Set tema
     *
     * @param \AppBundle\Entity\Temas $tema
     *
     * @return UserTemas
     */
    public function setTema(\AppBundle\Entity\Temas $tema = null)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return \AppBundle\Entity\Temas
     */
    public function getTema()
    {
        return $this->tema;
    }
}
