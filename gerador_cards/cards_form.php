<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Cards</title>
</head>
<body>

    <h1>Formulário do Cavaleiro</h1>

    <form action="cards_exec.php" method="POST">
        <div class="">
            <label for="">Nome: </label>
            <input type="text" placeholder="Informe o nome: " name="nome">
            <br>
        </div>


        <div class="">
            <label for="">Idade: </label>
            <input type="number" placeholder="Informe a idade: " name="idade">
            <br>
        </div>

        <div class="">
            <label for="">Armadura: </label>
            <input type="text" placeholder="Informe a Armadura: " name="armadura">
            <br>
        </div>

        <div class="div">
            <label for="">Poder: </label>
            <input type="text" placeholder="Informe o Poder: " name="poder">
            <br>
        </div>

        <div class="">
            <label for="">Constelação: </label>
            <input type="text" placeholder="Informe a Constelação: " name="constelacao">
            <br>
        </div>

        <div class="">
            <label for="">Descrição: </label>
            <textarea name="descricao" id=""></textarea>
            <br>
        </div>

        <div class="">
            <label for="">Link: </label>
            <input type="text" name="link">
            <br>
        </div>

        <button>Enviar</button>
    </form>
</body>
</html>
