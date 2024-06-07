<?php
class Receta {
    // Atributo para conexión a SGBD
    private $pdo;

    // Atributos del objeto receta
    public $id;
    public $name;
    public $time_elaboration;
    public $calorias;
    public $num_personas;
    public $tipo_plato;
    public $nacionalidad;
    public $tipo_dieta;
    public $metodo_elaboracion;
    public $ingrediente_especial;
    public $image;
    public $description;
    public $ingredientes;
    public $pasos;
    public $username; // Nuevo atributo

    // Método de conexión a SGBD
    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // Método para registrar una receta
    public function registrar(Receta $data) {
        try {
            $sql = "INSERT INTO recipes (name, time_elaboration, calorias, num_personas, tipo_plato, nacionalidad, tipo_dieta, metodo_elaboracion, ingrediente_especial, image, description, username)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stm = $this->pdo->prepare($sql);
            $stm->execute([
                $data->name,
                $data->time_elaboration,
                $data->calorias,
                $data->num_personas,
                $data->tipo_plato,
                $data->nacionalidad,
                $data->tipo_dieta,
                $data->metodo_elaboracion,
                $data->ingrediente_especial,
                $data->image,
                $data->description,
                $data->username // Guardar el username
            ]);

            $receta_id = $this->pdo->lastInsertId();

            // Insertar en la tabla ingredientes
            foreach ($data->ingredientes as $ingrediente) {
                $sql = "INSERT INTO ingredientes (receta_id, ingrediente, cantidad) VALUES (?, ?, ?)";
                $stm = $this->pdo->prepare($sql);
                $stm->execute([$receta_id, $ingrediente['nombre'], $ingrediente['cantidad']]);
            }

            // Insertar en la tabla pasos
            foreach ($data->pasos as $paso) {
                $sql = "INSERT INTO pasos (receta_id, paso) VALUES (?, ?)";
                $stm = $this->pdo->prepare($sql);
                $stm->execute([$receta_id, $paso]);
            }

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function ListarFiltro($categoria, $subcategoria) {
        try {

            $result = array();
            //Sentencia SQL para selección de datos.
            $stm = $this->pdo->prepare("SELECT * FROM recipes where $categoria = $subcategoria");
            //Ejecución de la sentencia SQL.
            $stm->execute();
            //fetchAll — Devuelve un array que contiene todas las filas del conjunto
            //de resultados
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //Obtener mensaje de error.
            die($e->getMessage());
        }
    }

    public function TotalRecipes() {
        try {
            $stm = $this->pdo->prepare("SELECT COUNT(*) FROM recipes");
            $stm->execute();
            return (int) $stm->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function TotalNacionalidades() {
        try {
            $stm = $this->pdo->prepare("SELECT COUNT(DISTINCT nacionalidad) FROM recipes;");
            $stm->execute();
            return (int) $stm->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function TotalUsuarios() {
        try {
            $stm = $this->pdo->prepare("SELECT COUNT(DISTINCT username) FROM recipes;");
            $stm->execute();
            return (int) $stm->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarRamdon($num)   {
        try {
            $result = array();
            //Sentencia SQL para selección de datos.
            $stm = $this->pdo->prepare("SELECT * FROM recipes ORDER BY RAND()LIMIT $num;");
            //Ejecución de la sentencia SQL.
            $stm->execute();
            //fetchAll — Devuelve un array que contiene todas las filas del conjunto
            //de resultados
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //Obtener mensaje de error.
            die($e->getMessage());
        }
    }

    public function getRecetasByParams($column, $value){

        // Construir la consulta usando el nombre de la columna de forma segura.
        $sql = "SELECT id,name,description,image FROM recipes WHERE $column = :value";
        $stm = $this->pdo->prepare($sql);
        $stm->bindParam(':value', $value, PDO::PARAM_STR);

        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_OBJ);
    } 

    public function DatosReceta($recipeId){
        // Obtener información básica de la receta
        $sql = "SELECT * FROM recipes WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$recipeId]);
        $recipe = $stmt->fetch();

        if (!$recipe) {
            return null; // Receta no encontrada
        }

        // Obtener ingredientes de la receta
        $sql = "SELECT * FROM ingredientes WHERE receta_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$recipeId]);
        $ingredientes = $stmt->fetchAll();

        // Obtener pasos de la receta
        $sql = "SELECT * FROM pasos WHERE receta_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$recipeId]);
        $pasos = $stmt->fetchAll();

        // Combinar todos los datos en un solo array
        $recipe['ingredientes'] = $ingredientes;
        $recipe['pasos'] = $pasos;

        return $recipe;
    }


    public function DeleteRecetas($idReceta){
		try{
			$stm = $this->pdo->prepare("DELETE FROM recipes WHERE id = ?");
			$stm->execute(array($idReceta));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


    

















}


?>