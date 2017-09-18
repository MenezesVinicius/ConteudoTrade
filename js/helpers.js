function validate() {
    var regexp = /^[a-z]+\s[a-z ]+$/i;

    var errors = [];

    var name = document.getElementById("nome_form").value;

    if (!regexp.test(name)) {
        errors[errors.length] = "Nome inválido";
    }
    if (errors.length > 0) {
        reportErrors(errors);
        return false;
    }

    return true;
}
function reportErrors(errors) {
    var msg = "Por favor entre com seu nome completo...\n";
    for (var i = 0; i < errors.length; i++) {
        var numError = i + 1;
        msg += "\n" + numError + ". " + errors[i];
    }
    alert(msg);
}