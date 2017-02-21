<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visita
 *
 * @ORM\Table(name="Visita", indexes={@ORM\Index(name="idParticipante", columns={"idParticipante"})})
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
     * @ORM\Column(name="data", type="integer", nullable=true)
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
     * @var \AppBundle\Entity\Participante
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Participante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idParticipante", referencedColumnName="idPessoa")
     * })
     */
    private $idparticipante;



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
     * @return integer
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
     * Set idparticipante
     *
     * @param \AppBundle\Entity\Participante $idparticipante
     *
     * @return Visita
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
}
