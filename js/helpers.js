function validate(name) {
    var regexp = /^[a-z]+\s[a-z ]+$/i;
    var ck_name = /^[A-Za-z0-9 ]{3,20}$/;

    var errors = [];

    if (!ck_name.test(name)) {
        errors[errors.length] = "You valid Name .";
    }
    if (errors.length > 0) {

        reportErrors(errors);
        return false;
    }
    return true;
}
function reportErrors(errors) {
    var msg = "Please Enter Valide Data...\n";
    for (var i = 0; i < errors.length; i++) {
        var numError = i + 1;
        msg += "\n" + numError + ". " + errors[i];
    }
    alert(msg);
}