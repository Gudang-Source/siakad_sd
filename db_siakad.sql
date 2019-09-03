-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2019 pada 15.13
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
(1, 'kelas 1'),
(2, 'kelas 2'),
(3, 'kelas 3'),
(4, 'kelas 4'),
(5, 'kelas 5'),
(6, 'kelas 6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(128) NOT NULL,
  `course_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`) VALUES
(1, 'MTK', 'Matematika'),
(2, 'BI', 'Bahasa Indonesia'),
(3, 'KW', 'Kewarganegaraan'),
(4, 'BE', 'Bahasa Inggris'),
(5, 'AI', 'Agama Islam'),
(6, 'PJK', 'Penjaskes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `newspaper`
--

CREATE TABLE `newspaper` (
  `newspaper_id` int(11) NOT NULL,
  `newspaper` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `newspaper`
--

INSERT INTO `newspaper` (`newspaper_id`, `newspaper`) VALUES
(1, 'Jakarta, Pustekkom – Senin (1/7) Di tengah perkembangan teknologi digital saat ini, insiden siber kerap menyerang aset TIK yang dimiliki unit/satker dari lembaga pemerintah. Lembaga pemerintah menjadi sasaran pelaku kejahatan siber dikarenakan masih banyaknya pengelola aset TIK yang belum memahami keamanan siber sehingga pengelola tidak mengetahui apakah aset TIK yang dimiliki sudah aman atau justru menjadi sasaran empuk bagi para pelaku kejahatan siber.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE `periode` (
  `periode_id` int(11) NOT NULL,
  `name_periode` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periode`
--

INSERT INTO `periode` (`periode_id`, `name_periode`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `score`
--

CREATE TABLE `score` (
  `score_id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teachers_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `daily_test` float NOT NULL,
  `mid_test` float NOT NULL,
  `finaly_test` float NOT NULL,
  `result` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `score`
--

INSERT INTO `score` (`score_id`, `students_id`, `course_id`, `class_id`, `teachers_id`, `periode_id`, `daily_test`, `mid_test`, `finaly_test`, `result`) VALUES
(2, 0, 1, 1, 5, 1, 90, 90, 90, 90),
(6, 79, 2, 1, 8, 1, 90, 80, 90, 87),
(7, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(9, 40, 2, 1, 3, 1, 90, 80, 90, 86.6667),
(10, 40, 6, 1, 4, 1, 90, 90, 90, 90),
(11, 40, 3, 1, 4, 1, 90, 90, 90, 90),
(14, 77, 1, 1, 3, 1, 90, 90, 90, 90),
(15, 99, 1, 1, 3, 1, 90, 90, 90, 90),
(17, 99, 1, 1, 3, 1, 90, 90, 90, 90),
(18, 4, 1, 1, 3, 1, 90, 70, 90, 83),
(19, 86, 1, 1, 4, 1, 90, 80, 90, 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `students_id` int(11) NOT NULL,
  `nis` char(6) NOT NULL,
  `name_students` varchar(128) NOT NULL,
  `pod` varchar(128) NOT NULL,
  `bod` date NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `religion` enum('Islam','Kristen','Khatolik','Protestan','Hindu','Budha') NOT NULL,
  `address` varchar(128) NOT NULL,
  `mother_name` varchar(128) NOT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`students_id`, `nis`, `name_students`, `pod`, `bod`, `gender`, `religion`, `address`, `mother_name`, `phone`, `class_id`) VALUES
(3, '1912', 'Johnnie', 'Washington', '1993-01-16', 'Laki-laki', 'Islam', '3111 Haylee Spur\r\nLake Mandy, MO 84162', 'Ms.', '1-337-961-9050x33235', 2),
(4, '1935', 'Gus', 'Florida', '2014-04-12', 'Laki-laki', 'Islam', '6721 Kessler Fords Suite 173\r\nKozeyville, VA 16670', 'Miss', '(197)825-0617x679', 1),
(5, '1939', 'Louisa', 'Florida', '1973-11-06', 'Laki-laki', 'Protestan', '756 Izabella Plaza Apt. 276\nNew Geovannyside, NH 82385-6993', 'Dr.', '1-370-103-6058', 2),
(6, '1916', 'Tevin', 'NewYork', '1989-03-08', 'Perempuan', 'Budha', '1902 Bobby Islands\r\nLake Dane, CA 80880', 'Prof.', '1-919-704-4742', 4),
(7, '1917', 'Imani', 'Oklahoma', '2003-02-20', 'Laki-laki', 'Budha', '193 Buckridge Drives Apt. 026\nJeromyville, AR 63637-2776', 'Ms.', '1-917-808-7775', 5),
(8, '1912', 'Gilbert', 'Montana', '2008-07-12', 'Laki-laki', 'Protestan', '9655 Cordie Cape Apt. 336\r\nDarienmouth, FL 56074-3339', 'Dr.', '05181150449', 6),
(9, '1937', 'Amparo', 'Virginia', '1972-12-14', 'Laki-laki', 'Budha', '592 Therese Trace\nEast Kenmouth, ND 81392-5170', 'Miss', '+01(0)2671179740', 3),
(11, '1912', 'Joel', 'Arkansas', '2005-01-10', 'Laki-laki', 'Islam', '000 Jocelyn Rue Suite 513\nGusikowskiside, CO 56551-5591', 'Prof.', '(386)373-1602x5120', 3),
(12, '1923', 'Blake', 'NorthCarolina', '1987-03-08', 'Laki-laki', 'Islam', '7913 Mayer Drive Apt. 996\nNew Hadley, NY 02671', 'Mrs.', '345-566-7576', 2),
(13, '1940', 'Friedrich', 'Nevada', '1978-07-26', 'Laki-laki', 'Budha', '11409 Karolann Junction\nWest Stanfordburgh, AL 01133', 'Mrs.', '(347)670-1406', 4),
(14, '1936', 'Jarrod', 'Utah', '2012-11-04', 'Laki-laki', 'Kristen', '550 Champlin Trace\nSwifttown, TN 68022', 'Ms.', '1-532-500-4571x661', 5),
(15, '1923', 'Alec', 'NewMexico', '2010-12-21', 'Perempuan', 'Protestan', '883 Elody Shoals Suite 893\nWest Adell, MT 38949', 'Dr.', '008.958.5896', 3),
(16, '1938', 'Nestor', 'Nevada', '2013-10-18', 'Perempuan', 'Budha', '592 Reichel Motorway Apt. 229\nEast Tyrellchester, HI 88775-0271', 'Miss', '+93(0)6785319052', 4),
(17, '1934', 'Eddie', 'SouthDakota', '2004-02-04', 'Perempuan', 'Khatolik', '5802 Marvin Freeway\nLake Kaitlin, NE 17810-4210', 'Dr.', '03663600824', 3),
(18, '1910', 'Kamryn', 'Georgia', '2015-12-01', 'Perempuan', 'Budha', '245 Boris Spurs\nPouroschester, UT 29963-5194', 'Miss', '1-869-970-8623x993', 5),
(19, '1923', 'Markus', 'California', '2016-11-06', 'Laki-laki', 'Protestan', '924 Klocko Corner\nLake Loyce, MT 88449', 'Ms.', '352.664.8118', 2),
(20, '1939', 'Angus', 'Nebraska', '2005-06-26', 'Laki-laki', 'Hindu', '9830 Verner Lane\nAlbinville, MS 07131-4170', 'Dr.', '06694676994', 4),
(21, '1924', 'Anibal', 'NewYork', '2015-01-12', 'Laki-laki', 'Khatolik', '50280 Gerhard Estate Apt. 135\nAndersonmouth, CO 72766-5549', 'Miss', '+59(4)1646189607', 6),
(22, '1916', 'Dino', 'Tennessee', '2019-08-01', 'Perempuan', 'Islam', '10115 Beer Bypass Apt. 982\nWest Alan, FL 36617', 'Ms.', '1-377-177-9021x2690', 4),
(23, '1919', 'Wayne', 'Idaho', '1998-09-03', 'Perempuan', 'Khatolik', '86972 General Unions Suite 953\nWest Mohammed, RI 46072', 'Miss', '(904)461-4496x174', 2),
(24, '1926', 'Raymond', 'Michigan', '1982-10-10', 'Perempuan', 'Protestan', '8249 Delbert Prairie Apt. 663\nSouth Lorenstad, NV 38717', 'Ms.', '1-111-166-0532x00909', 2),
(25, '1939', 'Randall', 'Oklahoma', '1991-05-02', 'Perempuan', 'Hindu', '0967 Crooks Haven\nNorth Damion, PA 39599', 'Mrs.', '434.277.1908x7902', 2),
(26, '1940', 'Ernest', 'Wisconsin', '2016-04-21', 'Laki-laki', 'Kristen', '0075 Margie Trail Apt. 020\nLake Madonnaport, KS 28202', 'Mrs.', '523-443-2244', 4),
(27, '1910', 'Edison', 'District of Columbia', '2001-05-08', 'Perempuan', 'Protestan', '1320 Dibbert Stravenue Apt. 300\nEast Jovany, IN 92483', 'Ms.', '1-919-442-5319x55593', 3),
(28, '1914', 'Jarret', 'Nevada', '2010-05-17', 'Laki-laki', 'Islam', '64787 Gail Station\nEast Mackland, WI 94931', 'Miss', '720-297-2434', 6),
(29, '1937', 'Josue', 'NewYork', '2018-10-09', 'Perempuan', 'Kristen', '65545 Kunde Lock Apt. 380\nAgustinashire, MS 64128', 'Mrs.', '(242)397-7297x48947', 4),
(30, '1934', 'Brain', 'Wyoming', '1993-07-11', 'Laki-laki', 'Kristen', '8222 Randy Hills\nRomaguerastad, AK 93202-3439', 'Dr.', '209.411.8522', 4),
(31, '1940', 'Trey', 'Delaware', '2003-10-01', 'Perempuan', 'Protestan', '8353 Landen Grove\nGarnetton, MI 65419-9491', 'Prof.', '01095915618', 3),
(32, '1940', 'Brennon', 'Virginia', '1989-02-16', 'Laki-laki', 'Khatolik', '6868 Kohler Heights Suite 996\nNorth Samantafort, AL 23311-3465', 'Prof.', '(968)393-9897', 4),
(33, '1936', 'Keith', 'Connecticut', '1970-02-17', 'Laki-laki', 'Islam', '91081 Nestor Ramp\nEast Jonas, GA 72421-6487', 'Prof.', '373.729.4284x45057', 3),
(34, '1924', 'Josue', 'NewYork', '1991-11-19', 'Perempuan', 'Protestan', '6063 Thiel Pike Apt. 167\nMortontown, WI 57441', 'Miss', '898-834-2936x5686', 4),
(35, '1919', 'Leopold', 'RhodeIsland', '1991-07-11', 'Laki-laki', 'Khatolik', '4263 Corrine Summit\nDomenicburgh, UT 66306', 'Dr.', '321-877-1160x486', 6),
(36, '1931', 'Gustave', 'Virginia', '2001-07-26', 'Perempuan', 'Hindu', '5933 Opal Islands Suite 881\nArmstrongville, MD 03463', 'Mrs.', '776-724-3151', 5),
(37, '1926', 'Lawson', 'Ohio', '1989-09-18', 'Perempuan', 'Islam', '1972 Thelma Union\nWest Hassie, TX 24583-4845', 'Ms.', '+82(2)5108872316', 6),
(38, '1934', 'Norwood', 'Pennsylvania', '1980-02-20', 'Perempuan', 'Islam', '1652 Carley Drive\nPort Henryhaven, KS 16925-1120', 'Mrs.', '582.700.8694x05963', 3),
(39, '1911', 'Immanuel', 'Vermont', '1996-11-11', 'Laki-laki', 'Protestan', '83613 Mozell Camp\nWest Thora, VT 46991-2561', 'Prof.', '(109)197-3721x40580', 4),
(41, '1927', 'Raul', 'Oregon', '1984-02-18', 'Laki-laki', 'Khatolik', '7780 Dibbert Estates Apt. 755\nSchimmelchester, WI 40552', 'Mrs.', '(862)732-7007x0336', 5),
(42, '1928', 'Jaylon', 'Hawaii', '2016-04-20', 'Laki-laki', 'Budha', '046 Elmer Hill\nSchmelerbury, SD 80148-7915', 'Mrs.', '1-100-076-4629', 2),
(43, '1932', 'Drake', 'Kansas', '2011-12-14', 'Laki-laki', 'Protestan', '40440 Lemuel Row\nBotsfordburgh, RI 43543', 'Mrs.', '(228)007-3861x8153', 4),
(44, '1911', 'Garret', 'NorthDakota', '1994-10-12', 'Perempuan', 'Hindu', '8517 Botsford Fords\nFerryberg, OK 73526-6538', 'Dr.', '(786)063-7240x636', 4),
(45, '1939', 'Napoleon', 'Georgia', '1974-12-03', 'Laki-laki', 'Khatolik', '6072 Chelsey Springs Apt. 478\nOpheliaberg, SC 41366', 'Miss', '+12(1)9259783786', 5),
(46, '1914', 'Marshall', 'California', '2001-01-10', 'Laki-laki', 'Protestan', '3918 King Ville\nNew Ethel, ID 79746-6677', 'Miss', '702-702-5823x783', 2),
(47, '1911', 'Cristina', 'California', '1971-03-27', 'Perempuan', 'Hindu', '367 Shanahan Points Apt. 485\nNew Ubaldo, RI 68510', 'Prof.', '(448)899-9558', 2),
(48, '1929', 'Mustafa', 'NewHampshire', '2005-02-26', 'Laki-laki', 'Hindu', '446 Wiza Park Suite 951\nWest Jayme, NH 82038', 'Ms.', '1-655-862-1368', 6),
(49, '1923', 'Don', 'Pennsylvania', '1995-03-13', 'Laki-laki', 'Khatolik', '8634 Kristin Roads Apt. 903\nO\'Keefemouth, NM 95953-0995', 'Dr.', '02157291542', 4),
(50, '1912', 'Camron', 'RhodeIsland', '1979-08-22', 'Laki-laki', 'Budha', '4944 Douglas Station\nNew Bernadette, AZ 54698', 'Miss', '979-393-9110', 6),
(51, '1914', 'Emerson', 'Utah', '1993-10-19', 'Laki-laki', 'Protestan', '34451 Harmony Square Apt. 840\nBeahanfurt, NJ 66210', 'Ms.', '681.917.2915x9576', 3),
(52, '1912', 'Gordon', 'Kansas', '1996-05-05', 'Laki-laki', 'Kristen', '48289 Bernier Loop\nWest Jedidiahtown, PA 89576', 'Mrs.', '966.656.1846x6591', 4),
(53, '1923', 'Cameron', 'NewJersey', '2012-09-01', 'Laki-laki', 'Islam', '083 Labadie Mill\nCrooksbury, MD 69677', 'Dr.', '151.893.3777x92491', 5),
(54, '1921', 'Durward', 'Louisiana', '1974-03-05', 'Laki-laki', 'Islam', '5996 Maggio Curve\nFisherstad, NH 76226', 'Ms.', '130-705-6607', 5),
(55, '1927', 'Leonard', 'NewMexico', '1995-12-29', 'Laki-laki', 'Budha', '2138 Jabari Landing\nEast Valentin, NM 02487', 'Miss', '018.275.4777x620', 6),
(56, '1927', 'Curt', 'Arkansas', '1979-09-20', 'Laki-laki', 'Hindu', '856 Kirlin Row Suite 208\nNew Florence, MT 06136', 'Mrs.', '1-475-561-4532x269', 1),
(57, '1918', 'Richmond', 'Alaska', '2007-05-16', 'Laki-laki', 'Islam', '94028 Turcotte Extension Suite 830\nPort Delia, MD 99433', 'Ms.', '708-303-2626x699', 3),
(58, '1910', 'Alfonso', 'Colorado', '2015-09-20', 'Laki-laki', 'Protestan', '77230 Herta Parkway\nNorth Gerardmouth, ID 28688', 'Dr.', '(332)279-9095x481', 2),
(59, '1934', 'Brendan', 'RhodeIsland', '2011-08-20', 'Perempuan', 'Budha', '45457 DuBuque Crest\nPort Aida, DE 17088', 'Mrs.', '1-770-041-3918x060', 5),
(60, '1939', 'Irving', 'Massachusetts', '1995-03-13', 'Perempuan', 'Protestan', '67605 Bernhard Rapid\nNorth Keith, NY 63084', 'Dr.', '1-339-773-7830', 4),
(61, '1910', 'Samir', 'Kentucky', '2009-11-09', 'Laki-laki', 'Protestan', '396 Parisian Parks Apt. 536\nLake Clementinahaven, MO 24207', 'Dr.', '(280)557-6044x0630', 4),
(62, '1924', 'Curt', 'Iowa', '1998-11-23', 'Laki-laki', 'Protestan', '8019 Justina Run\nAmparoview, SC 24528', 'Ms.', '700.439.3102x89167', 5),
(63, '1918', 'Cloyd', 'Utah', '2014-08-16', 'Perempuan', 'Budha', '87879 Stoltenberg Highway\nWest Doviechester, WA 04432-5444', 'Mrs.', '699-313-7033', 3),
(64, '1923', 'Raven', 'Connecticut', '1999-04-06', 'Perempuan', 'Budha', '146 Reichel Well\nSouth Delbert, TN 46894-8616', 'Ms.', '(666)371-6242x57323', 6),
(65, '1916', 'Maxwell', 'Alaska', '1985-12-06', 'Laki-laki', 'Islam', '06306 Cale Roads Suite 742\nAlbertland, MD 56799-4169', 'Miss', '(520)818-7627', 2),
(66, '1927', 'Mark', 'Alaska', '1982-08-10', 'Perempuan', 'Protestan', '49362 Allie Vista Suite 528\nRoeltown, WV 35161', 'Dr.', '1-473-206-3362x0912', 4),
(67, '1931', 'Dino', 'Vermont', '2019-02-18', 'Laki-laki', 'Islam', '807 Jesse Falls\nAuroreville, CO 45408-5347', 'Miss', '+02(4)0817375229', 2),
(68, '1928', 'Jamel', 'NorthDakota', '2006-05-26', 'Laki-laki', 'Protestan', '054 Amparo Springs\nBlickmouth, IA 13377-3370', 'Mrs.', '1-570-248-5085', 3),
(69, '1922', 'Timmothy', 'Illinois', '2014-08-05', 'Laki-laki', 'Protestan', '55518 Lesch Brook\nNorth Melyssaville, LA 90441-7541', 'Dr.', '02363542834', 2),
(70, '1934', 'Van', 'Florida', '2019-04-04', 'Laki-laki', 'Kristen', '9618 Gusikowski River Suite 297\nPort Carissa, NJ 45410', 'Prof.', '384.306.9625x22115', 3),
(71, '1933', 'Keyshawn', 'Kansas', '1990-05-21', 'Laki-laki', 'Kristen', '867 Ritchie Loaf Suite 254\nNikitamouth, WA 53520-7722', 'Mrs.', '912.621.2924', 6),
(72, '1915', 'Demarco', 'Alabama', '1977-03-22', 'Laki-laki', 'Kristen', '206 McDermott Ports\nPfeffershire, KS 61982', 'Mrs.', '(351)377-0953x87891', 4),
(73, '1924', 'Conrad', 'Alaska', '2018-09-29', 'Perempuan', 'Kristen', '5754 Freeda Shoal\nSouth Darrel, TN 40547-5597', 'Miss', '134-990-9715x2184', 2),
(74, '1929', 'Jarrell', 'NorthDakota', '2006-12-30', 'Perempuan', 'Protestan', '600 Danial Heights Apt. 100\nNew Tiana, NM 60066', 'Mrs.', '619-611-7397', 6),
(75, '1910', 'Junior', 'Arizona', '1983-03-11', 'Perempuan', 'Protestan', '724 Goyette Square Suite 159\nSouth Roderickland, ND 02290', 'Dr.', '(788)902-5227x49606', 6),
(76, '1938', 'Jaiden', 'NewMexico', '1981-09-15', 'Perempuan', 'Protestan', '55036 Roman Estate Suite 475\nEast Sigurd, IN 13453', 'Miss', '(914)306-5034x120', 6),
(77, '1927', 'Vernon', 'Washington', '1991-06-11', 'Laki-laki', 'Hindu', '8696 Bruen Junctions\nNorth Gust, WI 79568', 'Prof.', '(689)850-9405x54861', 1),
(78, '1939', 'Kameron', 'Pennsylvania', '2006-10-26', 'Laki-laki', 'Islam', '70674 Auer Valleys\nNew Broderick, NV 06838-5240', 'Mrs.', '(135)779-6638', 4),
(79, '1924', 'August', 'Massachusetts', '2014-08-25', 'Laki-laki', 'Budha', '988 Jeremy Bridge\nLeannonchester, MD 92639', 'Dr.', '(814)007-8532', 1),
(80, '1925', 'Domenico', 'Idaho', '1992-09-01', 'Laki-laki', 'Hindu', '6949 Anabel Fords\nJalenton, ND 74164-0704', 'Prof.', '+17(9)1142995014', 5),
(81, '1920', 'Ewell', 'NewHampshire', '1997-06-01', 'Laki-laki', 'Hindu', '8084 Rutherford Valleys Suite 457\nNorth Hoyt, AL 24201-1501', 'Prof.', '718.141.5866', 2),
(82, '1930', 'Haskell', 'WestVirginia', '1998-11-08', 'Perempuan', 'Protestan', '821 Lewis Oval\nWest Garnetfurt, CO 17574', 'Mrs.', '1-269-406-6876', 2),
(83, '1921', 'Korey', 'Oregon', '2012-01-09', 'Laki-laki', 'Protestan', '29369 Anabel Port\nFaheystad, GA 10621', 'Ms.', '(358)694-4660', 6),
(84, '1920', 'Berta', 'Tennessee', '1987-04-22', 'Laki-laki', 'Hindu', '546 Clementina Fort\nSouth Kasey, ID 54660', 'Ms.', '544.868.9980x925', 6),
(85, '1938', 'Giuseppe', 'Montana', '1975-01-13', 'Laki-laki', 'Budha', '168 Kiehn River\nNorth Nicolette, CT 21300-2213', 'Dr.', '359-795-0000x0883', 4),
(86, '1938', 'Thurman', 'District of Columbia', '1982-12-20', 'Laki-laki', 'Protestan', '118 Kamille Hollow Apt. 867\nOndrickaside, AL 42078-8279', 'Prof.', '1-234-088-9675', 1),
(87, '1922', 'Loy', 'Massachusetts', '2007-11-07', 'Laki-laki', 'Islam', '78238 Brakus Points Suite 049\nNorth Aminaport, NC 80664-3229', 'Dr.', '(074)736-4582', 1),
(88, '1931', 'Fritz', 'RhodeIsland', '2000-05-15', 'Laki-laki', 'Hindu', '9752 Kieran Trace Suite 316\nPfannerstillbury, WV 93167', 'Dr.', '1-634-415-0494x537', 6),
(89, '1912', 'Terrell', 'SouthDakota', '2008-01-26', 'Laki-laki', 'Hindu', '743 Franecki Shore Suite 362\nFadelshire, PA 55271', 'Prof.', '1-336-886-0410', 5),
(90, '1915', 'Jake', 'Wisconsin', '1990-12-10', 'Laki-laki', 'Islam', '40507 Pierre Rapids Suite 621\nJerdemouth, SD 92892-1022', 'Prof.', '1-273-439-0396x249', 5),
(91, '1926', 'Guy', 'Delaware', '1981-09-14', 'Perempuan', 'Hindu', '1371 Dicki Ford Suite 407\nHayesstad, MO 49978-8325', 'Miss', '921.009.2682', 2),
(92, '1910', 'Ricardo', 'Utah', '1970-05-17', 'Perempuan', 'Kristen', '74649 Joey Ways Apt. 579\nWindlertown, SC 37834-9777', 'Prof.', '1-868-152-2438x59274', 1),
(94, '1933', 'Xander', 'Maine', '2016-05-29', 'Perempuan', 'Hindu', '39557 Barton Forks\nLake Summer, WV 84684-4618', 'Dr.', '790-761-6225x471', 3),
(95, '1912', 'Garrett', 'Nebraska', '2004-11-10', 'Perempuan', 'Kristen', '9240 Hauck Harbor Suite 809\nLake Al, WV 48320-6525', 'Dr.', '754.792.1380', 6),
(96, '1922', 'Mike', 'Nevada', '2007-09-04', 'Perempuan', 'Budha', '208 Lottie Stravenue\nErynshire, KY 92993-5190', 'Dr.', '(032)776-9984x692', 1),
(97, '1922', 'Quinton', 'Kentucky', '2014-04-24', 'Perempuan', 'Hindu', '6168 Goodwin Drive Apt. 395\nJerdeborough, DE 04385', 'Ms.', '+63(3)7094555422', 6),
(98, '1925', 'Chaim', 'Indiana', '2011-03-13', 'Perempuan', 'Kristen', '27043 Ian Fall\nEast Janickshire, KS 00950', 'Prof.', '333.644.6012x787', 3),
(99, '1919', 'Scotty', 'Mississippi', '1987-11-26', 'Laki-laki', 'Kristen', '291 Bettye Meadow Apt. 845\nNew Jules, FL 18208', 'Mrs.', '841.094.8661x7657', 1),
(100, '1925', 'Devyn', 'Maine', '2007-05-07', 'Laki-laki', 'Hindu', '023 Elva Estates Suite 180\nWest Amandachester, FL 93079-3530', 'Dr.', '(403)323-1266', 2),
(101, '1923', 'welll', 'wel', '2019-08-21', 'Perempuan', 'Islam', '', '', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teachers`
--

CREATE TABLE `teachers` (
  `teachers_id` int(11) NOT NULL,
  `teachers_name` varchar(128) NOT NULL,
  `nip` char(11) NOT NULL,
  `pod` varchar(128) NOT NULL,
  `bod` date NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teachers`
--

INSERT INTO `teachers` (`teachers_id`, `teachers_name`, `nip`, `pod`, `bod`, `gender`, `address`, `email`, `phone`, `image`, `is_active`, `date_created`) VALUES
(3, 'Dr. Phyllis Effertz III', '1202032', 'NorthCarolina', '1976-07-14', 'Laki-laki', '53122 Chyna Drive\nPort Jordaneshire, MD 66565-8272', 'kpredovic@example.net', '903-284-3651', 'default.png', 1, '2017-08-21'),
(4, 'Destin Jenkins', '1202031', 'Florida', '2009-02-24', 'Perempuan', '1210 Selina Extensions Apt. 174\nDewittmouth, MS 23236', 'seamus51@example.org', '+01(8)5870344842', 'default.png', 1, '1974-06-10'),
(5, 'Samantha ', '1202033', 'Nebraska', '2009-05-20', 'Laki-laki', '201 Gonzalo Spring\r\nLysanneside, OR 85155-5611', 'thisismegantoro@gmail.com', '08726947578', 'default.png', 1, '2003-10-02'),
(6, 'Mrs. Kirsten Padberg', '1202034', 'RhodeIsland', '1988-06-11', 'Laki-laki', '49551 Hardy Ridge\nNew Darwinport, VT 67794', 'raymond.stroman@example.net', '560.972.8283x711', 'default.png', 1, '2018-12-10'),
(7, 'Mr. Rey Boyle ', '1202039', 'Vermont', '2008-01-21', 'Perempuan', '396 Kaia Mount Apt. 366\r\nNorth Naomi, HI 88631', 'rau.kristoffer@example.net', '996.969.5168x71950', 'default.png', 1, '1971-10-12'),
(8, 'Prof. Eli Weber', '1202037', 'Alaska', '1981-03-28', 'Laki-laki', '64078 Dina Avenue\nEast Aurelie, MD 76039', 'dschowalter@example.com', '1-376-222-4040x5600', 'default.png', 1, '1998-05-23'),
(10, 'Simone Watsica', '1202030', 'Idaho', '2013-12-07', 'Laki-laki', '882 Shields Walks Apt. 231\nPort Savannah, TN 18312', 'tbrown@example.org', '994.914.1213x1198', 'default.png', 1, '1984-03-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teachers_class`
--

CREATE TABLE `teachers_class` (
  `tc_id` int(11) NOT NULL,
  `teachers_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teachers_course`
--

CREATE TABLE `teachers_course` (
  `tcourse_id` int(11) NOT NULL,
  `teachers_id` int(128) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teachers_course`
--

INSERT INTO `teachers_course` (`tcourse_id`, `teachers_id`, `course_id`, `class_id`) VALUES
(2, 3, 2, 2),
(3, 7, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `image`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(71, 'The Mask', 'default.jpg', 'thisismegantoro@gmail.com', '$2y$10$XXpaL.GCvB0thGO3MLCVgOm9EzfSF2yZkVog/PCMOfdXNcUbBqJoy', 4, 1, '2019-08-30'),
(72, 'admin', 'default.jpg', 'admin@gmail.com', '$2y$10$Gwbz.qkK8fKZZ/p2SVMwSuGF7LfBp5YyLYq6f6v2kd2RE0iM0gz6m', 4, 1, '2019-09-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(23, 4, 12),
(24, 4, 13),
(25, 5, 13),
(26, 4, 14),
(29, 4, 15),
(32, 4, 16),
(33, 4, 17),
(36, 5, 16),
(37, 4, 19),
(38, 5, 19),
(39, 4, 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icon_menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon_menu`) VALUES
(12, 'Administrator', 'fa fa-users'),
(13, 'Data User', 'fa fa-user'),
(14, 'Data Menu', 'fa fa-bars'),
(15, 'Data Teachers', 'fa fa-user'),
(16, 'Data Students', 'fa fa-graduation-cap'),
(19, 'Course', 'fa fa-book'),
(22, 'Setting', 'fa fa-gear');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(4, 'Administrator'),
(5, 'Teachers'),
(7, 'Students');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(19, 12, 'Dashboard', 'admin', 'fa fa-tachometer', 1),
(20, 13, 'My Profile', 'user', 'fa fa-user', 1),
(21, 14, 'Menu Management', 'menu', 'fa fa-folder', 1),
(22, 12, 'Role', 'admin/role', 'fa fa-tasks', 1),
(23, 13, 'Edit Profile', 'user/edit', 'fa fa-pencil', 1),
(24, 16, 'List Students', 'students', 'fa fa-graduation-cap', 1),
(27, 15, 'List Teachers', 'teachers', 'fa fa-user', 1),
(30, 19, 'List Course', 'course', 'fa fa-book', 1),
(31, 15, 'Teachers Class', 't_class', 'fa fa-group', 1),
(33, 19, 'Teachers Course', 'teachers_course', 'fa fa-puzzle-piece', 1),
(34, 12, 'Add User', 'add_user', 'fa fa-plus', 1),
(35, 19, 'Score', 'score', 'fa fa-certificate', 1),
(37, 16, 'Kelas satu', 'kelas1', 'fa fa-cube', 1),
(38, 16, 'Kelas dua', 'kelas2', 'fa fa-cube', 1),
(39, 22, 'newspaper', 'setting/newspaper', 'fa fa-newspaper-o', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(20, 'megan180792@gmail.com', 'g8qJEMXG8wE1CHMSJvSnRLl98Nwiysz8K6EUdhEHKBY=', 1566612113),
(21, 'megan180792@gmail.com', 'VekVgWC8xWG119HFdAMjux133H96md4SONkjDFtu99w=', 1566616570),
(22, 'megan180792@gmail.com', 'vfhNJ95LeBIWDfFk2ihlYqFuihFjX74zfLgMS8tGdyg=', 1566616706),
(24, 'admin@gmail.com', 'cUzQ+AA3N8/u/CgecRbfBLU5FJQY3bgee15d7pGJ47k=', 1567516352);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indeks untuk tabel `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indeks untuk tabel `newspaper`
--
ALTER TABLE `newspaper`
  ADD PRIMARY KEY (`newspaper_id`);

--
-- Indeks untuk tabel `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`periode_id`);

--
-- Indeks untuk tabel `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`students_id`);

--
-- Indeks untuk tabel `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teachers_id`);

--
-- Indeks untuk tabel `teachers_class`
--
ALTER TABLE `teachers_class`
  ADD PRIMARY KEY (`tc_id`);

--
-- Indeks untuk tabel `teachers_course`
--
ALTER TABLE `teachers_course`
  ADD PRIMARY KEY (`tcourse_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `newspaper`
--
ALTER TABLE `newspaper`
  MODIFY `newspaper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `periode`
--
ALTER TABLE `periode`
  MODIFY `periode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teachers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `teachers_class`
--
ALTER TABLE `teachers_class`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `teachers_course`
--
ALTER TABLE `teachers_course`
  MODIFY `tcourse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
