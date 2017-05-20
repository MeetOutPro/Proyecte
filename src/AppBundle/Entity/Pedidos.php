<?php

namespace AppBundle\Entity;

/**
 * Pedidos
 */
class Pedidos
{
    /**
     * @var string
     */
    private $nPedido;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\MetodosPago
     */
    private $metodoPago;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * Set nPedido
     *
     * @param string $nPedido
     *
     * @return Pedidos
     */
    public function setNPedido($nPedido)
    {
        $this->nPedido = $nPedido;

        return $this;
    }

    /**
     * Get nPedido
     *
     * @return string
     */
    public function getNPedido()
    {
        return $this->nPedido;
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
     * Set metodoPago
     *
     * @param \AppBundle\Entity\MetodosPago $metodoPago
     *
     * @return Pedidos
     */
    public function setMetodoPago(\AppBundle\Entity\MetodosPago $metodoPago = null)
    {
        $this->metodoPago = $metodoPago;

        return $this;
    }

    /**
     * Get metodoPago
     *
     * @return \AppBundle\Entity\MetodosPago
     */
    public function getMetodoPago()
    {
        return $this->metodoPago;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Pedidos
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
