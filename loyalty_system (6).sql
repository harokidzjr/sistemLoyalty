-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2016 at 03:49 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loyalty_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `apply_in` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `apply_in`) VALUES
(1, 'Tokoedia'),
(1, 'Zolora'),
(1, 'Bukalapak');

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(11) NOT NULL,
  `nama` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `nama`) VALUES
(1, 'A1'),
(2, 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` char(50) NOT NULL,
  `no_ktp` char(30) NOT NULL,
  `jumlah_point` int(11) NOT NULL,
  `tempat_lahir` char(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_ktp` char(50) NOT NULL,
  `alamat_surat` char(50) NOT NULL,
  `no_hp` char(50) DEFAULT NULL,
  `pin_bb` char(50) DEFAULT NULL,
  `no_wa` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `scan_ktp` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `no_ktp`, `jumlah_point`, `tempat_lahir`, `tgl_lahir`, `alamat_ktp`, `alamat_surat`, `no_hp`, `pin_bb`, `no_wa`, `email`, `scan_ktp`) VALUES
(1, 'Martine Indra S', '1142101166', 0, 'Jakarta', '1992-09-04', 'Dusun Cibenon RT 2 RW 6 Sidareja, Cilacap', 'Dusun Cibenon RT 2 RW 6 Sidareja, Cilacap', '08981156807', 'D36D56', '08981156807', '', 'DIMG1.Martine Indra S-idcard.jpg'),
(4, 'Joko', '321123', 0, 'Medan', '1971-11-24', 'Medan', 'Medan', '654654654', '654654', '654654654', '654@654.654', 'DIMG.Joko-282092530530-0_600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `id` int(11) NOT NULL,
  `nama` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`id`, `nama`) VALUES
(1, 'Lantai 1'),
(2, 'Lantai 2');

-- --------------------------------------------------------

--
-- Table structure for table `item_kwitansi`
--

