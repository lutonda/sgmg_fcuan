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

class CategoriaRepositorio extends EntityRepository implements UserLoaderInterface
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
            ->getRepository('AppBundle:MAC\Categoria')
            ->findBy(array('dependencia' => null));
        $cat = null;
        foreach ($categoria as $categorias) {
            $categorias->setDependencia($this->mostrarDependentes($categorias->getId()));
            $cat[] = $categorias;

        }
        return $cat;
    }

    public function mostrarPadrao()
    {

        return $this
            ->em
            ->getRepository('AppBundle:MAC\Categoria')
            ->findBy([],['dependencia'=>'ASC','nome'=>'ASC']);
        $cat = null;
        foreach ($categoria as $categorias) {
            $categorias->setDependencia($this->mostrarDependentes($categorias->getId()));
            $cat[] = $categorias;

        }
        return $cat;
    }


    public function mostrarDependentes($categoria)
    {
        $qb = $this->em->createQueryBuilder();
        $qb = $this->em->getRepository('AppBundle:MAC\Categoria')->findBy(array('dependencia' => $categoria));

        $cat = null;
        foreach ($qb as $categoria) //for($i=0;$i<sizeof($qb);$i++)
        {
            $categoria->setDependencia($this->mostrarDependentes($categoria->getId()));
            $cat[] = $categoria;
        }
        return $cat;
    }

    public function mostrarUm($categoria)
    {
        $categoria = $this->em->getRepository('AppBundle:MAC\Categoria')->findOneBy(array('id' => $categoria));
        if (!is_null($categoria))
            $categoria->setDependencia($this->mostrarUm($categoria->getDependencia()));
        return $categoria;

    }

    public function cusquery($nome = null, $dependencia=null)
    {
        $query = array();
        if ($nome != null) {
            $query['nome'] = $nome;
        }
        if ($dependencia != null) {
            $query['dependencia'] = $dependencia;
        }
        $categoria = $this->em->getRepository('AppBundle:MAC\Categoria')->findBy($query);
        return $categoria;
    }
    public function criarUm(Categoria $categoria)
    {
        $this->em->persist($categoria);
        $this->em->flush();
        return true;
    }

    public function actualizarUm(Categoria $categoria)
    {

        $cat = $this->em->getRepository('AppBundle:MAC\Categoria')->findOneBy(array('id' => $categoria->getId()));
        $cat->setNome($categoria->getNome());
        $cat->setDependencia($categoria->getDependencia());
        $categoria->setEstado($categoria->getEstado());
        $this->em->flush();
        return true;
    }

    public function eliminarUm(Categoria $categoria)
    {
        $this->em->remove($categoria);
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