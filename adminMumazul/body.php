<?php 


include('class.db.php');

/**
* boday
*/
class body extends Db{	

	function getLink() {

		$con = mysqli_connect('www.mumazul.com.br', 'server', '', 'mumazul');

		if (!$con) {
		    echo 'Error: Unable to connect to MySQL.' . PHP_EOL;
		    echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
		    echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
		    exit;
		}

		return $con;
		 
	}

	function __construct(){

			?>
				 
			<html>
			  <head>
			  	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
				<link rel="stylesheet" type="text/css" href="component.css" />
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
			        <a href="index.php" class="logo">
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
			                  <img src="../img/user.png" class="user-image" alt="User Image">
			                  <span class="hidden-xs"><?php  echo $_SESSION['empresa'] ?> </span>
			                </a>
			                <ul class="dropdown-menu">
			                  <!-- User image -->
			                  <li class="user-header">
			                    
			                    <p>
			                     Usuário: <b><?php  echo $_SESSION['empresa'] ?></b> 
			                     
			                    </p>
			                  </li>
			                  
			                  </li>
			                  <!-- Menu do usuário para deslogar do sistemA-->
			                  <li class="user-footer">
			                    <div class="pull-right">
			                      <!--  DESLOGAR USUÁRIO -->
			                      <a href="../login.php?logout=logout" class="btn btn-default btn-flat"> Deslogar  <?php  echo $_SESSION['empresa'] ?> </a>

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
			              <img src="../img/USERs.jpg" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info">
			              <!-- COLOCAR NOME DO USUÁRIO -->
			          <br>
			              <b><?php  echo $_SESSION['empresa'] ?> </b>
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
			              <a href="index.php">
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
			                <li><a href="?funcionario"><i class="fa fa-circle-o"></i> Funcionários </a></li>
			                <li><a href="?cadastroequip"><i class="fa fa-circle-o"></i> Equipamentos </a></li>
			                <li><a href="?cadastroconj"><i class="fa fa-circle-o"></i> Conjuntos </a></li>
			                <li><a href="?cadastrofornec"><i class="fa fa-circle-o"></i> Fornecedores </a></li>
			              
			               
			              </ul>
			            </li>  
			            <li class="treeview">
			              <a href="#">
			               <i class="fa fa-fw fa-file-text-o"></i>
			                <span>Pesquisar</span>
			                 <i class="fa fa-angle-left pull-right"></i>
			               
			              </a>
			              <ul class="treeview-menu">
			                <li><a href="?pesqfunc"><i class="fa fa-circle-o"></i> Funcionários </a></li>
			                <li><a href="?pesqconju"><i class="fa fa-circle-o"></i> Conjuntos </a></li>
			                <li><a href="?pesqequip"><i class="fa fa-circle-o"></i> Equipamentos</a></li>
			                <li><a href="?pesqset"><i class="fa fa-circle-o"></i> Setores</a></li>
			                <li><a href="?pesqcham"><i class="fa fa-circle-o"></i> Chamados </a></li>
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


					 <?php 
				}




			 function footer(){

				?>
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

			<?php 
	}

