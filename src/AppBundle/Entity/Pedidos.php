<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidos
 *
 * @ORM\Table(name="pedidos", uniqueConstraints={@ORM\UniqueConstraint(name="n_pedido", columns={"n_pedido"})}, indexes={@ORM\Index(name="FK_pedidos_user", columns={"user"}), @ORM\Index(name="FK_pedidos_metodos_pago", columns={"metodo_pago"})})
 * @ORM\Entity
 */
class Pedidos
{
    /**
     * @var string
     *
     * @ORM\Column(name="n_pedido", type="string", length=45, nullable=false)
     */
    private $nPedido;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \AppBundle\Entity\MetodosPago
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MetodosPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="metodo_pago", referencedColumnName="id")
     * })
     */
    private $metodoPago;



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
}
