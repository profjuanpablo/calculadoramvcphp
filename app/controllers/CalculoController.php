<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Operacao;


class CalculoController extends Controller {

    public function index(){
        //chamo o load para que ele carregue a view que está sendo requerida pelo Controller que é PAI deste arquivo 
        $this->load("Calculo");
    }

    public function somar(){
        $objOperacao = new Operacao();
        $a = $_POST["a"];
        $b = $_POST["b"];

        $dados["a"] = $a;
        $dados["b"] = $b;
        $dados["resultado"] = $objOperacao->somar($a,$b);
        $this->load("Calculo",$dados);
    }
    

    public function subtrair(){
        $objOperacao = new Operacao();
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $objOperacao->subtrair($a,$b);
    }

    public function multiplicar(){
        $objOperacao = new Operacao();
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $objOperacao->multiplicar($a,$b);
    }

    public function dividir(){
        $objOperacao = new Operacao();
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo $objOperacao->dividir($a,$b);
    }


}