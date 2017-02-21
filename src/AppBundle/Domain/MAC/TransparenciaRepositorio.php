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

class TransparenciaRepositorio extends EntityRepository implements UserLoaderInterface
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
            ->getRepository('AppBundle:MAC\Transparencia')
            ->findBy([],['nome'=>'ASC']);
        return $cores;
    }

    public function mostrarUm($transparencia)
    {
        return $this->em->getRepository('AppBundle:MAC\Transparencia')->findOneBy(array('id' => $transparencia));
    }

    public function mostrarMineiros($mineiro)
    {
        $qb = $this->em->getRepository('AppBundle:MAC\Transparenciamineiro')->findBy(array('idmineiro' => $mineiro));
        $transparencias = null;
        foreach ($qb as $transparencia)
            $transparencias[] = $this->mostrarUm($transparencia->getIdtransparencia());

        return $transparencias;
    }

    public function cusquery($nome = null)
    {
        $query = array();
        if ($nome != null) {
            $query['nome'] = $nome;
        }

        $transparencia = $this->em->getRepository('AppBundle:MAC\Transparencia')->findBy($query);
        return $transparencia;
    }

    public function criarUm($transparencia)
    {
        $this->em->persist($transparencia);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($transparencia)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Transparencia')->findOneBy(array('id' => $transparencia->getId()));
        $cat->setNome($transparencia->getNome());
        $cat->setDescricao($transparencia->getDesignacao());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($transparencia)
    {
        $this->em->remove($transparencia);
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