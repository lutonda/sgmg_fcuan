<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estrategrafia
 *
 * @ORM\Table(name="Estrategrafia", indexes={@ORM\Index(name="idEra", columns={"idEra"}), @ORM\Index(name="idPeriodo", columns={"idPeriodo"}), @ORM\Index(name="idEpoca", columns={"idEpoca"}), @ORM\Index(name="idIdade", columns={"idIdade"}), @ORM\Index(name="idFormacao", columns={"idFormacao"})})
 * @ORM\Entity
 */
class Estrategrafia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Era
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Era")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEra", referencedColumnName="id")
     * })
     */
    private $idera;

    /**
     * @var \AppBundle\Entity\Periodo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Periodo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPeriodo", referencedColumnName="id")
     * })
     */
    private $idperiodo;

    /**
     * @var \AppBundle\Entity\Epoca
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Epoca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEpoca", referencedColumnName="id")
     * })
     */
    private $idepoca;

    /**
     * @var \AppBundle\Entity\Idade
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Idade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idIdade", referencedColumnName="id")
     * })
     */
    private $ididade;

    /**
     * @var \AppBundle\Entity\Formacao
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Formacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormacao", referencedColumnName="id")
     * })
     */
    private $idformacao;



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
     * Set idera
     *
     * @param \AppBundle\Entity\Era $idera
     *
     * @return Estrategrafia
     */
    public function setIdera(\AppBundle\Entity\Era $idera = null)
    {
        $this->idera = $idera;

        return $this;
    }

    /**
     * Get idera
     *
     * @return \AppBundle\Entity\Era
     */
    public function getIdera()
    {
        return $this->idera;
    }

    /**
     * Set idperiodo
     *
     * @param \AppBundle\Entity\Periodo $idperiodo
     *
     * @return Estrategrafia
     */
    public function setIdperiodo(\AppBundle\Entity\Periodo $idperiodo = null)
    {
        $this->idperiodo = $idperiodo;

        return $this;
    }

    /**
     * Get idperiodo
     *
     * @return \AppBundle\Entity\Periodo
     */
    public function getIdperiodo()
    {
        return $this->idperiodo;
    }

    /**
     * Set idepoca
     *
     * @param \AppBundle\Entity\Epoca $idepoca
     *
     * @return Estrategrafia
     */
    public function setIdepoca(\AppBundle\Entity\Epoca $idepoca = null)
    {
        $this->idepoca = $idepoca;

        return $this;
    }

    /**
     * Get idepoca
     *
     * @return \AppBundle\Entity\Epoca
     */
    public function getIdepoca()
    {
        return $this->idepoca;
    }

    /**
     * Set ididade
     *
     * @param \AppBundle\Entity\Idade $ididade
     *
     * @return Estrategrafia
     */
    public function setIdidade(\AppBundle\Entity\Idade $ididade = null)
    {
        $this->ididade = $ididade;

        return $this;
    }

    /**
     * Get ididade
     *
     * @return \AppBundle\Entity\Idade
     */
    public function getIdidade()
    {
        return $this->ididade;
    }

    /**
     * Set idformacao
     *
     * @param \AppBundle\Entity\Formacao $idformacao
     *
     * @return Estrategrafia
     */
    public function setIdformacao(\AppBundle\Entity\Formacao $idformacao = null)
    {
        $this->idformacao = $idformacao;

        return $this;
    }

    /**
     * Get idformacao
     *
     * @return \AppBundle\Entity\Formacao
     */
    public function getIdformacao()
    {
        return $this->idformacao;
    }
}
