<?php

class User {
    private $pdo;
    //Atributos del objeto user
    public $id;
    public $username;
    public $nombre;
    public $apellidos;
    public $correo_electronico;
    public $contrasena;
 


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function register($username, $nombre, $apellidos, $correo_electronico, $contrasena) {
        $passwordHash = password_hash($contrasena, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuarios (username, nombre, apellidos, correo_electronico, contrasena) VALUES (:username, :nombre, :apellidos, :correo_electronico, :contrasena)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':correo_electronico', $correo_electronico);
        $stmt->bindParam(':contrasena', $passwordHash);
        return $stmt->execute();

    }


    public function login($correo_electronico, $contrasena) {
        $sql = "SELECT * FROM usuarios WHERE correo_electronico = :correo_electronico";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':correo_electronico', $correo_electronico);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($contrasena, $user['contrasena'])) {
            start_session();
                $_SESSION['username'] = $user['username'];
                header('Location: index.php?');
        }
        return false;
    }



    public function TotaRecetas(){
        try {
            $stm = $this->pdo->prepare("SELECT name, description,id FROM recipes;");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


   
    
    public function BorrarRecetas($id){
        try {
            $stm = $this->pdo->prepare("DELETE FROM `cocinados`.`recipes` WHERE (`id` = '$id');");
            $stm->execute();
            $stm2 = $this->pdo->prepare("DELETE FROM `cocinados`.`pasos` WHERE (`receta_id` = '$id');");
            $stm2->execute();
            $stm3 = $this->pdo->prepare("DELETE FROM `cocinados`.`ingredientes` WHERE (`receta_id` = '$id');");
            $stm3->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function MostrarRecetasUser($username) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM `cocinados`.`recipes` WHERE `username` = :username");
            $stm->bindParam(':username', $username);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }





}
