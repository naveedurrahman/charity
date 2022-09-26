-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 04:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izazcharity`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `des`) VALUES
(6, 'About Orphans and widos Pakistan', 'Orphans and widos Pakistan is one of the leading, non-profit organization, fully dedicated to humanitarian services since 1990. Orphans and widos workers and volunteers continue to work tirelessly for the relief of affected people across Pakistan. Our dedicated services include disaster management, health services, education, orphan care, clean water and other community services. Orphans and widos Foundation Pakistan being non-political, non-governmental and non-profit organization is committed to serving humanity especially vulnerable and orphans without any kind of discrimination to contribute in their well-being of health, education, financial sustainability, livelihood, shelter, availability of clean water, mosques, savage of disaster and other aspects of life. We also pay attention to the welfare of our employees by means of resource mobilization and developing partnership with NGOs and other concerned public and private organizations. Our volunteers remain satisfied by providing their support and engaging in different useful programs and doing all such acts that are required to achieve our goal to help others with integrity.\r\n      ');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `address` varchar(199) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `image`, `name`, `fname`, `address`, `phone`, `country`, `email`) VALUES
(1, 'pic/vision.jpg', 'izaz', 'jan', 'chd', '03151207603', 'pk', 'izazk38@gmail.com'),
(2, 'pic/Remini20210902223811595.jpg', 'Naveed ur Rahman', 'Ali Rahman', 'Peshawar', '03109704986', 'Pakistan', 'rahmannaveed570@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`) VALUES
(8, 'Peshawar'),
(9, 'Charsadda'),
(17, '8'),
(20, '17');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `fess` varchar(200) DEFAULT NULL,
  `to_area_id` int(10) DEFAULT NULL,
  `from_area_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_date`, `type_id`, `fess`, `to_area_id`, `from_area_id`) VALUES
