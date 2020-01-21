# ************************************************************
# Sequel Pro SQL dump
# Version (null)
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.18)
# Database: endterm
# Generation Time: 2020-01-16 04:45:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table DonHang
# ------------------------------------------------------------

DROP TABLE IF EXISTS `DonHang`;

CREATE TABLE `DonHang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `datecreated` date NOT NULL,
  `deliverystatus` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `deliverydate` date NOT NULL,
  `totalprice` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `donhang_khachhang` (`user_id`),
  CONSTRAINT `donhang_khachhang` FOREIGN KEY (`user_id`) REFERENCES `khachang` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `DonHang` WRITE;
/*!40000 ALTER TABLE `DonHang` DISABLE KEYS */;

INSERT INTO `DonHang` (`id`, `user_id`, `datecreated`, `deliverystatus`, `deliverydate`, `totalprice`)
VALUES
	(1,1,'2020-01-16','processing...','2020-01-16',105);

/*!40000 ALTER TABLE `DonHang` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table DonHangSanPham
# ------------------------------------------------------------

DROP TABLE IF EXISTS `DonHangSanPham`;

CREATE TABLE `DonHangSanPham` (
  `item_id` int(11) unsigned NOT NULL,
  `order_id` int(11) unsigned NOT NULL,
  `num_items` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`item_id`,`order_id`),
  KEY `donhang_chitiet` (`order_id`),
  CONSTRAINT `donhang_chitiet` FOREIGN KEY (`order_id`) REFERENCES `donhang` (`id`),
  CONSTRAINT `sampham_chitiet` FOREIGN KEY (`item_id`) REFERENCES `sanpham` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `DonHangSanPham` WRITE;
/*!40000 ALTER TABLE `DonHangSanPham` DISABLE KEYS */;

INSERT INTO `DonHangSanPham` (`item_id`, `order_id`, `num_items`)
VALUES
	(1,1,3),
	(2,1,3);

/*!40000 ALTER TABLE `DonHangSanPham` ENABLE KEYS */;
UNLOCK TABLES;

DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `quantityUpdate_Insert` AFTER INSERT ON `DonHangSanPham` FOR EACH ROW UPDATE SanPham
SET SanPham.num_existed = SanPham.num_existed - New.num_items 
WHERE SanPham.id = New.item_id */;;
/*!50003 SET SESSION SQL_MODE="ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `updateTotalPrice` AFTER INSERT ON `DonHangSanPham` FOR EACH ROW Update DonHang 
        set totalprice = totalPrice + (
                    select price 
                    from SanPham 
                    where SanPham.id = NEW.item_id)*New.num_items 
                    
           
        where DonHang.id = New.order_id */;;
DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;


# Dump of table HangSX
# ------------------------------------------------------------

DROP TABLE IF EXISTS `HangSX`;

CREATE TABLE `HangSX` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `HangSX` WRITE;
/*!40000 ALTER TABLE `HangSX` DISABLE KEYS */;

INSERT INTO `HangSX` (`id`, `name`, `location`)
VALUES
	(1,'hangmot','hn');

/*!40000 ALTER TABLE `HangSX` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table KhacHang
# ------------------------------------------------------------

DROP TABLE IF EXISTS `KhacHang`;

CREATE TABLE `KhacHang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `lastname` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `email` varchar(30) COLLATE utf8mb4_general_ci DEFAULT '',
  `birthday` date DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `KhacHang` WRITE;
/*!40000 ALTER TABLE `KhacHang` DISABLE KEYS */;

INSERT INTO `KhacHang` (`id`, `firstname`, `lastname`, `email`, `birthday`, `address`)
VALUES
	(1,'hung','lan','we',NULL,'hn');

/*!40000 ALTER TABLE `KhacHang` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table LoaiSP
# ------------------------------------------------------------

DROP TABLE IF EXISTS `LoaiSP`;

CREATE TABLE `LoaiSP` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `loai` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `LoaiSP` WRITE;
/*!40000 ALTER TABLE `LoaiSP` DISABLE KEYS */;

INSERT INTO `LoaiSP` (`id`, `loai`)
VALUES
	(1,'mot');

/*!40000 ALTER TABLE `LoaiSP` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table SanPham
# ------------------------------------------------------------

DROP TABLE IF EXISTS `SanPham`;

CREATE TABLE `SanPham` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) unsigned NOT NULL,
  `item_type_id` int(11) unsigned NOT NULL,
  `num_existed` int(11) unsigned NOT NULL,
  `price` int(11) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `sp_hangsx` (`brand_id`),
  KEY `sp_loaisp` (`item_type_id`),
  CONSTRAINT `sp_hangsx` FOREIGN KEY (`brand_id`) REFERENCES `hangsx` (`id`),
  CONSTRAINT `sp_loaisp` FOREIGN KEY (`item_type_id`) REFERENCES `loaisp` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `SanPham` WRITE;
/*!40000 ALTER TABLE `SanPham` DISABLE KEYS */;

INSERT INTO `SanPham` (`id`, `brand_id`, `item_type_id`, `num_existed`, `price`, `name`)
VALUES
	(1,1,1,7,20,'loa'),
	(2,1,1,0,15,'tai nghe');

/*!40000 ALTER TABLE `SanPham` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;∂
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteSanPham`( IN p_id INT)
DELETE FROM SanPham
   WHERE ID=p_id;;
DELIMITER ;



DELIMITER //

create procedure showSanPhamTheoLoai(in type_id int)
drop temporary table if exists _result_allSP_tmp //
create temporary table _procedure_result_tmp 
      select * from SanPham where SanPham.item_type_id = type_id//
DELIMITER ;