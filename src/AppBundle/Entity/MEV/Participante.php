<?php

namespace AppBundle\Entity\MEV;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participante
 *
 * @ORM\Table(name="Participante")
 * @ORM\Entity
 */
class Participante
{
    /**
     * @var string
     *
     * @ORM\Column(name="apelido", type="string", length=50, nullable=true)
     */
    private $apelido;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=500, nullable=true)
     */
    private $descricao;

    /**
     * @var \AppBundle\Entity\Pessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPessoa", referencedColumnName="id")
     * })
     */
    private $idpessoa;



    /**
     * Set apelido
     *
     * @param string $apelido
     *
     * @return Participante
     */
    public function setApelido($apelido)
    {
        $this->apelido = $apelido;

        return $this;
    }

    /**
     * Get apelido
     *
     * @return string
     */
    public function getApelido()
    {
        return $this->apelido;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Participante
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set idpessoa
     *
     * @param Pessoa $idpessoa
     *
     * @return Participante
     */
    public function setIdpessoa(Pessoa $idpessoa)
    {
        $this->idpessoa = $idpessoa;

        return $this;
    }

    /**
     * Get idpessoa
     *
     * @return Pessoa
     */
    public function getIdpessoa()
    {
        return $this->idpessoa;
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
