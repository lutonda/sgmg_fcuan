<?php

namespace AppBundle\Entity\MVS;

use AppBundle\Entity\MEV\Participante;
use AppBundle\Entity\MUS\Pessoa;
use Doctrine\ORM\Mapping as ORM;

/**
 * Visita
 *
 * @ORM\Table(name="Visita", indexes={@ORM\Index(name="idParticipante", columns={"idParticipante"}), @ORM\Index(name="guia", columns={"guia"})})
 * @ORM\Entity
 */
class Visita
{
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
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="exLogica", type="integer", nullable=true)
     */
    private $exLogica;

    /**
     * @var array
     */
    private $areas;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtdParticipante", type="integer", nullable=true)
     */
    private $qtdParticipante;
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", nullable=true)
     */
    private $descricao;

    /**
     * @var date
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var date
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $dataVisita;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Participante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idParticipante", referencedColumnName="id")
     * })
     */
    private $idparticipante;

    /**
     * @var Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="guia", referencedColumnName="id")
     * })
     */
    private $guia;

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Visita
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
     * @return Visita
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
     * @return Visita
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return date
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
     * Set Id
     *
     * @param integer $id
     *
     * @return Visita
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get dataVisita
     *
     * @return date
     */
    public function getDataVisita()
    {
        return $this->dataVisita;
    }

    /**
     * Set DataVisita
     *
     * @param date $dataVisita
     *
     * @return Visita
     */
    public function setDataVisita($dataVisita)
    {
        $this->dataVisita = $dataVisita;

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
     * Set estado
     *
     * @param integer $estado
     *
     * @return Visita
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
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

    /**
     * Get qtdParticipante
     *
     * @return integer
     */
    public function getQtdParticipante()
    {
        return $this->qtdParticipante;
    }

    /**
     * Set estado
     *
     * @param integer $qtdParticipante
     *
     * @return Visita
     */
    public function setQtdParticipante($qtdParticipante)
    {
        $this->qtdParticipante = $qtdParticipante;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao ()
    {
        return $this->descricao ;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Visita
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Set idparticipante
     *
     * @param Pessoa $idparticipante
     *
     * @return Visita
     */
    public function setIdparticipante(Pessoa $idparticipante = null)
    {
        $this->idparticipante = $idparticipante;

        return $this;
    }

    /**
     * Get idparticipante
     *
     * @return Pessoa
     */
    public function getIdparticipante()
    {
        return $this->idparticipante;
    }

    /**
     * Set guia
     *
     * @param Pessoa $guia
     *
     * @return Visita
     */
    public function setGuia(Pessoa $guia = null)
    {
        $this->guia = $guia;

        return $this;
    }

    /**
     * Get areas
     *
     * @return array
     */
    public function getGuia()
    {
        return $this->guia;
    }
    /**
     * Set areas
     *
     * @param array $areas
     *
     * @return Visita
     */
    public function setArea(array $areas = null)
    {
        $this->areas = $areas;

        return $this;
    }

     /**
      * Get areas
      *
      * @return array
      */
     public function getArea():array
     {
        return $this->areas;
     }
}
