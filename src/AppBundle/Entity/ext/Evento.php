<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="Evento", indexes={@ORM\Index(name="tipo", columns={"tipo"}), @ORM\Index(name="categoria", columns={"categoria"})})
 * @ORM\Entity
 */
class Evento
{
    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=500, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Tipoevento
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipoevento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo", referencedColumnName="id")
     * })
     */
    private $tipo;

    /**
     * @var \AppBundle\Entity\Categoriaevento
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categoriaevento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria", referencedColumnName="id")
     * })
     */
    private $categoria;



    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Evento
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
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Evento
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Evento
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Evento
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
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
     * Set tipo
     *
     * @param \AppBundle\Entity\Tipoevento $tipo
     *
     * @return Evento
     */
    public function setTipo(\AppBundle\Entity\Tipoevento $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \AppBundle\Entity\Tipoevento
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set categoria
     *
     * @param \AppBundle\Entity\Categoriaevento $categoria
     *
     * @return Evento
     */
    public function setCategoria(\AppBundle\Entity\Categoriaevento $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \AppBundle\Entity\Categoriaevento
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}
