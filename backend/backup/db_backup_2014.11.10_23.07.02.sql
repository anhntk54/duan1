-- -------------------------------------------
SET AUTOCOMMIT=0;
START TRANSACTION;
SET SQL_QUOTE_SHOW_CREATE = 1;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- -------------------------------------------
-- -------------------------------------------
-- START BACKUP
-- -------------------------------------------
-- -------------------------------------------
-- TABLE `tbl_admin`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_cauhoi`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_cauhoi`;
CREATE TABLE IF NOT EXISTS `tbl_cauhoi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `noi_dung` text COLLATE utf32_unicode_ci NOT NULL,
  `anh_minhhoa` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `tra_loi` text COLLATE utf32_unicode_ci NOT NULL,
  `anh_traloi` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `tien_cuoc` float NOT NULL,
  `hen_gio` datetime NOT NULL,
  `thoigian_traloi` datetime NOT NULL,
  `luot_thich` int(11) NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `thoigian_tao` int(11) NOT NULL,
  `tongtien_mat` float NOT NULL,
  `tongtien_duoc` float NOT NULL,
  `tongtien_khieunai` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_config`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_config`;
CREATE TABLE IF NOT EXISTS `tbl_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_hanhdong`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_hanhdong`;
CREATE TABLE IF NOT EXISTS `tbl_hanhdong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noi_dung` varchar(300) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_khieunai`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_khieunai`;
CREATE TABLE IF NOT EXISTS `tbl_khieunai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cauhoi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `thoigian_khieunai` datetime NOT NULL,
  `thoigian_ketthuc` datetime NOT NULL,
  `trangthai_nguoithang` int(11) NOT NULL,
  `trangthai_xuly` int(11) NOT NULL,
  `tien_khieunai` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_level`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_level`;
CREATE TABLE IF NOT EXISTS `tbl_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tien_toi_thieu` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_loaigiaodich`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_loaigiaodich`;
CREATE TABLE IF NOT EXISTS `tbl_loaigiaodich` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tengiaodich` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_log`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_log`;
CREATE TABLE IF NOT EXISTS `tbl_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tbl_name` varchar(11) COLLATE utf32_unicode_ci NOT NULL,
  `tbl_id` int(11) NOT NULL,
  `hanhdong_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_log_tien`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_log_tien`;
CREATE TABLE IF NOT EXISTS `tbl_log_tien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cauhoi_id` int(11) NOT NULL,
  `nguoinhan_id` int(11) NOT NULL,
  `nguoichuyen_id` int(11) NOT NULL,
  `loaigiaodich_id` int(11) NOT NULL,
  `tien` float NOT NULL,
  `thoi_gian` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_logvote`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_logvote`;
CREATE TABLE IF NOT EXISTS `tbl_logvote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cauhoi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `thoigian_vote` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_profile`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_profile`;
CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `cmnd` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `dia_chi` varchar(300) COLLATE utf32_unicode_ci NOT NULL,
  `ngay_sinh` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_tag`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_tag`;
CREATE TABLE IF NOT EXISTS `tbl_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cauhoi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trangthai_chapnhan` int(11) NOT NULL,
  `thoigian_chapnhan` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_taikhoan`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_taikhoan`;
CREATE TABLE IF NOT EXISTS `tbl_taikhoan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tien_thang` float NOT NULL,
  `tien_thua` float NOT NULL,
  `tien_nap` float NOT NULL,
  `tai_khoan` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_traloi`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_traloi`;
CREATE TABLE IF NOT EXISTS `tbl_traloi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cauhoi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `languoi_duoctag` int(11) NOT NULL,
  `noi_dung` text COLLATE utf32_unicode_ci NOT NULL,
  `hinh_anh` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `trangthai_dungsai` int(11) NOT NULL,
  `thoigian_traloi` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_user`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `facebook_id` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `ten_day_du` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `avatar` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `level_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE DATA tbl_admin
-- -------------------------------------------
INSERT INTO `tbl_admin` (`id`,`username`,`password`) VALUES
('2','trieunhu','4650168ea55d0b7102199e86f9de5988');



-- -------------------------------------------
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
COMMIT;
-- -------------------------------------------
-- -------------------------------------------
-- END BACKUP
-- -------------------------------------------
