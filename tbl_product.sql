-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 31, 2022 lúc 04:17 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `petstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_sale` varchar(255) NOT NULL,
  `product_details` varchar(2000) NOT NULL,
  `product_desc` varchar(7000) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `cartegory_id`, `brand_id`, `product_price`, `product_sale`, `product_details`, `product_desc`, `product_img`) VALUES
(39, 'ALASKA', 5, 4, '27.000.000đ', '20.000.000đ       ', 'Giống Chó: Alaska nâu đỏ\r\n\r\n<br>\r\nMàu sắc: Nâu đỏ\r\n<br>\r\n\r\nĐộ tuổi: 2 tháng tuổi\r\n<br>\r\n\r\nNguồn gốc: Việt Nam\r\n\r\n<br>\r\nTình trạng: ổn định\r\n\r\n<br>\r\nSổ sức khỏe: có\r\n<br>\r\n\r\nTiêm vacxin: Đã tiêm 2 mũi', '<p>Chó Alaska (còn gọi là Alaskan Malamute) là giống chó kéo nổi tiếng nhất thế giới. Mặc dù có một vóc dáng to lớn, oai vệ nhưng chó Alaskan lại rất yêu trẻ con, thân thiện, hòa đồng và gần gũi với con người.</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/alaska2.jpg\"></figure><p><strong>Chiều cao</strong></p><p>Chiều cao trung bình của chúng là từ 63,5 cm đến 68,5cm.&nbsp;</p><p>Riêng dòng Giant có thể cao tới 70cm và cân nặng có thể lên đến 75kg.&nbsp;</p><p>Sở dĩ Alaska được chọn làm chó kéo xe vì chân của chúng rất lớn và cơ bắp, bộ khung xương cao to, đặc biệt xương chân và các khớp xương chân rất phát triển.&nbsp;</p><p>&nbsp;</p><p>&nbsp; &nbsp;&nbsp;<strong>Màu lông của chó Alaska&nbsp;</strong></p><p>Màu lông quyết định khá nhiều đến giá bán của 1 chú chó Alaska.&nbsp;</p><p>Những màu lông phổ biến như màu đen trắng thường có giá thấp hơn những màu khác như xám trắng, nâu đỏ và giá cao nhất là màu hồng phấn (màu hiếm ở chó Alaska).&nbsp;</p><p>&nbsp;</p><p>&nbsp; &nbsp;<strong>Giới tính của chó Alaska&nbsp;</strong></p><p>Chó Alaska cái sẽ có giá cao hơn con đực.&nbsp;</p><p>Vì chó cái có khả năng sinh sản mang lại kinh tế cho chủ nhân.&nbsp;</p><p>Thông thường giá chó cái sẽ cao hơn chó đực từ 500K – 1 triệu đồng.</p>', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
