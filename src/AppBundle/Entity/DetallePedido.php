<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallePedido
 *
 * @ORM\Table(name="detalle_pedido", uniqueConstraints={@ORM\UniqueConstraint(name="pedido", columns={"pedido"}), @ORM\UniqueConstraint(name="credito", columns={"credito"})})
 * @ORM\Entity
 */
class DetallePedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Pedidos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pedidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pedido", referencedColumnName="id")
     * })
     */
    private $pedido;

    /**
     * @var \AppBundle\Entity\Creditos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Creditos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="credito", referencedColumnName="id")
     * })
     */
    private $credito;



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
}
