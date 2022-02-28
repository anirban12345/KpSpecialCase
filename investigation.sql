-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 06:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investigation`
--

-- --------------------------------------------------------

--
-- Table structure for table `accused`
--

CREATE TABLE `accused` (
  `a_id` int(11) NOT NULL,
  `a_cid` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_fathersname` varchar(255) NOT NULL,
  `a_address` text NOT NULL,
  `a_datetime` datetime NOT NULL,
  `a_flag` int(11) NOT NULL,
  `a_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accused`
--

INSERT INTO `accused` (`a_id`, `a_cid`, `a_name`, `a_fathersname`, `a_address`, `a_datetime`, `a_flag`, `a_userid`) VALUES
(6, 2, 'aa', 'bb', 'cc', '2020-08-04 11:00:00', 1, 1),
(7, 2, 'dd', 'ee', 'ff', '2020-08-04 11:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `arrested`
--

CREATE TABLE `arrested` (
  `a_id` int(11) NOT NULL,
  `a_cid` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_fathersname` varchar(255) NOT NULL,
  `a_address` text NOT NULL,
  `a_date` date NOT NULL,
  `a_time` time NOT NULL,
  `a_status` varchar(255) NOT NULL,
  `a_datetime` datetime NOT NULL,
  `a_flag` int(11) NOT NULL,
  `a_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrested`
--

INSERT INTO `arrested` (`a_id`, `a_cid`, `a_name`, `a_fathersname`, `a_address`, `a_date`, `a_time`, `a_status`, `a_datetime`, `a_flag`, `a_userid`) VALUES
(9, 2, 'aa', 'bb', 'cc', '2020-08-03', '15:00:00', 'PC', '2020-08-04 11:40:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `c_id` int(11) NOT NULL,
  `c_date` date NOT NULL,
  `c_ps` int(11) NOT NULL,
  `c_caseref` varchar(255) NOT NULL,
  `c_undersection` varchar(255) NOT NULL,
  `c_brieffact` text NOT NULL,
  `c_complainant` varchar(255) NOT NULL,
  `c_complainant_mobileno` varchar(255) NOT NULL,
  `c_datetime` datetime DEFAULT NULL,
  `c_flag` int(11) DEFAULT NULL,
  `c_userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`c_id`, `c_date`, `c_ps`, `c_caseref`, `c_undersection`, `c_brieffact`, `c_complainant`, `c_complainant_mobileno`, `c_datetime`, `c_flag`, `c_userid`) VALUES
(2, '2020-08-02', 1, '72', '302,304', 'Brief FactBrief FactBrief FactBrief FactBrief FactBrief FactBrief FactBrief FactBrief FactBrief FactBrief FactBrief Fact', 'Vishal Yadav of 6, Garanhata Road, Kol-6', '9988774455', '2020-08-03 13:39:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crpc_41a`
--

CREATE TABLE `crpc_41a` (
  `n41A_id` int(11) NOT NULL,
  `n41A_cid` int(11) NOT NULL,
  `n41A_date` date NOT NULL,
  `n41A_name` varchar(255) NOT NULL,
  `n41A_address` text NOT NULL,
  `n41A_datetime` datetime NOT NULL,
  `n41A_flag` int(11) NOT NULL,
  `n41A_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crpc_41a`
--

INSERT INTO `crpc_41a` (`n41A_id`, `n41A_cid`, `n41A_date`, `n41A_name`, `n41A_address`, `n41A_datetime`, `n41A_flag`, `n41A_userid`) VALUES
(1, 2, '2020-08-04', 'a', 'b', '2020-08-04 12:28:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crpc_160`
--

CREATE TABLE `crpc_160` (
  `n160_id` int(11) NOT NULL,
  `n160_cid` int(11) NOT NULL,
  `n160_date` date NOT NULL,
  `n160_name` varchar(255) NOT NULL,
  `n160_address` text NOT NULL,
  `n160_datetime` datetime NOT NULL,
  `n160_flag` int(11) NOT NULL,
  `n160_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crpc_160`
--

INSERT INTO `crpc_160` (`n160_id`, `n160_cid`, `n160_date`, `n160_name`, `n160_address`, `n160_datetime`, `n160_flag`, `n160_userid`) VALUES
(6, 2, '2020-08-01', 'n160 abcd', 'n160 pqrs', '2020-08-05 10:41:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crpc_161`
--

CREATE TABLE `crpc_161` (
  `n161_id` int(11) NOT NULL,
  `n161_cid` int(11) NOT NULL,
  `n161_date` date NOT NULL,
  `n161_name` varchar(255) NOT NULL,
  `n161_address` text NOT NULL,
  `n161_datetime` datetime NOT NULL,
  `n161_flag` int(11) NOT NULL,
  `n161_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crpc_161`
--

INSERT INTO `crpc_161` (`n161_id`, `n161_cid`, `n161_date`, `n161_name`, `n161_address`, `n161_datetime`, `n161_flag`, `n161_userid`) VALUES
(1, 2, '2020-08-05', 'qq', 'ww', '2020-08-05 10:39:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crpc_164`
--

CREATE TABLE `crpc_164` (
  `n164_id` int(11) NOT NULL,
  `n164_cid` int(11) NOT NULL,
  `n164_date` date NOT NULL,
  `n164_name` varchar(255) NOT NULL,
  `n164_address` text NOT NULL,
  `n164_datetime` datetime NOT NULL,
  `n164_flag` int(11) NOT NULL,
  `n164_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `divisons`
--

CREATE TABLE `divisons` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_address` text NOT NULL,
  `d_emailid` varchar(255) NOT NULL,
  `d_phoneno` varchar(255) NOT NULL,
  `d_datetime` datetime NOT NULL,
  `d_flag` int(11) NOT NULL,
  `d_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisons`
--

INSERT INTO `divisons` (`d_id`, `d_name`, `d_address`, `d_emailid`, `d_phoneno`, `d_datetime`, `d_flag`, `d_userid`) VALUES
(1, 'North and North Suburban Division', '113, A. P. C Roy Road, Kolkata-700009.', '', '2360-5650', '0000-00-00 00:00:00', 0, 0),
(2, 'Central Division', '138, S N Banerjee Road, Kolkata - 700 013.', '', '2228-1403/5210', '0000-00-00 00:00:00', 0, 0),
(3, 'Eastern Suburban Division', '105, Hem Chadra Naskar Road, Kolkata-700010', '', '2374-5645', '0000-00-00 00:00:00', 0, 0),
(4, 'South Division', '34, Park Street, Kolkata-700016.', '', '2281-4000', '0000-00-00 00:00:00', 0, 0),
(5, 'Port Division', '1, Dumayune Avenue, Kolkata-700043', '', '2439-7174', '0000-00-00 00:00:00', 0, 0),
(6, 'South East Division', 'Park Court, 2, Syed Amir Ali Avenue, Kolkata - 700017', '', '2290-4660', '0000-00-00 00:00:00', 0, 0),
(7, 'South Suburban Division', 'Tollygunge EF Lines, 255/257, D P S Road, Kolkata - 700033', '', '2499-4711', '0000-00-00 00:00:00', 0, 0),
(8, 'South West Division', 'Tollygunge EF Lines, 555/557, D P S Road, Kolkata - 700033', '', '2499-4702', '0000-00-00 00:00:00', 0, 0),
(9, 'East Division', '512, Hossenpur, Kolkata - 700107', '', '2443-3031', '0000-00-00 00:00:00', 0, 0),
(10, 'Head Quarter', '18,Lalazar Street Kolkata- 700001', '', '', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exhibit_to_lab`
--

CREATE TABLE `exhibit_to_lab` (
  `el_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `final_report`
--

CREATE TABLE `final_report` (
  `fr_id` int(11) NOT NULL,
  `fr_cid` int(11) NOT NULL,
  `fr_type` varchar(255) NOT NULL,
  `fr_date` date NOT NULL,
  `fr_desc` text NOT NULL,
  `fr_datetime` datetime NOT NULL,
  `fr_flag` int(11) NOT NULL,
  `fr_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ie_27`
--

CREATE TABLE `ie_27` (
  `n164_id` int(11) NOT NULL,
  `n164_cid` int(11) NOT NULL,
  `n164_date` date NOT NULL,
  `n164_name` varchar(255) NOT NULL,
  `n164_address` text NOT NULL,
  `n164_datetime` datetime NOT NULL,
  `n164_flag` int(11) NOT NULL,
  `n164_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ie_32`
--

CREATE TABLE `ie_32` (
  `n164_id` int(11) NOT NULL,
  `n164_cid` int(11) NOT NULL,
  `n164_date` date NOT NULL,
  `n164_name` varchar(255) NOT NULL,
  `n164_address` text NOT NULL,
  `n164_datetime` datetime NOT NULL,
  `n164_flag` int(11) NOT NULL,
  `n164_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_exam`
--

CREATE TABLE `medical_exam` (
  `me_id` int(11) NOT NULL,
  `me_cid` int(11) NOT NULL,
  `me_desc` text NOT NULL,
  `me_datetime` datetime NOT NULL,
  `me_flag` int(11) NOT NULL,
  `me_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `next_course_proposed`
--

CREATE TABLE `next_course_proposed` (
  `ncp_id` int(11) NOT NULL,
  `ncp_cid` int(11) NOT NULL,
  `ncp_details` int(11) NOT NULL,
  `ncp_datetime` datetime NOT NULL,
  `ncp_flag` int(11) NOT NULL,
  `ncp_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pm_report`
--

CREATE TABLE `pm_report` (
  `pr_id` int(11) NOT NULL,
  `pr_cid` int(11) NOT NULL,
  `pr_date` date NOT NULL,
  `pr_doc_name` varchar(255) NOT NULL,
  `pr_dtls` text NOT NULL,
  `pr_flag` int(11) NOT NULL,
  `pr_datetime` datetime NOT NULL,
  `pr_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po_visit_details`
--

CREATE TABLE `po_visit_details` (
  `pvd_id` int(11) NOT NULL,
  `pvd_cid` int(11) NOT NULL,
  `pvd_desc` text NOT NULL,
  `pvd_datetime` datetime NOT NULL,
  `pvd_flag` int(11) NOT NULL,
  `pvd_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pstation`
--

CREATE TABLE `pstation` (
  `ps_id` int(11) NOT NULL,
  `ps_d_id` int(11) NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `ps_address` text NOT NULL,
  `ps_emailid` varchar(255) NOT NULL,
  `ps_phoneno` varchar(255) NOT NULL,
  `ps_datetime` datetime NOT NULL,
  `ps_flag` int(11) NOT NULL,
  `ps_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pstation`
--

INSERT INTO `pstation` (`ps_id`, `ps_d_id`, `ps_name`, `ps_address`, `ps_emailid`, `ps_phoneno`, `ps_datetime`, `ps_flag`, `ps_userid`) VALUES
(1, 6, 'Topsia Police Station', '106A, New Park Street, Kolkata-700017', 'topsiaps@kolkatapolice.gov.in', '2281-4268/2280-4100/2289-3682', '0000-00-00 00:00:00', 0, 0),
(2, 6, 'Beniapukur Police Station', '48A, Gorachand Road, Kolkata-700014', 'beniapukurps@kolkatapolice.gov.in', '2284-4770 /2284-0100/2286-5999', '0000-00-00 00:00:00', 0, 0),
(3, 6, 'Ballygunge Police Station', '38/1, Beltola Road, Kolkata-700020', 'ballygungeps@kolkatapolice.gov.in', '2454-3179 /2454-2100/2475-5931', '0000-00-00 00:00:00', 0, 0),
(4, 6, 'Gariahat Police Station', '	2 Dover Lane, Kolkata - 700029', 'gariahat@kolkatapolice.gov.in', '2486-3702/2486-3703/ 2461-3667', '0000-00-00 00:00:00', 0, 0),
(5, 6, 'Lake Police Station', '18, Gariahat Road South, Kolkata-700068', 'lake@kolkatapolice.gov.in', '2429-2353/2409-7100/2429-6294', '0000-00-00 00:00:00', 0, 0),
(6, 6, 'Karaya Police Station', '52, Karaya Road, Kolkata-700019', 'karaya@kolkatapolice.gov.in', '2287-1715/2281-1100/2289-3825', '0000-00-00 00:00:00', 0, 0),
(7, 6, 'Karaya Women Police Station', '52, Karaya Road, Kol - 700019', 'karaywomen@kolkatapolice.gov.in', '2287-0072', '0000-00-00 00:00:00', 0, 0),
(8, 6, 'Rabindra Sarobar Police Station', '', 'rabindrasarobar@kolkatapolice.gov.in', '2463-0030 / 31 / 32', '0000-00-00 00:00:00', 0, 0),
(9, 6, 'Tiljala Police Station', 'C N Roy Road, Kolkata - 700039', 'tiljala@kolkatapolice.gov.in', '2343-4693 / 2345-2827', '0000-00-00 00:00:00', 0, 0),
(10, 1, 'Shyampukur Police Station', '47, Shyampukur Street, Kolkata-700004', 'shyampukurps@kolkatapolice.gov.in', '2555-7585/2533-2100 /2533-5606', '0000-00-00 00:00:00', 0, 0),
(11, 1, 'Jorabagan Police Station', '78, Nimtala Ghat Street, Kolkata-700006', 'jorabagan@kolkatapolice.gov.in', '2218-4094/2270-0100 /2270-0428', '0000-00-00 00:00:00', 0, 0),
(12, 1, 'Burtolla Police Station', '1, Raja Raj Krishna Street, Kolkata-700006', 'burtollaps@kolkatapolice.gov.in', '2555-7599/2533-6100/2533-5579', '0000-00-00 00:00:00', 0, 0),
(13, 1, 'Amherst Street Police Station', '57, Raja Ram Mohan Sarani, Kolkata-700009', 'amherststreet@kolkatapolice.gov.in', '2350-6670/2360-5714 /2360-5100', '0000-00-00 00:00:00', 0, 0),
(14, 1, 'Cossipore Police Station', '58/A, B.T Road, Kolkata-700002', 'cossipore@kolkatapolice.gov.in', '2556-6434/2543-2100 /2532-9149', '0000-00-00 00:00:00', 0, 0),
(15, 1, 'Chitpur Police Station	', '19, Cossipore Road, Kolkata-700002', 'chitpur@kolkatapolice.gov.in', '2556-6141/2543-4100 /2532-9086', '0000-00-00 00:00:00', 0, 0),
(16, 1, 'Tala Police Station', '4,Indra Biswas Road,Kolkata-700037', 'tala@kolkatapolice.gov.in', '2530-0850/ 2546-4901/2532-9087', '0000-00-00 00:00:00', 0, 0),
(17, 1, 'Sinthee Police Station', '145/1, South Sinthi Road, Kolkata - 700050', 'sinthee@kolkatapolice.gov.in', '2532-5383/2530-0853 /2532-9072', '0000-00-00 00:00:00', 0, 0),
(18, 1, 'Amherst Street Women Police Station', '57, Raja Ram Mohan Sarani, Kol - 700009', 'amherststreetwomen@kolkatapolice.gov.in', '2360-2222', '0000-00-00 00:00:00', 0, 0),
(19, 2, 'Burrabazar Police Station', '8, Mullick Street, Kolkata-700007', 'burrabazar@kolkatapolice.gov.in', '2268-7554 /2268-0100/2268-3802', '0000-00-00 00:00:00', 0, 0),
(20, 2, 'Posta Police Station', '67/50, Strand Road, Kolkata-700007', 'posta@kolkatapolice.gov.in', '2259-5606/2259-1100/2259-5536', '0000-00-00 00:00:00', 0, 0),
(21, 2, 'Jorasanko Police Station', '16, Bal Mukund Malkar Road, Kolkata-700007', 'jorasanko@kolkatapolice.gov.in', '2269-7279/2218-0100/2268-3076', '0000-00-00 00:00:00', 0, 0),
(22, 2, 'Girish Park Police Station', '138, Ramdulal Sarkar Street, Kolkata-700 006', 'girishpark@kolkatapolice.gov.in', '2219-8041/2219-9100/2257-1177', '0000-00-00 00:00:00', 0, 0),
(23, 2, 'Hare Street Police Station', '42, C.R Avenue, Kolkata-700069', 'harestreet@kolkatapolice.gov.in', '2211-8760/2215-0100/2211-8761', '0000-00-00 00:00:00', 0, 0),
(24, 2, 'Bowbazar Police Station', '13, Kapiltolla Lane, Kolkata-700012', 'bowbazar@kolkatapolice.gov.in', '2211-4813 /2215-5100/2211-4814', '0000-00-00 00:00:00', 0, 0),
(25, 2, 'Muchipara Police Station', '6, Santosh Mitra Squre, Kolkata-700012', 'muchipara@kolkatapolice.gov.in', '2227-8430/2283-7100/2227-6445', '0000-00-00 00:00:00', 0, 0),
(26, 2, 'Taltala Police Station', '4, Taltola Lane, Kolkata-700014', 'taltala@kolkatapolice.gov.in', '2227-7784/ 2284-4100/2227-6491', '0000-00-00 00:00:00', 0, 0),
(27, 2, 'New Market Police Station', '133/2, S. N. Banerjee Road, Kolkata-700 013', 'newmarketps@kolkatapolice.gov.in', '2217-7397/2283-6100/2227-6436', '0000-00-00 00:00:00', 0, 0),
(28, 2, 'Taltala Women Police Station', '4, Taltala Lane, Kol - 700014', 'taltalawomen@kolkatapolice.gov.in', '2283-7575', '0000-00-00 00:00:00', 0, 0),
(29, 3, 'Entally Police Station', '12, Convent Road, Kolkata-700014', 'entally@kolkatapolice.gov.in', '2227-5892/2284-8100/2227-6668', '0000-00-00 00:00:00', 0, 0),
(30, 3, 'Manicktala Police Station', '20, Canal West Road, Kolkata-700006', 'manicktala@kolkatapolice.gov.in', '2360-5681/2360-6100/2360-8126', '0000-00-00 00:00:00', 0, 0),
(31, 3, 'Ultadanga Police Station', 'Block-13, CIT Scheme No. VIII-M, Kolkata-700067', 'ultodanga@kolkatapolice.gov.in', '2356-6263/2356-6264/2356-6444', '0000-00-00 00:00:00', 0, 0),
(32, 3, 'Beliaghata Police Station', 'P-57, CIT Road, Kolkata-700010', 'beliaghata@kolkatapolice.gov.in', '2350-0970 /2363-1100/2363-3358', '0000-00-00 00:00:00', 0, 0),
(33, 3, 'Phoolbagan Police Station', 'P-86, CIT Road Scheme-VIIM, Kolkata-700054', 'phoolbagan@kolkatapolice.gov.in', '2320-0920/2321-5100/2320-0585', '0000-00-00 00:00:00', 0, 0),
(34, 3, 'Narkeldanga Police Station', '6/1, Dr. M.N Chatterjee Sarani, Kolkata-700009', 'narkeldanga@kolkatapolice.gov.in', '2360-5710/2352-0100/2360-8187', '0000-00-00 00:00:00', 0, 0),
(35, 3, 'Tangra Police Station', '15, Gobinda Khatick Road, Kolkata-700015', 'tangra@kolkatapolice.gov.in', '2329-6769/ 2283-1100/2329-7565', '0000-00-00 00:00:00', 0, 0),
(36, 3, 'Ultadanga Women Police Station', 'Block-13,CIT Scheme No. VIII-M, Kol - 700067', 'ultodangawomen@kolkatapolice.gov.in', '2356-2218', '0000-00-00 00:00:00', 0, 0),
(37, 4, 'Park Street Police Station', '89, Park Street, Kolkata-700016', 'parkstreet@kolkatapolice.gov.in', '2226-8321/2283-2100/2227-6437', '0000-00-00 00:00:00', 0, 0),
(38, 4, 'Shakespeare Sarani Police Station', '34A, Shakespeare Sarani, Kolkata-700017', 'shakespearesarani@kolkatapolice.gov.in', '2281-2541/2281-7100/2289-3693', '0000-00-00 00:00:00', 0, 0),
(39, 4, 'Alipore Police Station', '8,Belvedere Road,Kol-27', 'alipore@kolkatapolice.gov.in', '2479-1021/2408-0100/2479-0028', '0000-00-00 00:00:00', 0, 0),
(40, 4, 'Hastings Police Station', '5, Middle Road, Kolkata-700022', 'hastings@kolkatapolice.gov.in', '2223-0716/2243-0100/2223-4548', '0000-00-00 00:00:00', 0, 0),
(41, 4, 'Maidan Police Station', '1/5, A.J.C. Bose Road, Kolkata-700 020', 'maidan@kolkatapolice.gov.in', '2223-2462/2248-0100/2223-4551', '0000-00-00 00:00:00', 0, 0),
(42, 4, 'Tollygunge Women Police Station', '170, S.P. Mukherjee Road, Kol - 700026\r\n', 'tollygunge@kolkatapolice.gov.in', '2464-0003', '0000-00-00 00:00:00', 0, 0),
(43, 4, 'Bhowanipur Police Station', '42, S.P Mukherjee Road, Kolkata-700026', 'bhowanipur@kolkatapolice.gov.in', '2455-8092/2454-1100/2486-2711', '0000-00-00 00:00:00', 0, 0),
(44, 4, 'Kalighat Police Station', '53,Haldar Para Road, Kolkata-700026', 'kalighat@kolkatapolice.gov.in', '2454-0177/2455-0100/2486-2618', '0000-00-00 00:00:00', 0, 0),
(45, 4, 'Tollygunge Police Station', '178A, S.P Mukherjee Road, Kolkata-700026', 'tollygungewomen@kolkatapolice.gov.in', '2464-2765/2465-4100/2463-2803', '0000-00-00 00:00:00', 0, 0),
(46, 4, 'Charu Market Police Station', '28, Deshpran Sasmal Road, Kolkata-700033', 'charumarket@kolkatapolice.gov.in', '2424-9900/2424-5100/2424-5983', '0000-00-00 00:00:00', 0, 0),
(47, 4, 'New Alipore Police Station', '494 and 495,Block-M, New Alipore, Kolkata-700053', 'newalipore@kolkatapolice.gov.in', '2400-2943/2409-5100/2400-8745', '0000-00-00 00:00:00', 0, 0),
(48, 4, 'Chetla Police Station', '19/4 Pitambar Ghatak lane,Kolkata-700027', 'chetla@kolkatapolice.gov.in', '2448-6642/2409-9119/2479-0023', '0000-00-00 00:00:00', 0, 0),
(49, 5, 'North Port Police Station', '67/3, Strand Bank Road, Kolkata-700001', 'northport@kolkatapolice.gov.in', '2243-1183/2243-1100/2231-8361', '0000-00-00 00:00:00', 0, 0),
(50, 5, 'South Port Police Station', '1, Satya Doctor Road, Kolkata-700023', 'southport@kolkatapolice.gov.in', '2459-3226/2409-4100/2459-8818', '0000-00-00 00:00:00', 0, 0),
(51, 5, 'Watgunge Police Station', '16, Watgunge Street, Kolkata-700023', 'watgunge@kolkatapolice.gov.in', '2459-3298/2408-2100/2459-8819', '0000-00-00 00:00:00', 0, 0),
(52, 5, 'West Port Police Station', '72/1, Garden Reach Road, Kolkata-700043', 'westport@kolkatapolice.gov.in', '2439-3617/2409-6100/2439-2454', '0000-00-00 00:00:00', 0, 0),
(53, 5, 'Garden Reach Police Station', '1, Taratola Road, Kolkata-700024', 'gardenreach@kolkatapolice.gov.in', '2469-6569/2408-1100/2489-3272', '0000-00-00 00:00:00', 0, 0),
(54, 5, 'Ekbalpur Police Station', '38B, Ekbalpore Road, Kolkata-700023', 'ekbalpur@kolkatapolice.gov.in', '2449-2135/2409-9100/2449-4167', '0000-00-00 00:00:00', 0, 0),
(55, 5, 'Nadial Police Station', 'Z-3/102, Dr. A K Road, Kolkata - 700044', 'nadial@kolkatapolice.gov.in', '2489-4079 / 2409-9172', '0000-00-00 00:00:00', 0, 0),
(56, 5, 'Rajabagan Police Station', 'T-250, Garden Reach Road, Gandhi Maidan, Kolkata - 700044', 'rajabagan@kolkatapolice.gov.in', '2409-9175 / 9176', '0000-00-00 00:00:00', 0, 0),
(57, 5, 'Metiabruz Police Station', 'R-1, S A Farouki Road, Kolkata - 700024', 'metiabruz@kolkatapolice.gov.in', '2469-5317 / 2409-9179', '0000-00-00 00:00:00', 0, 0),
(58, 5, 'Watgunge Women Police Station', '16, Watgunge Street, Kol - 700023', 'watgungewomen@kolkatapolice.gov.in', '2489-2100', '0000-00-00 00:00:00', 0, 0),
(59, 7, 'Netaji Nagar Police Station', '9, Puratan Bazar, Hari Mohan Primary School, Kolkata-700092', 'netajinagar@kolkatapolice.gov.in', '2421-8056/2421-8057', '0000-00-00 00:00:00', 0, 0),
(60, 7, 'Patuli Women Police Station', 'H-10, Baishnabghata Patuli Township, Kol - 700094', 'patuliwomen@kolkatapolice.gov.in', '2462-0251', '0000-00-00 00:00:00', 0, 0),
(61, 7, 'Jadavpur Police Station', '1, Raja S C Mallick Road, Kolkata - 700032', 'jadavpur@kolkatapolice.gov.in', '2473-0146 / 2499-4580', '0000-00-00 00:00:00', 0, 0),
(62, 7, 'Kasba Police Station', '27A, Bose Pukur Road, Kolkata - 700042', 'kasba@kolkatapolice.gov.in', '2442-0164 / 2441-8500', '0000-00-00 00:00:00', 0, 0),
(63, 7, 'Regent Park Police Station', '45/D/2A, Moore Avenue, Kolkata - 700040', 'regentpark@kolkatapolice.gov.in', '2381-3162 / 2311-0592', '0000-00-00 00:00:00', 0, 0),
(64, 7, 'Bansdroni Police Station', 'Rainagar Health Centre, Madhyapara, Bansdroni, Kolkata - 700070', 'bansdroni@kolkatapolice.gov.in', '2410-1022 / 2311-0595', '0000-00-00 00:00:00', 0, 0),
(65, 7, 'Garfa Police Station', 'Garfa Deaf and Dumb School Premises, Vivekananda Sarani, Doctor Bagan, Kolkata - 700078', 'garfa@kolkatapolice.gov.in', '2418-6949 / 2499-1998', '0000-00-00 00:00:00', 0, 0),
(66, 7, 'Patuli Police Station', 'H-10, Baishnabghata - Patuli Township, PO - Panchasayar, Kolkata - 700094', 'patuli@kolkatapolice.gov.in', '2462-5195 / 4122', '0000-00-00 00:00:00', 0, 0),
(67, 8, 'Sarsuna Police Station', 'Satellite Township 4, Ho Chi Min Sarani, Kolkata-700061', 'sarsuna@kolkatapolice.gov.in', '2452-1630/2452-0130', '0000-00-00 00:00:00', 0, 0),
(68, 8, 'Behala Women Police Station', '131, Diamond Harbour Road, Kol - 700034', 'behalawomen@kolkatapolice.gov.in', '2396-7020', '0000-00-00 00:00:00', 0, 0),
(69, 8, 'Taratala Police Station', '63, Taratala Road, Kolkata - 700088', 'taratala@kolkatapolice.gov.in', '2401-1881/2409-2100/2401-2796', '0000-00-00 00:00:00', 0, 0),
(70, 8, 'Behala Police Station', '131, Diamond Harbour Road, Kolkata - 700034', 'behala@kolkatapolice.gov.in', '2396-7350 / 2397-5050', '0000-00-00 00:00:00', 0, 0),
(71, 8, 'Parnashree Police Station', 'Ward Health Unit, Upen Banerjee Road, Parnasree Pally, Kolkata - 700044', 'parnashree@kolkatapolice.gov.in', '2488-7172 / 2409-8212', '0000-00-00 00:00:00', 0, 0),
(72, 8, 'Thakurpukur Police Station', '123/117, Diamond Harbour Road, Kolkata - 700063', 'thakurpukur@kolkatapolice.gov.in', '2497-6680 / 2461-6004', '0000-00-00 00:00:00', 0, 0),
(73, 8, 'Haridevpur Police Station', '559, M.G.Road, Kolkata - 82', 'haridevpur@kolkatapolice.gov.in', '2403-4040 / 2409-8213', '0000-00-00 00:00:00', 0, 0),
(74, 9, 'Panchasayar Police Station', 'Srinagar Main Road, New Garia Super Market, Kolkata-700094', 'panchasayar@kolkatapolice.gov.in', '2432-6001/2432-6011', '0000-00-00 00:00:00', 0, 0),
(75, 9, 'Kolkata Leather Complex Police Station', 'Karaidanga, P.O - Bhojerhat, Pin - 743502.', 'klc@kolkatapolice.gov.in', '76030-32712', '0000-00-00 00:00:00', 0, 0),
(76, 9, 'Purba Jadavpur Police Station', '305, Mukundapur Main Road, Kolkata - 700099', 'purbajadavpur@kolkatapolice.gov.in', '2426-7345 / 2416-6203', '0000-00-00 00:00:00', 0, 0),
(77, 9, 'Pragati Maidan Police Station', 'Parama Traffic Island, Kolkata - 700105', 'pragatimaidan@kolkatapolice.gov.in', '2285-0500 / 2285-1507', '0000-00-00 00:00:00', 0, 0),
(78, 9, 'Survey Park Police Station', 'D 50/2 East Rajapur, Kolkata - 700075', 'surveypark@kolkatapolice.gov.in', '2436-8052/8030/8055', '0000-00-00 00:00:00', 0, 0),
(79, 9, 'Anandapur Police Station', '757 Madurdaha, Hossainpur, Kolkata-700107', 'anandapur@kolkatapolice.gov.in', '2443-5000/2443-8000', '0000-00-00 00:00:00', 0, 0),
(80, 10, 'Cyber PS', '18,Lalazar Street Kolkata- 700001', 'cyberps@kolkatapolice.gov.in', '', '0000-00-00 00:00:00', 0, 0),
(81, 10, 'Special Task Force', '18,Lalazar Street Kolkata- 700001', 'stf@kolkatapolice.gov.in', '', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seizure_of_articles`
--

CREATE TABLE `seizure_of_articles` (
  `soa_id` int(11) NOT NULL,
  `soa_cid` int(11) NOT NULL,
  `soa_name` text NOT NULL,
  `soa_desc` text NOT NULL,
  `soa_datetime` datetime NOT NULL,
  `soa_flag` int(11) NOT NULL,
  `soa_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seizure_of_documents`
--

CREATE TABLE `seizure_of_documents` (
  `sod_id` int(11) NOT NULL,
  `sod_cid` int(11) NOT NULL,
  `sod_name` text NOT NULL,
  `sod_desc` text NOT NULL,
  `sod_datetime` datetime NOT NULL,
  `sod_flag` int(11) NOT NULL,
  `sod_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

CREATE TABLE `tip` (
  `tip_id` int(11) NOT NULL,
  `tip_cid` int(11) NOT NULL,
  `tip_status` text NOT NULL,
  `tip_datetime` datetime NOT NULL,
  `tip_flag` int(11) NOT NULL,
  `tip_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_ugid` int(11) DEFAULT NULL,
  `u_psid` int(11) NOT NULL,
  `u_title` varchar(255) NOT NULL,
  `u_emailid` varchar(255) NOT NULL,
  `u_username` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_datetime` datetime NOT NULL,
  `u_flag` int(11) NOT NULL,
  `u_userid` int(11) NOT NULL,
  `u_ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_ugid`, `u_psid`, `u_title`, `u_emailid`, `u_username`, `u_password`, `u_datetime`, `u_flag`, `u_userid`, `u_ip`) VALUES
(1, 4, 0, 'Anirban', 'a@gmail.com', 'a@gmail.com', 'pHt82eRU6nKdgPEQhBWoWJfiQpuHNQ9CPJLjVVoPFAFp0QDpw/WqHySksI9fWYBbWHcKo56qxnOLWFqc0xNnPw==', '2020-06-17 15:27:00', 1, 1, NULL),
(16, 1, 0, 'AC ARS', 'acars@kp.gov.in', 'acars', 'ahptoChHp0SAhMVSEjHCvEo9IiWs7SKe7Ydb+gGZawHweCdkHXY9znwcPX96EMOIVKZCQSI27py+ZPtA2MB9Ng==', '2020-06-21 22:33:00', 1, 1, '47.15.24.30'),
(17, 3, 1, 'Topsia PS', 'topsiaps@kolkatapolice.gov.in', 'topsiaps@kolkatapolice.gov.in', 'lMwICYorJj5d6FHF1nqT5mjCOdSKlxeWv5xdsWw10cH89MwGPOVtyU4pINq3A+klMmwjKg/pyMpsJDK1qIn/QA==', '2020-06-21 22:34:00', 1, 0, '47.15.38.85'),
(18, 3, 2, 'Beniapukur Police Station', 'beniapukurps@kolkatapolice.gov.in', 'beniapukurps@kolkatapolice.gov.in', '5WfFPvrwc1QVe/9enwE5vMTduQ6EDhsKF+nm8Dd1rt97PuDOnBedRwBi0cWDBZX0Kp+92tfNzYjMXhLVIzdk1w==', '2020-06-22 08:02:00', 1, 0, '47.15.38.85'),
(19, 3, 3, 'Ballygunge Police Station', 'ballygungeps@kolkatapolice.gov.in', 'ballygungeps@kolkatapolice.gov.in', 'eY6UFVn9P1PSSJDNGqbdwvuZYKpeq9Htf0g3H+3Ry5tynwMe9HkFgSM0HA2QvL0ljN8LNFmAdNln5yaTes21yA==', '2020-06-22 08:11:00', 1, 0, '47.15.38.85'),
(20, 2, 0, 'Cyber PS', 'cyberps@kolkatapolice.gov.in', 'cyberps', 'XddihFBdGpB+Ozk2plN3rC//CDHkI6JVN4L42BvBEBBQYW5DczHNnGsIckrlViMVL6K7hYlTnpiMwvM79rKgVQ==', '2020-06-22 08:44:00', 1, 1, '47.15.38.85'),
(21, 3, 27, 'New Market Police Station', 'newmarketps@kolkatapolice.gov.in', 'newmarketps@kolkatapolice.gov.in', 'OlDkZwB/XJFn5/S0zwLM0f3pY3Co7WawL5xeXrVx/QmFr+Rahg34otJpcJ9l/1frXV4GhZQxJYOMFEeGfDuj+A==', '2020-06-22 08:47:00', 1, 0, '47.15.23.79'),
(22, 3, 10, 'Shyampukur Police Station', 'shyampukurps@kolkatapolice.gov.in', 'shyampukurps@kolkatapolice.gov.in', 'u0ZUViRf2SNiodRGUCAQZsA68fzJC2IhQPaQyoF5dp3AU7/WtCRSwxzi0ucoeyd2rrS6Dgac/zgHbjZu8GH9VQ==', '2020-06-26 16:17:00', 1, 0, '182.75.220.254');

-- --------------------------------------------------------

--
-- Table structure for table `users_log`
--

CREATE TABLE `users_log` (
  `ul_id` int(11) NOT NULL,
  `ul_userid` int(11) NOT NULL,
  `ul_ipadd` varchar(255) NOT NULL,
  `ul_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `ug_id` int(11) NOT NULL,
  `ug_name` varchar(255) DEFAULT NULL,
  `ug_permission` text,
  `ug_datetime` datetime DEFAULT NULL,
  `ug_flag` int(11) DEFAULT NULL,
  `ug_userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`ug_id`, `ug_name`, `ug_permission`, `ug_datetime`, `ug_flag`, `ug_userid`) VALUES
(1, 'Superior Officer', 'a:6:{i:0;s:7:\"allcase\";i:1;s:10:\"createcase\";i:2;s:10:\"updatecase\";i:3;s:8:\"viewcase\";i:4;s:21:\"createcaseinstraction\";i:5;s:19:\"viewcaseinstraction\";}', '2020-06-22 08:43:00', 1, 1),
(2, 'Detective Department', 'a:5:{i:0;s:7:\"allcase\";i:1;s:10:\"createcase\";i:2;s:10:\"updatecase\";i:3;s:8:\"viewcase\";i:4;s:19:\"viewcaseinstraction\";}', '2020-06-21 09:17:00', 1, 6),
(3, 'Police Station', 'a:4:{i:0;s:13:\"userlevelcase\";i:1;s:10:\"updatecase\";i:2;s:8:\"viewcase\";i:3;s:19:\"viewcaseinstraction\";}', '2020-06-22 08:35:00', 1, 1),
(4, 'Admin', 'a:9:{i:0;s:7:\"allcase\";i:1;s:10:\"createcase\";i:2;s:10:\"updatecase\";i:3;s:8:\"viewcase\";i:4;s:21:\"createcaseinstraction\";i:5;s:19:\"viewcaseinstraction\";i:6;s:11:\"createusers\";i:7;s:11:\"updateusers\";i:8;s:15:\"createusergroup\";}', '2020-06-20 20:34:00', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accused`
--
ALTER TABLE `accused`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `arrested`
--
ALTER TABLE `arrested`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `crpc_41a`
--
ALTER TABLE `crpc_41a`
  ADD PRIMARY KEY (`n41A_id`);

--
-- Indexes for table `crpc_160`
--
ALTER TABLE `crpc_160`
  ADD PRIMARY KEY (`n160_id`);

--
-- Indexes for table `crpc_161`
--
ALTER TABLE `crpc_161`
  ADD PRIMARY KEY (`n161_id`);

--
-- Indexes for table `crpc_164`
--
ALTER TABLE `crpc_164`
  ADD PRIMARY KEY (`n164_id`);

--
-- Indexes for table `divisons`
--
ALTER TABLE `divisons`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `final_report`
--
ALTER TABLE `final_report`
  ADD PRIMARY KEY (`fr_id`);

--
-- Indexes for table `ie_27`
--
ALTER TABLE `ie_27`
  ADD PRIMARY KEY (`n164_id`);

--
-- Indexes for table `ie_32`
--
ALTER TABLE `ie_32`
  ADD PRIMARY KEY (`n164_id`);

--
-- Indexes for table `medical_exam`
--
ALTER TABLE `medical_exam`
  ADD PRIMARY KEY (`me_id`);

--
-- Indexes for table `next_course_proposed`
--
ALTER TABLE `next_course_proposed`
  ADD PRIMARY KEY (`ncp_id`);

--
-- Indexes for table `pm_report`
--
ALTER TABLE `pm_report`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `pstation`
--
ALTER TABLE `pstation`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `seizure_of_articles`
--
ALTER TABLE `seizure_of_articles`
  ADD PRIMARY KEY (`soa_id`);

--
-- Indexes for table `seizure_of_documents`
--
ALTER TABLE `seizure_of_documents`
  ADD PRIMARY KEY (`sod_id`);

--
-- Indexes for table `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_log`
--
ALTER TABLE `users_log`
  ADD PRIMARY KEY (`ul_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`ug_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accused`
--
ALTER TABLE `accused`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `arrested`
--
ALTER TABLE `arrested`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crpc_41a`
--
ALTER TABLE `crpc_41a`
  MODIFY `n41A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crpc_160`
--
ALTER TABLE `crpc_160`
  MODIFY `n160_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crpc_161`
--
ALTER TABLE `crpc_161`
  MODIFY `n161_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crpc_164`
--
ALTER TABLE `crpc_164`
  MODIFY `n164_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisons`
--
ALTER TABLE `divisons`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `final_report`
--
ALTER TABLE `final_report`
  MODIFY `fr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ie_27`
--
ALTER TABLE `ie_27`
  MODIFY `n164_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ie_32`
--
ALTER TABLE `ie_32`
  MODIFY `n164_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_exam`
--
ALTER TABLE `medical_exam`
  MODIFY `me_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `next_course_proposed`
--
ALTER TABLE `next_course_proposed`
  MODIFY `ncp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pm_report`
--
ALTER TABLE `pm_report`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pstation`
--
ALTER TABLE `pstation`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `seizure_of_articles`
--
ALTER TABLE `seizure_of_articles`
  MODIFY `soa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seizure_of_documents`
--
ALTER TABLE `seizure_of_documents`
  MODIFY `sod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tip`
--
ALTER TABLE `tip`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users_log`
--
ALTER TABLE `users_log`
  MODIFY `ul_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `ug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
