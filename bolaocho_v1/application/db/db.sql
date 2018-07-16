-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-07-2018 a las 23:28:50
-- Versión del servidor: 5.5.60-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bola8`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin_lastname` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `admin_email` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin_cellphone` varchar(11) NOT NULL DEFAULT '0',
  `admin_pwd` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_lastname`, `admin_email`, `admin_cellphone`, `admin_pwd`, `admin_status`) VALUES
(1, 'superadmin', 'emcode', 'root', '8116340488', '5d199404ba018ce5ba43d6df5fc0b004', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE IF NOT EXISTS `competencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `telefono` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Contenido`
--

CREATE TABLE IF NOT EXISTS `Contenido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pagina` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `background_img` text,
  `css` text,
  `text` text,
  `html` text NOT NULL,
  `extra` text NOT NULL,
  `extras` text NOT NULL,
  `extras2` text NOT NULL,
  `extras3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `Contenido`
--

INSERT INTO `Contenido` (`id`, `id_pagina`, `id_seccion`, `nombre`, `background_img`, `css`, `text`, `html`, `extra`, `extras`, `extras2`, `extras3`) VALUES
(5, 1, 1, 'img/fondos/Admin_eventos_seccion_701.png', 'asd', 'qwe', '', '', '', '', '', ''),
(6, 1, 2, 'img/fondos/Admin_inicio_seeccion_2.jpg', 'adadaasdasdasdasdasdasdsadsad', '', '', '', '', '', '0', ''),
(7, 1, 3, 'img/fondos/Admin_inicio_seeccion_3.jpg', '6546466465465', '', '', '', '', '', '0', ''),
(8, 1, 4, 'Lunes a Viernes', 'Sabados y Domingos', '10:00 am - 11:00 pm', '10:00 - 5:00 pm', '', '', '', '0', ''),
(9, 1, 5, 'Especiales de cumpleaños', '1 Botella (red label, Tradicional o Absolut)<br>\r\n2 hora de billar<br>\r\n2 tritones<br>\r\n1 kg de alitas<br>\r\n1 Combinado a elegir<br>\r\n8 shots de cortesía<br>', '$2,035', '', '', '', '', '0', ''),
(10, 1, 6, '2 X 1 EN CERVEZA EN UN HORARIO DE: <br> <span>LUNES A JUEVES DE 11:00 AM A 7:00 PM</span> Y <span>VIERNES Y SÁBADOS DE 11: AM A 5:00 PM</span>', '', '', '', '', '', '', '0', ''),
(11, 1, 7, 'Calidad', '                        Contamos con un area VIP con mesa francesa con paños simonis de carambola con medidas de 4.5 x 9.5 pies\r\n                      ', '', '', '', '', '', '0', ''),
(12, 1, 8, 'Profesionalismo', '                        Mesas oficiales con medidas de la confederación Mundial de Deportes de Billar (wCBS)s\r\n                      ', '', '', '', '', '', '0', ''),
(13, 1, 9, 'Competencias', 'El billar es un deporte de precisión, muchos son los competidores y aficionados, por eso en Bola 8 manejamos diferentes competencias ofreciendo un increíble entretenimiento ambiente deportivo', '', '', '', '', '', '0', ''),
(14, 1, 10, 'asd', 'Premiación', '', '', '', '', '', '0', ''),
(15, 1, 11, 'on', 'on', '', '', '', '', '', '0', ''),
(16, 1, 12, 'Ven y comprueba nuestros suculentos platillos', 'COMPRUEBA NUESTROS MENÚS COMPLETOS DE ALIMENTOS Y BEBIDAS', '', '', '', '', '', '0', ''),
(17, 1, 13, 'ORGANIZA TU EVENTO CON NOSOTROS', '', '', '', '', '', '', '0', ''),
(18, 2, 1, 'img/fondos/Admin_menu_seccion_1.jpg', '654', '564', '', '', '', '', '0', ''),
(19, 2, 2, 'LUNES A SÁBADO MEDIAS Y TARROS 2 X 1 HASTA LAS 6 PM', 'asd', '', '', '', '', '', '0', ''),
(20, 2, 3, 'ORGANIZA TU EVENTO CON NOSOTROS ', 'asd', '', '', '', '', '', '0', ''),
(21, 2, 4, 'Paquete <span class="text-warning">Bola 8</span>', '1 HORA DE BILLAR', '1 TRTITON', '1 SNACK A ELEGIR DE LA SECCIÓN ', '', '', '', 'Todo x solo', '$580'),
(22, 2, 5, 'Paquete <span class="text-warning">Bola 8</span>', '1 HORA DE BILLAR', '1 JARRA DE CERVEZA', '2 SNACK A ELEGIR DE LA SECCIÓN ', '', '', '', 'Todo x solo', '$369'),
(23, 2, 6, '<h3>Paquete<span class="text-danger">invites</span></h3>', '1 HORA DE BILLAR', '1 ORDEN DE ALITAS', '1 CUBETA REGULAR', '1 PAPAS ARTESANALES A ELEGIR', '', '', 'Todo x solo', '$580'),
(24, 2, 7, '<h3><i class="fa fa-birthday-cake" aria-hidden="true"></i> Paquete<span class="text-warning">festejes</span></h3>', '1 BOTELLA (RED LABEL, TRADICIONAL O ABSOLUT)', '2 hora de billar', '2 tritones', '1 kg de alitas', '1 COMBINADO A ELEGIR', '8 SHOTS DE CORTESÍA', 'Todo x solo', '$2,035'),
(25, 2, 8, 'img/fondos/Admin_menu_seccion_8.jpg', '321', '', '', '', '', '', '0', ''),
(26, 2, 9, 'img/fondos/Admin_menu_seccion_9.jpg', 'asasdasdSabados y Domingos', '', '', '', '', '', '0', ''),
(27, 2, 10, 'img/fondos/Admin_menu_seccion_10.jpg', 'bnm', 'bnm', 'bmn', 'bnm', '', '', '0', ''),
(28, 2, 11, 'ghj', '', '', '', '', '', '', '0', ''),
(29, 2, 12, 'img/fondos/Admin_menu_seccion_12.jpg', '321', '123', '123', '123', '', '', '0', ''),
(34, 3, 1, 'img/fondos/Admin_servicios_seccion_1.JPG', 'asd', 'qwe', '', '', '', '', '0', ''),
(35, 3, 2, 'LUNES A SÁBADO MEDIAS Y TARROS 2 X 1 HASTA LAS 6 PM', 'asd', '', '', '', '', '', '0', ''),
(36, 3, 3, 'asda', 'asd', '', '', '', '', '', '0', ''),
(41, 3, 4, 'osw', 'osw', 'img/fondos/Admin_servicios_seccion_354.jpg', 'img/fondos/Admin_servicios_seccion_434.jpg', '', '', '', '0', ''),
(42, 3, 5, '666', '666dsf', 'img/fondos/Admin_servicios_seccion_935.jpg', 'img/fondos/Admin_servicios_seccion_635.jpg', '', '', '', '0', ''),
(44, 3, 6, 'LUNES A SÁBADO MEDIAS Y TARROS 2 X 1 HASTA LAS 6 PM', 'wqe', 'img/fondos/Admin_servicios_seccion_486.jpg', 'img/fondos/Admin_servicios_seccion_706.jpg', '', '', '', '0', ''),
(45, 3, 7, 'iop', 'poi', 'img/fondos/Admin_servicios_seccion_127.jpg', 'img/fondos/Admin_servicios_seccion_927.jpg', '', '', '', '0', ''),
(46, 4, 1, 'img/fondos/Admin_eventos_seccion_601.jpeg', 'asdsss', 'qwes', '', '', '', '', '', ''),
(47, 4, 2, '', '', '', '', '', '', '', '', ''),
(48, 4, 3, 'img/fondos/Admin_eventos_seccion_273.jpg', '', '', '', '', '', '', '', ''),
(49, 4, 4, 'img/fondos/Admin_eventos_seccion_864.jpg', '', '', '', '', '', '', '', ''),
(50, 5, 2, 'img/fondos/Admin_billar_seccion_313.jpg', '', '', '', '', '', '', '', ''),
(51, 5, 1, 'img/fondos/Admin_billar_seccion_391.jpeg', 'asd', 'asd', '', '', '', '', '', ''),
(52, 6, 1, 'img/fondos/Admin_contacto_seccion_711.jpg', 'Contactanos', 'Dejanos tus comentarios, sugerencias. Estamos a tus ordenes', '', '', '', '', '', ''),
(54, 6, 2, 'Trabaja donde te gusta jugar', 'UNETE A NUESTRO EQUIPO', '', '', '', '', '', '', ''),
(55, 2, 99, '', '/menu_galeria_0.jpg,', '', '', '', '', '', '', ''),
(56, 5, 99, '', '/billar_galeria_2.jpg,/billar_galeria_1.png,', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE IF NOT EXISTS `correos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `telefono` text NOT NULL,
  `edad` text NOT NULL,
  `asunto` text NOT NULL,
  `genero` text NOT NULL,
  `mensaje` text NOT NULL,
  `adjunto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `correos`
--

INSERT INTO `correos` (`id`, `nombre`, `correo`, `telefono`, `edad`, `asunto`, `genero`, `mensaje`, `adjunto`) VALUES
(1, 'osw', 'osw.v@zsdjas.com', '87968', '52', 'asdasdadasd', 'asdasd', 'asdasd', 'asdasd\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `html_default`
--

CREATE TABLE IF NOT EXISTS `html_default` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `html` text NOT NULL,
  `css` text NOT NULL,
  `estatus` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `html_default`
--

INSERT INTO `html_default` (`id`, `nombre`, `html`, `css`, `estatus`) VALUES
(1, 'modal_add', '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\n  <div class="modal-dialog" role="document">\n    <div class="modal-content add">\n      <div class="modal-header">\n        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n      </div>\n      <div class="modal-body text-center">\n		  TEXT_1\n      </div>\n      <div class="modal-footer">\n      </div>\n    </div>\n  </div>\n</div>', '', 1),
(2, 'seccion_text_img', '    <section class="back-fixed NUMEROBACK">\n        <div class="container">\n            <div class="row">\n              <div class="col-md-6 col-sm-6">\n                <h2 class="Bebas-bold">TEXTTITULO</h2>\n                <p class="h3 Mukta-Malar">TEXTDESCRIPCION</p>\n              </div>\n              <div class="col-md-6 col-sm-6">\n                <img src="URLIMAGEN" alt="" class="img-responsive">\n              </div>\n            </div>\n        </div>\n    </section>', '', 1),
(3, 'seccion_img_text', '    <section class="back-fixed NUMEROBACK">\r\n        <div class="container">\r\n            <div class="row">\r\n              <div class="col-md-6 col-sm-6">\r\n                <img src="URLIMAGEN" alt="" class="img-responsive">\r\n              </div>\r\n              <div class="col-md-6 col-sm-6 text-right">\r\n                <h2 class="Bebas-bold">TEXTTITULO</h2>\r\n                <p class="h3 Mukta-Malar">TEXTDESCRIPCION</p>\r\n              </div>\r\n            </div>\r\n        </div>\r\n    </section>', '', 1),
(4, 'seccion_principal_pagsecundarias', '    <div class="carousel-inner" role="listbox">\n      <div class="item active">\n        <img src="URLIMAGEN" alt="...">\n        <div class="carousel-caption">\n          <h1 class="text-center Bebas-bold">TEXTTITULO</h1>\n          <h3 class="Bebas-bold text-warning">TEXTDESCRIPCION</h2>\n        </div>\n      </div>\n    </div>', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `pagina` text NOT NULL,
  `estatus` int(11) NOT NULL,
  `front` int(11) NOT NULL,
  PRIMARY KEY (`id_pagina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id_pagina`, `pagina`, `estatus`, `front`) VALUES
(1, 'Inicio', 1, 1),
(2, 'Nosotras', 1, 1),
(3, 'Servicios', 1, 1),
(4, 'Contacto', 1, 1),
(5, 'Maquillaje', 1, 1),
(6, 'Novias', 1, 1),
(7, 'Peinados', 1, 1),
(8, 'Pestañas', 1, 1),
(9, 'Microblading', 1, 1),
(10, 'Publicidad', 1, 0),
(11, 'Página en Mantenimiento', 0, 1),
(12, 'Paginas', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE IF NOT EXISTS `reservacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `telefono` text NOT NULL,
  `numero` int(11) NOT NULL,
  `hora` text NOT NULL,
  `fecha` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE IF NOT EXISTS `secciones` (
  `id_seccion` int(11) NOT NULL AUTO_INCREMENT,
  `id_pagina` int(11) NOT NULL,
  `seccion` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  `css` text NOT NULL,
  PRIMARY KEY (`id_seccion`),
  UNIQUE KEY `id_seccion` (`id_seccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id_seccion`, `id_pagina`, `seccion`, `estatus`, `css`) VALUES
(1, 1, 1, 1, ''),
(2, 1, 2, 1, ''),
(3, 1, 3, 1, ''),
(4, 1, 4, 1, ''),
(5, 2, 1, 1, ''),
(6, 2, 2, 1, ''),
(7, 2, 3, 1, ''),
(8, 2, 4, 1, ''),
(9, 3, 1, 1, ''),
(10, 4, 1, 1, ''),
(11, 5, 1, 1, ''),
(12, 5, 2, 1, ''),
(13, 5, 3, 1, ''),
(14, 6, 1, 1, ''),
(15, 6, 2, 1, ''),
(16, 6, 3, 1, ''),
(17, 6, 4, 1, ''),
(18, 7, 1, 1, ''),
(19, 7, 2, 1, ''),
(20, 7, 3, 1, ''),
(21, 8, 1, 1, ''),
(22, 8, 2, 1, ''),
(23, 8, 3, 1, ''),
(24, 9, 1, 1, ''),
(25, 9, 2, 1, ''),
(26, 9, 3, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_jugadores`
--

CREATE TABLE IF NOT EXISTS `tabla_jugadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lugar` text NOT NULL,
  `nombre` text NOT NULL,
  `edad` int(11) NOT NULL,
  `Jornadas` text NOT NULL,
  `JG` text NOT NULL,
  `JP` text NOT NULL,
  `jugados` text NOT NULL,
  `JG2` text NOT NULL,
  `JP2` text NOT NULL,
  `DF` text NOT NULL,
  `puntos` text NOT NULL,
  `estatus` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `tabla_jugadores`
--

INSERT INTO `tabla_jugadores` (`id`, `lugar`, `nombre`, `edad`, `Jornadas`, `JG`, `JP`, `jugados`, `JG2`, `JP2`, `DF`, `puntos`, `estatus`, `orden`) VALUES
(14, 'sada', 'sdasdasda', 564, 'sdasdasd', 'asdasd', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE IF NOT EXISTS `vacantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vacante` text NOT NULL,
  `descripcion` text NOT NULL,
  `horarios` text NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `vacantes`
--

INSERT INTO `vacantes` (`id`, `vacante`, `descripcion`, `horarios`, `estatus`) VALUES
(1, 'limpieza', 'limpiar', '8 pm', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
