<?php
	// Iniciar Session PHP
	session_start();
	// Se o usuário não estiver logado manda ele para o formulário de login
	if ($_SESSION["Login"] != "YES") {
		header("Location: logar.php");
	}
?>

<!DOCTYPE html>
<html>
<head> <!--inicia o cabeçalho da página-->
  <meta charset="UTF-8">
  <title>JR Sinalizacao - Quem Somos</title> <!--exibe o titulo da página na aba do navegador-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
				
	<link id="estilopadrao" rel="stylesheet" href="css/styleOrange.css"> <!--relaciona um estilo css-->
	<script src="js/meuscript.js"></script> <!--relaciona um javascript-->

</head> <!--finaliza o cabeçalho-->

<body> <!--inicia o corpo da página-->
<div class="container clearfix"> <!--usa a classe container do css-->
		
	<header class="banner"> <!--usa a classe banner do css no cabeçalho do corpo da página-->
		<img src="imagem/top.jpg" alt="Top" class="logo">JR Sinalizacao<!--insere uma imagem e usa a classe logo do css-->
	</header>
		<h1></h1>
		<!--exibe um botão e executa a função "dataHora" do javascript-->
		<button type="button" onclick="dataHora()" id="demo">Clique aqui para ver o dia e hora de agora...</button>
		
		<nav class="menu"> <!--usa a classe menu do css-->
        <ul> <!--inicia a declaração de uma lista não ordenada-->
          <li><div id="h2">>> A r e a &nbsp&nbsp R e s t r i t a <<</div></li><!--exibe um link como primeiro item da lista-->
        </ul> <!--finaliza a lista-->
		</nav>

      <div class="coluna"> <!--usa a classe coluna do css-->
        <!--<img src="imagem/saneamento.jpg">--> <!--exibe uma imagem-->
        <h2>CONTATOS CADASTRADOS</h2> <!--cabeçalho-->
		
		<?php
			include "conexao.php";//chama a conexao.php que vai conectar ao banco de dados

			$sql = "SELECT * FROM contato ORDER BY id DESC"; //WHERE nome = '$nome' - variável que recebe o select do banco
			$qry = mysql_query($sql) or die (mysql_error());//cria uma query com a variavel que recebe do banco
						
			if(mysql_num_rows($qry) < 1) //verifica no banco se te algo cadastrado e se for menor que 1 é pq não tem nada cadastrado na tabela
			{
				echo "<h3>Nenhum contato cadastrado !</h3>";
			}
			else //se não, busca o registro no banco e joga nas variáveis de cada campo da tabela
			{
				while ($linha = mysql_fetch_array($qry)) 
				{ 
					$id = $linha["id"];
					$nome = $linha["nome"];
					$email = $linha["email"];
					$assunto = $linha["assunto"];
					$mensagem = $linha["mensagem"];
							
					echo "<hr/>"; // para exibir na tela
					echo "<h1>Nome: $nome</h1>";
					echo "<h3>E-mail: $email</h3>";
					echo "<h3>Assunto: $assunto</h3>";
					echo "<h3>Mensagem: $mensagem</h3>";
					echo "<hr/>";
				}
			}
			echo "<h4><a href=\"logout.php?id=$id\">[Logout]</a></h4>";//fazendo logout
		?>
      </div>

  <footer class="footer"> <!--usa a classe footer do css no rodapé da página-->
      <p>2015. JR Sinalizacao</p> <!--parágrafo-->
  </footer>
  
</div>
 
</body> <!--finaliza o corpo da página-->
</html>