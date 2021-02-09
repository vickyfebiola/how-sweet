-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 10:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `how_sweet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `passwd`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `judul`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Dessert Box Milo', 'assets/user/img/content\\content-1612769719.jpg', 'Bahan-bahan: \r\n- 1 bungkus biskuit Marie \r\n- 250 ml susu cokelat cair \r\n- 100 gr whipped cream bubuk \r\n- 200 ml air es \r\n- 2 bungkus milo sasetan \r\n- 1/2 sdm kopi bubuk Susu kental manis secukupnya', '2021-02-08 00:08:26', '2021-02-08 12:47:52'),
(2, 'Puding Lumut', 'assets/user/img/content\\content-1612813173.jpg', 'Bahan-bahan:\r\n- 400 gr air\r\n- 85 gr santan kental\r\n- 70 gr endapan pandan\r\n- 7 gr agar plain\r\n- 1 butir telur, kocok lepas\r\n- 75 gr gula pasir\r\n- 1/4 sdt garam\r\n\r\nCara membuat:\r\n- Campur air, santan, pandan, telur aduk rata, saring jika perlu\r\n- Masukkan gula pasir, garam, aduk rata\r\n- Masak pada api kecil dan ditutup, aduk sesekali\r\n- Tuang wadah puding bentuk telur puyuh\r\n\r\nBahan banana chiffon cake:\r\n- 4 butir kuning telur\r\n- 25 gr brown sugar\r\n- Sejumput garam\r\n- 200 gr pisang, lumatkan\r\n- 45 gr minyak\r\n- 90 gr tepung prot rendah\r\n- 4 butir putih telur\r\n- 25 gr gula pasir\r\n- 1 sdm air perasan lemon\r\n\r\nPuding busa coklat:\r\n- 2 butir putih telur\r\n- 400 gr susu cair\r\n- 2 sdm cocoa bubuk\r\n- 50 gr gula pasir\r\n- 1 agar-agar plain\r\n\r\nCara membuat:\r\n- Masak semua bahan kecuali putih telur sampai mendidih\r\n- Selagi menunggu mendidih sambil sesekali diaduk, mixer putih telur sampai firm peak\r\n- Masukkan susu tadi ke dalam putih telur pelan-pelan sambil di-mixer kecepatan tinggi sampai suhu agak menghangat\r\n- Tuang ke atas banana cake yang sudah diolah sebelumnya', '2021-02-08 12:39:34', '2021-02-08 12:39:34'),
(3, 'Puding Roti Tawar', 'assets/user/img/content\\content-1612813371.jpg', 'Bahan-bahan:\r\n- 8 lembar roti tawar, sobek/potong kotak\r\n- 4 butir telur\r\n- 50 gram gula pasir\r\n- 50 gram gula palem\r\n- 2 sdm munjung butter\r\n- 400 ml susu cair full cream\r\n- 50 gram keju cheddar parut\r\n- 1/2 sdt garam\r\n- 1/2 sdt vanila\r\n- 1/4 sdt kayu manis bubuk\r\n\r\nTopping:\r\n- Secukupnya almonds slice, kismis, kayu manis bubuk, gula palem, pisang, chocochip, keju dan lain-lain sesuai selera\r\n\r\nCara membuat:\r\n- Panaskan susu cair dan butter, cukup sampai butter leleh saja, masukkan keju parut, aduk rata, matikan api, sisihkan\r\n- Kocok telur, gula, garam dan vanilla sampai gula larut, tuangi susu hangat, beri kayumanis bubuk, aduk rata\r\n- Olesi ramekin dengan margarin, tata roti tawar didasar ramekin, taburi chocochip, kismis dan almond slice, tuangi adonan telur, biarkan sampai cairan terserap roti, tata kembali roti tawar diatas adonan, tuangi adonan telur perlahan, biarkan sampai terserap, taburi topping sesuai selera\r\n- Masukkan oven yang sudah dipanaskan terlebih dahulu, panggang dengan suhu 160 derajat Celcius api atas bawah sampai matang (kurang lebih 40-45 menit), keluarkan dari oven, taburi kayu manis bubuk, bisa disajikan hangat ataupun dingin.', '2021-02-08 12:42:52', '2021-02-08 12:42:52'),
(4, 'Banana Ice Cream Cups', 'assets/user/img/content\\content-1612814102.jpg', 'Bahan-Bahan :\r\n- 6bh Pisang Cavendish Matang (lebih baik sudah dibekukan)\r\n- 1 sdm ekstrak vanilla\r\n- ¼ cup chocolate chip (sebagai pencapur & topping)\r\n\r\nCara Membuat :\r\n- Blender pisang bekunya sampai lembut, halus dan tanpa potongan pisang yang besar.\r\n- Pisang yang sudah dihancurkan dapat dicampurkan dengan chocolate chips sampai tercampur merata.\r\n- Masukkan adonan pisang & chocolate chips kedalam cetakan muffin, dan bekukan sekitar 1-2 jam sebelum dinikmati.\r\n- Jika ingin dinikmati, de-froze kembali kurang lebih 3 menit sebelum akan dinikmati.', '2021-02-08 12:44:47', '2021-02-08 12:55:02'),
(5, 'No Bake Oat Cookies', 'assets/user/img/content\\content-1612813630.jpg', 'Bahan-Bahan :\r\n\r\n- 3 cup Oat Instan\r\n-½ cup coconut oil\r\n- ½ cup selai kacang\r\n- ½ cup coconut sugar\r\n- ¼ cup bubuk kakao\r\n- ¼ cup susu almond manis\r\n- 1 sdt ekstrak vanilla\r\n- ¼ sdt Garam\r\nCara Membuat :\r\n\r\n- Campur coconut oil, selai kacang, coconut sugar, bubuk kakao, susu almond, garam, vanilla sampai tercampur merata.\r\n- Jika sudah tercampur merata, tambahkan oats sambil dicampur kembali. Campur merata agar tidak ad agumpalan dari bubuk kakao dan pastikan campurannya halus.\r\n- Jika semua bahan-bahan sudah tercampur, cetak adonan sesuai keinginan diatas baki yang dialasi kertas minyak.\r\n- Masukkan cetakan adonan kedalam kulkas agar mengeras.\r\n- Saat ini oat cookies sudah bisa dinikmati. Jika ingin menyimpannya untuk kemudian hari, dapat ditempatkan di container dan ditutup rapat.', '2021-02-08 12:47:10', '2021-02-08 12:49:32'),
(6, 'Tropical Chia Popsicle', 'assets/user/img/content\\content-1612814214.jpg', 'Bahan-Bahan :\r\n- 1 cup coconut milk\r\n- 2 sdm chia seeds\r\n- 2 sdm madu/sirup maple\r\n- 1 sdt ekstrak vanilla\r\n- 1 bh Mangga Besar\r\n- ¼ cup perasan jeruk\r\n- 1bh Buah Naga Merah Besar\r\n- ¼ cup jus apel/jus cranberry\r\n\r\nCara Membuat Chia Pudding :\r\n- Campurkan chia seed, coconut milk, madu/sirup maple, dan ekstrak vanilla didalam 1 mangkuk. Diamkan 20-30 menit sampai teksturnya berubah menjadi Chia Pudding.\r\n- Sisihkan\r\n\r\nCara Membuat :\r\n- Blender buah naga bersamaan dengan jus cranberry atau jus apel, dan sisihkan.\r\n- Selanjutnya blender buah mangga dengan jus jeruk, dan sisihkan.\r\n- Siapkan cetakan popsicle, masukkan puree mangga diikuti dengan chia pudding dan diakhiri dengan puree buah naga.\r\n- Masukkan kedalam freezer sampai mengeras, dan siap dinikmati.', '2021-02-08 12:56:54', '2021-02-08 12:56:54'),
(7, 'Pudding Chocolate', 'assets/user/img/content\\content-1612817556.jpg', 'Bahan-bahan:\r\n- Premix Puding Chocolate\r\n- Air\r\n- Whipcream\r\n- Chocochips\r\n\r\nCara membuat:\r\n- Campurkan 1 kg Premix Puding Chocolate dengan 3000 cc air (15 gelas)\r\n- Panaskan dengan api sedang hingga mendidih. Biarkan mendidih selama beberapa detik sebelum diangkat\r\n- Angkat dan tuang dalam gelas/cetakan\r\n- Tambahkan whipcream dan chocochips sesuai selera.', '2021-02-08 13:50:41', '2021-02-08 13:52:36'),
(8, 'Salad Buah', 'assets/user/img/content\\content-1612817634.jpg', 'Bahan-bahan:\r\n- 2 buah apel merah, kupas\r\n- 1 buah mangga, kupas\r\n- 1 buah pir, kupas\r\n- 1/4 buah melon, kupas\r\n- 1/4 buah semangka, kupas\r\n- 1/4 kg anggur, belah buah biji\r\n- 2 buah kiwi, potong sesuai selera\r\n- 1 bungkus nutrijel plain, masak seperti biasa, beri perisa/pewarna ungu dan biru\r\n\r\nBahan saus:\r\n- 100 gr mayonaise\r\n- 2 cup yogurt\r\n- 100 ml susu kental manis putih\r\n- 1 sdm madu\r\n\r\nTopping: Keju parut secukupnya\r\n\r\nCara membuat:\r\n- Potong dadu buah, kecuali anggur dan kiwi. Jelly juga di potong dadu\r\n- Dalam mangkuk kecil, campurkan mayonaise, yogurt, susu kental manis, madu, aduk rata, cek rasa, jika kurang manis tambahkan susu kental manis lagi, tekstur saus creamy\r\n- Dalam mangkuk besar, masukkan buah-buahan, jelly dan saus\r\n- Aduk rata pelan-pelan\r\n- Taburi dengan keju parut, masukkan dalam wadah saji, tutup rapat, Simpan di kulkas, sajikan dingin lebih segar.', '2021-02-08 13:51:24', '2021-02-08 13:53:54'),
(9, 'Eclair', 'assets/user/img/content\\content-1612817892.jpeg', 'Bahan:\r\n- 250 ml air\r\n- 130 gram mentega tawar\r\n- 1 sendok makan gula pasir\r\n- 150 gram tepung terigu serbaguna\r\n- 4 butir telur ayam\r\n\r\nGanache:\r\n- 250 ml krim kental\r\n- 250 gram cokelat masak pekat, cincang halus\r\n- Whipped cream siap pakai\r\n- Es krim vanilla\r\n\r\nCara membuat:\r\n1. Siapkan loyang datar yang sudah dioles margarin. \r\n2. Panaskan oven hingga bersuhu 150 derajat celcius.\r\n3. Campur air bersama 80 gram mentega dan gula lalu aduk. Masak hingga mendidih dan gula larut.\r\n4. Masukkan tepung terigu sedikit demi sedikit sambil diaduk-aduk agar tidak menggumpal. Angkat dan biarkan hingga agak dingin.\r\n5. Masukkan telur satu per satu sambil diaduk rata hingga adonan kalis. Masukkan ke dalam kantong semprot yang ujungnya sudah digunting dan semprotkan di atas loyang.\r\n6. Panggang dalam oven panas selama 30 menit hingga matang. Angkat dan biarkan hingga sus dingin.\r\n7. Ganache: jerang krim, tambahkan cokelat dan sisa mentega hingga berwarna cokelat. Aduk hingga rata.\r\n8. Potong sus melintang. Isi dengan es krim vanilla.\r\n9. Sajikan segera dengan siraman ganache dan whipped cream.', '2021-02-08 13:58:12', '2021-02-08 13:58:12'),
(10, 'Poires Helena', 'assets/user/img/content\\content-1612817993.jpg', 'Bahan:\r\n- 60 ml sirop cokelat\r\n- 4-8 scoop es krim vanila\r\n- 1 buah pir kalengan, tiriskan dan potong membujur 4 bagian\r\n- 75 ml selai cokelat campur dengan 1 sendok makan air\r\n\r\nCara membuat:\r\n1. Siapkan gelas atau mangkuk saji. Tuang 2 sendok makan sirop cokelat ke dalam masing gelas.\r\n2. Letakkan 1 atau 2 scoop es krim  di atas sirop.\r\n3. Letakkan potongan buah pir di atas es krim.\r\n4. Tuang selai cokelat dia atasnya. Poires helene siap disajikan.', '2021-02-08 13:59:53', '2021-02-08 13:59:53'),
(11, 'Creme Brulee', 'assets/user/img/content\\content-1612818099.jpg', 'Bahan:\r\n- 200 ml susu cair\r\n- 400 ml krim kental\r\n- 60 gram gula pasir\r\n- 8 kuning telur ayam\r\n- Air panas\r\n\r\nTaburan:\r\n- 2 sendok makan gula pasir\r\n\r\nCara membuat:\r\n1. Masukkan susu, krim kental, dan setengah bagian gula ke dalam panci. Masak sambil diaduk menggunakan pengocok telur hingga mendidih. Matikan api. Sisihkan.\r\n2. Kocok sisa gula dan telur hingga tercampur rata. Tuang susu hangat ke dalamnya. Aduk hingga rata.\r\n3. Tuang ke dalam loyang indivudual. Susun loyang pada loyang lain yang lebih besar dan lebih tinggi. Tuang air panas ke dalam loyang tersebut hingga mencapai setengah tinggi loyang individual. Panggang dalam oven panas bersuhu 200 derajat celcius selama 45 menit hingga matang. Angkat dan diamkan hingga dingin. Simpan di lemari pendingin semalaman hingga padat.\r\n4. Saat akan disajikan, taburi permukaan Creme Brulee dengan gula pasir. Panggang dalam oven panas dengan api atas hingga gula berbaur dan berwarna kecoklatan.', '2021-02-08 14:01:39', '2021-02-08 14:01:39'),
(12, 'Custard Mangga Roti Tawar', 'assets/user/img/content\\content-1612818315.jpg', 'Bahan\r\n- 1 bungkus Kobe Tepung Pisang Goreng Crispy (75gr)\r\n- 1 buah mangga harum manis (200 – 300 gram)\r\n- 1 sendok makan maizena\r\n- 140 ml susu cair\r\n- 60 ml santan kental\r\n- 2 sendok makan gula pasir\r\n- 25 gram unsalted butter\r\n- roti tawar secukupnya\r\n\r\nCara membuat Custard Mangga Roti Tawar\r\n1. Siapkan bahan, haluskan mangga menjadi pure.\r\n2. Campurkan semua bahan custard. Selain pure dan butter, dicampur terakhir.\r\n3. Masak dengan api sedang hingga menggumpal dan matang. Matikan api.\r\n4. Tambahkan pure mangga dan butter, aduk-aduk sampai tercampur rata.\r\n5. Potong roti tawar, kukus kurang lebih selama 5 menit.\r\n6. Angkat dan sajikan roti tawar bersama custard mangga.', '2021-02-08 14:05:15', '2021-02-08 14:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_22_081331_create_admins_table', 1),
(5, '2021_02_06_134725_create_contents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
