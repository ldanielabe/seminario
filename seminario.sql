-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2018 a las 09:29:10
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seminario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `idSemillero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `descripcion`, `idSemillero`) VALUES
(1, 'Conferencia 2018 edit', 15),
(3, 'Competencia 2018', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `idSemillero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `nombre`, `codigo`, `foto`, `idSemillero`) VALUES
(1, 'Juan R', '1150707', NULL, 16),
(2, 'Lucia Perez', '1150700', NULL, 15),
(3, 'Fapencio Ruiz', '1150707', NULL, 16),
(4, 'Carlos Sanchez', '1150807', NULL, 16),
(5, 'Yhuver', '1150707', NULL, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `idSemillero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `descripcion`, `idSemillero`) VALUES
(1, 'Mañana 20 de Junio del 2018 no se realizara reunión del semillero', 15),
(2, 'El Programa de Ingeniería de Sistemas, crea como estrategia, los Semilleros de investigación, como un espacio orientado al desarrollo de competencias académicas, investigativas y profesionales para que el estudiante pueda asumir con responsabilidad y actitud crítica las situaciones que se presentan en el campo de la tecnología y más propiamente de la ingeniería de sistemas, y que además sea capaz de transformar temas y convertirlos en proyectos de investigación.', 15),
(3, 'Es el lenguaje hipertexto en el que se basa la estructura basica de la vista de info de una pag', 15),
(4, 'Competencia 2018', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesors`
--

CREATE TABLE `profesors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idSemillero` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesors`
--

INSERT INTO `profesors` (`id`, `name`, `password`, `idSemillero`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Laura Espitia', '$2y$10$aUIf61zcyd6VZyhXiA6gUeEx.NaZUJ.aEcFwSti0mozNZCv0OW762', 15, 'laurae@ufps.edu.co', 'OR2RuPsBknauwobUjxOw4pWWUJi63EnbL9TqSXCrbORxBOleTSeDH2S6SrRM', '2018-06-20 09:29:59', '2018-06-20 09:29:59'),
(4, 'Nathalia Orozco', '$2y$10$5AWCyjSqM7vhkRsN63ltduFiu3S2FrMQ86C762ARfVM.qPaub3VEu', 16, 'natha@ufps.edu.co', 'ryMn8K20FeJLgXTTn9qLuwRnzc1dUty4AiNOUuesgImyIoQAGu68GVtDxP4k', '2018-06-20 09:58:47', '2018-06-20 09:58:47'),
(6, 'Dani', '$2y$10$90ZwPXxQTmMiThZZCL2ZUugostu5tmiAvrh1dG6XpjSKtyNvmlYH.', 16, 'lauradanielabe@ufps.edu.co', NULL, '2018-06-29 10:56:30', '2018-06-29 10:56:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `descripcion` text,
  `idSemillero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `descripcion`, `idSemillero`) VALUES
