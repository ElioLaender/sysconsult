<!DOCTYPE html>
<html lang="pt">
<head>
    <meta name="language" content="pt-br">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ExpressaHost sistemas para web">
    <meta name="description" content="Mostre seus produtos online, assim você pode trablhar seus clientes de maneira eficiente.">
    <meta name="keywords" content="site para apresentação de produtos, site liderança,site cométicos,site marketing.">
    <!--title-->
    <title>Site para Pscólogo</title>

    <!--CSS-->
    <link href="view/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="view/assets/css/animation.css" rel="stylesheet">
    <link href="view/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="view/assets/css/vegas.min.css" rel="stylesheet">
    <link href="view/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="view/assets/css/main.css" rel="stylesheet">
    <link href="view/assets/css/responsive.css" rel="stylesheet">
    <link href="view/assets/css/estilo.css" rel="stylesheet">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="view/assets/js/html5shiv.js"></script>
    <script src="view/assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="view/assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="view/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="view/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="view/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="view/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>


<div id="navigation">
    <div class="navbar" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Menu Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="nome"><span>Adriano CRP: 11-447xxx</span>
                    <img class="img-responsive" src="view/assets/images/others/overview.jpg" alt="Imagem do psicólogo" />
                </p>
            </div>
            <nav id="main-menu" class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#slider-section">Início</a></li> </a></li>
                    <li><a href="#overview">Sobre</a></li>
                    <li><a href="#description">O que faço</a></li>
                    <li><a href="#video-section">Vídeos</a></li>
                    <li><a href="#product-details">Abordagens</a></li>
                    <li><a href="#pricing-section">Consultas</a></li>
                    <li><a href="?controller=Blog&action=viewPosts">Artigos</a></li>
                    <li><a href="#contact-us">Contato</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div><!--/#navigation-->
<div id="pricing-sectioncar" class="parallax-section">
    <div class="container text-center">
        <div class="padding">
            <div class="row section-title">
                <p><strong>Confirmação</strong> < Meus dados < Pagamento</p>
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>Olá! Voce solicitou o seguinte atendimeto</h2><br/>
                </div>
                <!-- -->
                <?php

                if(empty($_POST['nome']) || empty($_POST['preco']) || empty($_POST['descricao'])){
                    @header("location: ?controller=Home&action=index#pricing-section");
                }

                ?>
                    <div class="plans">
                        <form action="?controller=Pay&action=check02" method="post">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 12u">
                                    <div class="plan">
                                        <h1><?php echo $_POST['nomePla']; ?></h1>
                                        <h2><?php echo $_POST['precoPla']; ?></h2>
                                        <?php
                                        if(!empty($_POST['list1'])){ echo  '<p>- '.$_POST['list1'].'</p>';}
                                        if(!empty($_POST['list2'])){ echo  '<p>- '.$_POST['list2'].'</p>';}
                                        if(!empty($_POST['list3'])){ echo  '<p>- '.$_POST['list3'].'</p>';}
                                        if(!empty($_POST['list4'])){ echo  '<p>- '.$_POST['list4'].'</p>';}
                                        ?>
                                        <input type="hidden" name="nomePla" value="<?php echo $_POST['nomePla']; ?>">
                                        <input type="hidden" name="precoPla" value="<?php echo $_POST['precoPla']; ?>">
                                        <input type="hidden" name="list1" value="<?php echo $_POST['list1']; ?>">
                                        <input type="hidden" name="list2" value="<?php echo $_POST['list2']; ?>">
                                        <input type="hidden" name="list3" value="<?php echo $_POST['list3']; ?>">
                                        <input type="hidden" name="list4" value="<?php echo $_POST['list4']; ?>">
                                        <button type="submit" class="btn btn-primary">Confirmar consulta</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- -->
                </div>
            </div>
            <div class="plans" style="margin-top: -100px;">
                <div class="row">

                    <h3>Alterar solicitação de atendimento</h3><br/>

                    <?php echo $servicos; ?>

                </div>
            </div><br/><br/><br/>
        </div>
    </div>
</div><!--/#pricing-section-->


<footer id="contact-us">

    <div id="footer-bottom">
        <div class="linkRod">
            <h3>Veja Mais Informações</h3>
            <ul>
                <li>
                    <a href="#specification">Dúvidas Frequentes</a>
                </li>
                <li>
                    <a href="videos.html">Nossos Vídeos</a>
                </li>
            </ul>
        </div>
        <div class="visita">
            <h3>Visite nosso consultório será um prazer recebê-lo!</h3>
            <p>Endereço:Divinópolis - MG Rua:Sete de Setembro nº xx </p>
            <p>Sala 450 - Ed. Sete, Centro.</p>
            <p>Cep: 35500-004.</p>
        </div>
        <div class="redes">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </li>
            </ul>
        </div>
        <div class="cop">
            <p>© Copyright 2016 <a href="#">ExpressaHost.</a>..</p>
        </div>
    </div>
</footer>

<!--/#scripts-->
<script type="text/javascript" src="view/assets/js/jquery.js"></script>
<script type="text/javascript" src="view/assets/js/bootstrap.min.js"></script>
<script src="view/assets/js/contact.js"></script>
<script src="view/assets/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="view/assets/js/gmaps.js"></script>
<script type="text/javascript" src="view/assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="view/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="view/assets/js/vegas.min.js"></script>
<script type="text/javascript" src="view/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="view/assets/js/jquery.nav.js"></script>
<script type="text/javascript" src="view/assets/js/coundown-timer.js"></script>
<script type="text/javascript" src="view/assets/js/main.js"></script>
<script src="view/assets/assets/js/jquery.backstretch.min.js"></script>
<script src="view/assets/assets/js/owl.carousel.min.js"></script>
<script src="view/assets/assets/js/jquery.magnific-popup.min.js"></script>
<script src="view/assets/assets/js/jquery.simple-text-rotator.min.js"></script>
<script src="view/assets/assets/js/jquery.waypoints.js"></script>
<script src="view/assets/assets/js/jquery.countTo.js"></script>
<script src="view/assets/assets/js/custom.js"></script>
<script src="view/assets/assets/js/wow.min.js"></script>



</body>
</html>
