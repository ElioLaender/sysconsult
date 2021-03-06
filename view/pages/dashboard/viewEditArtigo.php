<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pacientes - SysConsulte</title>

    <!-- Vendor CSS -->
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
<section id="main">
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

            <li><a href="?controller=Paciente&action=viewAllPaci"><i class="zmdi zmdi-folder-person"></i> Meus pacientes</a></li>

            <li><a href="?controller=Admin&action=viewServices"><i class="zmdi zmdi-hospital"></i> Meus Planos</a></li>

            <li><a href="?controller=Admin&action=viewServices"><i class="zmdi zmdi-file-text"></i> Emitir declaração</a></li>

            <li><a href="?controller=Dashboard&action=viewMessage"><i class="zmdi zmdi-account-box-mail"></i> Caixa de mensagens (3)</a></li>

            <li><a href="?controller=Home&action=index"><i class="zmdi zmdi-globe"></i> Notificações (12)</a></li>

            <li><a href="?controller=Home&action=index"><i class="zmdi zmdi-view-web"></i> Ver site</a></li>
        </ul>
    </aside>

    <aside id="chat" class="sidebar c-overflow">

        <div class="chat-search">
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Search People">
            </div>
        </div>

        <div class="listview">
            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left p-relative">
                        <img class="lv-img-sm" src="view/assets/img-dash/profile-pics/2.jpg" alt="">
                        <i class="chat-status-busy"></i>
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Jonathan Morris</div>
                        <small class="lv-small">Available</small>
                    </div>
                </div>
            </a>

            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left">
                        <img class="lv-img-sm" src="view/assets/img-dash/profile-pics/1.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="lv-title">David Belle</div>
                        <small class="lv-small">Last seen 3 hours ago</small>
                    </div>
                </div>
            </a>

            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left p-relative">
                        <img class="lv-img-sm" src="view/assets/img-dash/profile-pics/3.jpg" alt="">
                        <i class="chat-status-online"></i>
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Fredric Mitchell Jr.</div>
                        <small class="lv-small">Availble</small>
                    </div>
                </div>
            </a>

            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left p-relative">
                        <img class="lv-img-sm" src="view/assets/img-dash/profile-pics/4.jpg" alt="">
                        <i class="chat-status-online"></i>
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Glenn Jecobs</div>
                        <small class="lv-small">Availble</small>
                    </div>
                </div>
            </a>

            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left">
                        <img class="lv-img-sm" src="view/assets/img-dash/profile-pics/5.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Bill Phillips</div>
                        <small class="lv-small">Last seen 3 days ago</small>
                    </div>
                </div>
            </a>

            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left">
                        <img class="lv-img-sm" src="view/assets/img-dash/profile-pics/6.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Wendy Mitchell</div>
                        <small class="lv-small">Last seen 2 minutes ago</small>
                    </div>
                </div>
            </a>
            <a class="lv-item" href="">
                <div class="media">
                    <div class="pull-left p-relative">
                        <img class="lv-img-sm" src="view/assets/img-dash/profile-pics/7.jpg" alt="">
                        <i class="chat-status-busy"></i>
                    </div>
                    <div class="media-body">
                        <div class="lv-title">Teena Bell Ann</div>
                        <small class="lv-small">Busy</small>
                    </div>
                </div>
            </a>
        </div>
    </aside>


    <section id="content">
        <div class="container">
            <div class="block-header">
                <h2><a href="?controller=Dashboard&action=viewDashBoard"> Dashboard <i class="zmdi zmdi-chevron-left"> </i></a>  <strong><a href="">Editar Artigo</a></strong></h2>
            </div>

            <div class="card">
                <div class="card-header">

                    <!-- -->
                    <form method="post" action="?controller=Blog&action=updateArtigo"  enctype="multipart/form-data">

                        <div class="card-body card-padding">

                            <h2>Editar Artigo<small>Campo destinado a edição de arquivos</small></h2>
                            <br/><br/>


                            <img src="<?php echo $dataArtigo[0]['artigo_ft_capa']; ?>" style="width: 25%; box-shadow: 5px 9px 3px #bdc3c7;">
                            <div class="col-sm-4" >

                                <p class="f-500 c-black m-b-20"></p>

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                    <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Substituir imagem</span>
                                        <span class="fileinput-exists">Escolha</span>
                                        <input type="file" name="img" >
                                    </span>
                                        <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remover</a>
                                    </div>
                                </div>
                                <br/><br/><br/>


                            </div>
                            <br/><br/><br/><br/><br/><br/>
                            <div class="row">

                                <div class="col-sm-12">

                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-comment-alt-text"></i></span>
                                        <div class="fg-line">
                                            <input type="text" name="titulo" class="form-control" value="<?php echo $dataArtigo[0]['artigo_titulo']; ?>" placeholder="Assunto">
                                        </div>
                                    </div>

                                    <br/><br/>


                                    <div class="card-body card-padding">

                                        <div class="form-group">
                                            <div class="fg-line">
                                                <textarea class="form-control auto-size" name="texto" placeholder="Digite as observações..."><?php echo $dataArtigo[0]['artigo_texto']; ?></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <input type="hidden" name="ref" value="<?php echo $dataArtigo[0]['artigo_id']; ?>">
                                    <br/><br/>
                                    <button type="submit" class="btn btn-primary btn-lg waves-effect">Atualizar artigo</button>

                    </form>


                    <!-- -->

                </div>


            </div>

            <!-- //////////////////////////////////////////////////////////////// -->







    </section>
</section>

<footer id="footer">
    Copyright &copy; 2016 SysConsulte

    <ul class="f-menu">
        <li><a href="">Home</a></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Reports</a></li>
        <li><a href="">Support</a></li>
        <li><a href="">Contact</a></li>
    </ul>
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
<script src="view/assets/vendors-dash/fileinput/fileinput.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/Waves/dist/waves.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/autosize/dist/autosize.min.js"></script>
<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="view/assets/vendors-dash/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="view/assets/js-dash/functions.js"></script>
<script src="view/assets/js-dash/demo.js"></script>




</body>
</html>
