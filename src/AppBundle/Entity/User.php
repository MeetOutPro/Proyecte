<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="FK_user_provincias", columns={"provincia"}), @ORM\Index(name="FK_user_roles", columns={"rol"}), @ORM\Index(name="FK_user_imagenes", columns={"imagen"})})
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_completo", type="string", length=30, nullable=false)
     */
    protected $nombreCompleto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=false)
     */
    protected $fechaRegistro;

    /**
     * @var integer
     *
     * @ORM\Column(name="creditos", type="integer", nullable=false)
     */
    protected $creditos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=10, nullable=true)
     */
    protected $sexo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    protected $activo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="no_activo", type="boolean", nullable=false)
     */
    protected $noActivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \AppBundle\Entity\Roles
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol", referencedColumnName="id")
     * })
     */
    protected $rol;

    /**
     * @var \AppBundle\Entity\Provincias
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Provincias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia", referencedColumnName="id")
     * })
     */
    protected $provincia;

    /**
     * @var \AppBundle\Entity\Imagenes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Imagenes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imagen", referencedColumnName="id")
     * })
     */
    protected $imagen;

    /**
     * Many User have Many temas.
     * @ORM\ManyToMany(targetEntity="Temas")
     * @ORM\JoinTable(name="UserTemas",
     *      joinColumns={@ORM\JoinColumn(name="user", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="tema", referencedColumnName="id")}
     *      )
     */
    protected $tema;

    /**
     * @var \AppBundle\Entity\Imagenes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Imagenes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imagen", referencedColumnName="id")
     * })
     */
    private $ImagenProfile;

    public function __construct()
    {
        $this->tema   = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tema
     *
     * @param string $nombreComplet
     *
     * @return User
     */
    public function settema($tema)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return string
     */
    public function gettema()
    {
        return $this->tema;
    }
    /**
     * Set nombreCompleto
     *
     * @param string $nombreCompleto
     *
     * @return User
     */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    /**
     * Get nombreCompleto
     *
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return User
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set creditos
     *
     * @param integer $creditos
     *
     * @return User
     */
    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;

        return $this;
    }

    /**
     * Get creditos
     *
     * @return integer
     */
    public function getCreditos()
    {
        return $this->creditos;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return User
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return User
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set noActivo
     *
     * @param boolean $noActivo
     *
     * @return User
     */
    public function setNoActivo($noActivo)
    {
        $this->noActivo = $noActivo;

        return $this;
    }

    /**
     * Get noActivo
     *
     * @return boolean
     */
    public function getNoActivo()
    {
        return $this->noActivo;
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
     * Set rol
     *
     * @param \AppBundle\Entity\Roles $rol
     *
     * @return User
     */
    public function setRol(\AppBundle\Entity\Roles $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \AppBundle\Entity\Roles
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set provincia
     *
     * @param \AppBundle\Entity\Provincias $provincia
     *
     * @return User
     */
    public function setProvincia(\AppBundle\Entity\Provincias $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \AppBundle\Entity\Provincias
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set imagen
     *
     * @param \AppBundle\Entity\Imagenes $imagen
     *
     * @return User
     */
    public function setImagen(\AppBundle\Entity\Imagenes $imagen = null)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return \AppBundle\Entity\Imagenes
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set ImagenProfile
     *
     * @param string $ImagenProfile
     *
     * @return User
     */
    public function setImagenProfile($ImagenProfile)
    {
        $this->ImagenProfile = $ImagenProfile;

        return $this;
    }

    /**
     * Get ImagenProfile
     *
     * @return string
     */
    public function getImagenProfile()
    {
        return $this->ImagenProfile;
    }
}
