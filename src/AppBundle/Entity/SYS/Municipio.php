<?php

namespace AppBundle\Entity\SYS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="Municipio", indexes={@ORM\Index(name="idProvincia", columns={"idProvincia"})})
 * @ORM\Entity
 */
class Municipio
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\SYS\Provincia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SYS\Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProvincia", referencedColumnName="id")
     * })
     */
    private $idprovincia;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Municipio
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return ucfirst($this->nome);
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
     * Set idprovincia
     *
     * @param \AppBundle\Entity\SYS\Provincia $idprovincia
     *
     * @return Municipio
     */
    public function setIdprovincia(Provincia $idprovincia = null)
    {
        $this->idprovincia = $idprovincia;

        return $this;
    }

    /**
     * Get idprovincia
     *
     * @return \AppBundle\Entity\SYS\Provincia
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }
}
