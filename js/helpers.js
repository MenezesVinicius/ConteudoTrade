function validate() {
    var regexp = /^[a-z]+\s[a-z ]+$/i;

    var errors = [];

    var name = document.getElementById("nome_form").value;

    if (!regexp.test(name)) {
        document.getElementById("alert_nome").style.display = 'block';
        return false;
    }

    return true;
}