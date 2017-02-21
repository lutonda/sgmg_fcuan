<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MAC;

use AppBundle\Entity\MAC\Seccao;
use AppBundle\Entity\MAC\Cor;
use AppBundle\Entity\MAC\Cormineiro;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS\enuRepositorio;
use Symfony\Component\Security\Core\User\UserInterface;

class SeccaoRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {
        $en=new enuRepositorio();
        $seccao = $this
            ->em
            ->getRepository('AppBundle:MAC\Seccao')
            ->findBy([],['nome'=>'ASC']);
        foreach ($seccao as $sec){
            $sec->setEstado($en->estado($sec->getEstado()));
        }
        return $seccao;
    }

    public function mostrarUm($seccao)
    {
        return $this->em->getRepository('AppBundle:MAC\Seccao')->findOneBy(array('id' => $seccao));

    }

    public function criarUm($seccao)
    {
        $this->em->persist($seccao);
        $this->em->flush();
        return true;
    }

    public function actualizarUm($seccao)
    {
        $sec = new SeccaoRepositorio($this->em);
        $cat = $this->em->getRepository('AppBundle:MAC\Seccao')->findOneBy(array('id' => $seccao->getId()));
        $cat->setNome($seccao->getNome());
        $cat->setEstado($seccao->getEstado());
        $cat->setDescricao($seccao->getDescricao());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($seccao)
    {
        $this->em->remove($seccao);
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