-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Bulan Mei 2020 pada 15.13
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u295000851_tassadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `address` text NOT NULL,
  `subdistrict` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `zipcode` varchar(14) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `address`
--

INSERT INTO `address` (`id`, `userid`, `address`, `subdistrict`, `district`, `province`, `zipcode`, `created_at`) VALUES
(1, 3, 'JL. Al Barkah No.47 Kelurahan Manggarai Selatan', 'Tebet', 'Jakarta Selatan', 'DKI Jakarta', '12280', '2020-05-11 09:31:18'),
(2, 3, 'JL. Al Barkah No.47, kecamatan Tebet, kelurahan Manggarai Selatan', '', 'Jakarta Selatan', 'DKI Jakarta', '12250', '2020-05-14 11:19:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login_timestamp` datetime NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `login_timestamp`, `create_at`, `update_at`) VALUES
(1, 'admintassa', 'admin@tassa.id', 'beta-admin-tassa', '0000-00-00 00:00:00', '2020-04-18 00:00:00', '2020-04-27 20:25:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `orderid` varchar(30) NOT NULL,
  `productid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_cart`, `userid`, `orderid`, `productid`, `qty`, `color`, `created_at`, `update_at`) VALUES
(2, 3, '513173982', 10, 2, 'White', '2020-04-19 11:11:09', '2020-05-03 18:45:43'),
(3, 3, '513173982', 16, 1, 'Gray', '2020-04-19 12:03:23', '2020-05-03 18:45:46'),
(6, 3, '513173982', 15, 1, 'Gray', '2020-04-26 08:39:19', '2020-05-03 18:45:50'),
(12, 3, '', 15, 1, 'White', '2020-04-30 18:08:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `question` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updatea_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id`, `answer`, `question`, `created_at`, `updatea_at`) VALUES
(2, 'bagaiaman cara melakukan refund ?', 'caranya silahkan melihat petunjuk refund pada menu yg tertera', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `title` varchar(24) NOT NULL,
  `description` text NOT NULL,
  `create_at` datetime NOT NULL,
  `update_At` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `information`
--

INSERT INTO `information` (`id`, `type`, `title`, `description`, `create_at`, `update_At`) VALUES
(1, 'shipping', 'Shipping', 'shipping', '0000-00-00 00:00:00', '2020-04-22 18:20:25'),
(2, 'about', 'About Us', '<p>about us</p>', '0000-00-00 00:00:00', '2020-04-23 17:46:38'),
(3, 'how', 'How to Shop', 'how to shop', '0000-00-00 00:00:00', '2020-04-22 18:20:36'),
(7, 'payment', 'Payment', 'payment', '0000-00-00 00:00:00', '2020-04-22 18:20:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `optiongroups`
--

CREATE TABLE `optiongroups` (
  `OptionGroupID` int(11) NOT NULL,
  `OptionGroupName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `options`
--

CREATE TABLE `options` (
  `OptionID` int(11) NOT NULL,
  `OptionGroupID` int(11) DEFAULT NULL,
  `OptionName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdetails`
--

CREATE TABLE `orderdetails` (
  `DetailID` int(11) NOT NULL,
  `DetailOrderID` int(11) NOT NULL,
  `DetailProductID` int(11) NOT NULL,
  `DetailName` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `DetailQuantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderCode` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderUserID` int(11) NOT NULL,
  `OrderAmount` varchar(30) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress2` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderCity` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderSubDistrict` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderProvince` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderCountry` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderZip` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderPhone` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipping` float NOT NULL,
  `OrderEmail` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrderShipped` tinyint(1) NOT NULL DEFAULT '0',
  `OrderTrackingNumber` varchar(80) COLLATE latin1_german2_ci DEFAULT NULL,
  `OrderCourier` varchar(10) COLLATE latin1_german2_ci NOT NULL,
  `OrderCourierService` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderRates` varchar(10) COLLATE latin1_german2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderCode`, `OrderUserID`, `OrderAmount`, `OrderShipName`, `OrderShipAddress`, `OrderShipAddress2`, `OrderCity`, `OrderSubDistrict`, `OrderProvince`, `OrderCountry`, `OrderZip`, `OrderPhone`, `OrderShipping`, `OrderEmail`, `OrderDate`, `OrderShipped`, `OrderTrackingNumber`, `OrderCourier`, `OrderCourierService`, `OrderRates`) VALUES
(5, '412350606', 3, '', 'tes', 'JL APA Saja', '', 'Jakarta Sealtan', 'Tebet', 'Jakarta', '', '18234', '089640490161', 0, '', '2020-05-08 08:49:22', 0, NULL, '', '', ''),
(8, '1128675365', 3, '', 'fajar', 'JL. Al Barkah No.47 Kelurahan Manggarai Selatan', '', 'Jakarta Selatan', 'Tebet', 'DKI Jakarta', '', '12280', '089640490161', 0, '', '2020-05-11 08:56:06', 0, NULL, 'pos', 'Q9%20Barang', '34000'),
(4, '513173982', 3, '630000', 'alma', 'JL. Sawo 4', '', 'Jakarta Selatan', 'tes', 'tes', '', '12540', '089', 0, '', '2020-04-27 04:26:53', 0, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `productcategories`
--

CREATE TABLE `productcategories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) COLLATE latin1_german2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data untuk tabel `productcategories`
--

INSERT INTO `productcategories` (`CategoryID`, `CategoryName`) VALUES
(7, 'Moeslim Dress'),
(9, 'Kaftan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `productimages`
--

CREATE TABLE `productimages` (
  `id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `productimages`
--

INSERT INTO `productimages` (`id`, `productID`, `picture`, `color`, `created_at`) VALUES
(1, 10, 'file-1587197533.png', 'White', '0000-00-00 00:00:00'),
(2, 10, 'file-1587207391.png', 'Gray', '0000-00-00 00:00:00'),
(3, 10, 'file-1587207421.png', 'White', '0000-00-00 00:00:00'),
(4, 10, 'file-1587207427.png', 'Gray', '0000-00-00 00:00:00'),
(5, 16, 'file-1587214162.png', 'White', '0000-00-00 00:00:00'),
(8, 15, 'file-1587380037.png', 'Gray', '0000-00-00 00:00:00'),
(9, 11, 'file-1587787330.png', 'Gray', '0000-00-00 00:00:00'),
(10, 11, 'file-1587787399.png', 'white', '0000-00-00 00:00:00'),
(12, 18, 'file-1587872923.png', 'white', '0000-00-00 00:00:00'),
(13, 18, 'file-1587872935.png', 'Gray', '0000-00-00 00:00:00'),
(14, 18, 'file-1587872944.png', 'white', '0000-00-00 00:00:00'),
(15, 18, 'file-1587872953.png', 'Gray', '0000-00-00 00:00:00'),
(16, 18, 'file-1587872970.png', 'white', '0000-00-00 00:00:00'),
(17, 18, 'file-1587872987.png', 'Gray', '0000-00-00 00:00:00'),
(18, 18, 'file-1587873005.png', 'white', '0000-00-00 00:00:00'),
(19, 18, 'file-1587873016.png', 'Gray', '0000-00-00 00:00:00'),
(20, 16, 'file-1587873080.png', 'Gray', '0000-00-00 00:00:00'),
(21, 16, 'file-1587873088.png', 'white', '0000-00-00 00:00:00'),
(22, 16, 'file-1587873100.png', 'Gray', '0000-00-00 00:00:00'),
(23, 14, 'file-1587873131.png', 'Gray', '0000-00-00 00:00:00'),
(24, 14, 'file-1587873139.png', 'white', '0000-00-00 00:00:00'),
(25, 13, 'file-1587873163.png', 'white', '0000-00-00 00:00:00'),
(26, 13, 'file-1587873171.png', 'Gray', '0000-00-00 00:00:00'),
(27, 12, 'file-1587873191.png', 'white', '0000-00-00 00:00:00'),
(28, 12, 'file-1587873199.png', 'Gray', '0000-00-00 00:00:00'),
(29, 15, 'file-1587882994.png', 'white', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `productoptions`
--

CREATE TABLE `productoptions` (
  `ProductOptionID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED NOT NULL,
  `OptionID` int(10) UNSIGNED NOT NULL,
  `OptionPriceIncrement` double DEFAULT NULL,
  `OptionGroupID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductCartDesc` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `ProductWeight` float NOT NULL,
  `ProductThumb` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductImage` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductCategoryID` int(11) DEFAULT NULL,
  `ProductUpdateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductStock` float DEFAULT NULL,
  `ProductLive` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductCartDesc`, `ProductWeight`, `ProductThumb`, `ProductImage`, `ProductCategoryID`, `ProductUpdateDate`, `ProductStock`, `ProductLive`, `created_at`, `modified_at`) VALUES
(10, 'Product 1', 140000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h', 0, '', 'file-1585687834.png', 7, '2020-03-31 20:40:43', 25, 0, '2020-03-31 20:40:43', '0000-00-00 00:00:00'),
(11, 'Product 2', 150000, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content her', 0, '', 'file-1585688340.png', 9, '2020-03-31 20:59:00', 100, 0, '2020-03-31 20:59:00', '0000-00-00 00:00:00'),
(12, 'Product 3', 150000, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content her', 0, '', 'file-1585688373.png', 7, '2020-03-31 20:59:33', 50, 0, '2020-03-31 20:59:33', '0000-00-00 00:00:00'),
(13, 'Product 4', 180000, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content her', 0, '', 'file-1585688408.png', 9, '2020-03-31 21:00:08', 49, 0, '2020-03-31 21:00:08', '0000-00-00 00:00:00'),
(14, 'Product 5', 190000, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content her', 0, '', 'file-1585688439.png', 7, '2020-03-31 21:00:39', 90, 0, '2020-03-31 21:00:39', '0000-00-00 00:00:00'),
(15, 'Product 6', 150000, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content her', 0, '', 'file-1585688465.png', 9, '2020-03-31 21:01:05', 100, 0, '2020-03-31 21:01:05', '0000-00-00 00:00:00'),
(16, 'Product 7', 200000, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content her', 2.2, '', 'file-1585688497.png', 7, '2020-03-31 21:01:37', 100, 0, '2020-03-31 21:01:37', '0000-00-00 00:00:00'),
(18, 'Product Dummy', 234000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, '', 'file-1587269199.png', 9, '2020-04-19 04:06:39', 50, 0, '2020-04-19 04:06:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `office_name` varchar(30) NOT NULL,
  `office_address` text NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `url_web` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `office_name`, `office_address`, `telepon`, `url_web`, `created_at`) VALUES
(1, 'Tassa.id', 'JL. Al Barkah No.45', '0821921001112', 'www.tassa.id', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `picture_slider` varchar(50) NOT NULL,
  `link_slider` varchar(50) NOT NULL,
  `type_picture` varchar(30) NOT NULL,
  `quote_picture` text NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `picture_slider`, `link_slider`, `type_picture`, `quote_picture`, `created_at`, `update_at`) VALUES
(3, 'file-1587380543.png', '', 'slider', '', '2020-04-20 13:02:23', '2020-04-21 10:44:15'),
(4, 'file-1587380582.png', '', 'slider', '', '2020-04-20 13:03:02', '2020-04-21 10:44:18'),
(5, 'file-1587380590.png', '', 'slider', '', '2020-04-20 13:03:10', '2020-04-21 10:44:21'),
(6, 'file-1587442494.png', '', 'quote', 'Dengan Bangga menghadirkan pakaian muslim terbaru melalui beragam seni budaya muslim global, dengan memahami setiap tantangan sehari-hari yang dihadapkan pada muslimah global, setiap produk dari tassa di rancang untuk membuat setiap muslimah tampil dengan busana sederhana yang memberikan kesan kelas atas dan tetap praktis digunakan, dengan begitu tassa akan menemani keseharian para muslimah global agar tetap tampil stylish di padatnya aktivitas para muslimah global.', '2020-04-21 06:14:54', '0000-00-00 00:00:00'),
(7, 'file-1587443885.jpg', '', 'footer', '', '2020-04-21 06:38:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserEmail` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPassword` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFullName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCity` varchar(90) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserProvince` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `UserZip` varchar(12) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPhoto` varchar(30) COLLATE latin1_german2_ci NOT NULL,
  `UserEmailVerified` tinyint(1) DEFAULT '0',
  `UserRegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserVerificationCode` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserIP` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPhone` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFax` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress` varchar(100) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress2` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`UserID`, `UserEmail`, `UserPassword`, `UserName`, `UserFullName`, `UserCity`, `UserProvince`, `UserZip`, `UserPhoto`, `UserEmailVerified`, `UserRegistrationDate`, `UserVerificationCode`, `UserIP`, `UserPhone`, `UserFax`, `UserAddress`, `UserAddress2`) VALUES
(3, 'anisa@gmail.com', '$2y$10$VXqgJnTDmnblDYwqDELa2OvpHM7g/2yIHNwfxc.GViX2qCxq0QT3W', 'anisa', 'Anisa', 'Jakarta Selatan', 'DKI Jakarta', '12860', 'file-1587848582.jpg', 0, '2020-04-18 18:12:05', NULL, NULL, '089640490161', NULL, 'JL. Al Barkah No.47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `optiongroups`
--
ALTER TABLE `optiongroups`
  ADD PRIMARY KEY (`OptionGroupID`);

--
-- Indeks untuk tabel `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`OptionID`);

--
-- Indeks untuk tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`DetailID`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indeks untuk tabel `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indeks untuk tabel `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `productoptions`
--
ALTER TABLE `productoptions`
  ADD PRIMARY KEY (`ProductOptionID`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `optiongroups`
--
ALTER TABLE `optiongroups`
  MODIFY `OptionGroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `options`
--
ALTER TABLE `options`
  MODIFY `OptionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `productimages`
--
ALTER TABLE `productimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `productoptions`
--
ALTER TABLE `productoptions`
  MODIFY `ProductOptionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
