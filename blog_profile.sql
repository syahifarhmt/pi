-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 04:18 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(200) DEFAULT NULL,
  `berita` text,
  `slug` varchar(200) DEFAULT NULL,
  `published_date` datetime DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `berita`, `slug`, `published_date`, `image`, `status`) VALUES
(1, 'Zoonosis? Apa sih Zoonosis?', 'Zoonosis berasal dari bahasa Prancis “zoonotic” yang berarti penyakit yang bersumber dari hewan dan dapat ditulrkan kepada manusia yang nantinya akan berkembang menjadi wabah (Yudhianto, 2010). Menurut WHO, zoonosis adalah penyakit atau infeksi yang secara alami menular dari binatang vertebrata ke manusia. Dengan demikian, hewan memainkan peran penting dalam menjaga infeksi zoonosis di alam. Zoonosis mungkin bakteri, virus, atau parasit, atau mungkin melibatkan agen yang tidak konvensional. Serta masalah kesehatan masyarakat, banyak penyakit zoonosis utama mencegah produksi makanan ternak yang efisien dan menimbulkan hambatan bagi perdagangan produk hewani secara internasional. Zoonosis dapat disebabkan oleh virus, bakteri, jamur dan parasit.\r\nPenyakit zoonosis yang disebarkan oleh nyamuk dan kutu adalah beberapa penyakit yang paling serius. Contoh zoonosis adalah Ebola, Rabies, Anthrax, Avian Influeza, Cryptosporidiosis, Cat Scratch Fever dan Emerging Infectious Diseases (EID) lainnya. Badan/lembaga internasional yang bergerak dalam bidang ini adalah OIE (Organitation International of Epizootic) yang dinaungi oleh lembaga kesehatan PBB yaitu WHO. \r\nMenurut Kaitlyn T. Walsh, DVM (2017) zoonosis dapat ditularkan dengan berbagai cara yaitu, melalui udara, memakan makanan atau produk yang sudah terkontaminasi, melalui kontak langsung dengan hewan yang terinfeksi, menyentuh area atau permukaan yang ditularkan oleh hewan yang terinfeksi, melalui gigitan serangga seperti nyamuk atau kutu. Banyak transmisi terjadi saat orang mendaki, bersepeda, naik kapal, atau menikmati aktivitas lain di alam terbuka, kebun binatang juga merupakan tempat umum untuk penyakit zoonosis yang akan ditularkan. Mereka yang tinggal dan bekerja di peternakan sangat dekat dengan banyak jenis ternak. Hewan ternak meruapakan salah satu agen zoonosis, selain itu hewan peliharaan juga bisa membawa kutu dan kutu di dalam rumah yang kemudian bisa berpindah ke manusia.\r\nZoonosis terdiri dari sebagian besar penyakit infeksi yang baru dikenali dan juga penyakit menular yang ada. Ketahanan antimikroba pada patogen manusia merupakan ancaman kesehatan masyarakat utama lainnya yang sebagian dipengaruhi oleh penggunaan antibiotik pada peternakan dan pertanian.', 'apa-sih-zoonosis', '2018-06-07 00:00:00', 'zoonosis.png', 1),
(2, 'Hi, I am Zoonologia!', 'Pada era digital, masyarakat kini tidak dapat dipisahkan dari ponsel pintar mereka. Hal inilah yang mendorong kami untuk memanfaatkan kemajuan teknologi sebagai media edukasi kepada masyarakat, khususnya masyarakat urban untuk lebih waspada terhadap penyakit zoonosis. Zoonologia adalah sebuah aplikasi mobile berbasis social networks site dengan sistem point and reward yang interaktif.\r\nKemudian, Zoonologia hadir berbasis Social Network Sites (SNS). Menurut Ellison (2007), Social Network Sites adalah jasa layanan berbasis website dimana user dapat membangun profil publik atau semi publik dalam sebuah sistem dan melihat profil pengguna lainnya serta berbagi dengan pengguna lainnya. Alasan kami ingin menjadikan Zoonologia berbasis SNS karena di era kini, masyarakat dapat membagikan apapun dengan mudah melalui internet. Sehingga kami berharap dengan basis SNS penyebaran informasi zoonosis dapat terakselerasikan.\r\n', 'i-am-zoonologia', '2018-06-07 00:00:00', 'zoologo.jpg', 1),
(3, 'Jangan ada Rabies di antara kita!', 'Rabies atau biasa disebut penyakit anjing gila ini sudah ada sejak ratusan bahkan ribuan tahun sebelum masehi. Penyakit ini ditularkan melalui gigitan anjing, kucing dan juga kera yang telah terinfeksi Lyssavirus.\r\n Di Indonesia sendiri penyakit ini pertama kali ditemukan pada seekor kerbau tahun 1884 oleh Esser. Sampai dengan tahun 2015, Rabies sudah menginfeksi hingga 25 provinsi yang ada di seluruh Indonesia dengan jumlah kasus gigitan sebanyak 80.403 kasus gigitan hewan penular rabies (GHPR) yang dilaporkan.  Serem banget kan Logers ?! Gimana sih cara kita biar nggak tertular Rabies? \r\nTenang aja Logers, berikut adalah ciri hewan yang terinfeksi Rabies: \r\n1. Suka menyendiri\r\n2. Suka tempat yang dingin dan gelap\r\n3. Pendiam, pemarah, sensitif, menyerang dan menggigit apa saja \r\n4. Hipersalivasi (mengeluarkan banyak air liur dari biasanya)\r\n5. Fotophobia (takut cahaya)\r\nJika kalian sudah terlanjur tergigit hewan yang punya ciri-ciri seperti diatas, gausah khawatir Logers. Lakukan urutan berikut ya !\r\n1. Cuci luka dengan air mengalir dengan sabun/detergen selama 10-15 menit.\r\n2. Berikan antiseptik pada luka seperti Alkohol 70%, Betadine, Rivanol dll.\r\n3. Laporkan segera ke petugas kesehatan terdekat ya, seperti klinik, Puskesmas atau RS.', 'rabies-di-antara-kita', '2018-06-07 00:00:00', 'rabies.jpg', 0),
(4, 'Avian Influenza', 'Deskripsi pertama Flu Burung atau Avian Influenza (AI) berawal dari Perroncito pada tahun 1878 di Italia Utara. Penyakit ini berkembang melalui virus H5N1 dan menyebar melalui udara. \r\nKasus ini sudah menginfeksi manusia di seluruh belahan dunia dan lebih dari 200 diantaranya meninggal dunia. Pada tahun 2005 Flu Burung ini pertama kali dilaporkan di Indonesia. Sejak saat itu lebih dari 130 orang terinfeksi dan 110 diantaranya meninggal dunia. Tercatat pada tanggal 15 Januari 2007, di Indonesia telah terjadi 4 kasus dan 3 diantaranya meninggal dunia. \r\n Nggak cukup sampai disitu Logers, Indonesia bahkan tercatat sebagai negara yang memiliki kasus Flu Burung dengan angka kematian tertinggi di dunia.\r\nSerem banget ya Flu Burung ini, apalagi buat kamu-kamu yang suka makan ayam. Unchh, nggak usah takut Logers! Nih, kita kasih tips bermanfaat buat kalian.\r\nPertama, buat kalian yang suka banget (atau suka aja) makan ayam. \r\n1. Pastiin ayam yang kalian masak itu direbus dulu dengan air yang sudah mendidih lebih dari 1 menit (didihkan dulu airnya baru masukkan ayamnya ya Logers). Karena, Virus H5N1 ini akan mati pada suhu 80?\r\n2. Saat kalian memasak telur, pastikan telur tersebut matang dengan sempurna. Kalau kalian ingin merebus telur, masukkan telur ketika air sudah mendidih dan rebus telur selama 6 menit ya. (sabar ya buat kalian yang suka masak telur ½ matang. Tapi ini demi kebaikan kalian loh Logers)', 'flu-burung', '2018-06-07 00:00:00', 'flubur.jpg', 0),
(8, 'tes', '<p>tes</p>\r\n', 'rabies-zoonologia', '2018-07-23 10:31:45', 'rabies1.jpg', 0),
(9, 'Zoonologia', '<h3><s>zonologia </s><strong>adalaaaah</strong></h3>\r\n', 'zoonologia-adalah', '2018-07-23 18:51:27', 'zoonosis1.png', 0),
(11, 'PI', '<p>Pusing Ih</p>\r\n', NULL, '2018-07-23 19:00:38', 'rabies3.jpg', NULL),
(12, 'syahifa', '<p>tes</p>\r\n', 'syahifa-tes-bla-bla-bla', '2018-07-23 19:15:27', 'instagram1.PNG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(10) NOT NULL,
  `komentar` text,
  `email` varchar(200) DEFAULT NULL,
  `fk_berita` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `komentar`, `email`, `fk_berita`) VALUES
(1, 'tes 123', 'syahifarhmt20@gmail.com', 1),
(4, 'zoonologia itu apa?', 'syahifa@dhipta.com', 2),
(7, 'artikelnya bagus', 'syahifarhmt20@gmail.com', 1),
(8, 'artikelnya bagus', 'syahifarhmt20@gmail.com', 1),
(9, 'artikelnya bagus', 'syahifarhmt20@gmail.com', 1),
(10, 'bagus', 'syahifarhmt20@gmail.com', 1),
(11, 'tes', 'syahifarhmt20@gmail.com', 2),
(12, 'tes', 'syahifarhmt20@gmail.com', 2),
(13, 'mantul', 'syahifa@dhipta.com', 1),
(14, 'mantul', 'syahifa@dhipta.com', 1),
(15, 'bu suci', 'syahifarhmt20@gmail.com', 1),
(16, 'bu suci', 'syahifarhmt20@gmail.com', 1),
(17, 'apaansihlu', 'syahifa@dhipta.com', 12),
(18, 'apaansihlu', 'syahifa@dhipta.com', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `akses` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nama_pengguna`, `pass`, `akses`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'guest', 'guest', 'guest', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
