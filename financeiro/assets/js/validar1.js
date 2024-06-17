function ValidarCamposCategoria() {

    if ($("#nome").val().trim() == "") {
        alert("Preencher o campo NOME!");
        return false;

    }

}

function ValidarCamposEmpresa() {
    if ($("#nome_empresa").val().trim() == "") {
        alert("Preencher o campo nome da EMPRESA!");
        return false;
    }
}
function ValidarCamposConta() {
    if ($("#banco").val().trim() == "") {
        alert("Preencher o campo NOME!");
        return false;
    }
    if ($("#agencia").val().trim() == "") {
        alert("Preencher o campo da AGÊNCIA");
        return false;
    }
    if ($("#numerodaconta").val().trim() == "") {
        alert("Preencher o campo do numero da CONTA");
        return false;
    }
    if ($("#saldo").val().trim() == "") {
        alert("Preencher o campo do SALDO");
        return false;
    }


}
function ValidarCamposMovimento() {
    if ($("#tipo").val().trim() == "") {
        alert("Preencher o campo do MOVIMENTOo");
        return false;
    }
    if ($("#data").val().trim() == "") {
        alert("Preencher a DATA");
        return false;
    }
    if ($("#valor").val().trim() == "") {
        alert("Preencher o VALOR");
        return false;
    }
    if ($("#empresa").val().trim() == "") {
        alert("Preencher a EMPRESA");
        return false;
    }
    if ($("#categoria").val().trim() == "") {
        alert("Preencher a CATEGORIA");
        return false;
    }
    if ($("#conta").val().trim() == "") {
        alert("Preencher a CONTA");
        return false;
    }
}
function ValidarCamposUsuario() {
    if ($("#nome").val().trim() == "") {
        alert("Preencher o campo do NOME");
        return false;
    }
    if ($("#email").val().trim() == "") {
        alert("Preencher o campo do EMAIL");
        return false;
    }
    if ($("#senha").val().trim() == "") {
        alert("Preencher o campo da SENHA");
        return false;
    }
    if ($("#resenha").val().trim() == "") {
        alert("Preencher o campo do REPETIR SENHA");
        return false;
    }
    if ($("#resenha").val().trim() != $("#senha").val()) {
        alert("A senha e a Repetir Senha devem ser IGUAIS!");
        return false;
    }
    if ($("#senha").val().length < 6) {
        alert("Senha deve conter no minimo 6 caracteres");
        return false;
    }



}
function ValidarConsultarMovimento() {
    if ($("#data_inicial").val().trim() == "") {
        alert("Preencher o campo da data INICIAL");
        return false;
    }
    if ($("#data_final").val().trim() == "") {
        alert("Preencher o campo da data FINAL")
        return false;
    }
}
function ValidarLogin() {
    if ($("#email").val().trim() == "") {
        alert("Preencher o campo do E-MAIL");
        return false;
    }
    if ($("#senha").val().trim() == "") {
        alert("Preencher o campo da SENHA")
        return false;
    }

}

