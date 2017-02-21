<?php

namespace AppBundle\Entity\SYS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mca
 *
 * @ORM\Table(name="Mca")
 * @ORM\Entity
 */
class Mca
{
    /**
     * @var string
     *
     * @ORM\Column(name="objecto", type="string", length=50, nullable=true)
     */
    private $objecto;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", nullable=true)
     */
    private $admin;

    /**
     * @var string
     *
     * @ORM\Column(name="gestor", type="string", nullable=true)
     */
    private $gestor;

    /**
     * @var string
     *
     * @ORM\Column(name="funcionario", type="string", nullable=true)
     */
    private $funcionario;

    /**
     * @var string
     *
     * @ORM\Column(name="visitante", type="string", nullable=true)
     */
    private $visitante;

    /**
     * @var string
     *
     * @ORM\Column(name="anonymous", type="string", nullable=true)
     */
    private $anonymous;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set objecto
     *
     * @param string $objecto
     *
     * @return Mca
     */
    public function setObjecto($objecto)
    {
        $this->objecto = $objecto;

        return $this;
    }

    /**
     * Get objecto
     *
     * @return string
     */
    public function getObjecto()
    {
        return strtoupper($this->objecto);
    }
    /**
     * Set descricao
     *
     * @param string $objecto
     *
     * @return Mca
     */
    public function setDescrcao($descricao)
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
        return strtoupper($this->descricao);
    }

    /**
     * Set admin
     *
     * @param string $admin
     *
     * @return Mca
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return string
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set gestor
     *
     * @param string $gestor
     *
     * @return Mca
     */
    public function setGestor($gestor)
    {
        $this->gestor = $gestor;

        return $this;
    }

    /**
     * Get gestor
     *
     * @return string
     */
    public function getGestor()
    {
        return $this->gestor;
    }

    /**
     * Set gestor
     *
     * @param string $funcionario
     *
     * @return Mca
     */
    public function setFuncionario($funcionario)
    {
        $this->funcionario = $funcionario;

        return $this;
    }

    /**
     * Get funcionario
     *
     * @return string
     */
    public function getFuncionario()
    {
        return $this->funcionario;
    }

    /**
     * Set visitante
     *
     * @param string $visitante
     *
     * @return Mca
     */
    public function setVisitante($visitante)
    {
        $this->visitante = $visitante;

        return $this;
    }

    /**
     * Get visitante
     *
     * @return string
     */
    public function getVisitante()
    {
        return $this->visitante;
    }

    /**
     * Set anonimo
     *
     * @param string $anonymous
     *
     * @return Mca
     */
    public function setAnonimo($anonimo)
    {
        $this->anonymous = $anonimo;

        return $this;
    }

    /**
     * Get anonymous
     *
     * @return string
     */
    public function getAnonimo()
    {
        return $this->anonymous;
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
     * Set id
     *
     * @param integer $id
     *
     * @return Mca
     */
    public function setId($id)
    {
        $this->id=$id;

        return $this;
    }
}
