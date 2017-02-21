<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Riscamineiro
 *
 * @ORM\Table(name="RiscaMineiro", indexes={@ORM\Index(name="idRisca", columns={"idRisca"}), @ORM\Index(name="idMineiro", columns={"idMineiro"})})
 * @ORM\Entity
 */
class Riscamineiro
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
     * @var \AppBundle\Entity\Risca
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Risca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRisca", referencedColumnName="id")
     * })
     */
    private $idrisca;

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
     * Set idrisca
     *
     * @param \AppBundle\Entity\Risca $idrisca
     *
     * @return Riscamineiro
     */
    public function setIdrisca(\AppBundle\Entity\Risca $idrisca = null)
    {
        $this->idrisca = $idrisca;

        return $this;
    }

    /**
     * Get idrisca
     *
     * @return \AppBundle\Entity\Risca
     */
    public function getIdrisca()
    {
        return $this->idrisca;
    }

    /**
     * Set idmineiro
     *
     * @param \AppBundle\Entity\Mineiro $idmineiro
     *
     * @return Riscamineiro
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
