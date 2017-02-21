<?php

namespace AppBundle\Entity\MVS;

use AppBundle\Entity\MAC\Categoria;
use AppBundle\Entity\MEV\Participante;
use AppBundle\Entity\MUS\Pessoa;
use Doctrine\ORM\Mapping as ORM;

/**
 * Visita
 *
 * @ORM\Table(name="AreaVisita", indexes={@ORM\Index(name="guia", columns={"guia"})})
 * @ORM\Entity
 */
class AreaVisita
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
     * @var Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area", referencedColumnName="id")
     * })
     */
    private $area;

    /**
     * @var Visita
     *
     * @ORM\ManyToOne(targetEntity="Visita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visita", referencedColumnName="id")
     * })
     */
    private $visita;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return AreaVisita
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set area
     *
     * @param Categoria $area
     *
     * @return AreaVisita
     */
    public function setArea(Categoria $area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return Categoria
     */
    public function getArea(): Categoria
    {
        return $this->area;
    }

    /**
     * Set visita
     *
     * @param Visita $visita
     *
     * @return AreaVisita
     */
    public function setVisita(Visita $visita)
    {
        $this->visita = $visita;

        return $this;
    }

    /**
     * Get visita
     *
     * @return Visita
     */
    public function getVisita(): Visita
    {
        return $this->visita;
    }

}