-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2022 at 03:40 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `review_content` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`product_id`, `review_content`) VALUES
(1, 'Sản phẩm giày Wika Galaxy Light bạc là phiên bản cổ cao cập nhật mới nhất của Wika Sports. Với thiết kế ôm chân giúp khóa cổ chân tốt, hạn chế trấn thương chất liệu da mỏng tăng cường cảm giác bóng, đế cao su non đúc khâu <h2>00% cực bền bỉ.</br>– Màu sắc: bạc </br>– Đế giày: công nghệ cao su 2 lớp, dán keo & khâu <h2>00% siêu chắc chắn</br>– Da giày: công nghệ da TPU chống mài mòn, chịu được nhiệt</br>– Suất xứ: Sản xuất tại Việt Nam</br>– Bảo hành: 365 ngày (<h2>2 tháng), được đổi size nếu chưa vừa (Vui lòng tham khảo cách chọn size chuẩn trước khi đặt hàng để tránh mất thời gian)</br>'),
(21, 'Sản phẩm giày Wika Galaxy Light xanh lam là phiên bản cổ cao cập nhật mới nhất của Wika Sports. Với thiết kế ôm chân giúp khóa cổ chân tốt, hạn chế trấn thương chất liệu da mỏng tăng cường cảm giác bóng, đế cao su non đúc khâu 100% cực bền bỉ.</br>– Màu sắc: xanh lam</br>– Đế giày: công nghệ cao su 2 lớp, dán keo & khâu 100% siêu chắc chắn</br>– Da giày: công nghệ da TPU chống mài mòn, chịu được nhiệt</br>– Suất xứ: Sản xuất tại Việt Nam</br>– Bảo hành: 365 ngày (12 tháng), được đổi size nếu chưa vừa (Vui lòng tham khảo cách chọn size chuẩn trước khi đặt hàng để tránh mất thời gian)</br>'),
(22, 'Sản phẩm giày Wika Galaxy Light đỏ là phiên bản cổ cao cập nhật mới nhất của Wika Sports. Với thiết kế ôm chân giúp khóa cổ chân tốt, hạn chế trấn thương chất liệu da mỏng tăng cường cảm giác bóng, đế cao su non đúc khâu 100% cực bền bỉ.</br>– Màu sắc: đỏ</br>– Đế giày: công nghệ cao su 2 lớp, dán keo & khâu 100% siêu chắc chắn</br>– Da giày: công nghệ da TPU chống mài mòn, chịu được nhiệt</br>– Suất xứ: Sản xuất tại Việt Nam</br>– Bảo hành: 365 ngày (2 tháng), được đổi size nếu chưa vừa (Vui lòng tham khảo cách chọn size chuẩn trước khi đặt hàng để tránh mất thời gian)</br>'),
(23, 'Sản phẩm giày Wika Galaxy Light navy là phiên bản cổ cao cập nhật mới nhất của Wika Sports.\r\n Với thiết kế ôm chân giúp khóa cổ chân tốt, hạn chế trấn thương chất liệu da mỏng tăng cường cảm giác bóng, \r\n đế cao su non đúc khâu 100% cực bền bỉ.</br>– Màu sắc: navy</br>– Đế giày: công nghệ cao su 2 lớp, dán keo & khâu \r\n 100% siêu chắc chắn</br>– Da giày: công nghệ da TPU chống mài mòn, chịu được nhiệt</br>– Suất xứ: Sản xuất tại Việt Nam</br>– Bảo hành: 365 ngày (2 tháng), được đổi size nếu chưa vừa (Vui lòng tham khảo cách chọn size chuẩn trước khi đặt hàng để tránh mất thời gian)</br>'),
(24, 'Mẫu sản phẩm giày đá bóng Wika CP0 là sự kết hợp của Wika Sports và cầu thủ Nguyễn Công Phượng với 4 phối màu chính xám xanh, bạc cam, navy chuối và xanh bạc sẵn sàng khiến cho anh em nổi bần bật trên sân.</br>“Đôi giày như một người bạn trung thành khiến tôi tự tin chiến đấu trên sân cỏ” Nguyễn Công Phượng chia sẻ.</br>Upper của đôi Wika CP0 được làm bằng chất liệu da Microfiber cao cấp tái tại cấu trúc da thật mang tới chất liệu mềm mỏng, đàn hồi tốt, giữ form và ôm chân với trọng lượng nhẹ chỉ 220 gram/ chiếc size 40. Bề mặt da được phủ một lớp nano siêu mỏng giúp hạn chế thấm nước, bám bẩn và tăng độ bền giúp sản phẩm cực kì dễ vệ sinh, đá xong chỉ cần lau qua là sạch. Hơn thế nữa hần mũi, má trong và má ngoài còn được dập vân nổi giúp tạo độ ma sát, bám dính và cảm giác bóng.</br>Bộ đế giày đinh răm TF 3mm chuyên dụng cho sân cỏ nhân tạo được làm từ chất liệu cao su non đúc đàn hồi tốt, mềm. Những chiếc đinh kích thước lớn giúp bám sân tốt và loại bỏ khả năng bị gãy đinh. Đế thiết kế mỏng và thấp nên sẽ dễ chơi với bất kỳ anh em nào.</br>Cổ giày làm bằng chất liệu vải sợi dệt Wi-Flyknit độ cao vừa phải, mềm, dẻo dai và đàn hồi và ôm chân tốt hỗ trợ trong những cú bứt tốc hay đổi hướng. Lưỡi gà liền giúp hạn chế lệch lưỡi gà và các hạt cao su rơi vào trong giày.</br>Lót giày EVA kết hợp vải mesh chuyên dùng trong thời trang thể thao giúp mang lại cảm giác êm ái. Hơn nữa, phần gót bên trong giày được bổ sung lớp lót EVA mỏng giúp hạn chế chấn thương.</br>'),
(25, 'Chất liệu: Da lộn, Lưới, TPU </br>Bộ Sưu Tập: New Balance crt300 </br>Điểm nổi bật	:Retro, Vintage</br>Giới tính:Nam, Nữ</br>Mức Giá:1tr-2tr </br>'),
(26, 'Chất liệu:Lưới, Plastic, TPU </br>Bộ Sưu Tập: Ultraboost</br>Giới tính: Nam, Nữ</br>Màu sắc: Đen</br>Mức Giá: 1tr – 2tr</br>'),
(27, 'Fullbox Stan Smith. 2 ver Trắng Gót Xanh/ Full White. </br>Thiết kế basic trend dài dài.</br>Phù hợp: nam nữ, đi học, đi làm, hoạt động thể thao.</br>Chất liệu: Da.</br> Giao hàng toàn quốc.</br>Bảo hành 12 tháng. Đổi trả dễ dàng. Streetwear, trẻ trung năng động.</br>'),
(28, '<h4>Thiết Kế Ấn Tượng</h4>\r\nPhá bỏ giới hạn và viết lại lịch sử sneaker là chủ đích của Nike khi ra mắt Air Force 1 Pixel. Lấy nền tảng thiết kế của Air Force Shadow và thêm thắt những chi tiết mới lạ với màu trắng nguyên khối bao quanh toàn bộ thân giày. ​</br>\r\n<h4>Hiệu Ứng Thị Giác Hack Não</h4>\r\nNhờ vào những đường xẻ rãnh không đồng đều, viền đế lúc cao lúc thấp, tất cả đều mang đến một hiệu ứng thị giác rất “nhiễu”. Graphic “Nike” và “AF1” vẽ theo phong cách lập thể trên lưỡi gà , lót giày và gót giày. Dấu Swoosh dạng khắc chìm cũng là một chi tiết đáng chú ý.</br>\r\n<h4>Công Nghệ Đế Air Độc Quyền</h4>\r\nNike ưu ái đệm “túi khí” vào toàn bộ phần đế giày. Êm ái và thoải mái là cảm giác khi mang Air Force 1 cả ngày dài. Lỗ thông khí trên mũi giày được giảm số lượng đi khá nhiều để tôn lên vẻ đẹp của lớp da mềm được Nike sử dụng.</br>\r\n<h4>Bộ Đế Phong Cách Pixel Sáng Tạo</h4>\r\nBộ đế 3cm giúp hack chiều cao đáng kể với họa tiết ngôi sao năm cánh dập nổi giúp tăng độ bám và chống trơn trượt khi di chuyển. Những vòng tròn đồng tâm trên đế ngoài cũng bị lệch đi một chút.</br>\r\n<h4>Bảo Hành Lên Đến 12 Tháng</h4></br>'),
(29, 'Phiên bản “Phantom” vừa mở bán đã tạo một cú hích trong thị trường sneakers. M2K Tekno được nhiều người bình chọn là đôi chunky sneakers được yêu thích của năm.</br>Các phối màu của M2K Tekno rất đa dạng về màu sắc, chất liệu. Dấu Swoosh quen thuộc của Nike ở bên hông. Một logo to bản ở phía giữa thân. Theo sau đó là logo mini hơn ở phía gần gót và midsole. Tổng thể thiết kế mang hơi thở tương lai.</br>Họa tiết khối giúp tăng độ bám và chống trơn trượt khi di chuyển. On feet Nike M2K Tekno cho cảm giác thoải mái và êm ái tuyệt đối.</br>Phù hợp cho cả nam nữ. M2K Tekno được xem như một món phụ kiện thời trang khi có thể diện kèm với nhiều loại trang phục trong các dịp khác nhau như đi chơi, đi làm, đi học,… mà vẫn nổi bật.</br>Tiếp nối thành công của những dòng giày huyền thoại làm mưa làm gió trong năm 2018-2019. Nike một lần nữa khiến giới chơi giày xôn xao khi ra mắt M2K Tekno. Vẫn xu hướng “chunky shoes” đã thống lĩnh thị trường trong năm 2019, Nike thể hiện mình không bỏ lỡ cuộc đua này với Nike M2K Tekno cùng những phối màu độc đáo, thân giày hoạ tiết khoẻ khoắn mang hơi hướm thể thao nhưng lại phù hợp với thời trang đường phố lạ thường. M2K Tekno là mẫu giày không thể bỏ qua. Cùng chiêm ngưỡng vẻ đẹp của M2K Tekno qua những phối màu đặc sắc và đừng quên mẫu giày này sẽ giúp bạn hack chiều cao đáng kể đấy!</br>'),
(30, '<h4>Must-Have Item</h4>Sau giày thì dường như những đôi dép cũng là mối quan tâm không hề nhỏ của các sneakershead nhà ta bởi sự tiện dụng của nó.</br><h4>Tính Năng Nổi Bật</h4>Với các đường rãnh họa tiết giúp tăng độ bám và chống trơn trượt khi di chuyển. Dép Nike cho trải nghiệm êm ái và thoải mái khi sử dụng trong thời gian dài. Phần strap làm bằng da tổng hợp và neoprene, mang lại cảm giác thoải mái cũng như độ bền cao cho sản phẩm.</br><h4>Phù Hợp Với Tất Cả Mọi Người</h4>Không những tiện lợi và dễ sử dụng, dép Nike còn được xem là một phụ kiện thời trang khi bạn có thể mang kèm vớ cổ cao – một phong cách đang trending gần đây.</br><h4>Dễ Dàng Vệ Sinh</h4>Sử dụng sắc đen/trắng làm màu chủ đạo. Tuy vậy dép Nike lại vô cùng dễ vệ sinh vì chất liệu da tổng hợp bền bỉ. Các vết bẩn dễ dàng biến mất chỉ bằng cách lau bằng khăn ẩm.</br><h4>Bảo Hành Lên Đến 12 Tháng</h4>Quý khách có thể liên hệ cửa hàng để được hỗ trợ theo chính sách khi gặp bất kì vấn đề trong quá trình mua sắm.</br><h4>Đầy Đủ Phụ Kiện</h4>Bao gồm: hộp giày chính hãng, giấy gói hút ẩm, tag giày, hóa đơn mua hàng. Sản phẩm cũng được đóng gói tiêu chuẩn double box hạn chế móp méo trong quá trình vận chuyển.</br><h4>CHI TIẾT</h4>Kẻ dẫn đầu trong ngành sportwear đang lên kế hoạch tung ra bộ sản phẩm dành cho mùa đông với Nike, nhưng họ vẫn không quên dành cho người hâm mộ những món đồ hè đầy thú vị. Nổi bật trong số đó, chắc chắn phải kể đến những đôi dép Nike với những nét chấm phá đầy độc đáo.</br>'),
(31, '<h4>Must-Have Item</h4>Sau giày thì dường như những đôi dép cũng là mối quan tâm không hề nhỏ của các sneakershead nhà ta bởi sự tiện dụng của nó.</br><h4>Tính Năng Nổi Bật</h4>Với các đường rãnh họa tiết giúp tăng độ bám và chống trơn trượt khi di chuyển. Dép Nike cho trải nghiệm êm ái và thoải mái khi sử dụng trong thời gian dài. Phần strap làm bằng da tổng hợp và neoprene, mang lại cảm giác thoải mái cũng như độ bền cao cho sản phẩm.</br><h4>Phù Hợp Với Tất Cả Mọi Người</h4>Không những tiện lợi và dễ sử dụng, dép Nike còn được xem là một phụ kiện thời trang khi bạn có thể mang kèm vớ cổ cao – một phong cách đang trending gần đây.</br><h4>Dễ Dàng Vệ Sinh</h4>Sử dụng sắc đen/trắng làm màu chủ đạo. Tuy vậy dép Nike lại vô cùng dễ vệ sinh vì chất liệu da tổng hợp bền bỉ. Các vết bẩn dễ dàng biến mất chỉ bằng cách lau bằng khăn ẩm.</br><h4>Bảo Hành Lên Đến 12 Tháng</h4>Quý khách có thể liên hệ cửa hàng để được hỗ trợ theo chính sách khi gặp bất kì vấn đề trong quá trình mua sắm.</br><h4>Đầy Đủ Phụ Kiện</h4>Bao gồm: hộp giày chính hãng, giấy gói hút ẩm, tag giày, hóa đơn mua hàng. Sản phẩm cũng được đóng gói tiêu chuẩn double box hạn chế móp méo trong quá trình vận chuyển.</br><h4>CHI TIẾT</h4>Kẻ dẫn đầu trong ngành sportwear đang lên kế hoạch tung ra bộ sản phẩm dành cho mùa đông với Nike, nhưng họ vẫn không quên dành cho người hâm mộ những món đồ hè đầy thú vị. Nổi bật trong số đó, chắc chắn phải kể đến những đôi dép Nike với những nét chấm phá đầy độc đáo.</br>'),
(32, '<h4>Must-Have Item</h4>Sau giày thì dường như những đôi dép cũng là mối quan tâm không hề nhỏ của các sneakershead nhà ta bởi sự tiện dụng của nó.</br><h4>Tính Năng Nổi Bật</h4>Với các đường rãnh họa tiết giúp tăng độ bám và chống trơn trượt khi di chuyển. Dép Nike cho trải nghiệm êm ái và thoải mái khi sử dụng trong thời gian dài. Phần strap làm bằng da tổng hợp và neoprene, mang lại cảm giác thoải mái cũng như độ bền cao cho sản phẩm.</br><h4>Phù Hợp Với Tất Cả Mọi Người</h4>Không những tiện lợi và dễ sử dụng, dép Nike còn được xem là một phụ kiện thời trang khi bạn có thể mang kèm vớ cổ cao – một phong cách đang trending gần đây.</br><h4>Dễ Dàng Vệ Sinh</h4>Sử dụng sắc đen/trắng làm màu chủ đạo. Tuy vậy dép Nike lại vô cùng dễ vệ sinh vì chất liệu da tổng hợp bền bỉ. Các vết bẩn dễ dàng biến mất chỉ bằng cách lau bằng khăn ẩm.</br><h4>Bảo Hành Lên Đến 12 Tháng</h4>Quý khách có thể liên hệ cửa hàng để được hỗ trợ theo chính sách khi gặp bất kì vấn đề trong quá trình mua sắm.</br><h4>Đầy Đủ Phụ Kiện</h4>Bao gồm: hộp giày chính hãng, giấy gói hút ẩm, tag giày, hóa đơn mua hàng. Sản phẩm cũng được đóng gói tiêu chuẩn double box hạn chế móp méo trong quá trình vận chuyển.</br><h4>CHI TIẾT</h4>Kẻ dẫn đầu trong ngành sportwear đang lên kế hoạch tung ra bộ sản phẩm dành cho mùa đông với Nike, nhưng họ vẫn không quên dành cho người hâm mộ những món đồ hè đầy thú vị. Nổi bật trong số đó, chắc chắn phải kể đến những đôi dép Nike với những nét chấm phá đầy độc đáo.</br>'),
(33, '<h4>Must-Have Item</h4>Sau giày thì dường như những đôi dép cũng là mối quan tâm không hề nhỏ của các sneakershead nhà ta bởi sự tiện dụng của nó.</br><h4>Tính Năng Nổi Bật</h4>Với các đường rãnh họa tiết giúp tăng độ bám và chống trơn trượt khi di chuyển. Dép Nike cho trải nghiệm êm ái và thoải mái khi sử dụng trong thời gian dài. Phần strap làm bằng da tổng hợp và neoprene, mang lại cảm giác thoải mái cũng như độ bền cao cho sản phẩm.</br><h4>Phù Hợp Với Tất Cả Mọi Người</h4>Không những tiện lợi và dễ sử dụng, dép Nike còn được xem là một phụ kiện thời trang khi bạn có thể mang kèm vớ cổ cao – một phong cách đang trending gần đây.</br><h4>Dễ Dàng Vệ Sinh</h4>Sử dụng sắc đen/trắng làm màu chủ đạo. Tuy vậy dép Nike lại vô cùng dễ vệ sinh vì chất liệu da tổng hợp bền bỉ. Các vết bẩn dễ dàng biến mất chỉ bằng cách lau bằng khăn ẩm.</br><h4>Bảo Hành Lên Đến 12 Tháng</h4>Quý khách có thể liên hệ cửa hàng để được hỗ trợ theo chính sách khi gặp bất kì vấn đề trong quá trình mua sắm.</br><h4>Đầy Đủ Phụ Kiện</h4>Bao gồm: hộp giày chính hãng, giấy gói hút ẩm, tag giày, hóa đơn mua hàng. Sản phẩm cũng được đóng gói tiêu chuẩn double box hạn chế móp méo trong quá trình vận chuyển.</br><h4>CHI TIẾT</h4>Kẻ dẫn đầu trong ngành sportwear đang lên kế hoạch tung ra bộ sản phẩm dành cho mùa đông với Nike, nhưng họ vẫn không quên dành cho người hâm mộ những món đồ hè đầy thú vị. Nổi bật trong số đó, chắc chắn phải kể đến những đôi dép Nike với những nét chấm phá đầy độc đáo.</br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_quantity` int(11) UNSIGNED NOT NULL,
  `product_note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `order_date` date NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_quantity` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `product_price` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `product_preview` varchar(5000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `product_thumnail` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_maintenance` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_producer` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_price`, `product_preview`, `product_thumnail`, `product_maintenance`, `product_producer`, `category_id`) VALUES
(1, 'Giày đá bóng Wika Galaxy Light bạc', 490000, 'giay-wika-galaxy-light-bac-5.jpg;Giay-wika-galaxy-light-bac-3-600x600.jpg;giay-wika-galaxy-light-bac-4-min-600x600.jpg;giay-wika-galaxy-light-bac-6-768x768.jpg', 'giay-wika-galaxy-light-bac-5.jpg', '365', 'Wika', 1),
(21, 'Giày đá bóng Wika Galaxy xanh lam', 490000, 'giay-wika-galaxy-light-xanh-lam-8-768x768.jpg;Giay-wika-galaxy-light-xanh-lam-2.jpg;giay-wika-galaxy-light-xanh-lam-6-768x768.jpg;giay-wika-galaxy-light-xanh-lam-7-768x768.jpg', 'giay-wika-galaxy-light-xanh-lam-8-768x768.jpg', '365', 'Wika', 1),
(22, 'Giày đá bóng Wika Galaxy Light đỏ', 490000, 'Giay-wika-galaxy-light-do-1-768x768.jpg;giay-wika-galaxy-light-do-6-768x768.jpg;giay-wika-galaxy-light-do-4-min-768x768.jpg', 'giay-wika-galaxy-light-do-5-768x768.jpg', '365', 'Wika', 1),
(23, 'Giày đá bóng Wika Galaxy Light navy', 490000, 'Giay-wika-galaxy-light-navy-2-768x768.jpg;Giay-wika-galaxy-light-navy-3-768x768.jpg;giay-wika-galaxy-light-navy-4-min-768x768.jpg', 'giay-wika-galaxy-light-navy-5-768x768.jpg', '365', 'Wika', 1),
(24, 'Giày đá bóng Wika CP10 Công Phượng xám xanh', 510000, 'giay-wika-cp10-cong-phuong-xam-xanh-3_optimized-768x768.jpg;giay-wika-cp10-cong-phuong-xam-xanh-4_optimized-768x768.jpg', 'giay-wika-cp-10-cong-phuong-xam-xanh-2_optimized-768x768.jpg', '365', 'Wika', 1),
(25, 'NEW BALANCE CRT 300 2.0 BLUE AQUA', 1195000, 'bfc5d35ed8c8189641d924.jpg;d8b807250cb3cced95a227.jpg', 'b5fed964d2f212ac4be325.jpg', '365', 'NEW BALANCE', 3),
(26, 'ADIDAS ULTRA BOOST 4.0 TRIPLE BLACK', 995000, 'IMG_5511-1.jpg;IMG_5549.jpg', 'IMG_5510-1.jpg', '365', 'Adidas', 3),
(27, 'ADIDAS STAN SMITH TRIPLE WHITE', 895000, 'IMG_9220-1024x1024-scaled.jpg;6-1-1024x1024-scaled.jpg', 'thoi-trang-vintage.jpg', '365', 'Adidas', 3),
(28, 'AIR FORCE 1 PIXEL LOW TOP TRAINERS', 1295000, 'NVTC-AIR-FORCE-1-PIXEL-LOW-TOP-TRAINERS-ALL-WHITE-3-scaled.jpg;NVTC-AIR-FORCE-1-PIXEL-LOW-TOP-TRAINERS-ALL-WHITE-2-scaled.jpg', 'NVTC-AIR-FORCE-1-PIXEL-LOW-TOP-TRAINERS-ALL-WHITE-5-scaled.jpg', '365', 'Nike', 3),
(29, 'M2K TEKNO WHITE BLACK ORANGE', 895000, 'NVTC-M2K-TEKNO-WHITE-BLACK-ORANGE-4-scaled.jpg;NVTC-M2K-TEKNO-WHITE-BLACK-ORANGE-1-scaled.jpg', 'NVTC-M2K-TEKNO-WHITE-BLACK-ORANGE-3-scaled-1.jpg', '365', 'Nike', 3),
(30, 'DÉP QUAI NGANG NIKE CLASSIC ALL BLACK ĐEN', 290000, 'NVTC-DEP-NIKE-CLASSIC-ALL-BLACK-3-scaled.jpg;NVTC-DEP-NIKE-CLASSIC-ALL-BLACK-2-scaled.jpg', 'NVTC-DEP-NIKE-CLASSIC-ALL-BLACK-1-scaled.jpg', '365', 'Nike', 4),
(31, 'DÉP QUAI NGANG NIKE CLASSIC TRẮNG', 290000, 'NVTC-DEP-QUAI-NGANG-NIKE-CLASSIC-TRANG-1-scaled.jpg;NVTC-DEP-QUAI-NGANG-NIKE-CLASSIC-TRANG-2-scaled.jpg', 'NVTC-DEP-QUAI-NGANG-NIKE-CLASSIC-TRANG-4-scaled.jpg', '365', 'Nike', 4),
(32, 'DÉP QUAI NGANG NIKE BENASSI JUST DO IT BLACK', 290000, 'IMG_0056.jpg;IMG_1863.jpg', 'IMG_0058.jpg', '365', 'Nike', 4),
(33, 'DÉP QUAI NGANG NEW BALANCE CLASSIC WHITE BLACK', 290000, '5bb535508ee649b810f72-scaled.jpg;6169e0845b329c6cc5231-scaled.jpg', '97baa5a51d13da4d83024-scaled.jpg', '365', 'NEW BALANCE', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `category_ename` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`category_id`, `category_name`, `category_ename`) VALUES
(1, 'Giày Bóng Đá', ''),
(3, 'Sneaker', 'Giày'),
(4, 'Dép quai ngang', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_password`, `user_phone`, `user_name`, `user_address`) VALUES
(1, 'admin@gmail.com', '4297f44b13955235245b2497399d7a93', '1231231', 'Nguyên Nhóc', '1B Nguyễn Tri Phương');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `FK_review_tbl_product` (`product_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD KEY `FK_tbl_cart_tbl_user` (`user_id`),
  ADD KEY `FK_tbl_cart_tbl_product` (`product_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_tbl_order_tbl_user` (`user_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `FK_tbl_order_detail_tbl_order` (`order_id`),
  ADD KEY `FK_tbl_order_detail_tbl_product` (`product_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_tbl_product_tbl_product_category` (`category_id`);

--
-- Indexes for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_review_tbl_product` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `FK_tbl_cart_tbl_product` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbl_cart_tbl_user` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `FK_tbl_order_tbl_user` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD CONSTRAINT `FK_tbl_order_detail_tbl_order` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbl_order_detail_tbl_product` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `FK_tbl_product_tbl_product_category` FOREIGN KEY (`category_id`) REFERENCES `tbl_product_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
