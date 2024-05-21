<?php

namespace app\models\service;

use app\models\validacao\DespesaValidacao;

class Despesa
{
    public static function salvar($dados, $campo, $tabela)
    {
        $validacao = DespesaValidacao::salvar($dados);
        return Service::salvar($dados, $campo, $validacao->listaErros(), $tabela);
    }
}
