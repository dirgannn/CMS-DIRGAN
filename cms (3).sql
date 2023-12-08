-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2023 pada 03.13
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(1, 'xasjnkxjnsajnx', '20231202050336.jpg'),
(2, 'sxajhhjkcdsjbhm', '20231202050503.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'SEJARAH'),
(2, 'BAHASA JAWA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Blogyyy', 'Blogyyy adalah sebuah website yang memuat sistem informasi tentang pembelajaran gabungan yang di kembangkan oleh siswa SMKN 2 KARANGANYAR kelas 11 RPL ', 'https://www.instagram.com/dirganyx/', 'https://web.facebook.com/fannydarat.fannydarat.775/', 'mailto:dirgansyahputra348@mgmail.com', 'singget tawangsari kerjo', 'https://wa.me/082176615829');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `penjelasan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`, `penjelasan`) VALUES
(1, 'PROKLAMASI', 'Hal itu menimbulkan perdebatan antara golongan muda dan golongan tua karena belum ada pernyataan resmi dari Jepang. Maka, golongan tua meminta untuk menunggu sampai tanggal 24 Agustus.\r\n\r\nHingga akhirnya para pemuda pada tanggal 15 Agustus 1945 dibawah pimpinan Sukarni, Chaerul Saleh, dan Wikana mengamankan Soekarno dan Hatta ke Rengasdengklok dengan harapan mempercepat kemerdekaan. Singkat cerita, Soekarno dan Hatta kembali bersama Ahmad Soebardjo dengan jaminan proklamasi akan terjadi besok.\r\n\r\nMalam harinya mereka tiba di rumah Laksamana Maeda untuk membahas masalah tersebut. Akhirnya keesokan harinya pada tanggal 17 Agustus 1945 pukul 03.00 WIB, naskah proklamasi yang disusun sebanyak dua alinea ini selesai 2 jam kemudian.\r\n\r\nNaskah diserahkan kepada Sayuti Melik untuk diketik. Naskah diketik oleh Sayuti Melik dan didampingi oleh BM Diah. Setelah selesai, naskah pun diserahkan dan ditandatangani oleh Soekarno.\r\n\r\nAkhirnya proklamasi kemerdekaan Indonesia terjadi pada tanggal 17 Agustus 1945 pukul 10.00. Naskah proklamasi dibacakan dalam suasana khidmat di halaman rumah Soekarno di Jl. Pegangsaan Timur No. 56.\r\n\r\nKabar proklamasi ini pun disebarluaskan dan gelora euforia masyarakat yang merayakan kemerdekaan sangat terasa saat itu.\r\n\r\nBaca juga:\r\nBung Karno Menciptakan 17 Tonil Saat Diasingkan di Ende & Bengkulu, Apa Sih Itu?\r\nIsi Teks Proklamasi Kemerdekaan Indonesia\r\nTeks proklamasi dirumuskan oleh tiga tokoh nasional, yakni Ir. Soekarno, Mohammad Hatta, dan Ahmad Soebardjo. Awalnya naskah teks proklamasi ditulis tangan oleh Soekarno. Setelah disepakati baru diketik oleh Sayuti Melik.\r\n\r\n\r\nBunyi Naskah Isi Teks Proklamasi Kemerdekaan Indonesia Foto: detikcom/Rachman Haryanto\r\nTampaknya diskusi ketiga tokoh nasional dalam proses perumusan berjalan cukup alot. Hal tersebut tampak dari perbedaan teks proklamasi naskah tulisan tangan dengan ketikan:\r\n\r\nKata \"hal2\" pada paragraf kedua baris pertama diubah menjadi \"hal-hal\"\r\nKata \"saksama\" pada paragraf kedua baris kedua diubah menjadi \"tempo\"\r\nPenulisan tanggal dan bulan \"Djakarta 17-08-05\" menjadi \"Djakarta, hari 17 boelan 8 tahoen 05\"\r\nKalimat \"wakil2 bangsa Indonesia\" menjadi \"Atas nama bangsa Indonesia\"\r\nIsi teks proklamasi kemerdekaan Indonesia versi ketikan Sayuti Melik:\r\n\r\nKami bangsa Indonesia dengan ini menjatakan Kemerdekaan Indonesia.\r\n\r\nHal-hal jang mengenai pemindahan kekoeasaan d.l.l., diselenggarakan dengan tjara seksama dan dalam tempo jang sesingkat-singkatnja.\r\n\r\nDjakarta, hari 17 boelan 8 tahoen 05\r\n\r\nAtas nama bangsa Indonesia\r\n\r\nSoekarno/Hatta.\r\n\r\nBaca artikel detikedu, \"Proklamasi Kemerdekaan Indonesia: Sejarah, Isi Teks, Makna, dan Tujuan\" selengkapnya https://www.detik.com/edu/detikpedia/d-6667403/proklamasi-kemerdekaan-indonesia-sejarah-isi-teks-makna-dan-tujuan.\r\n\r\nDownload Apps Detikcom Sekarang https://apps.detik.com/detik/', '20231202055309.jpg', 'PROKLAMASI', '1', '2023-12-02', 'ganxx', ''),
(2, 'TIWULLL', 'Tiwul yaiku\r\nPanganan tradhisional asli Indonesia kang dhisik sempet dadi panganan pokok pengganti sega beras. Tiwul digawe soko gaplek yaiku pohong kang wes di garingke lan dikukus.tiwul digae saka tepung gaplek, yaiku singkong sek di garingke terus di tumbuk.\r\nTiwul bisa di temokne ing Kawasan wonogiri,pacitan,gunung kidul lan sak piturut e.\r\nRasa ingkang khas soko tiwul yaiku gurih lan unik. Sing ndadekake tiwul di seneng I wong akeh.\r\nAkibat tiwul langka\r\nKarena perkembangan makanan masa kini yang sudah sangat pesat dan banyak pengaruh dari budaya luar. Maka dari itu tiwul menjadi sepi peminat bahkan hamper punah.\r\nDibuat kreasi makanan seperti tiwul goreng,makanan kemasan seperti tiwul instan, kue-kue an yang berbahan dasar singkong \r\nSolusi : \r\nMenggunakan kemasan produk yang menarik\r\nBuat foto produk yang menarik\r\nPromosi kan melalui media social\r\nBuat promosi yang unik dan menarik\r\nMemanfaatkan iklan di media social\r\nBergabung dengan komunitas daerah.', '20231202131516.jpg', 'TIWULLL', '2', '2023-12-02', 'ganxx', 'https://www.canva.com/design/DAF11N-Ie6A/xcZhzCa0rLw1I-bjVaSMfg/view?utm_content=DAF11N-Ie6A&utm_campaign=designshare&utm_medium=link&utm_source=editor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL,
  `recent_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`, `recent_login`) VALUES
(1, 'ganxx', 'iyah', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 2023),
(2, 'dirganea', 'pepw', '67cfd69a4e5fb27fc4aeb0fa8383161e', 'Kontributor', 2023);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
