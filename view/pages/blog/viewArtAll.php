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
    <link href="view/assets/css/artigos.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="view/assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="view/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="view/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="view/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="view/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

<?php

if(empty($adminData[0]['admin_ft_profile'])){
    $adminData[0]['admin_ft_profile'] = "Uploads/default.jpg";
}

?>

<div id="navigation">
    <div class="navbar" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Menu Navegação </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="nome"><span><?php echo $adminData[0]['admin_nome']; ?> CRP: <?php echo $adminData[0]['admin_crp']; ?></span>
                    <img class="img-responsive" src="<?php echo $adminData[0]['admin_ft_profile']; ?>" alt="Imagem do psicólogo" />
                </p>
            </div>
            <nav id="main-menu" class=" navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://www.laendersoftware.com.br/sysconsult/#slider-section">Home</a></li> </a></li>
                    <li><a href="http://www.laendersoftware.com.br/sysconsult/#overview">Sobre</a></li>
                    <li><a href="http://www.laendersoftware.com.br/sysconsult/#description">O que faço</a></li>
                    <li><a href="http://www.laendersoftware.com.br/sysconsult/#video-section">Vídeos</a></li>
                    <li><a href="http://www.laendersoftware.com.br/sysconsult/#product-details">Abordagens</a></li>
                    <li><a href="http://www.laendersoftware.com.br/sysconsult/#pricing-section">Consultas</a></li>
                    <li><a href="http://www.laendersoftware.com.br/sysconsult/#contact-us">Contato</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div><!--/#navigation-->

<div id="overview">
    <div class="container text-center">
        <div class="padding">
            <div class="row section-title">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1>Aproveite nosso artigos.</h1>
                    <p>
                        Esperamos levar informações com qualidade, nosso objetivo é tornar seu dia melhor, sinta-se a vontade, estes conteúdos foram preparados especialmente para você.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div><!--/#overview-->
<section class="sectArtic">
    <h2>Meus Artigos</h2>
    <div class="contArtic">
        <div>
            <?php echo $introPosts; ?>
        </div>
    </div>
</section>
<footer id="contact-us">
    <div id="footer-bottom">
        <div class="linkRod">
            <h3>Veja Mais Informações</h3>
            <ul>
                <li>
                    <a href="index.html#specification">Dúvidas Frequentes</a>
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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('button.navbar-toggle').click(function(){
            $('nav').slideToggle();
        });

    });
</script>
</body>
</html>