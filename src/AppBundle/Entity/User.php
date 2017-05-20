<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @var string
     */
    protected $nombreCompleto;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected  $email;

    /**
     * @var string
     */
    protected $contrasenya;

    /**
     * @var \DateTime
     */
    protected $fechaRegistro;

    /**
     * @var integer
     */
    protected $creditos = '0';

    /**
     * @var string
     */
    protected $sexo;

    /**
     * @var boolean
     */
    protected $activo;

    /**
     * @var boolean
     */
    protected $noActivo;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \AppBundle\Entity\Imagenes
     */
    protected $imagen;

    /**
     * @var \AppBundle\Entity\Roles
     */
    protected $rol;

    /**
     * @var \AppBundle\Entity\Ciudades
     */
    protected $ciudad;


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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contrasenya
     *
     * @param string $contrasenya
     *
     * @return User
     */
    public function setContrasenya($contrasenya)
    {
        $this->contrasenya = $contrasenya;

        return $this;
    }

    /**
     * Get contrasenya
     *
     * @return string
     */
    public function getContrasenya()
    {
        return $this->contrasenya;
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
     * Set ciudad
     *
     * @param \AppBundle\Entity\Ciudades $ciudad
     *
     * @return User
     */
    public function setCiudad(\AppBundle\Entity\Ciudades $ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \AppBundle\Entity\Ciudades
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}

