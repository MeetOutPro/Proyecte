<?php

namespace AppBundle\Entity;

/**
 * DetallePedido
 */
class DetallePedido
{
    /**
     * @var integer
     */
    private $cantidad = '0';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Creditos
     */
    private $credito;

    /**
     * @var \AppBundle\Entity\Pedidos
     */
    private $pedido;


    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return DetallePedido
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
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
     * Set credito
     *
     * @param \AppBundle\Entity\Creditos $credito
     *
     * @return DetallePedido
     */
    public function setCredito(\AppBundle\Entity\Creditos $credito = null)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return \AppBundle\Entity\Creditos
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set pedido
     *
     * @param \AppBundle\Entity\Pedidos $pedido
     *
     * @return DetallePedido
     */
    public function setPedido(\AppBundle\Entity\Pedidos $pedido = null)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return \AppBundle\Entity\Pedidos
     */
    public function getPedido()
    {
        return $this->pedido;
    }
}
