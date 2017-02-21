<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 13-11-2016
 * Time: 17:28
 */

namespace AppBundle\Domain\SYS;


class enuRepositorio
{
    public function genero($enum)
    {
        if ($enum === null)
            return 'Outro';
        if(!is_int($enum) and $enum !== 'x')
            return $enum;
        $genero = array('Femenino', 'Masculino');
        return $genero[$enum];
    }

    public function estado($enum)
    {
        if ($enum === null)
            return 'Outro';
        if(!is_int($enum) and $enum !== 'x')
            return $enum;
        $estado = array('Pendente', 'Activo', 'Suspenso', 'Canselado', 'Excluido');
        return $estado[$enum];
    }

    public function tipoPessoa($enum=null)
    {
        if ($enum === null)
            return 'Visitante';
        if(!is_int($enum) and $enum !== 'x')
            return $enum;
        $tipo = array('Admin','Gestor','Funcionario', 'Visitante', 'Grupo');
        if ($enum === 'x')
            return $tipo;
        return $tipo[$enum];
    }

    public function tipoVisita($enum=null)
    {
        if ($enum === null)
            return 'Visitante';
        if(!is_int($enum) and $enum !== 'x')
            return $enum;
        $tipo = array('Guiada','Não Guiada');
        if ($enum === 'x')
            return $tipo;
        return $tipo[$enum];
    }

    public function nivelacademico($enum)
    {
        if ($enum === null)
            return 'Outro';
        if(!is_int($enum) and $enum !== 'x')
            return $enum;
        $tipo = array('Base', 'Medio', 'Superior', 'Mestrado', 'Doctor');
        if ($enum === 'x')
            return $tipo;
        return $tipo[$enum];
    }

}