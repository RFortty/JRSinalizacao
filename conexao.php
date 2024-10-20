<?php
	$host = "localhost"; //variável que recebe o Servidor do mysql
	$user = "root"; //variável que recebe o nome do Usuario do banco de dados
	$senha = "ifsp"; //variável que recebe a senha do banco de dados
	$db = "jgodoi"; //variável que recebe o nome do banco de dados

	$conexao = mysql_connect($host, $user, $senha) or die (mysql_error()); //variável que conecta ao servidor do bd
	$db = mysql_select_db($db) or die (mysql_error()); //variável que seleciona o bd
?>