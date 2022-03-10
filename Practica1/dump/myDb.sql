SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myDb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `ID` int(10) NOT NULL,
  `Nombre` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellido1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellido2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Delegado` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`ID`, `Nombre`, `Apellido1`, `Apellido2`, `Delegado`) VALUES
(1, 'Felipe', 'Garcia', 'Moro', 'candidato'),
(2, 'Manuel', 'pepe', 'toto', 'no candidato'),
(1, 'Felipe', 'Garcia', 'Moro', 'candidato'),
(2, 'Manuel', 'pepe', 'toto', 'no candidato'),
(3, 'Manolo', 'Pere', 'Gomez', 'candidato'),
(3, 'Manolo', 'Pere', 'Gomez', 'candidato'),
(4, 'Fernando', 'Pere', 'Gomez', 'candidato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE `votos` (
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `voto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`nombre`, `voto`) VALUES
('Manolo', 1),
('Manolo', 1),
('Felipe', 1),
('Felipe', 1),
('felipe', 1),
('felipe', 1),
('jesus', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
