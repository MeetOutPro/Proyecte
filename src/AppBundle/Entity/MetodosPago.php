<?php

namespace AppBundle\Entity;

/**
 * MetodosPago
 */
class MetodosPago
{
    /**
     * @var string
     */
    private $metodosPago;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set metodosPago
     *
     * @param string $metodosPago
     *
     * @return MetodosPago
     */
    public function setMetodosPago($metodosPago)
    {
        $this->metodosPago = $metodosPago;

        return $this;
    }

    /**
     * Get metodosPago
     *
     * @return string
     */
    public function getMetodosPago()
    {
        return $this->metodosPago;
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
