-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 09:30 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_logo`
--

CREATE TABLE `add_logo` (
  `id` int(10) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_logo`
--

INSERT INTO `add_logo` (`id`, `img`) VALUES
(2, 'mrklogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_pass` varchar(60) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_email`, `admin_pass`, `role`) VALUES
(1, 'saifulislamsapon@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(3, 'moazzem@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(4, 'yearul@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(5, 'abdullahkhan12064@gmail.com', '1234abcd', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `all_order_info`
-- (See below for the actual view)
--
CREATE TABLE `all_order_info` (
`order_id` int(255)
,`product_name` varchar(255)
,`pdt_quantity` int(11)
,`amount` int(11)
,`uses_coupon` varchar(35)
,`customer_name` varchar(60)
,`Shipping_mobile` varchar(20)
,`trans_id` varchar(25)
,`shiping_address` varchar(255)
,`order_status` int(3)
,`order_time` timestamp
,`order_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `ctg_id` int(11) NOT NULL,
  `ctg_name` varchar(60) NOT NULL,
  `ctg_des` varchar(150) NOT NULL,
  `ctg_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`ctg_id`, `ctg_name`, `ctg_des`, `ctg_status`) VALUES
(1, 'Beauty and Personal Care', 'Discover a range of beauty and personal care products to enhance your lifestyle.', 1),
(2, 'Electronics', 'Explore cutting-edge electronics for your home and personal use.', 1),
(3, 'Health and Household', 'Find health and household essentials to keep your home in top shape.', 1),
(4, 'Home and Kitchen', 'Create a stylish and functional home with our home and kitchen products.', 1),
(5, 'Office Products', 'Equip your office with the latest and most efficient office products available.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cupon`
--

CREATE TABLE `cupon` (
  `cupon_id` int(11) NOT NULL,
  `cupon_code` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `discount` int(5) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cupon`
--

INSERT INTO `cupon` (`cupon_id`, `cupon_code`, `description`, `discount`, `status`) VALUES
(1, 'MRK', 'It\'s a discount coupon.', 10, 1),
(2, 'ZAMAN', 'It is Discounted Cupon.', 15, 1),
(3, 'DISCOUNT', 'It is Discounted Cupon.', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `user_id`, `user_name`, `pdt_id`, `comment`, `comment_date`) VALUES
(1, 1, 'saiful', 4, 'This product is very good', '2021-09-11'),
(4, 5, 'karim', 6, 'Good product', '2021-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `header_info`
--

CREATE TABLE `header_info` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tweeter` varchar(500) NOT NULL,
  `fb_link` varchar(500) NOT NULL,
  `pinterest` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header_info`
--

INSERT INTO `header_info` (`id`, `email`, `tweeter`, `fb_link`, `pinterest`, `phone`) VALUES
(10, 'info@mrkassociatesinc.com', 'https://twitter.com/', 'https://facebook.com/', 'https://pinerest.com/', '+1 (737) 2825412');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `pdt_quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `uses_coupon` varchar(35) NOT NULL,
  `order_status` int(3) NOT NULL,
  `trans_id` varchar(25) NOT NULL,
  `Shipping_mobile` varchar(20) NOT NULL,
  `shiping` varchar(255) NOT NULL,
  `order_time` timestamp NULL DEFAULT current_timestamp(),
  `order_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pdt_id` int(255) NOT NULL,
  `pdt_name` varchar(200) NOT NULL,
  `pdt_price` int(255) NOT NULL,
  `pdt_des` varchar(250) NOT NULL,
  `pdt_ctg` int(200) NOT NULL,
  `pdt_img` varchar(250) NOT NULL,
  `product_stock` int(5) NOT NULL,
  `pdt_status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pdt_id`, `pdt_name`, `pdt_price`, `pdt_des`, `pdt_ctg`, `pdt_img`, `product_stock`, `pdt_status`) VALUES
(1, 'Mascara Eye Liner', 40, 'Define your gaze with our Mascara Eye Liner combo. Achieve bold, captivating eyes that leave a lasting impression.\n\n', 1, 'beauty1.png', 10, 1),
(2, 'Lotion Personal Care Pack', 120, 'Indulge in self-care bliss with our Lotion Personal Care Pack. Immerse your skin in luxurious hydration and experience the ultimate pampering.\n\n', 1, 'beauty3.png', 15, 1),
(3, 'Make-up Pack', 90, 'Unleash your creativity with our curated Make-up Pack. From vibrant eyeshadows to flawless foundations, it\'s your go-to kit for a stunning look every time.\n\n', 1, 'beauty2.png', 10, 1),
(4, 'Color Bulb', 12, 'Illuminate your world with our vibrant Color Bulb. Set the mood with a spectrum of hues, transforming any space into a personalized oasis.\n\n', 2, 'electric1.png', 10, 1),
(5, 'Wireless Earbuds', 10, 'Cut the cords and elevate your audio experience with our Wireless Earbuds. Immerse yourself in crystal-clear sound and hassle-free listening.\n\n', 2, 'electric2.png', 8, 1),
(6, 'Extension Cord', 10, 'Power up your devices with ease using our reliable Extension Cord. Stay connected and keep everything within reach with this essential accessory.\n\n', 2, 'electric3.png', 12, 1),
(7, 'Washing Machine Cleaner', 35, 'Say goodbye to lingering odors and stubborn residues. Elevate your laundry experience with a our washing machine cleaner that\'s as clean as your clothes!', 3, 'health1.png', 15, 1),
(8, 'Nutrition Protein', 80, 'Fuel your body with the ultimate nutrition boost! Our Protein delivers a powerful blend to support your active lifestyle and help you reach peak performance.\n\n', 3, 'health2.png', 13, 1),
(9, 'Pure Energy Protein', 110, 'Unleash the energy within! Our Pure Energy Protein is not just a supplement; it\'s a vitality infusion that powers you through your day, ensuring you never miss a beat.\n\n', 3, 'health3.png', 12, 1),
(12, 'Nivea Perfume Body Spray', 30, 'Embrace the essence of elegance with Nivea Perfume Body Spray. A captivating fragrance that lingers, leaving you feeling fresh and fabulous all day.\n\n', 1, 'beauty4.png', 5, 1),
(13, 'Dining Table', 150, 'Gather around elegance and functionality with our Dining Table. Crafted for memorable meals and shared moments, it\'s the heart of your dining space.', 4, 'kitchen8.png', 15, 1),
(14, 'Kitchen Utensil', 180, 'Elevate your culinary skills with our premium Kitchen Utensil set. Designed for efficiency and durability, making every cooking task a breeze.', 4, 'kitchen7.png', 15, 1),
(15, 'Meat Grinder', 200, 'Take control of your culinary creations with our Meat Grinder. From sausages to ground meats, it\'s the key to crafting delicious and customized dishes.', 4, 'kitchen6.png', 10, 1),
(17, 'Boston Round Hair Musk', 105, 'Elevate your hair game with Boston Round Hair Musk. A delightful blend that not only nourishes but also leaves your locks smelling divine.\n\n', 1, 'beauty5.png', 3, 1),
(18, 'Vital Protein Sleep', 85, 'Beauty sleep just got an upgrade! Vital Protein Sleep supports a restful night, helping you wake up refreshed with a radiant glow.\n\n', 1, 'beauty6.png', 5, 1),
(19, 'Evenhealy Skin Breath', 55, 'Let your skin breathe with Evenhealy Skin Breath. A gentle touch that rejuvenates and revitalizes, leaving your complexion looking and feeling refreshed.\n\n', 1, 'beauty7.png', 3, 1),
(20, 'Make-up Care Kit', 78, 'Your makeup\'s best friend! The Make-up Care Kit ensures your beauty essentials stay in top condition, so you can always slay with confidence.\n\n\n\n\n\n', 1, 'beauty8.png', 20, 1),
(22, 'USB Wall Charger', 10, 'Charge up in style with our sleek USB Wall Charger. Fast, efficient, and compact, it\'s the perfect companion for all your devices.\n\n', 2, 'electric4.png', 8, 1),
(23, 'Blink Video Doorbell', 10, 'Secure your home with the Blink Video Doorbell. Stay connected to your doorstep, ensuring peace of mind with instant alerts and seamless monitoring.\n\n', 2, 'electric5.png', 8, 1),
(24, 'Apple Airpods', 10, 'Dive into the world of pristine audio with Apple Airpods. Experience the epitome of wireless convenience and unparalleled sound quality.\n\n', 2, 'electric6.png', 8, 1),
(25, 'Digital Camera', 10, 'Capture life\'s moments in stunning detail with our Digital Camera. From breathtaking landscapes to candid smiles, seize every memory with clarity.\n\n', 2, 'electric7.png', 8, 1),
(26, 'Bluetooth Car Receiver', 10, 'Transform your car into a wireless haven with our Bluetooth Car Receiver. Stream your favorite tunes and stay connected on the go with ease.\n\n\n\n\n\n', 2, 'electric8.png', 8, 1),
(27, 'Reliever Eye Drops', 300, 'Refresh and revive tired eyes with our Reliever Eye Drops. A soothing solution to combat dryness and bring instant relief, leaving your eyes feeling revitalized.\n\n', 3, 'health4.png', 15, 1),
(28, 'Dishwasher Cleaner', 20, 'Let your dishes sparkle! Our Dishwasher Cleaner ensures a spotless, odor-free machine, so every meal ends with the shine it deserves.\n\n', 3, 'health5.png', 15, 1),
(29, 'Mouth Wash', 46, 'Elevate your oral care routine with our invigorating Mouth Wash. Say hello to long-lasting freshness and a confidently bright smile.\n\n', 3, 'health6.png', 15, 1),
(30, 'Dish Soap', 15, 'Tackle tough grease and stains effortlessly! Our Dish Soap not only cleans your dishes but leaves them gleaming with a refreshing scent.\n\n', 3, 'health7.png', 15, 1),
(31, 'Hair Growth Vitamin', 50, 'Unlock the secret to luscious locks! Our Hair Growth Vitamin is a nourishing blend that promotes strong, healthy hair from within. Embrace the beauty of revitalized strands.\n\n\n\n\n\n', 3, 'health8.png', 33, 1),
(32, 'Mixer Juicer', 110, 'Unleash the power of versatility in your kitchen with our Mixer Juicer. From refreshing juices to smooth blends, it\'s the ultimate culinary companion.\r\n\r\n', 4, 'kitchen1.png', 14, 1),
(33, 'Microwave Oven', 220, 'Embrace quick and efficient cooking with our Microwave Oven. From reheating to baking, enjoy a world of culinary possibilities at your fingertips.\r\n\r\n', 4, 'kitchen3.png', 5, 1),
(34, 'Hob Gas Stove', 120, 'Ignite your passion for cooking with our Hob Gas Stove. Precision and style come together for a seamless culinary experience.\r\n\r\n', 4, 'kitchen2.png', 13, 1),
(35, 'Measuring Scales', 90, 'Perfect your recipes with our precise Measuring Scales. Achieve culinary excellence by ensuring every ingredient is measured to perfection.', 4, 'kitchen4.png', 22, 1),
(36, 'Rice Cooker', 150, 'Effortlessly achieve fluffy, perfectly cooked rice with our Rice Cooker. Streamline your meal preparation and savor the simplicity.\r\n\r\n', 4, 'kitchen5.png', 12, 1),
(37, 'Digital Calculator', 56, 'Streamline your calculations with precision using our Digital Calculator. The perfect companion for efficiency in both work and study.', 5, 'office1.png', 5, 1),
(38, 'Black HP Printer', 210, 'Unleash the power of professional printing with our sleek Black HP Printer. From crisp documents to vibrant images, it\'s the cornerstone of your home office.', 5, 'office2.png', 7, 1),
(39, 'Stationary Case', 20, 'Organize your essentials in style with our Stationery Case. A sleek and practical solution for keeping your pens, pencils, and other tools within easy reach.\r\n', 5, 'office3.png', 9, 1),
(40, 'Paper Notebook', 45, 'Jot down your thoughts and ideas in our Paper Notebook. A classic companion for note-taking and creative expression.', 5, 'office4.png', 9, 1),
(41, 'Gaming Chair', 250, 'Elevate your gaming experience with comfort and style in our Gaming Chair. Designed for prolonged sessions, it\'s the throne for every gaming enthusiast.', 5, 'office5.png', 11, 1),
(42, 'Recycle Bin', 30, 'Make eco-conscious choices effortlessly with our Recycle Bin. A stylish addition to your workspace that encourages a greener, more sustainable lifestyle.', 5, 'office6.png', 13, 1),
(43, 'Black Stapler', 40, 'Keep your documents in order with our sleek Black Stapler. A reliable and essential tool for any office or home workspace.', 5, 'office7.png', 15, 1),
(44, 'Fabric Rolling Chair', 150, 'Experience comfort and mobility with our Fabric Rolling Chair. The perfect blend of style and functionality for your home office or study space.', 5, 'office8.png', 17, 1),
(45, '', 0, '', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_info_ctg`
-- (See below for the actual view)
--
CREATE TABLE `product_info_ctg` (
`pdt_id` int(255)
,`pdt_name` varchar(200)
,`pdt_price` int(255)
,`pdt_des` varchar(250)
,`pdt_img` varchar(250)
,`product_stock` int(5)
,`pdt_status` tinyint(5)
,`ctg_id` int(11)
,`ctg_name` varchar(60)
);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `first_line` varchar(255) NOT NULL,
  `second_line` varchar(255) NOT NULL,
  `third_line` varchar(255) NOT NULL,
  `btn_left` varchar(25) NOT NULL,
  `btn_right` varchar(25) NOT NULL,
  `slider_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `first_line`, `second_line`, `third_line`, `btn_left`, `btn_right`, `slider_img`) VALUES
(1, 'shop in', 'Beauty and Personal Care', 'Discover a range of beauty and personal care products to enhance your lifestyle.', 'Shop now', 'View lookbook', 'beauty and personal.png'),
(2, 'Shop in', 'Electronics', 'Explore cutting-edge electronics for your home and personal use.', 'Shop now', 'View lookbook', 'electronics.png'),
(3, 'Shop in', 'Health and Household', 'Find health and household essentials to keep your home in top shape.', 'Shop now', 'View lookbook', 'health.png'),
(4, 'Shop in', 'Home and Kitchen', 'Create a stylish and functional home with our home and kitchen products.', 'Shop now', 'View lookbook', 'home and kitchen.png'),
(5, 'Shop in', 'Office Products', 'Equip your office with the latest and most efficient office products available.', 'Shop Now', 'View lookbook', 'office products.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_firstname` varchar(60) NOT NULL,
  `user_lastname` varchar(60) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_roles` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_mobile`, `user_address`, `user_roles`, `created_at`, `modified_at`) VALUES
(7, 'Abdullah123', ' Abdullah', ' Khan', 'abdullahkhan12064@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, 'peshawar', 5, '2024-02-05 19:07:28', '2024-02-05 19:07:28'),
(8, 'hamdan1122', ' Muuhammad', ' Hamdan', 'hamdan1122@gamail.com', '7ad401e2657b3e616c4bc7beb55ad4c8', 2147483647, 'Peshawar', 5, '2024-02-06 23:13:57', '2024-02-06 23:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `postal_code` varchar(8) NOT NULL,
  `city` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE `user_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `provider` varchar(35) NOT NULL,
  `account_no` int(11) DEFAULT NULL,
  `expiry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure for view `all_order_info`
--
DROP TABLE IF EXISTS `all_order_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all_order_info`  AS SELECT `order_details`.`order_id` AS `order_id`, `order_details`.`product_name` AS `product_name`, `order_details`.`pdt_quantity` AS `pdt_quantity`, `order_details`.`amount` AS `amount`, `order_details`.`uses_coupon` AS `uses_coupon`, `users`.`user_firstname` AS `customer_name`, `order_details`.`Shipping_mobile` AS `Shipping_mobile`, `order_details`.`trans_id` AS `trans_id`, `order_details`.`shiping` AS `shiping_address`, `order_details`.`order_status` AS `order_status`, `order_details`.`order_time` AS `order_time`, `order_details`.`order_date` AS `order_date` FROM (`order_details` join `users`) WHERE `users`.`user_id` = `order_details`.`user_id` ;

-- --------------------------------------------------------

--
-- Structure for view `product_info_ctg`
--
DROP TABLE IF EXISTS `product_info_ctg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_info_ctg`  AS SELECT `products`.`pdt_id` AS `pdt_id`, `products`.`pdt_name` AS `pdt_name`, `products`.`pdt_price` AS `pdt_price`, `products`.`pdt_des` AS `pdt_des`, `products`.`pdt_img` AS `pdt_img`, `products`.`product_stock` AS `product_stock`, `products`.`pdt_status` AS `pdt_status`, `catagory`.`ctg_id` AS `ctg_id`, `catagory`.`ctg_name` AS `ctg_name` FROM (`products` join `catagory`) WHERE `products`.`pdt_ctg` = `catagory`.`ctg_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_logo`
--
ALTER TABLE `add_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `cupon`
--
ALTER TABLE `cupon`
  ADD PRIMARY KEY (`cupon_id`);

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_info`
--
ALTER TABLE `header_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pdt_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_logo`
--
ALTER TABLE `add_logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cupon`
--
ALTER TABLE `cupon`
  MODIFY `cupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `header_info`
--
ALTER TABLE `header_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pdt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_payment`
--
ALTER TABLE `user_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
