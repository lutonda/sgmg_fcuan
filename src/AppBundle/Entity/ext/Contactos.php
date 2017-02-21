<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactos
 *
 * @ORM\Table(name="Contactos", indexes={@ORM\Index(name="idTipoContacto", columns={"idTipoContacto"})})
 * @ORM\Entity
 */
class Contactos
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=500, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Tipocontacto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipocontacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTipoContacto", referencedColumnName="id")
     * })
     */
    private $idtipocontacto;



    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Contactos
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
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
     * Set idtipocontacto
     *
     * @param \AppBundle\Entity\Tipocontacto $idtipocontacto
     *
     * @return Contactos
     */
    public function setIdtipocontacto(\AppBundle\Entity\Tipocontacto $idtipocontacto = null)
    {
        $this->idtipocontacto = $idtipocontacto;

        return $this;
    }

    /**
     * Get idtipocontacto
     *
     * @return \AppBundle\Entity\Tipocontacto
     */
    public function getIdtipocontacto()
    {
        return $this->idtipocontacto;
    }
}
