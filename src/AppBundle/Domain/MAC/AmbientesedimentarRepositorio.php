<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\Entity\MAC\Ambientesedimentar;
use AppBundle\Entity\MAC\Cor;
use AppBundle\Entity\MAC\Cormineiro;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS\enuRepositorio;
use Symfony\Component\Security\Core\User\UserInterface;

class AmbientesedimentarRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {
        $en=new enuRepositorio();
        $ambiente = $this
            ->em
            ->getRepository('AppBundle:MAC\Ambientesedimentar')
            ->findBy([],['nome'=>'ASC']);
        foreach ($ambiente as $sec){
            $sec->setEstado($en->estado($sec->getEstado()));
        }
        return $ambiente;
    }

    public function mostrarUm($ambiente)
    {
        return $this->em->getRepository('AppBundle:MAC\Ambientesedimentar')->findOneBy(array('id' => $ambiente));

    }

    public function mostrarAmbienteRocha($rocha)
    {
        $qb = $this->em->getRepository('AppBundle:MAC\Ambientesedimentarrocha')->findBy(array('idrocha' => $rocha));
        $rocha = null;

        foreach ($qb as $roch) {
            $qrocha=$roch->getIdambientesedimentar();
            if(!is_null($qrocha))
                $rocha[] = $this->mostrarUm($qrocha->getId());
        }
        return $rocha;
    }

    public function criarUm($ambiente)
    {
        $this->em->persist($ambiente);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($ambiente)
    {
        $sec = new SeccaoRepositorio($this->em);
        $cat = $this->em->getRepository('AppBundle:MAC\Ambientesedimentar')->findOneBy(array('id' => $ambiente->getId()));
        $cat->setNome($ambiente->getNome());
        $cat->setEstado($ambiente->getEstado());
        $cat->setDescricao($ambiente->getDescricao());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($ambiente)
    {
        $this->em->remove($ambiente);
        $this->em->flush();
        return true;
    }

    /**
     * Loads the user for the given username.
     *
     * This method must return null if the user is not found.
     *
     * @param string $username The username
     *
     * @return UserInterface|null
     */
    public function loadUserByUsername($username)
    {
        // TODO: Implement loadUserByUsername() method.
    }
}