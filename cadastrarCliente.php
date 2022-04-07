<?php

$dados = $_POST;
var_dump($dados);

$txtNome = $dados.txtNome;

include "Cliente.php";

extract($_POST);


$novoCadastro = new Cliente($txtNome, $txtContato, $txtEndereco, $txtDataNascimento, $txtGenero);
$novoCadastro->cadastrar();