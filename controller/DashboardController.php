<?php

require_once 'config/AutoLoadConfig.php';

class DashboardController extends ControllerConfig 
{
    private $route,
            $aut,
            $objAdmin,
            $objContato,
            $objNotifc,
            $objPaci,
            $objAlert;

    public function __construct()
    {
        parent::__construct();
        $this->aut = AutenticadorConfig::instanciar();
        $this->objAdmin = new AdminDAO();
        $this->objContato = new ContatoDAO();
        $this->objNotifc = new NotificationsDAO();
        $this->objPaci = new PacienteDAO();
        $this->objAlert = new AlertasDAO();
        $this->route = RouteConfig::rotas();
    }

    public function viewLogin()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
            header("location: ?controller=Dashboard&action=viewDashBoard");
        } else
        {  
            $this->view->set('URL_INI', $this->route['URL_INI']);
            $this->view->render($this->route['LOGIN']);
        }
    }

    public function viewDashBoard()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie())
        {
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('cliData', $this->objPaci->returnPacients("dash"));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->render($this->route['DASHBOARD']);
        } else 
        {
            header('location: ?controller=Dashboard&action=viewLogin');
        }
    }

    public function viewMessage()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
 	        $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('dataTable', $this->objContato->returnTableContact());
            $this->view->set('qtdMen', $this->objContato->qtdMessager());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->render($this->route['VIEW_MESSAGE']);
        } else 
        {
            header('location: ?controller=Dashboard&action=viewLogin');
        }
    }

    #visualização dos alertas
    public function viewAlerts()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
            $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('dataTable', $this->objAlert->returnTableAlert());
            $this->view->set('qtdMen', $this->objContato->qtdMessager());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->render($this->route['VIEW_ALERTS']);
        } else 
        {
            header('location: ?controller=Dashboard&action=viewLogin');
        }
    }

    public function viewRespMessage()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {    
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('qtdMen', $this->objContato->qtdMessager());
            $this->view->set('dataMessage', $this->objContato->returnContactId($_GET['ref']));
            $this->view->render($this->route['RESP_MESSAGE']);
        } else
        {
            header('location: ?controller=Dashboard&action=viewLogin');
        }
    }

    public function login()
    {
        if ($this->aut->login(RequestConfig::getPost('email'),md5(RequestConfig::getPost('senha')))) 
        {
            #verifica se o usuário deseja se manter logado
            if(RequestConfig::getPost('manterConectado') == "logado")
            {
                #caso passar pelo método login, é porque os dados batem com o que está no servidor. Nesse caso será armazenado a hash criptografada no cookie.
                $this->aut->setPermanecerLogado(
                    RequestConfig::getPost('email'), 
                    md5(RequestConfig::getPost('senha'))
                );//Resolver problema de não poder salvar senha com criptografia no cookie.
            }

            echo "UserOK";

        } else 
        {
            echo "<p>Ops, email e/ou senha invalidos, tente novamente.</p>";
        }
    }

    #método para sair da página dashboard(Acredito que deve ser utilizado um session destroy)
    public function  sair()
    {
        #envia o usuário para fora do sistema
        $this->aut->sair();
        header("location: ?controller=Dashboard&action=viewLogin");
    }
}



