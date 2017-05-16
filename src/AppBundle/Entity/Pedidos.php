<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidos
 *
 * @ORM\Table(name="pedidos", uniqueConstraints={@ORM\UniqueConstraint(name="n_pedido", columns={"n_pedido"})}, indexes={@ORM\Index(name="FK_pedidos_users", columns={"user"}), @ORM\Index(name="FK_pedidos_metodos_pago", columns={"metodo_pago"})})
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
     * @var \AppBundle\Entity\MetodosPago
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MetodosPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="metodo_pago", referencedColumnName="id")
     * })
     */
    private $metodoPago;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;


}

