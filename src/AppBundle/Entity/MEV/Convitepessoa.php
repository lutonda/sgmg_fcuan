<?php

namespace AppBundle\Entity\MEV;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convitepessoa
 *
 * @ORM\Table(name="ConvitePessoa", indexes={@ORM\Index(name="idPessoa", columns={"idPessoa"}), @ORM\Index(name="idAgenda", columns={"idAgenda"})})
 * @ORM\Entity
 */
class Convitepessoa
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
     * @var \AppBundle\Entity\Pessoa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPessoa", referencedColumnName="id")
     * })
     */
    private $idpessoa;

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
     * @return Convitepessoa
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
     * Set idpessoa
     *
     * @param \AppBundle\Entity\Pessoa $idpessoa
     *
     * @return Convitepessoa
     */
    public function setIdpessoa(\AppBundle\Entity\Pessoa $idpessoa = null)
    {
        $this->idpessoa = $idpessoa;

        return $this;
    }

    /**
     * Get idpessoa
     *
     * @return \AppBundle\Entity\Pessoa
     */
    public function getIdpessoa()
    {
        return $this->idpessoa;
    }

    /**
     * Set idagenda
     *
     * @param \AppBundle\Entity\Agenda $idagenda
     *
     * @return Convitepessoa
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
}
