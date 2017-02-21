<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paragenesemineiro
 *
 * @ORM\Table(name="ParaGeneseMineiro", indexes={@ORM\Index(name="idParaGenese", columns={"idParaGenese"}), @ORM\Index(name="idMineiro", columns={"idMineiro"})})
 * @ORM\Entity
 */
class Paragenesemineiro
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
     * @var \AppBundle\Entity\Paragenese
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paragenese")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idParaGenese", referencedColumnName="id")
     * })
     */
    private $idparagenese;

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
     * Set idparagenese
     *
     * @param \AppBundle\Entity\Paragenese $idparagenese
     *
     * @return Paragenesemineiro
     */
    public function setIdparagenese(\AppBundle\Entity\Paragenese $idparagenese = null)
    {
        $this->idparagenese = $idparagenese;

        return $this;
    }

    /**
     * Get idparagenese
     *
     * @return \AppBundle\Entity\Paragenese
     */
    public function getIdparagenese()
    {
        return $this->idparagenese;
    }

    /**
     * Set idmineiro
     *
     * @param \AppBundle\Entity\Mineiro $idmineiro
     *
     * @return Paragenesemineiro
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
