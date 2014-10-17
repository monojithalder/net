-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.18-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema net
--

CREATE DATABASE IF NOT EXISTS net;
USE net;

--
-- Definition of table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `uid` int(10) unsigned NOT NULL,
  `fuid` int(10) unsigned NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `view` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` (`id`,`uid`,`fuid`,`time`,`message`,`view`) VALUES 
 (1,1,2,1354520160,'hii',1),
 (2,1,2,1354520237,'hello',1),
 (3,2,1,1354521084,'hiii',1),
 (4,2,2,1354521123,'iiii',1),
 (5,3,1,1354521338,'helllllllllllllllllllllo',1),
 (6,2,1,1354521585,'hhhhhhhhhhhh',1),
 (7,1,2,1354521788,'szcd',1),
 (8,1,2,1354522085,'hii friend',1),
 (9,1,2,1354522305,'yyyyyy',1),
 (10,2,1,1354522323,'aaa',1),
 (11,1,2,1354522332,'ooo',1),
 (12,2,1,1354522346,'ooo',1),
 (13,1,2,1354522410,'hey ',1),
 (14,2,1,1354522426,'hiiiiiiiii',1),
 (15,2,1,1354522527,'hhhh',1),
 (16,1,2,1354522537,'jjjj',1),
 (17,2,1,1354522595,'aaaa',1),
 (18,1,2,1354522603,'oooo',1),
 (19,1,2,1354522701,'ppp',1),
 (20,1,2,1354522814,'jjjj',1),
 (21,2,1,1354522822,'hiiii',1),
 (22,2,1,1354522906,'jjjjjjjjjjjj',1),
 (23,2,1,1354522941,'iiiiiiiiiiiiii',1),
 (24,2,1,1354522955,'kkkkk',1),
 (25,2,1,1354522992,'oooooooooooooooo',1),
 (26,2,1,1354523036,'ppppppppppppppppp',1),
 (27,2,1,1354523047,'lllllllllll',1),
 (28,1,2,1354523502,'hello',1),
 (29,2,1,1354523524,'yes my friend',1),
 (30,2,1,1354523783,'are u thare??',1),
 (31,1,2,1354523798,'yes ',1),
 (32,1,2,1354523871,'how are u',1),
 (33,2,1,1354523885,'i am fine',1),
 (34,2,1,1354545613,'kire gando',1),
 (35,1,2,1354545613,'khanki',1),
 (36,2,1,1354545624,'bal',1),
 (37,1,2,1354545636,'i luv u',1),
 (38,2,1,1354545655,'kotta',1),
 (39,1,2,1354687580,'hhhh',1),
 (40,2,1,1354687592,'dfgdf',1),
 (41,1,2,1354950988,'aswdadad',1),
 (42,1,2,1354951259,'jjjjjj',1),
 (43,1,2,1354951647,'fffffffffffff',1),
 (44,1,2,1354951823,'aaaaa',1),
 (45,2,1,1354952306,'qqqq',1),
 (46,2,1,1354952788,'kkk',1),
 (47,2,1,1354952849,'iji',1),
 (48,2,1,1354952867,'jjjjjjiii',1),
 (49,2,1,1354952925,'kkkk',1),
 (50,2,1,1354952935,'hh',1),
 (51,1,1,1354952956,'kkk',1),
 (52,2,1,1354952964,'jijijii',1),
 (53,2,1,1354953029,'hhh',1),
 (54,2,1,1354953044,'iiiiiiii',1),
 (55,2,1,1354953138,'kkkiii',1),
 (56,2,1,1354953147,'hjhjhj',1),
 (57,2,1,1354953253,'aaa',1),
 (58,2,1,1354953276,'jjjjjijijii',1),
 (59,2,1,1354953452,'a',1),
 (60,2,1,1354953534,'a',1),
 (61,2,1,1354953547,'aaa',1),
 (62,2,1,1354953639,'qqqqqqq',1),
 (63,2,1,1354953647,'aaaaa',1),
 (64,2,1,1354954111,'yyyyyyyy',1),
 (65,2,1,1354954119,'ihihihih',1),
 (66,2,1,1354954375,'aaaa',1),
 (67,2,1,1354954420,'aaaaaa',1),
 (68,2,1,1354954433,'qqqqqqqwwww',1),
 (69,2,1,1354958833,'kjkkjkk',1),
 (70,2,1,1354965296,'aaaaaa',1),
 (71,2,1,1354965304,'jjjjjjjj',1),
 (72,2,1,1354965419,'jjjjjjj',1),
 (73,2,1,1354965428,'kkkkkkk',1),
 (74,2,1,1354965526,'iiii',1),
 (75,2,1,1354965532,'kokokoo',1),
 (76,2,1,1354965642,'kkkpp',1),
 (77,2,1,1354965648,'jjjjj',1),
 (78,2,1,1354965694,'kokookollll',1),
 (79,2,1,1354965700,'jojojookoko',1),
 (80,2,1,1354965794,'jajajaja',1),
 (81,2,1,1354965802,'aaaaaaa',1),
 (82,2,1,1354965857,'jjjjjjj',1),
 (83,2,1,1354965868,'ooooooo',1),
 (84,1,2,1354965874,'jjjjj',1),
 (85,1,2,1354965886,'yessss',1),
 (86,2,1,1354965897,'kakakakka',1),
 (87,1,2,1354966742,'hiii',1),
 (88,2,1,1354966808,'hmmm',1),
 (89,1,2,1354966842,'hhhhhhhh',1),
 (90,1,2,1354968167,'hello',1),
 (91,2,1,1354968194,'akaka',1),
 (92,2,1,1354968220,'aaaa',1),
 (93,2,1,1354968249,'hhhh',1),
 (94,1,2,1354968322,'aaa',1),
 (95,2,1,1354968341,'jjj',1),
 (96,2,1,1354968380,'aqaqaq',1),
 (97,2,1,1354968419,'aaqaswwss',1),
 (98,1,2,1354968426,'aaaa',1),
 (99,1,2,1354968452,'jjjj',1),
 (100,2,1,1355062068,'hiii',1),
 (101,1,2,1355062084,'likhooo',1),
 (102,1,2,1355062084,'',1),
 (103,2,1,1355062096,'jjjjj',1),
 (104,1,2,1355062105,'kkllklk',1),
 (105,1,2,1355115379,'hiii',1),
 (106,24,1,1355116833,'hii',1),
 (107,2,1,1355116844,'jjj',1),
 (108,1,24,1355116851,'jijij',1),
 (109,1,2,1355116854,'ommmm',1),
 (110,2,1,1355136580,'hhhhh',1),
 (111,2,1,1355141303,'www.google.com',1),
 (112,24,2,1355141903,'hiii',1),
 (113,2,24,1355141909,'hello',1),
 (114,2,1,1371283399,'asdmasmdoa',1),
 (115,1,2,1371283529,'hello',1),
 (116,1,2,1372925207,'hiii',1),
 (117,2,1,1372925213,'mona',1),
 (118,1,2,1372925216,':)',1),
 (119,2,1,1372925227,':(',1),
 (120,2,1,1372925234,'hehehe',1),
 (121,1,2,1373180742,'sdsad',1),
 (122,2,1,1373180749,'hello',1),
 (123,2,1,1373180761,'hiii',1),
 (124,2,1,1373194179,'bjdxbjdjxb',1),
 (125,1,2,1373194188,'hiii',1);
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;


--
-- Definition of table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `post_id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `uname` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` (`id`,`post_id`,`uid`,`uname`,`fname`,`lname`,`comment`) VALUES 
 (4,40,1,'monojit','monojit','halder','so cute'),
 (5,40,1,'monojit','monojit','halder','ahsdhasdhah'),
 (6,42,2,'john','john','cena','mona'),
 (7,41,1,'monojit','monojit','halder','hello'),
 (8,41,2,'john','john','cena','hgjjhh'),
 (9,42,2,'john','john','cena','kikikki'),
 (10,40,2,'john','john','cena','hunnhju'),
 (11,43,2,'john','john','cena','hhhuh'),
 (12,43,1,'monojit','monojit','halder','xx'),
 (13,44,1,'monojit','monojit','halder','aaa'),
 (14,45,1,'monojit','monojit','halder','aaaa'),
 (15,39,1,'monojit','monojit','halder','good'),
 (16,38,1,'monojit','monojit','halder','sadmaslmdmas'),
 (17,37,1,'monojit','monojit','halder','nice'),
 (18,49,1,'monojit','monojit','halder','hgjjjg');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;


--
-- Definition of table `dislikepost`
--

DROP TABLE IF EXISTS `dislikepost`;
CREATE TABLE `dislikepost` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `post_id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `uname` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dislikepost`
--

/*!40000 ALTER TABLE `dislikepost` DISABLE KEYS */;
/*!40000 ALTER TABLE `dislikepost` ENABLE KEYS */;


--
-- Definition of table `friend`
--

DROP TABLE IF EXISTS `friend`;
CREATE TABLE `friend` (
  `uid` int(10) unsigned NOT NULL,
  `uname` varchar(45) NOT NULL,
  `ufname` varchar(45) NOT NULL,
  `ulname` varchar(45) NOT NULL,
  `fuid` int(10) unsigned NOT NULL,
  `funame` varchar(45) NOT NULL,
  `ffname` varchar(45) NOT NULL,
  `flname` varchar(45) NOT NULL,
  `fpic` varchar(45) NOT NULL,
  `id` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend`
