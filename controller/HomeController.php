<?php

require_once 'config/AutoLoadConfig.php';

class HomeController extends ControllerConfig 
{
    private $route,
            $objSer,
            $objAdmin,
            $objContact,
            $objNotifc;

    public function __construct()
    {
        parent::__construct();
        $this->objSer = new ServicosDAO();
        $this->objAdmin = new AdminDAO();
        $this->objContact = new ContatoDAO();
        $this->objNotifc = new NotificationsDAO();
        $this->route = RouteConfig::rotas();
    }

    public function index()
    {
        $this->view->set('adminData', $this->objAdmin->returnPersonInfo());
        $this->view->set('servicos',  $this->objSer->selectServices("viewUser"));
        $this->view->render($this->route['HOME_PAGE_DIR']);
	}

    public function persistContact()
    {
        $this->objNotifc->incrementMessager();
        $this->objContact->contatoPersist
        (
            $_POST['name'],
            $_POST['email'],
            $_POST['subject'],
            $_POST['message']
        );
    }

    public function deleteContact()
    {
	    $this->objContact->contactDelete($_GET['ref']);
	    header("location: ?controller=Dashboard&action=viewMessage");
    }
}
