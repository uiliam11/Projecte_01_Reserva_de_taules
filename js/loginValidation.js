const user = document.querySelector('#username');
const pass = document.querySelector('#password');


const checkUser = () => {
    let valid = false;
    const username = user.value.trim();
    if (!isRequired(username)) {
        showError(user, 'El número de teléfono no puede estar vacío');
    } else if (!isTelfValid(username)) {
        showError(user, 'Número de teléfono no valido')
    } else {
        showSuccess(user);
        valid = true;
    }
    return valid;
};

const checkPass = () => {
    let valid = false;
    const password = pass.value.trim();
    if (!isRequired(password)) {
        showError(pass, 'El número de teléfono no puede estar vacío');
    } else if (!isTelfValid(password)) {
        showError(pass, 'Número de teléfono no valido')
    } else {
        showSuccess(pass);
        valid = true;
    }
    return valid;
};