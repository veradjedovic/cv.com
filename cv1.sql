-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2015 at 08:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `administratori`
--

CREATE TABLE IF NOT EXISTS `administratori` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administratori`
--

INSERT INTO `administratori` (`admin_id`, `username`, `password`, `status`) VALUES
(1, 'vera', 'ebb45b758b9d6f6f2c732c306fdeba24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `godine`
--

CREATE TABLE IF NOT EXISTS `godine` (
  `godina_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`godina_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=62 ;

--
-- Dumping data for table `godine`
--

INSERT INTO `godine` (`godina_id`, `naziv`, `status`) VALUES
(1, '1940', '1'),
(2, '1941', '1'),
(3, '1942', '1'),
(4, '1943', '1'),
(5, '1944', '1'),
(6, '1945', '1'),
(7, '1946', '1'),
(8, '1947', '1'),
(9, '1948', '1'),
(10, '1949', '1'),
(11, '1950', '1'),
(12, '1951', '1'),
(13, '1952', '1'),
(14, '1953', '1'),
(15, '1954', '1'),
(16, '1955', '1'),
(17, '1956', '1'),
(18, '1957', '1'),
(19, '1958', '1'),
(20, '1959', '1'),
(21, '1960', '1'),
(22, '1961', '1'),
(23, '1962', '1'),
(24, '1963', '1'),
(25, '1964', '1'),
(26, '1965', '1'),
(27, '1966', '1'),
(28, '1967', '1'),
(29, '1968', '1'),
(30, '1969', '1'),
(31, '1970', '1'),
(32, '1971', '1'),
(33, '1972', '1'),
(34, '1973', '1'),
(35, '1974', '1'),
(36, '1975', '1'),
(37, '1976', '1'),
(38, '1977', '1'),
(39, '1978', '1'),
(40, '1979', '1'),
(41, '1980', '1'),
(42, '1981', '1'),
(43, '1982', '1'),
(44, '1983', '1'),
(45, '1984', '1'),
(46, '1985', '1'),
(47, '1986', '1'),
(48, '1987', '1'),
(49, '1988', '1'),
(50, '1989', '1'),
(51, '1990', '1'),
(52, '1991', '1'),
(53, '1992', '1'),
(54, '1993', '1'),
(55, '1994', '1'),
(56, '1995', '1'),
(57, '1996', '1'),
(58, '1997', '1'),
(59, '1998', '1'),
(60, '1999', '1'),
(61, '2000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `korisnik_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `godina_rodjenja` int(10) unsigned NOT NULL,
  `adresa_stanovanja` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `opstina` int(10) unsigned NOT NULL,
  `telefon` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vozacka_dozvola` int(10) unsigned NOT NULL,
  `vrsta_angazmana` int(10) unsigned NOT NULL,
  `radno_vreme` int(10) unsigned NOT NULL,
  `strucna_sprema` int(10) unsigned NOT NULL,
  `sektor` int(10) unsigned NOT NULL,
  `datum_prijave` datetime NOT NULL,
  `dokument` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`korisnik_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`korisnik_id`, `ime`, `prezime`, `godina_rodjenja`, `adresa_stanovanja`, `opstina`, `telefon`, `email`, `vozacka_dozvola`, `vrsta_angazmana`, `radno_vreme`, `strucna_sprema`, `sektor`, `datum_prijave`, `dokument`, `status`) VALUES
