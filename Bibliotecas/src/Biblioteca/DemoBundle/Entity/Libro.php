<?php

namespace Biblioteca\DemoBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Libro
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Biblioteca\DemoBundle\Entity\LibroRepository")
 */
class Libro
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
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255)
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="sinopsis", type="text")
     */
    private $sinopsis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaPublicacion", type="date")
     */
    private $fechaPublicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="editorial", type="string", length=255)
     */
    private $editorial;

    /**
     * @var string
     * @Assert\Regex("/^\d-\d{4}-\d{4}-\d$/")
     * @ORM\Column(name="isbn", type="string", length=255)
     */
    private $isbn;

    /**
     * @var integer
     *
     * @ORM\Column(name="ejemplares", type="integer")
     */
    private $ejemplares;
    
    /**
     * @ORM\ManyToOne(targetEntity="Biblioteca")
     * @ORM\JoinColumn(name="biblioteca_id", referencedColumnName="id")
     */
    private $biblioteca;

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
     * Set titulo
     *
     * @param string $titulo
     * @return Libro
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return Libro
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    
        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set sinopsis
     *
     * @param string $sinopsis
     * @return Libro
     */
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;
    
        return $this;
    }

    /**
     * Get sinopsis
     *
     * @return string 
     */
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     * @return Libro
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;
    
        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime 
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set editorial
     *
     * @param string $editorial
     * @return Libro
     */
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    
        return $this;
    }

    /**
     * Get editorial
     *
     * @return string 
     */
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Libro
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    
        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set ejemplares
     *
     * @param integer $ejemplares
     * @return Libro
     */
    public function setEjemplares($ejemplares)
    {
        $this->ejemplares = $ejemplares;
    
        return $this;
    }

    /**
     * Get ejemplares
     *
     * @return integer 
     */
    public function getEjemplares()
    {
        return $this->ejemplares;
    }
    
    public function setBiblioteca(\Biblioteca $biblioteca) {
        $this->biblioteca = $biblioteca;
        return $this;
    }

    public function getBiblioteca() {
        return $this->biblioteca;
    }
}
