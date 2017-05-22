<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagenes
 *
 * @ORM\Table(name="imagenes")
 * @ORM\Entity
 */
class Imagenes
{
    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=45, nullable=false)
     */
    private $ruta;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set ruta
     *
     * @param string $ruta
     *
     * @return Imagenes
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string
     */
    public function getRuta()
    {
        return $this->ruta;
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
