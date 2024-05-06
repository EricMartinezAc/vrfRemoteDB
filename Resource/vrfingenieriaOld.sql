-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2018 a las 23:55:28
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vrfingenieria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `nombreEmpresa` text NOT NULL,
  `nombreContacto` text NOT NULL,
  `nombreVoBo` text NOT NULL,
  `direccionEmpresa` text NOT NULL,
  `telefonoEmpresa` bigint(20) NOT NULL,
  `telefonoContacto` bigint(11) NOT NULL,
  `emailContacto` text NOT NULL,
  `aliasCliente` text NOT NULL,
  `pswCliente` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombreEmpresa`, `nombreContacto`, `nombreVoBo`, `direccionEmpresa`, `telefonoEmpresa`, `telefonoContacto`, `emailContacto`, `aliasCliente`, `pswCliente`) VALUES
(1000, 'Banco de Bogota Ed. Regional', 'Sonia Morera', 'Maira Goenaga', 'Calle 86 No 51B - 51', 313005521, 3115552121, 'noexiste@bancodebogota.com.co', 'BdBRgBq', 'BDBQAZBQ00517'),
(1001, 'Patrimonios Autonomos', 'Darlys Tovar', 'Miguel Romero', 'Calle 86 No 51b - 51', 351232323, 352342341, 'correo@bancodebogota.com', 'EdfBdBRgBq', 'EBDBWSC03E12bq'),
(1002, 'Pfizer Zona Norte', 'Alvaro Perez', 'jefe de zona', 'calle 82 no 55 - 55 piso 2', 313005520, 3115552126, 'jefepfizer@pfizer.com', 'PfizerOfBq', 'PFZR0192PObq'),
(1003, 'B. Bogota Of. Premium', 'Sonia Morera', 'jefa de servicios', 'calle 86 no 51b - 51', 313005522, 3115552122, 'jfapremium@bancobogota.com.co', 'BdBOfPremium', 'PR3M1UM0567bqOF'),
(1004, 'B. Bogota Sucursal Bancaria', 'Sonia Morera', 'jefe Carlos', 'calle 86 no 51b - 51', 313005525, 3115552123, 'sucursalbanca@bancodebogota.com.co', 'BdBSucBancaBq', 'BAN8CAR6IAGTBbq'),
(1005, 'B. Bogota L. Vivienda', 'Sonia Morera', 'jefa de servicios', 'calle 86 no 51b - 51', 313005523, 3115552123, 'localvi@bancodebogota.com', 'BdBLViviendaBq', '3VIVI70LO2Bq'),
(1006, 'B. Bogota L. Experiencia', 'Sonia Morera', 'jefe de servicios', 'calle 86 no 51b -51', 357383151, 3123333434, 'localexp@bancobogota.com', 'BdBLViviendaBq', 'BdBLViviendaBq'),
(1007, 'Fiducuiaria B. Bogota', 'Leonardo Jimenez', 'Recepcion', 'Calle 86 no 51b - 51 piso 3', 313005524, 3115552123, 'fidubg@fidubogota.com', 'FiduBogotaEdifBq', '9FID4MBOG196TBq'),
(1008, 'B. de Bogota Centro Nelmar', 'Sonia Morera', 'jefa de servicios', 'calle 54 kra 46 ', 358768787, 3128768787, 'nelmar@bancobogota.com', 'BdBCNelmar', 'NELMA30SBC06F4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE `cronograma` (
  `idCronograma` int(11) NOT NULL,
  `dia` int(2) NOT NULL,
  `mes` int(2) NOT NULL,
  `ano` int(2) NOT NULL,
  `cliente` text NOT NULL,
  `oficina` text NOT NULL,
  `area` text NOT NULL,
  `tipoActividad` varchar(80) NOT NULL,
  `equipos` text NOT NULL,
  `hrEntrada` time NOT NULL,
  `hrSalida` time NOT NULL,
  `noSemana` int(11) NOT NULL,
  `tecnicoAsignado` text NOT NULL,
  `auxiliarTecnico` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cronograma`
--

