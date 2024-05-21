<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Despesa;
use app\models\service\Service;

class DespesaController extends Controller
{
   private $tabela = 'despesa';
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
      $dados["view"]       = "despesa/index";
      $this->load("template", $dados);
   }
   public function novo()
   {
      $dados["view"]       = "despesa/novo";
      $this->load("template", $dados);
   }
   public function editar($id)
   {
      $dados['view'] = Service::get($this->tabela, $this->campo, $id);
      $dados["view"] = "despesa/editar";
      $this->load("template", $dados);
   }
   public function excluir($id)
   {
      Service::excluir($this->tabela, $this->campo, $id);
      $this->redirect(URL_BASE . "despesa");
   }
   public function salvar()
   {
      $despesa = new \stdClass();
      $despesa->id = $_POST['id'];
      $despesa->descricao = $_POST['descricao'];
      Flash::setForm($despesa);
      Despesa::salvar($despesa, $this->campo, $this->tabela);
      $this->redirect(URL_BASE . 'despesa');
   }
}
