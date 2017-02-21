<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\MAC\Categoria;
use AppBundle\Domain\MAC\CategoriaRepositorio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Categoria controller.
 *
 * @Route("categoria")
 */
class CategoriaController extends Controller
{
    /**
     * Lists all categorium entities.
     *
     * @Route("/", name="categoria_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = new CategoriaRepositorio($em);
        $categoria = $categoria->mostrarTodos();
        var_dump($categoria);
        $categorias = $em->getRepository('AppBundle:MAC\Categoria')->findAll();

        return $this->render('categoria/index.html.twig', array(
            'categorias' => $categorias,
        ));
    }

    public function filtro($em)
    {
        //  $em = $this->getDoctrine()->getManager();
        $categoria = new CategoriaRepositorio($em);
        $categoria = $categoria->mostrarTodos();

        return $categoria;
    }

    /**
     * Creates a new categoria entity.
     *
     * @Route("/new/{data}", name="categoria_new")
     * @Method({"GET", "POST"})
     */
    public function newAction($data = null, Request $request)
    {
        $res = array();
        $res['status'] = 0;
        $em = $this->getDoctrine()->getManager();
        $cr = new CategoriaRepositorio($em);
        $categorias = $cr->mostrarPadrao();
        $nome = $request->get('name');

        $categoria = new Categoria();
        $categoria->setId('AI');
        $SS=$request->get('id');
        if ($data == "form") {
            if ($request->get('id') =='AI') {
                $categoria->setId(null);
                $categoria->setNome($request->get('nome'));
                $categoria->setEstado(1);
                $categoria->setDependencia($cr->mostrarUm($request->get('dependencia')));
                if($cr->criarUm($categoria))
                    $res['status']=2;
            } elseif ($data == "form" and $request->get('id') != null) {
                $categoria->setId($request->get('id'));
                $categoria->setNome($request->get('nome'));
                $categoria->setEstado(1);
                $categoria->setDependencia($cr->mostrarUm($request->get('dependencia')));
                if($cr->actualizarUm($categoria))
                    $res['status']=1;
            }
        } elseif ($data != "0") {
            $categoria = $cr->mostrarUm($data);
        }

        $template = $this->render('amostra/api/categoria_form.html.twig', array(
            'categoria' => $categoria,
            'categorias' => $categorias
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
     * @Route("/delete/{data}", name="categoria_delete")
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
    public function showAction()
    {
        /*
        $deleteForm = $this->createDeleteForm($categorium);

        return $this->render('categoria/show.html.twig', array(
            'categorium' => $categorium,
            'delete_form' => $deleteForm->createView(),
        ));*/
    }

    /**
     * Displays a form to edit an existing categoria entity.
     *
     * @Route("/{id}x/edit", name="categoria_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Categoria $categorium = null)
    {
        $deleteForm = $this->createDeleteForm($categorium);
        $editForm = $this->createForm('AppBundle\Form\CategoriaType', $categorium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categoria_edit', array('id' => $categorium->getId()));
        }

        return $this->render('categoria/edit.html.twig', array(
            'categorium' => $categorium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categorium entity.
     *
     * @Route("/x{id}", name="categoria_deletex")
     * @Method("DELETE")
     */
    public function deleteActionx(Request $request, Categoria $categorium)
    {
        $form = $this->createDeleteForm($categorium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorium);
            $em->flush($categorium);
        }

        return $this->redirectToRoute('categoria_index');
    }

    /**
     * Creates a form to delete a categorium entity.
     *
     * @param Categoria $categorium The categorium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categoria $categorium = null)
    {

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoria_delete', array('id' => $categorium->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
