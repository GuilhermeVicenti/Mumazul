<?php 






/**
* boday
*/
class body {

	
	function __construct(){
				 ?>
				 
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
		                  <img src="../img/favicon.png" class="user-image" alt="User Image">
		                  <span class="hidden-xs"><?php  echo $_SESSION['empresa'] ?> </span>
		                </a>
		                <ul class="dropdown-menu">
		                  <!-- User image -->
		                  <li class="user-header">
		                    
		                    <p>
		                     <?php  echo $_SESSION['empresa'] ?>
		                     
		                    </p>
		                  </li>
		                  
		                  </li>
		                  <!-- Menu do usuário para deslogar do sistemA-->
		                  <li class="user-footer">
		                    <div class="pull-right">
		                      <!--  DESLOGAR USUÁRIO -->
		                      <a href="../login.php?logout=logout" class="btn btn-default btn-flat"> Deslogar </a>
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
		              <p> <?php  echo $_SESSION['empresa'] ?> </p>
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

			?>

			<form class='form-horizontal' role='form'>
	          <div class='form-group'>
	          <CENTER>
	          <B>  <h2>              CADASTRO DE FUNCIONÁRIOS </h2> </B>
	          </BR>
	          </br>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'> Qual o nome do Funcionário?</label>
	            <div class='col-md-2'>
	              <input class='form-control' id='nome_funcionario' placeholder='Digite aqui o nome do funcionário' style="width:420px; " type='text'>
	            </div>
	          </div>
	          <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Este Usuário é --></label>
	            <div class='col-md-8'>
	               <select class='form-control' id='tipo_usuario' style="width:210px;" >
	                <option> Administrador </option>
	                <option>  Funcionário Comum </option>
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
	                  <input class='form-control col-mg-8' id='data_contratacao' style="width:160px;"  type='date' max="31-12-2099"  >
	                </div>
	              </div>
	              
	              
	            </div>
	          </div>
	          <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Turno do funcionário</label>
	            <div class='col-md-6'>
	              <div class='form-group'>
	                <div class='col-md-11'>
	                   <select class='form-control' id='tipo_usuario' style="width:210px;" >
	                <option> 05:00 às 13:48 </option>
	                <option>  07:15 às 17:15 </option>
	              </select>
	                     
	                </div>
	              </div>
	            </div>

	            <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Nome de Usuário</label>
	            <div class='col-md-6'>
	              <div class='form-group'>
	                <div class='col-md-11'>
	                  <input class='form-control' id='id_fornecedor'  style="width:410px"   placeholder='nome de Usuário do dominio empresarial' type='text'>
	                </div>
	              </div>
	            </div>
	             <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Setor do usuário</label>
	            <div class='col-md-8'>
	               <select class='form-control' id='tipo_usuario' style="width:210px;" >
	                <option> == </option>
	               
	              </select>
	             
	              <div class='col-md-3 indent-small'>              
	              </div>         
	          </div>
	          </div>


	         
	            
	          <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Senha do usuário</label>
	            <div class='col-md-8'>
	              <div class='col-md-3'>
	                <div class='form-group internal input-group'>
	                  <input class='form-control datepicker' placeholder="Digite a senha do Usuario" id='id_checkin'>
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
	                  <input class='form-control' id='id_fornecedor'  style="width:410px"   placeholder='Digite o e-mail do funcionário' type='text'>
	                </div>
	              </div>
	            </div>
	          
	          <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Senha de E-mail</label>
	            <div class='col-md-6'>
	              <div class='form-group'>
	                <div class='col-md-11'>
	                  <input class='form-control' id='id_fornecedor'  style="width:410px"   placeholder='nome de Usuário do dominio empresarial' type='text'>
	                </div>
	              </div>
	            </div>

	            <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Usuário Skype</label>
	            <div class='col-md-6'>
	              <div class='form-group'>
	                <div class='col-md-11'>
	                  <input class='form-control' id='id_fornecedor'  style="width:410px"   placeholder='Qual nome do usuário do Skype' type='text'>
	                </div>
	              </div>
	            </div>

	            <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Senha do Skype</label>
	            <div class='col-md-6'>
	              <div class='form-group'>
	                <div class='col-md-11'>
	                  <input class='form-control' id='id_fornecedor'  style="width:410px"   placeholder='Senha do Skype' type='text'>
	                </div>
	              </div>
	            </div>



	        
	          <div class='form-group'>
	            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Informações do Usuário </label>
	            <div class='col-md-6'>
	              <textarea class='form-control' id='id_comments' placeholder='Comentários do Funcionário' rows='3'></textarea>
	            </div>
	          </div>
	          <div class='form-group'>
	            <div class='col-md-offset-4 col-md-3'>
	              <button class='btn-lg btn-primary' type='submit'>Cadastrar Funcionário</button>
	            </div>
	            <div class='col-md-3'>
	              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancelar cadastro</button>
	            </div>
	          </div>
	        </form>


			<?php 
			 
		}

		function cadastroequip(){


			?>
				 <div class='panel-body'>
       				 <form class='form-horizontal' role='form'>
          <div class='form-group'>
          <CENTER>
          <B>  <h2>              CADASTRO DE EQUIPAMENTOS </h2> </B>
          </BR>
          </br>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'> Tipo de Equipamento</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_accomodation'>
                <option>Mouse</option>
                <option>HD - Hard Disk</option>
                <option>Teclado</option>
                 <option>Monitor</option>
                  <option>Placa-mãe</option>
                   <option>Processador</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Descrição do Equip.</label>
            <div class='col-md-8'>
             
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='Que produto é?' style="width:420px; " type='text'>
                </div>
              </div>
             
                 
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Data de Compra</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control col-mg-8' id='data_compra' style="width:160px;"  type='date' max="31-12-2099"  >
                </div>
              </div>
              
              
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Fornecedor</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>

                  <input class='form-control' id='id_first_name' placeholder='Quem fornece o produto?' style="width:420px; " type='text'>
                <button class='btn-lg btn-primary' type='submit' style="width:12px"></button>&nbsp;&nbsp; Procure o Fornecedor
                     </br> </br>
                </div>
              </div>
            </div>


            	 <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_fornecedor'>Preço do Produto</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_fornecedor'  style="width:210px"   placeholder='Quanto você pagou por isso?' type='text'>
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
                  <input class='form-control datepicker' placeholder=" Qual a marca?" id='id_checkin'>
                  
                  </span>
                </div>
              </div>
              
            </div>
          </div>
          
        
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Observações e comentários sobre o equipamento</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='Comentários sobre o equipamento' rows='3'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit'>Cadastrar Equipamento</button>
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
								  `fornecedores`(								    
								    `nome_fornecedor`,
								    `cnpj_fornecedor`,
								    `rua_fornecedor`,
								    `bairro_fornecedor`,
								    `cidade_fornecedor`,
								    `telefone_fornecedor`,
								    `razao_social`,
								    `comentario_fornecedor`,
								    `empresa_fornecedores`

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
					
							


					}
					mysqli_query($link, $sql);



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
          

			<?php 

			

		}


}
 ?>