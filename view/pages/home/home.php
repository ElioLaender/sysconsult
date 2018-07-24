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

<?php

    if(empty($adminData[0]['admin_ft_profile'])){
        $adminData[0]['admin_ft_profile'] = "Uploads/default.jpg";
    }

?>
<div id="main-slider-wrapper">
    <div id="slider-section">
        <div class="container main-slider">
            <div class="slider-content">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Psicólogo </h1>
                        <h2> <span><?php echo $adminData[0]['admin_nome']; ?> </span></h2>
                        <p>"Quando a dor de não estar vivendo for maior do que o medo da mudança, a pessoa muda" (Freud).</p>
                        <a href="#pricing-section" class="btn btn-primary btn-blue">Quero Consultar</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/#slider section-->
</div><!--/#main-slider-wrapper-->

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
                <p class="nome"><span><?php echo $adminData[0]['admin_nome']; ?> CRP: <?php echo $adminData[0]['admin_crp']; ?></span>
                    <img class="img-responsive" src="<?php echo $adminData[0]['admin_ft_profile']; ?>" alt="Imagem do psicólogo" />
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
                    <li><a href="?controller=Dashboard&action=viewDashBoard">Painel</a></li>
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
                    <h1>Olá, Sou Psicólogo especializado em Psicanálise.</h1>

                    <p>
                       É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).



                    </p>
                </div>
            </div>
            <section id="portfolio" class="section">
                <div class="container">
                    <div class="row">
                        <div class="paiTitulo">
                            <h2>Imagens Consultório</h2>
                            <p>Seja Bem vindo!</p>
                        </div>
                        <div class="paiDiv">
                            <div class="paiFoto">
                                <a href="view/assets/images/p1.jpg" class="pop-up" title="Caption 1">
                                    <div class="portfolio-item">
                                        <div class="portfolio-item-preview">
                                            <img src="view/assets/images/p1.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="paiFoto">
                                <a href="view/assets/images/p8.jpg" class="pop-up" title="Caption 5">
                                    <div class="portfolio-item">
                                        <div class="portfolio-item-preview">
                                            <img src="view/assets/images/p8.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="paiFoto">
                                <a href="view/assets/images/p6.jpg" class="pop-up" title="Caption 6">
                                    <div class="portfolio-item">
                                        <div class="portfolio-item-preview">
                                            <img src="view/assets/images/p6.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </section>
        </div>
    </div>
</div><!--/#overview-->

<div id="description" class="parallax-section">
    <div class="description-section padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 section-title">
                    <h1>Veja o que posso fazer por você!</h1>
                    <p>Breve descrição sobre seus conhecimentos que podem ser úteis em tratamento de seus pacientes.</p>
                </div>
            </div>
        </div>
        <div class="descriptions">
            <div class="container">
                <div class="description">
                    <i class="fa fa-bug"></i>
                    <h2>Orientação Profissional:</h2>
                    <p>Vivamus suscipit tortor eget felis porttitor volutpat. Cura bitur aliquet quam.</p>
                </div>
            </div>
        </div>
        <div class="descriptions">
            <div class="container">
                <div class="description">
                    <i class="fa fa-bell-o"></i>
                    <h2>Avaliação Neuropsicológica:</h2>
                    <p>Vivamus suscipit tortor eget felis porttitor volutpat. Cura bitur aliquet quam.</p>
                </div>
            </div>
        </div>
        <div class="descriptions">
            <div class="container">
                <div class="description">
                    <i class="fa fa-cogs"></i>
                    <h2>Psicoterapia:</h2>
                    <p>Vivamus suscipit tortor eget felis porttitor volutpat. Cura bitur aliquet quam.</p>
                </div>
            </div>
        </div>
        <div class="descriptions">
            <div class="container">
                <div class="description">
                    <i class="fa fa-codepen"></i>
                    <h2>Psicodrama:</h2>
                    <p>Vivamus suscipit tortor eget felis porttitor volutpat. Cura bitur aliquet quam.</p>
                </div>
            </div>
        </div>
    </div>
</div><!--/#description-->

