<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paragenese
 *
 * @ORM\Table(name="ParaGenese")
 * @ORM\Entity
 */
class Paragenese
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
     * Set nome
     *
     * @param string $nome
     *
     * @return Paragenese
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
     * @return Paragenese
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
}
