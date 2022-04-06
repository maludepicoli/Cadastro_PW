<?php

include "Cliente.php";

$novoCadastro = new Cliente('Maria', 15991267467, 'Rua Alameda n 98', '1997-07-17', 'Feminino');
$novoCadastro->Cadastrar();


$dados = Cliente::ListarTodos();
var_dump($dados);