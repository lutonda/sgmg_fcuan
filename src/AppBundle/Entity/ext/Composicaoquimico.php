<?php

namespace AppBundle\Entity;

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
     * Set idmineiro
     *
     * @param \AppBundle\Entity\Mineiro $idmineiro
     *
     * @return Composicaoquimico
     */
    public function setIdmineiro(\AppBundle\Entity\Mineiro $idmineiro = null)
    {
        $this->idmineiro = $idmineiro;

        return $this;
    }

    /**
     * Get idmineiro
     *
     * @return \AppBundle\Entity\Mineiro
     */
    public function getIdmineiro()
    {
        return $this->idmineiro;
    }

    /**
     * Set idelemento
     *
     * @param \AppBundle\Entity\Elementoquimico $idelemento
     *
     * @return Composicaoquimico
     */
    public function setIdelemento(\AppBundle\Entity\Elementoquimico $idelemento = null)
    {
        $this->idelemento = $idelemento;

        return $this;
    }

    /**
     * Get idelemento
     *
     * @return \AppBundle\Entity\Elementoquimico
     */
    public function getIdelemento()
    {
        return $this->idelemento;
    }
}
