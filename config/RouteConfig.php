<?php
/**
 * Created by PhpStorm.
 * User: laender
 * Date: 10/09/15
 * Time: 11:32
 */
class RouteConfig 
{
    /**
     * @return array
     */
    public static function rotas()
    {
        return array(

            'HOME_PAGE_DIR'             =>  'home/home.php',
            'URL_INI'                   =>  '',
            'ACCESS_CONTROLLER'         =>  'controller/',
            'CONFIG_DIR'                =>  'config/',
            'VIEW_DIR'                  =>  'view/pages/',
            'MODEL_DIR'                 =>  'model/',
            'BLOG_DIR'                  =>  'blog/',
            'ARTIGO_ALL'                =>  'viewArtAll.php',
            'ARTIGO_ID'                 =>  'viewArtId.php',
            'MULTIMIDIA_DIR'            =>  'multimidia/',
            'VIEW_MOVIES'               =>  'multimidia/viewMovies.php',
            'DASHBOARD'                 =>  'dashboard/dashboard.php',
            'LOGIN'                     =>  'dashboard/login.php',
            'ADMIN_PAGE'                =>  'dashboard/adminPage.php',
            'ALL_PACIENTES'             =>  'dashboard/viewAllPacientes.php',
            'PRONTUARIO'                =>  'dashboard/viewProntuario.php',
            'SERVICOS'                  =>  'dashboard/viewServices.php',
            'EDIT_SERVICOS'             =>  'dashboard/editService.php',
            'VIEW_MESSAGE'              =>  'dashboard/viewMessager.php',
            'RESP_MESSAGE'              =>  'dashboard/viewRespMessager.php',
            'INSERT_ARTIG'              =>  'dashboard/insertArtigo.php',
            'ALL_ARTIGOS'               =>  'dashboard/viewAllArtigo.php',
            'EDIT_ARTIGO'               =>  'dashboard/viewEditArtigo.php',
            'CHECK01'                   =>  'checkout/check01.php',
            'CHECK02'                   =>  'checkout/check02.php',
            'CHECK03'                   =>  'checkout/check03.php',
            'VIEW_ALERTS'               =>  'dashboard/viewAlerts.php',
            'VIEW_TAREFAS'              =>  'dashboard/viewTarefaList.php',
            'VIEW_CALENDAR'             =>  'dashboard/viewCalendar.php'
        );
    }
}


