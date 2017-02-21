<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Domain\MAC\AmbientesedimentarRepositorio;
use AppBundle\Domain\MAC\ClasseRepositorio;
use AppBundle\Domain\MAC\EpocaRepositorio;
use AppBundle\Domain\MAC\EraRepositorio;
use AppBundle\Domain\MAC\FamiliaRepositorio;
use AppBundle\Domain\MAC\FiloRepositorio;
use AppBundle\Domain\MAC\FormacaoRepositorio;
use AppBundle\Domain\MAC\FosseRepositorio;
use AppBundle\Domain\MAC\GrauMetamorficoRepositorio;
use AppBundle\Domain\MAC\IdadeRepositorio;
use AppBundle\Domain\MAC\MineiroRepositorio;
use AppBundle\Domain\MAC\MododejazidaRepositorio;
use AppBundle\Domain\MAC\OrdemRepositorio;
use AppBundle\Domain\MAC\PeriodoRepositorio;
use AppBundle\Domain\MAC\ReinoRepositorio;
use AppBundle\Domain\MAC\RochaRepositorio;
use AppBundle\Domain\MAC\SubclasseRepositorio;
use AppBundle\Domain\MAC\SubordemRepositorio;
use AppBundle\Domain\MAC\TaxonomiaRepositorio;
use AppBundle\Domain\MAC\TransparenciaRepositorio;
use AppBundle\Domain\SYS\McaRepositorio;
use AppBundle\Domain\SYS\MunicipioRepositorio;
use AppBundle\Entity\MAC\Ambientesedimentar;
use AppBundle\Entity\MAC\Ambientesedimentarrocha;
use AppBundle\Entity\MAC\Estrategrafia;
use AppBundle\Entity\MAC\Fosseis;
use AppBundle\Entity\MAC\Fratura;
use AppBundle\Entity\MAC\Fraturamineiro;
use AppBundle\Entity\MAC\Graumetamorfico;
use AppBundle\Entity\MAC\Habito;
use AppBundle\Entity\MAC\Habitomineiro;
use AppBundle\Domain\MAC\BrilhoRepositorio;
use AppBundle\Domain\MAC\CategoriaRepositorio;
use AppBundle\Domain\MAC\ClivagemRepositorio;
use AppBundle\Domain\MAC\ComposicaoQuimicoRepositorio;
use AppBundle\Domain\MAC\CorMineiroRepositorio;
use AppBundle\Domain\MAC\DurezaRepositorio;
use AppBundle\Domain\MAC\FracturaRepositorio;
use AppBundle\Domain\MAC\GeneseRepositorio;
use AppBundle\Domain\MAC\HabitoRepositorio;
use AppBundle\Domain\MAC\MedidaRepositorio;
use AppBundle\Domain\MAC\PrateleiraRepositorio;
use AppBundle\Domain\MAC\PrateleriraRepositorio;
use AppBundle\Domain\MAC\RiscaRepositorio;
use AppBundle\Domain\MAC\SeccaoRepositorio;
use AppBundle\Entity\MAC\Composicaoquimico;
use AppBundle\Entity\MAC\Cormineiro;
use AppBundle\Entity\MAC\Dureza;
use AppBundle\Entity\MAC\Elementoquimico;
use AppBundle\Entity\MAC\Genese;
use AppBundle\Entity\MAC\Genesemineiro;
use AppBundle\Entity\MAC\Medida;
use AppBundle\Entity\MAC\Mineiro;
use AppBundle\Entity\MAC\Categoria;
use AppBundle\Domain\MAC\AmostraRepositorio;
use AppBundle\Entity\MAC\Mododejazidarocha;
use AppBundle\Entity\MAC\Risca;
use AppBundle\Entity\MAC\Riscamineiro;
use AppBundle\Entity\MAC\Rocha;
use AppBundle\Entity\MAC\Taxonomia;
use AppBundle\Entity\SYS\Municipio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Amostra controller.
 *
 * @Route("acervos")
 */