--

/*!40000 ALTER TABLE `friend` DISABLE KEYS */;
INSERT INTO `friend` (`uid`,`uname`,`ufname`,`ulname`,`fuid`,`funame`,`ffname`,`flname`,`fpic`,`id`) VALUES 
 (1,'monojit','monojit','halder',2,'john','john','cena','all.gif',2),
 (2,'john','john','cena',1,'monojit','monojit','halder','all.gif',3),
 (1,'monojit','monojit','halder',24,'debo','debojyoti','mukhrejee','all.gif',4),
 (24,'debo','debojyoti','mukhrejee',1,'monojit','monojit','halder','all.gif',5),
 (24,'debo','debojyoti','mukhrejee',2,'john','john','cena','all.gif',6),
 (2,'john','john','cena',24,'debo','debojyoti','mukhrejee','all.gif',7);
/*!40000 ALTER TABLE `friend` ENABLE KEYS */;


--
-- Definition of table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `uid` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(55) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `email` text NOT NULL,
  `address` varchar(55) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pic` text,
  `liveon` text,
  `studiesat` text,
  `born` text,
  PRIMARY KEY  (`uid`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` (`uid`,`username`,`fname`,`lname`,`password`,`email`,`address`,`sex`,`phone`,`pic`,`liveon`,`studiesat`,`born`) VALUES 
 (1,'monojit','monojit','halder','1234567','undefined','Anandapur R.R.Plot-95','male','919038763191','all.gif','kolkata','Brainware','24/11/1990'),
 (2,'john','john','cena','1234567','undefined','kolkata','male','1221312312','all.gif','Mumbai','Daitm','11/11/1990'),
 (3,'mono','Monojit','Halder','1234567','undefined','Anandapur R.R.Plot-95','male','919038763191','none',NULL,NULL,NULL),
 (19,'abc','abcd','aaa','1234567','undefined','aaaa','male','21341231231','none',NULL,NULL,NULL),
 (20,'hkhkhkh','fcchchjv','jhvhbhv','1234567','undefined','aaaaa','male','1231313131','none',NULL,NULL,NULL),
 (23,'mono123','monojit','halder','sadasdasdasdasd','monojithalder@hotmail.com','Anandapur R.R.Plot-95','male','919038763191','none',NULL,NULL,NULL),
 (24,'debo','debojyoti','mukhrejee','1234567','debojyotimukherjee123@gmail.com','kolkata','male','8919191911','all.gif',NULL,NULL,NULL);
