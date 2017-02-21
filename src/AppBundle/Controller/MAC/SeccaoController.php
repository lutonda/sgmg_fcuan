<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Domain\MAC\CorMineiroRepositorio;
use AppBundle\Domain\MAC\SeccaoRepositorio;
use AppBundle\Entity\Cor;
use AppBundle\Entity\MAC\Seccao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Cor controller.
 *
 * @Route("seccao")
 */
class SeccaoController extends Controller
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

        $seccaos = $em->getRepository('AppBundle:Cor')->findAll();

        return $this->render('cor/index.html.twig', array(
            'cors' => $seccaos,
        ));
    }


    /**
     * Creates a new categoria entity.
     *
     * @Route("/new/{data}", name="seccao_new")
     * @Method({"GET", "POST"})
     */
    public function newAction($data = null, Request $request)
    {
        $res = array();
        $res['status'] = 0;
        $em = $this->getDoctrine()->getManager();
        $sc = new SeccaoRepositorio($em);
        $seccoes = $sc->mostrarTodos();

        $seccao = new Seccao();
        $seccao->setId('AI');
        $SS=$request->get('id');
        if ($data == "form") {
            if ($request->get('id') =='AI') {
                $seccao->setId(null);
                $seccao->setNome($request->get('nome'));
                $seccao->setDescricao($request->get('descicao'));
                $seccao->setEstado($request->get('estado'));

                if($sc->criarUm($seccao))
                    $res['status']=2;
            } elseif ($data == "form" and $request->get('id') != null) {
                $seccao->setId($request->get('id'));
                $seccao->setNome($request->get('nome'));
                $seccao->setDescricao($request->get('descicao'));
                $seccao->setEstado(1);
                if($sc->actualizarUm($seccao))
                    $res['status']=1;
            }
        } elseif ($data != "0") {
            $seccao = $sc->mostrarUm($data);
        }

        $template = $this->render('amostra/api/seccao_form.html.twig', array(
            'seccao' => $seccao,
            'seccoes' => $seccoes
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
    public function showAction(Cor $seccao)
    {
        $deleteForm = $this->createDeleteForm($seccao);

        return $this->render('cor/show.html.twig', array(
            'cor' => $seccao,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cor entity.
     *
     * @Route("/{id}/edit", name="cor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cor $seccao)
    {
        $deleteForm = $this->createDeleteForm($seccao);
        $editForm = $this->createForm('AppBundle\Form\CorType', $seccao);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cor_edit', array('id' => $seccao->getId()));
        }

        return $this->render('cor/edit.html.twig', array(
            'cor' => $seccao,
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
    public function deleteActionx(Request $request, Cor $seccao)
    {
        $form = $this->createDeleteForm($seccao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($seccao);
            $em->flush($seccao);
        }

        return $this->redirectToRoute('cor_index');
    }

    /**
     * Creates a form to delete a cor entity.
     *
     * @param Cor $seccao The cor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cor $seccao)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cor_delete', array('id' => $seccao->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
