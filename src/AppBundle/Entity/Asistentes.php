<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistentes
 *
 * @ORM\Table(name="asistentes", uniqueConstraints={@ORM\UniqueConstraint(name="quedada", columns={"quedada"})}, indexes={@ORM\Index(name="FK_asistentes_user", columns={"asistentes"})})
 * @ORM\Entity
 */
class Asistentes
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
     *   @ORM\JoinColumn(name="asistentes", referencedColumnName="id")
     * })
     */
    private $asistentes;

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
     * Set asistentes
     *
     * @param \AppBundle\Entity\User $asistentes
     *
     * @return Asistentes
     */
    public function setAsistentes(\AppBundle\Entity\User $asistentes = null)
    {
        $this->asistentes = $asistentes;

        return $this;
    }

    /**
     * Get asistentes
     *
     * @return \AppBundle\Entity\User
     */
    public function getAsistentes()
    {
        return $this->asistentes;
    }

    /**
     * Set quedada
     *
     * @param \AppBundle\Entity\Quedadas $quedada
     *
     * @return Asistentes
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
