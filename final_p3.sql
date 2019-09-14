-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2019 a las 20:40:09
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `final_p3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificados`
--

CREATE TABLE `clasificados` (
  `idClasificado` int(11) NOT NULL,
  `foto_c` varchar(255) NOT NULL,
  `nombre_c` varchar(255) NOT NULL,
  `descripcion_c` varchar(255) NOT NULL,
  `body_c` varchar(10000) NOT NULL,
  `precio_c` decimal(10,0) NOT NULL,
  `usuario_c` int(11) NOT NULL,
  `estatus` varchar(100) NOT NULL,
  `fecha_agregado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasificados`
--

INSERT INTO `clasificados` (`idClasificado`, `foto_c`, `nombre_c`, `descripcion_c`, `body_c`, `precio_c`, `usuario_c`, `estatus`, `fecha_agregado`) VALUES
(12, '300px-Bmx_Wethepeople_Bold.jpg', 'Bicicleta BMX', 'Esta usada pero en buenas condiciones', '<ul>\r\n	<li>Aros nuevos</li>\r\n	<li>Recien pintada</li>\r\n	<li>frenos perfectos</li>\r\n</ul>\r\n', '500', 18, 'pendiente', '2019-08-06 11:44:20'),
(15, 'download.jpg', 'Mountain Bike', 'Bicicleta nueva de paquete', '<p>Si no estas interesado realmente en comprar el articulo por favor ahorrame el tiempo para invertirlo con quienes si querran comprarla</p>\r\n', '12000', 23, '', '2019-08-09 17:14:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clas_contactos`
--

CREATE TABLE `clas_contactos` (
  `Id_mensaje` int(11) NOT NULL,
  `nombre_mensaje` varchar(255) NOT NULL,
  `correo_mensaje` varchar(255) NOT NULL,
  `comentario_mensaje` varchar(255) NOT NULL,
  `clasificado_mensaje` int(11) NOT NULL,
  `fecha_mensaje` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clas_contactos`
--

INSERT INTO `clas_contactos` (`Id_mensaje`, `nombre_mensaje`, `correo_mensaje`, `comentario_mensaje`, `clasificado_mensaje`, `fecha_mensaje`) VALUES
(1, 'pilo`', 'hjjh@gmail.com', 'kalsdaskdlakdsjl', 12, '2019-08-09 16:28:52'),
(2, 'Lalo 44', 'la@lo.com', 'Klk mi loco, cuanto e el minimo?', 15, '2019-08-09 17:15:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idContacto` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idContacto`, `nombre`, `correo`, `telefono`, `comentario`, `fecha`) VALUES
(1, 'Jesus Manuel', 'jesusmanuel0312@gmail.com', '(809) 888-8888', 'Mi primer mensaje', '2019-08-09 09:30:38'),
(2, 'Jesus Manuel', 'jesusmanuel0312@gmail.com', '(809) 888-8888', 'Mi Segundo mensaje', '2019-08-09 09:31:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `h_inicio` varchar(255) NOT NULL,
  `h_fin` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `organizador_e` int(11) NOT NULL,
  `lat` decimal(10,6) NOT NULL,
  `lng` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `start`, `end`, `h_inicio`, `h_fin`, `description`, `organizador_e`, `lat`, `lng`) VALUES
(4, 'dlkfjslkdfjlsdjf', '2019-08-31', '2019-08-28', '', '', 'laskdjlasdkjlka', 4, '18.480016', '-69.963013'),
(5, 'dlkfjslkdfjlsdjf', '2019-08-31', '2019-09-01', '', '', 'Pio pio pio decian los pollitos', 3, '18.481888', '-69.943600'),
(7, 'Santo domingo running', '2019-08-23', '2019-08-30', '', '', 'sldkfj\r\n', 3, '18.472682', '-69.972989'),
(8, 'San isidro city ', '2019-08-02', '2019-08-02', '1:00 PM', '2:00 PM', 'La vida misma jmaster', 5, '18.496866', '-69.843521'),
(9, 'Salida tortuga', '2019-08-31', '2019-08-30', '3:00 PM', '4:00 PM', 'salkdjalskdjklsa', 5, '18.207176', '-71.117249');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `idGaleria` int(11) NOT NULL,
  `nombre_ga` varchar(255) NOT NULL,
  `descripcion_ga` varchar(255) NOT NULL,
  `foto1_ga` varchar(255) NOT NULL,
  `foto2_ga` varchar(255) NOT NULL,
  `foto3_ga` varchar(255) NOT NULL,
  `foto4_ga` varchar(255) NOT NULL,
  `foto5_ga` varchar(255) NOT NULL,
  `foto6_ga` varchar(255) NOT NULL,
  `foto7_ga` varchar(255) NOT NULL,
  `foto8_ga` varchar(255) NOT NULL,
  `creadaX` int(11) NOT NULL,
  `fecha_creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`idGaleria`, `nombre_ga`, `descripcion_ga`, `foto1_ga`, `foto2_ga`, `foto3_ga`, `foto4_ga`, `foto5_ga`, `foto6_ga`, `foto7_ga`, `foto8_ga`, `creadaX`, `fecha_creado`) VALUES
(5, 'Carreras rurales', '<p><em><span style=\"font-size:12px\">Foto 1</span></em></p>\r\n\r\n<p><span style=\"font-size:12px\">Competencias hasta mas no poder cabron</span></p>\r\n', 'https://i.ibb.co/KySLPd3/sdfs.jpg', 'https://i.ibb.co/0jwrdVS/sdf.jpg', 'https://i.ibb.co/MVX4sz2/download.jpg', 'https://i.ibb.co/27hPDMP/sdddd.jpg', 'https://i.ibb.co/SvL7VWf/downlsdfsfdoad.jpg', 'https://i.ibb.co/b6GQrRM/downlsdfsdfoad.jpg', 'https://i.ibb.co/MVX4sz2/download.jpg', 'https://i.ibb.co/JsfzFPy/downloafd.jpg', 14, '2019-08-06 05:18:31'),
(6, 'Ciclismo urbano una experiencia caotica', '<p>sjhdljhsadlahsldjhsadlj</p>\r\n', 'https://i.ibb.co/0jwrdVS/sdf.jpg', 'https://i.ibb.co/b6GQrRM/downlsdfsdfoad.jpg', 'https://i.ibb.co/SvL7VWf/downlsdfsfdoad.jpg', 'https://i.ibb.co/MVX4sz2/download.jpg', 'https://i.ibb.co/QQ3gW6w/downlosdfsad.jpg', 'https://i.ibb.co/27hPDMP/sdddd.jpg', 'https://i.ibb.co/JsfzFPy/downloafd.jpg', 'https://i.ibb.co/KySLPd3/sdfs.jpg', 14, '2019-08-08 05:23:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `idGrupo` int(11) NOT NULL,
  `nombre_g` varchar(255) NOT NULL,
  `logo_g` varchar(255) NOT NULL,
  `foto_g` varchar(255) NOT NULL,
  `ubicacion_g` varchar(255) NOT NULL,
  `descripcion_g` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`idGrupo`, `nombre_g`, `logo_g`, `foto_g`, `ubicacion_g`, `descripcion_g`) VALUES
(3, 'Dajabon', 'dajabon1.jpg', 'https://i.ibb.co/Y8gHQs9/002.jpg', 'El seibo', '<p>lilo y stich</p>\r\n'),
(4, 'PeraviaRacing', 'sdddd.jpg', 'https://i.ibb.co/XSTx84K/001.jpg', 'Peravia', '<p>lsadhlsdkh</p>\r\n'),
(5, 'Campo bello', '4659931165_3d8f5dd8de_b.jpg', 'https://i.ibb.co/mJZ7h9T/dajabon.jpg', 'Barahona', '<p>Barahona grupo</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(11) NOT NULL,
  `foto_n` varchar(255) NOT NULL,
  `nombre_n` varchar(255) NOT NULL,
  `descripcion_n` varchar(255) NOT NULL,
  `body_n` varchar(10000) NOT NULL,
  `escritoX` int(11) NOT NULL,
  `fecha_creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `foto_n`, `nombre_n`, `descripcion_n`, `body_n`, `escritoX`, `fecha_creado`) VALUES
(44, '300px-Bmx_Wethepeople_Bold1.jpg', 'Bicicletas BMX', 'BMX started in the early 1970s when children began racing their bicycles on dirt tracks in Southern California, drawing inspiration from the motocross superstars of the time. The size and availability of the Schwinn Sting-Ray made it the natural bike of c', '<h2 style=\"text-align:center\">History</h2>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\">BMX started in the early 1970s when children began racing their bicycles on dirt tracks in&nbsp;Southern California, drawing inspiration from the motocross superstars of the time. The size and availability of the&nbsp;Schwinn&nbsp;Sting-Ray made it the natural bike of choice, since they were easily customized for better handling and performance. BMX racing was a phenomenon by the mid-1970s. Children were racing standard road bikes off-road, around purpose-built tracks in&nbsp;California. The 1972 motorcycle racing documentary&nbsp;<em>On Any Sunday</em>&nbsp;is generally credited with inspiring the movement nationally in the US; its opening scene shows kids riding their Schwinn Stingrays off-road. By the middle of that decade the sport achieved critical mass, and manufacturers began creating bicycles designed especially for the sport.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\">George E. Esser founded the&nbsp;National Bicycle League&nbsp;as a non-profit bicycle motocross sanctioning organization in 1974. Before they set up the NBL, George and his wife, Mary, promoted motorcycle races with the AMA (American Motocross Association), and through their &quot;National Motorcycle League&quot;, or NML. Their two sons, Greg and Bryan, raced motorcycles, but also enjoyed riding and racing BMX with their friends. It was their sons&rsquo; interest, and the absence of an Eastern presence by the&nbsp;National Bicycle Association&nbsp;(NBA, at the time the only sanctioning body of BMX Racing), that prompted George to start the NBL in&nbsp;Florida.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\">By 1977 the&nbsp;American Bicycle Association&nbsp;(ABA) was organized as a national sanctioning body for the growing sport. In April 1981, the&nbsp;International BMX Federation&nbsp;was founded, and their first world championships were held in 1982. Since January 1993 BMX has been integrated into the Union Cyclist International (UCI).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\">BMX Freestyle (which, today, encompasses the Dirt, Vert, Park, Street and Flatland disciplines) was created by racers who enjoyed pushing the stylistic limits of what they could do on their bikes.&nbsp;Haro Bikes&nbsp;founder&nbsp;Bob Haro&nbsp;is popularly known as &quot;The Father of Freestyle&quot;.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\">BMX Freestyle is now one of the staple events at the annual Summer&nbsp;X Games&nbsp;Extreme Sports competition and the ETNIES backyard jam, held largely on both coasts of the United States. The popularity of the sport has increased due to its relative ease and availability of riding locations. At the games, Latvian M?ris &Scaron;trombergs and Anne-Caroline Chausson of France were crowned the first Olympic champions in Men&#39;s and Women&#39;s BMX Racing, respectively.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\">Some BMX riders go on to other cycling sports such as Australian Olympian&nbsp;Jared Graves, former &quot;golden child&quot;&nbsp;Eric Carter, and youth BMX racer&nbsp;Aaron Gwin. Conversely,&nbsp;Mountain Bike&nbsp;racers sometimes cross over to BMX Racing, such as 2008 Olympic Bronze Medallist&nbsp;Jill Kintner&nbsp;of the USA.</span></p>\r\n', 14, '2019-08-05 21:48:14'),
(45, 'sdf.jpg', 'Ciclismo Extremo en las antillas', 'El ciclismo BMX representa uno de los 47 deportes que estarán presentes en los Juegos Centroamericanos y del Caribe Barranquilla 2018.\r\n\r\n', '<p style=\"text-align:justify\">&nbsp;El ciclismo BMX representa uno de los 47 deportes que estar&aacute;n presentes en los Juegos Centroamericanos y del Caribe Barranquilla 2018.</p>\r\n\r\n<p style=\"text-align:justify\">Entre los resultados m&aacute;s destacados de M&eacute;xico, se encuentra la medalla de bronce obtenida por Stephanie Barrag&aacute;n en Mayag&uuml;ez 2010 y la presea del mismo metal que gan&oacute; Christopher Mireles en Veracruz 2014.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"/cms/uploads/image/file/391482/C26C3B40C8914429A52B6B28106CD56E.jpg\" src=\"https://www.gob.mx/cms/uploads/image/file/391482/C26C3B40C8914429A52B6B28106CD56E.jpg\" style=\"width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Esta modalidad de ciclismo extremo es una de las cuatro distintas que tiene este deporte y que estar&aacute;n presentes en la justa colombiana y que tambi&eacute;n est&aacute;n en los Juegos Ol&iacute;mpicos desde Beijing 2008.</p>\r\n\r\n<p style=\"text-align:justify\">La competencia consiste en ocho deportistas a quienes se les sortea una posici&oacute;n de salida en la parte m&aacute;s alta de una rampa. Los competidores ser&aacute;n soltados al mismo tiempo hacia una pista de arena arcillosa con subidas, bajadas, saltos y curvas peraltadas, la cual suele medir entre 350 y 500 metros.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">El objetivo es llegar a la meta lo m&aacute;s r&aacute;pido posible, antes que los dem&aacute;s contrincantes lo hagan. La competencia suele durar entre 25 y 45 segundos, dependiendo de la longitud del trazado.</p>\r\n\r\n<p style=\"text-align:justify\">Los competidores utilizan una bicicleta especial para BMX, as&iacute; como casco, guantes, coderas, pantal&oacute;n largo, camiseta de manga larga y calzado especial para su protecci&oacute;n.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"/cms/uploads/image/file/391481/2DCB8165112542B88CA38A97B325C4CB.jpg\" src=\"https://www.gob.mx/cms/uploads/image/file/391481/2DCB8165112542B88CA38A97B325C4CB.jpg\" style=\"width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Las actividades de BMX en los Juegos Centroamericanos y del Caribe 2018 ser&aacute;n en la pista Villa Carolina de Barranquilla, el 28 de julio, teniendo el mismo d&iacute;a todas las competencias y finales.</p>\r\n\r\n<p style=\"text-align:justify\">Contesta nuestra encuesta de satisfacci&oacute;n.&nbsp;</p>\r\n', 14, '2019-08-09 10:47:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `idSlider` int(11) NOT NULL,
  `slider_1` varchar(255) NOT NULL,
  `text_1` varchar(255) NOT NULL,
  `slider_2` varchar(255) NOT NULL,
  `text_2` varchar(255) NOT NULL,
  `slider_3` varchar(255) NOT NULL,
  `text_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`idSlider`, `slider_1`, `text_1`, `slider_2`, `text_2`, `slider_3`, `text_3`) VALUES
(43, 'https://i.ibb.co/SvL7VWf/downlsdfsfdoad.jpg', 'La comunidad de ciclistas mas grande de RD', 'https://i.ibb.co/b6GQrRM/downlsdfsdfoad.jpg', 'Somo mas porque deseamos mas', 'https://i.ibb.co/MVX4sz2/download.jpg', 'En familia se disfruta mas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_Naci` date NOT NULL,
  `grupo` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_U` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `cedula`, `correo`, `nombre`, `apellido`, `fecha_Naci`, `grupo`, `tipo`, `password`, `foto_U`) VALUES
(14, '402222', 'admin@gmail.com', 'Jesus', 'Manuel', '1995-12-03', 3, 43, '81dc9bdb52d04dc20036dbd8313ed055', 'noimage.jpg'),
(18, '4424244', 'user@gmail.com', 'User', 'no admin', '2019-08-03', 4, 12, 'ec6a6536ca304edf844d1d248a4f08dc', 'noimage.jpg'),
(19, '8888', 'mark@gmail.com', 'Mark', 'Zuker', '1787-06-04', 4, 12, '14e1b600b1fd579f47433b88e8d85291', 'noimage.jpg'),
(22, '1424125', 'user11@gmail.com', 'Usuario update', 'no admin 2', '2019-08-01', 4, 12, '81dc9bdb52d04dc20036dbd8313ed055', 'downloafd.jpg'),
(23, '411111111111', 'usuario@gmail.com', 'usuario', 'usuario', '2019-08-24', 4, 12, '81dc9bdb52d04dc20036dbd8313ed055', 'noimage.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificados`
--
ALTER TABLE `clasificados`
  ADD PRIMARY KEY (`idClasificado`),
  ADD KEY `usuario_c` (`usuario_c`);

--
-- Indices de la tabla `clas_contactos`
--
ALTER TABLE `clas_contactos`
  ADD PRIMARY KEY (`Id_mensaje`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idContacto`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organizador_e` (`organizador_e`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`idGaleria`) USING BTREE,
  ADD KEY `creadaX` (`creadaX`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`idGrupo`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`),
  ADD KEY `escritoX` (`escritoX`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`idSlider`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `grupo` (`grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificados`
--
ALTER TABLE `clasificados`
  MODIFY `idClasificado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `clas_contactos`
--
ALTER TABLE `clas_contactos`
  MODIFY `Id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `idGaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `idGrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `idSlider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clasificados`
--
ALTER TABLE `clasificados`
  ADD CONSTRAINT `clasificados_ibfk_1` FOREIGN KEY (`usuario_c`) REFERENCES `usuarios` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`organizador_e`) REFERENCES `grupos` (`idGrupo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD CONSTRAINT `galerias_ibfk_1` FOREIGN KEY (`creadaX`) REFERENCES `usuarios` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`escritoX`) REFERENCES `usuarios` (`idUsuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`grupo`) REFERENCES `grupos` (`idGrupo`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
