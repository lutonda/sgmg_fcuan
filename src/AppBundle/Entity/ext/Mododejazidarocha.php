<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mododejazidarocha
 *
 * @ORM\Table(name="ModoDeJazidaRocha", indexes={@ORM\Index(name="idModoDeJazida", columns={"idModoDeJazida"}), @ORM\Index(name="idRocha", columns={"idRocha"})})
 * @ORM\Entity
 */
class Mododejazidarocha
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
     * @var \AppBundle\Entity\Mododejazida
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mododejazida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idModoDeJazida", referencedColumnName="id")
     * })
     */
    private $idmododejazida;

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
     * Set idmododejazida
     *
     * @param \AppBundle\Entity\Mododejazida $idmododejazida
     *
     * @return Mododejazidarocha
     */
    public function setIdmododejazida(\AppBundle\Entity\Mododejazida $idmododejazida = null)
    {
        $this->idmododejazida = $idmododejazida;

        return $this;
    }

    /**
     * Get idmododejazida
     *
     * @return \AppBundle\Entity\Mododejazida
     */
    public function getIdmododejazida()
    {
        return $this->idmododejazida;
    }

    /**
     * Set idrocha
     *
     * @param \AppBundle\Entity\Rocha $idrocha
     *
     * @return Mododejazidarocha
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
