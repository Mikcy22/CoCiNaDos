<?php

class User {
    private $pdo;
    public $id;
    public $username;
    public $nombre;
    public $apellidos;
    public $correo_electronico;
    public $contrasena;

    public function __CONSTRUCT() {
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
            header('Location: index.php');
        }
        return false;
    }

    public function TotaRecetas() {
        try {
            $stm = $this->pdo->prepare("SELECT name, description, id, username FROM recipes;");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function BorrarRecetas($id) {
        try {
            $stm = $this->pdo->prepare("DELETE FROM `cocinados`.`recipes` WHERE `id` = :id;");
            $stm->bindParam(':id', $id);
            $stm->execute();

            $stm2 = $this->pdo->prepare("DELETE FROM `cocinados`.`pasos` WHERE `receta_id` = :id;");
            $stm2->bindParam(':id', $id);
            $stm2->execute();

            $stm3 = $this->pdo->prepare("DELETE FROM `cocinados`.`ingredientes` WHERE `receta_id` = :id;");
            $stm3->bindParam(':id', $id);
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

    public function userExist($correo_electronico, $contrasena) {
        try {
            $sql = "SELECT COUNT(*) FROM usuarios WHERE correo_electronico = :correo_electronico AND contrasena = :contrasena";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':correo_electronico', $correo_electronico);
            $stmt->bindParam(':contrasena', $contrasena);
            $stmt->execute();
            return $stmt->fetchColumn() > 0;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data) {
        try {
            // Base query without the password field
            $sql = "UPDATE usuarios SET username = ?, nombre = ?, apellidos = ?, correo_electronico = ?";

            // Parameters array
            $params = [
                $data->username,
                $data->nombre,
                $data->apellidos,
                $data->correo_electronico
            ];

            // Add password to query and parameters if provided
            if (!empty($data->contrasena)) {
                $sql .= ", contrasena = ?";
                $params[] = $data->contrasena;
            }

            // Append WHERE clause
            $sql .= " WHERE user_id = ?";
            $params[] = $data->id;

            // Prepare and execute the statement
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute($params);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getUserByUsername($username) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE username = :username");
            $stm->bindParam(':username', $username);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}






