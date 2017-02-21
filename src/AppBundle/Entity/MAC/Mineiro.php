<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mineiro
 *
 * @ORM\Table(name="Mineiro", indexes={@ORM\Index(name="idDureza", columns={"idDureza"}), @ORM\Index(name="idCategoria", columns={"idCategoria"}), @ORM\Index(name="idConservacao", columns={"idConservacao"}), @ORM\Index(name="idPrateleira", columns={"idPrateleira"}), @ORM\Index(name="idSistemaCristalina", columns={"idSistemaCristalina"}), @ORM\Index(name="idOcorencia", columns={"idOcorencia"}), @ORM\Index(name="idDensidade", columns={"idDensidade"}), @ORM\Index(name="idMedida", columns={"idMedida"})})
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
     * @var date
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
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
     *   @ORM\JoinColumn(name="idCategoria", referencedColumnName="id")
     * })
     */
    private $idcategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="idConservacao", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
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
     * @var array
     *
     */
    private $composicaoquimico;

    /**
     * @var array
     *
     */
    private $cores;

    /**
     * @var array
     *
     */
    private $brilhos;

    /**
     * @var array
     *
     */
    private $clivagem;

    /**
     * @var array
     *
     */
    private $fractura;

    /**
     * @var array
     *
     */
    private $habito;

    /**
     * @var array
     *
     */
    private $genese;

    /**
     * @var array
     *
     */
    private $paragenese;

    /**
     * @var array
     *
     */
    private $transparencia;


    /**
     * @var array
     *
     */
    private $anexos;


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
    public function setIddureza($iddureza = null)
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
     * Set idcategoria
     *
     * @param \AppBundle\Entity\Categoria $idcategoria
     *
     * @return Mineiro
     */
    public function setIdcategoria($idcategoria = null)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return \AppBundle\Entity\Categoria
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set idconservacao
     *
     * @param \AppBundle\Entity\Conservacao $idconservacao
     *
     * @return Mineiro
     */
    public function setIdconservacao(\AppBundle\Entity\Conservacao $idconservacao = null)
    {
        $this->idconservacao = $idconservacao;

        return $this;
    }

    /**
     * Get idconservacao
     *
     * @return \AppBundle\Entity\Conservacao
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
     * @param Densidade $iddensidade
     *
     * @return Mineiro
     */
    public function setIddensidade(Densidade $iddensidade = null)
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
    public function setIdmedida(\AppBundle\Entity\MAC\Medida $idmedida = null)
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

    /**
     * Set composicaoquimico
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setComposicaoquimico($composicaoquimico = null)
    {
        $this->composicaoquimico = $composicaoquimico;

        return $this;
    }

    /**
     * Get composicaoquimico
     *
     * @return array
     */
    public function getComposicaoquimico()
    {
        return $this->composicaoquimico;
    }

    /**
     * Set cores
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setCores($cores = null)
    {
        $this->cores = $cores;

        return $this;
    }

    /**
     * Get composicaoquimico
     *
     * @return array
     */
    public function getCores()
    {
        return $this->cores;
    }

    /**
     * Set brilhos
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setBrilhos($brilhos = null)
    {
        $this->brilhos = $brilhos;

        return $this;
    }

    /**
     * Get brilhos
     *
     * @return array
     */
    public function getBrilhos()
    {
        return $this->brilhos;
    }

    /**
     * Set clivagem
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setClivagem($clivagem = null)
    {
        $this->clivagem = $clivagem;

        return $this;
    }

    /**
     * Get clivagem
     *
     * @return array
     */
    public function getClivagem()
    {
        return $this->clivagem;
    }

    /**
     * Set fractura
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setFractura($farctura = null)
    {
        $this->fractura = $farctura;

        return $this;
    }

    /**
     * Get fractura
     *
     * @return array
     */
    public function getFractura()
    {
        return $this->fractura;
    }

    /**
     * Set habito
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setHabito($habito = null)
    {
        $this->habito = $habito;

        return $this;
    }

    /**
     * Get habito
     *
     * @return array
     */
    public function getHabito()
    {
        return $this->habito;
    }

    /**
     * Set genese
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setGenese($genese = null)
    {
        $this->genese = $genese;

        return $this;
    }

    /**
     * Get genese
     *
     * @return array
     */
    public function getGenese()
    {
        return $this->genese;
    }

    /**
     * Get paragenese
     *
     * @return array
     */
    public function getParagenese()
    {
        return $this->habito;
    }

    /**
     * Set paragenese
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setParagenese($paragenese = null)
    {
        $this->paragenese = $paragenese;

        return $this;
    }

    /**
     * Set transparencia
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setTransparencia($transparencia = null)
    {
        $this->transparencia = $transparencia;

        return $this;
    }

    /**
     * Get transparencia
     *
     * @return array
     */
    public function getTransparencia()
    {
        return $this->transparencia;
    }

    /**
     * Set cores
     *
     * @param array
     *
     * @return Mineiro
     */
    public function setAnexos($anexos = null)
    {
        $this->anexos = $anexos;

        return $this;
    }

    /**
     * Get composicaoquimico
     *
     * @return array
     */
    public function getAnexos()
    {
        return $this->anexos;
    }
}
