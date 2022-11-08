function validar() {
    user = document.getElementById('usuario').value
    pass = document.getElementById('contraseña').value
    mensaje = document.getElementById('mensaje')

    if (user == '' && pass == '') {
        alert("EMAIL Y CONTRASEÑA OBLIGATORIO");
        return false
    } else if (user == '') {
        alert("EMAIL OBLIGATORIO");
        return false
    } else if (pass == '') {
        alert("CONTRASEÑA OBLIGATORIA");
        return false
    } else if (pass.length < 8) {
        alert("LA CONTRASEÑA TIENE QUE TENER 8 CARACTERES");
        return false;
    }
    if (pass.length > 8) {
        alert("LA CONTRASEÑA TIENE QUE TENER 8 CARACTERES");
        return false;
    }
}