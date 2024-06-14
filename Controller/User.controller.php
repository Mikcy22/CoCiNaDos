<?php
require_once 'model/user.php';
require_once 'helpers/session_helper.php';

class UserController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        require_once 'view/header.php';
        require_once 'view/formUser.php';
        require_once 'view/footer.php';
    }

    public function actionLogin()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $correo_electronico = $_POST['correo_electronico'];
        $contrasena = $_POST['contrasena'];
        $user = $this->user->login($correo_electronico, $contrasena);
        
        if ($user) {
            session_start();
            $_SESSION['username'] = $user['username'];
            header('Location: index.php');
            exit(); // Agrega exit() después de la redirección para asegurarte de que el script se detenga
        } else {
            header('Location: index.php?c=User&action=Login&error=1');
            exit(); // Agrega exit() después de la redirección para asegurarte de que el script se detenga
        }
    } else {
        require_once 'view/header.php';
        require 'view/formUser.php';
        require_once 'view/footer.php';
    }
}


    public function logout()
    {
        start_session();
        setcookie('cookieConsent', '', time() - 3600, '/');
        session_destroy();
        header('Location: index.php');
    }

    public function register2()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo_electronico = $_POST['correo_electronico'];
            $contrasena = $_POST['contrasena'];


            if ($username === "admin") {
                header("Location: index.php?c=User&a=actionLogin&error=3");
                return;
            }



            $registerResult = $this->user->register($username, $nombre, $apellidos, $correo_electronico, $contrasena);

            if ($registerResult === "Registro exitoso") {
                $user = $this->user->login($correo_electronico, $contrasena);
                header("Location: index.php?c=User&a=actionLogin&error=1");
            } else {
                echo $registerResult;  // Mostrar el mensaje de error específico
            }
        } else {
            require 'view/register.php';
        }

    }

    public function adminPanel()
    {
        $recipes = $this->user->TotaRecetas();
        $avisos = $this->user->getAvisos();
        $avisos = $this->user->TotaAvisos();
        require_once 'view/header.php';
        require_once 'view/showRecipes.php';
        require_once 'view/footer.php';
    }

    public function BorrarRecetas()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $this->user->BorrarRecetas($id);
            header('Location: index.php?c=User&a=adminPanel');
        }
    }

    public function BorrarComentario()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $this->user->BorrarComentario($id);
            header('Location: index.php?c=User&a=adminPanel');
        }
    }

    public function showUserRecipes()
    {
        start_session();
        if (!isset($_SESSION['username'])) {
            header('Location: index.php?action=login');
            exit;
        }
        $username = $_SESSION['username'];
        $recipes = $this->user->MostrarRecetasUser($username);
        require_once 'view/header.php';
        require_once 'view/showUserRecipes.php';
        require_once 'view/footer.php';
    }

    public function Editar()
    {
        $user = new stdClass();
        $user->id = $_REQUEST['id'];
        $user->username = $_REQUEST['username'];
        $user->nombre = $_REQUEST['nombre'];
        $user->apellidos = $_REQUEST['apellidos'];
        $user->correo_electronico = $_REQUEST['correo_electronico'];
        $user->contrasena = $_REQUEST['contrasena'];

        $this->user->Actualizar($user);
        require_once 'view/header.php';
        require_once 'view/changeDataForm.php';
        require_once 'view/footer.php';
    }

    public function showUpdateForm()
    {
        start_session();
        if (!isset($_SESSION['username'])) {
            header('Location: index.php?action=login');
            exit;
        }

        $username = $_SESSION['username'];
        $user = $this->user->getUserByUsername($username);

        require_once 'view/header.php';
        require_once 'view/changeDataForm.php';
        require_once 'view/footer.php';
    }

    public function updateUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo_electronico = $_POST['correo_electronico'];
            $contrasena = $_POST['contrasena'];

            $data = new stdClass();
            $data->id = $id;
            $data->username = $username;
            $data->nombre = $nombre;
            $data->apellidos = $apellidos;
            $data->correo_electronico = $correo_electronico;
            $data->contrasena = !empty($contrasena) ? password_hash($contrasena, PASSWORD_BCRYPT) : null;

            if ($this->user->Actualizar($data)) {
                //echo "Usuario actualizado exitosamente";
                if (!isset($_SESSION['username'])) {
                    header('Location: index.php?c=User&a=logout');
                    exit;
                }
            } else {
                echo "Error al actualizar el usuario";
            }
        }
    }


    public function guardarAviso()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                // Depuración: mostrar datos recibidos
                //echo "Datos recibidos: $name, $email, $message";

                if ($this->user->guardarAviso($name, $email, $message)) {
                    header('Location: index.php?#ancla'); // Redirigir al ancla después de un envío exitoso
                    exit(); // Asegurar que se detiene la ejecución después de la redirección
                } else {
                    echo "Error al crear el registro.";
                }
            } else {
                echo "Todos los campos son obligatorios.";
            }
        } else {
            echo "Método de solicitud no válido.";
        }
    }


    public function showAvisos()
    {
        $avisos = $this->user->getAvisos();
        require 'views/showRecipes.php';
    }
}
