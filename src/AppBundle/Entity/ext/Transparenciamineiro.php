<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transparenciamineiro
 *
 * @ORM\Table(name="TransparenciaMineiro", indexes={@ORM\Index(name="idTransparencia", columns={"idTransparencia"}), @ORM\Index(name="idMineiro", columns={"idMineiro"})})
 * @ORM\Entity
 */
class Transparenciamineiro
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
     * @var \AppBundle\Entity\Transparencia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Transparencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTransparencia", referencedColumnName="id")
     * })
     */
    private $idtransparencia;

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
     * Set idtransparencia
     *
     * @param \AppBundle\Entity\Transparencia $idtransparencia
     *
     * @return Transparenciamineiro
     */
    public function setIdtransparencia(\AppBundle\Entity\Transparencia $idtransparencia = null)
    {
        $this->idtransparencia = $idtransparencia;

        return $this;
    }

    /**
     * Get idtransparencia
     *
     * @return \AppBundle\Entity\Transparencia
     */
    public function getIdtransparencia()
    {
        return $this->idtransparencia;
    }

    /**
     * Set idmineiro
     *
     * @param \AppBundle\Entity\Mineiro $idmineiro
     *
     * @return Transparenciamineiro
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
