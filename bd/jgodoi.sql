-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de Geração: Jun 15, 2015 as 03:50 PM
-- Versão do Servidor: 5.0.18
-- Versão do PHP: 5.1.2
-- 
-- Banco de Dados: `jgodoi`
-- 

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `contato`
-- 

CREATE TABLE `contato` (
  `id` int(5) NOT NULL auto_increment,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(12) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Extraindo dados da tabela `contato`
-- 


-- --------------------------------------------------------

-- 
-- Estrutura da tabela `login`
-- 

CREATE TABLE `login` (
  `id` int(5) NOT NULL auto_increment,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Extraindo dados da tabela `login`
-- 

INSERT INTO `login` VALUES (1, 'admin', '202cb962ac59075b964b07152d234b70');
