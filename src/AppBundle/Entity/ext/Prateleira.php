<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prateleira
 *
 * @ORM\Table(name="Prateleira", indexes={@ORM\Index(name="idSeccao", columns={"idSeccao"})})
 * @ORM\Entity
 */
class Prateleira
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
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /*
     *
     * @var Seccao
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Seccao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSeccao", referencedColumnName="id")
     * })
     */
    private $idseccao;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Prateleira
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
     * Set estado
     *
     * @param integer $estado
     *
     * @return Prateleira
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
     * Set id
     *
     * @param integer $id
     *
     * @return Prateleira
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set idseccao
     *
     * @param Seccao $idseccao
     *
     * @return Prateleira
     */
    public function setIdseccao($idseccao = null)
    {
        $this->idseccao = $idseccao;

        return $this;
    }

    /**
     * Get idseccao
     *
     * @return \AppBundle\Entity\Seccao
     */
    public function getIdseccao()
    {
        return $this->idseccao;
    }
}
