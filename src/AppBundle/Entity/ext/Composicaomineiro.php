<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composicaomineiro
 *
 * @ORM\Table(name="ComposicaoMineiro", indexes={@ORM\Index(name="idMineiroA", columns={"idMineiroA"}), @ORM\Index(name="idMineiroB", columns={"idMineiroB"})})
 * @ORM\Entity
 */
class Composicaomineiro
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
     *   @ORM\JoinColumn(name="idMineiroA", referencedColumnName="id")
     * })
     */
    private $idmineiroa;

    /**
     * @var \AppBundle\Entity\Mineiro
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mineiro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMineiroB", referencedColumnName="id")
     * })
     */
    private $idmineirob;



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
     * Set idmineiroa
     *
     * @param \AppBundle\Entity\Mineiro $idmineiroa
     *
     * @return Composicaomineiro
     */
    public function setIdmineiroa(\AppBundle\Entity\Mineiro $idmineiroa = null)
    {
        $this->idmineiroa = $idmineiroa;

        return $this;
    }

    /**
     * Get idmineiroa
     *
     * @return \AppBundle\Entity\Mineiro
     */
    public function getIdmineiroa()
    {
        return $this->idmineiroa;
    }

    /**
     * Set idmineirob
     *
     * @param \AppBundle\Entity\Mineiro $idmineirob
     *
     * @return Composicaomineiro
     */
    public function setIdmineirob(\AppBundle\Entity\Mineiro $idmineirob = null)
    {
        $this->idmineirob = $idmineirob;

        return $this;
    }

    /**
     * Get idmineirob
     *
     * @return \AppBundle\Entity\Mineiro
     */
    public function getIdmineirob()
    {
        return $this->idmineirob;
    }
}
