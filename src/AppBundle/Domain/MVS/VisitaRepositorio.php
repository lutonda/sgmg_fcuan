<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MVS;

use AppBundle\Domain\MUS\PessoaRepositorio;
use AppBundle\Entity\MVS\Visita;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS\enuRepositorio;
use Symfony\Component\Security\Core\User\UserInterface;

class VisitaRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }


    public function mostrarTodos()
    {

        $visitas = $this->em->getRepository('AppBundle:MVS\Visita')->findBy(['exLogica'=>null]);

        foreach ($visitas as $sec)
            $sec=$this->construir($sec);

        return $visitas;
    }
    public function _mostrarTodos()
    {
        $visita = $this
            ->em
            ->getRepository('AppBundle:MVS\Visita')
            ->findBy([],['data'=>'ASC']);
        foreach ($visita as $sec)
            $sec=$this->construir($sec);

        return $visita;
    }

    private function construir(Visita $visita):Visita{
        $en=new enuRepositorio();
        $pessoaR=new PessoaRepositorio($this->em);

        $visita->setEstado($en->estado($visita->getEstado()));
        $visita->setIdparticipante($pessoaR->mostrarUm($visita->getIdparticipante()));
        if($visita->getGuia()!=null)
            $visita->setGuia($pessoaR->mostrarUm($visita->getGuia()));
        if($visita->getData() != null)
            $visita->setData(date('d/m/Y h:i',$visita->getData()->getTimestamp()));
        if($visita->getDataVisita() != null)
            $visita->setDataVisita(date('d/m/Y h:i',$visita->getDataVisita()->getTimestamp()));

        $visita->setTipo($en->tipoVisita($visita->getTipo()));
        $visita->setArea($this->mostrarArea($visita->getId()));
        return $visita;
    }

    public function mostrarUm($visita, $full=true):Visita
    {
        $visita=$this->em->getRepository('AppBundle:MVS\Visita')->findOneBy(array('id' => $visita));

        if($full)
            return $this->construir($visita);

        return $visita;
    }

    public function mostrarArea($visita){

        return $this->em->getRepository('AppBundle:MVS\AreaVisita')->findBy(['visita'=>$visita]);

    }

    public function mostrarPessoa($pessoa)
    {
        $visitas=$this->em->getRepository('AppBundle:MVS\Visita')->findBy(['idparticipante' => $pessoa]);
       /* foreach ($visitas as $visita)
            $visita=$this->construir($visita);*/
        return $visitas;
    }

    public function mostrarAmbienteRocha($rocha)
    {
        $qb = $this->em->getRepository('AppBundle:MAC\Ambientesedimentarrocha')->findBy(array('idrocha' => $rocha));
        $rocha = null;

        foreach ($qb as $roch) {
            $qrocha=$roch->getIdambientesedimentar();
            if(!is_null($qrocha))
                $rocha[] = $this->mostrarUm($qrocha->getId());
        }
        return $rocha;
    }

    public function criarUm($visita)
    {

        $this->em->persist($visita);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($visita)
    {
       /* $sec = new SeccaoRepositorio($this->em);
        $cat = $this->em->getRepository('AppBundle:MVS\Visita')->findOneBy(array('id' => $visita->getId()));
        $cat->setNome($visita->getNome());
        $cat->setEstado($visita->getEstado());
        $cat->setDescricao($visita->getDescricao());*/
        $this->em->flush();
        return true;
    }

    public function eliminarUm($visita)
    {
        $this->em->remove($visita);
        $this->em->flush();
        return true;
    }

    /**
     * Loads the user for the given username.
     *
     * This method must return null if the user is not found.
     *
     * @param string $username The username
     *
     * @return UserInterface|null
     */
    public function loadUserByUsername($username)
    {
        // TODO: Implement loadUserByUsername() method.
    }
}