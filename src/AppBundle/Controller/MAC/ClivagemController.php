<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Domain\MAC\ClivagemRepositorio;
use AppBundle\Entity\MAC\Clivagem;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Clivagem controller.
 *
 * @Route("clivagem")
 */
class ClivagemController extends Controller
{
    /**
     * Lists all clivagem entities.
     *
     * @Route("/", name="clivagem_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clivagems = $em->getRepository('AppBundle:Clivagem')->findAll();

        return $this->render('clivagem/index.html.twig', array(
            'clivagems' => $clivagems,
        ));
    }

    /**
     * Creates a new categoria entity.
     *
     * @Route("/new/{data}", name="clivagem_new")
     * @Method({"GET", "POST"})
     */
    public function newAction($data = null, Request $request)
    {
        $res = array();
        $res['status'] = 0;
        $em = $this->getDoctrine()->getManager();
        $cl = new ClivagemRepositorio($em);
        $clivagems = $cl->mostrarTodos();

        $clivagem = new Clivagem();
        $clivagem->setId('AI');
        if ($data == "form") {
            if ($request->get('id') =='AI') {
                $clivagem->setId(null);
                $clivagem->setTipo($request->get('tipo'));
                $clivagem->setValor($request->get('valor'));
                $clivagem->setDescricao($request->get('descricao'));
                if($cl->criarUm($clivagem))
                    $res['status']=2;
            } elseif ($data == "form" and $request->get('id') != null) {
                $clivagem->setId($request->get('id'));
                $clivagem->setTipo($request->get('tipo'));
                $clivagem->setValor($request->get('valor'));
                $clivagem->setDescricao($request->get('descricao'));
                if($cl->actualizarUm($clivagem))
                    $res['status']=1;
            }
        } elseif ($data != "0") {
            $clivagem = $cl->mostrarUm($data);
        }

        $template = $this->render('amostra/api/clivagem_form.html.twig', array(
            'clivagem' => $clivagem,
            'clivagems' => $clivagems
        ));

        $res['message'] = $template->getContent();
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));

    }


    /**
     * Creates a new categoria entity.
     *
     * @Route("/delete/{data}", name="clivagem_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($data = null)
    {
        $res = array();
        $res['status'] = 0;

        $em = $this->getDoctrine()->getManager();
        $gn = new clivagemRepositorio($em);

        $clivagem = new clivagem();
        $clivagem=$gn->mostrarUm($data);
        if($gn->eliminarUm($clivagem))
            $res['status'] = 1;

        $res['message'] = null;
        return new Response(json_encode($res));

    }


    /**
     * Finds and displays a clivagem entity.
     *
     * @Route("/{id}", name="clivagem_show")
     * @Method("GET")
     */
    public function showAction(Clivagem $clivagem)
    {
        $deleteForm = $this->createDeleteForm($clivagem);

        return $this->render('clivagem/show.html.twig', array(
            'clivagem' => $clivagem,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing clivagem entity.
     *
     * @Route("/{id}/edit", name="clivagem_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Clivagem $clivagem)
    {
        $deleteForm = $this->createDeleteForm($clivagem);
        $editForm = $this->createForm('AppBundle\Form\ClivagemType', $clivagem);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('clivagem_edit', array('id' => $clivagem->getId()));
        }

        return $this->render('clivagem/edit.html.twig', array(
            'clivagem' => $clivagem,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to delete a clivagem entity.
     *
     * @param Clivagem $clivagem The clivagem entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Clivagem $clivagem)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clivagem_delete', array('id' => $clivagem->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
