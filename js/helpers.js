function validate() {
    var regexp = /^[A-Za-z-áéíóúâêôûãõ]+\s[A-Za-z-áéíóúâêôûãõ]+$/i;

    var name = document.getElementById("nome_form").value;

    if (!regexp.test(name)) {
        document.getElementById("alert_nome").style.display = 'block';
        return false;
    }

    return true;
}