<?php

namespace app\models\service;

use app\models\validacao\UsuarioValidacao;

class Usuario
{
    public static function salvar($dados, $campo, $tabela)
    {       
        $validacao = UsuarioValidacao::salvar($dados);
        return Service::salvar($dados, $campo, $validacao->listaErros(), $tabela);
    }
}
