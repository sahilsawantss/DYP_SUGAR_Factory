-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2023 at 12:18 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dyp_sugar_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `firstname`, `lastname`, `password`, `contact`, `datetime`) VALUES
(1, 'Mayuri', 'Kshirsagar', '456', '9503292750', '2021-10-10 12:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `awards_events`
--

CREATE TABLE `awards_events` (
  `id` int(100) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards_events`
--

INSERT INTO `awards_events` (`id`, `name`, `description`, `image`, `datetime`) VALUES
(2, 'उत्कृष्ठ तांत्रिककार्यक्षमता पुरस्कार सन २०१०-२०११', 'आमच्या साखर कारखान्याचे आधार स्तंभ व बिहार राज्याचे माजी राज्यपाल मा . पद्मश्री डॉ . डी . वाय . पाटील साहेब यांचे सातत्याने मौलिकविचार आणि त्यांचे आदर्शतत्वे मार्गदर्शन नेहमीच दृष्टीक्षेपात ठेवून कारखान्याने अत्यंत प्रतिकूल परिस्थितीला सामोरे जावून प्रगतशील कामे यशस्वीरीत्या पार पाडण्याचा नेहमीच प्रयत्न केला आहे. ', 'award.png', '2022-04-16 19:05:16'),
(3, 'उत्कृष्ठ आर्थिक व्यवस्थापन ( कै . कर्मयोगी शंकररावजी पाटील पुरस्कार ) सन २०१६-२०१७', 'आमच्या साखर कारखान्याचे आधार स्तंभ व बिहार राज्याचे माजी राज्यपाल मा . पद्मश्री डॉ . डी . वाय . पाटील साहेब यांचे सातत्याने मौलिकविचार आणि त्यांचे आदर्शतत्वे मार्गदर्शन नेहमीच दृष्टीक्षेपात ठेवून कारखान्याने अत्यंत प्रतिकूल परिस्थितीला सामोरे जावून प्रगतशील कामे यशस्वीरीत्या पार पाडण्याचा नेहमीच प्रयत्न केला आहे. ', 'award1.png', '2022-04-16 19:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(100) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `description`, `image`, `datetime`) VALUES
(1, 'Career1', 'Lorem Ipsum is simply dummy text', '1.jpg', '2021-10-18 15:29:53'),
(2, 'Career2', 'Lorem Ipsum is simply dummy text', '11.jpg', '2021-10-18 15:30:51'),
(3, 'Career3', 'Lorem Ipsum is simply dummy text', '12.jpg', '2021-10-18 15:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(100) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `pdf_upload` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `title`, `description`, `start_date`, `end_date`, `pdf_upload`, `datetime`) VALUES
(1, 'Certificate1', 'Lorem Ipsum is simply dummy text', '2021-10-18', '2021-10-25', '01-15-2020-12_54.46', '2021-10-18 15:27:18'),
(2, 'certicatce 2', 'Lorem Ipsum is simply dummy text', '2021-10-18', '2021-10-28', 'Appointment_slip(2)1.pdf', '2021-10-18 15:28:03'),
(3, 'Certificate3', 'Lorem Ipsum is simply dummy text', '2021-10-12', '2021-10-19', 'Appointment_slip(1).pdf', '2021-10-18 15:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `department_category`
--

CREATE TABLE `department_category` (
  `id` int(100) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_category`
--

INSERT INTO `department_category` (`id`, `title`, `description`, `image`, `datetime`) VALUES
(1, 'Agriculture', 'Lorem Ipsum is simply dummy text ', 'kites.jpg', '2021-10-18 15:19:14'),
(2, 'Engineering', 'Lorem Ipsum is simply dummy text.', '', '2021-10-18 15:18:58'),
(3, 'Manufacturing', 'Lorem Ipsum is simply dummy text.', '', '2021-10-18 15:19:57'),
(4, 'Water Treatment Plants', 'Lorem Ipsum is simply dummy text', '', '2021-10-18 15:20:18'),
(5, 'IT (Information Technology)', 'Lorem Ipsum is simply dummy text.', '', '2021-10-18 15:20:54'),
(6, 'Other', 'Lorem Ipsum is simply dummy text', '', '2021-10-18 15:21:10'),
(7, 'Distillery', 'Lorem Ipsum is simply dummy text.', '', '2021-10-18 15:21:29'),
(8, 'Trading Division', 'Lorem Ipsum is simply dummy text', '', '2021-10-18 15:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `department_information`
--

CREATE TABLE `department_information` (
  `id` int(100) NOT NULL,
  `category_id` int(100) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_information`
--

INSERT INTO `department_information` (`id`, `category_id`, `title`, `description`, `image`, `datetime`) VALUES
(3, 1, 'Agricultural information', 'Lorem Ipsum is simply dummy text of the printing', '', '2021-10-18 16:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `director_board`
--

CREATE TABLE `director_board` (
  `id` int(100) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `post` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director_board`
--

INSERT INTO `director_board` (`id`, `name`, `post`, `description`, `status`, `image`, `datetime`) VALUES
(1, 'श्री.सतेज उर्फ बंटी डी. पाटील', 'चेअरमन ', 'रा. सैतवडे,ता. गगनबावडा, जज.कोल्हापूर', '1', '41.png', '2022-04-07 09:02:06'),
(2, ' श्री. संजय ज्ञानदेव पाटील', 'संचालक ', 'रा. सैतवडे,ता. गगनबावडा, कोल्हापूर', '1', 'text_on_image(2).png', '2022-04-07 09:02:58'),
(5, 'श्री. मानसिंग उदयसिंग पाटील', 'संचालक ', 'रा. असळज, ता.गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:34:41'),
(6, 'श्री. दतात्राय बाळासो पाटणकर', 'संचालक ', 'रा. वेसरर्, ता.गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:09:57'),
(7, 'श्री. खंडेराव भाऊसो घाटगे', 'संचालक ', 'रा. कोदेखु//, ता.गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:10:31'),
(8, 'श्री. चंद्रकांत भाऊसो खानववलकर', 'संचालक ', 'रा. मागेवाडी, ता. गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:11:06'),
(9, 'श्री. बंडोपंत ज्ञानदेव कोटकर', 'संचालक ', 'रा. साखरी, ता.गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:11:39'),
(10, 'श्री. रवींद्र श्रीपती पाटील', 'संचालक ', 'रा. परखंदळे, ता.पन्हाळा, कोल्हापूर', '1', '', '2022-04-07 09:12:34'),
(11, 'श्री. जयसिंग हिंदुराव ठाणेकर', 'संचालक ', 'रा. वपयाळी, ता.कणकवली, जज. सिंधुदुर्ग ', '1', '', '2022-04-07 09:14:14'),
(12, 'श्री. गुलाबराव शांताराम चव्हाण', 'संचालक ', 'रा. कोकीसरे, ता.वैभववाडी, सिंधुदुर्ग ', '1', '', '2022-04-07 09:20:19'),
(13, 'श्री. प्रभाकर ववठोबा तावडे', 'संचालक ', 'रा. कुंभवाडी  ता.वैभववाडी, सिंधुदुर्ग', '1', '', '2022-04-07 09:21:46'),
(14, 'श्री. बजरंग ज्ञानदेव पाटील', 'संचालक ', 'रा. अणदरू, ता.गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:23:48'),
(15, 'श्री. रामचंद्र लहूपाटील', 'संचालक ', 'रा. लोंघे, ता. गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:24:14'),
(16, 'श्री. धैर्यशील भीमराव  घाटगे', 'संचालक ', 'रा. कोदे खुदफ, ता. गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:25:20'),
(17, 'श्री. महादेव केशव पडवळ', 'संचालक ', 'रा. मांडूकली, ता.गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:25:48'),
(18, 'श्री. संजय अण्णासाहेब पडवळ', 'संचालक ', 'रा. मांडूकली, ता.गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:26:20'),
(19, 'श्री. सहदेव कृष्णा कांबळे', 'संचालक ', 'रा. कोदे खुर्द , ता.गगनबावडा,कोल्हापूर ', '1', '', '2022-04-07 09:27:10'),
(20, 'श्री. अभय रामचंद्र बोभाटे', 'संचालक ', 'रा. गगनबावडा, ता. गगनबावडा, कोल्हापूर ', '1', '', '2022-04-07 09:27:36'),
(21, 'श्री. तानाजी रामचंद्र लांडगे', 'संचालक ', 'रा. बावेली, ता.गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:27:56'),
(22, 'सौ. वैजयंती मोहन पाटील', 'संचालीका ', 'रा. सैतवडे, ता. गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:28:29'),
(23, 'सौ. वनिता उदय देसाई', 'संचालीका ', 'रा. गारीवडे, ता. गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:31:12'),
(24, 'श्री जयदीप  सुरेश पाटील', 'कार्यकारी संचालक', 'रा. असळज, ता.गगनबावडा, कोल्हापूर', '1', '', '2022-04-07 09:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `financial_performance`
--

CREATE TABLE `financial_performance` (
  `id` int(100) NOT NULL,
  `year` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `net_revenue` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `expences` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `EBICD` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `interest_Determination` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `provision_of_tax` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `networth` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ERP` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cane_price` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_performance`
--

INSERT INTO `financial_performance` (`id`, `year`, `net_revenue`, `expences`, `EBICD`, `interest_Determination`, `provision_of_tax`, `networth`, `ERP`, `cane_price`, `datetime`) VALUES
(1, NULL, '3', '3', '3', '3', '3', '3', '3', '3', '2021-10-18 08:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `major_achievement`
--

CREATE TABLE `major_achievement` (
  `id` int(100) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `major_achievement`
--

INSERT INTO `major_achievement` (`id`, `title`, `description`, `datetime`) VALUES
(1, 'उत्कृष्ठ तांत्रिककार्यक्षमता पुरस्कार सन २०१०-२०११', 'आमच्या साखर कारखान्याचे आधार स्तंभ व बिहार राज्याचे माजी राज्यपाल मा . पद्मश्री डॉ . डी . वाय . पाटील साहेब यांचे सातत्याने मौलिकविचार आणि त्यांचे आदर्शतत्वे मार्गदर्शन नेहमीच दृष्टीक्षेपात ठेवून कारखान्याने अत्यंत प्रतिकूल परिस्थितीला सामोरे जावून प्रगतशील कामे यशस्वीरीत्या पार पाडण्याचा नेहमीच प्रयत्न केला आहे. आमचा साखरकारखाना हा कोल्हापूर जिल्ह्यातील गगनबावडा तालुक्यातील डोंगराळ व अतिप्रजन्यमान भागातील कारखाना म्हणून ओळखला जातो . अनेक अडचणीना सामोरे जावून आम्ही प्रति वर्षी यशस्वी ऊस गाळप केले आहे . कारखान्याचा चाचणी गळीत हंगाम शुभारंभ दि .१० मार्च २००३ रोजी महाराष्ट्र राज्याचेतत्कालीन मुख्यमंत्री सन्मानीय सुशिलकुमार शिंदे यांचे शुभहस्ते झाला होता . आज अखेर एकूण १८ गळीत हंगाम यशस्वी रित्या पूर्ण झालेले आहेत . कारखाना कार्यक्षेत्रामधील ऊस उत्पादक शेतकरी हा केंद्रबिंदु मानुन त्यांचे जीवनमान सुधारणेस कारखान्याच्या माध्यमातून शेतकऱ्यांना विविध पातळीवर मदत देण्याचे काम केले जाते . कारखाना कार्य क्षेत्रातील भौगोलिक परिस्थितीचा विचार करून शेतकऱ्यांचे प्रति एकरी ऊस उत्पादन वाढविणेसाठी शेती ऊस विकास विभाग मार्फत अंमलबजावणी चालू असून वेगवेगळे प्रयोग , नवीन ऊस जाती , जैविकखते , सूक्ष्म अन्नद्रव्ये खते , रासायनिक खते , ऊस रोपे यांच्या माध्यमातून शेतकरी बंधू लाभ घेत आहेत . कारखान्यास ऊस पुरवठा केलेल्या ऊस उत्पादक शेतकऱ्यांना एफ . आर . पी . प्रमाणे किंबहुना त्यापेक्षा ज्यादा दराने मोबदला दरवर्षी देणेत आला आहे . त्यामुळे शेतकऱ्यांच्या विश्वासास पात्र राहिलेला एक साखरकारखाना म्हणून ओळख निर्माण झालेली आहे .', '2022-04-16 18:07:07'),
(2, 'उत्कृष्ठ आर्थिक व्यवस्थापन ( कै . कर्मयोगी शंकररावजी पाटील पुरस्कार ) सन २०१६-२०१७', 'आमच्या साखर कारखान्याचे आधार स्तंभ व बिहार राज्याचे माजी राज्यपाल मा . पद्मश्री डॉ . डी . वाय . पाटील साहेब यांचे सातत्याने मौलिकविचार आणि त्यांचे आदर्शतत्वे मार्गदर्शन नेहमीच दृष्टीक्षेपात ठेवून कारखान्याने अत्यंत प्रतिकूल परिस्थितीला सामोरे जावून प्रगतशील कामे यशस्वीरीत्या पार पाडण्याचा नेहमीच प्रयत्न केला आहे. आमचा साखरकारखाना हा कोल्हापूर जिल्ह्यातील गगनबावडा तालुक्यातील डोंगराळ व अतिप्रजन्यमान भागातील कारखाना म्हणून ओळखला जातो . अनेक अडचणीना सामोरे जावून आम्ही प्रति वर्षी यशस्वी ऊस गाळप केले आहे . कारखान्याचा चाचणी गळीत हंगाम शुभारंभ दि .१० मार्च २००३ रोजी महाराष्ट्र राज्याचेतत्कालीन मुख्यमंत्री सन्मानीय सुशिलकुमार शिंदे यांचे शुभहस्ते झाला होता . आज अखेर एकूण १८ गळीत हंगाम यशस्वी रित्या पूर्ण झालेले आहेत . कारखाना कार्यक्षेत्रामधील ऊस उत्पादक शेतकरी हा केंद्रबिंदु मानुन त्यांचे जीवनमान सुधारणेस कारखान्याच्या माध्यमातून शेतकऱ्यांना विविध पातळीवर मदत देण्याचे काम केले जाते . कारखाना कार्य क्षेत्रातील भौगोलिक परिस्थितीचा विचार करून शेतकऱ्यांचे प्रति एकरी ऊस उत्पादन वाढविणेसाठी शेती ऊस विकास विभाग मार्फत अंमलबजावणी चालू असून वेगवेगळे प्रयोग , नवीन ऊस जाती , जैविकखते , सूक्ष्म अन्नद्रव्ये खते , रासायनिक खते , ऊस रोपे यांच्या माध्यमातून शेतकरी बंधू लाभ घेत आहेत . कारखान्यास ऊस पुरवठा केलेल्या ऊस उत्पादक शेतकऱ्यांना एफ . आर . पी . प्रमाणे किंबहुना त्यापेक्षा ज्यादा दराने मोबदला दरवर्षी देणेत आला आहे . त्यामुळे शेतकऱ्यांच्या विश्वासास पात्र राहिलेला एक साखरकारखाना म्हणून ओळख निर्माण झालेली आहे .', '2022-04-16 18:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallary`
--

CREATE TABLE `photo_gallary` (
  `id` int(100) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_gallary`
--

INSERT INTO `photo_gallary` (`id`, `title`, `image`, `datetime`) VALUES
(2, 'Ruturaj', 'D__Y__Patil_Sugar_Factory.JPG', '2022-04-07 08:21:11'),
(3, 'Ruturaj', 'Cooling_Tower.JPG', '2022-04-07 08:21:31'),
(4, 'Ruturaj', 'Esp.JPG', '2022-04-07 08:23:06'),
(6, 'Ruturaj', 'Turbine.JPG', '2022-04-07 08:23:36'),
(7, 'Ruturaj', 'Boiler.JPG', '2022-04-07 08:23:50'),
(8, 'Ruturaj', 'Control_Room.JPG', '2022-04-07 08:32:13'),
(9, 'Ruturaj', 'Conveyor.JPG', '2022-04-07 08:32:23'),
(10, 'Ruturaj', 'Transforma_Yard.JPG', '2022-04-07 08:32:48'),
(11, 'Ruturaj', 'Turbine_Alternater.JPG', '2022-04-07 08:33:00'),
(12, 'Ruturaj', 'Transforma_Yard1.JPG', '2022-04-07 08:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `social_activity`
--

CREATE TABLE `social_activity` (
  `id` int(100) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_activity`
--

INSERT INTO `social_activity` (`id`, `name`, `description`, `image`, `datetime`) VALUES
(1, 'साखरकारखान्यांमार्फत  कारखाना कार्यक्षेत्रातील काही गांवाना उन्हाळ्यामध्ये नदीला पाणी कमी होते वेळी ११ बंधारेसाठी रुपये २०००० /- प्रति बंधारा मदत केली जाते . ', 'साखरकारखान्यांमार्फत  कारखाना कार्यक्षेत्रातील काही गांवाना उन्हाळ्यामध्ये नदीला पाणी कमी होते वेळी ११ बंधारेसाठी रुपये २०००० /- प्रति बंधारा मदत केली जाते . ', '', '2022-04-16 18:34:34'),
(2, 'पर्यावरण संतुलनासाठी कारखाना परिसरामध्ये प्रति वर्षी ३००० ते ४००० वनझाडे लावून त्याचे संवर्धन केले जाते. ', 'पर्यावरण संतुलनासाठी कारखाना परिसरामध्ये प्रति वर्षी ३००० ते ४००० वनझाडे लावून त्याचे संवर्धन केले जाते. ', '', '2022-04-16 18:37:15'),
(3, 'कारखाना कार्यक्षेत्रातील पुरबाधितांना कारखान्या मार्फत मदत म्हणून धान्य पुरवठा केला जातो .', 'कारखाना कार्यक्षेत्रातील पुरबाधितांना कारखान्या मार्फत मदत म्हणून धान्य पुरवठा केला जातो .कारखाना कार्यक्षेत्रातील पुरबाधितांना कारखान्या मार्फत मदत म्हणून धान्य पुरवठा केला जातो .', '', '2022-04-16 18:37:30'),
(4, 'पाणंदी लेव्हलिंग, रस्ते दुरुस्ती , मुरुमीकरण इ . कामे कारखान्यांमार्फत केली जातात . ', 'पाणंदी लेव्हलिंग, रस्ते दुरुस्ती , मुरुमीकरण इ . कामे कारखान्यांमार्फत केली जातात . पाणंदी लेव्हलिंग, रस्ते दुरुस्ती , मुरुमीकरण इ . कामे कारखान्यांमार्फत केली जातात . ', '', '2022-04-16 18:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(100) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pdf_file` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tendar`
--

CREATE TABLE `tendar` (
  `id` int(100) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `pdf_upload` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tendar`
--

INSERT INTO `tendar` (`id`, `title`, `description`, `start_date`, `end_date`, `pdf_upload`, `datetime`) VALUES
(2, 'Tender1', 'Lorem Ipsum is simply dummy text.', '2021-10-13', '2021-10-29', '', '2021-10-18 15:44:38'),
(4, 'Tender2', 'Lorem Ipsum is simply dummy text.', '2021-10-08', '2021-10-19', 'Appointment_slip(2).pdf', '2021-10-18 15:46:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards_events`
--
ALTER TABLE `awards_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_category`
--
ALTER TABLE `department_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_information`
--
ALTER TABLE `department_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director_board`
--
ALTER TABLE `director_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_performance`
--
ALTER TABLE `financial_performance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `major_achievement`
--
ALTER TABLE `major_achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallary`
--
ALTER TABLE `photo_gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_activity`
--
ALTER TABLE `social_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tendar`
--
ALTER TABLE `tendar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards_events`
--
ALTER TABLE `awards_events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department_category`
--
ALTER TABLE `department_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department_information`
--
ALTER TABLE `department_information`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `director_board`
--
ALTER TABLE `director_board`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `financial_performance`
--
ALTER TABLE `financial_performance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `major_achievement`
--
ALTER TABLE `major_achievement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo_gallary`
--
ALTER TABLE `photo_gallary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `social_activity`
--
ALTER TABLE `social_activity`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tendar`
--
ALTER TABLE `tendar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
