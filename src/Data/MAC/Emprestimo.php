<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprestimo
 *
 * @ORM\Table(name="Emprestimo", indexes={@ORM\Index(name="colaborador", columns={"colaborador"})})
 * @ORM\Entity
 */
class Emprestimo
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=500, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracao", type="integer", nullable=true)
     */
    private $duracao;

    /**
     * @var integer
     *
     * @ORM\Column(name="data", type="integer", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Colaborador
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Colaborador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="colaborador", referencedColumnName="id")
     * })
     */
    private $colaborador;



    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Emprestimo
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
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Emprestimo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set duracao
     *
     * @param integer $duracao
     *
     * @return Emprestimo
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

        return $this;
    }

    /**
     * Get duracao
     *
     * @return integer
     */
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * Set data
     *
     * @param integer $data
     *
     * @return Emprestimo
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return integer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Emprestimo
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set colaborador
     *
     * @param \AppBundle\Entity\Colaborador $colaborador
     *
     * @return Emprestimo
     */
    public function setColaborador(\AppBundle\Entity\Colaborador $colaborador = null)
    {
        $this->colaborador = $colaborador;

        return $this;
    }

    /**
     * Get colaborador
     *
     * @return \AppBundle\Entity\Colaborador
     */
    public function getColaborador()
    {
        return $this->colaborador;
    }
}
