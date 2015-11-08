
<!DOCTYPE html>

<?php
var_dump($_POST);

include('conexao.php');


$_GET['acao'] = isset($_GET['acao']) ? $_GET['acao'] : '';
if ($_POST['adicionar'] == 'adccategorias'){
$sql ='
	
	INSERT INTO `categorias`( `nome_categoria`) VALUES ("' .$_POST['nome_categoria']. '")'	;
		$retornando = mysqli_query($conexao,$sql);
		echo '<br>';
		echo '$retornando';

	}
if ($_POST['acao'] == 'cadastrar') {
$sql ='
	
	INSERT INTO produtos (nome_produto) VALUES ("' .$_POST['nome_produto']. '")'	;
	$retornando = mysqli_query($conexao,$sql);
	 if ($res) {
		$sql1=	'

				INSERT INTO `estoque`( `id_produto`, `id_categoria`, `valor`) VALUES (((SELECT MAX(id_produto) FROM produtos)),'.$_POST['Categorias'].','.$_POST['preco_produto'].')


		';
		mysqli_query($conexao,$sql);



	 }
	}

?>
<html>
<head>
	<title>--Supermercado--</title>
</head>
<body>

		<input type="hidden" name="menu_principal" value="menu_principal">
		<a href="?acao=produtos"><button>Mostrando</button></a>
		<a href="?acao=cadastrar"><button>Adicionar</button></a>
		<a href="?acao=adccategorias"><button>Categorias</button></a>

</form>
<?php
if ($_GET['acao'] == 'cadastrar') {

	$sql3= 'SELECT * FROM categorias';

	$ret = mysqli_query($conexao,$sql3);
echo $sql3;
?>


<form method="POST">
<label>Adicionando Produtos ao mercado</label>
		<input type="hidden" id="cadastrar" value="cadastrar">
		<input type="text" name="nome_produto">
		<input type="text"  name="preco_produto">
			<select name="Categorias">
					<option>Todas as categorias</option>
						<?php
							while ($listando =  mysqli_fetch_array($ret)) {
								echo '<option  value="'.$listando['id_categoria'].'">'.$listando['nome_categoria'].'</option>';
							}


						?>


			</select>

		<button type="submit"> Cadastrar </button>
</form>
<?php
}
if ($_GET['acao'] == 'adccategorias') {
	


?>

<form method="POST">
	<label> Adicionando Categorias</label>
		<input type="hidden" name="adicionar" value="adccategorias">
		<input type="text" name="nome_categoria">
	
		
		<button type="submit"> adicionar </button>
</form>
<?php
}
?>

</body>
</html>