<?php

namespace Biblioteca\DemoBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Biblioteca
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Biblioteca\DemoBundle\Entity\BibliotecaRepository")
 */
class Biblioteca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     * @Assert\Regex("/\d+$/")
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     * 
     * @ORM\Column(name="ciudad", type="string", length=255)
     */
    private $ciudad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horarioApertura", type="time")
     */
    private $horarioApertura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horarioCierre", type="time")
     */
    private $horarioCierre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFundacion", type="date")
     */
    private $fechaFundacion;

    /**
     * @var string
     *
     * @ORM\Column(name="normas", type="string", length=255)
     */
    private $normas;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Biblioteca
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Biblioteca
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Biblioteca
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set horarioApertura
     *
     * @param \DateTime $horarioApertura
     * @return Biblioteca
     */
    public function setHorarioApertura($horarioApertura)
    {
        $this->horarioApertura = $horarioApertura;
    
        return $this;
    }

    /**
     * Get horarioApertura
     *
     * @return \DateTime 
     */
    public function getHorarioApertura()
    {
        return $this->horarioApertura;
    }

    /**
     * Set horarioCierre
     *
     * @param \DateTime $horarioCierre
     * @return Biblioteca
     */
    public function setHorarioCierre($horarioCierre)
    {
        $this->horarioCierre = $horarioCierre;
    
        return $this;
    }

    /**
     * Get horarioCierre
     *
     * @return \DateTime 
     */
    public function getHorarioCierre()
    {
        return $this->horarioCierre;
    }

    /**
     * Set fechaFundacion
     *
     * @param \DateTime $fechaFundacion
     * @return Biblioteca
     */
    public function setFechaFundacion($fechaFundacion)
    {
        $this->fechaFundacion = $fechaFundacion;
    
        return $this;
    }

    /**
     * Get fechaFundacion
     *
     * @return \DateTime 
     */
    public function getFechaFundacion()
    {
        return $this->fechaFundacion;
    }

    /**
     * Set normas
     *
     * @param string $normas
     * @return Biblioteca
     */
    public function setNormas($normas)
    {
        $this->normas = $normas;
    
        return $this;
    }

    /**
     * Get normas
     *
     * @return string 
     */
    public function getNormas()
    {
        return $this->normas;
    }
}