(1, 'Vladimir', 'Djedovic', 45, 'Brehtova 3', 16, '0632182155', 'vladimir.belgrade@hotmail.com', 1, 1, 1, 12, 9, '2015-08-25 19:24:52', 'Vladimir', '1'),
(2, 'Vladimir', 'Mitrovic', 45, 'Brehtova 3', 16, '0632182155', 'vladimir.bbc@hotmail.com', 1, 1, 1, 12, 9, '2015-08-25 19:29:48', 'Vladimir', '2'),
(3, 'Mladen', 'Petrovic', 48, 'Brehtova 1', 16, '063217775', 'mladen.jahu@yahoo.com', 1, 1, 1, 13, 10, '2015-08-25 19:32:38', 'Mladen', '1'),
(4, 'Nevenka', 'Milovanovic', 19, 'Slobodana Perovica 17', 9, '064331565', 'nevenka.belgrade@yahoo.com', 2, 2, 2, 9, 10, '2015-08-25 19:34:58', 'Nevenka', '1'),
(5, 'Dejan', 'Jovanovic', 47, 'Zivadina Trifunovica 19', 135, '064331569', 'deja.belgrade@yahoo.com', 1, 1, 1, 9, 28, '2015-08-25 19:37:09', 'Dejan', '1'),
(24, 'Vladimir', 'Milic', 43, 'Mihajla Petrovica', 12, '0112102100', 'milic@222.com', 1, 2, 3, 9, 25, '2015-08-28 20:54:01', '8fa4678ec067c3b93674a5cedad59ad6Vladimir', '1'),
(7, 'Vera', 'Jovanovic Djedovic', 44, 'Brehtova 3', 16, '0621527595', 'verajovanovic.bg@yahoo.com', 1, 1, 1, 12, 13, '2015-08-25 19:40:51', 'Vera', '1'),
(8, 'Vera', 'Jovanović Đedović', 44, 'Brehtova 3', 16, '0621528595', 'veradjedovic@gmail.com', 1, 10, 3, 12, 13, '2015-08-26 10:19:30', 'Vera', '2'),
(9, 'Mirjana', 'Jovanović', 13, 'Ž.Trifunovića 19', 135, '037444555', 'mirjana@gmail.com', 2, 9, 2, 12, 1, '2015-08-26 11:55:30', 'Mirjana', '1'),
(10, 'Živadin', 'Jovanović', 13, 'Ž.Trifunovića 19', 135, '037444555', 'žika@gmail.com', 2, 1, 1, 12, 7, '2015-08-26 11:56:30', 'Živadin', '1'),
(18, 'Žika', 'Jovanovic', 2, 'Ž.Trifunovića 19', 8, '0621528595', 'zivadin@gmail.com', 1, 2, 2, 11, 29, '2015-08-26 20:43:53', '87ae058357ecc499a43e254e03ac3899Žika', '1'),
(19, 'Zika', 'Jovanovic', 2, 'Ž.Trifunovića 19', 8, '0621528595', 'zivadin@gmail.com', 1, 2, 2, 11, 29, '2015-08-26 20:45:48', '249af79473aae5a413b30a7b2ad79118Zika', '1'),
(20, 'Tamara', 'Veselinovic', 42, 'Miodraga Cajetinca Cajke', 84, '0625559999', 'tamara@gmail.com', 2, 1, 2, 8, 15, '2015-08-27 00:59:45', '867c2879d5ff248fbf007ef4f527fd7bTamara', '1'),
(21, 'Milan', 'Manojlovic', 19, 'Z.Apostolovica 19', 75, '062555888', 'milan@m.com', 2, 1, 2, 12, 10, '2015-08-28 13:47:06', '828d02cbae66a48be04e48f393a3269eMilan', '1'),
(17, 'Vera', 'Jovanovic', 2, 'Brehtova 3', 8, '0621528595', 'veradjedovic@gmail.com', 1, 2, 2, 9, 12, '2015-08-26 20:40:46', '8548d44389483155d5f41aa6d7328212Vera', '1'),
(22, 'Dragan', 'Miletic', 35, 'Novosadska 4', 11, '062555888', 'dragan@gmail.com', 1, 2, 1, 10, 15, '2015-08-28 13:50:17', '8b798c6ea873f9a09917df19e15359adDragan', '2'),
(25, 'Vladimir', 'Milic', 43, 'Mihajla Petrovica', 12, '0112102100', 'milic@222.com', 1, 2, 3, 9, 25, '2015-08-28 20:54:36', '008da4333205f7fad7c9f03d31ef5593Vladimir', '1'),
(26, 'Vladimir', 'Milic', 43, 'Mihajla Petrovica', 12, '0112102100', 'milic@222.com', 1, 2, 3, 9, 25, '2015-08-28 20:55:56', '459488a6604f0a4848c8ef53346b33faVladimir', '1'),
(27, 'Jelena', 'Mirkovic', 43, 'Vojvode Supljikca 4', 13, '065888999', 'jelena@hotmail.com', 1, 10, 2, 9, 8, '2015-08-30 20:48:29', 'f1642c160bea4964eb38846693091d4bJelena', '1'),
(28, 'Milica', 'Milovanovic', 18, 'Stubalski boraca 6', 4, '065444777', 'milica@m.com', 2, 10, 1, 8, 13, '2015-08-30 20:57:27', 'd7e3fab90cfb19e5f04bd8fab2277478Milica', '2'),
(29, 'Milos', 'Milosevic', 53, 'Novosadska 3', 5, '065444555', 'milos@m.com', 2, 10, 1, 10, 16, '2015-08-30 21:07:20', 'f9eefe4eb191a8d8d8e71e427659f0f0Milos', '1'),
(30, 'Milica', 'Mirkovic', 16, 'Novosadska 3', 13, '062555444', 'milica@hotmail.com', 1, 10, 1, 9, 13, '2015-08-30 21:10:46', 'ebde6785840ec7cbfe78989e9128288aMilica', '2'),
(31, 'Marijana', 'Milenkovic', 43, 'Strahinjica Bana 6', 15, '063999888', 'marijana@gmail.com', 2, 2, 2, 13, 10, '2015-09-02 19:08:35', '3d20ca74d99f3fb869243f73fee32209Marijana', '1'),
(32, 'Ivana', 'Vidojkovic', 31, 'Vojvode Supljikca 7', 11, '062555888', 'ivana@gmail.com', 2, 10, 2, 9, 10, '2015-09-02 19:11:52', '7124d788813d7a38d7f32f1bcd8d9950Ivana', '1'),
(33, 'Mladen', 'Danilovic', 38, 'Novosadska 6', 5, '062555888', 'mladen@gmail.pom', 1, 1, 1, 10, 2, '2015-09-02 19:25:08', '24acfde4d6eb1a1897fb5d63d6894d20Mladen', '2'),
(34, 'Vesna', 'Milojkovic', 53, 'Novosadska 6', 17, '0625555888', 'vesna@hotmail.vom', 1, 1, 2, 8, 2, '2015-09-02 19:44:45', 'Vesna', '2'),
(35, 'Violeta', 'Jankovic', 34, 'Strahinjica Bana 6', 9, '063333666', 'violeta@hotmail.com', 2, 1, 1, 10, 2, '2015-09-02 19:54:02', 'e919e47aa5ed9a25183913f6dfab2b8eVioleta', '2'),
(36, 'Milinka', 'Mandic', 19, 'Novosadska 6', 5, '065888999', 'milanka@hotmail.com', 2, 2, 2, 8, 3, '2015-09-02 19:58:26', 'bbf21755e92edb1bcae9ae73efe7f573Milinka', '2'),
(37, 'Milos', 'Andjelkovic', 45, 'Vidovdanska 6', 15, '062588999', 'milos@milos.com', 1, 1, 1, 8, 10, '2015-09-04 10:59:49', '2076ebb2db03bbcc83c93a8a7d3609edMilos', '2'),
(38, 'Ivana', 'Milicevic', 39, 'Beogradska 3', 2, '062555888', 'ivana@ivana.com', 1, 2, 1, 8, 8, '2015-09-05 00:08:39', '909101c195fabe3cb8e7f66d661b440fIvana', '2'),
(39, 'Vera', 'Djedovic', 46, 'Brehtova 3', 12, '0625554444', 'vera@hotmail.com', 1, 1, 1, 12, 13, '2015-09-08 22:26:58', '28e83bdefe5b99e2799411647a6a1a8cVera', '1'),
(40, 'Andjelka', 'Antic', 51, 'Novosadska 4', 4, '062555999', 'andja@gmail.com', 1, 10, 1, 11, 13, '2015-10-07 16:04:32', '1c80833492be1da6b817fe1e174860a5Andjelka', '2'),
(41, 'fsa', 'sfa', 3, 'asf', 1, 'asf', 'asf', 1, 1, 2, 5, 17, '2015-10-10 21:24:00', '546b907ff9fe482bd62b0facdc6a8e23fsa', '2'),
(42, 'Vera', 'Matic', 46, 'Brehtova1', 3, '062555444', 'vera@veramatic.com', 1, 1, 2, 12, 16, '2015-10-21 00:39:04', 'b1b0f1533dbffc3473ba960b901b4f1eVera', '1'),
(43, 'Ivan', 'Mirkovic', 48, 'Takovska 1', 15, '062111444', 'ivan@ivan.com', 1, 2, 1, 12, 16, '2015-10-22 23:14:52', '1c444428e737fae8876aa4211c16da51Ivan', '1'),
(44, 'Milos', 'Milosevic', 49, 'Takovska 3', 6, '062555888', 'milos@milos.com', 1, 2, 1, 9, 10, '2015-10-22 23:16:01', '214c4378d30b74a3aa7bb59aa0db8d11Milos', '0'),
(45, 'Darko', 'Ivanovic', 26, 'Makedonska 3', 11, '063222555', 'darko@darko.com', 1, 1, 1, 5, 10, '2015-10-22 23:17:17', 'a5309c176b9ec00be71f25c7e72c5faaDarko', '0'),
(46, 'Dragan', 'Dimitrijevic', 39, 'Nusiceva 3', 11, '062555444', 'dragan@dragan.com', 2, 10, 2, 9, 10, '2015-10-22 23:18:52', 'c93d22494cbe6c8972afa270367d07e3Dragan', '0'),
(47, 'Marija', 'Marinkovic', 54, 'Kneza Milosa 4', 3, '062555999', 'marija@maja.com', 1, 1, 1, 8, 10, '2015-10-22 23:19:50', 'af4e8d9240cb6c3dfc02aaaad4918149Marija', '0'),
(48, 'Nikolina', 'Dimitrijevic', 36, 'Knez Mihajlova 8', 15, '063555888', 'nikolina@nikolina.com', 2, 2, 2, 11, 10, '2015-10-22 23:21:07', '92cdd4b7612728cb55fed34fa06cfcfbNikolina', '0'),
(49, 'Mira', 'Mirkovic', 42, 'Zlatibirska 9', 5, '064888999', 'mira@mira.com', 1, 10, 1, 11, 10, '2015-10-22 23:22:08', '2a17223677d2d1e28bc630ecb53366aeMira', '0'),
(50, 'Jovana', 'Jovic', 50, 'Hilandarska 5', 15, '063999666', 'jovana@jovana.com', 2, 1, 1, 10, 10, '2015-10-22 23:27:08', '4e2a89ced234739f2260f02b5ded3cd1Jovana', '0'),
(51, 'Dijana', 'Damjanovic', 59, 'Resavska 2', 15, '061888999', 'dijana@dijana.com', 2, 10, 2, 17, 10, '2015-10-22 23:28:09', 'f7a5db769485927a5a60d2b3922aeb08Dijana', '0'),
(52, 'Dragana', 'Jovanovic', 51, 'Sarajevska 8', 16, '069222555', 'dragana@dragana.com', 1, 10, 2, 10, 10, '2015-10-22 23:29:10', '0b44616da618f07526abdeea27072ac7Dragana', '0'),
(53, 'Sandra', 'Saric', 33, 'Vidovdanska 8', 11, '065888999', 'sandra@sandra.com', 1, 2, 2, 12, 10, '2015-10-22 23:30:16', '9362f766dededf152e8e4b7eafb72fefSandra', '0'),
(54, 'Aleksandar', 'Milenkovic', 57, 'Novosadska 3', 198, '069222118', 'aleksandar@aca.com', 1, 2, 2, 12, 10, '2015-10-22 23:32:25', 'f86b0d9c599f23fff4376f5130990644Aleksandar', '0'),
(55, 'Radomir', 'Radulovic', 44, 'Kosovska 5', 11, '069888555', 'radomir@rale.com', 1, 1, 3, 13, 10, '2015-10-22 23:33:20', '9cb2dde97dc8da7bdcaf593a20b02652Radomir', '0'),
(56, 'Ivica', 'Jovic', 59, 'Kamenicka 5', 8, '063555444', 'ivica@iva.com', 1, 2, 1, 9, 10, '2015-10-22 23:34:10', 'ad7a1a28a05477e93e273d76dcd30df3Ivica', '0'),
(57, 'Nikola', 'Nikolic', 50, 'Novosadska 4', 114, '069888555', 'nikola@nikola.com', 2, 9, 2, 10, 10, '2015-10-22 23:36:09', 'cd4e86d4063aeb2a1f6581f7818433d2Nikola', '2');

