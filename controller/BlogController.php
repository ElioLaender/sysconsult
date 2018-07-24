<?php

require_once 'config/AutoLoadConfig.php';

class BlogController extends ControllerConfig 
{
    private $route,
    $aut,
    $objArt,
    $objAdmin,
    $objContato,
    $objNotifc,
    $objAlert,
    $objUp,
    $objArti;

    public function __construct()
    {
        parent::__construct();
        $this->objArt = new ArtigoDAO();
        $this->objAdmin = new AdminDAO();
        $this->route = RouteConfig::rotas();
        $this->aut = AutenticadorConfig::instanciar();
        $this->objContato = new ContatoDAO();
        $this->objNotifc = new NotificationsDAO();
        $this->objAlert = new AlertasDAO();
        $this->objUp = new UploadController();  
    }

    #chama a tela para todos os posts
    public function viewPosts()
    {
        $this->view->set('URL_INI', $this->route['URL_INI']);
        $this->view->set('introPosts', $this->objArt->selectArticleAll("viewUser"));
        $this->view->set('adminData', $this->objAdmin->returnPersonInfo());
        $this->view->render($this->route['BLOG_DIR'].$this->route['ARTIGO_ALL']);
    }

    #Lista a prévia de todos os posts existentes
    public function postList($iniInterval,$endInterval)
    {
        #receberá os dados de acordo com a paginação
    }

    #chama a tela do post por id
    public function showPostId()
    {
        $this->view->set('URL_INI', $this->route['URL_INI']);
        $this->view->set('introPosts', $this->objArt->selectArticleAll("viewUser"));
        $this->view->set('adminData', $this->objAdmin->returnPersonInfo());
        $this->view->set('artigo', $this->objArt->selectArticleId($_GET['ref']));
        $this->view->render($this->route['BLOG_DIR'].$this->route['ARTIGO_ID']);
    }

    public function viewInsertArtigo()
    {
        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
            $ref = 0;
            if(isset($_GET['ref'])) $ref = $_GET['ref'];

            $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('dataMessage', $this->objContato->returnContactId($ref));
            $this->view->render($this->route['INSERT_ARTIG']);
        } else 
        {
            header('location: ?controller=Dashboard&action=viewLogin');
        }
    }

    public function viewEditArtigo(){

        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
            $this->view->set('qtdMen', $this->objContato->qtdMessager());
	        $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('dataArtigo', $this->objArt->selectArticleId($_GET['ref']));
            $this->view->render($this->route['EDIT_ARTIGO']);
        } else 
        {
            header('location: ?controller=Dashboard&action=viewLogin');
        }
    }

    public function viewArtigos(){

        if ($this->aut->esta_logado() || $this->aut->login_cookie()) 
        {
            $ref = 0;
            if(isset($_GET['ref'])) $ref = $_GET['ref'];

            $this->view->set('qtdMen', $this->objContato->qtdMessager());
            $this->view->set('qtdNotifi', $this->objAlert->qtdNotifi());
            $this->view->set('alerts', $this->objAlert->alertGeneretor());
            $this->view->set('userData', $this->objAdmin->returnInfUser($this->aut->pegar_usuario()));
            $this->view->set('mensagens', $this->objContato->returnContact());
            $this->view->set('notific', $this->objNotifc->returnNotific());
            $this->view->set('dataMessage', $this->objContato->returnContactId($ref));
            $this->view->set('introPosts', $this->objArt->selectArticleAll("viewDash"));
            $this->view->render($this->route['ALL_ARTIGOS']);
        } else 
        {
            header('location: ?controller=Dashboard&action=viewLogin');
        }
    }

    public function insertArtigo()
    {
        $this->objArti->newArticle($_POST['titulo'],$_POST['texto'],$this->objUp->upLoadImag("Uploads/img-capa-artigos/"));
        header("location: ?controller=Blog&action=viewArtigos");
    }

    public function updateArtigo()
    {
        $this->objArti->updateArticle($_POST['titulo'],$_POST['texto'],$this->objUp->upLoadImag("Uploads/img-capa-artigos/"),$_POST['ref']);
        header("location: ?controller=Blog&action=viewArtigos");
    }

    public function deleteArtigo()
    {
        $this->objArti->articleDelet($_GET['ref']);
        header("location: ?controller=Blog&action=viewArtigos");
    }
}

