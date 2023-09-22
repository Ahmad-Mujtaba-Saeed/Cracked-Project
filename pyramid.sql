-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 10:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pyramid`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `annoucement`
--

CREATE TABLE `annoucement` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `annoucement`
--

INSERT INTO `annoucement` (`threadid`, `userid`, `title`, `discription`, `threaddate`, `impthread`) VALUES
(1, 4, 'ahmad', 'hello welcome everybody', '2023/07/20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `basicid` int(11) NOT NULL,
  `key1` varchar(200) DEFAULT NULL,
  `key2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`basicid`, `key1`, `key2`) VALUES
(1454, '213121ae970a4fa0', '$2y$10$44UNdceRmdlpUAgDUSSuyOdM5H6QTnq05HyG1MT/G5eumWLmGXETm'),
(1455, 'ed6d9efede7fb5a7', '$2y$10$OoP/1zkaSf1P1fEDENYTgOjltFMmTfFwvroZv4kl7pq0Fk/xLiM0a'),
(1456, 'f5ec8c8c13518165', '$2y$10$mWwgXh.c4T9j9vMqXpNrze/Xmop2NKahrspw9aS1z6xpu1yJZyuK6'),
(1457, 'f58d8d80a96ae103', '$2y$10$P1CVjqy/mAwV1dgBwEDHqup.jLrrMSKPQBGGZfLvoZY9kyzpbt2K6'),
(1458, '24af34ac3eaf9498', '$2y$10$SF7yJ8jgwL8czPPDVgF1W.uGkdRp0kjb9by6l4RvPVj/ROb4XO0Pm'),
(1459, '1cb0e839376f256e', '$2y$10$xJm3RNn.w07Suwoo2e6YI.xYP5HtB72.817MXvtvKlhrm9xUiIy22'),
(1460, 'dce7612c3b4decb6', '$2y$10$9J7P2eErGWyh8MsyQrnl9OBKbrY2/2m9S78BwL9cI1qXqkdC2oR/y'),
(1461, '673ce5cce18cbced', '$2y$10$iEo/ck4I3E.EUgAN2CH/kOg1Bm7DnC8EhRm3KgXhn0hK8ubCaicGq'),
(1462, '2a5ab2002ca77dcb', '$2y$10$DQFDpvL4vrMVVhg63riio.qTthdZm3x1hvtmly3ni2/BULg8Fxoo6'),
(1463, '68201b6f12afc23e', '$2y$10$WzryXmRlBkKKZG/5tu1qZuNb7Tg3Z0Gb/YN1Ou51SC96FxeyaUtjG'),
(1465, '9821b6b5bc4161d7', '$2y$10$q.zA1fMB0wkJXfTyAG7MxOpk99T8kqrUKB15sg5vK.gAnqwZKynSm'),
(1466, '28efa4fe5fdee8dc', '$2y$10$7.hs4INGzdoHupIIRzM2G.Elc6eTnrAfHANnpUcHhiOdBqzjqqO2C'),
(1467, '6306518700a708fd', '$2y$10$INsfnGjmyB1GgbUQdDf.J.tPwgLl9tO3EXUXlIyN6HP5hR1/Ru8yu'),
(1468, 'f07cd4bc104922ad', '$2y$10$kqqHJtUHwf4RhaObhoB41.7sCDVvEs6.VmjWZHMc1HDH98MJKhm1K'),
(1469, '0358216541b12a86', '$2y$10$cAyukBwSnLqipXur7S0kSO6i.Cah4rRrOhSmmAsi9UEFRb80hb6R2'),
(1470, 'a10dd09a4666fe44', '$2y$10$L1SuvBDQS3aj1r2j8sTtHu1jz41XpdhER18TxkqCNyXsXgsQIEIUO'),
(1471, '2f513ba87e0c8de5', '$2y$10$y87ybbpO.VassuR8aSUkzeGZQ4OwAnPqe/E28JUY.92LX3WoUuSsa'),
(1472, '3db4a4b0565ef752', '$2y$10$YohdQeMW3f04aNLKFBHXqO1iPzdPJGI1kT12l3insSJdPFi1FHs/y'),
(1473, 'ca9a3fcb648202b3', '$2y$10$UbhyL/NuISQ7xtJJ48OnBu2egObVzSNfbXJHhbj57uo/j2arfFjO2'),
(1474, 'c85f26448fb35473', '$2y$10$BIosV7FVFpR7QVC8JN7Qg.iek2JbsEDxLAiJCMdTVcfq8ubVdGV0S'),
(1475, 'b39482750f4c6a2e', '$2y$10$26bDi/eo3BJeXN.Zd0PXlunwPHnWwlIMZmM14yEEsWZ6mrnDgtQri');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `threadid` int(11) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`threadid`, `userid`, `title`, `discription`, `threaddate`, `impthread`) VALUES
(3, '4', 'dadwa', 'asdwa', '2023/07/20', NULL),
(4, '4', 'i want to buy netflix', 'only dm me if you are giving it for free', '2023/07/23', NULL),
(5, '4', 'Buying paypal configs', 'need configs', '2023/07/23', NULL),
(6, '4', 'can anyone sell me forza game account ', 'need it urgently', '2023/07/23', NULL),
(7, '4', 'hiring website developer ungently', 'need web developer with html,css,php,js', '2023/07/23', NULL),
(8, '4', 'buying 10$ for 15$credit card', 'send me 10$', '2023/07/23', NULL),
(9, '4', 'buying signature spaces', 'buying signature spaces now', '2023/07/23', NULL),
(10, '4', 'hello no', 'f it', '2023/07/23', NULL),
(11, '4', 'i  need you', 'you need me', '2023/07/23', 'important'),
(12, '4', 'how many namey nakd', 'ada', '2023/07/23', NULL),
(13, '4', 'Kill me', 'nndiawond', '2023/07/23', NULL),
(14, '4', 'last one', 'last one123', '2023/07/23', NULL),
(15, '4', 'HIHELLO', 'byebye', '2023/07/25', NULL),
(16, '4', 'uytre', 'poiuyt', '2023/07/25', NULL),
(17, '4', 'ada', 'da', '2023/07/25', NULL),
(18, '4', 'ada', 'dadadada', '2023/07/25', NULL),
(19, '4', 'hello', 'whatthe f', '2023/07/25', NULL),
(20, '4', 'dada', 'adadad', '2023/07/25', NULL),
(21, '4', 'wda', 'wdawda', '2023/07/25', NULL),
(22, '4', 'dawda', 'wdwadaw', '2023/07/25', NULL),
(23, '4', 'dwaaaaaaaaaaaaaa', 'wadddddddddd', '2023/07/25', NULL),
(24, '4', 'adw', 'wdawda', '2023/07/25', NULL),
(25, '4', 'wdawd', 'wdada', '2023/07/25', NULL),
(26, '6', 'hi', 'my name is ahmad', '2023/08/07', NULL),
(27, '6', 'new thread', 'got no reply', '2023/08/08', NULL),
(28, '6', 'zero comment', 'zeo', '2023/08/08', NULL),
(29, '6', 'imp', 'imp', '2023/08/10', 'important'),
(30, '6', 'need paypal config', 'needeeded', '2023/08/10', 'important');

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `codediscuss`
--

