<?php

require_once "model/database.php";
require_once "model/receta.php";

class FormularioController {
    private $model;
    private $imgbbApiKey = "40201236d847f59db1fab0386855ceb8";

    public function __CONSTRUCT() {
        $this->model = new Receta();
    }

    // Mostrar el formulario
    public function mostrarFormulario() {
        require_once 'view/header.php';
        require_once 'view/envioReceta.php';
        require_once 'view/footer.php';
    }

    // Guardar receta
    public function guardarReceta() {
        // Verificar que los datos requeridos están presentes y son válidos
        if (
            empty($_POST["name"]) || empty($_POST['time_elaboration']) || empty($_POST['calorias']) ||
            empty($_POST['num_personas']) || empty($_POST['tipo_plato']) || empty($_POST['nacionalidad']) ||
            empty($_POST['tipo_dieta']) || empty($_POST['metodo_elaboracion']) || empty($_POST['ingrediente_especial']) ||
            empty($_POST['pasos']) || empty($_POST['description'])
        ) {
            echo "Todos los campos son obligatorios.";
            return;
        }

        // Obtener el nombre de usuario de la sesión
        session_start();
        if (!isset($_SESSION['username'])) {
            echo "Usuario no autenticado.";
            return;
        }
        $username = $_SESSION['username'];

        // Inicializar la URL de la imagen
        $imageUrlApi = '';

        if ($_FILES['image']['size'] > 0) {
            // Obtener contenido del archivo
            $imageContent = file_get_contents($_FILES['image']['tmp_name']);

            // Codificar la imagen a base64
            $base64Image = base64_encode($imageContent);

            // Configurar la solicitud a la API de ImgBB
            $apiKey = $this->imgbbApiKey;
            $apiUrl = "https://api.imgbb.com/1/upload";
            $data = array(
                'key' => $apiKey,
                'image' => $base64Image
            );

            // Iniciar sesión cURL
            $ch = curl_init();

            // Configurar opciones de cURL
            curl_setopt($ch, CURLOPT_URL, $apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

            // Ejecutar la solicitud y obtener la respuesta
            $response = curl_exec($ch);

            // Cerrar sesión cURL
            curl_close($ch);

            // Decodificar la respuesta JSON
            $responseData = json_decode($response, true);

            // Obtener la URL de la imagen cargada
            $imageUrlApi = $responseData['data']['url'];
        }

        // Instanciar una nueva receta
        $receta = new Receta();

        $receta->name = $_POST['name'];
        $receta->time_elaboration = $_POST['time_elaboration'];
        $receta->calorias = $_POST['calorias'];
        $receta->num_personas = $_POST['num_personas'];
        $receta->tipo_plato = $_POST['tipo_plato'];
        $receta->nacionalidad = $_POST['nacionalidad'];
        $receta->tipo_dieta = $_POST['tipo_dieta'];
        $receta->metodo_elaboracion = $_POST['metodo_elaboracion'];
        $receta->ingrediente_especial = $_POST['ingrediente_especial'];
        $receta->description = $_POST['description'];
        $receta->image = $imageUrlApi;
        $receta->username = $username; // Guardar el username

        $receta->ingredientes = [];
        for ($i = 0; $i < count($_POST['ingrediente']); $i++) {
            $receta->ingredientes[] = [
                'nombre' => htmlspecialchars($_POST['ingrediente'][$i]),
                'cantidad' => htmlspecialchars($_POST['quantidade'][$i])
            ];
        }

        if (is_array($_POST['pasos'])) {
            $receta->pasos = array_map('htmlspecialchars', $_POST['pasos']);
        } else {
            echo "Formato incorrecto para los pasos.";
            return;
        }

        // Registrar la receta en la base de datos
        $receta->registrar($receta);

        // Redirigir a la página principal
        header("location: Index.php");
    }



   
}


?>