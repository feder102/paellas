-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-08-2016 a las 18:56:17
-- Versión del servidor: 5.5.50-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `paellaandres`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `description`, `created`, `modified`, `deleted`) VALUES
(1, 'Carne', '2016-07-09 00:04:30', '2016-07-09 00:04:34', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foods`
--

CREATE TABLE IF NOT EXISTS `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `price` float NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `foods`
--

INSERT INTO `foods` (`id`, `name`, `stock`, `price`, `deleted`, `created`, `modified`, `category_id`) VALUES
(1, 'Milanesa', 1, 20.3, 0, '2016-07-09 00:05:12', '2016-07-09 00:05:12', 1),
(2, 'Milanesa de pollo', 1, 21.3, 0, '2016-07-09 00:08:13', '2016-07-09 00:08:13', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foods_orders`
--

CREATE TABLE IF NOT EXISTS `foods_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `foods_orders`
--

INSERT INTO `foods_orders` (`id`, `food_id`, `order_id`, `amount`, `created`, `modified`, `deleted`) VALUES
(1, 1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_id` int(11) NOT NULL,
  `waiter_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `table_id`, `waiter_id`, `created`, `modified`, `deleted`) VALUES
(1, 1, 1, '2016-08-11 18:55:23', '2016-08-11 18:55:23', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` tinyint(3) NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tables`
--

INSERT INTO `tables` (`id`, `state`, `description`, `deleted`, `created`, `modified`) VALUES
(1, 0, 'Mesa del fondo, al lado de la pared', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `modified`, `created`, `deleted`) VALUES
(4, 'admin', '1234', '', '2016-07-16 00:45:17', '2016-07-16 00:45:17', 0),
(6, 'marce', '$2y$10$8g3kpQyqNXKLuInMj1nTQenaD2kWFva7QS/2Br9ChN8gAKXPnYgii', 'admin', '2016-07-31 02:29:20', '2016-07-31 02:29:20', 0),
(7, 'fede', '$2y$10$ftJwDPnXRdGM.8RLfylXOuCR3bVaQy34uwRR5qWElq9SFAG2qnjNC', 'admin', '2016-07-31 02:40:07', '2016-07-31 02:40:07', 0),
(8, 'user', '$2y$10$iWiKnBdJ8MIWBXZ7t1uUWO/jmt/AYW3HQpxphZ0.E2PM25pPLoGCW', 'author', '2016-07-31 14:13:00', '2016-07-31 14:13:00', 0),
(9, 'dede', '$2a$10$gQvCz8IImXBowWjkbuATCOjxrfvU54zjZcsNWuGaeIvLpxc2437zS', 'admin', '2016-08-06 22:53:41', '2016-08-06 22:53:41', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `waiters`
--

CREATE TABLE IF NOT EXISTS `waiters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(15) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`dni`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `waiters`
--

INSERT INTO `waiters` (`id`, `name`, `dni`, `created`, `deleted`, `modified`) VALUES
(1, 'chupapig', 1234, '2016-07-19 00:18:50', 0, '2016-07-19 00:18:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
