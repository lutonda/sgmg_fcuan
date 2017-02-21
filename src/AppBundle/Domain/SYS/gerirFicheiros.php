<?php

namespace AppBundle\Domain\SYS;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class gerirFicheiros extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function gerar($nome, $mineiro, $tipo = null)
    {
        switch ($tipo) {
            case 1:
                return $this->imagemAcervo($nome,$mineiro);
                break;
            default :
                ;
        }
    }

    public function verificarimagem()
    {

    }

    protected function imagemAcervo($nome, $mineiro)
    {
        $i = 0;
        $imagens = null;
        $path = $this->get('kernel')->getRootDir() . '../web/global/img/acervos/' . $mineiro . '/' . $nome;
        while (file_exists($path . $i++ . '.jpg'))
            $imagens[] = $path . $i++ . '.jpg';

        return $imagens;
    }
}
