<?php
require_once 'model/user.php';
require_once 'helpers/session_helper.php';

class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index() {
        require_once 'view/header.php';
        require_once 'view/formUser.php';
        require_once 'view/footer.php';
    }

    public function actionLogin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $correo_electronico = $_POST['correo_electronico'];
            $contrasena = $_POST['contrasena'];
            $user = $this->user->login($correo_electronico, $contrasena);
            if ($user) {
                start_session();
                $_SESSION['username'] = $user['username'];
                header('Location: index.php?');
            } else {
                echo "Invalid credentials";
            }
        } else {
            require_once 'view/header.php';
            require 'view/formUser.php';
            require_once 'view/footer.php';
        }
    }

    public function logout() {
        start_session();
        session_destroy();
        header('Location: index.php?');
    }

    public function register2() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo_electronico = $_POST['correo_electronico'];
            $contrasena = $_POST['contrasena'];

            if ($this->user->register($username, $nombre, $apellidos, $correo_electronico, $contrasena)) {
                $user = $this->user->login($correo_electronico, $contrasena);
                
                //header('Location: index.php?');
                var_dump($user);
                
            } else {
                echo "Registration failed";
            }
        } else {
            require 'view/register.php';
        }
    }

    public function adminPanel() {
        $recipes = $this->user->TotaRecetas();
        require_once 'view/header.php';
        require_once 'view/showRecipes.php';
        require_once 'view/footer.php';
    }

    public function BorrarRecetas() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $this->user->BorrarRecetas($id);
            header('Location: index.php?c=User&a=adminPanel');
        }
    }

    public function showUserRecipes() {
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
}
?>
