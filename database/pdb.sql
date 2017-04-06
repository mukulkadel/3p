-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: pdb
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `authority` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('ashdon94@gmail.com','FULL'),('bhanucool09@gmail.com','FULL'),('mukulkadel@gmail.com','FULL');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `ename` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `etime` time DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `coordinator` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internship`
--

DROP TABLE IF EXISTS `internship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internship` (
  `cname` varchar(50) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internship`
--

LOCK TABLES `internship` WRITE;
/*!40000 ALTER TABLE `internship` DISABLE KEYS */;
/*!40000 ALTER TABLE `internship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `reg_no` varchar(50) NOT NULL,
  `c` varchar(50) DEFAULT NULL,
  `java` varchar(50) DEFAULT NULL,
  `java_adv` varchar(50) DEFAULT NULL,
  `android` varchar(50) DEFAULT NULL,
  `php` varchar(50) DEFAULT NULL,
  `html` varchar(50) DEFAULT NULL,
  `iot` varchar(50) DEFAULT NULL,
  `python` varchar(50) DEFAULT NULL,
  `ruby` varchar(50) DEFAULT NULL,
  `php_frame` varchar(50) DEFAULT NULL,
  `mysql` varchar(50) DEFAULT NULL,
  `oracle` varchar(50) DEFAULT NULL,
  `net` varchar(50) DEFAULT NULL,
  `javascript` varchar(50) DEFAULT NULL,
  `objective_c` varchar(50) DEFAULT NULL,
  `red_hat` varchar(50) DEFAULT NULL,
  `ubuntu` varchar(50) DEFAULT NULL,
  `ios` varchar(50) DEFAULT NULL,
  `bootstrap` varchar(50) DEFAULT NULL,
  `matlab` varchar(50) DEFAULT NULL,
  `ml` varchar(50) DEFAULT NULL,
  `data_mining` varchar(50) DEFAULT NULL,
  `r` varchar(50) DEFAULT NULL,
  `mongodb` varchar(50) DEFAULT NULL,
  `angular_js` varchar(50) DEFAULT NULL,
  `node_js` varchar(50) DEFAULT NULL,
  `ms_office` varchar(50) DEFAULT NULL,
  `photoshop` varchar(50) DEFAULT NULL,
  `coral_draw` varchar(50) DEFAULT NULL,
  `other` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `reg_no` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `branch` varchar(50) NOT NULL,
  `section` char(2) NOT NULL,
  `college` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `higher_studies` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `mobile_father` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `email_alter` varchar(50) DEFAULT NULL,
  `home_city` varchar(50) DEFAULT NULL,
  `tcompany` varchar(50) DEFAULT NULL,
  `txp` varchar(50) DEFAULT NULL,
  `hosteller` varchar(50) DEFAULT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES ('PIET/CE/12/517','UMA SHANKAR SHUKLA','','CS','B','PIET','1990-09-07','','987654321','987654321','2015pietcsmukul@poornima.org','usshukla517@gmail.com','Jaipur','shukla soft','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/001','ABHINAV SINGH RATHORE .','','CS','A','PIET','1996-04-11','','987654321','987654321','2015pietcsashutosh@poornima.org','ABHINAV110495@gmail.com','sirohi','GIPL','Anroid','H','2017-04-05 14:42:28'),('PIET/CE/13/002','ABHINAV SRIVASTAVA .','','CS','A','PIET','1994-02-27','','987654321','987654321','2015pietcsbhanu@poornima.org','abhinav.2702@outlook.com','Bhilwara','PIET','LARAWEL','H','2017-04-05 14:42:45'),('PIET/CE/13/003','ADITI SINGH PARMAR .','','CS','A','PIET','1995-05-27','','987654321','987654321','aditipiet003@poornima.org','aditi.parmar27@gmail.com','Sirohi','GIPL','Anroid','H','2017-04-05 14:38:20'),('PIET/CE/13/009','APOORVA TAILANG .','','CS','A','PIET','1996-12-21','','987654321','987654321','apoorvapiet009@poornima.org','apoorvatailang@gmail.com','jaipur','GIRNAR','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/011','ARJUN SINGH TANWAR .','','CS','A','PIET','1996-10-30','','987654321','987654321','arjunpiet011@poornima.org','princesingh32@ymail.com','Ringus','Tevatron Tech. ','Anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/013','ASHUTOSH GURJAR .','','CS','A','PIET','1996-06-17','','987654321','987654321','ashutoshpiet013@poornima.org','ashutoshgurjar67@gmail.com','bhilwara','GIRNAR','Anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/014','ASHWINI KUMAR SHARMA .','','CS','A','PIET','1995-05-08','','987654321','987654321','ashwanipiet014@poornima.org','ashwinis.8595@gmail.com','Jaipur','GIPL','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/015','AYUSH GOYAL .','','CS','A','PIET','1996-12-31','','987654321','987654321','ayushpiet015@poornima.org','ayushgoyal68@gmail.com','SARMATHURA','','','D','2017-04-05 14:38:20'),('PIET/CE/13/016','AZHAR KHAN .','','CS','A','PIET','1996-01-22','','987654321','987654321','azharpiet016@poornima.org','azhar.khan.78601@gmail.com','Ajmer','Youstart ','DJANGO','H','2017-04-05 14:38:20'),('PIET/CE/13/018','BHAG CHAND DHOBI .','','CS','A','PIET','1994-03-05','','987654321','987654321','bhagchandpiet018@poornima.org','','','','','','2017-04-05 14:38:20'),('PIET/CE/13/019','BHARAT KUMAR .','','CS','A','PIET','1998-03-04','','987654321','987654321','bharatpiet019@poornima.org','bhkh222@gmail.com','Sheoganj','Creative Techno','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/020','BHASKAR SHARMA .','','CS','A','PIET','1996-11-21','','987654321','987654321','bhaskarpiet020@poornima.org','tcelox@gmail.com','Chomu','','','H','2017-04-05 14:38:20'),('PIET/CE/13/027','DEEPAK RAO MARATHA .','','CS','A','PIET','1995-12-15','','987654321','987654321','deepakpiet027@poornima.org','deepakmaratha48@gmail.com','Choti Sadri','Girnar','Java','D','2017-04-05 14:38:20'),('PIET/CE/13/035','GOPESH KUMAR SHARMA .','','CS','A','PIET','1996-12-20','','987654321','987654321','gopeshpiet035@poornima.org','royalrasmanigopesh96@gmail.com','Sawai Madhopur','Dotsquare','anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/036','GUNJAN KUMAR MEHTA .','','CS','A','PIET','1997-08-01','','987654321','987654321','gunjanpiet036@poornima.org','gunjanmehta61@gmail.com','dungurpur','Sports extra Miles','Drupal','H','2017-04-05 14:38:20'),('PIET/CE/13/041','HIMANSHU PATODIA .','','CS','A','PIET','1993-11-06','','987654321','987654321','himanshupiet041@poornima.org','patodia.himanshu@gmail.com','jaipur','Dotsquare','Anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/042','JAGJEET SINGH .','','CS','A','PIET','1995-11-09','','987654321','987654321','jagjeetpiet042@poornima.org','jagjeetsingh91195@gmail.com','Alwar','Sunshine Infosoft ','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/043','JATIN THADANI .','','CS','A','PIET','1998-01-11','','987654321','987654321','jatinpiet043@poornima.org','januthadani@gmail.com','Swaimadhopur','','','H','2017-04-05 14:38:20'),('PIET/CE/13/045','JYOTI .','','CS','A','PIET','1996-08-30','','987654321','987654321','jyotipiet045@poornima.org','jyoti.singh458@yahoo.com','jaipur','Codex ','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/048','KANWAL DEEP SINGH .','','CS','A','PIET','1994-08-10','','987654321','987654321','kanwaldeeppiet048@poornima.org','amansingh20862@gmail.com','Jaipur','Sunshine Infosoft ','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/050','KARTIK PRAJAPAT .','','CS','A','PIET','1994-09-01','','987654321','987654321','kartikpiet050@poornima.org','kartikprajapat94@gmail.com','Bikaner','','','D','2017-04-05 14:38:20'),('PIET/CE/13/052','KRATI BHATNAGAR .','','CS','A','PIET','1995-09-29','','987654321','987654321','kratipiet052@poornima.org','b.krati052@gmail.com','Chittorgarh','PIET','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/054','MANGESH DARJI .','','CS','A','PIET','1996-06-21','','987654321','987654321','mangeshpiet054@poornima.org','mangeshdarji21@gmail.com','Dungarpur','Universal E solution','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/055','MANISH KUMAR KHICHAR .','','CS','A','PIET','1996-12-09','','987654321','987654321','manishpiet055@poornima.org','','','','','','2017-04-05 14:38:20'),('PIET/CE/13/056','MANISH SHARMA .','','CS','A','PIET','1996-03-31','','987654321','987654321','manishpiet056@poornima.org','msmanishsharma52@gmail.com','Gangapur City','BCW','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/062','NEHA SONI .','','CS','B','PIET','1994-11-05','','987654321','987654321','nehapiet27@poornima.org','neha.soni5611@gmail.com','Jaipur','startup lab','Anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/064','PALLAVI KHOSLA .','','CS','B','PIET','1994-09-08','','987654321','987654321','pallavipiet064@poornima.org','pallavikhosla500@gmail.com','Jaipur','Creative Techno','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/065','PARTH OBEROI .','','CS','B','PIET','1994-11-29','','987654321','987654321','parthpiet065@poornima.org','parthoberoi29@gmail.com','Jodhpur','youstart ','angular JS','H','2017-04-05 14:38:20'),('PIET/CE/13/067','POOJA KUNWAR .','','CS','B','PIET','1996-03-31','','987654321','987654321','poojapiet067@poornima.org','poojkunwar1996@gmail.com','Sirohi','GIPL','Anroid','H','2017-04-05 14:38:20'),('PIET/CE/13/068','PRADEEP KUMAR SHARMA .','','CS','B','PIET','1993-03-08','','987654321','987654321','pradeeppiet068@poornima.org','pradeep55540@gmail.com','jaipur','CNIR','IOT','Day','2017-04-05 14:38:20'),('PIET/CE/13/069','PRADEEP YADAV .','','CS','B','PIET','1995-08-11','','987654321','987654321','pradeeppiet069@poornima.org','merocks.pradeep@gmail.com','Bhiwadi','Creative Techno','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/070','PRAGYA ARYA .','','CS','B','PIET','1995-06-13','','987654321','987654321','pragyapiet070@poornima.org','sonipragya8@gmail.com','Jaipur','Sunshine Infosoftq','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/077','RAJ KUMAR SHARMA .','','CS','B','PIET','1996-08-28','','987654321','987654321','rajkumarpiet077@poornima.org','rajkumarsharma9799@gmail.com','Bhilwara','Creative Techno','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/078','RAJAT JHAKAL .','','CS','B','PIET','1994-03-25','','987654321','987654321','rajatpiet078@poornima.org','rajatjhakal.2929@gmail.com','Sardar Shahar','GIPL','Anroid','H','2017-04-05 14:38:20'),('PIET/CE/13/079','RAJAT SHARMA .','','CS','B','PIET','1995-06-02','','987654321','987654321','rajatpiet079@poornima.org','rajat26sharma@gmail.com','Sawai Madhopur','Alphonic ','Digital Marketing','H','2017-04-05 14:38:20'),('PIET/CE/13/083','RISHIKA NAGAR .','','CS','B','PIET','1993-11-29','','987654321','987654321','rishikapiet083@poornima.org','nagarrishika@gmail.com','Kota','GIPL','Anroid','H','2017-04-05 14:38:20'),('PIET/CE/13/084','RUSTAM ALI .','','CS','B','PIET','1996-08-07','','987654321','987654321','rustampiet084@poornima.org','rustamjadara@gmail.com','Sayala','Netson Tech','Python','H','2017-04-05 14:38:20'),('PIET/CE/13/085','SALONI MAHESHWARI .','','CS','B','PIET','1995-08-05','','987654321','987654321','salonipiet085@poornima.org','','','','','','2017-04-05 14:38:20'),('PIET/CE/13/087','SANJAY KUMAR SHARMA .','','CS','B','PIET','1995-10-18','','987654321','987654321','sanjaypiet087@poornima.org','sanjaykhandal07@gmail.com','nagaur','Smart tech ','IOT','H ','2017-04-05 14:38:20'),('PIET/CE/13/089','SHIVANGI VAJPAI .','','CS','B','PIET','1994-12-30','','987654321','987654321','shivangipiet089@poornima.org','shivangivajpai30@gmail.com','Jaipur','Sofware innovator','Anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/090','SHREYA RAKHEJA .','','CS','B','PIET','1996-01-07','','987654321','987654321','shreyapiet090@poornima.org','','','','','','2017-04-05 14:38:20'),('PIET/CE/13/092','SHUBHAM SHARMA .','','CS','B','PIET','1996-07-11','','987654321','987654321','shubhampiet092@poornima.org','shubhamchotia1996@gmail.com','Sikar','dotsquare','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/093','SHUBHI JAIN .','','CS','B','PIET','1996-02-18','','987654321','987654321','shubhipiet093@poornima.org','shubijain321@gmail.com','Bhartpur','Sunshine','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/096','SOHAN LAL YADAV .','','CS','B','PIET','1996-11-10','','987654321','987654321','sohanpiet096@poornima.org','','Jaipur','Creative Techno','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/097','SUDEEP DWIVEDI .','','CS','B','PIET','1996-02-19','','987654321','987654321','sudeeppiet097@poornima.org','sudeepdwivedi9@gmail.com','Dungarpur','CNIR','IOT','H','2017-04-05 14:38:20'),('PIET/CE/13/100','TARUN VERMA .','','CS','B','PIET','1994-09-11','','987654321','987654321','tarunpiet100@poornima.org','tvis4u@gmail.com','Ajmer','dotsquare','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/108','RAGHAV MAHESHWARI .','','CS','B','PIET','1996-05-03','','987654321','987654321','raghavpiet108@poornima.org','imnobody0396@gmail.com','Abohar','Techyolk Jabalpur','Python','H','2017-04-05 14:38:20'),('PIET/CE/13/401/T','Pawan Kumar Gautam','','CS','A','PIET','1996-07-21','','987654321','987654321','pawanpiet401@porrnima.org','pawangautammkn@gmail.com',' Makrana','Doomshell','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/402/T','Ravi Bunker','','CS','A','PIET','1995-08-07','','987654321','987654321','ravipiet402@poornima.org','ravibunkar07@gmail.com','jaipur','Doomshell','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/501','ABHISHEK .','','CS','A','PIET','1995-09-04','','987654321','987654321','abhishekpiet501@poornima.org','abhisheksaini99a@gmail.com','Kurukshetra','NTPC,Gaziyabad','HADOOP','D','2017-04-05 14:38:20'),('PIET/CE/13/502','AJAY KUMAR FAGERIA','','CS','A','PIET','1995-04-23','','987654321','987654321','ajaypiet502@poornima.org','ajayfageria225@gmail.com','SIKAR','Genx, Jaipur','J2EE','D','2017-04-05 14:38:20'),('PIET/CE/13/503','ALKA KUMARI','','CS','A','PIET','1995-12-18','','987654321','987654321','alkapiet503@poornima.org','kumari77alka@gmail.com','patna','IntraIT,Noida','PMPQA','H','2017-04-05 14:38:20'),('PIET/CE/13/504','AMIT GARG','','CS','A','PIET','1995-04-30','','987654321','987654321','amitpiet504@poornima.org','mtgarg07@gmail.com','Jaipur','IntraIT,Noida','PMPQA','D','2017-04-05 14:38:20'),('PIET/CE/13/505','AMOGH BHARGAVA','','CS','A','PIET','1995-03-07','','987654321','987654321','amoghpiet505@poornima.org','','','','','','2017-04-05 14:38:20'),('PIET/CE/13/506','ANIL CHOUDHARY','','CS','A','PIET','1994-05-09','','987654321','987654321','anilpiet506@poornima.org','meetanilchoudhary@gmail.com','jaipur','','','D','2017-04-05 14:38:20'),('PIET/CE/13/507','ANKIA KUMARI','','CS','A','PIET','1996-10-11','','987654321','987654321','ankiapiet507@poornima.org','ankitakumari.ca@gmail.com','shiwan','Codex','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/508','ANKIT KUMAR SARSWA','','CS','A','PIET','1994-09-13','','987654321','987654321','ankitpiet508@poornima.org','akkyrockfrendritz@gmail.com','sumerpur','AGILE Infosoft','IOS','D','2017-04-05 14:38:20'),('PIET/CE/13/509','ANMOL MOHANTY','','CS','A','PIET','1995-01-31','','987654321','987654321','anmolpiet509@poornima.org','anmol263@gmail.com','Jamshedpur','GIRNAR','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/510','ANUKRITI KULSHRESTHA','','CS','A','PIET','1996-03-11','','987654321','987654321','anukritipiet510@poornima.org','anukriti.kul11@gmail.com','Jaipur','GIRNAR','JAVA','D','2017-04-05 14:38:20'),('PIET/CE/13/511','APOORVA JAIN','','CS','A','PIET','1995-10-24','','987654321','987654321','apoorvapiet511@poornima.org','apoorvajn24@gmail.com','kota','Magnifying solution ','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/512','AYUSHI GUPTA','','CS','A','PIET','1995-07-26','','987654321','987654321','ayushipiet512@poornima.org','ayushiguptaa@gmail.com','Dholpur','Codex','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/513','BHAVESH KUMAR','','CS','A','PIET','1993-10-06','','987654321','987654321','bhaveshpiet513@poornima.org','bhaveshkumar16@gmail.com','SIROHI','AGILE Infosoft','IOS','D','2017-04-05 14:38:20'),('PIET/CE/13/514','DEEKSHA MARWADI','','CS','A','PIET','1995-05-24','','987654321','987654321','deekshapiet514@poornima.org','','','Codex','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/515','DEEPAK CHAND SONI','','CS','A','PIET','1994-07-05','','987654321','987654321','deepakpiet515@poornima.org','','','','','','2017-04-05 14:38:20'),('PIET/CE/13/517','DHRUV KUMAR','','CS','A','PIET','1995-07-08','','987654321','987654321','dhruvpiet517@poornima.org','sdhruv517@gmail.com','Khagaria','','','H','2017-04-05 14:38:20'),('PIET/CE/13/518','DIVYANI GUPTA','','CS','A','PIET','1994-04-11','','987654321','987654321','divyanipiet518@poornima.org','23divs@gmail.com','Dehri-On-Sone','Codex ','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/519','GAURANG .','','CS','A','PIET','1995-03-06','','987654321','987654321','gaurangpiet519@poornima.org','gaurang.leo.1994@gmail.com','Hazaribagh','Roaring Studio','PHP and Anroid','H','2017-04-05 14:38:20'),('PIET/CE/13/520','GAURAV CHOUDHARY','','CS','A','PIET','1996-02-02','','987654321','987654321','gauravpiet520@poornima.org','gulia.gaurav2@gmail.com','BEHROR','Girnar','Java','D','2017-04-05 14:38:20'),('PIET/CE/13/521','HARSH ARORA','','CS','A','PIET','1995-09-20','','987654321','987654321','harshpiet521@poornima.org','aroraharsh59@gmail.com','jaipur','','','D','2017-04-05 14:38:20'),('PIET/CE/13/522','HARSH JAIN','','CS','A','PIET','1995-08-17','','987654321','987654321','harashpiet522@poornima.org','jain.harsh000@gmail.com','Firozabad','Satyam Web Solution ','J2EE','H','2017-04-05 14:38:20'),('PIET/CE/13/523','JAPPREET SINGH','','CS','A','PIET','1995-01-15','','987654321','987654321','jappreetpiet523@poornima.org','singhjappreet111@gmail.com','Ajmer','','','H','2017-04-05 14:38:20'),('PIET/CE/13/524','KAMAL GUPTA','','CS','A','PIET','1994-08-06','','987654321','987654321','kamalpiet524@poornima.org','kamalbadshah007@gmail.com','HATHRAS','Sports extra Miles','Drupal','H','2017-04-05 14:38:20'),('PIET/CE/13/525','KESHAV KUMAR SHARMA .','','CS','A','PIET','1996-06-11','','987654321','987654321','keshavpiet525@poornima.org','','','','','','2017-04-05 14:38:20'),('PIET/CE/13/526','KHUSHWANT SAHAY','','CS','A','PIET','1995-10-04','','987654321','987654321','khushwantpiet526@poornima.org','khushwantsahay@gmail.com','Beawar','','','D','2017-04-05 14:38:20'),('PIET/CE/13/527','KRISHNA KUMAR','','CS','A','PIET','1994-09-07','','987654321','987654321','krishnapiet527@poornima.org','','','','','','2017-04-05 14:38:20'),('PIET/CE/13/528','KRITIKA YADAV','','CS','A','PIET','1995-01-24','','987654321','987654321','kritikapiet528@poornima.org','yadav.kritika.24@gmail.com','Gorakhpur','Roaring Studio','J2EE','D','2017-04-05 14:38:20'),('PIET/CE/13/529','M FAISAL RAMEEZ','','CS','A','PIET','1995-01-29','','987654321','987654321','mfaisalpiet529@poornima.org','','','','','','2017-04-05 14:38:20'),('PIET/CE/13/530','MANOJ KUMAR JOSHI','','CS','A','PIET','1995-03-01','','987654321','987654321','manojpiet530@poornima.org','manojleo1311995@gmail.com','Kursela','Universal E solution','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/532','MEGHA VERMA','','CS','A','PIET','1996-01-22','','987654321','987654321','meghapiet532@poornima.org','megha.verma532@gmail.com','Ghaziabad','PIET','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/533','MOHIT SINGH CHAUHAN','','CS','A','PIET','1995-01-18','','987654321','987654321','mohitpiet533@poornima.org','jontychauhan2010@gmail.com','Sikar','Sunshine Infosoft ','PHP','dd','2017-04-05 14:38:20'),('PIET/CE/13/534','NAVEEN KUMAR SAIN .','','CS','A','PIET','1994-03-04','','987654321','987654321','naveenpiet534@poornima.org','naveensain93@gmail.com','jaipur','','','D','2017-04-05 14:38:20'),('PIET/CE/13/535','NAVEEN SONI .','','CS','B','PIET','1996-06-01','','987654321','987654321','naveenpiet535@poornima.org','dashingnaveensoni@gmail.com','Makrana','Smarttechies','IOT','D','2017-04-05 14:38:20'),('PIET/CE/13/537','NAVYA BHATIA','','CS','B','PIET','1995-10-26','','987654321','987654321','navyapiet537@poornima.org','navyahatia60@gmail.com','Jaipur','Girnar','Anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/538','NEHA KUKREJA','','CS','B','PIET','1997-08-13','','987654321','987654321','nehapiet538@poornima.org','nehakukreja000@gmail.com','Jaipur','GIPL','Anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/539','NEHAL GARG','','CS','B','PIET','1995-02-16','','987654321','987654321','nehalpiet539@poornima.org','agarwalnehal007.ng@gmail.com','Abu Road','Excel PTP','HTML/CSS','H','2017-04-05 14:38:20'),('PIET/CE/13/541','PRIYANKA LADHANI','','CS','B','PIET','1996-07-23','','987654321','987654321','priyankapiet541@poornima.org','priyanka23ladani@gmail.com','GangaPur City','PIET','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/542','RASHI JAIN','','CS','B','PIET','1995-07-17','','987654321','987654321','rashipiet542@poornima.org','rshjain4@gmail.com','Sherkot','GIPL','Anroid','H','2017-04-05 14:38:20'),('PIET/CE/13/543','RISHABH BAID','','CS','B','PIET','1995-06-09','','987654321','987654321','rishabhpiet543@poornima.org','rb1995@gmail.com','jaipur','Smarttechies','IOT','','2017-04-05 14:38:20'),('PIET/CE/13/545','SALONI KUMAWAT','','CS','B','PIET','1995-03-28','','987654321','987654321','salonipiet545@poornima.org','545saloni@gmail.com','Jaipur','Girnar','Anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/547','SHIV SHAKTI .','','CS','B','PIET','1995-07-05','','987654321','987654321','shivpiet547@poornima.org','shivshaktiss17@gmail.com','Muzaffarpur','PIET','PHP','H ','2017-04-05 14:38:20'),('PIET/CE/13/548','SHIVI PARASHAR','','CS','B','PIET','1996-10-11','','987654321','987654321','shivipiet548@poornima.org','shiviparashar6445@gmail.com','Jaipur','webcontext ','Digital Marking','D','2017-04-05 14:38:20'),('PIET/CE/13/549','SONALI .','','CS','B','PIET','1996-06-15','','987654321','987654321','sonalipiet549@poornima.org','sonalikuntal6@gmail.com','Bharatpur','PIET','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/550','SUPRIYA KUMARI','','CS','B','PIET','1995-01-02','','987654321','987654321','supriyapiet550@poornima.org','supriyasingh451@gmail.com','Siwan','GIPL','Anroid','H','2017-04-05 14:38:20'),('PIET/CE/13/551','SURABHI SHARMA','','CS','B','PIET','1995-03-21','','987654321','987654321','surabhipiet551@poornima.org','sur.pagan@gmai.com','Jaipur','Girnar','Anroid','D','2017-04-05 14:38:20'),('PIET/CE/13/552','SURYAVANSHI .','','CS','B','PIET','1994-04-11','','987654321','987654321','suryavanshipiet552@poornima.org','suryavanshi5527@gmail.com','Saharsa','Creative Techno','J2EE','D','2017-04-05 14:38:20'),('PIET/CE/13/553','SWAPNIL JAIN','','CS','B','PIET','1995-09-26','','987654321','987654321','swapnilpiet553@poornima.org','jainswapnil@gmail.com','Jaipur','Smart techies','IOT','D','2017-04-05 14:38:20'),('PIET/CE/13/554','SWASTIKA DAYAL','','CS','B','PIET','1995-09-23','','987654321','987654321','swastikapiet554@poornima.org','swastikadayal2309@gmail.com','Gaya','USIT ','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/555','SWATI GUPTA','','CS','B','PIET','1997-03-08','','987654321','987654321','swatipiet555@poornima.org','swati2002gupta@gmail.com','Dholpur','PIET','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/556','UTKARSH SHARMA','','CS','B','PIET','1996-09-15','','987654321','987654321','utkarshpiet556@poornima.org','utkarshrunthala@hotmail.com','Pilani','Smart techies','IOT','H','2017-04-05 14:38:20'),('PIET/CE/13/557','VARSHA MANGLANI','','CS','B','PIET','1996-02-27','','987654321','987654321','varshapiet557@poornima.org','varsha.manglani27@gmail.com','JAIPUR','PIET','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/558','VIKAS SHARMA','','CS','B','PIET','1996-09-24','','987654321','987654321','vikaspiet558@poornima.org','vikassharma159@gmail.com','Jaipur','PIET','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/559','VISHAL KUMAR','','CS','B','PIET','1994-01-03','','987654321','987654321','vishalpiet559@poornima.org','','Patna','','','H','2017-04-05 14:38:20'),('PIET/CE/13/560','YASH SINDAL','','CS','B','PIET','1994-12-02','','987654321','987654321','yashpiet560@poornima.org','yashsindal94@gmail.com','Sirohi','dotsquare','PHP','H','2017-04-05 14:38:20'),('PIET/CE/13/561','YASH VERMA','','CS','B','PIET','1994-10-12','','987654321','987654321','yashpiet561@poornima.org','yashverma94@icloud.com','Narnaul','dotsquare','PHP','D','2017-04-05 14:38:20'),('PIET/CE/13/562','AMIT SHARMA','','CS','A','PIET','1996-03-11','','987654321','987654321','amitpiet562@poornima.org','','','','','','2017-04-05 14:38:20');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `placement`
--

DROP TABLE IF EXISTS `placement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `placement` (
  `reg_no` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `company` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `placement`
--

LOCK TABLES `placement` WRITE;
/*!40000 ALTER TABLE `placement` DISABLE KEYS */;
INSERT INTO `placement` VALUES ('PIET/CE/12/517','Google'),('PIET/CE/12/517','Yahoo'),('PIET/CE/13/002','Kadels'),('PIET/CE/13/002','India'),('PIET/CE/13/001','Mahindra'),('PIET/CE/12/517','YouTube');
/*!40000 ALTER TABLE `placement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pro`
--

DROP TABLE IF EXISTS `pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pro` (
  `reg_no` varchar(20) NOT NULL,
  `max10` float NOT NULL,
  `marks10` float NOT NULL,
  `percent10` float NOT NULL,
  `pass10` year(4) NOT NULL,
  `medium12` varchar(50) NOT NULL,
  `max12` float NOT NULL,
  `marks12` float NOT NULL,
  `percent12` float NOT NULL,
  `pass12` year(4) NOT NULL,
  `board12` varchar(50) NOT NULL,
  `percent_diplo` float NOT NULL,
  `year_diplo` year(4) NOT NULL,
  `marks_sem1` float DEFAULT NULL,
  `percent_sem1` float DEFAULT NULL,
  `result_sem1` varchar(50) DEFAULT NULL,
  `marks_sem2` float DEFAULT NULL,
  `percent_sem2` float DEFAULT NULL,
  `result_sem2` varchar(50) DEFAULT NULL,
  `marks_sem3` float DEFAULT NULL,
  `percent_sem3` float DEFAULT NULL,
  `result_sem3` varchar(50) DEFAULT NULL,
  `marks_sem4` float DEFAULT NULL,
  `percent_sem4` float DEFAULT NULL,
  `result_sem4` varchar(50) DEFAULT NULL,
  `marks_sem5` float DEFAULT NULL,
  `percent_sem5` float DEFAULT NULL,
  `result_sem5` varchar(50) DEFAULT NULL,
  `marks_sem6` float DEFAULT NULL,
  `percent_sem6` float DEFAULT NULL,
  `result_sem6` varchar(50) DEFAULT NULL,
  `marks_total` float DEFAULT NULL,
  `marks_max` float DEFAULT NULL,
  `aggregate` float DEFAULT NULL,
  `backs` int(11) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pro`
--

LOCK TABLES `pro` WRITE;
/*!40000 ALTER TABLE `pro` DISABLE KEYS */;
INSERT INTO `pro` VALUES ('PIET/CE/12/517',500,339,67.8,2008,'English',500,323,64.6,2011,'CBSEC',0,2000,647,64.7,'0',622,62.2,'2',622,62.2,'2',715,71.5,'0',606,60.6,'1',606,60.6,'1',3818,6000,63.63,6,NULL),('PIET/CE/13/001',600,440,73.33,2011,'English',500,273,54.6,2013,'CBSE',0,2000,748,74.8,'0',703,70.3,'0',688,68.8,'0',642,64.2,'0',649,64.9,'0',676,67.6,'0',4106,6000,68.43,0,NULL),('PIET/CE/13/002',10,9,85.5,2011,'English',500,384,76.8,2013,'CBSE',0,2000,786,78.6,'0',786,78.6,'0',722,72.2,'0',728,72.8,'0',664,66.4,'0',661,66.1,'0',4347,6000,72.45,0,NULL),('PIET/CE/13/003',10,8.6,81.7,2011,'English',500,323,64.6,2013,'CBSE',0,2000,732,73.2,'0',730,73,'0',674,67.4,'0',685,68.5,'0',651,65.1,'0',734,73.4,'0',4206,6000,70.1,0,NULL),('PIET/CE/13/009',600,414,69,2011,'Hindi',500,310,62,2013,'RBSE',0,2000,669,66.9,'0',648,64.8,'0',647,64.7,'0',601,60.1,'0',596,59.6,'0',631,63.1,'0',3792,6000,63.2,0,NULL),('PIET/CE/13/011',10,5.2,49.4,2011,'English',500,276,55.2,2013,'CBSE',0,2000,701,70.1,'0',668,66.8,'0',741,74.1,'0',718,71.8,'0',697,69.7,'0',791,79.1,'0',4316,6000,71.93,0,NULL),('PIET/CE/13/013',600,452,75.33,2010,'Hindi',500,403,80.6,2012,'RBSE',0,2000,649,64.9,'0',595,59.5,'0',664,66.4,'0',663,66.3,'0',651,65.1,'0',686,68.6,'0',3908,6000,65.13,0,NULL),('PIET/CE/13/014',10,8,76,2011,'English',500,348,69.6,2013,'CBSE',0,2000,608,60.8,'0',657,65.7,'0',588,58.8,'3',617,61.7,'0',558,55.8,'3',621,62.1,'0',3649,6000,60.82,6,NULL),('PIET/CE/13/015',600,357,59.5,2011,'Hindi',500,314,62.8,2013,'RBSE',0,2000,676,67.6,'0',645,64.5,'0',594,59.4,'0',565,56.5,'0',605,60.5,'0',658,65.8,'0',3743,6000,62.38,0,NULL),('PIET/CE/13/016',10,9,85.5,2011,'English',500,398,79.6,2013,'CBSE',0,2000,781,78.1,'0',778,77.8,'0',755,75.5,'0',801,80.1,'0',774,77.4,'0',829,82.9,'0',4718,6000,78.63,0,NULL),('PIET/CE/13/018',600,421,70.17,2010,'Hindi',500,284,56.8,2013,'RBSE',0,2000,553,55.3,'3',392,39.2,'3',440,44,'3',405,40.5,'5',345,34.5,'5',363,36.3,'6',2498,6000,41.63,25,NULL),('PIET/CE/13/019',600,447,74.5,2011,'Hindi',500,330,66,2013,'RBSE',0,2000,689,68.9,'0',621,62.1,'0',627,62.7,'1',613,61.3,'0',599,59.9,'0',626,62.6,'0',3775,6000,62.92,1,NULL),('PIET/CE/13/020',10,9.8,93.1,2011,'English',500,295,59,2013,'CBSE',0,2000,745,74.5,'0',724,72.4,'0',690,69,'0',622,62.2,'0',671,67.1,'0',654,65.4,'0',4106,6000,68.43,0,NULL),('PIET/CE/13/027',10,8,76,2011,'English',500,423,84.6,2013,'CBSE',0,2000,749,74.9,'0',693,69.3,'0',614,61.4,'0',611,61.1,'0',695,69.5,'0',690,69,'0',4052,6000,67.53,0,NULL),('PIET/CE/13/035',600,455,75.83,2011,'Hindi',500,290,58,2013,'RBSE',0,2000,610,61,'0',614,61.4,'0',548,54.8,'0',600,60,'0',625,62.5,'0',648,64.8,'0',3645,6000,60.75,0,NULL),('PIET/CE/13/036',600,466,77.67,2011,'Hindi',500,383,76.6,2013,'RBSE',0,2000,681,68.1,'0',746,74.6,'0',739,73.9,'0',757,75.7,'0',735,73.5,'0',761,76.1,'0',4419,6000,73.65,0,NULL),('PIET/CE/13/041',10,7.2,68.4,2010,'English',500,298,59.6,2012,'CBSE',0,2000,688,68.8,'1',724,72.4,'0',688,68.8,'0',681,68.1,'0',712,71.2,'0',739,73.9,'0',4232,6000,70.53,1,NULL),('PIET/CE/13/042',600,504,84,2011,'Hindi',500,358,71.6,2013,'RBSE',0,2000,740,74,'0',735,73.5,'0',669,66.9,'0',698,69.8,'0',724,72.4,'0',694,69.4,'0',4260,6000,71,0,NULL),('PIET/CE/13/043',600,454,75.67,2011,'Hindi',500,298,59.6,2013,'R.B.S.C',0,2000,595,59.5,'1',569,56.9,'0',635,63.5,'0',586,58.6,'0',597,59.7,'0',646,64.6,'0',3628,6000,60.47,1,NULL),('PIET/CE/13/045',600,475,79.17,2011,'Hindi',500,336,67.2,2013,'RBSE',0,2000,668,66.8,'0',620,62,'0',602,60.2,'0',622,62.2,'0',607,60.7,'3',648,64.8,'0',3767,6000,62.78,3,NULL),('PIET/CE/13/048',700,526,75.14,2011,'English',500,364,72.8,2013,'ICSE',0,2000,748,74.8,'0',744,74.4,'0',651,65.1,'0',730,73,'0',703,70.3,'0',673,67.3,'0',4249,6000,70.82,0,NULL),('PIET/CE/13/050',10,7.2,68.4,2010,'English',500,293,58.6,2013,'CBSE',0,2000,637,63.7,'1',577,57.7,'1',477,47.7,'3',535,53.5,'1',479,47.9,'3',595,59.5,'0',3300,6000,55,9,NULL),('PIET/CE/13/052',10,8.8,83.6,2011,'English',500,324,64.8,2013,'CBSE',0,2000,756,75.6,'0',734,73.4,'0',715,71.5,'0',726,72.6,'0',782,78.2,'0',801,80.1,'0',4514,6000,75.23,0,NULL),('PIET/CE/13/054',600,416,69.33,2011,'Hindi',500,310,62,2013,'RBSE',0,2000,645,64.5,'0',606,60.6,'0',599,59.9,'0',604,60.4,'0',599,59.9,'0',691,69.1,'0',3744,6000,62.4,0,NULL),('PIET/CE/13/055',600,339,56.5,2010,'Hindi',500,304,60.8,2013,'RBSE',0,2000,550,55,'2',491,49.1,'4',387,38.7,'5',410,41,'5',364,36.4,'5',265,26.5,'7',2467,6000,41.12,28,NULL),('PIET/CE/13/056',600,469,78.17,2011,'English',500,313,62.6,2013,'RBSE',0,2000,682,68.2,'0',606,60.6,'0',630,63,'0',567,56.7,'0',611,61.1,'0',667,66.7,'0',3763,6000,62.72,0,NULL),('PIET/CE/13/062',10,8.2,77.9,2011,'English',500,335,67,2013,'CBSE',0,2000,776,77.6,'0',789,78.9,'0',729,72.9,'0',774,77.4,'0',780,78,'0',799,79.9,'0',4647,6000,77.45,0,NULL),('PIET/CE/13/064',10,7.6,72.2,2011,'English',500,349,69.8,2013,'CBSE',0,2000,628,62.8,'0',687,68.7,'0',609,60.9,'0',588,58.8,'0',588,58.8,'0',636,63.6,'0',3736,6000,62.27,0,NULL),('PIET/CE/13/065',10,8,76,2011,'English',500,324,64.8,2013,'CBSE',0,2000,685,68.5,'0',714,71.4,'0',621,62.1,'0',526,52.6,'1',606,60.6,'0',584,58.4,'0',3736,6000,62.27,1,NULL),('PIET/CE/13/067',600,472,78.67,2011,'English',500,309,61.8,2013,'CBSE',0,2000,753,75.3,'0',727,72.7,'0',706,70.6,'0',688,68.8,'0',714,71.4,'0',782,78.2,'0',4370,6000,72.83,0,NULL),('PIET/CE/13/068',600,497,82.83,2009,'Hindi',650,484,74.46,2011,'RBSE',0,2000,655,65.5,'0',683,68.3,'0',547,54.7,'0',628,62.8,'0',284,28.4,'5',635,63.5,'0',3432,6000,57.2,5,NULL),('PIET/CE/13/069',10,7.2,68.4,2010,'English',500,317,63.4,2012,'CBSE',0,2000,659,65.9,'0',595,59.5,'0',571,57.1,'1',525,52.5,'2',577,57.7,'0',685,68.5,'0',3612,6000,60.2,3,NULL),('PIET/CE/13/070',10,9,85.5,2011,'English',500,344,68.8,2013,'CBSE',0,2000,737,73.7,'0',743,74.3,'0',669,66.9,'0',776,77.6,'0',778,77.8,'0',798,79.8,'0',4501,6000,75.02,0,NULL),('PIET/CE/13/077',600,380,63.33,2011,'Hindi',500,276,55.2,2013,'RBSE',0,2000,628,62.8,'0',564,56.4,'0',609,60.9,'0',544,54.4,'0',603,60.3,'0',674,67.4,'0',3622,6000,60.37,0,NULL),('PIET/CE/13/078',600,506,84.33,2010,'Hindi',500,348,69.6,2012,'RBSE',0,2000,790,79,'0',714,71.4,'0',737,73.7,'0',717,71.7,'0',750,75,'0',710,71,'0',4418,6000,73.63,0,NULL),('PIET/CE/13/079',10,7.4,70.3,2011,'English',500,340,68,2013,'CBSE',0,2000,659,65.9,'1',582,58.2,'3',649,64.9,'0',546,54.6,'0',583,58.3,'0',646,64.6,'0',3665,6000,61.08,4,NULL),('PIET/CE/13/083',10,9,85.5,2010,'English',500,327,65.4,2012,'CBSE',0,2000,797,79.7,'0',843,84.3,'0',745,74.5,'0',765,76.5,'0',758,75.8,'0',793,79.3,'0',4701,6000,78.35,0,NULL),('PIET/CE/13/084',600,511,85.17,2010,'Hindi',500,386,77.2,2012,'RBSE',0,2000,657,65.7,'0',665,66.5,'0',642,64.2,'0',619,61.9,'0',681,68.1,'0',725,72.5,'0',3989,6000,66.48,0,NULL),('PIET/CE/13/085',600,375,62.5,2011,'Hindi',600,265,44.17,2013,'RBSE',0,2000,514,51.4,'3',561,56.1,'1',576,57.6,'0',521,52.1,'2',573,57.3,'0',577,57.7,'0',3322,6000,55.37,6,NULL),('PIET/CE/13/087',10,9.2,87.4,2011,'English',500,315,63,2013,'CBSE',0,2000,726,72.6,'0',705,70.5,'0',579,57.9,'0',547,54.7,'0',520,52,'1',600,60,'0',3677,6000,61.28,1,NULL),('PIET/CE/13/089',10,8.6,81.7,2011,'English',500,347,69.4,2013,'CBSE',0,2000,697,69.7,'0',736,73.6,'0',695,69.5,'0',694,69.4,'0',733,73.3,'0',732,73.2,'0',4287,6000,71.45,0,NULL),('PIET/CE/13/090',600,380,63.33,2010,'Hindi',500,235,47,2013,'RBSE',0,2000,529,52.9,'2',423,42.3,'4',450,45,'3',564,56.4,'0',522,52.2,'0',583,58.3,'0',3071,6000,51.18,9,NULL),('PIET/CE/13/092',600,439,73.17,2010,'Hindi',500,298,59.6,2012,'R.B.S.C',0,2000,609,60.9,'1',536,53.6,'1',596,59.6,'1',524,52.4,'2',516,51.6,'0',545,54.5,'0',3326,6000,55.43,5,NULL),('PIET/CE/13/093',10,7,66.5,2011,'English',500,361,72.2,2013,'CBSE',0,2000,763,76.3,'0',660,66,'0',583,58.3,'0',668,66.8,'0',621,62.1,'0',702,70.2,'0',3997,6000,66.62,0,NULL),('PIET/CE/13/096',600,435,72.5,2010,'Hindi',500,349,69.8,2012,'RBSE',0,2000,786,78.6,'0',747,74.7,'0',695,69.5,'0',768,76.8,'0',737,73.7,'0',749,74.9,'0',4482,6000,74.7,0,NULL),('PIET/CE/13/097',10,6.6,62.7,2011,'English',500,282,56.4,2013,'CBSE',0,2000,701,70.1,'0',678,67.8,'0',695,69.5,'0',672,67.2,'0',587,58.7,'0',650,65,'0',3983,6000,66.38,0,NULL),('PIET/CE/13/100',600,417,69.5,2011,'Hindi',500,302,60.4,2013,'RBSE',0,2000,692,69.2,'0',717,71.7,'0',578,57.8,'0',657,65.7,'0',669,66.9,'0',640,64,'0',3953,6000,65.88,0,NULL),('PIET/CE/13/108',500,401,80.2,2011,'English',450,343,76.22,2013,'PSEB',0,2000,680,68,'0',741,74.1,'0',694,69.4,'0',656,65.6,'0',639,63.9,'0',716,71.6,'0',4126,6000,68.77,0,NULL),('PIET/CE/13/401/T',600,434,72.33,2011,'Hindi',500,304,60.8,2013,'RAJ. BOARD',0,2000,668,66.8,'0',604,60.4,'2',613,61.3,'0',547,54.7,'0',599,59.9,'0',625,62.5,'0',3656,6000,60.93,2,NULL),('PIET/CE/13/402/T',600,506,84.33,2010,'Hindi',500,362,72.4,2012,'RAJ. BOARD',0,2000,749,74.9,'0',702,70.2,'0',730,73,'0',729,72.9,'0',715,71.5,'0',705,70.5,'0',4330,6000,72.17,0,NULL),('PIET/CE/13/501',10,7.6,72.2,2011,'English',500,343,68.6,2013,'CBSE',0,2000,644,64.4,'1',658,65.8,'0',674,67.4,'0',640,64,'0',611,61.1,'0',734,73.4,'0',3961,6000,66.02,1,NULL),('PIET/CE/13/502',600,408,68,2009,'English',650,443,68.15,2011,'RBSE',0,2000,643,64.3,'0',663,66.3,'0',575,57.5,'0',622,62.2,'0',547,54.7,'0',589,58.9,'0',3639,6000,60.65,0,NULL),('PIET/CE/13/503',700,546,78,2011,'English',500,370,74,2013,'CBSEC',0,2000,786,78.6,'0',746,74.6,'0',679,67.9,'0',716,71.6,'0',718,71.8,'0',750,75,'0',4395,6000,73.25,0,NULL),('PIET/CE/13/504',10,6.8,64.6,2011,'English',500,315,63,2013,'CBSE',0,2000,674,67.4,'0',657,65.7,'0',648,64.8,'0',700,70,'0',670,67,'0',711,71.1,'0',4060,6000,67.67,0,NULL),('PIET/CE/13/505',700,420,60,2011,'English',500,267,53.4,2013,'CBSE',0,2000,567,56.7,'2',499,49.9,'2',458,45.8,'6',428,42.8,'5',253,25.3,'6',335,33.5,'6',2540,6000,42.33,27,NULL),('PIET/CE/13/506',10,8.2,77.9,2010,'English',500,367,73.4,2012,'CBSE',0,2000,706,70.6,'0',678,67.8,'1',567,56.7,'0',521,52.1,'2',498,49.8,'3',512,51.2,'2',3482,6000,58.03,8,NULL),('PIET/CE/13/507',500,376,75.2,2011,'Hindi',500,348,69.6,2013,'B.S.E.B.',0,2000,634,63.4,'0',597,59.7,'0',573,57.3,'0',593,59.3,'0',628,62.8,'0',641,64.1,'0',3666,6000,61.1,0,NULL),('PIET/CE/13/508',600,342,57,2010,'Hindi',500,303,60.6,2013,'BSER',0,2000,623,62.3,'0',624,62.4,'0',551,55.1,'0',606,60.6,'0',561,56.1,'0',598,59.8,'0',3563,6000,59.38,0,NULL),('PIET/CE/13/509',10,8.8,83.6,2010,'English',500,317,63.4,2012,'CBSE',0,2000,644,64.4,'0',754,75.4,'0',646,64.6,'0',733,73.3,'0',648,64.8,'0',686,68.6,'0',4111,6000,68.52,0,NULL),('PIET/CE/13/510',10,8.8,83.6,2011,'English',500,373,74.6,2013,'CBSE',0,2000,682,68.2,'0',688,68.8,'0',634,63.4,'0',631,63.1,'0',651,65.1,'0',643,64.3,'0',3929,6000,65.48,0,NULL),('PIET/CE/13/511',10,7.4,70.3,2011,'English',500,273,54.6,2013,'CBSE',0,2000,746,74.6,'0',729,72.9,'0',716,71.6,'0',672,67.2,'0',669,66.9,'0',720,72,'0',4252,6000,70.87,0,NULL),('PIET/CE/13/512',600,466,77.67,2011,'Hindi',500,363,72.6,2013,'RAJ. BOARD',0,2000,726,72.6,'0',693,69.3,'0',619,61.9,'0',669,66.9,'0',745,74.5,'0',785,78.5,'0',4237,6000,70.62,0,NULL),('PIET/CE/13/513',600,504,84,2011,'English',500,336,67.2,2012,'CBSE',0,2000,723,72.3,'0',813,81.3,'0',740,74,'0',617,61.7,'0',722,72.2,'0',710,71,'0',4325,6000,72.08,0,NULL),('PIET/CE/13/514',600,437,72.83,2010,'Hindi',500,314,62.8,2012,'RAJ. BOARD',0,2000,586,58.6,'0',620,62,'0',594,59.4,'0',549,54.9,'2',598,59.8,'0',590,59,'2',3537,6000,58.95,4,NULL),('PIET/CE/13/515',600,336,56,2009,'Hindi',650,363,55.85,2011,'RAJ. BOARD',0,2000,570,57,'0',478,47.8,'3',531,53.1,'0',466,46.6,'4',419,41.9,'4',394,39.4,'4',2858,6000,47.63,15,NULL),('PIET/CE/13/517',500,360,72,2010,'Hindi',500,318,63.6,2012,'B.S.E.B.',0,2000,562,56.2,'3',515,51.5,'1',501,50.1,'3',499,49.9,'3',425,42.5,'3',395,39.5,'3',2897,6000,48.28,16,NULL),('PIET/CE/13/518',10,8.4,79.8,2010,'English',500,306,61.2,2013,'CBSE',0,2000,682,68.2,'0',588,58.8,'0',517,51.7,'1',586,58.6,'2',605,60.5,'0',712,71.2,'0',3690,6000,61.5,3,NULL),('PIET/CE/13/519',10,8,76,2010,'English',600,463,77.17,2012,'CBSE',0,2000,801,80.1,'0',751,75.1,'0',744,74.4,'0',783,78.3,'0',772,77.2,'0',872,87.2,'0',4723,6000,78.72,0,NULL),('PIET/CE/13/520',600,390,65,2010,'Hindi',500,302,60.4,2013,'CBSE',0,2000,606,60.6,'1',420,42,'3',528,52.8,'0',561,56.1,'0',665,66.5,'0',653,65.3,'0',3433,6000,57.22,4,NULL),('PIET/CE/13/521',10,7.2,68.4,2011,'English',500,287,57.4,2013,'CBSEC',0,2000,620,62,'0',570,57,'2',617,61.7,'0',599,59.9,'0',596,59.6,'0',622,62.2,'2',3624,6000,60.4,4,NULL),('PIET/CE/13/522',10,8.6,81.7,2011,'English',500,394,78.8,2013,'CBSE',0,2000,763,76.3,'0',765,76.5,'0',710,71,'0',733,73.3,'0',720,72,'0',782,78.2,'0',4473,6000,74.55,0,NULL),('PIET/CE/13/523',600,398,66.33,2011,'Hindi',500,292,58.4,2013,'RBSE',0,2000,674,67.4,'0',723,72.3,'0',681,68.1,'0',692,69.2,'0',694,69.4,'0',722,72.2,'0',4186,6000,69.77,0,NULL),('PIET/CE/13/524',10,8.8,83.6,2011,'English',500,371,74.2,2013,'CBSE',0,2000,779,77.9,'0',703,70.3,'0',749,74.9,'0',755,75.5,'0',701,70.1,'0',736,73.6,'0',4423,6000,73.72,0,NULL),('PIET/CE/13/525',600,364,60.67,2010,'Hindi',500,286,57.2,2013,'RBSE',0,2000,389,38.9,'5',195,19.5,'6',46,4.6,'11',0,0,'0',178,17.8,'6',68,6.8,'11',876,5000,17.52,39,NULL),('PIET/CE/13/526',600,529,88.17,2010,'Hindi',500,352,70.4,2013,'RBSE',0,2000,771,77.1,'0',684,68.4,'1',571,57.1,'0',629,62.9,'0',617,61.7,'0',734,73.4,'0',4006,6000,66.77,1,NULL),('PIET/CE/13/527',500,310,62,2009,'Hindi',500,325,65,2011,'B.S.E.B.',0,2000,297,29.7,'6',129,12.9,'10',0,0,'0',0,0,'0',0,0,'0',0,0,'0',426,2000,21.3,16,NULL),('PIET/CE/13/528',700,577,82.43,2011,'English',500,301,60.2,2013,'CBSE',0,2000,808,80.8,'0',718,71.8,'0',687,68.7,'0',632,63.2,'0',0,0,'0',529,52.9,'2',3374,5000,67.48,2,NULL),('PIET/CE/13/529',10,9.4,89.3,2011,'English',500,310,62,2013,'CBSEC',0,2000,550,55,'2',414,41.4,'3',396,39.6,'3',476,47.6,'5',506,50.6,'2',625,62.5,'0',2967,6000,49.45,15,NULL),('PIET/CE/13/530',500,357,71.4,2009,'Hindi',500,319,63.8,2011,'B.S.E.B.',0,2000,584,58.4,'1',535,53.5,'1',473,47.3,'2',451,45.1,'4',296,29.6,'6',549,54.9,'0',2888,6000,48.13,14,NULL),('PIET/CE/13/532',10,8,76,2011,'English',500,336,67.2,2013,'CBSE',0,2000,657,65.7,'0',567,56.7,'1',585,58.5,'0',561,56.1,'2',586,58.6,'0',561,56.1,'0',3517,6000,58.62,3,NULL),('PIET/CE/13/533',600,483,80.5,2010,'English',500,384,76.8,2012,'CBSE',0,2000,742,74.2,'0',662,66.2,'0',656,65.6,'0',634,63.4,'0',645,64.5,'0',634,63.4,'0',3973,6000,66.22,0,NULL),('PIET/CE/13/534',600,383,63.83,2010,'Hindi',500,320,64,2013,'RBSE',0,2000,572,57.2,'0',533,53.3,'1',590,59,'0',495,49.5,'4',523,52.3,'4',603,60.3,'0',3316,6000,55.27,9,NULL),('PIET/CE/13/535',600,461,76.83,2011,'Hindi',500,345,69,2013,'RBSE',0,2000,589,58.9,'1',482,48.2,'2',492,49.2,'4',375,37.5,'6',361,36.1,'5',414,41.4,'4',2713,6000,45.22,22,NULL),('PIET/CE/13/537',10,10,95,2011,'English',500,386,77.2,2013,'CBSE',0,2000,814,81.4,'0',759,75.9,'0',744,74.4,'0',679,67.9,'0',742,74.2,'0',787,78.7,'0',4525,6000,75.42,0,NULL),('PIET/CE/13/538',600,418,69.67,2011,'Hindi',500,273,54.6,2013,'RBSE',0,2000,685,68.5,'0',721,72.1,'0',655,65.5,'0',672,67.2,'0',695,69.5,'0',791,79.1,'0',4219,6000,70.32,0,NULL),('PIET/CE/13/539',10,9.4,89.3,2011,'English',500,388,77.6,2013,'CBSE',0,2000,746,74.6,'0',731,73.1,'0',704,70.4,'0',633,63.3,'0',611,61.1,'0',534,53.4,'2',3959,6000,65.98,2,NULL),('PIET/CE/13/541',600,461,76.83,2011,'Hindi',500,380,76,2013,'RBSE',0,2000,748,74.8,'0',716,71.6,'0',737,73.7,'0',677,67.7,'0',703,70.3,'0',783,78.3,'0',4364,6000,72.73,0,NULL),('PIET/CE/13/542',10,9.4,89.3,2011,'English',500,447,89.4,2013,'CBSE',0,2000,816,81.6,'0',803,80.3,'0',750,75,'0',742,74.2,'0',747,74.7,'0',777,77.7,'0',4635,6000,77.25,0,NULL),('PIET/CE/13/543',600,465,77.5,2011,'English',500,266,53.2,2013,'CBSE',0,2000,595,59.5,'1',489,48.9,'3',494,49.4,'3',459,45.9,'4',386,38.6,'3',431,43.1,'4',2854,6000,47.57,18,NULL),('PIET/CE/13/545',10,10,95,2011,'English',500,372,74.4,2013,'CBSE',0,2000,838,83.8,'0',814,81.4,'0',740,74,'0',733,73.3,'0',797,79.7,'0',784,78.4,'0',4706,6000,78.43,0,NULL),('PIET/CE/13/547',500,392,78.4,2010,'English',500,357,71.4,2012,'B.S.E.B.',0,2000,814,81.4,'0',839,83.9,'0',833,83.3,'0',788,78.8,'0',810,81,'0',812,81.2,'0',4896,6000,81.6,0,NULL),('PIET/CE/13/548',10,9,85.5,2011,'English',500,345,69,2013,'CBSE',0,2000,683,68.3,'1',722,72.2,'0',586,58.6,'1',566,56.6,'0',611,61.1,'0',635,63.5,'0',3803,6000,63.38,2,NULL),('PIET/CE/13/549',600,483,80.5,2011,'Hindi',500,367,73.4,2013,'RBSE',0,2000,745,74.5,'0',732,73.2,'0',733,73.3,'0',709,70.9,'0',727,72.7,'0',814,81.4,'0',4460,6000,74.33,0,NULL),('PIET/CE/13/550',10,7.8,74.1,2010,'English',600,445,74.17,2012,'CBSE',0,2000,803,80.3,'0',740,74,'0',735,73.5,'0',773,77.3,'0',753,75.3,'0',806,80.6,'0',4610,6000,76.83,0,NULL),('PIET/CE/13/551',10,9.4,89.3,2011,'English',500,369,73.8,2013,'CBSE',0,2000,847,84.7,'0',793,79.3,'0',769,76.9,'0',779,77.9,'0',752,75.2,'0',794,79.4,'0',4734,6000,78.9,0,NULL),('PIET/CE/13/552',500,395,79,2010,'Hindi',500,376,75.2,2012,'B.S.E.B.',0,2000,573,57.3,'0',620,62,'0',528,52.8,'0',611,61.1,'0',636,63.6,'0',712,71.2,'0',3680,6000,61.33,0,NULL),('PIET/CE/13/553',10,8,76,2011,'English',500,350,70,2013,'CBSE',0,2000,667,66.7,'0',666,66.6,'0',670,67,'0',697,69.7,'0',648,64.8,'0',653,65.3,'0',4001,6000,66.68,0,NULL),('PIET/CE/13/554',10,7.4,70.3,2010,'English',500,323,64.6,2013,'B.S.E.B',0,2000,631,63.1,'0',640,64,'0',622,62.2,'0',654,65.4,'0',640,64,'0',717,71.7,'0',3904,6000,65.07,0,NULL),('PIET/CE/13/555',600,501,83.5,2011,'Hindi',500,390,78,2013,'R.B.S.C',0,2000,713,71.3,'0',724,72.4,'0',706,70.6,'0',676,67.6,'0',722,72.2,'0',742,74.2,'0',4283,6000,71.38,0,NULL),('PIET/CE/13/556',10,6.4,60.8,2011,'English',500,275,55,2013,'CBSE',0,2000,515,51.5,'2',547,54.7,'1',431,43.1,'3',427,42.7,'5',322,32.2,'6',499,49.9,'0',2741,6000,45.68,17,NULL),('PIET/CE/13/557',600,418,69.67,2011,'Hindi',500,319,63.8,2013,'RBSE',0,2000,639,63.9,'0',719,71.9,'0',749,74.9,'0',718,71.8,'0',690,69,'0',699,69.9,'0',4214,6000,70.23,0,NULL),('PIET/CE/13/558',10,6.8,64.6,2011,'English',500,400,80,2013,'CBSE',0,2000,711,71.1,'0',695,69.5,'0',771,77.1,'0',664,66.4,'0',686,68.6,'1',702,70.2,'0',4229,6000,70.48,1,NULL),('PIET/CE/13/559',500,301,60.2,2009,'English',500,280,56,2011,'BSEB-PATANA',0,2000,678,67.8,'1',681,68.1,'0',662,66.2,'0',664,66.4,'0',600,60,'0',674,67.4,'0',3959,6000,65.98,1,NULL),('PIET/CE/13/560',10,8.2,77.9,2011,'English',500,321,64.2,2013,'CBSE',0,2000,705,70.5,'0',679,67.9,'0',689,68.9,'0',615,61.5,'0',633,63.3,'0',660,66,'0',3981,6000,66.35,0,NULL),('PIET/CE/13/561',10,7.4,70.3,2011,'English',500,336,67.2,2013,'CBSE',0,2000,628,62.8,'2',639,63.9,'0',622,62.2,'0',498,49.8,'5',490,49,'3',620,62,'0',3497,6000,58.28,10,NULL),('PIET/CE/13/562',10,8.6,81.7,2011,'English',500,312,62.4,2013,'CBSE',0,2000,522,52.2,'2',431,43.1,'3',451,45.1,'6',441,44.1,'5',346,34.6,'6',288,28.8,'7',2479,6000,41.32,29,NULL);
/*!40000 ALTER TABLE `pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requests` (
  `reg_no` varchar(50) DEFAULT NULL,
  `email_alter` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `mobile_father` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'PENDING',
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES ('PIET/CE/12/517','usshukla517@gmail.com','987654321','','PENDING',NULL),('PIET/CE/12/517','usshukla517@gmail.com','987654321','','PENDING',NULL),('PIET/CE/12/517','usshukla517@gmail.com','987654321','987654321','PENDING',NULL),('PIET/CE/12/517','usshukla517@gmail.com','987654321','987654321','PENDING',NULL);
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-06 10:48:58
