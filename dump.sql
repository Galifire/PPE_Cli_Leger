-- MariaDB dump 10.19  Distrib 10.5.11-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: GESTION_RDV_GSB
-- ------------------------------------------------------
-- Server version	10.5.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CLIENTS`
--

DROP TABLE IF EXISTS `CLIENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CLIENTS` (
  `CLINum` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) DEFAULT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `Adresse` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CLINum`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CLIENTS`
--

LOCK TABLES `CLIENTS` WRITE;
/*!40000 ALTER TABLE `CLIENTS` DISABLE KEYS */;
INSERT INTO `CLIENTS` VALUES (5,'Dubois','Michel','18 Rue du Four','michel.dubois@gmail.com','0792586433');
/*!40000 ALTER TABLE `CLIENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `COMMANDES`
--

DROP TABLE IF EXISTS `COMMANDES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `COMMANDES` (
  `MEDICNum` int(11) NOT NULL,
  `MEDNum` int(11) NOT NULL,
  `CLINum` int(11) NOT NULL,
  `DateCde` varchar(11) NOT NULL,
  `Qte` int(11) DEFAULT NULL,
  `CdeNum` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`CdeNum`),
  KEY `COMMANDES_FK` (`CLINum`),
  KEY `COMMANDES_FK_1` (`MEDNum`),
  KEY `COMMANDES_FK_2` (`MEDICNum`),
  CONSTRAINT `COMMANDES_FK` FOREIGN KEY (`CLINum`) REFERENCES `CLIENTS` (`CLINum`),
  CONSTRAINT `COMMANDES_FK_1` FOREIGN KEY (`MEDNum`) REFERENCES `MEDECINS` (`MEDNum`),
  CONSTRAINT `COMMANDES_FK_2` FOREIGN KEY (`MEDICNum`) REFERENCES `MEDICAMENTS` (`MEDICNum`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COMMANDES`
--

