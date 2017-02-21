<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mineiro
 *
 * @ORM\Table(name="Mineiro", indexes={@ORM\Index(name="idDureza", columns={"idDureza"}), @ORM\Index(name="Categoria", columns={"Categoria"}), @ORM\Index(name="idConservacao", columns={"idConservacao"}), @ORM\Index(name="idPrateleira", columns={"idPrateleira"}), @ORM\Index(name="idSistemaCristalina", columns={"idSistemaCristalina"}), @ORM\Index(name="idOcorencia", columns={"idOcorencia"}), @ORM\Index(name="idDensidade", columns={"idDensidade"}), @ORM\Index(name="idMedida", columns={"idMedida"})})
 * @ORM\Entity
 */
class Mineiro
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
     * @ORM\Column(name="peso", type="integer", nullable=true)
     */
    private $peso;

    /**
     * @var string
     *
     * @ORM\Column(name="caraceristica", type="string", length=500, nullable=true)
     */
    private $caraceristica;

    /**
     * @var string
     *
     * @ORM\Column(name="aplicacao", type="string", length=500, nullable=true)
     */
    private $aplicacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="data", type="integer", nullable=true)
     */
    private $data;

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
     * @var \AppBundle\Entity\Dureza
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dureza")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDureza", referencedColumnName="id")
     * })
     */
    private $iddureza;

    /**
     * @var \AppBundle\Entity\Categoria
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Categoria", referencedColumnName="id")
     * })
     */
    private $Categoria;

    /**
     * @var \AppBundle\Entity\Conservacao
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Conservacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idConservacao", referencedColumnName="id")
     * })
     */
    private $idconservacao;

    /**
     * @var \AppBundle\Entity\Prateleira
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Prateleira")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPrateleira", referencedColumnName="id")
     * })
     */
    private $idprateleira;

    /**
     * @var \AppBundle\Entity\Sistemacristalino
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sistemacristalino")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSistemaCristalina", referencedColumnName="id")
     * })
     */
    private $idsistemacristalina;

    /**
     * @var \AppBundle\Entity\Ocorencia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ocorencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOcorencia", referencedColumnName="id")
     * })
     */
    private $idocorencia;

    /**
     * @var \AppBundle\Entity\Densidade
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Densidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDensidade", referencedColumnName="id")
     * })
     */
    private $iddensidade;

    /**
     * @var \AppBundle\Entity\Medida
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Medida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMedida", referencedColumnName="id")
     * })
     */
    private $idmedida;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Mineiro
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
        return $this->nome;
    }

    /**
     * Set peso
     *
     * @param integer $peso
     *
     * @return Mineiro
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return integer
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set caraceristica
     *
     * @param string $caraceristica
     *
     * @return Mineiro
     */
    public function setCaraceristica($caraceristica)
    {
        $this->caraceristica = $caraceristica;

        return $this;
    }

    /**
     * Get caraceristica
     *
     * @return string
     */
    public function getCaraceristica()
    {
        return $this->caraceristica;
    }

    /**
     * Set aplicacao
     *
     * @param string $aplicacao
     *
     * @return Mineiro
     */
    public function setAplicacao($aplicacao)
    {
        $this->aplicacao = $aplicacao;

        return $this;
    }

    /**
     * Get aplicacao
     *
     * @return string
     */
    public function getAplicacao()
    {
        return $this->aplicacao;
    }

    /**
     * Set data
     *
     * @param integer $data
     *
     * @return Mineiro
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return integer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Mineiro
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
     * Set iddureza
     *
     * @param \AppBundle\Entity\Dureza $iddureza
     *
     * @return Mineiro
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
     * Set iddureza
     *
     * @param \AppBundle\Entity\Dureza $iddureza
     *
     * @return Mineiro
     */
    public function setIddureza(\AppBundle\Entity\Dureza $iddureza = null)
    {
        $this->iddureza = $iddureza;

        return $this;
    }

    /**
     * Get iddureza
     *
     * @return \AppBundle\Entity\Dureza
     */
    public function getIddureza()
    {
        return $this->iddureza;
    }

    /**
     * Set Categoria
     *
     * @param int $Categoria
     *
     * @return Mineiro
     */
    public function setCategoria($categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get Categoria
     *
     * @return \AppBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set idconservacao
     *
     * @param \AppBundle\Entity\Conservacao $idconservacao
     *
     * @return Mineiro
     */
    public function setIdconservacao($idconservacao = null)
    {
        $this->idconservacao = $idconservacao;

        return $this;
    }

    /**
     * Get idconservacao
     *
     * @return
     */
    public function getIdconservacao()
    {
        return $this->idconservacao;
    }

    /**
     * Set idprateleira
     *
     * @param \AppBundle\Entity\Prateleira $idprateleira
     *
     * @return Mineiro
     */
    public function setIdprateleira($idprateleira = null)
    {
        $this->idprateleira = $idprateleira;

        return $this;
    }

    /**
     * Get idprateleira
     *
     * @return \AppBundle\Entity\Prateleira
     */
    public function getIdprateleira()
    {
        return $this->idprateleira;
    }

    /**
     * Set idsistemacristalina
     *
     * @param \AppBundle\Entity\Sistemacristalino $idsistemacristalina
     *
     * @return Mineiro
     */
    public function setIdsistemacristalina(\AppBundle\Entity\Sistemacristalino $idsistemacristalina = null)
    {
        $this->idsistemacristalina = $idsistemacristalina;

        return $this;
    }

    /**
     * Get idsistemacristalina
     *
     * @return \AppBundle\Entity\Sistemacristalino
     */
    public function getIdsistemacristalina()
    {
        return $this->idsistemacristalina;
    }

    /**
     * Set idocorencia
     *
     * @param \AppBundle\Entity\Ocorencia $idocorencia
     *
     * @return Mineiro
     */
    public function setIdocorencia(\AppBundle\Entity\Ocorencia $idocorencia = null)
    {
        $this->idocorencia = $idocorencia;

        return $this;
    }

    /**
     * Get idocorencia
     *
     * @return \AppBundle\Entity\Ocorencia
     */
    public function getIdocorencia()
    {
        return $this->idocorencia;
    }

    /**
     * Set iddensidade
     *
     * @param \AppBundle\Entity\Densidade $iddensidade
     *
     * @return Mineiro
     */
    public function setIddensidade(\AppBundle\Entity\Densidade $iddensidade = null)
    {
        $this->iddensidade = $iddensidade;

        return $this;
    }

    /**
     * Get iddensidade
     *
     * @return \AppBundle\Entity\Densidade
     */
    public function getIddensidade()
    {
        return $this->iddensidade;
    }

    /**
     * Set idmedida
     *
     * @param \AppBundle\Entity\Medida $idmedida
     *
     * @return Mineiro
     */
    public function setIdmedida(\AppBundle\Entity\Medida $idmedida = null)
    {
        $this->idmedida = $idmedida;

        return $this;
    }

    /**
     * Get idmedida
     *
     * @return \AppBundle\Entity\Medida
     */
    public function getIdmedida()
    {
        return $this->idmedida;
    }
}