CREATE TABLE `codediscuss` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `combolists`
--

CREATE TABLE `combolists` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crackedprog`
--

CREATE TABLE `crackedprog` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crackingtools`
--

CREATE TABLE `crackingtools` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giveaways`
--

CREATE TABLE `giveaways` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hackinginfo`
--

CREATE TABLE `hackinginfo` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hackingtools`
--

CREATE TABLE `hackingtools` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `learncracking`
--

CREATE TABLE `learncracking` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `learnhacking`
--

CREATE TABLE `learnhacking` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lounge`
--

CREATE TABLE `lounge` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marketdiscus`
--

CREATE TABLE `marketdiscus` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(128) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `seem` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `id`, `seem`) VALUES
(0, 4, 5, 'hi', 1, NULL),
(0, 5, 4, 'how are yu', 2, NULL),
(0, 5, 4, 'a', 3, NULL),
(0, 5, 4, 'bye', 4, NULL),
(0, 4, 5, 'ayo', 5, NULL),
(0, 5, 4, 'hi', 6, NULL),
(0, 4, 6, 'hi', 7, 1),
(0, 6, 4, '<a href=\"#\">hello</a>', 8, 1),
(0, 6, 4, 'hi', 9, 1),
(0, 4, 6, 'hello', 10, 1),
(0, 6, 4, 'yes', 11, 1),
(0, 6, 4, 'bro', 12, 1),
(0, 6, 4, 'hi?', 13, 1),
(0, 6, 6, 'hi', 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `onlypremium`
--

CREATE TABLE `onlypremium` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prelounge`
--

