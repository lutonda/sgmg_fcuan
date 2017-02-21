<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprestimomineiro
 *
 * @ORM\Table(name="EmprestimoMineiro", indexes={@ORM\Index(name="idEmprestimo", columns={"idEmprestimo"}), @ORM\Index(name="idMineiro", columns={"idMineiro"})})
 * @ORM\Entity
 */
class Emprestimomineiro
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
     * @var \AppBundle\Entity\Emprestimo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Emprestimo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEmprestimo", referencedColumnName="id")
     * })
     */
    private $idemprestimo;

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
     * Set idemprestimo
     *
     * @param \AppBundle\Entity\Emprestimo $idemprestimo
     *
     * @return Emprestimomineiro
     */
    public function setIdemprestimo(\AppBundle\Entity\Emprestimo $idemprestimo = null)
    {
        $this->idemprestimo = $idemprestimo;

        return $this;
    }

    /**
     * Get idemprestimo
     *
     * @return \AppBundle\Entity\Emprestimo
     */
    public function getIdemprestimo()
    {
        return $this->idemprestimo;
    }

    /**
     * Set idmineiro
     *
     * @param \AppBundle\Entity\Mineiro $idmineiro
     *
     * @return Emprestimomineiro
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
