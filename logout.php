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
		
		<?
			session_start(); //iniciamos a sessão que foi aberta
			session_destroy(); //destruimos a sessão ;)
			session_unset(); //limpamos as variaveis globais das sessões
		
			/*aqui você pode por alguma coisa falando que ele saiu ou fazer como eu, coloquei redirecionar para uma certa página*/
			echo "<script>alert('Voce saiu da Area Restrita !');top.location.href='index.php';</script>";
			//echo "<p align=\"center\">Voce foi Desconectado !</p>";
			//echo "<h6><p align=\"center\"><a href='index.php'><< [voltar para Home]</a><p/></h6>";
			exit;
		?>
      </div>

  <footer class="footer"> <!--usa a classe footer do css no rodapé da página-->
      <p>2015. JR Sinalizacao</p> <!--parágrafo-->
  </footer>
  
</div>
 
</body> <!--finaliza o corpo da página-->
</html>