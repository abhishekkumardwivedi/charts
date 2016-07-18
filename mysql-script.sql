/*create db restocloud and add following table*/
DROP TABLE IF EXISTS `samples`;

CREATE TABLE `samples` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(100) DEFAULT NULL,
  `revenue` decimal(10,0) DEFAULT NULL,
  `overhead` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `projections_sample` */

insert  into `samples`(`id`,`month`,`revenue`,`overhead`) values (1,'Jan','23987','21990'),(2,'Feb','24784','22365'),(3,'Mar','25899','21987'),(4,'Apr','25569','22369'),(5,'May','25897','22558'),(6,'Jun','25668','22987'),(7,'Jul','24114','23521'),(8,'Aug','23899','23003'),(9,'Sep','24987','22756'),(10,'Oct','25111','23112'),(11,'Nov','25899','22987'),(12,'Dec','23221','22897');