class AmostraController extends Controller
{
    /**
     * Lists all amostra entities.
     *
     * @Route("/", name="acervos")
     * @Method("GET")
     */
    public function indexAction()
    {

        $user=$this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $rl=new McaRepositorio($em);
        $rl=$rl->loadRoles($user);

        $categoria = new CategoriaController();
        $categoria = $categoria->filtro($em);

        //var_dump($categoria);
        return $this->render('amostra/index.html.twig', array(
            'amostras' => null,//$amostras,
            'categorias' => $categoria,
            'user'=>$user
        ));
    }

    /**
     * Creates a new amostra entity.
     *
     * @Route("/new", name="amostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $res = array();
        $res['status'] = 0;
        $amostras = 1;
        $form = $request->get('form');
        $tipo = $request->get('tipo');

        $em = $this->getDoctrine()->getManager();

        if ($tipo == "novo") {
            if ($form == "Mineiro") {

                $amostras = new Medida();
                $elemestosQuimicos = new ComposicaoQuimicoRepositorio($em);
                $elemestosQuimicos = $elemestosQuimicos->mostrarTodos();
                $cor = new CorMineiroRepositorio($em);
                $cor = $cor->mostrarTodos();
                $genese = new GeneseRepositorio($em);
                $genese = $genese->mostrarTodos();
                $paragenese = new GeneseRepositorio($em);
                $paragenese = $paragenese->mostrarTodos();
                $habito = new HabitoRepositorio($em);
                $habito = $habito->mostrarTodos();
                $fratura = new FracturaRepositorio($em);
                $fratura = $fratura->mostrarTodos();
                $clivagem = new ClivagemRepositorio($em);
                $clivagem = $clivagem->mostrarTodos();
                $trasparencia = new TransparenciaRepositorio($em);
                $trasparencia = $trasparencia->mostrarTodos();
                $brilho = new BrilhoRepositorio($em);
                $brilho = $brilho->mostrarTodos();
                $risca = new RiscaRepositorio($em);
                $risca = $risca->mostrarTodos();
                $categoria = new CategoriaRepositorio($em);
                $categoria = $categoria->cusquery(null, 1);
                $prateleira = new PrateleiraRepositorio($em);
                $prateleira = $prateleira->mostrarTodos();
                $template = $this->render('amostra/api/amostra_' . $form . '_form.html.twig', array(
                    'Mineiro' => null,
                    'elemestosQuimicos' => $elemestosQuimicos,
                    'cor' => $cor,
                    'genese' => $genese,
                    'paragenese' => $paragenese,
                    'habito' => $habito,
                    'fratura' => $fratura,
                    'clivagem' => $clivagem,
                    'trasparencia' => $trasparencia,
                    'risca' => $risca,
                    'categoria' => $categoria,
                    'prateleira' => $prateleira,
                    'brilho' => $brilho
                ));
            }

            if ($form == "Rocha") {
                $rocha = new RochaRepositorio($em);
                $categoria = new CategoriaRepositorio($em);
                $categoria = $categoria->cusquery(null, 2);

                $ambienteSedimentar = new AmbientesedimentarRepositorio($em);
                $ambienteSedimentar = $ambienteSedimentar->mostrarTodos();

                $mododeJazida = new MododejazidaRepositorio($em);
                $mododeJazida = $mododeJazida->mostrarTodos();

                $prateleira = new PrateleiraRepositorio($em);
                $prateleira = $prateleira->mostrarTodos();
                $template = $this->render('amostra/api/amostra_Rocha_form.html.twig', array(
                    'rocha' => null,
                    'ambiente' => $ambienteSedimentar,
                    'mododejazida' => $mododeJazida,
                    'categoria' => $categoria,
                    'prateleira' => $prateleira
                ));
            }

            if ($form == "Fosseis") {
                $amostras = new Fosseis();

                $local=new MunicipioRepositorio($em);
                $local=$local->mostrarTodos();

                $reino = new ReinoRepositorio($em);
                $reino=$reino->mostrarTodos();

                $classe = new ClasseRepositorio($em);
                $classe=$classe->mostrarTodos();

                $subclasse = new SubclasseRepositorio($em);
                $subclasse=$subclasse->mostrarTodos();

                $filo = new FiloRepositorio($em);
                $filo=$filo->mostrarTodos();

                $ordem = new OrdemRepositorio($em);
                $ordem=$ordem->mostrarTodos();

                $suborderm = new SubordemRepositorio($em);
                $suborderm=$suborderm->mostrarTodos();

                $familia = new FamiliaRepositorio($em);
                $familia=$familia->mostrarTodos();

                $era=new EraRepositorio($em);
                $era=$era->mostrarTodos();

                $idade=new IdadeRepositorio($em);
                $idade=$idade->mostrarTodos();

                $periodo=new PeriodoRepositorio($em);
                $periodo=$periodo->mostrarTodos();

                $formacao=new FormacaoRepositorio($em);
                $formacao=$formacao->mostrarTodos();

                $epoca=new EpocaRepositorio($em);
                $epoca=$epoca->mostrarTodos();

                $categoria = new CategoriaRepositorio($em);
                $categoria = $categoria->cusquery(null, 3);

                $prateleira = new PrateleiraRepositorio($em);
                $prateleira = $prateleira->mostrarTodos();

                $template = $this->render('amostra/api/amostra_' . $form . '_form.html.twig', array(
                    'reino'=>$reino,
                    'classe'=>$classe,
                    'subclasse'=>$subclasse,
                    'filo'=>$filo,
                    'ordem'=>$ordem,
                    'subordem'=>$suborderm,
                    'familia'=>$familia,
                    'Mineiro' => null,
                    'categoria' => $categoria,
                    'prateleira' => $prateleira,
                    'local'=>$local,
                    'epoca'=>$epoca,
                    'formacao'=>$formacao,
                    'periodo'=>$periodo,
                    'era'=>$era,
                    'idade'=>$idade
                ));
            }
        } else {
            if ($form == "Mineiro") {
                $mineiro = new Mineiro();
                $prateleira = new PrateleiraRepositorio($em);
                $categoria = new CategoriaRepositorio($em);
                $mineiro->setNome($request->get('nome'));
                $mineiro->setEstado(1);
                $mineiro->setAplicacao($request->get('aplicacao'));
                $mineiro->setCaraceristica($request->get('caracteristica'));
                $mineiro->setIdcategoria($categoria->mostrarUm($request->get('categoria')));
                $mineiro->setIdprateleira($prateleira->mostrarUm($request->get('prateleira')));

                $medida = new Medida();
                $medida->setAltura($request->get('medidaAltura'));
                $medida->setComprimento($request->get('medidaComprimento'));
                $medida->setLargura($request->get('medidaLargura'));
                $medida->setEspecura($request->get('medidaEspecura'));
                $medidaR = new MedidaRepositorio($em);
                $medida = $medidaR->criarUm($medida);
                $mineiro->setIdmedida($medida);

                $dureza = new Dureza();
                $dureza->setMax($request->get('dureza-Max'));
                $dureza->setMin($request->get('dureza-Min'));
                $dureza->setDescricao($request->get('durezaDescricao'));
                $durezaR = new DurezaRepositorio($em);
                $dureza = $durezaR->criarUm($dureza);

                $mineiro->setIddureza($dureza);
                $mineiroR = new AmostraRepositorio($em);
                $mineiro = $mineiroR->criarUm($mineiro);

                /*TRATAR COMPOSTOS QUIMICOS*/
                $elementosR = new ComposicaoQuimicoRepositorio($em);
                for ($i = 0; $i < sizeof($request->get('elemento-qtd')); $i++) {
                    $elementos = new Composicaoquimico();
                    $elemento = $elementosR->mostrarUm($request->get('elemento-nome')[$i]);
                    $elementos->setquantidade($request->get('elemento-qtd')[$i]);
                    $elementos->setIdelemento($elemento);
                    $elementos->setIdmineiro($mineiro);
                    $elementosR->criarUm($elementos);
                }

