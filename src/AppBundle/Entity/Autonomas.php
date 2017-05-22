<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autonomas
 *
 * @ORM\Table(name="autonomas", uniqueConstraints={@ORM\UniqueConstraint(name="Nombre", columns={"Nombre"})}, indexes={@ORM\Index(name="FK_provincias_paises", columns={"pais"})})
 * @ORM\Entity
 */
class Autonomas
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
     * @var \AppBundle\Entity\Paises
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pais", referencedColumnName="id")
     * })
     */
    private $pais;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Autonomas
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

    /**
     * Set pais
     *
     * @param \AppBundle\Entity\Paises $pais
     *
     * @return Autonomas
     */
    public function setPais(\AppBundle\Entity\Paises $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \AppBundle\Entity\Paises
     */
    public function getPais()
    {
        return $this->pais;
    }
}
