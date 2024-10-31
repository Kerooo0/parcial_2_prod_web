-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2024 a las 14:08:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stream`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `director` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  `actor_principal` varchar(50) NOT NULL,
  `sinopsis` varchar(300) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `director`, `fecha`, `actor_principal`,`sinopsis`,`categoria_id`, `imagen`) VALUES
(1, 'SAW II', 'Darren Lynn Bousman', '2005-10-28', "Donnie Wahlberg",
'Un detective y su equipo deben rescatar a ocho personas atrapadas en una fábrica por el retorcido asesino en serie conocido como Jigsaw.', 1 ,'Saw.jpg'), 
(2, 'El Padrino', 'Francis Ford Coppola', '1972-03-24', "Marlon Brando",
'La historia de la familia Corleone, un poderoso clan mafioso en Nueva York.', 2 ,'elpadrino.jpeg'), 
(3, 'Inception', 'Christopher Nolan', '2010-07-16', "Leonardo DiCaprio",
'Un ladrón que roba secretos en los sueños es dado una tarea casi imposible: implantar una idea en la mente de un objetivo.', 3 ,'inception.jpg'), 
(4, 'La La Land', 'Damien Chazelle', '2016-12-09', "Ryan Gosling",
'Un músico y una actriz persiguen sus sueños en Los Ángeles, enfrentando los desafíos del amor y la ambición.', 4 ,'lalaland.jpeg'), 
(5, 'Parasite', 'Bong Joon-ho', '2019-05-30', "Donnie Wahlberg",
'Una familia pobre se infiltra en la vida de una familia rica, desatando una serie de eventos inesperados.', 5 ,'parasite.jpeg'), 
(6, 'Gladiador', 'Ridley Scott', '2000-05-05', "Russell Crowe",
'Un general romano es traicionado y se convierte en gladiador, buscando venganza contra el emperador que destruyó su vida.', 6 ,'gladiador.jpg'), 
(7, 'Forrest Gump', 'Robert Zemeckis', '1994-07-06', "Tom Hanks",
'La vida extraordinaria de un hombre con un coeficiente intelectual bajo que, a pesar de sus limitaciones, vive momentos clave de la historia de EE.UU.', 2 ,'forrestgump.jpg'), 
(8, 'Matrix', 'Lana y Lilly Wachowski', '1999-03-31', "Keanu Reeves",
'Un programador descubre que la realidad es una simulación y se une a un grupo de rebeldes para liberarse.', 3 ,'matrix.jpg'), 
(9, 'Coco', 'Lee Unkrich', '2017-11-22', "Anthony Gonzalez",
'Un joven aspira a ser músico y, tras un accidente, se encuentra en la Tierra de los Muertos, donde busca su legado familiar.', 7 ,'coco.jpeg'), 
(10, 'Titanic', 'James Cameron', '1997-12-19', "Leonardo DiCaprio",
'La historia de amor entre Jack y Rose a bordo del fatídico viaje del Titanic.', 8 ,'titanic.jpeg'), 
(11, 'Mad Max: Fury Road', 'George Miller', '2015-05-15', "Tom Hardy",
'En un mundo postapocalíptico, un grupo de rebeldes lucha por la libertad mientras escapan de un tirano.', 6 ,'madmax.jpeg'), 
(12, 'El Resplandor', 'Stanley Kubrick', '1980-05-23', "Jack Nicholson",
'Un escritor se convierte en el cuidador de un hotel aislado, donde su locura y la influencia sobrenatural lo llevan a la violencia.', 1 ,'elresplandor.jpg'), 
(13, 'El Club de la Pelea', 'David Fincher', '1999-10-15', "Edward Norton",
'Un hombre desencantado inicia un club clandestino de lucha, cuestionando su identidad y el consumismo moderno.', 2 ,'elclubdelapelea.jpeg'), 
(14, 'Her', 'Spike Jonze', '2013-12-18', "Joaquin Phoenix",
'Un hombre desarrolla una relación romántica con un sistema operativo de inteligencia artificial.', 8 ,'her.jpg'), 
(15, 'La Forma del Agua', 'Guillermo del Toro', '2017-12-01', "Sally Hawkins",
'Una mujer muda se enamora de una criatura acuática en un laboratorio gubernamental durante la Guerra Fría.', 1 ,'laformadelagua.jpg'), 
(16, 'El Gran Hotel Budapest', 'Wes Anderson', '2014-03-28', "Ralph Fiennes",
'Las aventuras de un conserje y su protegido en un famoso hotel europeo entre las dos guerras mundiales.', 10 ,'elgranhotel.jpeg');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL ,
  `nombre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Terror'),
(2, 'Drama'),
(3, 'Ciencia Ficción'),
(4, 'Musical'),
(5, 'Thriller'),
(6, 'Acción'),
(7, 'Animación'),
(8, 'Romance'),
(9, 'Fantasía'),
(10, 'Comedia');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;