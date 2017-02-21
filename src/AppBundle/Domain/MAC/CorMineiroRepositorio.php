<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\Entity\MAC\Cor;
use AppBundle\Entity\MAC\Cormineiro;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;

class CorMineiroRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {
        $cores = $this
            ->em
            ->getRepository('AppBundle:MAC\Cor')
            ->findBy([],['nome'=>'ASC']);
        return $cores;
    }


    public function mostrarCorMineiro($mineiro)
    {
        $qb = $this->em->getRepository('AppBundle:MAC\Cormineiro')->findBy(array('idmineiro' => $mineiro));
        $cores = null;

        foreach ($qb as $cor)
            $cores[] = $this->mostrarCor($cor->getIdcor());;

        return $cores;
    }

    public function mostrarCor($id)
    {
        return $this->em->getRepository('AppBundle:MAC\Cor')->findOneBy(array('id' => $id));
    }

    public function mostrarUm($id)
    {
        return $this->em->getRepository('AppBundle:MAC\Cor')->findOneBy(array('id' => $id));


    }

    public function cusquery($nome=null){
        $query=array();
        if($nome!=null){
            $query['nome']=$nome;
        }

        $cor=$this->em->getRepository('AppBundle:MAC\Cor')->findBy($query);
        return $cor;
    }

    public function criarUm($cor)
    {
        $this->em->persist($cor);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($cor)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Cor')->findOneBy(array('id' => $cor->getId()));
        $cat->setNome($cor->getNome());
        $cat->setHex($cor->getHex());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($cor)
    {
        $this->em->remove($cor);
        $this->em->flush();
        return true;
    }

    public function loadUserByUsername($username)
    {
        $user = $this->createQueryBuilder('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery()
            ->getOneOrNullResult();

        if (null === $user) {
            $message = sprintf(
                'Unable to find an active admin AppBundle:User object identified by "%s".',
                $username
            );
            throw new UsernameNotFoundException($message);
        }

        return $user;
    }

}