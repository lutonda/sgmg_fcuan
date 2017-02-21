<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Domain\MUS\UtilizadorRepositorio;
use AppBundle\Domain\SYS\enuRepositorio;
use AppBundle\Domain\SYS\McaRepositorio;
use AppBundle\Entity\MUS\Usuario;
use AppBundle\Entity\SYS\Mca;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $user=$this->get('security.token_storage')->getToken()->getUser();

        $rl=new McaRepositorio($em);
        $rl=$rl->loadRoles($user);

        /*  */// replace this example code with whatever you need
        return $this->render('start.html.twig',[
            'pagina'=>'inicio_base.html.twig',
            'user'=>$user
        ]);
    }

    /**
     * @Route("/resetpassord", name="resetpassord")
     */
    public function acervosAction(Request $request)
    {
        $i=0;
        // replace this exampled code with whatever you need
        return $this->render('SYS/resetpassword.html.twig',[
            'pagina'=>'::inicio.html.twig'
        ]);
    }
    /**
     * @Route("/sys/resetpassword/{urlValidator}", name="resetpassword_start")
     */
    public function visitasAction($urlValidator)
    {

        $i=0;
        // replace this example code with whatever you need
        return $this->render('SYS/resetpassword.html.twig',[
            'pagina'=>'/visita/show.html.twig'
        ]);
    }
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {


        $session = $request->getSession();
        $utilisador=new Usuario();
        $utilisador->setId(1);
        $enco = $this->container->get('security.password_encoder');
        $encoder = $enco->encodePassword($utilisador, '123456');

        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                Security::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session &&
            $session->has(Security::AUTHENTICATION_ERROR)) {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        $lastUsername = (null === $session) ? '' :
            $session->get(Security::LAST_USERNAME);

        return $this->render('SYS/login.html.twig',[
            'last_username'=>$lastUsername,
            'error'=>$error
        ]);
    }
    /**
     * @Route("/definicoes", name="definicoes")
     */
    public function settingsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user=$this->get('security.token_storage')->getToken()->getUser();

        $rl=new McaRepositorio($em);
        $rl=$rl->loadRoles($user);

        /*  */// replace this example code with whatever you need
        return $this->render(':SYS/definicoes:definicoes.html.twig', [
            'pagina' => 'io.html.twig',
            'dados' => null,
            'user'=>$user
        ]);
    }
    /**
     * @Route("/definicoes/{tipo}", name="definicoes_config")
     * @Method({"GET", "POST"})
     */
    public function definicoesAction(Request $request, $tipo)
    {
        $em = $this->getDoctrine()->getManager();

        $user=$this->get('security.token_storage')->getToken()->getUser();
        $rl=new McaRepositorio($em);
        $rl=$rl->loadRoles($user);
        $success=0;
        $dados=null;

        switch ($tipo){
            case 'ACL':
                $mca=new McaRepositorio($em);
                $pagina='SYS/definicoes/definicoes_ACL.html.twig';
                if($request->get('ACL')=='ACL') {
                    $gestor=$request->get('gestor');
                    $funcionario=$request->get('funcionario');
                    $visitante=$request->get('visitante');
                    $anonimo=$request->get('anonimo');
                    for($i=1;$i<47;$i++){
                        $acl=new Mca();
                        $acl->setId($i);
                        $acl->setAnonimo((isset($anonimo[$i]))?1:null);
                        $acl->setFuncionario((isset($funcionario[$i]))?1:null);
                        $acl->setGestor((isset($gestor[$i]))?1:null);
                        $acl->setVisitante((isset($visitante[$i]))?1:null);
                        $mca->actualizarUm($acl);
                    }
                    $size=(sizeof($gestor)>sizeof($funcionario))?1:0;
                    $var = 0;

                    $success=1;

                }
                $dados=$mca->loadFullRoles();

                break;
            default:
        }

        /*  */// replace this example code with whatever you need
        return $this->render(':SYS/definicoes:definicoes.html.twig', [
            'pagina' => $pagina,
            'dados' => $dados,
            'user'=>$user,
            'success'=>$success
        ]);
    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logout(Request $request)
    {
        $this->container->get('security.context')->setToken(null);
        return $this->redirect('/');
    }
}
