<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\AppBundle;
use AppBundle\Entity\MAC\Rocha;
use AppBundle\Domain\MUS\ConstactosRepositorio;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;

class RochaRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {

        $rocha = $this
            ->em
            ->getRepository('AppBundle:MAC\Rocha')
            ->findAll();
        for ($i = 0; $i < sizeof($rocha); $i++)
            //$usuario[$i] = $this->mostrarUm($usuario[$i]);
            return $rocha;
    }

    public function mostrarPorCategoria($id)
    {
        $en = new SYS\enuRepositorio();
        $rochas=$this->em->getRepository('AppBundle:MAC\Rocha')->findBy(array('tipo'=>$id));
        foreach ($rochas as $rocha)
            $rocha=$this->construirAmostra($rocha);
        return $rochas;
    }

    public function mostrarUm($id)
    {
        $en = new SYS\enuRepositorio();
        $rochas=$this->em->getRepository('AppBundle:MAC\Rocha')->findOneBy(array('id'=>$id));
        return $this->construirAmostra($rochas);
    }

    public function criarUm($rocha)
    {
        $this->em->persist($rocha);
        $this->em->flush();
        return $rocha;
    }

    public function cusquery($prateleira=null){
        $query=array();
        if($prateleira!=null){
            $query['idprateleira']=$prateleira;
        }

        $rochas=$this->em->getRepository('AppBundle:MAC\Rocha')->findBy($query);
        return $rochas;
    }

    public function construirAmostra(Rocha $rochas){

        switch ($rochas->getTipo()){
            case 13:
                $tipoDataR=new MododejazidaRepositorio($this->em);
                $rochas->setTipodados($tipoDataR->mostrarRocha($rochas));
            break;
            case 14:
                $tipoDataR=new GrauMetamorficoRepositorio($this->em);
                $rochas->setTipodados($tipoDataR->mostrarUm($rochas->getId()));
                break;
            case 15:
                $tipoDataR=new AmbientesedimentarRepositorio($this->em);
                $rochas->setTipodados($tipoDataR->mostrarAmbienteRocha($rochas));
                break;
        }
        $tipo=new CategoriaRepositorio($this->em);
        $rochas->setTipo($tipo->mostrarUm($rochas->getTipo()));

        $rochas->setData(date('d/m/Y, h:i'),strtotime($rochas->getData()));

        $prateleira=new PrateleiraRepositorio($this->em);
        $rochas->setPrateleira($prateleira->mostrarUm($rochas->getPrateleira()->getId()));

        $municipio=new SYS\MunicipioRepositorio($this->em);
        $rochas->setLocal($municipio->mostrarUm($rochas->getLocal()->getId()));

        return $rochas;
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