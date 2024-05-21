<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Service;
use app\models\service\Usuario;

class LoginController extends Controller
{

   private $tabela = "usuario";
   private $campo = "id";

   public function index()
   {
      $dados['public_ip'] = file_get_contents('https://api.ipify.org');
      $dados["view"]       = "login";
      $this->load("login", $dados);
   }
   public function registrar()
   {
      $dados["view"]       = "registrar";
      $this->load("registrar", $dados);
   }
   public function cadastrar()
   {
      $usuario          = new \stdClass();
      $usuario->nome    = $_POST['nome'];
      $usuario->email   = $_POST['email'];
      $usuario->senha   = md5($_POST['senha']);
      Flash::setForm($usuario);
      $id_usuario = Usuario::salvar($usuario, $this->campo, $this->tabela);
      $this->redirect('/login');
   }
   public function autenticar()
   {
      $login = $_POST['email'];
      $senha = md5($_POST['senha']);
      Flash::setForm($_POST);
      if (Service::logar('email', $login, $senha, 'usuario')) {
         $this->redirect(URL_BASE);
      } else {
         $this->redirect(URL_BASE . 'login');
      }
   }
}
