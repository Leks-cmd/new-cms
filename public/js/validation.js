/** validación do lado cliente */
document.getElementById('empregoForm').addEventListener('submit', function (event) {
    
    // Previr o envío por defecto
    event.preventDefault();

    // Limpar erros previos
    clearErrors();

    // Validar cada campo
    let isValid = true;

    // Validar Nome
    const nome = document.getElementById('nome').value.trim();
    if (nome === '') {
        showError('nomeError', 'O nome é obrigatorio 😣');
        isValid = false;
    } else if (nome.length < 2) {
        showError('nomeError', 'O nome debe ter polo menos 2 caracteres 🤓');
        isValid = false;
    }

    // Validar Apelidos
    const apelidos = document.getElementById('apelidos').value.trim();
    if (apelidos === '') {
        showError('apelidosError', 'O apelidos son obrigatorios 😣');
        isValid = false;
    }

    // Validar o email
    const email = document.getElementById('email').value.trim();
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/;
    if (email === '') {
        showError('emailError', 'O email é obrigatorio 😣');
        isValid = false;
    } else if (!emailRegex.test(email)) {
        showError('emailError', 'Introduce un email válido 🤬');
        isValid = false;
    }

    // Validar nivel de estudos
    const estudos = document.getElementById('estudos').value;
    if (estudos === '') {
        showError('estudosError', 'Selecciona un nivel de estudos 😣');
        isValid = false;
    }

    // Validar resumo
    const resumo = document.getElementById('resumo').value.trim();
    if (resumo === '') {
        showError('resumoError', 'O resumo é obrigatorio 😣');
        isValid = false;
    } else if (resumo.length < 50) {
        showError('resumoError', 'O resumo debe ter alo menos 50 caracteres 🤬');
        isValid = false;
    }

    // Se todo é válido, enviar o formulario
    if (isValid) {
        this.submit();
    }
});

function showError(id, message) {
    const errorElement = document.getElementById(id);
    errorElement.textContent = message;
}

function clearErrors() {
    const errors = document.querySelectorAll('.error');
    errors.forEach(error => {
        error.textContent = '';
    });
}