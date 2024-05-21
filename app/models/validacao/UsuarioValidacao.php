<?php

namespace app\models\validacao;

use app\core\Validacao;

class UsuarioValidacao
{
    public static function salvar($usuario)
    {
        $validacao =  new Validacao();
        $validacao->setData("nome", $usuario->nome);
        $validacao->setData("email", $usuario->email);
        $validacao->setData("senha", $usuario->senha);        
        $validacao->setData("email", $usuario->email);      

        $validacao->getData("nome")->isVazio();
        $validacao->getData("email")->isVazio();
        $validacao->getData("senha")->isVazio();
        $validacao->getData("email")->isEmail();  
      
        return $validacao;
    }
}
