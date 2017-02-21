<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table(name="Reserva", indexes={@ORM\Index(name="idMineiro", columns={"idMineiro"})})
 * @ORM\Entity
 */
class Reserva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

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
     * Set quantidade
     *
     * @param integer $quantidade
     *
     * @return Reserva
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

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
     * @return Reserva
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
