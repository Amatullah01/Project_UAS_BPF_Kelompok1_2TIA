-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2022 pada 02.09
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpf_uas_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id` int(15) NOT NULL,
  `id_pesanan` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `id_pakaian` int(15) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id`, `id_pesanan`, `id_user`, `id_pakaian`, `jumlah`, `total`) VALUES
(5, 44, 1, 2, 1, 600000),
(6, 45, 1, 12, 1, 230000),
(7, 45, 1, 13, 1, 230000),
(8, 46, 6, 13, 1, 1000000),
(9, 46, 6, 18, 1, 1000000),
(10, 46, 6, 12, 1, 1000000),
(11, 46, 6, 2, 1, 1000000),
(12, 47, 1, 18, 1, 170000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `id_pakaian` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` int(50) NOT NULL,
  `size` varchar(5) NOT NULL,
  `harga` int(100) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `nama`, `stok`, `size`, `harga`, `detail`, `gambar`) VALUES
(2, 'Kimono Yukata Wanita', 18, 'XL', 600000, 'Di lengkapi dengan Obi Instan dan Tas Tangan', 'kimono3.jpg'),
(12, 'Gamis', 18, 'XL', 170000, 'Dilengkapi dengan banyak pilihan warna', 'gamis.png'),
(13, 'Baju Tidur', 18, 'XL', 60000, 'Memiliki Kantung dan Kancing', 'bajutidur.png'),
(18, 'Gamis', 8, 'XL', 170000, 'Dilengkapi dengan banyak pilihan warna', 'GAMIS1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `total_bayar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_user`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `status`) VALUES
(44, 1, '600000', '2022-08-03', 'Jl. Rowosari, Rumbai', 'BNI - 2545235784', 'transfer1.jpg', 'Pengirimannya 1 Minggu ya', 'Belum Dikirim'),
(45, 1, '230000', '2022-08-03', 'Jl. Rowosari', 'BRI - 4422301250', 'transfer1.jpg', 'Cepat yaa', 'Belum Dikirim'),
(46, 6, '1000000', '2022-08-03', 'panam', 'BCA - 5423342282', 'transfer11.jpg', 'cepat woi', 'Belum Dikirim'),
(47, 1, '170000', '2022-08-03', 'Jl. Merak no. 25', 'BTN - 1024852355', 'transfer1.jpg', 'Jangan Lewat Dari Seminggu', 'Belum Dikirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `tgl_buat` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `tgl_buat`) VALUES
(1, 'Amatullah Shafiyyah', 'amatullah@gmail.com', '$2y$10$DpIvKJ1TI.BjC3CR6VjvQuwXTCDfHVvi.4DBZysPfLL004jujvWN6', 'main2.png', 'User', 1657104859),
(2, 'Admin', 'admin@gmail.com', '$2y$10$wbe.OttK74XdlmFprA5Bsucj3SnIQDgPvV0MgdG/LMGRVg9pVOiEC', 'admin.png', 'Admin', 1657154033),
(3, 'Khairunisa', 'khairunisa@gmail.com', '$2y$10$K5hpr7EeJsfyVgT5pyDlPOAbmSbzA8Q.OjjtLMGgrIpNM2DsJvDvm', 'SS_Khai_Aib.png', 'User', 1657156241),
(4, 'Alrisya Putri', 'alrisya@gmail.com', '$2y$10$jO5lRCNfddPuDD9NkCogSOE4gVzk7TlUgb2ZXo5lU4rJHa/DGS.zO', 'ica.jpg', 'User', 1659449044),
(5, 'Chaellia', 'admin2@gmail.com', '$2y$10$mO1Sp.qnUGVJnhKEWDYhH.YDQ1Yj322tU8xj1ZZsLxEQvXlJMMwzO', 'admin.png', 'Admin', 1659450981),
(6, 'caheeeee', 'cahe@gmail.com', '$2y$10$l9y3liSSZ1tpmHf7fdZJoOSbhIN/BzEolRrl080MSJJRK.F.3hayC', 'main21.png', 'User', 1659525153);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pakaian` (`id_pakaian`);

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`id_pakaian`) REFERENCES `pakaian` (`id`);

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_pakaian`) REFERENCES `pakaian` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
