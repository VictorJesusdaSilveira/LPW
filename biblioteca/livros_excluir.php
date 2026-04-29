<?php
require_once("util/Conexao.php");

$conexao = Conexao::getConexao();

//1- Identificar qual livro o usuário quer excluir
$id = 0;
//2- Validar se o identificador do livro foi recebido
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    //3- Excluir o livro do banco de dados
    $sql = "DELETE FROM livros WHERE id = ?";
    $stm = $conexao->prepare($sql);
    $stm->execute([$id]);

}

//4- Redirecionar para a listagem de livros
header("location: livros.php");



?>
