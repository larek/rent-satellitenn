-- MySQL dump 10.13  Distrib 5.5.42, for osx10.6 (i386)
--
-- Host: localhost    Database: rentsatellitenn
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `calcdata`
--

DROP TABLE IF EXISTS `calcdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calcdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `e` int(11) NOT NULL,
  `f` int(11) NOT NULL,
  `g` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `i` int(11) NOT NULL,
  `j` int(11) NOT NULL,
  `k` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calcdata`
--

LOCK TABLES `calcdata` WRITE;
/*!40000 ALTER TABLE `calcdata` DISABLE KEYS */;
INSERT INTO `calcdata` VALUES (1,1000,200,150,1250,250,200,1000,200,150,100,50,150,100);
/*!40000 ALTER TABLE `calcdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calculator`
--

DROP TABLE IF EXISTS `calculator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calculator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calculator`
--

LOCK TABLES `calculator` WRITE;
/*!40000 ALTER TABLE `calculator` DISABLE KEYS */;
INSERT INTO `calculator` VALUES (1,'Satellite 460 до 5 суток',1000),(2,'Satellite 460 от 5 до 15 суток',200),(3,'Satellite 460 более 15',150),(4,'Satellite 520 до 5 суток',1250),(5,'Satellite 520 от 5 до 15',250),(6,'Satellite 520 более 15',200),(7,'Satellite 400 до 5 суток',1000),(8,'Satellite 400 от 5 до 15',200),(9,'Satellite 400 более 15',150),(10,'поперечины отсутствуют до 30 суток',100),(11,'поперечины отсутствуют более 30 суток',50),(12,'поперечины присутствуют до 30 суток',150),(13,'поперечины присутствуют более 30 суток',100);
/*!40000 ALTER TABLE `calculator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `phone1` varchar(250) NOT NULL,
  `phone2` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `maintext` text NOT NULL,
  `rules` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'Прокат автомобильных боксов и багажных систем','424-50-24','+7-910-385-21-44','Нижний Новгород','ул. Касьянова, д. 6 «В»','<p>Предлагаем Вам воспользоваться услугой проката автомобильных боксов и багажных систем (поперечин на крышу автомобиля).</p>\r\n<p>Предлагаемые нами к прокату автобоксы марки \"Satellite\" идеально подойдут для дальних путешествий, перевозки грузов, горнолыжного снаряжения и других вещей.</p>\r\n<p>Так же осуществляем подбор качественных поперечин, непосредственно, для Вашего автомобиля. Мы не предлагаем к установке дешевые универсальные багажники, так как это может привести к повреждению лакокрасочного покрытия автомобиля и просто небезопасно. Для клиентов, воспользовавшихся услугами аренды, предлагаеся система скидок по выкупу заинтересовавшего оборудования.</p>','<ul class=\"list-group\">\r\n<li class=\"list-group-item\">Оборудование предоставляется в аренду под залог денежных средств.</li>\r\n<li class=\"list-group-item\">Плата за аренду взимается до начала использования оборудования исходя из предполагаемого срока аренды.</li>\r\n<li class=\"list-group-item\">Расчет количества дней аренды производится следующим способом: количество календарных дней, которое оборудование находилось у клиента, плюс день установки оборудования. День возврата при этом не учитывается.</li>\r\n<li class=\"list-group-item\">При аренде оборудования на срок до 5 дней, стоимость аренды равна сумме аренды за 5 дней.</li>\r\n<li class=\"list-group-item\">При первом сеансе аренды взимается залог в размере 5000 рублей. При повторном обращении залоговая стоимость не взимается.</li>\r\n<li class=\"list-group-item\">В случае возврата оборудования раньше оговоренной даты, перерасчет стоимости аренды по фактическому количеству дней аренды не производится, за исключением случаев, когда условия досрочного возврата были оговорены отдельно.</li>\r\n<li class=\"list-group-item\">Возврат оборудования позже оговоренной даты допускается только при условии согласования изменения даты по телефону или любым другим способом.</li>\r\n<li class=\"list-group-item\">В случае возврата оборудования позже оговоренной даты, производится перерасчет стоимости аренды по фактическому количеству дней аренды. Стоимость каждых последующих суток аренды остается неизменной.</li>\r\n<li class=\"list-group-item\">При повреждении оборудования, в результате которого не возможна его дальнейшая безопасная эксплуатация, из суммы залога будет удержана стоимость восстановительного ремонта и поврежденных деталей.</li>\r\n<li class=\"list-group-item\">В случае повреждения оборудования, в результате которого невозможен восстановительный ремонт или невозврата оборудования, арендатор обязуется оплатить разницу между фактической розничной стоимостью оборудования, указанной в договоре аренды, и суммой залога.</li>\r\n<li class=\"list-group-item\">Часы работы проката с 10:00 до 19:00. Прием и выдача оборудования в нерабочие часы производится только по предварительной договоренности.</li>\r\n</ul>');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-25 11:52:04
