<?php

namespace AppBundle\Controller\MUS;

use AppBundle\Domain\MAC\ComposicaoQuimicoRepositorio;
use AppBundle\Domain\MUS\ContactosRepositorio;
use AppBundle\Domain\MUS\EspecialidadeRepositorio;
use AppBundle\Domain\MUS\PasswordManagerRepositorio;
use AppBundle\Domain\MUS\TipocontactoRepositorio;
use AppBundle\Domain\MUS\UsuarioRepositorio;
use AppBundle\Domain\MUS\UtilizadorRepositorio;
use AppBundle\Domain\MVS\VisitaRepositorio;
use AppBundle\Domain\SYS\enuRepositorio;
use AppBundle\Domain\SYS\McaRepositorio;
use AppBundle\Domain\SYS\MunicipioRepositorio;
use AppBundle\Entity\MUS\Contactos;
use AppBundle\Entity\MUS\PasswordManager;
use AppBundle\Entity\MUS\Pessoa;
use AppBundle\Domain\MUS\PessoaRepositorio;
use AppBundle\Entity\MUS\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\VarDumper\Cloner\Data;

/**
 * Pessoa controller.
 *
 * @Route("membros")
 */
class MembrosController extends Controller
{
    /**
     * Lists all pessoa entities.
     *
     * @Route("/", name="membro_index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $rl = new McaRepositorio($em);
        $rl = $rl->loadRoles($user);
        $pessoas = new PessoaRepositorio($em);
        $pessoas = $pessoas->mostrarTodos();
        //encriptID

        $deleteForm = '';//$this->createDeleteForm($usuarios);
        return $this->render('MUS/index.html.twig', [
            'pagina' => 'MUS/membros_list.html.twig',
            'dados' => $pessoas,
            'user' => $user

        ]);

    }

    /**
     * Creates a new pessoa entity.
     *
     * @Route("/novo", name="membro_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $res = array();
        $res['status'] = 0;

        $id = $request->get('data');
        $utilisador = new Usuario();
        $en = new enuRepositorio();
        $tr = new TipocontactoRepositorio($em);
        $es = new EspecialidadeRepositorio($em);
        $morada = new MunicipioRepositorio($em);
        $pessoas = new PessoaRepositorio($em);

        $contactosR = new ContactosRepositorio($em);
        $tipoContactR = new TipocontactoRepositorio($em);
        $passwordM = new PasswordManagerRepositorio($em);

        if ($request->getMethod() == 'POST') {
            $res['status'] = 2;
            $pessoa = new Pessoa();
            $pessoa->setNome($request->get('nomecompleto'));
            $pessoa->setTipo($request->get('tipo'));
            $pessoa->setGenero($request->get('genero'));
            $pessoa->setNivelacademico($request->get('nivelacademico'));
            $pessoa->setIdespecialidade($request->get('especialidade'));
            $date = \DateTime::createFromFormat('d/m/Y', $request->get('datadenascimento'));
            if ($date == true)
                $pessoa->setDatanascimento($date);


            $pessoa->setNaturalidade($request->get('naturalidade'));
            $pessoa->setMorada($request->get('morada'));

            $pessoas->criarUm($pessoa);
            /*$contactos = new Contactos();
            $contactos->setIdtipocontacto($tipoContactR->mostrarUm(4));
            $contactos->setIdpessoa($pessoa);
            $contactos->setDescricao($request->get('email'));
            $contactosR->criarUm($contactos);*/
            for ($i = 0; $i < sizeof($request->get('contacto')); $i++) {
                if ($request->get('contacto')[$i] != '') {
                    $contactos = new Contactos();
                    $contactos->setIdtipocontacto($tipoContactR->mostrarUm($request->get('tipocontacto')[$i]));
                    $contactos->setDescricao($request->get('contacto')[$i]);
                    $contactos->setIdpessoa($pessoa);
                    $contactosR->criarUm($contactos);
                }
            }

