<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="language" content="pt-br">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="SysConsulte Sistemas para consultórios">
        <meta name="description" content="SysConsulte login, efetui seu login e administre seu consultório online.">
        <meta name="keywords" content="Login,sysconsulte logar,sistemas para consultório logar">
        <title>Logar em seu painel</title>

    <!-- Vendor CSS -->
    <link href="view/assets/vendors-dash/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="view/assets/vendors-dash/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="view/assets/css-dash/app.min.1.css" rel="stylesheet">
    <link href="view/assets/css-dash/app.min.2.css" rel="stylesheet">
</head>

<body class="login-content">
  <a href="../index.html" class="inicio">Home<i class="zmdi zmdi-home"></i></a>
        <div class="log">
            <a href="../index.html" >
             <img src="view/assets/img-dash/logo@1x.png" alt="Logo SysConsulte">
            </a>
        </div>
<!-- Login -->
<div class="lc-block toggled" id="l-login">
    <form>
	<p id="returnLogin"></p>
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                <input type="text" id="tM" class="form-control" placeholder="Usuário">
            </div>
        </div>

        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
            <div class="fg-line">
                <input type="password" id="tSenha" class="form-control" placeholder="Senha">
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="checkbox">
            <label>
                <input type="checkbox" id="tMan" value="logado">
                <i class="input-helper"></i>
                Manter conectado
            </label>
        </div>

        <button type="submit" id="tEntrar" class="btn prevenir btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button> 

        <ul class="login-navigation">
            <!-- li data-block="#l-register" class="bgm-red">Register</li -->
            <li data-block="#l-forget-password" class="bgm-orange">Esqueceu sua senha?</li>
        </ul>

    </form>

</div>

<!-- Register -->
<div class="lc-block" id="l-register">
    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
        <div class="fg-line">
            <input type="text" class="form-control" placeholder="Usuário">
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
        <div class="fg-line">
            <input type="text" class="form-control" placeholder="Email">
        </div>
    </div>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
        <div class="fg-line">
            <input type="password" class="form-control" placeholder="Senha">
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="checkbox">
        <label>
            <input type="checkbox" value="">
            <i class="input-helper"></i>
                    Ao cadastrar você esta aceitando os termos de licença
        </label>
    </div>

    <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>

    <ul class="login-navigation">
        <li data-block="#l-login" class="bgm-green">Logar</li>
        <li data-block="#l-forget-password" class="bgm-orange">Esqueceu sua senha?</li>
    </ul>
</div>

<!-- Forgot Password -->
<div class="lc-block" id="l-forget-password">
    <p id="returnBack" class="text-left">Informe seu email de registro.</p>

    <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
        <div class="fg-line">
	<form>
            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
        </div>
    </div>
	 <button type="submit" id="backPass" class="prevenir btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button> 
</form>

    <!-- a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a -->

    <ul class="login-navigation">
        <li data-block="#l-login" class="bgm-green">Logar</li>
        <!-- li data-block="#l-register" class="bgm-red">Register</li -->
    </ul>
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
<script src="view/assets/vendors-dash/bower_components/Waves/dist/waves.min.js"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
    <script src="view/assets/vendors-dash/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->
<script src="view/assets/js/loginDash.js"></script>
<script src="view/assets/js/backPass.js"></script>
<script src="view/assets/js/preventSubmit.js"></script>
<script src="view/assets/js-dash/functions.js"></script>

</body>
</html>
