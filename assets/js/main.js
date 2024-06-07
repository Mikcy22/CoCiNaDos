//SCRIPT PARA CAMBIAR EL COLOR DE LA CABECERA CUANDO BAJA

    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('.navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('bg-dark');
        } else {
            navbar.classList.remove('bg-dark');
        }
    });


  
    function fileChange() {
        //Obtener el archivo de imagen
        var file = document.getElementById('input_img');
        // Creo un objeto llamado formData
        var form = new FormData();
        form.append("image", file.files[0]);
        //Configuracion de la peticion AJAX
        var settings = {
            "url": "https://api.imgbb.com/1/upload?key=8d5867a9512390fb5e5dc97839aa36f6",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form
        };

        //Envia la peticion ajax 
        $.ajax(settings).done(function (response) {
            console.log(response);
            //parsea la respuesta a json
            var jx = JSON.parse(response);
            console.log(jx.data.url);
            //Se establece el valor del campo de texto con ID food_img con la URL de la imagen cargada
            // Mostrar la URL de la imagen cargada en el campo de texto
            document.getElementById('food_img').value = jx.data.url;
        });
    }




