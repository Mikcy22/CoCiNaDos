document.getElementById('imageInput').addEventListener('change', function(event) {
    var file = event.target.files[0];
    var imagePreview = document.getElementById('imagePreview');
    var previewImage = document.getElementById('previewImage');

    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.style.display = 'block';
            previewImage.src = e.target.result;
        }
        reader.readAsDataURL(file);
    } else {
        imagePreview.style.display = 'none';
        previewImage.src = '';
    }
});

document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente
    
    // Obtén una referencia al formulario y a la imagen seleccionada
    var form = document.getElementById('uploadForm');
    var imageInput = document.getElementById('imageInput').files[0];

    // Envía la imagen al servidor utilizando AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', form.getAttribute('action'), true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Procesa la respuesta de la API de ImgBB
            var responseData = JSON.parse(xhr.responseText);
            // Extrae el ID de la imagen de la URL
            var imageId = responseData.data.id;
            // Haz algo con el ID de la imagen (por ejemplo, redirige al usuario)
            window.location.href = 'https://ibb.co/' + imageId;
        } else {
            // Maneja errores si la carga de la imagen falla
            console.error('Error al subir la imagen:', xhr.statusText);
        }
    };
    xhr.onerror = function () {
        // Maneja errores de red
        console.error('Error de red al subir la imagen:', xhr.statusText);
    };
    
    // Crea un objeto FormData y adjunta la imagen seleccionada
    var formData = new FormData(form);
    formData.append('image', imageInput);
    
    // Envía la solicitud AJAX
    xhr.send(formData);
});