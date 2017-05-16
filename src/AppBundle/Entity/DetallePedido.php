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
     * @var \AppBundle\Entity\Creditos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Creditos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="credito", referencedColumnName="id")
     * })
     */
    private $credito;

    /**
     * @var \AppBundle\Entity\Pedidos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pedidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pedido", referencedColumnName="id")
     * })
     */
    private $pedido;


}