CREATE TABLE `prelounge` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `premiumid` int(11) NOT NULL,
  `key1` varchar(200) DEFAULT NULL,
  `key2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `premium`
--

INSERT INTO `premium` (`premiumid`, `key1`, `key2`) VALUES
(1, 'a2f02d0964e037cd', '$2y$10$I3lFYNLUBCN2hHa/05BxfeLRTdDj0KMHTZMXC5eCZmFbBZNkiyLw6'),
(2, 'c482e3951751cecd', '$2y$10$UGmGA79C.ZIk2mNKqcbsQOT5wMlPHXldoOITXKD7d5U5nFZ5y7D3a'),
(3, '94135e71790d13e9', '$2y$10$FwwLfmNx3BE8z4f0CGbG2OL9Hj4i0CcyAy3zz8VY2qtsQx0OmUGNu'),
(4, 'ea83b66e78147468', '$2y$10$fnEJV2yOYM6Sxl68yvB1kunipWFj/xc4oMZw7Vz7fIOBPeO6PXFF6'),
(5, '333e2126b959cfce', '$2y$10$NE/E2QV1Tany./0UwRxXUOSdei7nS9oF1YT/M6IU.Yt.O2ikPBaTC'),
(6, 'f2765bd148006b1f', '$2y$10$pSdRYzaPkzRPhv/iaem/xeyfn3mSIs/Tsm5uypuba/LLVBG0MRdU2'),
(7, 'e2f5ced8e7afbcff', '$2y$10$TISjGMWhzrrCEGvNYl09GuMv.G9kVmTFWohoW/U8ld97Cc0FJOawu'),
(8, 'ab02dfa6738351b2', '$2y$10$cbF4DhRY0WGaaQoom9Ael.0mqyhc7KOAoabOloZFKmVpzUHhgAHVK'),
(9, 'f6cf5e53d8dd63d4', '$2y$10$lCsK8S8LuYNxac6trj2Fx.JMBlpWcRZGpzPy5bGFWH0wDfc.d3Q5q'),
(10, '5f432e853827015c', '$2y$10$MmMBJxpzNaiJSuMFr9rOSeAPkvRG5GlTkcql3prrY7M2ZPhQPGrEK'),
(11, '376a5a4e5a39d019', '$2y$10$MJqL6Cy5xU2gNOQh.FRi5un3OWeTfPqGp4Hm5joaNDQ6F7k28U31i'),
(12, '04c449746dc06df5', '$2y$10$j0mHR/cLWxWcC8n1AiqRAuNwOsBSHUedwicKcI1Kiu2jQXMC1WXUK'),
(13, '1ab98cdd6ba80d98', '$2y$10$QtxwdghJqm.iGftj64FX9.bYbCRyEgXJ.QOtcA9.QDt6PTQ/AEtde'),
(14, 'ef167f4e6e3acaa6', '$2y$10$PgdGnjE4WjXTbE/m8hQlaut15wlr64cnK/vmt/klMQbOnyyWR2F/2'),
(15, '59508fb8cb7f6718', '$2y$10$RPtV7TsJv1toofPrJ8nwo.qaxn7hxOMaLId4dSH0xL.WE3JwUkXQ6'),
(16, '0c8bf74d2e12cd14', '$2y$10$jTXslSOH8hEwuz16ZQMFG.97vqpYaRfdM6HEKnLg.BcCmqYjI1opC'),
(17, '082d1492189601c5', '$2y$10$n3ehSzcwZ7QoVu6SKL7BM.ZPOcZI50BXCgLD3gK7tqhEaYGYSVuXm'),
(18, '98200d5ae7cf7efd', '$2y$10$R1SOsJQwWEu1kPn9RuFIieOGqf4L2utbqu.FhhNAdsiKWDPGTU4sK'),
(19, '9e2f71112328c466', '$2y$10$qriFyghCxQ1ARRfhRULnD.iS76a.3QEUv3UQGvMGvPZJAPQx74pca'),
(20, '46b9f5286f90baa9', '$2y$10$fH7ENTqauHbZ2BnKR6LlQeeQ1ALYBVBJaHbJyej3CVMwinMicy8aS'),
(21, '98f8824fa4ca1adc', '$2y$10$dnMeleLYiQtSYyOGGhFrJ.vkpMQQ2Imlm0T5NvROWQbthIOnrRNY.'),
(22, '673b9289ab369f35', '$2y$10$s6rbeAbH2iQLCGTZ7Yoh/.0EDIs4JGkZcpcpKQ2jAWGfvVOluwFci'),
(23, '4086ecc4af2a759e', '$2y$10$73wL.MkZ8yonx2ksKkV9seRdoRbRjgI2maKk3mZR3AFe9KvkRkBiK'),
(24, '9e05ed9183e0550f', '$2y$10$Tm7qQCi6uvV8E4Q8M3czguvyjDB8XEHqxmlgPTEid0kg/GuaQ87.q'),
(25, 'eb2baae926e54103', '$2y$10$YcVo4.cnxBeoqPDIGZv/H.PoxiEaB/c2v6lDF2GaTiRHNIIu.l4xS'),
(26, '12197147d9d27c5b', '$2y$10$W9gqN9kdLvLrJmJ9WZfQD.uGy01y5CDH0JQyG0DqCPUrdh7Qlw6li'),
(27, '7250f3771d9ec97d', '$2y$10$3QZJkpjbtQLlzxaSrfKRPugjT/gHIENX8MDi3CPsG4KVwA5PkMtPW'),
(28, '38bc4a56db8b5ef2', '$2y$10$TwPp.I4JeDJIo4Zz0wFswOqG9CtsTYpwF1gQSVB7BN0XM//Vgi4di'),
(29, '0d702ade18c513fe', '$2y$10$PHKdkCgMBGYuX3YGEjU0G.7V/tVDD45w4SeFdTjwFPZm0Dp1.W5Fy'),
(30, 'b22cedcbde60dd60', '$2y$10$4F2UWknuaCPC5jSyoTYFGe0WtZY8P65ZeQWQta7oiLmq4jQgJ78RO'),
(31, '57db69c59897a4d1', '$2y$10$iXd2u3YPaCCqlFFhXJwlsOe8FhuhrIEe3SlrH3UqdgzqNuMxMYJm6'),
(32, 'fbbbaf99a13ca850', '$2y$10$tgTQeeHz8VshD8UOa2pkpOIkJkgObKtow0zzOj4CSO41Esfmhf3Fi'),
(33, 'a0d1164d89576f14', '$2y$10$rzuNocCMz0hOcBzqLVpAKOz3kkmKxu4oXA2DTkWsIduYp7l3jggxe'),
(35, '784787ea41f63a86', '$2y$10$kATRmGhnbiL8awKeS.d5OeGoXMNKEVypUntIf.MVMJOY0z19zQYYK'),
(36, 'fe8c12db079abbde', '$2y$10$UxrvPEtFryyHPgLflfhGWeCXwz0v2dim.XWLey2wjsE/D.GUugtFm'),
(37, '4b8dc318bdd3e256', '$2y$10$BVKsHHPydyDVD/9qATWmT.46vjGX/tQcX/vf7BnLaEr3ARJr.MB2i'),
(38, 'e141611d912292b5', '$2y$10$kZSW7VlI5GSnnYBHtSU/VuchQmMTQE4mLEZ83VrbzyRdYsIaVsYO6'),
(39, '57e24008541b4179', '$2y$10$AvrCnXL5HXk8zHGfA1sqBuelAnr4MW70Z4zDo76.g4DnKoQqF6Yby'),
(40, 'f3bc076829ae8b49', '$2y$10$i.O7mnPBzmLUN1Atl3Rn7.msoWK/hIj4vPPUjGOt5F/EV6O9H9sf6'),
(41, 'e4e89b96c7c2804f', '$2y$10$xYQIk16Ko535GBucQWYUD.qvQWOumjQFVJhg9tI8/U/K.wFmCUFzG'),
(42, 'd3f62e61ac8f8d0b', '$2y$10$w2LsSn3mhp2V6Hgy7z/SqupfrAIwsoGZsYEOhLSebg1DXHYfiFlXK'),
(43, '27d39a35f8053055', '$2y$10$Wpi14aRti/mtzW2qZW42ueeGnsxRhgxDXwt6QupIK5aPn1SXBRZ72'),
(45, 'ddd588b49b31f1f3', '$2y$10$tVDunhmUjoQbTsRdmaCEjeugBKV7U/cPOI2viAyNvlwrLZ62EDH/6'),
(46, 'f32db81151f5524a', '$2y$10$RuhtA9ejfACoHr3rYgWHfeuShiKsu0DL7GjqyyeDcFfVmKqS8FcX2'),
(47, 'd637dca40b5f4f44', '$2y$10$tLo8UwLGe9EFdCFpnaFMpOpgwsEacoPVrJ5xwYXu5pvDZ2MbbBUJ2'),
(48, '3c6ec6aae4cfb4ee', '$2y$10$/Tp2ZHcWFpfkFCFSr5jVuu1KFrhKXxZqyjF5B.xQF3yHczp2tROky'),
(49, '3242a0f015a182bb', '$2y$10$aE9aGlVqZUQ92QjjRvH1q.5MVpacBt7kexLXVr.J0ynEx7cNr9lQu'),
(50, 'c529be5960994e6d', '$2y$10$36zmFH0AxkZ37EqjrpTF5u/Hms3C.WqqDzdC5KNSLl/xmJjuVw2M2'),
(51, '64709b789ba4392f', '$2y$10$SsdrV49kY2YO19lywj75Y.FXe3f2/7VtG0mOTs3sWTGLNy0/xv7uC'),
(52, 'a65c8e82aa944530', '$2y$10$ebwsZLoC8nOzZLiE1FE8pucbil0pto7gmhmpEqWnLL1q7JhynTQ.y'),
(53, 'c035b7f129da5fb3', '$2y$10$N5Vn20Z9EMmUyUsj.xAb7.1wn0//m0mPl5Rpfky1yYEn.djXtZTy6'),
(54, '6aa31f62960b2f1b', '$2y$10$J/WJQf4yaAuhOv9OTRaPEu5Ew0pVyvri.JRntp.zm2zTx0fQHC15a'),
(55, '1a57faa89f59a1c9', '$2y$10$sJAvylIaVOq0fnDSMbzLJOCB6byLUxk9bOcBmJip5sSbvt8kVQlZ.'),
(56, '43fe8941dc632179', '$2y$10$0ANEEZ1419bfcZqd9q/a7.ksgrQihKtOPWaDMPZ2lojTpMj8N8uDq'),
(57, 'ed75d0c30967d82b', '$2y$10$brym6pVZLtYZthnmbh/Zn.6wH95./wnpiKscZkl1NjV32OzOUOY0u'),
(58, '99eecb5b4be6dc0b', '$2y$10$3lmhKKEzNCdavac7Sl9BtOT5SEdcgxBDYGxgu5VOhryq9Od837Tz2'),
(59, '971e4c5556e946e9', '$2y$10$bRWSl1yJC0HKi.6XnMsgFuCosZuexnWa.N8PqxsF.yAUoU3Vq9HSi'),
(60, '08b3ddedbe2090f8', '$2y$10$QYPrI51yCjXadDb8kutYpu1TMJCzd0iDh0tY.GpnhD0ov5L8kihlm'),
(61, 'dfd1d28a5366608a', '$2y$10$SciSbi6xGKtX6Ld3njsvquqBr.WuHzGTW3h3gaMsZRl1Uku9Szlne'),
(62, 'a1f920eb389666ac', '$2y$10$oEj2tL9wRQPQGjLIkncRIe.xTrgagJUquANkvG6cCbiTrIbdoCHXS'),
(63, 'd86920ddff0424ad', '$2y$10$OyKghE4Jxs.ZD8drWlFntO/RH7PaxyxOzcWz8EP7RT1DQyyJN5HTi'),
(64, '5a96f9dac4bd911f', '$2y$10$de8fzDb8SFtnWfca8DpXseSLUMxrmvV5rB/piEFMzZDKcJl0t4Xt.'),
(65, 'd19d2a456acfc73f', '$2y$10$5FQYJgCzsIRgYkKvZTFiwePsTwGF.Bm7qhOHCKq1r/TG6YvCNrx7G'),
(66, '95ac9d42cd20355a', '$2y$10$LZ7s3e/wQRQ8ZVqRY23isO32anf6ZK8gEytV7oGylGaTFnsOs4gau');

-- --------------------------------------------------------

--
-- Table structure for table `premiumservices`
--

CREATE TABLE `premiumservices` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proxies`
--

