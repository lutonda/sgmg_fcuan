<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 01-11-2016
 * Time: 23:59
 */

namespace AppBundle\Domain\SYS;

use AppBundle\Entity\SYS\Municipio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\SYS\Provincia;
use AppBundle\Entity\SYS\Pais;
use Doctrine\ORM\EntityManager;

class MunicipioRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){

        $em = new ProvinciaRepositorio($this->em);
        $municipio = $this
            ->em
            ->getRepository('AppBundle:SYS\Municipio')
            ->findAll([],['nome'=>'ASC']);
        for ($i = 0; $i < sizeof($municipio);$i++) {

            $provincia = $em->mostrarUm($municipio[$i]->getIdprovincia()->getId());
            $municipio[$i]->setIdprovincia($provincia);
        }
        return $municipio;
    }

    public function mostrarUm($municipio)
    {
        $municipio=$this->em->getRepository('AppBundle:SYS\Municipio')->findOneBy(array('id'=>$municipio));
        if(!is_null($municipio)) {
            $provincica = new ProvinciaRepositorio($this->em);
            $municipio->setIdprovincia($provincica->mostrarUm($municipio->getIdprovincia()));
        }
        return $municipio;
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
    public function mostrarUmx($idMunicipio){
        $pr = new ProvinciaRepositorio($this->em);
        $municipio = new Municipio();
        $qb=$this->em->createQueryBuilder();
        $qb=$qb->select('c','p')
            ->from('AppBundle:SYS\Municipio','m')
            ->leftJoin('m.idprovincia','p')
            ->select('m.id', 'm.nome', 'p.id as provincia')
            ->where('m.id='.$idMunicipio);
        if($qb==null)
            return null;
        else
        $qb=$qb->getQuery();

        $qb=$qb->getResult();
        $qb=$qb[0];
        $municipio->setId($qb['id']);
        $municipio->setNome($qb['nome']);
        $municipio->setIdprovincia($pr->mostrarUm($qb['provincia']));

        return $municipio;
    }

}