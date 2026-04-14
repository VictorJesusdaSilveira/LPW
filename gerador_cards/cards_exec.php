<?php
require_once("model/Cavaleiro.php");

if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
}else {
    $nome = "";
}
if (isset($_POST["idade"])) {
    $idade = $_POST["idade"];
}else {
    $idade = "";
}
if (isset($_POST["armadura"])) {
    $armadura = $_POST["armadura"];
}else {
    $armadura = "";
}
if (isset($_POST["poder"])) {
    $poder = $_POST["poder"];
}else {
    $poder = "";
}
if (isset($_POST["constelacao"])) {
    $constelacao = $_POST["constelacao"];
}else {
    $constelacao = "";
}
if (isset($_POST["descricao"])) {
    $descricao = $_POST["descricao"];
}else {
    $descricao = "";
}
if (isset($_POST["link"])) {
    $link = $_POST["link"];
}else {
    $link = "";
}

$cavaleiro = new Cavaleiro($nome, $idade, $armadura, $poder, $constelacao, $descricao, $link);
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
    <img src="<?= $cavaleiro->getLink(); ?>" alt="Imagem">

    <h2><?= $cavaleiro->getNome() ?></h2>

    <p><strong>Idade:</strong> <?= $cavaleiro->getIdade() ?></p>
    <p><strong>Armadura:</strong> <?= $cavaleiro->getArmadura() ?></p>
    <p><strong>Poder:</strong> <?= $cavaleiro->getPoder() ?></p>
    <p><strong>Constelação:</strong> <?= $cavaleiro->getConstelacao() ?></p>
    <p><?= $cavaleiro->getDescricao() ?></p>
</div>
    <a href="cards_form.php"><button>Novo Cadastro</button></a>

</body>
</html>
