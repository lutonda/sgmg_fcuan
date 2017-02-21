<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fosseis
 *
 * @ORM\Table(name="Fosseis", indexes={@ORM\Index(name="idTaxonomia", columns={"idTaxonomia"}), @ORM\Index(name="idEstategrafia", columns={"idEstategrafia"}), @ORM\Index(name="idLocalcolheita", columns={"idLocalcolheita"})})
 * @ORM\Entity
 */
class Fosseis
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="localEspecifico", type="string", length=50, nullable=true)
     */
    private $localespecifico;

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
     * @var \AppBundle\Entity\Taxonomia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Taxonomia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTaxonomia", referencedColumnName="id")
     * })
     */
    private $idtaxonomia;

    /**
     * @var \AppBundle\Entity\Estrategrafia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Estrategrafia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEstategrafia", referencedColumnName="id")
     * })
     */
    private $idestategrafia;

    /**
     * @var \AppBundle\Entity\Municipio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocalcolheita", referencedColumnName="id")
     * })
     */
    private $idlocalcolheita;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Fosseis
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set localespecifico
     *
     * @param string $localespecifico
     *
     * @return Fosseis
     */
    public function setLocalespecifico($localespecifico)
    {
        $this->localespecifico = $localespecifico;

        return $this;
    }

    /**
     * Get localespecifico
     *
     * @return string
     */
    public function getLocalespecifico()
    {
        return $this->localespecifico;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Fosseis
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
     * @return Fosseis
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
     * Set idtaxonomia
     *
     * @param \AppBundle\Entity\Taxonomia $idtaxonomia
     *
     * @return Fosseis
     */
    public function setIdtaxonomia(\AppBundle\Entity\Taxonomia $idtaxonomia = null)
    {
        $this->idtaxonomia = $idtaxonomia;

        return $this;
    }

    /**
     * Get idtaxonomia
     *
     * @return \AppBundle\Entity\Taxonomia
     */
    public function getIdtaxonomia()
    {
        return $this->idtaxonomia;
    }

    /**
     * Set idestategrafia
     *
     * @param \AppBundle\Entity\Estrategrafia $idestategrafia
     *
     * @return Fosseis
     */
    public function setIdestategrafia(\AppBundle\Entity\Estrategrafia $idestategrafia = null)
    {
        $this->idestategrafia = $idestategrafia;

        return $this;
    }

    /**
     * Get idestategrafia
     *
     * @return \AppBundle\Entity\Estrategrafia
     */
    public function getIdestategrafia()
    {
        return $this->idestategrafia;
    }

    /**
     * Set idlocalcolheita
     *
     * @param \AppBundle\Entity\Municipio $idlocalcolheita
     *
     * @return Fosseis
     */
    public function setIdlocalcolheita(\AppBundle\Entity\Municipio $idlocalcolheita = null)
    {
        $this->idlocalcolheita = $idlocalcolheita;

        return $this;
    }

    /**
     * Get idlocalcolheita
     *
     * @return \AppBundle\Entity\Municipio
     */
    public function getIdlocalcolheita()
    {
        return $this->idlocalcolheita;
    }
}
