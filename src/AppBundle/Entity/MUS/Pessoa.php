<?php

namespace AppBundle\Entity\MUS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pessoa
 *
 * @ORM\Table(name="Pessoa")
 * @ORM\Entity
 */
class Pessoa
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
     * @ORM\Column(name="numero", type="string", length=50, nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="naturalidade", type="integer", nullable=true)
     */
    private $naturalidade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataNascimento", type="date", nullable=true)
     */
    private $datanascimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="morada", type="integer", nullable=true)
     */
    private $morada;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelAcademico", type="integer", nullable=true)
     */
    private $nivelacademico;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEspecialidade", type="integer", nullable=true)
     */
    private $idespecialidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var array
     *
     */
    private $contactos;

    /**
     * @var integer
     *
     * @ORM\Column(name="genero", type="integer", nullable=true)
     */
    private $genero;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMunicipio", type="integer", nullable=true)
     */
    private $idmunicipio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="exLogica", type="integer", nullable=true)
     */
    private $exLogica;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Pessoa
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
     * Set numero
     *
     * @param string $numero
     *
     * @return Pessoa
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get contactos
     *
     * @return array
     */
    public function getContactos()
    {
        return $this->contactos;
    }

    /**
     * Set contactos
     *
     * @param array $contactos
     *
     * @return Pessoa
     */
    public function setContactos($contactos)
    {
        $this->contactos = $contactos;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set naturalidade
     *
     * @param integer $naturalidade
     *
     * @return Pessoa
     */
    public function setNaturalidade($naturalidade)
    {
        $this->naturalidade = $naturalidade;

        return $this;
    }

    /**
     * Get naturalidade
     *
     * @return integer
     */
    public function getNaturalidade()
    {
        return ucfirst($this->naturalidade);
    }

    /**
     * Set datanascimento
     *
     * @param string $datanascimento
     *
     * @return Pessoa
     */
    public function setDatanascimento($datanascimento)
    {
        $this->datanascimento = $datanascimento;

        return $this;
    }

    /**
     * Get datanascimento
     *
     * @return \DateTime
     */
    public function getDatanascimento()
    {
        return $this->datanascimento;
    }

    /**
     * Set morada
     *
     * @param integer $morada
     *
     * @return Pessoa
     */
    public function setMorada($morada)
    {
        $this->morada = $morada;

        return $this;
    }

    /**
     * Get morada
     *
     * @return integer
     */
    public function getMorada()
    {
        return $this->morada;
    }

    /**
     * Set nivelacademico
     *
     * @param integer $nivelacademico
     *
     * @return Pessoa
     */
    public function setNivelacademico($nivelacademico)
    {
        $this->nivelacademico = $nivelacademico;

        return $this;
    }

    /**
     * Get nivelacademico
     *
     * @return integer
     */
    public function getNivelacademico()
    {
        return $this->nivelacademico;
    }

    /**
     * Set idespecialidade
     *
     * @param integer $idespecialidade
     *
     * @return Pessoa
     */
    public function setIdespecialidade($idespecialidade)
    {
        $this->idespecialidade = $idespecialidade;

        return $this;
    }

    /**
     * Get idespecialidade
     *
     * @return integer
     */
    public function getIdespecialidade()
    {
        return $this->idespecialidade;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Pessoa
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
     * Set genero
     *
     * @param integer $genero
     *
     * @return Pessoa
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return integer
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Pessoa
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
     * Set idmunicipio
     *
     * @param integer $idmunicipio
     *
     * @return Pessoa
     */
    public function setIdmunicipio($idmunicipio)
    {
        $this->idmunicipio = $idmunicipio;

        return $this;
    }

    /**
     * Get idmunicipio
     *
     * @return integer
     */
    public function getIdmunicipio()
    {
        return $this->idmunicipio;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Pessoa
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
     * set id
     *
     * @return Pessoa
     */
    public function setId($id)
    {
        $this->id=$id;
        return $this;
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
     * Get exLogica
     *
     * @return integer
     */
    public function getExLogica()
    {
        return $this->exLogica;
    }

    /**
     * Set exLogica
     *
     * @param integer $exLogica
     *
     * @return Visita
     */
    public function setExLogica($exLogica)
    {
        $this->exLogica = $exLogica;

        return $this;
    }

}
