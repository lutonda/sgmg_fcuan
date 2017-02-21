<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\AppBundle;
use AppBundle\Entity\MAC\Mineiro;
use AppBundle\Domain\MUS\ConstactosRepositorio;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;

class AmostraRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {

        $amostra = $this
            ->em
            ->getRepository('AppBundle:MAC\Amostra')
            ->findAll();
        for ($i = 0; $i < sizeof($amostra); $i++)
            //$usuario[$i] = $this->mostrarUm($usuario[$i]);
        return $amostra;
    }

    public function mostrarPorCategoria($id)
    {
        $en = new SYS\enuRepositorio();
        $amostras=$this->em->getRepository('AppBundle:MAC\Mineiro')->findBy(array('idcategoria'=>$id));


            return $amostras;
        }

    public function mostrarUm($id)
    {
        $en = new SYS\enuRepositorio();
        $amostras=$this->em->getRepository('AppBundle:MAC\Mineiro')->findOneBy(array('id'=>$id));
        return $this->construirAmostra($amostras);
    }

    public function criarUm($mineiro)
    {
        $this->em->persist($mineiro);
        $this->em->flush();
        return $mineiro;
    }

    public function cusquery($prateleira=null){
        $query=array();
            if($prateleira!=null){
                $query['idprateleira']=$prateleira;
            }

        $amostras=$this->em->getRepository('AppBundle:MAC\Mineiro')->findBy($query);
        return $amostras;
    }

    public function construirAmostra($amostras){
       // $amostras=new Mineiro();
        $categoria=new CategoriaRepositorio($this->em);
        $composicaoquimico=new ComposicaoQuimicoRepositorio($this->em);
        $cores=new CorMineiroRepositorio($this->em);
        $fl=new SYS\gerirFicheiros();
        //$amostras->setRisca($qba['risca']);
        //$amostras->setBrilho($qba['brilho']);

        $amostras->setCores($cores->mostrarCorMineiro($amostras->getId()));
        $amostras->setComposicaoquimico($composicaoquimico->mostrarComposicaoquimico($amostras->getId()));
        $amostras->setIdcategoria($categoria->mostrarUm($amostras->getIdcategoria()));
        $amostras->setAnexos($fl->gerar($amostras->getNome(),'mineiro'));
        //$amostras->setConservacao($concervacao->mostrarUm($qba['concervacao']));
        return $amostras;
    }

    public function verificar($id)
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

    public function ShowLast(){
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