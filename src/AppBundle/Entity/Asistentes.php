<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistentes
 *
 * @ORM\Table(name="asistentes", uniqueConstraints={@ORM\UniqueConstraint(name="quedada", columns={"quedada"})}, indexes={@ORM\Index(name="FK_asistentes_users", columns={"asistentes"})})
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
     * @var \AppBundle\Entity\Quedadas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Quedadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quedada", referencedColumnName="id")
     * })
     */
    private $quedada;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asistentes", referencedColumnName="id")
     * })
     */
    private $asistentes;


}

