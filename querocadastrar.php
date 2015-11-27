<!DOCTYPE html>
<html lang="pt-br">
<?php 
    
    include ('conexao.php');
if (isset($_POST['cadastro']) AND $_POST['cadastro'] == 'empresa') {

    if ($_POST['senha1_empresa'] == $_POST['senha2_empresa']) {

    
        $sql1 = 'SELECT * FROM empresas WHERE cnpj_empresa =  "'.$_POST['cnpj_empresa'].'"';

        $var = mysqli_query($link , $sql1);
       
        if (mysqli_fetch_array($var)) {

            echo '<script> alert("Empresa já cadastrada!!") </script>';

        }else{

            $sql = 'INSERT INTO
                      `empresas`(                
                        `nome_empresa`,
                        `rua_empresa`,
                        `bairro_empresa`,
                        `cidade_empresa`,
                        `telefone_empresa`,
                        `email_empresa`,
                        `cnpj_empresa`,
                        `usuario_empresa`,
                        `senha_empresa`
                      )
                    VALUES(              
                      "'.$_POST['nome_empresa'].'",
                      "'.$_POST['rua_empresa'].'",
                      "'.$_POST['bairro_empresa'].'",
                      "'.$_POST['cidade_empresa'].'",
                      "'.$_POST['telefone_empresa'].'",
                      "'.$_POST['email_empresa'].'",
                      "'.$_POST['cnpj_empresa'].'",
                      "'.$_POST['user_empresa'].'",
                      "'.$_POST['senha1_empresa'].'"
                    )';              
            echo '<script> alert("Empresa Cadastrada com Sucesso!") </script>';                                           
        }
        
        mysqli_query($link , $sql);
          
    }else {

                    echo '<script> alert("As senhas não coincidem!!") </script>';

    }

}


 ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VEM PRO MUMA :)</title>
    <script src="jquery-1.2.6.pack.js" type="text/javascript"></script><script src="jquery.maskedinput-1.1.4.pack.js" type="text/javascript" /></script>
    <script type="text/javascript">$(document).ready(function(){    $("#cnpj").mask("99.999.999/9999-99");});</script> 
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
                        <li class="current"><a href="login.php">Login</a>
                            
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
                    <h3 class="badge">CADASTRE A SUA EMPRESA</h3>


                    <div class="row">
                        <div class="col-sm-5 center-block">
                            <div class="login-form">
                                <form method="post" action="#">
                                    <input type="text" name="nome_empresa" size="50" placeholder="Digite o nome da  sua EMPRESA" />
                                    <input class='form-control' name='rua_empresa' placeholder='Rua da Empresa' type='text'>
                                    <input class='form-control' name='bairro_empresa' placeholder='Bairro Empresa' type='text'>
                                        <select class='form-control' name='cidade_empresa' placeholder='Cidade Empresa' type='text'>                          
                                       
                                             
                                                <option value="Rio dos Cedros">Rio dos Cedros</option>
                                                <option value="Blumenau">Blumenau</option>
                                                <option value="Indaial">Indaial</option>
                                                <option value="Rodeio">Rodeio</option>
                                                <option value="Benedito Novo">Benedito Novo</option>
                                                <option value="Timbó ">Timbó</option>
                                                <option value="Ascurra">Ascurra</option>
                                                <option value="Pomerode">Pomerode</option>
                                                 

                                        </select> 

                                    <input class='form-control' name='telefone_empresa' placeholder='Telefone Empresa' type='text'>
                                    <input class='form-control' name='email_empresa' placeholder='E-mail da Empresa' type='text'>
                                    <input class='form-control' name='cnpj_empresa' placeholder='CNPJ da Empresa' type='text'>
                                    <input class='form-control' name='user_empresa' placeholder='Usuário Para Login no Mumazul (LOGIN)' type='text'>
                                    <input class='form-control' name='senha1_empresa' placeholder='Senha da Empresa' type='password'>
                                    <input class='form-control' name='senha2_empresa' placeholder='Confirmação de Senha' type='password'>
                                    <input type="hidden" value="empresa" name="cadastro">
 
                                    <input type="submit" value="CADASTRAR EMPRESA" />

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
