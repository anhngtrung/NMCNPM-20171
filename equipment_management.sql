-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2017 lúc 08:50 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `equipment_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `country`, `password`) VALUES
('20150120', 'Nguyễn Trung Anh', 'anhngtrung@gmail.com', '0868603396', 'Hà Nội', 'ant06031997'),
('admin1', 'Tùng Bách', 'tungbach@gmail.com', '0868133197', 'Hà Nội', 'admin1'),
('admin2', 'Nguyễn Trịnh Thành', 'thanhnt@gmail.com', '01638964488', 'Đà Nẵng', 'admin2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classroom`
--

CREATE TABLE `classroom` (
  `id_classroom` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classroom`
--

INSERT INTO `classroom` (`id_classroom`) VALUES
('TC-410'),
('TC-411'),
('TC-412');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `equipment`
--

CREATE TABLE `equipment` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_manufacture` date DEFAULT NULL,
  `school` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `guarantee` date DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `image_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_list` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` int(11) NOT NULL,
  `borrow` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `date_of_manufacture`, `school`, `status`, `unit`, `guarantee`, `count`, `image_link`, `image_list`, `view`, `borrow`) VALUES
('MC01', 'Máy chiếu Panasonic', '2015-10-12', 'Viện CNTT & TT', 'BT', 'chiếc', '2020-10-01', 5, 'product3.jpg', '', 6, 13),
('MC03', 'Máy chiếu Sony SZ', '2013-12-10', 'Viện CNTT & TT', ' BT', 'chiếc', '2025-09-02', 8, 'product5.jpg', '', 12, 0),
('MA201', 'Máy ảnh Canon 5D Mark ii', '2017-03-02', 'Viện CNTT & TT', 'Tốt', 'chiếc', '2020-03-03', 3, 'product2.jpg', '', 10, 9),
('Macbook-Air-20151', 'Macbook Air MMGF2ZP/A ', '0000-00-00', 'Viện CNTT & TT', ' ', 'chiếc', '0000-00-00', 5, 'apple-macbook-air-2015-mmgf2zp-a-i5-5250u-8gb-128g-bac-1-450x300-450x300.jpg', '[\"apple-macbook-air-2015-mjvm2zp-a-i5-5250u-4gb-128g-slider05.jpg\",\"-apple-macbook-air-mqd32sa-a-i5-5350u-tk.jpg\"]', 0, 0),
('BR06', 'Bóng rổ Spalding', '2015-06-05', 'Khoa GDTC & GDQP', '  BT', 'quả', '2020-03-03', 30, 'Bong-ro-SPALDING-74-418-2-300x300.png', '[\"hust.jpg\",\"img2.jpg\"]', 0, 0),
('MR01', 'Microphones Salar M6 (Đen)', '2015-02-02', 'Thiết bị chung', 'Tốt', 'chiếc', '0000-00-00', 20, '4ea20642a3fad7067566ed3a40f55aa6.jpg', '[]', 22, 0),
('MR02', 'Micro Thu Âm BM 800', '2015-02-02', 'Thiết bị chung', 'BT', '', '0000-00-00', 50, '1a397a7a7eb68a681c7901bc7d993040.jpg', '[\"167a2c09aa8ae76100b717b6449e60b7.jpg\"]', 18, 0),
('Macbook-Air-20153', 'Macbook 1235', '0000-00-00', 'Viện Vật lý kỹ thuật', '', '', '0000-00-00', 12, '-apple-macbook-air-mqd32sa-a-i5-5350u-tk.jpg', '[]', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `equipment_fixed`
--

CREATE TABLE `equipment_fixed` (
  `id_equipment` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_classroom` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `equipment_fixed`
--

INSERT INTO `equipment_fixed` (`id_equipment`, `id_classroom`) VALUES
('MC01', 'TC-411'),
('MC02', 'TC-412');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `image_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count_view` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `intro`, `content`, `created`, `image_link`, `meta_desc`, `meta_key`, `count_view`) VALUES
(3, 'Macbook Air 2015', 'Macbook ', 'Macbook ', 1513098825, 'apple-macbook-air-2015-mmgf2zp-a-i5-5250u-8gb-128g-bac-1-450x300-450x300.jpg', '', 'Macbook ', 0),
(4, 'Cuộc cách mạng hoạt động Thông tin-Thư viện dưới tác động của Công nghiệp 4.0', 'Cuộc cách mạng hoạt động Thông tin', 'http://www.ictdanang.vn/chi-tiet?articleId=34205', 1513183724, 'avata_CIF_7173.jpg', '', '																	', 0),
(7, 'Hội nghị thường niên Hiệp hội các trường đại học kỹ thuật hàng đầu khu vực Châu Á - Thái Bình Dương (AOTULE) 2017 ', 'Hội nghị thường niên Hiệp hội các trường đại học ', '<div class=\"journal-content-article\"> <p style=\"text-align:justify;\"><strong>Với mục đích nâng cao chất lượng giáo dục đại học và nghiên cứu khoa học trong các trường ĐH kỹ thuật khu vực Châu Á – Thái Bình Dương, Hội nghị AOTULE 2017 được tổ chức trong 3 ', 1513184321, 'slide-11.JPG', '', '', 0),
(5, 'Thông báo về việc truy cập CSDL Ebrary từ ngoài trường', 'Truy cập CSDL Ebrary từ ngoài trường', 'Trường ĐHBKHN đang sử dụng CSDL sách điện tử Ebrary Accademic Complete và truy cập trong các dải IP tĩnh trong trường theo đường link: https://ebookcentral.proquest.com/lib/hustvn-ebooks\r\n\r\nĐể tạo điều kiện thuận lợi nhất cho cán bộ, giảng viên, Thư viện ', 1513183811, 'slide-1.JPG', '', '', 0),
(6, 'Trường ĐHBK Hà Nội giữ vị trí Chủ tịch Mạng lưới Nghiên cứu và Giáo dục Tiểu vùng Sông Mê Kông (GMSARN) ', 'Trường ĐHBK Hà Nội giữ vị trí Chủ tịch', '\r\nTrong khuôn khổ Mạng lưới Nghiên cứu và Giáo dục Tiểu vùng Sông Mê Kông (GMSARN), từ ngày 28-30/11/2017, Trường ĐHBK Hà Nội phối hợp với Ban điều hành Mạng lưới GMSARN tổ chức Hội nghị quốc tế với chủ đề “Energy Connectivity, Env', 1513183953, '20171203_Hoi_thao_GMSARN_1.jpg', '																	', '																	', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_table`
--

CREATE TABLE `order_table` (
  `id_equipment` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `id_classroom` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_muon` date NOT NULL,
  `ngay_tra` date NOT NULL,
  `count` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_table`
--

INSERT INTO `order_table` (`id_equipment`, `id`, `id_classroom`, `ngay_muon`, `ngay_tra`, `count`, `created`, `status`) VALUES
('Macbook-Air-20153', '20152222', 'TC-411', '2017-12-12', '2018-01-01', 2, 1513880124, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(11) NOT NULL,
  `subtitle_1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitle_2` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitle_3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `image_name`, `image_link`, `link`, `info`, `sort_order`, `subtitle_1`, `subtitle_2`, `subtitle_3`) VALUES
(3, 'slide 1', '', 'slide-1.jpg', '', 'HUST', 1, 'let\'s practices', 'with', 'my equipment'),
(4, 'slide', '', '3.jpg', '', 'FOOD', 3, 'hợp tác', 'zent', 'company'),
(5, 'HUST2', '', '2.jpg', '', 'HUST', 5, 'better together', 'with', 'my equipment');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `country` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `birthday`, `country`, `password`, `school`, `email`, `phone`) VALUES
('20150120', 'Nguyễn Trung Anh', '1997-03-06', 'Hà Nội', '20150120', 'Viện CNTT & TT', 'anh.nt150120@sis.hust.edu.vn', 868603396),
('20152222', 'Tùng Bách', '1997-10-10', 'Hà Nội', '20152222', 'Viện CNTT & TT', 'tungbachg@gmail.com', 868683396),
('20152626', 'Dạ Hoa', '1996-09-03', 'Hà Nội', '20152626', 'Viện CNTT & TT', 'dahoa@gmail.com', 868686868),
('20153745', 'Tử Đằng', '1996-11-20', 'Hà Nội', '20153745', 'Viện CNTT & TT', 'tudang@gmail.com', 1635328316),
('20152568', 'Kỳ Chân', '1997-03-06', 'Hà Nội', 'kychan', 'Viện CNTT & TT', 'kychan@gmail.com', 868765567),
('20156789', 'Phạm Khánh Duy', '1997-12-22', 'Hà Nội', '20156789', 'Viện Toán ứng dụng và Tin học', 'duypk@gmail.com', 968485584);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id_classroom`);

--
-- Chỉ mục cho bảng `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `equipment_fixed`
--
ALTER TABLE `equipment_fixed`
  ADD PRIMARY KEY (`id_equipment`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_table`
--
ALTER TABLE `order_table`
  ADD KEY `id_equipment` (`id_equipment`,`id`,`id_classroom`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
