-- --------------------------------------------------------
-- Host:                         yacumama.ml
-- Server version:               5.7.40-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for admin_yacumama
CREATE DATABASE IF NOT EXISTS `admin_yacumama` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `admin_yacumama`;

-- Dumping structure for table admin_yacumama.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `pedido_id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pedido_mesa` varchar(50) NOT NULL,
  `pedido_platos` varchar(50) NOT NULL,
  `pedido_subtotal` float NOT NULL,
  `pedido_pago` varchar(50) NOT NULL,
  `pedido_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`pedido_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table admin_yacumama.pedidos: ~0 rows (approximately)
DELETE FROM `pedidos`;
INSERT INTO `pedidos` (`pedido_id`, `pedido_date`, `pedido_mesa`, `pedido_platos`, `pedido_subtotal`, `pedido_pago`, `pedido_estado`) VALUES
	(8, '2022-12-15 01:32:37', '5', '8,;9,;10,;11,1;12,;13,;14,2;15,;16,;17,;', 62, 'Cancelado', 'Terminado'),
	(9, '2022-12-15 01:32:54', '8', '8,;9,;10,;11,;12,2;13,;14,;15,3;16,;17,;', 105, 'Cancelado', 'Terminado');

-- Dumping structure for table admin_yacumama.platos
CREATE TABLE IF NOT EXISTS `platos` (
  `plato_id` int(11) NOT NULL AUTO_INCREMENT,
  `plato_nombre` varchar(50) NOT NULL,
  `plato_descripcion` varchar(100) DEFAULT NULL,
  `plato_precio` decimal(8,2) NOT NULL,
  `plato_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`plato_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Dumping data for table admin_yacumama.platos: ~0 rows (approximately)
DELETE FROM `platos`;
INSERT INTO `platos` (`plato_id`, `plato_nombre`, `plato_descripcion`, `plato_precio`, `plato_img`) VALUES
	(8, 'Sudado de Tilapia', 'La mejor tilapia en un exquisito sudado', 20.00, 'sudado_tilapia.jpg'),
	(9, 'Tilapia a la Parrilla', 'La mejor tilapia de la regiÃ³n', 22.00, 'tilapia_parrilla.jpg'),
	(10, 'Paiche Asado', 'Paiche de la regiÃ³n, asado', 24.00, 'paiche_asado.jpg'),
	(11, 'Trucha frita', 'Frita con patacones, yucas y ensalada', 18.00, 'trucha_frita.jpg'),
	(12, 'Ceviche de doncella', 'Pescado regional: Doncella o Paiche', 22.50, 'ceviche_doncella.jpg'),
	(13, 'ChicharrÃ³n de pescado', 'Pescado regional: Doncella o Paiche', 22.50, 'chicharron_pescado.jpg'),
	(14, 'Avispa juane', 'Autentico juane.', 22.00, 'avispa_juane.jpg'),
	(15, 'Chaufa regional', 'Con cecina y chorizo de primera calidad', 20.00, 'chaufa_regional.jpg'),
	(16, 'Costilla a la parrilla', 'Con patacones, yucas y ensalada.', 24.00, 'costilla_parrilla.jpg'),
	(17, 'Parrillada mixta', 'Parrillada de Tilapia, con chancho y pollo', 30.00, 'parrilla_mixta.jpg');

-- Dumping structure for table admin_yacumama.users
CREATE TABLE IF NOT EXISTS `users` (
  `users_dni` varchar(8) NOT NULL DEFAULT '',
  `users_nombres` varchar(50) NOT NULL,
  `users_apellidos` varchar(50) NOT NULL,
  `users_rol` varchar(50) NOT NULL,
  `users_password` varchar(50) NOT NULL,
  PRIMARY KEY (`users_dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table admin_yacumama.users: ~0 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`users_dni`, `users_nombres`, `users_apellidos`, `users_rol`, `users_password`) VALUES
	('1246759', 'Ana', 'Flores', 'Cocinero', '536538e4e5b8721d2f53a51c57fe223880f53adb'),
	('25469154', 'Francisco', 'Quispe', 'Mesero', '1f11c68980b97f33eaf3bb304ed3a27500c3b617'),
	('72176075', 'Diego', 'Noriega', 'Administrador', 'f6868a2191e3d4edfe264c1bdc0c2f5f8b2e0c00'),
	('73246195', 'Alexandra', 'Garcia', 'Mesero', '6b02d79a49558bdd36de4b2356a2fc80d338ab58'),
	('75346195', 'Pedro', 'Gamboa', 'Cocinero', '4c7d1267d2e4d8e6c92ad678314cb103956972e2'),
	('79463125', 'Juan', 'Perez', 'Cocinero', '5885be5240d11cbbdd38b9e20e2df47e226ba8b0');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
