-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 11:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_level` int(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_mail`, `admin_pass`, `admin_phone`, `admin_level`, `created_at`) VALUES
(1, 'tung', 'tung@gmail.com', '4297f44b13955235245b2497399d7a93', '012312323', 1, '2019-12-29 10:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_slug`, `brand_image`) VALUES
(1, 'iphone', 'iphone', '9226986725e0cbdca6fea83.41380129.jpg'),
(2, 'samsung', 'samsung', '3002995845e0cbde27ef758.44379220.jpg'),
(3, 'xiaomi', 'xiaomi', '19807505855e0cbdf8b43d22.24356446.png'),
(4, 'oppo', 'oppo', '11411953675e0cbe012fd1f9.60851310.jpg'),
(5, 'vivo', 'vivo', '17076266475e0cbe09325a15.19031631.jpg'),
(6, 'nokia', 'nokia', '19934893695e0cbe3fbfcf37.30405478.jpg'),
(7, 'huawei', 'huawei', '5227771665e0cbe7fe90ae7.24955672.jpg'),
(8, 'realme', 'realme', '15073707345e0cbeaa30b7c3.39172320.png'),
(9, 'Vsmart', 'vsmart', '19323327965e0cbebf2ad530.65788571.png'),
(10, 'ipad', 'ipad', '2873737795e0cbed24698c2.43667612.jpg'),
(11, 'lenovo', 'lenovo', '21348983195e0cbef5ce9db8.12920693.jpg'),
(12, 'acer', 'acer', '15278389145e0cbf1781eb98.02848246.jpg'),
(13, 'asus', 'asus', '14480168305e0cbf1e974060.97577865.jpg'),
(14, 'dell', 'dell', '17439867265e0cbf25072333.56658835.jpg'),
(15, 'hp', 'hp', '18410185475e0cbf2d425d37.90345427.jpg'),
(16, 'macbook', 'macbook', '4069756895e0cbf3f8e3eb6.81343595.png'),
(17, 'msi', 'msi', '8828310255e0cbf49bdaf86.12019775.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_featured` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_slug`, `cat_icon`, `cat_featured`, `created_at`) VALUES
(1, 'Điện thoại', 'dien-thoai', 'fas fa-mobile-alt', 1, '2019-12-23 15:00:04'),
(2, 'Laptop', 'laptop', 'fas fa-laptop-code', 1, '2019-12-23 15:00:44'),
(3, 'Tablet', 'tablet', 'fas fa-tablet-alt', 1, '2019-12-23 15:01:33'),
(5, 'Phụ kiện', 'phu-kien', 'fas fa-headphones-alt', 1, '2019-12-23 16:29:49'),
(8, 'Đồng hồ', 'dong-ho', 'far fa-clock', 1, '2020-01-05 09:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cus_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cus_phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cus_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cus_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_email`, `cus_phone`, `cus_address`, `cus_pass`) VALUES
(1, 'Nguyễn Duy Tùng', 'icrhm9x@gmail.com', '0123456789', 'Hà Nội', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'Hoàng Duy Thái', 'icrhm9x2@gmail.com', '0123456789', 'Hà Nội', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'vương', 'vuong@gmail.com', '0123456334', 'Hà Nội', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'vương', 'vuong123asdsd@gmail.com', '0123456334', 'Hà Nội', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'Nguyễn Duy Tùng', 'tung@gmail.com', '0123456789', 'Hà Nội', 'fa376e383626491fb6f3b6b5c06b1c208bba702b');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `or_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `or_quantity` int(11) NOT NULL,
  `or_price` int(11) NOT NULL,
  `or_sale` int(11) NOT NULL DEFAULT 0,
  `or_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`or_id`, `tr_id`, `prd_id`, `or_quantity`, `or_price`, `or_sale`, `or_created_at`) VALUES
(1, 8, 20, 1, 28990000, 1200000, '2020-01-08 09:58:02'),
(2, 8, 13, 1, 6990000, 1000000, '2020-01-08 09:58:02'),
(6, 11, 20, 2, 28990000, 1200000, '2020-01-08 11:35:56'),
(7, 11, 29, 1, 28690000, 1000000, '2020-01-08 11:35:56'),
(10, 13, 13, 3, 6990000, 1000000, '2020-01-09 02:15:06'),
(11, 13, 21, 2, 29990000, 0, '2020-01-09 02:15:06'),
(12, 14, 13, 2, 6990000, 1000000, '2020-01-09 02:49:13'),
(13, 14, 20, 1, 28990000, 1200000, '2020-01-09 02:49:13'),
(16, 16, 25, 1, 19990000, 0, '2020-02-26 15:25:40'),
(17, 16, 18, 1, 3690000, 300000, '2020-02-26 15:25:40'),
(18, 17, 21, 3, 29990000, 0, '2020-06-02 02:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) UNSIGNED NOT NULL,
  `cat_id` int(11) UNSIGNED NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL,
  `prd_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_price` int(11) UNSIGNED NOT NULL,
  `prd_sale` int(11) UNSIGNED NOT NULL,
  `prd_warranty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_accessories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_new` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_promotion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prd_status` int(1) NOT NULL DEFAULT 1,
  `prd_featured` int(1) NOT NULL DEFAULT 0,
  `prd_details` text COLLATE utf8_unicode_ci NOT NULL,
  `prd_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `cat_id`, `brand_id`, `prd_name`, `prd_slug`, `prd_image`, `prd_price`, `prd_sale`, `prd_warranty`, `prd_accessories`, `prd_new`, `prd_promotion`, `prd_status`, `prd_featured`, `prd_details`, `prd_date`) VALUES
(1, 1, 1, 'iphone 10', 'iphone-10', '10832278705e07838c74b9c6.64338130.jpg', 12000000, 0, '12 tháng', 'tai nghe, sạc, ...', 'mới', '<p>Trả góp 0%:</p>\r\n\r\n<p>Trả góp lãi suất 0% với Home Credit. Trả trước 30%, kỳ hạn 6 tháng (Áp dụng cùng các khuyến mại khác)</p>\r\n\r\n<p>Chương trình khuyến mại:</p>\r\n\r\n<p>Thu cũ lên đời Samsung - Trợ giá tới 4 triệu (Áp dụng trên giá niêm yết)</p>\r\n\r\n<p>', 1, 1, '<p>sản phẩm này chưa có mô tả</p>\r\n', '2019-12-26 02:41:58'),
(2, 1, 8, 'realme 3', 'realme-3', '19116300565e07839f3bd441.66064078.jpg', 15000000, 300000, '12 tháng', 'tai nghe, sạc, ...', 'mới', '<p>Trả góp lãi suất 0%</p>\r\n', 1, 1, '<p>chưa có mô tả</p>\r\n', '2019-12-28 04:33:42'),
(3, 2, 16, 'macbook 2019', 'macbook-2019', '16009157385e0783aa480300.43602409.jpg', 45000000, 0, '24 tháng', 'tai nghe, sạc, ...', 'mới', '<p>không</p>\r\n', 1, 1, '<p>chưa có</p>\r\n', '2019-12-28 04:39:24'),
(4, 1, 4, 'OPPO F11 Pro 128GB', 'oppo-f11-pro-128gb', '1746656085e0783b21f6209.74246326.jpg', 6490000, 0, '12 tháng', 'tai nghe, sạc, ...', 'mới', '<p>abc, xyz</p>\r\n', 1, 1, '<p>kiểu dáng đẹp, chụp ảnh nét, ...</p>\r\n', '2019-12-28 13:48:14'),
(5, 3, 10, 'iPad Wifi 128GB (2019)', 'ipad-wifi-128gb-2019', '10810314025e1207561a14e0.16184697.png', 11990000, 1000000, '24 tháng', 'Trong hộp có: Adapter,Cáp Lightning,Sách hướng dẫn', 'mới', '<p>Phiếu mua hàng 1,5 triệu (được quy đổi thành tiền mặt), áp dụng 27/12 - 1/1 </p>\r\n\r\n<p>Mua kèm Apple Watch S3 giảm 500,000đ, S5 giảm 1 triệu, AirPods giảm 10% (Không áp dụng với khuyến mãi khác)</p>\r\n', 1, 1, '<p>Muốn mua một chiếc máy tính bảng với hiệu năng ổn định, có thể dùng trong khoảng 2-3 năm tới với mức giá phải chăng thì không đi đâu xa, chiếc iPad 10.2 inch Wifi 128GB (2019) chính là sự lựa chọn dành cho bạn.</p>\r\n', '2019-12-28 13:50:50'),
(13, 1, 2, 'Samsung Galaxy A50s', 'samsung-galaxy-a50s', '7945771775e09b8f6bd92e8.40593521.jpg', 6990000, 1000000, 'Bảo hành chính hãng 12 tháng.', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'mới', '<p>Giảm ngay 1,2 triệu (áp dụng cho đơn hàng đặt và nhận hàng trong ngày 30 - 31/12) (đã trừ vào giá)</p>\r\n\r\n<p>Ưu đãi quà tặng độc quyền Galaxy trị giá đến 450.000đ</p>\r\n', 1, 1, '<h2>Nằm trong sứ mệnh nâng cao khả năng cạnh tranh với các smartphone đến từ nhiều nhà sản xuất Trung Quốc, mới đây Samsung tiếp tục giới thiệu phiên bản Samsung Galaxy A50s với nhiều tính năng mà trước đây chỉ xuất hiện trên dòng cao cấp.</h2>\r\n', '2019-12-30 08:44:38'),
(14, 2, 17, 'MSI Gaming 15 GF63 9SC', 'msi-gaming-15-gf63-9sc', '13898339275e0cc6816a2b10.79080936.jpg', 25990000, 0, 'Bảo hành chính hãng 24 tháng.', 'Sách hướng dẫn, Thùng máy, Adapter sạc', 'mới', '<p>Balo Laptop MSI</p>\r\n\r\n<p>Mua kèm Office 365 Personal ưu đãi giảm 600.000đ</p>\r\n', 1, 1, '<h2>Laptop Gaming MSI đã đem lại cho người dùng phân khúc Laptop Gaming MSI GF63 9SC giá rẻ - chỉ hơn 20 triệu đồng. Bạn sẽ có một thiết kế gaming hầm hố nhưng lại thanh lịch, tối giản và tính di động cao hơn cùng với cấu hình mới nhất đem lại hiệu năng mạnh mẽ không thua kém quá nhiều so với các laptop tầm trung hay cận cao cấp. Đây là một lựa chọn rất đáng cân nhắc và hấp dẫn cho người dùng.</h2>\r\n', '2020-01-01 16:19:13'),
(15, 1, 2, 'Samsung Galaxy Fold', 'samsung-galaxy-fold', '6629163015e11e10b6f8cd3.29889912.png', 50000000, 0, '12 tháng', 'Sách hướng dẫn, Thùng máy, Adapter sạc', 'mới', '<p>chưa có</p>\r\n', 2, 1, '<p>Sau rất nhiều chờ đợi thì Samsung Galaxy Fold - chiếc smartphone màn hình gập đầu tiên của Samsung cũng đã chính thức trình làng với thiết kế mới lạ.</p>\r\n', '2020-01-05 13:13:47'),
(16, 1, 1, 'iPhone 11 64GB', 'iphone-11-64gb', '6568174205e11f9435b7b36.75092567.png', 21990000, 600000, 'Bảo hành chính hãng 12 tháng.', 'Sạc,Tai nghe,Cây lấy sim,Cáp,Sách hướng dẫn,Hộp', 'mới', '<p>Cơ hội trúng 2020 Chuột vàng.</p>\r\n\r\n<p><strong>Mua online tặng thêm quà</strong></p>\r\n\r\n<p>Lì xì 800.000đ (áp dụng cho đơn hàng đặt và nhận hàng trong ngày 3 - 5/1) </p>\r\n', 1, 1, '<h2>Sau bao nhiêu chờ đợi cũng như đồn đoán thì cuối cùng Apple đã chính thức giới thiệu bộ 3 siêu phẩm iPhone 11 mạnh mẽ nhất của mình vào tháng 9/2019.</h2>\r\n', '2020-01-05 13:22:27'),
(18, 1, 2, 'Samsung Galaxy A10s', 'samsung-galaxy-a10s', '10052010635e11e87fbbedb1.81072767.png', 3690000, 300000, 'Bảo hành chính hãng 12 tháng.', 'Sạc,Sách hướng dẫn,Hộp,Cây lấy sim,Cáp', 'mới', '<p>Cơ hội trúng 2020 Chuột vàng.</p>\r\n', 1, 1, '<h2>Samsung Galaxy A10s là bản nâng cấp của chiếc Galaxy A10s đã ra mắt trước đó với camera kép, dung lượng pin lớn hơn và đã được trang bị thêm cảm biến vân tay.</h2>\r\n', '2020-01-05 13:45:35'),
(20, 1, 2, 'Galaxy S10+ (512GB)', 'galaxy-s10-512gb', '4555829925e12082debfec3.17927404.png', 28990000, 1200000, 'Bảo hành chính hãng 12 tháng.', 'Pin, Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng, Adapter chuyển USB', 'mới', '<p>Giảm ngay 10 triệu (áp dụng cho đơn hàng đặt và nhận hàng trong ngày 3 - 5/1)</p>\r\n\r\n<p>Cơ hội trúng 2020 Chuột vàng</p>\r\n', 1, 1, '<h2>Samsung Galaxy S10+ (512GB) - phiên bản kỷ niệm 10 năm chiếc Galaxy S đầu tiên ra mắt, là một chiếc smartphone hội tủ đủ các yếu tố mà bạn cần ở một chiếc máy cao cấp trong năm 201</h2>\r\n', '2020-01-05 13:58:11'),
(21, 1, 1, 'iPhone Xs 256GB', 'iphone-xs-256gb', '3153742445e11ebd7121722.16335571.png', 29990000, 0, 'Bảo hành chính hãng 12 tháng.', 'Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim', 'mới', '<p>Phiếu mua hàng 2 triệu (được quy đổi thành tiền mặt)</p>\r\n\r\n<p>Cơ hội trúng 2020 Chuột vàng</p>\r\n', 1, 1, '<h2>Chiếc dt mới đã chính thức được ra mắt vào đêm 12/9 theo giờ Việt Nam, trong đó có phiên bản iPhone Xs 256GB với bộ nhớ khủng, cấu hình mạnh mẽ với chip Apple A12 và những tính năng đẳng cấp khác.</h2>\r\n', '2020-01-05 13:59:51'),
(22, 1, 7, 'Huawei P30 Lite Trắng', 'huawei-p30-lite-trang', '8140512805e11ec5e948d26.36328850.png', 6990000, 1000000, 'Bảo hành chính hãng 12 tháng.', 'Sạc,Tai nghe,Sách hướng dẫn,Hộp,Cây lấy sim,Ốp lưng,Cáp', 'mới', '<p>không có</p>\r\n', 1, 1, '<h2>Huawei P30 Lite Trắng được xem là phiên bản rút gọn của siêu phẩm chụp ảnh \"soi trăng\" Huawei P30 pro với khả năng chụp hình đẹp, cấu hình ngon và hỗ trợ sạc nhanh.</h2>\r\n', '2020-01-05 14:02:06'),
(23, 3, 2, 'Samsung Galaxy Tab A8', 'samsung-galaxy-tab-a8', '20956027715e120844001462.57452982.png', 3690000, 0, 'Bảo hành chính hãng 12 tháng.', 'Adapter, Sách hướng dẫn, Cáp Micro USB, Cây lấy sim, Hộp máy', 'mới', '<p>Mua kèm Office 365 Personal ưu đãi giảm 600.000đ</p>\r\n\r\n<p>Cơ hội trúng 2020 Chuột vàng.</p>\r\n', 1, 1, '<h2>Samsung Galaxy Tab A8 8\" T295 (2019) là một chiếc máy tính bảng gọn nhẹ, với màn hình vừa đủ có thể giúp bạn giải trí hay hỗ trợ trẻ nhỏ trong việc học tập.</h2>\r\n', '2020-01-05 14:04:02'),
(24, 3, 10, 'iPad Pro 64GB (2018)', 'ipad-pro-64gb-2018', '9693642905e120861d3c250.68740938.png', 21990000, 0, 'Bảo hành chính hãng 12 tháng.', 'Adapter, Sách hướng dẫn, Cáp Type-C', 'mới', '<p>Mua kèm Office 365 Personal ưu đãi giảm 600.000đ</p>\r\n\r\n<p>Cơ hội trúng 2020 Chuột vàng.</p>\r\n\r\n<p><strong>Mua online tặng thêm quà</strong></p>\r\n\r\n<p>Lì xì 2.5 triệu (áp dụng cho đơn hàng đặt và nhận hàng trong ngày 3 - 5/1) *</p>\r\n', 1, 1, '<h2>Máy tính bảng iPad Pro 11 inch Wifi 64GB (2018) được ra mắt vào cuối năm 2018, thu hút nhân viên văn phòng, doanh nhân bởi thiết kế hiện đại, đầy sức đột phá và một cấu hình mạnh mẽ đáp ứng tốt tất cả các nhu cầu từ giải trí đến làm việc.</h2>\r\n', '2020-01-05 14:05:56'),
(25, 2, 16, 'MacBook Air 2017', 'macbook-air-2017', '1488536045e120878608440.51879487.jpg', 19990000, 0, 'Bảo hành chính hãng 12 tháng.', 'Dây nguồn,Adapter sạc,Thùng máy,Sách hướng dẫn', 'mới', '<p>Túi chống sốc Laptop 13\" WIWU</p>\r\n\r\n<p>Mua kèm Office 365 Personal ưu đãi giảm 600.000đ</p>\r\n', 1, 1, '<h2>MacBook Air 2017 là mẫu laptop văn phòng, có thiết kế siêu mỏng và nhẹ, vỏ nhôm nguyên khối sang trọng. Máy có hiệu năng ổn định, thời lượng pin cực lâu 12 giờ, phù hợp cho hầu hết các nhu cầu làm việc và giải trí. </h2>\r\n', '2020-01-05 14:08:11'),
(26, 2, 17, 'MSI Gaming 15 GF63 9SC', 'msi-gaming-15-gf63-9sc', '3339251765e11ee37ad01f6.67035323.jpg', 25990000, 0, 'Bảo hành chính hãng 24 tháng.', 'Sách hướng dẫn, Thùng máy, Adapter sạc', 'mới', '<p>Balo Laptop MSI</p>\r\n\r\n<p>Mua kèm Office 365 Personal ưu đãi giảm 600.000đ</p>\r\n', 1, 1, '<h2>Laptop Gaming MSI đã đem lại cho người dùng phân khúc MSI Gaming 15 GF63 9SC giá rẻ - chỉ hơn 20 triệu đồng. Bạn sẽ có một thiết kế gaming hầm hố nhưng lại thanh lịch, tối giản và tính di động cao hơn cùng với cấu hình mới nhất đem lại hiệu năng mạnh mẽ không thua kém quá nhiều so với các laptop tầm trung hay cận cao cấp. Đây là một lựa chọn rất đáng cân nhắc và hấp dẫn cho người dùng.</h2>\r\n', '2020-01-05 14:09:59'),
(27, 3, 7, 'MediaPad T3 10', 'mediapad-t3-10', '4814558235e1208959ccba8.71228271.png', 4490000, 0, 'Bảo hành chính hãng 12 tháng.', 'Sách hướng dẫn, Thùng máy, Adapter sạc', 'mới', '<p>Mua kèm Office 365 Personal ưu đãi giảm 600.000đ</p>\r\n\r\n<p>Bao da trong hộp máy</p>\r\n', 1, 1, '<h3><strong>Thiết kế mỏng, đẹp</strong></h3>\r\n\r\n<p>Về tổng thể, máy nổi bật với phần khung viền kim loại sang trọng, kết hợp màu sắc hiện đại cho cảm giác khá thanh lịch, nhẹ nhàng.</p>\r\n', '2020-01-05 14:11:57'),
(28, 3, 2, 'Samsung Galaxy Tab', 'samsung-galaxy-tab', '6578753005e1208ad189d12.52606355.png', 6990000, 0, 'Bảo hành chính hãng 12 tháng.', 'Adapter, Sách hướng dẫn, Bút cảm ứng, Cây lấy sim, Hộp máy, Cáp Type-C', 'mới', '<p>Mua kèm Office 365 Personal ưu đãi giảm 600.000đ</p>\r\n\r\n<p>Cơ hội trúng 2020 Chuột vàng. </p>\r\n', 1, 1, '<h3>Thiết kế được làm tinh tế hơn</h3>\r\n\r\n<p>Nguyên khối và siêu mỏng là hai đặc điểm nổi bật tạo nên nét tinh tế cho Galaxy Tab A.</p>\r\n', '2020-01-05 14:12:54'),
(29, 2, 15, 'HP Palivion 15 cx0178TX', 'hp-palivion-15-cx0178tx', '10673095085e11f97148edf0.09650957.jpg', 28690000, 1000000, 'Bảo hành chính hãng 24 tháng.', 'Sách hướng dẫn, Thùng máy, Adapter sạc', 'mới', '<p>Balo Laptop HP-Compaq</p>\r\n\r\n<p>Mua kèm Office 365 Personal ưu đãi giảm 600.000đ</p>\r\n\r\n<p>Giảm ngay 10% (áp dụng cho đơn hàng đặt và nhận hàng trong ngày 1 - 21/1) *</p>\r\n', 1, 1, '<h2><a href=\"https://www.thegioididong.com/laptop/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb\" target=\"_blank\">Laptop HP Pavilion Power 15-cx0178TX 5EF41PA</a> là một cỗ máy chiến game thực thụ với cấu hình mạnh mẽ, thách thức các tựa game hot hiện nay. Máy có thiết kế hiện đại, kiểu dáng mạnh mẽ và đẳng cấp, sự kết hợp giữa hai tông màu xanh và đen lạ mắt và ấn tượng.</h2>\r\n\r\n<h3>Thiết kế cứng cáp, hiện đại</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/laptop\" target=\"_blank\">Laptop</a> HP Pavilion Power 15-cx0178TX 5EF41PA có kiểu dáng hiện đại, vỏ nhựa màu đen với logo HP nổi bật trên nắp máy, bốn góc cạnh được bo tròn vừa phải, mang đến vẻ đẹp mạnh mẽ và cứng cáp cho chiếc máy.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-1.jpg\" ><img alt=\"Laptop HP Pavilion Power 15-cx0178TX 5EF41PA thiết kế cứng cáp, hiện đại \" src=\"https://cdn.tgdd.vn/Products/Images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-1.jpg\" /></a></p>\r\n\r\n<h3>Hiệu năng mạnh mẽ</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/laptop-hp-compaq\" target=\"_blank\">Laptop HP</a> Pavilion Power 15 được trang bị vi xử lý<strong> Chip Intel <a href=\"https://www.thegioididong.com/laptop?g=core-i7\" target=\"_blank\">Core i7</a> </strong>thế hệ thứ 8 đi kèm là<strong> RAM 8 GB</strong>, ổ cứng kép <strong>1 TB HDD</strong> + <strong><a href=\"https://www.thegioididong.com/laptop?f=o-cung-ssd\" target=\"_blank\">ổ cứng SSD</a></strong> đem đến một hiệu năng mạnh mẽ, khả năng đa nhiệm mượt mà, tốc độ xử lí nhanh và một không gian lưu trữ rộng lớn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-3.jpg\" ><img alt=\"HP Palivion 15 cx0178TX thiết kế \" src=\"https://cdn.tgdd.vn/Products/Images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-3.jpg\" /></a></p>\r\n\r\n<h3>Cỗ máy chiến game thực thụ</h3>\r\n\r\n<p><strong><a href=\"https://www.thegioididong.com/tin-tuc/cung-tim-hieu-ve-card-do-hoa-roi-do-hoa-tich-hop-cho-laptop-1103220\" target=\"_blank\">Card đồ họa rời</a></strong> <strong>Nvidia GTX 1050 4 GB</strong> mạnh mẽ có thể đáp ứng tốt các nhu cầu thiết kế đồ họa  và chơi các game khủng hiện nay như liên minh, CS GO cấu hình cao nhất.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-cauhinh1.jpg\" ><img alt=\"Laptop HP Pavilion Power 15-cx0178TX 5EF41PA có card đồ họa rời Nvidia GTX 1050 4GB mạnh mẽ\" src=\"https://cdn.tgdd.vn/Products/Images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-cauhinh1.jpg\" /></a></p>\r\n\r\n<h3>Bàn phím hỗ trợ đèn nền và Touchpad rộng rãi</h3>\r\n\r\n<p>Bàn phím được trang bị trên <a href=\"https://www.thegioididong.com/laptop?g=laptop-gaming\" target=\"_blank\">laptop gaming</a> HP Pavilion Power 15-cx0178TX 5EF41PA là dạng bàn phím chiclet với thiết kế nguyên khối, hỗ trợ thêm đèn nền màu xanh lá bàn phím sẽ giúp bạn cảm giác gõ phím tốt hơn trong khi làm việc và giải trí.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-banphim.jpg\" ><img alt=\"Laptop HP Pavilion Power 15-cx0178TX 5EF41PA có bàn phím hỗ trợ đèn nền và Touchpad rộng rãi\" src=\"https://cdn.tgdd.vn/Products/Images/44/202329/hp-pavilion-15-cx0178tx-i7-8750h-8gb-128gb-1tb-4gb-banphim.jpg\" /></a></p>\r\n', '2020-01-05 14:18:56'),
(30, 1, 3, 'Xiaomi Mi Note 10 Pro', 'xiaomi-mi-note-10-pro', '12376039345e15f9396e4ed9.08692764.png', 15000000, 1500000, 'Bảo hành chính hãng 12 tháng.', 'Sạc, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng', 'mới', '<p>Giảm ngay 1,5 triệu (đã trừ vào giá)</p>\r\n\r\n<p>Cơ hội trúng 2020 Chuột vàng</p>\r\n', 1, 1, '<h2>Siêu phẩm tầm trung <a href=\"#\" target=\"_blank\">Xiaomi Mi Note 10 Pro</a>, chiếc <a href=\"#\" target=\"_blank\">smartphone</a> đầu tiên sở hữu ống kính độ phân giải 108 MP cùng hệ thống 5 camera độc đáo, công nghệ <a href=\"#\" target=\"_blank\">sạc siêu nhanh</a> 30W đi kèm nhiều tính năng nổi trội khác.</h2>\r\n\r\n<h3>Thiết kế cao cấp</h3>\r\n\r\n<p><a href=\"#\" target=\"_blank\">Xiaomi</a> giữ nguyên phong cách thiết kế tương tự thế hệ trước, nhưng bù lại các đường nét hoàn thiện tỉ mỉ và có phần cao cấp hơn. Đáng tiếc là máy cũng chưa trang bị khả năng tính năng <a href=\"#\" target=\"_blank\">chống nước, bụi</a>.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213590/xiaomi-mi-note-10-pro-7.jpg\"><img alt=\"Xiaomi Mi Note 10 Pro | Thiết kế cao cấp\" src=\"https://cdn.tgdd.vn/Products/Images/42/213590/xiaomi-mi-note-10-pro-7.jpg\" /></a></p>\r\n\r\n<p>Máy khá dày nhưng mặt lưng và mặt trước điều được vuốt cong 3D ở 2 cạnh bên nên phần kim loại khung máy còn lại khá ít, cho cảm giác máy mỏng hơn thực tế, cầm nắm thoải mái hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213590/xiaomi-mi-note-10-pro-14-1.jpg\"><img alt=\"Xiaomi Mi Note 10 Pro | Phần cạnh viền được thiết kế mỏng\" src=\"https://cdn.tgdd.vn/Products/Images/42/213590/xiaomi-mi-note-10-pro-14-1.jpg\" /></a></p>\r\n\r\n<p>Thiết kế độc đáo với dãy camera cực dài ở được xếp liên tiếp về bên trái của máy và dưới cùng là logo Xiaomi. </p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213590/xiaomi-mi-note-10-pro-4.jpg\"><img alt=\"Xiaomi Mi Note 10 Pro | Hệ thống 5 camera\" src=\"https://cdn.tgdd.vn/Products/Images/42/213590/xiaomi-mi-note-10-pro-4.jpg\" /></a></p>\r\n\r\n<h3>Màn hình cong tràn cạnh 3D</h3>\r\n\r\n<p>Không mang lại lợi ích thực tế quá nhiều, tuy nhiên màn hình mặt trước cong 2 cạnh với hình ảnh như tràn ra ngoài viền, cũng mang lại cảm giác sử dụng \"đã mắt\", độc đáo và chứng tỏ sự cao cấp của sản phẩm.</p>\r\n\r\n<p>Tấm nền AMOLED được làm cong 2 cạnh viền như các sản phẩm cao cấp của <a href=\"#\" target=\"_blank\">Samsung</a> với độ cong 3D đẹp mắt và ấn tượng kết hợp cùng viền màn hình cực mỏng chạy dọc từ trên đỉnh máy xuống dưới, cho trải nghiệm giải trí xem phim, chơi game cực đã.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/213590/xiaomi-mi-note-10-pro-13-1.jpg\"><img alt=\"Xiaomi Mi Note 10 Pro | Màn mình công nghệ Arc AMOLED\" src=\"https://cdn.tgdd.vn/Products/Images/42/213590/xiaomi-mi-note-10-pro-13-1.jpg\" /></a></p>\r\n\r\n<p>Xiaomi gọi nó là màn hình Arc AMOLED với độ lớn 6.47 inch, độ phân giải Full HD+ và chứng nhận TUV giúp giảm ánh sáng xanh tác động xấu đến mắt. Phần đỉnh máy chứa camera selfie chứ chưa tràn viền hoàn toàn.</p>\r\n', '2020-01-08 15:46:01'),
(32, 5, 1, 'AirPods Pro', 'airpods-pro', '13379077545ed5c46a484e27.12004942.jpg', 7490000, 0, 'Bảo hành chính hãng 12 tháng.', 'Sách hướng dẫn', 'mới', '<ul>\r\n	<li>Thiết kế in-ear hoàn toàn mới và độc đáo.</li>\r\n	<li>Tích hợp công nghệ <strong>chống ồn chủ động</strong> (Active Noise Cancellation).</li>\r\n</ul>\r\n', 1, 1, '<h3>Thiết kế nhỏ gọn, dễ dàng đem theo bất cứ đâu</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-airpods-pro-apple-mwp22\" target=\"_blank\">AirPods Pro</a> với thiết kế gọn gàng, đẹp và tinh tế,  <a href=\"https://www.thegioididong.com/tai-nghe\" target=\"_blank\">tai nghe</a> được thiết kế theo dạng In-ear thay vì Earbuds như <a href=\"https://www.thegioididong.com/tai-nghe/tai-nghe-bluetooth-airpods-2-wireless-charge-mrxj2\" target=\"_blank\">AirPods 2</a>, cho phép <strong>chống ồn tốt hơn, khó rớt khi đeo và êm tai hơn</strong>.</p>\r\n\r\n<p>Xem thêm: <a href=\"https://www.thegioididong.com/hoi-dap/tai-nghe-earbuds-tai-nghe-in-ear-la-gi-khac-nhau-1219749\" target=\"_blank\">Tai nghe Earbuds, tai nghe Inear là gì? Khác nhau như thế nào?</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/54/213711/tai-nghe-bluetooth-airpods-pro-apple-mwp22.jpg\" ><img alt=\"Thiết kế nhỏ gọn, tinh tế - Tai nghe Bluetooth Airpods Pro Apple\" src=\"https://cdn.tgdd.vn/Products/Images/54/213711/tai-nghe-bluetooth-airpods-pro-apple-mwp22.jpg\" /></a></p>\r\n\r\n<h3>Kết nối nhanh và ổn định với công nghệ Bletooth 5.0</h3>\r\n\r\n<p>Tai nghe Bluetooth AirPods Pro vẫn cho tốc độ kết nối ấn tượng, chỉ <strong>khoảng 1 - 2 giây</strong> sau khi mở nắp (với các thiết bị của Apple như iPhone, iPad, MacBook,...) và <strong>khoảng 3 - 4 giây</strong> đối với Android (sau lần kết nối đầu tiên).</p>\r\n\r\n<p><img alt=\"Kết nối nhanh chóng - Tai nghe Bluetooth Airpods Pro Apple\" src=\"https://cdn.tgdd.vn/Products/Images/54/213711/tai-nghe-bluetooth-airpods-pro-apple-mwp22-trang2.jpg\" /></p>\r\n\r\n<h3>Linh hoạt lựa chọn với 3 kích cỡ đệm tai kèm theo</h3>\r\n\r\n<p>Do chuyển sang dạng In-ear, nên AirPods Pro được <strong>kèm theo đệm tai cao su với 3 kích cỡ khác nhau</strong>, giúp người dùng có nhiều lựa chọn phù hợp với cỡ tai của mình, đem lại trải nghiệm thoải mái nhất.</p>\r\n', '2020-06-02 03:15:54'),
(33, 5, 10, 'Chuột Bluetooth Apple MLA02', 'chuot-bluetooth-apple-mla02', '8213895955ed5c4d535b9b6.26082397.jpg', 2490000, 0, 'Bảo hành chính hãng 12 tháng.', 'tai nghe, sạc, ...', 'mới', '<p>Toàn bộ thân chuột sử dụng cảm ứng hoàn toàn.</p>\r\n', 1, 1, '<h3>Các thao tác cảm ứng của <a href=\"https://www.thegioididong.com/chuot-may-tinh-apple\" target=\"_blank\">chuột Apple</a> MLA02</h3>\r\n\r\n<p>1. Cuộn trang web hoặc đoạn văn bản lên xuống.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/86/88045/chuot-bluetooth-apple-mla02-trang-33.gif\" ><img alt=\"Chuột Bluetooth Apple MLA02 - Các tính năng vượt trội của chuột MLA02\" src=\"https://cdn.tgdd.vn/Products/Images/86/88045/chuot-bluetooth-apple-mla02-trang-33.gif\" /></a></p>\r\n\r\n<p>2. Chuyển qua các tab đang mở trên trình duyệt Safari rất nhanh mà không cần thao tác trên bàn phím hay Touchpad.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/86/88045/chuot-bluetooth-apple-mla02-trang-44.gif\" ><img alt=\"Chuột Bluetooth Apple MLA02 Trắng chuyển qua các tab trên trình duyệt Safari\" src=\"https://cdn.tgdd.vn/Products/Images/86/88045/chuot-bluetooth-apple-mla02-trang-44.gif\" /></a></p>\r\n\r\n<p>3. Phóng to hình ảnh hay trang web nhanh chóng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/86/88045/chuot-bluetooth-apple-mla02-trang-55.gif\" ><img alt=\"Chuột Bluetooth Apple MLA02 - 3. Phóng to hình ảnh hay trang web nhanh chóng\" src=\"https://cdn.tgdd.vn/Products/Images/86/88045/chuot-bluetooth-apple-mla02-trang-55.gif\" /></a></p>\r\n', '2020-06-02 03:17:41'),
(34, 8, 7, 'Đồng hồ thông minh Huami Amazfit', 'dong-ho-thong-minh-huami-amazfit', '15588828925ed5c535db6e09.63956828.jpg', 2500000, 300000, 'Bảo hành chính hãng 12 tháng.', 'Sách hướng dẫn, Thùng máy, Adapter sạc', 'mới', '<p>Giảm 10% (đã trừ vào giá)</p>\r\n', 1, 1, '<h3>Thiết kế hợp thời trang, kiểu dáng nhỏ gọn</h3>\r\n\r\n<p><a href=\"https://www.thegioididong.com/dong-ho-thong-minh/huami-amazfit-gts-den\" target=\"_blank\">Đồng hồ thông minh Huami Amazfit GTS phiên bản màu đen</a> với thiết kế khá giống với <a href=\"https://www.thegioididong.com/tim-kiem?key=apple\" target=\"_blank\">Apple Watch</a>, trang bị màn hình 1.65 inch Super Retina cùng độ phân giải 348 x 442 pixels, mang tới độ chi tiết và sắc nét khi sử dụng trên màn hình này. Dây đeo silicone tạo cảm giác thoải mái khi sử dụng thời gian dài, ngoài ra <a href=\"https://www.thegioididong.com/day-dong-ho\" target=\"_blank\">dây đeo</a> trên mẫu đồng hồ này có thể thay thế được.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/7077/223744/huami-amazfit-gts-den-1-1.jpg\" ><img alt=\"Đồng hồ thông minh Huami Amazfit GTS đen với thiết kế năng động, thời trang\" src=\"https://cdn.tgdd.vn/Products/Images/7077/223744/huami-amazfit-gts-den-1-1.jpg\" /></a></p>\r\n\r\n<h3>Mặt kính cường lực và màn hình hiển thị sắc nét</h3>\r\n\r\n<p>Công nghệ màn hình <a href=\"https://www.thegioididong.com/tin-tuc/loai-man-hinh-tft-lcd-amoled-la-gi--592346\" target=\"_blank\">AMOLED</a> cho mật độ điểm ảnh lên tới 341ppi, hình ảnh hiển thị cực kì sắc nét và màu sắc trung thực. Màn hình của Amazfit GTS được làm cong nhẹ 2.5D và được bảo vệ bởi kính cường lực <a href=\"https://www.thegioididong.com/tin-tuc/kinh-cuong-luc-gorilla-glass-va-nhung-dieu-co-the-ban-chua-biet-1173761\" target=\"_blank\">Gorilla Glass</a> thế hệ 3 giúp chống trầy, tăng độ bền cho thiết bị. Amazfit GTS được bao bọc bởi một khung viền bằng thép không rỉ, có độ chắc chắn và cứng cáp rất cao.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/7077/223744/huami-amazfit-gts-den-3-1.jpg\" ><img alt=\"Đồng hồ thông minh Huami Amazfit GTS đen trang bị mặt kính cường lực cùng màn hình AMOLED\" src=\"https://cdn.tgdd.vn/Products/Images/7077/223744/huami-amazfit-gts-den-3-1.jpg\" /></a></p>\r\n\r\n<h3>Giao diện mặt đồng hồ phong phú</h3>\r\n\r\n<p>Một trong những điểm mạnh của dòng <a href=\"https://www.thegioididong.com/tim-kiem?key=amazfit\" target=\"_blank\">Amazfit </a>là kho giao điện đồng hồ phong phú hơn rất nhiều so với những đồng hồ thông minh <a href=\"https://www.thegioididong.com/tim-kiem?key=samsung\" target=\"_blank\">Samsung </a>hay đồng hồ <a href=\"https://www.thegioididong.com/tim-kiem?key=apple\" target=\"_blank\">Apple</a> Watch. Huami cung cấp hơn 100 giao diện mặt đồng hồ cho dòng Smartwatch Amazfit, người dùng chạy ứng dụng Amazfit Watch Face là có thể thay đổi mặt đồng hồ theo ý muốn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/7077/223744/huami-amazfit-gts-den-5-1.jpg\" ><img alt=\"Đồng hồ thông minh Huami Amazfit GTS đen cùng giao diện mặt đồng hồ phong phú\" src=\"https://cdn.tgdd.vn/Products/Images/7077/223744/huami-amazfit-gts-den-5-1.jpg\" /></a></p>\r\n', '2020-06-02 03:19:17'),
(35, 8, 7, 'Đồng hồ Nam Aviator AVW8515G353', 'dong-ho-nam-aviator-avw8515g353', '17004331685ed5c58895b642.89156244.jpg', 1500000, 0, 'Bảo hành chính hãng 12 tháng.', 'tai nghe, sạc, ...', 'mới', '<p>Giảm 40% khi mua kèm (không áp dụng thêm khuyến mãi khác)</p>\r\n', 1, 1, '<h2><strong>Aviator</strong></h2>\r\n\r\n<h3><strong>Độc đáo trong thiết kế, tinh xảo trong chế tác</strong></h3>\r\n\r\n<p>Thương hiệu đồng hồ Aviator đại diện cho những người trẻ nhiệt huyết, mạnh mẽ và máu lửa. Thiết kế tinh xảo cùng với độ bền bỉ rất cao luôn là những ưu điểm nổi bật giúp thương hiệu Aviator chiếm một chỗ đứng quan trọng trong lòng những tín đồ yêu thích đồng hồ. </p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/dong-ho-aviator-cua-nuoc-nao-uu-diem-va-dong-san-1216643\" target=\"_blank\">Tìm hiểu thêm</a></p>\r\n\r\n<p>Thiết kế hiện đại, nam tính. Là một phụ kiện thời trang đẳng cấp cho các bạn nam trẻ trung và thanh lịch</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/dong-ho-deo-tay/aviator-avw6973g353-nam\" target=\"_blank\">Đồng hồ Aviator AVW8515G353</a> là chiếc <a href=\"https://www.thegioididong.com/dong-ho-deo-tay-nam\" target=\"_blank\">đồng hồ nam</a> có thương hiệu Aviator đến từ đất nước Nga.</p>\r\n\r\n<p>Lớp vỏ chắc chắn, bảo vệ tốt lõi đồng hồ của bạn</p>\r\n\r\n<p>- <a href=\"https://www.thegioididong.com/dong-ho-deo-tay-aviator\" target=\"_blank\">Đồng hồ Aviator</a> có bộ khung bền bỉ, cứng cáp, hạn chế hư hỏng do gặp phải những va đập nhẹ.</p>\r\n\r\n<p>- Mặt kính <a href=\"https://www.thegioididong.com/dong-ho-deo-tay-aviator-nam\" target=\"_blank\">đồng hồ Aviator nam</a> trong suốt, có khả năng chịu lực tốt và dễ dàng đánh bóng khi trầy xước nhẹ.</p>\r\n\r\n<p>Xem thông tin lịch ngày ngay trên <a href=\"https://www.thegioididong.com/dong-ho-deo-tay\" target=\"_blank\">đồng hồ</a> một cách dễ dàng</p>\r\n\r\n<p>Thông số chống nước 3 ATM, yên tâm đeo đồng hồ khi rửa tay, đi mưa, không nên đeo đồng hồ khi tắm rửa</p>\r\n\r\n<p>Dây đeo bền bỉ, ôm lấy cổ tay, mang đến cảm giác dễ chịu cho người dùng khi đeo</p>\r\n', '2020-06-02 03:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tr_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `tr_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_payment` int(11) NOT NULL,
  `tr_note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tr_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tr_status` int(11) NOT NULL DEFAULT 1,
  `tr_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tr_id`, `cus_id`, `tr_name`, `tr_payment`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `tr_created_at`) VALUES
(8, 2, 'Nguyễn Duy Tùng', 33780000, 'giao hàng nhanh giúp mình nhé', 'Hà Nội', '0123456789', 1, '2020-01-08 09:58:02'),
(11, 3, 'Hoàng Duy Thái', 83270000, 'giao hàng nhanh giúp mình nhé', 'Hà Nội', '0123456789', 1, '2020-01-08 11:35:56'),
(13, 1, 'Nguyễn Duy Tùng', 77950000, 'giao hàng nhanh giúp mình nhé', 'Hà Nội', '0123456789', 2, '2020-01-09 02:15:06'),
(14, 4, 'vương', 39770000, 'giao hàng nhanh giúp mình nhé', 'Hà Nội', '0123456334', 2, '2020-01-09 02:49:13'),
(16, 1, 'Nguyễn Duy Tùng', 23380000, 'giao hàng nhanh giúp mình nhé', 'Hà Nội', '0123456789', 1, '2020-02-26 15:25:40'),
(17, 6, 'Nguyễn Duy Tùng', 89970000, '', 'Hà Nội', '0123456789', 1, '2020-06-02 02:51:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_mail` (`admin_mail`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD UNIQUE KEY `brand_name` (`brand_name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_name` (`cat_name`),
  ADD KEY `cat_name_2` (`cat_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`),
  ADD UNIQUE KEY `cus_email` (`cus_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `tr_id` (`tr_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tr_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `cus_id_2` (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
