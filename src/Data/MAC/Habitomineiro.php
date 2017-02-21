<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitomineiro
 *
 * @ORM\Table(name="HabitoMineiro", indexes={@ORM\Index(name="idMineiro", columns={"idMineiro"}), @ORM\Index(name="idHabito", columns={"idHabito"})})
 * @ORM\Entity
 */
class Habitomineiro
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
     * @var \AppBundle\Entity\Habito
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Habito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHabito", referencedColumnName="id")
     * })
     */
    private $idhabito;



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
     * @return Habitomineiro
     */
    public function setIdmineiro(\AppBundle\Entity\MAC\Mineiro $idmineiro = null)
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
     * Set idhabito
     *
     * @param \AppBundle\Entity\Habito $idhabito
     *
     * @return Habitomineiro
     */
    public function setIdhabito(\AppBundle\Entity\MAC\Habito $idhabito = null)
    {
        $this->idhabito = $idhabito;

        return $this;
    }

    /**
     * Get idhabito
     *
     * @return \AppBundle\Entity\Habito
     */
    public function getIdhabito()
    {
        return $this->idhabito;
    }
}
