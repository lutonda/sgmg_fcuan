<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composicaoquimico
 *
 * @ORM\Table(name="ComposicaoQuimico", indexes={@ORM\Index(name="idMineiro", columns={"idMineiro"}), @ORM\Index(name="idElemento", columns={"idElemento"})})
 * @ORM\Entity
 */
class Composicaoquimico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer")
     * @ORM\Id
     *
     */
    private $quantidade;

    /**
     * @var \AppBundle\Entity\Mineiro
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mineiro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMineiro", referencedColumnName="id")
     * })
     */
    private $idmineiro;

    /**
     * @var \AppBundle\Entity\Elementoquimico
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Elementoquimico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idElemento", referencedColumnName="id")
     * })
     */
    private $idelemento;



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
     * Get id
     *
     * @return integer
     */
    public function getquantidade()
    {
        return $this->quantidade;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function setquantidade($quantidade)
    {
        $this->quantidade=$quantidade;
    }

    /**
     * Set idmineiro
     *
     * @param integer $idmineiro
     *
     * @return Composicaoquimico
     */
    public function setIdmineiro($idmineiro = null)
    {
        $this->idmineiro = $idmineiro;

        return $this;
    }

    /**
     * Get idmineiro
     *
     * @return integer
     */
    public function getIdmineiro()
    {
        return $this->idmineiro;
    }

    /**
     * Set idelemento
     *
     * @param integer $idelemento
     *
     * @return Composicaoquimico
     */
    public function setIdelemento($idelemento = null)
    {
        $this->idelemento = $idelemento;

        return $this;
    }

    /**
     * Get idelemento
     *
     * @return integer
     */
    public function getIdelemento()
    {
        return $this->idelemento;
    }
}
