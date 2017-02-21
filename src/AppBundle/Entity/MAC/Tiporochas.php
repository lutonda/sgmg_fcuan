<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiporochas
 *
 * @ORM\Table(name="TipoRochas")
 * @ORM\Entity
 */
class Tiporochas
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
     * @ORM\Column(name="descricao", type="string", length=500, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var \AppBundle\Entity\Tiporochas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tiporochas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dependencia", referencedColumnName="id")
     * })
     */
    private $dependencia;

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Tiporochas
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
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Tiporochas
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dependencia
     *
     * @param \AppBundle\Entity\Tiporochas $dependencia
     *
     * @return Categoria
     */
    public function setDependencia($dependencia = null)
    {
        $this->dependencia = $dependencia;

        return $this;
    }

    /**
     * Get dependencia
     *
     * @return \AppBundle\Entity\Tiporochas
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }
}
