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
  `noidung` text NOT NULL,
  `noidung_traloi` text NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `hinhanh_traloi` varchar(200) NOT NULL,
  `datgio` datetime NOT NULL,
  `thoigian_conlai` datetime NOT NULL,
  `tien_thachdo` int(11) NOT NULL,
  `tien_cuoc` int(11) NOT NULL,
  `trangthai_traloi` int(11) NOT NULL,
  `trangthai_hetgio` int(11) NOT NULL,
  `chay_thoigian_canhbao` datetime NOT NULL,
  `canhbao_chuatraloi` int(11) NOT NULL,
  `soluot_thich` int(11) NOT NULL,
  `soluot_khongthich` int(11) NOT NULL,
  `ngaytao` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_khieunai`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_khieunai`;
CREATE TABLE IF NOT EXISTS `tbl_khieunai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cauhoi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `trangthai_khieunai` int(11) NOT NULL,
  `ngaytao` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_napthe`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_napthe`;
CREATE TABLE IF NOT EXISTS `tbl_napthe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tien_nap` int(11) NOT NULL,
  `seri` varchar(50) NOT NULL,
  `loai_the` int(11) NOT NULL,
  `ngay_nap` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_tag_user`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_tag_user`;
CREATE TABLE IF NOT EXISTS `tbl_tag_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cauhoi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trangthai_chapnhan` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_user_profile`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_user_profile`;
CREATE TABLE IF NOT EXISTS `tbl_user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dien_thoai` varchar(20) NOT NULL,
  `cmnd` varchar(20) NOT NULL,
  `que_quan` varchar(250) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `thuong_tru` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_user_taikhoan`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_user_taikhoan`;
CREATE TABLE IF NOT EXISTS `tbl_user_taikhoan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tai_khoan` int(11) NOT NULL,
  `tong_tiennap` int(11) NOT NULL,
  `tong_tienthang` int(11) NOT NULL,
  `tong_tienthua` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_user_traloi`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_user_traloi`;
CREATE TABLE IF NOT EXISTS `tbl_user_traloi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cauhoi_id` int(11) NOT NULL,
  `traloi_noidung` text NOT NULL,
  `traloi_hinhanh` varchar(200) NOT NULL,
  `tien_duoc_mat` int(11) NOT NULL,
  `traloi_trangthai` int(11) NOT NULL,
  `traloi_ngay` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_users`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dangki` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_daydu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
