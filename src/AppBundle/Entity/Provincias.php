<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincias
 *
 * @ORM\Table(name="provincias", uniqueConstraints={@ORM\UniqueConstraint(name="Nombre", columns={"Nombre"})}, indexes={@ORM\Index(name="FK_provincias_autonomas", columns={"autonoma"})})
 * @ORM\Entity
 */
class Provincias
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Autonomas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Autonomas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="autonoma", referencedColumnName="id")
     * })
     */
    private $autonoma;


}

