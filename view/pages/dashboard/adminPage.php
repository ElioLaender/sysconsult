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
    <title>Minha Conta</title>
    <!-- Vendor CSS -->
    <link href="view/assets/vendors-dash/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/nouislider/distribute/jquery.nouislider.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/farbtastic/farbtastic.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/chosen/chosen.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/summernote/dist/summernote.css" rel="stylesheet">

    <!-- CSS -->
    <link href="view/assets/css-dash/app.min.1.css" rel="stylesheet">
    <link href="view/assets/css-dash/app.min.2.css" rel="stylesheet">

    <!-- Following CSS are used only for the Demp purposes thus you can remove this anytime. -->
    <style type="text/css">
        .toggle-switch .ts-label {
            min-width: 130px;
        }
    </style>
</head>

<body class="toggled sw-toggled">
<input type='hidden' name='MAX_FILE_SIZE' value='10240000' />
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
            <li class="active"><a href="?controller=Dashboard&action=viewDashBoard"><i class="zmdi zmdi-view-dashboard"></i> Início</a></li>
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
            <li><a href="?controller=Admin&action=viewCalendar"><i class="zmdi zmdi-calendar"></i> Minha Agenda</a></li>
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
                <h2>Minha Conta:</h2>


            </div>

            <div class="card">
                <form method="post" action="?controller=Admin&action=alterInfoAdmin"  enctype="multipart/form-data">



                <div class="card-body card-padding">
                    <p class="c-black f-500 m-b-5">Mantenha seus dados atualizados</p>
                    <small>Formulario de dados pessoais do administrador da conta</small>

                    <br/><br/>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                <div class="fg-line">
                                    <input type="text" name="nome" class="form-control" value="<?php echo $userData[0]['admin_nome']; ?>" placeholder="Nome:">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                <div class="fg-line">
                                    <input type="text" name="sobrenome" class="form-control" value="<?php echo $userData[0]['admin_sobrenome']; ?>" placeholder="Sobrenome:">
                                </div>
                            </div>

                            <br/>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                <div class="fg-line">
                                    <input type="text"  name="tel" class="form-control" value="<?php echo $userData[0]['admin_tel']; ?>" placeholder="Telefone:">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control input-mask" name="nasc" value="<?php echo $userData[0]['admin_data_nasc']; ?>" data-mask="00/00/0000" placeholder="Data de nascimento">
                                </div>
                            </div>


                            <br/>


                            <?php

                            $masculino = '';
                            $feminino = '';

                            switch($userData[0]['admin_sexo']){

                                case "Masculino":    $masculino = "selected";break;
                                case "Feminino":     $feminino = "selected";break;

                            }

                            ?>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                <div class="fg-line">
                                    <div class="select">
                                        <select class="form-control" name="sexo">
                                            <option>Sexo</option>
                                            <option <?php echo $masculino; ?>>Masculino</option>
                                            <option <?php echo $feminino; ?>>Feminino</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <br/>

                            <?php

                                switch($userData[0]['admin_estato_civil']){

                                    case "solteiro":    $solteiro = "selected";break;
                                    case "casado":      $casado = "selected";break;
                                    case "divorciado":  $divorciado = "selected";break;
                                    case "viúvo":       $viuvo = "selected";break;
                                    case "outros":      $outros = "selected";break;

                                }

                            ?>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                <div class="fg-line">
                                    <div class="select">
                                        <select class="form-control" name="civil">
                                            <option>Estado Civil</option>
                                            <option <?php echo $solteiro; ?>>solteiro</option>
                                            <option <?php echo $casado; ?>>casado</option>
                                            <option <?php echo $divorciado; ?>>divorciado</option>
                                            <option <?php echo $viuvo; ?>>viúvo</option>
                                            <option <?php echo $outros; ?>>outros</option>

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <br/>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="end"  value="<?php echo $userData[0]['admin_endereco']; ?>" placeholder="Endereço">
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-6">

                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="comp" value="<?php echo $userData[0]['admin_complemento']; ?>" placeholder="Complemento">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-pin"></i></span>
                            </div>

                            <br/>


                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="bai" value="<?php echo $userData[0]['admin_bairro']; ?>" placeholder="Bairro">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-pin"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="cid" value="<?php echo $userData[0]['admin_cidade']; ?>" placeholder="Cidade">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-pin"></i></span>
                            </div>



                            <br/>

                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="uf" value="<?php echo $userData[0]['admin_estado']; ?>" placeholder="Estado">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-pin"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="pais" value="<?php echo $userData[0]['admin_pais']; ?>"  placeholder="País">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-pin"></i></span>
                            </div>

                            <br/>



                        <div class="col-sm-4">
                            <p class="f-500 c-black m-b-20">Imagem de perfil</p>

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Selecione uma imagem</span>
                                        <span class="fileinput-exists">Escolha</span>
                                        <input type="file" name="img" >
                                    </span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remover</a>
                                </div>
                            </div>
                        <br/><br/><br/>


                        </div>

                            <button type="submit" class="btn btn-primary btn-lg waves-effect" style="margin-top: 40%;">Salvar informações</button>


                                </form>




    </section>

    <section id="content">
        <div class="container">
            <div class="block-header">
                <h2>Gerenciar login e senha:</h2>


            </div>

            <div class="card">


                <div class="card-body card-padding">
                    <p class="c-black f-500 m-b-5">Modificar senha</p>
                    <small>Neste campo você pode alterar a sua senha. Caso desejar trocar de email entre em contato com o suporte - suporte@sysconsulte.com.br</small>

                    <br/><br/>
                    <div id="returnPass"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <fieldset disabled>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control" value="<?php echo $userData[0]['admin_email']; ?>" placeholder="login">
                                </div>
                            </div>
                                </fieldset>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                                <div class="fg-line">
                                    <input type="password"   id="newPass1" class="form-control" placeholder="Nova Senha">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                                <div class="fg-line">
                                    <input type="password" id="newPass2" class="form-control" placeholder="Repetir Senha">
                                </div>
                            </div>

                        <br/><br/><br/>

                            <button id="subPass" class="btn btn-primary btn-lg waves-effect">Alterar dados de acesso</button>
                          </div>



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

        <p>Carregando</p>
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
<script src="view/assets/js/upLog.js"></script>

<script src="view/assets/vendors-dash/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/Waves/dist/waves.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>

<script src="view/assets/vendors-dash/bower_components/moment/min/moment.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="view/assets/vendors-dash/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
<script src="view/assets/vendors-dash/summernote/dist/summernote-updated.min.js"></script>


<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="view/assets/vendors-dash/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="view/assets/vendors-dash/bower_components/chosen/chosen.jquery.min.js"></script>
<script src="view/assets/vendors-dash/fileinput/fileinput.min.js"></script>
<script src="view/assets/vendors-dash/input-mask/input-mask.min.js"></script>
<script src="view/assets/vendors-dash/farbtastic/farbtastic.min.js"></script>


<script src="view/assets/js-dash/functions.js"></script>
<script src="view/assets/js-dash/demo.js"></script>


</body>
</html>