CREATE TABLE `item_kwitansi` (
  `id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama_barang` char(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kode_barang` char(50) NOT NULL,
  `no_resi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_jualan`
--

CREATE TABLE `jenis_jualan` (
  `id` int(11) NOT NULL,
  `jns_jualan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_jualan`
--

INSERT INTO `jenis_jualan` (`id`, `jns_jualan`) VALUES
(2, 'Kemeja'),
(2, 'Polo'),
(3, 'Roti'),
(3, 'Kemeja');

-- --------------------------------------------------------

--
-- Table structure for table `konversi`
--

CREATE TABLE `konversi` (
  `id` int(11) NOT NULL,
  `nilai_konversi` int(11) NOT NULL,
  `id_promo_or_tenant` int(11) NOT NULL,
  `tipe` enum('Promo','Tenant') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konversi`
--

INSERT INTO `konversi` (`id`, `nilai_konversi`, `id_promo_or_tenant`, `tipe`) VALUES
(1, 5000, 1, 'Promo'),
(2, 3000, 3, 'Tenant');

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `no_resi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_konversi` int(11) NOT NULL,
  `id_tenant` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kwitansi`
--

INSERT INTO `kwitansi` (`no_resi`, `tanggal`, `id_konversi`, `id_tenant`, `id_customer`) VALUES
(34624724, '2016-12-22', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lisensi`
--

CREATE TABLE `lisensi` (
  `id` int(11) NOT NULL,
  `lisensi` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lisensi`
--

INSERT INTO `lisensi` (`id`, `lisensi`) VALUES
(2, 'Alisan'),
(3, 'Alisan'),
(3, 'RotiBoy');

-- --------------------------------------------------------

--
-- Table structure for table `marchendise_customer`
--

CREATE TABLE `marchendise_customer` (
  `id` int(11) NOT NULL,
  `id_tukar_point_marchendise` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marchendise_customer`
--

INSERT INTO `marchendise_customer` (`id`, `id_tukar_point_marchendise`, `id_customer`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `merk_dagang`
--

CREATE TABLE `merk_dagang` (
  `id` int(11) NOT NULL,
  `merk_dagang` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk_dagang`
--

INSERT INTO `merk_dagang` (`id`, `merk_dagang`) VALUES
(2, 'Alisan'),
(2, 'Crocodile'),
(3, 'Alisan'),
(3, 'Crocodile');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `nama` char(50) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `tempat_lahir` char(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_ktp` char(50) NOT NULL,
  `alamat_surat` char(50) NOT NULL,
  `no_hp` char(50) NOT NULL,
  `pin_bb` char(50) NOT NULL,
  `no_wa` char(50) NOT NULL,
  `email` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `nama`, `no_ktp`, `tempat_lahir`, `tgl_lahir`, `alamat_ktp`, `alamat_surat`, `no_hp`, `pin_bb`, `no_wa`, `email`) VALUES
(1, 'Joko', '654258546', 'Medan', '0000-00-00', 'Jl.Solo', 'Jl.Solo', '654258654', '654654', '2454685', 'joko@joko.com'),
(2, 'Susilo', '0011', 'Aceh', '2016-12-06', 'Jl.Solo', 'Jl.Solo', '654654654', '654654', '654654654', 'kajsdh@jhfsd.vom');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `id` int(11) NOT NULL,
  `tgl_topup` date NOT NULL,
  `point` int(11) NOT NULL,
  `sudah_dipakai` int(11) NOT NULL,
  `status` char(50) NOT NULL,
  `date_expired` date NOT NULL,
  `no_resi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `start_periode` date NOT NULL,
  `end_periode` date NOT NULL,
  `apply_in` char(50) NOT NULL,
  `status` char(50) NOT NULL,
  `date_expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `start_periode`, `end_periode`, `apply_in`, `status`, `date_expired`) VALUES
(1, '2016-12-01', '2016-12-31', 'Tokoedia,Zolora,Bukalapak', 'Berlaku', '2017-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id` int(11) NOT NULL,
  `nama_toko` char(50) NOT NULL,
  `jns_jualan` char(50) NOT NULL,
  `merk_dagang` char(50) NOT NULL,
  `lisensi` char(50) NOT NULL,
  `email_toko` char(50) DEFAULT NULL,
  `tlpn_toko` char(50) DEFAULT NULL,
  `wa_toko` char(50) DEFAULT NULL,
  `fb_toko` char(50) DEFAULT NULL,
  `instagram_toko` char(50) DEFAULT NULL,
  `status_toko` char(50) NOT NULL,
  `id_lantai` int(11) NOT NULL,
  `id_zoning` int(11) NOT NULL,
  `id_blok` int(11) NOT NULL,
  `id_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id`, `nama_toko`, `jns_jualan`, `merk_dagang`, `lisensi`, `email_toko`, `tlpn_toko`, `wa_toko`, `fb_toko`, `instagram_toko`, `status_toko`, `id_lantai`, `id_zoning`, `id_blok`, `id_owner`) VALUES
(1, 'Maju Juang', 'Kemeja,Polo', 'Alisan,Crocodile', 'Alisan', 'toko_joko@gmail.com', '082408240824', '082408240824', 'joko', 'joko', 'Buka', 1, 1, 1, 1),
(2, 'Maju Juang', 'Kemeja,Polo', 'Alisan,Crocodile', 'Alisan', 'toko_joko@gmail.com', '082408240824', '082408240824', 'joko', 'joko', 'Buka', 1, 1, 1, 1),
(3, 'Susilo CV', 'Roti,Kemeja', 'Alisan,Crocodile', 'Alisan,RotiBoy', 'toko_joko@gmail.com', '082408240824', '082408240824', 'joko', 'joko', 'Buka', 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tukar_point_marchendise`
--

CREATE TABLE `tukar_point_marchendise` (
  `id` int(11) NOT NULL,
  `nama_marchendise` char(50) NOT NULL,
  `keterangan` char(50) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `harga_tukar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tukar_point_marchendise`
--

INSERT INTO `tukar_point_marchendise` (`id`, `nama_marchendise`, `keterangan`, `periode_awal`, `periode_akhir`, `harga_tukar`) VALUES
(1, 'Mug', '1 Mug 800 Point', '2016-12-01', '2016-12-31', 800),
(2, 'Payung', '1 Payung 2000', '2016-12-01', '2017-01-31', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tukar_point_undian`
--

CREATE TABLE `tukar_point_undian` (
  `id` int(11) NOT NULL,
  `nama_undian` char(50) NOT NULL,
  `keterangan` char(50) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `harga_tukar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tukar_point_undian`
--

INSERT INTO `tukar_point_undian` (`id`, `nama_undian`, `keterangan`, `periode_awal`, `periode_akhir`, `harga_tukar`) VALUES
(1, 'Akhir Tahun', 'akhir tahun 2016', '2016-12-01', '2016-12-31', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tukar_point_voucher`
--

CREATE TABLE `tukar_point_voucher` (
  `id` int(11) NOT NULL,
  `nama_voucher` char(50) NOT NULL,
  `keterangan` char(50) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `harga_tukar` int(11) NOT NULL,
  `nilai_tukar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tukar_point_voucher`
--

INSERT INTO `tukar_point_voucher` (`id`, `nama_voucher`, `keterangan`, `periode_awal`, `periode_akhir`, `harga_tukar`, `nilai_tukar`) VALUES
(1, 'Natal', '1 kali pakai', '2016-12-01', '2016-12-31', 1000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `undian_customer`
--

CREATE TABLE `undian_customer` (
  `id` int(11) NOT NULL,
  `no_undian` char(50) NOT NULL,
  `id_tukar_point_undian` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undian_customer`
--

INSERT INTO `undian_customer` (`id`, `no_undian`, `id_tukar_point_undian`, `id_customer`) VALUES
(1, 'X9V8WXUZXDDCB', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'f970e2767d0cfe75876ea857f92e319b');

-- --------------------------------------------------------

--
-- Table structure for table `voucher_customer`
--

CREATE TABLE `voucher_customer` (
  `id` int(11) NOT NULL,
  `kode_voucher` varchar(225) NOT NULL,
  `id_tukar_point_voucher` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher_customer`
--

INSERT INTO `voucher_customer` (`id`, `kode_voucher`, `id_tukar_point_voucher`, `id_customer`) VALUES
(3, '84ddfb34126fc3a48ee38d7044e87276', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zoning`
--

CREATE TABLE `zoning` (
  `id` int(11) NOT NULL,
  `nama` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zoning`
--

INSERT INTO `zoning` (`id`, `nama`) VALUES
(1, 'Pakaian'),
(2, 'Makanan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_kwitansi`
--
ALTER TABLE `item_kwitansi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_resi` (`no_resi`);

--
-- Indexes for table `konversi`
--
ALTER TABLE `konversi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`no_resi`),
  ADD KEY `id_konversi` (`id_konversi`),
  ADD KEY `id_tenant` (`id_tenant`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `marchendise_customer`
--
ALTER TABLE `marchendise_customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tukar_point_marchendise` (`id_tukar_point_marchendise`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_resi` (`no_resi`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lantai` (`id_lantai`),
  ADD KEY `id_zoning` (`id_zoning`),
  ADD KEY `id_blok` (`id_blok`),
  ADD KEY `id_owner` (`id_owner`);

--
-- Indexes for table `tukar_point_marchendise`
--
ALTER TABLE `tukar_point_marchendise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tukar_point_undian`
--
ALTER TABLE `tukar_point_undian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tukar_point_voucher`
--
ALTER TABLE `tukar_point_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undian_customer`
--
ALTER TABLE `undian_customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tukar_point_undian` (`id_tukar_point_undian`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher_customer`
--
ALTER TABLE `voucher_customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tukar_point_voucher` (`id_tukar_point_voucher`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `zoning`
--
ALTER TABLE `zoning`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `floor`
--
ALTER TABLE `floor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `item_kwitansi`
--
ALTER TABLE `item_kwitansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konversi`
--
ALTER TABLE `konversi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `marchendise_customer`
--
ALTER TABLE `marchendise_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tukar_point_marchendise`
--
ALTER TABLE `tukar_point_marchendise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tukar_point_undian`
--
ALTER TABLE `tukar_point_undian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tukar_point_voucher`
--
ALTER TABLE `tukar_point_voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `undian_customer`
--
ALTER TABLE `undian_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `voucher_customer`
--
ALTER TABLE `voucher_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zoning`
--
ALTER TABLE `zoning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_kwitansi`
--
ALTER TABLE `item_kwitansi`
  ADD CONSTRAINT `item_kwitansi_ibfk_1` FOREIGN KEY (`no_resi`) REFERENCES `kwitansi` (`no_resi`);

--
-- Constraints for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD CONSTRAINT `kwitansi_ibfk_1` FOREIGN KEY (`id_konversi`) REFERENCES `konversi` (`id`),
  ADD CONSTRAINT `kwitansi_ibfk_2` FOREIGN KEY (`id_tenant`) REFERENCES `tenant` (`id`),
  ADD CONSTRAINT `kwitansi_ibfk_3` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`);

--
-- Constraints for table `marchendise_customer`
--
ALTER TABLE `marchendise_customer`
  ADD CONSTRAINT `marchendise_customer_ibfk_1` FOREIGN KEY (`id_tukar_point_marchendise`) REFERENCES `tukar_point_marchendise` (`id`),
  ADD CONSTRAINT `marchendise_customer_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`);

--
-- Constraints for table `point`
--
ALTER TABLE `point`
  ADD CONSTRAINT `point_ibfk_1` FOREIGN KEY (`no_resi`) REFERENCES `kwitansi` (`no_resi`);

--
-- Constraints for table `tenant`
--
ALTER TABLE `tenant`
  ADD CONSTRAINT `tenant_ibfk_1` FOREIGN KEY (`id_lantai`) REFERENCES `floor` (`id`),
  ADD CONSTRAINT `tenant_ibfk_2` FOREIGN KEY (`id_zoning`) REFERENCES `zoning` (`id`),
  ADD CONSTRAINT `tenant_ibfk_3` FOREIGN KEY (`id_blok`) REFERENCES `block` (`id`),
  ADD CONSTRAINT `tenant_ibfk_4` FOREIGN KEY (`id_owner`) REFERENCES `owner` (`id`);

--
-- Constraints for table `undian_customer`
--
ALTER TABLE `undian_customer`
  ADD CONSTRAINT `undian_customer_ibfk_1` FOREIGN KEY (`id_tukar_point_undian`) REFERENCES `tukar_point_undian` (`id`),
  ADD CONSTRAINT `undian_customer_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`);

--
-- Constraints for table `voucher_customer`
--
ALTER TABLE `voucher_customer`
  ADD CONSTRAINT `voucher_customer_ibfk_1` FOREIGN KEY (`id_tukar_point_voucher`) REFERENCES `tukar_point_voucher` (`id`),
  ADD CONSTRAINT `voucher_customer_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
