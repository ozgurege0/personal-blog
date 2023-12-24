-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Ara 2023, 09:49:12
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abonelik`
--

CREATE TABLE `abonelik` (
  `abonelik_id` int(11) NOT NULL,
  `abonelik_mail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `abonelik`
--

INSERT INTO `abonelik` (`abonelik_id`, `abonelik_mail`) VALUES
(16, 'assd@a.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL DEFAULT 0,
  `about_ad` varchar(500) NOT NULL,
  `about_unvan` varchar(800) NOT NULL,
  `about_text` varchar(5000) NOT NULL,
  `about_img` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`about_id`, `about_ad`, `about_unvan`, `about_text`, `about_img`) VALUES
(0, 'Özgür Ege Nazlıoğlu', 'Web Geliştiricisi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos labore vitae ipsam dolorum repellat atque aliquid nobis sapiente ratione nam incidunt voluptatem commodi eligendi veniam inventore, temporibus suscipit! Nulla. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ullam amet ut accusantium atque, at sit velit ipsa deleniti. Veritatis consequatur magni id labore, ipsum quis ipsam nemo placeat enim!', 'assets/img/2213820997about-us.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_icon` varchar(500) NOT NULL,
  `account_link` varchar(800) NOT NULL,
  `account_platform` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `account`
--

INSERT INTO `account` (`account_id`, `account_icon`, `account_link`, `account_platform`) VALUES
(5, 'fab fa-instagram', 'https://instagram.com/ozgurege0/', 'Instagram'),
(6, 'fab fa-telegram', 'https://t.me/erosdeveloper', 'Telegram');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayarlar_id` int(11) NOT NULL DEFAULT 0,
  `ayarlar_logo` varchar(850) NOT NULL,
  `ayarlar_favicon` varchar(850) NOT NULL,
  `ayarlar_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayarlar_id`, `ayarlar_logo`, `ayarlar_favicon`, `ayarlar_url`) VALUES
(0, 'assets/img/2047323314logo-dark.png', 'img/uploads/2847429116favicon.png', 'http://localhost/blog/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(900) NOT NULL,
  `blog_description` varchar(2500) NOT NULL,
  `blog_img` varchar(800) NOT NULL,
  `blog_icerik` longtext NOT NULL,
  `blog_status` int(5) NOT NULL DEFAULT 1,
  `blog_seodescription` varchar(2000) NOT NULL,
  `blog_seokeywords` varchar(2000) NOT NULL,
  `blog_seoauthor` varchar(500) NOT NULL,
  `blog_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `kategoriler_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_description`, `blog_img`, `blog_icerik`, `blog_status`, `blog_seodescription`, `blog_seokeywords`, `blog_seoauthor`, `blog_tarih`, `kategoriler_id`) VALUES
