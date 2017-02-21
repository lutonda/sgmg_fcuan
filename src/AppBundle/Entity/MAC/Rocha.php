<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rocha
 * @ORM\Table(name="Rocha"), indexes={@ORM\Index(name="idPrateleira", columns={"idPrateleira"}),@ORM\Index(name="localEspecifico", columns={"localEspecifico"})})
 * @ORM\Entity
 */
class Rocha
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=500, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="mineralogia", type="string", length=500, nullable=true)
     */
    private $mineralogia;

    /**
     * @var string
     *
     * @ORM\Column(name="condicoesdeFormas", type="string", length=500, nullable=true)
     */
    private $condicoesdeFormas;

    /**
     * @var string
     *
     * @ORM\Column(name="aplicacao", type="string", length=500, nullable=true)
     */
    private $aplicacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var array
     *
     */
    private $tipoDados;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", nullable=true)
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
     * @var \AppBundle\Entity\MAC\Prateleira
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MAC\Prateleira")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prateleira", referencedColumnName="id")
     * })
     */
    private $prateleira;


    /**
     * @var \AppBundle\Entity\SYS\Municipio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SYS\Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localEspecifico", referencedColumnName="id")
     * })
     */
    private $localEspecifico;


    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Rocha
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Rocha
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
     * Set aplicacao
     *
     * @param string $aplicacao
     *
     * @return Rocha
     */
    public function setAplicacao($aplicacao)
    {
        $this->aplicacao = $aplicacao;

        return $this;
    }

    /**
     * Get aplicacao
     *
     * @return string
     */
    public function getAplicacao()
    {
        return $this->aplicacao;
    }

    /**
     * Set condicoesdeFormas
     *
     * @param string $condicoesdeFormas
     *
     * @return Rocha
     */
    public function setCondicoesdeFormas($condicoesdeFormas)
    {
        $this->condicoesdeFormas = $condicoesdeFormas;

        return $this;
    }

    /**
     * Get condicoesdeFormas
     *
     * @return string
     */
    public function getCondicoesdeFormas()
    {
        return $this->condicoesdeFormas;
    }

    /**
     * Set mineralogia
     *
     * @param string $mineralogia
     *
     * @return Rocha
     */
    public function setMineralogia($mineralogia)
    {
        $this->mineralogia = $mineralogia;

        return $this;
    }

    /**
     * Get mineralogia
     *
     * @return string
     */
    public function getMineralogia()
    {
        return $this->mineralogia;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Rocha
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
     * Set tipoDados
     *
     * @param integer $dados
     *
     * @return Rocha
     */
    public function setTipodados($dados)
    {
        $this->tipoDados = $dados;

        return $this;
    }

    /**
     * Get tipoDados
     *
     * @return array
     */
    public function getTipodados()
    {
        return $this->tipoDados;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Rocha
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
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
     * @return Rocha
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
     * Set prateleira
     *
     * @param \AppBundle\Entity\MAC\Prateleira $prateleira
     *
     * @return Mineiro
     */
    public function setPrateleira($prateleira = null)
    {
        $this->prateleira = $prateleira;

        return $this;
    }

    /**
     * Get prateleira
     *
     * @return \AppBundle\Entity\MAC\Prateleira
     */
    public function getPrateleira()
    {
        return $this->prateleira;
    }

    /**
     * Set local
     *
     * @param \AppBundle\Entity\SYS\Municipio $localEspecifico
     *
     * @return Mineiro
     */
    public function setLocal($localEspecifico = null)
    {
        $this->localEspecifico = $localEspecifico;

        return $this;
    }

    /**
     * Get local
     *
     * @return \AppBundle\Entity\SYS\Municipio
     */
    public function getLocal()
    {
        return $this->localEspecifico;
    }

}