CREATE TABLE `proxies` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdreset_selector` varchar(128) DEFAULT NULL,
  `pwdreset_expires` int(11) NOT NULL,
  `pwdreset_token` varchar(128) NOT NULL,
  `pwdreset_email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdreset_selector`, `pwdreset_expires`, `pwdreset_token`, `pwdreset_email`) VALUES
('cd5607747b7ae534', 1689597752, '$2y$10$XxwQ4Riwq0lbh89IIiGGW.4G/Cv/uyfmM3joor3j4k5wI/4UIRTPS', 'ahmadmujtabap70@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recentthread`
--

CREATE TABLE `recentthread` (
  `recentid` int(11) NOT NULL,
  `threadid` int(11) DEFAULT NULL,
  `threadtype` varchar(200) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recentthread`
--

INSERT INTO `recentthread` (`recentid`, `threadid`, `threadtype`, `userid`) VALUES
(5, 16, 'buyers', 4),
(6, 17, 'buyers', 4),
(7, 18, 'buyers', 4),
(8, 19, 'buyers', 4),
(9, 20, 'buyers', 4),
(10, 21, 'buyers', 4),
(11, 22, 'buyers', 4),
(12, 23, 'buyers', 4),
(13, 24, 'buyers', 4),
(14, 25, 'buyers', 4),
(15, 26, 'buyers', 6),
(16, 27, 'buyers', 6),
(17, 28, 'buyers', 6),
(18, 29, 'buyers', 6),
(19, 30, 'buyers', 6);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `replyid` int(11) NOT NULL,
  `reply` varchar(128) DEFAULT NULL,
  `type` varchar(128) DEFAULT NULL,
  `threadid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`replyid`, `reply`, `type`, `threadid`, `userid`) VALUES
