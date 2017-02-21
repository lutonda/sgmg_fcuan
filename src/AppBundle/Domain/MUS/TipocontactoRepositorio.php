<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 02-11-2016
 * Time: 13:28
 */

namespace AppBundle\Domain\MUS;

use AppBundle\Entity\MUS\Contactos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\MUS\Tipocontacto;
use Doctrine\ORM\EntityManager;

class TipocontactoRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {
        $tipocontactos = $this
            ->em
            ->getRepository('AppBundle:MUS\Tipocontacto')
            ->findAll();
        return $tipocontactos;
    }

    public function mostrarUm($id)
    {
        $tipocontacto = $this->em->getRepository('AppBundle:MUS\Tipocontacto')->findOneBy(['id' => $id]);
        return $tipocontacto;
    }

}