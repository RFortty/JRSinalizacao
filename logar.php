<!DOCTYPE html>
<html>
<head> <!--inicia o cabeçalho da página -página que vai ter o usuário a senha -->
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
		<img src="imagem/top.jpg" alt="Top" class="logo">JR Sinalizacao<!--insere uma imagem e usa a classe logo do css-->
	</header>
		<h1></h1>
		<!--exibe um botão e executa a função "dataHora" do javascript-->
		<button type="button" onclick="dataHora()" id="demo">Clique aqui para ver o dia e hora de agora...</button>
		
		<nav class="menu"> <!--usa a classe menu do css-->
        <ul> <!--inicia a declaração de uma lista não ordenada-->
          <li><a href="index.php">Home</a></li> <!--exibe um link como primeiro item da lista-->
          <li><a href="quemsomos.php">Quem Somos</a></li> <!--exibe um link como segundo item da lista-->
          <li><a href="produto.php">Produto</a></li> <!--exibe um link como terceiro item da lista-->
          <li><a href="contato.php">Contato</a></li> <!--exibe um link como quarto item da lista-->
        </ul> <!--finaliza a lista-->
		</nav>

      <div class="coluna"> <!--usa a classe coluna do css-->
        <!--<img src="imagem/saneamento.jpg">--> <!--exibe uma imagem-->
        <h2></h2> <!--cabeçalho-->
				
		<div id="fieldsetMaior">
		<legend><strong>Pagina de Login:</strong></legend> <!--bordinha do formulário-->
		<form method="post" action="login.php" name="logar" align="left"><!--método post que chama o login-->
			<div align="center"> <!--alinhando centro -->
				<img src="imagem/padlock.png" alt="Padlock"><h2 align="center">Area Restrita</h2> <!--pega a imagem do cadeado-->
			</div>			
				<div id="fieldsetMenor"><!--chama lá no arquivo css o padrao da borda menor de dentro do formulário-->
					<img src="imagem/user.png" alt="User">&nbsp<input type="text" name="usuario" placeholder="Usuario" autofocus/><br><br>
					<img src="imagem/password.png" alt="Password">&nbsp<input type="password" name="senha" placeholder="Senha"/><br><br><br>
					<p align="center"><input name="submit" type="submit" value="Login"/></p>
				</div><br><br>
		</div>
		
		</form>
      </div>

  <footer class="footer"> <!--usa a classe footer do css no rodapé da página-->
      <p>2015. JR Sinalizacao</p> <!--parágrafo-->
  </footer>
  
</div>
</body> <!--finaliza o corpo da página-->
</html>