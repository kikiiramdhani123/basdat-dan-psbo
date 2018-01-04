-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table agriculturedb.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL,
  `kon_id` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kon_id` (`kon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.admin: ~6 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`, `level`, `kon_id`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0),
	(2, 'syihab', '11d5eab53b8d762ed902ef8b60c3dac4', 'siswa', 9),
	(3, '1002', 'fba9d88164f3e2d9109ee770223212a0', 'guru', 5),
	(4, '11090674', '2c3e4855238fa4b45a1c6aa7f3d13867', 'siswa', 4),
	(5, '1003', 'aa68c75c4a77c87f97fb686b2f068676', 'guru', 6),
	(6, '12090677', 'baaf63831059795a0cedec6d705ad519', 'siswa', 7);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.guru
CREATE TABLE IF NOT EXISTS `guru` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `lulusan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.guru: ~4 rows (approximately)
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
INSERT INTO `guru` (`id`, `nip`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `lulusan`) VALUES
	(2, '1001', 'Ir. Joko Widodo', '', '', '0000-00-00', 'L', ''),
	(4, '1000', 'Dr. Abdulrahman Wahid', '', '', '0000-00-00', 'L', ''),
	(5, '1002', 'Ir. Baharudin Jusuf Habibie', '', '', '0000-00-00', 'L', ''),
	(6, '1003', 'Faisal Mahya Lubis', '', '', '0000-00-00', 'L', '');
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.guru_modul
CREATE TABLE IF NOT EXISTS `guru_modul` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_guru` (`id_guru`),
  KEY `id_mapel` (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.guru_modul: ~8 rows (approximately)
/*!40000 ALTER TABLE `guru_modul` DISABLE KEYS */;
INSERT INTO `guru_modul` (`id`, `id_guru`, `id_mapel`) VALUES
	(4, 6, 2),
	(10, 2, 2),
	(13, 4, 2),
	(14, 4, 3),
	(15, 4, 4),
	(17, 5, 2),
	(18, 5, 3),
	(19, 5, 4);
/*!40000 ALTER TABLE `guru_modul` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.guru_tes
CREATE TABLE IF NOT EXISTS `guru_tes` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL,
  `nama_ujian` varchar(200) NOT NULL,
  `jumlah_soal` int(6) NOT NULL,
  `waktu` int(6) NOT NULL,
  `jenis` enum('acak','set') NOT NULL,
  `detil_jenis` varchar(500) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `terlambat` int(3) NOT NULL,
  `token` varchar(5) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_guru` (`id_guru`),
  KEY `id_mapel` (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.guru_tes: ~2 rows (approximately)
/*!40000 ALTER TABLE `guru_tes` DISABLE KEYS */;
INSERT INTO `guru_tes` (`id`, `id_guru`, `id_mapel`, `nama_ujian`, `jumlah_soal`, `waktu`, `jenis`, `detil_jenis`, `tgl_mulai`, `terlambat`, `token`, `thumbnail`) VALUES
	(1, 6, 2, 'UAS 2017', 2, 60, 'acak', '', '2018-01-04 02:17:00', 15, '0', 'XRSLF'),
	(2, 6, 2, 'UAS2 2017', 2, 120, 'acak', '', '2018-01-04 00:00:00', 2018, '60', 'TGXSJ');
/*!40000 ALTER TABLE `guru_tes` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.kategori: ~0 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.keys
CREATE TABLE IF NOT EXISTS `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.keys: ~0 rows (approximately)
/*!40000 ALTER TABLE `keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `keys` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.komentar
CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `isi` text,
  `tanggal_komentar` datetime DEFAULT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.komentar: ~0 rows (approximately)
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.modul
CREATE TABLE IF NOT EXISTS `modul` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.modul: ~3 rows (approximately)
/*!40000 ALTER TABLE `modul` DISABLE KEYS */;
INSERT INTO `modul` (`id`, `nama`, `thumbnail`) VALUES
	(2, 'Agroindustri', NULL),
	(3, 'Agroekologi', NULL),
	(4, 'Agronomi', NULL);
/*!40000 ALTER TABLE `modul` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.murid
CREATE TABLE IF NOT EXISTS `murid` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` text,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.murid: ~8 rows (approximately)
/*!40000 ALTER TABLE `murid` DISABLE KEYS */;
INSERT INTO `murid` (`id`, `nama`, `nim`, `jurusan`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`) VALUES
	(1, 'Agus Yudhoyono', '12090671', 'Teknik Informatika', NULL, NULL, NULL, NULL),
	(2, 'Edi Baskoro Yudhoyono', '12090672', 'Teknik Informatika', NULL, NULL, NULL, NULL),
	(3, 'Puan Maharani', '11090673', 'Sistem Informasi', NULL, NULL, NULL, NULL),
	(4, 'Kaesang Pangarep', '11090674', 'Sistem Informasi', NULL, NULL, NULL, NULL),
	(5, 'Anisa Pohan', '12090675', 'Teknik Informatika', NULL, NULL, NULL, NULL),
	(6, 'Gibran Rakabuming Raka', '11090676', 'Sistem Informasi', NULL, NULL, NULL, NULL),
	(7, 'Kahiyang Ayu', '12090677', 'Teknik Informatika', NULL, NULL, NULL, NULL),
	(9, 'Muhamad Syihabudin', '5A27E', 'Ilmu Komputer', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `murid` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.soal
CREATE TABLE IF NOT EXISTS `soal` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL,
  `bobot` int(2) NOT NULL,
  `file` varchar(150) NOT NULL,
  `tipe_file` varchar(50) NOT NULL,
  `soal` longtext NOT NULL,
  `opsi_a` longtext NOT NULL,
  `opsi_b` longtext NOT NULL,
  `opsi_c` longtext NOT NULL,
  `opsi_d` longtext NOT NULL,
  `opsi_e` longtext NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `jml_benar` int(6) NOT NULL,
  `jml_salah` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_guru` (`id_guru`),
  KEY `id_mapel` (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.soal: ~4 rows (approximately)
/*!40000 ALTER TABLE `soal` DISABLE KEYS */;
INSERT INTO `soal` (`id`, `id_guru`, `id_mapel`, `bobot`, `file`, `tipe_file`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban`, `tgl_input`, `jml_benar`, `jml_salah`) VALUES
	(52, 6, 4, 10, '', '', '<p>Tanaman apakah yang menghasilkan untung banyak??</p>\r\n', '#####<p>Tanaman Hias</p>\r\n', '#####<p>Tanaman sayuran</p>\r\n', '#####<p>Tanaman buah-buahan</p>\r\n', '#####<p>Semua Benar</p>\r\n', '', 'A', '0000-00-00 00:00:00', 0, 0),
	(53, 6, 2, 1, '', '', '<p>Soal 1</p>\r\n', '#####<p>a</p>\r\n', '#####<p>b</p>\r\n', '#####<p>c</p>\r\n', '#####<p>d</p>\r\n', '', 'A', '0000-00-00 00:00:00', 0, 2),
	(54, 6, 2, 1, '', '', '<p>Soal 2</p>\r\n', '#####<p>a</p>\r\n', '#####<p>b</p>\r\n', '#####<p>c</p>\r\n', '#####<p>d</p>\r\n', '', 'B', '0000-00-00 00:00:00', 0, 3),
	(55, 6, 2, 1, '', '', '<p>Soal 3</p>\r\n', '#####<p>a</p>\r\n', '#####<p>b</p>\r\n', '#####<p>c</p>\r\n', '#####<p>d</p>\r\n', '', 'B', '0000-00-00 00:00:00', 2, 1);
/*!40000 ALTER TABLE `soal` ENABLE KEYS */;

-- Dumping structure for table agriculturedb.ujian
CREATE TABLE IF NOT EXISTS `ujian` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_tes` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `list_soal` longtext NOT NULL,
  `list_jawaban` longtext NOT NULL,
  `jml_benar` int(6) NOT NULL,
  `nilai` decimal(10,2) NOT NULL,
  `nilai_bobot` decimal(10,2) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `status` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tes` (`id_tes`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table agriculturedb.ujian: ~3 rows (approximately)
/*!40000 ALTER TABLE `ujian` DISABLE KEYS */;
INSERT INTO `ujian` (`id`, `id_tes`, `id_user`, `list_soal`, `list_jawaban`, `jml_benar`, `nilai`, `nilai_bobot`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
	(1, 1, 4, '54,55', '54:A,55:B', 1, 50.00, 50.00, '2018-01-04 02:18:40', '2018-01-04 03:18:40', 'N'),
	(2, 2, 7, '54,53', '54:A,53:B', 0, 0.00, 0.00, '2018-01-04 04:42:18', '2018-01-04 06:42:18', 'N'),
	(3, 2, 4, '55,53', '55:A,53:C', 0, 0.00, 0.00, '2018-01-04 04:48:12', '2018-01-04 06:48:12', 'N');
/*!40000 ALTER TABLE `ujian` ENABLE KEYS */;

-- Dumping structure for trigger agriculturedb.hapus_guru
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `hapus_guru` AFTER DELETE ON `guru` FOR EACH ROW BEGIN
DELETE FROM soal WHERE soal.id_guru = OLD.id;
DELETE FROM admin WHERE admin.level = 'guru' AND admin.kon_id = OLD.id;
DELETE FROM guru_modul WHERE guru_modul.id_guru = OLD.id;
DELETE FROM guru_tes WHERE guru_tes.id_guru = OLD.id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger agriculturedb.hapus_modul
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `hapus_modul` AFTER DELETE ON `modul` FOR EACH ROW BEGIN
DELETE FROM soal WHERE soal.id_mapel = OLD.id;
DELETE FROM guru_modul WHERE guru_modul.id_mapel = OLD.id;
DELETE FROM guru_tes WHERE guru_tes.id_mapel = OLD.id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger agriculturedb.hapus_siswa
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `hapus_siswa` AFTER DELETE ON `murid` FOR EACH ROW BEGIN
DELETE FROM ujian WHERE ujian.id_user = OLD.id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
