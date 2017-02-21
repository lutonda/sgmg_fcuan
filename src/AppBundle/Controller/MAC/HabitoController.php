<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Domain\MAC\HabitoRepositorio;
use AppBundle\Entity\MAC\Habito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Habito controller.
 *
 * @Route("habito")
 */
class HabitoController extends Controller
{
    /**
     * Lists all habito entities.
     *
     * @Route("/", name="habito_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habitos = $em->getRepository('AppBundle:Habito')->findAll();

        return $this->render('habito/index.html.twig', array(
            'habitos' => $habitos,
        ));
    }



    /**
     * Creates a new categoria entity.
     *
     * @Route("/new/{data}", name="habito_new")
     * @Method({"GET", "POST"})
     */
    public function newAction($data = null, Request $request)
    {
        $res = array();
        $res['status'] = 0;
        $em = $this->getDoctrine()->getManager();
        $hb = new HabitoRepositorio($em);
        $habitos = $hb->mostrarTodos();

        $habito = new Habito();
        $habito->setId('AI');
        if ($data == "form") {
            if ($request->get('id') =='AI') {
                $habito->setId(null);
                $habito->setNome($request->get('nome'));
                $habito->setDesignacao($request->get('descricao'));
                if($hb->criarUm($habito))
                    $res['status']=2;
            } elseif ($data == "form" and $request->get('id') != null) {
                $habito->setId($request->get('id'));
                $habito->setNome($request->get('nome'));
                $habito->setDesignacao($request->get('descricao'));
                if($hb->actualizarUm($habito))
                    $res['status']=1;
            }
        } elseif ($data != "0") {
            $habito = $hb->mostrarUm($data);
        }

        $template = $this->render('amostra/api/habito_form.html.twig', array(
            'habito' => $habito,
            'habitos' => $habitos
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
     * @Route("/delete/{data}", name="habito_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($data = null)
    {
        $res = array();
        $res['status'] = 0;

        $em = $this->getDoctrine()->getManager();
        $hb = new HabitoRepositorio($em);

        $habito = new Habito();
        $habito=$hb->mostrarUm($data);
        if($hb->eliminarUm($habito))
            $res['status'] = 1;

        $res['message'] = null;
        return new Response(json_encode($res));

    }

    /**
     * Creates a new habito entity.
     *
     * @Route("/new", name="habito_newx")
     * @Method({"GET", "POST"})
     */
    public function newActionx(Request $request)
    {
        $habito = new Habito();
        $form = $this->createForm('AppBundle\Form\HabitoType', $habito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($habito);
            $em->flush($habito);

            return $this->redirectToRoute('habito_show', array('id' => $habito->getId()));
        }

        return $this->render('habito/new.html.twig', array(
            'habito' => $habito,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a habito entity.
     *
     * @Route("/{id}", name="habito_show")
     * @Method("GET")
     */
    public function showAction(Habito $habito)
    {
        $deleteForm = $this->createDeleteForm($habito);

        return $this->render('habito/show.html.twig', array(
            'habito' => $habito,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing habito entity.
     *
     * @Route("/{id}/edit", name="habito_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Habito $habito)
    {
        $deleteForm = $this->createDeleteForm($habito);
        $editForm = $this->createForm('AppBundle\Form\HabitoType', $habito);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('habito_edit', array('id' => $habito->getId()));
        }

        return $this->render('habito/edit.html.twig', array(
            'habito' => $habito,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a habito entity.
     *
     * @Route("/{id}", name="habito_deletex")
     * @Method("DELETE")
     */
    public function deleteActionx(Request $request, Habito $habito)
    {
        $form = $this->createDeleteForm($habito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($habito);
            $em->flush($habito);
        }

        return $this->redirectToRoute('habito_index');
    }

    /**
     * Creates a form to delete a habito entity.
     *
     * @param Habito $habito The habito entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Habito $habito)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('habito_delete', array('id' => $habito->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
