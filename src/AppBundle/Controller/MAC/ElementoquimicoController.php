<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Domain\MAC\ComposicaoQuimicoRepositorio;
use AppBundle\Entity\Elementoquimico;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Elementoquimico controller.
 *
 * @Route("elementosQuimicos")
 */
class ElementoquimicoController extends Controller
{
    /**
     * Lists all elementoquimico entities.
     *
     * @Route("/", name="elementoquimico_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $elementoquimicos = $em->getRepository('AppBundle:Elementoquimico')->findAll();

        return $this->render('elementoquimico/index.html.twig', array(
            'elementoquimicos' => $elementoquimicos,
        ));
    }

    /**
     * Creates a new elementoquimico entity.
     *
     * @Route("/newx", name="elementoquimico_newx")
     * @Method({"GET", "POST"})
     */
    public function newActionx(Request $request)
    {
        $elementoquimico = new Elementoquimico();
        $form = $this->createForm('AppBundle\Form\ElementoquimicoType', $elementoquimico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($elementoquimico);
            $em->flush($elementoquimico);

            return $this->redirectToRoute('elementoquimico_show', array('id' => $elementoquimico->getId()));
        }

        return $this->render('elementoquimico/new.html.twig', array(
            'elementoquimico' => $elementoquimico,
            'form' => $form->createView(),
        ));
    }



    /**
     * Creates a new categoria entity.
     *
     * @Route("/new/{data}", name="elementosQuimicos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction($data = null, Request $request)
    {
        $res = array();
        $res['status'] = 0;
        $em = $this->getDoctrine()->getManager();
        $cr = new ComposicaoQuimicoRepositorio($em);
        $Elemetos = $cr->mostrarTodos();
        $nome = $request->get('name');

        $Elemeto = new Elementoquimico();
        $Elemeto->setId('AI');
        $SS=$request->get('id');
        if ($data == "form") {
            if ($request->get('id') =='AI') {
                $Elemeto->setId(null);
                $Elemeto->setNome($request->get('nome'));
                $Elemeto->setSimbolo($request->get('simbolo'));
                if($cr->criarUm($Elemeto))
                    $res['status']=2;
            } elseif ($data == "form" and $request->get('id') != null) {
                $Elemeto->setId($request->get('id'));
                $Elemeto->setNome($request->get('nome'));
                $Elemeto->setSimbolo($request->get('simbolo'));
                if($cr->actualizarUm($Elemeto))
                    $res['status']=1;
            }
        } elseif ($data != "0") {
            $Elemeto = $cr->mostrarUm($data);
        }

        $template = $this->render('amostra/api/elementosQuimicos_form.html.twig', array(
            'Elemeto' => $Elemeto,
            'Elemetos' => $Elemetos
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
     * @Route("/delete/{data}", name="elementosQuimicos_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($data = null)
    {
        $res = array();
        $res['status'] = 0;

        $em = $this->getDoctrine()->getManager();
        $cr = new CategoriaRepositorio($em);

        $categoria = new Categoria();
        $categoria=$cr->mostrarUm($data);
        if($cr->eliminarUm($categoria))
            $res['status'] = 1;

        $res['message'] = null;
        return new Response(json_encode($res));

    }

    /**
     * Finds and displays a elementoquimico entity.
     *
     * @Route("/{id}", name="elementoquimico_show")
     * @Method("GET")
     */
    public function showAction(Elementoquimico $elementoquimico)
    {
        $deleteForm = $this->createDeleteForm($elementoquimico);

        return $this->render('elementoquimico/show.html.twig', array(
            'elementoquimico' => $elementoquimico,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing elementoquimico entity.
     *
     * @Route("/{id}xx/edit", name="elementoquimico_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Elementoquimico $elementoquimico)
    {
        $deleteForm = $this->createDeleteForm($elementoquimico);
        $editForm = $this->createForm('AppBundle\Form\ElementoquimicoType', $elementoquimico);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('elementoquimico_edit', array('id' => $elementoquimico->getId()));
        }

        return $this->render('elementoquimico/edit.html.twig', array(
            'elementoquimico' => $elementoquimico,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a elementoquimico entity.
     *
     * @Route("/{id}", name="elementoquimico_deletex")
     * @Method("DELETE")
     */
    public function deleteActionx(Request $request, Elementoquimico $elementoquimico)
    {
        $form = $this->createDeleteForm($elementoquimico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($elementoquimico);
            $em->flush($elementoquimico);
        }

        return $this->redirectToRoute('elementoquimico_index');
    }

    /**
     * Creates a form to delete a elementoquimico entity.
     *
     * @param Elementoquimico $elementoquimico The elementoquimico entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Elementoquimico $elementoquimico)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('elementoquimico_delete', array('id' => $elementoquimico->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