(1, 'i ahmad', 'buyers', 26, NULL),
(2, 'i ahmad', 'buyers', 26, NULL),
(3, 'i ahmad', 'buyers', 26, NULL),
(4, 'ho', 'buyers', 26, NULL),
(5, 'hello\r\n', 'buyers', 26, NULL),
(6, 'by', 'buyers', 26, NULL),
(7, 'hi', 'buyers', 26, 0),
(8, 'ayo useridd', 'buyers', 26, 0),
(9, 'now', 'buyers', 26, 6),
(10, 'ok', 'buyers', 26, 6),
(11, 'firstcomment', 'buyers', 27, 6);

-- --------------------------------------------------------

--
-- Table structure for table `requestto`
--

CREATE TABLE `requestto` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`threadid`, `userid`, `title`, `discription`, `threaddate`, `impthread`) VALUES
(1, 4, 'hihow are you', 'i am ahmad', '2023/07/24', NULL),
(2, 4, 'ayo', 'wtfistaht', '2023/07/24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sourcecode`
--

CREATE TABLE `sourcecode` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `standardid` int(11) NOT NULL,
  `key1` varchar(200) DEFAULT NULL,
  `key2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`standardid`, `key1`, `key2`) VALUES
(1, '3c747a81fbbd0a21', '$2y$10$puORN6Iy/U9xyXquhcXp9OPdnkPXmvTu1HqOSXeQfa4xTavYqShUe'),
(2, '038e3e90a3a23134', '$2y$10$A314q2Whqciua63dcK.U9eI6sgJ9JVqOkkPSU1RdJouihFyr/jUTq'),
(3, '98c0f0cda2f79419', '$2y$10$b70aj40dUJ353UE8RXbT.eRQSLmO9lXl8otG6r29Wqrs3pRSw15IG'),
(4, 'c62005235c09f3c6', '$2y$10$P/hhA6wgVLTyLUhTxC/jpugSIx7PW.Dzmt4XRKINy2o2e3ff3fRFu'),
(5, '9d1d4baf71b49092', '$2y$10$VSMKILeLKdNcWH5o64kotuwvWAIv96vz5KNtCOpYF6VCqnv165dCu'),
(6, 'e6275f28b8fa7a1e', '$2y$10$MH0ZQvyH2jgRk/XDHzfM4u4eX8a15R7ivGCvT3uIRhLpLjsYB4apS'),
(7, 'e480acfed6a9a524', '$2y$10$.ydWFyToSvhVHgv3/Zdd7eHTyBfygCpF3SruklpJl2nfPF2sGJk1e'),
(8, 'afe29273476c3298', '$2y$10$TmzQ.V03d9oFmVqEsDLSZ.8X.GyIoq3v3aI51sNHZPCYjj9YosgiW'),
(9, 'b008c0e77e6bb079', '$2y$10$n7wNDMBXchyajzSLTr755uAVjhnE1rqh5E28I70RoAgiwcJjYV1Zy'),
(10, '876cf9d93457bf8e', '$2y$10$UQRKLhT.MbPwarLf7B9zsecmHGp1eqVBmG4KKo9ntwm/zdiyy9ga6'),
(11, '320f363dd570073a', '$2y$10$UKIRBVDtDMVK1Ps9Qz8/WuIHlBY4nfZCLeeWNsxXrDMc8bP1Bnzkq'),
(12, '5548e315643fe3a2', '$2y$10$fqjrrzmYXt44GpvOPOe3nejX6deNvWcftxYz3TLK4wlDOoLJv.99.'),
(13, '4f538896d81f34c1', '$2y$10$1wD18HhPozyzr.kVOPGLKuUtxVbRoGiPyy69aoqZDCVz84kWd7L.a'),
(14, '483e322b1c6ba650', '$2y$10$l1goxcpu1AE21TJJf0CgTOJf/Q2AYhise2Z1DGMwkGq782wYFkq6O'),
(15, '3ce4864d41d733fc', '$2y$10$6qtYgi6KF./8CsomiBJ1EOXeq1cbd4orMTuk9YVUIHhlLX2jD6X/6'),
(16, '0f56b7899a7135ab', '$2y$10$K0BVkSuNN5WY/GgrnANkte/1dEbJMQvCVEIj7SVsTD0cve5gdtV26'),
(17, '9268b391f3d77db4', '$2y$10$uNE0ZKkeXcj3cJEy7Ix.gu/tjH3Rdk9E9/FCC/QBzdEtdDGTLYvLS'),
(18, 'c9eee4c5b0057b6f', '$2y$10$6QxxZuJYLy4YE8cmhIT97OtDKdY2opgD1xng/jjc32FlDlJZoDuWO'),
(19, 'd414fec82e02f401', '$2y$10$lmzFBEZ2Zxv0Uwh5wYlTfe13w6EzjvNln9HIjkrGx5bsBGRzHGigu'),
(20, '55e0747be0a2d3ed', '$2y$10$cxHx1ddfU1t4k5lR76bJoeIliypX.qDiGCIUXzHqFg/lryx8TRUqO'),
(21, '719e4dfbb3e034e1', '$2y$10$H1h1O0rliiWi46GT7abvge/2AaHcaITD/J/2tyIDWQZgeRPGTjNNq'),
(22, '058c5f7b30bdaa1e', '$2y$10$FYoO7xikRLYqMsCeBZ3dmupnRYC4Ydw.TxYa.QQUx3GoquEG8WUM6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `likes` varchar(200) DEFAULT '0',
  `reputaion` varchar(200) DEFAULT '0',
  `trustlevel` varchar(200) DEFAULT '0',
  `ustatus` varchar(200) DEFAULT '0',
  `warninglevel` varchar(200) DEFAULT '0',
  `followers` varchar(200) DEFAULT '0',
  `onlinetime` int(11) DEFAULT 0,
  `registrationdate` varchar(200) DEFAULT NULL,
  `totalposts` int(11) DEFAULT 0,
  `userplan` varchar(200) DEFAULT 'Free',
  `login_time` bigint(20) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersEmail`, `usersUid`, `usersPwd`, `likes`, `reputaion`, `trustlevel`, `ustatus`, `warninglevel`, `followers`, `onlinetime`, `registrationdate`, `totalposts`, `userplan`, `login_time`) VALUES
