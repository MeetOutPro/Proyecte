<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creditos
 *
 * @ORM\Table(name="creditos")
 * @ORM\Entity
 */
class Productos
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
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=false)
     */
    private $nombre;


    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;

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
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param float $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }


}
