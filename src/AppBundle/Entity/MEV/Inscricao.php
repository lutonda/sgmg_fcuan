<?php

namespace AppBundle\Entity\MEV;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscricao
 *
 * @ORM\Table(name="Inscricao", indexes={@ORM\Index(name="idAgenda", columns={"idAgenda"}), @ORM\Index(name="idParticipante", columns={"idParticipante"})})
 * @ORM\Entity
 */
class Inscricao
{
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
     * @var \AppBundle\Entity\Agenda
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agenda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgenda", referencedColumnName="id")
     * })
     */
    private $idagenda;

    /**
     * @var \AppBundle\Entity\Participante
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Participante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idParticipante", referencedColumnName="idPessoa")
     * })
     */
    private $idparticipante;



    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Inscricao
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
     * @return Inscricao
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
     * Set idagenda
     *
     * @param \AppBundle\Entity\Agenda $idagenda
     *
     * @return Inscricao
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
     * Set idparticipante
     *
     * @param \AppBundle\Entity\Participante $idparticipante
     *
     * @return Inscricao
     */
    public function setIdparticipante(\AppBundle\Entity\Participante $idparticipante = null)
    {
        $this->idparticipante = $idparticipante;

        return $this;
    }

    /**
     * Get idparticipante
     *
     * @return \AppBundle\Entity\Participante
     */
    public function getIdparticipante()
    {
        return $this->idparticipante;
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