(12, '2019-09-29', 12, '100', 8, 9),
(22, '2019-10-12', 12, '60', 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `subject`, `email`, `phone`, `msg`) VALUES
(3, 'ill', 'khanstudio7603@gmail.com', '03151207603', 'dd'),
(4, 'abc', 'abc@gmail.com', '03151207603', 'abc'),
(5, 'hdskjf;ds', 'rahmannaveed570@gmail.com', '03109704986', 'mfdnfklsdnfd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `phone`, `whatsapp`, `address`, `user_id`) VALUES
(6, 'Aizaz Khan', '03151207603', '03151207603', 'CHD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(1, 'pic/image_04.jpg'),
(2, 'pic/image_02.jpg'),
(3, 'pic/image_03.jpg'),
(4, 'pic/image_05.jpg'),
(5, 'pic/image_08.jpg'),
(6, 'pic/image_07.jpg'),
(7, 'pic/slider-1.jpg'),
(8, 'pic/slider-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mach`
--

CREATE TABLE `mach` (
  `mac_id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `des` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mach`
--

INSERT INTO `mach` (`mac_id`, `image`, `title`, `price`, `model`, `des`, `location`, `phone`) VALUES
(3, 'pic/s.jpg', 'Repair a Car', '', 'repair', 'RF Young Car Mechanic Woman Repairing Car At Service Station. Beautiful Woman With Wrench In Her Han', 'peshawar', '03151207603'),
(4, 'pic/HD-wallpaper-mechanic-girl-legs-girl-mechanic-car.jpg', 'Repairing Car ', '', 'Denter', ' 123RF Young Car Mechanic Woman Repairing Car At Service Station. Beautiful Woman With Wrench In Her', 'peshawar', '03151207603'),
(5, 'pic/images.jpg', ' Mechanic Repairing Car At Service Station', '', 'Mechanic ', ' 123RF Young Car Mechanic Woman Repairing Car At Service Station. Bautiful Woman With Wrench In Her ', 'peshawar', '03151207603'),
(6, 'pic/proof.jpg', 'a', '', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `title1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `image`, `title`, `des`, `title1`, `image2`) VALUES
(3, 'pic/misin.jpg', 'Our Mission', '          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque libero, pulvinar et elementum quis, facilisis eu ante. Mauris non placerat sapien. Pellentesque tempor arcu non odio scelerisque ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.\r\n      ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `des` varchar(200) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `image`, `title`, `price`, `model`, `des`, `location`, `phone`) VALUES
(15, 'pic/pexels-mike-810357.jpg', 'Hond', '200000', '2020', 'Though there is an assortment of brand-new and fully redesigned passenger cars hitting the road for 2020 model year, ', 'peshawar', '03151207603'),
(16, 'pic/pexels-johnmark-smith-253096.jpg', 'BUDGET CAR FOR YOU', '50000', '1986', 'Here’s a look at some of the most prominent introductions reaching', 'CHD', '03151207603'),
(17, 'pic/pexels-mike-1007410.jpg', 'Honda Civic Car 2020', '1900000', '2020', 'What Is the 2020 Honda Civic? The Honda Civic is a front-drive compact car available in sedan, coupe and four-door hatchback body styles. It competes with the Hyundai Elantra, Nissan Sentra and Toyota', 'peshawar', '03151207603'),
(18, 'pic/pexels-mike-100653.jpg', '2022 Model Car', '300000', '2022', 'The famed British exotic sports-car maker Aston Martin is building a full-electric version of the gorgeous and capable Rapide coupe. It comes wrapped in aluminum and carbon fiber body panels, and pack', 'peshawar', '03151207603');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `vehicle` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `city`, `name`, `vehicle`) VALUES
(1, 'PHP', 'Android', 'amir'),
(9, 'PHP', 'PHP', 'jjj'),
(8, 'PHP', 'PHP', 'izaz'),
(7, 'Android', 'Android', 'amir'),
(10, 'Honda civic', 'Peshaware', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `router`
--

CREATE TABLE `router` (
  `router_id` int(11) NOT NULL,
  `from_area_id` int(11) DEFAULT NULL,
  `to_area_id` int(11) DEFAULT NULL,
  `fess` varchar(100) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `router`
--

INSERT INTO `router` (`router_id`, `from_area_id`, `to_area_id`, `fess`, `type_id`) VALUES
(14, 9, 8, '100', 12);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `title`, `des`) VALUES
(4, 'pic/slider-1.jpg', 'WE ONLY HAVE WHAT WE GIVE', 'We believe that we can make a difference in these children\'s life. Help Us'),
(5, 'pic/slider-3.jpg', 'WE ONLY HAVE WHAT WE GIVE', 'We believe that we can make a difference in these children\'s life. Help Us');

-- --------------------------------------------------------

--
-- Table structure for table `sponser`
--

CREATE TABLE `sponser` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponser`
--

INSERT INTO `sponser` (`id`, `image`, `title`, `des`, `price`) VALUES
(5, 'pic/image_04.jpg', 'Child Education in Africa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', 'Raised : $34,425 / $500,000'),
(11, 'pic/image_05.jpg', 'Child Education in Africa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', 'Raised : $34,425 / $500,000'),
(12, 'pic/image_06.jpg', 'Child Education in Africa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', 'Raised : $34,425 / $500,000');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type` int(11) NOT NULL,
  `type_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type`, `type_name`) VALUES
(12, 'PER DAY');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`) VALUES
(1, 'admin', '123'),
(2, 'izaz', 'khan');

-- --------------------------------------------------------

--
-- Table structure for table `vehical`
--

CREATE TABLE `vehical` (
  `vehical` int(11) NOT NULL,
  `vehical_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehical`
--

INSERT INTO `vehical` (`vehical`, `vehical_name`) VALUES
(6, 'Alto'),
(7, 'Honda City');

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`id`, `image`, `title`, `des`) VALUES
(2, 'pic/vision.jpg', 'Our Vision', '          Ut ultricies lacus a rutrum mollis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed porta dolor quis felis pulvinar dignissim. Etiam nisl ligula, ullamcorper non metus vitae, maximus efficitur mi. Vivamus ut ex ullamcorper, scelerisque lacus nec, commodo dui. Proin massa urna, volutpat vel augue eget, iaculis tristique dui.\r\n      ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mach`
--
ALTER TABLE `mach`
  ADD PRIMARY KEY (`mac_id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `router`
--
ALTER TABLE `router`
  ADD PRIMARY KEY (`router_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponser`
--
ALTER TABLE `sponser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehical`
--
ALTER TABLE `vehical`
  ADD PRIMARY KEY (`vehical`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mach`
--
ALTER TABLE `mach`
  MODIFY `mac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `router`
--
ALTER TABLE `router`
  MODIFY `router_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sponser`
--
ALTER TABLE `sponser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehical`
--
ALTER TABLE `vehical`
  MODIFY `vehical` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
