-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2019 a las 21:50:49
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor_uriangato`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_sesion`
--

CREATE TABLE `archivos_sesion` (
  `id_archivo` int(11) NOT NULL,
  `nombre_archivo` varchar(255) NOT NULL,
  `id_sesion` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_sesiona`
--

CREATE TABLE `archivos_sesiona` (
  `id_archivoa` int(11) NOT NULL,
  `descripcion_archivoa` varchar(255) NOT NULL,
  `nombre_archivoa` varchar(255) NOT NULL,
  `id_sesiona` int(11) NOT NULL,
  `urla` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos_sesiona`
--

INSERT INTO `archivos_sesiona` (`id_archivoa`, `descripcion_archivoa`, `nombre_archivoa`, `id_sesiona`, `urla`) VALUES
(2, 'Acta de Ayuntamiento 1', 'orden_del_dia.pdf', 1, 'storage/sesion_ayuntamiento/anexos/194044orden_del_dia.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_gaceta`
--

CREATE TABLE `calendario_gaceta` (
  `id_evento` int(11) NOT NULL,
  `titulo_evento` int(11) NOT NULL,
  `descripcion_evento` text NOT NULL,
  `color_evento` varchar(10) DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL,
  `hora_evento` time DEFAULT NULL,
  `codigo_evento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calendario_gaceta`
--

INSERT INTO `calendario_gaceta` (`id_evento`, `titulo_evento`, `descripcion_evento`, `color_evento`, `fecha_evento`, `hora_evento`, `codigo_evento`) VALUES
(1, 12, 'Instalaciones de Smapau		', '#039da9', '2018-10-23', '12:00:00', 'LFjGR'),
(2, 13, 'Oficinas provisionales de la Presidencia Municipal ubicadas en Morelos nÃºmero 1, letra A.', '#fae7e7', '2018-10-18', '17:00:00', 'AY5Q1'),
(3, 13, 'Oficinas provisionales de la Presidencia Municipal ubicadas en Morelos nÃºmero 1 letra A.', '#fae7e7', '2018-11-07', '15:00:00', 'am5go'),
(4, 13, 'Oficinas provisionales de la Presidencia Municipal ubicadas en Morelos nÃºmero 1 letra A', '#fae7e7', '2018-10-26', '17:00:00', 'baxJM'),
(5, 13, 'Sala de Cabildos', '#fae7e7', '2019-01-31', '14:00:00', 'Umt8n'),
(6, 13, 'Sala de Cabildos', '#fae7e7', '2019-03-12', '11:00:00', 'vBclD'),
(7, 1, 'Oficinas provisionales de Presidencia Municipal ubicadas en Morelos 1 letra A', '#1d7640', '2018-10-22', '17:00:00', 'wgJis'),
(8, 1, 'Oficinas provisionales de Presidencia Municipal ubicadas en Morelos nÃºmero 1 letra A', '#1d7640', '2018-11-05', '17:00:00', 'lqcL9'),
(9, 1, 'Oficinas provisionales de la Presidencia Municipal ubicadas en Morelos 1 letra A', '#1d7640', '2018-11-12', '17:00:00', 'JpotG'),
(10, 1, 'Oficinas provisionales de Presidencia Municipal ubicadas en Morelos 1 letra A', '#1d7640', '2018-11-21', '17:00:00', 'zSi8J'),
(11, 10, 'Instalaciones de la DirecciÃ³n de Desarrollo EconÃ³mico y Turismo', '#cdd3d3', '2018-12-03', '10:00:00', 'Eox67'),
(12, 10, 'Sala de Cabildo', '#cdd3d3', '2019-02-05', '11:00:00', '9Q1wf'),
(13, 10, 'Instalaciones de la DirecciÃ³n de Desarrollo EconÃ³mico y Turismo', '#cdd3d3', '2019-02-13', '11:30:00', 'tT7sB'),
(14, 10, 'Instalaciones de la DirecciÃ³n de Desarrollo EconÃ³mico y Turismo', '#cdd3d3', '2019-02-15', '12:00:00', 'dTVMY'),
(15, 9, 'Instalaciones de la DirecciÃ³n de FiscalizaciÃ³n de Alcoholes, Comercio y Reglamentos.', '#b2958f', '2018-10-25', '10:00:00', 'H6si2'),
(16, 9, 'Instalaciones del SalÃ³n Azul, ubicado en calle San Miguel.', '#b2958f', '2018-11-29', '17:00:00', 'sSc1m'),
(17, 9, 'Sala de Cabildo', '#b2958f', '2019-02-07', '11:00:00', 'BKI6t'),
(18, 9, 'Sala de Cabildo', '#b2958f', '2019-03-11', '10:00:00', 'BhoHO'),
(19, 2, 'Instalaciones de las oficinas provisionales de la Presidencia Municipal ubicadas en Morelos 1 letra A', '#c99d52', '2018-10-26', '18:00:00', 'gWZkP'),
(20, 2, 'Instalaciones de las Oficinas ubicadas en la calle San miguel (Ex cÃ¡rcel)', '#c99d52', '2018-11-06', '12:00:00', '2qxZC'),
(21, 8, 'Sala de Cabildo', '#e6c2a2', '2019-01-22', '11:00:00', 'uHNKX'),
(22, 8, 'Sala de Cabildo', '#e6c2a2', '2019-02-13', '10:00:00', '57vjn'),
(23, 8, 'Sala de Cabildo', '#e6c2a2', '2019-02-27', '10:00:00', 'dqrUo'),
(24, 8, 'Instalaciones de la DirecciÃ³n de Seguridad PÃºblica.', '#e6c2a2', '2019-02-14', '13:00:00', 'jlEDk'),
(25, 8, 'Sala de Cabildo', '#e6c2a2', '2019-03-29', '11:30:00', 'UTYSn'),
(26, 6, 'Instalaciones de la Casa de la Cultura', '#611c6d', '2018-11-05', '09:00:00', '3xUxw'),
(27, 6, 'Instalaciones de la Casa de la Cultura.', '#611c6d', '2018-11-16', '10:00:00', 'Z1C5E'),
(28, 6, 'Instalaciones de la Biblioteca Rosaura Pedraza.', '#611c6d', '2018-12-24', '10:00:00', 'IQUtE'),
(29, 6, 'Sala de Cabildo', '#611c6d', '2019-02-15', '10:00:00', '2xlu2'),
(30, 6, 'Sala de Cabildo', '#611c6d', '2019-02-21', '10:00:00', '9WEBL'),
(31, 2, 'Instalaciones de Seguridad PÃºblica', '#c99d52', '2019-02-14', '10:00:00', 's3CRD'),
(32, 2, 'Sala de Cabildo', '#c99d52', '2019-03-19', '09:30:00', '1EtvX'),
(33, 4, 'Instalaciones de Seguridad PÃºblica', '#659742', '2018-10-25', '18:00:00', 'YhBYZ'),
(34, 4, 'Instalaciones provisionales de Presidencia Municipal ubicadas en Morelos 1 letra A', '#659742', '2018-11-08', '10:00:00', 'jL5nv'),
(35, 4, 'SalÃ³n Azul (Ex cÃ¡rcel)', '#659742', '2018-11-26', '09:00:00', 'xC7Zl'),
(36, 4, 'SalÃ³n Azul (Ex CÃ¡rcel)', '#659742', '2018-12-06', '10:00:00', '7Kc7t'),
(37, 4, 'Oficinas provisionales de Presidencia Municipal ubicadas en Morelos 1 letra A', '#659742', '2019-01-09', '10:00:00', 'b4EKy'),
(38, 4, 'Sala de Cabildo', '#659742', '2019-02-18', '12:00:00', 'TBP3W'),
(39, 4, 'Sala de Cabildo', '#659742', '2019-02-21', '12:30:00', 'f8IFo'),
(40, 4, 'Sala de Cabildo', '#659742', '2019-04-25', '12:00:00', '0Jgtg'),
(41, 4, 'Sala de Cabildo', '#659742', '2019-03-07', '12:00:00', 'ZgOcg'),
(42, 4, 'Sala de Cabildo', '#659742', '2019-03-14', '12:00:00', 'h6Xid'),
(43, 5, 'Oficinas provisionales de Presidencia Municipal ubicadas en Morelos 1 letra A', '#47caff', '2018-12-04', '10:00:00', 'lnjvy'),
(44, 5, 'Oficinas provisionales de Presidencia Municipal ubicadas en Morelos 1 letra A', '#47caff', '2018-12-14', '10:00:00', 'KybKx'),
(45, 5, 'Sala de Cabildo', '#47caff', '2019-01-25', '10:00:00', 'hgiY8'),
(46, 5, 'Oficina de Regidores', '#47caff', '2019-02-11', '10:00:00', 'NqY7s'),
(47, 5, 'Sala de Cabildo', '#47caff', '2019-02-25', '10:00:00', 'fKCTF'),
(48, 5, 'Sala de Cabildo', '#47caff', '2019-03-09', '10:00:00', '5gzFK'),
(49, 5, 'Sala de Cabildo', '#47caff', '2019-03-26', '10:00:00', 'cmPPN'),
(50, 5, 'Sala de Cabildo', '#47caff', '2019-04-03', '10:00:00', 'EFy8n'),
(51, 3, 'Oficinas provisionales de Presidencia Municipal ubicadas en Morelos 1 letra A', '#3f73a3', '2018-10-26', '18:00:00', 'FOUQL'),
(52, 3, 'Oficinas provisionales de Presidencia Municipal', '#3f73a3', '2018-11-23', '09:30:00', '6dlH3'),
(53, 3, 'Sala de Cabildos', '#3f73a3', '2019-01-04', '13:00:00', 'K1P79'),
(54, 3, 'Instalaciones de Seguridad PÃºblica', '#3f73a3', '2019-02-14', '11:30:00', 'RJc03'),
(55, 3, 'Instalaciones de Seguridad PÃºblica', '#3f73a3', '2019-02-14', '11:30:00', '0bVn5'),
(56, 3, 'Sala de Cabildo', '#3f73a3', '2019-03-11', '10:00:00', '58zul'),
(57, 3, 'Sala de Cabildo', '#3f73a3', '2019-03-15', '09:30:00', 'upos9'),
(58, 4, 'Sala de Cabildo', '#659742', '2019-02-25', '22:00:00', 'Zj9K0'),
(59, 6, 'Sala de Cabildo', '#611c6d', '2019-04-17', '10:00:00', '0QSYh'),
(60, 9, 'Sala de Cabildo', '#b2958f', '2019-04-15', '11:30:00', 'ITQZY'),
(61, 1, 'Sala de Cabildo', '#1d7640', '2019-04-16', '13:00:00', 'LbbtC'),
(62, 1, 'Sala de Cabildo', '#1d7640', '2019-04-23', '13:00:00', 'XyuAY'),
(63, 1, 'Sala de Cabildo', '#1d7640', '2019-04-26', '13:00:00', '4LYXB'),
(64, 1, 'Sala de Cabildo', '#1d7640', '2019-05-02', '10:00:00', 'Jph28'),
(65, 11, 'Sala de Cabildo', '#a0bfb5', '2019-04-24', '11:00:00', 'T2x7Y'),
(66, 5, 'Sala de Cabildo', '#47caff', '2019-04-16', '12:00:00', 'k1gQz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision_gaceta`
--

CREATE TABLE `comision_gaceta` (
  `id_comision` int(11) NOT NULL,
  `nombre_comision` text NOT NULL,
  `color_comision` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comision_gaceta`
--

INSERT INTO `comision_gaceta` (`id_comision`, `nombre_comision`, `color_comision`) VALUES
(1, 'Hacienda Patrimonio y Cuenta PÃºblica', '#1d7640'),
(2, 'Obras PÃºblicas y Servicios Municipales', '#c99d52'),
(3, 'Seguridad PÃºblica, TrÃ¡nsito y Transporte y ProtecciÃ³n Civil', '#3f73a3'),
(4, 'PlaneaciÃ³n, D. Urbano, Ordenamiento Territorial y Medio Ambiente', '#659742'),
(5, 'Salud PÃºblica y Asistencia Social', '#47caff'),
(6, 'EducaciÃ³n, Cultura, RecreaciÃ³n y Deporte', '#611c6d'),
(7, 'Deporte y AtenciÃ³n a la Juventud', '#d3cf38'),
(8, 'Desarrollo Social y Rural', '#e6c2a2'),
(9, 'FiscalizaciÃ³n, Alcoholes, Comercio y Reglamentos', '#b2958f'),
(10, 'Desarrollo Rural, EconÃ³mico y Turismo', '#cdd3d3'),
(11, 'Derechos Humanos, Igualdad de GÃ©nero y DIF', '#a0bfb5'),
(12, 'Agua Potable', '#039da9'),
(13, 'ContralorÃ­a, Transparencia y Combate a la CorrupciÃ³n', '#fae7e7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `id_convocatoria` int(11) NOT NULL,
  `titulo_convocatoria` text NOT NULL,
  `archivo_convocatoria` varchar(200) NOT NULL,
  `is_public` int(11) NOT NULL,
  `descargable_convocatoria` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`id_convocatoria`, `titulo_convocatoria`, `archivo_convocatoria`, `is_public`, `descargable_convocatoria`, `created_at`) VALUES
(1, 'Convocatoria Piso Firme', 'images/convocatorias/116332piso_firme.jpg', 1, '', '2019-01-04'),
(2, 'Convocatoria Cuarto Adicional', 'images/convocatorias/226970cuarto_adicional.jpg', 1, '', '2019-01-04'),
(3, 'Convocatoria Calentadores Solares', 'images/convocatorias/687538calentadores.jpg', 1, '', '2019-01-04'),
(4, 'Programa Jefas Madres de Familia', 'images/convocatorias/241787banners_jefas.jpg', 1, '', '2019-01-04'),
(5, 'Convocatoria para selecciÃ³n del Juez Municipal', 'images/convocatorias/800127juez.jpg', 1, '', '2019-02-14'),
(6, 'Convocatoria Juez Municipal', 'images/convocatorias/719916base_de_convocatoria_juez.jpg', 1, '', '2019-02-22'),
(7, 'Convocatoria ComitÃ© de Transparencia', 'images/convocatorias/90449convocatoria1_1.jpg', 1, '', '2019-02-25'),
(8, 'Convocatoria para la ElecciÃ³n de Delegados', 'images/convocatorias/506750convocatoria_delegados.jpg', 1, '', '2019-03-04'),
(10, 'LicitaciÃ³n Fertilizante', 'images/convocatorias/995497licitaciÃ³n_fertilizantes.jpg', 1, 'descargables/convocatorias/341474licitaciÃ³n y bases fertilizante.pdf', '2019-04-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `id_dep` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `nivel` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tramites` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id_dep`, `name`, `nivel`, `tramites`) VALUES
(1, 'SINDICO', '1', 0),
(2, 'PRESIDENTE', '1', 0),
(3, 'REGIDOR', '1', 0),
(4, 'ARCHIVO HISTÃ“RICO', '2', 0),
(5, 'TECNOLOGÃAS DE LA INFORMACIÃ“N Y TELECOMUNICACIONES', '2', 0),
(7, 'TESORERÃA', '2', 0),
(8, 'CATASTRO', '2', 1),
(9, 'FISCALIZACION DE ALCOHOLES Y DEL COMERCIO', '2', 1),
(10, 'CONTRALORIA', '2', 1),
(11, 'JUZGADO ADMINISTRATIVO', '2', 1),
(12, 'SERVICIOS ADMINISTRATIVOS', '2', 0),
(13, 'PLANEACIÃ“N', '2', 0),
(14, 'DESARROLLO SOCIAL', '2', 1),
(15, 'DESARROLLO RURAL', '2', 1),
(16, 'DESARROLLO ECONÃ“MICO', '2', 1),
(17, 'OBRAS PÃšBLICAS', '2', 1),
(18, 'DESARROLLO URBANO', '2', 1),
(19, 'COMUNICACIÃ“N SOCIAL', '2', 0),
(20, 'EDUCACIÃ“N Y CIVISMO', '2', 1),
(21, 'UNIDAD DE ACCESO A LA INFORMACIÃ“N', '2', 1),
(22, 'SERVICIOS PÃšBLCIOS', '2', 1),
(23, 'TRANSITO Y TRANSPORTE', '2', 1),
(24, 'SEGURIDAD PÃšBLICA', '2', 1),
(25, 'PROTECCIÃ“N CIVIL', '2', 1),
(26, 'ATENCIÃ“N PARA LA MUJER', '2', 1),
(27, 'CENTRAL DE EMERGENCIAS 911', '2', 0),
(28, 'JURÃDICO', '2', 0),
(29, 'MEDIO AMBIENTE Y ORDENAMIENTO TERRITORIAL', '2', 1),
(30, 'SECRETARIO DEL H. AYUNTAMIENTO', '1', 1),
(31, 'CASA DE LA CULTURA', '3', 1),
(32, 'COMUDAJ', '3', 1),
(33, 'DIF', '3', 1),
(34, 'SMAPAU', '3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mr_inspectores`
--

CREATE TABLE `mr_inspectores` (
  `id_mr` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cargo` varchar(200) NOT NULL,
  `domicilio` varchar(150) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `area_admin` varchar(200) NOT NULL,
  `nom_car_jefe` varchar(200) NOT NULL,
  `marco_legal` text NOT NULL,
  `departamento` int(11) NOT NULL,
  `hora_aten` varchar(200) NOT NULL,
  `nombramiento` date NOT NULL,
  `giro_facultado` varchar(200) NOT NULL,
  `tel_contra` varchar(200) NOT NULL,
  `queja_denuncia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo_noticia` varchar(100) NOT NULL,
  `cuerpo_noticia` text NOT NULL,
  `imagen1` varchar(200) DEFAULT NULL,
  `create_at` date NOT NULL,
  `is_public` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo_noticia`, `cuerpo_noticia`, `imagen1`, `create_at`, `is_public`) VALUES
(1, 'Inicia la campaÃ±a de Pago del Impuesto Predial 2019.', 'En el primer dÃ­a de la campaÃ±a de pago del Impuesto Predial, correspondiente al aÃ±o 2019, los ciudadanos de Uriangato, dueÃ±os de una propiedad respondieron de forma favorable, contribuyendo con la cantidad de $ 545 mil 644.33 pesos. Esta cantidad supera con un 18% por ciento a lo recaudado el aÃ±o anterior que fue de $ 460 mil 664.06 pesos, con una diferencia de $ 84 mil 980 .27 pesos. Se espera que este aÃ±o la participaciÃ³n ciudadana sea mayor y se supere la cantidad recaudada durante los primeros dos meses del aÃ±o 2018. El Gobierno Municipal 2018 - 2021 a travÃ©s de TesorerÃ­a Municipal y Catastro, ofrecieron un 15% de descuento sobre la cuenta corriente durante todo el mes de enero a todos los contribuyentes que realicen su pago a tiempo, mientras que en el mes de febrero podrÃ¡n gozar de un 10% de descuento. Para facilitar a los uriangatenses el pago de sus obligaciones, se han instalado cuatro cajas en Presidencia Municipal y se han abierto mÃ³dulos de consulta y pago en DIF Uriangato, Casa de la Cultura, SMAPAU y el mÃ³dulo de atenciÃ³n para adultos mayores ubicada en Biblioteca Gerardo Pedraza en el interior de Portal Independencia a un lado de la oficina Catastral. Todos los mÃ³dulos de cobro atenderÃ¡n al pÃºblico en horario de 9:00 a.m. a 2: p.m. de lunes a viernes. Gracias al pago oportuno del impuesto predial es que el municipio de Uriangato podrÃ­a obtener mÃ¡s recursos en concurrencia con programas federales y estatales y asÃ­ realizar mÃ¡s obras de beneficio social.', 'images/noticias/883453img_5145.jpg', '2019-01-04', 1),
(2, 'Convivencia de DÃ­a de Reyes', 'El Gobierno Municipal 2018 - 2021 de Uriangato, agradece la visita del Gobernador del Estado Diego Sinhue y a su esposa Adriana RamÃ­rez, Presidenta de DIF Estatal, por realizar el dÃ­a de hoy la convivencia de â€œDÃ­a de Reyesâ€ en la comunidad de Portalitos. Padres de familia, niÃ±os, maestros y autoridades municipales y estatales pudieron disfrutar de la tradicional rosca de reyes, mientras que a travÃ©s de DIF del Estado se entregaron juguetes a todas las niÃ±as y niÃ±os presentes. #UriangatoTeVistedeOrgullo		', 'images/noticias/339162146971img-20190108-wa0019.jpg', '2019-01-08', 1),
(3, 'Entrega de Escrituras', 'En coordinaciÃ³n con el Instituto Nacional de Suelo Sustentable (INSUS) y a travÃ©s de las direcciones de Desarrollo Urbano y Desarrollo Social del municipio de Uriangato, se llevÃ³ a cabo la entrega de 31 escrituras para dueÃ±os de predios irregulares. A travÃ©s de esta acciÃ³n, damos formalidad y certeza jurÃ­dica a los beneficiarios como dueÃ±os de su propio terreno.						', 'images/noticias/280048299328entrega de escrituras.jpg', '2019-02-25', 1),
(4, 'Resulta electo el juez municipal en Uriangato', 'El Gobierno Municipal 2018 â€“ 2021 de Uriangato, otorga nombramiento a nuevo Juez Administrativo. Durante la sesiÃ³n ordinaria, celebrada este miÃ©rcoles 13 de marzo, el Gobierno Municipal 2018 â€“ 2021 de Uriangato, otorgÃ³ el nombramiento de Juez Administrativo a la Lic. Brenda Lizbeth Zavala VillagÃ³mez, quien a partir del dÃ­a de hoy 14 de marzo de 2019 entrarÃ¡ en funciones como titular de la dependencia. El proceso de selecciÃ³n se llevÃ³ a cabo con legalidad, de acuerdo a lo que dicta la ley Ã“rganica Municipal para la elecciÃ³n de Juez Administrativo. IniciÃ³ con una convocatoria abierta al pÃºblico, registrando un total de 16 postulados de Uriangato, MoroleÃ³n y Yuriria. #UriangatoTeVisteDeOrgullo', 'images/noticias/693239106942juez.jpg', '2019-03-14', 1),
(5, 'Inicia el registro de candidatos para la elecciÃ³n de delegados municipales 2018 â€“ 2021', 'El Gobierno Municipal 2018 â€“ 2021 de Uriangato, da luz verde al periodo de inscripciÃ³n para\r\ncandidatos a delegados municipales de colonias y comunidades a partir de este jueves 14 de\r\nmarzo hasta el dÃ­a 19 de marzo.\r\nLos interesados deberÃ¡n ser ciudadanos originarios de Uriangato, habitantes de la zona rural o\r\nurbana, deberÃ¡n tener como mÃ­nimo 21 aÃ±os y saber leer y escribir. Ser residente de la zona que\r\ndesea representar y no mostrar antecedentes penales.\r\nLa convocatoria fue lanzada pÃºblicamente a travÃ©s de redes sociales y medios impresos a partir del\r\ndÃ­a 5 de marzo del presente aÃ±o.\r\nEl cambio de delegados municipales es una acciÃ³n que se realiza con el cambio de cada\r\nadministraciÃ³n, esto con la finalidad de brindar la oportunidad a mÃ¡s ciudadanos de involucrarse\r\ncon las acciones y trabajos del Gobierno Municipal, mientras al mismo tiempo fungen como nexo\r\nentre los ciudadanos y las autoridades municipales para atender, dar soluciÃ³n y presentar quejas y\r\nproblemas. \r\nPosteriormente a la fecha de registro, las jornadas electorales se llevarÃ¡n a cabo el dÃ­a 26 de\r\nmarzo para las colonias urbanas y el dÃ­a 27 de marzo para las comunidades rurales. Ambas\r\nelecciones se realizarÃ¡n en un horario de 5:00 de la tarde a 7:00 p.m.\r\nAyuntamiento y personal de Presidencia Municipal serÃ¡n los encargados de realizar y vigilar el\r\nproceso de votaciÃ³n, para evitar cualquier acto ilÃ­cito y asegurar que todo se realice de forma legal\r\ny transparente.\r\n						', 'images/noticias/391368delegados.jpg', '2019-04-10', 1),
(6, 'ReconstrucciÃ³n del bulevar Uriangato', 'El Gobierno del Estado con el apoyo del Ayuntamiento Municipal 2018 â€“ 2021 de Uriangato llevan\r\na cabo la ejecuciÃ³n de obras complementarias para el municipio, con la finalidad de hacer caminos\r\nmÃ¡s seguros que mejoren la circulaciÃ³n vial de las personas que transitan comÃºnmente. Al mismo\r\ntiempo brindar una mejor vista para  los compradores y visitantes.\r\nUna de estas obras es la reconstrucciÃ³n del bulevar Uriangato, el cual se inicio a partir del dÃ­a 19\r\nde febrero del 2019. Esta obra se ejecuta con recurso del Gobierno del Estado, que representa una\r\ntotal de inversiÃ³n de $ 25 millones 278 mil 058.65 pesos.\r\n Los trabajos incluyen la instalaciÃ³n de 43 mil 787.64 metros cuadrados de carpeta asfÃ¡ltica de 11\r\ncms de espesor en un tramo de 3.127 km.\r\nGracias a esta obra un total de 2 mil 890 familias se verÃ¡n beneficiadas, asÃ­ como los transeÃºntes,\r\ntrabajadores, comerciantes y visitantes. La obra tiene un plazo aproximado de 230 dÃ­as naturales a\r\npartir de su inicio. Javier Contreras GonzÃ¡lez, director de Obras PÃºblicas Municipales, contempla\r\nque la obra se concluya antes de este plazo de tÃ©rmino.\r\nPor el momento, el Gobierno Municipal pide a la ciudadanÃ­a paciencia durante la ejecuciÃ³n de esta\r\nobra, pues es consciente de las molestias que se pueden ocasionar y por tal razÃ³n trabaja con el\r\napoyo de TrÃ¡nsito y Transporte para ofrecer soluciones y permitir una circulaciÃ³n vial sin\r\nproblemas.  De igual manera recordar que al terminar la obra, los beneficios son para siempre. 			', 'images/noticias/876910bulevar uriangato.jpg', '2019-04-10', 1),
(7, 'Firman convenio para protecciÃ³n del medio ambiente', 'Este miÃ©rcoles 20 de marzo, el Gobierno Municipal 2018 â€“ 2021 de Uriangato realizÃ³ la firma de\r\nconvenio en conjunto con la ProcuradurÃ­a Ambiental y de Ordenamiento Territorial de\r\nGuanajuato. \r\nLa firma del documento se llevÃ³ a cabo en sala de cabildo de Presidencia Municipal y contÃ³ con la\r\nasistencia de: la Lic. Karina Padilla Ãvila, Procuradora Ambiental y de Ordenamiento Territorial del Estado de Guanajuato, el Presidente Municipal, Anastacio Rosiles PÃ©rez, Lic. Jorge Luis Contreras JuÃ¡rez, subprocurador ambiental, JesÃºs MartÃ­nez MuÃ±oz, secretario del H. Ayuntamiento, Lic.Guadalupe Loza RamÃ­rez, coordinadora jurÃ­dico de PAOT-GTO, MarÃ­a Guadalupe OrtÃ­z GarcÃ­a,\r\ndirectora de Medio Ambiente y Ordenamiento Territorial de Uriangato, Ing. Uriel HernÃ¡ndez\r\nLÃ³pez, director de SMAPAU, Lic. Alberto MartÃ­nez MuÃ±oz, director de PlaneaciÃ³n Municipal, Arq.\r\nAbraham MartÃ­nez, director de Desarrollo Urbano de Uriangato y Leopoldo GuzmÃ¡n RamÃ­rez,\r\nEncargado de JurÃ­dico.\r\nEste convenio tiene como objetivo establecer bases y mecanismos en el municipio, para crear un\r\nsistema de vigilancia, coordinado entre  municipio y estado, que sirva para dar vigilancia e\r\ninspecciÃ³n al cumplimiento de la normativa de protecciÃ³n ambiental y ordenamiento territorial. \r\nDe esta manera el municipio gracias al apoyo del Gobierno del Estado, demuestran su compromiso\r\npor procurar la justicia ambiental, y la distribuciÃ³n sustentable del territorio. Con el fin de\r\npreservar, cuidar y mantener nuestro medio ambiente.					', 'images/noticias/522058medio ambiente.jpg', '2019-04-10', 1),
(9, 'Autoridades fortalecen la Universidad Virtual en Uriangato', 'Este martes 26 de marzo, el Gobierno Municipal 2018 â€“ 2021 de Uriangato a travÃ©s de la direcciÃ³n\r\nde EducaciÃ³n y Civismo en coordinaciÃ³n con la Universidad Virtual del Estado de Guanajuato,\r\n(UVEG), realizaron la firma de convenio de colaboraciÃ³n entre ambas partes.\r\nCada aÃ±o el sistema de educaciÃ³n UVEG, realiza esta firma de convenio con el municipio para\r\nrenovar su compromiso con los jÃ³venes de Uriangato. \r\nEl evento se desarrollÃ³ en las nuevas instalaciones de la UVEG, ubicadas en Morelos 1-A planta\r\nalta, tercer piso. \r\nEl Ing. JesÃºs MÃ¡rtinez MuÃ±Ã³z, Secretario de Ayuntamiento, iniciÃ³ con el protocolo establecido con unas palabras de agradecimiento a las autoridades del estado y de la UVEG, por su apoyo y la renovaciÃ³n de su convenio, agregÃ³ tambiÃ©n que uno de los principales objetivos de esta\r\nadministraciÃ³n es el apoyo a la educaciÃ³n y que se seguirÃ¡ trabajando para que mÃ¡s jÃ³venes\r\npuedan continuar o iniciar sus estudios. \r\nLa maestra MarÃ­a Guadalupe, directora estatal de CAES y Programas en Modalidad Virtual,\r\ntambiÃ©n participÃ³ con unas palabras sobre los programas y especialidades que ofrece la UVEG,\r\ntambiÃ©n agregÃ³ que el sistema de educaciÃ³n online o por internet ha incrementado en  los Ãºltimos\r\naÃ±os.\r\nPara finalizar las autoridades  presentes y alumnos, realizaron el corte de listÃ³n de las nuevas\r\ninstalaciones de UVEG Uriangato, gracias a este cambio los alumnos podrÃ¡n desempeÃ±ar sus\r\nestudios en un entorno mÃ¡s agradable y funcional.\r\nLas autoridades presentes fueron: el Ing. J. JesÃºs MartÃ­nez MuÃ±oz, Secretario de Ayuntamiento,\r\nMaestra MarÃ­a Guadalupe PÃ©rez MillÃ¡n, Directora Estatal de Caes y Programas en modalidad\r\nVirtual, la Lic. Viviana Arreola GarcÃ­a, SÃ­ndico Municipal, Maestro Juan Gerardo JimÃ©nez Belmonte, Director de OperaciÃ³n y VinculaciÃ³n de Telebachilleratos, la Lic. Sandra Leticia DÃ­az DomÃ­nguez, Regidora Municipal y el Prof. Jorge Luis HernÃ¡ndez TÃ©llez, director de EducaciÃ³n y Civismo.', 'images/noticias/647721firma de la uveg 2.jpg', '2019-04-10', 1),
(10, 'Convivencia familiar logra reunir a 11 mil personas.', 'Familias y amigos se reunieron este domingo 31 de Marzo en la Unidad Deportiva nÃºmero 2 para \r\ndisfrutar de las actividades deportivas y recreativas en la Convivencia Familiar de Primavera 2019\r\nrealizada por COMUDAJ con la asistencia de mÃ¡s de 11 mil personas. \r\nDesde muy temprano, ciudadanos de todo el municipio fueron arribando a las instalaciones de la\r\nUnidad Deportiva de El Charco, mientras dieron inicio los torneos de ligas de futbol, beisbol,\r\nbasquetbol, entre otros.\r\nEn otras Ã¡reas de la deportiva se realizaban actividades artÃ­sticas para los pequeÃ±os como pintura,dibujo y juegos de concientizaciÃ³n.\r\nSe instalÃ³ un escenario principal, donde se presentaron grupos de baile folclÃ³rico y moderno\r\ntambiÃ©n presentaciÃ³n de grupos de Tae  Kwon Do, lucha libre, boxeo y otras disciplinas. \r\nAlrededor del escenario se realizÃ³ la venta de comida y antojitos a las personas, con el fin de\r\nrecaudar fondos para escuelas pÃºblicas. \r\nEn otra parte se instalÃ³ un cuadrilÃ¡tero para la presentaciÃ³n de encuentros de boxeo desde\r\ncategorÃ­as infantil hasta adultos.\r\nLa alberca municipal se encontrÃ³ abierta a todo el pÃºblico en general, permitiendo que los\r\nciudadanos se refresquen un poco debido al intenso calor. \r\nMuchos tambiÃ©n disfrutaron de la tirolesa ubicada al final de la deportiva no. 2.\r\nTambiÃ©n se contÃ³ con la participaciÃ³n de juegos mecÃ¡nicos para los niÃ±os, elaboraciÃ³n de tapetes\r\nde marmolina por el Sistema Municipal de Agua Potable, pinta de grafiti de parte de IMJUV y\r\nmÃ³dulos de atenciÃ³n y promociÃ³n de programas de las distintas dependencias del municipio.\r\nEl Ayuntamiento 2018 â€“ 2021, en coordinaciÃ³n con COMUDAJ, continuarÃ¡ realizando mÃ¡s \r\nactividades para fomentar la convivencia entre la familia, el deporte y el talento artÃ­stico.					', 'images/noticias/506942convivencia.jpg', '2019-04-10', 1),
(11, 'Invierten 200 mil pesos en becas para 600 estudiantes Uriangatenses', 'Este jueves 4 de abril, el Gobierno Municipal de Uriangato 2018 â€“ 2021 a travÃ©s de la direcciÃ³n de \r\nEducaciÃ³n y Civismo, realizan la entrega del apoyo de becas del Programa, â€œEstÃ­mulo a la\r\nEducaciÃ³nâ€. Beneficiando a 600 niÃ±as y niÃ±os de 34 escuelas primarias del municipio.\r\nPadres de familia de los alumnos beneficiarios, se presentaron en el patio de Presidencia\r\nMunicipal para comenzar con la entrega de este recurso, el cual se divide en dos partes, una este 4\r\nde abril y la otra el dÃ­a viernes 5 de abril, esto con el motivo de abarcar todas las colonias y\r\ncomunidades beneficiadas y ofrecer una mejor atenciÃ³n. \r\nEste recurso se entrega de manera cuatrimestral y tiene como finalidad apoyar a padres de familia\r\ncon los gastos escolares de sus hijos, con la intenciÃ³n de que no se vean en la necesidad de pausar su educaciÃ³n.\r\nCada niÃ±a y niÃ±o recibirÃ¡ la cantidad de $450.00 pesos, siendo un total de $270 mil pesos de\r\ninversiÃ³n en el apoyo a la educaciÃ³n.\r\nLa entrega estuvo a cargo de los regidores municipales, Sandra DÃ­az DomÃ­nguez y MartÃ­n GonzÃ¡lez Bedolla, el contralor municipal, Ponciano Moreno Baeza y el director de EducaciÃ³n y Civismo, Jorge HernÃ¡ndez TÃ©llez.\r\nEl titular de la dependencia inicio dando una explicaciÃ³n a los padres de familia sobre el cambio de normas que tendrÃ¡ el  programa de Becas â€œEstÃ­mulo a la EducaciÃ³nâ€, por el momento esta serÃ­a la Ãºltima entrega cuatrimestral. \r\nEl Gobierno Municipal 2018 â€“ 2021 trabaja para que sean mÃ¡s los niÃ±os y jÃ³venes beneficiarios con\r\nprogramas de becas, apoyando al mismo tiempo la economÃ­a de sus familias.					', 'images/noticias/808391entrega de becas 1.jpg', '2019-04-10', 1),
(12, 'Instalan cajero automÃ¡tico en el centro de la ciudad para el pago del agua potable', 'En dÃ­as recientes el Sistema Municipal de Agua Potable y Alcantarillado de Uriangato, (SMAPAU),\r\ninaugurÃ³ su nuevo cajero automÃ¡tico, ubicado en portal Independencia a un costado de la oficina\r\nde Desarrollo EconÃ³mico y Turismo. \r\nEste es el segundo cajero instalado por SMAPAU, con la finalidad de brindar un mejor servicio,\r\nevitando filas y permitiendo que los ciudadanos ahorren tiempo al realizar el pago de su recibo. El\r\notro cajero en funciones se encuentra fuera de las instalaciones de SMAPAU. En horario de 9:30\r\nam a 7:30 pm.\r\nCon esta acciÃ³n las filas en el Sistema del Agua Municipal, se han reducido, logrando mayor fluidez\r\nen el pago de los ciudadanos.\r\nGracias a este sistema de pago, todos los ciudadanos que no puedan acudir a SMAPAU en horarios de atenciÃ³n, podrÃ¡n hacer su pago y sin retrasos en un horario mÃ¡s cÃ³modo.', 'images/noticias/872118cajero automatico del agua 2.jpg', '2019-04-10', 1),
(13, 'Festival de la cerveza 2019', 'Este 6 y 7 de abril, el Gobierno Municipal 2018 â€“ 2021 de Uriangato a travÃ©s de la direcciÃ³n de\r\nDesarrollo EconÃ³mico y Turismo, realizaron con Ã©xito el Festival de la Cerveza Artesanal 2019.\r\nEn esta festival participaron 12 productores de cerveza originarios de los municipios de LeÃ³n,\r\nCelaya, Guanajuato, Morelia, MoroleÃ³n y Uriangato, acompaÃ±ados de negocios de comida y\r\nmÃºsica en vivo.\r\nLos ciudadanos pudieron disfrutar de cervezas de todo tipo, oscuras, claras, de sabor, con\r\ningredientes especiales, coctelerÃ­a y mezcales de sabores y naturales. Algunos negocios ofrecÃ­an\r\naperitivos y comida para acompaÃ±ar y disfrutar mejor de la cerveza. Al mismo tiempo la cerveza\r\nâ€œUriangatoâ€, hizo presentaciÃ³n de su nueva imagen, inspirada en las tradiciones, sÃ­mbolos y\r\nelementos del municipio, los cuatro tipos de la cerveza son: PILSNER, VIENA, RED ALE y STOOT, asÃ­ como una ediciÃ³n especial dedicada a los artesanos â€œTapeteros de Uriangatoâ€.\r\nGracias a este tipo de eventos, se puede dar a conocer el trabajo de muchos artesanos mexicanos\r\ny de la regiÃ³n que dedican su tiempo y pasiÃ³n en elaborar productos de calidad a la altura de\r\ngrandes marcas.\r\nEl festival tuvo un horario de atenciÃ³n el dÃ­a sÃ¡bado de 2:00 de la tarde a 10:00 de la noche y el dÃ­a\r\ndomingo a partir de las 9:00 de la maÃ±ana a 10:00 de la noche.\r\nEl Gobierno Municipal 2018 â€“ 2021, invita a los ciudadanos a consumir los productos elaborados\r\nen la zona, con el fin de apoyar el talento y la economÃ­a del municipio.					', 'images/noticias/69454img_7736.jpg', '2019-04-11', 1),
(14, 'Ruta ciclista entre amigos 2019', 'El domingo 7 de abril, se realizÃ³ con Ã©xito el RETO ENTRE AMIGOS, un evento que fue posible\r\ngracias al trabajo en coordinaciÃ³n de COMUDAJ y 18 asociaciones de ciclistas, originarios de todo\r\nel paÃ­s.\r\nEl evento logrÃ³ reunir a cerca de 500 ciclistas de todas las edades, divididos en tres categorÃ­as:\r\nprincipiante, intermedio y avanzado.\r\nLos participantes comenzaron el reto desde el JardÃ­n Principal de Uriangato, en punto de las 8:00\r\nde la maÃ±ana y tomaron una misma ruta dividida en tres niveles dependiendo su categorÃ­a, que\r\nfueron 30, 40 y 60 kilÃ³metros. Sin importar quÃ© ruta, los ciclistas pudieron disfrutar de atravesar\r\nparte de los principales cerros de la regiÃ³n, apreciando el paisaje y clima que ofrecÃ­a la hora.\r\nAl final, todos los participantes debÃ­an concluir su recorrido en el mismo JardÃ­n Principal, donde\r\nautoridades ofrecieron un almuerzo para recuperar las energÃ­as gastadas y entregarles una\r\nmedalla conmemorativa del evento como sÃ­mbolo de su participaciÃ³n.\r\nEste evento no fue una competencia de velocidad, ni resistencia, su propÃ³sito fue unir a todos los\r\ngrupos ciclistas de la regiÃ³n con la finalidad de crear una sana convivencia y promover el ciclismo y\r\nla actividad fÃ­sica.\r\nEl Gobierno Municipal 2018 â€“ 2021 de Uriangato, a travÃ©s de COMUDAJ, mantendrÃ¡n su apoyo\r\ncon todas las asociaciones deportivas para crear mÃ¡s eventos que logren reunir atletas y promover\r\nmÃ¡s disciplinas deportivas.				', 'images/noticias/3581974.jpg', '2019-04-11', 1),
(15, 'Autoridades inauguran pavimentaciÃ³n de la calle ProlongaciÃ³n Ocampo', 'Este lunes 29 de abril, el Ayuntamiento Municipal 2018 â€“ 2021 de Uriangato a travÃ©s de la direcciÃ³n de Obras PÃºblicas Municipales, realizÃ³ el corte de listÃ³n oficial de la calle ProlongaciÃ³n Ocampo.\r\nAutoridades municipales se reunieron con vecinos de la colonia para juntos participar en la inauguraciÃ³n de la calle.\r\nMiguel DomÃ­nguez Moreno, director de Desarrollo Social, iniciÃ³ con un mensaje de bienvenida para todos los asistentes. DespuÃ©s de su participaciÃ³n llegÃ³ el turno de Javier Contreras GonzÃ¡lez, director de Obras PÃºblicas, quien compartiÃ³ la informaciÃ³n tÃ©cnica de esta obra.\r\nLa ProlongaciÃ³n Ocampo, tuvo un costo total de inversiÃ³n de $ 1 millÃ³n 184 mil 336 pesos, recurso\r\ncompletamente municipal del Programa FORTAMUN, fondo 2 ramo 33.\r\nAlgunos de los trabajos realizados en esta obra son: pavimentaciÃ³n, guarniciÃ³n e instalaciÃ³n de banquetas.\r\nPosteriormente un ciudadano habitante de la calle Ocampo, tomÃ³ la palabra para agradecer el\r\ntrabajo de la AdministraciÃ³n 2018 â€“ 2021.\r\nPara finalizar el edil municipal, Anastacio â€œTachoâ€ Rosiles, ofreciÃ³ un mensaje en el que agradeciÃ³\r\nla paciencia de los vecinos durante la elaboraciÃ³n de la obra, tambiÃ©n se mostrÃ³ muy contento y\r\nagradecido por ser esta la primera obra correspondiente de la AdministraciÃ³n. TambiÃ©n agregÃ³ que habrÃ¡ mÃ¡s obras, completamente gestionadas y desarrolladas por el Gobierno 2018 â€“ 2021.', 'images/noticias/576884obra_ocampo (telÃ©fono).jpg', '2019-05-03', 1),
(16, 'Ã‰xito rotundo el Mitote FolclÃ³rico Uriangato 2019', 'El municipio de Uriangato fue cede una vez mÃ¡s del Mitote FolclÃ³rico Internacional, un espectÃ¡culo cultural lleno de mÃºsica y folclor.\r\nEl mitote de este aÃ±o tuvo como invitados de honor a los paÃ­ses de Colombia, Ecuador, Chile,\r\nHonduras y Costa Rica. TambiÃ©n la participaciÃ³n de los estados de Guerrero, Monterrey y\r\nGuanajuato.\r\nCada uno de los paÃ­ses y estados invitados dieron muestra de su talento a travÃ©s de un programa\r\nde una hora y media. El escenario instalado en el atrio de San Miguel ArcÃ¡ngel fue testigo del\r\ncolor, la danza y ritmo de los diferentes grupos de danza.\r\nEl Mitote FolclÃ³rico Internacional iniciÃ³ el pasado 25 de abril hasta el dÃ­a de ayer lunes 29. Gracias a la buena participaciÃ³n de los ciudadanos, se registrÃ³ una audiencia de aproximadamente 5 mil personas entre los cinco dÃ­as del mitote.\r\nAl final de cada presentaciÃ³n autoridades municipales hicieron entrega de un reconocimiento a cada uno de los grupos de baile, cabe destacar es durante la presentaciÃ³n del grupo â€œCatrachoâ€\r\nestuvo presente el presidente municipal de Ajutique, Honduras.\r\nEl dÃ­a de ayer el Presidente Municipal, Anastacio â€œTachoâ€ Rosiles, clausurÃ³ el mitote con un\r\nmensaje para todos los asistentes y bailarines. En el que agradeciÃ³ el apoyo y la asistencia de los\r\nciudadanos, pues gracias a ellos es posible este tipo de eventos y al mismo tiempo motivan a crear\r\nmÃ¡s eventos y actividades que promuevan la cultura en el municipio. Finalmente pidiÃ³ una porra\r\npara el grupo de danza de la Universidad AutÃ³noma de Nuevo LeÃ³n, quienes fueron los\r\nencargados de cerrar este mitote con su presentaciÃ³n titulada â€œdesde el nuevo reino del leÃ³nâ€.\r\nA travÃ©s de estas actividades el Gobierno Municipal seguirÃ¡ gestionando y desarrollando\r\nactividades para todo el pÃºblico. Â¡MÃ¡s cultura para vivir mejor!', 'images/noticias/219235mitote.jpg', '2019-05-03', 1),
(17, 'Celebran a la niÃ±ez Uriangatense', 'El pasado martes 30 de abril, el Gobierno Municipal 2018 â€“ 2021 de Uriangato a travÃ©s de DIF Municipal\r\ny Casa de la Cultura, celebraron el â€œDÃ­a del NiÃ±oâ€, con un evento lleno de juegos y actividades.\r\nEl evento se realizÃ³ por la tarde en el JardÃ­n Principal donde se instalaron juegos mecÃ¡nicos, un\r\ntorito mecÃ¡nico, juegos de mesa y futbolitos, pinta â€“ caritas y un planetario mÃ³vil, el cual fue\r\ntraÃ­do por el Gobierno del Estado mediante Casa de la Cultura.\r\nDIF Municipal tambiÃ©n regalÃ³ paletas de hielo, dulces, palomitas y aguas frescas para todos los\r\nniÃ±os. Todos los juegos y actividades fueron gratis para que los niÃ±os y niÃ±as pudieran disfrutar al\r\nmÃ¡ximo.\r\nMientras que a un lado del quiosco se realizaron espectÃ¡culos infantiles con los personajes y\r\ncanciones de las princesas de cuentos y caricaturas. El horario de los juegos y actividades fue de 5:00 de la tarde a 9:00 de la noche.\r\nGracias al trabajo del Gobierno Municipal, niÃ±os y padres, pudieron disfrutar de una tarde de sana\r\nconvivencia familiar celebrando a la niÃ±ez uriangantense.', 'images/noticias/84149niÃ±ez.jpg', '2019-05-03', 1),
(18, 'Inaugura Tacho Rosiles la pavimentaciÃ³n de la calle Juventino Rosas', 'Este viernes 3 de mayo, el Gobierno Municipal de Uriangato 2018 â€“ 2021 a travÃ©s de la direcciÃ³n\r\nde Obras PÃºblicas Municipales y Desarrollo Social, inauguraron la pavimentaciÃ³n de la calle\r\nJuventino Rosas. Esta serÃ­a la segunda obra gestionada y realizada por la presente AdministraciÃ³n.\r\nAutoridades municipales se reunieron a temprana hora en la calle Juventino Rosas, iniciando con\r\nun mensaje de bienvenida a cargo de Miguel DomÃ­nguez Moreno, director de Desarrollo Social.\r\nPosteriormente, Javier Contreras GonzÃ¡lez, director de Obras PÃºblicas, se encargÃ³ de compartir la\r\nficha tÃ©cnica de la obra.\r\nLos trabajos realizados en esta obra son: pavimentaciÃ³n de 226.90 metros cuadrados, instalaciÃ³n de guarniciÃ³n y banquetas, e instalaciÃ³n de luminarias. Esta obra representa un total de inversiÃ³n de $ 1 millÃ³n 467 mil 930 pesos de recurso municipal y aumentarÃ¡ de manera significativa la calidad de vida de los habitantes, permitiendo tambiÃ©n una mejor circulaciÃ³n vial.\r\nEl Presidente Municipal, Anastacio â€œTachoâ€ Rosiles, agradeciÃ³ a los habitantes por la paciencia\r\nprestada para la realizaciÃ³n de obra, tambiÃ©n agregÃ³ una felicitaciÃ³n a los trabajadores de la obra\r\npor su dÃ­a y finalizÃ³ con el compromiso de dar inicio a mÃ¡s obras para todo el municipio.\r\nCabe destacar que se ha dado prioridad a la pavimentaciÃ³n de esta calle de acuerdo a que es de\r\nlas pocas que estando muy cerca al primer cuadro de la ciudad quedaban rezagadas.\r\nLa AdministraciÃ³n 2018 â€“ 2021, poco a poco va construyendo un Uriangato con mejores\r\nvialidades, que brinden mayor seguridad y confianza para sus habitantes. Por tal razÃ³n trabaja\r\npara gestionar mÃ¡s obras, para vivir mejor.', 'images/noticias/172592img_8907 (telÃ©fono).jpg', '2019-05-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion_ayuntamiento`
--

CREATE TABLE `sesion_ayuntamiento` (
  `id_sesion_a` int(11) NOT NULL,
  `no_sesion_a` int(11) NOT NULL,
  `fecha_sesion_a` date NOT NULL,
  `hora_sesion_a` time NOT NULL,
  `lugar_sesion_a` varchar(255) NOT NULL,
  `archivo_sesion_a` varchar(200) NOT NULL,
  `tipo_sesion_a` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sesion_ayuntamiento`
--

INSERT INTO `sesion_ayuntamiento` (`id_sesion_a`, `no_sesion_a`, `fecha_sesion_a`, `hora_sesion_a`, `lugar_sesion_a`, `archivo_sesion_a`, `tipo_sesion_a`) VALUES
(1, 76, '2019-05-15', '10:00:00', 'Sala de Cabildo', 'storage/sesion_ayuntamiento/824273orden del dia.pdf', 'ordinaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion_comision`
--

CREATE TABLE `sesion_comision` (
  `id_sesion` int(11) NOT NULL,
  `no_sesion` int(11) NOT NULL,
  `id_comision` int(11) NOT NULL,
  `archivo_orden` varchar(200) NOT NULL,
  `codigo_evento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sesion_comision`
--

INSERT INTO `sesion_comision` (`id_sesion`, `no_sesion`, `id_comision`, `archivo_orden`, `codigo_evento`) VALUES
(1, 1, 12, 'storage/sesion_comision/392906reuniones_comision-agua potable- 2018-1.pdf', 'LFjGR'),
(2, 1, 13, 'storage/sesion_comision/860614reuniones_comisioÌn-contraloria_combate_corrupcioÌn-2018-1.pdf', 'AY5Q1'),
(3, 2, 13, 'storage/sesion_comision/709246reuniones_comisioÌn-contraloria_combate_corrupcioÌn-2018-2.pdf', 'am5go'),
(4, 2, 13, 'storage/sesion_comision/293821reuniones_comisioÌn-contraloria_combate_corrupcioÌn-2018-3.pdf', 'baxJM'),
(5, 4, 13, 'storage/sesion_comision/830425reuniones_comisioÌn-contraloria_combate_corrupcioÌn-2019-4.pdf', 'Umt8n'),
(6, 5, 13, 'storage/sesion_comision/863730reuniones_comisioÌn-contraloria_combate_corrupcioÌn-2019-5.pdf', 'vBclD'),
(7, 1, 1, 'storage/sesion_comision/625789reuniones_comisioÌn-hacienda_patrimonio_cuenta_puÌblica-2018-1.pdf', 'wgJis'),
(8, 4, 1, 'storage/sesion_comision/123769reuniones_comisioÌn-hacienda_patrimonio_cuenta_puÌblica-2018-5.pdf', 'lqcL9'),
(9, 5, 1, 'storage/sesion_comision/546233reuniones_comisioÌn-hacienda_patrimonio_cuenta_puÌblica-2018-6.pdf', 'JpotG'),
(10, 6, 1, 'storage/sesion_comision/169495reuniones_comisioÌn-hacienda_patrimonio_cuenta_puÌblica-2018-7.pdf', 'zSi8J'),
(11, 1, 10, 'storage/sesion_comision/870441reuniones-comision- desarrollo economico y turismo-2018-1.pdf', 'Eox67'),
(12, 2, 10, 'storage/sesion_comision/913848reuniones-comision- desarrollo economico y turismo-2019-2.pdf', '9Q1wf'),
(13, 3, 10, 'storage/sesion_comision/345679reuniones-comision- desarrollo economico y turismo-2019-3.pdf', 'tT7sB'),
(14, 4, 10, 'storage/sesion_comision/174159reuniones-comision- desarrollo economico y turismo-2019-4.pdf', 'dTVMY'),
(15, 1, 9, 'storage/sesion_comision/256966reuniones-comision- fiscalizacion, alcoholes, comercio y reglamentos-2018-1.pdf', 'H6si2'),
(16, 2, 9, 'storage/sesion_comision/501688reuniones-comision- fiscalizacion, alcoholes, comercio y reglamentos-2018-2.pdf', 'sSc1m'),
(17, 3, 9, 'storage/sesion_comision/736426reuniones-comision- fiscalizacion, alcoholes, comercio y reglamentos-2018-3.pdf', 'JWZJc'),
(18, 4, 9, 'storage/sesion_comision/576422reuniones-comision- fiscalizacion, alcoholes, comercio y reglamentos-2018-4.pdf', 'BKI6t'),
(19, 5, 9, 'storage/sesion_comision/448325reuniones-comision- fiscalizacion, alcoholes, comercio y reglamentos-2018-5.pdf', 'BhoHO'),
(20, 1, 2, 'storage/sesion_comision/299473reuniones-comision- obras publicas y servicios municipales-2018-1.pdf', 'gWZkP'),
(21, 2, 2, 'storage/sesion_comision/462082reuniones-comision- obras publicas y servicios municipales-2018-2.pdf', '2qxZC'),
(22, 1, 8, 'storage/sesion_comision/401556reuniones-comision-desarrollo social y rural-2019-2.pdf', 'uHNKX'),
(23, 2, 8, 'storage/sesion_comision/800707reuniones-comision-desarrollo social y rural-2019-3.pdf', '57vjn'),
(24, 3, 8, 'storage/sesion_comision/827685reuniones-comision-desarrollo social y rural-2019-1.pdf', 'dqrUo'),
(25, 4, 8, 'storage/sesion_comision/511028reuniones-comision-desarrollo social y rural-2019-4.pdf', 'jlEDk'),
(26, 5, 8, 'storage/sesion_comision/400130reuniones-comision-desarrollo social y rural-2019..pdf', 'UTYSn'),
(27, 1, 6, 'storage/sesion_comision/725654reuniones-comision-educacion y cultura-2018-1.pdf', '3xUxw'),
(28, 2, 6, 'storage/sesion_comision/699491reuniones-comision-educacion y cultura-2018-2.pdf', 'Z1C5E'),
(29, 3, 6, 'storage/sesion_comision/419347reuniones-comision- desarrollo economico y turismo-2019-3.pdf', 'IQUtE'),
(30, 4, 6, 'storage/sesion_comision/531646reuniones-comision-educacion y cultura-2019-4.pdf', '2xlu2'),
(31, 5, 6, 'storage/sesion_comision/294877reuniones-comision-educacion y cultura-2019-5.pdf', '9WEBL'),
(32, 3, 2, 'storage/sesion_comision/259913reuniones-comision-obras publicas y servicios municipales-2019-3.pdf', 's3CRD'),
(33, 4, 2, 'storage/sesion_comision/49711reuniones-comision-obras publicas y servicios municipales-2019-4.pdf', '1EtvX'),
(34, 1, 4, 'storage/sesion_comision/813000reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2018-1.pdf', 'YhBYZ'),
(35, 2, 4, 'storage/sesion_comision/659608reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2018-2.pdf', 'jL5nv'),
(36, 3, 4, 'storage/sesion_comision/820699reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2018-3.pdf', 'xC7Zl'),
(37, 4, 4, 'storage/sesion_comision/184724reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2018-4.pdf', '7Kc7t'),
(38, 5, 4, 'storage/sesion_comision/880534reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2019-5.pdf', 'b4EKy'),
(39, 6, 4, 'storage/sesion_comision/529646reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2019-6.pdf', 'TBP3W'),
(40, 7, 4, 'storage/sesion_comision/770580reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2019-7.pdf', 'f8IFo'),
(41, 8, 4, 'storage/sesion_comision/355150reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2019-8.pdf', '0Jgtg'),
(42, 9, 4, 'storage/sesion_comision/193924reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2019-9.pdf', 'ZgOcg'),
(43, 10, 4, 'storage/sesion_comision/554344reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2019-10.pdf', 'h6Xid'),
(44, 1, 5, 'storage/sesion_comision/986499reuniones-comision-salud publica y asistencia social-2018-1.pdf', 'lnjvy'),
(45, 2, 5, 'storage/sesion_comision/933838reuniones-comision-salud publica y asistencia social-2018-2.pdf', 'KybKx'),
(46, 3, 5, 'storage/sesion_comision/645185reuniones-comision-salud publica y asistencia social-2019-3.pdf', 'hgiY8'),
(47, 4, 5, 'storage/sesion_comision/413592reuniones-comision-salud publica y asistencia social-2019-4.pdf', 'NqY7s'),
(48, 5, 5, 'storage/sesion_comision/946568reuniones-comision-salud publica y asistencia social-2019-5.pdf', 'fKCTF'),
(49, 6, 5, 'storage/sesion_comision/557157reuniones-comision-salud publica y asistencia social-2019-6.pdf', '5gzFK'),
(50, 7, 5, 'storage/sesion_comision/620008reuniones-comision-salud publica y asistencia social-2019-7.pdf', 'cmPPN'),
(51, 8, 5, 'storage/sesion_comision/931548reuniones-comision-salud publica y asistencia social-2019-8.pdf', 'EFy8n'),
(52, 1, 3, 'storage/sesion_comision/14684reuniones-comision-seguridad publica, transito y transporte y proteccion civil-2018-1.pdf', 'FOUQL'),
(53, 2, 3, 'storage/sesion_comision/797080reuniones-comision-seguridad publica, transito y transporte y proteccion civil-2018-2.pdf', '6dlH3'),
(54, 3, 3, 'storage/sesion_comision/298253reuniones-comision-seguridad publica, transito y transporte y proteccion civil-2019-3.pdf', 'K1P79'),
(55, 4, 3, 'storage/sesion_comision/774237reuniones-comision-seguridad publica, transito y transporte y proteccion civil-2019-5.pdf', 'RJc03'),
(56, 4, 3, 'storage/sesion_comision/619731reuniones-comision-seguridad publica, transito y transporte y proteccion civil-2019-5.pdf', '0bVn5'),
(57, 6, 3, 'storage/sesion_comision/221540reuniones-comision-seguridad publica, transito y transporte y proteccion civil-2019-6.pdf', '58zul'),
(58, 7, 3, 'storage/sesion_comision/282372reuniones-comision-seguridad publica, transito y transporte y proteccion civil-2019-8.pdf', 'upos9'),
(59, 8, 4, 'storage/sesion_comision/516658reuniones-comision-planeacion, desarrollo urbano,ordenamiento territorial y medio ambiente-2019-8.pdf', 'Zj9K0'),
(60, 6, 6, 'storage/sesion_comision/758578comision de educacion y cultura.pdf', '0QSYh'),
(61, 6, 9, 'storage/sesion_comision/289418comision de fiscalizacion, alcoholes, comercio y reglamentos.pdf', 'ITQZY'),
(62, 8, 1, 'storage/sesion_comision/511305comision de hacienda patrimonio y cuenta publica.pdf', 'LbbtC'),
(63, 9, 1, 'storage/sesion_comision/485627comision de hacienda patrimonio y cuenta publica ii.pdf', 'XyuAY'),
(64, 10, 1, 'storage/sesion_comision/619132comision de hacienda patrimonio y cuenta publica iii.pdf', '4LYXB'),
(65, 10, 1, 'storage/sesion_comision/887546comision de hacienda, patrimonio y cuenta publica 10 ma.pdf', 'Jph28'),
(66, 1, 11, 'storage/sesion_comision/856661derechos humanos 01 reunion.pdf', 'T2x7Y'),
(67, 9, 5, 'storage/sesion_comision/61659salud publica 09 reunion.pdf', 'k1gQz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_principal`
--

CREATE TABLE `slider_principal` (
  `id_slider` int(11) NOT NULL,
  `imagen_slider` varchar(225) NOT NULL,
  `descripcion_slider` text NOT NULL,
  `activa_slider` int(2) NOT NULL,
  `fecha_slider` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider_principal`
--

INSERT INTO `slider_principal` (`id_slider`, `imagen_slider`, `descripcion_slider`, `activa_slider`, `fecha_slider`) VALUES
(1, 'images/slider_principal/565041cortometraje.jpg', 'Primer Festival Regional de Cortometrajes <a href=\'descargables/thumbnail_Convocatoria.jpg\' target=\'_blank\'>Ver Convocatoria</a>', 0, '2019-03-25'),
(2, 'images/slider_principal/920460convocatoria_delegados_2.jpg', 'Convocatoria de ElecciÃ³n de Delegados <a href=\'descargables/CONVOCATORIA_DELEGADOS.pdf\' target=\'_blank\'>Ver Convocatoria</a>', 0, '2019-03-25'),
(3, 'images/slider_principal/849028convivencia_final_pagina.jpg', 'Convivencia Familia 2019', 0, '2019-03-25'),
(4, 'images/slider_principal/65266delegados_colonias.jpg', 'Lista de registro para delegados de las colonias', 0, '2019-03-25'),
(5, 'images/slider_principal/969413festival de la cerveza 2019.jpg', 'Festival de la Cerveza', 0, '2019-04-02'),
(6, 'images/slider_principal/764165festival de la lectura pagina_.jpg', 'Festiva de Lectura', 0, '2019-04-11'),
(7, 'images/slider_principal/899296mitote pagina_.jpg', 'Mitote FolclÃ³rico', 0, '2019-04-11'),
(8, 'images/slider_principal/819111programa mitote.jpg', 'Programa general Mitote FolclÃ³rico', 0, '2019-04-22'),
(9, 'images/slider_principal/662521licitaciÃ³n_fertilizantes.jpg', 'Licitaci&oacute;n Fertilizantes -- <a href=\'admin/descargables/convocatorias/341474licitaciÃ³n y bases fertilizante.pdf\' target=\'_blank\'>Ver Convocatoria</a>', 1, '2019-04-24'),
(13, 'images/slider_principal/544812dia_del_niÃ±o.jpg', 'DÃ­a del NiÃ±o', 0, '2019-04-26'),
(14, 'images/slider_principal/724549baner _juzgado.jpg', 'Juzgado Administrativo', 1, '2019-04-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites_uri`
--

CREATE TABLE `tramites_uri` (
  `id_tramite` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `id_dep` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tramites_uri`
--

INSERT INTO `tramites_uri` (`id_tramite`, `descripcion`, `id_dep`, `src`, `created_at`) VALUES
(1, 'MI COLONIA MI COLOR', 14, 'storage/tramitesservicios/14/FRTYS2019-DESARROLLO_SOCIAL-MI_COLONIA_MI_COLOR.pdf', '2019-03-27'),
(2, 'PROGRAMA VIVE MEJOR CON IMPULSO', 14, 'storage/tramitesservicios/14/FRTYS2019-DESARROLLO_SOCIAL-PROGRAMA_VIVE_MEJOR_CON_IMPULSO.pdf', '2019-03-27'),
(3, 'SEGURO DE VIDA  PARA JEFAS DE FAMILIA (FINADA)', 14, 'storage/tramitesservicios/14/FRTYS2019-DESARROLLO_SOCIAL-SEGURO_DE_VIDA_ JEFAS_FAMILIA.pdf', '2019-03-27'),
(4, 'SEGURO DE VIDA  PARA JEFAS DE FAMILIA (PRE-REGISTRO)', 14, 'storage/tramitesservicios/14/FRTYS2019-DESARROLLO_SOCIAL-SEGURO_DE_VIDA_PREREGISTRO.pdf', '2019-03-27'),
(5, 'PROGRAMA YO PUEDO', 14, 'storage/tramitesservicios/14/FRTYS2019-DESARROLLO_SOCIAL-YO PUEDO.pdf', '2019-03-27'),
(6, 'CRECIMIENTO PERSONAL', 26, 'storage/tramitesservicios/26/FRTYS2019_Atencion_a_la_mujer-Crecimiento_Personal.pdf', '2019-03-27'),
(7, 'IMPULSO PARA EL EMPODERAMIENTO DE LAS MUJERES', 26, 'storage/tramitesservicios/26/FRTYS2019_Atencion_a_la_mujer-Impulso_para_el_Empoderamiento_de_las_Mujeres.pdf', '2019-03-27'),
(8, 'ORIENTACIÃ“N PSICOLÃ“GICA LEGAL', 26, 'storage/tramitesservicios/26/FRTYS2019_Atencion_a_la_mujer-Orientacion_Psicologica_Legal.pdf', '2019-03-27'),
(9, 'APOYO A INSTITUCIONES DE ENSEÃ‘ANZA', 20, 'storage/tramitesservicios/20/FRTYS2019-EDUCACION-APOYO_A_INSTITUCIONES_DE_ENSENANZA.pdf', '2019-03-27'),
(10, 'PROGRAMA DE BECAS ESTÃMULOS DE LA EDUCACIÃ“N BÃSICA', 20, 'storage/tramitesservicios/20/FRTYS2019-EDUCACION-BECA_ESTIMULOS.pdf', '2019-03-27'),
(11, 'PROGRAMA DE BECA MUNICIPAL', 20, 'storage/tramitesservicios/20/FRTYS2019-EDUCACION-BECA-MUNICIPAL.pdf', '2019-03-27'),
(12, 'PROGRAMA DE ESCUELA DIGNA', 20, 'storage/tramitesservicios/20/FRTYS2019-EDUCACION-ESCUELA_DIGNA.pdf', '2019-03-27'),
(13, 'APOYO AL CAMPO', 15, 'storage/tramitesservicios/15/FRTYS_2019_Desarrollo_Rural-Apoyo al Campo.pdf', '2019-03-27'),
(14, 'CAPTEMOS AGUA', 15, 'storage/tramitesservicios/15/FRTYS_2019_Desarrollo_Rural-Captemos_el_Agua.pdf', '2019-03-27'),
(15, 'AUTORIZACIÃ“N ANUAL PARA EL FUNCIONAMIENTO DE HORNO LADRILLERO', 29, 'storage/tramitesservicios/29/FRTYS_2019_Ecologia_Autorizacion_Funcionamiento_Horno_Ladrillero.pdf', '2019-03-27'),
(16, 'CONSTANCIA DE AUTORIZACIÃ“N PARA LA RECEPCIÃ“N DE ESCOMBRO EN PREDIOS', 29, 'storage/tramitesservicios/29/FRTYS_2019_Ecologia_Autorizacion-Recepcion-Escombro.pdf', '2019-03-27'),
(17, 'CONSTANCIA DE BUENAS PRACTICAS AMBIENTALES', 29, 'storage/tramitesservicios/29/FRTYS_2019_Ecologia_Buenas-Practicas-Ambientales.pdf', '2019-03-27'),
(18, 'PERMISO DE PERIFONEO', 29, 'storage/tramitesservicios/29/FRTYS_2019_Ecologia_Permiso-de-Perifoneo.pdf', '2019-03-27'),
(19, 'PERMISO DE TALA', 29, 'storage/tramitesservicios/29/FRTYS_2019_Ecologia_Permiso-de-Tala.pdf', '2019-03-27'),
(20, 'SERVICIO DE QUEJAS CONTRALORIA MUNICIPAL', 10, 'storage/tramitesservicios/10/FRTYS2019_Contraloria-Servicio_de_Quejas.pdf', '2019-03-27'),
(21, 'CERTIFICACIÃ“N DE DOCUMENTOS', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-CERTIFICADO_DE_DOCUMENTOS.pdf', '2019-03-27'),
(22, 'CONSTANCIA DE COMPARECENCIA', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-CONSTANCIA_DE_COMPARECENCIA.pdf', '2019-03-27'),
(23, 'CONSTANCIA DE DEPENDENCIA ECONÃ“MICA', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-CONSTANCIA_DE_DEPENDENCIA_ECONOMICA.pdf', '2019-03-27'),
(24, 'CONSTANCIA DE IDENTIDAD (MISMA PERSONA)', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-CONSTANCIA_DE_IDENTIDAD_MISMA_PERSONA.pdf', '2019-03-27'),
(25, 'CONSTANCIA DE INGRESOS ECONÃ“MICOS', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-CONSTANCIA_DE_INGRESOS_ECONOMICOS.pdf', '2019-03-27'),
(26, 'CONSTANCIA DE ORIGEN', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-CONSTANCIA_DE_ORIGEN.pdf', '2019-03-27'),
(27, 'CONSTANCIA DE RESIDENCIA', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-CONSTANCIA_DE_RECIDENCIA.pdf', '2019-03-27'),
(28, 'CONSTANCIA DE SUPERVIVENCIA', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-CONSTANCIA_DE_SUPERVIVENCIA.pdf', '2019-03-27'),
(29, 'CONSTANCIA MISMO DOMICILIO', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-CONSTANCIA_MISMO_DOMICILIO.pdf', '2019-03-27'),
(30, 'MODO HONESTO DE VIVIR', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-MODO_HONESTO_DE_VIVIR.pdf', '2019-03-27'),
(31, 'PERMISO DE KERMES', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-PERMISO_DE_KERMES.pdf', '2019-03-27'),
(32, 'TRASLADO DE CADÃVER', 30, 'storage/tramitesservicios/30/FRTYS_2019_SECRETARIA_AYUNTAMIENTO-TRASLADO_DE_CADAVER.pdf', '2019-03-27'),
(33, 'PERMISO DE DIVISIÃ“N', 18, 'storage/tramitesservicios/18/FRTYS_2019_Desarrollo-Urbani_Permiso_de_ Division.pdf', '2019-03-27'),
(34, 'PERMISO DE ALINEAMIENTO Y NÃšMERO OFICIAL', 18, 'storage/tramitesservicios/18/FRTYS_2019_Desarrollo-Urbano_Permiso_de_Alineamiento_Numero_Oficial.pdf', '2019-03-27'),
(35, 'PERMISO DE ANUNCIOS', 18, 'storage/tramitesservicios/18/FRTYS_2019_Desarrollo-Urbano_Permiso_de_Anuncios.pdf', '2019-03-27'),
(36, 'PERMISO DE CONSTRUCCIÃ“N', 18, 'storage/tramitesservicios/18/FRTYS_2019_Desarrollo-Urbano_Permiso_de_Construccion.pdf', '2019-03-27'),
(37, 'PERMISO DE FRACCIONAMIENTOS Y DESARROLLOS EN CONDOMINIO', 18, 'storage/tramitesservicios/18/FRTYS_2019_Desarrollo-Urbano_Permiso_de_Fraccionamientos_ Desarrollos_en_Condominio.pdf', '2019-03-27'),
(38, 'PERMISO DE USO DE SUELO COMERCIAL', 18, 'storage/tramitesservicios/18/FRTYS_2019_Desarrollo-Urbano_Permiso_de_Uso_de_Suelo_Comercial.pdf', '2019-03-27'),
(39, 'PERMISO DE USO DE SUELO HABILITACIÃ“N', 18, 'storage/tramitesservicios/18/FRTYS_2019_Desarrollo-Urbano_Permiso_de_Uso_de_Suelo_Habitacional.pdf', '2019-03-27'),
(40, 'AVALUÃ“ CATASTRAL', 8, 'storage/tramitesservicios/8/FRTYS2019-CATASTRO-AVALUO_CATASTRAL.pdf', '2019-03-27'),
(41, 'CONSTANCIA DE SI O NO PROPIEDAD', 8, 'storage/tramitesservicios/8/FRTYS2019-CATASTRO-CONSTANCIA_DE _SI _O_NO_PROPIEDAD.pdf', '2019-03-27'),
(42, 'CONSTANCIA DE NO ADEUDO PREDIAL', 8, 'storage/tramitesservicios/8/FRTYS2019-CATASTRO-CONSTANCIA_DE_NO_ADEUDO_PREDIAL.pdf', '2019-03-27'),
(43, 'CORRECCIÃ“N DE DATOS ', 8, 'storage/tramitesservicios/8/FRTYS2019-CATASTRO-CORRECION_DE_DATOS.pdf', '2019-03-27'),
(44, 'DESCUENTO A PENSIONADOS, JUBILADOS Y CASA DE INTERÃ‰S SOCIAL', 8, 'storage/tramitesservicios/8/FRTYS2019-CATASTRO-DESCUENTO_PENSIONADOS_JUBILADOS.pdf', '2019-03-27'),
(45, 'HISTORIAL CATASTRAL', 8, 'storage/tramitesservicios/8/FRTYS2019-CATASTRO-HISTORIAL_CATASTRAL.pdf', '2019-03-27'),
(46, 'HISTORIAL DE PAGO', 8, 'storage/tramitesservicios/8/FRTYS2019-CATASTRO-HISTORIAL_DE_PAGO.pdf', '2019-03-27'),
(47, 'REGISTRO DE PROPIEDAD', 8, 'storage/tramitesservicios/8/FRTYS2019-CATASTRO-REGISTRO.pdf', '2019-03-27'),
(48, 'TRASLADO DE DOMINIO (IMPUESTO DE ADQUISICIÃ“N DE BIENES INMUEBLES)', 8, 'storage/tramitesservicios/8/FRTYS2019-CATASTRO-TRASLADO_DE_DOMINIO.pdf', '2019-03-27'),
(49, 'EXPEDICIÃ“N DE CONSTANCIA DE CUMPLIMIENTO DE REQUERIMIENTOS DE PROTECCIÃ“N CIVIL', 25, 'storage/tramitesservicios/25/FRTYS2019-Proteccion_Civil-Constancia_de_cumplimiento_requerimientos_Proteccion_Civil.pdf', '2019-03-27'),
(50, 'EXPEDICIÃ“N DE CONSTANCIA DE REALIZACIÃ“N DE SIMULACRO ANUAL', 25, 'storage/tramitesservicios/25/FRTYS2019-Proteccion_Civil-Constancia_simulacro_anual.pdf', '2019-03-27'),
(51, 'DICTAMEN DE VERIFICACIÃ“N DE SALIDAS DE EMERGENCIA Y MEDIDAS DE SEGURIDAD EN ESPECTÃCULOS PÃšBLICOS', 25, 'storage/tramitesservicios/25/FRTYS2019-Proteccion_Civil-Dictamen_de_salidas_emergencia_medidas_de_seguridad_para_espectaculos_publicos.pdf', '2019-03-27'),
(52, 'DICTAMEN DE VERIFICACIÃ“N DE INSTALACIONES ELÃ‰CTRICAS Y GAS L.P. EN EVENTOS MASIVOS', 25, 'storage/tramitesservicios/25/FRTYS2019-Proteccion_Civil-Dictamen_verificacion_instalaciones_electricas_gas_lp_eventos_masivos.pdf', '2019-03-27'),
(53, 'SERVICIO DE AMBULANCIA PARA TRASLADOS LOCALES Y FORÃNEOS ', 25, 'storage/tramitesservicios/25/FRTYS2019-Proteccion_Civil-Servicio_Ambulancia_Local_foraneo.pdf', '2019-03-27'),
(54, 'SERVICIOS DE ATENCIÃ“N PRE-HOSPITALARIA PARA EVENTOS MASIVOS', 25, 'storage/tramitesservicios/25/FRTYS2019-Proteccion_Civil-Servicio_atencion_prehospitalaria_eventos_masivos.pdf', '2019-03-27'),
(55, 'CONFORMIDAD PARA EL USO Y QUEMA DE ARTIFICIOS PIROTÃ‰CNICOS ', 25, 'storage/tramitesservicios/25/FRTYS2019-Proteccion_Civil-Uso_quema_de_pirotecnia.pdf', '2019-03-27'),
(56, 'TALLER DE DANZA FOLCLÃ“RICA COMUNIDADES', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_DANZA_FOLCLORICA_COMUNIDADES.pdf', '2019-03-27'),
(57, 'TALLER DE DIBUJO Y PINTURA COMUNIDADES', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_DIBUJO_PINTURA_COMUNIDADES.pdf', '2019-03-27'),
(58, 'TALLER DE BAILE DE SALÃ“N AVANZADO', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_BAILE_DE_SALON_AVANZADOS.pdf', '2019-03-27'),
(59, 'TALLER DE BAILE DE SALÃ“N PARA PRINCIPIANTES', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_BAILE_DE_SALON_PRICIPIANTES.pdf', '2019-03-27'),
(60, 'TALLER DE BAILE MODERNO', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_BAILE_MODERNO.pdf', '2019-03-27'),
(61, 'TALLER DE BALLET CLÃSICO', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_BALLET_CLASICO.pdf', '2019-03-27'),
(62, 'TALLER DE BANDA DE VIENTO INFANTIL', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_BANDA_DE_VIENTO_INFANTIL.pdf', '2019-03-27'),
(63, 'TALLER DE CANTO Y DANZA PARA ADULTOS DE LA TERCERA EDAD', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_CANTO_DANZA_PARA_ADULTOS_DE_LA_TERCERA_EDAD.pdf', '2019-03-27'),
(64, 'TALLER DE CUERDAS', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_CUERDAS.pdf', '2019-03-27'),
(65, 'TALLER DE DANZA FOLCLÃ“RICA', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_DANZA_FOLCLORICA.pdf', '2019-03-27'),
(66, 'TALLER DE DIBUJO Y PINTURA', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_DIBUJO_Y_PINTURA.pdf', '2019-03-27'),
(67, 'TALLER DE GUITARRA POPULAR', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_GUITARRA_POPULAR.pdf', '2019-03-27'),
(68, 'TALLER DE MANUALIDADES', 31, 'storage/tramitesservicios/31/FRTYS_2019_CASA_DE_LA_CULTURA-TRAMITES_SERVICIOS_2019_TALLER_DE_MANUALIDADES.pdf', '2019-03-27'),
(69, 'ALUMBRADO PUBLICO', 22, 'storage/tramitesservicios/22/FRTYS_2019_SERVICIOS_PUBLICOS-ALUMBRADO_PUBLICO.pdf', '2019-03-27'),
(70, 'POR SERVICIOS DE LIMPIA, RECOLECCIÃ“N, TRASLADO, TRATAMIENTO Y DISPOSICIÃ“N FINAL DE RESIDUOS', 22, 'storage/tramitesservicios/22/FRTYS_2019_SERVICIOS_PUBLICOS-SERVICIO_DE_LIMPIA_RECOLECCION_TRASLADO_TRATAMIENTO_DISPOSICION_FINAL_DE_RESIDUOS.pdf', '2019-03-27'),
(71, 'SERVICIO DE PANTEÃ“N MUNICIPAL', 22, 'storage/tramitesservicios/22/FRTYS_2019_SERVICIOS_PUBLICOS-SERVICIO_DEL_PANTEON_MUNICIPAL.pdf', '2019-03-27'),
(72, 'SERVICIO DE RASTRO MUNICIPAL', 22, 'storage/tramitesservicios/22/FRTYS_2019_SERVICIOS_PUBLICOS-SERVICIO_DEL_RASTRO_MUNICIPAL.pdf', '2019-03-27'),
(73, 'SUMINISTRO DE AGUA TRATADA', 22, 'storage/tramitesservicios/22/FRTYS_2019_SERVICIOS_PUBLICOS-SUMINISTRO_DE_AGUA_TRATADA.pdf', '2019-03-27'),
(74, 'APOYOS SOCIALES A PERSONAS EN SITUACIÃ“N DE VULNERABILIDAD DIF ESTATAL', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-Apoyo_personas_con_vulnerabilidad_ante_dif_estatal.pdf', '2019-03-27'),
(75, 'ATENCIÃ“N JURÃDICA, SOCIAL Y PSICOLÃ“GICA A NNA Y SU FAMILIARES', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-Atencion_Juridica_Psicologica_social_para_familias.pdf', '2019-03-27'),
(76, 'BK-DISCAPACIDAD PARA ESTUDIANTES CON DISCAPACIDAD', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-Beca_estudiantes_con_discapacidad.pdf', '2019-03-27'),
(77, 'CANDADO VIAL PARA PERSONAS CON DISCAPACIDAD', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-Candado_vial.pdf', '2019-03-27'),
(78, 'COMEDORES COMUNITARIOS', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-Comedores_comunitarios.pdf', '2019-03-27'),
(79, 'CONSULTA MEDICA', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-Consulta_medica.pdf', '2019-03-27'),
(80, 'CREDENCIAL NACIONAL PARA PERSONAS CON DISCAPACIDAD', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-Credencial_Nacional_personas_discapacidad.pdf', '2019-03-27'),
(81, 'DENUNCIA ANTE EL CENTRO DE MULTIDICIPLINARIO PARA LA ATENCIÃ“N INTEGRAL DE LA VIOLENCIA ADSCRITO AL SISTEMA MUNICIPAL', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-Denuncia_Cemaiv.pdf', '2019-03-27'),
(82, 'ENTREGAR DOCUMENTACIÃ“N EN GERONTOLÃ“GICO', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-DocumentaciÃ³n_Gerontologico.pdf', '2019-03-27'),
(83, 'SERVICIO DENTAL', 33, 'storage/tramitesservicios/33/FRTYS-2019-DIF-Servicio_dental.pdf', '2019-03-27'),
(84, 'CARTILLA MILITAR', 2, 'storage/tramitesservicios/2/FRTYS2019_Presidencia-Cartilla_Militar.pdf', '2019-03-27'),
(85, 'TARJETA INAPAM', 2, 'storage/tramitesservicios/2/FRTYS2019_Presidencia-Tarjeta_Inapam.pdf', '2019-03-27'),
(86, 'ASESORÃA EMPRESARIAL', 16, 'storage/tramitesservicios/16/FRTYS_2019_DESARROLLO_ECONOMICO-ASESORIA_EMPRESARIAL.pdf', '2019-03-27'),
(87, 'PROGRAMAS Y PROYECTOS PRODUCTIVOS', 16, 'storage/tramitesservicios/16/FRTYS_2019_DESARROLLO_ECONOMICO-PROGRAMAS_Y_PROYECTOS_PRODUCTIVOS.pdf', '2019-03-27'),
(88, 'SISTEMA DE APERTURA RÃPIDA DE EMPRESAS', 16, 'storage/tramitesservicios/16/FRTYS_2019_DESARROLLO_ECONOMICO-SISTEMA_DE_APERTURA_RAPIDA_DE_EMPRESAS.pdf', '2019-03-27'),
(89, 'INFORMACIÃ“N TURÃSTICA', 16, 'storage/tramitesservicios/16/FRTYS_2019_DESARROLLO_ECONOMICO-TURISMO.pdf', '2019-03-27'),
(90, 'INSCRIPCIÃ“N A LA LICITACIÃ“N PUBLICA', 17, 'storage/tramitesservicios/17/FRTYS_2019_Obras_Publicas-Inscripcion_a_Licitacion_PÃºblica.pdf', '2019-03-27'),
(91, 'INSCRIPCIÃ“N A LICITACIÃ“N SIMPLIFICADA', 17, 'storage/tramitesservicios/17/FRTYS_2019_Obras_Publicas-Inscripcion_a_Licitacion_Simplificada.pdf', '2019-03-27'),
(92, 'MANTENIMIENTO CORRECTIVO DE VIALIDADES', 17, 'storage/tramitesservicios/17/FRTYS_2019_Obras_Publicas-Mantenimiento_Correctivo_Vialidades.pdf', '2019-03-27'),
(93, 'MANTENIMIENTO Y REHABILITACIÃ“N', 17, 'storage/tramitesservicios/17/FRTYS_2019_Obras_Publicas-Mantenimiento_y_Rehabilitacion.pdf', '2019-03-27'),
(94, 'MANTENIMIENTO CORRECTIVO DE BACHEO', 17, 'storage/tramitesservicios/17/FRTYS_2019_Obras_Publicas-Mantenimientro_Correctivo_de_Bacheo.pdf', '2019-03-27'),
(95, 'SOLICITUD DE DERECHOS ARCHO', 21, 'storage/tramitesservicios/21/FRTYS_2019_ACCESO_ A_LA_INFORMACION-SOLICITUD_DE_DERECHOS_ARCO.pdf', '2019-03-27'),
(96, 'SOLICITUD DE INFORMACIÃ“N / ORIENTACIÃ“N SOBRE TRAMITES Y REQUISITOS EN GENERAL', 21, 'storage/tramitesservicios/21/FRTYS_2019_ACCESO_ A_LA_INFORMACION-SOLICITUD_DE_INFORMACION_ORIENTACION_SOBRE_TRAMITES_REQUISITOS_EN_GENERAL.pdf', '2019-03-27'),
(97, 'SOLICITUD DE INFORMACIÃ“N PUBLICA A LAS DEPENDENCIAS MUNICIPALES', 21, 'storage/tramitesservicios/21/FRTYS_2019_ACCESO_ A_LA_INFORMACION-SOLICITUD_DE_INFORMACION_PUBLICA_A_LAS_DEPENDENCIAS_MUNICIPALES.pdf', '2019-03-27'),
(98, 'SOLICITUD DE INFORMACIÃ“N PUBLICA DE OFICIO', 21, 'storage/tramitesservicios/21/FRTYS_2019_ACCESO_ A_LA_INFORMACION-SOLICITUD_DE_INFORMACION_PUBLICA_DE_OFICIO.pdf', '2019-03-27'),
(99, 'AUTORIZACIÃ“N Y PERMISOS PARA EVENTOS', 9, 'storage/tramitesservicios/9/FRTYS_2019_FISCALIZACION-AUTORIZACION_PERMISOS_PARA_EVENTOS.pdf', '2019-03-27'),
(100, 'CERTIFICACIÃ“N PARA VENTA DE BEBIDAS ALCOHÃ“LICAS', 9, 'storage/tramitesservicios/9/FRTYS_2019_FISCALIZACION-CERTIFICADO_VENTA_BEBIDAS_ALCOHOLICAS.pdf', '2019-03-27'),
(101, 'IMPUESTOS SOBRE DIVERSIONES Y ESPECTÃCULOS PÃšBLICOS', 9, 'storage/tramitesservicios/9/FRTYS_2019_FISCALIZACION-IMPUESTOS_DIVERSIONES_ESPECTACULOS_PUBLICOS.pdf', '2019-03-27'),
(102, 'IMPUESTOS RIFAS, SORTEOS, LOTERÃAS Y CONCURSOS', 9, 'storage/tramitesservicios/9/FRTYS_2019_FISCALIZACION-IMPUESTOS_RIFAS_SORTEOS_LOTERIAS_CONCURSOS.pdf', '2019-03-27'),
(103, 'LICENCIAS DE FUNCIONAMIENTO PARA COMERCIANTES', 9, 'storage/tramitesservicios/9/FRTYS_2019_FISCALIZACION-LICENCIAS_FUNCIONAMIENTO_COMERCIANTES.pdf', '2019-03-27'),
(104, 'PERMISOS PARA LA INTENCIONAL Y VENTA TEMPORAL DE BEBIDAS ALCOHÃ“LICAS', 9, 'storage/tramitesservicios/9/FRTYS_2019_FISCALIZACION-PERMISOS_EXTENCION_VENTAS_TEMPORAL_BEBIDAS_ALCOHOLICAS.pdf', '2019-03-27'),
(105, 'APOYO EN TRASLADO', 24, 'storage/tramitesservicios/24/FRTYS2019_Seguridad_Publica-Apoyo_Traslado.pdf', '2019-03-29'),
(106, 'CARTA DE ANTECEDENTES ADMINISTRATIVOS', 24, 'storage/tramitesservicios/24/FRTYS2019_Seguridad_Publica-Carta_Antecedentes_Administrativos.pdf', '2019-03-29'),
(107, 'CASETA DE VIGILANCIA', 24, 'storage/tramitesservicios/24/FRTYS2019_Seguridad_Publica-Caseta_Vigilancia.pdf', '2019-03-29'),
(108, 'CONSTANCIA DE BÃšSQUEDA DE DOMICILIO', 24, 'storage/tramitesservicios/24/FRTYS2019_Seguridad_Publica-Constancia_Busqueda_Domicilio.pdf', '2019-03-29'),
(109, 'CONSTANCIA DE INDICE DELICTIVO', 24, 'storage/tramitesservicios/24/FRTYS2019_Seguridad_Publica-Constancia_Indice_Delictivo.pdf', '2019-03-29'),
(110, 'FALTAS ADMINISTRATIVAS', 24, 'storage/tramitesservicios/24/FRTYS2019_Seguridad_Publica-Faltas_Administrativas.pdf', '2019-03-29'),
(111, 'PLATICAS DE PREVENCIÃ“N', 24, 'storage/tramitesservicios/24/FRTYS2019_Seguridad_Publica-Paticas_Prevencion.pdf', '2019-03-29'),
(112, 'PRESTACIÃ“N DE SERVICIOS ESPECIALES', 24, 'storage/tramitesservicios/24/FRTYS2019_Seguridad_Publica-Prestacion_Servicios_Especiales.pdf', '2019-03-29'),
(113, 'RECEPCIÃ“N DE DEMANDAS ADMINISTRATIVAS', 11, 'storage/tramitesservicios/11/FRTYS_2019_Juzgado_Administrativo-Recepcion_demandas_administrativas.pdf', '2019-03-29'),
(114, 'COBRO DE INFRACCIONES', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-cobro_infracciones.pdf', '2019-03-29'),
(115, 'CONCESIÃ“N PARA EXPLOTAR EL SERVICIO DE TRANSPORTE PUBLICO DE RUTA FIJA EN SU MODALIDAD DE URBANO Y SUBURBANO', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-concesion_explotar_trasnporte_publico.pdf', '2019-03-29'),
(116, 'CONSTANCIA DE DESPINTADO', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-constancia_despintado.pdf', '2019-03-29'),
(117, 'CONSTANCIA DE NO INFRACCIÃ“N DE TARJETA DE CIRCULACIÃ“N, PLACAS DE CIRCULACIÃ“N Y/O LICENCIAS PARA CONDUCIR', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-constancia_no_infraccion.pdf', '2019-03-29'),
(118, 'CESIÃ“N DE CONCESIÃ“N (POR MUERTE O INCAPACIDAD PERMANENTE DEL CONCESIONARIO, POR CESIÃ“N DE DERECHOS Y POR MANDAMIENTO O RESOLUCIÃ“N JURISDICCIONAL)', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-gestion_concesion.pdf', '2019-03-29'),
(119, 'ORDEN DE PLAQUEO PARA CAMBIO DE UNIDAD', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-orden_plaqueo_cambio_unidad.pdf', '2019-03-29'),
(120, 'PERMISO DE CARGA Y DESCARGA', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-permiso_carga_descarga.pdf', '2019-03-29'),
(121, 'PERMISO PARA CIERRE PARCIAL O TOTAL DE LA CALLE', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-permiso_cierre_parcial_total.pdf', '2019-03-29'),
(122, 'PERMISO EVENTUAL DE TRANSPORTE', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-permiso_eventual_transporte.pdf', '2019-03-29'),
(123, 'PRORROGA PARA EL USO DE UNIDADES QUE PRESENTAN EL SERVICIO PÃšBLICO DE TRANSPORTE', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-prorroga_uso_unidad_prestada_servicio_publico.pdf', '2019-03-29'),
(124, 'PROTECCIÃ“N VIAL EN EVENTOS CIVILES', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-proteccion_vial_eventos_civiles.pdf', '2019-03-29'),
(125, 'REVISTA FÃSICO-MECÃNICA', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-revista_fisico_mecanica.pdf', '2019-03-29'),
(126, 'SERVICIO DE GRÃšA', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-servicio_grua.pdf', '2019-03-29'),
(127, 'SERVICIO DE PENSIÃ“N', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-servicio_pension.pdf', '2019-03-29'),
(128, 'SERVICIO DE VIALIDAD', 23, 'storage/tramitesservicios/23/FRTYS2019_Transito_Transporte-servicio_vialidad.pdf', '2019-03-29'),
(129, 'APOYO PARA COMBUSTIBLE', 32, 'storage/tramitesservicios/32/FRTYS_2019_Comudaj-Apoyo_Combustible.pdf', '2019-04-02'),
(130, 'APOYO PARA INSTALACIONES DEPORTIVAS', 32, 'storage/tramitesservicios/32/FRTYS_2019_Comudaj-Apoyo_Instalaciones_Deportivas.pdf', '2019-04-02'),
(131, 'APOYO PARA TRANSPORTE', 32, 'storage/tramitesservicios/32/FRTYS_2019_Comudaj-Apoyo_Transporte.pdf', '2019-04-02'),
(132, 'APOYOS DEPORTIVOS', 32, 'storage/tramitesservicios/32/FRTYS_2019_Comudaj-Apoyos_Deportivos.pdf', '2019-04-02'),
(133, 'APOYO PARA BECAS', 32, 'storage/tramitesservicios/32/FRTYS_2019_Comudaj-Becas.pdf', '2019-04-02'),
(134, 'AMPLIACION DE RED DE AGUA Y DRENAJE', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-AMPLIACION-DE-RED-DE-AGUA-Y-DRENAJE.pdf', '2019-04-03'),
(135, 'CAMBIO DE TITULAR', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-CAMBIO-DE-TITULAR.pdf', '2019-04-03'),
(136, 'CARTA DE FACTIBILIDAD', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-CARTA-DE-FACTIBILIDAD.pdf', '2019-04-03'),
(137, 'CONSTANCIA DE NO ADEUDO', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-CONSTANCIA-DE-NO-ADEUDO.pdf', '2019-04-03'),
(138, 'CONTRATO NUEVO PARA INCORPORACIÃ“N AL SISTEMA DE AGUA', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-CONTRATO-NUEVO-PARA-INCORPORACION-AL-SISTEMA-DE-AGUA.pdf', '2019-04-03'),
(139, 'DESCARGA SANITARIA', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-DESCARGA-SANITARIA.pdf', '2019-04-03'),
(140, 'HISTORIAL DE CONSUMOS Y PAGOS', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-HISTORIAL-DE-CONSUMOS-Y-PAGOS.pdf', '2019-04-03'),
(141, 'LIMPIEZA-DE-DESCARGA-SANITARIA VACTOR', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-LIMPIEZA-DE-DESCARGA-SANITARIA-VACTOR.pdf', '2019-04-03'),
(142, 'LIMPIEZA DE DESCARGA SANITARIA VARILLA', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-LIMPIEZA-DE-DESCARGA-SANITARIA-VARILLA.pdf', '2019-04-03'),
(143, 'SERVICIO DE PIPAS', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-PIPAS.pdf', '2019-04-03'),
(144, 'SERVICIO DE RECONEXION VOLUNTARIA', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-RECONEXION-VOLUNTARIA.pdf', '2019-04-03'),
(145, 'SUSPENSIÃ“N VOLUNTARIA', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-SUSPENSIONVOLUNTARIA.pdf', '2019-04-03'),
(146, 'VENTA DE MEDIDOR', 34, 'storage/tramitesservicios/34/FRTYS_2019_SMAPAU-VENTA-DE-MEDIDOR.pdf', '2019-04-03'),
(147, 'Acta de Ayuntamiento 76', 1, 'storage/tramitesservicios/1/CONMUTADOR VOZ OK2_mezcla.mp3', '2019-05-06'),
(148, 'Acta de Ayuntamiento 76', 0, 'storage/tramitesservicios//pdf_blanco.pdf', '2019-05-06'),
(149, 'Acta de Ayuntamiento 76', 0, 'storage/tramitesservicios//orden del dia.pdf', '2019-05-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL,
  `id_dep` int(11) NOT NULL,
  `extencion` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mision` text COLLATE utf8_unicode_ci NOT NULL,
  `vision` text COLLATE utf8_unicode_ci NOT NULL,
  `objetivo` text COLLATE utf8_unicode_ci NOT NULL,
  `valores` text COLLATE utf8_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_password_hash`, `user_email`, `image`, `is_admin`, `id_dep`, `extencion`, `tel1`, `tel2`, `mision`, `vision`, `objetivo`, `valores`, `date_added`) VALUES
(1, 'Webmaster', 'Informatica', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'webmaster@uriangato.gob.mx', '', 1, 0, '0', '4454575022', '4575022', '', '', '', '', '2019-02-05 15:06:00'),
(2, 'Anastacio', 'Rosiles PÃ©rez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'presidente@uriangato.gob.mx', 'Presidente_Tacho.jpg', 0, 2, '101', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(3, 'Maurilio', 'MalagÃ³n Ãlvarez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'comunicacionsocial@uriangato.gob.mx', 'Director_Maurilio.jpg', 0, 19, '105', '4575022', '-', '', '', '', '', '2019-02-05 00:00:00'),
(4, 'Fernando', 'ResÃ©ndiz LÃ³pez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'accesoalainformacion@uriangato.gob.mx', 'Director_Fer.jpg', 0, 21, '2', '45 7 96 28', '45 7 93 86', '', '', '', '', '2019-02-05 00:00:00'),
(5, 'Jorge', 'HernÃ¡ndez TÃ©llez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'educacion@uriangato.gob.mx', 'Director_Educacion.jpg', 0, 20, '-', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(6, 'Ubertino', 'Zamudio MartÃ­nez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'deconomico@uriangato.gob.mx', 'Director_Tino.jpg', 0, 16, '-', '458 84 28', '-', '', '', '', '', '2019-02-05 00:00:00'),
(7, 'Arturo', 'Espinosa RodrÃ­guez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'informatica@uriangato.gob.mx', 'Director_Arturo.jpg', 0, 5, '116', '4454575022', '-', '', '', '', '', '2019-02-05 00:00:00'),
(8, 'RaÃºl', 'VillagÃ³mez RodrÃ­guez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'tesoreria@uriangato.gob.mx', 'Director_Raul.jpg', 0, 7, '109', '4454575022', '-', '', '', '', '', '2019-02-05 00:00:00'),
(9, 'Enrique', 'Morales DomÃ­nguez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'oficialmayor@uriangato.gob.mx', 'Director_Morales.jpg', 0, 12, '119', '4454575022', '-', '', '', '', '', '2019-02-05 00:00:00'),
(10, 'Abraham', 'MartÃ­nez Castro', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'durbano@uriangato.gob.mx', 'Director_Abraham.jpg', 0, 18, '115', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(11, 'EfraÃ­n', 'PÃ©rez Vargas', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'serviciosp@uriangato.gob.mx', 'Director_Efrain.jpg', 0, 22, '118', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(12, 'Fernando', 'Castro Pantoja', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'catastro@uriangato.gob.mx', 'Director_Fer_Castro.jpg', 0, 8, '-', '45 7 50 22', '-', '', '', '', 'Aqui es los valores', '2019-02-05 00:00:00'),
(13, 'Javier', 'Contreras GonzÃ¡lez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'obras@uriangato.gob.mx', 'Director_Javier.jpg', 0, 17, '111', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(14, 'Omar', 'Baeza HernÃ¡ndez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'transitoytransporte@uriangato.gob.mx', 'Director_Omar.jpg', 0, 23, '-', '457 80 00', '-', '', '', '', '', '2019-02-05 00:00:00'),
(15, 'Guillermo JesÃºs', 'MartÃ­nez MartÃ­nez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'fiscalizacion@uriangato.gob.mx', 'Director_Memo.jpg', 0, 9, '117', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(16, 'Miguel', 'DÃ­az Rosiles', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'drural@uriangato.gob.mx', 'Director_Migue_Rural.jpg', 0, 15, '107', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(17, 'Miguel', 'DomÃ­nguez Moreno', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'dsocial@uriangato.gob.mx', 'Director_Miguel.jpg', 0, 14, '112', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(18, 'Cristopher', 'TÃ©llez GuzmÃ¡n', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'comudaj@uriangato.gob.mx', 'Director_Cristo.jpg', 0, 32, '-', '45 8 60 07', '-', '', '', '', '', '2019-02-05 00:00:00'),
(19, 'Rosa', 'Morales Reyes', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'dif@uriangato.gob.mx', 'Directora_Rosy.jpg', 0, 33, '-', '458 09 75', '45 8 61 02', '', '', '', '', '2019-02-05 00:00:00'),
(20, 'Uriel', 'HernÃ¡ndez LÃ³pez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'smapau@uriangato.gob.mx', 'Director_Uriel.jpg', 0, 34, '-', '45 7 61 21', '45 7 54 24', '', '', '', '', '2019-02-05 00:00:00'),
(21, 'Pablo', 'Ruiz Rico', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'casacultura@uriangato.gob.mx', 'Director_Pablo.jpg', 0, 31, '-', '457 56 20', '-', '', '', '', '', '2019-02-05 00:00:00'),
(22, 'Jorge', 'Romero Lucio', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'proteccioncivil@uriangato.gob.mx', 'Director_Jorge_Lucio.jpg', 0, 25, '-', '45 7 60 67', '-', '', '', '', '', '2019-02-05 00:00:00'),
(23, 'Viviana', 'Arreola GarcÃ­a', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'sindico@uriangato.gob.mx', 'Sindico_Viviana.jpg', 0, 1, '106', '4454575022', '0', '', '', '', '', '2019-02-05 00:00:00'),
(24, 'Brenda Lizbeth', 'Zavala VillagÃ³mez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'juzgadoadmvo@uriangato.gob.mx', 'Juez_administrativo.jpg', 0, 11, '5', '45 7 96 28', '45 7 93 86', '', '', '', '', '2019-02-05 00:00:00'),
(25, 'JesÃºs', 'MartÃ­nez MuÃ±oz', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'secretario@uriangato.gob.mx', 'Secretario_jesus.jpg', 0, 30, '104', '45 7 50 22', '0', '', '', '', '', '2019-02-05 00:00:00'),
(26, 'Humberto', 'Cerrillo GodÃ­nez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'seguridadpublica@uriangato.gob.mx', 'Director_Cerrillo.jpg', 0, 24, '-', '457 70 01', '45 8 53 16', '', '', '', '', '2019-02-05 00:00:00'),
(27, 'Ponciano', 'Moreno Baeza', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'contralor@uriangato.gob.mx', 'Director_Chano.jpg', 0, 10, '114', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(28, 'Lucila', 'MartÃ­Â­nez Carmona', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'atencionalamujer@uriangato.gob.mx', 'Director_Lucila.jpg', 0, 26, '-', '457 53 56', '-', '', '', '', '', '2019-02-05 00:00:00'),
(29, 'Alberto', 'MartÃ­nez MuÃ±oz', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'planeacion@uriangato.gob.mx', 'Director_Albert.jpg', 0, 13, '1', '45 7 96 28', '45 7 93 86', '', '', '', '', '2019-02-05 00:00:00'),
(30, 'Leopoldo', 'GuzmÃ¡n RamÃ­Â­rez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'asesorjuridico@uriangato.gob.mx', 'Director_Polo.jpg', 0, 28, '0', '45 7 50 22', '-', '', '', '', '', '2019-02-05 00:00:00'),
(31, 'MarÃ­a Guadalupe', 'Ortiz GarcÃ­a', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'oterritorial@uriangato.gob.mx', 'Director_Lupita.jpg', 0, 29, '3', '4451064318', '45 7 93 86', '', '', '', '', '2019-02-05 00:00:00'),
(32, 'Luis', 'HernÃ¡ndez Torres', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidorluishernandez@uriangato.gob.mx', 'Regidor_Luis.jpg', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(33, 'Sandra Leticia', 'DÃ­az DomÃ­Â­nguez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidorasandradiaz@uriangato.gob.mx', 'Sandy_Regidora.png', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(34, 'Wendy', 'MartÃ­Â­nez GuzmÃ¡n', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidorawendymartinez@uriangato.gob.mx', 'Regidora_Wendy.jpg', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(35, 'Jannet', 'Sosa Rosiles', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidorajannetsosa@uriangato.gob.mx', 'Regidora_Janet.jpg', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(36, 'Pedro', 'Zamudio Avalos', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidorpedrozamudio@uriangato.gob.mx', 'Regidor_Pedro.jpg', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(37, 'MartÃ­n', 'GonzÃ¡lez Bedolla', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidormartingonzalez@uriangato.gob.mx', 'Regidor_martin.jpg', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(38, 'Carlos', 'Serrato Ãvalos', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidorcarloserrato@uriangato.gob.mx', 'Regidor_carlos.jpg', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(39, 'Renata', 'Romero Ãvalos', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidorarenatavalos@uriangato.gob.mx', 'Regidora_renata.jpg', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(40, 'Ricardo', 'MartÃnez Vargas', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidoricardomartinez@uriangato.gob.mx', 'Ricardo_regidor.jpg', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(41, 'Roberto', 'Vieyra MartÃÂ­nez', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'regidorobertovieyra@uriangato.gob.mx', 'Regidor_Roberto.jpg', 0, 3, '0', '0', '0', '', '', '', '', '2019-02-05 00:00:00'),
(42, 'Sergio', 'Rosiles Ruiz', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', '911@uriangato.gob.mx', 'Director_checo.jpg', 0, 27, '-', '911', '-', '', '', '', '', '2019-02-05 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos_sesion`
--
ALTER TABLE `archivos_sesion`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `archivos_sesiona`
--
ALTER TABLE `archivos_sesiona`
  ADD PRIMARY KEY (`id_archivoa`);

--
-- Indices de la tabla `calendario_gaceta`
--
ALTER TABLE `calendario_gaceta`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `comision_gaceta`
--
ALTER TABLE `comision_gaceta`
  ADD PRIMARY KEY (`id_comision`);

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD PRIMARY KEY (`id_convocatoria`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `sesion_ayuntamiento`
--
ALTER TABLE `sesion_ayuntamiento`
  ADD PRIMARY KEY (`id_sesion_a`);

--
-- Indices de la tabla `sesion_comision`
--
ALTER TABLE `sesion_comision`
  ADD PRIMARY KEY (`id_sesion`);

--
-- Indices de la tabla `slider_principal`
--
ALTER TABLE `slider_principal`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `tramites_uri`
--
ALTER TABLE `tramites_uri`
  ADD PRIMARY KEY (`id_tramite`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos_sesion`
--
ALTER TABLE `archivos_sesion`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `archivos_sesiona`
--
ALTER TABLE `archivos_sesiona`
  MODIFY `id_archivoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `calendario_gaceta`
--
ALTER TABLE `calendario_gaceta`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `comision_gaceta`
--
ALTER TABLE `comision_gaceta`
  MODIFY `id_comision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `id_convocatoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `id_dep` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `sesion_ayuntamiento`
--
ALTER TABLE `sesion_ayuntamiento`
  MODIFY `id_sesion_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sesion_comision`
--
ALTER TABLE `sesion_comision`
  MODIFY `id_sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `slider_principal`
--
ALTER TABLE `slider_principal`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tramites_uri`
--
ALTER TABLE `tramites_uri`
  MODIFY `id_tramite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