(30, 'İşlerinize Tamamen Odaklanmanın 5 Yolu', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eaque aperiam, nisi accusamus veritatis itaque doloremque. Incidunt repellendus nesciunt quod obcaecati quos repudiandae nisi provident quia accusamus, molestiae quaerat blanditiis?&lt;br&gt;&lt;/p&gt;', 'assets/img/300722701512.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eaque aperiam, nisi accusamus veritatis itaque doloremque. Incidunt repellendus nesciunt quod obcaecati quos repudiandae nisi provident quia accusamus, molestiae quaerat blanditiis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eaque aperiam, nisi accusamus veritatis itaque doloremque. Incidunt repellendus nesciunt quod obcaecati quos repudiandae nisi provident quia accusamus, molestiae quaerat blanditiis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eaque aperiam, nisi accusamus veritatis itaque doloremque. Incidunt repellendus nesciunt quod obcaecati quos repudiandae nisi provident quia accusamus, molestiae quaerat blanditiis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eaque aperiam, nisi accusamus veritatis itaque doloremque. Incidunt repellendus nesciunt quod obcaecati quos repudiandae nisi provident quia accusamus, molestiae quaerat blanditiis?&lt;br&gt;&lt;/p&gt;', 1, 'asd', 'asd', 'asd', '2023-12-24 07:13:22', 8),
(31, 'Fransa&#039;da Mutlaka Gezilmesi Gereken 8 Yer', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 'assets/img/30522314776.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 1, 'asd', 'asd', 'asd', '2023-12-24 07:16:30', 9),
(32, 'Evinizi Güzel Dizayn Etmek İçin İpuçları', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 'assets/img/304002393214.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 1, 'asd', 'asd', 'asd', '2023-12-24 07:18:19', 10),
(33, 'Yaratıcı Tatil Fikirleri', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 'assets/img/20370268851 (1).jpg', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 1, 'ads', 'asd', 'asd', '2023-12-24 07:20:11', 9),
(34, 'Yemek Sunumu Ve Taktikeri', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 'assets/img/31207255203.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 1, 'asd', 'sad', 'ads', '2023-12-24 07:20:47', 10),
(35, 'İlk İntiba Ve Kurumsallık', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 'assets/img/260063003111.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel cumque laudantium rem, perferendis, veritatis accusamus odio similique est recusandae tempora commodi nihil omnis non velit reprehenderit magni atque illum?&lt;br&gt;&lt;/p&gt;', 1, 'asd', 'asd', 'asd', '2023-12-24 07:21:24', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategoriler_id` int(11) NOT NULL,
  `kategoriler_ad` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategoriler_id`, `kategoriler_ad`) VALUES
(8, 'Business'),
(9, 'Seyahat'),
(10, 'Dizayn');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesajlar_id` int(11) NOT NULL,
  `mesajlar_ad` varchar(500) NOT NULL,
  `mesajlar_mail` varchar(400) NOT NULL,
  `mesajlar_konu` varchar(1200) NOT NULL,
  `mesajlar_mesaj` varchar(10000) NOT NULL,
  `mesajlar_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesajlar_id`, `mesajlar_ad`, `mesajlar_mail`, `mesajlar_konu`, `mesajlar_mesaj`, `mesajlar_tarih`) VALUES
(5, 'Özgür', 'a@a.com', 'asd', 'sad', '2023-12-24 07:43:40');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seoayar`
--

CREATE TABLE `seoayar` (
  `seoayar_id` int(11) NOT NULL,
  `seoayar_title` varchar(800) NOT NULL,
  `seoayar_description` varchar(1200) NOT NULL,
  `seoayar_keywords` varchar(1000) NOT NULL,
  `seoayar_author` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `seoayar`
--

INSERT INTO `seoayar` (`seoayar_id`, `seoayar_title`, `seoayar_description`, `seoayar_keywords`, `seoayar_author`) VALUES
(0, 'Özgür Medya Ücretsiz Blog Sitesi!', 'Merhabalar, bu blog scriptini herkesin kullanabilmesi adına paylaşıyorum. Umarım işinize yarar, sağlıklı günler dilerim.', 'html, css, js, php', 'Özgür Ege Nazlıoğlu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `admin_id` int(11) NOT NULL DEFAULT 0,
  `admin_kullanici` varchar(500) NOT NULL,
  `admin_parola` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`admin_id`, `admin_kullanici`, `admin_parola`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorumlar_id` int(11) NOT NULL,
  `yorumlar_ad` varchar(250) NOT NULL,
  `yorumlar_icerik` varchar(2500) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `yorumlar_status` int(5) NOT NULL DEFAULT 0,
  `yorumlar_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorumlar_id`, `yorumlar_ad`, `yorumlar_icerik`, `blog_id`, `yorumlar_status`, `yorumlar_tarih`) VALUES
(44, 'dfgfgd', 'asd', 35, 1, '2023-12-24 08:10:29');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abonelik`
--
ALTER TABLE `abonelik`
  ADD PRIMARY KEY (`abonelik_id`);

--
-- Tablo için indeksler `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategoriler_id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesajlar_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorumlar_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abonelik`
--
ALTER TABLE `abonelik`
  MODIFY `abonelik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategoriler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesajlar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorumlar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
