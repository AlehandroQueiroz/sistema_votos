<?php

namespace Core\DataLayer;

class Methods
{
    public static function post()
    {
      $dados = [];
      if (!empty($_POST)) {
        $dados = $_POST;
      } else {
        $dados = file_get_contents('php://input', JSON_UNESCAPED_UNICODE);
        $dados = json_decode($dados, true);
      }
      return filter_var_array($dados, FILTER_SANITIZE_SPECIAL_CHARS);
    }
  
    public static function get()
    {
      $dados = [];
      if (!empty($_GET)) {
        $dados = $_GET;
        unset($dados['route']);
      }
  
      return filter_var_array($dados, FILTER_SANITIZE_SPECIAL_CHARS);
    }//MethodGet
}