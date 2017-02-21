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

class GeneseRepositorio extends EntityRepository implements UserLoaderInterface
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
            ->getRepository('AppBundle:MAC\Genese')
            ->findBy([], ['nome' => 'ASC']);
        return $cores;
    }

    public function mostrarUm($genese)
    {
        return $this->em->getRepository('AppBundle:MAC\Genese')->findOneBy(array('id' => $genese));
    }

    public function mostrarMineiros($mineiro)
    {
        $qb = $this->em->getRepository('AppBundle:MAC\Genesemineiro')->findBy(array('idmineiro' => $mineiro));
        $geneses = null;
        foreach ($qb as $genese)
            $geneses[] = $this->mostrarUm($genese->getIdgenese());;

        return $geneses;
    }

    public function cusquery($nome = null)
    {
        $query = array();
        if ($nome != null) {
            $query['nome'] = $nome;
        }

        $cor = $this->em->getRepository('AppBundle:MAC\Genese')->findBy($query);
        return $cor;
    }

    public function criarUm($genese)
    {
        $this->em->persist($genese);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($genese)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Genese')->findOneBy(array('id' => $genese->getId()));
        $cat->setNome($genese->getNome());
        $cat->setDescricao($genese->getDescricao());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($genese)
    {
        $this->em->remove($genese);
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