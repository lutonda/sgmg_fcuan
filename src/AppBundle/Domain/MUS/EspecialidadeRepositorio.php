<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 02-11-2016
 * Time: 8:46
 */

namespace AppBundle\Domain\MUS;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\MUS\Especialidade;
use Doctrine\ORM\EntityManager;

class EspecialidadeRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){
        $especialidade = $this
            ->em
            ->getRepository('AppBundle:MUS\Especialidade')
            ->findAll();
        return $especialidade;
    }
    public function mostrarUm($especialidade){
        $especialidade=$this->em->getRepository('AppBundle:MUS\Especialidade')->findOneBy(['id'=>$especialidade]);

        return $especialidade;
    }

}