SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `estados_mexico`
--


-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(100) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `estados`
--

INSERT INTO `states` (`id_estado`, `estado`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Coahuila de Zaragoza'),
(6, 'Colima'),
(7, 'Chiapas'),
(8, 'Chihuahua'),
(9, 'Distrito Federal'),
(10, 'Durango'),
(11, 'Guanajuato'),
(12, 'Guerrero'),
(13, 'Hidalgo'),
(14, 'Jalisco'),
(15, 'México'),
(16, 'Michoacán de Ocampo'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo León'),
(20, 'Oaxaca de Juárez'),
(21, 'Puebla'),
(22, 'Querétaro'),
(23, 'Quintana Roo'),
(24, 'San Luis Potosí'),
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz de Ignacio de la Llave'),
(31, 'Yucatán'),
(32, 'Zacatecas');

