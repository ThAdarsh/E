-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 30, 2021 at 07:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` varchar(2000) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_desc`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy A13', 'The smartphone is packed with 4 GB RAM with 64 GB internal storage. ... Samsung Galaxy A13 5G features a 6.5 inches PLS TFT display that has a 720 x 1600 pixels resolution', 152.00, './assets/products/Samsung-Galaxy-A13-1.png', '2020-03-28 11:08:57'),
(2, 'Redmi', 'Redmi Note 8', 'Xiaomi Redmi Note 8 is powered by the Qualcomm SDM665 Snapdragon 665 Octa-core (4×2.0 GHz Kryo 260 Gold + 4×1.8 GHz Kryo 260 Silver) processor. The smartphone comes with a 6.3 inches IPS LCD and 1080 x 2340 pixels resolution. ... The Xiaomi Redmi Note 8 comes in different colors like Crystal Green and Crystal Blue', 122.00, './assets/products/r8.png', '2020-03-28 11:08:57'),
(3, 'OnePlus', 'One Plus 8', 'The OnePlus 8 has a 6.55-inch AMOLED panel with sloping sides, a wide colour gamut, and a hole-punch cutout in the upper left corner. The 90Hz refresh rate makes usage in general feel fluid and snappy. It also has an in-display fingerprint sensor, which is super quick at authenticatio', 122.00, './assets/products/2-70.png', '2020-03-28 11:08:57'),
(4, 'Redmi', 'Redmi Note 9T', 'It has 4 GB, 4 GB RAM and 64 GB internal storage. Xiaomi Redmi Note 9T smartphone has a IPS LCD display. It measures 162 mm x 77.2 mm x 9.2 mm and weighs 200 grams. The screen has a resolution of 1080 x 2400 Pixels and 399 ppi pixel density.', 122.00, './assets/products/nt.png', '2020-03-28 11:08:57'),
(5, 'Redmi', 'Redmi Note 11', 'Redmi Note 11 4G mobile was launched in November 2021. The phone comes with a 6.50-inch touchscreen display with a resolution of 1080x2400 pixels and an aspect ratio of 20:9. Redmi Note 11 4G is powered by an octa-core MediaTek Helio G88 processor. It comes with 4GB of RAM', 122.00, './assets/products/r11.png', '2020-03-28 11:08:57'),
(6, 'Redmi', 'Xiaomi mi 10 Lite', 'The phone comes with a 6.57-inch touchscreen display. Xiaomi Mi 10 Lite is powered by an octa-core Qualcomm Snapdragon 765G processor. The Xiaomi Mi 10 Lite runs Android and is powered by a 4160mAh battery. The Xiaomi Mi 10 Lite supports Quick Charge 3.0 fast charging.', 122.00, './assets/products/2-94.png', '2020-03-28 11:08:57'),
(7, 'Redmi', 'Poco X3', 'The Poco X3 brings in a fresh design but it is big and heavy. The big 6.67-inch display and the big 6,000mAh battery add to the bulk of the device. Poco offers a 120Hz refresh rate display which isn’t very common in this price segment. It has a hole punch for the selfie camera and a IR blaster like most other Xiaomi/ Poco phones.  Poco is powering the X3 with the Snapdragon 732G SoC and pairing it with either 6GB or 8GB of RAM depending on the model you choose. There are 64GB and 128GB storage options available. The smartphone ships with MIUI 12 running on top of Android 10. The phone has a fair amount of preinstalled apps that generate spammy notifications. The Poco X3 offers good performance along with good battery life.  The X3 gets a quad-camera setup with a 64-megapixel primary camera, a 13-megapixel ultra-wide and 2-megapixel depth and macro cameras. Daylight photos were decent but the X3 crushes blacks aggressively. Closeups were good but low light camera performance was strictly average.', 122.00, './assets/products/poco.png', '2020-03-28 11:08:57'),
(8, 'Redmi', 'Poco M3', 'The POCO M3 is a stylish personal device that offers immersive visuals, seamless performance, and long battery life for uninterrupted functioning. This smartphone features a Premium Design to let you flaunt style, 6 GB LPDDR4X RAM for smooth performance, and an FHD+ Display for clear and detailed visuals', 122.00, './assets/products/xm3.png', '2020-03-28 11:08:57'),
(9, 'Samsung', 'Samsung Galaxy M21', 'The Samsung Galaxy is yet another smartphone to join the Galaxy M series. It brings some of the key features that the Galaxy M series is known for. The smartphone packs in a 6.4-inch AMOLED display that isn’t very common at this price point. It has a vivid output and very good viewing angles. Samsung has made the Galaxy M21 out of plastic to keep the price of the smartphone in the affordable segment. The highlight of the Galaxy M21 is the massive 6,000mAh battery that helps it deliver great battery life. One downside is that the charging time is longer which could get annoying.', 152.00, './assets/products/m21.png', '2020-03-28 11:08:57'),
(10, 'Samsung', 'Samsung Galaxy  M31', 'The Samsung Galaxy M31 sports a big 6.4-inch display and has a waterdrop notch at the top. It has thin bezels around the AMOLED display which helps it stand out among the competition. The Galaxy M31 is comfortable to hold in the hand but is a little heavy at 191g. The weight of the smartphone is mainly because of the big 6,000mAh battery that it packs.  Samsung has equipped the Galaxy M31 with an Exynos 9611 SoC and gets 6GB of RAM. It has two storage variants to choose from, 64GB and 128GB. The Galaxy M31 is a dual SIM device with support for 4G as well as VoLTE. It runs Samsung OneUI 2.0 on top of Android 10. We found the Galaxy M31 to have a fair amount of bloatware onboard.  The Galaxy M31 has a quad-camera setup at the back with the primary being a 64-megapixel shooter. It also houses an 8-megapixel ultra-wide-angle camera, a 5-megapixel macro camera and a 5-megapixel depth sensor. Daylight camera performance is good but low-light camera performance was disappointing.     read more', 152.00, './assets/products/m31.png', '2020-03-28 11:08:57'),
(11, 'Apple', 'Apple iPhone 12', 'The iPhone 12 features a 6.1-inch (15 cm) display with Super Retina XDR OLED technology at a resolution of 2532×1170 pixels and a pixel density of about 460 ppi. The iPhone 12 Mini features a 5.4-inch (14 cm) display with the same technology at a resolution of 2340×1080 pixels and a pixel density of about 476 ppi.', 152.00, './assets/products/i12.png', '2020-03-28 11:08:57'),
(12, 'Apple', 'Apple iPhone 11', 'The iPhone 11 has a 6.1 in (15.5 cm) IPS LCD, unlike the Pro models which have OLED displays. The resolution is 1792 × 828 pixels (1.5 megapixels at 326 ppi) with a maximum brightness of 625 nits and a 1400:1 contrast ratio. It supports Dolby Vision, HDR10, True-Tone, and a wide color gamut.', 152.00, './assets/products/i11-1.png', '2020-03-28 11:08:57'),
(13, 'Apple', 'Apple iPhone 13', 'This phone has a bright, vibrant 6.1-inch OLED screen, but with only a 60Hz refresh rate and an annoying notch. ... The cameras are versatile and deliver great quality for stills as well as video, plus you get the same Cinematic Mode and Photographic Styles features as on the more expensive iPhone 13 Pro.', 152.00, './assets/products/i13.png', '2020-03-28 11:08:57'),
(14, 'OnePlus', 'One Plus 9', 'The OnePlus 9 has a similar 6.55-inch AMOLED display as the 8T. Software is taken care of by OxygenOS 11, which is based on Android 11. ... The display is excellent – colours are vibrant, brightness is very good, and viewing angles are more than satisfactory.', 123.00, './assets/products/1-70.png', '2021-12-30 14:29:09'),
(15, 'OnePlus', 'One Plus 7', 'OnePlus 7 is powered by the Qualcomm SDM855 Snapdragon 855 Octa-core (1×2.84 GHz Kryo 485 + 3×2.42 GHz Kryo 485 + 4×1.78 GHz Kryo 485) processor. The smartphone comes with a 6.41 inches Optic AMOLED capacitive touchscreen and 1080 x 2340 pixels resolution.', 123.00, './assets/products/1-71.png', '2021-12-30 14:33:47'),
(16, 'OnePlus', 'One Plus Nord', 'The OnePlus Nord is one of the first few phones to launch in India with the Qualcomm Snapdragon 765G SoC. ... In India, OnePlus is offering three variants of the Nord. There\'s an Amazon-exclusive variant with 6GB of RAM and 64GB of storage for Rs. 24,999', 123.00, './assets/products/1-72.png', '2021-12-30 14:43:06'),
(17, 'Samsung', 'Samsung A33s', 'The Galaxy A33s has a sharp 6.4-inch full-HD+ (1080x2400 pixels) Super AMOLED display. ... There\'s an in-display fingerprint sensor, which isn\'t very quick but works well as long as you give it a firm press. Samsung has used the MediaTek Helio P65 octa-core SoC', 120.00, './assets/products/sss.png', '2021-12-30 15:10:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
