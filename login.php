<!DOCTYPE html>
<html lang="pt-br">
<?php  
include ('conexao.php');

        session_start();

if (isset($_GET['logout']) AND $_GET['logout'] == 'logout' ) {
    
    unset($_SESSION);

}
    

if (isset($_POST['login']) AND $_POST['login']  == 'empresa'){

    $_POST['nome_usuario'] = isset($_POST['nome_usuario']) ? $_POST['nome_usuario'] : '';
    $_POST['senha_usuario'] = isset($_POST['senha_usuario']) ? $_POST['senha_usuario'] : '';

    if ($_POST['nome_usuario'] != '' AND $_POST['senha_usuario'] != '' ) {


        $log = 'SELECT * 
                  FROM empresas
                 WHERE usuario_empresa = "'.$_POST['nome_usuario'].'" 
                   AND senha_empresa = "'.$_POST['senha_usuario'].'"';

        $res = mysqli_query($link, $log);

       

        if ($row = mysqli_fetch_array($res)) {
             
            $_SESSION['empresa'] = $row['nome_empresa']; 
            $_SESSION['setor'] = 'adm' ; 
            $_SESSION['cod_user'] = $row['cod_empresa']; 
            $_SESSION['cod_empresa'] = $row['cod_empresa']; 

            header("Location: http://localhost/Mumazul/adminMumazul/index.php");              


        }



        
    } else{



    }

}


?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MuMaZul</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,600,500,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap & Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/block_grid_bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet" />
    <link href="css/jquery.circliful.css" rel="stylesheet" />
    <link href="css/slicknav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">

</head>

<body>

      <!-- Top Bar-->
    <div class="top">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo">
                    <a href="index.php"><img src="img/logomarca.png" alt=""><b>O Mumazul</b>
                    </a>
                </div>
            </div>
            <div class="col-sm-9">

                <nav id="desktop-menu">
                    <ul class="sf-menu" id="navigation">
                        
                        <li><a href="#">Sobre Nós</a>
                            <ul>
                                
                                <li><a href="sobrenos1.html">O que fazemos?</a>
                                </li>
                                <li><a href="sobrenos2.html">Por que fazemos?</a>
                                </li>
                                 <li><a href="sobrenos3.html">Aonde estamos?</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li><a href="#">Nossos Serviços</a>
                            <ul>
                                <li><a href="servicos1.html">Empresas</a>
                                </li>
                                <li><a href="servicos2.html">Escolas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="current"><a href="login.html">Login</a>
                            
                                </li>
                               
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- End of Top Bar-->

    <!-- Breadcrumps -->
    <div class="breadcrumbs">
        <div class="row">
            <div class="col-sm-6">
                <h1>Faça o login para acessar!</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li>Aonde eu estou? </li>
                    <li><a href="index.php">Início</a>
                    </li>
                    
                    </li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End of Breadcrumps -->

    <!-- Login -->
    <section class="login">

        <div class="row spacing-40">
            <div class="col-sm-12">
                <div class="login-form-panel">
                    <h3 class="badge">--LOGIN--</h3>
                    <div class="row">
                        <div class="col-sm-5 center-block">
                            <div class="login-form">
                                <form method="post" action="#">
                                    <input type="text" name="nome_usuario" size="50" placeholder="Digite aqui o e-mail cadastrado!" />
                                     <input type="password" name="senha_usuario" size="20" placeholder="Digite sua senha!" />
                                    <!--<p class="text-center"><a href="">--ESQUECEU A SENHA NÉ?!--</a>
                                    </p>-->
                                    <input type="hidden" value="empresa" name="login">
                                    <input type="submit" value="Entrar">
                                    
                                      <div class="form-group"> <a href="querocadastrar.php"> <u>Ei, Quero me CADASTRAR!</u></a></div>
                                    


                                </form>
								
                            </div>
							
							
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End of Login -->

     <!--  Footer -->
    <div class="social">
        <div class="row">

            <div class="col-sm-6">
                <ul>
                    <li><a href="HTTP://WWW.BANDAETER.COM.BR" title="facebook" target="_blank"><i class="facebook"><img src="facebook.png" height="18" width="15"> &nbsp Facebook</i></a>
                    </li>
                    <li><a href="HTTP://WWW.BANDAETER.COM.BR" title="twitter" target="_blank"><i class="twitter"><img src="twitter.png" height="18" width="15"> &nbsp Twitter</i></a>
                    </li>
                    
                    <li><a href="http://alexdb.ddns.net/thor/" title="github" target="_blank"><i class="conhecathor"> CONHEÇA O THOR</i></a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6">

                <div id="mc_embed_signup">
                    <form class="form-inline validate" action="AÇÃO QUE DEVE SER TOMADA" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" no-validate>
                        <div class="row no-gutter">
                            <div class="col-sm-9">
                                <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Cadastre o seu e-mail" required>
                                <div style="position: absolute; left: -5000px;">
                                    <input type="text" name="b_b5638e105dac814ad84960d90_9345afa0aa" tabindex="-1" value="">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <input type="submit" value="Cadastrar!" name="subscribe" id="mc-embedded-subscribe">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="footer">
        <div class="row">
            
            
            <div class="col-sm-3">
                <h4>O MUMAZUL</h4>
                <ul>
                    <li><a href="quemsomos.html">O que faz a equipe MUMAZUL?</a>
                    </li>
                    <li><a href="sobrenos2.html">Por que fazemos?</a>
                    </li>
                    <li><a href="sobrenos3.html">Aonde o elefante MUMA está?</a>
                    </li>
                    
                </ul>
            </div>
            <div class="col-sm-3">
                <h4>Suporte e Ajuda </h4>
                <ul>
                    <li><a href="">Fale Conosco</a>
                    </li>
                    <li><a href="">Duvidas Frequentes sobre o MUMA</a>
                    </li>
                    <li><a href="">Suas Sugestões</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h4>Mais informações</h4>
                <ul class="questions">
                    <li><a href="http://www.timbo.com.br/" target="_blank" ><i class="fa fa-comment"></i>Timbó&nbsp-&nbspSanta Catarina </a>
                    </li>
                    <li>Contato:&nbsp</i>(47) 9985-5223</li>
                    <li><a href=""><i class="fa fa-envelope"></i>Guilherme.svicenti@hotmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--  End of Footer -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>