/*!40000 ALTER TABLE `info` ENABLE KEYS */;


--
-- Definition of table `likepost`
--

DROP TABLE IF EXISTS `likepost`;
CREATE TABLE `likepost` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `post_id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `uname` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likepost`
--

/*!40000 ALTER TABLE `likepost` DISABLE KEYS */;
INSERT INTO `likepost` (`id`,`post_id`,`uid`,`uname`,`fname`,`lname`) VALUES 
 (1,40,1,'monojit','monojit','halder'),
 (2,39,1,'monojit','monojit','halder'),
 (4,38,1,'monojit','monojit','halder'),
 (5,41,1,'monojit','monojit','halder'),
 (6,41,2,'john','john','cena'),
 (7,39,2,'john','john','cena'),
 (8,37,1,'monojit','monojit','halder'),
 (9,36,1,'monojit','monojit','halder'),
 (10,42,2,'john','john','cena'),
 (11,43,1,'monojit','monojit','halder'),
 (12,44,1,'monojit','monojit','halder'),
 (13,48,1,'monojit','monojit','halder'),
 (14,49,2,'john','john','cena');
/*!40000 ALTER TABLE `likepost` ENABLE KEYS */;


--
-- Definition of table `online`
--

DROP TABLE IF EXISTS `online`;
CREATE TABLE `online` (
  `uid` int(10) unsigned NOT NULL,
  `uname` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) default NULL,
  `pic` varchar(45) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`uid`,`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

/*!40000 ALTER TABLE `online` DISABLE KEYS */;
INSERT INTO `online` (`uid`,`uname`,`fname`,`lname`,`pic`,`time`) VALUES 
 (1,'monojit','monojit','halder','all.gif',1373265474),
 (2,'john','john','cena','all.gif',1373218752),
 (3,'john','Monojit','Halder','none',1354521548),
 (24,'debo','debojyoti','mukhrejee','all.gif',1355401775);
/*!40000 ALTER TABLE `online` ENABLE KEYS */;


--
-- Definition of table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE `request` (
  `uid` int(10) unsigned NOT NULL,
  `username` varchar(55) NOT NULL,
  `ufname` varchar(55) NOT NULL,
  `ulname` varchar(55) NOT NULL,
  `ruid` int(10) unsigned NOT NULL,
  `rusername` varchar(55) NOT NULL,
  `rfname` varchar(55) NOT NULL,
  `rlname` varchar(55) NOT NULL,
  `rpic` varchar(55) NOT NULL,
  `view` int(10) unsigned NOT NULL,
  `id` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  USING BTREE (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

/*!40000 ALTER TABLE `request` DISABLE KEYS */;
/*!40000 ALTER TABLE `request` ENABLE KEYS */;


--
-- Definition of table `smi`
--

DROP TABLE IF EXISTS `smi`;
CREATE TABLE `smi` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `str` varchar(45) NOT NULL,
  `path` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smi`
