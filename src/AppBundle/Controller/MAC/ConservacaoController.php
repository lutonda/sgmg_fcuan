<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Conservacao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Conservacao controller.
 *
 * @Route("Conservacao")
 */
class ConservacaoController extends Controller
{
    /**
     * Lists all Conservacao entities.
     *
     * @Route("/", name="Conservacao_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Conservacaos = $em->getRepository('AppBundle:Conservacao')->findAll();

        return $this->render('Conservacao/index.html.twig', array(
            'Conservacaos' => $Conservacaos,
        ));
    }

    /**
     * Creates a new Conservacao entity.
     *
     * @Route("/new", name="Conservacao_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $Conservacao = new Conservacao();
        $form = $this->createForm('AppBundle\Form\ConservacaoType', $Conservacao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Conservacao);
            $em->flush($Conservacao);

            return $this->redirectToRoute('Conservacao_show', array('id' => $Conservacao->getId()));
        }

        return $this->render('Conservacao/new.html.twig', array(
            'Conservacao' => $Conservacao,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Conservacao entity.
     *
     * @Route("/{id}", name="Conservacao_show")
     * @Method("GET")
     */
    public function showAction(Conservacao $Conservacao)
    {
        $deleteForm = $this->createDeleteForm($Conservacao);

        return $this->render('Conservacao/show.html.twig', array(
            'Conservacao' => $Conservacao,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Conservacao entity.
     *
     * @Route("/{id}/edit", name="Conservacao_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Conservacao $Conservacao)
    {
        $deleteForm = $this->createDeleteForm($Conservacao);
        $editForm = $this->createForm('AppBundle\Form\ConservacaoType', $Conservacao);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('Conservacao_edit', array('id' => $Conservacao->getId()));
        }

        return $this->render('Conservacao/edit.html.twig', array(
            'Conservacao' => $Conservacao,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Conservacao entity.
     *
     * @Route("/{id}", name="Conservacao_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Conservacao $Conservacao)
    {
        $form = $this->createDeleteForm($Conservacao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($Conservacao);
            $em->flush($Conservacao);
        }

        return $this->redirectToRoute('Conservacao_index');
    }

    /**
     * Creates a form to delete a Conservacao entity.
     *
     * @param Conservacao $Conservacao The Conservacao entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Conservacao $Conservacao)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Conservacao_delete', array('id' => $Conservacao->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