	function func(){

				
		if (isset($_POST['acao']) AND $_POST['acao'] == 'cadastro')  {
			
			$erro= false;

			if ($_POST['nome_funcionario'] == '' ) {
				
				$erro = ' Nome do Funcionário  está vazio! \n';
			}

			if ($_POST['tipo_usuario'] == '' ) {
				
				$erro .= ' Selecionar tipo de USUÁRIO!  \n';
			}

			if ($_POST['setor_usuario'] == '' ) {
				
				$erro .= ' Setor do USUÁRIO está vazio!  \n';
			}

			if ($_POST['turno_user'] == '' ) {
				
				$erro .= ' O TURNO está vazio!  \n';
			}

			if ($_POST['email_funcionario'] == '' ) {
				
				$erro .= ' O  EMAIL do Funcionário está vazio!  \n';
			}
			if ($_POST['senha_email_funcionario'] == '' ) {
				
				$erro .= ' A Senha do USUARIO está vazia!  \n';
			}
			if ($_POST['nome_user_dominio'] == '' ) {
				
				$erro .= 'O nome do USER está vazio!  \n';
			}
			if ($_POST['senha_user_dominio'] == '' ) {
				
				$erro .= ' A senha do usuário do DOMINIO está vazia!  \n';

			}
			if ($_POST['data_contratacao'] == '' ) {
				
				$erro .= 'Coloque a DATA da contratação!  \n';
			}
			if ($_POST['nome_skype_funcionario'] == '' ) {
				
				$erro .= ' NOME do Usuário do SKYPE está VAZIO!  \n';
			}
			if ($_POST['senha_skype_funcionario'] == '' ) {
				
				$erro .= ' Senha do USUARIO do  SKYPE está VAZIA!  \n';
			}

			if ($erro)  {
				
				echo   '<script> alert("'.$erro.'") </script>';
		 				
			} else {

				$sql2 = 'INSERT INTO funcionarios(								    
									    nome_funcionario,
									    adm_funcionario,
									    Empresas_cod_empresa,
									    setores_cod_setor,
									    turno_funcionario,
									    email_funcionario,
									    senha_email,
									    nome_dominio,
									    senha_dominio,
									    data_contratacao,
									    nome_skype,
									    senha_skype
									  )
									VALUES(
									   "'.$_POST['nome_funcionario'].'" , 
									  "'.$_POST['tipo_usuario'].'",
									  '.$_SESSION['cod_empresa'].',
									  '.$_POST['setor_usuario'].',
									  "'.$_POST['turno_user'].'",
									  "'.$_POST['email_funcionario'].'",
									  "'.$_POST['senha_email_funcionario'].'",
									  "'.$_POST['nome_user_dominio'].'",
									  "'.$_POST['senha_user_dominio'].'",
									  "'.$_POST['data_contratacao'].'",
									  "'.$_POST['nome_skype_funcionario'].'",
									  "'.$_POST['senha_skype_funcionario'].'")';


 

				$var3 = mysqli_query($this->getLink()  , $sql2);

				echo $sql2;

				if ($var3) {
					echo   '<script> alert(" Cadastro de funcionário realizado com sucesso! ") </script>';
				}else{ 

						echo   '<script> alert(" Deu ruim... ") </script>';

				}						


			}

		} 
		

		?>

		<form class='form-horizontal' role='form' method="POST" action="?funcionario=cadastro">
          <div class='form-group'>
          <CENTER>
          <B>  <h2>              CADASTRO DE FUNCIONÁRIOS </h2> </B>
          </BR>
          </br>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'> Qual o nome do Funcionário?</label>
            <div class='col-md-2'>
              <input class='form-control' name='nome_funcionario' placeholder='Digite aqui o nome do funcionário' style="width:420px; " type='text'>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Este Usuário é --></label>
            <div class='col-md-8'>
               <select class='form-control' name='tipo_usuario' style="width:210px;" >
                <option value="Admin"> Administrador </option>
                <option  value="Comum"> Funcionário Comum </option>
              </select>
             
              <div class='col-md-3 indent-small'>              
              </div>         
          </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Data de contratação</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control col-mg-8' name='data_contratacao' style="width:160px;"  type='date' max="31-12-2099"  >
                </div>
              </div>
              
              
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Turno do funcionário</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                   <select class='form-control' name='turno_user' style="width:210px;" >
                <option value="1"> 05:00 às 13:48 </option>
                <option value= "2">  07:15 às 17:15 </option>
              </select>
                     
                </div>
              </div>
            </div>

            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Nome de Usuário</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' name='nome_user_dominio'  style="width:410px"   placeholder='nome de Usuário do dominio empresarial' type='text'>
                </div>
              </div>
            </div>
             <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Setor do usuário</label>
            <div class='col-md-8'>
               <select class='form-control' name='setor_usuario' style="width:210px;" >
                <option value=""> == </option>

                <?php 

                	$sql1 = 'SELECT * FROM setores';
                	$var2 = mysqli_query($this->getLink()  , $sql1);


                	//var_dump($sql1);

                	while ($var3 = mysqli_fetch_array($var2) ) {

                			echo  '<option value="'.$var3['cod_setor'] .'" >'.$var3['nome_setor'].'</option>' ;

                	}



                 ?>
           
              </select>
             
              <div class='col-md-3 indent-small'>              
              </div>         
          </div>
          </div>


         
            
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>  Senha do usuário</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' placeholder="Digite a senha do Usuario" name='senha_user_dominio'>
                  	(Útilize  preferenciamente NUMEROS  e LETRAS. Ex "ppcp0541")
                 
