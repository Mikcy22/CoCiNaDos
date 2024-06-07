<?php
require_once 'model/user.php';

class UserController {
    private $user;


    public function __construct() {
        $this->user = new User();
    }

    public function index()
    {
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
                session_start();
                $_SESSION['username'] = $user['username'];
                header('Location: index.php?');
                //echo $user['username'];
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
        session_start();
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

            echo ($contrasena);

            if ($this->user->register($username, $nombre, $apellidos, $correo_electronico, $contrasena)) {
                // Iniciar sesión automáticamente después de registrar
                $user = $this->user->login($correo_electronico, $contrasena);
                if ($user) {
                    session_start();
                    $_SESSION['user_id'] = $user['user_id'];
                    header('Location: index.php?action=home');
                }
            } else {
                echo "Registration failed";
                echo ($contrasena);
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
            //echo $id;
            $user = $this->user->BorrarRecetas($id);
            header('Location: index.php?c=User&a=adminPanel');

        }
       
       
    }







}
    




