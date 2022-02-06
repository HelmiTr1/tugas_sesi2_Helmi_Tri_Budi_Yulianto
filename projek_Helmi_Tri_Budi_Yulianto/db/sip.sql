-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2022 pada 07.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `idDokter` int(11) NOT NULL,
  `namaDokter` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `noTelepon` varchar(13) NOT NULL,
  `spesialis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`idDokter`, `namaDokter`, `ttl`, `alamat`, `jenisKelamin`, `noTelepon`, `spesialis`) VALUES
(1, 'Dokter A', '1980-02-01', 'Banjarmasin', 'Laki-laki', '080000000000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pemeriksaan`
--

CREATE TABLE `jenis_pemeriksaan` (
  `idJenisPemeriksaan` int(11) NOT NULL,
  `jenisPemeriksaan` varchar(100) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `idObat` int(11) NOT NULL,
  `namaObat` varchar(100) NOT NULL,
  `nett` int(11) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `expiredDate` date NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`idObat`, `namaObat`, `nett`, `harga`, `expiredDate`, `stok`) VALUES
(1, 'Obat A', 100, '10000', '2022-02-28', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `idPasien` int(11) NOT NULL,
  `namaPasien` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `noTelepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`idPasien`, `namaPasien`, `ttl`, `alamat`, `jenisKelamin`, `noTelepon`) VALUES
(1, 'Helmi', '1999-07-21', 'Desa TIrtajaya', 'Laki-laki', '082251884786');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idPendaftaran` int(11) NOT NULL,
  `idPasien` int(11) NOT NULL,
  `idDokter` int(11) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`idPendaftaran`, `idPasien`, `idDokter`, `keluhan`, `tanggal`) VALUES
(7, 1, 1, 'sakit pinggang', '2022-02-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medik`
--

CREATE TABLE `rekam_medik` (
  `idRekamMedik` int(11) NOT NULL,
  `idPendaftaran` int(11) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `tanggalPemeriksaan` date NOT NULL,
  `tanggalKonsultasiKembali` date NOT NULL,
  `ruangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekam_medik`
--

INSERT INTO `rekam_medik` (`idRekamMedik`, `idPendaftaran`, `diagnosa`, `tanggalPemeriksaan`, `tanggalKonsultasiKembali`, `ruangan`) VALUES
(1, 7, 'rematik                                                                                                                                                                ', '2022-02-06', '2022-02-06', 'melati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep_obat`
--

CREATE TABLE `resep_obat` (
  `idResepObat` int(11) NOT NULL,
  `idObat` int(11) NOT NULL,
  `idPasien` int(11) NOT NULL,
  `idDokter` int(11) NOT NULL,
  `dosis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `idTagihan` int(11) NOT NULL,
  `idRekamMedik` int(11) NOT NULL,
  `idJenisPemeriksaan` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `idObat` int(11) NOT NULL,
  `namaPembeli` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggalPembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`idDokter`);

--
-- Indeks untuk tabel `jenis_pemeriksaan`
--
ALTER TABLE `jenis_pemeriksaan`
  ADD PRIMARY KEY (`idJenisPemeriksaan`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idObat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idPasien`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idPendaftaran`),
  ADD KEY `fkIdPasien1` (`idPasien`),
  ADD KEY `fkIdDokter1` (`idDokter`);

--
-- Indeks untuk tabel `rekam_medik`
--
ALTER TABLE `rekam_medik`
  ADD PRIMARY KEY (`idRekamMedik`),
  ADD KEY `fkIdPendaftaran1` (`idPendaftaran`);

--
-- Indeks untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`idResepObat`),
  ADD KEY `fkIdObat1` (`idObat`),
  ADD KEY `fkIdPasien2` (`idPasien`),
  ADD KEY `fkIdDokter2` (`idDokter`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`idTagihan`),
  ADD KEY `fkIdRekamMedik1` (`idRekamMedik`),
  ADD KEY `fkIdJenisPemeriksaan1` (`idJenisPemeriksaan`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `fkIdObat2` (`idObat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `idDokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jenis_pemeriksaan`
--
ALTER TABLE `jenis_pemeriksaan`
  MODIFY `idJenisPemeriksaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `idObat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idPasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `idPendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `rekam_medik`
--
ALTER TABLE `rekam_medik`
  MODIFY `idRekamMedik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  MODIFY `idResepObat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `idTagihan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_ibfk_2` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekam_medik`
--
ALTER TABLE `rekam_medik`
  ADD CONSTRAINT `rekam_medik_ibfk_1` FOREIGN KEY (`idPendaftaran`) REFERENCES `pendaftaran` (`idPendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `resep_obat_ibfk_1` FOREIGN KEY (`idObat`) REFERENCES `obat` (`idObat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_obat_ibfk_2` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_obat_ibfk_3` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`idJenisPemeriksaan`) REFERENCES `jenis_pemeriksaan` (`idJenisPemeriksaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihan_ibfk_2` FOREIGN KEY (`idRekamMedik`) REFERENCES `rekam_medik` (`idRekamMedik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`idObat`) REFERENCES `obat` (`idObat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
