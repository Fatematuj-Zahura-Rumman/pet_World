-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 03:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdpetworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `abbas007`
--

CREATE TABLE `abbas007` (
  `id` varchar(255) NOT NULL,
  `total` int(50) NOT NULL,
  `earned` int(50) NOT NULL,
  `delivered_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customermessage`
--

CREATE TABLE `customermessage` (
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customermessage`
--

INSERT INTO `customermessage` (`email`, `phone`, `subject`, `message`) VALUES
('rumman22@gmail.com', '+8801617606033', 'Great Service', 'The delivery was on time...thank you!');

-- --------------------------------------------------------

--
-- Table structure for table `delivered_by`
--

CREATE TABLE `delivered_by` (
  `name` varchar(255) NOT NULL,
  `d_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivered_by`
--

INSERT INTO `delivered_by` (`name`, `d_id`) VALUES
('rofiq47', '895d770973ed8617a9a642b6ab3c03a7');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `d_area` varchar(255) NOT NULL,
  `d_area2` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryman`
--

INSERT INTO `deliveryman` (`name`, `username`, `email`, `gender`, `mobile`, `address`, `d_area`, `d_area2`, `password`) VALUES
('Manik Shaheb', 'manik_shaheb', 'manik.shaheb@gmail.com', 'Male', '01523232323', 'House-11, North Madartek, Bashabo, Dhaka-1218', 'Motijheel', 'Badda', 'b47bc9c3971a24ddbbfd211d7b692227'),
('Rofiq Mia', 'rofiq47', 'rofiq.ali@gmail.com', 'Male', '01785412036', 'House: 30, Purana Paltan, Dhaka - 1217', 'Mirpur', 'Lalmatia', 'b47bc9c3971a24ddbbfd211d7b692227'),
('Abbas Ali', 'Abbas007', 'abbas.ali@yahoo.com', 'Male', '01854623567', 'House: 40, Shohid Lane, Mirpur-10, Dhaka-1217', 'Uttara', 'Tongi', 'b47bc9c3971a24ddbbfd211d7b692227');

-- --------------------------------------------------------

--
-- Table structure for table `iftiazahmed`
--

CREATE TABLE `iftiazahmed` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `purchased_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iftiazahmed`
--

INSERT INTO `iftiazahmed` (`id`, `name`, `quantity`, `price`, `image`, `purchased_time`) VALUES
(16, '\nSaniCat Duo White & Silica Gel Mixed Cat Litter 15Litter', '1', '1350', 'product/litters/Combo-2-1.png', '07:15:am  |  10-04-2020'),
(13, 'Brit Care Adult Large Breed Dog Food Lamb & Rice 12Kg', '1', '4500', 'product/foods/Large-Breed-Lamb-Rice.png', '07:15:am  |  10-04-2020');

-- --------------------------------------------------------

--
-- Table structure for table `manik_shaheb`
--

CREATE TABLE `manik_shaheb` (
  `id` varchar(255) NOT NULL,
  `total` int(50) NOT NULL,
  `earned` int(50) NOT NULL,
  `delivered_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sl` int(11) NOT NULL,
  `d_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `p_date` varchar(255) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sl`, `d_id`, `email`, `image`, `name`, `quantity`, `price`, `p_date`, `total`) VALUES
(1, '8744e2b9432119fae460c91320a5349c', 'iftiaz.ahmed@yahoo.com', 'product/litters/Combo-2-1.png', '\nSaniCat Duo White & Silica Gel Mixed Cat Litter 15Litter', '1', '1350', '07:15:am  |  10-04-2020', '5950'),
(2, '8744e2b9432119fae460c91320a5349c', 'iftiaz.ahmed@yahoo.com', 'product/foods/Large-Breed-Lamb-Rice.png', 'Brit Care Adult Large Breed Dog Food Lamb & Rice 12Kg', '1', '4500', '07:15:am  |  10-04-2020', '5950'),
(3, '895d770973ed8617a9a642b6ab3c03a7', 'rumman22@gmail.com', 'product/foods/Mynah.png', 'Smart Heart Mynah Bird Food 1Kg', '1', '250', '07:16:am  |  10-04-2020', '1700'),
(4, '895d770973ed8617a9a642b6ab3c03a7', 'rumman22@gmail.com', 'product/litters/Combo-2-1.png', '\nSaniCat Duo White & Silica Gel Mixed Cat Litter 15Litter', '1', '1350', '07:16:am  |  10-04-2020', '1700'),
(5, 'd1892d28e9fc57c85844fcf7fb4eb605', 'sajid121@gmail.com', 'product/litters/premium_cat_bentonite_apple_5L.png', 'Premium Cat Bentonite Litter Apple 5L', '1', '300', '07:17:am  |  10-04-2020', '1300'),
(6, 'd1892d28e9fc57c85844fcf7fb4eb605', 'sajid121@gmail.com', 'product/litters/premium_cat_bentonite_lavender_5L.png', 'Premium Cat Bentonite Litter Lavender 5L', '1', '300', '07:17:am  |  10-04-2020', '1300'),
(7, 'd1892d28e9fc57c85844fcf7fb4eb605', 'sajid121@gmail.com', 'product/litters/premium_cat_bentonite_lemon_10L.png', 'Premium Cat Bentonite Litter Lemon 10L', '1', '600', '07:17:am  |  10-04-2020', '1300');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `d_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`d_id`, `status`) VALUES
('8744e2b9432119fae460c91320a5349c', 0),
('8744e2b9432119fae460c91320a5349c', 0),
('895d770973ed8617a9a642b6ab3c03a7', 1),
('895d770973ed8617a9a642b6ab3c03a7', 1),
('d1892d28e9fc57c85844fcf7fb4eb605', 0),
('d1892d28e9fc57c85844fcf7fb4eb605', 0),
('d1892d28e9fc57c85844fcf7fb4eb605', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `o_price` double(10,2) NOT NULL,
  `n_price` double(10,2) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description1` varchar(500) NOT NULL,
  `description2` varchar(500) NOT NULL,
  `description3` varchar(500) NOT NULL,
  `pet` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `o_price`, `n_price`, `brand`, `description1`, `description2`, `description3`, `pet`, `category`, `stock`) VALUES
(1, 'product/litters/premium_cat_bentonite_apple_5L.png', 'Premium Cat Bentonite Litter Apple 5L', 400.00, 300.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat', 'Litter', 16),
(2, 'product/litters/premium_cat_bentonite_coffee_10L.png', 'Premium Cat Bentonite Litter Coffee 10L', 800.00, 600.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat', 'Litter', 20),
(3, 'product/litters/premium_cat_bentonite_lavender_10L.png', 'Premium Cat Bentonite Litter Lavender 10L', 0.00, 600.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat', 'Litter', 15),
(4, 'product/litters/premium_cat_bentonite_rose_5L.png', 'Premium Cat Bentonite Litter Rose 5L', 400.00, 300.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat', 'Litter', 19),
(5, 'product/litters/premium_cat_bentonite_apple_10L.png', 'Premium Cat Bentonite Litter Apple 10L', 800.00, 600.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat', 'Litter', 19),
(6, 'product/litters/premium_cat_bentonite_lavender_5L.png', 'Premium Cat Bentonite Litter Lavender 5L', 400.00, 300.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat', 'Litter', 19),
(7, 'product/litters/premium_cat_bentonite_rose_10L.png', 'Premium Cat Bentonite Litter Rose 10L', 800.00, 600.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat ', 'Litter', 19),
(8, 'product/litters/premium_cat_bentonite_coffee_5L.png', 'Premium Cat Bentonite Litter Coffee 5L', 400.00, 300.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat', 'Litter', 18),
(9, 'product/litters/premium_cat_bentonite_lemon_5L.png', 'Premium Cat Bentonite Litter Lemon 5L', 600.00, 300.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat', 'Litter', 17),
(10, 'product/litters/premium_cat_bentonite_lemon_10L.png', 'Premium Cat Bentonite Litter Lemon 10L', 800.00, 600.00, 'Premium', 'Faster and higher absorption, more economic and lasts longer. Quick and firm clumping - won\'t break if your cat steps on it and easy to scoop away', 'Clumps do not stick to the cat litter tray bottom - prevent bacteria spreading', 'Really strong fragrance - the scent comes even from the closed bag. Special and unique formula for sealing bad urine smell - keeps your cat toilet fresh every day.', 'Cat', 'Litter', 18),
(13, 'product/foods/Large-Breed-Lamb-Rice.png', 'Brit Care Adult Large Breed Dog Food Lamb & Rice 12Kg', 6000.00, 4500.00, 'Brit', 'Composition: lamb meat meal (38%), rice (38%), chicken fat (preserved with tocopherols), dried apples, salmon oil (2%), natural flavors, brewer’s yeast, hydrolyzed crustacean shells (a source of glucosamine, 260 mg/kg), cartilage extract (a source of chondroitin, 160 mg/kg), mannanoligosaccharides (150 mg/kg), herbs and fruits (rosemary, cloves, citrus, curcuma, 150 mg/kg), fructooligosaccharides (100 mg/kg), yucca schidigera (100 mg/kg), inulin (90 mg/kg), milk thistle (75 mg/kg).', 'Analytical ingredients: crude protein 26%, fat content 14%, moisture 10%, crude ash 7.0%, crude fiber 2.8%, calcium 1.5%, phosphorus 1.2%.\r\nMetabolizable energy: 3,700 kcal/kg. Omega 3: 0.3%, Omega 6: 1.55%.', 'Nutritional composition: vitamin A (E672) 20,000 IU, vitamin D3 (E671) 1,500 IU, vitamin E (α-tocopherol) (3a700) 500 mg, vitamin C (E300) 200 mg, choline chloride 600 mg, biotin 0.6 mg, vitamin B1 1 mg, vitamin B2 4 mg, niacinamide (3a315) 12 mg, calcium panthothenate 10 mg, vitamin B6 (3a831) 1 mg, folic acid (3a316) 0.5 mg, vitamin B12 0.04 mg, zinc (E6) 80 mg, iron (E1) 70 mg, manganese (E5) 35 mg, iodine (E2) 0.65 mg, copper (E4) 15 mg, selenium (3b8.10) 0.25 mg.', 'Dog', 'food', 41),
(14, 'product/foods/Mynah.png', 'Smart Heart Mynah Bird Food 1Kg', 0.00, 250.00, 'Smart Heart', 'Dried Egg Yolk Source of high quality protein and rich in essential amino acids\r\nVitamin C Strengthens the immune system and helps reduce stress\r\nOmega 3 & Omega 6 fatty acid Helps Improve brain function\r\nVitamin A Improves visual acuity\r\nVitamin D3 Helps in the development of strong bones\r\nVitamin E Aids the reproductive system', '', '', 'Bird', 'Food', 0),
(15, 'product/shampoo/Gental-Dog-Conditioning.png', 'Ivy Dog Conditioning Gental Shampoo 250ml', 600.00, 500.00, 'Ivy', 'Dog Shampoo - The Best', '', '', 'Dog', 'Shampoo', 10),
(16, 'product/litters/Combo-2-1.png', '\r\nSaniCat Duo White & Silica Gel Mixed Cat Litter 15Litter', 0.00, 1350.00, 'SaniCat', 'SANICAT DUO WHITE\r\n\r\nGet the longest-lasting cat litter thanks to a combination of clumping litter with the fragrant scent of vanilla and mandarin orange.', 'Its thicker granules also prevent cats from dragging the litter outside the litter box.\r\n\r\nComposition: Thick Bentonite with vanilla and mandarin orange scent.', 'Silica Gel\r\n\r\nConvenient twice-per-week Scooping\r\nExcellent odor control\r\nEasy to remove clumps\r\nBright fun colors\r\nClumping silica gel cat litter', 'Cat', 'Litter', 7);

-- --------------------------------------------------------

--
-- Table structure for table `rahmat`
--

CREATE TABLE `rahmat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `purchased_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rahmat`
--

INSERT INTO `rahmat` (`id`, `name`, `quantity`, `price`, `image`, `purchased_time`) VALUES
(1, 'Premium Cat Bentonite Litter Apple 5L', '3', '900', 'product/litters/premium_cat_bentonite_apple_5L.png', '04:13:am  |  09-04-2020'),
(13, 'Brit Care Adult Large Breed Dog Food Lamb & Rice 12Kg', '5', '22500', 'product/foods/Large-Breed-Lamb-Rice.png', '04:13:am  |  09-04-2020'),
(3, 'Premium Cat Bentonite Litter Lavender 10L', '3', '1800', 'product/litters/premium_cat_bentonite_lavender_10L.png', '04:13:am  |  09-04-2020'),
(13, 'Brit Care Adult Large Breed Dog Food Lamb & Rice 12Kg', '1', '4500', 'product/foods/Large-Breed-Lamb-Rice.png', '07:02:am  |  09-04-2020'),
(14, 'Smart Heart Mynah Bird Food 1Kg', '3', '750', 'product/foods/Mynah.png', '07:02:am  |  09-04-2020');

-- --------------------------------------------------------

--
-- Table structure for table `rofiq47`
--

CREATE TABLE `rofiq47` (
  `id` varchar(255) NOT NULL,
  `total` int(50) NOT NULL,
  `earned` int(50) NOT NULL,
  `delivered_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rofiq47`
--

INSERT INTO `rofiq47` (`id`, `total`, `earned`, `delivered_date`) VALUES
('895d770973ed8617a9a642b6ab3c03a7', 1700, 100, '10-04-2020');

-- --------------------------------------------------------

--
-- Table structure for table `rumman22`
--

CREATE TABLE `rumman22` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `purchased_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rumman22`
--

INSERT INTO `rumman22` (`id`, `name`, `quantity`, `price`, `image`, `purchased_time`) VALUES
(14, 'Smart Heart Mynah Bird Food 1Kg', '1', '250', 'product/foods/Mynah.png', '07:16:am  |  10-04-2020'),
(16, '\nSaniCat Duo White & Silica Gel Mixed Cat Litter 15Litter', '1', '1350', 'product/litters/Combo-2-1.png', '07:16:am  |  10-04-2020');

-- --------------------------------------------------------

--
-- Table structure for table `sajid121`
--

CREATE TABLE `sajid121` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `purchased_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sajid121`
--

INSERT INTO `sajid121` (`id`, `name`, `quantity`, `price`, `image`, `purchased_time`) VALUES
(1, 'Premium Cat Bentonite Litter Apple 5L', '1', '300', 'product/litters/premium_cat_bentonite_apple_5L.png', '07:17:am  |  10-04-2020'),
(6, 'Premium Cat Bentonite Litter Lavender 5L', '1', '300', 'product/litters/premium_cat_bentonite_lavender_5L.png', '07:17:am  |  10-04-2020'),
(10, 'Premium Cat Bentonite Litter Lemon 10L', '1', '600', 'product/litters/premium_cat_bentonite_lemon_10L.png', '07:17:am  |  10-04-2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fullname`, `email`, `password`, `gender`, `address`, `phone`) VALUES
('admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '', '', '+880'),
('iftiazahmed', 'Iftiaz Ahmed', 'iftiaz.ahmed@yahoo.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male', 'House: 29, Kabi Jashimuddin Road, North Kamalapur, Motijheel, Dhaka - 1217', '+8801780039225'),
('rahmat', 'Rahmat Ali', 'rahmat@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male', 'House: 11, Road: 10 , Lalmatia, Dhaka - 1216', '+8801523458651'),
('rumman22', 'Fatematuj Zahura Rumman', 'rumman22@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Female', 'House: 25, Shohid Lane, Mirpur-10, Dhaka - 1217', '+8801617606033'),
('sajid121', 'Sajid Ahmed', 'sajid121@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Male', 'House: 30, Road: 11, Sector: 14, Uttara, Dhaka - 1230', '+880122222222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abbas007`
--
ALTER TABLE `abbas007`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryman`
--
ALTER TABLE `deliveryman`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `manik_shaheb`
--
ALTER TABLE `manik_shaheb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rofiq47`
--
ALTER TABLE `rofiq47`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
