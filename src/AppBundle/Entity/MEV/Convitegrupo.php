<?php

namespace AppBundle\Entity\MEV;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convitegrupo
 *
 * @ORM\Table(name="ConviteGrupo", indexes={@ORM\Index(name="idAgenda", columns={"idAgenda"}), @ORM\Index(name="idGrupo", columns={"idGrupo"})})
 * @ORM\Entity
 */
class Convitegrupo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="confirmacao", type="integer", nullable=true)
     */
    private $confirmacao;

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
     *   @ORM\JoinColumn(name="idGrupo", referencedColumnName="id")
     * })
     */
    private $idgrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="exLogica", type="integer", nullable=true)
     */
    private $exLogica;


    /**
     * Set confirmacao
     *
     * @param integer $confirmacao
     *
     * @return Convitegrupo
     */
    public function setConfirmacao($confirmacao)
    {
        $this->confirmacao = $confirmacao;

        return $this;
    }

    /**
     * Get confirmacao
     *
     * @return integer
     */
    public function getConfirmacao()
    {
        return $this->confirmacao;
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
     * @return Convitegrupo
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
     * Set idgrupo
     *
     * @param \AppBundle\Entity\Grupo $idgrupo
     *
     * @return Convitegrupo
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