(5, 'ahmadmujtabap72@gmail.com', 'ahmadsaeedmujtaba', '$2y$10$12.SQPQg1lJugt1.J.uYWuzy7O6ZMLa1IT8.fHDkhnPsX/G88vzHa', '0', '0', '0', '0', '0', '0', 545, '2023/07/25', 0, 'Basic', NULL),
(6, 'ahmadsaeedp52@gmail.com', 'Gearshead.com', '$2y$10$3XhhtiF7bIUBk9xWGLBZJuLrPJk01pJDzoGOmcOi5tx5gn4YYJ2Nu', '259', '1000', '50000', '0', '0', '0', 33856, '2023/07/25', 6, 'premium', 1691922461),
(16, 'ahmadmujtabap70@gmail.com', 'Ahmadlegend', '$2y$10$jJMxgU9PxgnPW06tS/KZjuNE7yGUYGNsxzRHjBThd7Cjv1ul5xj4.', '0', '0', '0', '0', '0', '0', 0, '2023/08/03', 0, 'free', 0),
(17, 'maansaeedp52@gmail.com', 'maan', '$2y$10$jH7xWz4IKqIYxsOPWHDB8OiABgnkzFeaiVEg04AGe89ro8eDnXpdu', '0', '0', '50', '0', '0', '0', 0, '2023/08/13', 0, 'Basic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `webhack`
--

CREATE TABLE `webhack` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `webprogram`
--

CREATE TABLE `webprogram` (
  `threadid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `threaddate` varchar(200) NOT NULL,
  `impthread` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `annoucement`
--
ALTER TABLE `annoucement`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`basicid`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `cc`
--
ALTER TABLE `cc`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `codediscuss`
--
ALTER TABLE `codediscuss`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `combolists`
--
ALTER TABLE `combolists`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `crackedprog`
--
ALTER TABLE `crackedprog`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `crackingtools`
--
ALTER TABLE `crackingtools`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `giveaways`
--
ALTER TABLE `giveaways`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `hackinginfo`
--
ALTER TABLE `hackinginfo`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `hackingtools`
--
ALTER TABLE `hackingtools`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `learncracking`
--
ALTER TABLE `learncracking`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `learnhacking`
--
ALTER TABLE `learnhacking`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `lounge`
--
ALTER TABLE `lounge`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `marketdiscus`
--
ALTER TABLE `marketdiscus`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `onlypremium`
--
ALTER TABLE `onlypremium`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `prelounge`
--
ALTER TABLE `prelounge`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`premiumid`);

--
-- Indexes for table `premiumservices`
--
ALTER TABLE `premiumservices`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `proxies`
--
ALTER TABLE `proxies`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `recentthread`
--
ALTER TABLE `recentthread`
  ADD PRIMARY KEY (`recentid`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`replyid`);

--
-- Indexes for table `requestto`
--
ALTER TABLE `requestto`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `sourcecode`
--
ALTER TABLE `sourcecode`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`standardid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `webhack`
--
ALTER TABLE `webhack`
  ADD PRIMARY KEY (`threadid`);

--
-- Indexes for table `webprogram`
--
ALTER TABLE `webprogram`
  ADD PRIMARY KEY (`threadid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annoucement`
--
ALTER TABLE `annoucement`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `basicid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1476;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cc`
--
ALTER TABLE `cc`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `codediscuss`
--
ALTER TABLE `codediscuss`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combolists`
--
ALTER TABLE `combolists`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crackedprog`
--
ALTER TABLE `crackedprog`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crackingtools`
--
ALTER TABLE `crackingtools`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giveaways`
--
ALTER TABLE `giveaways`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hackinginfo`
--
ALTER TABLE `hackinginfo`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hackingtools`
--
ALTER TABLE `hackingtools`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `java`
--
ALTER TABLE `java`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learncracking`
--
ALTER TABLE `learncracking`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learnhacking`
--
ALTER TABLE `learnhacking`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lounge`
--
ALTER TABLE `lounge`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketdiscus`
--
ALTER TABLE `marketdiscus`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `onlypremium`
--
ALTER TABLE `onlypremium`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prelounge`
--
ALTER TABLE `prelounge`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `premium`
--
ALTER TABLE `premium`
  MODIFY `premiumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `premiumservices`
--
ALTER TABLE `premiumservices`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proxies`
--
ALTER TABLE `proxies`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `python`
--
ALTER TABLE `python`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recentthread`
--
ALTER TABLE `recentthread`
  MODIFY `recentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `replyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requestto`
--
ALTER TABLE `requestto`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sourcecode`
--
ALTER TABLE `sourcecode`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `standardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `webhack`
--
ALTER TABLE `webhack`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webprogram`
--
ALTER TABLE `webprogram`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
