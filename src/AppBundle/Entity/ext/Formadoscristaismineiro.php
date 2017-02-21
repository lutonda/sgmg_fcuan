<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formadoscristaismineiro
 *
 * @ORM\Table(name="FormadosCristaisMineiro", indexes={@ORM\Index(name="idFormadosCristais", columns={"idFormadosCristais"}), @ORM\Index(name="idMineiro", columns={"idMineiro"})})
 * @ORM\Entity
 */
class Formadoscristaismineiro
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
     * @var \AppBundle\Entity\Formasdoscristais
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Formasdoscristais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormadosCristais", referencedColumnName="id")
     * })
     */
    private $idformadoscristais;

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
     * Set idformadoscristais
     *
     * @param \AppBundle\Entity\Formasdoscristais $idformadoscristais
     *
     * @return Formadoscristaismineiro
     */
    public function setIdformadoscristais(\AppBundle\Entity\Formasdoscristais $idformadoscristais = null)
    {
        $this->idformadoscristais = $idformadoscristais;

        return $this;
    }

    /**
     * Get idformadoscristais
     *
     * @return \AppBundle\Entity\Formasdoscristais
     */
    public function getIdformadoscristais()
    {
        return $this->idformadoscristais;
    }

    /**
     * Set idmineiro
     *
     * @param \AppBundle\Entity\Mineiro $idmineiro
     *
     * @return Formadoscristaismineiro
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
