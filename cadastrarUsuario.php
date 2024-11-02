<?php
require_once "src/ConexaoBD.php";

$cpf = $_GET['cpf'];
$nome = $_GET['nome'];
$dt_nascimento = $_GET['dt_nascimento'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$senha = md5($_GET['senha']);
$sql = "insert into usuario (cpf_cliente, nome_cliente, dt_nascimento, email, telefone, senha) values ('$cpf','$nome','$dt_nascimento','$email','$telefone','$senha')";
$conexao = ConexaoBD::getConexao();
$conexao->exec($sql);
echo "AAAA";