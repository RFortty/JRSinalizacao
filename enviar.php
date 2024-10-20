<html>
	<head>
		<meta charset='utf-8'>
		<title>JR Sinalizacao - Contato</title>
		
		<link rel="stylesheet" href="css/styleOrange.css"> <!--.....................chama o estilo CSS externo-->
	</head>
<body>

	<?php
		include "conexao.php";
		
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$assunto = $_POST["assunto"];
		$mensagem = $_POST["mensagem"];
		
		//cadastra o contato... INSERT INTO...
		$sql = "INSERT INTO contato(nome, email, assunto, mensagem) VALUES('$nome', '$email', '$assunto', '$mensagem')";
		$qry = mysql_query($sql) or die (mysql_error());
	
		echo '<script> history.go(-1); alert("A sua mensagem foi enviada com Sucesso!");</script>';
		echo "<p align=\"center\"><strong>JR Sinalizacao - Pagina de Contato</strong></p><br/><br/>";
		echo "<p align=\"center\">A sua mensagem foi enviada com Sucesso!</p><br>";
	?>

</body>
</html>