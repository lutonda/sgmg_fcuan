<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\AppBundle;
use AppBundle\Entity\MAC\Densidade;
use AppBundle\Entity\MAC\Mineiro;
use AppBundle\Domain\MUS\ConstactosRepositorio;
use AppBundle\Entity\MAC\Transparencia;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;

class MineiroRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {

        $mineiro = $this
            ->em
            ->getRepository('AppBundle:MAC\Mineiro')
            ->findAll();
        for ($i = 0; $i < sizeof($mineiro); $i++)
            //$usuario[$i] = $this->mostrarUm($usuario[$i]);
            return $mineiro;
    }

    public function mostrarPorCategoria($id)
    {
        $en = new SYS\enuRepositorio();
        $mineiros=$this->em->getRepository('AppBundle:MAC\Mineiro')->findBy(array('idcategoria'=>$id));


        return $mineiros;
    }

    public function mostrarUm($id)
    {
        $en = new SYS\enuRepositorio();
        $mineiros=$this->em->getRepository('AppBundle:MAC\Mineiro')->findOneBy(array('id'=>$id));
        return $this->construirAmostra($mineiros);
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

        $mineiros=$this->em->getRepository('AppBundle:MAC\Mineiro')->findBy($query);
        return $mineiros;
    }

    public function construirAmostra(Mineiro $mineiros){
        $categoria=new CategoriaRepositorio($this->em);
        $composicaoquimico=new ComposicaoQuimicoRepositorio($this->em);
        $cores=new CorMineiroRepositorio($this->em);
        $fl=new SYS\gerirFicheiros();
        $brilho=new BrilhoRepositorio($this->em);
        $densidade=new DensidadeRepositorio($this->em);
        $clivagem=new ClivagemRepositorio($this->em);
        $fractura=new FracturaRepositorio($this->em);
        $habito=new HabitoRepositorio($this->em);
        $genese=new GeneseRepositorio($this->em);
        $paragenese=new GeneseRepositorio($this->em);
        $trasnparencia=new TransparenciaRepositorio($this->em);

        $mineiros->setCores($cores->mostrarCorMineiro($mineiros->getId()));
        $mineiros->setComposicaoquimico($composicaoquimico->mostrarComposicaoquimico($mineiros->getId()));
        $mineiros->setIdcategoria($categoria->mostrarUm($mineiros->getIdcategoria()));
        $mineiros->setAnexos($fl->gerar($mineiros->getNome(),'mineiro'));
        $mineiros->setBrilhos($brilho->mostrarMineiros($mineiros->getId()));
        $mineiros->setIddensidade($densidade->mostrarUm($mineiros->getIddensidade()));
        $mineiros->setClivagem($clivagem->mostrarMineiros($mineiros->getId()));
        $mineiros->setFractura($fractura->mostrarMineiros($mineiros->getId()));
        $mineiros->setHabito($habito->mostrarMineiros($mineiros->getId()));
        $mineiros->setGenese($genese->mostrarMineiros($mineiros->getId()));
        $mineiros->setParagenese($paragenese->mostrarMineiros($mineiros->getId()));
        $mineiros->setTransparencia($trasnparencia->mostrarMineiros($mineiros->getId()));
        $mineiros->setData(date('d/m/Y, h:i'),$mineiros->getData());
        //$mineiros->setConservacao($concervacao->mostrarUm($qba['concervacao']));
        return $mineiros;
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