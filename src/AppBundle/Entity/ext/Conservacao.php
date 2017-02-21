<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conservacao
 *
 * @ORM\Table(name="Conservacao")
 * @ORM\Entity
 */
class Conservacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="temperaturaMin", type="integer", nullable=true)
     */
    private $temperaturamin;

    /**
     * @var integer
     *
     * @ORM\Column(name="temperaturaMax", type="integer", nullable=true)
     */
    private $temperaturamax;

    /**
     * @var integer
     *
     * @ORM\Column(name="sensibilidadeLuminosa", type="integer", nullable=true)
     */
    private $sensibilidadeluminosa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set temperaturamin
     *
     * @param integer $temperaturamin
     *
     * @return Conservacao
     */
    public function setTemperaturamin($temperaturamin)
    {
        $this->temperaturamin = $temperaturamin;

        return $this;
    }

    /**
     * Get temperaturamin
     *
     * @return integer
     */
    public function getTemperaturamin()
    {
        return $this->temperaturamin;
    }

    /**
     * Set temperaturamax
     *
     * @param integer $temperaturamax
     *
     * @return Conservacao
     */
    public function setTemperaturamax($temperaturamax)
    {
        $this->temperaturamax = $temperaturamax;

        return $this;
    }

    /**
     * Get temperaturamax
     *
     * @return integer
     */
    public function getTemperaturamax()
    {
        return $this->temperaturamax;
    }

    /**
     * Set sensibilidadeluminosa
     *
     * @param integer $sensibilidadeluminosa
     *
     * @return Conservacao
     */
    public function setSensibilidadeluminosa($sensibilidadeluminosa)
    {
        $this->sensibilidadeluminosa = $sensibilidadeluminosa;

        return $this;
    }

    /**
     * Get sensibilidadeluminosa
     *
     * @return integer
     */
    public function getSensibilidadeluminosa()
    {
        return $this->sensibilidadeluminosa;
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
