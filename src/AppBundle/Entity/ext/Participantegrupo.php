<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participantegrupo
 *
 * @ORM\Table(name="ParticipanteGrupo", indexes={@ORM\Index(name="idGrupo", columns={"idGrupo"})})
 * @ORM\Entity
 */
class Participantegrupo
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
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var \AppBundle\Entity\Participante
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Participante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idParticipante", referencedColumnName="idPessoa")
     * })
     */
    private $idparticipante;

    /**
     * @var \AppBundle\Entity\Grupo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGrupo", referencedColumnName="id")
     * })
     */
    private $idgrupo;



    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Participantegrupo
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
     * @return Participantegrupo
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
     * Set idparticipante
     *
     * @param \AppBundle\Entity\Participante $idparticipante
     *
     * @return Participantegrupo
     */
    public function setIdparticipante(\AppBundle\Entity\Participante $idparticipante)
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
     * Set idgrupo
     *
     * @param \AppBundle\Entity\Grupo $idgrupo
     *
     * @return Participantegrupo
     */
    public function setIdgrupo(\AppBundle\Entity\Grupo $idgrupo = null)
    {
        $this->idgrupo = $idgrupo;

        return $this;
    }

    /**
     * Get idgrupo
     *
     * @return \AppBundle\Entity\Grupo
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }
}
