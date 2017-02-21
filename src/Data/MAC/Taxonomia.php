<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taxonomia
 *
 * @ORM\Table(name="Taxonomia", indexes={@ORM\Index(name="idFilo", columns={"idFilo"}), @ORM\Index(name="idReino", columns={"idReino"}), @ORM\Index(name="idClasse", columns={"idClasse"}), @ORM\Index(name="idSubclasse", columns={"idSubclasse"}), @ORM\Index(name="idOrdem", columns={"idOrdem"}), @ORM\Index(name="idSubordem", columns={"idSubordem"}), @ORM\Index(name="idFamilia", columns={"idFamilia"})})
 * @ORM\Entity
 */
class Taxonomia
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
     * @var \AppBundle\Entity\Filo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Filo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFilo", referencedColumnName="id")
     * })
     */
    private $idfilo;

    /**
     * @var \AppBundle\Entity\Reino
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Reino")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idReino", referencedColumnName="id")
     * })
     */
    private $idreino;

    /**
     * @var \AppBundle\Entity\Classe
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClasse", referencedColumnName="id")
     * })
     */
    private $idclasse;

    /**
     * @var \AppBundle\Entity\Subclasse
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Subclasse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSubclasse", referencedColumnName="id")
     * })
     */
    private $idsubclasse;

    /**
     * @var \AppBundle\Entity\Ordem
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ordem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOrdem", referencedColumnName="id")
     * })
     */
    private $idordem;

    /**
     * @var \AppBundle\Entity\Subordem
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Subordem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSubordem", referencedColumnName="id")
     * })
     */
    private $idsubordem;

    /**
     * @var \AppBundle\Entity\Familia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Familia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFamilia", referencedColumnName="id")
     * })
     */
    private $idfamilia;



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
     * Set idfilo
     *
     * @param \AppBundle\Entity\Filo $idfilo
     *
     * @return Taxonomia
     */
    public function setIdfilo(\AppBundle\Entity\Filo $idfilo = null)
    {
        $this->idfilo = $idfilo;

        return $this;
    }

    /**
     * Get idfilo
     *
     * @return \AppBundle\Entity\Filo
     */
    public function getIdfilo()
    {
        return $this->idfilo;
    }

    /**
     * Set idreino
     *
     * @param \AppBundle\Entity\Reino $idreino
     *
     * @return Taxonomia
     */
    public function setIdreino(\AppBundle\Entity\Reino $idreino = null)
    {
        $this->idreino = $idreino;

        return $this;
    }

    /**
     * Get idreino
     *
     * @return \AppBundle\Entity\Reino
     */
    public function getIdreino()
    {
        return $this->idreino;
    }

    /**
     * Set idclasse
     *
     * @param \AppBundle\Entity\Classe $idclasse
     *
     * @return Taxonomia
     */
    public function setIdclasse(\AppBundle\Entity\Classe $idclasse = null)
    {
        $this->idclasse = $idclasse;

        return $this;
    }

    /**
     * Get idclasse
     *
     * @return \AppBundle\Entity\Classe
     */
    public function getIdclasse()
    {
        return $this->idclasse;
    }

    /**
     * Set idsubclasse
     *
     * @param \AppBundle\Entity\Subclasse $idsubclasse
     *
     * @return Taxonomia
     */
    public function setIdsubclasse(\AppBundle\Entity\Subclasse $idsubclasse = null)
    {
        $this->idsubclasse = $idsubclasse;

        return $this;
    }

    /**
     * Get idsubclasse
     *
     * @return \AppBundle\Entity\Subclasse
     */
    public function getIdsubclasse()
    {
        return $this->idsubclasse;
    }

    /**
     * Set idordem
     *
     * @param \AppBundle\Entity\Ordem $idordem
     *
     * @return Taxonomia
     */
    public function setIdordem(\AppBundle\Entity\Ordem $idordem = null)
    {
        $this->idordem = $idordem;

        return $this;
    }

    /**
     * Get idordem
     *
     * @return \AppBundle\Entity\Ordem
     */
    public function getIdordem()
    {
        return $this->idordem;
    }

    /**
     * Set idsubordem
     *
     * @param \AppBundle\Entity\Subordem $idsubordem
     *
     * @return Taxonomia
     */
    public function setIdsubordem(\AppBundle\Entity\Subordem $idsubordem = null)
    {
        $this->idsubordem = $idsubordem;

        return $this;
    }

    /**
     * Get idsubordem
     *
     * @return \AppBundle\Entity\Subordem
     */
    public function getIdsubordem()
    {
        return $this->idsubordem;
    }

    /**
     * Set idfamilia
     *
     * @param \AppBundle\Entity\Familia $idfamilia
     *
     * @return Taxonomia
     */
    public function setIdfamilia(\AppBundle\Entity\Familia $idfamilia = null)
    {
        $this->idfamilia = $idfamilia;

        return $this;
    }

    /**
     * Get idfamilia
     *
     * @return \AppBundle\Entity\Familia
     */
    public function getIdfamilia()
    {
        return $this->idfamilia;
    }
}
