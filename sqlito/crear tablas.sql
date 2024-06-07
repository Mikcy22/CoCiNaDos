
CREATE TABLE `recetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `time_elaboration` int(11) NOT NULL,
  `calorias` int(11) NOT NULL,
  `num_personas` int(11) NOT NULL,
  `tipo_plato` varchar(255) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `tipo_dieta` varchar(255) NOT NULL,
  `metodo_elaboracion` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `ingrediente_especial` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `pasos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receta_id` int(11) NOT NULL,
  `paso` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `receta_id` (`receta_id`),
  CONSTRAINT `pasos_ibfk_1` FOREIGN KEY (`receta_id`) REFERENCES `recetas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receta_id` int(11) NOT NULL,
  `ingrediente` varchar(255) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `receta_id` (`receta_id`),
  CONSTRAINT `ingredientes_ibfk_1` FOREIGN KEY (`receta_id`) REFERENCES `recetas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



-- Inserting a recipe into the `recetas` table
INSERT INTO recetas (name, time_elaboration, calorias, num_personas, tipo_plato, nacionalidad, tipo_dieta, metodo_elaboracion)
VALUES ('Tacos de Pollo', 30, 400, 4, 'Platos principales', 'Mexicana', 'No vegetariana', 'Asado');

-- Getting the ID of the inserted recipe
SET @receta_id := LAST_INSERT_ID();

-- Inserting steps for the recipe into the `pasos` table
INSERT INTO pasos (receta_id, paso)
VALUES 
(@receta_id, 'Marinar el pollo con especias y jugo de limón.'),
(@receta_id, 'Asar el pollo en una sartén caliente hasta que esté bien cocido.');

-- Inserting ingredients for the recipe into the `ingredientes` table
INSERT INTO ingredientes (receta_id, ingrediente, cantidad)
VALUES 
(@receta_id, 'Pechuga de pollo', '400g'),
(@receta_id, 'Limón', '1 unidad');
