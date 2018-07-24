<?php

require_once 'config/AutoLoadConfig.php';

class PacienteController extends ControllerConfig 
{
    private $route, 
            $aut, 
            $objAdmin, 
            $objContato, 
            $objNotifc, 
            $objPaci, 
            $objAlert, 
            $objTime, 
            $objDataAtend;

    public function __construct()
    {
        parent::__construct();
        $this->sessao = SessaoConfig::instanciar();
        $this->aut = AutenticadorConfig::instanciar();
        $this->objAdmin = new AdminDAO();
        $this->objContato = new ContatoDAO();
        $this->objNotifc = new NotificationsDAO();
        $this->objPaci = new PacienteDAO();
        $this->objAlert = new AlertasDAO();
        $this->route = RouteConfig::rotas();
        $this->objTime = new DateTimeFunctions();
        $this->objDataAtend = new DataAtendimentoDAO();
    }

    public function viewAllPaci()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
 	        $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('cliData', $this->objPaci->returnPacients("Exclusiva"));
            $this->view->render($this->route['ALL_PACIENTES']);

       } else 
       {
            header("location: ?controller=Dashboard&action=viewLogin");
        }
    }

    public function viewProntuario()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
	        $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('notific', $this->objNotifc->returnNotific());							
            $this->view->set('paciData', $this->objPaci->pacienteData($_GET['ref'],$_GET['aler'])); //esse aqui na treta
	        $this->view->set('controleAtend', $this->objPaci->controleAtend($_GET['ref']));
            $this->view->render($this->route['PRONTUARIO']);
            
        } else 
        {
            header("location: ?controller=Dashboard&action=viewLogin");
        }
    }

    public function userUpdate()
    {
        $this->objPaci->updatePaciente
        (
            RequestConfig::getPost('id'),
            RequestConfig::getPost('nome'),
            RequestConfig::getPost('idade'),
            RequestConfig::getPost('tel'),
            RequestConfig::getPost('email'),
            RequestConfig::getPost('sexo'),
            RequestConfig::getPost('nasc'),
            RequestConfig::getPost('ensino'),
            RequestConfig::getPost('estadoCivil'),
            RequestConfig::getPost('profi'),
            RequestConfig::getPost('natura'),
            RequestConfig::getPost('ende'),
            RequestConfig::getPost('bai'),
            RequestConfig::getPost('cida'),
            RequestConfig::getPost('uf'),
            RequestConfig::getPost('pais'),
            RequestConfig::getPost('rg'),
            RequestConfig::getPost('cpf'),
            RequestConfig::getPost('email')
        );

        header("location: ?controller=Paciente&action=viewProntuario&ref=".RequestConfig::getPost('id'));
    }

    #solicita atualização dos dados do paciente
    public function atualiObs()
    {    
        $this->objPaci->updateObs
        (
            RequestConfig::getPost('texto'),
            RequestConfig::getPost('ref')
        );

	    header("location: ?controller=Paciente&action=viewProntuario&ref=".RequestConfig::getPost('ref'));
    }

	#persiste dados para lembrar usuário do dia do atendimento
    public function dataAtendPersist()
    {	
        $this->objDataAtend->insertDataAtend
        (
            RequestConfig::getPost('admRef'),
            RequestConfig::getPost('paciRef'),
            $this->objTime->dateTimeUsa($_POST['data']),
            RequestConfig::getPost('hora'),
            RequestConfig::getPost('mensagem'),
            RequestConfig::getPost('mutuo')
        );

	    header("location: ?controller=Paciente&action=viewProntuario&ref=".RequestConfig::getPost('paciRef'));
	}
}