--

/*!40000 ALTER TABLE `smi` DISABLE KEYS */;
/*!40000 ALTER TABLE `smi` ENABLE KEYS */;


--
-- Definition of table `wall`
--

DROP TABLE IF EXISTS `wall`;
CREATE TABLE `wall` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `uid` varchar(45) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `upic` varchar(45) NOT NULL,
  `posttime` varchar(45) default NULL,
  `postdate` varchar(45) default NULL,
  `word` text,
  `compic` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wall`
--

/*!40000 ALTER TABLE `wall` DISABLE KEYS */;
INSERT INTO `wall` (`id`,`uid`,`uname`,`fname`,`lname`,`upic`,`posttime`,`postdate`,`word`,`compic`) VALUES 
 (1,'1','monojit','monojit','halder','all.gif',NULL,NULL,'hiii',NULL),
 (2,'1','monojit','monojit','halder','all.gif',NULL,NULL,'hello',NULL),
 (3,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Hii Friends....',NULL),
 (4,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Are any one there',NULL),
 (5,'1','monojit','monojit','halder','all.gif',NULL,NULL,'How are you friends.....',NULL),
 (6,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Change is constants...',NULL),
 (7,'1','monojit','monojit','halder','all.gif',NULL,NULL,'asdasdsa',NULL),
 (8,'1','monojit','monojit','halder','all.gif',NULL,NULL,'asdasdsa2',NULL),
 (9,'1','monojit','monojit','halder','all.gif',NULL,NULL,'asdasdsa3',NULL),
 (10,'1','monojit','monojit','halder','all.gif',NULL,NULL,'asdasdsa4',NULL),
 (11,'1','monojit','monojit','halder','all.gif',NULL,NULL,'asdasdsa5',NULL),
 (12,'1','monojit','monojit','halder','all.gif',NULL,NULL,'asdasdsa6',NULL),
 (13,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.â€By Sir Albert Einstein',NULL),
 (14,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Nothing is constant... ',NULL),
 (15,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Nothing is constant... ',NULL),
 (16,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Nothing is constant... ',NULL),
 (17,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Nothing is constant... ',NULL),
 (18,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Nothing is constant... ',NULL),
 (19,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Ok Friends Good Night',NULL),
 (25,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'687_434090139982927_278258382_n.jpg'),
 (26,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'366-13657-image-4dc7e99b83607-shilpa.jpg'),
 (27,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'3732_491001147600003_1125797696_n.jpg'),
 (28,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'1j.JPG'),
 (29,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'216082_461671780519616_1583893818_n.jpg'),
 (30,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'206033_462026150484179_1180075845_n.jpg'),
 (31,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'366-13656-image-4dc7e997ab8da-bipashabasu.jpg'),
 (32,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'1j.JPG'),
 (33,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'26628_426725417383653_1908162397_n.jpg'),
 (34,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'366-13657-image-4dc7e99b83607-shilpa.jpg'),
 (35,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'687_434090139982927_278258382_n.jpg'),
 (36,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Wowww','32338_437278186330789_643334198_n.jpg'),
 (37,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'185090_423343397721855_1257259893_n.jpg'),
 (38,'1','monojit','monojit','halder','all.gif',NULL,NULL,'sexy....','32304_454070484634761_2007499152_n.jpg'),
 (39,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Beautiful Bird ','3676_423683837687811_1288229932_n.jpg'),
 (40,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Cute','46235_503513912994369_352242103_n.jpg'),
 (41,'2','john','john','cena','all.gif',NULL,NULL,'Under water....','296389_463956900292543_745612296_n.jpg'),
 (42,'1','monojit','monojit','halder','all.gif',NULL,NULL,'Hii Amiya',NULL),
 (43,'2','john','john','cena','all.gif',NULL,NULL,'jsjajhs',NULL),
 (44,'1','monojit','monojit','halder','all.gif',NULL,NULL,NULL,'47536_432429696813225_1328713165_n.jpg'),
 (45,'1','monojit','monojit','halder','all.gif',NULL,NULL,'hello friends..........',NULL),
 (46,'1','monojit','monojit','halder','all.gif',NULL,NULL,'',NULL),
 (47,'2','john','john','cena','all.gif',NULL,NULL,'',NULL),
 (48,'2','john','john','cena','all.gif',NULL,NULL,'hiiiiiiiiiiiiiiiiii',NULL),
 (49,'1','monojit','monojit','halder','all.gif',NULL,NULL,'fdyjfkuhijl',NULL);
/*!40000 ALTER TABLE `wall` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
