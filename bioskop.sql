/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.22-MariaDB : Database - bioskop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bioskop` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `bioskop`;

/*Table structure for table `bioskop` */

DROP TABLE IF EXISTS `bioskop`;

CREATE TABLE `bioskop` (
  `id_bioskop` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bioskop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_bioskop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bioskop` */

insert  into `bioskop`(`id_bioskop`,`nama_bioskop`,`alamat`,`created_at`,`updated_at`) values 
('BNP001','Pascal','Bandung',NULL,NULL);

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `id_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_booking` date NOT NULL,
  `jam_booking` time NOT NULL,
  `tenggat_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kursi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_kursi` double NOT NULL,
  `harga` double NOT NULL,
  `qr_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_booking`),
  UNIQUE KEY `booking_id_payment_unique` (`id_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `booking` */

insert  into `booking`(`id_booking`,`id_customer`,`id_payment`,`id_jadwal`,`tanggal_booking`,`jam_booking`,`tenggat_bayar`,`kursi`,`jumlah_kursi`,`harga`,`qr_tiket`,`created_at`,`updated_at`) values 
('BK10000001','1','PY10000001','JDKM001','2023-02-14','12:00:00','2023-02-14 07:57:59','A1',1,16000,'16000','2023-02-14','2023-02-14 07:56:59'),
('BK10000002','1','PY10000002','JDKM001','2023-02-14','12:00:00','done','A2',1,16000,'16000','2023-02-14','2023-02-14 08:05:01'),
('BK10000003','1','PY10000003','JDKM001','2023-02-14','12:00:00','2023-02-14 08:16:08','A1',1,16000,'16000','2023-02-14','2023-02-14 08:15:08'),
('BK10000004','1','PY10000004','JDP2389','2023-02-14','09:30:00','done','A3',1,16000,'16000','2023-02-14','2023-02-14 08:27:50'),
('BK10000005','1','PY10000005','JDKM001','2023-02-20','12:00:00','done','A7',1,16000,'16000','2023-02-20','2023-02-20 11:25:37'),
('BK10000006','1','PY10000006','JDP2389','2023-02-20','19:30:00','done','A1, A2, A3',3,48000,'48000','2023-02-20','2023-02-20 14:08:33'),
('BK50000007','5','PY50000007','JDKM001','2023-03-01','23:00:00','done','A1',1,16000,'16000','2023-03-01','2023-03-01 21:11:12'),
('BK50000008','5','PY50000008','JDKM001','2023-03-01','23:00:00','2023-03-01 21:21:06','G3',1,16000,'16000','2023-03-01','2023-03-01 21:20:06');

/*Table structure for table `detail_bioskop` */

DROP TABLE IF EXISTS `detail_bioskop`;

CREATE TABLE `detail_bioskop` (
  `id_db` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_bioskop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_db`),
  KEY `detail_bioskop_id_bioskop_foreign` (`id_bioskop`),
  KEY `detail_bioskop_id_jadwal_foreign` (`id_jadwal`),
  CONSTRAINT `detail_bioskop_id_bioskop_foreign` FOREIGN KEY (`id_bioskop`) REFERENCES `bioskop` (`id_bioskop`) ON DELETE CASCADE,
  CONSTRAINT `detail_bioskop_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detail_bioskop` */

insert  into `detail_bioskop`(`id_db`,`id_bioskop`,`id_jadwal`,`created_at`,`updated_at`) values 
('DB001','BNP001','JDKM001',NULL,NULL),
('DB002','BNP001','JDKM003',NULL,NULL);

/*Table structure for table `detail_booking` */

DROP TABLE IF EXISTS `detail_booking`;

