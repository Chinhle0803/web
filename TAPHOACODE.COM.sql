-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 18, 2023 lúc 07:23 PM
-- Phiên bản máy phục vụ: 10.5.19-MariaDB-cll-lve
-- Phiên bản PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tsttaphoacode_testshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `groups` varchar(255) DEFAULT NULL,
  `account` text DEFAULT NULL,
  `chitiet` text DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `listimg` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`id`, `groups`, `account`, `chitiet`, `createdate`, `updatedate`, `username`, `receiver`, `time`, `title`, `img`, `money`, `listimg`) VALUES
(2, '42', 'df|dsf', 'quân huy 1\r\ntướng 5\r\nskin 999', '2023-05-18 10:50:49', NULL, NULL, NULL, NULL, NULL, 'https://cdn.vn.garenanow.com/web/kg/home/images/img-share.jpg', 100, 'https://seongshop.com/upload/product/ba122fc9229e375b3bb6aee784930205.png\r\nhttps://seongshop.com/upload/product/ba122fc9229e375b3bb6aee784930205.png\r\nhttps://seongshop.com/upload/product/ba122fc9229e375b3bb6aee784930205.png\r\nhttps://seongshop.com/upload/product/ba122fc9229e375b3bb6aee784930205.png\r\nhttps://seongshop.com/upload/product/ba122fc9229e375b3bb6aee784930205.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `purchase_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `stk` text NOT NULL,
  `name` text NOT NULL,
  `bank_name` text NOT NULL,
  `chi_nhanh` text NOT NULL,
  `logo` text DEFAULT NULL,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank_auto`
--

CREATE TABLE `bank_auto` (
  `id` int(11) NOT NULL,
  `tid` varchar(64) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `amount` int(11) DEFAULT 0,
  `cusum_balance` int(11) DEFAULT 0,
  `time` datetime DEFAULT NULL,
  `bank_sub_acc_id` varchar(64) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `deletedate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `username` varchar(32) NOT NULL,
  `loaithe` varchar(32) NOT NULL,
  `menhgia` int(11) NOT NULL,
  `thucnhan` int(11) DEFAULT 0,
  `seri` text NOT NULL,
  `pin` text NOT NULL,
  `createdate` datetime NOT NULL,
  `status` varchar(32) NOT NULL,
  `note` text NOT NULL,
  `deletedate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `cards`
--

INSERT INTO `cards` (`id`, `code`, `username`, `loaithe`, `menhgia`, `thucnhan`, `seri`, `pin`, `createdate`, `status`, `note`, `deletedate`) VALUES
(1, '775812679', 'hoangduchuy', 'VIETTEL', 20000, 0, '10009679686794', '827491739482852', '2023-05-15 10:00:06', 'thatbai', '', NULL),
(2, '230882745', 'hoangduchuy', 'VIETTEL', 20000, 0, '10009274927342', '827491739482853', '2023-05-15 10:10:35', 'thatbai', '', NULL),
(3, '206753768', 'admin', 'VIETTEL', 100000, 0, '10008942633571', '123213213213213', '2023-05-15 12:13:47', 'thatbai', '', NULL),
(4, '168135800', 'admin', 'VIETTEL', 100000, 0, '10008942633572', '123213213213214', '2023-05-15 12:14:09', 'thatbai', '', NULL),
(5, '458213936', 'admin', 'VIETTEL', 100000, 0, '10008942633578', '123213213213218', '2023-05-15 12:14:31', 'thatbai', '', NULL),
(6, '954341878', 'admin', 'VIETTEL', 100000, 0, '10008942603571', '123210213213213', '2023-05-15 12:14:55', 'thatbai', '', NULL),
(7, '568800530', 'adminadmin', 'Viettel', 10000, 0, '10008810723001', '987662777164000', '2023-05-18 11:20:54', 'thatbai', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `title`, `display`, `img`) VALUES
(16, 'Danh Mục Đăng Bán Tài khoản', 'SHOW', 'https://i.imgur.com/xBcgsBx.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_caythue`
--

CREATE TABLE `category_caythue` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `luuy` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category_caythue`
--

INSERT INTO `category_caythue` (`id`, `title`, `display`, `img`, `luuy`) VALUES
(3, 'Cày Thuê Bloxfruits', 'SHOW', 'https://cdn.upanh.info/storage/upload/images/%E1%BA%A2nh%20Thumb%20Web/Thumb%20Roblox%20Chung/CAY-THUE-BLOX-FRUIT.gif', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_gamepass`
--

CREATE TABLE `category_gamepass` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `luuy` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category_gamepass`
--

INSERT INTO `category_gamepass` (`id`, `title`, `display`, `img`, `luuy`) VALUES
(1, 'Danh Mục GamePass', 'SHOW', 'https://imagetip.net/storage/upload/service-config-eXdiaDMxQ1ZYN0U3YnhLdUx3T0diUT09/2908/images/gamepass.gif', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_robux`
--

CREATE TABLE `category_robux` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `luuy` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category_robux`
--

INSERT INTO `category_robux` (`id`, `title`, `display`, `img`, `luuy`) VALUES
(2, 'Bán Robux Chính Hãng', 'SHOW', 'https://cdn.upanh.info/storage/upload/service-config-SEVNOEp3SEt0anJTWlAzcTNEYklDZz09/2801/images/CHINH-HANG-ROBUX-UY-TIN.gif', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongtien`
--

CREATE TABLE `dongtien` (
  `id` int(11) NOT NULL,
  `sotientruoc` int(11) DEFAULT NULL,
  `sotienthaydoi` int(11) DEFAULT NULL,
  `sotiensau` int(11) DEFAULT NULL,
  `thoigian` datetime DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `dongtien`
--

INSERT INTO `dongtien` (`id`, `sotientruoc`, `sotienthaydoi`, `sotiensau`, `thoigian`, `noidung`, `username`) VALUES
(1, 0, 1000000, 1000000, '2023-05-15 18:26:28', 'Admin thay đổi số dư ', 'hoangduchuy'),
(2, 1000000, 1, 999999, '2023-05-15 18:27:35', 'Mua tài khoản (#1)', 'hoangduchuy'),
(3, 1019999, 20000, 999999, '2023-05-15 19:01:11', 'Thực hiện (Vòng Quay May Mắn)', 'hoangduchuy'),
(4, 999999, 20000, 979999, '2023-05-15 19:01:23', 'Thực hiện (Vòng Quay May Mắn)', 'hoangduchuy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `chitiet` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `category`, `title`, `display`, `img`, `chitiet`) VALUES
(42, 16, 'acc liên quân giá rẻ', 'SHOW', 'https://test.taphoacode.com/assets/storage/images/upload_7OFWGZN9LJVS.png', 'PHA+bGnDqm4gcXXDom4gcuG6uzwvcD4=');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups_caythue`
--

CREATE TABLE `groups_caythue` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups_gamepass`
--

CREATE TABLE `groups_gamepass` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups_robux`
--

CREATE TABLE `groups_robux` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsuvongquay`
--

CREATE TABLE `lichsuvongquay` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `soluong` int(11) DEFAULT 0,
  `NA_trathuong` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lichsuvongquay`
--

INSERT INTO `lichsuvongquay` (`id`, `username`, `soluong`, `NA_trathuong`, `time`) VALUES
(1, 'hoangduchuy', 44, NULL, 1684191671),
(2, 'hoangduchuy', 44, NULL, 1684191683),
(3, '', 55, NULL, 1684337968),
(4, 'admin', 44, NULL, 1684401555),
(5, '', 44, NULL, 1684402534),
(6, 'admin', 33, NULL, 1684403531),
(7, 'admin', 44, NULL, 1684403531),
(8, 'admin', 33, NULL, 1684403531);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `solan` varchar(255) NOT NULL,
  `giam` varchar(255) NOT NULL,
  `dichvu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `magiamgia`
--

INSERT INTO `magiamgia` (`id`, `code`, `solan`, `giam`, `dichvu`) VALUES
(1, 'TAPHOACODE', 'TAPHOACODE', '0', 'robux');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mini_game`
--

CREATE TABLE `mini_game` (
  `id` int(255) NOT NULL,
  `name` varchar(999) DEFAULT NULL,
  `price` varchar(999) NOT NULL DEFAULT '0',
  `sudung` varchar(999) NOT NULL DEFAULT '0',
  `thumb` varchar(999) NOT NULL DEFAULT '0',
  `image` varchar(999) NOT NULL DEFAULT '0',
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'true',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mini_game`
--

INSERT INTO `mini_game` (`id`, `name`, `price`, `sudung`, `thumb`, `image`, `status`, `time`) VALUES
(2, 'Vòng Quay May Mắn', '20000', '2', 'https://dauhushop.com/tep-tin/13167880613.gif', '/assets/storage/images/cmsnavWQOETU2PCGB3.png', 'true', 1684162905);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mini_game_gift`
--

CREATE TABLE `mini_game_gift` (
  `id` int(255) NOT NULL,
  `id_vongquay` int(255) NOT NULL,
  `item_1` varchar(999) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_2` varchar(999) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_3` varchar(999) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_4` varchar(999) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_5` varchar(999) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_6` varchar(999) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_7` varchar(999) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_8` varchar(999) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mini_game_gift`
--

INSERT INTO `mini_game_gift` (`id`, `id_vongquay`, `item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_7`, `item_8`) VALUES
(1, 1, '{\"text\":\"Ch\\u00fac May May Lan Sau\",\"kimcuong\":\"33\",\"tyle\":\"5\"}', '{\"text\":\"99 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"122\",\"tyle\":\"5\"}', '{\"text\":\"899 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"222\",\"tyle\":\"5\"}', '{\"text\":\"1299 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"22\",\"tyle\":\"5\"}', '{\"text\":\"3999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"22\",\"tyle\":\"5\"}', '{\"text\":\"5999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"33\",\"tyle\":\"5\"}', '{\"text\":\"7999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"44\",\"tyle\":\"5\"}', '{\"text\":\"9999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"33\",\"tyle\":\"5\"}'),
(2, 2, '{\"text\":\"Ch\\u00fac May May Lan Sau\",\"kimcuong\":\"44\",\"tyle\":\"2\"}', '{\"text\":\"99 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"44\",\"tyle\":\"3\"}', '{\"text\":\"899 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"44\",\"tyle\":\"5\"}', '{\"text\":\"1299 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"55\",\"tyle\":\"4\"}', '{\"text\":\"3999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"44\",\"tyle\":\"3\"}', '{\"text\":\"6999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"33\",\"tyle\":\"2\"}', '{\"text\":\"7999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"22\",\"tyle\":\"3\"}', '{\"text\":\"9999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"33\",\"tyle\":\"4\"}'),
(3, 3, '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `id` int(11) NOT NULL,
  `request_id` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tranId` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `partnerId` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `partnerName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `amount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'xuly',
  `deletedate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `name`, `value`) VALUES
(1, 'tenweb', 'TAPHOACODE.COM'),
(2, 'mota', 'TAPHOACODE.COM'),
(3, 'tukhoa', 'TAPHOACODE.COM'),
(4, 'logo', NULL),
(5, 'email', ''),
(6, 'pass_email', ''),
(11, 'noidung_naptien', 'Naptien_'),
(12, 'thongbao', '<p></p><div style=\"text-align: center; \">code share bởi&nbsp;<a href=\"https://taphoacode.com/\" target=\"_blank\">taphoacode.com</a><a href=\"https://taphoacode.com/\" target=\"_blank\"></a></div><div style=\"text-align: center; \">TAPHOACODE HỖ TRỢ FIX ( CÓ PHÍ ) ĐỐI VỚI CODE NÀY&nbsp;</div><p></p>'),
(13, 'anhbia', 'assets/storage/theme/anhbiaJPT.png'),
(14, 'favicon', 'assets/storage/theme/faviconJ76.png'),
(17, 'baotri', 'ON'),
(18, 'chinhsach', '<p>BẰNG VIỆC SỬ DỤNG C&Aacute;C DỊCH VỤ HOẶC MỞ MỘT T&Agrave;I KHOẢN, BẠN CHO BIẾT RẰNG BẠN CHẤP NHẬN, KH&Ocirc;NG R&Uacute;T LẠI, C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y. NẾU BẠN KH&Ocirc;NG ĐỒNG &Yacute; VỚI C&Aacute;C ĐIỀU KHOẢN N&Agrave;Y, VUI L&Ograve;NG KH&Ocirc;NG SỬ DỤNG C&Aacute;C DỊCH VỤ CỦA CH&Uacute;NG T&Ocirc;I HAY TRUY CẬP TRANG WEB. NẾU BẠN DƯỚI 18 TUỔI HOẶC &quot;ĐỘ TUỔI TRƯỞNG TH&Agrave;NH&quot;PH&Ugrave; HỢP Ở NƠI BẠN SỐNG, BẠN PHẢI XIN PH&Eacute;P CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P ĐỂ MỞ MỘT T&Agrave;I KHOẢN V&Agrave; CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P PHẢI ĐỒNG &Yacute; VỚI C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y. NẾU BẠN KH&Ocirc;NG BIẾT BẠN C&Oacute; THUỘC &quot;ĐỘ TUỔI TRƯỞNG TH&Agrave;NH&quot; Ở NƠI BẠN SỐNG HAY KH&Ocirc;NG, HOẶC KH&Ocirc;NG HIỂU PHẦN N&Agrave;Y, VUI L&Ograve;NG KH&Ocirc;NG TẠO T&Agrave;I KHOẢN CHO ĐẾN KHI BẠN Đ&Atilde; NHỜ CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P CỦA BẠN GI&Uacute;P ĐỠ. NẾU BẠN L&Agrave; CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P CỦA MỘT TRẺ VỊ TH&Agrave;NH NI&Ecirc;N MUỐN TẠO MỘT T&Agrave;I KHOẢN, BẠN PHẢI CHẤP NHẬN C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y THAY MẶT CHO TRẺ VỊ TH&Agrave;NH NI&Ecirc;N Đ&Oacute; V&Agrave; BẠN SẼ CHỊU TR&Aacute;CH NHIỆM ĐỐI VỚI TẤT CẢ HOẠT ĐỘNG SỬ DỤNG T&Agrave;I KHOẢN HAY C&Aacute;C DỊCH VỤ, BAO GỒM C&Aacute;C GIAO DỊCH MUA H&Agrave;NG DO TRẺ VỊ TH&Agrave;NH NI&Ecirc;N THỰC HIỆN, CHO D&Ugrave; T&Agrave;I KHOẢN CỦA TRẺ VỊ TH&Agrave;NH NI&Ecirc;N Đ&Oacute; ĐƯỢC MỞ V&Agrave;O L&Uacute;C N&Agrave;Y HAY ĐƯỢC TẠO SAU N&Agrave;Y V&Agrave; CHO D&Ugrave; TRẺ VỊ TH&Agrave;NH NI&Ecirc;N C&Oacute; ĐƯỢC BẠN GI&Aacute;M S&Aacute;T TRONG GIAO DỊCH MUA H&Agrave;NG Đ&Oacute; HAY KH&Ocirc;NG.</p>\r\n'),
(27, 'min_ruttien', '100000'),
(28, 'ck_con', '3'),
(29, 'phi_chuyentien', '500'),
(30, 'status_chuyentien', 'ON'),
(31, 'hotline', ''),
(32, 'facebook', 'https://taphoacode.com/'),
(33, 'theme_color', '#01578B'),
(34, 'modal_thongbao', ''),
(42, 'api_bank', ''),
(43, 'status_napbank', 'ON'),
(44, 'status_demo', 'OFF'),
(45, 'api_cardvip', ''),
(46, 'luuy_naptien', '<ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; border: 0px; list-style-position: inside; color: rgb(51, 51, 51); font-family: roboto, Arial, Tahoma, sans-serif, arial, Helvetica; font-size: 14px;\"><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Hệ thống xử lý 5s 1 thẻ.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Vui lòng gửi đúng mệnh giá, sai mệnh giá thực nhận mệnh giá bé nhất.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Ví dụ mệnh giá thực là 100k, quý khách nạp 100k thực nhận 100k.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Ví dụ mệnh giá thực là 100k quý khách nạp 50k thực nhận 45k.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\"><br></li></ul>'),
(47, 'id_video_youtube', 'uzJVwuoreww'),
(48, 'ck_bank', '10'),
(49, 'luuy_napbank', '<p><span style=\"color: rgb(220, 38, 38); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-weight: 600; word-spacing: 1px; font-size: 0.875rem;\">Lưu ý: Nếu quá 30 phút không nhận được tiền, vui lòng liên hệ page hỗ trợ!</span><br></p><p><i data-v-69ffd940=\"\" style=\"border-width: 0px; border-style: solid; border-color: rgba(229,229,229,var(--tw-border-opacity)); border-image: initial; --tw-border-opacity:1; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin: 0px; color: rgb(220, 38, 38); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-weight: 600; word-spacing: 1px;\">- Các giao dịch chuyển sai \"Nội dung ghi chú\" sẽ không được xử lý tự động. Hãy liên hệ Fanpage để được hỗ trợ.</i><br></p>'),
(50, 'check_time_cron', ''),
(51, 'api_momo', ''),
(52, 'stk_bank', ''),
(53, 'mk_bank', ''),
(54, 'check_time_cron_bank', ''),
(55, 'html_footer', ''),
(56, 'text_left_footer', NULL),
(57, 'text_center_footer', NULL),
(58, 'email_admin', ''),
(59, 'button_buy', '1'),
(60, 'block_f12', 'ON'),
(61, 'license_key', '4a866766abc63ffdf5b30e6d4ce07a'),
(62, 'btnSaveLicense', ''),
(63, 'ck_card', '0'),
(64, 'logo_dark', 'assets/storage/theme/logo_darkAHY.png'),
(65, 'background', 'assets/storage/theme/backgroundV8P.png'),
(66, 'discord', ''),
(67, 'motatopnap', '<p segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" word-spacing:=\"\" 1px;=\"\" border-width:=\"\" 0px;=\"\" border-style:=\"\" solid;=\"\" border-color:=\"\" rgba(229,229,229,var(--tw-border-opacity));=\"\" border-image:=\"\" initial;=\"\" --tw-border-opacity:1;=\"\" --tw-shadow:0=\"\" 0=\"\" transparent;=\"\" --tw-ring-inset:var(--tw-empty,=\"\" );=\"\" --tw-ring-offset-width:0px;=\"\" --tw-ring-offset-color:#fff;=\"\" --tw-ring-color:rgba(59,130,246,0.5);=\"\" --tw-ring-offset-shadow:0=\"\" --tw-ring-shadow:0=\"\" transparent;\"=\"\" style=\"border-width: 0px; border-style: solid; border-color: rgba(229,229,229,var(--tw-border-opacity)); border-image: initial; --tw-border-opacity:1; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \" font-size:=\"\" 16px;=\"\" color:=\"\" rgb(31,=\"\" 45,=\"\" 61);\"=\"\"><br></p>'),
(68, 'Partner_Key', 'aba07a8de302e5a520ec339c78220f98'),
(70, 'zalo', '0866228018'),
(72, 'id_user', NULL),
(73, 'nutvongquay', NULL),
(76, 'giamgia', ''),
(80, 'status_cardvip', 'ON'),
(84, 'status_cardv3', 'ON'),
(85, 'linkthongbao', ''),
(86, 'textthongbao', 'ZALO GIAO LƯU HỖ TRỢ VÀ CẬP NHẬT THÔNG BÁO: TẠI ĐÂY'),
(87, 'theme_web', 'theme1'),
(88, 'theme2', 'OFF'),
(89, 'minigame', 'ON'),
(90, 'accounts', 'ON'),
(91, 'minigame', 'ON'),
(92, 'accounts', 'ON'),
(93, 'caythue', 'ON'),
(94, 'robux', 'ON'),
(95, 'gamepass', 'ON'),
(96, 'text_run', 'CODE SHARE BỞI TAPHOACODE.COM'),
(97, 'Partner_ID', '7606803761');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_caythue`
--

CREATE TABLE `orders_caythue` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `dichvu` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `mk` varchar(255) DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_gamepass`
--

CREATE TABLE `orders_gamepass` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `dichvu` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `mk` varchar(255) DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_robux`
--

CREATE TABLE `orders_robux` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `dichvu` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `mk` varchar(255) DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_withdraw`
--

CREATE TABLE `orders_withdraw` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `dichvu` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `robux` int(11) NOT NULL,
  `tk` varchar(255) NOT NULL,
  `mk` varchar(255) NOT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `ghichu` text NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `money` int(11) NOT NULL DEFAULT 0,
  `level` varchar(255) DEFAULT NULL,
  `banned` int(11) NOT NULL DEFAULT 0,
  `createdate` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `daily` int(11) DEFAULT 0,
  `otp` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `chietkhau` float DEFAULT 0,
  `time` varchar(255) DEFAULT NULL,
  `chitieu` int(11) NOT NULL DEFAULT 0,
  `total_money` int(11) NOT NULL DEFAULT 0,
  `ctv` int(11) DEFAULT 0,
  `ctvacc` int(11) DEFAULT 0,
  `robux` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`, `money`, `level`, `banned`, `createdate`, `email`, `ref`, `daily`, `otp`, `ip`, `chietkhau`, `time`, `chitieu`, `total_money`, `ctv`, `ctvacc`, `robux`) VALUES
(7, 'TAPHOACODE', 'TAPHOACODE', 'qojTtrFuvOMdyexYLQCzHGkJSwZimnEDXAbIalhWNcPBgKVRpfsU', 0, 'admin', 0, '2023-05-18 10:37:42', '', NULL, 0, NULL, '171.245.58.71', 0, '1684406262', 0, 0, 0, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `bank_auto`
--
ALTER TABLE `bank_auto`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category_caythue`
--
ALTER TABLE `category_caythue`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category_gamepass`
--
ALTER TABLE `category_gamepass`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category_robux`
--
ALTER TABLE `category_robux`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `dongtien`
--
ALTER TABLE `dongtien`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups_caythue`
--
ALTER TABLE `groups_caythue`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups_gamepass`
--
ALTER TABLE `groups_gamepass`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups_robux`
--
ALTER TABLE `groups_robux`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `lichsuvongquay`
--
ALTER TABLE `lichsuvongquay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mini_game`
--
ALTER TABLE `mini_game`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mini_game_gift`
--
ALTER TABLE `mini_game_gift`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_caythue`
--
ALTER TABLE `orders_caythue`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_gamepass`
--
ALTER TABLE `orders_gamepass`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_robux`
--
ALTER TABLE `orders_robux`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_withdraw`
--
ALTER TABLE `orders_withdraw`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bank_auto`
--
ALTER TABLE `bank_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `category_caythue`
--
ALTER TABLE `category_caythue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category_gamepass`
--
ALTER TABLE `category_gamepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category_robux`
--
ALTER TABLE `category_robux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `dongtien`
--
ALTER TABLE `dongtien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `groups_caythue`
--
ALTER TABLE `groups_caythue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups_gamepass`
--
ALTER TABLE `groups_gamepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups_robux`
--
ALTER TABLE `groups_robux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lichsuvongquay`
--
ALTER TABLE `lichsuvongquay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `mini_game`
--
ALTER TABLE `mini_game`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `mini_game_gift`
--
ALTER TABLE `mini_game_gift`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `momo`
--
ALTER TABLE `momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT cho bảng `orders_caythue`
--
ALTER TABLE `orders_caythue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders_gamepass`
--
ALTER TABLE `orders_gamepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders_robux`
--
ALTER TABLE `orders_robux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders_withdraw`
--
ALTER TABLE `orders_withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
