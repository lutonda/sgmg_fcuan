<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\AppBundle;
use AppBundle\Entity\MAC\Fosseis;
use AppBundle\Domain\MUS\ConstactosRepositorio;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;

class FosseRepositorio extends EntityRepository implements UserLoaderInterface
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
            ->getRepository('AppBundle:MAC\Fosseis')
            ->findAll();
        for ($i = 0; $i < sizeof($amostra); $i++)
            //$usuario[$i] = $this->mostrarUm($usuario[$i]);
        return $amostra;
    }

    public function mostrarPorCategoria($id)
    {
        $en = new SYS\enuRepositorio();
        $amostras=$this->em->getRepository('AppBundle:MAC\Fosseis')->findBy(array('tipo'=>$id));


            return $amostras;
        }

    public function mostrarUm($id)
    {
        $en = new SYS\enuRepositorio();
        $amostras=$this->em->getRepository('AppBundle:MAC\Fosseis')->findOneBy(array('id'=>$id));
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

        $amostras=$this->em->getRepository('AppBundle:MAC\Fosseis')->findBy($query);
        return $amostras;
    }

    public function construirAmostra(Fosseis $amostras){
       // $amostras=new Mineiro();
        $categoria=new CategoriaRepositorio($this->em);
        $amostras->setTipo($categoria->mostrarUm($amostras->getTipo()));

        $municipio=new SYS\MunicipioRepositorio($this->em);
        $amostras->setLocalespecifico($municipio->mostrarUm($amostras->getLocalespecifico()));
        $amostras->setIdlocalcolheita($municipio->mostrarUm($amostras->getIdlocalcolheita()));

        $prateleira=new PrateleiraRepositorio($this->em);
        $amostras->setPrateleira($prateleira->mostrarUm($amostras->getPrateleira()));

        $medida=new MedidaRepositorio($this->em);
        $amostras->setDimensao($medida->mostrarUm($amostras->getDimensao()));

        $amostras->setData(date('d/m/Y, h:i',$amostras->getData()->getTimestamp()));

        return $amostras;
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