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
          <li><a href="index.php">Home</a></li> <!--exibe um link como primeiro item da lista-->
          <li><a href="#">Quem Somos</a></li> <!--exibe um link como segundo item da lista-->
          <li><a href="produto.php">Produto</a></li> <!--exibe um link como terceiro item da lista-->
          <li><a href="contato.php">Contato</a></li> <!--exibe um link como quarto item da lista-->
        </ul> <!--finaliza a lista-->
		</nav>

      <div class="coluna"> <!--usa a classe coluna do css-->
        <!--<img src="imagem/saneamento.jpg">--> <!--exibe uma imagem-->
        <h2>QUEM SOMOS</h2> <!--cabeçalho-->
		<p>A JR Sinalizacao foi fundada em 2015 com a proposta de oferecer diversos produtos e servicos na area de sinalizacao viaria.
			Nossa politica de trabalho prioriza a qualidade atraves de controles do processo de fabricacao e integracao com as necessidades dos nossos clientes.
		</p>
		<p>
			Nossos profissionais sao altamente qualificados, inclusive com treinamento de impacto ambiental, enfatizando a preservacao do meio ambiente, atendendo
			as empresas com politica de qualidade.	
		</p>
      </div>

  <footer class="footer"> <!--usa a classe footer do css no rodapé da página-->
      <p>2015. JR Sinalizacao</p> <!--parágrafo-->
  </footer>
  
</div>
 
</body> <!--finaliza o corpo da página-->
</html>