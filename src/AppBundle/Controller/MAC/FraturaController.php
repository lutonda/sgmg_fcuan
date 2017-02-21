<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Domain\MAC\FracturaRepositorio;
use AppBundle\Entity\MAC\Fratura;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Fratura controller.
 *
 * @Route("fractura")
 */
class FraturaController extends Controller
{
    /**
     * Lists all fratura entities.
     *
     * @Route("/", name="fratura_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fraturas = $em->getRepository('AppBundle:Fratura')->findAll();

        return $this->render('fratura/index.html.twig', array(
            'fraturas' => $fraturas,
        ));
    }

    /**
     * Creates a new fratura entity.
     *
     * @Route("/newx", name="fratura_newx")
     * @Method({"GET", "POST"})
     */
    public function newActionx(Request $request)
    {
        $fratura = new Fratura();
        $form = $this->createForm('AppBundle\Form\FraturaType', $fratura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fratura);
            $em->flush($fratura);

            return $this->redirectToRoute('fratura_show', array('id' => $fratura->getId()));
        }

        return $this->render('fratura/new.html.twig', array(
            'fratura' => $fratura,
            'form' => $form->createView(),
        ));
    }



    /**
     * Creates a new categoria entity.
     *
     * @Route("/new/{data}", name="fractura_new")
     * @Method({"GET", "POST"})
     */
    public function newAction($data = null, Request $request)
    {
        $res = array();
        $res['status'] = 0;
        $em = $this->getDoctrine()->getManager();
        $fr = new FracturaRepositorio($em);
        $fracturas = $fr->mostrarTodos();

        $fractura = new Fratura();
        $fractura->setId('AI');
        if ($data == "form") {
            if ($request->get('id') =='AI') {
                $fractura->setId(null);
                $fractura->setNome($request->get('nome'));
                $fractura->setDescricao($request->get('descricao'));
                if($fr->criarUm($fractura))
                    $res['status']=2;
            } elseif ($data == "form" and $request->get('id') != null) {
                $fractura->setId($request->get('id'));
                $fractura->setNome($request->get('nome'));
                $fractura->setDescricao($request->get('descricao'));
                if($fr->actualizarUm($fractura))
                    $res['status']=1;
            }
        } elseif ($data != "0") {
            $fractura = $fr->mostrarUm($data);
        }

        $template = $this->render('amostra/api/fractura_form.html.twig', array(
            'fractura' => $fractura,
            'fracturas' => $fracturas
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
     * @Route("/delete/{data}", name="fractura_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($data = null)
    {
        $res = array();
        $res['status'] = 0;

        $em = $this->getDoctrine()->getManager();
        $fr = new FracturaRepositorio($em);

        $fractura = new Fratura();
        $fractura=$fr->mostrarUm($data);
        if($fr->eliminarUm($fractura))
            $res['status'] = 1;

        $res['message'] = null;
        return new Response(json_encode($res));

    }

    /**
     * Finds and displays a fratura entity.
     *
     * @Route("/{id}", name="fratura_showx")
     * @Method("GET")
     */
    public function showAction(Fratura $fratura)
    {
        $deleteForm = $this->createDeleteForm($fratura);

        return $this->render('fratura/show.html.twig', array(
            'fratura' => $fratura,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fratura entity.
     *
     * @Route("/{id}/edit", name="fratura_editx")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Fratura $fratura)
    {
        $deleteForm = $this->createDeleteForm($fratura);
        $editForm = $this->createForm('AppBundle\Form\FraturaType', $fratura);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fratura_edit', array('id' => $fratura->getId()));
        }

        return $this->render('fratura/edit.html.twig', array(
            'fratura' => $fratura,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fratura entity.
     *
     * @Route("/{id}", name="fratura_deletex")
     * @Method("DELETE")
     */
    public function deleteActionx(Request $request, Fratura $fratura)
    {
        $form = $this->createDeleteForm($fratura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fratura);
            $em->flush($fratura);
        }

        return $this->redirectToRoute('fratura_index');
    }

    /**
     * Creates a form to delete a fratura entity.
     *
     * @param Fratura $fratura The fratura entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fratura $fratura)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fratura_delete', array('id' => $fratura->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