(1, 'Drone programado con C', 15),
(2, 'crear Competencia 2018', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semilleros`
--

CREATE TABLE `semilleros` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `objetivos` text NOT NULL,
  `lineasInvestigacion` text NOT NULL,
  `detalles` text NOT NULL,
  `juego` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `semilleros`
--

INSERT INTO `semilleros` (`id`, `nombre`, `mision`, `vision`, `objetivos`, `lineasInvestigacion`, `detalles`, `juego`, `created_at`, `updated_at`) VALUES
(15, 'SIDS movil', 'El Programa de Ingeniería de Sistemas, crea como estrategia, los Semilleros de investigación, como un espacio orientado al desarrollo de competencias académicas, investigativas y profesionales para que el estudiante pueda asumir con responsabilidad y actitud crítica las situaciones que se presentan en el campo de la tecnología y más propiamente de la ingeniería de sistemas, y que además sea capaz de transformar temas y convertirlos en proyectos de investigación.', 'El Programa de Ingeniería de Sistemas, crea como estrategia, los Semilleros de investigación, como un espacio orientado al desarrollo de competencias académicas, investigativas y profesionales para que el estudiante pueda asumir con responsabilidad y actitud crítica las situaciones que se presentan en el campo de la tecnología y más propiamente de la ingeniería de sistemas, y que además sea capaz de transformar temas y convertirlos en proyectos de investigación.', 'Ser capaces de transformar temas y convertirlos en proyectos de investigación.', 'Desarrollo Movil', 'Nos reunimos el dia jueves a las 5:00pm', '<iframe src=\'https://es.educaplay.com/es/recursoseducativos/3833275/html5/silux.htm\' width=\'795\' height=\'690\' frameborder=\'0\'></iframe><a href=\'https://es.educaplay.com/es/recursoseducativos/3833275/silux.htm\'>Silux</a>', '2018-06-20 08:52:29', '2018-06-29 10:39:48'),
(16, 'SIAWEB', 'El semillero de investigacion SIAWEB tiene como objetivo la formación en investigación para el desarrollo de Aplicaciones Web a través de la fundamentación teóricopractica en las diferentes áreas  del conocimiento.', 'El semillero de investigacion SIAWEB tiene como objetivo la formación en investigación para el desarrollo de Aplicaciones Web a través de la fundamentación teóricopractica en las diferentes áreas  del conocimiento.', 'El semillero de investigacion SIAWEB tiene como objetivo la formación en investigación para el desarrollo de Aplicaciones Web a través de la fundamentación teóricopractica en las diferentes áreas  del conocimiento.', 'Crear aplicaciones web', 'Director:  Ing. Nelson Beltrán Galvis, Pilar Rodriguez T.  Correo: nelsonbeltran@ufps.edu.co', '<iframe src=\'https://es.educaplay.com/es/recursoseducativos/1334967/html5/estructura_logica_computador.htm\' width=\'795\' height=\'690\' frameborder=\'0\'></iframe><a href=\'https://es.educaplay.com/es/recursoseducativos/1334967/estructura_logica_computador.htm\'>Estructura lógica computador</a>', '2018-06-20 09:58:03', '2018-06-20 09:58:03'),
(17, 'SILUX', 'Formar jóvenes investigadores, innovadores y\r\nemprendedores en el contexto de la Ingeniería de\r\nSistemas bajo una filosofía abierta (open):\r\na) Software Abierto FOSS\r\nb) Libertad y Colaboración\r\nc) Ciencia Abierta y Conocimiento Abierto\r\nd) Desarrollo y competitividad para la región', 'Para el año 2020 SILUX conseguirá amplio\r\nreconocimiento:\r\na) A nivel internacional por su liderazgo y evolución.\r\nb) A nivel nacional por su solidez y productividad.\r\nc) A nivel local por su impacto.\r\n? Tener mínimo un joven investigador sostenible\r\nanualmente.', 'Aprender más allá del aula de clase.\r\nFormación Integral\r\nInvestigador.\r\nEmprendedor.\r\nLíder.\r\nViajar, conocer, ser reconocido, “famoso”.\r\n … y mucho más …', 'Free / Open\r\nProgramación Competitiva', ' El semillero de investigación de software libre tiene como objetivo formar jóvenes investigadores, innovadores y emprendedores en el contexto de la Ingeniería de Sistemas bajo una filosofía abierta.', '<iframe src=\'https://es.educaplay.com/es/recursoseducativos/3833280/html5/siaweb.htm\' width=\'795\' height=\'690\' frameborder=\'0\'></iframe><a href=\'https://es.educaplay.com/es/recursoseducativos/3833280/siaweb.htm\'>VIRAL</a>', '2018-06-21 05:00:00', '2018-06-21 05:00:00'),
(18, 'movil edit', 'El Programa de Ingeniería de Sistemas, crea como estrategia, los Semilleros de investigación, como un espacio orientado al desarrollo de competencias académicas, investigativas y profesionales para que el estudiante pueda asumir con responsabilidad y actitud crítica las situaciones que se presentan en el campo de la tecnología y más propiamente de la ingeniería de sistemas, y que además sea capaz de transformar temas y convertirlos en proyectos de investigación.', 'El Programa de Ingeniería de Sistemas, crea como estrategia, los Semilleros de investigación, como un espacio orientado al desarrollo de competencias académicas, investigativas y profesionales para que el estudiante pueda asumir con responsabilidad y actitud crítica las situaciones que se presentan en el campo de la tecnología y más propiamente de la ingeniería de sistemas, y que además sea capaz de transformar temas y convertirlos en proyectos de investigación.', 'Ser capaces de transformar temas y convertirlos en proyectos de investigación.', 'Desarrollo Movil', 'Nos reunimos el dia jueves a las 4:00pm', '<iframe src=\"http://ingsistemas.ufps.edu.co/rsc/Presentaci%C3%B3n%20de%20semilleros/2018_03_15_SILUX_2.pdf#zoom=100&view=fitH\" frameborder=\"0\" width=\"655\" height=\"550\" marginheight=\"0\" marginwidth=\"0\" id=\"pdf\"   ></iframe>', '2018-06-29 12:01:42', '2018-06-29 12:02:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@ufps.edu.co', '$2y$10$X2sjJ86pjhDET5p69cw4hOq4gnXMa3J8Q0wnTM28wpMhB2VuzAkL.', 'Cjevs9WmToc0zcq2dI8yThY22bdGI7kUAYuaVtopSYM86mt9DVc9ZWy0ONsD', '2018-05-18 04:35:56', '2018-05-18 04:35:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSemillero` (`idSemillero`);

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSemillero` (`idSemillero`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSemillero` (`idSemillero`);

--
-- Indices de la tabla `profesors`
--
ALTER TABLE `profesors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSemillero` (`idSemillero`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSemillero` (`idSemillero`);

--
-- Indices de la tabla `semilleros`
--
ALTER TABLE `semilleros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `profesors`
--
ALTER TABLE `profesors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `semilleros`
--
ALTER TABLE `semilleros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`idSemillero`) REFERENCES `semilleros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD CONSTRAINT `miembros_ibfk_1` FOREIGN KEY (`idSemillero`) REFERENCES `semilleros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`idSemillero`) REFERENCES `semilleros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesors`
--
ALTER TABLE `profesors`
  ADD CONSTRAINT `profesors_ibfk_1` FOREIGN KEY (`idSemillero`) REFERENCES `semilleros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`idSemillero`) REFERENCES `semilleros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
