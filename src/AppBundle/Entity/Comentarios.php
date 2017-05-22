<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarios
 *
 * @ORM\Table(name="comentarios")
 * @ORM\Entity
 */
class Comentarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="string", length=200, nullable=false)
     */
    private $comentarios;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set comentarios
     *
     * @param string $comentarios
     *
     * @return Comentarios
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string
     */
    public function getComentarios()
    {
        return $this->comentarios;
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
