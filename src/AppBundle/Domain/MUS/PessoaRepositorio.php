<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 02-11-2016
 * Time: 8:32
 */

namespace AppBundle\Domain\MUS;


use AppBundle\Entity\MUS\Pessoa;
use AppBundle\Entity\SYS\Municipio;
use AppBundle\Domain\SYS\MunicipioRepositorio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\MUS\Curso;
use Doctrine\ORM\EntityManager;
use AppBundle\Domain\SYS;
use AppBundle\Domain\SYS\security;

class PessoaRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function mostrarTodos()
    {

        $pessoas = $this->em->getRepository('AppBundle:MUS\Pessoa')->findBy(['exLogica'=>null]);

        foreach ($pessoas as $sec)
            $sec=$this->construir($sec);

        return $pessoas;
    }

    public function _mostrarTodos():array
    {


        $em = new PessoaRepositorio($this->em);
        $pessoas = $this
            ->em
            ->getRepository('AppBundle:MUS\Pessoa')
            ->findAll([],['nome']);
        for ($i = 0; $i < sizeof($pessoas); $i++)
            $pessoas[$i] = $em->mostrarUm($pessoas[$i]);

        return (array)$pessoas;
    }

    public function mostrarUm($pessoa,$full=true):Pessoa
    {
        $pessoa = $this->em->getRepository('AppBundle:MUS\Pessoa')->findOneBy(['id' => $pessoa]);
        if (!is_null($pessoa) and $full)
            $pessoa = $this->construir($pessoa);
        return $pessoa;
    }

    protected function construir(Pessoa $pessoa):Pessoa
    {

        $en = new SYS\enuRepositorio();
        $cr = new EspecialidadeRepositorio($this->em);
        $mr = new MunicipioRepositorio($this->em);
        $ct = new ContactosRepositorio($this->em);
        $ec = new security\encry();
        $pessoa->setId($ec->close($pessoa->getId()));
        $pessoa->setIdmunicipio($mr->mostrarUm($pessoa->getIdmunicipio()));
        $pessoa->setIdespecialidade($cr->mostrarUm($pessoa->getIdespecialidade()));
        $pessoa->setNaturalidade($mr->mostrarUm($pessoa->getNaturalidade()));
        $pessoa->setMorada($mr->mostrarUm($pessoa->getMorada()));
        $pessoa->setNivelacademico($en->nivelacademico($pessoa->getNivelacademico()));
        if (!is_null($pessoa->getDatanascimento()))
            $pessoa->setDatanascimento(date('d/m/Y', $pessoa->getDatanascimento()->getTimestamp()));
        $pessoa->setContactos($ct->mostrarPessoa($pessoa->getId()));
        $pessoa->setEstado($en->estado($pessoa->getEstado()));
        $pessoa->setGenero($en->genero($pessoa->getGenero()));
        $pessoa->setTipo($en->tipoPessoa($pessoa->getTipo()));


        return $pessoa;
    }

    public function mostrarPessoa($pessoa)
    {
        $pessoa = $this->em->getRepository('AppBundle:MUS\Pessoa')->findOneBy(['id' => $pessoa]);
        return $pessoa;
    }

    public function cusquery($nome = null, $tipo=null)
    {
        $this->em->clear();
        $query = array();
        if ($nome != null) {
            $query['nome'] = $nome;
        }
        if ($tipo != null) {
            $query['tipo'] = $tipo;
        }
        $pessoa = $this->em->getRepository('AppBundle:MUS\Pessoa')->findBy($query);

        return $pessoa;
    }

    public function criarUm($pessoa)
    {
        $this->em->persist($pessoa);
        $this->em->flush();
        return true;
    }

    public function actualizarUm(Pessoa $pessoa)
    {

        /*$pessoas = $this->em->getRepository('AppBundle:MUS\Pessoa')->findOneBy(array('id' => $pessoa->getId()));

        $pessoas->setNome($pessoa->getNome());
        $pessoas->setTipo($pessoa->getTipo());
        $pessoas->setGenero($pessoa->getGenero());
        $pessoas->setNivelacademico($pessoa->getNivelacademico());
        $pessoas->setIdespecialidade($pessoa->getIdespecialidade());
        $pessoas->setDatanascimento($pessoa->getDatanascimento());
        $pessoas->setNaturalidade($pessoa->getNaturalidade());
        $pessoas->setMorada($pessoa->getMorada());
        */
        $this->em->flush();
        return true;
    }

    public function eliminarUm($pessoa)
    {
        $this->em->remove($pessoa);
        $this->em->flush();
        return true;
    }

}