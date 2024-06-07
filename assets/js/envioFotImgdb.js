

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('imageInput').addEventListener('change', handleImageUpload);
});

function handleImageUpload(event) {
    const file = event.target.files[0];
    const formData = new FormData();
    formData.append('image', file);

    fetch('https://api.imgbb.com/1/upload?key=40201236d847f59db1fab0386855ceb8', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        const imageUrl = data.data.url;
        const imageId = data.data.id;
        const imageName = file.name; // Obtener el nombre del archivo

        const concatenatedUrl = 'https://i.ibb.co/' + imageId + '/' + imageName; // Concatenar el enlace base con el ID de la imagen y el nombre
        console.log(concatenatedUrl); // Mostrar el enlace concatenado en la consola
    

        document.getElementById('previewImage').src = concatenatedUrl;
        document.getElementById('imagePreview').style.display = 'block';
        document.getElementById('imageIdInput').value = concatenatedUrl;
       

        })
    .catch(error => console.error('Error uploading image:', error));
}
