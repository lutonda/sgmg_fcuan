<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraturamineiro
 *
 * @ORM\Table(name="FraturaMineiro", indexes={@ORM\Index(name="idMineiro", columns={"idMineiro"}), @ORM\Index(name="idFratura", columns={"idFratura"})})
 * @ORM\Entity
 */
class Fraturamineiro
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
     * @var \AppBundle\Entity\Fratura
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fratura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFratura", referencedColumnName="id")
     * })
     */
    private $idfratura;



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
     * @return Fraturamineiro
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
     * Set idfratura
     *
     * @param \AppBundle\Entity\Fratura $idfratura
     *
     * @return Fraturamineiro
     */
    public function setIdfratura(\AppBundle\Entity\Fratura $idfratura = null)
    {
        $this->idfratura = $idfratura;

        return $this;
    }

    /**
     * Get idfratura
     *
     * @return \AppBundle\Entity\Fratura
     */
    public function getIdfratura()
    {
        return $this->idfratura;
    }
}
