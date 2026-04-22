<?php
require_once("util/Conexao.php");

$conexao = Conexao::getConexao();

$sql = "SELECT * FROM livros";
$stm = $conexao->prepare($sql); //prepara
$stm->execute(); //executa
$livros = $stm->fetchAll(); //pega a resposta

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
</head>
<body>
    
    <h1>Cadastro de livros</h1>

    <h3>Listagem</h3>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
        </tr>

        <?php foreach ($livros as $l) :?>
            <tr>
                <td><?= $l["id"] ?></td>
                <td><?= $l["titulo"] ?></td>
                <td><?php if($l["genero"] == "D"){
                    print "Drama";
                }else if ($l["genero" == "F"]){
                    print "Fantasia";
                }else if ($l["genero"] == "R"){
                    print "Romance";
                }else{
                    print "Outro";
                }
                    
                    ?></td>
                <td><?= $l["qtd_paginas"]?></td>
            </tr>

        <?php endforeach; ?>    
    </table>


    <h3>Formulários</h3>

    <form action="" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" placeholder="Informe o título: " name="titulo">

        <br>

        <p>Gêneros:</p>
        <select name="genero" id="">
            <option value="">---- Selecione o Gênero ----</option>
            <option value="D">Drama</option>
            <option value="R">Romance</option>
            <option value="F">Ficção</option>
            <option value="O">Outro</option>
        </select>

        <br>

        <label for="qtd_paginas">Quantidade de Páginas:</label>
        <input type="number" placeholder="Informe a quantidade de páginas" name="qtd_paginas">

            <br>

        <button type="submit">Enviar</button>


    </form>


</body>
</html>
