<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Receita;
use app\models\service\Service;

class ReceitaController extends Controller
{
   private $tabela = 'receita';
   private $campo  = 'id';

   public function __construct()
   {
      $id = $_SESSION;
      if (empty($id['LOGIN']->id)) {
         $this->redirect('/login');
      }
   }

   public function index()
   {
      $dados['lista']      = Service::lista($this->tabela);
      $dados["view"]       = "receita/index";
      $this->load("template", $dados);
   }
   public function novo()
   {
      $dados["view"]       = "receita/novo";
      $this->load("template", $dados);
   }
   public function editar($id)
   {
      $dados['view'] = Service::get($this->tabela, $this->campo, $id);
      $dados["view"] = "receita/editar";
      $this->load("template", $dados);
   }
   public function excluir($id)
   {
      Service::excluir($this->tabela, $this->campo, $id);
      $this->redirect(URL_BASE . "receita");
   }
   public function salvar()
   {
      $receita = new \stdClass();
      $receita->id = $_POST['id'];
      $receita->descricao = $_POST['descricao'];
      Flash::setForm($receita);
      receita::salvar($receita, $this->campo, $this->tabela);
      $this->redirect(URL_BASE . 'receita');
   }
}
