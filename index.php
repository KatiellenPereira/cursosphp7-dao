<?php

require_once("config.php");
/*Carrega um usuario
$root = new Usuario();

$root->loadbyId(3);

echo $root;
*/
//Carrega uma lista de usuario
/*	$lista = Usuario::getList();

	echo json_encode($lista);
*/
/*Carrega o search
	$search = Usuario::search('joao');

	echo json_encode($search);
*/
	//carrega validalogin
$login = new Usuario();

$login->login("joao","query");

echo $login;


/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
?>