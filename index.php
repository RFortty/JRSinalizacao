<?php
	ini_set('default_charset','UTF-8');
?>
<!DOCTYPE html>
<html>
<head> <!--inicia o cabeçalho da página-->
  <meta charset="UTF-8">
  <title>JR Sinalizacao</title> <!--exibe o titulo da página na aba do navegador-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
				
	<link id="estilopadrao" rel="stylesheet" href="css/styleOrangeP.css"> <!--relaciona um estilo css-->
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
          <li><a href="#">Home</a></li> <!--exibe um link como primeiro item da lista-->
          <li><a href="quemsomos.php">Quem Somos</a></li> <!--exibe um link como segundo item da lista-->
          <li><a href="produto.php">Produto</a></li> <!--exibe um link como terceiro item da lista-->
          <li><a href="contato.php">Contato</a></li> <!--exibe um link como quarto item da lista-->
		  <!--<li><a href="logar.php">Login</a></li> <!--exibe um link como quinto item da lista-->
        </ul> <!--finaliza a lista-->
		</nav>

      <div class="coluna"> <!--usa a classe coluna do css-->
        <img src="imagem/sinalizacao.jpg"> <!--exibe uma imagem-->
        <div id="texto">
			<? carrega(0); ?> <!--carrega as notícias da 1ª coluna da página dinamicamente através da função em php-->
		</div>
      </div>

      <div class="coluna"> <!--usa a classe coluna do css-->
        <img src="imagem/saneamento.jpg"> <!--exibe uma imagem-->
		<div id="texto">
			<? carrega(1); ?> <!--carrega as notícias da 2ª coluna da página dinamicamente através da função em php-->
		</div>
      </div>

      <div class="coluna"> <!--usa a classe coluna do css-->
        <img src="imagem/fazendo.jpg"> <!--exibe uma imagem-->
        <div id="texto">
			<? carrega(2); ?> <!--carrega as notícias da 3ª coluna da página dinamicamente através da função em php-->
		</div>
      </div>

      <div class="coluna"> <!--usa a classe coluna do css-->
        <img src="imagem/semaforo.jpg"> <!--exibe uma imagem-->
        <div id="texto">
			<? carrega(3); ?> <!--carrega as notícias da 4ª coluna da página dinamicamente através da função em php-->
		</div>
      </div>

  <footer class="footer"> <!--usa a classe footer do css no rodapé da página-->
      <p><a href="logar.php">Login</a> - 2015. JR Sinalizacao</p> <!--link para acessar a página restrita-->
  </footer>
  
</div>
 
</body> <!--finaliza o corpo da página-->
</html>

<?  // aqui começa o php ...
function carrega($indice) {

	//Criamos uma variável que guardará o diretório...
	$path = "textos";
	$dir = opendir($path);
	//Rodamos com um while este diretório ...
	while ($arq = readdir($dir)){
		//Verificamos se é um arquivo valido e começa com post_texto_ (nesse caso verifica a última string do nome do arquivo)
		if (($arq != '.') && ($arq != '..') && (substr_compare($arq, 'post_texto_' . $indice, 0, 12) == 0)){
			//carregamos a variável arquivo
			$arquivo = 'textos/' . $arq;
			//abrimos o arquivo para leitura
			$fp = fopen($arquivo,'r');
			//pegamos o titulo que esta na primeira linha
			$titulo = fgets($fp);
			//imprimimos o titulo na tela como h2
			echo '<h2>' . $titulo . '</h2>';
			//lemos o arquivo
			$texto = fread($fp, filesize($arquivo));
			//transformamos as quebras de linha em etiquetas <br>
			$texto = nl2br($texto);
			//imprimimos o paragrafo
			echo '<p>' . $texto . '</p>';
			//fechamos o arquivo
			//fclose($arquivo);
		}					
	}	
}	
// aqui termina o php ...	?>