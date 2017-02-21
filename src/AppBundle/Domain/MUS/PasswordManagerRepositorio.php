<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 02-11-2016
 * Time: 13:28
 */

namespace AppBundle\Domain\MUS;

use AppBundle\Entity\MUS\PasswordManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class PasswordManagerRepositorio
{
    protected $em;
    protected $validade;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->validade = \DateTime::createFromFormat('Y-m-d', date('Y-m-d'));
    }

    public function mostrarTodos()
    {
        $passwordM = $this
            ->em
            ->getRepository('AppBundle:MUS\PasswordManager')
            ->findAll();
        return $passwordM;
    }

    public function mostrarUm($id)
    {
        $passwordM = $this->em->getRepository('AppBundle:MUS\PasswordManager')->findOneBy(['id' => $id]);
        return $passwordM;
    }

    public function cusquery($utilizador = null, $url = null)
    {
        $query = array();
        if (!is_null($utilizador))
            $query['idUtilizador'] = $utilizador;

        if (!is_null($url))
            $query['urlValidator'] = $url;


        $passwordM = $this->em->getRepository('AppBundle:MUS\PasswordManager')->findBy($query);
        return $passwordM;
    }

    public function criarUm($id): PasswordManager
    {
        $passwordM = new PasswordManager();
        $passwordM->setUtilizador($id);
        $passwordM->setValidade($this->validade);
        $passwordM->setUrlValidator($this->urlValidator());
        $passwordM->setEstado(0);
        $this->em->persist($passwordM);

        $this->em->flush();
        return $passwordM;
    }

    protected function urlValidator()
    {
        $url = null;
        $array = array
        ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'w', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '@', '£', '$', '§', '%', '&');
        for ($i = 0; $i < 20; $i++)
            $url .= $array[rand(1, sizeof($array)-1)];

        return $url;

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