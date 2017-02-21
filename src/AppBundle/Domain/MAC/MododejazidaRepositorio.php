<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\Entity\MAC\Mododejazida;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS\enuRepositorio;
use Symfony\Component\Security\Core\User\UserInterface;

class MododejazidaRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {
        $en=new enuRepositorio();
        $modo = $this
            ->em
            ->getRepository('AppBundle:MAC\Mododejazida')
            ->findBy([],['nome'=>'ASC']);
        foreach ($modo as $sec){
            $sec->setEstado($en->estado($sec->getEstado()));
        }
        return $modo;
    }

    public function mostrarUm($modo)
    {
        return $this->em->getRepository('AppBundle:MAC\Mododejazida')->findOneBy(array('id' => $modo));
    }

    public function mostrarRocha($rocha)
    {
        return $this->em->getRepository('AppBundle:MAC\Mododejazidarocha')->findBy(array('idrocha' => $rocha));
    }

    public function cusquery($rocha=null,$modo=null){
        $query=array();
        if($rocha!=null){
            $query['idrocha']=$rocha;
        }

        $rochas=$this->em->getRepository('AppBundle:MAC\Rocha')->findBy($query);
        return $rochas;
    }


    public function criarUm($modo)
    {
        $this->em->persist($modo);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($modo)
    {
        $sec = new SeccaoRepositorio($this->em);
        $cat = $this->em->getRepository('AppBundle:MAC\Mododejazida')->findOneBy(array('id' => $modo->getId()));
        $cat->setNome($modo->getNome());
        $cat->setEstado($modo->getEstado());
        $cat->setDescricao($modo->getDescricao());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($modo)
    {
        $this->em->remove($modo);
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