<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;

class RiscaRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {
        $risca = $this
            ->em
            ->getRepository('AppBundle:MAC\Risca')
            ->findBy([],['nome'=>'ASC']);
        return $risca;
    }

    public function mostrarUm($risca)
    {
        return $this->em->getRepository('AppBundle:MAC\Risca')->findOneBy(array('id' => $risca));
    }

    public function criarUm($risca)
    {
        $this->em->persist($risca);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($risca)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Risca')->findOneBy(array('id' => $risca->getId()));
        $cat->setNome($risca->getNome());
        $cat->setDescricao($risca->getDescricao());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($genese)
    {
        $this->em->remove($genese);
        $this->em->flush();
        return true;
    }

    public function cusquery($nome=null){
        $query=array();
        if($nome!=null){
            $query['nome']=$nome;
        }

        $risca=$this->em->getRepository('AppBundle:MAC\Risca')->findBy($query);
        return $risca;
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