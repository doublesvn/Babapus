-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2022 pada 07.15
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpll`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cobakembali` ()  BEGIN   
	INSERT INTO tb_laporan(username,judul,tglpinjam,tglkembali,tglpengembalian) SELECT username,judul,tglpinjam,tglkembali,tglkembali FROM tb_pinjam WHERE tglkembali<NOW();
	INSERT INTO tb_notif(iduser,judul) SELECT iduser,judul FROM tb_pinjam WHERE tglkembali<NOW(); 
	UPDATE tb_notif SET pesan=' telah dikembalikan' WHERE pesan IS NULL;
    DELETE FROM tb_pinjam WHERE tglkembali<NOW(); 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `kembalioto` ()  INSERT INTO tb_laporan(username,judul,tglpinjam,tglkembali,tglpengembalian) SELECT username,judul,tglpinjam,tglkembali,tglkembali FROM tb_pinjam WHERE tglkembali<NOW()$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `idbuku` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `ringkasan` varchar(300) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `stok` int(3) NOT NULL,
  `buku` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`idbuku`, `judul`, `penulis`, `ringkasan`, `kategori`, `stok`, `buku`) VALUES
(1, 'Si Kancil Anak Kendal', 'Imin Mining', 'Dulu Si Kancil dikenal sebagai hewan paling cerdik di hutan. Di masa dewasanya, Si Kancil pergi kota untuk kehidupan yang lebih baik. Di kota, ia menggunakan kecerdikannya untuk menghasilkan uang dari investasi dan trading kripto.', 'Ilmiah', 7, 'buku1.pdf'),
(2, 'Beranak dalam Kulkas', 'Jokowi Anwar', 'Seorang wanita yang sedang hamil 3 bulan sedang asik bermain petak umpet bersama kakeknya. Ia pun bersembunyi di dalam kulkas.  Kakeknya yang pikun tersebut lupa bahwa ia harus mencari cucunya tersebut. Wanita hamil tersebut terus bersembunyi sampai akhirnya si wanita tersebut pun melahirkan.', 'Horror', 5, 'buku2.pdf'),
(3, 'Kiat Sukses Bisnis WC Umum', 'Budi Duaribu', 'WC umum sudah sangat umum terdengar oleh masyarakat umum. Namun siapa sangka, wc umum bisa menjadi bisnis yang sangat menguntungkan. Di buku ini akan dijelaskan bagaimana mememasarkan dan mengelola bisnis wc umum.', 'Ilmiah', 0, 'buku3.pdf'),
(5, 'Cerita Balita', 'Dika', 'Cerita tentang balita', 'Ilmiah', 1, 'buku5.pdf'),
(6, 'Cerita Balita', 'Dika', 'ss', 'Ilmiah', 1, 'buku5.pdf'),
(7, 'Cerita l', 'Dika', '2', 'Ilmiah', 1, 'buku3.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `idlaporan` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tglpinjam` varchar(50) NOT NULL,
  `tglkembali` varchar(50) NOT NULL,
  `tglpengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_laporan`
--

INSERT INTO `tb_laporan` (`idlaporan`, `username`, `judul`, `tglpinjam`, `tglkembali`, `tglpengembalian`) VALUES
(22, 'mamat', 'Si Kancil Anak Kripto', '2022-01-13 11:15:42', '2022-01-20 11:15:42', '22-01-13 11:17:14'),
(23, 'mamat', 'Si Kancil Anak Kripto', '2022-01-13 11:17:34', '2022-01-20 11:17:34', '22-01-13 11:17:41'),
(24, 'edi', 'Si Kancil Anak Kendal', '2022-01-13 12:44:10', '2022-01-20 12:44:10', '22-01-13 12:45:03'),
(25, 'edi', 'Beranak dalam Kulkas', '2022-01-13 12:45:08', '2022-01-01 12:45:08', '2022-01-01 12:45:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_notif`
--

CREATE TABLE `tb_notif` (
  `idnotif` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pesan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_notif`
--

INSERT INTO `tb_notif` (`idnotif`, `iduser`, `judul`, `pesan`) VALUES
(1, 5, 'Si Kancil Anak Kripto', ' telah anda pinjam '),
(2, 5, 'Si Kancil Anak Kripto', ' telah anda kembalikan'),
(3, 5, 'Si Kancil Anak Kripto', ' telah anda pinjam '),
(4, 5, 'Si Kancil Anak Kripto', ' telah anda kembalikan'),
(5, 5, '2', 'yang anda kirim DITERIMA'),
(6, 9, 'Si Kancil Anak Kendal', ' telah anda pinjam '),
(7, 9, 'Si Kancil Anak Kendal', ' telah anda kembalikan'),
(8, 9, 'Beranak dalam Kulkas', ' telah anda pinjam '),
(9, 9, 'Beranak dalam Kulkas', ' telah dikembalikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `idpinjam` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `idbuku` int(10) NOT NULL,
  `tglpinjam` datetime NOT NULL,
  `tglkembali` datetime NOT NULL,
  `judul` varchar(50) NOT NULL,
  `buku` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_temp`
--

CREATE TABLE `tb_temp` (
  `idtemp` int(10) NOT NULL,
  `iduser` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `ringkasan` varchar(300) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `stok` int(3) NOT NULL,
  `buku` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_temp`
--

INSERT INTO `tb_temp` (`idtemp`, `iduser`, `judul`, `penulis`, `ringkasan`, `kategori`, `stok`, `buku`) VALUES
(1, 9, 'Cerita Anak', 'edi', 'Cerita tentang anak', 'Dongeng', 1, 'bukuuser.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `iduser` int(10) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`iduser`, `username`, `password`, `nama`) VALUES
(1, 'samsun', '1234', 'Samsun Maarif'),
(2, 'admin', '1234', 'admin'),
(3, 'dika', '1234', 'Andre Dicka'),
(4, 'madun', '1234', 'Madun Madun'),
(5, 'mamat', '1234', 'Mamat madun'),
(8, 'umi', '1234', 'umi'),
(9, 'edi', '12345', 'edi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indeks untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`idlaporan`);

--
-- Indeks untuk tabel `tb_notif`
--
ALTER TABLE `tb_notif`
  ADD PRIMARY KEY (`idnotif`);

--
-- Indeks untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`idpinjam`);

--
-- Indeks untuk tabel `tb_temp`
--
ALTER TABLE `tb_temp`
  ADD PRIMARY KEY (`idtemp`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `idbuku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `idlaporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_notif`
--
ALTER TABLE `tb_notif`
  MODIFY `idnotif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `idpinjam` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_temp`
--
ALTER TABLE `tb_temp`
  MODIFY `idtemp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

DELIMITER $$
--
-- Event
--
CREATE DEFINER=`root`@`localhost` EVENT `kembali` ON SCHEDULE EVERY 1 SECOND STARTS '2022-01-01 00:00:00' ENDS '2022-01-28 00:00:00' ON COMPLETION PRESERVE ENABLE DO CALL cobakembali()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
