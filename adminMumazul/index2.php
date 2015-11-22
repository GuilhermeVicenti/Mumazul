<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mumazul Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/favicon.png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="../img/white-elephant.png"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"> <b>O </b>Mumazul</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">1</span>
                </a>

                <!-- NUMERO DE CHAMADOS -->
                <ul class="dropdown-menu">
                  
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">          
                                    
                                         
                    </ul>
                  </li>
                 
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">?</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> </li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">                  
                                        
                      
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> Exemplo para USAR
                        </a>
                      </li>
                     
                    </ul>
                 
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                 
                </a>
                <ul class="dropdown-menu">
                 
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                     
                         
                        </a>                                         
                     
                    </ul>
                  </li>
                  
                </ul>
              </li>


              <!-- CAMPO DO USUÁRIO QUE ESTÁ LOGADO -->
              <!-- campo de usuário que está logado -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../img/favicon.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../img/favicon.png" class="img-circle" alt="User Image">
                    <p>
                     NOME DO USUÁRIO LOGADO - "Cargo do Usuário  - Setor"
                     
                    </p>
                  </li>
                  
                  </li>
                  <!-- Menu do usuário para deslogar do sistemA-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <!--  DESLOGAR USUÁRIO -->
                      <a href="#" class="btn btn-default btn-flat">Deslogar </a>
                    </div>
                  </li>
                </ul>
              </li>
             
             

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <!-- COLOCAR NOME DO USUÁRIO -->
              <p> Nome do Usuário </p>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder=" Digite o que procura">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Opções de Administrador</li>
            <li class="active treeview">
              <a href="index2.php">
                <i class="fa fa-fw fa-bars"></i>
                </span> <span>Menus</span></span> </i>
              </a>          
            </li>
            <li class="treeview">
              <a href="#"> 
              <i class="fa fa-fw fa-plus-square-o"></i>              
                <span>Cadastros</span>   
                 <i class="fa fa-angle-left pull-right"></i>             
              </a>
              <ul class="treeview-menu">
                <li><a href="cadastrofuncionarios.php"><i class="fa fa-circle-o"></i> Funcionários </a></li>
                <li><a href="cadastroequipamentos.php"><i class="fa fa-circle-o"></i> Equipamentos </a></li>
                <li><a href="cadastroconjunto.php"><i class="fa fa-circle-o"></i> Conjuntos </a></li>
                <li><a href="cadastrofornecedores.php"><i class="fa fa-circle-o"></i> Fornecedores </a></li>
              
               
              </ul>
            </li>           
            <li class="treeview">
              <a href="#">
               <i class="fa fa-fw fa-file-text-o"></i>
                <span>Relatórios</span>
                 <i class="fa fa-angle-left pull-right"></i>
               
              </a>
              <ul class="treeview-menu">
                <li><a href="relatoriomensal.php"><i class="fa fa-circle-o"></i> Relatórios Mensais </a></li>
                <li><a href="relatoriosemanal.php"><i class="fa fa-circle-o"></i> Relatorio Semanal </a></li>
                <li><a href="relatoriosetor.php"><i class="fa fa-circle-o"></i> Relatório Setor</a></li>
                <li><a href="relatoriousuario.php"><i class="fa fa-circle-o"></i> Relatório Usuário</a></li>
                <li><a href="relatoriousuario.php"><i class="fa fa-circle-o"></i> Relatório de Chamados  </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">  
                <i class="fa fa-fw fa-phone"></i>
                <span> Chamados </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="chamadospendentes.php"><i class="fa fa-circle-o"></i> Chamados Pendentes</a></li>
                <li><a href="chamadosatendidos.php"><i class="fa fa-circle-o"></i> Chamados Atendidos</a></li>
               
              </ul>
            </li>
            <!-- PESQUISAS -->
            <li class="treeview">
              <a href="pesquisa.html">
                <i class="fa fa-fw fa-search"></i> </i> <span> Pesquisas </span>
               
              </a>
              <ul class="treeview-menu">
                
              </ul>
            </li>
            
            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Agenda do Coordenador</span>
                
              </a>
            </li>
            <li>
              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i><span>E-mails de funcionários</span> </a>           
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-exchange"></i> <span>Alterações</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Equipamentos <i class="fa fa-angle-left pull-right"></i></a>
                
                        <li><a href="#"><i class="fa fa-circle-o"></i> Funcionarios</a></li>
                        </ul>
                    </li>
                  </ul>
                </li>
                
              </ul>
            </li>
            
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Mumazul ADMIN</b> Versão 1.0
        </div>
        <center>
        <strong> D3L Sistemas - 2015 - Cedup - Timbó <a href="http://thor.alexjonas.com.br" target="_blank">== Conheça o THOR== </a></strong> Todos os direitos reservados.

      </footer>

    
             
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
