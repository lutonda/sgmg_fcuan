<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MUS;

use AppBundle\Entity\MUS\Pessoa;
use AppBundle\Entity\MUS\Usuario;
use AppBundle\Entity\SYS\Municipio;
use AppBundle\Domain\SYS\MunicipioRepositorio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\MUS\Curso;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;
use Symfony\Component\Security\Core\User\UserInterface;

class UtilizadorRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos()
    {

        $usuarios = $this->em->getRepository('AppBundle:MUS\Usuario')->findBy(['exLogica'=>null]);

        foreach ($usuarios as $sec)
            $sec=$this->construir($sec);

        return $usuarios;
    }
    public function _mostrarTodos()
    {
        $usuario = $this
            ->em
            ->getRepository('AppBundle:MUS\Usuario')
            ->findAll();
        for ($i = 0; $i < sizeof($usuario); $i++)
            $usuario[$i] = $this->construir($usuario[$i]);
        return $usuario;
    }

    public function mostrarUm(Usuario $utilisador,$full=false)
    {
        $utilizador = $this->em->getRepository('AppBundle:MUS\Usuario')->findOneBy(['id'=>$utilisador->getId()]);
        if(!is_null($utilizador) and $full)
            $this->construir($utilizador);
        return $utilizador;
    }

    public function construir(Usuario $utilizador):Usuario
    {
        $mca=new SYS\McaRepositorio($this->em);
        $en = new SYS\enuRepositorio();
        $utilizador->setTipo($en->tipoPessoa($utilizador->getTipo()));
        $utilizador->setIsactive($en->estado($utilizador->getIsactive()));
        $utilizador->setR($mca->loadComomRoles($utilizador));
        return $utilizador;
    }

    public function criarUm($utilizador)
    {
        $this->em->persist($utilizador);
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