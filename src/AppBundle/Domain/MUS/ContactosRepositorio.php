<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 04-11-2016
 * Time: 23:13
 */

namespace AppBundle\Domain\MUS;

use AppBundle\Entity\MUS\Contactos;
use AppBundle\Entity\MUS\Pessoa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class ContactosRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {
        //$em = new ContactosRepositorio($this->em);
        $contactos = $this
            ->em
            ->getRepository('AppBundle:MUS\Contactos')
            ->findAll();
        for ($i = 0; $i < sizeof($contactos); $i++)
            $contactos[$i] = $this->mostrarUm($contactos[$i]);

        return $contactos;
    }

    public function mostrarPessoa($pessoa)
    {
        $contactos = $this->em->getRepository('AppBundle:MUS\Contactos')->findBy(['idPessoa' => $pessoa]);
        return $contactos;
    }

    public function mostrarContacto($descricao):Contactos
    {
        return $this->em->getRepository('AppBundle:MUS\Contactos')->findOneBy(array('descricao' => $descricao));
    }

    public function mostrarUm($id)
    {
        return $this->em->getRepository('AppBundle:MUS\Contactos')->findOneBy(array('id' => $id));
    }

    public function mostrarPadrao($pessoa)
    {
        return $this->em->getRepository('AppBundle:MUS\Contactos')->findOneBy(['idPessoa' => $pessoa]);
    }

    public function cusquery($nome = null)
    {
        $query = array();
        if ($nome != null) {
            $query['nome'] = $nome;
        }

        $contactos = $this->em->getRepository('AppBundle:MUS\Contactos')->findBy($query);
        return $contactos;
    }

    public function criarUm($contactos)
    {
        $this->em->persist($contactos);
        $this->em->flush();
        return true;
    }

    public function actualizarUm(Contactos $contacto)
    {

        $cat = $this->em->getRepository('AppBundle:MUS\Contactos')->findOneBy(array('id' => $contacto->getId()));
        $cat->setDescricao($contacto->getDescricao());
        $cat->setIdpessoa($contacto->getIdpessoa());
        $cat->setIdtipocontacto($contacto->getIdtipocontacto());
        $this->em->flush();
        return true;
    }

    public function eliminarUm($contactos)
    {
        $this->em->remove($contactos);
        $this->em->flush();
        return true;
    }

}