CREATE DATABASE IF NOT EXISTS myDb;
USE myDb;
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
  time_zone = "+01:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
CREATE TABLE `Alumno` (
    `id` int(10) NOT NULL,
    `nombre` varchar(15) NOT NULL
    `apellido` varchar(15) NOT NULL
    `apellido2` varchar(15) NOT NULL
    `candidato` int(1) NOT NULL 
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;
INSERT INTO
  `Alumno` (`id`, `name`, `apellido`, `apellido2`, `candidato`)
VALUES
  (1, 'Fernando', 'Garcia', 'Fernandez', 0),
  (2, 'Alfredo', 'Lopez', 'Perez', 1),
  (3, 'Felipe', 'Jimenez', 'Hernandez', 1);
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
