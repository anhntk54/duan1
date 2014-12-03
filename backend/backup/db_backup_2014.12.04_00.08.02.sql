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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_config`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_config`;
CREATE TABLE IF NOT EXISTS `tbl_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

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
-- TABLE `tbl_hengio`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_hengio`;
CREATE TABLE IF NOT EXISTS `tbl_hengio` (
  `ten` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gia_tri` int(11) NOT NULL,
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
  `hinh_anh` varchar(250) COLLATE utf32_unicode_ci NOT NULL,
  `cap_do` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE `tbl_level_tien`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_level_tien`;
CREATE TABLE IF NOT EXISTS `tbl_level_tien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) NOT NULL,
  `tien` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_like`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_like`;
CREATE TABLE IF NOT EXISTS `tbl_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_id` int(11) NOT NULL,
  `table_name` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

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
-- TABLE `tbl_log_naptien`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_log_naptien`;
CREATE TABLE IF NOT EXISTS `tbl_log_naptien` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `ngay_tao` datetime DEFAULT NULL,
  `trang_thai` int(11) DEFAULT NULL,
  `pin` varchar(200) NOT NULL,
  `serial` varchar(200) NOT NULL,
  `os` varchar(12) NOT NULL DEFAULT 'VMS',
  `tien_gui` int(11) NOT NULL DEFAULT '0',
  `tien_nhan` int(11) NOT NULL DEFAULT '0',
  `log` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- TABLE `tbl_quangcao`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_quangcao`;
CREATE TABLE IF NOT EXISTS `tbl_quangcao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(500) NOT NULL,
  `hinh_anh` varchar(300) NOT NULL,
  `loai` int(11) NOT NULL,
  `kieu_bat` int(11) NOT NULL,
  `link_den` varchar(255) NOT NULL,
  `vi_tri` int(11) NOT NULL,
  `ngay_tao` datetime NOT NULL,
  `luot_click` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `tbl_seo`
-- -------------------------------------------
DROP TABLE IF EXISTS `tbl_seo`;
CREATE TABLE IF NOT EXISTS `tbl_seo` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `title` varchar(128) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `metarobot` varchar(50) DEFAULT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- -------------------------------------------
-- TABLE DATA tbl_admin
-- -------------------------------------------
INSERT INTO `tbl_admin` (`id`,`username`,`password`) VALUES
('2','trieunhu','4650168ea55d0b7102199e86f9de5988');



-- -------------------------------------------
-- TABLE DATA tbl_cauhoi
-- -------------------------------------------
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('1','7','Bắt đầu nào :)','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('3','7','duy hâm','images/cauhoi/2014-11-30/cau-hoi-thach-do-547ae910791b3.png','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('4','7','dc chưa nào :)','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('5','7','thách đố mới nào','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('6','7','Đếm câu trả lời :P','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('7','7','ajax','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('8','7','ajax dược chưa','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('9','7','dm','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('10','7','dm được chưa','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('11','7','sao éo dc','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('12','7','dm dc chưa','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('13','7','ajax','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('14','7','dm chắc éo dc','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('15','7','tự nhiên nó dc :v','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('16','7','Lần này chắc được','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');
INSERT INTO `tbl_cauhoi` (`id`,`user_id`,`noi_dung`,`anh_minhhoa`,`tra_loi`,`anh_traloi`,`tien_cuoc`,`hen_gio`,`thoigian_traloi`,`luot_thich`,`luot_xem`,`trang_thai`,`thoigian_tao`,`tongtien_mat`,`tongtien_duoc`,`tongtien_khieunai`) VALUES
('17','7','sao không được nữa ','','','','0','0000-00-00 00:00:00','0000-00-00 00:00:00','0','0','0','0','0','0','0');



-- -------------------------------------------
-- TABLE DATA tbl_config
-- -------------------------------------------
INSERT INTO `tbl_config` (`id`,`name`,`value`,`status`) VALUES
('14','logo','1416131678-img4693jpg.JPG','1');
INSERT INTO `tbl_config` (`id`,`name`,`value`,`status`) VALUES
('15','tiencuoc','1','0');
INSERT INTO `tbl_config` (`id`,`name`,`value`,`status`) VALUES
('16','tiennguoidung','100000','0');



-- -------------------------------------------
-- TABLE DATA tbl_level
-- -------------------------------------------
INSERT INTO `tbl_level` (`id`,`ten`,`hinh_anh`,`cap_do`) VALUES
('1','Thổ dân','1416194707-10358729654706094643311133203556448728575njpg.png','0');
INSERT INTO `tbl_level` (`id`,`ten`,`hinh_anh`,`cap_do`) VALUES
('2','Đại gia','','3');



-- -------------------------------------------
-- TABLE DATA tbl_level_tien
-- -------------------------------------------
INSERT INTO `tbl_level_tien` (`id`,`level_id`,`tien`) VALUES
('1','1','100');
INSERT INTO `tbl_level_tien` (`id`,`level_id`,`tien`) VALUES
('2','1','300');



-- -------------------------------------------
-- TABLE DATA tbl_like
-- -------------------------------------------
INSERT INTO `tbl_like` (`id`,`table_id`,`table_name`,`user_id`) VALUES
('9','4','C','7');
INSERT INTO `tbl_like` (`id`,`table_id`,`table_name`,`user_id`) VALUES
('10','5','C','7');
INSERT INTO `tbl_like` (`id`,`table_id`,`table_name`,`user_id`) VALUES
('11','6','C','7');
INSERT INTO `tbl_like` (`id`,`table_id`,`table_name`,`user_id`) VALUES
('13','9','C','7');
INSERT INTO `tbl_like` (`id`,`table_id`,`table_name`,`user_id`) VALUES
('16','13','C','7');
INSERT INTO `tbl_like` (`id`,`table_id`,`table_name`,`user_id`) VALUES
('17','14','C','7');
INSERT INTO `tbl_like` (`id`,`table_id`,`table_name`,`user_id`) VALUES
('19','17','C','2');



-- -------------------------------------------
-- TABLE DATA tbl_tag
-- -------------------------------------------
INSERT INTO `tbl_tag` (`id`,`cauhoi_id`,`user_id`,`trangthai_chapnhan`,`thoigian_chapnhan`) VALUES
('1','9','2','0','0000-00-00 00:00:00');
INSERT INTO `tbl_tag` (`id`,`cauhoi_id`,`user_id`,`trangthai_chapnhan`,`thoigian_chapnhan`) VALUES
('2','9','4','0','0000-00-00 00:00:00');
INSERT INTO `tbl_tag` (`id`,`cauhoi_id`,`user_id`,`trangthai_chapnhan`,`thoigian_chapnhan`) VALUES
('3','17','2','0','0000-00-00 00:00:00');



-- -------------------------------------------
-- TABLE DATA tbl_taikhoan
-- -------------------------------------------
INSERT INTO `tbl_taikhoan` (`id`,`user_id`,`tien_thang`,`tien_thua`,`tien_nap`,`tai_khoan`) VALUES
('1','7','0','0','0','100000');
INSERT INTO `tbl_taikhoan` (`id`,`user_id`,`tien_thang`,`tien_thua`,`tien_nap`,`tai_khoan`) VALUES
('2','8','0','0','0','100000');



-- -------------------------------------------
-- TABLE DATA tbl_traloi
-- -------------------------------------------
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('4','3','7','0','dc chua nao','','0','2014-11-30 18:27:22');
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('5','1','7','0','ok chưa','','0','2014-12-01 23:49:59');
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('6','5','7','0','sao lại thế nhể :3','','0','2014-12-01 23:50:27');
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('7','4','7','0','chắc được rồi ','','0','2014-12-01 23:52:06');
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('8','16','7','0','dm được chưa','','0','2014-12-03 23:17:59');
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('9','15','7','0','dc k ','','0','2014-12-03 23:23:46');
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('10','13','7','0','éo dc','','0','2014-12-03 23:24:34');
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('11','12','7','0','chắc dc rồi ','','0','2014-12-03 23:26:54');
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('12','17','7','0','chắc dc rồi ','','0','2014-12-03 23:27:29');
INSERT INTO `tbl_traloi` (`id`,`cauhoi_id`,`user_id`,`languoi_duoctag`,`noi_dung`,`hinh_anh`,`trangthai_dungsai`,`thoigian_traloi`) VALUES
('13','17','2','1','ê tag đây','','0','2014-12-03 23:29:19');



-- -------------------------------------------
-- TABLE DATA tbl_user
-- -------------------------------------------
INSERT INTO `tbl_user` (`id`,`username`,`facebook_id`,`email`,`password`,`ten_day_du`,`avatar`,`level_id`) VALUES
('2','anhtrieunhu','0','anhntk54@gmail.com','','Triệu Nhữ','/images/users/avatar/2014-11-21/1416590780-avatar002jpg.png','0');
INSERT INTO `tbl_user` (`id`,`username`,`facebook_id`,`email`,`password`,`ten_day_du`,`avatar`,`level_id`) VALUES
('3','minhtien','0','minhtien@gmail.com','','Minh Tiến','/images/users/avatar/2014-11-21/1416590803-avatar003jpg.png','0');
INSERT INTO `tbl_user` (`id`,`username`,`facebook_id`,`email`,`password`,`ten_day_du`,`avatar`,`level_id`) VALUES
('4','Naruto','0','Naruto@gmail.com','','Naruto','/images/users/avatar/2014-11-21/1416590825-avatar004jpg.png','0');
INSERT INTO `tbl_user` (`id`,`username`,`facebook_id`,`email`,`password`,`ten_day_du`,`avatar`,`level_id`) VALUES
('5','the','0','thedm@gmail.com','','Lê Quang Thế','/images/users/avatar/2014-11-21/1416590842-img4759jpg.png','0');
INSERT INTO `tbl_user` (`id`,`username`,`facebook_id`,`email`,`password`,`ten_day_du`,`avatar`,`level_id`) VALUES
('7','trieunhu','0','anhntk54@gmail.com123','c1305cdbfe5daa6e11c76f3e6c6cb745','Nhữ Tuấn Anh','/images/users/avatar/2014-11-21/1416591207-img4652jpg.png','0');
INSERT INTO `tbl_user` (`id`,`username`,`facebook_id`,`email`,`password`,`ten_day_du`,`avatar`,`level_id`) VALUES
('8','tuananh','0','tuananh@gmail.com1','','1','/images/users/avatar/2014-11-21/1416584005-img4735jpg.png','0');



-- -------------------------------------------
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
COMMIT;
-- -------------------------------------------
-- -------------------------------------------
-- END BACKUP
-- -------------------------------------------
