<?php
require_once "src/UsuarioDAO.php";

$login = $_GET['cpf'];
$password = $_GET['password'];

if (UsuarioDAO::autenticarUsuario($login, $password)) {
    session_start();
    $_SESSION['login'] = $login;
    header("location:telaCliente.php");
} else {
    header("location:teste.php");
}