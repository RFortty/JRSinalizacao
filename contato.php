<!DOCTYPE html>
<html>
<head> <!--inicia o cabeçalho da página-->
  <meta charset="UTF-8">
  <title>JR Sinalizacao</title> <!--exibe o titulo da página na aba do navegador-->
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
          <li><a href="produto.php">Produto</a></li> <!--exibe um link como terceiro item da lista-->
          <li><a href="#">Contato</a></li> <!--exibe um link como quarto item da lista-->
        </ul> <!--finaliza a lista-->
		</nav>

     <div class="coluna"> <!--inicia o posicionamento da classe "coluna"-->
		<h2><i>Envie sua mensagem preenchendo o formulario abaixo:</i></h2> <!--cabeçalho da coluna-->
				
	<?php>
		include "conexao.php";

		if(!isset($_POST["submit"])) //verifica se a variável $_POST não está vazia
		{
			//echo "<p align=\"center\"><strong>Envie sua mensagem preenchendo o formulario abaixo:</strong></p><br/>";
			echo "<form enctype=\"multipart/form-data\" action=\"enviar.php\" name=\"form\" method=\"post\">";
			
			echo "<h3>Nome:<br /><input name=\"nome\" pattern=\"[a-zA-Z0-9]+\" type=\"text\" maxlength=\"30\" size=\"30\" placeholder=\"Informe seu nome\" style=\"text-transform: uppercase\" required autofocus/></h3>";
			echo "(somente caracteres alfanumericos)";
			echo "<h3>E-mail:<br /><input name=\"email\" type=\"email\" maxlength=\"50\" size=\"30\" placeholder=\"Informe seu e-mail\" style=\"text-transform: lowercase\" required/></h3><br/>";
			echo "<h3>Assunto:</h3>";
				echo "<select name=\"assunto\" size=\"1\">";
				echo "<option value=\"selecione\" selected=\"selected\">Selecione uma opcao...</option>";
				echo "<option value=\"Duvidas\">Duvidas</option>";
				echo "<option value=\"Reclamacao\">Reclamacoes</option>";
				echo "<option value=\"Sugestao\">Sugestoes</option>";
				echo "<option value=\"Vendas\">Vendas</option>";
				echo "</select><br/><br>";
			echo "<h3>Mensagem:</h3><textarea name=\"mensagem\" rows=\"10\" cols=\"50\" maxlength=\"200\" placeholder=\"Informe a mensagem\" required/></textarea><br/>";
									
			echo "<input type=\"reset\" value=\"Limpar\"/>&nbsp<input name=\"submit\" type=\"submit\" value=\"Enviar\"/>";
			echo "<p align=\"left\"><a href=\"contato.php\"></a></p>";
			echo "</form>";
			
		}
		else 
		{
			// Se houver mensagens de erro, exibe-as
			if (count($error) != 0) 
			{
				foreach ($error as $erro) 
				{
					echo $erro . "<br/>";
				}
			}
		}
	?>
		
</div> <!--finaliza o posicionamento da classe "coluna"-->

  <footer class="footer"> <!--usa a classe footer do css no rodapé da página-->
      <p>2015. JR Sinalizacao</p> <!--parágrafo-->
  </footer>
  
</div>
 
</body> <!--finaliza o corpo da página-->
</html>