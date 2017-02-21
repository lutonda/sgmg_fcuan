<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Domain\MAC\CorMineiroRepositorio;
use AppBundle\Entity\Cor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Cor controller.
 *
 * @Route("cor")
 */
class CorController extends Controller
{
    /**
     * Lists all cor entities.
     *
     * @Route("/", name="cor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cors = $em->getRepository('AppBundle:Cor')->findAll();

        return $this->render('cor/index.html.twig', array(
            'cors' => $cors,
        ));
    }


    /**
     * Creates a new categoria entity.
     *
     * @Route("/new/{data}", name="cor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction($data = null, Request $request)
    {
        $res = array();
        $res['status'] = 0;
        $em = $this->getDoctrine()->getManager();
        $cr = new CorMineiroRepositorio($em);
        $cores = $cr->mostrarTodos();
        $nome = $request->get('name');

        $cor = new Cor();
        $cor->setId('AI');
        $SS=$request->get('id');
        if ($data == "form") {
            if ($request->get('id') =='AI') {
                $cor->setId(null);
                $cor->setNome($request->get('nome'));
                $cor->setHex($request->get('hex'));
                if($cr->criarUm($cor))
                    $res['status']=2;
            } elseif ($data == "form" and $request->get('id') != null) {
                $cor->setId($request->get('id'));
                $cor->setNome($request->get('nome'));
                $cor->setHex($request->get('hex'));
                if($cr->actualizarUm($cor))
                    $res['status']=1;
            }
        } elseif ($data != "0") {
            $cor = $cr->mostrarUm($data);
        }

        $template = $this->render('amostra/api/cor_form.html.twig', array(
            'cor' => $cor,
            'cores' => $cores
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
     * @Route("/delete/{data}", name="cor_delete")
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
     * Finds and displays a categoria entity.
     *
     * @Route("/vvvv", name="categoria_show")
     * @Method("GET")
     */
    /**
     * Finds and displays a cor entity.
     *
     * @Route("/{id}", name="cor_show")
     * @Method("GET")
     */
    public function showAction(Cor $cor)
    {
        $deleteForm = $this->createDeleteForm($cor);

        return $this->render('cor/show.html.twig', array(
            'cor' => $cor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cor entity.
     *
     * @Route("/{id}/edit", name="cor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cor $cor)
    {
        $deleteForm = $this->createDeleteForm($cor);
        $editForm = $this->createForm('AppBundle\Form\CorType', $cor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cor_edit', array('id' => $cor->getId()));
        }

        return $this->render('cor/edit.html.twig', array(
            'cor' => $cor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cor entity.
     *
     * @Route("/{id}", name="cor_deletex")
     * @Method("DELETE")
     */
    public function deleteActionx(Request $request, Cor $cor)
    {
        $form = $this->createDeleteForm($cor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cor);
            $em->flush($cor);
        }

        return $this->redirectToRoute('cor_index');
    }

    /**
     * Creates a form to delete a cor entity.
     *
     * @param Cor $cor The cor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cor $cor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cor_delete', array('id' => $cor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
