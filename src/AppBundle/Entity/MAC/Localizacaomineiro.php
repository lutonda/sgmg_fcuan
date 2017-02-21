<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localizacaomineiro
 *
 * @ORM\Table(name="LocalizacaoMineiro", indexes={@ORM\Index(name="idMineiro", columns={"idMineiro"}), @ORM\Index(name="idLocal", columns={"idLocal"})})
 * @ORM\Entity
 */
class Localizacaomineiro
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
     * @var \AppBundle\Entity\Municipio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocal", referencedColumnName="id")
     * })
     */
    private $idlocal;



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
     * @return Localizacaomineiro
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
     * Set idlocal
     *
     * @param \AppBundle\Entity\Municipio $idlocal
     *
     * @return Localizacaomineiro
     */
    public function setIdlocal(\AppBundle\Entity\Municipio $idlocal = null)
    {
        $this->idlocal = $idlocal;

        return $this;
    }

    /**
     * Get idlocal
     *
     * @return \AppBundle\Entity\Municipio
     */
    public function getIdlocal()
    {
        return $this->idlocal;
    }
}