<div id="video-section">
    <div class="container">
        <div class="padding">
            <div class="row section-title text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1><i class="fa fa-video-camera"></i>Saiba como se sentir realizado</h1>
                    <p>
                        Escolhemos nossos vídeos especialmente para você se sentir melhor.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="video">
                        <div class="overlay-bg"></div>
                        <a class="video-link" href="https://www.youtube.com/watch?v=ThVvMsc5ROk"><i class="fa fa-youtube-play"></i></a>
                        <img class="img-responsive" src="view/assets/images/others/video-bg.jpg" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <h3>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit</p>
                        <a href="#" class="btn btn-primary">Todos Vídeos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#video-section-->

<div id="product-details">
    <div class="product-details part-one">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="product-info">
                        <h1>Tratamento da ansiedade</h1>
                        <h2>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipisicing elitsed</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-image">
            <img class="img-responsive" src="view/assets/images/others/p1_bg.jpg" alt="" />
        </div>
    </div>
    <div class="product-details part-two">
        <div class="product-image">
            <img class="img-responsive" src="view/assets/images/others/p2_bg.jpg" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <div class="product-info">
                        <h1>Terapia de casal</h1>
                        <h2>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipisicing elitsed</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-details part-three">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="product-info">
                        <h1>Especialista no tratamento do Medo de dirigir</h1>
                        <h2>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipisicing elitsed</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-image">
            <img class="img-responsive" src="view/assets/images/others/p3_bg.jpg" alt="" />
        </div>
    </div>
</div><!--/#product-details-->

<div id="specification">
    <div class="container">
        <div class="padding">
            <div class="row section-title text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1>Saiba como funciona</h1>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellen tesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt ni dictum porta.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="specifications">
                        <div class="specification">
                            <h4>Agendar Consuta Online</h4>
                            <ul>
                                <li>
                                    O primeiro passo é você efetuar o pagamento antecipado, você efetuará o mesmo pelo pagseguro, receberá um email na sua caixa postal no qual terá todos os procedimentos, sempre é bom lembrar que o pagseguro tem a chancela do UOL, onde ninguém terá acesso a seus dados bancários ou do cartão, bem como pessoais.
                                    Após a realização do pagamento e confirmação do mesmo, agendaremos um horário que esteja de acordo com as nossas agendas.
                                </li>
                            </ul>
                        </div>
                        <div class="specification">
                            <h4>Duração da Consulta</h4>
                            <ul>
                                <li>Uma consulta tem uma duração de 40 minutos.</li>
                            </ul>
                        </div>
                        <div class="specification">
                            <h4>Atendimento Online</h4>
                            <ul>
                                <li>
                                    No atendimento online é necessário o preenchimento do formulário específico. Nesse formulário você terá a oportunidade de relatar detalhes relevantes de sua demanda. Tal como duração, pessoas envolvidas, expectativas, medos. É fundamental o preenchimento sincero e envio do formulário para subsidiar a conduta e orientação do profissional.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="specifications">
                        <div class="specification">
                            <h4>Pagamento Online</h4>
                            <ul>
                                <li>Você tem a facilidade de pagar suas consultas com seu cartão de crédito ou boleto bancário.</li>
                            </ul>
                        </div>
                        <div class="specification">
                            <h4>Atrasei e agora?</h4>
                            <ul>
                                <li>
                                    Estarei te esperando durante todo o seu horário; mesmo que você esteja atrasado é importante que você não deixe de acessar; mesmo que nos últimos minutos.</li>
                            </ul>
                        </div>
                        <div class="specification">
                            <h4>Em caso de falta</h4>
                            <ul>
                                <li>
                                    Se você não comparecer virtualmente no horário combinado será considerado e cobrado do mesmo jeito; caso você precise desmarcar ou tiver outro compromisso é fundamental entrar em contato num prazo de 24 horas de antecedência para remarcarmos novo horário e não ser cobrado esse atendimento.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="specifications">
                        <div class="specification">
                            <h4>Quem vai ao psicólogo é maluco?</h4>
                            <ul>
                                <li>
                                    Não. Da mesma forma que quem vai ao dentista não está sem dentes, ou com dentes estragados. A solicitação de ajuda psicológica, então, revela coragem e discernimento, ou seja, ingredientes imprescindíveis para a saúde mental.
                                </li>
                            </ul>
                        </div>
                        <div class="specification">
                            <h4>Quem precisa de um psicólogo?</h4>
                            <ul>
                                <li>
                                    -Pessoas que apresentam dificuldades em estabelecer relações interpessoais satisfatórias; conhecidas como “pessoas sistemáticas” ou “pessoas difíceis”.
                                </li>
                                <li>
                                    -Pessoas que nutrem e alimentam pensamentos catastróficos em relação a qualquer oportunidade que surja em relação à vida profissional; amorosa ou familiar.
                                </li>
                                <li>
                                    -Perda do interesse por tudo; até mesmo com sua higiene pessoal; projetos profissionais; desmazelo; prostração; negativismo generalizado.
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="specifications">
                        <div class="specification">
                            <h4>Quantas sessões serão necessárias?</h4>
                            <ul>
                                <li>
                                    Difícil precisar um número exato, porém, nessa modalidade de orientação psicológica online, não será permitido exceder ao número de x encontros.
                                </li>
                            </ul>
                        </div>
                        <div class="specification">
                            <h4>Como saberei o horário do meu atendimento?</h4>
                            <ul>
                                <li>
                                    Todos os horários serão previamente combinados, isto é, seja por intermédio dos telefones disponibilizados no site, ou pelos contatos do site. Qualquer dúvida sobre o atendimento online será respondida, prontamente, num prazo máximo de 48 horas.
                                </li>
                            </ul>
                        </div>
                        <div class="specification">
                            <h4>De que forma serei atendido?</h4>
                            <ul>
                                <li>
                                    Se for online, via skype. Presencial, em meu consultório.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#specification-->

