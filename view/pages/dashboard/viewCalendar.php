<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta name="language" content="pt-br">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="SysConsulte Sistemas Para Consultórios">
    <meta name="description" content="Este é seu painel para administrar seu consultório online, estamos prontos para lhe atender da melhor forma possível.">
    <meta name="keywords" content="painel administrativo,gerenciar site,consultório online,login,sysconsulte administração">
    <title>Painel Administrativo</title>

    <!-- Vendor CSS -->
    <link href="view/assets/vendors-dash/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="view/assets/css-dash/app.min.1.css" rel="stylesheet">
    <link href="view/assets/css-dash/app.min.2.css" rel="stylesheet">

</head>
<body class="toggled sw-toggled">
<header id="header" class="clearfix" data-current-skin="blue">
    <ul class="header-inner">
        <li id="menu-trigger" data-trigger="#sidebar">
            <div class="line-wrap">
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li>

        <li class="logo hidden-xs">
            <a href="?controller=Dashboard&action=viewDashBoard"> <img src="view/assets/img-dash/logo@branco.png" alt="logo sysconsulte"></a>
        </li>

        <li class="pull-right">
            <ul class="top-menu">



                <li class="dropdown">
                    <a data-toggle="dropdown" href="">
                        <i class="tm-icon zmdi zmdi-email"></i>
                        <?php
                        if($notific[0]['notifications_messager'] > 0){
                            echo "<i class='tmn-counts'>".$notific[0]['notifications_messager']."</i>";
                        }
                        ?>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg pull-right">
                        <div class="listview">
                            <div class="lv-header">
                                Mensagens
                            </div>
                            <div class="lv-body">
                                <?php echo $mensagens; ?>
                            </div>
                            <a class="lv-footer" href="?controller=Dashboard&action=viewMessage">Ver todas</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="">
                        <i class="tm-icon zmdi zmdi-notifications"></i>
                        <?php
                        if($notific[0]['notifications_alerts'] > 0){
                            echo "<i class='tmn-counts'>".$notific[0]['notifications_alerts']."</i>";
                        }
                        ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg pull-right">
                        <div class="listview" id="notifications">
                            <div class="lv-header">
                                Notificações

                                <ul class="actions">
                                    <li class="dropdown">
                                        <a href="" data-clear="notification">
                                            <i class="zmdi zmdi-check-all"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lv-body">
                                <?php echo $alerts; ?>
                            </div>

                            <a class="lv-footer" href="?controller=Dashboard&action=viewAlerts">Ver Todas</a>
                        </div>

                    </div>
                </li>
            </ul>
        </li>
    </ul>


