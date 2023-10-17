function validarFormulario() {
    var nome = document.getElementById("nome").value;
    var sobrenome = document.getElementById("sobrenome").value;

    if (nome === "" || sobrenome === "") {
        var erroDiv = document.getElementById("erro");
        erroDiv.textContent = "Por favor, preencha todos os campos.";
        return false;
    }

    // Verifica se os campos contêm apenas letras
    if (!nome.match(/^[a-zA-Z]+$/) || !sobrenome.match(/^[a-zA-Z]+$/)) {
        var erroDiv = document.getElementById("erro");
        erroDiv.textContent = "Por favor, insira apenas letras nos campos Nome e Sobrenome.";
        return false;
    }

    return true;
}