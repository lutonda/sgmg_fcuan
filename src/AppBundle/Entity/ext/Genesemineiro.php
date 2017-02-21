<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genesemineiro
 *
 * @ORM\Table(name="GeneseMineiro", indexes={@ORM\Index(name="idGenese", columns={"idGenese"}), @ORM\Index(name="idMineiro", columns={"idMineiro"})})
 * @ORM\Entity
 */
class Genesemineiro
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
     * @var \AppBundle\Entity\Genese
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Genese")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGenese", referencedColumnName="id")
     * })
     */
    private $idgenese;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idgenese
     *
     * @param \AppBundle\Entity\Genese $idgenese
     *
     * @return Genesemineiro
     */
    public function setIdgenese(\AppBundle\Entity\Genese $idgenese = null)
    {
        $this->idgenese = $idgenese;

        return $this;
    }

    /**
     * Get idgenese
     *
     * @return \AppBundle\Entity\Genese
     */
    public function getIdgenese()
    {
        return $this->idgenese;
    }

    /**
     * Set idmineiro
     *
     * @param \AppBundle\Entity\Mineiro $idmineiro
     *
     * @return Genesemineiro
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
}
