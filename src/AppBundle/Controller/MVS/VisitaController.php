<?php

namespace AppBundle\Controller\MVS;

use AppBundle\Application\SYS\Url;
use AppBundle\Domain\MAC\CategoriaRepositorio;
use AppBundle\Domain\MUS\ContactosRepositorio;
use AppBundle\Domain\MUS\PessoaRepositorio;
use AppBundle\Domain\MVS\VisitaRepositorio;
use AppBundle\Domain\SYS\McaRepositorio;
use AppBundle\Entity\MAC\Categoria;
use AppBundle\Entity\MUS\Pessoa;
use AppBundle\Entity\MVS\AreaVisita;
use AppBundle\Entity\MVS\Visita;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Visitum controller.
 *
 * @Route("visita")
 */
class VisitaController extends Controller
{
    /**
     * Lists all visitum entities.
     *
     * @Route("/", name="visita_view")
     * @Method("GET")
     */
    public function indexAction()
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $rl = new McaRepositorio($em);
        $rl = $rl->loadRoles($user);
        $visitaR=new VisitaRepositorio($em);
        $visitas=$visitaR->mostrarTodos();


        return $this->render('MVS/index.html.twig', [
            'pagina' => 'MVS/visita_list.html.twig',
            'dados' => $visitas,
            'user' => $user
        ]);
    }

    /**
     * Creates a new visitum entity.
     *
     * @Route("/novo", name="visita_new")
     * @Method({"GET", "POST"})
     */
    public function novaVisita(Request $request)
    {
       // $id = base64_decode($id);
        $em = $this->getDoctrine()->getManager();

        $res = array();
        $res['status'] = 0;

        $Url = new Url();
        $contactos=new ContactosRepositorio($em);
        $pessoaR=new PessoaRepositorio($em);
        $contactosR=new ContactosRepositorio($em);
        $pessoas=$pessoaR->cusquery(null,3);
        $categorias=new CategoriaRepositorio($em);
        $categorias=$categorias->mostrarPadrao();

        foreach ($pessoas as $pss)
            $pss->setContactos($contactosR->mostrarPadrao($pss->getId()));

        if($request->getMethod('POST')  and null!==$request->get('duracao'))
        {
            $visitaR=new VisitaRepositorio($em);
            $visita=new Visita();
            $pessoa=$pessoaR->mostrarPessoa($contactosR->mostrarContacto(explode(' - ',$request->get('nomecompleto')[0])[1])->getIdpessoa());

            $visita->setDuracao($request->get('duracao'));
            $visita->setDescricao($request->get('descricao'));
            $visita->setTipo($request->get('tipo'));
            $visita->setEstado(0);

            $date = \DateTime::createFromFormat('d/m/Y h:i', $request->get('data').' '.$request->get('hora'));
            //if ($date == true)
                $visita->setDataVisita($date);
            $visita->setIdparticipante($pessoa);
            $visitaR->criarUm($visita);
            $categorias=new CategoriaRepositorio($em);
            if($request->get('categoria')!==null){
            foreach ($request->get('categoria') as $categoria){
                $area = new AreaVisita();
                $area->setArea($categorias->cusquery(explode(' - ',$categoria)[0],null)[0]);
                $area->setVisita($visita);
                $visitaR->criarUm($area);
            }
            }
            $res['status'] = 1;

        }
        $tipo=0;
        $template = $this->render('MVS/visita_form.html.twig',array(
            'pessoas'=>$pessoas,
            'categorias'=>$categorias
        ));

        $res['message'] = ($tipo === NULL) ? "SEM RESULTADO" : $template->getContent();
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));
    }


    /**
     * Creates a new visitum entity.
     *
     * @Route("/ativar", name="visita_able")
     * @Method({"GET", "POST"})
     */
    public function activar(Request $request){
        $em = $this->getDoctrine()->getManager();
        $emi=$this->getDoctrine()->getManager();
        $res = array();
        $res['status'] = false;
        if($request->getMethod('POST')  and null!==$request->get('guia'))
        {
            $request->get('visita');

            $contactos=new ContactosRepositorio($em);
            $visitaR=new VisitaRepositorio($em);
            $visita=$visitaR->mostrarUm($request->get('data'),false);

            if($request->get('guia')!='x'){
                $contactos=$contactos->mostrarContacto(explode(' - ',$request->get('guia')[0])[1]);
                $pessoa=new PessoaRepositorio($em);
                $pessoa=$pessoa->mostrarUm($contactos->getIdpessoa(),false);
                $visita->setGuia($pessoa);
            }

            if($request->get('check')=='check')
                $visita->setEstado(1);
            else
                $visita->setEstado(4);

            if($visitaR->actualizarUm($visita))
                $res['status'] = true;
        }

        $res['message'] = null;
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));

    }
    /**
     * Finds and displays a visitum entity.
     *
     * @Route("/{id}", name="visita_show")
     * @Method("GET")
     */
    public function showAction($id)
    {

        //$id = base64_decode($id);

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $rl = new McaRepositorio($em);
        $rl = $rl->loadRoles($user);
        $contactos=new ContactosRepositorio($em);
        $visitaR=new VisitaRepositorio($em);
        $visita=$visitaR->mostrarUm($id);
        $pessoas=new PessoaRepositorio($em);
        $pessoas=$pessoas->cusquery(null,2);

        foreach ($pessoas as $pss)
            $pss->setContactos($contactos->mostrarPadrao($pss->getId()));

        return $this->render('MVS/index.html.twig', [
            'pagina' => 'MVS/visita_view.html.twig',
            'dados' => $visita,
            'pessoas'=>$pessoas,
            'user' => $user
        ]);
    }

    /**
     * Displays a form to edit an existing visitum entity.
     *
     * @Route("/{id}/edit", name="visita_edit")
     * @Method({"GET", "POST"})
     */
    public function editarVisita(Request $request)
    {
        // $id = base64_decode($id);
        $em = $this->getDoctrine()->getManager();

        $res = array();
        $res['status'] = 0;

        $Url = new Url();
        $contactos=new ContactosRepositorio($em);
        $pessoaR=new PessoaRepositorio($em);
        $contactosR=new ContactosRepositorio($em);
        $pessoas=$pessoaR->cusquery(null,3);
        $categorias=new CategoriaRepositorio($em);
        $categorias=$categorias->mostrarPadrao();

        foreach ($pessoas as $pss)
            $pss->setContactos($contactosR->mostrarPadrao($pss->getId()));

        if($request->getMethod('POST')  and null!==$request->get('duracao'))
        {
            $visitaR=new VisitaRepositorio($em);
            $visita=new Visita();
            $pessoa=$pessoaR->mostrarPessoa($contactosR->mostrarContacto(explode(' - ',$request->get('nomecompleto')[0])[1])->getIdpessoa());
            $visita->setDuracao($request->get('duracao'));
            $visita->setDescricao($request->get('descricao'));
            $date = \DateTime::createFromFormat('d/m/Y h:i', $request->get('data').' '.$request->get('hora'));
            if ($date == true)
                $visita->setDataVisita($date);
            $visita->setIdparticipante($pessoa);
            $visitaR->criarUm($visita);
            $categorias=new CategoriaRepositorio($em);

            foreach ($request->get('categoria') as $categoria){
                $area = new AreaVisita();
                $area->setArea($categorias->cusquery(explode(' - ',$categoria)[0],null)[0]);
                $area->setVisita($visita);
                $visitaR->criarUm($area);
            }

            $res['status'] = 1;

        }
        $tipo=0;
        $template = $this->render('MVS/visita_form.html.twig',array(
            'pessoas'=>$pessoas,
            'categorias'=>$categorias
        ));

        $res['message'] = ($tipo === NULL) ? "SEM RESULTADO" : $template->getContent();
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));
    }

    /**
     * Deletes a visitum entity.
     *
     * @Route("/delete", name="visita_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request)
    {
        $res = array();
        $res['status'] = 0;

        $em = $this->getDoctrine()->getManager();

        $visitaR = new VisitaRepositorio($em);
        $visita = $visitaR->mostrarUm($request->get('data'), false);
        $visita->setExLogica(1);
        if($visitaR->actualizarUm($visita));
            $res['status'] = 1;



        $res['message'] = null;
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));

    }

    /**
     * Creates a form to delete a visitum entity.
     *
     * @param Visita $visitum The visitum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Visita $visitum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visita_delete', array('id' => $visitum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
