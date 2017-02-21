<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ambientesedimentarrocha
 *
 * @ORM\Table(name="AmbienteSedimentarRocha", indexes={@ORM\Index(name="idAmbienteSedimentar", columns={"idAmbienteSedimentar"}), @ORM\Index(name="idRocha", columns={"idRocha"})})
 * @ORM\Entity
 */
class Ambientesedimentarrocha
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
     * @var \AppBundle\Entity\Ambientesedimentar
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ambientesedimentar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAmbienteSedimentar", referencedColumnName="id")
     * })
     */
    private $idambientesedimentar;

    /**
     * @var \AppBundle\Entity\Rocha
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Rocha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRocha", referencedColumnName="id")
     * })
     */
    private $idrocha;



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
     * Set idambientesedimentar
     *
     * @param \AppBundle\Entity\Ambientesedimentar $idambientesedimentar
     *
     * @return Ambientesedimentarrocha
     */
    public function setIdambientesedimentar(\AppBundle\Entity\Ambientesedimentar $idambientesedimentar = null)
    {
        $this->idambientesedimentar = $idambientesedimentar;

        return $this;
    }

    /**
     * Get idambientesedimentar
     *
     * @return \AppBundle\Entity\Ambientesedimentar
     */
    public function getIdambientesedimentar()
    {
        return $this->idambientesedimentar;
    }

    /**
     * Set idrocha
     *
     * @param \AppBundle\Entity\Rocha $idrocha
     *
     * @return Ambientesedimentarrocha
     */
    public function setIdrocha(\AppBundle\Entity\Rocha $idrocha = null)
    {
        $this->idrocha = $idrocha;

        return $this;
    }

    /**
     * Get idrocha
     *
     * @return \AppBundle\Entity\Rocha
     */
    public function getIdrocha()
    {
        return $this->idrocha;
    }
}
