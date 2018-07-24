<?php

require_once 'config/AutoLoadConfig.php';

class AdminController extends ControllerConfig {

    private $route,
            $aut,
            $objContato,
            $objAdmin,
            $objAlert,
            $objSer;

    public function __construct()
    {
        parent::__construct();
        $this->aut = AutenticadorConfig::instanciar();
        $this->route = RouteConfig::rotas();
        $this->objContato = new ContatoDAO();
        $this->objAdmin = new AdminDAO();
        $this->objNotifc = new NotificationsDAO();
        $this->objAlert = new AlertasDAO();
        $this->objSer = new ServicosDAO();
        $this->objPaci = new PacienteDAO(); 
    }

    public function viewAdminPage(){

        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
	        $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->render($this->route['ADMIN_PAGE']);
        } else 
        {
            header("location: ?controller=Dashboard&action=viewLogin");
        }
    }

    #altera as informações do usuáiro
    public function alterInfoAdmin(){

        $objUp = new UploadController();
        //$objCurControl->upLoadImag('upload/user-images/')
        $this->objAdmin->adminUpdate(
            $this->objAdmin->returnInfUser($this->aut->pegar_usuario()),
            RequestConfig::getPost('nome'),
            RequestConfig::getPost('sobrenome'),
            RequestConfig::getPost('tel'),
            RequestConfig::getPost('sexo'),
            RequestConfig::getPost('civil'),
            RequestConfig::getPost('end'),
            RequestConfig::getPost('comp'),
            RequestConfig::getPost('bai'),
            RequestConfig::getPost('cid'),
            RequestConfig::getPost('uf'),
            RequestConfig::getPost('pais'),
            $objUp->upLoadImag("Uploads/img-capa-dash/")
        );
    }

    #atualiza dados de login e senha
    public function logUp()
    {  
        $this->objAdmin->loginUpdate(RequestConfig::getPost('pass'),$this->aut->pegar_usuario());
    }

    public function viewServices(){

        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
	        $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('tableService', $this->objSer->selectServices("listTable"));
            $this->view->render($this->route['SERVICOS']);

        } else 
        {
            header("location: ?controller=Dashboard&action=viewLogin");
        }
    }

    public function viewEditService()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
	        $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('dataService', $this->objSer->returnSerId(RequestConfig::getRequest('ref')));
            $this->view->render($this->route['EDIT_SERVICOS']);
        } else 
        {
            header("location: ?controller=Admin&action=viewServices");
        }
    }

    #insere serviços na base de dados
    public function newService()
    {
        $this->objSer->insertService(
            RequestConfig::getPost('nomePla'),
            RequestConfig::getPost('precoPla'),
            RequestConfig::getPost('list1'),
            RequestConfig::getPost('list2'),
            RequestConfig::getPost('list3'),
            RequestConfig::getPost('list4')
        );

        header("location: ?controller=Admin&action=viewServices");
    }

    #atualiza dserviços na base de dados
    public function serviceUpdate()
    {
        $this->objSer->updateServices(
            RequestConfig::getPost('serRef'),
            RequestConfig::getPost('nome'),
            RequestConfig::getPost('preco'),
            RequestConfig::getPost('list1'),
            RequestConfig::getPost('list2'),
            RequestConfig::getPost('list3'),
            RequestConfig::getPost('list4')
        );

        header("location: ?controller=Admin&action=viewServices");
    }

    #deleta o serviço passado como argumento
    public function deletePla()
    {   
        $this->objSer->deleteService(RequestConfig::getRequest('ref'));
        header("location: ?controller=Admin&action=viewServices");
    }

	#deleta alerta na base de dados
    public function alertDel()
    {
		$this->objAlert->deleteAlert($_GET['ref']);
		header("location: ?controller=Dashboard&action=viewAlerts");
	}

    public function viewTarefaList()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('cliData', $objPaci->returnPacients("dash"));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->render($this->route['VIEW_TAREFAS']);
        } else 
        {
            header('location: ?controller=Dashboard&action=viewLogin');
        }
    }

   	#renderiza página dos calendários
    public function viewCalendar()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {    
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('cliData', $objPaci->returnPacients("dash"));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->render($this->route['VIEW_CALENDAR']);
        } else 
        {
            header('location: ?controller=Dashboard&action=viewLogin');
        }
    }
}