LOCK TABLES `COMMANDES` WRITE;
/*!40000 ALTER TABLE `COMMANDES` DISABLE KEYS */;
INSERT INTO `COMMANDES` VALUES (1,1,5,'2022-06-08',12,2),(1,1,5,'2022-06-08',125,3);
/*!40000 ALTER TABLE `COMMANDES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MEDECINS`
--

DROP TABLE IF EXISTS `MEDECINS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEDECINS` (
  `MEDNum` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Adresse` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telephone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`MEDNum`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEDECINS`
--

LOCK TABLES `MEDECINS` WRITE;
/*!40000 ALTER TABLE `MEDECINS` DISABLE KEYS */;
INSERT INTO `MEDECINS` VALUES (1,'Guerrieri','Grove','53893','gguerrieri0@addthis.com','1234567890'),(2,'Ballinger','Orland','511 Dawn Junction','oballinger1@yale.edu',NULL),(3,'Livingstone','Umberto','84 Havey Place','ulivingstone2@istockphoto.com',NULL),(4,'Dumberrill','Birk','9 Pawling Road','bdumberrill3@senate.gov',NULL),(5,'Baldi','Sheeree','48192 Bartillon Plaza','sbaldi4@skyrock.com',NULL),(6,'Heenan','Codie','88883 Ronald Regan Plaza','cheenan5@bbc.co.uk',NULL),(7,'Pevreal','Damita','3 Warner Plaza','dpevreal6@godaddy.com',NULL),(8,'Skeat','Marie-jeanne','07 Eagan Court','mskeat7@senate.gov',NULL),(9,'Alten','Corena','350 Hoard Circle','calten8@huffingtonpost.com',NULL),(10,'Spriggin','Paulette','83 Trailsway Parkway','pspriggin9@tmall.com',NULL),(11,'Birdwhistle','Aprilette','299 Troy Street','abirdwhistlea@4shared.com',NULL),(12,'Bravington','Stevena','23 Columbus Terrace','sbravingtonb@nature.com',NULL),(13,'Pryell','Danna','6 Johnson Parkway','dpryellc@photobucket.com',NULL),(14,'Caldron','Mac','60252 Nobel Hill','mcaldrond@prweb.com',NULL),(15,'Wisbey','Maridel','37 Talmadge Park','mwisbeye@bizjournals.com',NULL),(16,'Whitelaw','Melonie','87964 Macpherson Circle','mwhitelawf@pinterest.com',NULL),(17,'Sibray','Jackelyn','5642 Parkside Parkway','jsibrayg@blinklist.com',NULL),(18,'Cressar','Peterus','10 Green Terrace','pcressarh@gnu.org',NULL),(19,'Fullilove','Marysa','524 Shelley Plaza','mfullilovei@creativecommons.org',NULL),(20,'Forstall','Egor','61 Loeprich Alley','eforstallj@nature.com',NULL),(21,'Gilbody','Lula','2307 Lighthouse Bay Street','lgilbodyk@dailymotion.com',NULL),(22,'Pocock','Nanny','4402','npocockl@boston.com','123456789'),(23,'Greatbank','Ivette','5613 Maple Park','igreatbankm@abc.net.au',NULL),(24,'Greeding','Tracie','9 Lawn Junction','tgreedingn@photobucket.com',NULL),(25,'Boater','Marge','75912 Evergreen Way','mboatero@nature.com',NULL),(27,'Carl','Cyndi','4918 Rutledge Avenue','ccarlq@vk.com',NULL),(28,'Breffitt','Caria','1694 7th Drive','cbreffittr@tumblr.com',NULL),(29,'Dukelow','Matty','6444 Norway Maple Point','mdukelows@sourceforge.net',NULL),(30,'Kubu','Hazlett','66 Harbort Terrace','hkubut@telegraph.co.uk',NULL),(31,'Foister','Cad','61270 Summit Circle','cfoisteru@amazon.co.uk',NULL),(32,'Featenby','Consalve','98 Raven Plaza','cfeatenbyv@csmonitor.com',NULL),(33,'Skeggs','Rosaline','060 Sommers Court','rskeggsw@tiny.cc',NULL),(34,'Twelves','Finn','051 Gulseth Junction','ftwelvesx@printfriendly.com',NULL),(35,'Normanvill','Angus','92 Ridgeview Center','anormanvilly@nytimes.com',NULL),(36,'Cicci','Boyce','75580 Warrior Court','bcicciz@reddit.com',NULL),(37,'McNair','Gregory','753 Dottie Terrace','gmcnair10@sfgate.com',NULL),(38,'Proudler','Darnall','502 Morrow Plaza','dproudler11@symantec.com',NULL),(39,'Sizeland','Latisha','5 Lighthouse Bay Lane','lsizeland12@desdev.cn',NULL),(40,'Bartozzi','Horten','32 Del Sol Street','hbartozzi13@telegraph.co.uk',NULL),(41,'Videneev','Kessiah','34413 Butterfield Hill','kvideneev14@bizjournals.com',NULL),(42,'O\'Kenny','Jillie','39873 Hoffman Lane','jokenny15@squarespace.com',NULL),(43,'Barney','Ema','1850 Homewood Point','ebarney16@sfgate.com',NULL),(44,'Mattiussi','Wilone','5052 Kropf Place','wmattiussi17@sourceforge.net',NULL),(45,'Goodall','Waneta','36138 Mayfield Drive','wgoodall18@yahoo.co.jp',NULL),(46,'Emeline','Laney','7803 Blackbird Court','lemeline19@behance.net',NULL),(47,'Ickovic','Berke','10 Express Lane','bickovic1a@hatena.ne.jp',NULL),(48,'Cicero','Cleopatra','28 Heffernan Court','ccicero1b@washingtonpost.com',NULL),(49,'Quakley','Maurie','58 Carey Pass','mquakley1c@bbc.co.uk',NULL),(50,'Agutter','Sig','82836 Kingsford Junction','sagutter1d@businessweek.com',NULL);
/*!40000 ALTER TABLE `MEDECINS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MEDICAMENTS`
--

DROP TABLE IF EXISTS `MEDICAMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEDICAMENTS` (
  `MEDICNum` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) DEFAULT NULL,
  `Restrictions` varchar(255) DEFAULT NULL,
  `Caracteristiques` varchar(255) DEFAULT NULL,
  `DelaiProduction` int(11) DEFAULT NULL,
  PRIMARY KEY (`MEDICNum`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEDICAMENTS`
--

LOCK TABLES `MEDICAMENTS` WRITE;
/*!40000 ALTER TABLE `MEDICAMENTS` DISABLE KEYS */;
INSERT INTO `MEDICAMENTS` VALUES (1,'Lorazepam','Ne pas conduire sans avoir lu la notice','effervescent',43),(2,'Smecta','Pour la reprise de la conduite demandez l\'avis d\'un médecin','pastille à sucer',48),(3,'Viagra','Pour la reprise de la conduite demandez l\'avis d\'un médecin','granules',10),(4,'Stresam','Interdit à la femme enceinte','pastille à laisser fondre',14),(5,'Spasfon','Tenir hors de portée des enfants','effervescent',53),(6,'Lisopaïne','Interdit à la femme enceinte','effervescent',32),(7,'Stodal','Tenir hors de portée des enfants','pastille à laisser fondre',57),(8,'Strepsil','Interdit à la femme enceinte','pastille à laisser fondre',19),(9,'Doliprane','Ne pas conduire sans avoir lu la notice','pastille à laisser fondre',54),(10,'Aspirine','Tenir hors de portée des enfants','Cachet',57);
/*!40000 ALTER TABLE `MEDICAMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PHARMACIE`
--

DROP TABLE IF EXISTS `PHARMACIE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PHARMACIE` (
  `PHARNum` int(11) NOT NULL AUTO_INCREMENT,
  `Adresse` varchar(255) DEFAULT NULL,
  `Ville` varchar(100) DEFAULT NULL,
  `Effectif` int(11) DEFAULT NULL,
  `Horaires` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`PHARNum`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PHARMACIE`
--

LOCK TABLES `PHARMACIE` WRITE;
/*!40000 ALTER TABLE `PHARMACIE` DISABLE KEYS */;
INSERT INTO `PHARMACIE` VALUES (1,'18 Rue du Four','Lyon',12,'8h-19h30');
/*!40000 ALTER TABLE `PHARMACIE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PHARMACIEN`
--

DROP TABLE IF EXISTS `PHARMACIEN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PHARMACIEN` (
  `PHNum` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telephone` varchar(11) DEFAULT NULL,
  `Poste` varchar(250) DEFAULT NULL,
  `PHARNum` int(11) DEFAULT NULL,
  PRIMARY KEY (`PHNum`),
  KEY `PHARMACIEN_FK` (`PHARNum`),
  CONSTRAINT `PHARMACIEN_FK` FOREIGN KEY (`PHARNum`) REFERENCES `PHARMACIE` (`PHARNum`)
) ENGINE=InnoDB AUTO_INCREMENT=601 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PHARMACIEN`
--

LOCK TABLES `PHARMACIEN` WRITE;
/*!40000 ALTER TABLE `PHARMACIEN` DISABLE KEYS */;
INSERT INTO `PHARMACIEN` VALUES (201,'Hame','Rambadt','grambadt5k@newsvine.com','5838388560',NULL,NULL),(202,'Letcher','Boatwright','dboatwright5l@unblog.fr','5775179558',NULL,NULL),(204,'Hassard','Clineck','cclineck5n@businessinsider.com','2367966219',NULL,NULL),(205,'Vales','Spelwood','pspelwood5o@eepurl.com','6153016998',NULL,NULL),(206,'Aherne','Aronstein','karonstein5p@dailymotion.com','6573675559',NULL,NULL),(207,'Winning','Emerton','lemerton5q@vk.com','1689655323',NULL,NULL),(208,'Dossit','Wennington','gwennington5r@istockphoto.com','2583079055',NULL,NULL),(209,'Vickar','Crippell','rcrippell5s@nasa.gov','9222684255',NULL,NULL),(210,'Veronique','Grinyakin','rgrinyakin5t@prweb.com','1416274015',NULL,NULL),(211,'Rontree','Mears','cmears5u@nydailynews.com','1056042714',NULL,NULL),(212,'Goodrich','Husbands','nhusbands5v@xinhuanet.com','3038893620',NULL,NULL),(213,'Rolfini','Cantrell','ccantrell5w@goo.gl','7647656668',NULL,NULL),(214,'Towns','Barrows','nbarrows5x@cisco.com','9175178788',NULL,NULL),(215,'Lapthorn','Shutte','gshutte5y@upenn.edu','4657189238',NULL,NULL),(216,'Craze','Ladlow','gladlow5z@boston.com','5982674023',NULL,NULL),(217,'Lighterness','Schuster','fschuster60@etsy.com','7084689807',NULL,NULL),(218,'Rickson','Kordes','bkordes61@github.com','6735390424',NULL,NULL),(219,'Birds','Allcott','sallcott62@miitbeian.gov.cn','1898086876',NULL,NULL),(220,'Grafom','MacGrath','rmacgrath63@paypal.com','7218752586',NULL,NULL),(221,'Oldridge','Ullett','fullett64@list-manage.com','7466503725',NULL,NULL),(222,'Harrow','Giraux','ngiraux65@goodreads.com','9403875696',NULL,NULL),(223,'Bourgeois','Ellit','sellit66@slashdot.org','5637950214',NULL,NULL),(224,'Mechell','Lockett','plockett67@dell.com','4504308129',NULL,NULL),(225,'Lamboll','Ronayne','rronayne68@fc2.com','5379348126',NULL,NULL),(226,'Nuss','Raraty','praraty69@umich.edu','3307249725',NULL,NULL),(227,'Brash','Hedley','bhedley6a@wufoo.com','2871002739',NULL,NULL),(228,'Payley','Ephson','lephson6b@princeton.edu','4776888115',NULL,NULL),(229,'Lodevick','Soan','csoan6c@privacy.gov.au','7823147363',NULL,NULL),(230,'Davana','Barz','cbarz6d@vimeo.com','6478273794',NULL,NULL),(231,'O\' Shea','Tufts','btufts6e@google.com.au','3665713621',NULL,NULL),(232,'Larkins','Harbidge','kharbidge6f@newsvine.com','1931885013',NULL,NULL),(233,'Roj','Leving','bleving6g@foxnews.com','9432696150',NULL,NULL),(234,'McGaughie','Paradis','yparadis6h@clickbank.net','6624251419',NULL,NULL),(235,'Ronchi','Keri','gkeri6i@purevolume.com','3333117597',NULL,NULL),(236,'Fletcher','Kohnert','ckohnert6j@histats.com','2009537291',NULL,NULL),(237,'Danelet','Jilkes','sjilkes6k@chronoengine.com','5637010716',NULL,NULL),(238,'Higounet','Narducci','lnarducci6l@canalblog.com','9445638119',NULL,NULL),(239,'Norrey','Dawidowitz','adawidowitz6m@sohu.com','7311802972',NULL,NULL),(240,'Jolliffe','Devil','adevil6n@ovh.net','8838955100',NULL,NULL),(241,'Paggitt','Andresser','aandresser6o@howstuffworks.com','6466407619',NULL,NULL),(242,'Muncie','Hudghton','chudghton6p@paypal.com','8226006598',NULL,NULL),(243,'Finicj','Haslock(e)','lhaslocke6q@mysql.com','1426987838',NULL,NULL),(244,'Bester','Quakley','aquakley6r@youtu.be','3168829025',NULL,NULL),(245,'Buffin','Mottley','cmottley6s@github.io','3101901334',NULL,NULL),(246,'Blacklidge','Beardsall','kbeardsall6t@shop-pro.jp','7827391243',NULL,NULL),(247,'Wager','Tomet','etomet6u@engadget.com','7496395004',NULL,NULL),(248,'Bangle','Baume','rbaume6v@cargocollective.com','9345532167',NULL,NULL),(249,'Warret','Mephan','rmephan6w@prnewswire.com','2895153132',NULL,NULL),(250,'Wheaton','Douris','jdouris6x@1688.com','7379778743',NULL,NULL),(251,'Asey','Hollow','thollow6y@tumblr.com','3084881776',NULL,NULL),(252,'Gerrens','Camolli','lcamolli6z@google.cn','5399344463',NULL,NULL),(253,'Gianneschi','Hasney','bhasney70@hexun.com','5312819728',NULL,NULL),(254,'Bauser','Le Merchant','blemerchant71@uiuc.edu','5302146807',NULL,NULL),(255,'Haynesford','Sherwell','lsherwell72@hhs.gov','5117061881',NULL,NULL),(256,'Blacklidge','D\'Adda','ldadda73@free.fr','1672049153',NULL,NULL),(257,'Robrose','Basezzi','fbasezzi74@amazon.de','6171961447',NULL,NULL),(258,'Maestrini','Spawton','aspawton75@smh.com.au','1616463758',NULL,NULL),(259,'Dohms','Thyng','athyng76@wordpress.com','2555688232',NULL,NULL),(260,'Raynor','Grigg','ogrigg77@tuttocitta.it','2054791123',NULL,NULL),(261,'Kief','Tickel','wtickel78@state.gov','1785591684',NULL,NULL),(262,'Bungey','Tolemache','mtolemache79@blogtalkradio.com','5668240925',NULL,NULL),(263,'Momery','Durning','tdurning7a@newsvine.com','5554413763',NULL,NULL),(264,'Digges','Booler','dbooler7b@vinaora.com','4832430185',NULL,NULL),(265,'Schooley','Aldgate','aaldgate7c@youtu.be','4734431938',NULL,NULL),(266,'Giacomasso','Syers','esyers7d@scribd.com','6519537190',NULL,NULL),(267,'Alpes','Benoix','dbenoix7e@shutterfly.com','7035243372',NULL,NULL),(268,'Stoppe','Kingman','ckingman7f@thetimes.co.uk','5255786629',NULL,NULL),(269,'Hulle','Boam','rboam7g@columbia.edu','3912065054',NULL,NULL),(270,'Jesper','April','lapril7h@biblegateway.com','9701752708',NULL,NULL),(271,'Bris','Briscam','vbriscam7i@bbc.co.uk','1296518007',NULL,NULL),(272,'Glynne','Alliberton','aalliberton7j@about.me','8762282152',NULL,NULL),(273,'Peery','Doul','ldoul7k@i2i.jp','1574173347',NULL,NULL),(274,'Merigon','Kordas','mkordas7l@twitpic.com','4083591201',NULL,NULL),(275,'Rannells','Mariette','cmariette7m@gov.uk','5207909462',NULL,NULL),(276,'Diviney','Habbon','chabbon7n@studiopress.com','2778456024',NULL,NULL),(277,'Woolatt','O\' Lone','aolone7o@icq.com','8141641653',NULL,NULL),(278,'Skipp','Vakhlov','gvakhlov7p@purevolume.com','7836223313',NULL,NULL),(279,'Carnduff','Mathan','mmathan7q@miibeian.gov.cn','2978472885',NULL,NULL),(280,'McNiff','Cheyenne','hcheyenne7r@purevolume.com','2764432435',NULL,NULL),(281,'Scotchmur','Awmack','nawmack7s@google.es','6732129061',NULL,NULL),(282,'Ianno','Girardez','rgirardez7t@oracle.com','6207949297',NULL,NULL),(283,'Shayler','Mishaw','pmishaw7u@cafepress.com','5887575782',NULL,NULL),(284,'Durkin','Brigham','ebrigham7v@amazon.de','5913590879',NULL,NULL),(285,'Spiers','Mullenger','cmullenger7w@people.com.cn','2365743897',NULL,NULL),(286,'Halfhead','Klimes','mklimes7x@oakley.com','9998735936',NULL,NULL),(287,'Stetlye','Gormley','mgormley7y@yahoo.co.jp','3321719898',NULL,NULL),(288,'Waller','Schultze','pschultze7z@mozilla.com','4115273787',NULL,NULL),(289,'Benoi','Drewery','ndrewery80@admin.ch','1988000039',NULL,NULL),(290,'Kuhlmey','Sirr','nsirr81@reuters.com','9412114004',NULL,NULL),(291,'Loach','Gadney','dgadney82@archive.org','3521630549',NULL,NULL),(292,'Tait','Feehily','gfeehily83@cornell.edu','2919416104',NULL,NULL),(293,'Teager','Plues','hplues84@va.gov','3564743154',NULL,NULL),(294,'Garett','Stillgoe','mstillgoe85@t-online.de','7692032640',NULL,NULL),(295,'Keirle','Fewtrell','hfewtrell86@blog.com','1794108095',NULL,NULL),(296,'Nordass','Hazeldine','shazeldine87@bloglovin.com','2376840841',NULL,NULL),(297,'Rosekilly','McAvin','ymcavin88@sun.com','2496267160',NULL,NULL),(298,'Stoner','Birchwood','fbirchwood89@moonfruit.com','5008764009',NULL,NULL),(299,'Widdicombe','Fendt','efendt8a@discovery.com','3908086801',NULL,NULL),(300,'Deinhardt','Hackett','hhackett8b@tinyurl.com','7939953009',NULL,NULL),(301,'Attride','Granleese','kgranleese8c@bloomberg.com','6255437650',NULL,NULL),(302,'Probate','Northley','rnorthley8d@businessweek.com','4635507674',NULL,NULL),(303,'Bellison','Fear','vfear8e@qq.com','7108333706',NULL,NULL),(304,'Bernardos','Stuttard','estuttard8f@biglobe.ne.jp','8689380975',NULL,NULL),(305,'Maccrie','Boffin','dboffin8g@tripadvisor.com','6904655957',NULL,NULL),(306,'Ewbanks','Fallowes','mfallowes8h@gizmodo.com','2857010467',NULL,NULL),(307,'MacDavitt','Mulholland','rmulholland8i@angelfire.com','4608168306',NULL,NULL),(308,'Jacquet','Orpin','corpin8j@globo.com','6818816944',NULL,NULL),(309,'Cancellor','Mycroft','mmycroft8k@unesco.org','7458675266',NULL,NULL),(310,'Benedicte','Kynder','mkynder8l@histats.com','6675499398',NULL,NULL),(311,'Stollery','Palluschek','vpalluschek8m@google.com.br','1784765798',NULL,NULL),(312,'Duiguid','Tosspell','etosspell8n@artisteer.com','7301818937',NULL,NULL),(313,'Livett','Spriggen','cspriggen8o@noaa.gov','2791003764',NULL,NULL),(314,'Marrett','Wringe','awringe8p@xing.com','1518965651',NULL,NULL),(315,'Pieter','Steane','asteane8q@guardian.co.uk','6961618651',NULL,NULL),(316,'Bowes','Kahn','pkahn8r@buzzfeed.com','5878775227',NULL,NULL),(317,'McOrkil','Peever','apeever8s@fastcompany.com','7114973689',NULL,NULL),(318,'Dallemore','Hargate','bhargate8t@mozilla.org','3992470663',NULL,NULL),(319,'Aspole','Nasi','onasi8u@illinois.edu','6517861662',NULL,NULL),(320,'Sancias','Raitt','rraitt8v@nymag.com','8867542431',NULL,NULL),(321,'Bewshire','Goodbarr','egoodbarr8w@pbs.org','1213925751',NULL,NULL),(322,'Mitchely','Orrow','korrow8x@livejournal.com','9806459247',NULL,NULL),(323,'Impett','Bedingfield','mbedingfield8y@goo.gl','2981690266',NULL,NULL),(324,'Powlett','Couper','xcouper8z@delicious.com','1028940859',NULL,NULL),(325,'Wildin','Ellingford','tellingford90@xing.com','3675924549',NULL,NULL),(326,'Borgnol','Ortells','gortells91@wordpress.com','6355848245',NULL,NULL),(327,'Crebo','Milksop','dmilksop92@bloglines.com','9493435492',NULL,NULL),(328,'Witheridge','Gotobed','jgotobed93@marketwatch.com','4144670938',NULL,NULL),(329,'Gash','Bedle','zbedle94@marriott.com','2458750253',NULL,NULL),(330,'MacCurlye','Lagden','flagden95@archive.org','7626450718',NULL,NULL),(331,'Branchett','Kibby','lkibby96@cnet.com','2639848936',NULL,NULL),(332,'Torregiani','Driscoll','bdriscoll97@guardian.co.uk','4546153000',NULL,NULL),(333,'Finci','Talkington','btalkington98@microsoft.com','1981731547',NULL,NULL),(334,'Deaves','Philbrook','dphilbrook99@who.int','1416400211',NULL,NULL),(335,'McLaverty','Kulvear','kkulvear9a@kickstarter.com','7549970974',NULL,NULL),(336,'Nangle','Tevlin','atevlin9b@tripadvisor.com','7544289702',NULL,NULL),(337,'Juares','Pillman','rpillman9c@about.com','8183766130',NULL,NULL),(338,'Kondratyuk','Greenway','cgreenway9d@baidu.com','3635284997',NULL,NULL),(339,'Eccleston','Blasdale','jblasdale9e@bing.com','1979546143',NULL,NULL),(340,'Tremouille','Panyer','vpanyer9f@dailymotion.com','4793926486',NULL,NULL),(341,'Vernall','Troak','ntroak9g@timesonline.co.uk','7111368032',NULL,NULL),(342,'Asp','Paquet','jpaquet9h@indiatimes.com','2949426998',NULL,NULL),(343,'McGriele','Ridgewell','nridgewell9i@pinterest.com','5043484975',NULL,NULL),(344,'Lawtie','Longmate','ulongmate9j@sohu.com','1939077355',NULL,NULL),(345,'Hoopper','Ping','lping9k@mayoclinic.com','8172722293',NULL,NULL),(346,'Kelsow','Portwaine','rportwaine9l@github.com','3647632005',NULL,NULL),(347,'Rabbet','Yakunkin','vyakunkin9m@nymag.com','8494985229',NULL,NULL),(348,'Carryer','Chatainier','wchatainier9n@stanford.edu','6079426884',NULL,NULL),(349,'Petzolt','Mannock','mmannock9o@xinhuanet.com','7378891565',NULL,NULL),(350,'Bevan','Karle','lkarle9p@ezinearticles.com','9571365420',NULL,NULL),(351,'Jaram','Sallery','csallery9q@senate.gov','1932103005',NULL,NULL),(352,'Eggleson','Nise','lnise9r@purevolume.com','9802107931',NULL,NULL),(353,'Larman','Geri','rgeri9s@over-blog.com','2025222988',NULL,NULL),(354,'Sorro','Peacher','hpeacher9t@fda.gov','8587753047',NULL,NULL),(355,'Edington','Collinwood','mcollinwood9u@thetimes.co.uk','4227383469',NULL,NULL),(356,'Dametti','Piche','lpiche9v@uiuc.edu','7044181158',NULL,NULL),(357,'McArte','Laugheran','dlaugheran9w@mail.ru','9375739564',NULL,NULL),(358,'Ferronet','Simmill','esimmill9x@princeton.edu','5734924512',NULL,NULL),(359,'Decruse','Josofovitz','mjosofovitz9y@china.com.cn','4057006389',NULL,NULL),(360,'Dingley','Sampey','csampey9z@canalblog.com','1415463096',NULL,NULL),(361,'Essame','Franzettoini','dfranzettoinia0@answers.com','5592559842',NULL,NULL),(362,'Petrak','Iacavone','siacavonea1@unc.edu','6924083425',NULL,NULL),(363,'MacAllester','Senior','useniora2@buzzfeed.com','8688732067',NULL,NULL),(364,'Frostdick','Whorall','pwhoralla3@reverbnation.com','8949795642',NULL,NULL),(365,'Renals','Bennitt','vbennitta4@soundcloud.com','8667555440',NULL,NULL),(366,'De Cruz','Glen','eglena5@webs.com','2841792194',NULL,NULL),(367,'Ambrogiotti','Falconbridge','lfalconbridgea6@google.co.uk','6589025788',NULL,NULL),(368,'Daouse','Shipway','zshipwaya7@odnoklassniki.ru','9099083630',NULL,NULL),(369,'Heinzler','Franz','mfranza8@columbia.edu','8678839991',NULL,NULL),(370,'Haburne','McDermid','mmcdermida9@printfriendly.com','8257235921',NULL,NULL),(371,'Cornelisse','Lockyear','plockyearaa@privacy.gov.au','7692745106',NULL,NULL),(372,'Fobidge','Lambin','dlambinab@de.vu','6193805872',NULL,NULL),(373,'Pesek','Tildesley','etildesleyac@senate.gov','2977854030',NULL,NULL),(374,'Emmett','Darnbrough','edarnbroughad@is.gd','1077806470',NULL,NULL),(375,'Carcass','Darling','sdarlingae@soup.io','9879983358',NULL,NULL),(376,'Whatley','Myner','dmyneraf@bloglines.com','5733663928',NULL,NULL),(377,'Mogey','Ruffey','sruffeyag@google.ca','1575774621',NULL,NULL),(378,'McRae','Pulham','fpulhamah@businesswire.com','1316646300',NULL,NULL),(379,'Presnell','O\'Crevan','vocrevanai@angelfire.com','9267949872',NULL,NULL),(380,'Blacklidge','Totman','ototmanaj@msu.edu','6445386673',NULL,NULL),(381,'Benthall','Pritchitt','gpritchittak@google.ca','5041265808',NULL,NULL),(382,'Oseman','Ginity','fginityal@jalbum.net','4998433280',NULL,NULL),(383,'Gask','Eglaise','seglaiseam@yellowbook.com','3027441852',NULL,NULL),(384,'Littlefield','Gemlett','fgemlettan@meetup.com','5634718048',NULL,NULL),(385,'Dignum','Drinkhall','ydrinkhallao@yelp.com','6438233298',NULL,NULL),(386,'Finder','Letson','rletsonap@sina.com.cn','9084084187',NULL,NULL),(387,'Franz','Narramore','rnarramoreaq@dagondesign.com','3445717267',NULL,NULL),(388,'Antonazzi','Zaniolo','tzanioloar@paypal.com','9822355176',NULL,NULL),(389,'Girvan','Charrington','mcharringtonas@icq.com','3538923813',NULL,NULL),(390,'Lasselle','Chadderton','achaddertonat@foxnews.com','1387889005',NULL,NULL),(391,'Schuricht','Englefield','cenglefieldau@msu.edu','9864197480',NULL,NULL),(392,'Pollastro','O\'Halligan','mohalliganav@army.mil','4943346757',NULL,NULL),(393,'Aleksankov','Cains','acainsaw@twitpic.com','2882408910',NULL,NULL),(394,'Valder','Cotta','bcottaax@sakura.ne.jp','5847735949',NULL,NULL),(395,'Dillingstone','Dillistone','adillistoneay@hp.com','3035589665',NULL,NULL),(396,'Ordidge','Follet','lfolletaz@ning.com','7937307980',NULL,NULL),(397,'Mercey','Jeffrey','cjeffreyb0@posterous.com','9876921903',NULL,NULL),(398,'Scrogges','Kennealy','gkennealyb1@cafepress.com','2743552568',NULL,NULL),(399,'Geeritz','Yglesia','vyglesiab2@eepurl.com','2342585671',NULL,NULL),(400,'Jeavons','Wolstencroft','swolstencroftb3@geocities.jp','3882322689',NULL,NULL),(401,'Lande','Flicker','kflickerb4@cbsnews.com','7827857910',NULL,NULL),(402,'Gay','Clackson','jclacksonb5@reference.com','5197824292',NULL,NULL),(403,'Rawstorn','Kraut','hkrautb6@fc2.com','9481674363',NULL,NULL),(404,'Armour','Jendrusch','ajendruschb7@ehow.com','9814706131',NULL,NULL),(405,'Gregan','Puddan','lpuddanb8@bluehost.com','7435250779',NULL,NULL),(406,'Shippey','Hrishanok','mhrishanokb9@flickr.com','2718620083',NULL,NULL),(407,'Immings','Matsell','amatsellba@microsoft.com','1789645257',NULL,NULL),(408,'Rochford','Lowdes','llowdesbb@privacy.gov.au','3564239632',NULL,NULL),(409,'Goodsal','Franke','wfrankebc@webnode.com','1015955484',NULL,NULL),(410,'McIlroy','Pirouet','fpirouetbd@time.com','4261631031',NULL,NULL),(411,'Morrott','Renals','crenalsbe@google.co.jp','7002670340',NULL,NULL),(412,'Peascod','Headech','vheadechbf@prnewswire.com','5392238418',NULL,NULL),(413,'Fancutt','Marrion','cmarrionbg@nymag.com','6599843228',NULL,NULL),(414,'Ashplant','Percy','mpercybh@de.vu','1625109131',NULL,NULL),(415,'Geane','Orsi','lorsibi@newsvine.com','9505141038',NULL,NULL),(416,'Ferby','Mackley','rmackleybj@ezinearticles.com','6555175840',NULL,NULL),(417,'Moubray','Mifflin','lmifflinbk@nyu.edu','4614384259',NULL,NULL),(418,'Hadaway','Hawgood','fhawgoodbl@europa.eu','4448845160',NULL,NULL),(419,'Robotham','Mellodey','gmellodeybm@unesco.org','6666811714',NULL,NULL),(420,'Mithan','Peek','kpeekbn@ox.ac.uk','9917833650',NULL,NULL),(421,'Jirieck','Bowlesworth','gbowlesworthbo@cnbc.com','7182570425',NULL,NULL),(422,'Whitnell','Wheatman','pwheatmanbp@ocn.ne.jp','8261246124',NULL,NULL),(423,'Scaddon','Heinsh','lheinshbq@woothemes.com','6383406900',NULL,NULL),(424,'Pook','Shingles','eshinglesbr@printfriendly.com','1934828145',NULL,NULL),(425,'Benam','Lyst','clystbs@samsung.com','1491598973',NULL,NULL),(426,'Jobes','Palmar','apalmarbt@intel.com','6061162864',NULL,NULL),(427,'Becraft','Dicey','mdiceybu@oakley.com','8485515355',NULL,NULL),(428,'Chadwick','Dary','gdarybv@cbc.ca','2171710577',NULL,NULL),(429,'Ickovicz','Lenormand','jlenormandbw@biblegateway.com','6776940125',NULL,NULL),(430,'Polsin','Dmtrovic','mdmtrovicbx@cocolog-nifty.com','6293534301',NULL,NULL),(431,'Baker','Debrick','tdebrickby@buzzfeed.com','8968427445',NULL,NULL),(432,'Danielot','Abela','vabelabz@toplist.cz','3756154221',NULL,NULL),(433,'Wroughton','Missenden','smissendenc0@businessinsider.com','1836542951',NULL,NULL),(434,'Maldin','Esgate','sesgatec1@foxnews.com','7638830248',NULL,NULL),(435,'Duley','Lampert','alampertc2@alexa.com','7995550153',NULL,NULL),(436,'Bedding','Okey','sokeyc3@surveymonkey.com','7183510714',NULL,NULL),(437,'Benbrick','Pentycross','cpentycrossc4@gov.uk','6044429134',NULL,NULL),(438,'Tooby','Fortun','ffortunc5@nydailynews.com','3641613607',NULL,NULL),(439,'MacKessock','MacNeachtain','pmacneachtainc6@seattletimes.com','6751260709',NULL,NULL),(440,'Scrowton','Mullineux','bmullineuxc7@instagram.com','2725583267',NULL,NULL),(441,'Redfern','Barenski','mbarenskic8@guardian.co.uk','2785784179',NULL,NULL),(442,'Garie','Noah','enoahc9@psu.edu','1837145780',NULL,NULL),(443,'Parminter','Domnick','mdomnickca@bigcartel.com','7028542299',NULL,NULL),(444,'Blankhorn','Lysaght','rlysaghtcb@state.gov','8411868172',NULL,NULL),(445,'Ephson','Holt','lholtcc@t.co','6615871418',NULL,NULL),(446,'Burtonwood','McQuaide','vmcquaidecd@marketwatch.com','9705212870',NULL,NULL),(447,'Fellow','Arlet','warletce@microsoft.com','3868375178',NULL,NULL),(448,'Rosen','MacKintosh','gmackintoshcf@phoca.cz','4456165965',NULL,NULL),(449,'Haugeh','Fermoy','efermoycg@elpais.com','8106457329',NULL,NULL),(450,'Catonne','Muddimer','mmuddimerch@independent.co.uk','6275568053',NULL,NULL),(451,'Shelmerdine','Masic','amasicci@liveinternet.ru','4332722265',NULL,NULL),(452,'Cust','Yurchishin','syurchishincj@springer.com','5528414510',NULL,NULL),(453,'Sea','Stolli','sstollick@archive.org','9211156918',NULL,NULL),(454,'Duffy','McCullagh','lmccullaghcl@va.gov','8985041058',NULL,NULL),(455,'Hammett','Tutt','stuttcm@oaic.gov.au','2775180697',NULL,NULL),(456,'Goutcher','Trythall','btrythallcn@apple.com','1849507155',NULL,NULL),(457,'de Courcy','Josskovitz','djosskovitzco@multiply.com','4589902878',NULL,NULL),(458,'Castangia','Tinan','ntinancp@godaddy.com','8113579652',NULL,NULL),(459,'Nelthropp','Vallerine','kvallerinecq@prnewswire.com','8556776561',NULL,NULL),(460,'Rome','Craydon','scraydoncr@studiopress.com','6676693434',NULL,NULL),(461,'Hannaford','Geraldo','dgeraldocs@intel.com','9376110418',NULL,NULL),(462,'Merdew','Champney','jchampneyct@sina.com.cn','4542657519',NULL,NULL),(463,'Troth','Kildahl','ckildahlcu@shareasale.com','4292479849',NULL,NULL),(464,'Gaskoin','Tomkiss','ctomkisscv@google.cn','7562556550',NULL,NULL),(465,'Madgin','Tenny','ltennycw@gmpg.org','4425464591',NULL,NULL),(466,'Coleford','Manueli','imanuelicx@twitpic.com','3948262907',NULL,NULL),(467,'McArdle','Philippeaux','bphilippeauxcy@ftc.gov','9137862780',NULL,NULL),(468,'Sweetsur','Pohlke','mpohlkecz@seesaa.net','3471904397',NULL,NULL),(469,'Eliasen','Mac Giany','gmacgianyd0@tripod.com','9468281023',NULL,NULL),(470,'Burel','Lowe','ilowed1@infoseek.co.jp','4167504988',NULL,NULL),(471,'McIlherran','Veare','sveared2@360.cn','2399068753',NULL,NULL),(472,'Crinidge','O\'Nion','roniond3@wordpress.com','8634675081',NULL,NULL),(473,'Attrie','Spring','lspringd4@engadget.com','4101174659',NULL,NULL),(474,'Simounet','Kundert','jkundertd5@latimes.com','7563932893',NULL,NULL),(475,'Gane','Halls','mhallsd6@unc.edu','4806674309',NULL,NULL),(476,'Hammon','Vowells','dvowellsd7@jiathis.com','6983089715',NULL,NULL),(477,'Jeavon','Rubinchik','grubinchikd8@usda.gov','1321956386',NULL,NULL),(478,'Vann','Jenkyn','rjenkynd9@4shared.com','8579392757',NULL,NULL),(479,'Barlace','Jeandeau','cjeandeauda@a8.net','3372036040',NULL,NULL),(480,'Gajewski','Meco','qmecodb@printfriendly.com','1007231440',NULL,NULL),(481,'Lorenz','Giacomoni','rgiacomonidc@barnesandnoble.com','3609872077',NULL,NULL),(482,'Farry','Pahler','kpahlerdd@gnu.org','9613259787',NULL,NULL),(483,'Stormonth','Grolmann','lgrolmannde@cdc.gov','2443456193',NULL,NULL),(484,'Grioli','Mellanby','lmellanbydf@illinois.edu','2961373811',NULL,NULL),(485,'Aspland','Franzman','gfranzmandg@sina.com.cn','2771763224',NULL,NULL),(486,'Rowat','Spottiswood','jspottiswooddh@digg.com','2935640264',NULL,NULL),(487,'Hatliff','Canto','acantodi@eepurl.com','2631759046',NULL,NULL),(488,'Crone','Gradley','qgradleydj@diigo.com','3449732222',NULL,NULL),(489,'Goss','Presslee','kpressleedk@tiny.cc','5707469603',NULL,NULL),(490,'Wilgar','Hanny','bhannydl@aboutads.info','2172258072',NULL,NULL),(491,'Garnett','Sibbald','bsibbalddm@surveymonkey.com','9691663991',NULL,NULL),(492,'Hynd','Charlton','scharltondn@gravatar.com','1643112161',NULL,NULL),(493,'Simecek','Gotthard.sf','tgotthardsfdo@jugem.jp','2501821160',NULL,NULL),(494,'Whewill','Marklew','lmarklewdp@smh.com.au','5011596001',NULL,NULL),(495,'Cleaves','Attwill','hattwilldq@constantcontact.com','4416465083',NULL,NULL),(496,'Goodale','Jolland','jjollanddr@narod.ru','3455252506',NULL,NULL),(497,'Airton','Kerfut','nkerfutds@cbsnews.com','3766888262',NULL,NULL),(498,'Balden','Kemsley','skemsleydt@sbwire.com','5344860014',NULL,NULL),(499,'Ewings','Graysmark','dgraysmarkdu@icq.com','1124780568',NULL,NULL),(500,'Vasin','Ratcliff','cratcliffdv@technorati.com','2394088055',NULL,NULL),(501,'Lambillion','Thoumasson','kthoumassondw@spiegel.de','8798422248',NULL,NULL),(502,'Tadd','Mosson','omossondx@marketwatch.com','4449119240',NULL,NULL),(503,'Totton','Revington','mrevingtondy@mlb.com','4227071026',NULL,NULL),(504,'Colbron','Mattacks','nmattacksdz@abc.net.au','1436965351',NULL,NULL),(505,'Jeppe','Hailey','ghaileye0@uiuc.edu','2209360840',NULL,NULL),(506,'McCalum','End','iende1@godaddy.com','3622594443',NULL,NULL),(507,'Bascombe','Kensall','gkensalle2@amazon.de','1398019952',NULL,NULL),(508,'Scawton','Lydford','alydforde3@issuu.com','7923933606',NULL,NULL),(509,'Carmody','Piche','zpichee4@is.gd','9711491493',NULL,NULL),(510,'Slocombe','Drakes','rdrakese5@instagram.com','2438507570',NULL,NULL),(511,'Filipchikov','Haugen','jhaugene6@aboutads.info','7102013468',NULL,NULL),(512,'Rubinowitch','Sturzaker','nsturzakere7@sciencedaily.com','9666772904',NULL,NULL),(513,'Kaming','Christley','gchristleye8@time.com','6788435620',NULL,NULL),(514,'Hunte','Breeder','rbreedere9@fotki.com','8332089022',NULL,NULL),(515,'Chesney','Million','hmillionea@youtube.com','2273488437',NULL,NULL),(516,'Crickett','Surby','csurbyeb@loc.gov','3645865071',NULL,NULL),(517,'Menear','Epton','aeptonec@bluehost.com','6966834698',NULL,NULL),(518,'Larmor','Critchell','ccritchelled@globo.com','5909367173',NULL,NULL),(519,'Calbaithe','MacGraith','vmacgraithee@acquirethisname.com','2103279995',NULL,NULL),(520,'Stear','Loiterton','floitertonef@sciencedaily.com','6333746282',NULL,NULL),(521,'Ashburne','Oliphant','eoliphanteg@soup.io','6798072080',NULL,NULL),(522,'Tolerton','McMenamy','wmcmenamyeh@jimdo.com','2596941184',NULL,NULL),(523,'Boreham','Bosson','ebossonei@blogger.com','8188813666',NULL,NULL),(524,'Cahalan','Corkel','bcorkelej@salon.com','6502272336',NULL,NULL),(525,'Elliff','Grumbridge','jgrumbridgeek@feedburner.com','3498613868',NULL,NULL),(526,'Cambling','Yankin','myankinel@google.ru','6191970602',NULL,NULL),(527,'Beckerleg','Guye','cguyeem@upenn.edu','7988424392',NULL,NULL),(528,'Cordero','Penas','epenasen@springer.com','5277835189',NULL,NULL),(529,'McParland','Cockshut','rcockshuteo@slashdot.org','9069150540',NULL,NULL),(530,'Schechter','Duplock','fduplockep@mozilla.com','5101152043',NULL,NULL),(531,'Kalb','Pulley','apulleyeq@cnbc.com','1715119078',NULL,NULL),(532,'Fassbender','Abrahmer','mabrahmerer@sciencedirect.com','2544497137',NULL,NULL),(533,'Shakespeare','Le Batteur','tlebatteures@engadget.com','7052611685',NULL,NULL),(534,'Bartalucci','Santo','csantoet@theglobeandmail.com','7367438370',NULL,NULL),(535,'Street','Bassindale','cbassindaleeu@moonfruit.com','4668178045',NULL,NULL),(536,'Vockins','Kunath','pkunathev@hao123.com','7157928226',NULL,NULL),(537,'Klimkiewich','Froom','kfroomew@intel.com','5291176065',NULL,NULL),(538,'Defrain','O\'Cannon','gocannonex@so-net.ne.jp','6204279801',NULL,NULL),(539,'Ferrulli','Silber','msilberey@people.com.cn','7017463706',NULL,NULL),(540,'Pawlett','Osgar','kosgarez@deliciousdays.com','6528098956',NULL,NULL),(541,'Raspin','Kinkead','ckinkeadf0@statcounter.com','2508839645',NULL,NULL),(542,'Barkus','Kenrick','kkenrickf1@blogspot.com','9387967265',NULL,NULL),(543,'Shevill','Ayto','caytof2@geocities.jp','1784100821',NULL,NULL),(544,'Antoniottii','Saberton','csabertonf3@cornell.edu','2452780676',NULL,NULL),(545,'Khalid','Dixson','sdixsonf4@simplemachines.org','9087717199',NULL,NULL),(546,'Orring','Kapelhoff','tkapelhofff5@twitpic.com','4388681377',NULL,NULL),(547,'Duff','Aylett','aaylettf6@trellian.com','4676809599',NULL,NULL),(548,'Mackley','Corsan','pcorsanf7@umich.edu','5613105606',NULL,NULL),(549,'Connar','Noble','cnoblef8@xrea.com','2989611829',NULL,NULL),(550,'Byatt','Le Claire','cleclairef9@yolasite.com','2132136601',NULL,NULL),(551,'Leadbitter','Eads','peadsfa@wsj.com','7242148822',NULL,NULL),(552,'Birt','Cassells','kcassellsfb@smh.com.au','6508711737',NULL,NULL),(553,'Sutterfield','Phillot','cphillotfc@cbslocal.com','7877945517',NULL,NULL),(554,'Corradini','Trengrove','vtrengrovefd@wufoo.com','2556545170',NULL,NULL),(555,'Kibbee','McIlheran','dmcilheranfe@studiopress.com','2157864957',NULL,NULL),(556,'Cleminshaw','Filippone','cfilipponeff@usatoday.com','9403627390',NULL,NULL),(557,'Corry','Purvey','rpurveyfg@digg.com','5104964406',NULL,NULL),(558,'Stedall','Sueter','asueterfh@house.gov','1976447930',NULL,NULL),(559,'Weedall','Waywell','fwaywellfi@sbwire.com','7003236441',NULL,NULL),(560,'Card','Goldsby','kgoldsbyfj@foxnews.com','3267382974',NULL,NULL),(561,'Brimblecomb','Bampforth','kbampforthfk@mail.ru','3761284263',NULL,NULL),(562,'Addy','Bridie','rbridiefl@microsoft.com','2237350660',NULL,NULL),(563,'Jone','Rubinfeld','lrubinfeldfm@posterous.com','9261822673',NULL,NULL),(564,'Conford','Risdale','wrisdalefn@wikia.com','7307344407',NULL,NULL),(565,'Staff','Fuggles','cfugglesfo@tuttocitta.it','4218833370',NULL,NULL),(566,'Henriet','Tonks','dtonksfp@washingtonpost.com','8024108883',NULL,NULL),(567,'D\'Ugo','Sirette','hsirettefq@addtoany.com','3148056667',NULL,NULL),(568,'Govinlock','Ronaldson','jronaldsonfr@thetimes.co.uk','5853474071',NULL,NULL),(569,'Sandham','Ethelston','rethelstonfs@dion.ne.jp','7144584990',NULL,NULL),(570,'Dudson','Tunna','atunnaft@themeforest.net','7141663616',NULL,NULL),(571,'Chaudrelle','Sawart','lsawartfu@sogou.com','7849171590',NULL,NULL),(572,'Skirvane','Jeannenet','rjeannenetfv@t-online.de','1643885336',NULL,NULL),(573,'Simcoe','Bisset','sbissetfw@1und1.de','4733400299',NULL,NULL),(574,'Lantiffe','Freke','qfrekefx@ameblo.jp','2247107060',NULL,NULL),(575,'Estabrook','Oguz','goguzfy@chron.com','2386320513',NULL,NULL),(576,'Cotherill','Towner','wtownerfz@netvibes.com','8201960252',NULL,NULL),(577,'Brotherick','Hargroves','lhargrovesg0@msu.edu','9431344242',NULL,NULL),(578,'Vearncombe','Kantor','okantorg1@google.ru','6542786763',NULL,NULL),(579,'Huffey','Burfitt','eburfittg2@nih.gov','6024933995',NULL,NULL),(580,'Beckers','Jakobssen','djakobsseng3@exblog.jp','3409525432',NULL,NULL),(581,'Roches','Mandre','mmandreg4@usatoday.com','3245712897',NULL,NULL),(582,'Brind','Crass','ncrassg5@cyberchimps.com','5982099856',NULL,NULL),(583,'Coston','Thurlbeck','athurlbeckg6@cornell.edu','9305692687',NULL,NULL),(584,'Longworthy','Murrison','kmurrisong7@domainmarket.com','4316479791',NULL,NULL),(585,'Benediktsson','Hayhurst','lhayhurstg8@exblog.jp','1138746686',NULL,NULL),(586,'Joburn','Mosedill','cmosedillg9@jalbum.net','1813468500',NULL,NULL),(587,'Boustred','Tregear','ptregearga@columbia.edu','2492906475',NULL,NULL),(588,'Siuda','Vlahos','wvlahosgb@skyrock.com','1186477285',NULL,NULL),(589,'Robelin','Birkenshaw','mbirkenshawgc@alexa.com','4157428098',NULL,NULL),(590,'Mayes','Espadater','sespadatergd@goo.ne.jp','3049950730',NULL,NULL),(591,'Gookey','Imesen','eimesenge@php.net','8407641260',NULL,NULL),(592,'Honeyghan','Jurczak','djurczakgf@freewebs.com','9726193720',NULL,NULL),(593,'Merioth','Duval','cduvalgg@shareasale.com','5253826855',NULL,NULL),(594,'Brandreth','Hugnin','nhugningh@moonfruit.com','5771431946',NULL,NULL),(595,'Clampe','Bigham','mbighamgi@chicagotribune.com','2894759308',NULL,NULL),(596,'Dibdale','Faircloth','pfairclothgj@skyrock.com','7648162318',NULL,NULL),(597,'Renshaw','Fontell','gfontellgk@imdb.com','6481227265',NULL,NULL),(598,'Hatherell','Roome','jroomegl@sakura.ne.jp','9466163664',NULL,NULL),(599,'Druitt','Creasy','kcreasygm@amazonaws.com','7821900028',NULL,NULL),(600,'McGowan','Gilham','wgilhamgn@java.com','8465813936',NULL,NULL);
/*!40000 ALTER TABLE `PHARMACIEN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PRODUCTION`
--

DROP TABLE IF EXISTS `PRODUCTION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PRODUCTION` (
  `MEDICNum` int(11) NOT NULL,
  `DateProd` varchar(10) NOT NULL,
  `Qte` int(11) DEFAULT NULL,
  `PRODNum` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`PRODNum`),
  KEY `PRODUCTION_FK` (`MEDICNum`),
  CONSTRAINT `PRODUCTION_FK` FOREIGN KEY (`MEDICNum`) REFERENCES `MEDICAMENTS` (`MEDICNum`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PRODUCTION`
--

LOCK TABLES `PRODUCTION` WRITE;
/*!40000 ALTER TABLE `PRODUCTION` DISABLE KEYS */;
/*!40000 ALTER TABLE `PRODUCTION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `STOCKS`
--

DROP TABLE IF EXISTS `STOCKS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `STOCKS` (
  `PHARNum` int(11) NOT NULL,
  `MEDICNum` int(11) NOT NULL,
  `Qte` int(11) DEFAULT NULL,
  `StockNum` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`StockNum`),
  KEY `STOCKS_FK` (`PHARNum`),
  KEY `STOCKS_FK_1` (`MEDICNum`),
  CONSTRAINT `STOCKS_FK` FOREIGN KEY (`PHARNum`) REFERENCES `PHARMACIE` (`PHARNum`),
  CONSTRAINT `STOCKS_FK_1` FOREIGN KEY (`MEDICNum`) REFERENCES `MEDICAMENTS` (`MEDICNum`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `STOCKS`
--

LOCK TABLES `STOCKS` WRITE;
/*!40000 ALTER TABLE `STOCKS` DISABLE KEYS */;
/*!40000 ALTER TABLE `STOCKS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Galifire','user@userdb.db',NULL,'$2y$10$ySAn5.kGsTje6VzpMD1NXebQpZKU/PYaOmw7TcG1XWapUXNa96ASm','43j3XlLskNB4D8woJhfnHndVD0DNjxBtTiE3J0fv7Tn8wkLbx4NwfP193XwN','2021-12-20 11:17:42','2021-12-20 11:17:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-08  1:23:51
