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

class ClivagemRepositorio extends EntityRepository implements UserLoaderInterface
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
            ->getRepository('AppBundle:MAC\Clivagem')
            ->findBy([],['valor'=>'ASC']);
        return $risca;
    }

    public function mostrarUm($clivagem)
    {
        return $this->em->getRepository('AppBundle:MAC\Clivagem')->findOneBy(array('id' => $clivagem));
    }

    public function mostrarMineiros($mineiro)
    {
        $qb = $this->em->getRepository('AppBundle:MAC\Clivagemmineiro')->findBy(array('idmineiro' => $mineiro));
        $clivagens = null;
        foreach ($qb as $clivagem)
            $clivagens[] = $this->mostrarUm($clivagem->getIdclivagem());;

        return $clivagens;
    }
    public function criarUm($clivagem)
    {
        $this->em->persist($clivagem);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($clivagem)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Clivagem')->findOneBy(array('id' => $clivagem->getId()));
        $cat->setTipo($clivagem->getTipo());
        $cat->setValor($clivagem->getValor());
        $cat->setDescricao($clivagem->getDescricao());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($clivagem)
    {
        $this->em->remove($clivagem);
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