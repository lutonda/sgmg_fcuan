<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clivagemmineiro
 *
 * @ORM\Table(name="ClivagemMineiro", indexes={@ORM\Index(name="idMineiro", columns={"idMineiro"}), @ORM\Index(name="idClivagem", columns={"idClivagem"})})
 * @ORM\Entity
 */
class Clivagemmineiro
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
     * @var \AppBundle\Entity\Clivagem
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Clivagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClivagem", referencedColumnName="id")
     * })
     */
    private $idclivagem;



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
     * @return Clivagemmineiro
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
     * Set idclivagem
     *
     * @param \AppBundle\Entity\Clivagem $idclivagem
     *
     * @return Clivagemmineiro
     */
    public function setIdclivagem(\AppBundle\Entity\Clivagem $idclivagem = null)
    {
        $this->idclivagem = $idclivagem;

        return $this;
    }

    /**
     * Get idclivagem
     *
     * @return \AppBundle\Entity\Clivagem
     */
    public function getIdclivagem()
    {
        return $this->idclivagem;
    }
}