                /*TRATAR RISCAS*/
                $riscaR = new RiscaRepositorio($em);
                for ($i = 0; $i < sizeof($request->get('riscasMineiro')); $i++) {
                    $risca = new Riscamineiro();
                    $ris = $riscaR->cusquery($request->get('riscasMineiro')[$i]);
                    $risca->setIdrisca($ris[0]);
                    $risca->setIdmineiro($mineiro);
                    $riscaR->criarUm($risca);
                }

                /*TRATAR CORES*/
                $corR = new CorMineiroRepositorio($em);
                for ($i = 0; $i < sizeof($request->get('corMineiro')); $i++) {
                    $cor = new Cormineiro();
                    $co = $corR->cusquery($request->get('corMineiro')[$i]);
                    $cor->setIdcor($co[0]);
                    $cor->setIdmineiro($mineiro);
                    $corR->criarUm($cor);
                }

                $geneseR = new GeneseRepositorio($em);
                for ($i = 0; $i < sizeof($request->get('geneseMineiro')); $i++) {
                    $genese = new Genesemineiro();
                    $gen = $geneseR->cusquery($request->get('geneseMineiro')[$i]);
                    $genese->setIdgenese($gen[0]);
                    $genese->setIdmineiro($mineiro);
                    $geneseR->criarUm($genese);
                }

