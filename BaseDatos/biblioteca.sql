-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 20:39:54
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_material` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'clave primaria compartida para autores',
  `id_autor` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'clave primaria compartida para autores',
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'nombre del autor',
  `apellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'apellido del autor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Identificaador de Categorias',
  `descripcion` char(60) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripción de la categoría',
  `estatus` char(4) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Estatus de ciertas categorias'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Parte De Las categorías que se van a requerir';

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `descripcion`, `estatus`) VALUES
('345678', 'Manga', 'baja'),
('AUD', 'Audio video', 'Alta'),
('LIB', 'Libros Rotos', 'Alta'),
('Lib_elec', 'Libros electronicos', 'Alta'),
('PDF', 'Documentos PDF', 'Alta'),
('REV', 'Revistas', 'Alta'),
('TES', 'Tesis UAEM', 'Alta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id_editorial` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'identificador que le pertenece a cada uno de las editoriales que se registren',
  `descripcion` varchar(60) CHARACTER SET utf8 NOT NULL COMMENT 'describe los atributos generales de las editoriales',
  `sitio_web` varchar(60) CHARACTER SET utf8 NOT NULL COMMENT 'alguna referencia web de la editorial',
  `estatus` char(4) CHARACTER SET utf8 NOT NULL COMMENT 'saber el estado de la editorial en la bd, ya sea alta o baja'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='guarda los tipos de editoriales que se utilizan';

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`id_editorial`, `descripcion`, `sitio_web`, `estatus`) VALUES
('1234', 'paola', 'https://www.bing.com/?FORM=Z9FD1', 'baja'),
('56789', 'Paola', 'https://rule34.xxx/', 'Alta'),
('Avan', 'Editorial Avante', 'https://www.letrasdeencuentro.es/editorial/avante', 'Alta'),
('Cast', 'Editorial Castillo', 'https://www.letrasdeencuentro.es/editorial/castillo', 'Alta'),
('Luna', 'Editorial Luna de papel', 'https://www.letrasdeencuentro.es/editorial/luna-de-papel', 'Alta'),
('Nara', 'Editorial El Naranjo', 'https://www.letrasdeencuentro.es/editorial/el-naranjo', 'Alta'),
('Nos', 'Editorial Nostra', 'https://www.letrasdeencuentro.es/editorial/nostra', 'Alta'),
('Santi', 'Ediciones Santillana SA', 'https://www.letrasdeencuentro.es/editorial/santillana#mexico', 'Alta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licenciaturas`
--

CREATE TABLE `licenciaturas` (
  `id_carrera` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'identificador para los tipos de carreras',
  `descripcion` varchar(60) CHARACTER SET utf8mb4 NOT NULL COMMENT 'nombre del tipo de carrera ',
  `estatus` char(4) CHARACTER SET utf8 NOT NULL COMMENT 'es el estado en que se encuentra el registro (alta o baja)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='guarda tipos de carreras conforme a los usuarios';

--
-- Volcado de datos para la tabla `licenciaturas`
--

INSERT INTO `licenciaturas` (`id_carrera`, `descripcion`, `estatus`) VALUES
('3456789', 'yojan', 'baja'),
('ICO', 'Licenciatura Ingeniería en Computación', 'Alta'),
('LC', 'Licenciatura en Contaduria', 'Alta'),
('LCD', 'Licenciatura Comic Diana', 'baja'),
('LD', 'Licenciatura en Derecho', 'Alta'),
('LIA', 'Licenciatura en Informática Administrativa', 'Alta'),
('LPS', 'Licenciatura en Psicologia', 'Alta'),
('TR', 'Licenciatura en Turismo', 'Alta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id_material` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(60) CHARACTER SET utf8 NOT NULL,
  `id_categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_editorial` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `isbn_issn` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sitio_web` varchar(60) CHARACTER SET utf8 NOT NULL,
  `archivo` varchar(60) CHARACTER SET utf8 NOT NULL,
  `licencia` varchar(60) CHARACTER SET utf8 NOT NULL,
  `estatus` char(4) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id_material`, `titulo`, `id_categoria`, `id_editorial`, `isbn_issn`, `sitio_web`, `archivo`, `licencia`, `estatus`) VALUES
('1234', 'HERRAMIENTAS', 'AUD', 'Santi', '12345', 'https://youtube.com/', 'CITAS-BIBL.txt', 'sdtgsdfgsd', 'Alta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_externo`
--

CREATE TABLE `material_externo` (
  `id_externo` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'identificador del material externo',
  `titulo` varchar(60) COLLATE utf8_spanish_ci NOT NULL COMMENT 'nombre del material',
  `sitio_web` char(60) COLLATE utf8_spanish_ci NOT NULL COMMENT 'pagina web de donde se obtuvo el material',
  `estatus` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'estatus si esta alta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla para los materiales extra';

--
-- Volcado de datos para la tabla `material_externo`
--

INSERT INTO `material_externo` (`id_externo`, `titulo`, `sitio_web`, `estatus`) VALUES
('1234', 'crepusculo', 'https://www.bing.com/?FORM=Z9FD1', 'baja'),
('234567', 'Rule', 'https://rule34.xxx/', 'Alta'),
('345678', 'Raleyd', 'https://hentaila.com/', 'Alta'),
('lib', 'Libro rojo', 'libros.com', ''),
('lib2', 'Libro rojo', 'libros.com', ''),
('moto', 'Tegnologias', 'moto.com', ''),
('moto2', 'Tegnologias', 'moto.com', ''),
('moto4', 'Tegnologias', 'moto.com', ''),
('moto6', 'Tegnologias', 'moto.com', ''),
('mus', 'Video sobre Software', 'video.com', ''),
('ORACLE', 'Curso de oracle', 'https://oracle.com/', ''),
('sft', 'Vida del software', 'software.com', ''),
('tres', 'tres', 'https://youtube.com/', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id_tipo_usuario` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'clave para el tipo de privilegio de usuario',
  `descripcion` varchar(60) CHARACTER SET utf8 NOT NULL COMMENT 'eje de administrador',
  `estatus` char(4) CHARACTER SET utf8 NOT NULL COMMENT 'alta o baja'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='guarda tipos de usuarios conforme a sus privilegios';

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id_tipo_usuario`, `descripcion`, `estatus`) VALUES
('Alumno', 'Alumno', 'Alta'),
('Directivos', 'Directivo', 'Alta'),
('Docente', 'Docente', 'Alta'),
('Rorro', 'Maestro', 'baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'identificador de usuario',
  `nombre` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'nombre del usuario',
  `apellidos` varchar(40) CHARACTER SET utf8 NOT NULL COMMENT 'apellidos del usuario',
  `contra` varchar(60) CHARACTER SET utf8 NOT NULL COMMENT 'contraseña segura',
  `id_tipo_usuario` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'identificador de tipo usuario',
  `id_licenciatura` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'identificador de la carrera ',
  `estatus` char(4) CHARACTER SET utf8 NOT NULL COMMENT 'estado alta o baja'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `contra`, `id_tipo_usuario`, `id_licenciatura`, `estatus`) VALUES
('1670022', 'Dario', 'Briseño Romero', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Alumno', 'ICO', 'Alta'),
('1670064', 'juan', 'heran', '234567890', 'Alumno', 'LCD', 'Alta'),
('Alumno', 'yojan', 'Ortiz', 'aaaaaa', 'Rorro', '3456789', 'Alta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_material`,`id_autor`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id_editorial`),
  ADD KEY `INDEX` (`estatus`);

--
-- Indices de la tabla `licenciaturas`
--
ALTER TABLE `licenciaturas`
  ADD PRIMARY KEY (`id_carrera`),
  ADD KEY `index` (`estatus`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`),
  ADD UNIQUE KEY `fk_categoria` (`id_categoria`),
  ADD UNIQUE KEY `fk_editorial` (`id_editorial`),
  ADD KEY `index` (`estatus`);

--
-- Indices de la tabla `material_externo`
--
ALTER TABLE `material_externo`
  ADD PRIMARY KEY (`id_externo`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id_tipo_usuario`),
  ADD KEY `estatus` (`estatus`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `fk_idCarrera` (`id_licenciatura`),
  ADD KEY `INDEX` (`estatus`),
  ADD KEY `fk_tipoUsuario` (`id_tipo_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autores`
--
ALTER TABLE `autores`
  ADD CONSTRAINT `autores_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `material` (`id_material`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `material_ibfk_2` FOREIGN KEY (`id_editorial`) REFERENCES `editoriales` (`id_editorial`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipousuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_licenciatura`) REFERENCES `licenciaturas` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