<div id="pricing-section" class="parallax-section">
    <div class="container text-center">
        <div class="padding">
            <div class="row section-title">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1>Valores das consultas</h1>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellen tesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt ni dictum porta.</p>
                </div>
            </div>
            <div class="plans">
                <div class="row">
                   <?php echo $servicos; ?>
                </div>

            </div>
        </div>
    </div>
</div><!--/#pricing-section-->

<div id="call-to-action">
    <div class="container">
        <div class="padding text-center">
            <h1>Planos Aceitos</h1>
            <div class="row">
                <div class="col-sm-3">
                    <i class="fa bradesco">
                        <span></span>
                    </i>
                    <h2 class="sumir">Bradesco Saúde</h2>
                </div>
                <div class="col-sm-3">
                    <i class="fa cemig"></i>
                    <h2>Cemig Saúde</h2>
                </div>
                <div class="col-sm-3">
                    <i class="fa caixa"></i>
                    <h2>Caixa Saúde</h2>
                </div>
                <div class="col-sm-3">
                    <i class="fa unimed"></i>
                    <h2>Unimed</h2>
                </div>
            </div>
        </div>
    </div>
</div><!--/#call-to-action-->

<footer id="contact-us">
    <div class="container">
        <div class="contact-form text-center">
            <div class="row section-title">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1><i class="fa fa-envelope"></i>Vamos conversar</h1>
                    <p>
                        Fico feliz com sua visita, será um prazer poder lhe ajudar, entre em contato e vamos falar mais sobre suas questões.
                    </p>
                </div>
            </div>
            <div class="contato">
                <p>Psicóloga <?php echo $adminData[0]['admin_nome']; ?> CRP: <?php echo $adminData[0]['admin_crp']; ?></p>

                <p>Telefone:<span></span> (37) 9 2785 4545 Consultório: (37) 3254 7884</p>
                <p>Email: contato@seuemail.com</p>
            </div>
            <div id="success"></div>
            <form id="contactForm" name="contact-form" method="post" action="?controller=Home&action=persistContact">
                <div class="row">
                    <div class="form-group col-sm-4">
                        <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Seu Nome">
                    </div>
                    <div class="form-group col-sm-4">
                        <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Seu email">
                    </div>
                    <div class="form-group col-sm-4">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Assunto">
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mesagem"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </div>
            </form>
        </div>
    </div><!--/#contact-form-->
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
