function ValidasCamposCategoria() {

    if ($("#nome").val().trim() == "") {
        alert("Preencher o campo nome!");
        return false;

    }
}

function ValidarCamposEmpresa() {
    if ($("#nome").val().trim() == "") {
        alert("Preencher o campo nome!");
        return false;
    }
}
function ValidarCamposConta() {
    if ($("#nome").val().trim() == "") {
        alert("Preencher o campo nome!");
        return false;
    }
    if ($("#agencia").val().trim() == "") {
        alert("Preencher o campo da agencia");
        return false;
    }
    if ($("#numerodaconta").val().trim() == "") {
        alert("Preencher o campo do numero da conta");
        return false;
    }
    if ($("#saldo").val().trim() == "") {
        alert("Preencher o campo do saldo");
        return false;
    }


}
function ValidarCamposMovimento() {
    if ($("#movimento").val().trim() == "") {
        alert("Preencher o campo do movimento");
        return false;
    }
    if ($("#data").val().trim() == "") {
        alert("Preencher a data");
        return false;
    }
    if ($("#valor").val().trim() == "") {
        alert("Preencher o valor");
        return false;
    }
    if ($("#empresa").val().trim() == "") {
        alert("Preencher a empresa");
        return false;
    }
    if ($("#categoria").val().trim() == "") {
        alert("Preencher a categoria");
        return false;
    }
    if ($("#conta").val().trim() == "") {
        alert("Preencher a conta");
        return false;
    }
}
function ValidarCamposUsuario() {
    if ($("#email").val().trim() == "") {
        alert("Preencher o campo do email");
        return false;
    }
    if ($("#senha").val().trim() == "") {
        alert("Preencher o campo da senha");
        return false;
    }
    if ($("#nome").val().trim() == "") {
        alert("Preencher o campo do nome");
        return false;
    }
    if ($("sobrenome").val().trim() == "") {
        alert("Preencher o campo do sobrenome");
        return false;
    }
    if ($("#resenha").val().trim() == "") {
        alert("Preencher o campo do repetir senha");
        return false;
    }
    if ($("#resenha").val().trim() != $("#senha")) {
        alert("A senha e a Repetir Senha devem ser iguais");
        return false;
    }

}

