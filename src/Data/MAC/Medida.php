<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medida
 *
 * @ORM\Table(name="Medida")
 * @ORM\Entity
 */
class Medida
{
    /**
     * @var float
     *
     * @ORM\Column(name="especura", type="float", precision=10, scale=0, nullable=true)
     */
    private $especura;

    /**
     * @var float
     *
     * @ORM\Column(name="altura", type="float", precision=10, scale=0, nullable=true)
     */
    private $altura;

    /**
     * @var float
     *
     * @ORM\Column(name="comprimento", type="float", precision=10, scale=0, nullable=true)
     */
    private $comprimento;

    /**
     * @var float
     *
     * @ORM\Column(name="largura", type="float", precision=10, scale=0, nullable=true)
     */
    private $largura;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set especura
     *
     * @param float $especura
     *
     * @return Medida
     */
    public function setEspecura($especura)
    {
        $this->especura = $especura;

        return $this;
    }

    /**
     * Get especura
     *
     * @return float
     */
    public function getEspecura()
    {
        return number_format(floatval($this->especura),2);
    }

    /**
     * Set altura
     *
     * @param float $altura
     *
     * @return Medida
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return float
     */
    public function getAltura()
    {
        return number_format(floatval($this->altura),2);
    }

    /**
     * Set comprimento
     *
     * @param float $comprimento
     *
     * @return Medida
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get comprimento
     *
     * @return float
     */
    public function getComprimento()
    {
        return number_format(floatval($this->comprimento),2);
    }

    /**
     * Set largura
     *
     * @param float $largura
     *
     * @return Medida
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get largura
     *
     * @return float
     */
    public function getLargura()
    {
        return number_format(floatval($this->largura),2);
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
