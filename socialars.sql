-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 11:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `c_id` int(11) NOT NULL,
  `c_date` date NOT NULL,
  `c_intermediary` text NOT NULL,
  `c_complainant` text NOT NULL,
  `c_content_posted_by` text NOT NULL,
  `c_content` text NOT NULL,
  `c_true_incident` text NOT NULL,
  `c_case_initiated_by` int(11) NOT NULL,
  `c_supportive_documents` text NOT NULL,
  `c_steps_taken` text NOT NULL,
  `c_status_of_intermediary` text NOT NULL,
  `c_proposed_further_steps` text NOT NULL,
  `c_type` enum('normal','special','','') NOT NULL,
  `c_datetime` datetime NOT NULL,
  `c_flag` int(11) NOT NULL,
  `c_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`c_id`, `c_date`, `c_intermediary`, `c_complainant`, `c_content_posted_by`, `c_content`, `c_true_incident`, `c_case_initiated_by`, `c_supportive_documents`, `c_steps_taken`, `c_status_of_intermediary`, `c_proposed_further_steps`, `c_type`, `c_datetime`, `c_flag`, `c_userid`) VALUES
(1, '2020-03-18', 'TV Channel New 18', 'Arbind Singh of 20/21, S. N. Banerjee Road, Kol-13', '1. Dhrubajyoti Pramanik, Editor, News-182. Arnab Hazra, Reporter ', 'Misleading news was shown in News 18, that Hon’ble C. M. of W. B. Has gone into isolation for CORONA.', 'The report is totally false', 27, 'Case no. 96, dt. 18.03.20 u/s 153/504/505/120B IPC ', '1.The accused persons appeared u/s 41A CrPC\r\n2.They repented for their post\r\n', '', '', 'normal', '2020-06-15 13:46:00', 1, 1),
(2, '2020-03-23', 'Facebook', 'Vishal Yadav of 6, Garanhata Road, Kol-6', 'Dharmesh Karmokar of Mumbai', 'A video was posted in Facebook that Muslim people in Habibpore against lock down and also posted that Hon’ble CM of WB is bringing some bureaucrats to Kolkata to mislead muslim people that CORONA is nothing but a trick to stop CAA protest. ', 'The video, which was posted, is actually of Bangladesh and it was of a religious rally.', 12, 'Case 72. dt. 23.03.20 u/s 153A/295A/505 IPC ', '1. Notice was sent through his E-mail address\r\n\r\n2. Again on 13.05.20 message was sent through Ld. CP, Mumbai. But No reply received. \r\n', '1. Notice sent to Facebook on 22/05/2020 through Cyber PS.                                \r\nReply is waited.', '', 'special', '2020-06-15 13:43:00', 1, 1),
(3, '2020-03-26', 'Twitter account of Anupam Hazra', 'Nitish Kumar Jha of 214, Chittarajan Avenue, Kol-6', 'Anupam Hazra, BJP Leader', 'A video was posted in twitter, which shows that some people of Muslim mahalla are heckling Police personnel. Anupam Hazra stated that this video was of Muslim area of Kolkata, but it was of Mumbai actually.', 'The video, which was posted was actually of Gheto Mumbai', 22, 'Case no. 53, dt. 26.03.20 u/s 153A/295A/504/505 IPC ', '1. Notice U/S- 41A CrPC was sent to OC, Shantiniketan P. S. \r\n2. His father refused to receive.\r\n', '1. Notice sent to Twitter authority through Cyber PS on 14/05/2020.  Received acknowledgement from Twitter. \r\n  Reply is waiting.( Ref-R. Saha)', '1. To send 41A Notice through Email ID.\r\n2. After all attempt prayer for issuance for WA.\r\n3.Required a local enquiry    \r\n4. Send an e.mail to the concerned police station of Khidderpore viz. Ekbalpore, SPPS, Watgunge regarding authenticity of the incidence.', 'special', '2020-06-15 13:44:00', 1, 1),
(4, '2020-03-27', 'Facebook Social Media', 'S. I. Raja Saha of Cyber PS, Kolkata, (suomoto)', 'Chandrima Bhowmik (29) d/o Dr. Kiran Bhowmik of 157/2A, APC Road, Uttam Plaza, Flat no. 4C, P. S. Shyampukur, Kol-4', 'The accused lady uploaded an image of a person with misleading statement rumours causing public mischief', '', 80, 'Case No. 22 Dt. 27.03.20 U/S-66C I. T. Act read with 505(ib/ 505 (2) I.P.C.', '', '', '1. Notice u/s 91 Cr.P.C was issued to Facebook\r\n  The matter marked “Resolved” by Facebook\r\n', 'normal', '2020-06-16 13:43:00', 1, 2),
(5, '2020-03-28', 'Facebook', 'Jayanta Kumar Saha of 11/2A, Ahiritola Street, ', 'Tuhina Das Cahtterjee ', 'A post was made in Facebook, asking Police to not lathi-charge on the poor but to lathi-charge on people of Muslim area', '', 11, 'Case no. 28.03.20 u/s 153A/295A/504/505 IPC', 'Notice u/s 41A CrPC was issued. Accused did not turn up taking alibi of lock down issue. She came and she is a housewife. She repentant for her post.', '', '', 'normal', '2020-06-16 09:02:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `case_update`
--

CREATE TABLE `case_update` (
  `cu_id` int(11) NOT NULL,
  `cu_c_id` int(11) NOT NULL,
  `cu_title` varchar(255) NOT NULL,
  `cu_description` text NOT NULL,
  `cu_datetime` datetime NOT NULL,
  `cu_flag` int(11) NOT NULL,
  `cu_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_update`
--

INSERT INTO `case_update` (`cu_id`, `cu_c_id`, `cu_title`, `cu_description`, `cu_datetime`, `cu_flag`, `cu_userid`) VALUES
(1, 4, 'Case of : Cyber PS Dated : 27-March-2020', 'S. I. Raja Saha of Cyber PS, Kolkata, (suomoto)', '2020-06-16 13:43:00', 1, 2);

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
(1, 6, 'Topsia Police Station', '106A, New Park Street, Kolkata-700017', 'topsia@kolkatapolice.gov.in', '2281-4268/2280-4100/2289-3682', '0000-00-00 00:00:00', 0, 0),
(2, 6, 'Beniapukur Police Station', '48A, Gorachand Road, Kolkata-700014', 'beniapukur@kolkatapolice.gov.in', '2284-4770 /2284-0100/2286-5999', '0000-00-00 00:00:00', 0, 0),
(3, 6, 'Ballygunge Police Station', '38/1, Beltola Road, Kolkata-700020', 'ballygunge@kolkatapolice.gov.in', '2454-3179 /2454-2100/2475-5931', '0000-00-00 00:00:00', 0, 0),
(4, 6, 'Gariahat Police Station', '	2 Dover Lane, Kolkata - 700029', 'gariahat@kolkatapolice.gov.in', '2486-3702/2486-3703/ 2461-3667', '0000-00-00 00:00:00', 0, 0),
(5, 6, 'Lake Police Station', '18, Gariahat Road South, Kolkata-700068', 'lake@kolkatapolice.gov.in', '2429-2353/2409-7100/2429-6294', '0000-00-00 00:00:00', 0, 0),
(6, 6, 'Karaya Police Station', '52, Karaya Road, Kolkata-700019', 'karaya@kolkatapolice.gov.in', '2287-1715/2281-1100/2289-3825', '0000-00-00 00:00:00', 0, 0),
(7, 6, 'Karaya Women Police Station', '52, Karaya Road, Kol - 700019', 'karaywomen@kolkatapolice.gov.in', '2287-0072', '0000-00-00 00:00:00', 0, 0),
(8, 6, 'Rabindra Sarobar Police Station', '', 'rabindrasarobar@kolkatapolice.gov.in', '2463-0030 / 31 / 32', '0000-00-00 00:00:00', 0, 0),
(9, 6, 'Tiljala Police Station', 'C N Roy Road, Kolkata - 700039', 'tiljala@kolkatapolice.gov.in', '2343-4693 / 2345-2827', '0000-00-00 00:00:00', 0, 0),
(10, 1, 'Shyampukur Police Station', '47, Shyampukur Street, Kolkata-700004', 'shyampukur@kolkatapolice.gov.in', '2555-7585/2533-2100 /2533-5606', '0000-00-00 00:00:00', 0, 0),
(11, 1, 'Jorabagan Police Station', '78, Nimtala Ghat Street, Kolkata-700006', 'jorabagan@kolkatapolice.gov.in', '2218-4094/2270-0100 /2270-0428', '0000-00-00 00:00:00', 0, 0),
(12, 1, 'Burtolla Police Station', '1, Raja Raj Krishna Street, Kolkata-700006', 'burtolla@kolkatapolice.gov.in', '2555-7599/2533-6100/2533-5579', '0000-00-00 00:00:00', 0, 0),
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
(27, 2, 'New Market Police Station', '133/2, S. N. Banerjee Road, Kolkata-700 013', 'newmarket@kolkatapolice.gov.in', '2217-7397/2283-6100/2227-6436', '0000-00-00 00:00:00', 0, 0),
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_title` varchar(255) NOT NULL,
  `u_emailid` varchar(255) NOT NULL,
  `u_username` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_permission` text NOT NULL,
  `u_datetime` datetime NOT NULL,
  `u_flag` int(11) NOT NULL,
  `u_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_title`, `u_emailid`, `u_username`, `u_password`, `u_permission`, `u_datetime`, `u_flag`, `u_userid`) VALUES
(1, 'Anti Rowdy Section', 'ars@kolkatapolice.gov.in', 'user', 'user', 'a:6:{i:0;s:7:\"allcase\";i:1;s:10:\"createcase\";i:2;s:10:\"updatecase\";i:3;s:8:\"viewcase\";i:4;s:11:\"createusers\";i:5;s:11:\"updateusers\";}', '2020-06-15 23:27:00', 1, 1),
(2, 'Cyber PS', 'cyberps@kolkatapolice.gov.in', 'cyberps@kolkatapolice.gov.in', '54321', 'a:3:{i:0;s:10:\"updatecase\";i:1;s:8:\"viewcase\";i:2;s:13:\"userlevelcase\";}', '2020-06-15 20:12:00', 1, 2),
(3, 'Jorabagan Police Station', 'jorabagan@kolkatapolice.gov.in', 'jorabagan@kolkatapolice.gov.in', '09062320', 'a:3:{i:0;s:13:\"userlevelcase\";i:1;s:10:\"updatecase\";i:2;s:8:\"viewcase\";}', '2020-06-16 09:02:00', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `case_update`
--
ALTER TABLE `case_update`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `divisons`
--
ALTER TABLE `divisons`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `pstation`
--
ALTER TABLE `pstation`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `case_update`
--
ALTER TABLE `case_update`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `divisons`
--
ALTER TABLE `divisons`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pstation`
--
ALTER TABLE `pstation`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
