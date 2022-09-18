<?php

namespace App\Controllers;

use App\Models\Eleitor;
use Core\DataLayer\Connect;
use Core\DataLayer\Methods;
use DateTime;

class Home
{
    public function index()
    {
        $eleitor = new Eleitor();
        $ele = $eleitor->find()->fetch(true);
        include_once __DIR__ . "/../../Views/layout.php";
    }

    public function listResult()
    {
        $eleitor = new Eleitor();
        $ele = $eleitor->find()->fetch(true);
        $count = $eleitor->find()->count();
        include_once __DIR__ . "/../../Views/result.php";
    }

    public function create()
    {
        $dados = Methods::post();
        $error = '';

        $eleitor = new Eleitor();
        foreach ($dados as $key => $value) {
            $eleitor->$key = $value;
        }

        if($eleitor->idade < 16){
            $_SESSION["Error"] = "Você não pode votar";
            header("location: http://localhost/sistema_de_votos");
            return;
        }

        if (!$eleitor->save()) {
            $_SESSION["Error"]=  $eleitor->fail()->getMessage();
          
        }

        header("location: http://localhost/sistema_de_votos");
    }
}
