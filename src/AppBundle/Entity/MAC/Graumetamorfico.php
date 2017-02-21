<?php

namespace AppBundle\Entity\MAC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Graumetamorfico
 *
 * @ORM\Table(name="GrauMetamorfico")
 * @ORM\Entity
 */
class Graumetamorfico
{
    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
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
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Graumetamorfico
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
     * Set id
     *
     * @return Graumetamorfico
     */
    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }
}