CREATE TABLE `detail_booking` (
  `id_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `row` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_booking_id_booking_foreign` (`id_booking`),
  CONSTRAINT `detail_booking_id_booking_foreign` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detail_booking` */

/*Table structure for table `detail_jam` */

DROP TABLE IF EXISTS `detail_jam`;

CREATE TABLE `detail_jam` (
  `id_det_jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_db` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_tayang` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `detail_jam_id_db_foreign` (`id_db`),
  KEY `detail_jam_id_jadwal_foreign` (`id_jadwal`),
  CONSTRAINT `detail_jam_id_db_foreign` FOREIGN KEY (`id_db`) REFERENCES `detail_bioskop` (`id_db`) ON DELETE CASCADE,
  CONSTRAINT `detail_jam_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `detail_bioskop` (`id_jadwal`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detail_jam` */

insert  into `detail_jam`(`id_det_jam`,`id_db`,`id_jadwal`,`jam_tayang`,`created_at`,`updated_at`) values 
('DT001','DB001','JDKM001','23:00:00',NULL,NULL),
('DT002','DB002','JDKM003','17:00:00',NULL,NULL);

/*Table structure for table `detail_jenis_studio` */

DROP TABLE IF EXISTS `detail_jenis_studio`;

CREATE TABLE `detail_jenis_studio` (
  `id_jenis_studio` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_studio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detail_jenis_studio` */

insert  into `detail_jenis_studio`(`id_jenis_studio`,`jenis_studio`,`harga`,`created_at`,`updated_at`) values 
('JSR001','Regular',16000.00,NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `film` */

DROP TABLE IF EXISTS `film`;

CREATE TABLE `film` (
  `id_film` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sutradara` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cast` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `film` */

insert  into `film`(`id_film`,`judul_film`,`jenis_film`,`producer`,`sutradara`,`penulis`,`cast`,`sinopsis`,`link_trailer`,`image`,`created_at`,`updated_at`) values 
('FLAWD115','Creed III','Horror','kanti','kanti','kantii','kanti','<div>CONTOH</div>','wwwww','film-images/efNvJJWrBL2nzkwA5MTy88an7xSQYzCD9vx1Knbe.jpg',NULL,NULL),
('FLHBA130','Titanic','Drama','Robert Ronny','Ryan Coogler','Adam Sztykiel, Rory Haines, Sohrab Noshirvani','Letitia Wright, Lupita Nyong\'o, Tenoch Huerta, Angela Bassett, Martin Freeman, Danai Gurira, Michaela Coel, Dominique Thorne, Winston Duke, Richard Schiff, Mabel Cadena','<div>rip love&nbsp;<br><br></div>','https://youtube.com/embed/d9MyW72ELq0','film-images/XAA52rFnLTfsQWVt8ZP6yJDemEtbbTsx9uHqtE43.jpg',NULL,NULL),
('FLHKL130','Kembang Api','Drama','Robert Ronny','Jaume Collet-Serra','Adam Sztykiel, Rory Haines, Sohrab Noshirvani','Emir Mahira, Zee JKT48, Gaby Warouw, Andrew Barret, Farandika, Shatora Narajan, Angel Sianturi, Kezia Caroline, Chelcy Clarissa','<div>halo</div>','https://youtube.com/embed/d9MyW72ELq0','film-images/jwlVrKNgEeVU3wL7KRpdvBtleaPUtNPCgHExJ6gP.jpg',NULL,NULL),
('FLKDS122','Kiko in the Deep Sea','Animation, Family, Adventure','Liliana Tanoesoedibjo, Ella Kartika, Sei Young Che','Sally Wongso, Heri Kurniawan, Dezi Ruwah Rezeki','Widhi Saputro, Luthfiana Abdullah, Mega Tania','Felicya Angellista, Arbani Yasiz, Robby Purba, Anastasia Amelia, Clara Dewanto, Ika Saraswati, Sidik Permana, Yani Pahlusi, Sani Oktania','<div>kanti kantii</div>','wwwww','film-images/KEeUmLfmMbvMxVkCUoIUdfqS9EbqyDWUAOJTQ7Zb.jpg',NULL,NULL),
('FLWK140','Waktu Maghrib','Action, Adventure, Sci-Fi','Boney Kapoor','Jaume Collet-Serra','Ginanti S.Rona','Dwayne Johnson, Viola Davis, Sarah Shahi, Pierce Brosnan, Noah Centineo, Aldis Hodge, Angel Rosario Jr., Joseph Gatt, Mohammed Amer, Quintessa Swindell','<div>horror</div>','https://youtube.com/embed/wlp9yv33nWA','film-images/cPpmagxWtjIJ3lr8JnfXPWk1HI59NAfZ5LbIqzRR.jpg',NULL,NULL);

/*Table structure for table `history_jadwal` */

DROP TABLE IF EXISTS `history_jadwal`;

CREATE TABLE `history_jadwal` (
  `id_jadwal` varchar(255) NOT NULL,
  `id_studio` varchar(255) NOT NULL,
  `id_film` varchar(255) NOT NULL,
  `tgl_tayang_awal` date NOT NULL,
  `tgl_tayang_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `history_jadwal` */

insert  into `history_jadwal`(`id_jadwal`,`id_studio`,`id_film`,`tgl_tayang_awal`,`tgl_tayang_akhir`) values 
('JDP2389','STR2120','FLHBA130','2023-02-25','2023-02-28'),
('JDP2326','STR2120','FLWK140','2023-02-23','2023-03-03'),
('JDP0089','STR2120','DL009','2023-02-19','2023-02-28'),
('JDP1717','STR616','FLWK140','2023-02-27','2023-02-28');

/*Table structure for table `jadwal` */

DROP TABLE IF EXISTS `jadwal`;

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_tayang_awal` date NOT NULL,
  `tgl_tayang_akhir` date NOT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `jadwal_id_studio_foreign` (`id_studio`),
  KEY `jadwal_id_film_foreign` (`id_film`),
  CONSTRAINT `jadwal_id_film_foreign` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE,
  CONSTRAINT `jadwal_id_studio_foreign` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jadwal` */

insert  into `jadwal`(`id_jadwal`,`id_studio`,`id_film`,`tgl_tayang_awal`,`tgl_tayang_akhir`) values 
('JDKM001','STR2120','FLHKL130','2023-03-11','2024-04-18'),
('JDKM003','STR2120','FLHBA130','2023-03-06','2023-03-22');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1177 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(804,'2022_10_18_161822_create_kota_table',1),
(809,'2022_10_25_163100_create_cart_table',1),
(810,'2022_11_21_013302_create_booking_later_table',1),
(1030,'2014_10_12_000000_create_users_table',2),
(1031,'2014_10_12_100000_create_password_resets_table',2),
(1032,'2019_08_19_000000_create_failed_jobs_table',2),
(1034,'2022_09_18_071410_create_roles_table',2),
(1035,'2022_09_18_071921_add_role_id_to_users_table',2),
(1036,'2022_10_15_221054_create_detail_jenis_studio_table',2),
(1037,'2022_10_15_221109_create_studio_table',2),
(1050,'2023_02_13_142350_create_studio_table',5),
(1159,'2019_12_14_000001_create_personal_access_tokens_table',6),
(1160,'2023_02_09_193916_create_trigger_tbls_table',6),
(1161,'2023_02_10_070954_create_store_procedure',6),
(1162,'2023_02_10_143106_create_detail_jenis_studio_table',6),
(1163,'2023_02_13_141529_drop_table_kota_table',6),
(1164,'2023_02_13_141957_create_film_table',6),
(1165,'2023_02_13_142150_create_studio_table',6),
(1166,'2023_02_13_142259_create_jadwal_table',6),
(1167,'2023_02_13_142700_create_trigger_jadwal_tbls_table',6),
(1168,'2023_02_13_144112_create_booking_table',6),
(1169,'2023_02_13_144346_create_payment_table',6),
(1170,'2023_02_13_144652_create_detail_booking_table',6),
(1171,'2023_02_13_144900_create_bioskop_table',6),
(1172,'2023_02_13_144958_create_detail_bioskop_table',6),
(1173,'2023_02_13_145057_create_detail_jam_table',6),
(1174,'2023_02_14_071036_create_detail_jam_table',7),
(1175,'2023_03_02_213114_jumlah_beli',8),
(1176,'2023_03_03_070732_procedure_jumlah',8);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_bank` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_bayar` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `bukti_bayar` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `payment_id_payment_foreign` (`id_payment`),
  KEY `payment_id_booking_foreign` (`id_booking`),
  CONSTRAINT `payment_id_booking_foreign` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`) ON DELETE CASCADE,
  CONSTRAINT `payment_id_payment_foreign` FOREIGN KEY (`id_payment`) REFERENCES `booking` (`id_payment`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `payment` */

insert  into `payment`(`id_payment`,`id_booking`,`id_bank`,`harga`,`payment_type`,`status_bayar`,`bukti_bayar`,`created_at`,`updated_at`) values 
('PY10000001','BK10000001','',16000,'mandiri','2','','2024-04-02 07:56:59','2023-02-14 07:56:59'),
('PY10000002','BK10000002','',16000,'mandiri','1','','2023-04-13 08:05:01','2023-02-14 08:05:01'),
('PY10000003','BK10000003','',16000,'mandiri','2','','2023-08-24 08:15:08','2023-02-14 08:15:08'),
('PY10000004','BK10000004','',16000,'mandiri','1','','2023-02-14 08:27:50','2023-02-14 08:27:50'),
('PY10000005','BK10000005','',16000,'mandiri','1','','2023-02-20 11:25:37','2023-02-20 11:25:37'),
('PY10000006','BK10000006','',48000,'mandiri','1','','2023-08-17 14:08:33','2023-02-20 14:08:33'),
('PY50000007','BK50000007','',16000,'mandiri','1','','2024-07-17 21:11:12','2023-03-01 21:11:12');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

/*Table structure for table `studio` */

DROP TABLE IF EXISTS `studio`;

CREATE TABLE `studio` (
  `id_studio` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audiotori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_row` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_kursi_perrow` double NOT NULL,
  PRIMARY KEY (`id_studio`),
  KEY `studio_id_jenis_studio_foreign` (`id_jenis_studio`),
  CONSTRAINT `studio_id_jenis_studio_foreign` FOREIGN KEY (`id_jenis_studio`) REFERENCES `detail_jenis_studio` (`id_jenis_studio`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `studio` */

insert  into `studio`(`id_studio`,`id_jenis_studio`,`audiotori`,`jumlah_row`,`jumlah_kursi_perrow`) values 
('STR2120','JSR001','1','H',5),
('STR616','JSR001','6','G',4),
('STV116','JSR001','2','E',3);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` double NOT NULL DEFAULT 1000000,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`phone`,`email`,`saldo`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`is_admin`) values 
(1,'bebe',86871587716,'bebe@gmail.com',1000000,NULL,'$2y$10$YSLy/GxWamzIbNU0SXJftub1HplopuOHU4LyUMK6Rlhkn/gDYl/JO',NULL,'2023-02-13 18:55:53','2023-02-13 18:55:53','user'),
(2,'jason',85871578816,'jason@gmail.com',1000000,NULL,'$2y$10$wTzBUFeeSJrsXwyKT9Eveeoy/94HtuAL8jKxDuB0ijNZcMZ8tTUTC',NULL,'2023-02-20 10:18:51','2023-02-20 10:18:51','admin_payment'),
(3,'rexha',86871567715,'rexha@gmail.com',1000000,NULL,'$2y$10$5tmsM2n3osCMa6WWs7c/kOu0NJxZkCLum/XmsaFqDtOGNjzs2NKMa',NULL,'2023-02-20 10:20:13','2023-02-20 10:20:13','admin_studio'),
(4,'derulo',85767565514,'derulo@gmail.com',1000000,NULL,'$2y$10$wT2DQhdanY2HwrsAyT9qMe8ZPN5WoZyBXtRUM2EIS3jW9vA91Kvv2',NULL,'2023-02-20 10:22:09','2023-02-20 10:22:09','admin_film'),
(5,'gita',85871589916,'gitaauliahafid@gmail.com',1000000,NULL,'$2y$10$94.HDqA.BdNPLAeDn1IoO.fvukFq8EhjNtgomGB77oLm6QTRTR7ta',NULL,'2023-03-01 21:08:56','2023-03-01 21:08:56','user');

/* Trigger structure for table `history_jadwal` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `delete_jadwal` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `delete_jadwal` BEFORE DELETE ON `history_jadwal` FOR EACH ROW BEGIN
        DECLARE DATA INT DEFAULT 0;
        SELECT COUNT(*) INTO DATA FROM history_jadwal WHERE id_jadwal = old.id_jadwal;
        
        IF DATA > 0 THEN
        
          INSERT INTO jadwal SET id_jadwal = old.id_jadwal,
        id_studio=old.id_studio,
        id_film=old.id_film,
        tgl_tayang_awal=old.tgl_tayang_awal,
        tgl_tayang_akhir=old.tgl_tayang_akhir;
        
    
    END IF;
            END */$$


DELIMITER ;

/* Trigger structure for table `jadwal` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `carbon_jadwal` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `carbon_jadwal` BEFORE DELETE ON `jadwal` FOR EACH ROW BEGIN
        DECLARE DATA INT DEFAULT 0;
        SELECT COUNT(*) INTO DATA FROM jadwal WHERE id_jadwal = old.id_jadwal;
        
        IF DATA > 0 THEN
        
          INSERT INTO history_jadwal SET id_jadwal = old.id_jadwal,
        id_studio=old.id_studio,
        id_film=old.id_film,
        tgl_tayang_awal=old.tgl_tayang_awal,
        tgl_tayang_akhir=old.tgl_tayang_akhir;
        
    
    END IF;
            END */$$


DELIMITER ;

/* Function  structure for function  `date_movie` */

/*!50003 DROP FUNCTION IF EXISTS `date_movie` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `date_movie`(`tgl_tayang_akhir` DATE, `tgl_tayang_awal` DATE) RETURNS int(11)
BEGIN
RETURN datediff(tgl_tayang_akhir , tgl_tayang_awal);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `buy` */

/*!50003 DROP PROCEDURE IF EXISTS  `buy` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `buy`()
BEGIN
SELECT id_customer, COUNT(id_customer) AS jumlah FROM booking GROUP BY id_customer;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `buyy` */

/*!50003 DROP PROCEDURE IF EXISTS  `buyy` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `buyy`()
BEGIN
        SELECT id_customer, COUNT(id_customer) AS jumlah FROM booking GROUP BY id_customer;       
        END */$$
DELIMITER ;

/* Procedure structure for procedure `jumlahPembelian` */

/*!50003 DROP PROCEDURE IF EXISTS  `jumlahPembelian` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `jumlahPembelian`(IN `idx` INT)
BEGIN
            SELECT id_customer, COUNT(id_customer) AS jumlah FROM booking GROUP BY id_customer;
        END */$$
DELIMITER ;

/* Procedure structure for procedure `jumlah_beli` */

/*!50003 DROP PROCEDURE IF EXISTS  `jumlah_beli` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `jumlah_beli`(IN jumlahh VARCHAR (100))
BEGIN
            SELECT COUNT(id_customer) FROM `booking` WHERE `id_customer` = jumlahh;        
        END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
