<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Domain\MAC\RiscaRepositorio;
use AppBundle\Entity\MAC\Risca;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * risca controller.
 *
 * @Route("risca")
 */
class RiscaController extends Controller
{
    /**
     * Lists all risca entities.
     *
     * @Route("/", name="risca_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $risca = $em->getRepository('AppBundle:risca')->findAll();

        return $this->render('risca/index.html.twig', array(
            'risca' => $risca,
        ));
    }

    /**
     * Creates a new categoria entity.
     *
     * @Route("/new/{data}", name="risca_new")
     * @Method({"GET", "POST"})
     */
    public function newAction($data = null, Request $request)
    {
        $res = array();
        $res['status'] = 0;
        $em = $this->getDoctrine()->getManager();
        $rs = new RiscaRepositorio($em);
        $riscas = $rs->mostrarTodos();

        $risca = new Risca();
        $risca->setId('AI');
        if ($data == "form") {
            if ($request->get('id') =='AI') {
                $risca->setId(null);
                $risca->setNome($request->get('nome'));
                $risca->setDescricao($request->get('descricao'));
                if($rs->criarUm($risca))
                    $res['status']=2;
            } elseif ($data == "form" and $request->get('id') != null) {
                $risca->setId($request->get('id'));
                $risca->setNome($request->get('nome'));
                $risca->setDescricao($request->get('descricao'));
                if($rs->actualizarUm($risca))
                    $res['status']=1;
            }
        } elseif ($data != "0") {
            $risca = $rs->mostrarUm($data);
        }

        $template = $this->render('amostra/api/risca_form.html.twig', array(
            'risca' => $risca,
            'riscas' => $riscas
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
     * @Route("/delete/{data}", name="risca_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($data = null)
    {
        $res = array();
        $res['status'] = 0;

        $em = $this->getDoctrine()->getManager();
        $gn = new riscaRepositorio($em);

        $risca = new risca();
        $risca=$gn->mostrarUm($data);
        if($gn->eliminarUm($risca))
            $res['status'] = 1;

        $res['message'] = null;
        return new Response(json_encode($res));

    }
    /**
     * Finds and displays a risca entity.
     *
     * @Route("/{id}", name="risca_show")
     * @Method("GET")
     */
    public function showAction(risca $risca)
    {
        $deleteForm = $this->createDeleteForm($risca);

        return $this->render('risca/show.html.twig', array(
            'risca' => $risca,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing risca entity.
     *
     * @Route("/{id}/edit", name="risca_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, risca $risca)
    {
        $deleteForm = $this->createDeleteForm($risca);
        $editForm = $this->createForm('AppBundle\Form\riscaType', $risca);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('risca_edit', array('id' => $risca->getId()));
        }

        return $this->render('risca/edit.html.twig', array(
            'risca' => $risca,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a risca entity.
     *
     * @Route("/{id}", name="risca_deletex")
     * @Method("DELETE")
     */
    public function deleteActionx(Request $request, risca $risca)
    {
        $form = $this->createDeleteForm($risca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($risca);
            $em->flush($risca);
        }

        return $this->redirectToRoute('risca_index');
    }

    /**
     * Creates a form to delete a risca entity.
     *
     * @param risca $risca The risca entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(risca $risca)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('risca_delete', array('id' => $risca->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
