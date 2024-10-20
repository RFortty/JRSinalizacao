<!DOCTYPE html>
<html>
<head> <!--inicia o cabeçalho da página-->
  <meta charset="UTF-8">
  <title>JR Sinalizacao - Produtos</title> <!--exibe o titulo da página na aba do navegador-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
				
	<link id="estilopadrao" rel="stylesheet" href="css/styleOrange.css"> <!--relaciona um estilo css-->
	<script src="js/meuscript.js"></script> <!--relaciona um javascript-->

</head> <!--finaliza o cabeçalho-->

<body> <!--inicia o corpo da página-->
<div class="container clearfix"> <!--usa a classe container do css-->
		
	<header class="banner"> <!--usa a classe banner do css no cabeçalho do corpo da página-->
		<img src="imagem/top.jpg" alt="Top" class="logo">JR Sinalizacao <!--insere uma imagem e usa a classe logo do css-->
	</header>
		<h1></h1>
		<!--exibe um botão e executa a função "dataHora" do javascript-->
		<button type="button" onclick="dataHora()" id="demo">Clique aqui para ver o dia e hora de agora...</button>
		
		<nav class="menu"> <!--usa a classe menu do css-->
        <ul> <!--inicia a declaração de uma lista não ordenada-->
          <li><a href="index.php">Home</a></li> <!--exibe um link como primeiro item da lista-->
          <li><a href="quemsomos.php">Quem Somos</a></li> <!--exibe um link como segundo item da lista-->
          <li><a href="#">Produto</a></li> <!--exibe um link como terceiro item da lista-->
          <li><a href="contato.php">Contato</a></li> <!--exibe um link como quarto item da lista-->
        </ul> <!--finaliza a lista-->
		</nav>

      <div class="coluna"> <!--usa a classe coluna do css-->
        Sinalizacao Vertical: 
		<form action="produto.php" method="POST">
			<? carregacombo();  ?>
				<input type="submit" value="Carregar"><br>
			<? carregaimagens();  ?>
		</form>	
      </div>

  <footer class="footer"> <!--usa a classe footer do css no rodapé da página-->
      <p>2015. JR Sinalizacao</p> <!--parágrafo-->
  </footer>
  
</div>
 
</body> <!--finaliza o corpo da página-->
</html>

<?  // aqui começa o php ...

function carregacombo() {
	
	//Criamos uma variável que guardará o diretório...
	$path = "albuns";
	$dir = opendir($path);
	//Rodamos com um while este diretório ...
	while ($album = readdir($dir)){
		if (($album != '.') && ($album != '..')){
			$array[$album] = $album;
		}
	}
	//Criamos aqui o elemento ComboBox...
	echo '<select name="selecao"> ';
	echo '<option></option>';
                    foreach ($array as $key => $value):
                        echo '<option value="' . $key . '">' . $value . '</option>';
                    endforeach;
     echo '</select>';        
}
//-----------------------------------------------------------------------------------------------------
function carregaimagens() {

	if ((strlen($_POST["selecao"])) < 1) {
			exit("");
	}
	echo '<br><br><p></p>';
	echo '<p>Visualizando fotos do album ' . $_POST["selecao"] . '</p>';
	//Criamos uma variável que guardará o diretório...
	$path_r = "albuns/" . $_POST["selecao"];
	$dir_r = opendir($path_r);

	//Rodamos com um while este diretório ...
	while ($arq_r = readdir($dir_r)){	
	//Verificamos se é um arquivo valido
		if (($arq_r != '.') && ($arq_r != '..')){
			echo '<img src=' . $path_r . '/' . $arq_r . '>'; 	
		}
	}
}	
// aqui termina o php ...	?>