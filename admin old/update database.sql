-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 10:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medica-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `en_booklet`
--

CREATE TABLE `en_booklet` (
  `booklet_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `booklet_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `booklet_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_booklet`
--

INSERT INTO `en_booklet` (`booklet_id`, `user_id`, `record_date`, `booklet_title`, `booklet_files`, `last_modify`) VALUES
(1, 5, '21 Jul 2121', 'title 2', '1626872352_RFQ for Vehicles.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `en_capacity_letracy_pro`
--

CREATE TABLE `en_capacity_letracy_pro` (
  `letracy_pro_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `letracy_pro_titile` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `letracy_pro_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_capacity_letracy_pro`
--

INSERT INTO `en_capacity_letracy_pro` (`letracy_pro_id`, `user_id`, `record_date`, `letracy_pro_titile`, `letracy_pro_files`, `last_modify`) VALUES
(1, 5, '21 Jul 2121', 'hhh 444', '1626887644_RFQ for Vehicles.pdf', '2021-07-21 17:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `en_evaw_reports`
--

CREATE TABLE `en_evaw_reports` (
  `evaw_report_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `evaw_reports_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `evaw_reports_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_evaw_reports`
--

INSERT INTO `en_evaw_reports` (`evaw_report_id`, `user_id`, `record_date`, `evaw_reports_title`, `evaw_reports_files`, `last_modify`) VALUES
(1, 5, '20 Apr 2020', 'The EVAW Law in Medica Afghanistanâ€™s Legal Aid Practice ( 2011 â€“ 2012 ) ', '1587353958_1.pdf', '2020-04-20 03:39:18'),
(2, 5, '20 Apr 2020', 'Elimination of Violence Against Women in Medica Afghanistan, Legal Aid Practice,The EVAW Law in Medica Afghanistanâ€™s Legal Aid Practice (2012 â€“ 2013)', '1587354000_2.pdf', '2020-04-20 03:40:00'),
(3, 5, '20 Apr 2020', 'Making the Law on EVAW a reality 2014- 2015', '1587354020_3.pdf', '2020-04-20 03:40:20'),
(4, 5, '20 Apr 2020', 'EVAW Report 2016 and 2017', '1587354035_4.pdf', '2020-04-20 03:40:35'),
(5, 5, '20 Apr 2020', 'medica-afghanistan-evaw-report-2018', '1587354050_5.pdf', '2020-04-20 03:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `en_home_page_news`
--

CREATE TABLE `en_home_page_news` (
  `en_webhome_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `news_title` varchar(2000) COLLATE utf8_persian_ci NOT NULL,
  `news_image` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `news_dec` varchar(2000) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_home_page_news`
--

INSERT INTO `en_home_page_news` (`en_webhome_id`, `user_id`, `record_date`, `news_title`, `news_image`, `news_dec`, `last_modify`) VALUES
(30, 5, '28 Jul 2019', 'Mrs.jamila Afghani Presentation on women,peace and security', '1586221421_230738943MA.jpg', 'Mrs.jamila Afghani Presentation on women,peace and security -The situation in Afghanistan -Security Council ,8857th meeting\r\n<br>\r\nfor more information click the link : <a href=\" http://webtv.un.org/watch/the-situation-in-afghanistan-security-council-8587th-meeting/6064390699001/\">http://webtv.un.org/watch/the-situation-in-afghanistan-security-council-8587th-meeting/6064390699001/</a>', '2020-04-07 01:12:01'),
(31, 5, '29 Dec 2019', 'Reshaping My Destiny', '1586221695_1981794910111.jpg', 'Luxury, Comfort, Happiness, Safety, Security are all adjectives that we aspire for, but do not necessarily get. Being from Afghanistan and living there for most of my life, I have learned this bitter truth. Despite living in the same planet and breathing the same air, we can lead totally different realities, and unfortunately for many Afghans, the reality is a constant struggle for survival. I was fortunate enough to study abroad and reshape the life that was set for me. Today, I have traveled to many countries and seen the different realities that they all lead; however, none of those realities could change my identity. I am an Afghan female that will always be measured with different stereotypes, some more understanding, while others might see me as an opportunist, victim, terrorist, traditional, religious, etc. Different parts of my identity have led to different assumptions about who I am. The truth behind who I am and what I want to do is simple.  I am an Afghan girl that has come from disadvantageous background, yes, I am an Afghan woman who is thirsty for opportunity, yes, I am an Afghan woman that loves to challenge her circumstances and not surrender to the destiny that has been set for me by society, yes, I am an Afghan that has big dreams which does not include playing with dolls or waiting for some man to come and save me from my destiny. I like to take matters into my own hands.\r\n<br>\r\nI have been extremely lucky to have a supportive father that allowed me to spread my wings and take charge of my future. In a country like Afghanistan where many people, including members of my family, have challenged my father for supporting my dreams just because I am a girl, but he stood to his words and protected my dreams, like the way he wished someone protected his. This opened many doors of opportunity for me, that otherwise would have been impossible. My father made me feel safe to dream, and dream big. Today, if I have the courage to pursue any dream of mine, is', '2020-04-07 01:11:44'),
(32, 5, '08 Mar 2020', 'Peace from Women Perspective', '1586221810_439974685MA.jpg', 'Medica Afghanistan is a women support organization which is non partisan, non political and non\r\npartial organization. MA is actively working in Afghanistan for past 16 years and currently we are\r\nphysically present in five provinces (Kabul, Mazar, Herat, Baghlan and Samangan) with the\r\nprovision of free legal aid and psychosocial counselling for the vulnerable girls and women. We\r\nalso provide unique mediation services for the families which is one of the most impact activity.\r\nWe reach out around 3000 girls and women who are direct victims of GBV and SGBV. We have\r\nbeen actively engaged in advocacy activities not on national but also on international level\r\n<br>\r\nThe conclusion of this survey in Kabul shows that respondents are concern because of the general\r\ninsecurity, but also because of lack of social protection of life and dignity of all citizens 48% of\r\nthe respondents are concerned for their safety and protection and for them peace is to bring them\r\nsafety of life and protection of their dignity. In Herat 24% of the respondents mentioned that peace\r\nmeans to have equal access to economic and political resources. 14% of the respondent consider\r\nthe importance of women participation in all levels of the peace process.\r\nIn summation one can see that the major triangle of problem in this country is (1. insecurity, 2.\r\ncorruption 3. in equal access to opportunities and resources). I hope the politicians and policy makers\r\nconsider this triangle of Afghan problems while developing peace indicators.', '2020-04-07 01:11:21'),
(34, 5, '', 'بیانیه موسسه حمایت از زنان- میدیکا افغانستان درمورد ترور ملالی میوند', '', 'ملالی میوند فعال مدنی، خبرنگار و گوینده رادیو و تلویزیون انعکاس در ولایت ننگرهار در تاریخ دهم دسمبر آخرین روز از کارزار شانزده روزه محو خشونت علیه زن به شهادت میرسد. آن هم زمانی که گفتگوهای صلح داغ ترین موضوع بحث است. این عمل دشمنان بشریت نشان دهنده این است که به حقوق زن و حقوق بشر احترامی قائل نیستند. پیشتر', '2021-08-04 23:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `en_home_page_pro`
--

CREATE TABLE `en_home_page_pro` (
  `en_webhome_pr_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `pro_image` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `pro_title` varchar(2000) COLLATE utf8_persian_ci NOT NULL,
  `pro_dec` varchar(2000) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_home_page_pro`
--

INSERT INTO `en_home_page_pro` (`en_webhome_pr_id`, `user_id`, `record_date`, `pro_image`, `pro_title`, `pro_dec`, `last_modify`) VALUES
(7, 5, '07 Apr 2020', '1586222241_823084990DSC_9729-1024x678.jpg', 'Psychosocial and Health Program (PSHP)', 'Three decades of war have profoundly affected the mental health of women and their families. Several studies have found high levels of depression and other psychosocial problems evidenced by Afghan people, particularly women, as a result of the violence. Yet to talk about such problems is taboo in Afghan society, and very few professionals are qualified to offer psychosocial counseling. Most Afghan women still have little or no access to basic health care services, much less to the limited psychosocial services available only in major cities.\r\n<br>\r\nAgainst this background, Medica Afghanistanâ€™s staff of psychologists, highly trained by international specialists in trauma counseling, initiated services for traumatized women and girls in Afghanistan in 2002. Today, Medica Afghanistan is one of very few agencies in Afghanistan offering both services and training.\r\n<br>\r\nAmong its direct services, Medica Afghanistanâ€™s PSHP program offers supportive psychosocial counseling in individual and group sessions at key locations throughout Kabul, such as womenâ€™s shelters and prisons, the Juvenile Center and Bagh-e-Zanana (Womenâ€™s Garden), and other sites in Districts five, seven, eleven and thirteen.\r\n<br>\r\nMedica Afghanistan also maintains counseling centers in Herat, at the main hospital, and in Kabul at Rabia Balkhi and Stomatology hospitals where psychologists work jointly with Medica Afghanistan-trained medical staff to provide support to female patients who suffer psychological and physical damage as a consequence of traumatic experiences such as battering, rape, mutilation, self-immolation, or adolescent maternity.\r\n<br>\r\nMedica Afghanistanâ€™s psychologists also provide short term counseling to bed-ridden patients during their hospitalization, especially those in the major surgical units and the burn units in Kabul and Herat, and they offer crisis intervention for clients and medical professionals if needed. For women and girls who participate in group counselin', '2020-04-07 01:17:21'),
(8, 5, '07 Apr 2020', '1586222325_161729668-1024x683.jpeg', 'Legal Aid Program (LAP)', 'Medica Afghanistanâ€™s Legal Aid Program responds to Afghan womenâ€™s need for justice by trying to fill a big gap; legal services for women facing criminal prosecution or trying to engage in civil proceedings are extremely limited. Medica Afghanistanâ€™s legal aid services include criminal defence, representation in civil proceedings, mediation, raising legal awareness, providing legal advice, and facilitating safe family reintegration.\r\n\r\nMedica Afghanistanâ€™s professionally trained lawyers undertake the criminal defence of women and girls prosecuted in the cities of Kabul, Mazar-e-Sharif, and Herat free of charge. In most cases, the process starts in a detention center or juvenile rehabilitation facility where Medica Afghanistanâ€™s lawyers go to offer assistance to detained women and girls. Defence consists in advising and representing the defendant during all stages of the legal proceedings until she is released.\r\n<br>\r\nMedica Afghanistanâ€™s lawyers also represent clients during civil proceedings, whether initiated by the client or brought against her. Most civil clients seek out Medica Afghanistanâ€™s legal services at the offices they maintain on the grounds of provincial department of justice compounds. The lawyers serve the client until her case is settled in court.\r\n<br>\r\nMedica Afghanistanâ€™s mediation work consists in intervening in disputes in order to resolve them and reconcile the parties. Usually the party seeking help is a woman involved in a domestic dispute with her husband or in laws that threatens her rights within the family. More than half the complaints are brought by battered women, many with severe physical injuries.(Lawyers refer many women who seek their help to Medica Afghanistanâ€™s psychosocial counselors because the women show signs of psychological distress and traumatization.)\r\n<br>\r\nIn providing mediation services, Medica Afghanistanâ€™s lawyers and social workers work together; the lawyer handles legal matters and provides info', '2020-04-07 01:18:45'),
(9, 5, '07 Apr 2020', '1586222621_MA.jpg', 'Advocacy for Afghan Womenâ€™s Islamic and Legal Rights', 'In addition to providing direct services to women, Medica Afghanistan works diligently to improve the quality of womenâ€™s lives by advocating for their human rights. The purpose of the advocacy work is to bring about positive change in legislation, policies, and public attitudes towards women. One focus of Medica Afghanistan is a campaign for the mandatory legal registration of marriages in order to prevent child and forced marriages which are unlawful in Afghanistan and commonly result in severe violence against women and girls.\r\n<br>\r\nThis lobbying strategy, adopted in 2005, has produced positive results: the Supreme Court has elaborated an official marriage contract and established registration offices in Kabul, Herat, Mazar, and Parwan provinces. Since marriages are commonly performed by local mullahs, Medica Afghanistan organizes trainings for mullahs from rural areas.  Medica Afghanistanâ€™s lawyers guide them through the registration process, and Medica Afghanistanâ€™s psychosocial counselors present case studies of girls and their families suffering the violent consequences of child marriage.\r\n<br>\r\nIslamic scholars from the Ministry of Haj and Religious Affairs have joined Medica Afghanistanâ€™s trainings to instruct local mullahs in Islamâ€™s prohibition of child and forced marriage. Medica Afghanistanâ€™s work to strengthen the process of registration continues to raise the awareness of religious leaders, social workers, teachers, medical staff, police, staff of the Ministry of Justice and NGOs in all the provinces where Medica Afghanistan operates.\r\n<br>\r\nIn addition, Medica Afghanistan has undertaken advocacy with prosecutors and judges to implement EVAW, the law calling for the elimination of violence against women.  Medica Afghanistan also campaigns for the enactment of a new family law respectful of womenâ€™s rights currently being developed by the Family Law Drafting Committee comprised of Afghan experts and hosted by the Ministry of Womenâ€™s Affa', '2020-04-07 01:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `en_legal_activities`
--

CREATE TABLE `en_legal_activities` (
  `legal_act_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `legal_act_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `legal_act_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_legal_activities`
--

INSERT INTO `en_legal_activities` (`legal_act_id`, `user_id`, `record_date`, `legal_act_title`, `legal_act_files`, `last_modify`) VALUES
(1, 5, '14 Jul 2121', 'hii89u99lkfglkfgf', '1626293130_1626291690_1625829541_123 (1).doc', '2021-07-14 20:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `en_legal_case`
--

CREATE TABLE `en_legal_case` (
  `legal_case_id` int(11) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `legal_case_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `legal_case_dec` varchar(2000) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `en_legal_page_legal_memo`
--

CREATE TABLE `en_legal_page_legal_memo` (
  `en_legal__memo_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `legal_memo_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `legal_memo_file` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_legal_page_legal_memo`
--

INSERT INTO `en_legal_page_legal_memo` (`en_legal__memo_id`, `user_id`, `record_date`, `legal_memo_title`, `legal_memo_file`, `last_modify`) VALUES
(16, 5, '20 Apr 2020', 'Legal memo on protection orders-and protective measures', '1625827034_123.doc', '2021-07-09 10:37:14'),
(17, 5, '20 Apr 2020', 'Legal memo on compensation', '1587334954_Legal-Memo-on-Compensation_by-Medica-Afghanistan_25-Nov-2018-Copy.pdf', '2021-07-09 10:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `en_legal_page_statement`
--

CREATE TABLE `en_legal_page_statement` (
  `en_legal_statement_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `legal_statement_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `legal_statement_file` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_legal_page_statement`
--

INSERT INTO `en_legal_page_statement` (`en_legal_statement_id`, `user_id`, `record_date`, `legal_statement_title`, `legal_statement_file`, `last_modify`) VALUES
(19, 5, '20 Apr 2020', 'New Penal Code in Afghanistan permits virginity testing under the disguise of a prohibition', '1587336088_1.pdf', '2020-04-19 22:41:28'),
(20, 5, '20 Apr 2020', 'Grau 2016 supporting women s movement', '1587336114_2.pdf', '2020-04-19 22:41:54'),
(21, 5, '20 Apr 2020', 'In memory of our sisters', '1587336149_3.pdf', '2020-04-19 22:42:29'),
(22, 5, '20 Apr 2020', 'Men in support of Women_Dari', '1587336206_4.pdf', '2020-04-19 22:43:26'),
(23, 5, '20 Apr 2020', 'Men in support of Women_English', '1587336237_5.pdf', '2020-04-19 22:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `en_legal_position`
--

CREATE TABLE `en_legal_position` (
  `legal_position_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `legal_position_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `legal_position_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_legal_position`
--

INSERT INTO `en_legal_position` (`legal_position_id`, `user_id`, `record_date`, `legal_position_title`, `legal_position_files`, `last_modify`) VALUES
(4, 5, '09 Jul 2121', '12345', '1625827476_RFQ for Vehicles.pdf', '2021-07-09 10:47:04'),
(5, 5, '09 Jul 2121', '123456789', '1625829377_', '2021-07-09 11:18:21'),
(6, 5, '09 Jul 2121', '', '1625829387_', '2021-07-09 11:16:27'),
(7, 5, '09 Jul 2121', '159', '1625829541_123.doc', '2021-07-09 11:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `en_other_legal_doc`
--

CREATE TABLE `en_other_legal_doc` (
  `other_legal_doc_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `other_legal_doc_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `other_legal_doc_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_other_legal_doc`
--

INSERT INTO `en_other_legal_doc` (`other_legal_doc_id`, `user_id`, `record_date`, `other_legal_doc_title`, `other_legal_doc_files`, `last_modify`) VALUES
(1, 5, '15 Apr 2020', 'legal-brief-on-op-cedaw-copy', '1589399814_1.pdf', '2020-05-13 19:57:50'),
(2, 5, '13 May 2020', 'Report of VT Conference', '1589399904_2.pdf', '2020-05-13 19:58:47'),
(3, 5, '13 May 2020', 'Jamila speach at UN happiness webnnir â€“ April 2020', '1589399957_3.docx', '2020-05-13 19:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `en_penal_code`
--

CREATE TABLE `en_penal_code` (
  `panel_code_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `penal_code_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `penal_code_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_penal_code`
--

INSERT INTO `en_penal_code` (`panel_code_id`, `user_id`, `record_date`, `penal_code_title`, `penal_code_files`, `last_modify`) VALUES
(3, 5, '13 May 2020', 'Letter of Appeal, the draft Penal code of the Islamic Republic of Afghanistan', '1589392561_1.pdf', '2020-05-13 17:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `en_petitions`
--

CREATE TABLE `en_petitions` (
  `petitions_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `petitions_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `petitions_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_petitions`
--

INSERT INTO `en_petitions` (`petitions_id`, `user_id`, `record_date`, `petitions_title`, `petitions_files`, `last_modify`) VALUES
(3, 5, '13 May 2020', 'Petition on Penal Code and EVAW Law to the 2nd Vice President Office (14/01/2018) Dari version', '1589399549_1.pdf', '2020-05-13 19:52:29'),
(4, 5, '13 May 2020', 'Petition to His Excellency President on Penal Code Provisions and impact on EVAW  law Dari Version', '1589399577_2.pdf', '2020-05-13 19:52:57'),
(5, 5, '13 May 2020', 'Petition to the President of Afghanistan on penal code provisions and impacts on EVAW Law English version', '1589399597_3.pdf', '2020-05-13 19:53:17'),
(6, 5, '13 May 2020', 'MA Petition on Non Material Compensation', '1589399620_4.pdf', '2020-05-13 19:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `en_press_release`
--

CREATE TABLE `en_press_release` (
  `press_release_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `press_release_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `press_release_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_press_release`
--

INSERT INTO `en_press_release` (`press_release_id`, `user_id`, `record_date`, `press_release_title`, `press_release_files`, `last_modify`) VALUES
(1, 5, '20 Apr 2020', 'Press release on PO, Dari final version', '1587353028_1.pdf', '2020-04-20 03:23:48'),
(2, 5, '20 Apr 2020', 'Pressreleases on protection order ', '1587353058_2.pdf', '2020-04-20 03:24:18'),
(3, 5, '20 Apr 2020', 'Medica Afghanistan -Press Release- Anti Sexual', '1587353093_3.pdf', '2020-04-20 03:24:53'),
(4, 5, '20 Apr 2020', 'Medica Afghanistan_Press Release', '1587353133_4.pdf', '2020-04-20 03:25:33'),
(5, 5, '20 Apr 2020', 'Peace Building Networkâ€™s', '1587353149_5.pdf', '2020-04-20 03:25:49'),
(6, 5, '20 Apr 2020', 'Peace Building Networkâ€™s Press Release- English', '1587353172_6.pdf', '2020-04-20 03:26:12'),
(7, 5, '20 Apr 2020', 'Press_Release', '1587353197_7.pdf', '2020-04-20 03:26:37'),
(8, 5, '20 Apr 2020', 'Press release VT 2019', '1587353218_8.pdf', '2020-04-20 03:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `en_pshp_activities`
--

CREATE TABLE `en_pshp_activities` (
  `pshp_act_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `pshp_act_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `pshp_act_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_pshp_activities`
--

INSERT INTO `en_pshp_activities` (`pshp_act_id`, `user_id`, `record_date`, `pshp_act_title`, `pshp_act_files`, `last_modify`) VALUES
(1, 5, '14 Jul 2121', 'hi', '1626289811_RFQ for Vehicles.pdf', '2021-07-14 19:10:11'),
(2, 5, '14 Jul 2121', 'hi', '1626287070_1625829541_123 (1).doc', '2021-07-14 18:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `en_pshp_case`
--

CREATE TABLE `en_pshp_case` (
  `phsp_case_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `phsp_case_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `phsp_case_dec` varchar(2000) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` varchar(200) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_pshp_case`
--

INSERT INTO `en_pshp_case` (`phsp_case_id`, `user_id`, `record_date`, `phsp_case_title`, `phsp_case_dec`, `last_modify`) VALUES
(1, 5, '09 Apr 2020', 'A 17-year-old girl was sold and gang raped', 'In order to flee her father violence the girl ran away from home after taking advice from one of her friends. Instead, her friend sold her to a woman and from there her miseries started.\r\n <br><br>\r\nThe woman who purchased the girl offered her to a man who raped her.\r\n <br><br>\r\nThe girl said After I was sold to this man I was taken to an unknown place. There, not only did he rape me, but also there were other men who raped me.\r\n <br><br>\r\nShe thought that she had lost too much respect to return to her family. Through the woman she was sold to and through her rapists the girl became involved in immoral activities.\r\n <br><br>\r\nAfter a year police arrested her.\r\n <br><br>\r\nSource: Medica Afghanistan Psychosocial and Health Program\r\n\r\n', ''),
(2, 5, '10 Apr 2020', 'An 18-year-old girlâ€™s ears and nose were cut off by her father in law', 'The girl was brought to Bagrami Hospital, which belonged to American troops. She was in a critical condition.\r\n<br><br>\r\nThe troops were walking in the area when they found her.\r\n<br><br>\r\nAfter some days when her situation became stable she said, â€œI was married off by force. My uncle married a girl with whom he had run away. To compensate, they married me off in a baad marriage to that girlâ€™s family.\r\n<br><br>\r\nWhile she was living with her in laws, the level of violence against her increased day by day. She decided to escape the violence by running away. On the way, she was arrested and sent to prison.\r\n<br><br>\r\nWhen her prison term was completed, he father in law came to get her. He took her to a mountainous area, and cut her ears and nose. He left her there in a critical condition. That is when the American troops found her and transported her to the hospital.\r\n<br><br>\r\nAfter a lengthy treatment she was transferred to a womenâ€™s shelter in Kabul. She was eventually taken to the United States of America.\r\n<br><br>\r\nSource: Medica Afghanistan Psychosocial and Health Program', ''),
(3, 5, '10 Apr 2020', 'A 16-year-old was raped by her father', 'The incident took place while the girlâ€™s mother was attending a funeral. The girlâ€™s father raped her.\r\n<br><br>\r\n When her mother returned home, the girl told her what had happened, but her mother did not believe and cursed her instead.\r\n<br><br>\r\nIn July 2015 the girl visited the hospital with her mother, because she had abdominal pains. It turned out that she was pregnant. Her mom began hitting herself and cursing her daughter for becoming pregnant.\r\n<br><br>\r\nThe police arrested the father. The girl suffered a miscarriage. Her uncle and mom turned against her for filing a complaint against her father.\r\n<br><br>\r\nFearing for her life, the girl ran away from home. She took refuge in a womenâ€™s shelter.\r\n<br><br>\r\nShe is receiving psychosocial counseling with us.\r\n<br><br>\r\nSource: Medica Afghanistan Psychosocial and Health Program', ''),
(4, 5, '10 Apr 2020', 'Forced marriage ruined one girlâ€™s life', 'The young woman is 25 years old. Her father forced her to marry a man who lived abroad.\r\n<br><br>\r\nShe and the man had never seen or spoken to each other. After the marriage he took her abroad. There was an older lady in the house who was her husbandâ€™s first wife.\r\n<br><br>\r\nHer husband told the girl that his first wife should not know about their marriage, and asked her to pretend that she was a guest. He would show her off as a symbol of beauty to his friends. He paid constant attention to her weight, clothing and beauty. She was forced to do what she did not want to do. She had to act like a doll and was controlled by him.\r\n<br><br>\r\nOne day, she realized that she was pregnant. She shared the news with her husband with excitement. He became inflamed with anger and wanted her to have abortion in any way he could arrange. When he started beating her severely, she lost consciousness.\r\n<br><br>\r\nWhen she opened her eyes she found herself in the hospital. Her husband was discussing her abortion with the doctors. He was telling the doctors that they were partners, and did not want the child. As a result, the abortion went ahead, and the woman lost her unborn child.\r\n<br><br>\r\nWhen she found an opportunity, the young woman shared the story with her doctor. Her parents helped her to return to Afghanistan; however, the failed marriage and abortion caused her to develop mental health issues.\r\n<br><br>\r\nThe woman is receiving mental counseling now. She does not ever want to become a toy again.\r\n<br><br>\r\nShe wishes to become a real wife and mother.\r\n<br><br>\r\nSource: Medica Afghanistan Psychosocial and Health Program', '');

-- --------------------------------------------------------

--
-- Table structure for table `en_pub_annual_report`
--

CREATE TABLE `en_pub_annual_report` (
  `annual_report_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `annual_report_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `annual_report_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_pub_annual_report`
--

INSERT INTO `en_pub_annual_report` (`annual_report_id`, `user_id`, `record_date`, `annual_report_title`, `annual_report_files`, `last_modify`) VALUES
(1, 5, '17 Apr 2020', '2011 Annual Report', '1589402568_1.pdf', '2020-05-13 20:42:48'),
(2, 5, '17 Apr 2020', '2012 Annual Report', '1589402605_MA Annual Report 2012H.pdf', '2020-05-13 20:43:25'),
(3, 5, '13 May 2020', '2013 Annual Report', '1589402631_Medica Afghanistan annual report 2013.pdf', '2020-05-13 20:43:51'),
(4, 5, '13 May 2020', '2014 Annual Report', '1589402664_medica afghanistan annual 2014.pdf', '2020-05-13 20:44:24'),
(5, 5, '13 May 2020', '2015 Annual Report', '1589402681_Medica afghanistan annual 2015.pdf', '2020-05-13 20:44:41'),
(6, 5, '13 May 2020', '2016 Annual Report', '1589402773_Medica Afghanistan Annual Report 2016.pdf', '2020-05-13 20:46:13'),
(7, 5, '13 May 2020', 'EVAW  Reprort 2016-2017', '1589402784_EVAW-Report-2016-and-2017_April-2018_v3-Copy.pdf', '2020-05-13 20:46:24'),
(8, 5, '06 Oct 2020', '', '1602012173_', '2020-10-06 19:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `en_pub_interview`
--

CREATE TABLE `en_pub_interview` (
  `interview_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `interview_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `interview_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_pub_interview`
--

INSERT INTO `en_pub_interview` (`interview_id`, `user_id`, `record_date`, `interview_title`, `interview_files`, `last_modify`) VALUES
(1, 5, '21 Jul 2121', 'iter', '1626883887_1626871244_1626293130_1626291690_1625829541_123 (1).doc', '0000-00-00 00:00:00'),
(2, 5, '21 Jul 2121', 'iter', '1626883923_1626871244_1626293130_1626291690_1625829541_123 (1).doc', '0000-00-00 00:00:00'),
(3, 5, '21 Jul 2121', 'iter 1', '1626884053_RFQ for Vehicles.pdf', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `en_pub_newsletters`
--

CREATE TABLE `en_pub_newsletters` (
  `newsletters_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `newsletters_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `newsletters_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_pub_newsletters`
--

INSERT INTO `en_pub_newsletters` (`newsletters_id`, `user_id`, `record_date`, `newsletters_title`, `newsletters_files`, `last_modify`) VALUES
(1, 5, '17 Apr 2020', 'Newsletter Jan-March 2014 ', '1589557198_1.pdf', '2020-05-15 15:39:58'),
(2, 5, '15 May 2020', 'Newsletter April-June 2014', '1589557223_2.pdf', '2020-05-15 15:40:23'),
(3, 5, '15 May 2020', 'Newsletter July-Sept 2014', '1589557238_3.pdf', '2020-05-15 15:40:38'),
(4, 5, '15 May 2020', 'Newsletter Oct-Dec 2014', '1589557251_4.pdf', '2020-05-15 15:40:51'),
(5, 5, '15 May 2020', 'Newsletter Jan-March 2015', '1589557267_5.pdf', '2020-05-15 15:41:07'),
(6, 5, '15 May 2020', 'Newsletter April-June 2015', '1589557285_6.pdf', '2020-05-15 15:41:25'),
(7, 5, '15 May 2020', 'Newsletter July-Sept 2015', '1589557303_7.pdf', '2020-05-15 15:41:43'),
(8, 5, '15 May 2020', 'Newsletter Oct-Dec 2015', '1589557319_8.pdf', '2020-05-15 15:41:59'),
(9, 5, '15 May 2020', 'Newsletter Jan-March 2016', '1589557342_9.pdf', '2020-05-15 15:42:22'),
(10, 5, '15 May 2020', 'Newsletter April-June 2016', '1589557389_10.pdf', '2020-05-15 15:43:09'),
(11, 5, '15 May 2020', 'Newsletter July-Sept 2016', '1589557407_11.pdf', '2020-05-15 15:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `en_pub_poetry_literature`
--

CREATE TABLE `en_pub_poetry_literature` (
  `poetry_literature_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `poetry_literature_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `poetry_literature_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `en_pub_researches`
--

CREATE TABLE `en_pub_researches` (
  `researches_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `researches_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `researches_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_pub_researches`
--

INSERT INTO `en_pub_researches` (`researches_id`, `user_id`, `record_date`, `researches_title`, `researches_files`, `last_modify`) VALUES
(1, 5, '17 Apr 2020', 'Study on child Marriage in Afghanistan ', '1589552067_1.pdf', '2020-05-15 14:14:27'),
(2, 5, '17 Apr 2020', 'Observation of document registration center in central Kabul March 2010', '1589552102_2.pdf', '2020-05-15 14:15:02'),
(3, 5, '15 May 2020', 'Impact of gender based violence on reproductive health', '1589556412_3.pdf', '2020-05-15 15:26:52'),
(4, 5, '15 May 2020', 'Women, peach and security in Afghanistan implementation of United Nations Security Council resolution 1325', '1589556436_4.pdf', '2020-05-15 15:27:16'),
(5, 5, '15 May 2020', 'Self-Immolation of Women in Afghanistan', '1589556484_5.pdf', '2020-05-15 15:28:04'),
(6, 5, '15 May 2020', 'Women in the Afghan Civil Service ', '1589556542_6.pdf', '2020-05-15 15:29:02'),
(7, 5, '15 May 2020', 'The Role of the Judiciary in safeguarding Womenâ€™s Rights', '1589556572_7.pdf', '2020-05-15 15:29:32'),
(8, 5, '15 May 2020', 'Afghanistan Trapped in Tradition', '1589556592_8.pdf', '2020-05-15 15:29:52'),
(9, 5, '15 May 2020', 'Challenges of activism in a fragile context ', '1589556607_9.pdf', '2020-05-15 15:30:07'),
(10, 5, '15 May 2020', 'MA Peace Survey Report', '1589556627_10.pdf', '2020-05-15 15:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `en_research`
--

CREATE TABLE `en_research` (
  `research_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `research_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `research_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `en_training`
--

CREATE TABLE `en_training` (
  `training_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `training_title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `training_files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `en_training`
--

INSERT INTO `en_training` (`training_id`, `user_id`, `record_date`, `training_title`, `training_files`, `last_modify`) VALUES
(1, 5, '16 Apr 2020', 'MA Report_2019_FROM CONFLICT TO A CONSESUS BUILDING CULTURE IN  KABUL', '1589402073_1.pdf', '2020-05-13 20:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `fr_web_records`
--

CREATE TABLE `fr_web_records` (
  `record_id` int(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `record_date` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `files` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `page_section` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `last_modify` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `fr_web_records`
--

INSERT INTO `fr_web_records` (`record_id`, `user_id`, `record_date`, `title`, `files`, `page_section`, `last_modify`) VALUES
(1, 5, '20.01.2021', 'فعالیت های صحت و روان اجتماعی', 'فعالیت های صحت و روان اجتماعی', '', '2021-08-04 20:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `job_t`
--

CREATE TABLE `job_t` (
  `job_id` int(250) NOT NULL,
  `job_title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `employment_type` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `vacancy` varchar(100) NOT NULL,
  `no_of_jobs` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `education` varchar(1000) NOT NULL,
  `open_date` date NOT NULL,
  `close_date` date NOT NULL,
  `about_org` varchar(2000) NOT NULL,
  `job_description` varchar(21000) NOT NULL,
  `job_requirement` varchar(21000) NOT NULL,
  `education_details` varchar(100) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `languages` varchar(100) NOT NULL,
  `submission_guideline` varchar(2000) NOT NULL,
  `submission_email` varchar(100) NOT NULL,
  `people_view` varchar(100) NOT NULL,
  `submitted_cv` varchar(100) NOT NULL,
  `open_vac` varchar(100) NOT NULL,
  `cloes_vac` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `announcement_status` varchar(100) NOT NULL,
  `sort_date` varchar(100) NOT NULL,
  `archive_vac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_t`
--

INSERT INTO `job_t` (`job_id`, `job_title`, `location`, `nationality`, `category`, `employment_type`, `salary`, `vacancy`, `no_of_jobs`, `experience`, `gender`, `education`, `open_date`, `close_date`, `about_org`, `job_description`, `job_requirement`, `education_details`, `skill`, `languages`, `submission_guideline`, `submission_email`, `people_view`, `submitted_cv`, `open_vac`, `cloes_vac`, `remark`, `announcement_status`, `sort_date`, `archive_vac`) VALUES
(7, 'Admin officer', 'kabul ', 'afghan', 'HR', 'fULL tIME', '15000', '001', '2', ' 4-Year(s)', 'Both', 'BBA', '2019-11-28', '2021-08-31', 'The Agricultural Development Fund (ADF) is a standalone government owned financial institution with the fundamental purpose of making credit available to the agriculture sector. The target clientele of the ADF includes small commercial farmers. As well as agribusinesses engaged in distribution of agricultural inputs, producers of high-value crops, processors and exporters of agricultural products. ADF functions as a wholesale lender, channeling credit through financial and non-financial institutions. Agricultural credit provided by the ADF is enabling farmers and other players in the agriculture sector to put in practice modern production, processing and market development practices acquired in the last decade.', 'Prepare, review and provide legal advice on all legal documents including loan agreements.\r\nCourt dealing, arranging execution of mortgages/collaterals and assisting the ADF in legal or other related matters.\r\nWork with Credit administration department for arranging mortgages, collaterals, property documents (qabalah), and property evaluation.\r\nConsult and handle ADFâ€™s all legal processes including but not limited to credit/loans, lawsuits etc.\r\nWork with the Credit team for the recovery of the default loans\r\nFile legal cases in the relevant courts against the default borrowers.\r\nExecute investigation and gathering factual data regarding the legal status of clientâ€™s concerned properties to protect ADFâ€™s interest\r\nMeet with government officials, property registries, evaluators and courts to gather information on legal status of collaterals in Kabul as well as in the provinces.\r\nRepresent the ADF in the formal, judicial and customary legal systems.\r\nParticipate in judicial sessions and defends ADFâ€™s interests in court trials.\r\nParticipate in the prosecution investigation process regarding the ADFâ€™s client and employees.\r\nWrite and prepare the defense statement and objection over prosecution appeal in due time.\r\nPrepare and file legal cases/reports on behalf of the ADF for various issues related to credit/loans, employeesâ€™ etc.\r\nThe legal officer is required to physically be present 8 hours (Full day) in his duty station at ADF respective regional office.\r\nThe legal officer must provide a comprehensive progress report on status of the cases with the court and other activities he undertook during the week. This report should be submitted to line manager on weekend.\r\nOther job-related tasks as assigned by the line Manager.', 'University degree in Law.\r\nHaving at least 5 yearsâ€™ experience as a Lawyer in the country.\r\nHaving valid license from the Afghan authorities to act as a Lawyer.\r\nHaving proper knowledge of Afghan Laws and juridical system.\r\nExcellent negotiation and communication skills.\r\nAnalytical ability and serious attention to details.\r\nBe able to properly communicate in local languages and English.\r\nGood knowledge of computer programs such as Word, Excel etc.\r\nBeing flexible for travels.', 'dfhssfghUniversity degree in Law.\r\nHaving at least 5 yearsâ€™ experience as a Lawyer in the country.', 'University degree in Law.\r\nHaving at least 5 yearsâ€™ experience as a Lawyer in the country.\r\nHaving valid license from the Afghan authorities to act as a Lawyer.\r\nHaving proper knowledge of Afghan La', 'University degree in Law.\r\nHaving at least 5 yearsâ€™ experience as a Lawyer in the country.\r\nHaving', 'All Interested qualified applicants are encouraged to send their CV and Cover Letter indicating the position title and vacancy number ( ADF - 076) in the subject line before closing date to the below email address.\r\n\r\nOnly shortlisted applicants will be contacted', 'Vacancies@adf-af.org', '', '', '', '', 'publish', '', '', ''),
(8, 'Program Officer', 'Kabul', 'Afghan', 'Administrative', 'Full Time', 'NTA-Scale', 'IR-005', '6', ' 4-Year(s)', '-- Select Gender --', 'BBA', '2019-08-01', '2020-10-31', 'EQUALITY for Peace and Democracy (EPD) is an Afghan non-profit, non-governmental organization founded in 2010 for empowering women and youth at the community and policy levels in Afghanistan. The aim of EPD is to increase the capacity of women and youth so that they are able to represent their needs in development, peacebuilding, and democratic processes.\r\n\r\nVision: EPD envisions Afghanistan as a peaceful, prosperous and democratic state where all Afghans enjoy equal rights without any fear or discrimination.\r\n\r\nMission: To empower and strengthen women and youth at the community and policy levels, build coalitions and networks, and jointly promote and advocate for human rights, peace, and good governance.\r\n  ', 'Prepare, review and provide legal advice on all legal documents \r\nBuild a strong network and partnership with Provincial and District Government Office the local influential elders, Community Development Council (CDC), District Development Assembly (DDA)\r\nEnsure the establishment of a close working relationship and coordination with Local Shura members particularly those who are involved in conflict resolution and involve them for program implementation\r\nConduct activities as per the work plan\r\nHold workshops and training at the provincial and district levels as per the central officeâ€™s instruction\r\nAssist in the preparation of a work plan for the project\r\nEstablish and maintain effective cooperation and coordination mechanism between selected beneficiaries, PGO, Police Headquarter and Justice Department (Huquq Department)\r\nOrganize coordination meeting at district/provincial levels as per the work plan\r\nPrepare financial documents for the conducted activities\r\nMobilize influential elders and conduct network meetings for them\r\nPreparing financial documents for the conducted activities\r\nParticipate in the capacity building programs in Kabul\r\nMaintain, compile data/evidence and update an accurate and proper database to track and follow up with issues to be resolved by the selected beneficiaries through the informal justice system\r\nSupport the research and program department in monitoring and evaluation of the activities\r\nCollect proper means of verification for the conducted activities\r\nMaintain a properly soft and hard archive\r\nEvaluation of the project activities\r\nConduct interviews with different stakeholders as per the instructions\r\nCollect means of verification for the data collection including consent forms, photos, interview recordings, and GPS coordinates\r\nTo perform other duties as requested.\r\n', 'Having a Bachelor degree with two years of experience in the related field\r\n\r\nExperience & Skills:      \r\n\r\nExperience in capacity building programs\r\nAbility to prepare operational plans of organization/project\r\nAbility to managing and liaison with outside of organization and project\r\nFluency in written and spoken Dari and Pashto languages\r\nFamiliar with contexts, culture, and language of locals at the duty station\r\nMicrosoft Office packages (Word, Excel, PowerPoint) and Internet\r\nStrong interpersonal and communication skills, innovative and team worker\r\nHonest, active and well mannered\r\nPrevious work with elders, civil society and governmental organizations including PGO\r\nPrevious work experience in working with formal and informal conflict resolution(preferred\r\n', '  \r\nHaving a Bachelor degree with two years of experience in the related field', 'Any', 'Dari, English ', 'All Applicants are invited to submit their CVs no later than 07/12/2019 to the following e-mail address:\r\nepd.afghanistan@gmail.com\r\nPlease write the post title and or vacancy number in the subject line of your e-mail.\r\nOnly shortlisted candidates will be contacted for the written test and interview.\r\n\r\npreference will be given to those who are from Helmand province.\r\n', 'epd.afghanistan@gmail.com', '', '', '', '', 'publish', '', '', ''),
(9, 'Program Officer', 'Kabul', 'Afghan', 'Administrative', 'Full Time', 'NTA-Scale', 'IR-005', '6', ' 4-Year(s)', 'Both', 'BBA', '2020-01-01', '2020-11-29', 'EQUALITY for Peace and Democracy (EPD) is an Afghan non-profit, non-governmental organization founded in 2010 for empowering women and youth at the community and policy levels in Afghanistan. The aim of EPD is to increase the capacity of women and youth so that they are able to represent their needs in development, peacebuilding, and democratic processes.\r\n\r\nVision: EPD envisions Afghanistan as a peaceful, prosperous and democratic state where all Afghans enjoy equal rights without any fear or discrimination.\r\n\r\nMission: To empower and strengthen women and youth at the community and policy levels, build coalitions and networks, and jointly promote and advocate for human rights, peace, and good governance.\r\n  ', 'Prepare, review and provide legal advice on all legal documents \r\nBuild a strong network and partnership with Provincial and District Government Office the local influential elders, Community Development Council (CDC), District Development Assembly (DDA)\r\nEnsure the establishment of a close working relationship and coordination with Local Shura members particularly those who are involved in conflict resolution and involve them for program implementation\r\nConduct activities as per the work plan\r\nHold workshops and training at the provincial and district levels as per the central officeâ€™s instruction\r\nAssist in the preparation of a work plan for the project\r\nEstablish and maintain effective cooperation and coordination mechanism between selected beneficiaries, PGO, Police Headquarter and Justice Department (Huquq Department)\r\nOrganize coordination meeting at district/provincial levels as per the work plan\r\nPrepare financial documents for the conducted activities\r\nMobilize influential elders and conduct network meetings for them\r\nPreparing financial documents for the conducted activities\r\nParticipate in the capacity building programs in Kabul\r\nMaintain, compile data/evidence and update an accurate and proper database to track and follow up with issues to be resolved by the selected beneficiaries through the informal justice system\r\nSupport the research and program department in monitoring and evaluation of the activities\r\nCollect proper means of verification for the conducted activities\r\nMaintain a properly soft and hard archive\r\nEvaluation of the project activities\r\nConduct interviews with different stakeholders as per the instructions\r\nCollect means of verification for the data collection including consent forms, photos, interview recordings, and GPS coordinates\r\nTo perform other duties as requested.\r\n', 'Having a Bachelor degree with two years of experience in the related field\r\n\r\nExperience & Skills:      \r\n\r\nExperience in capacity building programs\r\nAbility to prepare operational plans of organization/project\r\nAbility to managing and liaison with outside of organization and project\r\nFluency in written and spoken Dari and Pashto languages\r\nFamiliar with contexts, culture, and language of locals at the duty station\r\nMicrosoft Office packages (Word, Excel, PowerPoint) and Internet\r\nStrong interpersonal and communication skills, innovative and team worker\r\nHonest, active and well mannered\r\nPrevious work with elders, civil society and governmental organizations including PGO\r\nPrevious work experience in working with formal and informal conflict resolution(preferred\r\n', '  \r\nBachelor', 'Admin', 'N/A', 'All Applicants are invited to submit their CVs no later than 07/12/2019 to the following e-mail address:\r\nepd.afghanistan@gmail.com\r\nPlease write the post title and or vacancy number in the subject line of your e-mail.\r\nOnly shortlisted candidates will be contacted for the written test and interview.\r\n\r\npreference will be given to those who are from Helmand province.\r\n', 'epd.afghanistan@gmail.com', '', '', '', '', 'publish', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(191) NOT NULL,
  `role` varchar(200) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'Super_Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(191) NOT NULL,
  `user_pic` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `department` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `user` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `role_id` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_pic`, `name`, `department`, `user`, `password`, `role_id`) VALUES
(1, '', 'user', 'PSHP', 'user', '123', 2),
(2, '', 'user', 'LAP', 'user', '123', 2),
(5, '', 'Mohammad Baseer', 'IT', 'Baseer', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy_view_counter`
--

CREATE TABLE `vacancy_view_counter` (
  `id` int(191) NOT NULL,
  `vac_id` int(191) NOT NULL,
  `ip_address` text NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy_view_counter`
--

INSERT INTO `vacancy_view_counter` (`id`, `vac_id`, `ip_address`, `visit_date`) VALUES
(5, 7, '222.222.222.222', '2019-10-15 17:04:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `en_booklet`
--
ALTER TABLE `en_booklet`
  ADD PRIMARY KEY (`booklet_id`);

--
-- Indexes for table `en_capacity_letracy_pro`
--
ALTER TABLE `en_capacity_letracy_pro`
  ADD PRIMARY KEY (`letracy_pro_id`);

--
-- Indexes for table `en_evaw_reports`
--
ALTER TABLE `en_evaw_reports`
  ADD PRIMARY KEY (`evaw_report_id`);

--
-- Indexes for table `en_home_page_news`
--
ALTER TABLE `en_home_page_news`
  ADD PRIMARY KEY (`en_webhome_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `en_home_page_pro`
--
ALTER TABLE `en_home_page_pro`
  ADD PRIMARY KEY (`en_webhome_pr_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `en_legal_activities`
--
ALTER TABLE `en_legal_activities`
  ADD PRIMARY KEY (`legal_act_id`);

--
-- Indexes for table `en_legal_case`
--
ALTER TABLE `en_legal_case`
  ADD PRIMARY KEY (`legal_case_id`);

--
-- Indexes for table `en_legal_page_legal_memo`
--
ALTER TABLE `en_legal_page_legal_memo`
  ADD PRIMARY KEY (`en_legal__memo_id`);

--
-- Indexes for table `en_legal_page_statement`
--
ALTER TABLE `en_legal_page_statement`
  ADD PRIMARY KEY (`en_legal_statement_id`);

--
-- Indexes for table `en_legal_position`
--
ALTER TABLE `en_legal_position`
  ADD PRIMARY KEY (`legal_position_id`);

--
-- Indexes for table `en_other_legal_doc`
--
ALTER TABLE `en_other_legal_doc`
  ADD PRIMARY KEY (`other_legal_doc_id`);

--
-- Indexes for table `en_penal_code`
--
ALTER TABLE `en_penal_code`
  ADD PRIMARY KEY (`panel_code_id`);

--
-- Indexes for table `en_petitions`
--
ALTER TABLE `en_petitions`
  ADD PRIMARY KEY (`petitions_id`);

--
-- Indexes for table `en_press_release`
--
ALTER TABLE `en_press_release`
  ADD PRIMARY KEY (`press_release_id`);

--
-- Indexes for table `en_pshp_activities`
--
ALTER TABLE `en_pshp_activities`
  ADD PRIMARY KEY (`pshp_act_id`);

--
-- Indexes for table `en_pshp_case`
--
ALTER TABLE `en_pshp_case`
  ADD PRIMARY KEY (`phsp_case_id`);

--
-- Indexes for table `en_pub_annual_report`
--
ALTER TABLE `en_pub_annual_report`
  ADD PRIMARY KEY (`annual_report_id`);

--
-- Indexes for table `en_pub_interview`
--
ALTER TABLE `en_pub_interview`
  ADD PRIMARY KEY (`interview_id`);

--
-- Indexes for table `en_pub_newsletters`
--
ALTER TABLE `en_pub_newsletters`
  ADD PRIMARY KEY (`newsletters_id`);

--
-- Indexes for table `en_pub_poetry_literature`
--
ALTER TABLE `en_pub_poetry_literature`
  ADD PRIMARY KEY (`poetry_literature_id`);

--
-- Indexes for table `en_pub_researches`
--
ALTER TABLE `en_pub_researches`
  ADD PRIMARY KEY (`researches_id`);

--
-- Indexes for table `en_research`
--
ALTER TABLE `en_research`
  ADD PRIMARY KEY (`research_id`);

--
-- Indexes for table `en_training`
--
ALTER TABLE `en_training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `fr_web_records`
--
ALTER TABLE `fr_web_records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `job_t`
--
ALTER TABLE `job_t`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `vacancy_view_counter`
--
ALTER TABLE `vacancy_view_counter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vac_id` (`vac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `en_booklet`
--
ALTER TABLE `en_booklet`
  MODIFY `booklet_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `en_capacity_letracy_pro`
--
ALTER TABLE `en_capacity_letracy_pro`
  MODIFY `letracy_pro_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `en_evaw_reports`
--
ALTER TABLE `en_evaw_reports`
  MODIFY `evaw_report_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `en_home_page_news`
--
ALTER TABLE `en_home_page_news`
  MODIFY `en_webhome_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `en_home_page_pro`
--
ALTER TABLE `en_home_page_pro`
  MODIFY `en_webhome_pr_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `en_legal_activities`
--
ALTER TABLE `en_legal_activities`
  MODIFY `legal_act_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `en_legal_case`
--
ALTER TABLE `en_legal_case`
  MODIFY `legal_case_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `en_legal_page_legal_memo`
--
ALTER TABLE `en_legal_page_legal_memo`
  MODIFY `en_legal__memo_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `en_legal_page_statement`
--
ALTER TABLE `en_legal_page_statement`
  MODIFY `en_legal_statement_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `en_legal_position`
--
ALTER TABLE `en_legal_position`
  MODIFY `legal_position_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `en_other_legal_doc`
--
ALTER TABLE `en_other_legal_doc`
  MODIFY `other_legal_doc_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `en_penal_code`
--
ALTER TABLE `en_penal_code`
  MODIFY `panel_code_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `en_petitions`
--
ALTER TABLE `en_petitions`
  MODIFY `petitions_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `en_press_release`
--
ALTER TABLE `en_press_release`
  MODIFY `press_release_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `en_pshp_activities`
--
ALTER TABLE `en_pshp_activities`
  MODIFY `pshp_act_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `en_pshp_case`
--
ALTER TABLE `en_pshp_case`
  MODIFY `phsp_case_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `en_pub_annual_report`
--
ALTER TABLE `en_pub_annual_report`
  MODIFY `annual_report_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `en_pub_interview`
--
ALTER TABLE `en_pub_interview`
  MODIFY `interview_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `en_pub_newsletters`
--
ALTER TABLE `en_pub_newsletters`
  MODIFY `newsletters_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `en_pub_poetry_literature`
--
ALTER TABLE `en_pub_poetry_literature`
  MODIFY `poetry_literature_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `en_pub_researches`
--
ALTER TABLE `en_pub_researches`
  MODIFY `researches_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `en_research`
--
ALTER TABLE `en_research`
  MODIFY `research_id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `en_training`
--
ALTER TABLE `en_training`
  MODIFY `training_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fr_web_records`
--
ALTER TABLE `fr_web_records`
  MODIFY `record_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_t`
--
ALTER TABLE `job_t`
  MODIFY `job_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vacancy_view_counter`
--
ALTER TABLE `vacancy_view_counter`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `en_home_page_news`
--
ALTER TABLE `en_home_page_news`
  ADD CONSTRAINT `news` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_relation` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
