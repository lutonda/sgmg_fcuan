<?php

namespace AppBundle\Entity\MAC;

use AppBundle\Entity\SYS\Municipio;
use Doctrine\ORM\Mapping as ORM;

/**
 * Fosseis
 *
 * @ORM\Table(name="Fosseis", indexes={@ORM\Index(name="idTaxonomia", columns={"idTaxonomia"}), @ORM\Index(name="idEstategrafia", columns={"idEstategrafia"}), @ORM\Index(name="tipo", columns={"tipo"}), @ORM\Index(name="idLocalcolheita", columns={"idLocalcolheita"}), @ORM\Index(name="prateleira", columns={"prateleira"}), @ORM\Index(name="dimensao", columns={"dimensao"})})
 * @ORM\Entity
 */
class Fosseis
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
     * @ORM\Column(name="nomeColecao", type="string", length=50, nullable=true)
     */
    private $nomeColecao;

    /**
     * @var string
     *
     * @ORM\Column(name="localEspecifico", type="string", length=50, nullable=true)
     */
    private $localespecifico;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="estadoConservacao", type="integer", nullable=true)
     */
    private $estadoConservacao;

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
     * @var \AppBundle\Entity\MAC\Taxonomia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MAC\Taxonomia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTaxonomia", referencedColumnName="id")
     * })
     */
    private $idtaxonomia;

    /**
     * @var \AppBundle\Entity\MAC\Medida
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MAC\Medida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dimensao", referencedColumnName="id")
     * })
     */
    private $dimensao;

    /**
     * @var \AppBundle\Entity\MAC\Categoria
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MAC\Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo", referencedColumnName="id")
     * })
     */
    private $tipo;

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
     * @var \AppBundle\Entity\MAC\Estrategrafia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MAC\Estrategrafia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEstategrafia", referencedColumnName="id")
     * })
     */
    private $idestategrafia;

    /**
     * @var \AppBundle\Entity\SYS\Municipio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SYS\Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocalcolheita", referencedColumnName="id")
     * })
     */
    private $idlocalcolheita;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Fosseis
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
     * Set nomecolecao
     *
     * @param string $nomecolecao
     *
     * @return Fosseis
     */
    public function setNomecolecao($nomecolecao)
    {
        $this->nomeColecao = $nomecolecao;

        return $this;
    }

    /**
     * Get nomeColecao
     *
     * @return string
     */
    public function getNomecolecao()
    {
        return $this->nomeColecao;
    }

    /**
     * Set localespecifico
     *
     * @param string $localespecifico
     *
     * @return Fosseis
     */
    public function setLocalespecifico($localespecifico)
    {
        $this->localespecifico = $localespecifico;

        return $this;
    }

    /**
     * Get localespecifico
     *
     * @return string
     */
    public function getLocalespecifico()
    {
        return $this->localespecifico;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Fosseis
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
     * Set estadoConservacao
     *
     * @param integer $estado
     *
     * @return Fosseis
     */
    public function setEstadoConservacao($estado)
    {
        $this->estadoConservacao = $estado;

        return $this;
    }

    /**
     * Get estadoConservacao
     *
     * @return integer
     */
    public function getEstadoConservacao()
    {
        return $this->estadoConservacao;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Fosseis
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
     * Set idtaxonomia
     *
     * @param \AppBundle\Entity\Taxonomia $idtaxonomia
     *
     * @return Fosseis
     */
    public function setIdtaxonomia(\AppBundle\Entity\Taxonomia $idtaxonomia = null)
    {
        $this->idtaxonomia = $idtaxonomia;

        return $this;
    }

    /**
     * Get idtaxonomia
     *
     * @return \AppBundle\Entity\MAC\Taxonomia
     */
    public function getIdtaxonomia()
    {
        return $this->idtaxonomia;
    }


    /**
     * Set dimensao
     *
     * @param \AppBundle\Entity\MAC\Medida $dimensao
     *
     * @return Fosseis
     */
    public function setDimensao(Medida $dimensao = null)
    {
        $this->dimensao = $dimensao;

        return $this;
    }

    /**
     * Get dimensao
     *
     * @return \AppBundle\Entity\MAC\Medida
     */
    public function getDimensao()
    {
        return $this->dimensao;
    }

    /**
     * Set idestategrafia
     *
     * @param \AppBundle\Entity\Estrategrafia $idestategrafia
     *
     * @return Fosseis
     */
    public function setIdestategrafia(\AppBundle\Entity\Estrategrafia $idestategrafia = null)
    {
        $this->idestategrafia = $idestategrafia;

        return $this;
    }

    /**
     * Get idestategrafia
     *
     * @return \AppBundle\Entity\MAC\Estrategrafia
     */
    public function getIdestategrafia()
    {
        return $this->idestategrafia;
    }

    /**
     * Set idlocalcolheita
     *
     * @param \AppBundle\Entity\SYS\Municipio $idlocalcolheita
     *
     * @return Fosseis
     */
    public function setIdlocalcolheita(Municipio $idlocalcolheita = null)
    {
        $this->idlocalcolheita = $idlocalcolheita;

        return $this;
    }

    /**
     * Get idlocalcolheita
     *
     * @return \AppBundle\Entity\SYS\Municipio
     */
    public function getIdlocalcolheita()
    {
        return $this->idlocalcolheita;
    }

    /**
     * Set prateleira
     *
     * @param \AppBundle\Entity\MAC\Prateleira $pareteleira
     *
     * @return Fosseis
     */
    public function setPrateleira(Prateleira $pareteleira = null)
    {
        $this->prateleira = $pareteleira;

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
     * Set tipo
     *
     * @param \AppBundle\Entity\MAC\Categoria $tipo
     *
     * @return Fosseis
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \AppBundle\Entity\MAC\Categoria
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
