<?php

namespace AppBundle\Entity\MEV;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requisitoinscricao
 *
 * @ORM\Table(name="RequisitoInscricao", indexes={@ORM\Index(name="idAgenda", columns={"idAgenda"}), @ORM\Index(name="grupo", columns={"grupo"})})
 * @ORM\Entity
 */
class Requisitoinscricao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idadeInicial", type="integer", nullable=true)
     */
    private $idadeinicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="idadeFinal", type="integer", nullable=true)
     */
    private $idadefinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="genero", type="integer", nullable=true)
     */
    private $genero;

    /**
     * @var integer
     *
     * @ORM\Column(name="nacionalidade", type="integer", nullable=true)
     */
    private $nacionalidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelAcademico", type="integer", nullable=true)
     */
    private $nivelacademico;

    /**
     * @var integer
     *
     * @ORM\Column(name="fechado", type="integer", nullable=true)
     */
    private $fechado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datalimite", type="date", nullable=true)
     */
    private $datalimite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Agenda
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agenda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgenda", referencedColumnName="id")
     * })
     */
    private $idagenda;

    /**
     * @var \AppBundle\Entity\Grupo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo", referencedColumnName="id")
     * })
     */
    private $grupo;



    /**
     * Set idadeinicial
     *
     * @param integer $idadeinicial
     *
     * @return Requisitoinscricao
     */
    public function setIdadeinicial($idadeinicial)
    {
        $this->idadeinicial = $idadeinicial;

        return $this;
    }

    /**
     * Get idadeinicial
     *
     * @return integer
     */
    public function getIdadeinicial()
    {
        return $this->idadeinicial;
    }

    /**
     * Set idadefinal
     *
     * @param integer $idadefinal
     *
     * @return Requisitoinscricao
     */
    public function setIdadefinal($idadefinal)
    {
        $this->idadefinal = $idadefinal;

        return $this;
    }

    /**
     * Get idadefinal
     *
     * @return integer
     */
    public function getIdadefinal()
    {
        return $this->idadefinal;
    }

    /**
     * Set genero
     *
     * @param integer $genero
     *
     * @return Requisitoinscricao
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
     * Set nacionalidade
     *
     * @param integer $nacionalidade
     *
     * @return Requisitoinscricao
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get nacionalidade
     *
     * @return integer
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set nivelacademico
     *
     * @param integer $nivelacademico
     *
     * @return Requisitoinscricao
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
     * Set fechado
     *
     * @param integer $fechado
     *
     * @return Requisitoinscricao
     */
    public function setFechado($fechado)
    {
        $this->fechado = $fechado;

        return $this;
    }

    /**
     * Get fechado
     *
     * @return integer
     */
    public function getFechado()
    {
        return $this->fechado;
    }

    /**
     * Set datalimite
     *
     * @param \DateTime $datalimite
     *
     * @return Requisitoinscricao
     */
    public function setDatalimite($datalimite)
    {
        $this->datalimite = $datalimite;

        return $this;
    }

    /**
     * Get datalimite
     *
     * @return \DateTime
     */
    public function getDatalimite()
    {
        return $this->datalimite;
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
     * Set idagenda
     *
     * @param \AppBundle\Entity\Agenda $idagenda
     *
     * @return Requisitoinscricao
     */
    public function setIdagenda(\AppBundle\Entity\Agenda $idagenda = null)
    {
        $this->idagenda = $idagenda;

        return $this;
    }

    /**
     * Get idagenda
     *
     * @return \AppBundle\Entity\Agenda
     */
    public function getIdagenda()
    {
        return $this->idagenda;
    }

    /**
     * Set grupo
     *
     * @param \AppBundle\Entity\Grupo $grupo
     *
     * @return Requisitoinscricao
     */
    public function setGrupo(\AppBundle\Entity\Grupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \AppBundle\Entity\Grupo
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
