<?php

require_once("config.php");
/*Carrega um usuario
$root = new Usuario();

$root->loadbyId(3);

echo $root;
*/
//Carrega uma lista de usuario
	$lista = Usuario::getList();

	echo json_encode($lista);


	//Delete
	/*
$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->delete();

echo $usuario;
*/


/*Carrega o search
	$search = Usuario::search('joao');

	echo json_encode($search);
*/
	//carrega validalogin
/*$login = new Usuario();

$login->login("joao","query");

echo $login;
*/
//procedure insert
/*
$aluno = new Usuario("joao", "senha");

$aluno->insert();

echo $aluno;
//update
$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->update("professor","#$@$@");

echo $usuario;
*/
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
?>