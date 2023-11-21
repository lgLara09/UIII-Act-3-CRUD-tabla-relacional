-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 07:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_libreriag2`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `productos_vendidos`
--

INSERT INTO `productos_vendidos` (`id`, `id_producto`, `cantidad`, `id_venta`) VALUES
(6, 5, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_libro`
--

CREATE TABLE `tbl_libro` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_libro` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `autor_libro` varchar(100) NOT NULL,
  `codigo_fabrica` varchar(255) NOT NULL,
  `editorial` varchar(255) NOT NULL,
  `fecha_venta_renta` date NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `existencia` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_libro`
--

INSERT INTO `tbl_libro` (`id`, `nombre_libro`, `genero`, `autor_libro`, `codigo_fabrica`, `editorial`, `fecha_venta_renta`, `precio`, `existencia`) VALUES
(2, 'Una oscura obsesion', 'Fantasia/Romance', 'Kenett oppel', '123', 'Editorial Garcia', '2022-09-09', 300.00, 5.00),
(4, 'Mujercitas', 'Romance', 'Jane Austin', '444', 'Editorial Azul', '2023-11-22', 250.00, 4.00),
(5, 'Orgullo y prejuicio', 'Romance', 'Kenet oppel', '2345', 'Alias editorial', '2023-11-01', 300.00, 6.00),
(6, 'Damian', 'Ficción', 'Kenet oppel', '111', 'Editorial Alba', '2022-12-10', 350.00, 7.00);

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `total`) VALUES
(6, '2023-11-20 07:06:02', 300.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indexes for table `tbl_libro`
--
ALTER TABLE `tbl_libro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_libro`
--
ALTER TABLE `tbl_libro`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `tbl_libro` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
