<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\Entity\MAC\Composicaoquimico;
use AppBundle\Entity\MAC\Elementoquimico;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;

class ComposicaoQuimicoRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {

        $Composicaoquimico = $this
            ->em
            ->getRepository('AppBundle:MAC\Elementoquimico')
            ->findBy([], ['nome' => 'ASC']);
        return $Composicaoquimico;
    }


    public function mostrarComposicaoquimico($mineiro)
    {
        $qb = $this->em->getRepository('AppBundle:MAC\Composicaoquimico')->findBy(array('idmineiro' => $mineiro));
        $elementos = null;
        foreach ($qb as $elemento)
            $elementos[] = $this->mostrarUm($elemento->getIdelemento());;

        return $elementos;
    }


    public function mostrarUm($id)
    {
        return $this->em->getRepository('AppBundle:MAC\Elementoquimico')->findOneBy(array('id' => $id));

    }


    public function criarUm($elemento)
    {
        $this->em->persist($elemento);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($elemento)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Elementoquimico')->findOneBy(array('id' => $elemento->getId()));
        $cat->setNome($elemento->getNome());
        $cat->setSimbolo($elemento->getSimbolo());
        $this->em->flush();
        return true;
    }

    public function eliminarUm(Elementoquimico $elemento)
    {
        $this->em->remove($elemento);
        $this->em->flush();
        return true;
    }

    public function Verificar($id)
    {

        $en = new SYS\enuRepositorio();
        $usuario = new Usuario();
        $ps = new PessoaRepositorio($this->em);
        $pessoa = new Pessoa();
        $qb = $this->em->createQueryBuilder();
        $qb = $qb->select('u', 'p')
            ->from('AppBundle:MUS\Usuario', 'u')
            ->leftJoin('u.idpessoa', 'p')
            ->select('u.id', 'u.username', 'u.tipo', 'u.roles', 'u.estado', 'u.data', 'p.id as pessoa')
            ->where('u.id=' . $id)
            ->getQuery();

        $qb = $qb->getResult();
        $qb = $qb[0];
        $pessoa->setId($qb['pessoa']);
        $usuario->setId($id);
        $usuario->setUsername($qb['username']);
        $usuario->setTipo($en->tipoPessoaEnum($qb['tipo']));
        $usuario->setRoles($qb['roles']);
        $usuario->setIdpessoa($ps->mostrarUm($pessoa));
        $usuario->setEstado($qb['estado']);
        $usuario->setData($qb['data']);
        return $usuario;
    }

    public function salvarUm(Usuario $usuario)
    {

        $this->em;

        $usuario->setData(date('Y-m-d'));
        $usuario->setRoles('ROLE_USER');
        //$usuario->setGravatar('http://www.gravatar.com/avatar/'.md5(trim($req->get('email'))));
        $usuario->setEstado(true);
        $pwd = $usuario->getPassword();
        //$encoder=$this->container->get('security.password_encoder');
        //$pwd=$encoder->encodePassworrd($usuario, $pwd);
        $usuario->setPassword($pwd);

        $this->em->persist($usuario->getIdpessoa());
        $this->em->persist($usuario);
        $this->em->flush();
        var_dump($usuario);
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

    public function ShowLast()
    {
        $en = new SYS\enuRepositorio();
        $usuario = new Usuario();
        $ps = new PessoaRepositorio($this->em);
        $pessoa = new Pessoa();
        $qb = $this->em->createQueryBuilder();
        $qb = $qb->select('u', 'p')
            ->from('AppBundle:MUS\Usuario', 'u')
            ->leftJoin('u.idpessoa', 'p')
            ->select('u.id', 'u.username', 'u.tipo', 'u.roles', 'u.estado', 'u.data', 'p.id as pessoa')
            ->getQuery();

        $qb = $qb->getResult();
        $qb = $qb[0];
        $pessoa->setId($qb['pessoa']);
        $usuario->setId($qb['id']);
        $usuario->setUsername($qb['username']);
        $usuario->setTipo($en->tipoPessoaEnum($qb['tipo']));
        $usuario->setRoles($qb['roles']);
        $usuario->setIdpessoa($ps->mostrarUm($pessoa));
        $usuario->setEstado($qb['estado']);
        $usuario->setData($qb['data']);
        return $usuario;
    }

}