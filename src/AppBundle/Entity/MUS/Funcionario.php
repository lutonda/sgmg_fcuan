<?php

namespace AppBundle\Entity\MUS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funcionario
 *
 * @ORM\Table(name="Funcionario")
 * @ORM\Entity
 */
class Funcionario
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
     * @ORM\Column(name="data", type="integer", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPessoa", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpessoa;

    /**
     * @var integer
     *
     * @ORM\Column(name="exLogica", type="integer", nullable=true)
     */
    private $exLogica;

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Funcionario
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
     * Set data
     *
     * @param integer $data
     *
     * @return Funcionario
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
     * Get idpessoa
     *
     * @return integer
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