            $utilisador->setUsername($request->get('username'));
            //$utilisador->setPassword($request->get('password'));
            $enco = $this->container->get('security.password_encoder');
            $encoder = $enco->encodePassword($utilisador, '123456');

            $utilisador->setPassword($encoder);
            $utilisador->setIsactive(true);
            $utilisador->setTipo($request->get('tipo'));
            $utilisador->setId($pessoa->getId());
            $utilisador->setRoles('ROLE_USER');
            $utilisadoR = new UtilizadorRepositorio($em);
            $utilisadoR->criarUm($utilisador);

            $passwordM->criarUm($utilisador);
            $res['status'] = 1;
        }
        $template = $this->render('MUS/api/membro_form.html.twig', array(
            'tipoContacto' => $tr->mostrarTodos(),
            'tipos' => $en->tipoPessoa('x'),
            'especialidades' => $es->mostrarTodos(),
            'nivelacademico' => $en->nivelacademico('x'),
            'morada' => $morada->mostrarTodos()
        ));

        $res['message'] = $template->getContent();
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));
    }

    /**
     * Displays a form to edit an existing pessoa entity.
     *
     * @Route("/editar/{id}", name="membro_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $res = array();
        $res['status'] = 0;

        $id = $request->get('data');
        $utilisador = new Usuario();
        $en = new enuRepositorio();
        $tr = new TipocontactoRepositorio($em);
        $es = new EspecialidadeRepositorio($em);
        $morada = new MunicipioRepositorio($em);
        $pessoas = new PessoaRepositorio($em);

        $contactosR = new ContactosRepositorio($em);
        $tipoContactR = new TipocontactoRepositorio($em);
        $passwordM = new PasswordManagerRepositorio($em);

        if ($request->getMethod() == 'POST') {
            $res['status'] = 2;
            $pessoa = new Pessoa();
            $pessoa->setNome($request->get('nomecompleto'));
            $pessoa->setTipo($request->get('tipo'));
            $pessoa->setGenero($request->get('genero'));
            $pessoa->setNivelacademico($request->get('nivelacademico'));
            $pessoa->setIdespecialidade($request->get('especialidade'));
            $date = \DateTime::createFromFormat('d/m/Y', $request->get('datadenascimento'));
            if ($date == true)
                $pessoa->setDatanascimento($date);


            $pessoa->setNaturalidade($request->get('naturalidade'));
            $pessoa->setMorada($request->get('morada'));

            $pessoas->criarUm($pessoa);
            /*$contactos = new Contactos();
            $contactos->setIdtipocontacto($tipoContactR->mostrarUm(4));
            $contactos->setIdpessoa($pessoa);
            $contactos->setDescricao($request->get('email'));
            $contactosR->criarUm($contactos);*/
            for ($i = 0; $i < sizeof($request->get('contacto')); $i++) {
                if ($request->get('contacto')[$i] != '') {
                    $contactos = new Contactos();
                    $contactos->setIdtipocontacto($tipoContactR->mostrarUm($request->get('tipocontacto')[$i]));
                    $contactos->setDescricao($request->get('contacto')[$i]);
                    $contactos->setIdpessoa($pessoa);
                    $contactosR->criarUm($contactos);
                }
            }

            $utilisador->setUsername($request->get('username'));
            //$utilisador->setPassword($request->get('password'));
            $enco = $this->container->get('security.password_encoder');
            $encoder = $enco->encodePassword($utilisador, '123456');

            $utilisador->setPassword($encoder);
            $utilisador->setIsactive(true);
            $utilisador->setTipo($request->get('tipo'));
            $utilisador->setId($pessoa->getId());
            $utilisador->setRoles('ROLE_USER');
            $utilisadoR = new UtilizadorRepositorio($em);
            $utilisadoR->criarUm($utilisador);

            $passwordM->criarUm($utilisador);
            $res['status'] = 1;
        }
        $template = $this->render('MUS/api/membro_form_edit.html.twig', array(
            'tipoContacto' => $tr->mostrarTodos(),
            'tipos' => $en->tipoPessoa('x'),
            'especialidades' => $es->mostrarTodos(),
            'nivelacademico' => $en->nivelacademico('x'),
            'morada' => $morada->mostrarTodos()
        ));

        $res = array();
        $res['status'] = 0;
        $res['message'] = $template->getContent();
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));
    }

    /**
     * Finds and displays a pessoa entity.
     *
     * @Route("/{id}", name="pessoa_show")
     * @Method("GET")
     */
    public function showAction($id, Request $request)
    {
        $id = base64_decode($id);

        $Url = new \AppBundle\Application\SYS\Url();
        $em = $this->getDoctrine()->getManager();
        $en=new enuRepositorio();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $rl = new McaRepositorio($em);
        $rl = $rl->loadRoles($user);

        $pessoas = new PessoaRepositorio($em);
        $membro = $pessoas->mostrarUm($id);
        $visitas=new VisitaRepositorio($em);
        if($membro->getTipo()==$en->tipoPessoa(3))
            $visitas = $visitas->mostrarPessoa($id);
        else
            $visitas = null;
        return $this->render('MUS/index.html.twig', [
            'pagina' => 'MUS/membro_view.html.twig',
            'api' => 'MUS/api/membro_actividade_ver.html.twig',
            'membro' => $membro,
            'url' => $Url,
            'user' => $user,
            'visitas'=>$visitas
        ]);
    }

    /**
     * Finds and displays a pessoa entity.
     *
     * @Route("/api/{tipo}/{id}", name="membro_show_api")
     * @Method({"GET", "POST"})
     */
    public function membroApi($id, $tipo)
    {
        $id = base64_decode($id);
        $Url = new \AppBundle\Application\SYS\Url();
        $em = $this->getDoctrine()->getManager();
        $pessoas = new PessoaRepositorio($em);
        $membro = $pessoas->mostrarUm($id);
        $utilisador = new Usuario();
        $utilisador->setId($id);
        $uR = new UtilizadorRepositorio($em);
        $utilisador = $uR->mostrarUm($utilisador, true);
        $rl = new McaRepositorio($em);
        $utilisador->setR($rl->loadComomRoles($utilisador));

        $template = $this->render('MUS/api/membro_' . $tipo . '_ver.html.twig', array(
            'membro' => $membro,
            'utilisador' => $utilisador
        ));

        $res = array();
        $res['status'] = 0;
        $res['message'] = ($tipo == NULL) ? "SEM RESULTADO" : $template->getContent();
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));
    }


    /**
     * Deletes a visitum entity.
     *
     * @Route("/delete", name="membro_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request)
    {
        $res = array();
        $res['status'] = 0;

        $em = $this->getDoctrine()->getManager();
        $id=base64_decode($request->get('data'));
        $pessoaR = new PessoaRepositorio($em);
        $pessoa = $pessoaR->mostrarUm($id, false);
        $pessoa->setExLogica(1);
        if($pessoaR->actualizarUm($pessoa));
            $res['status'] = 1;

        $res['message'] = null;
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));

    }


    /**
     * Creates a form to delete a pessoa entity.
     *
     * @param Pessoa $pessoa The pessoa entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pessoa $pessoa)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pessoa_delete', array('id' => $pessoa->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * Displays a form to edit an existing pessoa entity.
     *
     * @Route("/resetpassword/{id}", name="reset_password")
     * @Method({"GET", "POST"})
     */
    public function resetpassword($id)
    {
        $em = $this->getDoctrine()->getManager();
        $pr = new PasswordManagerRepositorio($em);
        $us = new UtilizadorRepositorio($em);
        $id = $us->mostrarUm($id);
        $pr = $pr->criarUm($id);

        $res = array();
        $res['status'] = 0;
        $res['message'] = 'null';
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));
    }
}
