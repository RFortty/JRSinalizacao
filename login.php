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
          <li><div id="h2">>> A r e a &nbsp&nbsp R e s t r i t a <<</div></li><!--exibe um link como primeiro item da lista-->
        </ul> <!--finaliza a lista-->
		</nav>

     <div class="coluna"> <!--inicia o posicionamento da classe "coluna"-->
				
	<?php
		include("conexao.php");

		$usuario = $_POST['usuario'];
		$_POST['usuario'] = preg_replace('/[^[:alpha:]_]/','',$_POST['usuario']); //só alfanumerico
		$senha = md5($_POST['senha']); //o md5 é um código-hash que criptografa automaticamente a senha em hexadecimal e retorna uma string de até 32 posições
		$_POST['senha'] = preg_replace('/[^[:alnum:]_]/','',$_POST['senha']); //só letra e número

		/* Verifica se existe usuario, o segredo ta aqui quando ele procupa uma linha q contenha o login e a senha digitada */
		$sql = "SELECT * FROM login WHERE usuario = '$usuario' && senha = '$senha'";
		$query = mysql_query($sql) or die (mysql_error());
		$fet = mysql_fetch_assoc($query);
		$logar = mysql_num_rows($query);

		//Verifica se n existe uma linha com o login e a senha digitado
		if ($logar == 0)
		{
			session_start();
			$_SESSION["Login"] = "NO";
			echo '<h1><script> history.go(-1); alert("Usuario e/ou senha invalidos !");</script></h1>';	
		} 
		else
		{
		//Cria a sessão e manda pra pagina principal.php
			session_start();
			$_SESSION["Login"] = "YES";
			echo "<br/><p align=\"center\">Ola " . $usuario . ",<br> Voce esta logado !</p>";
			echo "<h6><p align=\"center\"><a href='cadastrados.php'>[Acesse a Pagina de Contatos]</a><p/></h6>";
		}
	?>
		
</div> <!--finaliza o posicionamento da classe "coluna"-->

  <footer class="footer"> <!--usa a classe footer do css no rodapé da página-->
      <p>2015. JR Sinalizacao</p> <!--parágrafo-->
  </footer>
  
</div>
 
</body> <!--finaliza o corpo da página-->
</html>