<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\Entity\MAC\Brilho;
use AppBundle\Entity\MAC\Cor;
use AppBundle\Entity\MAC\Cormineiro;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;

class FracturaRepositorio extends EntityRepository implements UserLoaderInterface
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
            ->getRepository('AppBundle:MAC\Fratura')
            ->findBy([],['nome'=>'ASC']);
        return $cores;
    }

    public function mostrarUm($fractura)
    {
        return $this->em->getRepository('AppBundle:MAC\Fratura')->findOneBy(array('id' => $fractura));
    }

    public function mostrarMineiros($mineiro)
    {
        $qb = $this->em->getRepository('AppBundle:MAC\Fraturamineiro')->findBy(array('idmineiro' => $mineiro));
        $fraturas = null;
        foreach ($qb as $fratura)
            $fraturas[] = $this->mostrarUm($fratura->getIdfratura());;

        return $fraturas;
    }

    public function cusquery($nome = null)
    {
        $query = array();
        if ($nome != null) {
            $query['nome'] = $nome;
        }

        $fratura = $this->em->getRepository('AppBundle:MAC\Fratura')->findBy($query);
        return $fratura;
    }


    public function criarUm($fractura)
    {
        $this->em->persist($fractura);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($fractura)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Fratura')->findOneBy(array('id' => $fractura->getId()));
        $cat->setNome($fractura->getNome());
        $cat->setDescricao($fractura->getDescricao());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($fractura)
    {
        $this->em->remove($fractura);
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