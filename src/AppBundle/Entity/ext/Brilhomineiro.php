<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brilhomineiro
 *
 * @ORM\Table(name="BrilhoMineiro", indexes={@ORM\Index(name="idMineiro", columns={"idMineiro"}), @ORM\Index(name="idBrilho", columns={"idBrilho"})})
 * @ORM\Entity
 */
class Brilhomineiro
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
     * @var \AppBundle\Entity\Brilho
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Brilho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idBrilho", referencedColumnName="id")
     * })
     */
    private $idbrilho;



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
     * @return Brilhomineiro
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
     * Set idbrilho
     *
     * @param \AppBundle\Entity\Brilho $idbrilho
     *
     * @return Brilhomineiro
     */
    public function setIdbrilho(\AppBundle\Entity\Brilho $idbrilho = null)
    {
        $this->idbrilho = $idbrilho;

        return $this;
    }

    /**
     * Get idbrilho
     *
     * @return \AppBundle\Entity\Brilho
     */
    public function getIdbrilho()
    {
        return $this->idbrilho;
    }
}
