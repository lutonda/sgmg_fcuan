<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 25-01-2017
 * Time: 6:34
 */

namespace AppBundle\Domain\SYS;

use AppBundle\Domain\MUS\UtilizadorRepositorio;
use AppBundle\Entity\MUS\Usuario;
use AppBundle\Entity\SYS\Mca;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;


class McaRepositorio
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function hasRole($role, $u)
    {
        if (in_array($role, $this->loadRoles($u)->getRole()))
            return true;
        return false;
    }

    public function loadRoles(Usuario $user): Usuario
    {
        $en = new enuRepositorio();

        $qb = $this->em->createQueryBuilder();
        $qb = $qb->select('c', 'p')
            ->from('AppBundle:SYS\Mca', 'm')
            ->select('m.objecto')
            ->where('m.' . strtolower($en->tipoPessoa($user->getTipo())) . '=1')
            ->getQuery();


        return $this->getPermissionsForUser($user, $qb->getResult());
    }

    public function loadComomRoles(Usuario $user)
    {
        $en = new enuRepositorio();

        $qb = $this->em->createQueryBuilder();
        $qb = $qb->select('c', 'p')
            ->from('AppBundle:SYS\Mca', 'm')
            ->select('m.objecto', 'm.descricao')
            ->where('m.' . strtolower($en->tipoPessoa($user->getTipo())) . '=1')
            ->getQuery();


        return $qb->getResult();
    }

    public function loadFullRoles()
    {
        $en = new enuRepositorio();

        $roles = $this->em->getRepository('AppBundle:SYS\Mca')->findAll();
        return $roles;
    }

    private function getPermissionsForUser(Usuario $user, $permissions)
    {

        try {
            $q = new UtilizadorRepositorio($this->em);
            if ($permissions !== null) {
                foreach ($permissions as $permission) {
                    $name = strtoupper(str_replace(" ", "_", $permission['objecto']));

                    $role = "ROLE_%s";
                    $user->addRole(sprintf($role, $name, 'VIEW'));
                }
            }

        } catch
        (NoResultException $e) {
            throw new UsernameNotFoundException(sprintf('Unable to find an active admin Entity:User object identified by "%s".', $user), null, 0, $e);
        }
        $user->setRoles($user->getR());
        return $user;
    }

    public function checkaccess()
    {
        return;
    }


    public function criarUm(Mca $Role)
    {
        $this->em->persist($Role);
        $this->em->flush();
        return true;
    }

    public function actualizarUm(Mca $Role)
    {

        $this->em->clear();
        $Roles = $this->em->getRepository('AppBundle:SYS\Mca')->findOneBy(array('id' => $Role->getId()));

        $Roles->setVisitante($Role->getVisitante());
        $Roles->setGestor($Role->getGestor());
        $Roles->setFuncionario($Role->getFuncionario());
        $Roles->setAnonimo($Role->getAnonimo());

        $this->em->flush();

        return true;
    }

    public function eliminarUm($prateleira)
    {
        $this->em->remove($prateleira);
        $this->em->flush();
        return true;
    }

}