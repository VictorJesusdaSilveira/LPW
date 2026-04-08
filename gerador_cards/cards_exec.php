<?php
require_once("model/Cavaleiro.php");

if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
}
if (isset($_POST["idade"])) {
    $idade = $_POST["idade"];
}
if (isset($_POST["armadura"])) {
    $armadura = $_POST["armadura"];
}
if (isset($_POST["poder"])) {
    $poder = $_POST["poder"];
}
if (isset($_POST["constelacao"])) {
    $constelacao = $_POST["constelacao"];
}
if (isset($_POST["descricao"])) {
    $descricao = $_POST["descricao"];
}
if (isset($_POST["link"])) {
    $link = $_POST["link"];
}

//só falta o CSS

$cavaleiro = new Cavaleiro($nome, $idade, $armadura, $poder, $constelacao, $descricao, $link)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cards.css">
    <title>Card</title>
</head>
<body>
    <h1>Card do Cavaleiro</h1>

    <div class="card">
        <label for="">Nome: </label>
        <?= $cavaleiro->getNome() ?>
        <br>

        <label for="">Idade: </label>
        <?= $cavaleiro->getIdade() ?>
        <br>

        <label for="">Armadura: </label>
        <?= $cavaleiro->getArmadura() ?>
        <br>

        <label for="">Poder: </label>
        <?= $cavaleiro->getPoder() ?>
        <br>

        <label for="">Constelação: </label>
        <?= $cavaleiro->getConstelacao() ?>
        <br>

        <label for="">Descrição: </label>
        <?= $cavaleiro->getDescricao() ?>
        <br>

        <label for="">Link: </label>
        <?= $cavaleiro->getLink() ?>
    </div>


    <a href="cards_form.php"><button>Novo Cadastro</button></a>

</body>
</html>
