<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cor
 *
 * @ORM\Table(name="Cor")
 * @ORM\Entity
 */
class Cor
{
    /**
     * @var string
     *
     * @ORM\Column(name="hex", type="string", length=10, nullable=true)
     */
    private $hex;
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

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
     * @return Cor
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
     * Set hex
     *
     * @param string $hex
     *
     * @return Cor
     */
    public function setHex($hex)
    {
        $this->hex = $hex;

        return $this;
    }

    /**
     * Get hex
     *
     * @return string
     */
    public function getHex()
    {
        return $this->hex;
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
