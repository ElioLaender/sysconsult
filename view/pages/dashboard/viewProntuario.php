	<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prontuário - SysConsulte</title>
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

<!--h1><?php //echo var_dump($paciData); ?></h1-->
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
                <h2>Prontuário - <?php echo $paciData[0]['paciente_nome']; ?></h2>



            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Dados Pessoais<small></small></h2>
                </div>

                <form method="post" action="?controller=Paciente&action=userUpdate"  enctype="multipart/form-data">

                <div class="card-body card-padding">
                    <p class="c-black f-500"></p>

                    <div class="form-group">
                        <div class="fg-line">
                            <input type="text" class="form-control input-sm" name="nome" value="<?php echo $paciData[0]['paciente_nome']; ?>" placeholder="Nome Completo">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="number" class="form-control" name="idade" value="<?php echo $paciData[0]['paciente_idade']; ?>" placeholder="Idade">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control input-mask" name="nasc" value="<?php echo $paciData[0]['paciente_data_nasc']; ?>"  data-mask="00/00/0000" placeholder="Data de nascimento">
                                </div>
                            </div>
                        </div>

                        <?php

                        switch($paciData[0]['paciente_sexo']){

                            case "Masculino":    $masculino = "selected";break;
                            case "Feminino":     $feminino = "selected";break;

                        }

                        ?>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <select class="form-control" name="sexo">
                                        <option>Sexo</option>
                                        <option <?php echo $masculino; ?>>Masculino</option>
                                        <option <?php echo $feminino; ?>>Feminino</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <?php

                        switch($paciData[0]['paciente_escolaridade']){

                            case "Ensino Fundamental": $funda = "selected";break;
                            case "Ensino Médio": $medio = "selected";break;
                            case "Ensino Superior Incompleto":$supInc = "selected";break;
                            case "Ensino Superior Completo":  $supCom = "selected";break;
                            case "Outros":$outros = "selected";break;

                        }

                        ?>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <select class="form-control" name="ensino">
                                        <option>Grau de escolaridade</option>
                                        <option <?php echo $funda; ?>>Ensino Fundamental</option>
                                        <option <?php echo $medio; ?>>Ensino Médio</option>
                                        <option <?php echo $supInc; ?>>Ensino Superior Incompleto</option>
                                        <option <?php echo $supCom; ?>>Ensino Superior Completo</option>
                                        <option <?php echo $outros ; ?>>Outros</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <?php

                        switch($paciData[0]['paciente_estado_civil']){

                            case "solteiro":    $solteiro = "selected";break;
                            case "casado":      $casado = "selected";break;
                            case "divorciado":  $divorciado = "selected";break;
                            case "viúvo":       $viuvo = "selected";break;
                            case "outros":      $outros = "selected";break;

                        }

                        ?>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <select class="form-control" name="estadoCivil">
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

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="profi" value="<?php echo $paciData[0]['paciente_profi']; ?>" placeholder="Profissão">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="natura" value="<?php echo $paciData[0]['paciente_naturalidade']; ?>" placeholder="Naturalidade">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="tel" value="<?php echo $paciData[0]['paciente_tel']; ?>" placeholder="Telefone">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="email" value="<?php echo $paciData[0]['paciente_email']; ?>" placeholder="email">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="rg" value="<?php echo $paciData[0]['paciente_rg']; ?>" placeholder="RG">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" name="cpf" value="<?php echo $paciData[0]['paciente_cpf']; ?>" placeholder="CPF">
                                </div>
                            </div>
                        </div>

                    </div>

                    <br/>
                    <h4>Endereço<small></small></h4><br/>


                    <div class="">
                        <div class="form-group">
                            <div class="fg-line">
                                <input type="text" class="form-control" name="ende" value="<?php echo $paciData[0]['paciente_endereco']; ?>" placeholder="Endereco">
                            </div>
                        </div>
                    </div>


                    <div class="">
                        <div class="form-group">
                            <div class="fg-line">
                                <input type="text" class="form-control" name="bai" value="<?php echo $paciData[0]['paciente_bairro']; ?>" placeholder="Bairro">
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group">
                            <div class="fg-line">
                                <input type="text" class="form-control" name="cida" value="<?php echo $paciData[0]['paciente_cidade']; ?>" placeholder="Cidade">
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group">
                            <div class="fg-line">
                                <input type="text" class="form-control" name="uf" value="<?php echo $paciData[0]['paciente_estado']; ?>" placeholder="Estado">
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group">
                            <div class="fg-line">
                                <input type="text" class="form-control" name="pais" value="<?php echo $paciData[0]['paciente_pais']; ?>" placeholder="País">
                            </div>
                        </div>
                    </div>
			<input type="hidden" name="id" value="<?php echo $paciData[0]['paciente_id']; ?>" />
                    <br/>

                    <button type="submit" class="btn btn-primary btn-lg waves-effect">Salvar alterações</button>


                    </form>

                </div><!-- encerra primeiro bloco -->
            </div>


	 <div class="card">


                <form method="post" action="?controller=Paciente&action=atualiObs"  enctype="multipart/form-data">

                <div class="card-header">
                    <h2>Observações adicionais<small>Campo destinado a informações adicionais sobre o atendimento</small></h2>


                <div class="card-body card-padding">

                    <div class="form-group">
                        <div class="fg-line">
                            <textarea class="form-control auto-size" placeholder="Digite as observações..." name="texto" value="<?php echo $paciData[0]['paciente_obs']; ?>"><?php echo $paciData[0]['paciente_obs']; ?></textarea>
			<input type="hidden" name="ref" value="<?php echo $paciData[0]['paciente_id']; ?>" />
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-lg waves-effect">Salvar Observações</button>
		
		</div>
                </form>

                </div>


        <div class="card">
            <div class="card-header">
                <h2>Controle de Atendimentos <small>Visualize os atendimentos solicitados por <?php echo $paciData[0]['paciente_nome']; ?></small></h2>
            </div>	

            <div class="table-responsive">
                <?php echo $controleAtend; ?>
            </div>
        </div>


            <!-- campo de mensagns -->
            <div class="card">
                <div class="card-header">
                    <h4>Envio de mensagem: <br/><small>Envie uma mensagem para o email do seu paciente, basta preencher os dados e enviar. Atenção, essa mensagem não terá direito a retorno, o paciente também será notificado. Não se preocupe, será passado seus dados para que o paciente possa entrar em contato. </small></h4>
                    <br/><br/>
                <form method="post" action="?controller=Email&action=senderPacienteMessager"  enctype="multipart/form-data">

                <div class="form-group fg-float col-sm-12">
                    <div class="fg-line">
                        <input type="text" class="input-sm form-control fg-input" name="assunto">
                        <label class="fg-label">Assunto:</label>
                    </div>
                </div>

                <br/><br/><br/><br/><br/>
                <div class="form-group fg-float col-sm-12">
                    <div class="fg-line">
                        <textarea class="form-control" rows="5" name="mensagem"></textarea>
                        <label class="fg-label">Escreva aqui sua mensagem:</label>
                    </div>
			<!-- Nome e email do destinatário -->
			<input type="hidden" name="nome" value="<?php echo $userData[0]['admin_nome']; ?>" />
			<input type="hidden" name="email" value="<?php echo $userData[0]['admin_email']; ?>" />
			<input type="hidden" name="tel" value="<?php echo $userData[0]['admin_tel']; ?>" />
			<input type="hidden" name="ref" value="<?php echo $paciData[0]['paciente_id']; ?>" />
			<input type="hidden" name="emailPaci" value="<?php echo $paciData[0]['paciente_email']; ?>" />
			<input type="hidden" name="nomePaci" value="<?php echo $paciData[0]['paciente_nome']; ?>" />
                    <br/> <br/>
                </div>

		
                <br/>


                <button type="submit" class="btn btn-primary btn-lg waves-effect">Enviar Mensagem</button>


                </form>

                <br/>

                </div>

            </div>

            <!-- campo de mensagns -->


            <!-- campo de notificações -->
            <div class="card">
                <div class="card-header">
                    <h4>Enviar Notificações: <br/><small>Notifique seu paciente para que ele receba um aviso por email lembrando da consulta no dia da data especificada.</small></h4>
                <br/>
		<form method="post" action="?controller=Paciente&action=dataAtendPersist"  enctype="multipart/form-data">

                <div class="form-group fg-float col-sm-6">
                    <div class="fg-line">
                        <input type="text" class="form-control input-mask" name="data"   data-mask="00/00/0000" >
                        <label class="fg-label">Data do atendimento: (Ex: 20/12/2016)</label>
                    </div>
                </div>

                <div class="form-group fg-float col-sm-6">
                    <div class="fg-line">
                        <input type="text" class="form-control input-mask" name="hora"   data-mask="00:00"  >
                        <label class="fg-label">Horário: (Ex: 14:30)</label>
                    </div>
                </div>


                <br/><br/><br/><br/><br/>
                <div class="form-group fg-float col-sm-12">
                    <div class="fg-line">
                        <textarea class="form-control" rows="5" name="mensagem" placeholder=""></textarea>
                        <label class="fg-label">Observações referente ao atendimento:</label>
                    </div>
                </div>

                <div class="card-header">
                     <h4>Receber Notificações: <br/><small>Também deseja receber receber no seu email uma notificação alertando sobre o dia da consulta deste paciente?</small></h4>
                </div>

                <div class="form-group fg-float col-sm-12" style="margin-left: 20px;">
                    <div class="toggle-switch ">
                        <span style="margin-right: 10px;">INATIVADO </span>
                        <input id="tw-switch" type="checkbox" name="mutuo" value="1" hidden="hidden">
                        <label for="tw-switch" class="ts-helper" ></label>
                        <span style="margin-left: 10px;"> ATIVADO</span>

                    </div>
                </div>
		<input type="hidden" name="admRef" value="<?php echo $userData[0]['admin_id']; ?>" />
		<input type="hidden" name="paciRef" value="<?php echo $paciData[0]['paciente_id']; ?>" />

                    <br/><br/><br/><br/><br/>

                <button type="submit" class="btn btn-primary btn-lg waves-effect">Salvar Notificações</button>


                </form>


                </div>
            </div>

            <!-- campo de notificações -->

           
            </div>


            </div>
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

<script src="view/assets/vendors-dash/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/Waves/dist/waves.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
<script src="view/assets/vendors-dash/bower_components/autosize/dist/autosize.min.js"></script>
<script src="view/assets/vendors-dash/input-mask/input-mask.min.js"></script>
<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="view/assets/vendors-dash/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="view/assets/js-dash/functions.js"></script>
<script src="view/assets/js-dash/demo.js"></script>


</body>
</html>
