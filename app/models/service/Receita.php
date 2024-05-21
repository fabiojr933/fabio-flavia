<?php

namespace app\models\service;

use app\models\validacao\ReceitaValidacao;

class Receita
{
    public static function salvar($dados, $campo, $tabela)
    {
        $validacao = ReceitaValidacao::salvar($dados);
        return Service::salvar($dados, $campo, $validacao->listaErros(), $tabela);
    }
}