                $paragenese = null;
                $parageneseR = new GeneseRepositorio($em);
                for ($i = 0; $i < sizeof($request->get('geneseMineiro')); $i++) {
                    $gn = new Genesemineiro();
                    $gen = $parageneseR->cusquery($request->get('geneseMineiro')[$i]);
                    $gn->setIdgenese($gen[0]);
                    $paragenese[] = $gn;
                }

                $habitoR = new HabitoRepositorio($em);
                for ($i = 0; $i < sizeof($request->get('habitoMineiro')); $i++) {
                    $habito = new Habitomineiro();
                    $habi = $habitoR->cusquery($request->get('habitoMineiro')[$i]);
                    $habito->setIdhabito($habi[0]);
                    $habito->setIdmineiro($mineiro);
                    $habitoR->criarUm($habito);
                }

                $fraturaR = new FracturaRepositorio($em);
                for ($i = 0; $i < sizeof($request->get('fraturaMineiro')); $i++) {
                    $fratura = new Fraturamineiro();
                    $frat = $fraturaR->cusquery($request->get('fraturaMineiro')[$i]);
                    $fratura->setIdfratura($frat[0]);
                    $fratura->setIdmineiro($mineiro);
                    $fraturaR->criarUm($fratura);
                }

                $res['status'] = 1;
                $template = $this->render('io.html.twig');
            }

            if ($form == "Rocha") {
                $rocha = new Rocha();
                $rochaR = new RochaRepositorio($em);
                $prateleira = new PrateleiraRepositorio($em);
                $categoria = new CategoriaRepositorio($em);
                $categoria = $categoria->mostrarUm($request->get('categoria'));
                $rocha->setNome($request->get('nome'));
                $rocha->setEstado(1);
                $rocha->setAplicacao($request->get('aplicacao'));
                $rocha->setDescricao($request->get('descricao'));
                $rocha->setTipo($categoria->getId());
                $rocha->setCondicoesdeFormas($request->get('condicoes'));
                $rocha->setPrateleira($prateleira->mostrarUm($request->get('prateleira')));
                $rocha->setEstado(1);
                $rocha->setData(date('Y-m-d h:i:s'));
                $rochaR->criarUm($rocha);

                switch ($categoria->getId()) {
                    case 13:
                        $mododejazidaR = new MododejazidaRepositorio($em);
                        for ($i = 0; $i < sizeof($request->get('mododejazida')); $i++) {
                            $mododejazidaRocha = new Mododejazidarocha();
                            $mododejazidaRocha->setIdmododejazida($mododejazidaR->mostrarUm($request->get('mododejazida')[$i]));
                            $mododejazidaRocha->setIdrocha($rocha);
                            $mododejazidaR->criarUm($mododejazidaRocha);
                        }
                        break;
                    case 14:
                        $graumetamorfico = new Graumetamorfico();
                        $graumetamorfico->setDescricao($request->get('graumetamorfico'));
                        $graumetamorfico->setId($rocha->getId());
                        $graumetamorficoR = new GrauMetamorficoRepositorio($em);
                        $graumetamorficoR->criarUm($graumetamorfico);
                        break;
                    case 15:
                        $ambienteR = new AmbientesedimentarRepositorio($em);
                        for ($i = 0; $i < sizeof($request->get('ambiente')); $i++) {
                            $ambienteRocha = new Ambientesedimentarrocha();
                            $ambienteRocha->setIdambientesedimentar($ambienteR->mostrarUm($request->get('ambiente')[$i]));
                            $ambienteRocha->setIdrocha($rocha);
                            $ambienteR->criarUm($ambienteRocha);
                        }
                        break;

                }
                $res['status'] = 1;
                $template = $this->render('io.html.twig');
            }

            if ($form == "Fosse") {
                $r = 0;
                $fosse=new Fosseis();
                $fosse->setNome($request->get('nome'));
                $fosse->setNomecolecao($request->get('nomecoleccao'));
                $fosse->setEstadoConservacao($request->get('estadoconcervacao'));
                $fosse->setTipo($request->get('categoria'));
                $fosse->setPrateleira($request->get('prateleira'));
                $fosse->setLocalespecifico($request->get('localespecifico'));
                $fosse->setIdlocalcolheita($request->get('localcolheta'));

                $medida=new Medida();
                $medida->setEspecura($request->get('medidaEspecura'));
                $medida->setAltura($request->get('medidaAltura'));
                $medida->setLargura($request->get('medidaLargura'));
                $medida->setComprimento($request->get('medidaComprimento'));

                $taxonomia=new Taxonomia();
                $taxonomia->setIdclasse($request->get('classe'));
                $taxonomia->setSubordem($request->get('subordem'));
                $taxonomia->setFamilia($request->get('familia'));
                $taxonomia->setFilo($request->get('filo'));
                $taxonomia->setOrdem($request->get('ordem'));
                $taxonomia->setSubclasse($request->get('subclasse'));
                $taxonomia->setReino($request->get('reirno'));

               /* $estatografia=new Estrategrafia();
                $estatografia->set*/

                $res['status'] = 1;
                $template = $this->render('io.html.twig');

            }
        }


        $res['message'] = ($amostras == NULL) ? "SEM RESULTADO" : $template->getContent();
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));
    }

    /**
     * Lists all amostra entities.
     *
     * @Route("/listarCategoria/{id}", name="listarCategoria")
     */
    public function listarCategoria($id)
    {

        $em = $this->getDoctrine()->getManager();
        $amostras = new AmostraRepositorio($em);
        $categoria = new CategoriaRepositorio($em);
        $categoria = $categoria->mostrarUm($id)->getDependencia();
        $tipo = null;
        switch ($categoria->getId()) {
            case 1:
                $amostras = new AmostraRepositorio($em);
                $amostras = $amostras->mostrarPorCategoria($id);
                $tipo = 'mineiro';
                break;
            case 2:
                $amostras = new RochaRepositorio($em);
                $amostras = $amostras->mostrarPorCategoria($id);
                $tipo = 'rocha';
                break;
            case 3:
                $amostras = new FosseRepositorio($em);
                $amostras = $amostras->mostrarPorCategoria($id);
                $tipo = 'fosseis';
                break;
        }


        $template = $this->render('amostra/api/amostra_lista.html.twig', array(
            'amostras' => $amostras,
            'tipo' => $tipo
        ));

        $res = array();
        $res['status'] = 0;
        $res['message'] = ($amostras == NULL) ? "SEM RESULTADO" : $template->getContent();
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));
    }

    /**
     * Lists all amostra entities.
     *
     * @Route("/configuracoes/{conf}", name="configuracoesAmostra")
     */
    public function configuracoes($conf = null)
    {


        $user=$this->get('security.token_storage')->getToken()->getUser();
        $pagina = 'io.html.twig';
        $dados = null;

        $em = $this->getDoctrine()->getManager();

        switch ($conf) {
            case 'categoria':
                $pagina = 'amostra/categoria_list.html.twig';

                $categoria = new CategoriaRepositorio($em);
                $dados = $categoria->mostrarPadrao();
                break;
            case 'cor':
                $pagina = 'amostra/cor_list.html.twig';

                $cor = new CorMineiroRepositorio($em);
                $dados = $cor->mostrarTodos();
                break;
            case 'elementosQuimicos':
                $pagina = 'amostra/elementosQuimicos_list.html.twig';

                $cor = new ComposicaoQuimicoRepositorio($em);
                $dados = $cor->mostrarTodos();
                break;
            case 'brilho':
                $pagina = 'amostra/brilho_list.html.twig';

                $brilho = new BrilhoRepositorio($em);
                $dados = $brilho->mostrarTodos();
                break;
            case 'prateleira':
                $pagina = 'amostra/prateleira_list.html.twig';

                $brilho = new PrateleiraRepositorio($em);
                $dados = $brilho->mostrarTodos();
                break;
            case 'seccao':
                $pagina = 'amostra/seccao_list.html.twig';

                $seccao = new SeccaoRepositorio($em);
                $dados = $seccao->mostrarTodos();
                break;
            case 'fractura':
                $pagina = 'amostra/fractura_list.html.twig';

                $fr = new FracturaRepositorio($em);
                $dados = $fr->mostrarTodos();
                break;
            case 'habito':
                $pagina = 'amostra/habito_list.html.twig';

                $hb = new HabitoRepositorio($em);
                $dados = $hb->mostrarTodos();
                break;
            case 'genese':
                $pagina = 'amostra/genese_list.html.twig';

                $hb = new GeneseRepositorio($em);
                $dados = $hb->mostrarTodos();
                break;
            case 'paragenese':
                $pagina = 'amostra/genese_list.html.twig';

                $hb = new GeneseRepositorio($em);
                $dados = $hb->mostrarTodos();
                break;
            case 'risca':
                $pagina = 'amostra/risca_list.html.twig';

                $rs = new RiscaRepositorio($em);
                $dados = $rs->mostrarTodos();
                break;
            case 'clivagem':
                $pagina = 'amostra/clivagem_list.html.twig';

                $cl = new ClivagemRepositorio($em);
                $dados = $cl->mostrarTodos();
                break;
        }
        //------------


        //var_dump($categoria);
        return $this->render('amostra/configuracoes.html.twig', array(
            'pagina' => $pagina,
            'dados' => $dados,
            'user'=>$user
        ));
    }

    /**
     * Finds and displays a amostra entity.
     *
     * @Route("/{id}", name="amostra_show")
     * @Method("GET")
     */
    public function showAction(Amostra $amostra)
    {
        $deleteForm = $this->createDeleteForm($amostra);

        return $this->render('amostra/show.html.twig', array(
            'amostra' => $amostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a amostra entity.
     *
     * @Route("/{acervo}/{id}", name="acervo_show")
     * @Method({"GET", "POST"})
     */
    public function selfshowAction($id, $acervo)
    {
        $em = $this->getDoctrine()->getManager();
        switch ($acervo) {
            case 'mineiro':
                $amostras = new MineiroRepositorio($em);
                $amostras = $amostras->mostrarUm($id);
                break;
            case 'rocha':
                $amostras = new RochaRepositorio($em);
                $amostras = $amostras->mostrarUm($id);
                break;
            case 'fosseis':
                $amostras = new FosseRepositorio($em);
                $amostras = $amostras->mostrarUm($id);
                break;
        }


        $template = $this->render('amostra/api/amostra_' . $acervo . '_ver.html.twig', array(
            'amostra' => $amostras
        ));

        $res = array();
        $res['status'] = 0;
        $res['message'] = ($amostras == NULL) ? "SEM RESULTADO" : $template->getContent();
        $json = json_encode($res);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);
        return new Response(json_encode($res));
    }

    /**
     * Displays a form to edit an existing amostra entity.
     *
     * @Route("/{id}/edit", name="amostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Amostra $amostra)
    {
        $deleteForm = $this->createDeleteForm($amostra);
        $editForm = $this->createForm('AppBundle\Form\AmostraType', $amostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('amostra_edit', array('id' => $amostra->getId()));
        }

        return $this->render('amostra/edit.html.twig', array(
            'amostra' => $amostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a amostra entity.
     *
     * @Route("/{id}", name="amostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Amostra $amostra)
    {
        $form = $this->createDeleteForm($amostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($amostra);
            $em->flush($amostra);
        }

        return $this->redirectToRoute('amostra_index');
    }

    /**
     * Creates a form to delete a amostra entity.
     *
     * @param Amostra $amostra The amostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Amostra $amostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('amostra_delete', array('id' => $amostra->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
