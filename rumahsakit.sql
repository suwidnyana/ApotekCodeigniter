-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Jan 2019 pada 19.47
-- Versi server: 5.7.19
-- Versi PHP: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(80) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('05f4084c-1881-11e9-9b38-c85b76957882', 'dr DFD', 'Makan', '<p>Bal</p>\r\n', '39219'),
('2250d9e3-23e6-4de2-b98b-ca34240334ee', 'dr Mcdonald', 'Penyakit Lambung dan Usus Besar', '<p>Depan dr Kfc</p>\r\n', '14045'),
('387ba098-fbcb-4a92-b8b1-669a6671bc9f', 'dr Suwidnyana Putra', 'Penyakit dalam', '<p>tabanan</p>\r\n', '3112'),
('463bacef-1716-11e9-83da-c85b76957882', 'dr. Ida Bagus Putra Adnyana, Sp.OG(K.Fer)', 'Spesialis Konsultan Fertilitas Endokrinologi', '<p>Denpasar</p>\r\n', '087'),
('5c9f8b6f-1881-11e9-9b38-c85b76957882', 'dr Susis', 'Makanan', '<pre>\r\nBali</pre>\r\n', '321312'),
('a0bf15a4-1d1a-11e9-8dd8-c85b76957882', 'B', 'B', '<p>`A</p>\r\n', '3213'),
('d3b82687-1d19-11e9-8dd8-c85b76957882', 'Galih', 'Makanan', '<p>Jimbaran</p>\r\n', '38912983'),
('fa4f375f-1d19-11e9-8dd8-c85b76957882', 'Suwidnyana', 'Tidur', '<p>Bali</p>\r\n', '3123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('0a5c733c-621b-11e8-86a9-c85b76957882', 'Napacin', 'Obat Asma'),
('0a5cac76-621b-11e8-86a9-c85b76957882', 'Asmadex', 'Obat Asma'),
('0a5ce4b4-621b-11e8-86a9-c85b76957882', 'Intrabat', 'Obat Batuk'),
('1c89faab-0da8-4008-83a4-31b15395e50a', 'Sausage McMuffinÂ®', 'English muffin, sosis ayam khas McDonald\'s, keju'),
('1d0885e8-3699-4d59-b2bd-a77d76237610', 'RODEOÂ® KINGâ„¢', 'The RODEOÂ® KINGâ„¢ Sandwich features two savory flame-grilled beef patties totaling more than Â½ lb.* of beef, topped with 3 half-strips of thick-cut smoked bacon, our signature crispy onion rings, tangy BBQ sauce, American cheese and creamy mayonnaise all on our sesame seed bun.'),
('8678d8a1-831d-436c-83d1-1f381a9a8169', 'Cheeseburger with Egg', 'Roti burger lezat dengan daging sapi, telur, keju, saus tomat, acar, potongan bawang dan mustard'),
('8eb0f869-61b0-11e8-b3bb-c85b76957882', 'Paracetamol', 'Obat Panas'),
('94b23125-b2f9-4b80-a41b-18119983117e', 'BACON KINGâ„¢ Jr. Sandwich', 'Introducing the BACON KINGâ„¢ Jr. Sandwich, smaller package, same BIG taste. Two flameâ€“grilled 100% beef patties topped with thick-cut smoked bacon, melted American cheese, ketchup and creamy mayonnaise on a toasted sesame seed bun.'),
('a9847e38-6f4f-44f2-8694-9392098759d1', 'Paket Super Besar 2', '2 Paha/Dada + Minum L + Nasi'),
('c39bf731-3b6d-47bb-beb8-7df1a2a2c2af', 'Big Mac', '3 tumpuk roti burger dengan taburan wijen di atasnya, 2 lapis daging sapi, selada segar, keju, acar, saus Big Mac, potongan bawang.'),
('d0c42e43-cfca-48c7-8678-027372990632', 'Lanadexon', 'Radang,Alergi dan Penambah Nafsu Makan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nomor_identitas` varchar(30) NOT NULL,
  `nama_pasien` varchar(80) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('5c3631d7b3b9c', '1615323053', 'I Putu Suwidnyana Putra', 'L', '<pre>\r\n<code>Jalan Mh Thamrin No 107 Kediri,Tabanan,Bali</code></pre>\r\n', '087'),
('5c3d67671f2e0', '321', 'Rina', 'P', '<h3 style=\"font-style: italic;\">Tabanan</h3>\r\n', '332131'),
('5c3debb6b81ce', '9999', 'Nas bedag', 'L', '<h3>Denpasar Barat</h3>\r\n', '14445'),
('5c3e08725a7c2', '123', 'A', 'L', '<p>A</p>\r\n', '236');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `gedung`) VALUES
('a9ea0b59-1295-11e9-85e9-c85b76957882', 'Rumah Sakit', 'Bali'),
('a9f0ec5b-1295-11e9-85e9-c85b76957882', 'Tabanan', 'Bali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poli`, `tgl_periksa`) VALUES
('5c3b04c2e5b07', '5c3631d7b3b9c', '<p>-Tidak Enak Badan</p>\r\n\r\n<p>-Mual,mual</p>\r\n\r\n<p>-Sesak Napas</p>\r\n\r\n<p>-Nafsu Makan Berkurang</p>\r\n', '387ba098-fbcb-4a92-b8b1-669a6671bc9f', '<p>-Asma</p>\r\n\r\n<p>-Kurang Olahraga</p>\r\n\r\n<p>-Kurang cukup Istirahat</p>\r\n', 'a9f0ec5b-1295-11e9-85e9-c85b76957882', '2019-01-13'),
('5c3d6a0baf54b', '5c3d67671f2e0', '<h3><del>Galau</del></h3>\r\n', '463bacef-1716-11e9-83da-c85b76957882', '<p><code>-Kurang Tidur</code></p>\r\n\r\n<p><code>-Kurang Istirahat</code></p>\r\n\r\n<p><code>-Kurang Makan</code></p>\r\n\r\n<p><code>-Kurang belajar</code></p>\r\n', 'a9ea0b59-1295-11e9-85e9-c85b76957882', '2019-01-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(8) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id`, `id_rm`, `id_obat`) VALUES
(1, '5c3b04c2e5b07', '0a5c733c-621b-11e8-86a9-c85b76957882'),
(2, '5c3b04c2e5b07', '0a5cac76-621b-11e8-86a9-c85b76957882'),
(3, '5c3b04c2e5b07', '0a5ce4b4-621b-11e8-86a9-c85b76957882'),
(4, '5c3b04c2e5b07', '1c89faab-0da8-4008-83a4-31b15395e50a'),
(5, '5c3b04c2e5b07', '1d0885e8-3699-4d59-b2bd-a77d76237610'),
(6, '5c3b04c2e5b07', '8678d8a1-831d-436c-83d1-1f381a9a8169'),
(7, '5c3b04c2e5b07', '8eb0f869-61b0-11e8-b3bb-c85b76957882'),
(8, '5c3b04c2e5b07', '94b23125-b2f9-4b80-a41b-18119983117e'),
(9, '5c3d6a0baf54b', '0a5c733c-621b-11e8-86a9-c85b76957882'),
(10, '5c3d6a0baf54b', '0a5ce4b4-621b-11e8-86a9-c85b76957882'),
(11, '5c3d6a0baf54b', '1d0885e8-3699-4d59-b2bd-a77d76237610'),
(12, '5c3d6a0baf54b', '8678d8a1-831d-436c-83d1-1f381a9a8169');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('', 'John Doe', 'adminj', '5db450959bc7f779a3ffbb885bcf3ddb', '1'),
('2e6487b2-f726-11e8-bda4-c85b76957882', 'Suwidnyana', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1'),
('8a85ffee-f708-11e8-bda4-c85b76957882', 'Superuser', 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', '1'),
('e84159d4-0da3-11e9-bde1-c85b76957882', 'Admin', 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indeks untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rm` (`id_rm`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `tb_poliklinik` (`id_poli`);

--
-- Ketidakleluasaan untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
