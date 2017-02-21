<?php

namespace AppBundle\Entity\MUS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactos
 *
 * @ORM\Table(name="Contactos", indexes={@ORM\Index(name="idUtilizador", columns={"idUtilizador"})})
 * @ORM\Entity
 */
class PasswordManager
{
    /**
     * @var valor
     *
     * @ORM\Column(name="valor", type="string", length=500, nullable=true)
     */
    private $valor;

    /**
     * @var urlValidator
     *
     * @ORM\Column(name="urlValidator", type="string", length=500, nullable=true)
     */
    private $urlValidator;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var date
     *
     * @ORM\Column(name="data", type="datetime")
     */
    private $data;

    /**
     * @var date
     *
     * @ORM\Column(name="estado", type="integer")
     */
    private $estado;

    /**
     * @var date
     *
     * @ORM\Column(name="validade", type="datetime")
     */
    private $validade;

    /**
     * @var \AppBundle\Entity\MUS\Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MUS\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilizador", referencedColumnName="id")
     * })
     */
    private $idUtilizador;

    /**
     * Set urlValidator
     *
     * @param string url
     *
     * @return PasswordManager
     */
    public function setUrlValidator($url)
    {
        $this->urlValidator = $url;

        return $this;
    }

    /**
     * Get urlValidator
     *
     * @return string
     */
    public function getUrlValidator()
    {
        return $this->urlValidator;
    }

    /**
     * Set valor
     *
     * @param string valor
     *
     * @return PasswordManager
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
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
     * set id
     *
     * @return PasswordManager
     */
    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }

    /**
     * Get data
     *
     * @return date
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * set data
     *
     * @return PasswordManager
     */
    public function setData($data)
    {
        $this->data=$data;
        return $this;
    }

    /**
     * Get estado
     *
     * @return estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * set estado
     *
     * @return PasswordManager
     */
    public function setEstado($estado)
    {
        $this->estado=$estado;
        return $this;
    }

    /**
     * Get validade
     *
     * @return date
     */
    public function getValidade()
    {
        return $this->valiadade;
    }

    /**
     * set validade
     *
     * @return PasswordManager
     */
    public function setValidade($validade)
    {
        $this->validade=$validade;
        return $this;
    }

    /**
     * Set idUtilizador
     *
     * @param Tipocontacto $utilizador
     *
     * @return PasswordManager
     */
    public function setUtilizador($utilizador)
    {
        $this->idUtilizador = $utilizador;

        return $this;
    }

    /**
     * Get idUtilizador
     *
     * @return PasswordManager
     */
    public function getUtilizador()
    {
        return $this->idUtilizador;
    }
}
