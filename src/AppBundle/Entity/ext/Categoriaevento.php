<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoriaevento
 *
 * @ORM\Table(name="CategoriaEvento")
 * @ORM\Entity
 */
class Categoriaevento
{
    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=50, nullable=true)
     */
    private $categoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Categoriaevento
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
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
