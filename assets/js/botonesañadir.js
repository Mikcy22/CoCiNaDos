// Función para añadir un nuevo input
function addInput(containerId, inputHTML) {
    // Obtiene el contenedor donde se añadirá el nuevo input
    var container = document.getElementById(containerId);
    
    // Crea un nuevo div para agrupar el input
    var newFormGroup = document.createElement('div');
    newFormGroup.className = 'form-group d-flex align-items-center mb-2';
    
    // Establece el HTML del nuevo grupo de formulario
    newFormGroup.innerHTML = inputHTML;

    // Añade el nuevo grupo de formulario al contenedor
    container.appendChild(newFormGroup);

    // Añade un evento de eliminación al botón del nuevo grupo
    newFormGroup.querySelector('.removeInput').addEventListener('click', function () {
        // Elimina el grupo de formulario del contenedor
        container.removeChild(newFormGroup);
    });
}

// Añadir evento de creación al botón inicial
document.querySelectorAll('.addInput').forEach(function (btn) {
    btn.addEventListener('click', function () {
        // Comprueba si el botón pertenece a la sección de ingredientes
        if (btn.parentElement.parentElement.id === 'ingredientesInput') {
            // Añade nuevos inputs para ingredientes
            addInput('form-container', `
                <input size="40" class="form-control me-3" placeholder="Por ejemplo: 200g" value="" type="text" name="quantidade[]">
                <input size="40" class="form-control me-3" placeholder="Por ejemplo, leche condensada" value="" type="text" name="ingrediente[]">
                <button type="button" class="btn btn-danger me-3 removeInput">-</button>
            `);
        // Comprueba si el botón pertenece a la sección de pasos
        } else if (btn.parentElement.parentElement.id === 'pasosInput') {
            // Añade nuevos inputs para pasos
            addInput('pasos-container', `
                <textarea class="form-control me-3" rows="1" placeholder="Por ejemplo, 1. Picar las verduras" name="pasos[]"></textarea>
                <button type="button" class="btn btn-danger me-3 removeInput">-</button>
            `);
        }
    });
});
