-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 18 Haz 2021, 03:53:47
-- Sunucu sürümü: 10.3.22-MariaDB-log
-- PHP Sürümü: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `285515`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminler`
--

CREATE TABLE `adminler` (
  `AdminID` int(11) NOT NULL,
  `AdminMail` varchar(50) NOT NULL,
  `AdminSifre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `adminler`
--

INSERT INTO `adminler` (`AdminID`, `AdminMail`, `AdminSifre`) VALUES
(1, 'admin@mail.com', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `MusteriID` int(11) NOT NULL,
  `MusteriAdi` varchar(85) NOT NULL,
  `MusteriMail` varchar(50) NOT NULL,
  `MusteriAdres` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`MusteriID`, `MusteriAdi`, `MusteriMail`, `MusteriAdres`) VALUES
(1, 'Beyzanur Gürsoy', 'nazligursoy@mail.com', 'Trabzon'),
(2, 'Ahmet Mehmet', 'ahmetmehmet@mail.com', 'Ankara'),
(3, 'Muhammed Uzun', 'mustafauzun@mail.com', 'Antalya');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Urunler`
--

CREATE TABLE `Urunler` (
  `UrunID` int(11) NOT NULL,
  `UrunAdi` varchar(85) NOT NULL,
  `Fiyat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `Urunler`
--

INSERT INTO `Urunler` (`UrunID`, `UrunAdi`, `Fiyat`) VALUES
(1, 'Oturma Grubu', 7500),
(2, 'Çift Kişilik Baza', 3000),
(3, 'Yemek Masası', 2500),
(4, 'Dolap', 2500);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminler`
--
ALTER TABLE `adminler`
  ADD PRIMARY KEY (`AdminID`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`MusteriID`),
  ADD UNIQUE KEY `MusteriMail` (`MusteriMail`);

--
-- Tablo için indeksler `Urunler`
--
ALTER TABLE `Urunler`
  ADD PRIMARY KEY (`UrunID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminler`
--
ALTER TABLE `adminler`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `MusteriID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `Urunler`
--
ALTER TABLE `Urunler`
  MODIFY `UrunID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
