function showForm(formId) {
    // Ocultar todos los formularios
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('registerForm').style.display = 'none';
    // Mostrar el formulario seleccionado
    document.getElementById(formId).style.display = 'block';
}