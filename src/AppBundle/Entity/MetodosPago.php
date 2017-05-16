<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MetodosPago
 *
 * @ORM\Table(name="metodos_pago", uniqueConstraints={@ORM\UniqueConstraint(name="metodos_pago", columns={"metodos_pago"})})
 * @ORM\Entity
 */
class MetodosPago
{
    /**
     * @var string
     *
     * @ORM\Column(name="metodos_pago", type="string", length=45, nullable=false)
     */
    private $metodosPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

