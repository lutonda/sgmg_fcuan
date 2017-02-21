<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\Entity\MAC\Categoria;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;

class TiporochaRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {

        $categoria = $this
            ->em
            ->getRepository('AppBundle:MAC\Tiporochas')
            ->findAll();
        $cat=null;
        foreach ($categoria as $categorias) {
            if (is_null($categorias->getDependencia())){

                $categorias->setDependencia($this->mostrarUm($categorias->getId()));
            $cat[]=$categorias;
            //var_dump($cat);
            }
        }
        return $cat;
    }

    public function construirDependencia($categoria)
    {
        $categ=new Categoria();
        $qb = $this->em->createQueryBuilder();
        $qb = $qb->select('u', 'd')
            ->from('AppBundle:MAC\Categoria', 'c')
            ->Join('c.dependencia', 'd')
            ->select('c.id as id', 'c.nome as nome', 'd.id as dependencia')
            ->where('d.id=' . $categoria)
            ->getQuery();

        $vec = null;
        $qb = $qb->getResult();
        if (sizeof($qb) == 0)
            return null;
    }

    public function mostrar($categoria)
    {
        if($categoria==null)
            return null;
        $categoria=$this->em->getRepository('AppBundle:MAC\Categoria')
        ->find($categoria);

        return $categoria;
    }

    public function mostrarUm($categoria)
    {
        //if($categoria==5)

        $qb = $this->em->createQueryBuilder();
        $qb = $qb->select('c', 'd')
            ->from('AppBundle:MAC\Tiporochas', 'c')
            ->Join('c.dependencia', 'd')
            ->select('c.id as id', 'c.nome as nome','c.descricao')
            ->where('d.id=' . $categoria)
            ->getQuery();
        $qb = $qb->getResult();
        //var_dump($qb);
        $cat=null;
        for($i=0;$i<sizeof($qb);$i++) {
            $categoria=new Categoria();
            $categoria->setId($qb[$i]['id']);
            $categoria->setNome($qb[$i]['nome']);

            $categoria->setDependencia($this->mostrarUm($categoria->getId()));

            $cat[]=$categoria;
            }
        return $cat;
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