INSERT INTO `cronograma` (`idCronograma`, `dia`, `mes`, `ano`, `cliente`, `oficina`, `area`, `tipoActividad`, `equipos`, `hrEntrada`, `hrSalida`, `noSemana`, `tecnicoAsignado`, `auxiliarTecnico`) VALUES
(18001, 00, 00, 00, 'na', 'na', 'na', 'na', 'na', '00:00:00', '00:00:00', 0, 'na', 'na'),
(18002, 27, 06, 18, 'Banco de Bogota', '5to piso', 'Mesa de Dinero', 'Mantenimiento Preventivo', 'AA(indoorC4V_VRF)', '12:00:00', '14:00:00', 4, 'Jhonys de Moya', 'Alfonso Escobar'),
(18003, 27, 06, 18, 'Banco de Bogota', 'CAD', 'sotano 3', 'Mantenimiento Preventivo', 'AA(indoorC4V_VRF), AA(indoorC1V_VRF) ', '14:00:00', '17:30:00', 4, 'Eric Martinez', 'n/a'),
(18004, 28, 06, 18, 'Banco de Bogota', 'Local Premium', 'oficinas', 'Mantenimiento Preventivo', 'AA(indoorVRF)', '11:00:00', '14:00:00', 4, 'Eric Martinez', 'n/a'),
(18005, 27, 06, 18, 'Banco de Bogota', 'Edificio Regional', 'Pisos 3, 4, 5', 'Mantenimiento Preventivo', 'CVA', '14:00:00', '17:30:00', 4, 'Jhonys de Moya', 'Alfonso Escobar'),
(18006, 28, 06, 18, 'Banco de Bogota', 'Sucursal Bancaria', 'Interior', 'Mantenimiento Preventivo', 'AA(indoorVRF)', '09:00:00', '14:00:00', 4, 'Jhonys de Moya', 'Alfonso Escobar'),
(18007, 28, 06, 18, 'Banco de Bogota', 'Centro Nelmar', 'Predeterminada', 'Mantenimiento Preventivo', 'AA', '14:30:00', '17:30:00', 4, 'Eric Martinez, Jhonys de Moya', 'Alfonso Escobar'),
(18008, 29, 06, 18, 'Banco de Bogota', 'Sucursal Bancaria', 'Interior', 'Mantenimiento Preventivo', 'AA, VCE', '08:00:00', '17:30:00', 4, 'Jhonys de Moya', 'Alfonso Escobar'),
(18009, 30, 06, 18, 'Edificio Banco de Bogota', 'Terraza', 'Terraza', 'Mantenimiento Correctivo', 'TCE', '07:30:00', '01:00:00', 4, 'Eric Martinez, Jhonys de Moya', 'Alfonso Escobar'),
(18010, 30, 06, 18, 'Edificio Banco de Bogota', 'Terraza', 'Terraza', 'Mantenimiento Preventivo', 'BAC, BAF', '09:00:00', '12:00:00', 4, 'Eric Martinez', 'n/a'),
(18011, 03, 06, 18, 'Edificio Banco de Bogota', 'UPS principal sotano 1', 'Predeterminada', 'Mantenimiento Preventivo', 'AA', '08:00:00', '10:00:00', 1, 'Eric Martinez, Jhonys de Moya', 'Alfonso Escobar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listado_equipos_bbogota_regional_bq`
--

CREATE TABLE `listado_equipos_bbogota_regional_bq` (
  `id` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `marca` text NOT NULL,
  `serie` text NOT NULL,
  `tipoUnidad` text NOT NULL,
  `tipoEquipo` text NOT NULL,
  `codigo` text NOT NULL,
  `sistema` text NOT NULL,
  `ubicacion` text NOT NULL,
  `capacidadBtuHr` text NOT NULL,
  `modelo` text NOT NULL,
  `serial` text NOT NULL,
  `noActivo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listado_equipos_bbogota_regional_bq`
--

INSERT INTO `listado_equipos_bbogota_regional_bq` (`id`, `piso`, `marca`, `serie`, `tipoUnidad`, `tipoEquipo`, `codigo`, `sistema`, `ubicacion`, `capacidadBtuHr`, `modelo`, `serial`, `noActivo`) VALUES
(1, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '1', '13', 'OFICINA', '24000', 'ARNU24GTPA2', '410KCD08X81', NULL),
(2, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '2', '13', 'OFICINA', '36000', 'ARNU36GTNA2', '410KCRN0410', NULL),
(3, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '3', '13', 'OFICINA', '36000', 'ARNU36GTNA2', '410KC3Z0432', NULL),
(4, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '4', '13', 'OFICINA', '48000', 'ARNU48GTMA2', '503KCD60RL46', NULL),
(5, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '5', '13', 'OFICINA', '36000', 'ARNU36GTNA2', '409KCVUADB79', NULL),
(6, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '35', '13', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCJL91X07', NULL),
(7, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '32', '13', 'OFICINA', '15000', 'ARNU15GTQC2', '505KCJX80X81', NULL),
(8, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '6', '14', 'OFICINA', '18000', 'ARNU18GTQA2', '504KCCV08Q99', NULL),
(9, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '7', '14', 'OFICINA', '18000', 'ARNU18GTQA2', '504KCPY08Q96', NULL),
(10, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '8', '14', 'OFICINA', '15000', 'ARNU15GTQC2', '502KCZP08141', NULL),
(11, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '9', '14', 'OFICINA', '18000', 'ARNU18GTQA2', '504KCBD08Q93', NULL),
(12, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '0B', '14', 'OFICINA', '36000', 'ARNU36GTNA2', '503KCWCOLT29', NULL),
(13, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '0A', '14', 'OFICINA', '15000', 'ARNU15GTQC2', '408KAMZ0003', NULL),
(14, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '0C', '14', 'OFICINA', '36000', 'ARNU36GTNA2', '410KUEA04A24', NULL),
(15, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', 'OD', '14', 'OFICINA', '15000', 'ARNU15GTQC2', '501KCQX08Z40', NULL),
(16, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '0F', '14', 'OFICINA', '15000', 'ARNU15GTQC2', '501KCBD00X53', NULL),
(17, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '11', '14', 'OFICINA', '15000', 'ARNU15GTQC2', '501KCSF08Z42', NULL),
(18, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '12', '14', 'OFICINA', '15000', 'ARNU15GTQC2', '501KCCV08239', NULL),
(19, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '13', '14', 'OFICINA', '36000', 'ARNU36GTNA2', '410KCXM04A30', NULL),
(20, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '14', '14', 'OFICINA', '48000', 'ARNU48GTMA2', '502KCA5OTQ16', NULL),
(21, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '15', '14', 'OFICINA', '24000', 'ARNU24GTPA2', '412KCMR06F23', NULL),
(22, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '0E', '14', 'OFICINA', '15000', 'ARNU15GTQC2', '502KCSF08142', NULL),
(23, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '31', '15', 'OFICINA', '28000', 'ARNU28GTPA2', '411KFBD00037', NULL),
(24, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '30', '15', 'OFICINA', '24000', 'ARNU24GTPA2', '411KLXMOU882', NULL),
(25, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '2F', '15', 'OFICINA', '24000', 'ARNU24GTPA2', '503KCJZ0E992', NULL),
(26, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '2E', '15', 'OFICINA', '48000', 'ARNU48GTMA2', '503KCTBOCR45', NULL),
(27, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '2D', '15', 'OFICINA', '48000', 'ARNU48GTMA2', '503KCMROLR47', NULL),
(28, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '2C', '15', 'OFICINA', '48000', 'ARNU48GTMA2', '503KCEAOLR48', NULL),
(29, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '26', '15', 'OFICINA', '18000', 'ARNU18GTQA2', '504KCHE08Q97', NULL),
(30, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '27', '15', 'OFICINA', '28000', 'ARNU28GTPA2', '502KCWCQTQCF', NULL),
(31, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '1D', '15', 'OFICINA', '28000', 'ARNU28GTPA2', '502KCPY0TJ32', NULL),
(32, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '10', '16', 'OFICINA', '15000', 'ARNU15GTQC2', '408KAKN0005', NULL),
(33, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '18', '16', 'OFICINA', '24000', 'ARNU24GTPA2', '411KCFT0U883', NULL),
(34, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '17', '16', 'OFICINA', '24000', 'ARNU24GTPA2', '502KCLNOTQ15', NULL),
(35, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '19', '16', 'OFICINA', '24000', 'ARNU24GTPA2', '411KCBDOU885', NULL),
(36, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '1C', '16', 'OFICINA', '24000', 'ARNU24GTPA2', '411KCAS0U880', NULL),
(37, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '1B', '16', 'OFICINA', '36000', 'ARNU36GTNA2', '503KCJZOLT32', NULL),
(38, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '1A', '16', 'OFICINA', '24000', 'ARNU24GTPA2', '412KCLA06E20', NULL),
(39, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '16', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '502KCKJ11677', NULL),
(40, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '1E', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCUKO8Y42', NULL),
(41, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '1F', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '502KCYQOTJ34', NULL),
(42, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '20', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '502KCHEOTJ33', NULL),
(43, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '21', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '504KCWC12B25', NULL),
(44, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '25', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCKJ08Y41', NULL),
(45, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '24', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCNL08Y19', NULL),
(46, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '23', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '504KCNL12B23', NULL),
(47, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '22', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCNL08Y43', NULL),
(48, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '28', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCEA08Y40', NULL),
(49, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '29', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '504KCAS12B24', NULL),
(50, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '2A', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCJZ08Y24', NULL),
(51, 5, 'LG', 'multi v iv', 'uma', 'casette vrf', '2B', '17', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCJZ08Y4A', NULL),
(52, 5, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '17', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '505KCFT14651', NULL),
(53, 5, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA', '17', 'CUARTO EQUIPOS', '160000', 'ARWN160BAS4', '505KCQX61L20', NULL),
(54, 5, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '16', 'CUARTO EQUIPOS', '160000', 'ARWN160BAS4', '505KCGWOL23', NULL),
(55, 5, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '15', 'CUARTO EQUIPOS', '120000', 'ARWN120BAS4', '505KCRNORU14', NULL),
(56, 5, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA', '15', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '506KCLH05128', NULL),
(57, 5, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '14', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '505KCXM14650', NULL),
(58, 5, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA', '14', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '506KCTB05129', NULL),
(59, 5, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '13', 'CUARTO EQUIPOS', '120000', 'ARWN120BAS4', '505KCBDORV13', NULL),
(60, 5, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA', '13', 'CUARTO EQUIPOS', '80000', 'ARWN080BAS4', '506KCSF05174', NULL),
(61, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '66', '8', 'OFICINA ', '24000', 'ARNU24GTPA2', '505KCFT08X75', NULL),
(62, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '65', '8', 'OFICINA', '15000', 'ARNU15GTQC2', '504KCVU04P75', NULL),
(63, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '64', '8', 'OFICINA', '15000', 'ARNU15GTQC2', '501KCP400X56', NULL),
(64, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '63', '8', 'OFICINA', '15000', 'ARNU15GTQC2', '508KCCVOBF99', NULL),
(65, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '62', '8', 'OFICINA', '28000', 'ARNU28GTPA2', '504KCFT12B27', NULL),
(66, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '61', '8', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCHF08Y29', NULL),
(67, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '60', '8', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCLH08Y12', NULL),
(68, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '5F', '9', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCVK08X46', NULL),
(69, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '5E', '9', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCBD08401', NULL),
(70, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '5D', '9', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCD608X42', NULL),
(71, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '5C', '9', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCSF08X38', NULL),
(72, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '5B', '9', 'OFICINA', '48000', 'ARNU48GTMA2', '502KCUK11654', NULL),
(73, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '5A', '9', 'OFICINA', '48000', 'ARNU48GTMA2', '502KCFT0FH31', NULL),
(74, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '59', '9', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCTB08N3', NULL),
(75, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '58', '9', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCNL08X71', NULL),
(76, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '4D', '10', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCGW08Y23', NULL),
(77, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '55', '10', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCFT08Y23', NULL),
(78, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '56', '10', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCLH08X88', NULL),
(79, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '57', '10', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCMR08X91', NULL),
(80, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '54', '10', 'OFICINA', '36000', 'ARNU36GTNA2', '504KCCV06715', NULL),
(81, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '4E', '10', 'OFICINA', '36000', 'ARNU36GTNA2', '410KCFT04A31', NULL),
(82, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '53', '10', 'OFICINA', '36000', 'ARNU36GTNA2', '505KCSF08X14', NULL),
(83, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '4F', '10', 'OFICINA', '36000', 'ARNU36GTNA2', '409KCEAADB68', NULL),
(84, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '50', '10', 'OFICINA', '36000', 'ARNU36GTNA2', '505KC2P08X13', NULL),
(85, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '51', '10', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCXM08X74', NULL),
(86, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '52', '10', 'OFICINA', '48000', 'ARNU48GTMA2', '502KCNL11655', NULL),
(87, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '36', '11', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCEA08X92', NULL),
(88, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '37', '11', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCGW08X63', NULL),
(89, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '38', '11', 'OFICINA', '36000', 'ARNU36GTNA2', '505KC0X08X12', NULL),
(90, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '39', '11', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCXM08V82', NULL),
(91, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '3A', '11', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCQX08W08', NULL),
(92, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '3B', '11', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCQX08W04', NULL),
(93, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '3C', '11', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCNC08W19', NULL),
(94, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '3D', '11', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCNL08V79', NULL),
(95, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '3F', '11', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCWC08V81', NULL),
(96, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '3E', '11', 'OFICINA', '28000', 'ARNU28GTPA2', '504KCXM12B26', NULL),
(97, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '44', '12', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCMR08W15', NULL),
(98, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '43', '12', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCSF08X86', NULL),
(99, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '42', '12', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCJZ08X5C', NULL),
(100, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '41', '12', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCA508V80', NULL),
(101, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '40', '12', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCMR08Y39', NULL),
(102, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '48', '12', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCA508Y20', NULL),
(103, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '47', '12', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCXM08Y22', NULL),
(104, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '46', '12', 'OFICINA', '24000', 'ARNU24GTPA2', '505KC4Q08X82', NULL),
(105, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '45', '12', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCQX08X84', NULL),
(106, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '4C', '12', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCCV08X59', NULL),
(107, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '4B', '12', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCBD08X53', NULL),
(108, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '4A', '12', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCPY08Y28', NULL),
(109, 4, 'LG', 'multi v iv', 'uma', 'casette vrf', '49', '12', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCCV08431', NULL),
(110, 4, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '8', 'CUARTO EQUIPOS', '160000', 'ARWN160BAS4', '505KCYQ01LIB', NULL),
(111, 4, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '9', 'CUARTO EQUIPOS', '80000', 'ARWN080BAS4', '506KCLH05152', NULL),
(112, 4, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA', '9', 'CUARTO EQUIPOS', '120000', 'ARWN120BAS4', '505KCP40RU16', NULL),
(113, 4, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '10', 'CUARTO EQUIPOS', '160000', 'ARWN160BAS4', '505KCCV01L19', NULL),
(114, 4, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA', '10', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '505KCRN0R582', NULL),
(115, 4, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '11', 'CUARTO EQUIPOS', '120000', 'ARWN120BAS4', '505KCV40RU15', NULL),
(116, 4, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA', '11', 'CUARTO EQUIPOS', '80000', 'ARWN080BAS4', '506KLSF05150', NULL),
(117, 4, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '12', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '506KCMR05131', NULL),
(118, 4, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA', '12', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '505KCWC0R577', NULL),
(119, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '8D', '5', 'OFICINA', '18000', 'ARNU18GTQA2', '504KCP08R104', NULL),
(120, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '8F', '5', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCQX11M04', NULL),
(121, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '91', '5', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCCV08407', NULL),
(122, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '92', '5', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCD908X90', NULL),
(123, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '94', '5', 'OFICINA', '24000', 'ARNU24GTPA2', '411KCRN04886', NULL),
(124, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '93', '5', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCQX08X60', NULL),
(125, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '90', '5', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCCVU2X83', NULL),
(126, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '8E', '5', 'OFICINA', '18000', 'ARNU18GTQA2', '504KCRN08R02', NULL),
(127, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '95', '5', 'OFICINA', '28000', 'ARNU28GTPA2', '505KCZP11M0S', NULL),
(128, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '84', '6', 'OFICINA', '18000', 'ARNU18GTQA2', '504KCVU08X81', NULL),
(129, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '83', '6', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCAE08X81', NULL),
(130, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '82', '6', 'OFICINA', '36000', 'ARNU36GTNA2', '504KCLH06720', NULL),
(131, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '81', '6', 'OFICINA', '36000', 'ARNU36GTNA2', '505KCCV08X11', NULL),
(132, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '80', '6', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCFA08X44', NULL),
(133, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '85', '6', 'OFICINA', '36000', 'ARNU36GTNA2', '509KCWC01601', NULL),
(134, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '86', '6', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCRIV008Y02', NULL),
(135, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '87', '6', 'OFICINA', '36000', 'ARNU36GTNA2', '503KCKJVT41', NULL),
(136, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '88', '6', 'OFICINA', '24000', 'ARNU24GTPA2', '505KC2P08409', NULL),
(137, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '89', '6', 'OFICINA', '36000', 'ARNU36GTNA2', '503KCXMDCT3D', NULL),
(138, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '8A', '6', 'OFICINA', '24000', 'ARNU24GTPA2', '509KCL200204', NULL),
(139, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '8B', '6', 'OFICINA', '36000', 'ARNU36GTNA2', '503KCFTOLT31', NULL),
(140, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '8C', '6', 'OFICINA', '36000', 'ARNU36GTNA2', '409KCKJADB69', NULL),
(141, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '7C', '7', 'OFICINA', '18000', 'ARNU18GTQA2', '504KCVU08R03', NULL),
(142, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '7D', '7', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCGW08W11', NULL),
(143, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '7F', '7', 'OFICINA', '18000', 'ARNU18GTQA2', '505KCEA08W40', NULL),
(144, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '7E', '7', 'OFICINA', '18000', 'ARNU18GTQA2', '504KCBP08R01', NULL),
(145, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '75', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '504KCVK0YC62', NULL),
(146, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '74', '7', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCVU08X79', NULL),
(147, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '7B', '7', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCKJ08X45', NULL),
(148, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '76', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '508KCGW0R831', NULL),
(149, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '6F', '7', 'OFICINA', '24000', 'ARNU24GTPA2', '505KCWC08X73', NULL),
(150, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '70', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '503KCUKOVT42', NULL),
(151, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '71', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '504KCWC06729', NULL),
(152, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '73', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '410KCD904A22', NULL),
(153, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '72', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '503KCEA0UT40', NULL),
(154, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '77', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '504KCTR06721', NULL),
(155, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '78', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '508KCFT0R795', NULL),
(156, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '7A', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '509KCXMOJ602', NULL),
(157, 3, 'LG', 'multi v iv', 'uma', 'casette vrf', '79', '7', 'OFICINA', '36000', 'ARNU36GTNA2', '505KCNLOAE67', NULL),
(158, 3, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '7', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '506KCD605130', NULL),
(159, 3, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA 1', '7', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '505KCKJ0R573', NULL),
(160, 3, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA 2', '7', 'CUARTO EQUIPOS', '140000', 'ARWN140BAS4', '505KCJ0RI580', NULL),
(161, 3, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '6', 'CUARTO EQUIPOS', '160000', 'ARWN160BAS4', '505KCDF01C22', NULL),
(162, 3, 'LG', 'multi v iv', 'uca', 'water vrf', 'ESCLAVA', '6', 'CUARTO EQUIPOS', '160000', 'ARWN160BAS4', '505KCH1U12A', NULL),
(163, 3, 'LG', 'multi v iv', 'uca', 'water vrf', 'MAESTRA', '5', 'CUARTO EQUIPOS', '160000', 'ARWN160BAS4', '505KCLH01L24', NULL),
(164, 5, 'LG', 'multi v iv', 'uma', 'pared vrf', '96', 'cuarto electrico ', 'cuarto electrico piso 5', '24000', 'ARNU24GSCA2', '505KCJ0X0844', NULL),
(165, 5, 'LG', 'multi v iv', 'uma', 'pared vrf', '97', 'cuarto de rack', 'cuarto de rack piso 5', '24000', 'ARNU24GSCA2', '505KCKY24X81', NULL),
(166, 4, 'LG', 'multi v iv', 'uma', 'pared vrf', '98', 'cuarto electrico', 'cuarto electrico piso 4', '24000', 'ARNU24GSCA2', '412KCA50R480', NULL),
(167, 4, 'LG', 'multi v iv', 'uma', 'pared vrf', '99', 'cuarto de rack', 'cuarto de rack piso 4', '24000', 'ARNU24GSCA2', '503KCRN0EJ62', NULL),
(168, 3, 'LG', 'multi v iv', 'uma', 'pared vrf', '9A', 'cuarto electrico', 'cuarto electrico piso 3', '24000', 'ARNU24GSCA2', '503KCBD0EJ61', NULL),
(169, 3, 'LG', 'multi v iv', 'uma', 'pared vrf', '9B', 'cuarto de rack', 'cuarto de rack piso 3', '24000', 'ARNU24GSCA2', '503CJZODEJ60', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listado_herramientas`
--

CREATE TABLE `listado_herramientas` (
  `idHerramienta` text NOT NULL,
  `nombreHerramienta` text NOT NULL,
  `tipoHerramienta` text NOT NULL,
  `marcaHerramienta` text NOT NULL,
  `modeloHerramienta` text NOT NULL,
  `serialHerramienta` text NOT NULL,
  `codigoHerramienta` text NOT NULL,
  `estadoHerramienta` text NOT NULL,
  `cantidadHerramienta` int(11) NOT NULL,
  `costoCOP` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_tipo_equipos`
--

CREATE TABLE `lista_tipo_equipos` (
  `idTipoEquipo` int(11) NOT NULL,
  `nombreEquipo` text NOT NULL,
  `tipoEquipo` text NOT NULL,
  `aliasEquipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_tipo_equipos`
--

INSERT INTO `lista_tipo_equipos` (`idTipoEquipo`, `nombreEquipo`, `tipoEquipo`, `aliasEquipo`) VALUES
(100, 'ventilador/extractor', 'ventilacion', 'VCE'),
(101, 'casete vrf aa 4 vias', 'unidad interior de aire acondicionado vrf', 'RFC4V'),
(102, 'cortina de aire', 'tipo pared ', 'CVA'),
(103, 'aire acondicionado', 'single', 'AA'),
(104, 'torre de enfriamiento', 'planta de condensacion', 'TCE'),
(105, 'bomba circuito cerrado', 'centrifuga', 'BAF'),
(106, 'bomba circuito abierto', 'centrifuga', 'BAC'),
(107, 'Unidad interior aire acondicionado', 'Unidad interior 4 vias aire acondicionado refrigerante variable ', 'AA(indoorC4V_VRF)'),
(108, 'Unidad interior aire acondicionado', 'Unidad interior 4 vias aire acondicionado refrigerante variable ', 'AA(indoorC1V_VRF)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas_clientes`
--

CREATE TABLE `oficinas_clientes` (
  `idOficinaCliente` text NOT NULL,
  `aliasCliente` text NOT NULL,
  `nombreOficinaCliente` text NOT NULL,
  `direccionOficinaCliente` text NOT NULL,
  `ciudadOficinaCliente` text NOT NULL,
  `cantidadEquipos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oficinas_clientes`
--

INSERT INTO `oficinas_clientes` (`idOficinaCliente`, `aliasCliente`, `nombreOficinaCliente`, `direccionOficinaCliente`, `ciudadOficinaCliente`, `cantidadEquipos`) VALUES
('5P', 'BdBRgBq', '5to piso', 'calle86 51B no 51b-51', 'barranquilla', 51);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros_mtto_aasingle`
--

CREATE TABLE `parametros_mtto_aasingle` (
  `idhistorial` int(11) NOT NULL,
  `fechaEjecucion` text NOT NULL,
  `horaEntrada` text NOT NULL,
  `horaSalida` text NOT NULL,
  `tipoActividad` text NOT NULL,
  `modeloEq` text NOT NULL,
  `serialEq` text NOT NULL,
  `tipoEquipo` text NOT NULL,
  `codigoEquipo` text NOT NULL,
  `v1_2` float NOT NULL,
  `v2_3` float NOT NULL,
  `v1_3` float NOT NULL,
  `a1` float NOT NULL,
  `a2` float NOT NULL,
  `a3` float NOT NULL,
  `pSuccionPSI` int(11) NOT NULL,
  `pDescargaPSI` int(11) NOT NULL,
  `TinRefrC` decimal(10,0) NOT NULL,
  `tOutRefrC` decimal(10,0) NOT NULL,
  `tAmbC` decimal(10,0) NOT NULL,
  `tRoomC` decimal(10,0) NOT NULL,
  `tSetC` decimal(10,0) NOT NULL,
  `deltaTAirUMAC` decimal(10,0) NOT NULL,
  `deltaTAirUCAC` decimal(10,0) NOT NULL,
  `actividadesRealizadas` longtext NOT NULL,
  `observaciones` longtext NOT NULL,
  `requerimientos` longtext NOT NULL,
  `firmaEmpresa` text NOT NULL,
  `tecnicoACargo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros_mtto_torres`
--

CREATE TABLE `parametros_mtto_torres` (
  `idhistorial` int(11) NOT NULL,
  `fechaEjecucion` text NOT NULL,
  `horaEntrada` text NOT NULL,
  `horaSalida` text NOT NULL,
  `tipoActividad` text NOT NULL,
  `marcaEquipo` text NOT NULL,
  `modeloEq` text NOT NULL,
  `serialEq` text NOT NULL,
  `nombreEquipo` text NOT NULL,
  `presionSistPSI` int(11) NOT NULL,
  `tSupplySistC` float NOT NULL,
  `tReturnSistC` float NOT NULL,
  `tAmbienteC` float NOT NULL,
  `v1_2` float NOT NULL,
  `v2_3` float NOT NULL,
  `v1_3` float NOT NULL,
  `a1` float NOT NULL,
  `a2` float NOT NULL,
  `a3` float NOT NULL,
  `hzOp` int(11) NOT NULL,
  `caudalGPM` int(11) NOT NULL,
  `pruebasRealizadas` longtext NOT NULL,
  `actividadesRealizadas` longtext NOT NULL,
  `repuestosRQ` longtext NOT NULL,
  `observaciones` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametros_mtto_torres`
--

INSERT INTO `parametros_mtto_torres` (`idhistorial`, `fechaEjecucion`, `horaEntrada`, `horaSalida`, `tipoActividad`, `marcaEquipo`, `modeloEq`, `serialEq`, `nombreEquipo`, `presionSistPSI`, `tSupplySistC`, `tReturnSistC`, `tAmbienteC`, `v1_2`, `v2_3`, `v1_3`, `a1`, `a2`, `a3`, `hzOp`, `caudalGPM`, `pruebasRealizadas`, `actividadesRealizadas`, `repuestosRQ`, `observaciones`) VALUES
(7900, '27.06.18', '00:00:00', '00:00:00', 'noAplica', '', 'noAplica', 'noAplica', 'noAplica', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'noAplicanoAplica', 'noAplica', 'noAplica', 'noAplica'),
(7901, '17.junio.2018', '07:30:00', '01:00:00', 'Mantenimiento Preventivo', 'PROTEC', 'na', 'na', 'TCE1', 10, 27, 31, 31, 205, 202, 201, 19, 20, 23, 30, 1040, 'mtto Preventivo', 'mtto Preventivo', 'mtto Preventivo', 'corrosión en elementos y equipos'),
(7902, '30.junio.2018', '07:30:00', '01:00:00', 'Mantenimiento Preventivo', 'PROTEC', 'na', 'na', 'TCE2', 18, 27, 31, 31, 204, 203, 203, 15, 17, 18, 30, 1040, 'mtto Correctivo', 'mtto Preventivo', 'mtto Preventivo', 'limpieza de paneles'),
(7903, '16.junio.2018', ' 07:30:00', '13:00:00', 'Mantenimiento Preventivo', 'PROTEC', 'FSW-127-11-SS', 'WS14127011', 'TCE1', 11, 27, 31, 32, 205, 202, 202, 19, 20, 20, 30, 0, 'pruebas sistemÃ¡ticas, responde al software sin novedad', 'limpieza general del equipo, cepillado de panales interiores', 'valvulas de corte de lÃ­neas hidrÃ¡ulicas', 'corrosiÃ³n en vÃ¡lvulas, se requiere reemplazo '),
(7904, '30.junio.2018', ' 07:30:00', '13:00:00', 'Mantenimiento Correctivo', 'PROTEC', 'FSW-127-11-SS', 'WS14127011', 'TCE1', 10, 27, 27, 32, 205, 202, 202, 17, 19, 19, 30, 0, 'pruebas sistemÃ¡ticas, responde al software sin novedad', 'limpieza general del equipo, cepillado de panales interiores', 'valvulas de corte de lÃ­neas hidrÃ¡ulicas', 'corrosiÃ³n en vÃ¡lvulas, se requiere reemplazo '),
(7905, '14.julio.2018', '08:00:00', '13:00:00', 'Mantenimiento Correctivo', 'PROTEC', 'FSW-127-11-SS', 'WS14127011', 'TCE1', 10, 27, 31, 32, 205, 205, 203, 16, 17, 17, 30, 0, 'pruebas generales', 'limpieza de panales', 'correas', 'corrosiÃ³n en vÃ¡lvulas, se requiere reemplazo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposactividades`
--

CREATE TABLE `tiposactividades` (
  `idTipoActividad` text NOT NULL,
  `nombreTipoActividad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiposactividades`
--

INSERT INTO `tiposactividades` (`idTipoActividad`, `nombreTipoActividad`) VALUES
('TYPACT0010', 'mantenimiento preventivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioactivo`
--

CREATE TABLE `usuarioactivo` (
  `idUsuActivo` int(11) NOT NULL,
  `nombreUsuActivo` text NOT NULL,
  `identUsuActivo` int(11) NOT NULL,
  `fechaUsuActivo` text NOT NULL,
  `durMinUsuActivo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarioactivo`
--

INSERT INTO `usuarioactivo` (`idUsuActivo`, `nombreUsuActivo`, `identUsuActivo`, `fechaUsuActivo`, `durMinUsuActivo`) VALUES
(14, 'Eric Martinez', 1140851982, '27-06-18(16:49:00)', '00:00:00'),
(15, 'Eric Martinez', 1140851982, '27-06-18(16:49:58)', '00:00:00'),
(16, 'Eric Martinez', 1140851982, '27-06-18(16:51:41)', '00:00:00'),
(17, 'Eric Martinez', 1140851982, '27-06-18(16:55:00)', '00:00:00'),
(18, 'Eric Martinez', 1140851982, '27-06-18(16:55:14)', '00:00:00'),
(19, 'Eric Martinez', 1140851982, '27-06-18(16:56:04)', '00:00:00'),
(20, 'Eric Martinez', 1140851982, '27-06-18(16:56:54)', '00:00:00'),
(21, 'Eric Martinez', 1140851982, '27-06-18(16:58:11)', '00:00:00'),
(22, 'Eric Martinez', 1140851982, '27-06-18(16:59:40)', '00:00:00'),
(23, 'Eric Martinez', 1140851982, '27-06-18(17:01:25)', '00:00:00'),
(24, 'Eric MartÃ­nez', 1140851982, '27-06-18(19:16:12)', '00:00:00'),
(25, 'Eric MartÃ­nez', 1140851982, '28-06-18(00:52:09)', '00:00:00'),
(26, 'Eric MartÃ­nez', 1140851982, '28-06-18(00:52:19)', '00:00:00'),
(27, 'Adolfo Escobar', 1002156270, '28-06-18(15:16:48)', '00:00:00'),
(28, 'Eric Martinez', 1140851982, '29-06-18(00:23:58)', '00:00:00'),
(29, 'Eric Martinez', 1140851982, '29-06-18(20:36:29)', '00:00:00'),
(30, 'Eric Martinez', 1140851982, '30-06-18(00:18:30)', '00:00:00'),
(31, 'Eric Martinez', 1140851982, '30-06-18(00:50:41)', '00:00:00'),
(32, 'Eric Martinez', 1140851982, '13-07-18(23:35:33)', '00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` text NOT NULL,
  `nombreUsuario` text NOT NULL,
  `cargoUsuario` text NOT NULL,
  `telefonoUsuario` bigint(20) NOT NULL,
  `correoUsuario` text NOT NULL,
  `contrasenaUsuario` text NOT NULL,
  `cedulaUsuario` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `cargoUsuario`, `telefonoUsuario`, `correoUsuario`, `contrasenaUsuario`, `cedulaUsuario`) VALUES
('ADMIN160692BQ1001', 'Eric Martinez', 'gestor', 3173730716, 'mantenimientobquilla@vrfingenieria.com', 'admin', 1140851982),
('USUARBQ001', 'jhonys de moya', 'auxiliar tecnico climatizacion y control', 3022346970, 'unknow@vrfingenieria.com', '72431461', 72431461),
('USUARBQ002', 'adolfo escobar', 'auxiliar aprendiz', 3135888047, 'unknok2@vrfingenieria.com', '1002156270', 1002156270);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonasclientes`
--

CREATE TABLE `zonasclientes` (
  `idZonaClientes` text NOT NULL,
  `nombreEmpresa` text NOT NULL,
  `nombreOficinaCliente` text NOT NULL,
  `nombreZonaCliente` text NOT NULL,
  `cantidadEquipos` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zonasclientes`
--

INSERT INTO `zonasclientes` (`idZonaClientes`, `nombreEmpresa`, `nombreOficinaCliente`, `nombreZonaCliente`, `cantidadEquipos`) VALUES
('5PZC', 'BdBRgBq', '5to piso', 'oficinas 5to piso', 51);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`idCronograma`);

--
-- Indices de la tabla `listado_equipos_bbogota_regional_bq`
--
ALTER TABLE `listado_equipos_bbogota_regional_bq`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listado_herramientas`
--
ALTER TABLE `listado_herramientas`
  ADD UNIQUE KEY `idHerramienta` (`idHerramienta`(80));

--
-- Indices de la tabla `lista_tipo_equipos`
--
ALTER TABLE `lista_tipo_equipos`
  ADD PRIMARY KEY (`idTipoEquipo`);

--
-- Indices de la tabla `oficinas_clientes`
--
ALTER TABLE `oficinas_clientes`
  ADD UNIQUE KEY `idOficinaCliente` (`idOficinaCliente`(80));

--
-- Indices de la tabla `parametros_mtto_aasingle`
--
ALTER TABLE `parametros_mtto_aasingle`
  ADD PRIMARY KEY (`idhistorial`);

--
-- Indices de la tabla `parametros_mtto_torres`
--
ALTER TABLE `parametros_mtto_torres`
  ADD PRIMARY KEY (`idhistorial`);

--
-- Indices de la tabla `tiposactividades`
--
ALTER TABLE `tiposactividades`
  ADD UNIQUE KEY `idTipoActividad` (`idTipoActividad`(80));

--
-- Indices de la tabla `usuarioactivo`
--
ALTER TABLE `usuarioactivo`
  ADD PRIMARY KEY (`idUsuActivo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `idUsuario` (`idUsuario`(100));

--
-- Indices de la tabla `zonasclientes`
--
ALTER TABLE `zonasclientes`
  ADD UNIQUE KEY `idZonaClientes` (`idZonaClientes`(80));

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
--
-- AUTO_INCREMENT de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  MODIFY `idCronograma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18012;
--
-- AUTO_INCREMENT de la tabla `listado_equipos_bbogota_regional_bq`
--
ALTER TABLE `listado_equipos_bbogota_regional_bq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT de la tabla `lista_tipo_equipos`
--
ALTER TABLE `lista_tipo_equipos`
  MODIFY `idTipoEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT de la tabla `parametros_mtto_aasingle`
--
ALTER TABLE `parametros_mtto_aasingle`
  MODIFY `idhistorial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `parametros_mtto_torres`
--
ALTER TABLE `parametros_mtto_torres`
  MODIFY `idhistorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7906;
--
-- AUTO_INCREMENT de la tabla `usuarioactivo`
--
ALTER TABLE `usuarioactivo`
  MODIFY `idUsuActivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
