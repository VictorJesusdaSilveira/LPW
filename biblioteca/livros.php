<?php

//Mostrar erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("util/Conexao.php");

$conexao = Conexao::getConexao();
//print_r($conexao);

//Salvar o livro
if(isset($_POST['titulo'])) {
    //Receber os dados do formulário 
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $paginas = $_POST["paginas"];
    $autor = $_POST["autor"];

    //Inserir no banco
    $sql = "INSERT INTO livros (titulo, genero, qtd_paginas, autor) VALUES(?, ?, ?, ?)";
    $stm = $conexao->prepare($sql);
    $stm->execute(array($titulo, $genero, $paginas, $autor));

    //Redirecionar para a página de listagem
    header("location:livros.php");

    
}

//Listagem dos livros
$sql = "SELECT * FROM livros";
$stm = $conexao->prepare($sql);
$stm->execute();
$livros = $stm->fetchAll();

//print "<pre>" . print_r($livros, true) . "</pre>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>

    <h1>Cadastro de livros</h1>

    <h3>Listagem</h3>

    <table border="1">
        <!--Cabeçalho-->
        <tr>
            <th>ID</th>
            <th>Autor</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th></th>
        </tr> 

        <!--Dados-->
        <?php foreach($livros as $l): ?>
            <tr>
                <td><?= $l["id"] ?></td>
                <td><?= $l["autor"] ?></td>
                <td><?= $l["titulo"] ?></td>
                <td>
                    <?php
                        if($l['genero'] == 'D')
                            print "Drama";
                        else if($l['genero'] == 'F')
                            print "Ficção";
                        else if($l['genero'] == 'R')
                            print "Romance";
                        else if($l['genero'] == 'O')
                            print "Outro";                        
                    ?>
                </td>
                <td><?= $l["qtd_paginas"] ?></td>
                <td><a href="livros_excluir.php?id=<?= $l["id"] ?>" onclick="if(! confirm('Confirme a exclusão do livro')) return false;">Excluir</a></td>
            </tr>
        
        <?php endforeach; ?>
    </table>


    <h3>Formulário</h3>

    <form action="" method="POST">

        <label for="">Autor</label>
        <input type="text" placeholder="Informe o Autor" name="autor">
        <br><br>

        <label for="">Título</label>
        <input type="text" placeholder="Informe o título"
            name="titulo">

        <br><br>

        <select name="genero">
            <option value="">---Selecione o gênero---</option>
            <option value="D">Drama</option>
            <option value="F">Ficção</option>
            <option value="R">Romance</option>
            <option value="O">Outro</option>
        </select>

        <br><br>

        <label for="">Quantidade de Páginas</label>
        <input type="number" name="paginas" 
            placeholder="Informe o número de páginas">

        <br><br>

        <button>Gravar</button>

    </form>
    
</body>
</html>
