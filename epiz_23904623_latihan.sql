-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Inang: sql309.byetcluster.com
-- Waktu pembuatan: 14 Mei 2019 pada 02.43
-- Versi Server: 5.6.41-84.1
-- Versi PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `epiz_23904623_latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `komentar`) VALUES
(15, 'Infinity Wars menghadirkan perang di tanah Titan, planet Thanos. Tony Stark alias Iron Man adalah pencetusnya. Ia bernegoisasi dengan Dr. Strange untuk membawa perang tersebut ke tempat Thanos.\r\n\r\nHasilnya? Avengers kalah. Frustasi, lelah secara fisik dan emosi adalah tumbalnya. Semuanya hanya bisa meratapi apa yang sudah mereka lakukan. Steve Rogers (Captain America), Natasha Romanoff, Thor, Dr. Banner (Hulk), Rhode (War Machine) tak bisa berbuat banyak, selain mempertahankan keras kepala mereka untuk bisa mengalahkan Thanos.\r\n\r\n'),
(16, 'Wahh blog pasti dibantu nadyaðŸ»');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(34, 'Thomas', '123', 'thomasalkadafi@gmail.com'),
(35, 'gusto', '321', 'gustho@gmail.com'),
(40, 'nad', '123', 'thomasalkadafi@gmail.com'),
(41, 'adys', 'aaa', 'cantikbuanget@gmail.com'),
(42, 'nadyacomel', 'nadyacomel', 'thomasalkadafi@gmail.com'),
(43, 'a', 'a', 'a'),
(44, 'a', 'a', 'a'),
(45, 'b', 'b', 'b'),
(46, 'iya', '123', 'iya'),
(47, '', '', ''),
(48, 'tomtom', '321', 'thomasalkadafi@gmail.com'),
(49, '', '', ''),
(50, 'mrstiaraa', 'aspire3617', 'tiara.hardika@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
