-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Sep 2020 pada 18.22
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `conten`
--

CREATE TABLE `conten` (
  `IdContent` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Deskripsi` text NOT NULL,
  `Isi` text NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `conten`
--

INSERT INTO `conten` (`IdContent`, `Judul`, `Deskripsi`, `Isi`, `gambar`, `Keterangan`) VALUES
(3, 'a', 'b', 'hai sob', 'Jellyfish.jpg', '2020-09-03 00:10:31'),
(4, 'contoh judul', 'contoh deskripsi', 'contoh saja', 'Penguins.jpg', '2020-09-03 00:09:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Level` varchar(50) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`UserName`, `Password`, `Level`, `Keterangan`) VALUES
('149', '149', 'ADMIN', '2020-09-09 22:53:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `update`
--

CREATE TABLE `update` (
  `IdUpdate` int(11) NOT NULL,
  `Objek` text NOT NULL,
  `alt` text NOT NULL,
  `Filter` varchar(200) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `update`
--

INSERT INTO `update` (`IdUpdate`, `Objek`, `alt`, `Filter`, `Keterangan`) VALUES
(10, 'header-agus.jpg', '', '3', '2020-09-08 01:57:19'),
(12, 'Jika Anda mengalami hal ini:', '', '4', '2020-09-08 02:02:16'),
(13, 'Merasa tidak percaya diri dengan penampilan rambut yang Botak atau Pitak', '', 'li', '2020-09-08 02:22:20'),
(14, 'Maka..... Anda harus ketahui dahulu siklus Biologis Kerontokan dan Kebotakan', '', '5', '2020-09-08 02:22:34'),
(15, 'Agar tidak salah memilih perawatan rambut !', '', '6', '2020-09-08 02:22:43'),
(19, 'Jika Anda mengalami hal ini:', '', '4', '2020-09-08 17:23:09'),
(20, 'Merasa tidak percaya diri dengan penampilan rambut yang Botak atau Pitak', '', 'li1', '2020-09-08 17:23:32'),
(21, 'Rambut Botak Bertahun-tahun', '', 'li1', '2020-09-08 17:23:50'),
(22, 'Rambut Botak Sebagian atau Pitak', '', 'li1', '2020-09-08 17:24:31'),
(23, 'Rambut mudah rontok', '', 'li1', '2020-09-08 17:24:52'),
(24, 'Ingin Segera Tumbuhkan rambut Botak atau Pitak nya', '', 'li1', '2020-09-08 17:25:08'),
(25, 'Ingin punya Rambut Rapih dan terlihat Lebih Menawan', '', 'li1', '2020-09-08 17:25:30'),
(26, 'Atau bahkan, Merasa Kecewa dengan prodak penumbuh rambut lain yang pernah di pakai?', '', 'li1', '2020-09-08 17:25:49'),
(27, 'Maka..... Anda harus ketahui dahulu siklus Biologis Kerontokan dan Kebotakan', '', '5', '2020-09-08 17:26:06'),
(28, 'Agar tidak salah memilih perawatan rambut !', '', '6', '2020-09-08 17:26:16'),
(29, 'Apa Penyebab Terjadinya Kerontokan dan Kebotakan?', '', '7', '2020-09-08 17:26:26'),
(30, 'Kerontokan rambut terjadi secara genetik oleh hormon androgen DHT yang memicu sinyal TGF b1 penyebab kerontokan.', '', '8', '2020-09-08 17:27:40'),
(31, 'Secara normal hormon DHT ini memberikan sinyal kerontokan 5 tahun sekali.', '', '9', '2020-09-08 17:28:34'),
(32, 'Namun pada beberapa kondisi tubuh yang tidak normal, hormon DHT ini mengirimkan sinyal kerontokan setiap hari, yang apabila tidak segera ditangani bisa menyebabkan kebotakan permanen.', '', '10', '2020-09-08 17:29:06'),
(33, 'Apabila fase hormonal ini bisa dikendalikan, maka kerontokan bisa kita cegah, bahkan kebotakan yang sudah lama pun bisa tumbuh kembali rambutnya.', '', '11', '2020-09-08 17:30:42'),
(34, 'next-penjelasan-rontok-1.jpg', 'penjelasan rontok', '12', '2020-09-08 17:32:36'),
(35, 'Sayangnya, banyak yang kurang paham mengenai siklus hormonal ini dan menggunakan produk penumbuh rambut yang kurang tepat', '', '13', '2020-09-08 17:33:33'),
(36, 'Hasilnya, pertumbuhan rambutnya pun tidak optimal dan gagal.', '', '14', '2020-09-08 17:34:08'),
(38, 'Faktor apa saja penyebab GAGAL Menumbuhkan Rambut Botak?', '', '15', '2020-09-08 17:35:07'),
(39, 'Banyak yang kurang memperhatikan faktor berikut saat melakukan perawatan tumbuhkan rambut botak:', '', '16', '2020-09-08 18:06:17'),
(40, 'Tingkat Stress Stress menyebabkan siklus pertumbuhan rambut tidak terkontrol, sehingga hormon pelepasan kerontokan rambut diproduksi berlebihan menyebabkan kebotakan.', '', 'li2', '2020-09-08 18:07:34'),
(41, 'Hormonal Secara normal tubuh selalu melakukan regenerasi rambut melalui fase kerontokan dan pertumbuhan rambut. Pada kondisi tubuh tidak sehat akibat obat-obatan. Hormon penumbuh rambut tidak diproduksi, sehingga rambut rontok tidak bisa tumbuh lagi', '', 'li2', '2020-09-08 18:08:00'),
(42, 'Salah pilih prodak Banyak prodak yang klaim tumbuhkan rambut masih gunakan zat kimia berbahaya seperti Minoxidil untuk mempercepat pertumbuhan rambut dengan harga murah. Padahal zat ini Tidak Direkomendasikan karena dalam jangka waktu panjang dapat menimbulkan kembali kebotakan yang lebih parah, karena iritasi dan panas pada kulit. Bahkan perubahan warna rambut dan Alergi.', '', 'li2', '2020-09-08 18:08:31'),
(43, 'Lalu... Produk Penumbuh Rambut Apa yang cocok untuk Anda?', '', '17', '2020-09-08 18:09:00'),
(44, 'Jika Anda ingin menumbuhkan Rambut Pitak atau Kebotakan menahun dengan aman dan pasti', '', '18', '2020-09-08 18:09:30'),
(45, 'Montclair Hair Serum bisa menjadi solusi terbaik Anda', '', '19', '2020-09-08 18:10:02'),
(46, 'hold-mont-hair-1-1.jpg', 'penjelasan rontok', '20', '2020-09-08 18:11:46'),
(47, 'Serum Penumbuh Rambut Montclair merupakan hasil riset Laboratorium Jerman untuk merangsang pertumbuhan rambut dan mencegah kerontokan dengan formula Procyanidin-B2, Asam Amino, dan Growth Factor.', '', '21', '2020-09-08 18:12:08'),
(48, 'Meskipun sudah Botak menahun, calon akar rambutnya bisa di rangsang dengan formula Growth Factor dan Procyanidin-B2 pada Montclair sebagai bahan utamanya', '', '22', '2020-09-08 18:12:39'),
(49, 'Sehingga Anda Tidak Perlu Ragu lagi dengan perawatan Penumbuhan Rambutnya', '', '23', '2020-09-08 18:13:08'),
(50, 'Manfaat Serum Montclair', '', '24', '2020-09-08 18:13:30'),
(51, 'Akar rambut lebih kuat agar tidak terjadi kerontokan kembali', '', '25', '2020-09-08 18:14:06'),
(52, 'Bantu menyuburkan rambut agar tidak mudah patah', '', '25', '2020-09-08 18:14:24'),
(53, 'Bantu merangsang pertumbuhan rambut dengan cepat', '', '25', '2020-09-08 18:14:42'),
(54, 'Bantu tumbuhkan kebotakan rambut dengan pasti', '', '25', '2020-09-08 18:15:05'),
(55, 'Kenapa harus serum Montclair?', '', '26', '2020-09-08 18:15:21'),
(58, 'Simak, ada jawaban yang Anda cari selama ini', '', '2', '2020-09-08 20:12:42'),
(59, 'Mau Tumbuhkan Rambut Botak dengan Pasti, Tanpa Harus Nunggu Lama?', '', '1', '2020-09-08 20:13:39'),
(61, 'Cocok untuk Pria Maupun Wanita', '', 'pageA2', '2020-09-09 14:33:20'),
(63, 'APA YANG MEMBUAT MONTCLAIR GRASSE LEBIH EFEKTIF?', '', 'pageA4', '2020-09-09 14:36:55'),
(64, 'MENGGUNAKAN BAHAN AKTIF DARI JERMAN', 'Bekerja langsung di inti masalah penyebab rontok', 'pageA7', '2020-09-09 14:37:51'),
(65, 'AMAN, SUDAH LULUS BPOM', 'NA18181006546', 'pageA7', '2020-09-09 14:38:46'),
(66, 'MEMPERLANCAR PEREDARAN DARAH', 'Bekerja cepat menumbuhkan rambut dengan menunjang pembentukan pembuluh darah', 'pageA7', '2020-09-09 14:39:17'),
(67, 'MERAWAT KESELURUHAN RAMBUT', 'Dengan 12 bahan nutrisi khusus, rambut Anda menjadi lebih sehat dari akar hingga ujung rambut', 'pageA7', '2020-09-09 14:39:44'),
(68, 'Montclair Hair Serum merupakan serum rambut hasil penelitian terbaik, kandungan terbanyak dan terbaru dari Jerman yang mengkombinasikan 5 zat penumbuh dengan 12 nutrisi dan multivitamin lainnya untuk mengatasi rambut rontok, rapuh kering, kusam dan kasar dengan menumbuhkan sel rambut baru secara cepat.', '', 'pageA8', '2020-09-09 14:40:15'),
(69, 'Formula terbaik yang telah terbukti berhasil mengatasi kebotakan pada ribuan orang dan aman terdaftar di BPOM.', '', 'pageA9', '2020-09-09 14:40:38'),
(71, 'headline_image2.png', 'penjelasan rontok', 'pageA3', '2020-09-09 19:47:46'),
(72, 'BPOMO.jpg', 'penjelasan rontok', 'pageA10', '2020-09-09 14:43:11'),
(73, 'Monclair Grasse Hair Serum', '', 'pageA11', '2020-09-09 14:43:40'),
(74, 'paket-montclair.png', 'penjelasan rontok', 'pageA12', '2020-09-09 14:44:03'),
(75, 'Membantu mencegah penyebab rambut rontok', '', 'pageA13', '2020-09-09 14:44:33'),
(76, 'Membantu menstimulasi pertumbuhan rambut baru', '', 'pageA13', '2020-09-09 14:44:54'),
(77, 'Membantu memperlancar darah pada akar rambut', '', 'pageA13', '2020-09-09 14:45:22'),
(78, 'Membantu memperlancar darah pada akar rambut', '', 'pageA13', '2020-09-09 14:45:41'),
(79, 'Membantu menyediakan multi nutrisi pada sel rambut', '', 'pageA13', '2020-09-09 14:46:02'),
(80, 'Membantu mempercepat proses komunikasi antar sel', '', 'pageA13', '2020-09-09 14:46:20'),
(81, 'Konsultasikan masalah rambut dengan spesialis perawatan rambut kami', '', 'pageA14', '2020-09-09 14:46:38'),
(82, 'Sekarang Juga', '', 'pageA15', '2020-09-09 14:46:55'),
(83, 'Kami Siap Mengirim Paketnya Hari Ini', '', 'pageA16', '2020-09-09 14:47:20'),
(84, 'pengiriman1.jpg', 'penjelasan rontok', 'pageA17', '2020-09-09 14:47:52'),
(85, 'pengiriman2.jpg', 'penjelasan rontok', 'pageA17', '2020-09-09 14:48:18'),
(86, 'new-silver-new-price.jpg', 'penjelasan rontok', 'pageA18', '2020-09-09 14:48:42'),
(87, 'Mau Konsultasi Gratis?', '', 'pageA19', '2020-09-09 14:49:04'),
(89, 'MONTCLAIR MEMBANTU MENGATASI KERONTOKAN', '', 'pageA1', '2020-09-09 15:51:07'),
(96, 'Secara normal hormon DHT ini memberikan sinyal kerontokan 5 tahun sekali.', '', '8', '2020-09-09 21:47:07'),
(97, 'Namun pada beberapa kondisi tubuh yang tidak normal, hormon DHT ini mengirimkan sinyal kerontokan setiap hari, yang apabila tidak segera ditangani bisa menyebabkan kebotakan permanen.', '', '8', '2020-09-09 21:50:21'),
(98, 'Apabila fase hormonal ini bisa dikendalikan, maka kerontokan bisa kita cegah, bahkan kebotakan yang sudah lama pun bisa tumbuh kembali rambutnya.', '', '8', '2020-09-09 21:51:15'),
(99, 'Meskipun sudah Botak menahun, calon akar rambutnya bisa di rangsang dengan formula Growth Factor dan Procyanidin-B2 pada Montclair sebagai bahan utamanya', '', '21', '2020-09-09 22:12:30'),
(100, 'Sehingga Anda Tidak Perlu Ragu lagi dengan perawatan Penumbuhan Rambutnya', '', '21', '2020-09-09 22:15:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conten`
--
ALTER TABLE `conten`
  ADD PRIMARY KEY (`IdContent`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `update`
--
ALTER TABLE `update`
  ADD PRIMARY KEY (`IdUpdate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conten`
--
ALTER TABLE `conten`
  MODIFY `IdContent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `update`
--
ALTER TABLE `update`
  MODIFY `IdUpdate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
