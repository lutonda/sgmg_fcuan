<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Domain\MAC\BrilhoRepositorio;
use AppBundle\Entity\MAC\Brilho;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * brilho controller.
 *
 * @Route("brilho")
 */
class BrilhoController extends Controller
{
    /**
     * Lists all brilho entities.
     *
     * @Route("/", name="brilho_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $brilhos = $em->getRepository('AppBundle:brilho')->findAll();

        return $this->render('brilho/index.html.twig', array(
            'brilhos' => $brilhos,
        ));
    }


    /**
     * Creates a new categoria entity.
     *
     * @Route("/new/{data}", name="brilho_new")
     * @Method({"GET", "POST"})
     */
    public function newAction($data = null, Request $request)
    {
        $res = array();
        $res['status'] = 0;
        $em = $this->getDoctrine()->getManager();
        $cr = new BrilhoRepositorio($em);
        $brilhoes = $cr->mostrarTodos();
        $nome = $request->get('name');

        $brilho = new Brilho();
        $brilho->setId('AI');
        $SS=$request->get('id');
        if ($data == "form") {
            if ($request->get('id') =='AI') {
                $brilho->setId(null);
                $brilho->setNome($request->get('nome'));
                $brilho->setDescricao($request->get('descricao'));
                if($cr->criarUm($brilho))
                    $res['status']=2;
            } elseif ($data == "form" and $request->get('id') != null) {
                $brilho->setId($request->get('id'));
                $brilho->setNome($request->get('nome'));
                $brilho->setDescricao($request->get('descricao'));
                if($cr->actualizarUm($brilho))
                    $res['status']=1;
            }
        } elseif ($data != "0") {
            $brilho = $cr->mostrarUm($data);
        }

        $template = $this->render('amostra/api/brilho_form.html.twig', array(
            'brilho' => $brilho,
            'brilhoes' => $brilhoes
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
     * @Route("/delete/{data}", name="brilho_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($data = null)
    {
        $res = array();
        $res['status'] = 0;

        $em = $this->getDoctrine()->getManager();
        $cr = new BrilhoRepositorio($em);

        $brilho = new Brilho();
        $brilho=$cr->mostrarUm($data);
        if($cr->eliminarUm($brilho))
            $res['status'] = 1;

        $res['message'] = null;
        return new Response(json_encode($res));

    }

    /**
     * Finds and displays a categoria entity.
     *
     * @Route("/vvvv", name="categoria_show")
     * @Method("GET")
     */
    /**
     * Finds and displays a brilho entity.
     *
     * @Route("/{id}", name="brilho_show")
     * @Method("GET")
     */
    public function showAction(brilho $brilho)
    {
        $deleteForm = $this->createDeleteForm($brilho);

        return $this->render('brilho/show.html.twig', array(
            'brilho' => $brilho,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing brilho entity.
     *
     * @Route("/{id}/edit", name="brilho_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, brilho $brilho)
    {
        $deleteForm = $this->createDeleteForm($brilho);
        $editForm = $this->createForm('AppBundle\Form\brilhoType', $brilho);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('brilho_edit', array('id' => $brilho->getId()));
        }

        return $this->render('brilho/edit.html.twig', array(
            'brilho' => $brilho,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a brilho entity.
     *
     * @Route("/{id}", name="brilho_deletex")
     * @Method("DELETE")
     */
    public function deleteActionx(Request $request, brilho $brilho)
    {
        $form = $this->createDeleteForm($brilho);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($brilho);
            $em->flush($brilho);
        }

        return $this->redirectToRoute('brilho_index');
    }

    /**
     * Creates a form to delete a brilho entity.
     *
     * @param brilho $brilho The brilho entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(brilho $brilho)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('brilho_delete', array('id' => $brilho->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