</header>
<section id="main" data-layout="layout-1">
    <aside id="sidebar" class="sidebar c-overflow">
        <div class="profile-menu">
            <a href="">
                <div class="profile-pic">
                    <img src="<?php echo $userData[0]['admin_ft_profile']; ?>" alt="">
                </div>

                <div class="profile-info">
                    <?php echo $userData[0]['admin_nome']; ?>

                    <i class="zmdi zmdi-caret-down"></i>
                </div>
            </a>

            <ul class="main-menu">

                <li>
                    <a href="?controller=Admin&action=viewAdminPage"><i class="zmdi zmdi-settings"></i> Minha Conta</a>
                </li>
                <li>
                    <a href="?controller=Dashboard&action=sair"><i class="zmdi zmdi-time-restore"></i> Sair</a>
                </li>
            </ul>
        </div>

          <ul class="main-menu">
                <li><a href="?controller=Dashboard&action=viewDashBoard"><i class="zmdi zmdi-view-dashboard"></i> Início</a></li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-view-web"></i> Gerenciar Página</a>
                    <ul>
                        <li class="sub-menu">
                            <a href="">Meus Artigos</a>
                            <ul>
                                <li><a href="?controller=Blog&action=viewInsertArtigo">Criar Novo Artigo</a></li>
                                <li><a href="?controller=Blog&action=viewArtigos">Visualizar Artigos</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="?controller=Paciente&action=viewAllPaci"><i class="zmdi zmdi-folder-person"></i> Meus Pacientes</a></li>
                <li><a href="?controller=Admin&action=viewServices"><i class="zmdi zmdi-hospital"></i> Gerenciar Serviços</a></li>
                <li><a href="?controller=Admin&action=viewTarefaList"><i class="zmdi zmdi-tv-list"></i> Lista de Tarefas</a></li>
                <li class="active"><a href="?controller=Admin&action=viewCalendar"><i class="zmdi zmdi-calendar"></i> Minha Agenda</a></li>
                <li><a href="?controller=Dashboard&action=viewMessage"><i class="tm-icon zmdi zmdi-email"></i> Caixa de Mensagens (<?php echo $qtdMen; ?>)</a></li>
                <li><a href="?controller=Dashboard&action=viewAlerts"><i class="tm-icon zmdi zmdi-notifications"></i> Notificações (<?php echo $qtdNotifi; ?>)</a></li>
                 <li><a href="?controller=Home&action=index"><i class="tm-icon zmdi zmdi-globe-alt"></i>Ir Para meu Site</a></li>
            </ul>
    </aside>

    <aside id="chat" class="sidebar c-overflow">

        <div class="chat-search">
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Search People">
            </div>
        </div>

        <div class="listview">

        </div>
    </aside>


    <section id="content">
        <div class="container">
            <div class="block-header">
                <h2>Atualize sua agenda</h2>

            </div>

            <!--
            <div class="card">
                <div class="card-header">
                    <h2>Sales Statistics <small>Vestibulum purus quam scelerisque, mollis nonummy metus</small></h2>

                    <ul class="actions">
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-refresh-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-download"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="">Change Date Range</a>
                                </li>
                                <li>
                                    <a href="">Change Graph Type</a>
                                </li>
                                <li>
                                    <a href="">Other Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <div class="chart-edge">
                        <div id="curved-line-chart" class="flot-chart "></div>
                    </div>
                </div>
            </div>
            -->




            <div class="dash-widgets">
                <div class="row">

                    <!-- bloco disponível -->

                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- Calendar -->
                    <div id="calendar-widget"></div>
                </div>

                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>
</section>

<footer id="footer">
    Copyright &copy; 2016 SysConsulte

</footer>

<!-- Page Loader -->
<div class="page-loader">
    <div class="preloader pls-blue">
        <svg class="pl-circular" viewBox="25 25 50 50">
            <circle class="plc-path" cx="50" cy="50" r="20" />
        </svg>

        <p>Carregando...</p>
    </div>
</div>

<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1 class="c-white">Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="view/assets/img-dash/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="view/assets/img-dash/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="view/assets/img-dash/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="view/assets/img-dash/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="view/assets/img-dash/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<!-- Javascript Libraries -->
<script src="view/assets/vendors-dash/bower_components/jquery/dist/jquery.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="view/assets/vendors-dash/bower_components/flot/jquery.flot.js"></script>
<script src="view/assets/vendors-dash/bower_components/flot/jquery.flot.resize.js"></script>
<script src="view/assets/vendors-dash/bower_components/flot.curvedlines/curvedLines.js"></script>
<script src="view/assets/vendors-dash/sparklines/jquery.sparkline.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

<script src="view/assets/vendors-dash/bower_components/moment/min/moment.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
<script src="view/assets/vendors-dash/bower_components/fullcalendar/dist/pt-br.js "></script>
<script src="view/assets/vendors-dash/bower_components/simpleWeather/jquery.simpleWeather.min.js">
</script>
<script src="view/assets/vendors-dash/bower_components/Waves/dist/waves.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="view/assets/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="view/assets/js-dash/flot-charts/curved-line-chart.js"></script>
<script src="view/assets/js-dash/flot-charts/line-chart.js"></script>
<script src="view/assets/js-dash/charts.js"></script>

<script src="view/assets/js-dash/charts.js"></script>
<script src="view/assets/js-dash/functions.js"></script>
<script src="view/assets/js-dash/demo.js"></script>


</body>
</html>
