<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dureza
 *
 * @ORM\Table(name="Dureza")
 * @ORM\Entity
 */
class Dureza
{
    /**
     * @var float
     *
     * @ORM\Column(name="min", type="float", precision=10, scale=0, nullable=true)
     */
    private $min;

    /**
     * @var float
     *
     * @ORM\Column(name="max", type="float", precision=10, scale=0, nullable=true)
     */
    private $max;

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
     * Set min
     *
     * @param float $min
     *
     * @return Dureza
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get min
     *
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set max
     *
     * @param float $max
     *
     * @return Dureza
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Dureza
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
