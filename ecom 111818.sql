-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 08:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom 111818`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl`
--

CREATE TABLE `about_tbl` (
  `about_id` int(10) NOT NULL,
  `about_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_tbl`
--

INSERT INTO `about_tbl` (`about_id`, `about_description`) VALUES
(1, 'We are Print IT & Go, a custom designed shirt printing, embroidery, transfer, & lay-out printing company. We cater to designing and printing on everything from : Shirts, Singlets, Jackets, & everything all the way up to creatively designed paper giveaways. We reach out to restaurants, hotels, resorts, schools or generally anybody that is in need of printing manufacturing services. Personalized packages are also possible, to meet every budget that you may want to allot for this purpose. With a variety of offerings to choose from, you may directly inquire through email, mobile or over the phone. Feel free to call and get in touch with us soon.');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tbl`
--

CREATE TABLE `appointment_tbl` (
  `appointment_id` int(7) NOT NULL,
  `appointment_account_id` int(10) NOT NULL,
  `appointment_fname` varchar(1000) NOT NULL,
  `appointment_lname` varchar(1000) NOT NULL,
  `appointment_email` varchar(1000) NOT NULL,
  `appointment_notes` varchar(1000) NOT NULL,
  `appointment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `appointment_time` time NOT NULL,
  `appointment_stat` varchar(1000) NOT NULL,
  `appointment_datereceived` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `appointment_resched_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `appointment_resched_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cart_id` int(100) NOT NULL,
  `cart_user_id` int(100) NOT NULL,
  `cart_product_id` int(100) NOT NULL,
  `cart_product_size` varchar(250) NOT NULL,
  `cart_product_quantity` int(11) NOT NULL,
  `cart_status_checkout` varchar(100) NOT NULL,
  `cart_status_tracking` varchar(100) NOT NULL,
  `cart_checkout_payment_mode` varchar(100) NOT NULL,
  `cart_checkout_delivery` varchar(1000) NOT NULL,
  `cart_checkout_fname` varchar(1000) NOT NULL,
  `cart_checkout_lname` varchar(1000) NOT NULL,
  `cart_checkout_house` varchar(1000) NOT NULL,
  `cart_checkout_street` varchar(1000) NOT NULL,
  `cart_checkout_barangay` varchar(1000) NOT NULL,
  `cart_checkout_city` varchar(1000) NOT NULL,
  `cart_checkout_region` varchar(1000) NOT NULL,
  `cart_checkout_village` varchar(1000) NOT NULL,
  `cart_checkout_product_code` varchar(1000) NOT NULL,
  `cart_checkout_product_img` varchar(1000) NOT NULL,
  `cart_checkout_product_name` varchar(1000) NOT NULL,
  `cart_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cart_checkout_product_price` varchar(1000) NOT NULL,
  `cart_checkout_product_category` varchar(1000) NOT NULL,
  `cart_checkout_product_information` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `color_tbl`
--

CREATE TABLE `color_tbl` (
  `color_id` int(7) NOT NULL,
  `color_name` varchar(1000) NOT NULL,
  `color_img` varchar(1000) NOT NULL,
  `color_category` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_tbl`
--

INSERT INTO `color_tbl` (`color_id`, `color_name`, `color_img`, `color_category`) VALUES
(1, 'Baby Pink', 'c-1.jpg', 'Collared'),
(2, 'Berry Red', 'c-2.jpg', 'Collared'),
(3, 'Black', 'c-3.jpg', 'Collared'),
(4, 'Blue Ice', 'c-4.jpg', 'Collared'),
(5, 'Canary Yellow', 'c-5.jpg', 'Collared'),
(6, 'Cream', 'c-6.jpg', 'Collared'),
(7, 'Emerald Green', 'c-7.jpg', 'Collared'),
(8, 'Gold Yellow', 'c-8.jpg', 'Collared'),
(9, 'Heather Gray', 'c-9.jpg', 'Collared'),
(10, 'Khaki', 'c-10.jpg', 'Collared'),
(11, 'Lilac', 'c-11.jpg', 'Collared'),
(12, 'Maize Yellow', 'c-12.jpg', 'Collared'),
(13, 'Misty Green', 'c-13.jpg', 'Collared'),
(14, 'Mocca', 'c-14.jpg', 'Collared'),
(15, 'Moss Green', 'c-15.jpg', 'Collared'),
(16, 'Navy Blue', 'c-16.jpg', 'Collared'),
(17, 'Neon Green', 'c-17.jpg', 'Collared'),
(18, 'Orange', 'c-18.jpg', 'Collared'),
(19, 'Red', 'c-19.jpg', 'Collared'),
(20, 'Royal Blue', 'c-20.jpg', 'Collared'),
(21, 'Silver Gray', 'c-21.jpg', 'Collared'),
(22, 'Choco Brown', 'c-22.jpg', 'Collared'),
(23, 'Violet', 'c-23.jpg', 'Collared'),
(24, 'White', 'c-24.jpg', 'Collared'),
(25, 'Aqua Blue', 'c-25.jpg', 'Collared'),
(26, 'Avocado Green', 'c-26.jpg', 'Collared'),
(27, 'Citrus Orange', 'c-27.jpg', 'Collared'),
(28, 'Fuschia', 'c-28.jpg', 'Collared'),
(29, 'j-1', 'sj-1.jpg', 'Jacket'),
(30, 'j-2', 'sj-2.jpg', 'Jacket'),
(31, 'j-3', 'sj-3.jpg', 'Jacket'),
(32, 'j-4', 'sj-4.jpg', 'Jacket'),
(33, 'j-5', 'sj-5.jpg', 'Jacket'),
(34, 'j-6', 'sj-6.jpg', 'Jacket'),
(35, 'j-7', 'sj-7.jpg', 'Jacket'),
(36, 'j-8', 'sj-8.jpg', 'Jacket'),
(37, 'j-9', 'sj-9.jpg', 'Jacket'),
(38, 'j-10', 'sj-10.jpg', 'Jacket'),
(39, 'j-11', 'sj-11.jpg', 'Jacket'),
(40, 'j-12', 'sj-12.jpg', 'Jacket'),
(41, 'j-13', 'sj-13.jpg', 'Jacket'),
(42, 'j-14', 'sj-14.jpg', 'Jacket'),
(43, 'j-15', 'sj-15.jpg', 'Jacket'),
(44, 'j-16', 'sj-16.jpg', 'Jacket');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `contact_id` int(7) NOT NULL,
  `contact_name` varchar(250) NOT NULL,
  `contact_email` varchar(250) NOT NULL,
  `contact_subject` varchar(250) NOT NULL,
  `contact_message` varchar(250) NOT NULL,
  `contact_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customize_tbl`
--

CREATE TABLE `customize_tbl` (
  `cutomize_id` int(7) NOT NULL,
  `customize_garment` varchar(1000) NOT NULL,
  `customize_fabric` varchar(1000) NOT NULL,
  `customize_template` varchar(200) NOT NULL,
  `customize_color1` varchar(1000) NOT NULL,
  `customize_color2` varchar(1000) NOT NULL,
  `customize_color3` varchar(1000) NOT NULL,
  `customize_image` varchar(1000) NOT NULL,
  `customize_first_name` varchar(1000) NOT NULL,
  `customize_last_name` varchar(1000) NOT NULL,
  `customize_email_address` varchar(1000) NOT NULL,
  `customize_dead_line` varchar(1000) NOT NULL,
  `customize_notes` varchar(1000) NOT NULL,
  `customize_date_received` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fabric_tbl`
--

CREATE TABLE `fabric_tbl` (
  `fabric_id` int(8) NOT NULL,
  `fabric_name` varchar(1000) NOT NULL,
  `fabric_img` varchar(1000) NOT NULL,
  `fabric_category` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fabric_tbl`
--

INSERT INTO `fabric_tbl` (`fabric_id`, `fabric_name`, `fabric_img`, `fabric_category`) VALUES
(1, 'CVC COTTON', 'cvc_cotton.jpg', 'T-Shirt'),
(2, 'HONEYCOMED COTTON', 'honeycombed_cotton.jpg', 'T-Shirt'),
(3, 'DRI FIT ATHLETIC', 'dri_fit_athletic.jpg', 'T-Shirt'),
(4, 'FULL MAX ATHLETIC', 'full_max_athletic.jpg', 'T-Shirt'),
(5, 'STRETCHABLE SPANDEX', 'stetchable_spandex.jpg', 'T-Shirt'),
(6, 'CVC COTTON', 'cvc_cotton.jpg', 'Collared'),
(7, 'HONEYCOMED COTTON', 'honeycombed_cotton.jpg', 'Collared'),
(8, 'DRI FIT ATHLETIC', 'dri_fit_athletic.jpg', 'Collared'),
(9, 'FULL MAX ATHLETIC', 'full_max_athletic.jpg', 'Collared'),
(10, 'MICRO COOL', 'micro_cool.jpg', 'Jacket'),
(11, 'MICRO FIBER', 'micro_fiber.jpg', 'Jacket'),
(12, 'SINGLE FACE', 'single_face.jpg', 'Jacket'),
(13, 'MICRO SHINEY', 'micro_shiny.jpg', 'Jacket'),
(14, 'YONEX', 'yonex.jpg', 'Jacket'),
(15, 'YONEX REVERSE', 'yonex_reverse.jpg', 'Jacket');

-- --------------------------------------------------------

--
-- Table structure for table `garment_tbl`
--

CREATE TABLE `garment_tbl` (
  `garment_id` int(7) NOT NULL,
  `garment_name` varchar(1000) NOT NULL,
  `garment_img` varchar(1000) NOT NULL,
  `garment_category` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `help_tbl`
--

CREATE TABLE `help_tbl` (
  `help_id` int(10) NOT NULL,
  `help_title` varchar(500) NOT NULL,
  `help_subtitle` varchar(1000) NOT NULL,
  `help_message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help_tbl`
--

INSERT INTO `help_tbl` (`help_id`, `help_title`, `help_subtitle`, `help_message`) VALUES
(1, 'How to place an order?', 'Title', 'You may choose from our pre-made products. Or you may customize t-shirts in our design and customize tab.'),
(2, 'Can I call to place an order?', 'Title', 'We can assist you to place your order over the phone if your preferred payment method is Cash On Delivery (COD).\nHowever, we highly recommend you to check out how to make a purchase online.'),
(3, 'After confirming payment, what do I do next?', 'Title', 'Once your order has been verified, we\'ll take care of everything for you. All you have to do is wait for your package to be delivered.'),
(4, 'Will I receive any order confirmation after placing an order?', 'Title', 'An order confirmation will be sent to you through email right after you have placed your order.'),
(5, 'Can I place a bulk order?', 'Title', 'Yes, we cater bulk orders.'),
(6, 'What are the payment methods available?', 'Title', 'Customers may pay thru bank deposit or thru COD.'),
(8, 'What are the payment methods available?', 'Title', 'COD Stands for Cash on Delivery. This is a payment method gives you the opportunity to pay for the item/s you have ordered only when it gets delivered. A few areas in the Philippines are not covered by COD transactions due to geographical restrictions.'),
(9, 'Can I use a credit/debit card?', 'Title', 'Print IT and Go accepts payment thru bank deposit or COD only. '),
(10, 'Why was my order charged wrong amount?', 'Title', 'Your order might have included additional charges like shipping and/or bulky fees.'),
(11, 'Where can I request an official receipt?', 'Title', 'You may request for a physical or soft copy of your official receipt.');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(10) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `product_img` varchar(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` int(250) NOT NULL,
  `product_category` varchar(250) NOT NULL,
  `product_information` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_code`, `product_img`, `product_name`, `product_price`, `product_category`, `product_information`) VALUES
(30, 'WT1', '22.jpg', 'for Women', 250, 'General', ''),
(31, 'MT1', '32.jpg', 'for Men', 250, 'General', ''),
(32, 'WC1', '112.jpg', 'for Women', 350, 'General', ''),
(33, 'MC1', '42.jpg', 'for Men', 350, 'General', ''),
(34, 'J1', '82.jpg', 'Just for you', 500, 'General', ''),
(35, 'SL', '', 'Our logo', 100, 'General', ''),
(36, 'WT-1', '23.jpg', 'for Women', 250, 'T-Shirt', ''),
(37, 'MT-1', '33.jpg', 'for Men', 250, 'T-Shirt', ''),
(38, 'WC-1', '113.jpg', 'for Women', 350, 'Collared Shirt', ''),
(39, 'MC-1', '43.jpg', 'for Men', 350, 'Collared Shirt', ''),
(40, 'J-1', '83.jpg', 'Just for you', 500, 'Jackets', ''),
(41, 'S-L', '', 'Our logo', 100, 'Logos', '');

-- --------------------------------------------------------

--
-- Table structure for table `sample_tbl`
--

CREATE TABLE `sample_tbl` (
  `sample_id` int(10) NOT NULL,
  `sample_img` varchar(1000) NOT NULL,
  `sample_price` int(250) NOT NULL,
  `sample_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `template_tbl`
--

CREATE TABLE `template_tbl` (
  `template_id` int(7) NOT NULL,
  `template_name` varchar(1000) NOT NULL,
  `template_img` varchar(1000) NOT NULL,
  `template_category` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template_tbl`
--

INSERT INTO `template_tbl` (`template_id`, `template_name`, `template_img`, `template_category`) VALUES
(1, 'PLAIN', 'tshirt1.png', 'T-Shirt'),
(2, 'PLAIN', 'jacket1.png', 'Jacket'),
(3, '2C-1', '2C-1.jpg', 'Collared'),
(4, '2C-2', '2C-2.jpg', 'Collared'),
(5, '2C-3', '2C-3.jpg', 'Collared'),
(6, '2C-4', '2C-4.jpg', 'Collared'),
(7, '2C-5', '2C-5.jpg', 'Collared'),
(8, '2C-6', '2C-6.jpg', 'Collared'),
(9, '2C-7', '2C-7.jpg', 'Collared'),
(10, '2C-8', '2C-8.jpg', 'Collared'),
(11, '2C-9', '2C-9.jpg', 'Collared'),
(12, '3C-1', '3C-1.jpg', 'Collared'),
(13, '3C-2', '3C-2.jpg', 'Collared'),
(14, '3C-3', '3C-3.jpg', 'Collared'),
(15, '3C-4', '3C-4.jpg', 'Collared'),
(16, '3C-5', '3C-5.jpg', 'Collared'),
(17, '3C-6', '3C-6.jpg', 'Collared'),
(18, '3C-7', '3C-7.jpg', 'Collared'),
(19, '3C-8', '3C-8.jpg', 'Collared'),
(20, '3C-9', '3C-9.jpg', 'Collared');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `upload_id` int(11) NOT NULL,
  `upload_image` int(11) NOT NULL,
  `upload_first_name` int(11) NOT NULL,
  `upload_last_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload_tbl`
--

CREATE TABLE `upload_tbl` (
  `upload_id` int(7) NOT NULL,
  `upload_image` varchar(1000) NOT NULL,
  `upload_first_name` varchar(1000) NOT NULL,
  `upload_last_name` varchar(1000) NOT NULL,
  `upload_email` varchar(1000) NOT NULL,
  `upload_notes` varchar(1000) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(7) NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_lname` varchar(250) NOT NULL,
  `user_mname` varchar(250) NOT NULL,
  `user_username` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_mobile_phone` varchar(20) NOT NULL,
  `user_gender` varchar(250) NOT NULL,
  `user_password` varchar(1000) NOT NULL,
  `user_date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_stat` int(250) NOT NULL DEFAULT '0',
  `user_class` varchar(100) NOT NULL DEFAULT '0',
  `user_house` varchar(250) NOT NULL,
  `user_street` varchar(250) NOT NULL,
  `user_village` varchar(250) NOT NULL,
  `user_barangay` varchar(250) NOT NULL,
  `user_city` varchar(250) NOT NULL,
  `user_region` varchar(250) NOT NULL,
  `user_ship_notes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_fname`, `user_lname`, `user_mname`, `user_username`, `user_email`, `user_phone`, `user_mobile_phone`, `user_gender`, `user_password`, `user_date_joined`, `user_stat`, `user_class`, `user_house`, `user_street`, `user_village`, `user_barangay`, `user_city`, `user_region`, `user_ship_notes`) VALUES
(4, 'admin1', 'admin1', 'admin1', 'admin1', 'admin1@gmail.com', '9425957', '09175160123', 'female', '7488e331b8b64e5794da3fa4eb10ad5d', '2016-02-14 17:08:19', 1, '1', '', '', '', '', '', '', ''),
(5, 'user1', 'user1', 'user1', 'user1', 'user1@gmail.com', '9425957', '09175160123', 'female', '80ec08504af83331911f5882349af59d', '2016-02-14 17:11:03', 1, '0', '223', 'Molave', 'None', 'Marikina Heights', 'Marikina City', 'NCR', 'None'),
(6, 'Rowell', 'Ortiz', 'M', 'lewor', 'leworortiz@gmail.com', '', '09955334685', 'male', '9c2134e42d3263381fc750d77676881c', '2018-11-18 07:36:06', 1, '0', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_tbl`
--
ALTER TABLE `about_tbl`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `color_tbl`
--
ALTER TABLE `color_tbl`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customize_tbl`
--
ALTER TABLE `customize_tbl`
  ADD PRIMARY KEY (`cutomize_id`);

--
-- Indexes for table `fabric_tbl`
--
ALTER TABLE `fabric_tbl`
  ADD PRIMARY KEY (`fabric_id`);

--
-- Indexes for table `garment_tbl`
--
ALTER TABLE `garment_tbl`
  ADD PRIMARY KEY (`garment_id`);

--
-- Indexes for table `help_tbl`
--
ALTER TABLE `help_tbl`
  ADD PRIMARY KEY (`help_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sample_tbl`
--
ALTER TABLE `sample_tbl`
  ADD PRIMARY KEY (`sample_id`);

--
-- Indexes for table `template_tbl`
--
ALTER TABLE `template_tbl`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `upload_tbl`
--
ALTER TABLE `upload_tbl`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_tbl`
--
ALTER TABLE `about_tbl`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  MODIFY `appointment_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `color_tbl`
--
ALTER TABLE `color_tbl`
  MODIFY `color_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `contact_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customize_tbl`
--
ALTER TABLE `customize_tbl`
  MODIFY `cutomize_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fabric_tbl`
--
ALTER TABLE `fabric_tbl`
  MODIFY `fabric_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `garment_tbl`
--
ALTER TABLE `garment_tbl`
  MODIFY `garment_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `help_tbl`
--
ALTER TABLE `help_tbl`
  MODIFY `help_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sample_tbl`
--
ALTER TABLE `sample_tbl`
  MODIFY `sample_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_tbl`
--
ALTER TABLE `template_tbl`
  MODIFY `template_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `upload_tbl`
--
ALTER TABLE `upload_tbl`
  MODIFY `upload_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
