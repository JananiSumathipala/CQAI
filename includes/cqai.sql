/*
SQLyog Community v13.3.0 (64 bit)
MySQL - 8.0.40 : Database - cqai
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cqai` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `cqai`;

/*Data for the table `admins` */

insert  into `admins`(`id`,`username`,`branch`,`password`,`created_at`,`last_login`,`is_admin`) values 
(1,'admin','all','$2y$10$2knpl.JqcMC0S0CdK4fkx.ESgqJiGEZcyXqjDHuyWdgFJ1sFvpE4e','2025-07-31 13:53:04',NULL,1);

/*Data for the table `branches` */

insert  into `branches`(`id`,`name`,`created_at`) values 
(6,'AE','2025-06-30 16:17:01'),
(7,'AO','2025-06-30 16:17:01'),
(8,'AA','2025-06-30 16:17:01'),
(9,'GE','2025-06-30 16:17:01'),
(10,'EE','2025-06-30 16:17:01'),
(11,'BE','2025-06-30 16:17:01'),
(12,'CE','2025-06-30 16:17:01');

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`created_at`) values 
(6,'Audit Reports','2025-06-30 16:17:01'),
(7,'Check Lists','2025-06-30 16:17:01'),
(8,'Feedback Reports','2025-06-30 16:17:01'),
(9,'R&D','2025-06-30 16:17:01'),
(10,'Latitude','2025-06-30 16:17:01'),
(11,'Modification','2025-06-30 16:17:01'),
(12,'Confidency','2025-06-30 16:17:01');

/*Data for the table `documents` */

insert  into `documents`(`id`,`title`,`description`,`category_id`,`uploaded_by`,`file_path`,`uploaded_at`,`is_active`,`branch_id`,`section`) values 
(5,'klf','hgf',7,1,'uploads/doc_5.docx','2025-07-31 16:15:46',1,6,NULL),
(6,'rty','rty',7,1,'uploads/doc_6.docx','2025-07-31 17:15:06',1,12,'services'),
(7,'rtg','rtg',7,1,'uploads/doc_7.pdf','2025-08-01 15:55:16',1,6,'services'),
(8,'AE','REPORT',7,1,'uploads/doc_8.pdf','2025-08-04 14:29:43',1,8,'services'),
(9,'AO','REPORT',7,1,'uploads/doc_9.pdf','2025-08-04 14:30:14',1,7,'services'),
(10,'AA','REPORT',7,1,'uploads/doc_10.pdf','2025-08-04 14:30:46',1,8,'services'),
(11,'GE','REPORT',7,1,'uploads/doc_11.pdf','2025-08-04 14:31:35',1,9,'services'),
(12,'EE','REPORT',7,1,'uploads/doc_12.pdf','2025-08-04 14:32:02',1,10,'services'),
(13,'BE','REPORT',7,1,'uploads/doc_13.pdf','2025-08-04 14:32:28',1,11,'services'),
(14,'CE','',7,1,'uploads/doc_14.pdf','2025-08-04 14:32:55',1,12,'services');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
