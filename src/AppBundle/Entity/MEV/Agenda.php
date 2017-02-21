<?php

namespace AppBundle\Entity\MEV;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 *
 * @ORM\Table(name="Agenda", indexes={@ORM\Index(name="idEvento", columns={"idEvento"}), @ORM\Index(name="orador", columns={"orador"}), @ORM\Index(name="idLocal", columns={"idLocal"})})
 * @ORM\Entity
 */
class Agenda
{
    /**
     * @var integer
     *
     * @ORM\Column(name="categoria", type="integer", nullable=true)
     */
    private $categoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="hora", type="integer", nullable=true)
     */
    private $hora;

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
     * @var \AppBundle\Entity\Evento
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Evento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEvento", referencedColumnName="id")
     * })
     */
    private $idevento;

    /**
     * @var \AppBundle\Entity\Pessoa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orador", referencedColumnName="id")
     * })
     */
    private $orador;

    /**
     * @var \AppBundle\Entity\Local
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Local")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocal", referencedColumnName="id")
     * })
     */
    private $idlocal;

    /**
     * @var integer
     *
     * @ORM\Column(name="exLogica", type="integer", nullable=true)
     */
    private $exLogica;


    /**
     * Set categoria
     *
     * @param integer $categoria
     *
     * @return Agenda
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return integer
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set hora
     *
     * @param integer $hora
     *
     * @return Agenda
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return integer
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Agenda
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
     * @return Agenda
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
     * Set idevento
     *
     * @param \AppBundle\Entity\Evento $idevento
     *
     * @return Agenda
     */
    public function setIdevento(\AppBundle\Entity\Evento $idevento = null)
    {
        $this->idevento = $idevento;

        return $this;
    }

    /**
     * Get idevento
     *
     * @return \AppBundle\Entity\Evento
     */
    public function getIdevento()
    {
        return $this->idevento;
    }

    /**
     * Set orador
     *
     * @param \AppBundle\Entity\Pessoa $orador
     *
     * @return Agenda
     */
    public function setOrador(\AppBundle\Entity\Pessoa $orador = null)
    {
        $this->orador = $orador;

        return $this;
    }

    /**
     * Get orador
     *
     * @return \AppBundle\Entity\Pessoa
     */
    public function getOrador()
    {
        return $this->orador;
    }

    /**
     * Set idlocal
     *
     * @param \AppBundle\Entity\Local $idlocal
     *
     * @return Agenda
     */
    public function setIdlocal(\AppBundle\Entity\Local $idlocal = null)
    {
        $this->idlocal = $idlocal;

        return $this;
    }

    /**
     * Get idlocal
     *
     * @return \AppBundle\Entity\Local
     */
    public function getIdlocal()
    {
        return $this->idlocal;
    }
}
