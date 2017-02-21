<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Troca
 *
 * @ORM\Table(name="Troca", indexes={@ORM\Index(name="idMineiroA", columns={"idMineiroA"}), @ORM\Index(name="idMineiroB", columns={"idMineiroB"})})
 * @ORM\Entity
 */
class Troca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="colaborador", type="integer", nullable=true)
     */
    private $colaborador;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

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
     * @var \AppBundle\Entity\Habito
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Habito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMineiroB", referencedColumnName="id")
     * })
     */
    private $idmineirob;



    /**
     * Set colaborador
     *
     * @param integer $colaborador
     *
     * @return Troca
     */
    public function setColaborador($colaborador)
    {
        $this->colaborador = $colaborador;

        return $this;
    }

    /**
     * Get colaborador
     *
     * @return integer
     */
    public function getColaborador()
    {
        return $this->colaborador;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Troca
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Troca
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
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
     * Set idmineiroa
     *
     * @param \AppBundle\Entity\Mineiro $idmineiroa
     *
     * @return Troca
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
     * @param \AppBundle\Entity\Habito $idmineirob
     *
     * @return Troca
     */
    public function setIdmineirob(\AppBundle\Entity\Habito $idmineirob = null)
    {
        $this->idmineirob = $idmineirob;

        return $this;
    }

    /**
     * Get idmineirob
     *
     * @return \AppBundle\Entity\Habito
     */
    public function getIdmineirob()
    {
        return $this->idmineirob;
    }
}
