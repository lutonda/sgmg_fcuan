<?php

namespace AppBundle\Entity\MEV;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="Grupo", indexes={@ORM\Index(name="responsavel", columns={"responsavel"}), @ORM\Index(name="local", columns={"local"})})
 * @ORM\Entity
 */
class Grupo
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

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
     *   @ORM\JoinColumn(name="responsavel", referencedColumnName="idPessoa")
     * })
     */
    private $responsavel;

    /**
     * @var \AppBundle\Entity\Municipio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local", referencedColumnName="id")
     * })
     */
    private $local;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Grupo
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
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Grupo
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set responsavel
     *
     * @param \AppBundle\Entity\Participante $responsavel
     *
     * @return Grupo
     */
    public function setResponsavel(\AppBundle\Entity\Participante $responsavel = null)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get responsavel
     *
     * @return \AppBundle\Entity\Participante
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Set local
     *
     * @param \AppBundle\Entity\Municipio $local
     *
     * @return Grupo
     */
    public function setLocal(\AppBundle\Entity\Municipio $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \AppBundle\Entity\Municipio
     */
    public function getLocal()
    {
        return $this->local;
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
