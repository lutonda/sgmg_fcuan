<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habito
 *
 * @ORM\Table(name="Habito")
 * @ORM\Entity
 */
class Habito
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
     * @ORM\Column(name="designacao", type="string", length=500, nullable=true)
     */
    private $designacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Habito
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
     * Set designacao
     *
     * @param string $designacao
     *
     * @return Habito
     */
    public function setDesignacao($designacao)
    {
        $this->designacao = $designacao;

        return $this;
    }

    /**
     * Get designacao
     *
     * @return string
     */
    public function getDesignacao()
    {
        return $this->designacao;
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
}
