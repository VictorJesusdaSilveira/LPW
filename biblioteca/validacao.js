function validarForm(){
    //Pegar os valores dos inputs do formulário
    let autor = document.querySelector("#autor").value;
    let titulo = document.querySelector("#titulo").value;
    let genero = document.querySelector("#genero").value;
    let qtdPaginas = document.querySelector("#qtdPaginas").value;

    //console.log(autor + " - " + titulo + " - " +  genero + " - " + qtdPaginas);

    let erros = [];

    //Validação dos dados
    if (autor.trim() === "") {
        erros.push("Informe o autor");
    }

    if (titulo.trim() === "") {
        erros.push("Informe o título");
    }

    if (genero.trim() === "") {
        erros.push("Informe o gênero");
    }

    if (qtdPaginas.trim() === "") {
        erros.push("Informe a quantidade de páginas");
    }

    if (erros.length > 0) {
        let divMsgErro = document.querySelector("#erro");
        divMsgErro.innerHTML = erros.join("<br>");
        divMsgErro.style.display = "block";
        return false;
    }

    //Submeter o formulário
    return true;
}

