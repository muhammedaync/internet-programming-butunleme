-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2023, 21:12:13
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `radyo`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminkullanici`
--

CREATE TABLE `adminkullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_mail` varchar(255) NOT NULL,
  `kullanici_password` varchar(255) NOT NULL,
  `kullanici_adsoyad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `adminkullanici`
--

INSERT INTO `adminkullanici` (`kullanici_id`, `kullanici_mail`, `kullanici_password`, `kullanici_adsoyad`) VALUES
(1, 'muhammed@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Muhammed Aynacı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name_a` varchar(50) NOT NULL,
  `email_a` varchar(50) NOT NULL,
  `phone_a` int(11) NOT NULL,
  `message_a` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name_a`, `email_a`, `phone_a`, `message_a`) VALUES
(1, 'muhammed', 'sadas', 12312, 'asdasdasdas');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `email`, `parola`, `kayit_tarihi`) VALUES
(12, 'muratsari', 'murat.sari@dpu.edu.tr', '$2y$10$d4kVYnipXxMkwVvOLgW0oOFihUo4LRfif265Mwjn51bK3n34IsOMq', '2022-12-30 16:03:05'),
(13, 'mami7711', 'abc@gmail.com', '$2y$10$/OivteAtjzNMtVlLCcTC7.nLb3q4H3h4pW.g0oga801b6ES8f6.WC', '2022-12-31 15:59:24'),
(17, 'oguzemre', 'abc@gmail.com', '$2y$10$P6yoxzPBcj.41MheTLRn.eixOdQia0eQoXoSz6FoQ4AEhpVj8T25a', '2023-01-14 02:02:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `search`
--

INSERT INTO `search` (`id`, `Name`, `Description`) VALUES
(1, 'first name', 'Description of first name'),
(2, 'second name', 'Description of second name'),
(3, 'third name', 'Description of third name');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminkullanici`
--
ALTER TABLE `adminkullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminkullanici`
--
ALTER TABLE `adminkullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
