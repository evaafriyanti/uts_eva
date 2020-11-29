-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2020 pada 17.10
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_eva`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tab` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_user`, `judul`, `tab`, `konten`, `foto`, `created_at`, `updated_at`) VALUES
(20, 5, 'Belajar Coding untuk Pemula, Cuma 10 Menit', 'Teknik Informatika', 'Mulai dari HTML HTML merupakan inti dari halaman web secara keseluruhan. Mempelajari HTML cukup mudah dan kamu tidak perlu memiliki dasar coding terlebih dahulu. Modal kamu untuk belajar HTML adalah familiar dengan penggunaan web browser seperti Google Chrome atau Mozilla Firefox. Apabila serius untuk mempelajari HTML, silakan mengakses ragam referensi serta konsultasi dengan domainesia.com. Lanjut Mempelajari CSS CSS dan PHP sangat berguna untuk kamu dalam memahami dan membuat tampilan website yang cantik, menarik dan dinamis, menyesuaikan kepentingan dan kebutuhan. Naik Tingkat Belajar PHP Setelah kamu familiar dengan HTML dan CSS, serta paham cara mengoperasikannya, maka lanjutkan pembelajaran kamu ke bidang Web Programming dengan PHP. Ini artinya, kamu sudah akan memulai pelajaran tentang bahasa pemrograman komputer. Dengan mempelajari PHP, berarti kamu akan belajar mengatur alur logika, memproses hasil form HTML, hingga berkomunikasi dengan database seperti MySQL. Ketika sukses membuat website dengan PHP, jangan lupa untuk menyimpan data ke database. Lengkapi Proses Pembelajaran dengan Animasi dengan JavaScript JavaScript merupakan satu golongan dengan PHP, yakni merupakan bahasa pemrograman murni. JavaScript akan membuat halaman web kamu tampil interaktif, serta membuat visual lebih artistik. Ia merupakan bahasa pemrograman yang menggunakan konsep berbasis objek. Cara Coding Android Tak melulu harus menggunakan PC, melakukan pembelajaran dan kegiatan coding juga bisa dilakukan dengan android. Teknologi yang semakin maju telah menghasilkan ragam penyesuaian, sehingga proses coding jadi lebih dinamis.', 'Belajar Coding untuk Pemula, Cuma 10 Menit.jpg', '2020-11-29 07:57:28', '2020-11-29 08:12:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `id_komen` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `sender` int(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`id_komen`, `id_user`, `isi`, `sender`, `created_at`, `updated_at`) VALUES
(4, 2, 'tes', 1, '2020-11-28 12:58:25', '2020-11-28 12:58:25'),
(5, 2, 'Tes', 2, '2020-11-28 13:14:09', '2020-11-28 13:14:09'),
(6, 2, 'Assalamu\'alaikum', 2, '2020-11-28 13:23:08', '2020-11-28 13:23:08'),
(7, 2, 'ok', 2, '2020-11-28 21:57:36', '2020-11-28 21:57:36'),
(8, 6, 'ok', 2, '2020-11-29 04:59:57', '2020-11-29 04:59:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(5, 'Eva Afriyanti', 'eva', '$2y$10$AG1d4rnO1aNqj6Mp3883yu9ivsGvIiJvEVRlZ.SZyS9P8AC64tmH6', '2020-11-29 00:45:29', '2020-11-29 08:06:09'),
(6, 'Afriyanti Eva', 'afriyanti', '$2y$10$RTbi7djGv3CjgxrIsaRXGOqniJQTUEy6Hiy9jv3BXY83Dk/wEHdYS', '2020-11-29 00:54:44', '2020-11-29 08:06:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(6) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$zpnjPqbqu5VIyPK7BJQTvel9JO/qkGOm.bocxw7Mp1/gYhf/XZR6m', 1, 'faaGZNTcuIDX5B7RgHWZPNS3rhv28Wig4kaOW4yLVIlaMIYxodyJsDntR7Ba', '2020-11-28 08:55:45', '2020-11-29 15:16:01'),
(5, 'eva', '$2y$10$eadiEfSFhrTS8NnS8jUghO7QVGeF2P7D9LcgkaMbMF1OtzK/7Efp2', 2, 'Ogifat79bCgYaU5HTAcgyBqdfLsIRYZrzgwo5N1qALrOxnG7hHfzeriFffrU', '2020-11-29 00:45:29', '2020-11-29 11:14:57'),
(6, 'afriyanti', '$2y$10$2/zvubpDAiG1xwPxUVbw2eUO6P0g3Z2560PLoDa9lLx58.493CKjG', 2, 'IeWuimGq752PaD3vK4pn11cXXHFM4CkoJ5j27ssbGCkwrJrqxgJgIpvinKUH', '2020-11-29 00:54:44', '2020-11-29 12:00:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `id_komen` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
