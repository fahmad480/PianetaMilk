-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 03:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pianeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'faraaz@mhs.itenas.ac.id', 1, '2020-12-06 00:37:48', 1),
(2, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 01:09:20', 1),
(3, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 01:12:48', 1),
(4, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 01:13:50', 1),
(5, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 01:23:30', 1),
(6, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 02:10:26', 1),
(7, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 02:29:07', 1),
(8, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 07:50:34', 1),
(9, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 08:25:43', 1),
(10, '::1', 'hira@pianeta.com', 20, '2020-12-06 08:31:31', 1),
(11, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 08:36:04', 1),
(12, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 08:49:50', 1),
(13, '::1', 'hira@pianeta.com', 20, '2020-12-06 08:50:43', 1),
(14, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 10:45:32', 1),
(15, '::1', 'hani@pianeta.com', 21, '2020-12-06 10:56:29', 1),
(16, '::1', 'faraaz@pianeta.com', 1, '2020-12-06 10:57:02', 1),
(17, '::1', 'faraaz@pianeta.com', 1, '2020-12-15 21:47:58', 1),
(18, '::1', 'andrias@pianeta.com', 4, '2020-12-22 09:27:48', 1),
(19, '::1', 'andrias@pianeta.com', 4, '2020-12-22 22:51:13', 1),
(20, '::1', 'faraaz@pianeta.com', 1, '2020-12-24 07:34:46', 1),
(21, '::1', 'faraaz@pianeta.com', 1, '2020-12-27 03:43:37', 1),
(22, '::1', 'andrias@pianeta.com', 4, '2020-12-27 03:58:50', 1),
(23, '::1', 'faraaz@pianeta.com', 1, '2020-12-27 03:58:58', 1),
(24, '::1', 'andrias@pianeta.com', 4, '2020-12-27 04:03:27', 1),
(25, '::1', 'faraaz@pianeta.com', 1, '2020-12-27 09:03:28', 1),
(26, '::1', 'andrias@pianeta.com', 4, '2020-12-27 10:36:20', 1),
(27, '::1', 'faraaz@pianeta.com', 1, '2020-12-27 19:31:20', 1),
(28, '::1', 'faraaz@pianeta.com', 1, '2020-12-28 00:27:11', 1),
(29, '::1', 'faraaz@pianeta.com', 1, '2020-12-28 15:40:41', 1),
(30, '::1', 'faraaz@pianeta.com', 1, '2020-12-28 17:28:48', 1),
(31, '::1', 'faraaz@pianeta.com', 1, '2020-12-29 20:45:41', 1),
(32, '::1', 'faraaz@pianeta.com', 1, '2020-12-30 03:54:30', 1),
(33, '::1', 'faraaz@pianeta.com', 1, '2020-12-30 07:53:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) UNSIGNED NOT NULL,
  `image_url` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `image_url`, `title`, `description`) VALUES
(1, '/assets/img/slide_example.png', 'Judul 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(2, '/assets/img/slide_example.png', 'Judul 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(3, '/assets/img/slide_example.png', 'Judul 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `trx` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('1','0') NOT NULL,
  `comment` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `trx`, `date`, `status`, `comment`) VALUES
(1, 1, '2020-12-31', '1', 'tes'),
(2, 1, '2020-12-07', '1', ''),
(3, 1, '2020-12-10', '1', ''),
(5, 1, '2020-12-30', '1', '30 des 2020');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-12-01-143134', 'App\\Database\\Migrations\\Carousel', 'default', 'App', 1606833223, 1),
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1607236112, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` varchar(25) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `content`) VALUES
('aboutus', '&lt;p&gt;&lt;span style=&quot;font-size: 0.875rem;&quot;&gt;Siapakah Kami ?&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Kami adalah sekelompok supplier susu di kota bandung . Segala yang kami lakukan di PianetaMilk bertujuan untuk membuat semua anggota keluarga menikmati kemurnian susu perah yang berada di kota bandung. Dengan Menggunakan metode Refill. Dikemas dalam kemasan botol kaca dan diantar oleh kurir resmi dari PianetaMilk dengan tujuan yang baik . Inilah &quot; PianetaMilk Company &quot;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;'),
('business', ''),
('commitment', '<p style=\"text-align: left;\"><b>KOMITMEN KAMI :</b></p><ul><li style=\"text-align: left;\">Menjaga profesionalisme</li><li style=\"text-align: left;\">Memberi pelayanan yang terbaik untuk pelanggan</li><li style=\"text-align: left;\">Mendistribusikan susu tepat waktu</li><li style=\"text-align: left;\">Menjaga kepercayaan pelanggan</li></ul>'),
('contactus', '<div style=\"text-align: center;\"><span style=\"font-size: 0.875rem;\"><b>ANDA MENGALAMI KESUSAHAN ? SILAHKAN HUBUNGI KAMI DI AKUN SOSIAL MEDIA KAMI</b></span></div><div style=\"text-align: center;\"><span style=\"font-size: 0.875rem;\"><br></span></div><div style=\"text-align: center;\"><span style=\"font-size: 0.875rem;\"><br></span></div><div style=\"text-align: center;\"><span style=\"font-size: 0.875rem;\">TERIMAKASIH</span></div>'),
('cows', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\">Susu yang bermutu tinggi hanya dapat dihasilkan dari sapi yang sehat. Untuk menjamin susu berkualitas terbaik, kami mendatangkan sapi jenis Holstein dan Jersey dengan kualitas unggul dari Australia. Setiap sapi mendapat perawatan kesehatan dan nutrisi yang istimewa dari tim dokter hewan dan ahli gizi untuk memastikan mereka dipelihara sesuai dengan standar peternakan internasional.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\">Sapi-sapi selalu dimanjakan dengan pakan sehat terdiri jagung dengan kualitas terbaik, biji-bijian, Dan jenis rumput lokal khusus yang memiliki kandungan protein dan serat yang tinggi. Pakan bergizi ini membuat sapi ternutrisi dengan baik dan selalu sehat untuk terus memproduksi susu segar lezat yang merupakan ciri khas Susu PianetaMilk. Selain pengaturan nutrisi, sapi kami juga memiliki ‘kasur’ pasir lembut yang secara teratur dibersihkan dan ditambah setiap hari, dan tidak ketinggalan pula perawatan kuku dua kali setahun</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\">Sapi kami juga berolahraga dengan teratur – mereka berjalan kaki setiap hari dari kandang tempat mereka tinggal ke lokasi pemerahan tiga kali sehari sehingga mereka selalu sehat dan bahagia!</p>'),
('history', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\"><span style=\"font-size: 0.875rem;\">Awal tahun 1990-an adalah periode di mana Asia Tenggara, termasuk Indonesia, mengalami pertumbuhan ekonomi yang pesat. Di masa itu banyak produk impor memenuhi kebutuhan pasar untuk susu segar. Tidak tadanya peternakan sapi perah komersial berskala besar di Indonesia, dan di sisi lain ketersediaan tenaga kerja dan sumber daya alam yang melimpah, memberikan peluang untuk berdirinya perusahaan susu yang mampu memasok pasar domestik Indonesia dan juga kawasan Asia Tenggara.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\">Pada tanggal 20 Agustus 2020 PianetaMilk didirikan . pianetamilk segera memulai bisnis peternakan sapi perah di kabupaten Lembang, Bandung ,JawaBarat .dan membangun fasilitas pengolahan susu <span style=\"font-size: 0.875rem;\">yang beroperasi sejak bulan November 2020. Hingga hari ini, produk susu pasteurisasi yang diproduksi oleh Peternakan PianetaMilk adalah produk dengan kualitas tinggi.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\">Peternakan sapi perah PianetaMilk di Bandung saat ini memiliki lebih dari 53 ekor sapi Holstein yang memproduksi lebih dari  6000 liter susu segar setiap tahunnya. Memberikan kebutuhan bagi penduduk tepatnya yang berada di kota bandung .</p>'),
('ourfarm', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\">Peternakan PianetaMilk yang pertama berlokasi pada ketinggian 1.523 meter di dataran tinggi Kota Bandung, tepatnya di Kabupaten Lembang . Di tempat ini, 53 ekor sapi Holstein memiliki peran penting bagi pembuatan produk-produk dairy PianetaMilk di dalam fasilitas yang terintegrasi sepenuhnya. Udara yang sejuk sepanjang tahun dan perlakuan yang beretika oleh para spesialis hewan membuat mereka selalu sehat dan merasa nyaman. Saat sapi sudah diperah maka langsung diproduksi dan dikemas didalam rumah produksi disebelah peternakan PianetaMilk .</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\"><span style=\"font-size: 0.875rem;\">Untuk Dapat selalu menghadirkan Susu PianetaMilk bagi anda, Kami telah membuka rumah produksi kedua di daerah Margahayu Raya tepatnya di daerah Jl Mars Selatan . Sapi di perah saat Pagi dan saat Sore . sapi yang sudah diperah langsung diantarkan kerumah produksi untuk dikemas.</span></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\">Peternakan ini Standar Nasional Indonesia , dengan fasilitas yang sedikit modern dan dioperasikan secara manual untuk memproduksi susu berkualitas yang memuhi standar nasional. Susu PianetaMilk tidak hanya lezat, tetapi juga bersih, higienis dan juga memiliki kandungan bakteri yang rendah!</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\">Dengan lokasi yang strategis, peternakan sapi perah kami juga membantu perkebunan milik penduduk di sekitarnya. Air yang memiliki kandungan pupuk alami dialirkan melalui saluran khusus dari peternakan ke perkebunan penduduk yang berada di lokasi sekitar. Tanaman yang dihasilkan kemudian dijual kembali oleh para petani kepada kami dan digunakan sebagai pakan para sapi, dengan demikian kami selalu dapat menjaga kelezatan Susu PianetaMilk yang istimewa!</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\"><br></p><p style=\"text-align: center; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Lato, sans-serif;\">SAYANGI ANGGOTA KELUARGA ANDA DENGAN MENGKONSUMSI SUSU PIANETAMILK&nbsp;</p>'),
('philosophy', '<div><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\"><b>FILOSOFI KAMI :</b></span></font></div><div><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></div><ol><li><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Bisnis kami tidak berfokus pada mencari keuntungan semata, namun kami berfokus pada memberikan nilai serta memberikan pelayanan yang lebih kepada orang lain.</span></li><li><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\">Bisnis kami hanya ingin menyajikan susu yang berkualitas untuk anda minum bersama anggota keluarga agar anggota keluarga anda tetap sehat .</span></font></li></ol>'),
('subscribe', '<p><b>Bagaimana cara berlangganan dengan kami ?</b></p><ol><li>Lakukan registrasi akun pada web pianetamilk dan isi data yang diminta</li><li>Pilih produk yang anda inginkan&nbsp;</li><li>Tentukan jadwal pengirima,paket langganan</li><li>Pilih metode pembayaran</li><li>Ketika selesai data anda akan di proses oleh pihak pianetamilk</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `image`, `description`, `price`, `stock`, `status`) VALUES
(1, 'Pianeta Milk 1 Liter', '/assets/img/product-example.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis alias nulla, numquam voluptate rerum sit pariatur perspiciatis qui placeat consequatur dolorum tempore sapiente quod velit cupiditate odit, vel autem accusamus?', 50000, 300, 1),
(2, 'Pianeta Milk 2 Liter', '/assets/img/product-example.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis alias nulla, numquam voluptate rerum sit pariatur perspiciatis qui placeat consequatur dolorum tempore sapiente quod velit cupiditate odit, vel autem accusamus?', 90000, 300, 1),
(3, 'Pianeta Milk 3 Liter', '/assets/img/product-example.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis alias nulla, numquam voluptate rerum sit pariatur perspiciatis qui placeat consequatur dolorum tempore sapiente quod velit cupiditate odit, vel autem accusamus?', 130000, 300, 1),
(4, 'Pianeta Milk 4 Liter', '/assets/img/product-example.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis alias nulla, numquam voluptate rerum sit pariatur perspiciatis qui placeat consequatur dolorum tempore sapiente quod velit cupiditate odit, vel autem accusamus?', 170000, 300, 1),
(5, 'Pianeta Milk 5 Liter', '/assets/img/product-example.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis alias nulla, numquam voluptate rerum sit pariatur perspiciatis qui placeat consequatur dolorum tempore sapiente quod velit cupiditate odit, vel autem accusamus?', 210000, 300, 1),
(6, 'zSusu Coklat', '/assets/img/product-example.jpg', 'zLorem ipsum dolor sit, amet consectetur adipisicing elit. Quis alias nulla, numquam voluptate rerum sit pariatur perspiciatis qui placeat consequatur dolorum tempore sapiente quod velit cupiditate odit, vel autem accusamus?', 1000, 100, 0),
(7, 'Susu Strawberry', '/assets/img/product-example.jpg', 'hahahaha, haayyyuukkk', 30000, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `stars` int(1) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `id_user`, `id_product`, `stars`, `review`) VALUES
(1, 1, 5, 4, 'Mantap banget'),
(2, 4, 2, 3, 'Lebih enak kalau dingin'),
(3, 18, 2, 5, 'Kualitas terjamin nih'),
(4, 23, 4, 4, 'Seger banget susunya'),
(5, 10, 1, 1, 'susunya kemanisan'),
(6, 19, 1, 1, 'susuna hanyir'),
(7, 17, 3, 5, 'Alhamdulillah semoga berkah'),
(8, 25, 1, 1, 'susunya kemanisan'),
(9, 8, 5, 2, 'ceuk si hapis bere bintang hiji weh'),
(10, 16, 1, 2, 'susuna hanyir'),
(11, 7, 3, 3, 'Akan lebih baik kalau ada rasa coklat'),
(12, 2, 3, 3, 'Mantap mantap'),
(13, 14, 1, 2, 'susunya gk ada rasa stroberi'),
(14, 11, 5, 3, 'Produknya bagus'),
(15, 11, 4, 5, 'Akan lebih baik kalau ada rasa coklat'),
(16, 5, 3, 1, 'susunya gk ada rasa stroberi'),
(17, 23, 1, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(18, 18, 3, 1, 'susunya gk ada rasa stroberi'),
(19, 8, 1, 2, 'susunya bau amis'),
(20, 2, 1, 1, 'susunya gk ada rasa stroberi'),
(21, 4, 3, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(22, 11, 5, 4, 'Kualitas terjamin nih'),
(23, 14, 4, 3, 'Produknya bagus'),
(24, 27, 5, 4, 'Seger banget susunya'),
(25, 1, 3, 3, 'Alhamdulillah semoga berkah'),
(26, 4, 4, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(27, 20, 1, 1, 'susuna hanyir'),
(28, 3, 2, 2, 'susuna hanyir'),
(29, 19, 4, 3, 'Alhamdulillah semoga berkah'),
(30, 18, 3, 5, 'Kualitas terjamin nih'),
(31, 27, 2, 1, 'susunya gk ada rasa stroberi'),
(32, 15, 4, 1, 'susunya bau amis'),
(33, 24, 2, 1, 'susunya gk ada rasa stroberi'),
(34, 12, 3, 1, 'susunya bau amis'),
(35, 21, 4, 1, 'susunya gk ada rasa stroberi'),
(36, 4, 1, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(37, 6, 5, 3, 'Kualitas terjamin nih'),
(38, 17, 3, 4, 'OK BINGITSS'),
(39, 4, 4, 3, 'OK BINGITSS'),
(40, 12, 1, 4, 'OK BINGITSS'),
(41, 23, 2, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(42, 4, 5, 3, 'Kualitas terjamin nih'),
(43, 18, 5, 3, 'Mantap banget'),
(44, 13, 3, 5, 'Mantap banget'),
(45, 20, 3, 1, 'ceuk si hapis bere bintang hiji weh'),
(46, 7, 1, 2, 'susunya kemanisan'),
(47, 25, 4, 3, 'Kurirnya baik banget'),
(48, 27, 1, 2, 'susunya bau amis'),
(49, 18, 2, 2, 'susuna hanyir'),
(50, 4, 5, 2, 'susunya gk ada rasa stroberi'),
(51, 20, 3, 3, 'Mantap mantap'),
(52, 1, 1, 2, 'susu cepet basi'),
(53, 6, 3, 5, 'Mantap mantap'),
(54, 1, 2, 1, 'susu cepet basi'),
(55, 6, 4, 2, 'susunya bau amis'),
(56, 18, 5, 5, 'Akan lebih baik kalau ada rasa coklat'),
(57, 5, 2, 2, 'susunya kemanisan'),
(58, 4, 5, 2, 'susunya kemanisan'),
(59, 23, 5, 5, 'Akan lebih baik kalau ada rasa coklat'),
(60, 6, 4, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(61, 11, 3, 4, 'Kualitas terjamin nih'),
(62, 18, 3, 5, 'Kualitas terjamin nih'),
(63, 6, 2, 4, 'Kurirnya baik banget'),
(64, 3, 4, 1, 'susunya bau amis'),
(65, 22, 1, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(66, 17, 2, 1, 'susunya gk ada rasa stroberi'),
(67, 17, 4, 5, 'Seger banget susunya'),
(68, 3, 5, 3, 'Susunya enak, kayak susu'),
(69, 5, 1, 5, 'Alhamdulillah semoga berkah'),
(70, 8, 1, 5, 'Seger banget susunya'),
(71, 4, 3, 5, 'Mantap banget'),
(72, 14, 5, 5, 'Lebih enak kalau dingin'),
(73, 17, 2, 5, 'Mantap banget'),
(74, 23, 3, 5, 'Lebih enak kalau dingin'),
(75, 13, 5, 5, 'Alhamdulillah semoga berkah'),
(76, 3, 5, 3, 'Lebih enak kalau dingin'),
(77, 16, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(78, 12, 1, 2, 'susu cepet basi'),
(79, 10, 5, 1, 'susunya bau amis'),
(80, 17, 3, 3, 'Seger banget susunya'),
(81, 6, 4, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(82, 24, 1, 5, 'Mantap banget'),
(83, 14, 5, 4, 'Kualitas terjamin nih'),
(84, 17, 4, 3, 'Seger banget susunya'),
(85, 5, 4, 3, 'Mantap banget'),
(86, 20, 1, 3, 'Lebih enak kalau dingin'),
(87, 26, 4, 4, 'Lebih enak kalau dingin'),
(88, 4, 2, 2, 'susunya bau amis'),
(89, 18, 5, 3, 'Seger banget susunya'),
(90, 2, 2, 3, 'Akan lebih baik kalau ada rasa coklat'),
(91, 11, 3, 1, 'susu cepet basi'),
(92, 25, 1, 4, 'Produknya bagus'),
(93, 23, 3, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(94, 16, 4, 4, 'Lebih enak kalau dingin'),
(95, 15, 3, 3, 'Akan lebih baik kalau ada rasa coklat'),
(96, 19, 5, 1, 'ceuk si hapis bere bintang hiji weh'),
(97, 6, 5, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(98, 21, 3, 3, 'Kualitas terjamin nih'),
(99, 16, 4, 4, 'Kualitas terjamin nih'),
(100, 20, 3, 3, 'Seger banget susunya'),
(101, 16, 3, 5, 'Kurirnya baik banget'),
(102, 2, 5, 1, 'susunya kemanisan'),
(103, 22, 1, 5, 'Kurirnya baik banget'),
(104, 9, 3, 5, 'Alhamdulillah semoga berkah'),
(105, 11, 3, 4, 'Alhamdulillah semoga berkah'),
(106, 10, 5, 5, 'Susunya enak'),
(107, 10, 2, 1, 'susunya gk ada rasa stroberi'),
(108, 19, 3, 2, 'susunya gk ada rasa stroberi'),
(109, 24, 1, 2, 'susuna hanyir'),
(110, 1, 1, 4, 'Produknya bagus'),
(111, 19, 2, 1, 'susunya gk ada rasa stroberi'),
(112, 14, 5, 4, 'Mantap mantap'),
(113, 26, 3, 2, 'susunya gk ada rasa stroberi'),
(114, 2, 1, 2, 'susuna hanyir'),
(115, 11, 2, 3, 'Susunya enak, kayak susu'),
(116, 27, 4, 2, 'susunya kemanisan'),
(117, 4, 4, 1, 'ceuk si hapis bere bintang hiji weh'),
(118, 26, 2, 1, 'susunya gk ada rasa stroberi'),
(119, 21, 2, 4, 'Seger banget susunya'),
(120, 1, 4, 2, 'susu cepet basi'),
(121, 21, 4, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(122, 21, 2, 5, 'Kualitas terjamin nih'),
(123, 10, 4, 2, 'susunya kemanisan'),
(124, 3, 5, 2, 'susunya bau amis'),
(125, 15, 1, 2, 'ceuk si hapis bere bintang hiji weh'),
(126, 10, 5, 1, 'ceuk si hapis bere bintang hiji weh'),
(127, 11, 2, 3, 'Lebih enak kalau dingin'),
(128, 24, 2, 4, 'OK BINGITSS'),
(129, 5, 5, 3, 'Seger banget susunya'),
(130, 4, 4, 1, 'susunya kemanisan'),
(131, 21, 1, 4, 'Susunya enak, kayak susu'),
(132, 5, 5, 3, 'Seger banget susunya'),
(133, 1, 4, 3, 'Akan lebih baik kalau ada rasa coklat'),
(134, 11, 2, 5, 'Seger banget susunya'),
(135, 14, 1, 1, 'ceuk si hapis bere bintang hiji weh'),
(136, 10, 4, 2, 'susunya gk ada rasa stroberi'),
(137, 18, 5, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(138, 12, 2, 1, 'susunya gk ada rasa stroberi'),
(139, 26, 5, 2, 'susu cepet basi'),
(140, 2, 1, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(141, 18, 3, 4, 'Lebih enak kalau dingin'),
(142, 22, 5, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(143, 20, 5, 2, 'susuna hanyir'),
(144, 7, 1, 1, 'susu cepet basi'),
(145, 5, 2, 3, 'Mantap banget'),
(146, 26, 1, 5, 'Akan lebih baik kalau ada rasa coklat'),
(147, 26, 5, 3, 'Susunya enak, kayak susu'),
(148, 19, 3, 5, 'Kurirnya baik banget'),
(149, 9, 1, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(150, 3, 4, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(151, 1, 5, 4, 'Produknya bagus'),
(152, 15, 3, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(153, 21, 2, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(154, 20, 3, 1, 'susunya gk ada rasa stroberi'),
(155, 20, 1, 3, 'Mantap banget'),
(156, 9, 2, 1, 'susu cepet basi'),
(157, 6, 3, 5, 'Mantap mantap'),
(158, 2, 1, 2, 'susu cepet basi'),
(159, 16, 1, 3, 'Susunya enak, kayak susu'),
(160, 18, 3, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(161, 6, 4, 5, 'Susunya enak'),
(162, 25, 1, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(163, 11, 5, 5, 'Mantap mantap'),
(164, 18, 4, 1, 'susunya gk ada rasa stroberi'),
(165, 14, 1, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(166, 25, 2, 4, 'Alhamdulillah semoga berkah'),
(167, 8, 1, 3, 'Susunya enak, kayak susu'),
(168, 23, 4, 1, 'susunya gk ada rasa stroberi'),
(169, 24, 3, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(170, 21, 5, 4, 'Lebih enak kalau dingin'),
(171, 15, 2, 1, 'susunya gk ada rasa stroberi'),
(172, 9, 5, 1, 'susunya kemanisan'),
(173, 15, 3, 4, 'Kualitas terjamin nih'),
(174, 6, 2, 5, 'Susunya enak'),
(175, 22, 2, 3, 'Susunya enak, kayak susu'),
(176, 12, 2, 4, 'Mantap banget'),
(177, 4, 3, 3, 'Kualitas terjamin nih'),
(178, 8, 2, 1, 'susunya kemanisan'),
(179, 25, 1, 2, 'susunya kemanisan'),
(180, 26, 4, 1, 'susuna hanyir'),
(181, 26, 5, 3, 'Kualitas terjamin nih'),
(182, 13, 2, 2, 'susunya gk ada rasa stroberi'),
(183, 8, 1, 4, 'Akan lebih baik kalau ada rasa coklat'),
(184, 13, 2, 3, 'OK BINGITSS'),
(185, 12, 5, 2, 'susu cepet basi'),
(186, 13, 5, 4, 'Akan lebih baik kalau ada rasa coklat'),
(187, 7, 1, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(188, 27, 3, 3, 'Mantap mantap'),
(189, 4, 5, 3, 'Lebih enak kalau dingin'),
(190, 9, 1, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(191, 5, 2, 3, 'Mantap mantap'),
(192, 14, 2, 1, 'susunya gk ada rasa stroberi'),
(193, 1, 3, 3, 'Lebih enak kalau dingin'),
(194, 10, 1, 3, 'OK BINGITSS'),
(195, 17, 5, 1, 'susunya bau amis'),
(196, 15, 4, 1, 'susunya kemanisan'),
(197, 6, 3, 4, 'Mantap banget'),
(198, 17, 1, 1, 'susunya kemanisan'),
(199, 8, 1, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(200, 7, 2, 2, 'susunya gk ada rasa stroberi'),
(201, 23, 3, 4, 'Mantap banget'),
(202, 11, 3, 4, 'Akan lebih baik kalau ada rasa coklat'),
(203, 8, 4, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(204, 22, 4, 2, 'susuna hanyir'),
(205, 27, 2, 1, 'susu cepet basi'),
(206, 1, 1, 2, 'ceuk si hapis bere bintang hiji weh'),
(207, 20, 4, 4, 'Seger banget susunya'),
(208, 4, 4, 1, 'susu cepet basi'),
(209, 8, 2, 3, 'Mantap mantap'),
(210, 5, 1, 1, 'susunya gk ada rasa stroberi'),
(211, 19, 2, 3, 'Kualitas terjamin nih'),
(212, 9, 2, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(213, 16, 5, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(214, 11, 3, 2, 'ceuk si hapis bere bintang hiji weh'),
(215, 9, 5, 2, 'susunya bau amis'),
(216, 15, 5, 1, 'susuna hanyir'),
(217, 8, 4, 3, 'Produknya bagus'),
(218, 3, 3, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(219, 11, 5, 5, 'Mantap banget'),
(220, 24, 2, 1, 'susunya bau amis'),
(221, 19, 5, 3, 'Alhamdulillah semoga berkah'),
(222, 20, 5, 5, 'Susunya enak'),
(223, 21, 3, 4, 'Mantap mantap'),
(224, 25, 2, 4, 'Mantap banget'),
(225, 5, 2, 4, 'Susunya enak, kayak susu'),
(226, 20, 2, 1, 'susunya gk ada rasa stroberi'),
(227, 3, 1, 5, 'Akan lebih baik kalau ada rasa coklat'),
(228, 13, 1, 1, 'ceuk si hapis bere bintang hiji weh'),
(229, 2, 5, 4, 'OK BINGITSS'),
(230, 4, 1, 3, 'Susunya enak, kayak susu'),
(231, 2, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(232, 20, 2, 3, 'Akan lebih baik kalau ada rasa coklat'),
(233, 20, 5, 5, 'Produknya bagus'),
(234, 17, 5, 4, 'Mantap mantap'),
(235, 26, 3, 1, 'susunya gk ada rasa stroberi'),
(236, 23, 2, 4, 'Alhamdulillah semoga berkah'),
(237, 7, 1, 2, 'susunya kemanisan'),
(238, 12, 3, 5, 'Lebih enak kalau dingin'),
(239, 5, 5, 2, 'susuna hanyir'),
(240, 21, 4, 2, 'ceuk si hapis bere bintang hiji weh'),
(241, 24, 1, 2, 'susunya bau amis'),
(242, 9, 1, 2, 'susunya kemanisan'),
(243, 5, 2, 2, 'susunya kemanisan'),
(244, 11, 2, 4, 'Akan lebih baik kalau ada rasa coklat'),
(245, 23, 3, 4, 'Kurirnya baik banget'),
(246, 9, 2, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(247, 9, 2, 5, 'Susunya enak'),
(248, 15, 3, 3, 'Susunya enak, kayak susu'),
(249, 16, 1, 4, 'Alhamdulillah semoga berkah'),
(250, 21, 1, 3, 'Produknya bagus'),
(251, 10, 4, 2, 'susu cepet basi'),
(252, 1, 5, 3, 'OK BINGITSS'),
(253, 1, 5, 2, 'susunya gk ada rasa stroberi'),
(254, 2, 4, 2, 'susunya gk ada rasa stroberi'),
(255, 9, 3, 5, 'Alhamdulillah semoga berkah'),
(256, 15, 2, 4, 'Kurirnya baik banget'),
(257, 13, 2, 1, 'ceuk si hapis bere bintang hiji weh'),
(258, 8, 5, 3, 'Kualitas terjamin nih'),
(259, 25, 3, 1, 'susunya gk ada rasa stroberi'),
(260, 21, 3, 4, 'Alhamdulillah semoga berkah'),
(261, 25, 3, 3, 'Seger banget susunya'),
(262, 20, 4, 5, 'Seger banget susunya'),
(263, 1, 3, 5, 'Susunya enak, kayak susu'),
(264, 2, 2, 5, 'Kurirnya baik banget'),
(265, 18, 2, 2, 'susu cepet basi'),
(266, 25, 4, 3, 'Produknya bagus'),
(267, 17, 5, 1, 'susunya bau amis'),
(268, 3, 1, 4, 'OK BINGITSS'),
(269, 8, 2, 4, 'Kurirnya baik banget'),
(270, 11, 4, 4, 'OK BINGITSS'),
(271, 5, 1, 5, 'Kualitas terjamin nih'),
(272, 12, 3, 4, 'Seger banget susunya'),
(273, 12, 1, 4, 'Susunya enak'),
(274, 2, 5, 2, 'ceuk si hapis bere bintang hiji weh'),
(275, 22, 5, 5, 'Seger banget susunya'),
(276, 15, 1, 4, 'Kurirnya baik banget'),
(277, 17, 2, 4, 'Alhamdulillah semoga berkah'),
(278, 2, 2, 5, 'Lebih enak kalau dingin'),
(279, 23, 5, 3, 'OK BINGITSS'),
(280, 22, 1, 3, 'Kurirnya baik banget'),
(281, 6, 2, 4, 'Seger banget susunya'),
(282, 8, 2, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(283, 15, 5, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(284, 16, 2, 3, 'Susunya enak'),
(285, 9, 5, 2, 'susu cepet basi'),
(286, 15, 1, 3, 'Susunya enak, kayak susu'),
(287, 7, 1, 5, 'Kualitas terjamin nih'),
(288, 6, 1, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(289, 5, 5, 3, 'Kurirnya baik banget'),
(290, 22, 1, 4, 'Alhamdulillah semoga berkah'),
(291, 8, 1, 2, 'susunya kemanisan'),
(292, 9, 3, 3, 'Susunya enak'),
(293, 20, 5, 1, 'susunya gk ada rasa stroberi'),
(294, 23, 5, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(295, 16, 5, 4, 'Kurirnya baik banget'),
(296, 24, 2, 2, 'susu cepet basi'),
(297, 18, 2, 2, 'susuna hanyir'),
(298, 24, 1, 2, 'ceuk si hapis bere bintang hiji weh'),
(299, 22, 4, 2, 'susuna hanyir'),
(300, 26, 3, 3, 'Produknya bagus'),
(301, 2, 3, 2, 'susunya gk ada rasa stroberi'),
(302, 13, 3, 5, 'Akan lebih baik kalau ada rasa coklat'),
(303, 11, 5, 3, 'Susunya enak'),
(304, 20, 5, 3, 'Kurirnya baik banget'),
(305, 24, 4, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(306, 21, 3, 3, 'Mantap mantap'),
(307, 3, 5, 5, 'Produknya bagus'),
(308, 1, 1, 3, 'Seger banget susunya'),
(309, 14, 4, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(310, 18, 5, 1, 'susu cepet basi'),
(311, 12, 3, 4, 'Seger banget susunya'),
(312, 11, 3, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(313, 11, 4, 2, 'susunya bau amis'),
(314, 1, 3, 2, 'susuna hanyir'),
(315, 23, 3, 5, 'Susunya enak'),
(316, 26, 4, 2, 'susuna hanyir'),
(317, 3, 3, 5, 'Seger banget susunya'),
(318, 19, 3, 4, 'Alhamdulillah semoga berkah'),
(319, 2, 1, 3, 'Kualitas terjamin nih'),
(320, 3, 2, 4, 'Kurirnya baik banget'),
(321, 2, 1, 3, 'Produknya bagus'),
(322, 23, 1, 2, 'susunya bau amis'),
(323, 21, 5, 2, 'susu cepet basi'),
(324, 24, 4, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(325, 6, 2, 4, 'Mantap banget'),
(326, 1, 3, 1, 'susuna hanyir'),
(327, 25, 3, 2, 'susunya kemanisan'),
(328, 21, 1, 5, 'Akan lebih baik kalau ada rasa coklat'),
(329, 21, 3, 5, 'Susunya enak'),
(330, 10, 3, 5, 'Susunya enak'),
(331, 9, 1, 2, 'susunya gk ada rasa stroberi'),
(332, 5, 2, 2, 'susuna hanyir'),
(333, 25, 2, 4, 'Susunya enak'),
(334, 26, 1, 2, 'susunya kemanisan'),
(335, 27, 2, 4, 'Mantap mantap'),
(336, 20, 3, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(337, 25, 5, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(338, 23, 3, 5, 'Lebih enak kalau dingin'),
(339, 1, 5, 4, 'Mantap banget'),
(340, 26, 3, 3, 'Mantap banget'),
(341, 18, 3, 2, 'susu cepet basi'),
(342, 14, 2, 3, 'Seger banget susunya'),
(343, 17, 3, 2, 'susunya bau amis'),
(344, 18, 1, 4, 'Susunya enak, kayak susu'),
(345, 23, 1, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(346, 9, 4, 5, 'OK BINGITSS'),
(347, 19, 4, 3, 'Alhamdulillah semoga berkah'),
(348, 11, 4, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(349, 8, 5, 5, 'OK BINGITSS'),
(350, 17, 2, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(351, 25, 1, 5, 'Produknya bagus'),
(352, 9, 2, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(353, 8, 5, 3, 'Mantap mantap'),
(354, 19, 5, 2, 'susunya gk ada rasa stroberi'),
(355, 23, 1, 1, 'susuna hanyir'),
(356, 24, 5, 4, 'Susunya enak, kayak susu'),
(357, 19, 5, 5, 'Seger banget susunya'),
(358, 9, 3, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(359, 10, 3, 1, 'susuna hanyir'),
(360, 11, 3, 5, 'Kurirnya baik banget'),
(361, 15, 2, 1, 'susuna hanyir'),
(362, 24, 5, 3, 'Mantap mantap'),
(363, 24, 4, 3, 'Susunya enak, kayak susu'),
(364, 16, 1, 3, 'Alhamdulillah semoga berkah'),
(365, 5, 4, 1, 'susunya gk ada rasa stroberi'),
(366, 5, 5, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(367, 8, 2, 2, 'susunya kemanisan'),
(368, 17, 4, 1, 'ceuk si hapis bere bintang hiji weh'),
(369, 3, 4, 3, 'Kualitas terjamin nih'),
(370, 7, 2, 3, 'Kualitas terjamin nih'),
(371, 22, 5, 5, 'Produknya bagus'),
(372, 7, 2, 4, 'Susunya enak'),
(373, 11, 4, 2, 'susu cepet basi'),
(374, 8, 2, 1, 'susuna hanyir'),
(375, 19, 3, 3, 'Alhamdulillah semoga berkah'),
(376, 16, 4, 4, 'Kualitas terjamin nih'),
(377, 16, 4, 4, 'Akan lebih baik kalau ada rasa coklat'),
(378, 25, 2, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(379, 1, 2, 5, 'Susunya enak'),
(380, 13, 3, 3, 'Kurirnya baik banget'),
(381, 4, 5, 5, 'Akan lebih baik kalau ada rasa coklat'),
(382, 27, 5, 5, 'Susunya enak, kayak susu'),
(383, 6, 4, 5, 'Kurirnya baik banget'),
(384, 13, 1, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(385, 24, 5, 4, 'Kurirnya baik banget'),
(386, 22, 5, 2, 'susunya gk ada rasa stroberi'),
(387, 3, 4, 5, 'Akan lebih baik kalau ada rasa coklat'),
(388, 18, 5, 1, 'susuna hanyir'),
(389, 13, 3, 5, 'Seger banget susunya'),
(390, 25, 3, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(391, 11, 3, 3, 'OK BINGITSS'),
(392, 24, 3, 5, 'Produknya bagus'),
(393, 14, 4, 4, 'Susunya enak'),
(394, 11, 5, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(395, 3, 4, 1, 'susunya gk ada rasa stroberi'),
(396, 20, 2, 5, 'Alhamdulillah semoga berkah'),
(397, 12, 2, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(398, 23, 3, 5, 'Susunya enak'),
(399, 3, 3, 2, 'susunya gk ada rasa stroberi'),
(400, 5, 5, 5, 'Lebih enak kalau dingin'),
(401, 12, 3, 4, 'Mantap banget'),
(402, 19, 3, 2, 'susu cepet basi'),
(403, 6, 2, 3, 'Lebih enak kalau dingin'),
(404, 21, 2, 1, 'susunya bau amis'),
(405, 3, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(406, 6, 4, 5, 'OK BINGITSS'),
(407, 11, 3, 4, 'OK BINGITSS'),
(408, 10, 1, 2, 'susuna hanyir'),
(409, 14, 3, 5, 'Seger banget susunya'),
(410, 20, 1, 1, 'susuna hanyir'),
(411, 21, 4, 1, 'susunya kemanisan'),
(412, 13, 3, 3, 'Mantap mantap'),
(413, 19, 1, 3, 'Mantap mantap'),
(414, 23, 3, 5, 'Susunya enak'),
(415, 24, 3, 1, 'susu cepet basi'),
(416, 5, 5, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(417, 10, 1, 3, 'Kualitas terjamin nih'),
(418, 20, 4, 4, 'Produknya bagus'),
(419, 6, 5, 3, 'Kualitas terjamin nih'),
(420, 17, 2, 3, 'Kualitas terjamin nih'),
(421, 27, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(422, 18, 5, 2, 'susu cepet basi'),
(423, 21, 4, 4, 'Kurirnya baik banget'),
(424, 19, 1, 2, 'susuna hanyir'),
(425, 11, 3, 4, 'Kualitas terjamin nih'),
(426, 6, 5, 2, 'susuna hanyir'),
(427, 23, 4, 1, 'susunya bau amis'),
(428, 25, 1, 3, 'Produknya bagus'),
(429, 11, 1, 4, 'Mantap mantap'),
(430, 4, 4, 4, 'Kualitas terjamin nih'),
(431, 26, 1, 2, 'susunya gk ada rasa stroberi'),
(432, 23, 2, 5, 'Mantap mantap'),
(433, 26, 1, 5, 'Seger banget susunya'),
(434, 10, 5, 4, 'Seger banget susunya'),
(435, 12, 5, 5, 'Kurirnya baik banget'),
(436, 23, 2, 2, 'susuna hanyir'),
(437, 20, 1, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(438, 23, 3, 5, 'Alhamdulillah semoga berkah'),
(439, 13, 5, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(440, 4, 5, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(441, 19, 5, 5, 'Seger banget susunya'),
(442, 15, 4, 1, 'susunya gk ada rasa stroberi'),
(443, 9, 2, 4, 'Mantap banget'),
(444, 16, 4, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(445, 16, 4, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(446, 21, 1, 5, 'Susunya enak, kayak susu'),
(447, 16, 4, 5, 'Susunya enak, kayak susu'),
(448, 11, 3, 4, 'Susunya enak'),
(449, 17, 3, 3, 'Seger banget susunya'),
(450, 22, 4, 3, 'Akan lebih baik kalau ada rasa coklat'),
(451, 25, 5, 2, 'susuna hanyir'),
(452, 19, 3, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(453, 27, 4, 4, 'Mantap banget'),
(454, 2, 4, 5, 'Seger banget susunya'),
(455, 8, 1, 2, 'susunya gk ada rasa stroberi'),
(456, 8, 2, 4, 'Lebih enak kalau dingin'),
(457, 16, 1, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(458, 16, 4, 4, 'Kurirnya baik banget'),
(459, 24, 4, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(460, 25, 2, 5, 'OK BINGITSS'),
(461, 18, 1, 3, 'Kualitas terjamin nih'),
(462, 12, 5, 1, 'susunya bau amis'),
(463, 14, 5, 1, 'susunya gk ada rasa stroberi'),
(464, 7, 3, 3, 'OK BINGITSS'),
(465, 5, 4, 2, 'susunya bau amis'),
(466, 5, 1, 1, 'susunya kemanisan'),
(467, 18, 5, 2, 'susu cepet basi'),
(468, 4, 3, 5, 'Lebih enak kalau dingin'),
(469, 17, 2, 4, 'Lebih enak kalau dingin'),
(470, 21, 3, 2, 'susunya kemanisan'),
(471, 13, 4, 2, 'susunya kemanisan'),
(472, 14, 5, 1, 'susunya gk ada rasa stroberi'),
(473, 20, 1, 3, 'Mantap mantap'),
(474, 10, 4, 5, 'Mantap mantap'),
(475, 6, 4, 1, 'susunya gk ada rasa stroberi'),
(476, 19, 3, 3, 'OK BINGITSS'),
(477, 13, 4, 1, 'susuna hanyir'),
(478, 27, 2, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(479, 15, 5, 4, 'Kurirnya baik banget'),
(480, 23, 3, 1, 'susu cepet basi'),
(481, 15, 4, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(482, 24, 4, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(483, 27, 1, 5, 'Kurirnya baik banget'),
(484, 9, 1, 1, 'susu cepet basi'),
(485, 21, 1, 4, 'Alhamdulillah semoga berkah'),
(486, 2, 1, 1, 'susunya kemanisan'),
(487, 12, 3, 1, 'susunya bau amis'),
(488, 27, 1, 4, 'Seger banget susunya'),
(489, 22, 4, 5, 'OK BINGITSS'),
(490, 18, 3, 5, 'Lebih enak kalau dingin'),
(491, 3, 1, 1, 'susunya gk ada rasa stroberi'),
(492, 14, 4, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(493, 13, 3, 4, 'Susunya enak'),
(494, 10, 3, 5, 'Lebih enak kalau dingin'),
(495, 11, 5, 4, 'Akan lebih baik kalau ada rasa coklat'),
(496, 12, 2, 2, 'susuna hanyir'),
(497, 22, 4, 3, 'Akan lebih baik kalau ada rasa coklat'),
(498, 21, 2, 3, 'Lebih enak kalau dingin'),
(499, 17, 4, 5, 'Seger banget susunya'),
(500, 26, 1, 2, 'susuna hanyir'),
(501, 12, 3, 3, 'Alhamdulillah semoga berkah'),
(502, 17, 4, 3, 'Susunya enak, kayak susu'),
(503, 16, 5, 5, 'Akan lebih baik kalau ada rasa coklat'),
(504, 3, 4, 5, 'Produknya bagus'),
(505, 14, 1, 2, 'ceuk si hapis bere bintang hiji weh'),
(506, 19, 5, 5, 'Mantap banget'),
(507, 7, 3, 2, 'ceuk si hapis bere bintang hiji weh'),
(508, 18, 1, 5, 'Produknya bagus'),
(509, 25, 1, 3, 'Produknya bagus'),
(510, 20, 5, 5, 'Kualitas terjamin nih'),
(511, 5, 4, 4, 'Mantap banget'),
(512, 19, 4, 1, 'susunya kemanisan'),
(513, 5, 4, 4, 'Produknya bagus'),
(514, 27, 2, 2, 'susunya bau amis'),
(515, 8, 1, 2, 'susunya kemanisan'),
(516, 5, 4, 3, 'Mantap banget'),
(517, 12, 5, 1, 'susunya gk ada rasa stroberi'),
(518, 10, 4, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(519, 17, 1, 4, 'Kurirnya baik banget'),
(520, 12, 1, 1, 'susuna hanyir'),
(521, 14, 2, 5, 'Produknya bagus'),
(522, 6, 5, 1, 'susunya bau amis'),
(523, 12, 2, 1, 'ceuk si hapis bere bintang hiji weh'),
(524, 25, 1, 3, 'Mantap mantap'),
(525, 12, 3, 3, 'Lebih enak kalau dingin'),
(526, 15, 3, 4, 'Akan lebih baik kalau ada rasa coklat'),
(527, 6, 4, 5, 'Mantap banget'),
(528, 7, 2, 2, 'susunya gk ada rasa stroberi'),
(529, 5, 4, 3, 'Kurirnya baik banget'),
(530, 4, 2, 2, 'susunya bau amis'),
(531, 8, 3, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(532, 24, 5, 3, 'Kualitas terjamin nih'),
(533, 18, 5, 1, 'susunya gk ada rasa stroberi'),
(534, 7, 5, 4, 'Lebih enak kalau dingin'),
(535, 24, 5, 3, 'Kualitas terjamin nih'),
(536, 14, 1, 2, 'susuna hanyir'),
(537, 21, 4, 4, 'Produknya bagus'),
(538, 2, 2, 4, 'Lebih enak kalau dingin'),
(539, 3, 1, 1, 'susuna hanyir'),
(540, 7, 5, 1, 'susunya gk ada rasa stroberi'),
(541, 10, 4, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(542, 11, 1, 2, 'susunya gk ada rasa stroberi'),
(543, 9, 2, 4, 'OK BINGITSS'),
(544, 9, 5, 2, 'ceuk si hapis bere bintang hiji weh'),
(545, 18, 5, 1, 'susunya bau amis'),
(546, 23, 4, 3, 'Lebih enak kalau dingin'),
(547, 9, 1, 5, 'Seger banget susunya'),
(548, 23, 2, 3, 'OK BINGITSS'),
(549, 26, 1, 1, 'susunya gk ada rasa stroberi'),
(550, 11, 2, 1, 'susunya bau amis'),
(551, 22, 5, 2, 'susuna hanyir'),
(552, 1, 1, 5, 'Alhamdulillah semoga berkah'),
(553, 18, 1, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(554, 3, 1, 1, 'susunya bau amis'),
(555, 23, 4, 1, 'susunya bau amis'),
(556, 15, 5, 1, 'susu cepet basi'),
(557, 3, 1, 3, 'Seger banget susunya'),
(558, 19, 4, 2, 'ceuk si hapis bere bintang hiji weh'),
(559, 14, 3, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(560, 20, 5, 3, 'Kualitas terjamin nih'),
(561, 8, 5, 5, 'Lebih enak kalau dingin'),
(562, 10, 3, 3, 'Seger banget susunya'),
(563, 8, 1, 2, 'susuna hanyir'),
(564, 15, 4, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(565, 8, 5, 2, 'susunya gk ada rasa stroberi'),
(566, 19, 5, 5, 'Alhamdulillah semoga berkah'),
(567, 8, 1, 1, 'ceuk si hapis bere bintang hiji weh'),
(568, 21, 4, 4, 'Lebih enak kalau dingin'),
(569, 22, 4, 5, 'Mantap banget'),
(570, 16, 3, 3, 'Seger banget susunya'),
(571, 14, 4, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(572, 6, 2, 4, 'Susunya enak'),
(573, 1, 3, 2, 'susu cepet basi'),
(574, 6, 4, 1, 'susuna hanyir'),
(575, 16, 2, 1, 'susu cepet basi'),
(576, 2, 2, 3, 'Kualitas terjamin nih'),
(577, 5, 2, 4, 'Kurirnya baik banget'),
(578, 12, 1, 4, 'Susunya enak, kayak susu'),
(579, 15, 2, 3, 'Mantap banget'),
(580, 2, 1, 1, 'susuna hanyir'),
(581, 8, 5, 5, 'Susunya enak, kayak susu'),
(582, 7, 4, 1, 'ceuk si hapis bere bintang hiji weh'),
(583, 10, 4, 2, 'susu cepet basi'),
(584, 18, 3, 3, 'Susunya enak, kayak susu'),
(585, 23, 1, 3, 'Produknya bagus'),
(586, 19, 4, 1, 'susunya bau amis'),
(587, 23, 3, 5, 'Susunya enak'),
(588, 5, 5, 3, 'Mantap mantap'),
(589, 26, 2, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(590, 16, 5, 1, 'ceuk si hapis bere bintang hiji weh'),
(591, 18, 5, 2, 'susu cepet basi'),
(592, 24, 1, 5, 'Akan lebih baik kalau ada rasa coklat'),
(593, 17, 3, 4, 'Kurirnya baik banget'),
(594, 2, 5, 3, 'Mantap banget'),
(595, 14, 3, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(596, 11, 3, 2, 'ceuk si hapis bere bintang hiji weh'),
(597, 11, 4, 3, 'Akan lebih baik kalau ada rasa coklat'),
(598, 1, 4, 5, 'Akan lebih baik kalau ada rasa coklat'),
(599, 19, 2, 1, 'susunya gk ada rasa stroberi'),
(600, 1, 2, 4, 'Akan lebih baik kalau ada rasa coklat'),
(601, 18, 1, 4, 'Mantap banget'),
(602, 10, 2, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(603, 14, 3, 3, 'OK BINGITSS'),
(604, 12, 1, 4, 'Akan lebih baik kalau ada rasa coklat'),
(605, 5, 1, 3, 'Mantap banget'),
(606, 10, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(607, 9, 4, 2, 'susunya kemanisan'),
(608, 1, 2, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(609, 10, 3, 5, 'Seger banget susunya'),
(610, 13, 5, 1, 'susu cepet basi'),
(611, 10, 5, 2, 'susunya kemanisan'),
(612, 23, 5, 3, 'Susunya enak, kayak susu'),
(613, 14, 4, 3, 'Kualitas terjamin nih'),
(614, 17, 1, 5, 'Kurirnya baik banget'),
(615, 8, 4, 1, 'susu cepet basi'),
(616, 20, 3, 3, 'Akan lebih baik kalau ada rasa coklat'),
(617, 26, 2, 3, 'Alhamdulillah semoga berkah'),
(618, 25, 2, 1, 'susuna hanyir'),
(619, 6, 4, 2, 'susunya bau amis'),
(620, 15, 5, 5, 'Susunya enak'),
(621, 12, 2, 5, 'Produknya bagus'),
(622, 7, 5, 1, 'susunya kemanisan'),
(623, 1, 4, 5, 'Alhamdulillah semoga berkah'),
(624, 25, 4, 4, 'Lebih enak kalau dingin'),
(625, 4, 1, 2, 'ceuk si hapis bere bintang hiji weh'),
(626, 16, 2, 2, 'susu cepet basi'),
(627, 12, 3, 5, 'Mantap banget'),
(628, 19, 1, 1, 'susunya bau amis'),
(629, 12, 2, 2, 'susunya bau amis'),
(630, 13, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(631, 14, 3, 2, 'susunya kemanisan'),
(632, 19, 3, 3, 'Susunya enak'),
(633, 18, 4, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(634, 23, 5, 5, 'Kurirnya baik banget'),
(635, 22, 2, 2, 'susu cepet basi'),
(636, 5, 3, 4, 'OK BINGITSS'),
(637, 17, 5, 4, 'OK BINGITSS'),
(638, 13, 4, 2, 'ceuk si hapis bere bintang hiji weh'),
(639, 23, 2, 2, 'susuna hanyir'),
(640, 13, 5, 5, 'Mantap banget'),
(641, 3, 1, 3, 'Produknya bagus'),
(642, 10, 3, 4, 'Produknya bagus'),
(643, 3, 5, 3, 'Kurirnya baik banget'),
(644, 26, 4, 2, 'susu cepet basi'),
(645, 14, 3, 5, 'Mantap mantap'),
(646, 25, 1, 1, 'susunya kemanisan'),
(647, 25, 2, 1, 'susunya gk ada rasa stroberi'),
(648, 6, 2, 1, 'ceuk si hapis bere bintang hiji weh'),
(649, 1, 3, 2, 'susunya kemanisan'),
(650, 20, 3, 3, 'Mantap mantap'),
(651, 14, 2, 2, 'susunya bau amis'),
(652, 4, 4, 1, 'ceuk si hapis bere bintang hiji weh'),
(653, 26, 5, 1, 'susunya kemanisan'),
(654, 20, 3, 5, 'Akan lebih baik kalau ada rasa coklat'),
(655, 6, 2, 2, 'susu cepet basi'),
(656, 22, 1, 5, 'Susunya enak'),
(657, 23, 4, 3, 'Alhamdulillah semoga berkah'),
(658, 22, 3, 1, 'susunya bau amis'),
(659, 26, 4, 5, 'Alhamdulillah semoga berkah'),
(660, 7, 2, 4, 'Alhamdulillah semoga berkah'),
(661, 10, 2, 4, 'OK BINGITSS'),
(662, 5, 5, 1, 'susunya kemanisan'),
(663, 14, 4, 5, 'Lebih enak kalau dingin'),
(664, 21, 1, 3, 'Mantap mantap'),
(665, 10, 5, 3, 'Akan lebih baik kalau ada rasa coklat'),
(666, 4, 3, 4, 'Produknya bagus'),
(667, 5, 4, 4, 'Seger banget susunya'),
(668, 22, 4, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(669, 19, 3, 5, 'Produknya bagus'),
(670, 16, 2, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(671, 1, 4, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(672, 23, 5, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(673, 1, 2, 3, 'Alhamdulillah semoga berkah'),
(674, 10, 4, 4, 'Kurirnya baik banget'),
(675, 19, 1, 1, 'susunya kemanisan'),
(676, 8, 4, 3, 'Mantap mantap'),
(677, 19, 5, 4, 'Akan lebih baik kalau ada rasa coklat'),
(678, 25, 2, 3, 'Lebih enak kalau dingin'),
(679, 6, 3, 5, 'Produknya bagus'),
(680, 18, 2, 4, 'Akan lebih baik kalau ada rasa coklat'),
(681, 15, 2, 5, 'Alhamdulillah semoga berkah'),
(682, 1, 1, 4, 'Mantap mantap'),
(683, 15, 2, 1, 'susunya gk ada rasa stroberi'),
(684, 26, 4, 3, 'Seger banget susunya'),
(685, 23, 1, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(686, 21, 2, 4, 'Susunya enak, kayak susu'),
(687, 13, 3, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(688, 21, 5, 3, 'Seger banget susunya'),
(689, 24, 4, 2, 'susunya kemanisan'),
(690, 17, 2, 5, 'Akan lebih baik kalau ada rasa coklat'),
(691, 2, 1, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(692, 7, 2, 5, 'Susunya enak, kayak susu'),
(693, 14, 5, 2, 'susu cepet basi'),
(694, 20, 2, 3, 'Lebih enak kalau dingin'),
(695, 6, 3, 5, 'Susunya enak, kayak susu'),
(696, 4, 2, 2, 'susu cepet basi'),
(697, 16, 5, 3, 'Susunya enak'),
(698, 9, 4, 2, 'susuna hanyir'),
(699, 27, 3, 2, 'susunya bau amis'),
(700, 4, 4, 1, 'susunya bau amis'),
(701, 7, 3, 1, 'ceuk si hapis bere bintang hiji weh'),
(702, 24, 5, 5, 'Akan lebih baik kalau ada rasa coklat'),
(703, 1, 5, 3, 'Alhamdulillah semoga berkah'),
(704, 4, 1, 2, 'susunya bau amis'),
(705, 14, 4, 4, 'Lebih enak kalau dingin'),
(706, 16, 4, 4, 'Susunya enak, kayak susu'),
(707, 15, 2, 5, 'Seger banget susunya'),
(708, 8, 5, 1, 'susunya kemanisan'),
(709, 6, 2, 2, 'susuna hanyir'),
(710, 10, 3, 2, 'susunya bau amis'),
(711, 6, 3, 4, 'Kualitas terjamin nih'),
(712, 1, 1, 3, 'Mantap banget'),
(713, 25, 5, 5, 'Produknya bagus'),
(714, 6, 1, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(715, 4, 4, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(716, 3, 5, 2, 'susunya kemanisan'),
(717, 6, 5, 4, 'Produknya bagus'),
(718, 4, 2, 5, 'Susunya enak, kayak susu'),
(719, 24, 1, 5, 'Susunya enak'),
(720, 3, 4, 2, 'susunya bau amis'),
(721, 15, 3, 1, 'ceuk si hapis bere bintang hiji weh'),
(722, 4, 2, 1, 'susunya kemanisan'),
(723, 17, 2, 5, 'Susunya enak'),
(724, 9, 1, 1, 'susunya bau amis'),
(725, 15, 3, 5, 'Kualitas terjamin nih'),
(726, 11, 3, 5, 'Mantap banget'),
(727, 8, 3, 1, 'susuna hanyir'),
(728, 21, 5, 3, 'Lebih enak kalau dingin'),
(729, 10, 2, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(730, 14, 3, 2, 'ceuk si hapis bere bintang hiji weh'),
(731, 26, 1, 2, 'susuna hanyir'),
(732, 26, 5, 5, 'Mantap mantap'),
(733, 21, 4, 3, 'Akan lebih baik kalau ada rasa coklat'),
(734, 27, 5, 4, 'Kualitas terjamin nih'),
(735, 12, 2, 5, 'Produknya bagus'),
(736, 19, 2, 2, 'susunya kemanisan'),
(737, 11, 3, 3, 'Seger banget susunya'),
(738, 8, 5, 1, 'susunya gk ada rasa stroberi'),
(739, 3, 2, 3, 'Lebih enak kalau dingin'),
(740, 15, 4, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(741, 4, 1, 5, 'Susunya enak, kayak susu'),
(742, 16, 2, 3, 'Susunya enak'),
(743, 19, 3, 5, 'Seger banget susunya'),
(744, 16, 5, 5, 'Susunya enak, kayak susu'),
(745, 8, 5, 5, 'Seger banget susunya'),
(746, 23, 1, 3, 'Alhamdulillah semoga berkah'),
(747, 3, 3, 1, 'susunya gk ada rasa stroberi'),
(748, 15, 4, 3, 'Mantap banget'),
(749, 16, 2, 5, 'Seger banget susunya'),
(750, 6, 4, 5, 'Seger banget susunya'),
(751, 27, 1, 5, 'Mantap banget'),
(752, 21, 3, 3, 'Kurirnya baik banget'),
(753, 11, 2, 2, 'susunya bau amis'),
(754, 1, 2, 5, 'Susunya enak'),
(755, 2, 3, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(756, 16, 5, 2, 'susuna hanyir'),
(757, 5, 2, 1, 'susu cepet basi'),
(758, 24, 2, 1, 'susunya kemanisan'),
(759, 20, 4, 3, 'Kurirnya baik banget'),
(760, 22, 5, 3, 'Produknya bagus'),
(761, 12, 5, 4, 'OK BINGITSS'),
(762, 25, 3, 5, 'Susunya enak, kayak susu'),
(763, 5, 2, 5, 'Produknya bagus'),
(764, 5, 3, 4, 'Susunya enak, kayak susu'),
(765, 20, 4, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(766, 22, 4, 5, 'Mantap banget'),
(767, 27, 5, 2, 'susunya gk ada rasa stroberi'),
(768, 25, 4, 3, 'Susunya enak'),
(769, 5, 1, 3, 'Produknya bagus'),
(770, 24, 3, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(771, 26, 5, 2, 'susunya kemanisan'),
(772, 18, 1, 4, 'Susunya enak, kayak susu'),
(773, 25, 3, 5, 'Mantap banget'),
(774, 17, 5, 3, 'Mantap banget'),
(775, 23, 3, 3, 'Kualitas terjamin nih'),
(776, 12, 1, 1, 'susunya bau amis'),
(777, 14, 3, 4, 'Lebih enak kalau dingin'),
(778, 26, 2, 2, 'susuna hanyir'),
(779, 9, 1, 2, 'susunya kemanisan'),
(780, 15, 2, 1, 'susunya kemanisan'),
(781, 12, 4, 3, 'Mantap banget'),
(782, 21, 4, 4, 'Susunya enak, kayak susu'),
(783, 22, 2, 3, 'Mantap banget'),
(784, 18, 4, 2, 'susunya kemanisan'),
(785, 23, 1, 3, 'Susunya enak, kayak susu'),
(786, 26, 2, 1, 'susunya kemanisan'),
(787, 24, 5, 2, 'susunya gk ada rasa stroberi'),
(788, 1, 4, 3, 'Lebih enak kalau dingin'),
(789, 21, 4, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(790, 13, 2, 2, 'susunya kemanisan'),
(791, 27, 4, 2, 'susu cepet basi'),
(792, 20, 2, 2, 'susunya kemanisan'),
(793, 25, 4, 5, 'Alhamdulillah semoga berkah'),
(794, 6, 5, 5, 'Lebih enak kalau dingin'),
(795, 1, 3, 2, 'susuna hanyir'),
(796, 10, 1, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(797, 23, 3, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(798, 12, 4, 2, 'susunya kemanisan'),
(799, 20, 4, 1, 'susunya kemanisan'),
(800, 18, 3, 1, 'susuna hanyir'),
(801, 16, 1, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(802, 9, 4, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(803, 3, 4, 2, 'susunya kemanisan'),
(804, 24, 3, 2, 'susunya gk ada rasa stroberi'),
(805, 21, 3, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(806, 3, 2, 4, 'Kurirnya baik banget'),
(807, 22, 4, 2, 'susunya kemanisan'),
(808, 3, 5, 5, 'Kurirnya baik banget'),
(809, 22, 3, 5, 'Alhamdulillah semoga berkah'),
(810, 16, 1, 3, 'Akan lebih baik kalau ada rasa coklat'),
(811, 5, 5, 4, 'Susunya enak'),
(812, 24, 2, 2, 'susunya bau amis'),
(813, 24, 1, 4, 'Mantap banget'),
(814, 7, 4, 3, 'OK BINGITSS'),
(815, 7, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(816, 13, 1, 1, 'susunya gk ada rasa stroberi'),
(817, 23, 3, 3, 'Lebih enak kalau dingin'),
(818, 23, 1, 4, 'OK BINGITSS'),
(819, 20, 3, 4, 'Akan lebih baik kalau ada rasa coklat'),
(820, 27, 5, 2, 'susunya bau amis'),
(821, 9, 2, 5, 'Alhamdulillah semoga berkah'),
(822, 7, 3, 3, 'Susunya enak'),
(823, 24, 3, 2, 'ceuk si hapis bere bintang hiji weh'),
(824, 2, 1, 4, 'Kurirnya baik banget'),
(825, 3, 4, 4, 'Produknya bagus'),
(826, 5, 4, 4, 'OK BINGITSS'),
(827, 1, 1, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(828, 6, 5, 3, 'Mantap mantap'),
(829, 14, 4, 2, 'susuna hanyir'),
(830, 13, 5, 3, 'Lebih enak kalau dingin'),
(831, 21, 2, 5, 'Alhamdulillah semoga berkah'),
(832, 13, 4, 5, 'OK BINGITSS'),
(833, 19, 3, 4, 'Susunya enak'),
(834, 4, 5, 1, 'susunya kemanisan'),
(835, 9, 4, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(836, 13, 2, 4, 'OK BINGITSS'),
(837, 21, 2, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(838, 6, 2, 2, 'susu cepet basi'),
(839, 19, 1, 4, 'Produknya bagus'),
(840, 27, 3, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(841, 22, 3, 4, 'Produknya bagus'),
(842, 2, 4, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(843, 20, 1, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(844, 16, 1, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(845, 19, 5, 3, 'Mantap mantap'),
(846, 26, 5, 1, 'susunya gk ada rasa stroberi'),
(847, 19, 3, 4, 'Mantap banget'),
(848, 5, 3, 3, 'Sehat banget, cocok buat perkembangan anak saya'),
(849, 23, 4, 3, 'Susunya enak, kayak susu'),
(850, 24, 2, 3, 'Mantap mantap'),
(851, 21, 5, 2, 'ceuk si hapis bere bintang hiji weh'),
(852, 16, 4, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(853, 15, 3, 4, 'OK BINGITSS'),
(854, 11, 2, 3, 'Kualitas terjamin nih'),
(855, 9, 5, 2, 'ceuk si hapis bere bintang hiji weh'),
(856, 16, 5, 4, 'Seger banget susunya'),
(857, 16, 2, 4, 'Lebih enak kalau dingin'),
(858, 16, 3, 5, 'Mantap banget'),
(859, 5, 3, 5, 'Mantap mantap'),
(860, 5, 4, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(861, 5, 4, 4, 'Alhamdulillah semoga berkah'),
(862, 25, 5, 1, 'ceuk si hapis bere bintang hiji weh'),
(863, 25, 5, 1, 'susunya gk ada rasa stroberi'),
(864, 14, 3, 1, 'susuna hanyir'),
(865, 12, 3, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(866, 3, 4, 1, 'susunya gk ada rasa stroberi'),
(867, 3, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(868, 22, 3, 2, 'susuna hanyir'),
(869, 19, 5, 1, 'susunya gk ada rasa stroberi'),
(870, 22, 3, 1, 'susu cepet basi'),
(871, 10, 1, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(872, 13, 1, 2, 'susunya gk ada rasa stroberi'),
(873, 1, 3, 4, 'Akan lebih baik kalau ada rasa coklat'),
(874, 17, 5, 1, 'susunya gk ada rasa stroberi'),
(875, 18, 1, 3, 'Susunya enak, kayak susu'),
(876, 20, 5, 2, 'susunya kemanisan'),
(877, 19, 4, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(878, 27, 5, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(879, 10, 4, 3, 'Kurirnya baik banget'),
(880, 3, 5, 1, 'susunya bau amis'),
(881, 10, 2, 2, 'susunya gk ada rasa stroberi'),
(882, 2, 5, 3, 'OK BINGITSS'),
(883, 24, 2, 3, 'Alhamdulillah semoga berkah'),
(884, 25, 1, 5, 'Lebih enak kalau dingin'),
(885, 8, 3, 1, 'susunya gk ada rasa stroberi'),
(886, 6, 3, 4, 'Susunya enak'),
(887, 27, 3, 3, 'Susunya enak'),
(888, 12, 3, 1, 'ceuk si hapis bere bintang hiji weh'),
(889, 19, 5, 4, 'Susunya enak'),
(890, 18, 2, 2, 'susuna hanyir'),
(891, 18, 4, 4, 'Kualitas terjamin nih'),
(892, 3, 4, 4, 'Susunya enak, kayak susu'),
(893, 24, 3, 2, 'susu cepet basi'),
(894, 27, 5, 1, 'susunya kemanisan'),
(895, 15, 3, 5, 'Mantap banget'),
(896, 21, 3, 3, 'Kurirnya baik banget'),
(897, 19, 1, 3, 'Seger banget susunya'),
(898, 14, 2, 3, 'Susunya enak, kayak susu'),
(899, 12, 2, 5, 'Akan lebih baik kalau ada rasa coklat'),
(900, 12, 5, 3, 'Mantap banget'),
(901, 18, 2, 4, 'Kualitas terjamin nih'),
(902, 25, 4, 2, 'susu cepet basi'),
(903, 3, 2, 4, 'Produknya bagus'),
(904, 26, 3, 3, 'Alhamdulillah semoga berkah'),
(905, 7, 1, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(906, 3, 2, 5, 'Kurirnya baik banget'),
(907, 24, 5, 2, 'susunya kemanisan'),
(908, 17, 1, 3, 'Susunya enak'),
(909, 22, 1, 3, 'Susunya enak'),
(910, 12, 2, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(911, 19, 2, 5, 'Mantap mantap'),
(912, 6, 2, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(913, 26, 2, 4, 'Susunya enak, kayak susu'),
(914, 13, 5, 4, 'Kurirnya baik banget'),
(915, 2, 3, 1, 'ceuk si hapis bere bintang hiji weh'),
(916, 15, 5, 5, 'Kualitas terjamin nih'),
(917, 2, 5, 4, 'Kualitas terjamin nih'),
(918, 1, 3, 3, 'Mantap banget'),
(919, 3, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(920, 24, 3, 1, 'susunya gk ada rasa stroberi'),
(921, 17, 5, 4, 'OK BINGITSS'),
(922, 14, 5, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(923, 1, 3, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(924, 27, 4, 5, 'Seger banget susunya'),
(925, 9, 1, 1, 'susunya gk ada rasa stroberi'),
(926, 5, 3, 5, 'Alhamdulillah semoga berkah'),
(927, 7, 4, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(928, 13, 1, 1, 'susunya gk ada rasa stroberi'),
(929, 9, 3, 5, 'Susunya enak'),
(930, 9, 2, 3, 'Susunya enak, kayak susu'),
(931, 21, 5, 4, 'Produknya bagus'),
(932, 2, 3, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(933, 11, 1, 4, 'Alhamdulillah semoga berkah'),
(934, 24, 5, 5, 'Seger banget susunya'),
(935, 15, 5, 2, 'susunya gk ada rasa stroberi'),
(936, 5, 2, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(937, 14, 2, 2, 'ceuk si hapis bere bintang hiji weh'),
(938, 5, 5, 2, 'susuna hanyir'),
(939, 16, 5, 4, 'Seger banget susunya'),
(940, 20, 4, 5, 'OK BINGITSS'),
(941, 21, 4, 4, 'OK BINGITSS'),
(942, 19, 3, 5, 'Alhamdulillah semoga berkah'),
(943, 7, 2, 5, 'Mantap banget'),
(944, 8, 3, 5, 'Produknya bagus'),
(945, 20, 4, 5, 'Akan lebih baik kalau ada rasa coklat'),
(946, 5, 3, 5, 'Susunya enak, kayak susu'),
(947, 5, 1, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(948, 21, 4, 4, 'Mantap banget'),
(949, 7, 3, 5, 'Susunya enak'),
(950, 4, 1, 5, 'Mantap mantap'),
(951, 15, 2, 4, 'Mantap banget'),
(952, 16, 4, 4, 'OK BINGITSS'),
(953, 4, 2, 3, 'Susunya enak, kayak susu'),
(954, 17, 1, 5, 'Produknya bagus'),
(955, 26, 5, 2, 'ceuk si hapis bere bintang hiji weh'),
(956, 7, 5, 4, 'Susunya enak'),
(957, 9, 2, 3, 'OK BINGITSS'),
(958, 22, 2, 2, 'susunya bau amis'),
(959, 9, 4, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(960, 23, 5, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(961, 7, 3, 3, 'Produknya bagus'),
(962, 25, 4, 2, 'susunya kemanisan'),
(963, 17, 2, 4, 'Susunya enak, kayak susu'),
(964, 3, 4, 5, 'Alhamdulillah semoga berkah'),
(965, 9, 2, 2, 'susunya kemanisan'),
(966, 16, 4, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(967, 1, 4, 2, 'susuna hanyir'),
(968, 14, 1, 3, 'Mantap banget'),
(969, 21, 1, 1, 'susunya gk ada rasa stroberi'),
(970, 25, 4, 5, 'OK BINGITSS'),
(971, 12, 2, 1, 'susuna hanyir'),
(972, 24, 4, 1, 'susunya gk ada rasa stroberi'),
(973, 14, 4, 2, 'susuna hanyir'),
(974, 26, 2, 1, 'susu cepet basi'),
(975, 10, 5, 5, 'Mantap mantap'),
(976, 25, 1, 3, 'Seger banget susunya'),
(977, 27, 2, 2, 'susuna hanyir'),
(978, 14, 4, 1, 'susu cepet basi'),
(979, 26, 2, 3, 'Lebih enak kalau dingin'),
(980, 20, 1, 3, 'Seger banget susunya'),
(981, 26, 1, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(982, 10, 3, 2, 'susunya bau amis'),
(983, 4, 3, 5, 'Kualitas terjamin nih'),
(984, 15, 2, 4, 'Mantap banget'),
(985, 17, 3, 4, 'Kurirnya baik banget'),
(986, 15, 1, 2, 'susuna hanyir'),
(987, 19, 4, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(988, 18, 2, 2, 'ceuk si hapis bere bintang hiji weh'),
(989, 1, 2, 4, 'OK BINGITSS'),
(990, 25, 4, 5, 'Kualitas terjamin nih'),
(991, 20, 3, 1, 'susunya kemanisan'),
(992, 1, 1, 1, 'ceuk si hapis bere bintang hiji weh'),
(993, 7, 1, 2, 'susunya bau amis'),
(994, 1, 5, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(995, 17, 1, 3, 'OK BINGITSS'),
(996, 8, 1, 5, 'Susunya enak, kayak susu'),
(997, 13, 1, 1, 'susunya bau amis'),
(998, 2, 5, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(999, 3, 4, 1, 'susunya bau amis'),
(1000, 27, 2, 4, 'Susunya enak, kayak susu'),
(1001, 9, 1, 5, 'Produknya bagus'),
(1002, 16, 4, 2, 'susu cepet basi'),
(1003, 17, 2, 1, 'susunya bau amis'),
(1004, 17, 5, 3, 'Seger banget susunya'),
(1005, 14, 5, 5, 'Susunya enak, kayak susu'),
(1006, 1, 5, 5, 'Susunya enak, kayak susu'),
(1007, 26, 4, 2, 'susuna hanyir'),
(1008, 9, 5, 5, 'Seger banget susunya'),
(1009, 25, 3, 4, 'OK BINGITSS'),
(1010, 24, 3, 3, 'Susunya enak'),
(1011, 18, 4, 1, 'susunya kemanisan'),
(1012, 23, 1, 5, 'Mantap banget'),
(1013, 16, 3, 5, 'Susunya enak'),
(1014, 25, 1, 5, 'Akan lebih baik kalau ada rasa coklat'),
(1015, 3, 5, 5, 'Kurirnya baik banget'),
(1016, 19, 2, 2, 'susu cepet basi'),
(1017, 8, 4, 5, 'Pembayarannya mudah banget, susunya enak lagi'),
(1018, 18, 4, 4, 'Mantap mantap'),
(1019, 15, 2, 5, 'Susunya enak, kayak susu'),
(1020, 1, 4, 1, 'ceuk si hapis bere bintang hiji weh'),
(1021, 6, 5, 2, 'susu cepet basi'),
(1022, 5, 3, 4, 'Kualitas terjamin nih'),
(1023, 4, 4, 2, 'susu cepet basi'),
(1024, 21, 1, 5, 'Kurirnya baik banget'),
(1025, 13, 4, 2, 'ceuk si hapis bere bintang hiji weh'),
(1026, 19, 5, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(1027, 16, 2, 2, 'susuna hanyir'),
(1028, 8, 5, 3, 'Alhamdulillah semoga berkah'),
(1029, 23, 4, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(1030, 17, 4, 5, 'Akan lebih baik kalau ada rasa coklat'),
(1031, 3, 5, 5, 'Seger banget susunya'),
(1032, 4, 4, 1, 'susunya bau amis'),
(1033, 24, 3, 4, 'Susunya enak, kayak susu'),
(1034, 8, 2, 3, 'Akan lebih baik kalau ada rasa coklat'),
(1035, 17, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(1036, 24, 1, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(1037, 21, 2, 3, 'Seger banget susunya'),
(1038, 12, 1, 5, 'Mantap mantap'),
(1039, 3, 1, 3, 'Kurirnya baik banget'),
(1040, 17, 4, 4, 'Kurirnya baik banget'),
(1041, 22, 4, 3, 'Susunya enak, kayak susu'),
(1042, 23, 4, 4, 'Produknya bagus'),
(1043, 12, 5, 4, 'OK BINGITSS'),
(1044, 8, 2, 2, 'susuna hanyir'),
(1045, 15, 1, 4, 'Susunya enak'),
(1046, 17, 1, 5, 'Alhamdulillah semoga berkah'),
(1047, 15, 1, 2, 'susunya gk ada rasa stroberi'),
(1048, 3, 1, 5, 'Susunya enak, kayak susu'),
(1049, 7, 4, 5, 'Mantap mantap'),
(1050, 6, 4, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(1051, 27, 5, 2, 'susunya gk ada rasa stroberi'),
(1052, 3, 4, 1, 'ceuk si hapis bere bintang hiji weh'),
(1053, 27, 1, 4, 'OK BINGITSS'),
(1054, 21, 5, 3, 'Lebih enak kalau dingin'),
(1055, 2, 5, 5, 'OK BINGITSS'),
(1056, 19, 5, 3, 'Lebih enak kalau dingin'),
(1057, 1, 5, 1, 'susu cepet basi'),
(1058, 15, 1, 2, 'susunya gk ada rasa stroberi'),
(1059, 24, 5, 3, 'Akan lebih baik kalau ada rasa coklat'),
(1060, 16, 2, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(1061, 1, 2, 5, 'Seger banget susunya'),
(1062, 19, 4, 4, 'Mantap banget'),
(1063, 24, 1, 3, 'OK BINGITSS'),
(1064, 22, 4, 1, 'ceuk si hapis bere bintang hiji weh'),
(1065, 25, 4, 3, 'Akan lebih baik kalau ada rasa coklat'),
(1066, 9, 1, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(1067, 23, 4, 5, 'Mantap banget'),
(1068, 11, 3, 3, 'OK BINGITSS'),
(1069, 9, 2, 5, 'Kurirnya baik banget'),
(1070, 25, 5, 3, 'Mantap banget'),
(1071, 18, 5, 5, 'Produknya bagus'),
(1072, 12, 2, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(1073, 11, 2, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(1074, 4, 2, 3, 'Susunya enak, kayak susu'),
(1075, 26, 1, 4, 'Akan lebih baik kalau ada rasa coklat'),
(1076, 10, 4, 2, 'ceuk si hapis bere bintang hiji weh'),
(1077, 18, 3, 3, 'Mantap mantap'),
(1078, 16, 1, 4, 'Seger banget susunya'),
(1079, 16, 4, 3, 'Alhamdulillah semoga berkah'),
(1080, 25, 4, 5, 'Susunya enak'),
(1081, 25, 5, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(1082, 1, 4, 3, 'Susunya enak, kayak susu'),
(1083, 23, 2, 3, 'Susunya enak'),
(1084, 26, 2, 1, 'susunya bau amis'),
(1085, 13, 2, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(1086, 17, 2, 5, 'Kurirnya baik banget'),
(1087, 10, 5, 4, 'Produknya bagus'),
(1088, 24, 5, 2, 'susuna hanyir'),
(1089, 4, 2, 4, 'Kurirnya baik banget'),
(1090, 24, 4, 3, 'Akan lebih baik kalau ada rasa coklat'),
(1091, 13, 3, 3, 'Susunya enak'),
(1092, 22, 5, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(1093, 27, 3, 1, 'susunya bau amis'),
(1094, 27, 2, 4, 'Susunya enak'),
(1095, 26, 2, 2, 'susunya bau amis'),
(1096, 23, 5, 5, 'Kualitas terjamin nih'),
(1097, 17, 3, 3, 'Seger banget susunya'),
(1098, 9, 5, 4, 'Mantap mantap'),
(1099, 11, 2, 2, 'susuna hanyir'),
(1100, 12, 2, 5, 'Lebih enak kalau dingin'),
(1101, 14, 4, 3, 'Seger banget susunya'),
(1102, 18, 2, 1, 'susu cepet basi'),
(1103, 8, 2, 3, 'Alhamdulillah semoga berkah'),
(1104, 16, 2, 3, 'Alhamdulillah semoga berkah'),
(1105, 12, 3, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(1106, 5, 5, 2, 'susu cepet basi'),
(1107, 4, 1, 1, 'susunya bau amis'),
(1108, 10, 1, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(1109, 26, 3, 3, 'Mantap mantap'),
(1110, 19, 4, 1, 'susuna hanyir'),
(1111, 16, 3, 5, 'Kurirnya baik banget'),
(1112, 10, 3, 1, 'ceuk si hapis bere bintang hiji weh'),
(1113, 12, 2, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(1114, 7, 1, 4, 'Akan lebih baik kalau ada rasa coklat'),
(1115, 3, 4, 5, 'Kurirnya baik banget'),
(1116, 14, 1, 3, 'Mantap mantap'),
(1117, 25, 2, 4, 'Seger banget susunya'),
(1118, 27, 2, 1, 'susu cepet basi'),
(1119, 6, 3, 4, 'Alhamdulillah semoga berkah'),
(1120, 11, 3, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(1121, 3, 5, 1, 'susuna hanyir'),
(1122, 9, 3, 2, 'ceuk si hapis bere bintang hiji weh'),
(1123, 2, 3, 3, 'Alhamdulillah semoga berkah'),
(1124, 8, 3, 1, 'susu cepet basi'),
(1125, 22, 3, 4, 'Akan lebih baik kalau ada rasa coklat'),
(1126, 16, 5, 2, 'susunya bau amis'),
(1127, 26, 3, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(1128, 14, 5, 3, 'Akan lebih baik kalau ada rasa coklat'),
(1129, 26, 2, 1, 'susunya gk ada rasa stroberi'),
(1130, 27, 4, 1, 'susu cepet basi'),
(1131, 16, 5, 1, 'susunya bau amis'),
(1132, 1, 5, 4, 'Kualitas terjamin nih'),
(1133, 4, 2, 2, 'susu cepet basi'),
(1134, 1, 3, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(1135, 15, 5, 2, 'susunya kemanisan'),
(1136, 13, 3, 1, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(1137, 6, 1, 3, 'Susunya enak, kayak susu'),
(1138, 4, 1, 1, 'susu cepet basi'),
(1139, 1, 5, 1, 'susunya bau amis'),
(1140, 21, 2, 4, 'OK BINGITSS'),
(1141, 15, 3, 2, 'susunya gk ada rasa stroberi'),
(1142, 6, 2, 5, 'Kualitas terjamin nih'),
(1143, 3, 1, 3, 'Seger banget susunya'),
(1144, 7, 1, 5, 'Susunya enak'),
(1145, 23, 3, 5, 'Susunya enak, kayak susu'),
(1146, 6, 1, 1, 'susunya bau amis'),
(1147, 2, 5, 5, 'Mantap mantap'),
(1148, 16, 5, 2, 'susunya bau amis'),
(1149, 4, 1, 4, 'Mantap mantap'),
(1150, 20, 2, 1, 'susunya gk ada rasa stroberi'),
(1151, 9, 3, 4, 'Susunya enak');
INSERT INTO `review` (`id`, `id_user`, `id_product`, `stars`, `review`) VALUES
(1152, 11, 1, 3, 'Lebih enak kalau dingin'),
(1153, 7, 5, 2, 'susunya gk ada rasa stroberi'),
(1154, 3, 4, 2, 'nganterna tiap jumat jeung salasa, geus nyaho urang eweuh di kosan'),
(1155, 18, 5, 5, 'Lebih enak kalau dingin'),
(1156, 24, 1, 5, 'Mantap banget'),
(1157, 18, 4, 3, 'Kurirnya baik banget'),
(1158, 15, 3, 5, 'Susunya enak'),
(1159, 25, 2, 1, 'susu cepet basi'),
(1160, 2, 2, 2, 'susunya bau amis'),
(1161, 8, 5, 1, 'susu cepet basi'),
(1162, 4, 5, 2, 'susu cepet basi'),
(1163, 21, 4, 3, 'Akan lebih baik kalau ada rasa coklat'),
(1164, 17, 1, 5, 'Alhamdulillah semoga berkah'),
(1165, 19, 1, 5, 'Susunya enak, kayak susu'),
(1166, 13, 2, 3, 'Mantap banget'),
(1167, 17, 5, 1, 'ceuk si hapis bere bintang hiji weh'),
(1168, 21, 3, 3, 'Lebih enak kalau dingin'),
(1169, 23, 5, 2, 'susu cepet basi'),
(1170, 24, 3, 4, 'OK BINGITSS'),
(1171, 19, 5, 1, 'susunya kemanisan'),
(1172, 20, 2, 3, 'OK BINGITSS'),
(1173, 10, 3, 2, 'susunya bau amis'),
(1174, 20, 1, 5, 'Mantap mantap'),
(1175, 26, 5, 5, 'Produknya bagus'),
(1176, 25, 1, 1, 'susunya kemanisan'),
(1177, 5, 4, 2, 'ceuk si hapis bere bintang hiji weh'),
(1178, 25, 2, 3, 'Kualitas terjamin nih'),
(1179, 7, 5, 5, 'Lebih enak kalau dingin'),
(1180, 19, 1, 4, 'Alhamdulillah semoga berkah'),
(1181, 20, 3, 3, 'Kurirnya baik banget'),
(1182, 17, 1, 2, 'susunya bau amis'),
(1183, 15, 5, 2, 'ceuk si hapis bere bintang hiji weh'),
(1184, 15, 1, 3, 'Pembayarannya mudah banget, susunya enak lagi'),
(1185, 26, 5, 2, 'susuna hanyir'),
(1186, 11, 1, 4, 'Pembayarannya mudah banget, susunya enak lagi'),
(1187, 17, 1, 5, 'Alhamdulillah semoga berkah'),
(1188, 9, 2, 1, 'ceuk si hapis bere bintang hiji weh'),
(1189, 18, 4, 4, 'Produknya bagus'),
(1190, 16, 4, 4, 'Sehat banget, cocok buat perkembangan anak saya'),
(1191, 9, 4, 3, 'Akan lebih baik kalau ada rasa coklat'),
(1192, 15, 2, 3, 'Alhamdulillah semoga berkah'),
(1193, 16, 1, 5, 'Lebih enak kalau dingin'),
(1194, 12, 5, 1, 'susunya gk ada rasa stroberi'),
(1195, 9, 4, 2, 'ceuk si hapis bere bintang hiji weh'),
(1196, 1, 1, 5, 'Sehat banget, cocok buat perkembangan anak saya'),
(1197, 15, 1, 3, 'Seger banget susunya'),
(1198, 22, 1, 1, 'susunya kemanisan'),
(1199, 22, 5, 3, 'Mantap banget'),
(1200, 23, 4, 4, 'OK BINGITSS'),
(1201, 15, 2, 3, 'Lebih enak kalau dingin'),
(1202, 8, 3, 5, 'Kualitas terjamin nih'),
(1203, 8, 5, 5, 'Mantap banget'),
(1204, 25, 2, 2, 'susunya bau amis');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `buyer` int(11) UNSIGNED NOT NULL,
  `product` int(11) NOT NULL,
  `jadwal` enum('jadwal1','jadwal2','jadwal3') DEFAULT NULL,
  `paket` enum('paket1','paket2','paket3') DEFAULT NULL,
  `price` int(11) NOT NULL,
  `payment` enum('bca','mandiri','bri','bni','ovo','dana','gopay','alfamart','indomaret') NOT NULL,
  `date` date NOT NULL,
  `expired_date` date NOT NULL,
  `status` enum('belum lunas','lunas','batal','refund') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `buyer`, `product`, `jadwal`, `paket`, `price`, `payment`, `date`, `expired_date`, `status`) VALUES
(1, 6, 5, 'jadwal1', 'paket3', 19950000, 'bca', '2020-12-30', '2021-01-29', 'lunas'),
(2, 2, 1, 'jadwal1', 'paket1', 4750000, 'ovo', '2020-12-29', '2020-12-16', 'lunas'),
(5, 3, 1, 'jadwal3', 'paket3', 4750000, 'gopay', '2020-12-31', '2021-11-27', 'lunas'),
(6, 4, 1, 'jadwal3', 'paket3', 4750000, 'gopay', '2021-01-01', '2021-12-30', 'lunas'),
(7, 5, 3, 'jadwal3', 'paket3', 12350000, 'bri', '2021-01-02', '2022-01-03', 'lunas'),
(11, 7, 5, 'jadwal3', 'paket3', 19950000, 'gopay', '2020-12-31', '2021-12-31', 'lunas'),
(12, 1, 5, 'jadwal3', 'paket3', 19950000, 'gopay', '2021-01-02', '2022-01-02', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `full_name` varchar(75) NOT NULL,
  `address` text DEFAULT NULL,
  `profile_pict` text NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `full_name`, `address`, `profile_pict`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'faraaz@pianeta.com', 'faraaz', 'Faraaz', 'Kp Cipedung', '/assets/img/profile/faraaz.jpg', '$2y$10$VA/1Hj5fGMR4cHupb0owWOuRIQmGNvk4sk3pMjbDqh4n/Mx4SQbH.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 00:37:40', '2020-12-06 00:37:40', NULL),
(2, 'boyas@pianeta.com', 'boyas', 'Boyas', 'Jl Mars', '/assets/img/profile/boyas.jpg', '$2y$10$RPCzkYIn7XsHmFDrcxNt8.CySYZ4i2dTFqW86WbaifvEbXtoyTyQy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:05:16', '2020-12-06 01:05:16', NULL),
(3, 'hafizh@pianeta.com', 'hafizh', 'Hafizh', NULL, '/assets/img/profile/hafizh.jpg', '$2y$10$a2kFaJDAS/2MuAg9Sqjg1OZFUGisBTpLfw4lXbiR1SwvwBSF5ljcW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:05:31', '2020-12-06 01:05:31', NULL),
(4, 'andrias@pianeta.com', 'andrias', 'Andrias', NULL, '/assets/img/profile/andrias.jpg', '$2y$10$6i1N0CfTlafsYQSzVnuNLedEZ2yLi0/DPEQ08hlv7m6Yifvzsse9G', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:05:39', '2020-12-06 01:05:39', NULL),
(5, 'felix@pianeta.com', 'felix', 'Felix', NULL, '/assets/img/profile/felix.jpg', '$2y$10$rxnA5CDrJibrPI.guwF8uudMGHTEILyY6R6f3qXmroEAMS29ap8ay', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:05:46', '2020-12-06 01:05:46', NULL),
(6, 'rauf@pianeta.com', 'rauf', 'Rauf', NULL, '/assets/img/profile/rauf.jpg', '$2y$10$AzfvAgz.YY/72IM.NUE97us9QwQ30DC4cDLoNA4WI5T3ZIjCuIRH.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:05:55', '2020-12-06 01:05:55', NULL),
(7, 'ridho@pianeta.com', 'ridho', 'Ridho', NULL, '/assets/img/profile/ridho.jpg', '$2y$10$8wpWukiI9pGFV.9cZShkvu/iKkuYSSBXEXWYCkAb2dtXhJfU.0FTy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:06:03', '2020-12-06 01:06:03', NULL),
(8, 'habil@pianeta.com', 'habil', 'Habil', NULL, '/assets/img/profile/habil.jpg', '$2y$10$uNRqH5LwVXzP1x8fJqp/7OTpcD4BOt.4iARQc33QQP4.XwzjOtIsG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:06:17', '2020-12-06 01:06:17', NULL),
(9, 'fauzan@pianeta.com', 'fauzan', 'Fauzan', NULL, '/assets/img/profile/fauzan.jpg', '$2y$10$AjhzBJlacBwMWHRlMvV3yOF/Yifp96FojHe2rPfBtMVDTSdwIQ37u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:06:30', '2020-12-06 01:06:30', NULL),
(10, 'rully@pianeta.com', 'rully', 'Rully', NULL, '/assets/img/profile/rully.jpg', '$2y$10$i3ZjkbCOg87GqFmAkxS8iOwkKjuE/hB5HIh65/H0vag/N0WuYgPOe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:06:45', '2020-12-06 01:06:45', NULL),
(11, 'marsa@pianeta.com', 'marsa', 'Marsa', NULL, '/assets/img/profile/marsa.jpg', '$2y$10$EJIMhb1jn2CE4qqDN7XZouP62jJT7Fury3FAE4fp0Aoq8BYZbEU9a', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:06:58', '2020-12-06 01:06:58', NULL),
(12, 'maulana@pianeta.com', 'maulana', 'Maulana', NULL, '/assets/img/profile/maulana.jpg', '$2y$10$nCCxVe1k/4YM14skOi.9WueTOODcHVCi2OFjcMljIVrwFZlTqnham', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:07:07', '2020-12-06 01:07:07', NULL),
(13, 'erick@pianeta.com', 'erick', 'Erick', NULL, '/assets/img/profile/erick.jpg', '$2y$10$iow1zV8N6bfKJWgFrYcHkuNGxQIwm9BJ3bcqX.98pVf.PAzgq5uey', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:07:15', '2020-12-06 01:07:15', NULL),
(14, 'tirta@pianeta.com', 'tirta', 'Tirta', NULL, '/assets/img/profile/tirta.jpg', '$2y$10$d1HIKZ4enXWFMIzcqNO0CuYQfGQ.WTxxB8.0fVgWwSpu8mF2yBBNa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:07:22', '2020-12-06 01:07:22', NULL),
(15, 'yunardo@pianeta.com', 'yunardo', 'Yunardo', NULL, '/assets/img/profile/yunardo.jpg', '$2y$10$J6e.5XmM6id7tMKqJCScX.xiNckWUOmiQYuzg98HH6O/nRJFn8J8e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:07:32', '2020-12-06 01:07:32', NULL),
(16, 'scandy@pianeta.com', 'scandy', 'Scandy', NULL, '/assets/img/profile/scandy.jpg', '$2y$10$./NlC2UYcGK7hvXfPgqHM.nwFU1ssJD4OwBjZgd1.dIwhnTywZFqi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:07:39', '2020-12-06 01:07:39', NULL),
(17, 'rendi@pianeta.com', 'rendi', 'Rendi', NULL, '/assets/img/profile/rendi.jpg', '$2y$10$FaB6IcQAWBRp52rKNutrROn6JN0vD4JsURYdVR5tskml.5TXh325a', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:07:50', '2020-12-06 01:07:50', NULL),
(18, 'gito@pianeta.com', 'gito', 'Gito', NULL, '/assets/img/profile/gito.jpg', '$2y$10$fbOYMCEi.PfIDBttUW8fzulDJ11kFkax7c8rAbneokth4b0dxJ6Q6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:07:58', '2020-12-06 01:07:58', NULL),
(19, 'dapes@pianeta.com', 'dapes', 'Dapes', NULL, '/assets/img/profile/dapes.jpg', '$2y$10$2HoTw.oSTp4mFH/I/l0H2eIQNAQhBZ5yIAEposkMfKg2oM94EDl/C', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:08:05', '2020-12-06 01:08:05', NULL),
(20, 'hira@pianeta.com', 'hira', 'Hira', NULL, '/assets/img/profile/hira.jpg', '$2y$10$Xj6gT7jFawPglFyS7RCijueIwlCn6mIPNizO72gbMSP3FuuSxsmMC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:08:13', '2020-12-06 01:08:13', NULL),
(21, 'hani@pianeta.com', 'hani', 'Hani', NULL, '/assets/img/profile/hani.jpg', '$2y$10$Qk0VIc3X3JiVnwYVhEfOmeVxW9A13UFko5z99PnUnDKxkmCT3O5w6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:08:20', '2020-12-06 01:08:20', NULL),
(22, 'yassir@pianeta.com', 'yassir', 'Yassir', NULL, '/assets/img/profile/yassir.jpg', '$2y$10$AgCzocsCIGtg/3Ow/ZjWH.es/A6CCqfh3JMuvWHyteitIRr5Gj/Ly', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:08:28', '2020-12-06 01:08:28', NULL),
(23, 'alfan@pianeta.com', 'alfan', 'Alfan', NULL, '/assets/img/profile/alfan.jpg', '$2y$10$8iXCYqQrcLF1yuiV/AbUdeMMp17WGku1vZYSWGOS7bKQWnzhhoJw6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:08:39', '2020-12-06 01:08:39', NULL),
(24, 'ical@pianeta.com', 'ical', 'Ical', NULL, '/assets/img/profile/ical.jpg', '$2y$10$PRw7XXxj2hmjZpbIilHpz.hcmNAIjTRVx8WOeyWDtCu.PRgt0aHKe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:08:46', '2020-12-06 01:08:46', NULL),
(25, 'oki@pianeta.com', 'oki', 'Oki', NULL, '/assets/img/profile/oki.jpg', '$2y$10$FZCloPxvb74GvTSE.qJ9gOBxTIuqalCbsl3bWBpUxrY/Y9VQAtoTa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:08:53', '2020-12-06 01:08:53', NULL),
(26, 'kevien@pianeta.com', 'kevien', 'Kevien', NULL, '/assets/img/profile/kevien.jpg', '$2y$10$b2oS1gj8PfY8sLzXkH6.0.NiiL9vnuR8X4KTkWeWnWBsFQELTxM32', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:22:58', '2020-12-06 01:22:58', NULL),
(27, 'abae@pianeta.com', 'abae', 'Abae', NULL, '/assets/img/profile/abae.jpg', '$2y$10$yx7Ha1pQ1R4peEkvbzkJ3uvCnncgGf24ap9ERLUZ.vBHf56757ecW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-06 01:23:04', '2020-12-06 01:23:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zip`
--

CREATE TABLE `zip` (
  `zip` int(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zip`
--

INSERT INTO `zip` (`zip`, `address`) VALUES
(40162, 'Sukabungah'),
(40163, 'Sukagalih'),
(40164, 'Sukawarna'),
(40171, 'Pasir Kaliki'),
(40172, 'Arjuna'),
(40173, 'Pajajaran, Pamoyanan'),
(40174, 'Husen Sastranegara'),
(40175, 'Sukaraja'),
(40181, 'Kebon Jeruk'),
(40182, 'Ciroyom'),
(40183, 'Dungus Cariang'),
(40184, 'Campaka, Garuda, Maleber'),
(40191, 'Cigadung'),
(40192, 'Pasirlayung'),
(40195, 'Jatihandap, Karang Pamulang, Pasir Impun, indang J'),
(40211, 'Warung Muncang'),
(40212, 'Caringin'),
(40213, 'Cijerah'),
(40214, 'Cigondewah Kaler Kidul'),
(40215, 'Cigondewah Rahayu, Gempolsari'),
(40221, 'Sukahaji, Babakan'),
(40223, 'Babakan Ciparay'),
(40224, 'Margahayu Utara'),
(40225, 'Margasuka'),
(40227, 'Cirangrang'),
(40231, 'Jamika, Suka Asih'),
(40232, 'Babakan Asih, Babakan Tarogong'),
(40233, 'Kopo'),
(40234, 'Situsaeur'),
(40235, 'Kebon Lega'),
(40236, 'Cibaduyut'),
(40237, 'Mekarwangi'),
(40238, 'Cibaduyut Wetan'),
(40239, 'Cibaduyut Kidul'),
(40241, 'Cibadak, Karanganyar'),
(40242, 'Nyengseret, Panjunan'),
(40243, 'Karasak, Pelindung Hewan'),
(40251, 'Balonggede (Balong Gede)'),
(40252, 'Ciateul, Pungkur'),
(40253, 'Cigereleng'),
(40254, 'Ancol, Pasirluyu'),
(40255, 'Ciseureuh'),
(40256, 'Wates'),
(40261, 'Cikawao, Paledang'),
(40262, 'Burangrang, Malabar'),
(40263, 'Lingkar Selatan'),
(40264, 'Turangga'),
(40265, 'Cijagra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trx` (`trx`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_ibfk_2` (`id_product`),
  ADD KEY `review_ibfk_3` (`id_user`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `buyer` (`buyer`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `zip`
--
ALTER TABLE `zip`
  ADD PRIMARY KEY (`zip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1205;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`trx`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`buyer`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