-- --------------------------------------------------------

--
-- Table structure for table `opstine`
--

CREATE TABLE IF NOT EXISTS `opstine` (
  `opstina_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`opstina_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=202 ;

--
-- Dumping data for table `opstine`
--

INSERT INTO `opstine` (`opstina_id`, `naziv`, `status`) VALUES
(1, 'Beogrаd-Barajevo', '1'),
(2, 'Beogrаd-Voždovаc', '1'),
(3, 'Beogrаd-Vrаčаr', '1'),
(4, 'Beogrаd-Grockа', '1'),
(5, 'Beogrаd-Zvezdаrа', '1'),
(6, 'Beogrаd-Zemun', '1'),
(7, 'Beogrаd-Lаzаrevаc', '1'),
(8, 'Beogrаd-Mlаdenovаc', '1'),
(9, 'Beogrаd-Novi Beogrаd', '1'),
(10, 'Beogrаd-Obrenovаc', '1'),
(11, 'Beogrаd-Pаlilulа', '1'),
(12, 'Beogrаd-Rаkovicа', '1'),
(13, 'Beogrаd-Sаvski Venаc', '1'),
(14, 'Beogrаd-Sopot', '1'),
(15, 'Beogrаd-Stаri Grаd', '1'),
(16, 'Beogrаd-Čukаricа', '1'),
(17, 'Beogrаd-Surčin', '1'),
(18, 'Bаčkа Topolа', '1'),
(19, 'Mаli Iđoš', '1'),
(20, 'Suboticа-grаd', '1'),
(21, 'Žitište', '1'),
(22, 'Zrenjаnin-grаd', '1'),
(23, 'Novа Crnjа', '1'),
(24, 'Novi Bečej', '1'),
(25, 'Sečаnj', '1'),
(26, 'Adа', '1'),
(27, 'Kаnjižа', '1'),
(28, 'Kikindа', '1'),
(29, 'Novi Kneževаc', '1'),
(30, 'Sentа', '1'),
(31, 'Čokа', '1'),
(32, 'Alibunаr', '1'),
(33, 'Belа Crkvа', '1'),
(34, 'Vršаc', '1'),
(35, 'Kovаčicа', '1'),
(36, 'Kovin', '1'),
(37, 'Opovo', '1'),
(38, 'Pаnčevo-grаd', '1'),
(39, 'Plаndište', '1'),
(40, 'Apаtin', '1'),
(41, 'Kulа', '1'),
(42, 'Odžаci', '1'),
(43, 'Sombor-grаd', '1'),
(44, 'Petrovаrаdin', '1'),
(45, 'Novi Sаd', '1'),
(46, 'Bаč', '1'),
(47, 'Bаčkа Pаlаnkа', '1'),
(48, 'Bаčki Petrovаc', '1'),
(49, 'Beočin', '1'),
(50, 'Bečej', '1'),
(51, 'Žаbаlj', '1'),
(52, 'Srbobrаn', '1'),
(53, 'Sremski Kаrlovci', '1'),
(54, 'Temerin', '1'),
(55, 'Titel', '1'),
(56, 'Vrbаs', '1'),
(57, 'Inđijа', '1'),
(58, 'Irig', '1'),
(59, 'Pećinci', '1'),
(60, 'Rumа', '1'),
(61, 'Sremskа Mitrovicа-grаd', '1'),
(62, 'Stаrа Pаzovа', '1'),
(63, 'Šid', '1'),
(64, 'Bogаtić', '1'),
(65, 'Vlаdimirci', '1'),
(66, 'Koceljevа', '1'),
(67, 'Krupаnj', '1'),
(68, 'Loznicа-grаd', '1'),
(69, 'LJubovijа', '1'),
(70, 'Mаli Zvornik', '1'),
(71, 'Šаbаc-grаd', '1'),
(72, 'Vаljevo-grаd', '1'),
(73, 'Lаjkovаc', '1'),
(74, 'LJig', '1'),
(75, 'Mionicа', '1'),
(76, 'Osečinа', '1'),
(77, 'Ub', '1'),
(78, 'Velikа Plаnа', '1'),
(79, 'Smederevo-grаd', '1'),
(80, 'Smederevskа Pаlаnkа', '1'),
(81, 'Požаrevаc', '1'),
(82, 'Kostolаc', '1'),
(83, 'Veliko Grаdište', '1'),
(84, 'Golubаc', '1'),
(85, 'Žаbаri', '1'),
(86, 'Žаgubicа', '1'),
(87, 'Kučevo', '1'),
(88, 'Mаlo Crniće', '1'),
(89, 'Petrovаc nа Mlаvi', '1'),
(90, 'Arаnđelovаc', '1'),
(91, 'Bаtočinа', '1'),
(92, 'Knić', '1'),
(93, 'Krаgujevаc-grаd', '1'),
(94, 'Rаčа', '1'),
(95, 'Topolа', '1'),
(96, 'Lаpovo', '1'),
(97, 'Despotovаc', '1'),
(98, 'Pаrаćin', '1'),
(99, 'Rekovаc', '1'),
(100, 'Jаgodinа-grаd', '1'),
(101, 'Svilаjnаc', '1'),
(102, 'Ćuprijа', '1'),
(103, 'Bor', '1'),
(104, 'Klаdovo', '1'),
(105, 'Mаjdаnpek', '1'),
(106, 'Negotin', '1'),
(107, 'Boljevаc', '1'),
(108, 'Zаječаr-grаd', '1'),
(109, 'Knjаževаc', '1'),
(110, 'Sokobаnjа', '1'),
(111, 'Arilje', '1'),
(112, 'Bаjinа Bаštа', '1'),
(113, 'Kosjerić', '1'),
(114, 'Novа Vаroš', '1'),
(115, 'Požegа', '1'),
(116, 'Priboj', '1'),
(117, 'Prijepolje', '1'),
(118, 'Sjenicа', '1'),
(119, 'Užice', '1'),
(120, 'Sevojno', '1'),
(121, 'Čаjetinа', '1'),
(122, 'Gornji Milаnovаc', '1'),
(123, 'Ivаnjicа', '1'),
(124, 'Lučаni', '1'),
(125, 'Čаčаk-grаd', '1'),
(126, 'Vrnjаčkа Bаnjа', '1'),
(127, 'Krаljevo-grаd', '1'),
(128, 'Novi Pаzаr-grаd', '1'),
(129, 'Rаškа', '1'),
(130, 'Tutin', '1'),
(131, 'Aleksаndrovаc', '1'),
(132, 'Brus', '1'),
(133, 'Vаrvаrin', '1'),
(134, 'Kruševаc-grаd', '1'),
(135, 'Trstenik', '1'),
(136, 'Ćićevаc', '1'),
(137, 'Niškа Bаnjа', '1'),
(138, 'Niš-Pаntelej', '1'),
(139, 'Niš-Crveni Krst', '1'),
(140, 'Niš-Pаlilulа', '1'),
(141, 'Niš-Medijаnа', '1'),
(142, 'Aleksinаc', '1'),
(143, 'Gаdžin Hаn', '1'),
(144, 'Doljevаc', '1'),
(145, 'Merošinа', '1'),
(146, 'Rаžаnj', '1'),
(147, 'Svrljig', '1'),
(148, 'Blаce', '1'),
(149, 'Žitorаđа', '1'),
(150, 'Kuršumlijа', '1'),
(151, 'Prokuplje', '1'),
(152, 'Bаbušnicа', '1'),
(153, 'Belа Pаlаnkа', '1'),
(154, 'Dimitrovgrаd', '1'),
(155, 'Pirot', '1'),
(156, 'Bojnik', '1'),
(157, 'Vlаsotince', '1'),
(158, 'Lebаne', '1'),
(159, 'Leskovаc-grad', '1'),
(160, 'Medveđа', '1'),
(161, 'Crnа Trаvа', '1'),
(162, 'Vrаnje', '1'),
(163, 'Vrаnjskа Bаnjа', '1'),
(164, 'Bosilegrаd', '1'),
(165, 'Bujаnovаc', '1'),
(166, 'Vlаdičin Hаn', '1'),
(167, 'Preševo', '1'),
(168, 'Surdulicа', '1'),
(169, 'Trgovište', '1'),
(170, 'Glogovаc', '1'),
(171, 'Kаčаnik', '1'),
(172, 'Kosovo Polje', '1'),
(173, 'Lipljаn', '1'),
(174, 'Obilić', '1'),
(175, 'Podujevo', '1'),
(176, 'Prištinа-grаd', '1'),
(177, 'Uroševаc', '1'),
(178, 'Štimlje', '1'),
(179, 'Štrpce', '1'),
(180, 'Dečаni', '1'),
(181, 'Đаkovicа', '1'),
(182, 'Istok', '1'),
(183, 'Klinа', '1'),
(184, 'Peć', '1'),
(185, 'Orаhovаc', '1'),
(186, 'Prizren', '1'),
(187, 'Suvа Rekа', '1'),
(188, 'Gorа', '1'),
(189, 'Vučitrn', '1'),
(190, 'Zubin Potok', '1'),
(191, 'Leposаvić', '1'),
(192, 'Srbicа', '1'),
(193, 'Kosovskа Mitrovicа', '1'),
(194, 'Zvečаn', '1'),
(195, 'Vitinа', '1'),
(196, 'Gnjilаne', '1'),
(197, 'Kosovskа Kаmenicа', '1'),
(198, 'Novo Brdo', '1');

-- --------------------------------------------------------

--
-- Table structure for table `radno_vreme`
--

CREATE TABLE IF NOT EXISTS `radno_vreme` (
  `radno_vreme_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`radno_vreme_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `radno_vreme`
--

INSERT INTO `radno_vreme` (`radno_vreme_id`, `naziv`, `status`) VALUES
(1, 'puno', '1'),
(2, 'nepuno', '1'),
(3, 'i jedno i drugo', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sektori`
--

CREATE TABLE IF NOT EXISTS `sektori` (
  `sektor_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sektor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `sektori`
--

INSERT INTO `sektori` (`sektor_id`, `naziv`, `status`) VALUES
(1, 'Racunovodstvo i finansije', '1'),
(2, 'Administracija', '1'),
(3, 'Vlonterski poslovi', '1'),
(4, 'Izgradnja i nekretnine', '1'),
(5, 'Potrošačke usluge', '1'),
(6, 'Obrazovanje', '1'),
(7, 'Inženjering', '1'),
(8, 'Veleprodaja', '1'),
(9, 'Osiguranje i finansije', '1'),
(10, 'Zdravstvo i medicina', '1'),
(11, 'Ugostiteljstvo', '1'),
(12, 'Ljudski resursi', '1'),
(13, 'IT i telekomunikacije', '1'),
(14, 'Pravni poslovi', '1'),
(15, 'Turizam', '1'),
(16, 'Menadžment', '1'),
(17, 'Poslovi u proizvodnji', '1'),
(18, 'Marketing', '1'),
(19, 'Mediji', '1'),
(20, 'Automoto industrija', '1'),
(21, 'Povremeni poslovi', '1'),
(22, 'Poslovi u javnom sektoru', '1'),
(23, 'Poslovi nabavke', '1'),
(24, 'Poslovi u maloprodaji', '1'),
(25, 'Poslovi u prodaji', '1'),
(26, 'Nauka i obrazovanje', '1'),
(27, 'Poslovi socijalne nege', '1'),
(28, 'Povremeni poslovi', '1'),
(29, 'Transport i logistika', '1'),
(36, 'Racunovodstvo', '1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `spisak_korisnika`
--
CREATE TABLE IF NOT EXISTS `spisak_korisnika` (
`korisnik_id` int(10) unsigned
,`ime` varchar(70)
,`prezime` varchar(70)
,`godina` varchar(4)
,`adresa_stanovanja` varchar(100)
,`opstina` varchar(100)
,`telefon` varchar(20)
,`email` varchar(50)
,`vozacka_dozvola` varchar(2)
,`vrsta_angazmana` varchar(20)
,`radno_vreme` varchar(20)
,`strucna_sprema` varchar(15)
,`sektor` varchar(50)
,`datum_prijave` datetime
,`dokument` varchar(1024)
,`status` varchar(1)
);
-- --------------------------------------------------------

--
-- Table structure for table `strane`
--

CREATE TABLE IF NOT EXISTS `strane` (
  `strana_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mvcname` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`strana_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `strane`
--

INSERT INTO `strane` (`strana_id`, `naziv`, `mvcname`, `status`) VALUES
(1, 'Nove prijave', 'novePrijave', '1'),
(2, 'Prijave po kategorijama', 'prijavePoKategorijama', '1'),
(3, 'Sektori', 'sektori', '2'),
(5, 'Vrsta angazmana', 'vrstaAngazmana', '2'),
(6, 'Strucna sprema', 'strucnaSprema', '2'),
(7, 'Opstine', 'opstine', '2'),
(9, 'Linkovi Glavni Meni', 'linkoviGlavniMeni', '2'),
(10, 'Linkovi Sidebar', 'linkoviSidebar', '2');

-- --------------------------------------------------------

--
-- Table structure for table `strucna_sprema`
--

CREATE TABLE IF NOT EXISTS `strucna_sprema` (
  `strucna_sprema_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`strucna_sprema_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `strucna_sprema`
--

INSERT INTO `strucna_sprema` (`strucna_sprema_id`, `naziv`, `status`) VALUES
(1, 'nkv', '0'),
(5, 'pkv', '1'),
(8, 'kv', '1'),
(9, 'sss', '1'),
(10, 'vkv', '1'),
(11, 'vs', '1'),
(12, 'vss', '1'),
(13, 'mr', '1'),
(17, 'dr', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vozacka_dozvola`
--

CREATE TABLE IF NOT EXISTS `vozacka_dozvola` (
  `vozacka_dozvola_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`vozacka_dozvola_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vozacka_dozvola`
--

INSERT INTO `vozacka_dozvola` (`vozacka_dozvola_id`, `naziv`, `status`) VALUES
(1, 'da', '1'),
(2, 'ne', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vrste_angazmana`
--

CREATE TABLE IF NOT EXISTS `vrste_angazmana` (
  `vrsta_angazmana_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`vrsta_angazmana_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `vrste_angazmana`
--

INSERT INTO `vrste_angazmana` (`vrsta_angazmana_id`, `naziv`, `status`) VALUES
(1, 'redovan rad', '1'),
(2, 'dodatni rad', '1'),
(10, 'praksa', '1'),
(9, 'preko zadruge', '1'),
(15, 'staziranje', '0'),
(16, 'nocni rad', '0');

-- --------------------------------------------------------

--
-- Structure for view `spisak_korisnika`
--
DROP TABLE IF EXISTS `spisak_korisnika`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `spisak_korisnika` AS select `korisnici`.`korisnik_id` AS `korisnik_id`,`korisnici`.`ime` AS `ime`,`korisnici`.`prezime` AS `prezime`,`godine`.`naziv` AS `godina`,`korisnici`.`adresa_stanovanja` AS `adresa_stanovanja`,`opstine`.`naziv` AS `opstina`,`korisnici`.`telefon` AS `telefon`,`korisnici`.`email` AS `email`,`vozacka_dozvola`.`naziv` AS `vozacka_dozvola`,`vrste_angazmana`.`naziv` AS `vrsta_angazmana`,`radno_vreme`.`naziv` AS `radno_vreme`,`strucna_sprema`.`naziv` AS `strucna_sprema`,`sektori`.`naziv` AS `sektor`,`korisnici`.`datum_prijave` AS `datum_prijave`,`korisnici`.`dokument` AS `dokument`,`korisnici`.`status` AS `status` from (((((((`korisnici` left join `godine` on((`korisnici`.`godina_rodjenja` = `godine`.`godina_id`))) left join `opstine` on((`korisnici`.`opstina` = `opstine`.`opstina_id`))) left join `vozacka_dozvola` on((`korisnici`.`vozacka_dozvola` = `vozacka_dozvola`.`vozacka_dozvola_id`))) left join `vrste_angazmana` on((`korisnici`.`vrsta_angazmana` = `vrste_angazmana`.`vrsta_angazmana_id`))) left join `radno_vreme` on((`korisnici`.`radno_vreme` = `radno_vreme`.`radno_vreme_id`))) left join `strucna_sprema` on((`korisnici`.`strucna_sprema` = `strucna_sprema`.`strucna_sprema_id`))) left join `sektori` on((`korisnici`.`sektor` = `sektori`.`sektor_id`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
