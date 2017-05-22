<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paises
 *
 * @ORM\Table(name="paises", uniqueConstraints={@ORM\UniqueConstraint(name="Nombre", columns={"Nombre"})})
 * @ORM\Entity
 */
class Paises
{
    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=2, nullable=true)
     */
    private $iso;

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
     * Set iso
     *
     * @param string $iso
     *
     * @return Paises
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * Get iso
     *
     * @return string
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Paises
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
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
}
