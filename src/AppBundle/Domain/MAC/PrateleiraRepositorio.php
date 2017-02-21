<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use Doctrine\ORM\EntityManager;
use AppBundle\Domain\SYS\enuRepositorio;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\User\UserInterface;

class PrateleiraRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {
        $en = new enuRepositorio();
        $prateleira = $this
            ->em
            ->getRepository('AppBundle:MAC\Prateleira')
            ->findBy([], ['nome' => 'ASC']);
        foreach ($prateleira as $p) {
            $p->setAcervos($this->acervosprateleiras($p->getId()));
            $p->setEstado($en->estado($p->getEstado()));
        }
        return $prateleira;
    }


    public function mostrarUm($prateleira)
    {
        return $this->em->getRepository('AppBundle:MAC\Prateleira')->findOneBy(array('id' => $prateleira));
    }

    public function acervosprateleiras($prateleira)
    {
        $array = new AmostraRepositorio($this->em);
        return $array->cusquery($prateleira);

    }

    public function criarUm($prateleira)
    {
        $this->em->persist($prateleira);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($prateleira)
    {
        $sec = new SeccaoRepositorio($this->em);
        $cat = $this->em->getRepository('AppBundle:MAC\Prateleira')->findOneBy(array('id' => $prateleira->getId()));
        $cat->setNome($prateleira->getNome());
        $cat->setEstado($prateleira->getEstado());
        $sercao = $sec->mostrarUm($prateleira->getIdseccao());
        $cat->setIdseccao($sercao);
        $this->em->flush();
        return true;
    }

    public function eliminarUm($prateleira)
    {
        $this->em->remove($prateleira);
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