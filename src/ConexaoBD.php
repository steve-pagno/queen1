<?php
class ConexaoBD {
    public static function getConexao():PDO {
        $conexao = new PDO("mysql:host=localhost;dbname=queen", "root","Batman");
        return $conexao;
    }
}