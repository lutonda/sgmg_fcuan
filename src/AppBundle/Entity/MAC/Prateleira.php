<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Domain\SYS\enuRepositorio;

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

    /**
     * @var array
     *
     * @ORM\Column(name="acervos", type="integer")
     */
    private $acervos;

    /**
     * @var \AppBundle\Entity\Seccao
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
     * Set acervos
     *
     * @param array $acervos
     *
     * @return Prateleira
     */
    public function setAcervos($acervos)
    {
        $this->acervos = $acervos;

        return $this;
    }

    /**
     * Get acervos
     *
     * @return array
     */
    public function getAcervos()
    {
        return $this->acervos;
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
     * @param \AppBundle\Entity\Seccao $idseccao
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
