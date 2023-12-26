-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 03:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `content` text NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `content`, `kategori_id`, `user_id`, `gambar`, `is_active`, `views`, `created_at`, `updated_at`) VALUES
(5, 'Steam Autumn Sale 2023', 'steam-autumn-sale-2023', '<p>Steam Autumn Sale 2023 berlangsung selama 8 hari, mulai dari tanggal 21 hingga 28 November 2023. Selama periode tersebut, ribuan game di Steam mendapatkan diskon, mulai dari game AAA hingga game indie. Diskonnya pun bervariasi, berkisar antara 10% hingga 90%.</p><p>Beberapa game populer yang mendapatkan diskon besar selama Steam Autumn Sale 2023 antara lain Starfield dengan diskon 20%, Elden Ring diskon 30%, God of War Ragnarök diskon 20%, The Witcher 3: Wild Hunt diskon 75%, dan Grand Theft Auto V diskon 80%.</p><p>Selain diskon game, Steam Autumn Sale 2023 juga menghadirkan berbagai fitur menarik lainnya. Terdapat Daily Deals, di mana setiap hari Steam menawarkan diskon spesial untuk game tertentu. Ada juga Flash Deals yang merupakan diskon spesial yang berlangsung hanya selama beberapa jam. Weekend Deals menawarkan diskon khusus selama akhir pekan, sementara Curated Collections menyajikan koleksi game yang direkomendasikan oleh Valve.</p><p>Keseluruhan, Steam Autumn Sale 2023 merupakan kesempatan yang baik untuk mendapatkan game berkualitas dengan harga yang lebih terjangkau. Terdapat beberapa tips yang dapat diikuti agar mendapatkan keuntungan maksimal dari penawaran ini. Anda dapat membuat wishlist untuk game yang diminati dan mendapatkan notifikasi saat game tersebut mengalami diskon. Fitur Wishlist Discovery juga membantu menemukan game serupa dengan yang ada di wishlist. Mengikuti akun resmi Steam dan menggunakan aplikasi pihak ketiga juga dapat memudahkan melacak diskon game di Steam. Dengan menerapkan tips-tips tersebut, Anda dapat memperoleh game yang diinginkan dengan harga yang lebih terjangkau.</p>', 1, 1, 'artikel/QnitzYOAB8doecUaUQZFaJluxQ8kf7LA4bvs8lqp.jpg', 1, 5, '2023-12-15 06:25:27', '2023-12-16 03:50:07'),
(6, 'Steam Winter Sale 2023', 'steam-winter-sale-2023', '<p>Steam Winter Sale 2023 telah resmi dimulai pada tanggal 23 Desember 2023 dan akan berlangsung hingga 6 Januari 2024. Selama periode sale ini, para gamer dapat menikmati diskon besar-besaran hingga 75% untuk berbagai judul game populer.</p><p>Beberapa game terkenal yang turut meramaikan Steam Winter Sale 2023 dengan diskon menarik antara lain God of War Ragnarok, yang mengalami diskon sebesar 35%, dengan harga menjadi Rp 1.148.800. Selain itu, game Stray juga menghadirkan penawaran menarik dengan diskon 50%, sehingga harganya menjadi Rp 218.800. Elden Ring mengalami diskon sebesar 20%, dengan harga menjadi Rp 548.000. Red Dead Redemption 2 dan The Witcher 3: Wild Hunt - Complete Edition juga tidak ketinggalan, keduanya mengalami diskon sebesar 50%, dengan harga masing-masing menjadi Rp 274.000 dan Rp 218.800.</p><p>Tidak hanya itu, Steam Winter Sale 2023 juga menawarkan promo-promo menarik lainnya. Pengguna dapat memperoleh cashback sebesar 10% dengan pembelian Steam Gift Card dalam nominal tertentu. Selain itu, pembelian Steam Deck dengan paket tertentu akan mendapatkan game gratis, dan pengguna juga dapat mengumpulkan Steam Sale Card untuk mendapatkan diskon tambahan.</p><p>Keseluruhan, Steam Winter Sale 2023 memberikan peluang yang sangat baik bagi para gamer untuk memperoleh game-game populer dengan harga yang lebih terjangkau.</p>', 1, 1, 'artikel/KxC7VBeaEhKbPAxewipneumsJghPiC1qiSPGc1EZ.jpg', 1, 12, '2023-12-15 06:33:15', '2023-12-20 07:54:03'),
(7, 'GTA VI', 'gta-vi', '<p>Trailer pertama untuk game Grand Theft Auto (GTA) VI akhirnya dirilis pada tanggal 4 Desember 2023, setelah bertahun-tahun spekulasi dan rumor. Trailer tersebut memberikan gambaran pertama tentang game yang sangat dinanti-nantikan ini, dan telah memicu kegembiraan dan kegembiraan di kalangan penggemar.</p><p>&nbsp;</p><p>Trailer tersebut dimulai dengan pemandangan kota Vice City yang ikonik, yang telah diremajakan dengan grafis yang menakjubkan. Kita melihat berbagai lokasi ikonik di kota, termasuk Starfish Island, Vice Point, dan Downtown Vice City.</p><p>&nbsp;</p><p>Kita juga diperkenalkan dengan dua karakter utama dalam game, seorang pria dan seorang wanita. Pria tersebut bernama Ricardo, dan dia tampaknya menjadi seorang penjahat profesional. Wanita tersebut bernama Lucia, dan dia tampaknya menjadi seorang agen pemerintah.</p><p>&nbsp;</p><p>Trailer tersebut juga menunjukkan berbagai kegiatan yang dapat dilakukan pemain dalam game, termasuk balapan, pencurian, dan aksi laga. Kita juga melihat beberapa senjata dan kendaraan baru yang akan tersedia dalam game.</p><p>&nbsp;</p><p>Rilis GTA 6 dijadwalkan pada tahun 2025, dan akan tersedia di PlayStation 5 dan Xbox Series X/S.</p>', 1, 1, 'artikel/mxqVIc2mzkvyMOPnRCsT4aqU2tnBqpyuyWk7H0mf.jpg', 1, 71, '2023-12-15 08:30:43', '2023-12-20 08:28:31'),
(8, 'Monster Hunter WIlds', 'monster-hunter-wilds', '<p>Trailer pertama untuk game Monster Hunter Wilds dirilis pada tanggal 14 Desember 2023, dan memberikan gambaran pertama tentang game yang sangat dinanti-nantikan ini. Trailer tersebut menunjukkan dunia baru yang luas dan beragam, serta monster baru yang menakutkan.</p><p>Trailer dimulai dengan pemandangan hutan yang lebat dan rimbun. Kita melihat berbagai hewan liar berkeliaran di hutan, termasuk rusa, beruang, dan burung. Kita juga melihat sebuah desa kecil yang terletak di tepi hutan.</p><p>&nbsp;</p><p>Tak lama kemudian, kita diperkenalkan dengan monster baru yang disebut \"Wyvern Besar\". Wyvern Besar adalah makhluk yang besar dan kuat, dengan cakar dan sayap yang tajam. Monster ini menyerang desa, dan para pemburu harus bekerja sama untuk mengalahkannya.</p><p>&nbsp;</p><p>Trailer tersebut juga menunjukkan beberapa fitur baru yang akan disertakan dalam Monster Hunter Wilds. Salah satu fitur baru yang paling menarik adalah kemampuan untuk menavigasi dunia dengan menggunakan glider. Glider memungkinkan pemain untuk terbang melintasi dunia dengan cepat dan mudah.</p><p>Fitur baru lainnya yang ditunjukkan dalam trailer adalah kemampuan untuk mengendalikan monster. Pemain akan dapat mengendalikan monster untuk melawan monster lain atau menyelesaikan misi.</p><p>&nbsp;</p><p>Trailer Monster Hunter Wilds telah memicu kegembiraan dan kegembiraan di kalangan penggemar. Game ini dijadwalkan untuk rilis pada tahun 2025, dan akan tersedia di PlayStation 5, Xbox Series X/S, dan PC.</p><p>&nbsp;</p><p>Secara keseluruhan, trailer Monster Hunter Wilds memberikan gambaran yang menjanjikan tentang game yang sangat dinanti-nantikan ini. Game ini terlihat sangat menawan, dan sepertinya akan menawarkan pengalaman bermain game yang seru dan menantang.</p>', 1, 1, 'artikel/pFwjLZxGr04Q8qtoMWgHfSpS9KUggLtpl7joE9QR.jpg', 1, 10, '2023-12-15 08:35:37', '2023-12-20 07:59:58'),
(9, 'Blade Marvel\'s', 'blade-marvels', '<p>Trailer perdana untuk game Marvel\'s Blade dirilis pada tanggal 8 Desember 2023, di acara The Game Awards. Trailer tersebut memberikan gambaran pertama tentang game yang sangat dinanti-nantikan ini, dan telah memicu kegembiraan dan antusiasme di kalangan penggemar. Trailer dimulai dengan pemandangan kota Paris yang indah di malam hari. Kita melihat berbagai orang berkeliaran di jalan, termasuk beberapa vampir. Tak lama kemudian, kita diperkenalkan dengan sosok Eric Brooks, yang juga dikenal sebagai Blade.</p><p>&nbsp;</p><p>Blade adalah seorang setengah vampir, setengah manusia, yang telah bersumpah untuk membasmi semua vampir di dunia. Dia adalah seorang pembunuh yang sangat terampil, dan dia menggunakan berbagai senjata dan kemampuan untuk mengalahkan musuh-musuhnya. Trailer tersebut menunjukkan berbagai aksi seru yang akan dilakukan Blade dalam game. Kita melihatnya melawan vampir dengan pedang, pistol, dan bahkan kekuatan vampirnya sendiri. Kita juga melihatnya menjelajahi kota Paris yang gelap dan berbahaya.</p><p>&nbsp;</p><p>Game akan berlatar di kota Paris, Prancis. Blade akan menjadi karakter utama dalam game. Game akan menawarkan aksi seru dan menantang. Game akan dirilis pada tahun 2025. Trailer Marvel\'s Blade telah memberikan gambaran yang menjanjikan tentang game yang sangat dinanti-nantikan ini. Game ini terlihat sangat keren dan seru, dan sepertinya akan menawarkan pengalaman bermain game yang unik dan menarik.</p>', 1, 1, 'artikel/GpZrRi1hOyBd2OVKz3sfjX977wo1Z6aC7Zqd587o.jpg', 1, 4, '2023-12-15 08:41:38', '2023-12-15 23:55:36'),
(10, 'Review Teamfight Tactics', 'review-teamfight-tactics', '<p>Teamfight Tactics (TFT) adalah game auto battler yang dikembangkan dan diterbitkan oleh Riot Games. Game ini merupakan spin-off dari League of Legends dan didasarkan pada Dota Auto Chess, di mana pemain bersaing secara online melawan tujuh lawan lainnya dengan membangun tim untuk menjadi yang terakhir bertahan.</p><p>TFT telah menerima ulasan positif dari para kritikus, yang memuji gameplay yang adiktif, grafis yang menarik, dan dukungan pengembangan yang berkelanjutan.</p><p>Gameplay yang adiktif: TFT adalah game yang sangat adiktif. Pemain terus-menerus didorong untuk meningkatkan tim mereka dan mengalahkan lawan mereka. Game ini juga memiliki banyak kedalaman dan strategi, sehingga pemain dapat terus belajar dan berkembang.</p><p>Grafis yang menarik: TFT memiliki grafis yang sangat menarik. Game ini menggunakan gaya seni yang unik dan cerah, yang membantu menciptakan pengalaman bermain game yang menyenangkan.</p><p>Dukungan pengembangan yang berkelanjutan: Riot Games terus-menerus memperbarui TFT dengan konten baru, seperti champion, item, dan mode permainan. Ini membantu menjaga game tetap segar dan menarik bagi pemain.</p>', 3, 1, 'artikel/kmBykYog142fbZIRPxHMpxLwCyn2mZ6BzLRyT8Rd.jpg', 1, 7, '2023-12-15 08:44:50', '2023-12-20 00:56:06'),
(11, 'Avatar: Frontiers of Pandora', 'avatar-frontiers-of-pandora', '<p><br>Avatar: Frontiers of Pandora adalah game aksi-petualangan yang dikembangkan oleh Massive Entertainment dan diterbitkan oleh Ubisoft. Game ini adalah sekuel dari film Avatar tahun 2009 dan berlatar di dunia Pandora yang eksotis.</p><p>&nbsp;</p><p>Frontiers of Pandora telah menerima ulasan positif dari para kritikus, yang memuji grafis yang memukau, gameplay yang imersif, dan cerita yang menarik.</p><p>Grafis yang memukau: Frontiers of Pandora memiliki grafis yang benar-benar memukau. Dunia Pandora digambarkan dengan detail yang luar biasa, dan makhluk-makhluk yang menghuninya terlihat hidup dan nyata.</p><p>&nbsp;</p><p>Gameplay yang imersif: Frontiers of Pandora menawarkan gameplay yang imersif yang membuat pemain merasa seperti benar-benar berada di Pandora. Pemain dapat menjelajahi dunia yang luas dan beragam, berinteraksi dengan makhluk-makhluk yang hidup di dalamnya, dan terlibat dalam pertempuran yang seru.</p><p>Cerita yang menarik: Frontiers of Pandora memiliki cerita yang menarik yang akan membuat pemain tetap terlibat. Pemain akan berperan sebagai seorang Na\'vi yang berjuang untuk melindungi Pandora dari ancaman baru.</p>', 3, 1, 'artikel/w4CHgmpyqvdn8I6PKKktZwA5iBvSs0QbbuE6z7QD.jpg', 1, 15, '2023-12-15 09:03:57', '2023-12-20 00:59:32'),
(12, 'Final Fantasy XVI', 'final-fantasy-xvi', '<p><br>Final Fantasy XVI adalah game aksi-fantasi yang dikembangkan oleh Square Enix dan akan dirilis pada tahun 2024. Game ini merupakan seri utama ke-16 dalam seri Final Fantasy, dan berlatar di dunia fantasi yang bernama Valisthea.</p><p>&nbsp;</p><p>Final Fantasy XVI telah menerima ulasan positif dari para kritikus, yang memuji gameplay yang seru, cerita yang menarik, dan grafis yang memukau. Gameplay yang seru: Final Fantasy XVI memiliki gameplay yang seru dan menantang. Game ini menggunakan sistem pertempuran real-time yang memungkinkan pemain untuk mengendalikan karakter mereka secara langsung dalam pertempuran.</p><p>&nbsp;</p><p>Cerita yang menarik: Final Fantasy XVI memiliki cerita yang menarik yang akan membuat pemain tetap terlibat. Pemain akan berperan sebagai Clive Rosfield, seorang prajurit muda yang bersumpah untuk membalas kematian ayahnya.</p><p>&nbsp;</p><p>Grafis yang memukau: Final Fantasy XVI memiliki grafis yang memukau. Dunia Valisthea digambarkan dengan detail yang luar biasa, dan makhluk-makhluk yang menghuninya terlihat hidup dan nyata.</p>', 3, 1, 'artikel/8N8CYWmlzWmbSVcir8SqJ8pH4GBEuCFZNkzSWXD6.jpg', 1, 9, '2023-12-15 09:07:25', '2023-12-20 00:59:35'),
(13, 'Belajar Melukis', 'belajar-melukis', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 2, 1, 'artikel/cnbo4NqY7IInOKZ8f3SQDZkjVOGtUDH83JSK3MB3.jpg', 1, 0, '2023-12-20 18:32:49', '2023-12-20 18:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Berita', 'berita', '2023-12-14 09:18:28', '2023-12-14 09:18:28'),
(2, 'Tutorial', 'tutorial', '2023-12-14 09:18:43', '2023-12-14 09:18:43'),
(3, 'Review', 'review', '2023-12-14 09:19:55', '2023-12-14 09:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_materi` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `link` text NOT NULL,
  `deskripsi` text NOT NULL,
  `is_active` int(11) NOT NULL,
  `gambar_materi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `judul_materi`, `slug`, `link`, `deskripsi`, `is_active`, `gambar_materi`, `created_at`, `updated_at`) VALUES
(2, 'Review Avatar: Frontiers of Pandora', 'review-avatar-frontiers-of-pandora', 'https://www.youtube.com/watch?v=8u73B9txl54', '<p>Cras porta nisl ut malesuada pulvinar. Mauris sodales justo cursus, pretium eros sed, lobortis mauris. Suspendisse leo lacus, interdum a varius vel, imperdiet ac turpis. Pellentesque sit amet faucibus quam. Donec accumsan libero purus, sed consequat est sodales vehicula. Maecenas pharetra ultrices purus et egestas. Proin ullamcorper, nisl sed fringilla tempus, mi erat pretium massa, at aliquam risus libero et est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed bibendum pellentesque mi, in porta lacus sodales sed. Praesent ut nisl convallis tortor ultrices viverra. Phasellus rhoncus ex vel dolor dictum, vitae lacinia tortor vestibulum. Ut mi nisl, sodales eu nibh a, sagittis faucibus metus. Maecenas auctor arcu sem, ac aliquam lorem faucibus a. Aenean non fringilla magna, quis ullamcorper risus. Ut non lacus id augue posuere scelerisque non et libero.</p><p>&nbsp;</p><p>Proin molestie pharetra mollis. Vivamus placerat commodo sapien, eget fringilla ipsum aliquet non. Morbi tortor lectus, varius a ornare aliquet, mattis efficitur nunc. In accumsan porta turpis vitae vehicula. Pellentesque gravida, nisi in tristique cursus, odio neque suscipit elit, posuere sollicitudin risus erat et dolor. Ut ornare lacinia mi a vestibulum. Integer a diam at mi molestie elementum id id massa. Sed sed gravida metus. Proin lacinia lorem nec nisi efficitur, quis dapibus lectus sagittis.</p>', 1, 'materi/0NTGooWGjQTkXYMa966YXTuM1Tx7u7nBqTKDMOaU.jpg', '2023-12-15 20:04:27', '2023-12-15 20:04:27'),
(3, 'Review Baldur\'s Gate 3', 'review-baldurs-gate-3', 'https://www.youtube.com/watch?v=dIynuCeLOoc', '<p>Baldur\'s Gate 3 adalah game role-playing yang ambisius dan mengesankan, dengan dunia yang luas dan penuh kehidupan, karakter yang kompleks, dan sistem pertempuran yang menantang. Game ini berlatar di dunia fantasi Faerun, dan pemain mengambil peran sebagai salah satu dari empat karakter yang terperangkap dalam ilusi Mind Flayers. Pemain harus menjelajahi Forgotten Realms, mengumpulkan tim, dan mengungkap misteri ilusi tersebut. Baldur\'s Gate 3 menawarkan kebebasan yang luar biasa kepada pemain. Pemain dapat memilih ras, kelas, dan kemampuan karakter mereka sendiri, dan mereka dapat mempengaruhi jalannya cerita dengan pilihan mereka. Sistem pertempuran Baldur\'s Gate 3 adalah kombinasi dari aksi dan strategi. Pemain harus menggunakan berbagai kemampuan dan taktik untuk mengalahkan musuh mereka. Baldur\'s Gate 3 adalah game yang wajib dimainkan oleh penggemar game role-playing. Game ini menawarkan pengalaman yang mendalam dan imersif yang akan membuat pemain terpaku selama berjam-jam.</p><p>&nbsp;</p><p>Meskipun demikian, terdapat beberapa catatan negatif yang perlu diperhatikan. Game ini masih dalam tahap Early Access, sehingga masih terdapat beberapa bug dan kekurangan. Selain itu, kompleksitas permainan mungkin bisa menjadi tantangan bagi pemain pemula. Meski begitu, secara keseluruhan, Baldur\'s Gate 3 tetap menjadi game role-playing yang luar biasa dengan pengalaman mendalam dan imersif.</p>', 1, 'materi/fO7oo7ygWmkfy6cqbQvndwk1f8HAHKVJ3mhh1ZSD.jpg', '2023-12-15 20:08:22', '2023-12-15 20:08:22'),
(4, 'Space for the unbound', 'space-for-the-unbound', 'https://www.youtube.com/watch?v=1HKVWNqGkFY', '<p>Space for the unbound merupakan permainan petualangan teka-teki yang sedang ramai. game 2d dengan grafis berbasis pixel art ini berhasil menjadi sorotan para gamers karena memiliki cerita yang cukup menarik bagi pecinta game bergenre story slice of life. Dan menariknya lagi, game space for the unbound berasal dari indonesia yang dikembangkan oleh Mojiken Studio dan Toge Production sebagus apa sih game buatan Indonesia yang satu ini??? Walaupun grafis yang gunakan pada game ini berbasis pixel art alias game burik, game ini berhasil memberikan kesan yang sangat memukau dengan nuansa berdasarkan lingkungan indonesia. Berbagai detil pada game ini memberikan sensasi nostalgia karena inspirasi yang diambil daerah rural indoneisa pada tahun 90an. tak hanya desain yang menarik, game ini juga memberikan cerita yang menarik.&nbsp;</p><p>&nbsp;</p><p>sinopsisnya, game ini menceritakan 2 remaja bernama Atma dan pacarnya Raya yang menghabiskan waktunya menjelajahi kota loka. menggunakan buku merah ajaib, atma dapat masuk kedalam hati orang-orang dan mengetahui perasaan dan hasrat terbesar mereka untuk menghadapi berbagai macam masalah yang akan dihadapinya. Dengan desain yang unik dan cerita tak kalah menariknya game ini menjadi sorotan dan sudah menerima pengakuan internasional dengan meraih beberapa penghargaan. kurang menarik apa lagi coba sobat START. yuk mending lansung aja kali kita START the game.</p>', 1, 'materi/ZvsbRlmY3J9L3E8AM1nKrUaGm3RiX5XzYLTNk3DH.jpg', '2023-12-15 20:10:11', '2023-12-15 20:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_14_131507_create_artikels_table', 1),
(6, '2023_12_14_131516_create_kategoris_table', 1),
(7, '2023_12_14_131525_create_materis_table', 1),
(8, '2023_12_14_131556_create_slides_table', 1),
(9, '2023_12_14_131606_create_visitors_table', 1),
(10, '2023_12_15_145412_add_id_artikel_to_slide', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_slide` varchar(255) DEFAULT NULL,
  `artikel_id` int(11) NOT NULL,
  `link` text DEFAULT NULL,
  `gambar` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `judul_slide`, `artikel_id`, `link`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Jangan Lupa Mingdep Winter Sale', 6, '-', 'slide/4S7rWSQbxcKFqKbGefUAhPtlgSXiE4WHNfsOIkBd.jpg', 1, '2023-12-15 20:45:56', '2023-12-15 20:45:56'),
(4, 'WOW Akhirnya GTA VI Coming Soon!', 7, '-', 'slide/iwkmSN2N57xaru36PBQLZ8xOcuiZG082Gm0xDhPk.jpg', 1, '2023-12-17 06:59:59', '2023-12-17 06:59:59'),
(5, 'Mengejutkan \"MHW\" Monster Hunter Wilds ditampilkan', 8, '-', 'slide/HFd6zogTKE5R6mQPuSH7nVXMqDzDHIwAm4g5g6XU.jpg', 1, '2023-12-17 07:00:27', '2023-12-17 07:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafi Munggaran', 'rafimunggaran25@gmail.com', NULL, '$2y$10$mxzlK.E3i7Pb2p3wz4U36ujOZFtKzo6mi2BTO8Cq6eH6jAh6usCCS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) NOT NULL,
  `hits` int(11) NOT NULL,
  `visit_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `hits`, `visit_date`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 338, '2023-12-17', NULL, NULL),
(2, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(3, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(4, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(5, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(6, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(7, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(8, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(9, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(10, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(11, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(12, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(13, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(14, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(15, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(16, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(17, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(18, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(19, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(20, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(21, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(22, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(23, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(24, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(25, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(26, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(27, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(28, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(29, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(30, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(31, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(32, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(33, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(34, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(35, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(36, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(37, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(38, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(39, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(40, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(41, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(42, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(43, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(44, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(45, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(46, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(47, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(48, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(49, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(50, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(51, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(52, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(53, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(54, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(55, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(56, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(57, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(58, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(59, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(60, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(61, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(62, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(63, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(64, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(65, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(66, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(67, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(68, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(69, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(70, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(71, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(72, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(73, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(74, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(75, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(76, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(77, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(78, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(79, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(80, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(81, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(82, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(83, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(84, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(85, '127.0.0.1', 1, '2023-12-18', NULL, NULL),
(86, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(87, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(88, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(89, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(90, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(91, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(92, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(93, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(94, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(95, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(96, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(97, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(98, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(99, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(100, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(101, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(102, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(103, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(104, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(105, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(106, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(107, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(108, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(109, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(110, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(111, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(112, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(113, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(114, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(115, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(116, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(117, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(118, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(119, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(120, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(121, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(122, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(123, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(124, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(125, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(126, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(127, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(128, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(129, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(130, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(131, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(132, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(133, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(134, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(135, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(136, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(137, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(138, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(139, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(140, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(141, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(142, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(143, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(144, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(145, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(146, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(147, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(148, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(149, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(150, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(151, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(152, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(153, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(154, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(155, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(156, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(157, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(158, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(159, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(160, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(161, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(162, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(163, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(164, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(165, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(166, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(167, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(168, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(169, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(170, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(171, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(172, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(173, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(174, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(175, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(176, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(177, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(178, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(179, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(180, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(181, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(182, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(183, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(184, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(185, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(186, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(187, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(188, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(189, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(190, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(191, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(192, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(193, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(194, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(195, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(196, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(197, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(198, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(199, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(200, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(201, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(202, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(203, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(204, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(205, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(206, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(207, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(208, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(209, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(210, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(211, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(212, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(213, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(214, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(215, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(216, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(217, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(218, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(219, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(220, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(221, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(222, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(223, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(224, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(225, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(226, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(227, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(228, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(229, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(230, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(231, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(232, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(233, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(234, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(235, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(236, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(237, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(238, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(239, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(240, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(241, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(242, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(243, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(244, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(245, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(246, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(247, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(248, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(249, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(250, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(251, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(252, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(253, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(254, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(255, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(256, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(257, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(258, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(259, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(260, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(261, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(262, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(263, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(264, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(265, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(266, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(267, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(268, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(269, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(270, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(271, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(272, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(273, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(274, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(275, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(276, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(277, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(278, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(279, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(280, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(281, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(282, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(283, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(284, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(285, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(286, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(287, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(288, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(289, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(290, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(291, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(292, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(293, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(294, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(295, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(296, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(297, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(298, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(299, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(300, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(301, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(302, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(303, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(304, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(305, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(306, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(307, '127.0.0.1', 1, '2023-12-20', NULL, NULL),
(308, '127.0.0.1', 1, '2023-12-21', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
