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

    <style>

        .fborder{

            color: #2c3e50;
        }
        .fborder:focus{
            border-color: #2c3e50;
            color: #2c3e50;
        }
    </style>
</head><!--/head-->
<body>
<?php

if(empty($_POST['nome']) || empty($_POST['preco']) || empty($_POST['descricao'])){
    //header("location: ?controller=Home&action=index#pricing-section");
}

?>

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
                <p><strong>Confirmação</strong> < <strong>Meus dados</strong> < Pagamento</p>
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>Informe seus dados</h2><p>Não se preocupe, seus dados estão em segurança.</p>
                </div>
                <!-- -->
                <div class="plans">
                    <div class="row" >
                        <div class="col-md-12 col-sm-12 12u">
                            <div class="plan">
                                <form action="?controller=Pay&action=checkOutPay" method="post" class="form-horizontal">
                                    <div class="form-group"><br/><br/>
                                        <label for="nome" class="col-sm-2 control-label">Seu nome</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control fborder" name="nome" id="nome" placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control fborder" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ddd" class="col-sm-2 control-label">DDD</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control fborder" name="ddd" id="ddd" placeholder="DDD">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel" class="col-sm-2 control-label">Telefone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control fborder" name="tel" id="tel" placeholder="Telefone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpf" class="col-sm-2 control-label">CPF</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control fborder" name="cpf" id="cpf" placeholder="CPF">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cida" class="col-sm-2 control-label">Cidade</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control fborder" name="cida" id="cida" placeholder="Ex: Divinopolis">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="uf" class="col-sm-2 control-label">Estado</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control fborder" name="uf" id="uf" placeholder="Ex:Minas Gerais">
                                        </div>
                                    </div>

                                    <input type="hidden" name="nomePla" value="<?php echo $_POST['nomePla']; ?>">
                                    <input type="hidden" name="precoPla" value="<?php echo $_POST['precoPla']; ?>">
                                    <input type="hidden" name="list1" value="<?php echo $_POST['list1']; ?>">
                                    <input type="hidden" name="list2" value="<?php echo $_POST['list2']; ?>">
                                    <input type="hidden" name="list3" value="<?php echo $_POST['list3']; ?>">
                                    <input type="hidden" name="list4" value="<?php echo $_POST['list4']; ?>">
                                    <button type="submit" class="btn btn-primary">Realizar pagamento</button>
                                </form>

                            </div>
                        </div>
                    </div>


                </div>
                <!-- -->
            </div>
        </div>

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
