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

class GrauMetamorficoRepositorio extends EntityRepository implements UserLoaderInterface
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
            ->getRepository('AppBundle:MAC\Graumetamorfico')
            ->findBy([],['nome'=>'ASC']);
        return $cores;
    }

    public function mostrarUm($id)
    {
        return $this->em->getRepository('AppBundle:MAC\Graumetamorfico')->findOneBy(array('id' => $id));


    }



    public function cusquery($nome=null){
        $query=array();
        if($nome!=null){
            $query['nome']=$nome;
        }

        $cor=$this->em->getRepository('AppBundle:MAC\Cor')->findBy($query);
        return $cor;
    }

    public function criarUm($graumetamorfico)
    {
        $this->em->persist($graumetamorfico);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($graumetamorfico)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Cor')->findOneBy(array('id' => $graumetamorfico->getId()));
        $cat->setNome($graumetamorfico->getNome());
        $cat->setHex($graumetamorfico->getHex());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($graumetamorfico)
    {
        $this->em->remove($graumetamorfico);
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