                </div>
              </div>              
            </div>
          </div>


          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>E-mail do funcionário</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' name='email_funcionario'  style="width:410px"   placeholder='Digite o e-mail do funcionário' type='text'>
                </div>
              </div>
            </div>
          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Senha de E-mail</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' name='senha_email_funcionario'  style="width:410px"   placeholder='Senha do E-mail' type='text'>
                </div>
              </div>
            </div>

            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Usuário Skype</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' name='nome_skype_funcionario'  style="width:410px"   placeholder='Qual nome do usuário do Skype?' type='text'>
                </div>
              </div>
            </div>

            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Senha do Skype</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' name='senha_skype_funcionario'  style="width:410px"   placeholder='Senha do Skype' type='text'>
                </div>
              </div>
            </div>



        
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Informações do Usuário </label>
            <div class='col-md-6'>
              <textarea class='form-control' name='info_funcionario' placeholder='Comentários do Funcionário' rows='3'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit'>Cadastrar Funcionário</button>
              <input type="hidden"  name="acao" value="cadastro">
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancelar cadastro</button>
            </div>
          </div>
        </form>


		<?php 
		 
	}

	function cadastroequip(){

		$sqlforn = 'SELECT * FROM fornecedores WHERE empresa_fornecedores = '.$_SESSION['cod_empresa'];

		$fone = mysqli_query($this->getLink() , $sqlforn);



		/* começando*/


		if (isset($_POST['acao']) AND $_POST['acao'] == 'cadastro')  {
			
			$erro= false;

			if ($_POST['tipo_equip'] == '' ) {
				
				$erro = ' O tipo do Equipamento  está vazio! \n';
			}

			if ($_POST['forn_equip'] == '' ) {
				
				$erro .= ' Selecionar o Fornecedor do Equipamento \n';
			}

			if ($_POST['data_compra'] == '' ) {
				
				$erro .= ' Campo de DATA de COMPRA está vazio!  \n';
			}
			if ($_POST['preco_equip'] == '' ) {
				
				$erro .= ' Digite o Preço do Equipamento!  \n';
			}else{

				$_POST['preco_equip'] = explode(',', $_POST['preco_equip'] );

				if (sizeof($_POST['preco_equip'] ) == 2) {
					$_POST['preco_equip']  = $_POST['preco_equip'][0].'.'.$_POST['preco_equip'][1]; 
				}


			}
			if ($_POST['desc_equip'] == '' ) {
				
				$erro .= ' Escreva a Descrição desse Equipamento!  \n';
			}
				if ($_POST['marca_equip'] == '' ) {
				
				$erro .= ' Digite a Marca desse Equipamento!  \n';
			}
				if ($_POST['coment_equip'] == '' ) {
				
				$erro .= ' Digite comentários sobre o equipamento!  \n';
			}



			if ($erro)  {
				
				echo   '<script> alert("'.$erro.'") </script>';
		 				
			} else {

					$sql2=	'INSERT	INTO
							  equipamentos(							    
							    nome_equipamento,							    
							    fornecedores_cod_fornecedor,
							    Empresas_cod_empresa,
							    data_compra_equipamento,
							    preco_equipamento,
							    desc_equipamento,
							    marca_equipamento,
							    inform_equip
							  )
							VALUES(
							  "'.$_POST['tipo_equip'].'" ,
							  '.$_POST['forn_equip'].' ,
							  '.$_SESSION['cod_empresa'].',
							  "'.$_POST['data_compra'].'" ,
							  "'.$_POST['preco_equip'].'" ,
							  "'.$_POST['desc_equip'].'" ,
							  "'.$_POST['marca_equip'].'",
							  "'.$_POST['coment_equip'].'" 
							)';

				$var3 = mysqli_query($this->getLink()  , $sql2);

				echo $sql2;

			}

		}




		?>
		<div class='panel-body'>
   			<form class='form-horizontal' role='form' method="POST">
		        <div class='form-group'>	
		        	<center>	          
					<b><h2>CADASTRO DE EQUIPAMENTOS</h2></b>
		        	</center>	          

					</br>
					</br>
		            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'> Tipo de Equipamento</label>
		            <div class='col-md-2'>
		              <select class='form-control' name='tipo_equip'>
		                <option value="Mouse">Mouse</option>
		                <option value="Hard Disk">HD - Hard Disk</option>
		                <option value="Teclado">Teclado</option>
		                <option value="Monitor">Monitor</option>
		                <option value="Placa-mãe">Placa-mãe</option>
		                <option value="Processador">Processador</option>
		                <option value="Placa de vídeo">Placa de Vídeo</option>
		                <option value="Fonte de Alimentação ">Fonte de alimentação</option>
		              </select>
		            </div>
				</div>
				<div class='form-group'>
		            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Descrição do Equip.</label>
		            <div class='col-md-8'>		             
		              	<div class='col-md-3 indent-small'>
			                <div class='form-group internal'>
			                	<input class='form-control' name='desc_equip' placeholder='Que produto é?' style="width:420px; " type='text'>
			                </div>
		              	</div>             
		            </div>
		        </div>
		        <div class='form-group'>
		            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Data de Compra</label>
		            <div class='col-md-8'>
		              <div class='col-md-2'>
		                <div class='form-group internal'>
		                  <input class='form-control col-mg-8' name='data_compra' style="width:160px;"  type='date' max="31-12-2099"  >
		                </div>
		              </div>              
		            </div>
		        </div>

		        <div class='form-group'>

		            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Fornecedor</label>
		            <div class='col-md-6'>
		              <div class='form-group'>
		                <div class='col-md-11'>
				              <select class='form-control' name='forn_equip'>
				                
				              	<?php 

					              	while ($ff = mysqli_fetch_array($fone)) {

				              			echo ' <option value="'.$ff['cod_fornecedor'].'">'.$ff['nome_fornecedor'].'</option>';
					              	 
					              	}

				              	?>
				              </select>
		                </div>
		              </div>
		            </div>
		           	<div class='form-group'>
		            	<label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Preço do Produto</label>
			            <div class='col-md-6'>
			              <div class='form-group'>
			                <div class='col-md-11'>
			                  <input class='form-control' name='preco_equip'  style="width:210px"   placeholder='Quanto você pagou por isso?' type='text'>
			                </div>
			              </div>
			            </div>
		            </div>
		        </div>

		        <div class='form-group'>
		            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Marca do Equipamento</label>
		            <div class='col-md-8'>
		              <div class='col-md-3'>
		                <div class='form-group internal input-group'>
			                <select class='form-control' name='marca_equip'>
				                <option value="HP">HP</option>
				                <option value="Samsung">Samgung</option>
				                <option value="Intel">Intel</option>
				                <option value="CEO">CEO</option>
				                <option value="Positivo">Positivo</option>
				                <option value="KMEK">KMEK</option>
				                <option value="LG">LG</option>
				                <option value="MTEK">MTEK</option>
			              	</select>
		                  		                  
		                </div>
		              </div>		              
		            </div>
		        </div>        
		        
		        <div class='form-group'>
		            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Observações e comentários sobre o equipamento</label>
		            <div class='col-md-6'>
		              <textarea class='form-control' name='coment_equip' placeholder='Comentários sobre o equipamento' rows='3'></textarea>
		            </div>
		        </div>
		        <div class='form-group'>
		            <div class='col-md-offset-4 col-md-3'>
		              <button class='btn-lg btn-primary' type='submit'>Cadastrar Equipamento</button>
		              <input type="hidden" name="acao" value="cadastro">
		            </div>
		            <div class='col-md-3'>
		              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancelar Cadastro</button>
		            </div>
		        </div>
    		</form>
  		</div>  		
		<?php

	}

	function cadastrofornec(){
		include ('conexao.php');


		if (($_GET['cadastrofornec'] == 'cadastro') AND  (isset($_POST['nome_fornecedor']))){
				
				$erro =  false;					


				if ($_POST['razao_social_func'] == '' ) {
					
					$erro = ' Razão Social está vazia! \n';
				}

				if ($_POST['nome_fornecedor'] == '' ) {
					
					$erro .= ' nomefornecedor está vazio!  \n';
				}

				if ($_POST['cnpj_fornec'] == '' ) {
					
					$erro .= ' CNPJ Fornecedor está vazio!  \n';
				}


				if ($_POST['cidade_forne'] == '' ) {
					
					$erro .= ' A Cidade do  Fornecedor está vazio!  \n';
				}

				if ($_POST['bairro_forne'] == '' ) {
					
					$erro .= ' O Bairro do  Fornecedor está vazio!  \n';
				}


				if ($_POST['rua_forne'] == '' ) {
					
					$erro .= ' A Rua  do  Fornecedor está vazia!  \n';
				}

				if ($_POST['telefone_forne'] == '' ) {
					
					$erro .= 'O telefone do  Fornecedor está vazia!  \n';
				}

				if ($_POST['comentario_forne'] == '' ) {
					
					$erro .= ' Cadastre um comentário sobre o Fornecedor!  \n';
				}



				if ($erro) {
					
					echo   '<script> alert("'.$erro.'") </script>';
				}else{ 

					$sql =  'INSERT
							INTO
							  fornecedores(								    
							    nome_fornecedor,
							    cnpj_fornecedor,
							    rua_fornecedor,
							    bairro_fornecedor,
							    cidade_fornecedor,
							    telefone_fornecedor,
							    razao_social,
							    comentario_fornecedor,
							    empresa_fornecedores

							  )
							VALUES(
							   "'.$_POST['nome_fornecedor'].'",
							 	 "'.$_POST['cnpj_fornec'].'",
								 "'.$_POST['rua_forne'].'",
								 "'.$_POST['bairro_forne'].'",
								 "'.$_POST['cidade_forne'].'",
							 	 "'.$_POST['telefone_forne'].'",
							 	 "'.$_POST['razao_social_func'].'",
							 	 "'.$_POST['comentario_forne'].'",
							 	 '.$_SESSION['cod_empresa'].')';
				
						
						mysqli_query($this->getLink()  , $sql);

				}

			}
				

		
		?>	

     
	      	<div class='panel-body'>
	        	<form class='form-horizontal' role='form' method="POST" action="?cadastrofornec=cadastro">
	          <div class='form-group'>
		          <CENTER>
		          <B>  <h2>  CADASTRO DE FORNECEDORES</h2> </B>
		          </BR>
		          </br>
	              <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'> Qual o nome do Fornecedor?</label>
		            <div class='col-md-2'>
		              <input class='form-control' name='nome_fornecedor' placeholder='Digite aqui o nome do fornecedor' style="width:420px; " type='text'>
		            </div>
	          </div>
	          <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2'  >Razão Social</label>
	            <div class='col-md-8'>
	             <input class='form-control' name='razao_social_func' placeholder='Nome Razão Social' style="width:420px; " type='text'>
	             
	              <div class='col-md-3 indent-small'>              
	              </div>         
	          </div>
	          </div>
	            <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2'   >CNPJ</label>
	            <div class='col-md-8'>
	             <input class='form-control' name='cnpj_fornec' placeholder='Número CNPJ' style="width:420px; " type='text'>
	             
	              <div class='col-md-3 indent-small'>              
	              </div>         
	          </div>
	          </div>         
	             
	          
	          <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Cidade Fornecedor</label>
	            <div class='col-md-6'>
	              <div class='form-group'>
	                <div class='col-md-11'>
	                   <select class='form-control' name='cidade_forne' style="width:210px;" >
	                <option> Timbó </option>
	                <option> Blumenau</option>
	                <option> Rio dos Cedros </option>
	                <option> Benedito Novo </option>
	                <option> Rodeio</option>
	                <option> Ascurra </option>
	                <option> Indaial </option>
	                <option> Jaraguá do Sul</option>
	                <option> Rio das Pedras </option>               
	              </select>                     
	                </div>
	              </div>
	            </div>

	         

	             <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Bairro Fornecedor</label>
	            <div class='col-md-8'>
	              <div class='col-md-3'>
	                <div class='form-group internal input-group'>
	                  <input class='form-control datepicker' placeholder="Digite o bairro do Fornecedor" style="width:350px" name='bairro_forne'>                 
	                 </div>
	              </div>              
	            </div>
	          </div>
	         
	            
	          <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Rua Fornecedor</label>
	            <div class='col-md-8'>
	              <div class='col-md-3'>
	                <div class='form-group internal input-group'>
	                  <input class='form-control datepicker' placeholder="Digite a rua do Fornecedor" style="width:350px" name='rua_forne'>                 
	                 </div>
	              </div>              
	            </div>
	          </div>                       
	            <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Telefone Fornecedor</label>
	            <div class='col-md-8'>
	              <div class='col-md-3'>
	                <div class='form-group internal input-group'>
	                  <input class='form-control datepicker' placeholder="Digite o Telefone do Fornecedor" style="width:250px" name='telefone_forne'>                 
	                 </div>
	              </div>              
	            </div>
	          </div> 

	            <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Informações do Fornecedor</label>
	            <div class='col-md-6'>
	              <textarea class='form-control' name='comentario_forne' placeholder='Comentários do Fornecedor' rows='3'></textarea>
	            </div>
	          </div>
	          <div class='form-group'>
	            <div class='col-md-offset-4 col-md-3'>
	              <button class='btn-lg btn-primary' type='submit'>Cadastrar Fornecedor</button>
	              <input type="hidden" name="cadastrofornec" value="cadastro">
	            </div>
	            <div class='col-md-3'>
	              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancelar Cadastro</button>
	            </div>
	          
			  </div>
			  </div>

		<?php 
		 
	}

	function pesqfunc(){
		

		?>
			<div class='panel-body'>
				<div class="sticky-wrap">
					<table class="sticky-enabled" style="margin: 0px; width: 100%;">
						<thead>
							<tr>
								<th>Nome do Equipamento</th>
								<th>Data de Compra</th>
								<th>Preço do Equipamento</th>
								<th>Nome do fornecedor</th>
								<th>Nome do Conjunto</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr><td class="user-name">gary coleman</td><td class="user-email">gary.coleman21@example.com</td><td class="user-phone">(398)-332-5385</td><td class="user-mobile">(888)-677-3719</td></tr>
							<tr><td class="user-name">rose parker</td><td class="user-email">rose.parker16@example.com</td><td class="user-phone">(293)-873-2247</td><td class="user-mobile">(216)-889-4933</td></tr>
							<tr><td class="user-name">chloe nelson</td><td class="user-email">chloe.nelson18@example.com</td><td class="user-phone">(957)-213-3499</td><td class="user-mobile">(207)-516-4474</td></tr>
							<tr><td class="user-name">eric bell</td><td class="user-email">eric.bell16@example.com</td><td class="user-phone">(897)-762-9782</td><td class="user-mobile">(565)-627-3002</td></tr>
							<tr><td class="user-name">douglas hayes</td><td class="user-email">douglas.hayes92@example.com</td><td class="user-phone">(231)-391-6269</td><td class="user-mobile">(790)-838-2130</td></tr>
							<tr><td class="user-name">cameron brown</td><td class="user-email">cameron.brown32@example.com</td><td class="user-phone">(204)-488-5204</td><td class="user-mobile">(508)-463-6811</td></tr>
							<tr><td class="user-name">nevaeh diaz</td><td class="user-email">nevaeh.diaz99@example.com</td><td class="user-phone">(436)-578-2946</td><td class="user-mobile">(906)-412-3302</td></tr>
							<tr><td class="user-name">kathy miller</td><td class="user-email">kathy.miller62@example.com</td><td class="user-phone">(724)-705-3555</td><td class="user-mobile">(764)-841-2531</td></tr>
							<tr><td class="user-name">susan king</td><td class="user-email">susan.king88@example.com</td><td class="user-phone">(774)-205-7754</td><td class="user-mobile">(639)-267-9728</td></tr>
							<tr><td class="user-name">jeffery ramirez</td><td class="user-email">jeffery.ramirez83@example.com</td><td class="user-phone">(723)-243-7706</td><td class="user-mobile">(172)-597-3422</td></tr>
							<tr><td class="user-name">gary coleman</td><td class="user-email">gary.coleman21@example.com</td><td class="user-phone">(398)-332-5385</td><td class="user-mobile">(888)-677-3719</td></tr>
							<tr><td class="user-name">rose parker</td><td class="user-email">rose.parker16@example.com</td><td class="user-phone">(293)-873-2247</td><td class="user-mobile">(216)-889-4933</td></tr>
							<tr><td class="user-name">chloe nelson</td><td class="user-email">chloe.nelson18@example.com</td><td class="user-phone">(957)-213-3499</td><td class="user-mobile">(207)-516-4474</td></tr>
							<tr><td class="user-name">eric bell</td><td class="user-email">eric.bell16@example.com</td><td class="user-phone">(897)-762-9782</td><td class="user-mobile">(565)-627-3002</td></tr>
							<tr><td class="user-name">douglas hayes</td><td class="user-email">douglas.hayes92@example.com</td><td class="user-phone">(231)-391-6269</td><td class="user-mobile">(790)-838-2130</td></tr>
							<tr><td class="user-name">cameron brown</td><td class="user-email">cameron.brown32@example.com</td><td class="user-phone">(204)-488-5204</td><td class="user-mobile">(508)-463-6811</td></tr>
							<tr><td class="user-name">nevaeh diaz</td><td class="user-email">nevaeh.diaz99@example.com</td><td class="user-phone">(436)-578-2946</td><td class="user-mobile">(906)-412-3302</td></tr>
							<tr><td class="user-name">kathy miller</td><td class="user-email">kathy.miller62@example.com</td><td class="user-phone">(724)-705-3555</td><td class="user-mobile">(764)-841-2531</td></tr>
							<tr><td class="user-name">susan king</td><td class="user-email">susan.king88@example.com</td><td class="user-phone">(774)-205-7754</td><td class="user-mobile">(639)-267-9728</td></tr>
							<tr><td class="user-name">jeffery ramirez</td><td class="user-email">jeffery.ramirez83@example.com</td><td class="user-phone">(723)-243-7706</td><td class="user-mobile">(172)-597-3422</td></tr>
							<tr><td class="user-name">gary coleman</td><td class="user-email">gary.coleman21@example.com</td><td class="user-phone">(398)-332-5385</td><td class="user-mobile">(888)-677-3719</td></tr>
							<tr><td class="user-name">rose parker</td><td class="user-email">rose.parker16@example.com</td><td class="user-phone">(293)-873-2247</td><td class="user-mobile">(216)-889-4933</td></tr>
							<tr><td class="user-name">chloe nelson</td><td class="user-email">chloe.nelson18@example.com</td><td class="user-phone">(957)-213-3499</td><td class="user-mobile">(207)-516-4474</td></tr>
							<tr><td class="user-name">eric bell</td><td class="user-email">eric.bell16@example.com</td><td class="user-phone">(897)-762-9782</td><td class="user-mobile">(565)-627-3002</td></tr>
							<tr><td class="user-name">douglas hayes</td><td class="user-email">douglas.hayes92@example.com</td><td class="user-phone">(231)-391-6269</td><td class="user-mobile">(790)-838-2130</td></tr>
							<tr><td class="user-name">cameron brown</td><td class="user-email">cameron.brown32@example.com</td><td class="user-phone">(204)-488-5204</td><td class="user-mobile">(508)-463-6811</td></tr>
							<tr><td class="user-name">nevaeh diaz</td><td class="user-email">nevaeh.diaz99@example.com</td><td class="user-phone">(436)-578-2946</td><td class="user-mobile">(906)-412-3302</td></tr>
							<tr><td class="user-name">kathy miller</td><td class="user-email">kathy.miller62@example.com</td><td class="user-phone">(724)-705-3555</td><td class="user-mobile">(764)-841-2531</td></tr>
							<tr><td class="user-name">susan king</td><td class="user-email">susan.king88@example.com</td><td class="user-phone">(774)-205-7754</td><td class="user-mobile">(639)-267-9728</td></tr>
							<tr><td class="user-name">jeffery ramirez</td><td class="user-email">jeffery.ramirez83@example.com</td><td class="user-phone">(723)-243-7706</td><td class="user-mobile">(172)-597-3422</td></tr>
						</tbody>
					</table><table class="sticky-thead" style="width: 882px; opacity: 0; top: 0px;"><thead>
							<tr>
								<th style="width: 186px;">Name</th>
								<th style="width: 323px;">Email</th>
								<th style="width: 186px;">Phone</th>
								<th style="width: 187px;">Mobile</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		<?php 

	}

	function cadastroconj(){



		if ($_POST) {
		 
			foreach ($_POST as $key => $value) {

				if (is_numeric($value)) {

					$codee = explode('^-^', $key);

					if (sizeof($codee) == 2) {
					var_dump($codee);

						$sql = 'INSERT INTO
									   conjuntos(									    
									    nome_conjunto,
									    equipamento_codigo,
									    codigo_funcionario
									  )
									VALUES("'.$_POST['nome_conjunto'].'",'.$value.', '.$_POST['nome_funcionario'].')';

						mysqli_query($this->getLink() ,$sql );

					}

				}
				 
			}

		}


		$funSQL= 'SELECT cod_funcionario, nome_funcionario  FROM funcionarios WHERE Empresas_cod_empresa ='. $_SESSION['cod_empresa'];

		$equSQL= 'SELECT * FROM equipamentos WHERE Empresas_cod_empresa ='.$_SESSION['cod_empresa'];

		$funT = mysqli_query($this->getLink(), $funSQL); 

		$equiT = mysqli_query($this->getLink(), $equSQL);

		
		?>
		<script type="text/javascript">

			function Deletar(ele) {
				// body...
				console.log($(ele));

				$(ele).remove();

			}

			function addEqui(){

				var test = $('#prod :selected').text();
				var cod =  $('#prod :selected').val();

	

				if ($('#equir'+cod).text()) {
					alert('item ja na lista');
				}else{

					$('<tr/>',{
					id : 'equir'+cod,

					}).appendTo('#conjuntos');

					$('<td/>',{
						id : 'equi'+cod,
						text : test,
						style:'width:100%'

					}).appendTo('#equir'+cod );



					$('<td/>',{
						id : 'equid'+cod,
					}).appendTo('#equir'+cod );

					$('<input/>',{
						id : 'equid'+cod,
						type:"button",
						onClick:"Deletar('#equir"+cod+"')",
						style:"width:100%",
						value:"Excluir"
					}).appendTo('#equid'+cod );

					$('<input/>',{
						type:"hidden",
						name: 'equi^-^'+cod,
						value:cod
					}).appendTo('#equid'+cod );

				}			


			}



		</script>

  

		<div class='panel-body'>
   			<form class='form-horizontal' role='form' method="POST">
		       <div class='form-group'>	
		        	<center>	          
					<b><h2>CADASTRO DE CONJUNTOS</h2></b>
		        	</center>	 

		        	<!-- começando o formulário de CONJUNTOS-->
				<div class='form-group'>
		            <label class='control-label col-md-2 col-md-offset-2' for='id_title'> Nome do Conjunto </label>
		            <div class='col-md-8'>		             
		              	<div class='col-md-3 indent-small'>
			                <div class='form-group internal'>
			                	<input class='form-control' name='nome_conjunto' placeholder='Qual nome do Conjunto? Ex( SELI-0001/ SELI-0010)' style="width:420px; " type='text'>
			                </div>
		              	</div>             
		            </div>
		        </div>
         	  </div>

         	   <div class='form-group'>
		            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Nome do Funcionário</label>
		            <div class='col-md-8'>
		              <div class='col-md-3'>
		                <div class='form-group internal input-group'>
			                <select class='form-control' name='nome_funcionario'  style="width:400px">
						                <option>Procure o dono do conjunto... </option> 
						                <?php 

						                while ($fr = mysqli_fetch_array($funT)) {
						                	# code...
						                	echo '<option value="'.$fr['cod_funcionario'].'">'.$fr['nome_funcionario'].'('.$fr['cod_funcionario'].')</option> ';
						                }

						                ?>
			              	</select>
			              	<br><br>
			              	---Nome do funcionário que será atribuído o conjunto--
		                  		                  
		                </div>
		              </div>		              
		            </div>
		      </div>        



		<!-- Button trigger modal -->
		    <center>
			<button type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal">
			Novo Item
			</button>
			<br><br>
			 
			 <div class="sticky-wrap">
			<table class="sticky-enabled" style="margin: 0px; width: 60%;">
				<thead>
					<tr>
						<th style="width:80%">Nome do Equipamento</th>
						<th style="width:20%">Alterar/Excluir</th>
						
					</tr>
				</thead>
				<tbody id="conjuntos">
 
				</tbody>
			</table>

				</div>


		    <button type="submit" class="btn btn-primary btn-lg" >Salvar Conjunto!</button>
		</form>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">NOME DO PRODUTO</h4>
			      </div>
			      <div class="modal-body">
			        	    <select class='form-control' id="prod" name='nome_funcionario'  style="width:400px">
				                <option>Procure o dono do conjunto... </option> 
				                <?php 

				                while ($er = mysqli_fetch_array($equiT)) {
				                	# code...
				                	echo '<option value="'.$er['cod_equipamento'].'">'.$er['inform_equip'].'  ('.$er['nome_equipamento'].' - '.$er['marca_equipamento'].')</option> ';
				                }

				                ?>
			              	</select>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal"> Sair! </button>
			        <button type="button" onClick="addEqui()"   data-dismiss="modal" class="btn btn-primary">Acrescentar!</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>



		<?php

	}

}/*Fim da classe */






?>