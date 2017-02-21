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

class HabitoRepositorio extends EntityRepository implements UserLoaderInterface
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
            ->getRepository('AppBundle:MAC\Habito')
            ->findBy([],['nome'=>'ASC']);
        return $cores;
    }

    public function mostrarUm($habito)
    {
        return $this->em->getRepository('AppBundle:MAC\Habito')->findOneBy(array('id' => $habito));
    }

    public function mostrarMineiros($mineiro)
    {
        $qb = $this->em->getRepository('AppBundle:MAC\Habitomineiro')->findBy(array('idmineiro' => $mineiro));
        $habitos = null;
        foreach ($qb as $habito)
            $habitos[] = $this->mostrarUm($habito->getIdhabito());;

        return $habitos;
    }

    public function cusquery($nome = null)
    {
        $query = array();
        if ($nome != null) {
            $query['nome'] = $nome;
        }

        $habito = $this->em->getRepository('AppBundle:MAC\Habito')->findBy($query);
        return $habito;
    }

    public function criarUm($habito)
    {
        $this->em->persist($habito);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($habito)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Habito')->findOneBy(array('id' => $habito->getId()));
        $cat->setNome($habito->getNome());
        $cat->setDescricao($habito->getDesignacao());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($habito)
    {
        $this->em->remove($habito);
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