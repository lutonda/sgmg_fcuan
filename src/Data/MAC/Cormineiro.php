<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cormineiro
 *
 * @ORM\Table(name="CorMineiro", indexes={@ORM\Index(name="idCor", columns={"idCor"}), @ORM\Index(name="idMineiro", columns={"idMineiro"})})
 * @ORM\Entity
 */
class Cormineiro
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
     * @var \AppBundle\Entity\Cor
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCor", referencedColumnName="id")
     * })
     */
    private $idcor;

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
     * Set idcor
     *
     * @param \AppBundle\Entity\Cor $idcor
     *
     * @return Cormineiro
     */
    public function setIdcor(\AppBundle\Entity\Cor $idcor = null)
    {
        $this->idcor = $idcor;

        return $this;
    }

    /**
     * Get idcor
     *
     * @return \AppBundle\Entity\Cor
     */
    public function getIdcor()
    {
        return $this->idcor;
    }

    /**
     * Set idmineiro
     *
     * @param \AppBundle\Entity\Mineiro $idmineiro
     *
     * @return Cormineiro
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
