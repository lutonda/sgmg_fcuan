<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Local
 *
 * @ORM\Table(name="Local")
 * @ORM\Entity
 */
class Local
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="lotacao", type="integer", nullable=true)
     */
    private $lotacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Local
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Local
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
     * Set lotacao
     *
     * @param integer $lotacao
     *
     * @return Local
     */
    public function setLotacao($lotacao)
    {
        $this->lotacao = $lotacao;

        return $this;
    }

    /**
     * Get lotacao
     *
     * @return integer
     */
    public function getLotacao()
    {
        return $this->lotacao;
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
}
