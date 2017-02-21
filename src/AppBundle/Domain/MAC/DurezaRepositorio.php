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

class DurezaRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {
        $dureza = $this
            ->em
            ->getRepository('AppBundle:MAC\Dureza')
            ->findBy([],['nome'=>'ASC']);
        return $dureza;
    }

    public function mostrarUm($dureza)
    {
        return $this->em->getRepository('AppBundle:MAC\Dureza')->findOneBy(array('id' => $dureza));
    }

    public function cusquery($nome = null)
    {
        $query = array();
        if ($nome != null) {
            $query['nome'] = $nome;
        }

        $medida = $this->em->getRepository('AppBundle:MAC\Medida')->findBy($query);
        return $medida;
    }

    public function criarUm($dureza)
    {
        $this->em->persist($dureza);
        $this->em->flush();
        return $dureza;
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