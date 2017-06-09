<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Imagenes
 *
 * @ORM\Table(name="imagenes")
 * @ORM\Entity
 */
class Imagenes
{
    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=45, nullable=false)
     */
    private $ruta;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     */
    private $file;

    /**
     * @var string
     *
     */
    private $nombre;

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Many User have Many Imagenes.
     * @ORM\ManyToMany(targetEntity="Posts")
     * @ORM\JoinTable(name="DetalleImagen",
     *      joinColumns={@ORM\JoinColumn(name="imagen", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="post", referencedColumnName="id")}
     *      )
     */
    private $post;

    public function __construct()
    {
        $this->post = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Set post
     *
     * @param string $post
     *
     * @return posts
     */
    public function setpost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get tema
     *
     * @return string
     */
    public function getpost()
    {
        return $this->post;
    }

    /**
     * Set ruta
     *
     * @param string $ruta
     *
     * @return Imagenes
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string
     */
    public function getRuta()
    {
        return $this->ruta;
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
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }

    public function getUploadDir()
    {
        $dateValue = date('Y-m-d');
        $time=strtotime($dateValue);
        $month=date("m",$time);
        $year=date("Y",$time);
        $direcotry = $year.'/'.$month;

      return 'img/'.$this->ruta.$direcotry;
    }

    public function getAbsolutRoot()
    {
        return $this->getUploadRoot().'/'.$this->ruta.'/';
    }

    public function getWebPath()
    {
       return $this->getUploadDir().'/';
    }

    public function getUploadRoot()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    public function upload()
    {
        if($this->file === null){
            return;
        }

        $this->nombre = $this->file->getClientOriginalName();

        $p=$this->getUploadRoot();
        if(!is_dir($this->getUploadRoot()))
        {
            mkdir($this->getUploadRoot(),0777,true);
        }

        $this->file->move($this->getUploadRoot(),$this->nombre);

        $this->setRuta($this->getWebPath().$this->nombre);
        unset($this->file);
    }
}
