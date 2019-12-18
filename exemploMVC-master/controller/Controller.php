<?php

include_once("model/Model.php");

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke($acao = 'home') {
        $reslt = $this->model->getLogin();

        switch ($reslt) {
            case 'login':
                $acao = 'logado';
                break;
        }
        // Chama a funcao getLogin() da classe Model
        // e armazena o valor de retorno dessa funcao
        // na variavel reslt.
        switch ($acao) {
            case 'will':
                $this->showTelaWill();
                break;

            case 'home':
                $this->showConteudoInicialView();
                break;
            case 'login':
                $this->showTelaLoginView();
                break;
            case 'logout':
                $this->showTelaDeLogoutView();
                break;
            case 'logado':
                $this->showTelaDeLogadoView();
                break;
            case 'perfil':
                $this->showTelaDePerfilView();
                break;
		case 'claudio':
		$this->showTelaClaudio();
		break;

        }
    }
    
    private function showConteudoInicialView(){
        include 'view/conteudoInicialView.php';
    }
    
    private function showTelaLoginView(){
        include 'view/telaLoginView.php';
    }
    
    private function showTelaDeLogoutView(){
        $custom = "ahahaha"; //mysql_
        include 'view/telaLogoutView.php';
    }

    private function showTelaDeLogadoView(){
        include 'view/TelaLogado.php';
    }
    private function showTelaDePerfilView(){
        include 'view/TelaPerfil.php';
    }

	private function showTelaClaudio(){
include 'view/c.php';
}

    private function showTelaWill(){
include 'view/w.php';
}
    
}

?>
