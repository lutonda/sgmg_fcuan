<?php

namespace AppBundle\Entity\SYS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="Provincia", indexes={@ORM\Index(name="idPais", columns={"idPais"})})
 * @ORM\Entity
 */
class Provincia
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
     * @var \AppBundle\Entity\SYS\Pais
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SYS\Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPais", referencedColumnName="id")
     * })
     */
    private $idpais;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Provincia
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
     * Set idpais
     *
     * @param \AppBundle\Entity\SYS\Pais $idpais
     *
     * @return Provincia
     */
    public function setIdpais(Pais $idpais = null)
    {
        $this->idpais = $idpais;

        return $this;
    }

    /**
     * Get idpais
     *
     * @return \AppBundle\Entity\SYS\Pais
     */
    public function getIdpais()
    {
        return $this->idpais;
    }
}
