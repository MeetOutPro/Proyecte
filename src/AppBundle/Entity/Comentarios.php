<?php

namespace AppBundle\Entity;

/**
 * Comentarios
 */
class Comentarios
{
    /**
     * @var string
     */
    private $comentarios;

    /**
     * @var integer
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
