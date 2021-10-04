-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 22, 2020 lúc 01:55 AM
-- Phiên bản máy phục vụ: 5.6.36
-- Phiên bản PHP: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phamtinh_cosmetic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `AboutID` int(11) NOT NULL,
  `Title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Meta Title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Detail` text COLLATE utf8_unicode_ci,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`AboutID`, `Title`, `Meta Title`, `Image`, `Detail`, `CreatedDate`, `Status`) VALUES
(1, 'KenShop- Chuyên mỹ phẩm nội địa Nhật Chính Hãng', 'Về Chúng Tôi', 'banner_1.jpg', ' <strong>KenShop</strong> được thành lập ban đầu dựa trên ý tưởng về một địa chỉ uy tín cung cấp các sản phẩm mỹ phẩm chất lượng cho đa số phụ nữ Việt Nam với giá cả hợp lý. Nếu ngày nay nhu cầu sử dụng mỹ phẩm ngày càng lớn và phổ biến thì vấn đề hàng thật, giá cả hợp lý và chất lượng dịch vụ đi kèm càng trở nên cấp thiết hơn bao giờ hết. </br>\r\n</br>\r\n</br>\r\nHiểu được điều đó, chúng tôi cam kết luôn mang lại những sản phẩm chính hãng với giá tốt nhất cho khách hàng. Những sản phẩm bán trên  <strong>KenShop</strong> đều được bảo đảm cung cấp bởi những thương hiệu, nhà cung cấp uy tín mà chúng tôi đã cẩn trọng đánh giá, dựa trên các tiêu chí của khu vực về an toàn sản phẩm, điều kiện sản xuất và lưu trữ bảo quản.  \r\n</br>\r\n</br>\r\n</br>\r\nNgoài ra, nhằm mang lại trải nghiệm mua sắm tốt nhất trên trang  <strong>KenShop</strong>, chúng tôi còn tạo điều kiện để khách hàng có thể hoàn trả sản phẩm không vừa ý trong vòng 7 ngày làm việc. Bên cạnh đó là dịch vụ giao hàng tận nơi mà khách hàng chỉ định. Từ nay khách hàng sẽ không cần ra các trung tâm mua sắm để tìm hiểu các xu hướng làm đẹp mới nhất mà vẫn có thể tận hưởng điều đó ngay tại nhà với chi phí thấp hơn. Chúng tôi tin rằng mọi trải nghiệm mua sắm mỹ phẩm đều phải thật thú vị, tiện lợi và dễ dàng nhất có thể tại website www.kenshop.com. Và chúng tôi sẽ không ngừng phấn đấu và liên tục đổi mới để mang lại những giá trị cam kết đó cho quý khách.  ', '2020-07-11 12:21:59', 1),
(2, '\r\nKenShop- Chuyên mỹ phẩm nội địa Nhật Chính Hãng', 'Về Chính Vận Chuyển', 'vc.jpg', '\r\n<strong>I. Đối Với Nội Thành Hồ Chí Minh & Hà Nội:</strong>\r\n \r\n</br>\r\n- Phí vận chuyển nội thành: 15,000 VNĐ.\r\n\r\n </br>\r\n\r\n- Thời gian: \r\n\r\n </br>\r\n\r\nHồ Chí Minh: 1-2 Ngày Làm Việc (không kể ngày CN, ngày lễ, Tết). \r\n\r\n </br>\r\n\r\nHà Nội : 1-2 Ngày Làm Việc (không kể ngày CN, ngày lễ, Tết). \r\n</br>\r\n \r\n\r\n<strong>II. Đối Với Ngoại Thành Hồ Chí Minh & Hà Nội\r\n</strong>\r\n\r\n </br>\r\n\r\n- Phí vận chuyển ngoại thành: 20,000 VNĐ.\r\n</br>\r\n</br>\r\n \r\n\r\n- Thời gian:\r\n\r\n </br>\r\n</br>\r\n\r\nHồ Chí Minh: 1-2 Ngày Làm Việc (không kể ngày CN, ngày lễ, Tết). \r\n\r\n </br>\r\n\r\nHà Nội : 2-3 Ngày Làm Việc (không kể ngày CN, ngày lễ, Tết). \r\n\r\n \r\n\r\n \r\n</br>\r\n<strong>\r\nIII. Đối Với Các Tỉnh Thành Khác Trên Toàn Quốc\r\n\r\n </strong>\r\n\r\n- Phí vận chuyển các tỉnh thành trên toàn quốc: 30,000 VNĐ.\r\n\r\n </br>\r\n\r\n- Thời gian:\r\n</br>\r\n \r\n\r\nCác Tỉnh/Thành Phố Miền Nam: 1-2 Ngày Làm Việc (không kể ngày CN, ngày lễ, Tết). \r\n</br>\r\n \r\n\r\nCác Tỉnh/Thành Phố Miền Bắc: 2-3 Ngày Làm Việc (không kể ngày CN, ngày lễ, Tết). \r\n\r\n </br>\r\n\r\nCác Tuyến Huyện, Xã: Cộng Thêm 2 - 3 Ngày Làm Việc (không kể ngày CN, ngày lễ, Tết). \r\n\r\n \r\n\r\n </br>\r\n\r\n\r\n\r\n- Đăng ký thành viên tại đây.\r\n\r\n </br>\r\n<strong>\r\n\r\nIV. Thời gian xác nhận đơn hàng: \r\n\r\n </strong>\r\nThời gian giao hàng được bắt đầu tính từ lúc nhân viên KenShopgọi xác nhận thành công đơn hàng của bạn qua điện thoại. \r\n</br>\r\n \r\n- Đơn hàng gửi đến KenShop trước 3h chiều nhân viên KenShopsẽ gọi xác nhận ngay trong ngày và chuyển đến bên ship cùng ngày. \r\n\r\n </br>\r\n\r\n- Đơn hàng gửi đến sau 3h chiều nhân viên KenShop sẽ gọi xác nhận và chuyển đến bên ship vào ngày làm việc kế tiếp. (không kể ngày CN, ngày lễ, Tết).', '2020-07-11 12:21:59', 2),
(3, '<p><span style=\"font-size:20px\">KenShop- Chuy&ecirc;n mỹ phẩm nội địa Nhật Ch&iacute;nh H&atilde;ng</span></p>\r\n', 'Chính Sách Riêng Tư', 'banner_1.jpg', '<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">C&aacute;m ơn qu&yacute; kh&aacute;ch đ&atilde; truy cập v&agrave;o website của </span><span style=\"color:#e74c3c\">KenShop</span><span style=\"color:#000000\">. Ch&iacute;nh s&aacute;ch bảo mật sẽ giải th&iacute;ch c&aacute;ch ch&uacute;ng t&ocirc;i tiếp nhận, sử dụng v&agrave; (trong trường hợp n&agrave;o đ&oacute;) tiết lộ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn. Ch&iacute;nh s&aacute;ch cũng sẽ giải th&iacute;ch c&aacute;c bước ch&uacute;ng t&ocirc;i thực hiện để bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n của kh&aacute;ch h&agrave;ng. Cuối c&ugrave;ng, Ch&iacute;nh s&aacute;ch bảo mật sẽ giải th&iacute;ch quyền lựa chọn của qu&yacute; kh&aacute;ch về việc thu thập, sử dụng v&agrave; tiết lộ th&ocirc;ng tin c&aacute; nh&acirc;n của m&igrave;nh.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Ch&uacute;ng t&ocirc;i chỉ thu thập những th&ocirc;ng tin cần thiết li&ecirc;n quan đến giao dịch mua b&aacute;n. Ch&uacute;ng t&ocirc;i sẽ giữ th&ocirc;ng tin của kh&aacute;ch h&agrave;ng trong thời gian luật ph&aacute;p quy định hoặc cho mục đ&iacute;ch n&agrave;o đ&oacute;. Qu&yacute; kh&aacute;ch c&oacute; thể truy cập v&agrave;o website v&agrave; tr&igrave;nh duyệt m&agrave; kh&ocirc;ng cần phải cung cấp chi tiết c&aacute; nh&acirc;n. L&uacute;c đ&oacute;, bạn sẽ truy cập ẩn danh v&agrave; ch&uacute;ng t&ocirc;i kh&ocirc;ng thể biết bạn l&agrave; ai nếu bạn kh&ocirc;ng đăng nhập v&agrave;o t&agrave;i khoản của m&igrave;nh.</span></span></span></span></p>\r\n\r\n<h2 style=\"font-style:normal; text-align:start\"><strong><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">1. Thu thập th&ocirc;ng tin c&aacute; nh&acirc;n </span></span></span></span></strong></h2>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Ch&uacute;ng t&ocirc;i sẽ thu thập nhiều th&ocirc;ng tin kh&aacute;c nhau của qu&yacute; kh&aacute;ch khi bạn muốn đặt h&agrave;ng tr&ecirc;n web. Ch&uacute;ng t&ocirc;i thu thập, lưu trữ v&agrave; xử l&yacute; th&ocirc;ng tin của bạn cho qu&aacute; tr&igrave;nh mua h&agrave;ng v&agrave; cho những th&ocirc;ng b&aacute;o sau n&agrave;y để cung cấp dịch vụ. Ch&uacute;ng t&ocirc;i kh&ocirc;ng giới hạn th&ocirc;ng tin c&aacute; nh&acirc;n: danh hiệu, t&ecirc;n, giới t&iacute;nh, ng&agrave;y sinh, email, địa chỉ, địa chỉ giao h&agrave;ng, số điện thoại, fax, chi tiết thanh to&aacute;n, chi tiết thanh to&aacute;n bằng thẻ hoặc chi tiết t&agrave;i khoản ng&acirc;n h&agrave;ng.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Ch&uacute;ng t&ocirc;i sẽ d&ugrave;ng th&ocirc;ng tin qu&yacute; kh&aacute;ch đ&atilde; cung cấp để xử l&yacute; đơn đặt h&agrave;ng, cung cấp c&aacute;c dịch vụ v&agrave; th&ocirc;ng tin y&ecirc;u cầu th&ocirc;ng qua website v&agrave; theo y&ecirc;u cầu của bạn. Ch&uacute;ng t&ocirc;i sẽ sử dụng c&aacute;c th&ocirc;ng tin đ&oacute; để quản l&yacute; t&agrave;i khoản của bạn; x&aacute;c minh v&agrave; thực hiện giao dịch trực tuyến, kiểm to&aacute;n việc tải dữ liệu từ web; cải thiện bố cục v&agrave; nội dung trang web v&agrave; điều chỉnh cho ph&ugrave; hợp với người d&ugrave;ng; nhận diện kh&aacute;ch v&agrave;o web, nghi&ecirc;n cứu nh&acirc;n khẩu học, gửi th&ocirc;ng tin bao gồm th&ocirc;ng tin sản phẩm v&agrave; dịch vụ, nếu bạn kh&ocirc;ng c&oacute; dấu hiệu từ chối. Nếu qu&yacute; kh&aacute;ch kh&ocirc;ng muốn nhận bất cứ th&ocirc;ng tin tiếp thị của ch&uacute;ng t&ocirc;i th&igrave; c&oacute; thể từ chối bất cứ l&uacute;c n&agrave;o.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Ch&uacute;ng t&ocirc;i c&oacute; thể chuyển t&ecirc;n v&agrave; địa chỉ cho b&ecirc;n thứ ba để họ giao h&agrave;ng cho bạn (v&iacute; dụ cho b&ecirc;n chuyển ph&aacute;t nhanh hoặc nh&agrave; cung cấp).</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">C&aacute;c khoản thanh to&aacute;n trực tuyến sẽ được xử l&yacute; bởi c&aacute;c đại l&yacute; Mạng lưới Quốc tế của ch&uacute;ng t&ocirc;i. Qu&yacute; kh&aacute;ch chỉ đưa cho ch&uacute;ng t&ocirc;i hoặc Đại l&yacute; hoặc website những th&ocirc;ng tin ch&iacute;nh x&aacute;c, kh&ocirc;ng g&acirc;y nhầm lẫn v&agrave; phải th&ocirc;ng b&aacute;o cho ch&uacute;ng t&ocirc;i nếu c&oacute; thay đổi.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Chi tiết đơn đặt h&agrave;ng của bạn được ch&uacute;ng t&ocirc;i lưu giữ. Qu&yacute; kh&aacute;ch c&oacute; thể tiếp cận th&ocirc;ng tin bằng c&aacute;ch đăng nhập t&agrave;i khoản tr&ecirc;n web. Tại đ&acirc;y, bạn sẽ thấy chi tiết đơn đặt h&agrave;ng của m&igrave;nh, những sản phẩm đ&atilde; nhận v&agrave; những sản phẩm đ&atilde; gửi v&agrave; chi tiết email, ng&acirc;n h&agrave;ng v&agrave; bản tin m&agrave; bạn đặt theo d&otilde;i d&agrave;i hạn. Qu&yacute; kh&aacute;ch cam kết bảo mật dữ liệu c&aacute; nh&acirc;n v&agrave; kh&ocirc;ng được ph&eacute;p tiết lộ cho b&ecirc;n thứ ba. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu bất kỳ tr&aacute;ch nhiệm n&agrave;o cho việc d&ugrave;ng sai mật khẩu nếu đ&acirc;y kh&ocirc;ng phải lỗi của ch&uacute;ng t&ocirc;i.</span></span></span></span></p>\r\n\r\n<h3 style=\"color:#333745; font-style:normal; text-align:start\"><span style=\"font-size:14px\"><strong><span style=\"font-family:Arial\"><span style=\"color:#000000\">Điều lệ kh&aacute;c về th&ocirc;ng tin c&aacute; nh&acirc;n</span></span></strong></span></h3>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Ch&uacute;ng t&ocirc;i c&oacute; thể d&ugrave;ng th&ocirc;ng tin c&aacute; nh&acirc;n của bạn để nghi&ecirc;n cứu thị trường. Chi tiết sẽ được ẩn v&agrave; chỉ được d&ugrave;ng để thống k&ecirc;. Qu&yacute; kh&aacute;ch c&oacute; thể từ chối kh&ocirc;ng tham gia bất cứ l&uacute;c n&agrave;o. Bất kỳ c&acirc;u trả lời cho khảo s&aacute;t hoặc thăm d&ograve; dư luận m&agrave; ch&uacute;ng t&ocirc;i cần bạn l&agrave;m sẽ kh&ocirc;ng được chuyển cho b&ecirc;n thứ ba. Việc cần thiết duy nhất l&agrave; tiết lộ email của bạn nếu bạn muốn tham gia. C&acirc;u trả lời sẽ được lưu t&aacute;ch ri&ecirc;ng với email của bạn.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Bạn sẽ nhận được th&ocirc;ng tin về ch&uacute;ng t&ocirc;i, về website, c&aacute;c website kh&aacute;c, sản phẩm, doanh số b&aacute;n h&agrave;ng, bản tin, bất cứ những g&igrave; li&ecirc;n quan đến c&aacute;c c&ocirc;ng ty nằm trong nh&oacute;m hoặc c&aacute;c đối t&aacute;c kinh doanh. Nếu qu&yacute; kh&aacute;ch kh&ocirc;ng muốn nhận những th&ocirc;ng tin n&agrave;y, vui l&ograve;ng nhấn v&agrave;o link từ chối trong bất kỳ email ch&uacute;ng t&ocirc;i gửi cho bạn. Trong v&ograve;ng 7 ng&agrave;y nhận chỉ dẫn của bạn, ch&uacute;ng t&ocirc;i sẽ ngừng gửi th&ocirc;ng tin. Nếu thấy kh&ocirc;ng r&otilde;, ch&uacute;ng t&ocirc;i sẽ li&ecirc;n lạc với bạn.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Ch&uacute;ng t&ocirc;i sẽ tiếp tục giấu t&ecirc;n dữ liệu người d&ugrave;ng tr&ecirc;n website v&agrave; sử dụng cho nhiều mục đ&iacute;ch kh&aacute;c nhau, bao gồm việc x&aacute;c định vị tr&iacute; của người d&ugrave;ng v&agrave; c&aacute;ch sử dụng c&aacute;c kh&iacute;a cạnh nhất định của website hoặc đường link chứa trong email tới người d&ugrave;ng v&agrave; cung cấp dữ liệu ẩn danh đ&oacute; cho b&ecirc;n thứ 3 l&agrave; nh&agrave; xuất bản. Tuy nhi&ecirc;n, dữ liệu n&agrave;y kh&ocirc;ng c&oacute; khả năng x&aacute;c định c&aacute; nh&acirc;n.</span></span></span></span></p>\r\n\r\n<h3 style=\"color:#333745; font-style:normal; text-align:start\"><strong><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Đối t&aacute;c thứ ba v&agrave; Li&ecirc;n kết</span></span></span></span></strong></h3>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Ch&uacute;ng t&ocirc;i c&oacute; thể chuyển th&ocirc;ng tin của qu&yacute; kh&aacute;ch cho c&aacute;c c&ocirc;ng ty kh&aacute;c trong nh&oacute;m. Ch&uacute;ng t&ocirc;i c&oacute; thể chuyển th&ocirc;ng tin của qu&yacute; kh&aacute;ch cho c&aacute;c đại l&yacute; v&agrave; nh&agrave; thầu phụ trong khu&ocirc;n khổ quy định của Ch&iacute;nh s&aacute;ch bảo mật. V&iacute; dụ: ch&uacute;ng t&ocirc;i sẽ nhờ b&ecirc;n thứ ba giao h&agrave;ng, nhận tiền thanh to&aacute;n, ph&acirc;n t&iacute;ch dữ liệu, tiếp thị v&agrave; hỗ trợ dịch vụ kh&aacute;ch h&agrave;ng. Ch&uacute;ng t&ocirc;i c&oacute; thể trao đổi th&ocirc;ng tin với b&ecirc;n thứ ba với mục đ&iacute;ch chống gian lận v&agrave; giảm rủi ro t&iacute;n dụng. Ch&uacute;ng t&ocirc;i c&oacute; thể chuyển cơ sở dữ liệu gồm th&ocirc;ng tin c&aacute; nh&acirc;n của bạn nếu ch&uacute;ng t&ocirc;i b&aacute;n cả c&ocirc;ng ty hoặc chỉ một phần. Trong khu&ocirc;n khổ Ch&iacute;nh s&aacute;ch bảo mật, ch&uacute;ng t&ocirc;i kh&ocirc;ng b&aacute;n hay tiết lộ dữ liệu c&aacute; nh&acirc;n của bạn cho b&ecirc;n thứ ba m&agrave; kh&ocirc;ng được đồng &yacute; trước trừ khi điều n&agrave;y l&agrave; cần thiết cho c&aacute;c điều khoản trong Ch&iacute;nh s&aacute;ch bảo mật hoặc ch&uacute;ng t&ocirc;i được y&ecirc;u cầu phải l&agrave;m như vậy theo quy định của Ph&aacute;p luật. Website c&oacute; thể bao gồm quảng c&aacute;o của b&ecirc;n thứ ba v&agrave; c&aacute;c li&ecirc;n kết đến c&aacute;c trang web kh&aacute;c hoặc khung của c&aacute;c trang web kh&aacute;c. Xin lưu &yacute; rằng ch&uacute;ng t&ocirc;i kh&ocirc;ng c&oacute; nhiệm vụ bảo mật th&ocirc;ng tin hay nội dung của b&ecirc;n thứ ba hay c&aacute;c website kh&aacute;c, hay bất kỳ b&ecirc;n thứ ba n&agrave;o m&agrave; ch&uacute;ng t&ocirc;i chuyển giao dữ liệu cho ph&ugrave; hợp với Ch&iacute;nh s&aacute;ch bảo mật.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Hệ thống theo d&otilde;i h&agrave;nh vi của kh&aacute;ch h&agrave;ng được ch&uacute;ng t&ocirc;i sử dụng tr&ecirc;n k&ecirc;nh Hiển Thị Quảng C&aacute;o (v&iacute; dụ như b&aacute;o c&aacute;o về nh&acirc;n khẩu, sở th&iacute;ch của kh&aacute;ch h&agrave;ng với c&ocirc;ng cụ Google Analytics...) c&oacute; thể thu thập được c&aacute;c th&ocirc;ng tin như độ tuổi, giới t&iacute;nh, sở th&iacute;ch v&agrave; số lần tương t&aacute;c với số lần xuất hiện của quảng c&aacute;o.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Với t&iacute;nh năng c&agrave;i đặt </span></span></span><a href=\"https://www.google.com/settings/ads\" style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; padding:0px; border:0px; outline:0px; color:#ed145b; text-decoration:none; cursor:pointer; box-sizing:border-box; font-size:16px !important; line-height:24px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">quảng c&aacute;o</span></span></span></a><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">, người d&ugrave;ng hoặc kh&aacute;c h&agrave;ng c&oacute; thể lựa chọn tho&aacute;t ra khỏi t&iacute;nh năng theo d&otilde;i h&agrave;nh vi kh&aacute;ch h&agrave;ng của Google Analytics v&agrave; lựa chọn c&aacute;ch xuất hiện của k&ecirc;nh Hiển Thị Quảng C&aacute;o tr&ecirc;n Google</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#f39c12\">KenShop </span><span style=\"color:#000000\">v&agrave; c&aacute;c nh&agrave; cung cấp b&ecirc;n thứ ba, bao gồm Google, c&oacute; thể sử dụng cookies của Google Analytics để thu thập th&ocirc;ng tin, tối ưu h&oacute;a v&agrave; phục vụ cho mục đ&iacute;ch quảng c&aacute;o dựa tr&ecirc;n lần truy cập website của người d&ugrave;ng trong qu&aacute; khứ.</span></span></span></span></p>\r\n\r\n<h2 style=\"font-style:normal; text-align:start\"><strong><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">2. Sử dụng Cookie</span></span></span></span></strong></h2>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Cookie l&agrave; tập tin văn bản nhỏ c&oacute; thể nhận dạng t&ecirc;n truy cập duy nhất từ m&aacute;y t&iacute;nh của bạn đến m&aacute;y chủ của ch&uacute;ng t&ocirc;i khi bạn truy cập v&agrave;o c&aacute;c trang nhất định tr&ecirc;n website v&agrave; sẽ được lưu bởi tr&igrave;nh duyệt internet l&ecirc;n ổ cứng m&aacute;y t&iacute;nh của bạn. Cookie được d&ugrave;ng để nhận dạng địa chỉ IP, lưu lại thời gian. Ch&uacute;ng t&ocirc;i d&ugrave;ng cookie để tiện cho qu&yacute; kh&aacute;ch v&agrave;o web (v&iacute; dụ: ghi nhớ t&ecirc;n truy cập khi bạn muốn v&agrave;o thay đổi lại giỏ mua h&agrave;ng m&agrave; kh&ocirc;ng cần phải nhập lại địa chỉ email của m&igrave;nh) v&agrave; kh&ocirc;ng đ&ograve;i hỏi bất kỳ th&ocirc;ng tin n&agrave;o về bạn (v&iacute; dụ: mục ti&ecirc;u quảng c&aacute;o). Tr&igrave;nh duyệt của bạn c&oacute; thể được thiết lập kh&ocirc;ng sử dụng cookie nhưng điều n&agrave;y sẽ hạn chế quyền sử dụng của bạn tr&ecirc;n web. Xin vui l&ograve;ng chấp nhận cam kết của ch&uacute;ng t&ocirc;i l&agrave; cookie kh&ocirc;ng bao gồm bất cứ chi tiết c&aacute; nh&acirc;n ri&ecirc;ng tư n&agrave;o v&agrave; an to&agrave;n với virus. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Tr&igrave;nh duyệt n&agrave;y sử dụng Google Analytics, một dịch vụ ph&acirc;n t&iacute;ch web được cung cấp bởi Google, Inc. (&ldquo;Google&rdquo;). Google Analytics d&ugrave;ng cookie, l&agrave; những tập tin văn bản đặt trong m&aacute;y t&iacute;nh để gi&uacute;p website ph&acirc;n t&iacute;ch người d&ugrave;ng v&agrave;o web như thế n&agrave;o. Th&ocirc;ng tin được tổng hợp từ cookie sẽ được truyền tới v&agrave; lưu bởi Google tr&ecirc;n c&aacute;c m&aacute;y chủ tại Hoa Kỳ. Google sẽ d&ugrave;ng th&ocirc;ng tin n&agrave;y để đ&aacute;nh gi&aacute; c&aacute;ch d&ugrave;ng web của bạn, lập b&aacute;o c&aacute;o về c&aacute;c hoạt động tr&ecirc;n web cho c&aacute;c nh&agrave; khai th&aacute;c web v&agrave; cung cấp c&aacute;c dịch vụ kh&aacute;c li&ecirc;n quan đến c&aacute;c hoạt động internet v&agrave; c&aacute;ch d&ugrave;ng internet. Google cũng c&oacute; thể chuyển giao th&ocirc;ng tin n&agrave;y cho b&ecirc;n thứ ba theo y&ecirc;u cầu của ph&aacute;p luật hoặc c&aacute;c b&ecirc;n thứ ba xử l&yacute; th&ocirc;ng tin tr&ecirc;n danh nghĩa của Google. Google sẽ kh&ocirc;ng kết hợp địa chỉ IP của bạn với bất kỳ dữ liệu n&agrave;o kh&aacute;c m&agrave; Google đang giữ. Qu&yacute; kh&aacute;ch c&oacute; thể từ chối d&ugrave;ng cookie bằng c&aacute;ch chọn c&aacute;c thiết lập th&iacute;ch hợp tr&ecirc;n tr&igrave;nh duyệt của m&igrave;nh, tuy nhi&ecirc;n lưu &yacute; rằng điều n&agrave;y sẽ ngăn bạn sử dụng triệt để chức năng của website. Bằng c&aacute;ch sử dụng trang web n&agrave;y, bạn đ&atilde; đồng &yacute; cho Google xử l&yacute; dữ liệu về bạn theo c&aacute;ch thức v&agrave; c&aacute;c mục đ&iacute;ch n&ecirc;u tr&ecirc;n.</span></span></span></span></p>\r\n\r\n<h2 style=\"font-style:normal; text-align:start\"><strong><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">3. Bảo mật </span></span></span></span></strong></h2>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Ch&uacute;ng t&ocirc;i c&oacute; biện ph&aacute;p th&iacute;ch hợp về kỹ thuật v&agrave; an ninh để ngăn chặn truy cập tr&aacute;i ph&eacute;p hoặc tr&aacute;i ph&aacute;p luật hoặc mất m&aacute;t hoặc ti&ecirc;u hủy hoặc thiệt hại cho th&ocirc;ng tin của bạn. Khi thu thập dữ liệu tr&ecirc;n web, ch&uacute;ng t&ocirc;i thu thập chi tiết c&aacute; nh&acirc;n của bạn tr&ecirc;n m&aacute;y chủ an to&agrave;n. Ch&uacute;ng t&ocirc;i d&ugrave;ng tường lửa cho m&aacute;y chủ. Khi thu thập chi tiết c&aacute;c thẻ thanh to&aacute;n điện tử, ch&uacute;ng t&ocirc;i d&ugrave;ng m&atilde; h&oacute;a bằng Se<a href=\"https://www.kosmebox.com/cure/\" style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; padding:0px; border:0px; outline:0px; color:#ed145b; text-decoration:none; cursor:pointer; box-sizing:border-box; font-size:16px !important; line-height:24px !important\" target=\"_self\">cure</a> Socket Layer (SSL). Khi ch&uacute;ng t&ocirc;i kh&ocirc;ng thể bảo đảm an ninh 100%, SSL sẽ g&acirc;y kh&oacute; khăn cho hacker muốn giải m&atilde; th&ocirc;ng tin của qu&yacute; kh&aacute;ch. Bạn kh&ocirc;ng n&ecirc;n gửi đầy đủ chi tiết của thẻ t&iacute;n dụng hay thẻ ghi nợ khi chưa được m&atilde; h&oacute;a cho ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i duy tr&igrave; c&aacute;c biện ph&aacute;p bảo vệ vật l&yacute; v&agrave; điện tử trong mối li&ecirc;n kết với thu thập, lưu trữ v&agrave; tiết lộ th&ocirc;ng tin của bạn. C&aacute;c thủ tục an to&agrave;n của ch&uacute;ng t&ocirc;i nghĩa l&agrave; ch&uacute;ng t&ocirc;i c&oacute; thể đ&ocirc;i khi y&ecirc;u cầu giấy tờ chứng minh trước khi tiết lộ th&ocirc;ng tin c&aacute; nh&acirc;n cho bạn.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Ch&uacute;ng t&ocirc;i khuy&ecirc;n qu&yacute; kh&aacute;ch rằng qu&yacute; kh&aacute;ch kh&ocirc;ng n&ecirc;n đưa th&ocirc;ng tin chi tiết về việc thanh to&aacute;n với bất kỳ ai bằng e-mail, ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm về những mất m&aacute;t qu&yacute; kh&aacute;ch c&oacute; thể g&aacute;nh chịu trong việc trao đổi th&ocirc;ng tin của qu&yacute; kh&aacute;ch qua internet hoặc email.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Qu&yacute; kh&aacute;ch tuyệt đối kh&ocirc;ng sử dụng bất kỳ chương tr&igrave;nh, c&ocirc;ng cụ hay h&igrave;nh thức n&agrave;o kh&aacute;c để can thiệp v&agrave;o hệ thống hay l&agrave;m thay đổi cấu tr&uacute;c dữ liệu. Nghi&ecirc;m cấm việc ph&aacute;t t&aacute;n, truyền b&aacute; hay cổ vũ cho bất kỳ hoạt động n&agrave;o nhằm can thiệp, ph&aacute; hoại hay x&acirc;m nhập v&agrave;o dữ liệu của hệ thống website. Mọi vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước ph&aacute;p luật nếu cần thiết.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Mọi th&ocirc;ng tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan ph&aacute;p luật y&ecirc;u cầu, ch&uacute;ng t&ocirc;i sẽ buộc phải cung cấp những th&ocirc;ng tin n&agrave;y cho c&aacute;c cơ quan ph&aacute;p luật.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">C&aacute;c điều kiện, điều khoản v&agrave; nội dung của trang web n&agrave;y được điều chỉnh bởi luật ph&aacute;p Singapore v&agrave; t&ograve;a &aacute;n Singapore c&oacute; thẩm quyền xem x&eacute;t.</span></span></span></span></p>\r\n\r\n<h2 style=\"font-style:normal; text-align:start\"><strong><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">4. Quyền lợi kh&aacute;ch h&agrave;ng </span></span></span></span></strong></h2>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Qu&yacute; kh&aacute;ch c&oacute; quyền y&ecirc;u cầu truy cập v&agrave;o dữ liệu c&aacute; nh&acirc;n của m&igrave;nh, c&oacute; quyền y&ecirc;u cầu ch&uacute;ng t&ocirc;i sửa lại những sai s&oacute;t trong dữ liệu của bạn m&agrave; kh&ocirc;ng mất ph&iacute;. Bất cứ l&uacute;c n&agrave;o bạn cũng c&oacute; quyền y&ecirc;u cầu ch&uacute;ng t&ocirc;i ngưng sử dụng dữ liệu c&aacute; nh&acirc;n của bạn cho mục đ&iacute;ch tiếp thị.</span></span></span></span></p>\r\n', '2020-07-11 12:21:59', 3),
(5, '<p><span style=\"font-size:20px\">KenShop- Chuy&ecirc;n mỹ phẩm nội địa Nhật Ch&iacute;nh H&atilde;ng</span></p>\r\n', 'Chính Sách Bảo Hành', 'banner_1.jpg', '<p style=\"text-align:start\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Nhằm mang lại trải nghiệm tốt nhất cho qu&yacute; kh&aacute;ch h&agrave;ng khi mua sắm tại trang <a href=\"https://www.hatblack.online/\" style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; padding:0px; border:0px; outline:0px; color:#ed145b; text-decoration:none; cursor:pointer; box-sizing:border-box; font-size:16px !important; line-height:24px !important\" target=\"_blank\">KenShop</a>.com, ch&uacute;ng t&ocirc;i cam kết c&aacute;c sản phẩm mua tại trang <a href=\"https://www.hatblack.online/\" style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; padding:0px; border:0px; outline:0px; color:#ed145b; text-decoration:none; cursor:pointer; box-sizing:border-box; font-size:16px !important; line-height:24px !important\" target=\"_blank\">KenShop</a> sẽ được ho&agrave;n trả trong <strong>7 ng&agrave;y </strong></span></span></span><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">l&agrave;m việc. Ch&uacute;ng t&ocirc;i cam kết h&agrave;ng được giao cho kh&aacute;ch h&agrave;ng l&agrave; h&agrave;ng thật v&agrave; c&ograve;n trong hạn sử dụng (tối thiểu 1 năm). Nếu qu&yacute; kh&aacute;ch ph&aacute;t hiện h&agrave;ng giả hay h&agrave;ng kh&ocirc;ng đ&uacute;ng như trong h&igrave;nh, <a href=\"https://www.hatblack.online/\" style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; padding:0px; border:0px; outline:0px; color:#ed145b; text-decoration:none; cursor:pointer; box-sizing:border-box; font-size:16px !important; line-height:24px !important\" target=\"_blank\">KenShop</a> sẽ ho&agrave;n trả lại to&agrave;n bộ số tiền tr&ecirc;n ho&aacute; đơn thanh to&aacute;n</span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:16px !important\"><span style=\"font-size:15px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\">Khi muốn trả lại h&agrave;ng, qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ số (+84) 378 187 820 hoặc gửi email khiếu nại đến info@KenShop.com k&egrave;m h&igrave;nh ảnh sản phẩm. </span></span></span></span><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"font-family:Arial\">H&agrave;ng trả lại phải bảo đảm l&agrave; h&agrave;ng của <a href=\"https://www.hatblack.online/\" style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; padding:0px; border:0px; outline:0px; color:#ed145b; text-decoration:none; cursor:pointer; box-sizing:border-box; font-size:16px !important; line-height:24px !important\" target=\"_blank\">KenShop</a>, chưa qua sử dụng v&agrave; kh&ocirc;ng bị những lỗi hư hỏng do c&aacute;c yếu tố chủ quan của người sử dụng.</span></span></span></p>\r\n\r\n<div style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; background-color:#f7f7f7; border:0px; box-sizing:border-box; color:#333745; font-family:Tahoma,Geneva,sans-serif; font-size:16px; font-style:normal; font-variant-ligatures:normal; font-weight:400; line-height:24px !important; outline:0px; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; white-space:normal\">&nbsp;</div>\r\n\r\n<div style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; background-color:#f7f7f7; border:0px; box-sizing:border-box; color:#333745; font-family:Tahoma,Geneva,sans-serif; font-size:16px; font-style:normal; font-variant-ligatures:normal; font-weight:400; line-height:24px !important; outline:0px; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; white-space:normal\"><span style=\"font-size:16px !important\"><span style=\"color:#ed145b\"><span style=\"font-size:14px\"><strong>Quy định đổi trả sản phẩm:&nbsp;</strong></span></span></span></div>\r\n\r\n<div style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; background-color:#f7f7f7; border:0px; box-sizing:border-box; color:#333745; font-family:Tahoma,Geneva,sans-serif; font-size:16px; font-style:normal; font-variant-ligatures:normal; font-weight:400; line-height:24px !important; outline:0px; padding:0px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; white-space:normal\">\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"font-family:Arial\">1) Trả do nhu cầu của kh&aacute;ch h&agrave;ng: Sản phẩm phải c&ograve;n nguy&ecirc;n tem, m&aacute;c hay ni&ecirc;m phong của nh&agrave; sản xuất. Kh&aacute;ch h&agrave;ng sẽ chịu chi ph&iacute; vận chuyển khi thu hồi sản phẩm về. </span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"font-family:Arial\">2) Do qu&aacute; tr&igrave;nh vận chuyển v&agrave; đ&oacute;ng g&oacute;i bị lỗi hư hỏng hay giao sai sản phẩm: Sẽ đổi mới 100% trong v&ograve;ng 48h kể từ thời gian nhận h&agrave;ng nếu qu&aacute; 48h th&igrave; kh&ocirc;ng nhận lại sản phẩm bị lỗi. Trước khi ho&agrave;n trả, kh&aacute;ch h&agrave;ng phải chụp h&igrave;nh sản phẩm gởi lại để nắm được t&igrave;nh trạng sản phẩm v&agrave; đưa ra hướng giải quyết tốt nhất. To&agrave;n bộ chi ph&iacute; vận chuyển v&agrave; đổi trả sản phẩm sẽ được miễn ph&iacute;. </span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"font-family:Arial\">3) Do bị k&iacute;ch ứng khi sử dụng sản phẩm: Khi kh&aacute;ch h&agrave;ng sử dụng sản phẩm m&agrave; bị dị ứng hay k&iacute;ch ứng với th&agrave;nh phần n&agrave;o đ&oacute; của sản phẩm th&igrave; sẽ xử l&yacute; tuỳ theo từng trường hợp cụ thể. Kh&aacute;ch h&agrave;ng cần gửi ngay h&igrave;nh ảnh chứng minh da bị k&iacute;ch ứng khi d&ugrave;ng sản phẩm đến địa chỉ <u>info@KenShop.com</u> để ch&uacute;ng t&ocirc;i tư vấn v&agrave; xử l&yacute; kịp thời. </span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"font-family:Arial\">- Nếu đ&oacute; l&agrave; do chất lượng sản phẩm th&igrave; c&ocirc;ng ty chấp nhận đổi trả v&agrave; ho&agrave;n tiền 100% v&ocirc; điều kiện. (KH cần chứng minh l&agrave; đ&atilde; mua v&agrave; d&ugrave;ng qua sản phẩm đ&oacute; trước đ&acirc;y rồi ở chỗ kh&aacute;c) </span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:15px\"><span style=\"color:#000000\"><span style=\"font-family:Arial\">- Nếu đ&oacute; l&agrave; do KH tự &yacute; mua d&ugrave;ng th&igrave; sẽ tuỳ trường hợp m&agrave; ho&agrave;n trả từ 50% đến 80% gi&aacute; trị sản phẩm được mua. Ho&agrave;n trả 50% trong trường hợp l&agrave; KH tự mua sản phẩm kh&ocirc;ng qua tư vấn của nh&acirc;n vi&ecirc;n <a href=\"https://www.hatblack.online/\" style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; padding:0px; border:0px; outline:0px; color:#ed145b; text-decoration:none; cursor:pointer; box-sizing:border-box; font-size:16px !important; line-height:24px !important\" target=\"_blank\">KenShop</a>. Ho&agrave;n trả 80% trong trường hợp c&oacute; phần lỗi của nh&acirc;n vi&ecirc;n <a href=\"https://www.hatblack.online/\" style=\"-webkit-font-smoothing:antialiased; -webkit-tap-highlight-color:transparent; padding:0px; border:0px; outline:0px; color:#ed145b; text-decoration:none; cursor:pointer; box-sizing:border-box; font-size:16px !important; line-height:24px !important\" target=\"_blank\">KenShop</a> khi tư vấn về sản phẩm kh&ocirc;ng ph&ugrave; hợp. </span></span></span></p>\r\n</div>\r\n', '2020-07-11 12:21:59', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `ContactID` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci,
  `Hotline` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`ContactID`, `Content`, `Hotline`, `Email`, `Address`, `Status`) VALUES
(1, 'KenShop- Chuyên mỹ phẩm nội địa Nhật Chính Hãng\nCảm ơn bạn đã quan tâm và ủng hộ shop trong thời gian qua \nNếu có thắc mắc, phản hồi về chất lượng sản phẩm hãy gửi ngay cho Shop\nShop sẽ phản hồi sớm.\nXin trân trọng cảm ơn!', '0378187820', 'kenshopmyphamnhat@gmail.com', 'Sô 18, ngõ 240 Nguyễn Lân, phường Phương Liệt, Thanh Xuân-Hà Nội', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`CustomerID`, `Name`, `Username`, `Email`, `Phone`, `Address`, `Status`) VALUES
(29, 'Nguyễn Thị Mai', '', 'vankhanhtran2702@gmail.com', '0989755444', '', 1),
(30, 'Trần Vân Khánh', 'vankhanh', 'vankhanhtran2702@gmail.com', '0386612870', 'Hà Nội', 1),
(31, 'Trần Vân Khánh', 'vankhanh', 'vankhanhtran2702@gmail.com', '0386612870', 'Hà Nội', 1),
(32, 'Trần Vân Khánh', 'vankhanh', 'vankhanhtran2702@gmail.com', '0386612870', 'Hà Nội', 1),
(33, 'Trần Vân Khánh', 'vankhanh', 'vankhanhtran2702@gmail.com', '0386612870', 'Hà Nội', 1),
(34, 'Trần Vân Khánh', 'vankhanh', 'vankhanhtran2702@gmail.com', '0386612870', 'Hà Nội', 1),
(35, 'nguyen thi lan', '', 'vankhanhtran2702@gmail.com', '0985655536', '', 1),
(36, 'Phạm Văn Tĩnh', '', 'pvtinh01678187820@gmail.com', '0378187820', 'hải hậu', 1),
(37, 'phạm tĩnh', '', 'pvtinh0583104548@gmail.com', '0583104548', 'hải hậu', 1),
(38, 'Nguyễn Thị Nhung', 'nguyennhung3299', 'nguyennhung3299@gmail.com', '0964053230', 'Hà Nội', 1),
(39, 'Nguyễn Thị Nhung', 'nguyennhung3299', 'nguyennhung3299@gmail.com', '0964053230', 'Hà Nội', 1),
(40, 'Nguyễn Thị Đồng', 'dong123', 'dong123@gmail.com', '0983662344', 'Hải Phòng', 1),
(41, '', 'nguyennhung3299', '', '', '', 1),
(42, '', 'ntn3299', '', '', '', 1),
(43, '', 'ntn3299', '', '', '', 1),
(44, '', 'vankhanh', '', '', '', 1),
(45, 'Trần Vân Khánh', 'vankhanh', 'vankhanhtran2702@gmail.com', '0974388336', 'Hà Nội', 1),
(46, 'Trần Vân Khánh', 'vankhanh', 'vankhanhtran2702@gmail.com', '0974388336', 'Hà Nội', 1),
(47, 'Trần Vân Khánh', 'vankhanh', 'vankhanhtran2702@gmail.com', '0974388336', 'Hà Nội', 1),
(48, 'Nguyễn Thị Nhung', 'nguyennhung3299', 'nguyennhung3299@gmail.com', '0964053230', 'Hà Nội', 1),
(49, 'Nguyễn Thị Nhung', 'ntn3299', 'nguyenthinhung3299@gmail.com', '0964053231', 'Ha Noi', 1),
(50, 'Trần Vân Khánh', 'vankhanh', 'vankhanhtran2702@gmail.com', '0974388336', 'Hà Nội', 1),
(51, 'Yên Phan', '', 'phanthiyen3299@gmail.com', '0999999999', 'Hà', 1),
(52, 'Yên Phan', '', 'phanthiyen3299@gmail.com', '0999999999', 'Hà Nội', 1),
(53, 'yen phan', '', 'phanthiyen3299@gmail.com', '0999999999', 'Hà Nội', 1),
(54, 'Nguyễn Văn Tèo', 'teo1234', 'teo1234@gmail.com', '0989998889', 'Hải Dương', 1),
(55, 'Yen', '', 'phanthiyen3299@gmail.com', '0888888888', '', 1),
(56, 'Nguyễn Thị Nhung', 'ntn3299', 'nguyenthinhung3299@gmail.com', '0964053231', 'Ha Noi', 1),
(57, 'nguyễn văn a', '', 'redralogro@gmail.com', '0988999888', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `CreatDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`FeedbackID`, `Name`, `Phone`, `Email`, `Content`, `CreatDate`, `Status`) VALUES
(12, 'nguyễn văn tèo', '0989999999', 'teo1234@gmail.com', 'Sản phẩm shop cung cấp vô cùng chất lượng                    ', '2020-08-07 22:15:37', 0),
(13, 'nguyễn thị nhung', '0964053230', 'nguyenthinhung3299@gmail.com', '                    Cảm ơn shop đã cung cấp các sản phẩm chất lượng đến người dùng\r\n', '2020-08-08 08:23:02', 0),
(14, 'nguyên van a', '0988998888', 'redralogro@gmail.com', 'cam on sho đa cung cap sp chat luong', '2020-08-08 16:26:30', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

CREATE TABLE `footer` (
  `FooterID` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci,
  `Status` tinyint(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `ImageID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`ImageID`, `ProductID`, `Image`, `Description`, `Status`) VALUES
(3, 2, 'pro5.jpg', ' ', 1),
(4, 2, 'pro4.jpg', ' ', 1),
(5, 2, 'pro3.jpg', ' ', 1),
(7, 2, 'pro2.jpg', ' ', 1),
(10, 36, 'pro5.jpg', ' ', 1),
(11, 36, 'pro4.jpg', ' ', 1),
(12, 39, 'product-02.jpg', 'vnvbvcb', 1),
(13, 42, 'product-02.jpg', 'vnvbvcb', 1),
(14, 42, 'product-02.jpg', '', 1),
(15, 43, 'product-02.jpg', '', 1),
(16, 43, 'product-05.jpg', '', 1),
(17, 43, 'product-02.jpg', '', 1),
(18, 44, 'product-06.jpg', '', 1),
(19, 44, 'product-06.jpg', '', 1),
(20, 44, 'product-06.jpg', '', 1),
(21, 47, 'product-02.jpg', '', 1),
(22, 47, 'product-02.jpg', '', 1),
(23, 48, 'product-03.jpg', '...........', 1),
(24, 49, 'product-03.jpg', '...........', 1),
(25, 49, 'product-03.jpg', '...........', 1),
(26, 48, 'product-03.jpg', '...........', 1),
(27, 49, 'product-04.jpg', '...........', 1),
(28, 48, 'product-05.jpg', '...........', 1),
(29, 49, 'product-03.jpg', '...........', 1),
(30, 49, 'product-03.jpg', '...........', 1),
(31, 49, 'product-03.jpg', '...........', 1),
(32, 36, 'pro3.jpg', ' ', 1),
(33, 36, 'pro2.jpg', ' ', 1),
(35, 39, 'product-02.jpg', 'vnvbvcb', 1),
(36, 39, 'product-02.jpg', 'vnvbvcb', 1),
(37, 49, 'pro2.jpg', ' ', 1),
(38, 49, 'pro3.jpg', ' ', 1),
(39, 49, 'pro4.jpg', ' ', 1),
(40, 49, 'pro5.jpg', ' ', 1),
(41, 49, 'pro2.jpg', ' ', 1),
(42, 49, 'pro3.jpg', ' ', 1),
(43, 49, 'pro4.jpg', ' ', 1),
(44, 49, 'pro5.jpg', ' ', 1),
(69, 53, '1595157523pro5.jpg', ' ', 1),
(70, 53, '1595157523pro4.jpg', ' ', 1),
(71, 53, '1595157523pro3.jpg', ' ', 1),
(72, 53, '1595157523pro2.jpg', ' ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logo`
--

CREATE TABLE `logo` (
  `LogoID` int(11) NOT NULL,
  `Image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `logo`
--

INSERT INTO `logo` (`LogoID`, `Image`, `Status`, `Description`) VALUES
(1, '1595240416logo.png', 1, 'Ảnh log nula');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `NewID` int(11) NOT NULL,
  `NewCategoryID` int(11) NOT NULL,
  `Title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NewImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `TopHot` datetime DEFAULT NULL,
  `ViewCount` int(11) DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `new`
--

INSERT INTO `new` (`NewID`, `NewCategoryID`, `Title`, `Description`, `NewImage`, `Detail`, `TopHot`, `ViewCount`, `CreatedDate`, `Status`) VALUES
(9, 12, 'Review Kem Chống Nắng Nâng Tông Da Tự Nhiên Miin Premium Tone Up Sunblock', '<p>Review Kem Chống Nắng&nbsp;N&acirc;ng T&ocirc;ng Da Tự Nhi&ecirc;n Miin Premium Tone Up&nbsp;Sunblock: L&uacute;c nhận h&agrave;ng ngỡ l&agrave; toang, nhưng lại h&oacute;a xịn s&ograve; trong chốc l&aacute;t &nbsp;- L&uacute;c mới nhận h&agrave;ng, trong đầu m&igrave;nh nghĩ l&agrave; toang thật rồi. M&igrave;nh c&ograve;n c&oacute; &yacute; định b.o.m h&agrave;ng nữa cơ đấy. Nhưng ai lại l&agrave;m thế.&nbsp;</p>\r\n', '1596158226Review1.jpg', '<h2><span style=\"font-size:18px\"><a href=\"https://www.kosmebox.com/kem-chong-nang-nang-tong-da-tu-nhien-miin-premium-tone-up-sunblock-spf50-pa.html\"><strong>Review&nbsp;</strong></a><a href=\"https://www.kosmebox.com/kem-chong-nang-nang-tong-da-tu-nhien-miin-premium-tone-up-sunblock-spf50-pa.html\"><strong>Kem Chống Nắng</strong></a><a href=\"https://www.kosmebox.com/kem-chong-nang-nang-tong-da-tu-nhien-miin-premium-tone-up-sunblock-spf50-pa.html\"><strong>&nbsp;N&acirc;ng T&ocirc;ng Da Tự Nhi&ecirc;n Miin Premium Tone Up&nbsp;</strong></a><a href=\"https://www.kosmebox.com/kem-chong-nang-nang-tong-da-tu-nhien-miin-premium-tone-up-sunblock-spf50-pa.html\"><strong>Sunblock</strong></a><a href=\"https://www.kosmebox.com/kem-chong-nang-nang-tong-da-tu-nhien-miin-premium-tone-up-sunblock-spf50-pa.html\"><strong>: L&uacute;c nhận h&agrave;ng ngỡ l&agrave; toang, nhưng lại h&oacute;a xịn s&ograve; trong chốc l&aacute;t</strong></a></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- L&uacute;c mới nhận h&agrave;ng, trong đầu m&igrave;nh nghĩ l&agrave; toang thật rồi. M&igrave;nh c&ograve;n c&oacute; &yacute; định b.o.m h&agrave;ng nữa cơ đấy. Nhưng ai lại l&agrave;m thế. Gi&aacute; cũng rẻ n&ecirc;n th&ocirc;i lấy lu&ocirc;n. Bao b&igrave; em n&oacute; qu&aacute; ch&aacute;n c&aacute;c bạn &agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>Về bao b&igrave; kem chống nắng Miin Premium Tone Up Sunblock H&agrave;n Quốc</strong></span></h3>\r\n\r\n<p>- Bức x&uacute;c qu&aacute;, m&igrave;nh n&oacute;i cụ thể lu&ocirc;n cho c&aacute;c bạn h&igrave;nh dung. Bao b&igrave; của em n&oacute; m&igrave;nh xin ph&eacute;p quy về m&agrave;u trắng đục, thực sự m&igrave;nh kh&ocirc;ng định h&igrave;nh được l&agrave; m&agrave;u g&igrave; nữa đấy. C&aacute;c chi tiết tr&ecirc;n bao b&igrave; của em n&oacute; kh&aacute; mờ nhạt. Điểm cộng duy nhất tr&ecirc;n bao b&igrave; l&agrave; độ b&oacute;ng v&agrave; thiết kế nhỏ gọn với dung t&iacute;ch 50ml. Cũng c&oacute; thể m&igrave;nh kh&oacute; t&iacute;nh. Nhưng cảm nhận ban đầu l&agrave; toang thấy r&otilde;.</p>\r\n\r\n<p><a href=\"https://www.kosmebox.com/kem-chong-nang-nang-tong-da-tu-nhien-miin-premium-tone-up-sunblock-spf50-pa.html\"><img alt=\"Review bao bì Kem Chống Nắng Nâng Tông Da Tự Nhiên Miin Premium Tone Up Sunblock\" src=\"https://www.kosmebox.com/image/data/BLOG/Review-kem-chong-nang-nang-tone-da-tu-nhien-miin-premium-tone-up-sunblock/Review-kem-chong-nang-nang-tone-da-tu-nhien-miin-premium-tone-up-sunblock-3.jpg\" style=\"height:500px; width:500px\" /></a></p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>Chất kem b&ecirc;n trong sản phẩm</strong></span></h3>\r\n\r\n<p>- V&igrave; bức x&uacute;c với bao b&igrave; qu&aacute; n&ecirc;n m&igrave;nh lấy ra x&agrave;i lu&ocirc;n. Chất kem b&ecirc;n trong m&agrave; toang nữa th&igrave; sọt r&aacute;c thẳng tiến bạn nh&eacute;! Nhưng kh&ocirc;ng, cơn thịnh nộ của m&igrave;nh đ&atilde; được xoa dịu. Chất kem đ&uacute;ng kiểu m&igrave;nh th&iacute;ch. N&oacute; c&oacute; m&agrave;u trắng đục, kh&ocirc;ng qu&aacute; đặc v&agrave; cực dễ t&aacute;n khi l&ecirc;n da.</p>\r\n\r\n<p>- Một trong những điểm m&igrave;nh th&iacute;ch nhất ở chất kem chống nắng&nbsp;<strong>Miin Premium Tone Up Sunblock&nbsp;</strong>đ&oacute; l&agrave; thẩm thấu nhanh, kh&ocirc;ng g&acirc;y nhờn r&iacute;t tr&ecirc;n bề mặt da, tạo tr&ecirc;n bề mặt da một lớp kem kh&ocirc; tho&aacute;ng, đ&uacute;ng kiểu m&igrave;nh th&iacute;ch. Đặc biệt chất kem kh&ocirc;ng l&agrave;m b&iacute; da, khi tẩy trang m&igrave;nh cảm nhận da kh&ocirc;ng hề bị kh&ocirc; sau 1 ng&agrave;y sử dụng em n&oacute;.</p>\r\n\r\n<p>- Ngo&agrave;i ra, sản phẩm c&ograve;n gi&uacute;p n&acirc;ng t&ocirc;ng da trắng s&aacute;ng. Khi mới apply l&ecirc;n da, cảm nhận của m&igrave;nh mặt m&igrave;nh trắng hơn thật, nhưng nh&igrave;n kĩ n&oacute; cứ giả giả thế n&agrave;o &yacute;. Nhưng tầm 3 ph&uacute;t, khi chất kem tệp hẳn v&agrave;o da th&igrave; tr&ocirc;ng rất tự nhi&ecirc;n. Da m&igrave;nh s&aacute;ng v&agrave; đều m&agrave;u hơn hẳn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.kosmebox.com/kem-chong-nang-nang-tong-da-tu-nhien-miin-premium-tone-up-sunblock-spf50-pa.html\"><img alt=\"Review chất kem Kem Chống Nắng Nâng Tông Da Tự Nhiên Miin Premium Tone Up Sunblock\" src=\"https://www.kosmebox.com/image/data/BLOG/Review-kem-chong-nang-nang-tone-da-tu-nhien-miin-premium-tone-up-sunblock/Review-kem-chong-nang-nang-tone-da-tu-nhien-miin-premium-tone-up-sunblock-1.jpg\" style=\"height:600px; width:600px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>Tiếp theo m&igrave;nh sẽ review về th&agrave;nh phần của em n&oacute; nh&eacute;!</strong></span></h3>\r\n\r\n<p>- Kem chống nắng<strong>&nbsp;Miin Premium Tone Up Sunblock&nbsp;</strong>theo m&igrave;nh được biết đ&acirc;y l&agrave; một loại kem chống nắng vật l&yacute;. Nh&igrave;n v&agrave;o bảng th&agrave;nh phần m&igrave;nh thấy c&oacute; Titanium dioxide v&agrave; Zinc oxide. Đ&acirc;y l&agrave; 2 th&agrave;nh phần chống nắng vật l&yacute; phổ biến, th&acirc;n thiện với l&agrave;n da, kh&ocirc;ng lo ngại việc k&iacute;ch ứng. Khi xem bảng th&agrave;nh phần, m&igrave;nh kh&ocirc;ng biết hết c&ocirc;ng dụng của n&oacute; l&agrave; g&igrave;, ngo&agrave;i trừ 2 th&agrave;nh phần m&igrave;nh n&oacute;i ở tr&ecirc;n. N&oacute;i chung m&igrave;nh đ&atilde; sử dụng cũng 1 th&aacute;ng nay v&agrave; kh&ocirc;ng bị k&iacute;ch ứng g&igrave;. M&igrave;nh sẽ viết cụ thể bảng th&agrave;nh phần của em n&oacute; dưới đ&acirc;y nh&eacute;!</p>\r\n\r\n<p>- Water, Cyclopentasiloxane, Ethylhexyl Methoxycinnamate, Zinc Oxide, Titanium Dioxide, PEG-10 Dimethicone, 4-Methybenzylidene, Glycerin, Arbutin, Cyclohexasiloxane, Sorbitan Sesquioleate, Magnesium Sulfate, 1,2-Hexanediol, Alumium Hydroxide, Stearic Acid, Methicone, Caprylyl Glycol, Disteardimonium Hectorite, Chlorphenesin, Propylene Carbonate, Triethoxycaprylysilane, Adenosine, BHT, Fragrance.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.kosmebox.com/kem-chong-nang-nang-tong-da-tu-nhien-miin-premium-tone-up-sunblock-spf50-pa.html\"><img alt=\"Review thành phần Kem Chống Nắng Nâng Tông Da Tự Nhiên Miin Premium Tone Up Sunblock\" src=\"https://www.kosmebox.com/image/data/BLOG/Review-kem-chong-nang-nang-tone-da-tu-nhien-miin-premium-tone-up-sunblock/Review-kem-chong-nang-nang-tone-da-tu-nhien-miin-premium-tone-up-sunblock-2.jpg\" style=\"height:600px; width:600px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>Phần quan trọng nhất, m&igrave;nh sẽ review hiệu quả chống nắng</strong></span></h3>\r\n\r\n<p>- N&atilde;y giờ m&igrave;nh c&oacute; vẻ lan man qu&aacute; rồi. Ban đầu mm&igrave;nh t&iacute;nh review hiệu quả chống nắng trước nhưng kh&ocirc;ng biết sao lại lan man qua bao b&igrave;. C&aacute;c bạn th&ocirc;ng cảm nha. Tại kiểu m&igrave;nh bức x&uacute;c c&aacute;i g&igrave; l&agrave; phải n&oacute;i ngay lập tức &yacute;.</p>\r\n\r\n<p>- Về hiệu quả chống nắng th&igrave; m&igrave;nh cho em n&oacute; 9.5/10, với m&igrave;nh th&igrave; em n&oacute; l&agrave;m m&igrave;nh h&agrave;i l&ograve;ng ở hiệu quả chống nắng. M&igrave;nh sử dụng em n&oacute; v&agrave;o mỗi buổi s&aacute;ng trước khi đi l&agrave;m để bảo vệ da khỏi &aacute;nh nắng mặt trời, đến trưa m&igrave;nh lại b&ocirc;i lại 1 lớp mỏng nữa để bảo vệ da khỏi &aacute;nh s&aacute;ng xanh. V&agrave; m&igrave;nh thấy da m&igrave;nh kh&ocirc;ng bị đen đi. Hơn thế, da m&igrave;nh c&ograve;n trắng s&aacute;ng hơn l&uacute;c trước.</p>\r\n\r\n<p>- Theo như th&ocirc;ng tin tr&ecirc;n bao b&igrave; th&igrave; chỉ số chống nắng của&nbsp;<strong>Miin Premium Tone Up Sunblock&nbsp;</strong>l&agrave; SPF50+PA+++. Chỉ số chống nắng kh&aacute; cao, sử dụng để đi chơi biển cũng được lu&ocirc;n. V&igrave; l&agrave; kem chống nắng vật l&yacute; n&ecirc;n n&oacute; cực l&acirc;u tr&ocirc;i, kh&ocirc;ng cần phải b&ocirc;i đi b&ocirc;i lại nhiều lần. Đ&atilde; vậy em n&oacute; c&ograve;n c&oacute; khả năng chống thấm nước v&agrave; mồ h&ocirc;i nữa n&ecirc;n hiệu quả chống nắng sẽ c&agrave;ng tối ưu hơn bạn nh&eacute;!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.kosmebox.com/kem-chong-nang-nang-tong-da-tu-nhien-miin-premium-tone-up-sunblock-spf50-pa.html\"><img alt=\"Review công dụng Kem Chống Nắng Nâng Tông Da Tự Nhiên Miin Premium Tone Up Sunblock\" src=\"https://www.kosmebox.com/image/data/BLOG/Review-kem-chong-nang-nang-tone-da-tu-nhien-miin-premium-tone-up-sunblock/Review-kem-chong-nang-nang-tone-da-tu-nhien-miin-premium-tone-up-sunblock-4.jpg\" style=\"height:750px; width:600px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><span style=\"font-size:16px\"><strong>Hiệu quả n&acirc;ng t&ocirc;ng da trắng s&aacute;ng tự nhi&ecirc;n</strong></span></h3>\r\n\r\n<p>- Đ&uacute;ng như t&ecirc;n gọi<strong>&nbsp;Miin Premium Tone Up Sunblock</strong>, sản phẩm gi&uacute;p n&acirc;ng tone da trắng s&aacute;ng tự nhi&ecirc;n rất thuyết phục. Như m&igrave;nh đ&atilde; n&oacute;i ở b&ecirc;n tr&ecirc;n, khi mới apply l&ecirc;n da, mặt m&igrave;nh trắng rất giả, nhưng tầm 3 ph&uacute;t sau, khi chất kem tệp hẳn v&agrave;o da th&igrave; tr&ocirc;ng rất tự nhi&ecirc;n, nh&igrave;n như da bạn trắng s&aacute;ng tự nhi&ecirc;n, kh&ocirc;ng để lại vệt trắng n&agrave;o. V&agrave; ở chức năng n&agrave;y th&igrave; em n&oacute; đ&atilde; chinh phục m&igrave;nh, tuy l&agrave; l&uacute;c đầu c&oacute; ch&uacute;t lăn tăn ngờ vực.</p>\r\n', NULL, NULL, '2020-07-31 08:17:06', 1),
(10, 14, '4 loại nước tẩy trang The Saem giá rẻ giật mình mà chất lượng xịn sò khiến các chị em cứ phải mua đi mua lạ', '<p>Dưới&nbsp;đ&acirc;y l&agrave; 4 sản phẩm nước tẩy trang The Seam gi&aacute; kh&ocirc;ng qu&aacute; 200k m&agrave; chất lượng lại cực xịn s&ograve;, mọi người tham khảo nh&eacute;!&nbsp; 1/ Nước&nbsp;Tẩy Trang The Saem Healing Tea Garden Green Tea Cleansing Water 300ml Dung t&iacute;ch: 300mlLoại da: D&agrave;nh cho&nbsp;da hỗn hợp, da c&oacute; mụn nhỏ.Gi&aacute; b&aacute;n: 185,000 VNĐ (Cập nhật ng&agrave;y 9/6/2020)&nbsp;Click v&agrave; đặt h&agrave;ng ngay nh&eacute;!Th&agrave;nh Phần:- Tr', '1596159218rev2.jpg', '<p><strong>Dưới&nbsp;đ&acirc;y l&agrave; 4 sản phẩm nước tẩy trang The Seam gi&aacute; kh&ocirc;ng qu&aacute; 200k m&agrave; chất lượng lại cực xịn s&ograve;, mọi người tham khảo nh&eacute;!</strong></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><a href=\"#\"><strong>1/ Nước&nbsp;</strong></a><strong><a href=\"https://www.kosmebox.com/tay-trang/\" target=\"_self\">Tẩy Trang</a></strong><a href=\"https://www.kosmebox.com/duong-da/cac-buoc-duong-da/tay-trang/nuoc-tay-trang-chiet-xuat-tu-tra-xanh-duong-am-cho-da-the-saem-healing-tea-garden-green-tea-cleansing-water-300ml\"><strong>&nbsp;The Saem Healing Tea Garden Green Tea Cleansing Water 300ml</strong></a></h2>\r\n\r\n<p><strong>Dung t&iacute;ch</strong>: 300ml</p>\r\n\r\n<p><strong>Loại da</strong>: D&agrave;nh cho&nbsp;<a href=\"#\" target=\"_self\">da hỗn hợp</a>, da c&oacute; mụn nhỏ.</p>\r\n\r\n<p><strong>Gi&aacute; b&aacute;n:&nbsp;</strong>185,000 VNĐ (Cập nhật ng&agrave;y 9/6/2020)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.kosmebox.com/duong-da/cac-buoc-duong-da/tay-trang/nuoc-tay-trang-chiet-xuat-tu-tra-xanh-duong-am-cho-da-the-saem-healing-tea-garden-green-tea-cleansing-water-300ml\"><img alt=\"4 loại nước tẩy trang The Saem giá rẻ giật mình mà chất lượng xịn sò khiến các chị em cứ phải mua đi mua lại\" src=\"https://www.kosmebox.com/image/data/BLOG/4-lo%E1%BA%A1i-nuoc-tay-trang-the-seam-gia-re-giat-minh/the-saem-healing-tea-garden-green-tea-cleansing-water-300ml-7.jpg\" style=\"height:450px; width:600px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Th&agrave;nh Phần</strong><strong>:</strong></p>\r\n\r\n<p>- Tr&agrave; Xanh (100ppm): chứa Amino axit, c&aacute;c th&agrave;nh phần hiệu quả như Vitamin A/C/E, Tocopherol, Catechin - Gi&uacute;p cấp ẩm cực kỳ tốt.</p>\r\n\r\n<p>- Rau Sam: Cấp ẩm cho da.</p>\r\n\r\n<p>- Hoa Oải Hương: Gi&uacute;p da khỏe mạnh.</p>\r\n\r\n<p>- L&aacute; Hương Thảo: Cấp ẩm v&agrave; gi&uacute;p h&igrave;nh th&agrave;nh lớp m&agrave;ng giữ ẩm.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.kosmebox.com/duong-da/cac-buoc-duong-da/tay-trang/nuoc-tay-trang-chiet-xuat-tu-tra-xanh-duong-am-cho-da-the-saem-healing-tea-garden-green-tea-cleansing-water-300ml\"><img alt=\"4 loại nước tẩy trang The Saem giá rẻ giật mình mà chất lượng xịn sò khiến các chị em cứ phải mua đi mua lại\" src=\"https://www.kosmebox.com/image/data/BLOG/4-lo%E1%BA%A1i-nuoc-tay-trang-the-seam-gia-re-giat-minh/the-saem-healing-tea-garden-green-tea-cleansing-water-300ml-5.jpg\" style=\"height:512px; width:512px\" /></a></p>\r\n\r\n<p><strong>C&ocirc;ng Dụng</strong><strong>:</strong></p>\r\n\r\n<p>- The Saem Healing Tea Garden Green Tea Cleansing Water nhẹ nh&agrave;ng tẩy sạch bụi bẩn, cặn&nbsp;<a href=\"#\" target=\"_self\">trang điểm</a>&nbsp;chỉ trong một bước v&agrave; c&acirc;n bằng da như bạn vừa rửa mặt bằng nước.</p>\r\n\r\n<p>- Th&agrave;nh phần chiết xuất Tr&agrave; Xanh từ huyện Boseung gi&uacute;p h&igrave;nh th&agrave;nh lớp m&agrave;ng giữ ẩm, gi&uacute;p độ ẩm kh&ocirc;ng bị mất đi v&agrave; c&aacute;c th&agrave;nh phần kh&aacute;c như chiết xuất Xương Rồng, Hoa Oải Hương, L&aacute; Hương Thảo, Rau Sam sẽ cấp ẩm v&agrave; giữ da lu&ocirc;n mềm mịn.</p>\r\n\r\n<p>- Sản phẩm an to&agrave;n l&agrave;nh t&iacute;nh, kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><a href=\"#\"><strong>2/ Nước Tẩy Trang The Saem Healing Tea Garden White Tea Cleansing Water 300ml</strong></a></h2>\r\n\r\n<p><strong>Dung t&iacute;ch:&nbsp;</strong>300ml</p>\r\n\r\n<p><strong>Loại da:&nbsp;</strong>Ph&ugrave; hợp với mọi loại da</p>\r\n\r\n<p><strong>Gi&aacute; b&aacute;n:&nbsp;</strong>185,000 VNĐ (Cập nhật ng&agrave;y 9/6/2020)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.kosmebox.com/duong-da/cac-buoc-duong-da/tay-trang/nuoc-tay-trang-lam-sach-da-diu-nhe-chiet-xuat-tra-trang-the-saem-healing-tea-garden-white-tea-cleansing-water-300ml\"><img alt=\"4 loại nước tẩy trang The Saem giá rẻ giật mình mà chất lượng xịn sò khiến các chị em cứ phải mua đi mua lại\" src=\"https://www.kosmebox.com/image/data/BLOG/4-lo%E1%BA%A1i-nuoc-tay-trang-the-seam-gia-re-giat-minh/The-Saem-12.jpg\" style=\"height:600px; width:600px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Th&agrave;nh Phần:</strong></p>\r\n\r\n<p>- Sản phẩm với th&agrave;nh phần chủ yếu l&agrave; chiết xuất tr&agrave; trắng&nbsp;c&oacute; t&aacute;c dụng thần kỳ trong việc dưỡng s&aacute;ng da.</p>\r\n\r\n<p>- Th&agrave;nh phần nước&nbsp;<a href=\"#\" target=\"_self\">tẩy trang</a>&nbsp;kh&ocirc;ng chứa Paraben, chất tạo m&ugrave;i, tạo m&agrave;u, th&agrave;nh phần từ động vật, dầu kho&aacute;ng v&agrave; Benzophenone, đảm bảo an to&agrave;n cho da.</p>\r\n\r\n<p><strong>C&ocirc;ng Dụng:</strong></p>\r\n\r\n<p>- The Saem Healing Tea Garden White Tea Cleansing Water&nbsp;l&agrave; d&ograve;ng sản phẩm chuy&ecirc;n&nbsp;<a href=\"#\" target=\"_self\">tẩy trang</a>, l&agrave;m sạch da tận s&acirc;u lỗ ch&acirc;n l&ocirc;ng, loại bỏ lớp&nbsp;<a href=\"#\" target=\"_self\">trang điểm</a>&nbsp;v&agrave; tế b&agrave;o chết cho l&agrave;n da th&ocirc;ng tho&aacute;ng.</p>\r\n\r\n<p>- Sản phẩm c&oacute; kết cấu dịu nhẹ mang lại hiệu quả&nbsp;<a href=\"#\" target=\"_self\">dưỡng ẩm</a>&nbsp;v&agrave; l&agrave;m dịu da, nu&ocirc;i dưỡng l&agrave;n da s&aacute;ng mịn, đặc biệt đối với l&agrave;n da xỉn, tối m&agrave;u v&agrave; l&atilde;o h&oacute;a.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><a href=\"#\"><strong>3/ Nước&nbsp;</strong></a><strong><a href=\"#\" target=\"_self\">Tẩy Trang</a></strong><a href=\"#\"><strong>&nbsp;The Saem Healing Tea Garden Tea Tree Cleansing Water 300ml</strong></a></h2>\r\n\r\n<p><strong>Dung t&iacute;ch:&nbsp;</strong>300ml</p>\r\n\r\n<p><strong>Loại da:&nbsp;</strong>Ph&ugrave; hợp với mọi loại da, đặc biệt l&agrave; da nhạy cảm</p>\r\n\r\n<p><strong>Gi&aacute; b&aacute;n:&nbsp;</strong>185,000 VNĐ (Cập nhật ng&agrave;y 9/6/2020)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.kosmebox.com/duong-da/cac-buoc-duong-da/tay-trang/nuoc-tay-trang-danh-cho-da-nhay-cam-chiet-xuat-tram-tra-the-saem-healing-tea-garden-tea-tree-cleansing-water-300ml\"><img alt=\"4 loại nước tẩy trang The Saem giá rẻ giật mình mà chất lượng xịn sò khiến các chị em cứ phải mua đi mua lại\" src=\"https://www.kosmebox.com/image/data/BLOG/4-lo%E1%BA%A1i-nuoc-tay-trang-the-seam-gia-re-giat-minh/tay-trang-danh-cho-da-nhay-cam-chiet-xuat-tram-tra-the-saem-healing-tea-garden.jpg\" style=\"height:600px; width:600px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Th&agrave;nh Phần:</strong></p>\r\n\r\n<p>Sản phẩm c&oacute; th&agrave;nh phần ch&iacute;nh từ chiết xuất c&acirc;y tr&agrave;m tr&agrave;, hoa nhung tuyết,...Đặc biệt, sản phẩm kh&ocirc;ng chứa Paraben, chất tạo m&ugrave;i, tạo m&agrave;u nh&acirc;n tạo, dầu kho&aacute;ng,...n&ecirc;n rất an to&agrave;n cho da.</p>\r\n\r\n<p><strong>C&ocirc;ng Dụng:</strong></p>\r\n\r\n<p>- The Saem Healing Tea Garden Tea Tree Cleansing Water&nbsp;c&oacute; c&ocirc;ng dụng ch&iacute;nh l&agrave; loại bỏ ho&agrave;n to&agrave;n c&aacute;c lớp&nbsp;<a href=\"#\" target=\"_self\">trang điểm</a>&nbsp;cứng đầu, b&atilde; nhờn, tế b&agrave;o chết v&agrave; bụi bẩn b&aacute;m tr&ecirc;n da, gi&uacute;p trả lại một l&agrave;n da khỏe khoắn v&agrave; th&ocirc;ng tho&aacute;ng cho người sử dụng.</p>\r\n\r\n<p>- Sản phẩm l&agrave; sự kết hợp tinh tế giữa c&aacute;c&nbsp;<a href=\"#\" target=\"_self\">tinh chất</a>&nbsp;từ thi&ecirc;n nhi&ecirc;n, đặc biệt l&agrave; chiết xuất tr&agrave;m tr&agrave;, kh&ocirc;ng chỉ l&agrave;m sạch m&agrave; c&ograve;n gi&uacute;p l&agrave;m dịu&nbsp;<a href=\"#\" target=\"_self\">da nhạy cảm</a>, kh&aacute;ng khuẩn cho&nbsp;<a href=\"#\" target=\"_self\">da mụn</a>&nbsp;v&agrave; mang lại hương thơm dịu m&aacute;t đầy m&ecirc; hoặc đặc trưng của tinh dầu tr&agrave;m tr&agrave;.</p>\r\n\r\n<p>-&nbsp;Sản phẩm đặc biệt kh&ocirc;ng l&agrave;m kh&ocirc; da, nhưng cũng kh&ocirc;ng để lại cảm gi&aacute;c nhờn d&iacute;nh nặng nề kh&oacute; chịu, sản phẩm sẽ mang đến cho bạn một một l&agrave;n da nhẹ t&ecirc;nh v&agrave; tươi m&aacute;t sau khi sử dụng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><a href=\"https://www.kosmebox.com/duong-da/cac-buoc-duong-da/tay-trang/nuoc-tay-trang-mat-moi-the-saem-healing-tea-garden-green-tea-lip-and-eye-remover-150ml.html\"><strong>4/ Nước&nbsp;</strong></a><strong><a href=\"https://www.kosmebox.com/tay-trang/\" target=\"_self\">Tẩy Trang</a></strong><a href=\"#\"><strong>&nbsp;Mắt M&ocirc;i The SAEM Healing Tea Garden Green Tea Lip &amp; Eye Remover 150ml</strong></a></h2>\r\n\r\n<p><strong>Dung t&iacute;ch:</strong><strong>&nbsp;</strong>150ml</p>\r\n\r\n<p><strong>Loại da:</strong><strong>&nbsp;</strong>Ph&ugrave; hợp với mọi loại da.</p>\r\n\r\n<p><strong>Gi&aacute; b&aacute;n:&nbsp;</strong>150,000 VNĐ (Cập nhật ng&agrave;y 9/6/2020)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.kosmebox.com/duong-da/cac-buoc-duong-da/tay-trang/nuoc-tay-trang-mat-moi-the-saem-healing-tea-garden-green-tea-lip-and-eye-remover-150ml.html\"><img alt=\"4 loại nước tẩy trang The Saem giá rẻ giật mình mà chất lượng xịn sò khiến các chị em cứ phải mua đi mua lại\" src=\"https://www.kosmebox.com/image/data/BLOG/4-lo%E1%BA%A1i-nuoc-tay-trang-the-seam-gia-re-giat-minh/The-SAEM-Healing-Tea-Garden-Green-Tea-Lip-Eye-Remover-150ml-3.jpg\" style=\"height:600px; width:600px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong></p>\r\n\r\n<p>The SAEM Healing Tea Garden Green Tea Lip &amp; Eye Remover&nbsp;chứa 100ppm&nbsp;<a href=\"#\" target=\"_self\">tinh chất</a>&nbsp;Tr&agrave; xanh chống oxy h&oacute;a da. Đồng thời sản phẩm c&ograve;n được chiết xuất từ hoa tr&agrave; Nhật Bản, hoa oải hương v&agrave; chiết xuất c&acirc;y tầm gửi cung cấp những dưỡng chất chăm s&oacute;c l&agrave;n da khỏe mạnh.</p>\r\n\r\n<p>Sản phẩm kh&ocirc;ng chứa sulphate, benzophenone, paraben v&agrave; nguồn nguy&ecirc;n liệu động vật. Cực k&igrave; ph&ugrave; hợp cho những v&ugrave;ng&nbsp;<a href=\"#\" target=\"_self\">da nhạy cảm</a>&nbsp;như mắt m&ocirc;i.</p>\r\n\r\n<p><strong>C&ocirc;ng dụng của sản phẩm:</strong></p>\r\n\r\n<p>- Sản phẩm với khả năng l&agrave;m sạch ho&agrave;n hảo c&aacute;c vết m&agrave;u do kẻ mắt,&nbsp;<a href=\"#\" target=\"_self\">son m&ocirc;i</a>&nbsp;để lại trả lại cho bạn l&agrave;n da cực k&igrave; s&aacute;ng mịn v&agrave; tươi m&aacute;t.</p>\r\n\r\n<p>- Tẩy sạch ho&agrave;n hảo cả những phần Make up Waterproof cứng đầu nhất.</p>\r\n\r\n<p>- Kh&ocirc;ng l&agrave;m kh&ocirc; da nhờ v&agrave;o chiết xuất tr&agrave; xanh mang lại hiệu quả giữ ẩm vượt trội.</p>\r\n\r\n<p>- Hiệu quả l&agrave;m sạch nhanh ch&oacute;ng, đơn giản, kh&ocirc;ng cần thao t&aacute;c mạnh tay hay qu&aacute; nhiều bước cầu k&igrave;.</p>\r\n', NULL, NULL, '2020-07-31 08:33:38', 1),
(11, 13, 'Đừng chờ da xấu rồi mới chăm sóc', '<p>Tại H&agrave;n Quốc &ndash; quốc gia được xem l&agrave; c&oacute; tỷ lệ phụ nữ quan t&acirc;m đến vẻ bề ngo&agrave;i cao nhất ch&acirc;u &Aacute;, cứ 10 phụ nữ được hỏi th&igrave; c&oacute; đến 8 người muốn thay đổi một điều g&igrave; đ&oacute; tr&ecirc;n khu&ocirc;n mặt bằng phẫu thuật thẩm mỹ v&agrave; số c&ograve;n lại th&igrave; kh&ocirc;ng đủ can đảm.</p>\r\n', '1596159497rv4.jpg', '<p>Tại H&agrave;n Quốc &ndash; quốc gia được xem l&agrave; c&oacute; tỷ lệ phụ nữ quan t&acirc;m đến vẻ bề ngo&agrave;i cao nhất ch&acirc;u &Aacute;, cứ 10 phụ nữ được hỏi th&igrave; c&oacute; đến 8 người muốn thay đổi một điều g&igrave; đ&oacute; tr&ecirc;n khu&ocirc;n mặt bằng phẫu thuật thẩm mỹ v&agrave; số c&ograve;n lại th&igrave; kh&ocirc;ng đủ can đảm. Tuy nhi&ecirc;n, kh&ocirc;ng b&agrave;n đến chuyện nhan sắc, phải c&ocirc;ng nhận một điều rằng l&agrave;n da của phụ nữ H&agrave;n thực sự rất đ&aacute;ng ngưỡng mộ. Kh&ocirc;ng chỉ c&oacute; m&agrave;u da trắng như sứ, hầu hết chất da của phụ nữ H&agrave;n c&ograve;n rất trong, mỏng v&agrave; b&oacute;ng nhẹ như những miếng đậu phụ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/Uploaded/myha/2015_06_21/dung-de-da-xau-roi-moi-cham-deponline4.jpg\" /></p>\r\n\r\n<p><em>Những ng&ocirc;i sao H&agrave;n Quốc v&agrave; l&agrave;n da trắng sứ, căng mọng lu&ocirc;n khiến nhiều người phải trầm trồ v&agrave; ngưỡng mộ</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/Uploaded/myha/2015_06_21/dung-de-da-xau-roi-moi-cham-deponline8.jpg\" /></p>\r\n\r\n<p><em>Một l&agrave;n da đẹp sẽ lu&ocirc;n khiến phụ nữ &ldquo;trẻ&rdquo; hơn tuổi thật của m&igrave;nh</em></p>\r\n\r\n<p>B&iacute; quyết dưỡng da th&igrave; nhiều, nhưng hầu hết, phụ nữ H&agrave;n hoặc phụ nữ Nhật Bản đều c&oacute; một điểm chung để c&oacute; được l&agrave;n da đẹp đ&oacute; l&agrave; họ&nbsp;<a href=\"#\"><strong>dưỡng da</strong></a>&nbsp;từ rất sớm. Đ&oacute; l&agrave; l&yacute; do tại sao, phụ nữ H&agrave;n, Nhật thường tr&ocirc;ng trẻ hơn so với tuổi thật của m&igrave;nh v&agrave; trẻ hơn so với ngoại h&igrave;nh của phụ nữ Ch&acirc;u &Aacute; n&oacute;i chung. Họ kh&ocirc;ng bao giờ chờ đến khi da xuống cấp, xuất hiện c&aacute;c biểu hiện như mụn, n&aacute;m, nếp nhăn&hellip; mới t&igrave;m đến c&aacute;c sản phẩm đặc trị. B&iacute; quyết l&agrave;m đẹp xuất ph&aacute;t từ ba yếu tố: chủ động, đ&uacute;ng l&uacute;c v&agrave; ki&ecirc;n tr&igrave;.</p>\r\n\r\n<p><strong>Chủ động</strong></p>\r\n\r\n<p>C&oacute; một c&acirc;u n&oacute;i kh&aacute; hay:&nbsp;<em>&ldquo;Nếu bạn chủ động thực hiện một việc g&igrave; đ&oacute;, thứ bạn nhận được sẽ l&agrave; th&agrave;nh quả chứ kh&ocirc;ng chỉ l&agrave; kết quả&rdquo;.</em>&nbsp;Đối với việc dưỡng da cũng vậy, một người phụ nữ c&oacute; l&agrave;n da đẹp sẽ chủ động t&igrave;m hiểu về loại da v&agrave; c&aacute;c th&ocirc;ng tin sản phẩm để c&oacute; được kế hoạch chăm s&oacute;c th&iacute;ch hợp. V&agrave; một người phụ nữ khi biết được l&agrave;n da m&igrave;nh thực sự cần g&igrave; v&agrave; muốn g&igrave; sẽ kh&ocirc;ng bao giờ dễ d&agrave;ng thử nghiệm tất cả c&aacute;c sản phẩm khi chưa hiểu r&otilde; về th&agrave;nh phần, c&ocirc;ng dụng. Họ c&agrave;ng kh&ocirc;ng thể &nbsp;&ldquo;d&ugrave;ng bừa&rdquo; những m&oacute;n mỹ phẩm kh&ocirc;ng d&agrave;nh cho l&agrave;n da của m&igrave;nh chỉ v&igrave; đ&oacute; l&agrave; m&oacute;n qu&agrave; được tặng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>V&igrave; vậy, trước khi quyết định mua hoặc sử dụng một sản phẩm chăm s&oacute;c da bất kỳ, h&atilde;y tập cho m&igrave;nh th&oacute;i quen t&igrave;m hiểu th&ocirc;ng tin th&agrave;nh phần hoặc đọc một v&agrave;i&nbsp;<a href=\"#\"><strong>review</strong></a>&nbsp;chia sẻ về sản phẩm tr&ecirc;n c&aacute;c tạp ch&iacute;, blog, fanpage, hội l&agrave;m đẹp uy t&iacute;n&hellip; để c&oacute; được c&aacute;i nh&igrave;n tổng quan v&agrave; chắc chắn rằng bạn kh&ocirc;ng bị &ldquo;lầm đường lạc lối&rdquo; giữa một rừng mỹ phẩm hiện nay.&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i ra, h&atilde;y l&agrave; người l&agrave;m đẹp th&ocirc;ng minh v&agrave; lựa chọn sản phẩm th&iacute;ch hợp với loại da của m&igrave;nh, kh&ocirc;ng n&ecirc;n chạy theo xu hướng hay qu&aacute; tin v&agrave;o những lời quảng c&aacute;o, truyền miệng của một số sản phẩm c&oacute; t&aacute;c dụng tức th&igrave;, kh&ocirc;ng r&otilde; nh&atilde;n m&aacute;c, xuất xứ. Những sản phẩm n&agrave;y c&oacute; thể khiến da bạn thay đổi nhanh ch&oacute;ng trong thời gian đầu sử dụng nhưng về l&acirc;u d&agrave;i n&oacute; sẽ l&agrave; con dao hai lưỡi t&agrave;n ph&aacute; l&agrave;n da, khiến da bị phụ thuộc v&agrave; tổn thương nghi&ecirc;m trọng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/Uploaded/myha/2015_06_21/dung-de-da-xau-roi-moi-cham-deponline3.jpg\" /></p>\r\n\r\n<p><em>H&atilde;y sử dụng kem chống nắng mỗi ng&agrave;y để bảo vệ da!</em></p>\r\n\r\n<p>Việc chủ động l&agrave;m đẹp c&ograve;n thể hiện ở việc bạn lu&ocirc;n biết chắc rằng đ&acirc;u l&agrave; một quy tr&igrave;nh chăm s&oacute;c da đ&uacute;ng đắn, kh&ocirc;ng phải chờ đến khi những nốt mụn, t&agrave;n nhang hay nếp nhăn xuất hiện mới cuống cuồng đi t&igrave;m phương ph&aacute;p khắc phục.&nbsp;</p>\r\n\r\n<p>Ngay từ độ tuổi thanh xu&acirc;n, h&atilde;y tập cho m&igrave;nh th&oacute;i quen l&agrave;m sạch v&agrave; dưỡng ẩm cho da mặt đều đặn, chăm tập luyện thể thao, ăn nhiều rau xanh, uống nhiều nước v&agrave; tr&aacute;nh xa c&aacute;c chất k&iacute;ch th&iacute;ch. Ngo&agrave;i ra, nếu bạn kh&ocirc;ng muốn c&aacute;c vết n&aacute;m đồng loạt xuất hiện v&agrave; nở rộ sau tuổi 30 trở đi, th&igrave; đừng d&ugrave;ng kem chống nắng như một phương ph&aacute;p đối ph&oacute; tạm thời khi &ldquo;c&oacute; nắng&rdquo; hoặc chỉ sử dụng trong m&ugrave;a h&egrave; m&agrave; h&atilde;y &ldquo;tự gi&aacute;c&rdquo; biến việc chống nắng trở th&agrave;nh một th&oacute;i quen h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p><strong>Đ&uacute;ng l&uacute;c</strong></p>\r\n\r\n<p>Chăm sớm chăm muộn kh&ocirc;ng bằng chăm đ&uacute;ng l&uacute;c! Một số người thường c&oacute; th&oacute;i quen bỏ b&ecirc; l&agrave;n da v&agrave; chuyện chăm dưỡng th&igrave; l&ecirc;n xuống như cảm x&uacute;c. Liệu bạn c&oacute; thường xuy&ecirc;n l&ecirc;n kế hoạch chăm s&oacute;c l&agrave;n da theo tuần hoặc đều đặn &aacute;p dụng c&aacute;c phương ph&aacute;p dưỡng ẩm, đắp mặt nạ, tẩy da chết v&agrave; x&ocirc;ng hơi&hellip; theo một lộ tr&igrave;nh nhất định kh&ocirc;ng? Nếu c&acirc;u trả lời l&agrave; kh&ocirc;ng th&igrave; c&oacute; lẽ bạn n&ecirc;n ghi nhớ những điều sau đ&acirc;y v&agrave; sẵn s&agrave;ng n&oacute;i &ldquo;c&oacute;&rdquo; cho một kế hoạch chăm s&oacute;c da d&agrave;i hơi:</p>\r\n\r\n<p>&ndash; Việc l&agrave;m sạch da mặt n&ecirc;n được thực hiện 2 lần/ng&agrave;y v&agrave;o buổi s&aacute;ng v&agrave; tối. Buổi s&aacute;ng nếu da kh&ocirc;ng bị tiết qu&aacute; nhiều dầu hoặc da đang gặp c&aacute;c vấn đề như mụn, dị ứng th&igrave; c&oacute; thể thay sữa rửa mặt bằng nước muối hoặc mật ong. Đối với buổi tối, n&ecirc;n tẩy trang trước khi rửa mặt d&ugrave; bạn c&oacute; trang điểm hay kh&ocirc;ng để loại bỏ ho&agrave;n to&agrave;n tạp chất v&agrave; l&agrave;m sạch s&acirc;u da mặt.</p>\r\n\r\n<p>&ndash; Nước hoa hồng hay toner cần được sử dụng ngay sau khi rửa mặt để l&agrave;m c&acirc;n bằng độ pH cho da</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/Uploaded/myha/2015_06_21/dung-de-da-xau-roi-moi-cham-deponline1.jpg\" /></p>\r\n\r\n<p><em>Chăm s&oacute;c da cần c&oacute; một quy tr&igrave;nh nhất định v&agrave; đ&ograve;i hỏi sự tỉ mỉ, tinh tế</em></p>\r\n\r\n<p>&ndash; C&aacute;c bước dưỡng da cơ bản bao gồm: nước hoa hồng &ndash; tinh chất (serum/essence) &ndash; kem dưỡng. Đối với quy tr&igrave;nh chăm s&oacute;c da buổi s&aacute;ng hoặc với những ai c&oacute; l&agrave;n da dầu th&igrave; c&oacute; thể thay thế kem dưỡng bằng c&aacute;c loại gel dưỡng ẩm v&agrave;o ban đ&ecirc;m.</p>\r\n\r\n<p>&ndash; B&ocirc;i kem chống nắng h&agrave;ng ng&agrave;y sau bước dưỡng ẩm v&agrave; trước khi trang điểm</p>\r\n\r\n<p>&ndash; Đắp mặt nạ 2-3 lần/tuần</p>\r\n\r\n<p>&ndash; X&ocirc;ng hơi da mặt 1 lần/tuần</p>\r\n\r\n<p>&ndash; Tẩy da chết 1 lần/tuần</p>\r\n\r\n<p>Lưu &yacute;: Với c&aacute;c phương ph&aacute;p chăm s&oacute;c da mặt đặc biệt như đắp mặt nạ, x&ocirc;ng hơi hoặc tẩy da chết, bạn n&ecirc;n sắp xếp thời gian trong tuần một c&aacute;ch hợp l&yacute; để da mặt c&oacute; thời gian được nghỉ ngơi v&agrave; hạn chế t&aacute;c động qu&aacute; nhiều yếu tố c&ugrave;ng một l&uacute;c, tr&aacute;nh trường hợp da bị tổn thương v&agrave; phản t&aacute;c dụng chăm s&oacute;c.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/Uploaded/myha/2015_06_21/dung-de-da-xau-roi-moi-cham-deponline5.png\" /></p>\r\n\r\n<p><em>25 tuổi l&agrave; độ tuổi bắt đầu xuất hiện c&aacute;c dấu hiệu l&atilde;o h&oacute;a da&nbsp;</em></p>\r\n\r\n<p>Ngo&agrave;i những điều liệt k&ecirc; ở tr&ecirc;n, bạn cũng n&ecirc;n biết 25 tuổi l&agrave; độ tuổi th&iacute;ch hợp để bắt đầu sử dụng c&aacute;c biện ph&aacute;p v&agrave; c&aacute;c sản phẩm chống l&atilde;o h&oacute;a cho da. Nếu sử dụng qu&aacute; sớm, da sẽ bị &ldquo;nhờn&rdquo; với một số chất khiến việc chống l&atilde;o h&oacute;a sau đ&oacute; kh&ocirc;ng c&ograve;n ph&aacute;t huy tối đa t&aacute;c dụng. C&ograve;n nếu để đến khi qu&aacute; muộn mới chăm s&oacute;c th&igrave; c&aacute;c nếp nhăn đ&atilde; c&oacute; đủ thời gian h&igrave;nh th&agrave;nh v&agrave; ăn s&acirc;u v&agrave;o lớp biểu b&igrave; khiến việc điều trị trở n&ecirc;n kh&oacute; khăn v&agrave; mất nhiều thời gian.</p>\r\n\r\n<p>V&agrave; hơn hết, h&atilde;y để &yacute; tới m&ocirc;i trường, thời tiết hay điều kiện sức khỏe để hiểu được khi n&agrave;o da cần cung cấp th&ecirc;m độ ẩm, khi n&agrave;o cần sự nhẹ dịu th&ocirc;ng tho&aacute;ng v&agrave; đ&acirc;u l&agrave; l&uacute;c bổ sung những dưỡng chất để kh&ocirc;i phục sức sống&hellip; Tất cả những điều n&agrave;y phụ thuộc v&agrave;o độ nhạy cảm ri&ecirc;ng của từng người. H&atilde;y sử dụng trực gi&aacute;c v&agrave; học c&aacute;ch lắng nghe, l&agrave;n da sẽ m&aacute;ch bảo bạn đ&acirc;u l&agrave; thời điểm đ&uacute;ng l&uacute;c!</p>\r\n\r\n<p><strong>Ki&ecirc;n tr&igrave;</strong></p>\r\n\r\n<p>Dưỡng da kh&ocirc;ng phải l&agrave; ph&eacute;p m&agrave;u ph&uacute;t chốc, n&oacute; l&agrave; cả một qu&aacute; tr&igrave;nh chăm s&oacute;c m&agrave; bạn phải nỗ lực, ki&ecirc;n tr&igrave; v&agrave; bỏ ra kh&ocirc;ng &iacute;t c&ocirc;ng sức. Đối với mỗi sản phẩm khi mới bắt đầu sử dụng, bạn cần phải trải qua tối thiểu l&agrave; 3 th&aacute;ng mới c&oacute; thể thấy r&otilde; được phần n&agrave;o t&aacute;c dụng v&agrave; mức độ ph&ugrave; hợp đối với l&agrave;n da. Một số d&ograve;ng sản phẩm hay bộ dưỡng<a href=\"#\"><strong>&nbsp;chống l&atilde;o h&oacute;a</strong></a>&nbsp;th&igrave; con số n&agrave;y c&ograve;n l&ecirc;n tới 6 th&aacute;ng cho tới một v&agrave;i năm mới c&oacute; thể kiểm chứng được hiệu quả. V&igrave; vậy, bạn đừng qu&aacute; n&ocirc;n n&oacute;ng khi thử nghiệm một loại mỹ phẩm mới hoặc thay đổi sản phẩm chăm s&oacute;c, v&igrave; những hợp chất n&agrave;y cần c&oacute; thời gian để th&iacute;ch nghi với l&agrave;n da rồi sau đ&oacute; mới từ từ thực hiện c&aacute;c chức năng điều trị v&agrave; đem lại t&aacute;c dụng r&otilde; rệt.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/Uploaded/myha/2015_06_21/dung-de-da-xau-roi-moi-cham-deponline6.jpg\" /></p>\r\n\r\n<p><em>Phải ki&ecirc;n tr&igrave; th&igrave; bạn mới c&oacute; thể thấy được t&aacute;c dụng của việc chăm s&oacute;c da</em></p>\r\n\r\n<p>V&agrave; dĩ nhi&ecirc;n, việc chăm s&oacute;c da h&agrave;ng ng&agrave;y cũng đ&ograve;i hỏi sự tỉ mỉ v&agrave; ki&ecirc;n nhẫn. Bạn kh&ocirc;ng thể bỏ qua một bước dưỡng chỉ v&igrave; kh&ocirc;ng c&oacute; đủ thời gian hay mang nguy&ecirc;n bộ mặt đầy phấn l&ecirc;n giường chỉ v&igrave; qu&aacute; lười v&agrave; buồn ngủ. Ch&iacute;nh những th&oacute;i quen nhỏ sẽ tạo n&ecirc;n một th&agrave;nh quả lớn.&nbsp;</p>\r\n\r\n<p>Khoa học đ&atilde; chứng minh, chỉ cần bạn li&ecirc;n tục lặp lại một điều g&igrave; đ&oacute; trong v&ograve;ng 26 ng&agrave;y trở l&ecirc;n, n&oacute; sẽ biến th&agrave;nh một th&oacute;i quen. Vậy tại sao ch&uacute;ng ta lại kh&ocirc;ng tập cho m&igrave;nh một th&oacute;i quen chăm s&oacute;c da ngay từ b&acirc;y giờ? Bạn c&oacute; thể đẹp hơn nếu thực sự cố gắng, đừng chờ da xấu rồi mới chăm!</p>\r\n', NULL, NULL, '2020-07-31 08:38:17', 1),
(12, 12, 'Giải cứu làn da cháy nắng sau mùa hè bằng những mẹo đơn giản này', '<p>Sau một m&ugrave;a h&egrave; tưng bừng với nắng v&agrave;ng, biển xanh v&agrave; c&aacute;t trắng, l&agrave;n da d&ugrave; được bảo vệ kĩ đến đ&acirc;u cũng kh&oacute; tr&aacute;nh khỏi việc bị ch&aacute;y hay sạm nắng. Những phần da n&agrave;y thường c&oacute; biểu hiện đỏ ửng, bỏng r&aacute;t, bong tr&oacute;c hoặc th&acirc;m sạm hơn hẳn so với những v&ugrave;ng da kh&aacute;c.&nbsp;</p>\r\n', '1596159827rv5.jpg', '<p><strong>L&Agrave;M ĐẸP</strong></p>\r\n\r\n<p><strong>Sau một m&ugrave;a h&egrave; tưng bừng với nắng v&agrave;ng, biển xanh v&agrave; c&aacute;t trắng, l&agrave;n da d&ugrave; được bảo vệ kĩ đến đ&acirc;u cũng kh&oacute; tr&aacute;nh khỏi việc bị ch&aacute;y hay sạm nắng. Những phần da n&agrave;y thường c&oacute; biểu hiện đỏ ửng, bỏng r&aacute;t, bong tr&oacute;c hoặc th&acirc;m sạm hơn hẳn so với những v&ugrave;ng da kh&aacute;c. H&atilde;y c&ugrave;ng giải cứu những v&ugrave;ng da bị ch&aacute;y nắng v&agrave; nu&ocirc;i dưỡng một l&agrave;n da mới trắng mịn bằng c&aacute;c c&ocirc;ng thức cực dễ l&agrave;m sau đ&acirc;y.&nbsp;</strong></p>\r\n\r\n<p><strong>L&agrave;m dịu cảm gi&aacute;c n&oacute;ng r&aacute;t do bỏng da</strong></p>\r\n\r\n<p><strong>1. Nguy&ecirc;n liệu:</strong>&nbsp;<strong>Giấm t&aacute;o v&agrave; tr&agrave; đen</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang-2.jpg\" style=\"height:500px; width:800px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng:</strong>&nbsp;Trong giấm t&aacute;o c&oacute; chứa c&aacute;c th&agrave;nh phần chống vi&ecirc;m v&agrave; l&agrave;m trắng da cực kỳ hiệu quả. C&ograve;n axit tannin đậm đặc trong tr&agrave; đen c&oacute; t&iacute;nh kh&aacute;ng khuẩn gi&uacute;p giảm vi&ecirc;m v&agrave; tấy đỏ.</p>\r\n\r\n<p><strong>Thực hiện</strong>: Bạn h&atilde;y d&ugrave;ng b&ocirc;ng lấy một ch&uacute;t giấm t&aacute;o m&aacute;t b&ocirc;i l&ecirc;n v&ugrave;ng da bị ch&aacute;y nắng, sau đ&oacute; nhẹ nh&agrave;ng đắp t&uacute;i tr&agrave; đ&atilde; ng&acirc;m nước v&agrave; l&agrave;m m&aacute;t l&ecirc;n khu vực n&agrave;y. Thực hiện li&ecirc;n tục cho đến khi v&ugrave;ng da ch&aacute;y nắng kh&ocirc;ng c&ograve;n tấy đỏ nữa.&nbsp;Đối với l&agrave;n da mỏng v&agrave; nhạy cảm, bạn n&ecirc;n pha lo&atilde;ng giấm t&aacute;o với một ch&uacute;t nước m&aacute;t trước khi sử dụng.</p>\r\n\r\n<p><strong>2. Nguy&ecirc;n liệu</strong>:&nbsp;<strong>Một củ khoai t&acirc;y</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang-8.jpg\" style=\"height:630px; width:1200px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng</strong>: Khoai t&acirc;y được biết đến như một nguồn chứa nhiều vitamin A, B1, B2, E c&oacute; t&aacute;c dụng l&agrave;m giảm những t&igrave;nh trạng kh&oacute; chịu tr&ecirc;n da.</p>\r\n\r\n<p><strong>Thực hiện</strong>: Lấy một củ khoai t&acirc;y tươi th&aacute;i mỏng rồi đắp trực tiếp l&ecirc;n những v&ugrave;ng da bị tổn thương. N&oacute; sẽ nhanh ch&oacute;ng cấp ẩm l&agrave;m dịu da, bổ sung c&aacute;c vitamin v&agrave; kho&aacute;ng chất đẩy nhanh tốc độ t&aacute;i tạo của da.</p>\r\n\r\n<p><strong>3. Nguy&ecirc;n liệu</strong>:&nbsp;<strong>Nha đam</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng</strong>: Nha đam (hay c&ograve;n gọi l&agrave; l&ocirc; hội) chứa h&agrave;m lượng lớn c&aacute;c vitamin nh&oacute;m B như B1, B2, B3, B5, B6, B12 n&ecirc;n c&oacute; t&aacute;c dụng t&aacute;i tạo da tổn thương, nu&ocirc;i dưỡng tế b&agrave;o da rất rốt. Sử dụng tinh chất nha đam sẽ l&agrave;m v&ugrave;ng da ch&aacute;y nắng giảm thiểu t&igrave;nh trạng bỏng r&aacute;t, mẫn đỏ.</p>\r\n\r\n<p><strong>Thực hiện</strong>: Trước khi d&ugrave;ng, bạn n&ecirc;n gọt sạch lớp vỏ xanh v&agrave; rửa sạch dưới v&ograve;i nước để l&agrave;m sạch hết lớp nhựa. D&ugrave;ng lớp gel trắng b&ecirc;n trong b&ocirc;i trực tiếp l&ecirc;n da từ 15 đến 25 ph&uacute;t.</p>\r\n\r\n<p><strong>Gi&uacute;p da ch&aacute;y nắng kh&ocirc;ng bị th&acirc;m sạm</strong></p>\r\n\r\n<p><strong>1. Nguy&ecirc;n liệu:</strong>&nbsp;<strong>Dầu olive v&agrave; tinh dầu tr&agrave;m tr&agrave;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang-3.jpg\" style=\"height:500px; width:800px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng:</strong>&nbsp;Trong khi tinh dầu tr&agrave; c&oacute; chứa chất kh&aacute;ng khuẩn, khử tr&ugrave;ng v&agrave; chống vi&ecirc;m, th&igrave; dầu olive c&oacute; khả năng chống vi&ecirc;m v&agrave; l&agrave;m mềm da.</p>\r\n\r\n<p><strong>Thực hiện:</strong>&nbsp;Bạn h&atilde;y nhỏ 5 giọt tinh dầu tr&agrave; v&agrave;o 1 th&igrave;a dầu olive. Sau đ&oacute; d&ugrave;ng b&ocirc;ng thấm dung dịch l&ecirc;n v&ugrave;ng da bị ch&aacute;y nắng.</p>\r\n\r\n<p><strong>2. Nguy&ecirc;n liệu:</strong>&nbsp;<strong>Dưa leo v&agrave; sữa tươi</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang-4.jpg\" style=\"height:500px; width:800px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng:</strong>&nbsp;Dưa leo l&agrave; loại quả chứa chất chống vi&ecirc;m v&agrave; chất dưỡng ẩm đặc biệt nhờ vitamin A, K c&oacute; khả năng nu&ocirc;i dưỡng l&agrave;n da. Dưa leo v&agrave; sữa khi kết hợp sẽ c&oacute; t&aacute;c dụng l&agrave;m trắng da cực kỳ hiệu quả.</p>\r\n\r\n<p><strong>Thực hiện:</strong>&nbsp;Bạn h&atilde;y xay dưa leo với sữa tươi v&agrave; l&agrave;m m&aacute;t hỗn hợp n&agrave;y trước khi sử dụng. Hỗn hợp n&agrave;y sẽ l&agrave;m dịu những v&ugrave;ng da ch&aacute;y nắng v&agrave; gi&uacute;p v&ugrave;ng da n&agrave;y kh&ocirc;ng bị th&acirc;m sạm đi.</p>\r\n\r\n<p><strong>Tẩy da chết v&ugrave;ng da sạm hoặc v&ugrave;ng da bị bong tr&oacute;c do bỏng nắng</strong></p>\r\n\r\n<p><strong>Nguy&ecirc;n liệu</strong>:&nbsp;<strong>Dầu dừa, mật ong v&agrave; đường c&aacute;t</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang-5.jpg\" style=\"height:500px; width:800px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng:</strong>&nbsp;Dầu dừa l&agrave; một loại dầu l&agrave;m mềm da tuyệt vời. Bằng c&aacute;ch kết hợp c&ugrave;ng dầu dừa với đường c&aacute;t, bạn c&oacute; thể loại bỏ tế b&agrave;o chết dư thừa một c&aacute;ch nhẹ nh&agrave;ng, mang lại l&agrave;n da sạch sẽ nhưng v&ocirc; c&ugrave;ng ẩm mịn. Nếu sử dụng thường xuy&ecirc;n, c&ocirc;ng thức tẩy da chết n&agrave;y sẽ đẩy l&ugrave;i những v&ugrave;ng da tối m&agrave;u, mang lại cho bạn một l&agrave;n da trắng s&aacute;ng.</p>\r\n\r\n<p><strong>Thực hiện:</strong>&nbsp;Trộn 4 th&igrave;a dầu dừa với 1 th&igrave;a mật ong, 2 th&igrave;a đường n&acirc;u v&agrave; 2 th&igrave;a đường trắng l&agrave; bạn đ&atilde; c&oacute; một hỗn hợp tẩy da chết dạng sệt. Nhẹ nh&agrave;ng xoa hỗn hợp l&ecirc;n v&ugrave;ng da th&acirc;m sạm v&agrave; để cho da hấp thụ c&aacute;c dưỡng chất trong hỗn hợp khoảng 10 ph&uacute;t rồi xả sạch lại với nước.</p>\r\n\r\n<p><strong>Mặt nạ dưỡng trắng cho v&ugrave;ng da sạm</strong></p>\r\n\r\n<p><strong>1. Nguy&ecirc;n liệu:</strong>&nbsp;<strong>Yến mạch v&agrave; sữa chua</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang-6.jpg\" style=\"height:500px; width:800px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng:&nbsp;</strong>Yến mạch l&agrave; một loại ngũ cốc c&oacute; khả năng l&agrave;m trắng da tuyệt vời, đồng thời l&agrave;m giảm vi&ecirc;m v&agrave; k&iacute;ch ứng da hiệu quả. Sữa chua vẫn được biết đến như một loại thực phẩm gi&uacute;p mang lại l&agrave;n da mịn v&agrave; trắng s&aacute;ng.</p>\r\n\r\n<p><strong>Thực hiện:&nbsp;</strong>Trộn yến mạch được nghiền nhỏ v&agrave; sữa chua kh&ocirc;ng đường với một lượng bằng nhau. Sau đ&oacute; cho th&ecirc;m một ch&uacute;t mật ong v&agrave; trộn đều. L&uacute;c n&agrave;y, bạn đ&atilde; c&oacute; một hỗn hợp mặt nạ gi&uacute;p l&agrave;n da trắng mịn. Sử dụng mặt nạ l&agrave;m trắng da n&agrave;y 2 ng&agrave;y một lần để l&agrave;n da nhanh ch&oacute;ng trắng mịn.</p>\r\n\r\n<p><strong>2. Nguy&ecirc;n liệu</strong>:&nbsp;<strong>Một quả trứng g&agrave;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang-9.jpg\" style=\"height:630px; width:1200px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng</strong>: Trứng g&agrave; rất gi&agrave;u protein, vitamin A v&agrave; c&aacute;c enzim, n&ecirc;n ngo&agrave;i việc chế biến ra những m&oacute;n ăn thơm ngon, bạn c&oacute; thể d&ugrave;ng n&oacute; l&agrave;m dịu những cơn đau r&aacute;t v&agrave; khắc phục những tổn thương do c&aacute;c tia tử ngoại của &aacute;nh nắng g&acirc;y n&ecirc;n.</p>\r\n\r\n<p><strong>C&aacute;ch thực hiện</strong>: T&aacute;ch bỏ l&ograve;ng đỏ v&agrave; lấy l&ograve;ng trắng trứng g&agrave;, sau đ&oacute; d&ugrave;ng phới lồng đ&aacute;nh l&ograve;ng trắng b&ocirc;ng l&ecirc;n rồi lấy b&ocirc;ng g&ograve;n thấm dung dịch thoa đều l&ecirc;n da. Giữ y&ecirc;n mặt nạ khoảng 15 đến 20 ph&uacute;t th&igrave; rửa sạch lại. Sử dụng trứng g&agrave; thường xuy&ecirc;n c&ograve;n gi&uacute;p l&agrave;m trắng, trẻ h&oacute;a da, trị sẹo v&agrave; th&acirc;m n&aacute;m.</p>\r\n\r\n<p><strong>Dưỡng trắng v&ugrave;ng da sạm nắng</strong></p>\r\n\r\n<p><strong>1. Nguy&ecirc;n liệu:</strong>&nbsp;<strong>D&acirc;u t&acirc;y v&agrave; kem tươi</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang-7.jpg\" style=\"height:500px; width:800px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng:</strong>&nbsp;D&acirc;u t&acirc;y c&oacute; axit l&agrave;nh t&iacute;nh đặc trị v&ugrave;ng da th&acirc;m sạm do &aacute;nh nắng. Kem tươi c&oacute; chứa nhiều chất dưỡng ẩm gi&uacute;p da mềm mịn ngay lập tức.</p>\r\n\r\n<p><strong>Thực hiện:</strong>&nbsp;Xay d&acirc;u t&acirc;y v&agrave; kem tươi th&agrave;nh một loại kem mịn. Nhẹ nh&agrave;ng b&ocirc;i một lượng nhỏ l&ecirc;n v&ugrave;ng da cần chăm s&oacute;c.</p>\r\n\r\n<p><strong>2. Nguy&ecirc;n liệu:</strong>&nbsp;<strong>Bột matcha nguy&ecirc;n chất v&agrave; sữa chua</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/07/giai-cuu-lan-da-chay-nang-1.jpg\" style=\"height:500px; width:800px\" /></p>\r\n\r\n<p><strong>T&aacute;c dụng:</strong>&nbsp;Curcumin trong bột tr&agrave; xanh gi&uacute;p l&agrave;m l&agrave;nh vết thương ngo&agrave;i da v&agrave; s&aacute;t khuẩn, được sử dụng nhiều trong việc gi&uacute;p da s&aacute;ng mịn loại bỏ vết th&acirc;m. Tr&agrave; xanh kết hợp với sữa chua sẽ đẩy nhanh t&aacute;c dụng gi&uacute;p l&agrave;n da trở n&ecirc;n căng mịn v&agrave; b&oacute;ng mượt.</p>\r\n\r\n<p><strong>Thực hiện:</strong>&nbsp;Cho bột matcha v&agrave; sữa chua h&ograve;a chung theo tỉ lệ 1:1 (một muỗng c&agrave; ph&ecirc; bột matcha tương đương với một muỗng c&agrave; ph&ecirc; sữa chua). Trộn đều hỗn hợp với nhau v&agrave; ủ lạnh khoảng 10 ph&uacute;t. D&ugrave;ng cọ phết đều l&ecirc;n mặt v&agrave; ở những v&ugrave;ng da bị ch&aacute;y nắng. Để dưỡng chất hấp thụ khoảng từ 15 đến 25 ph&uacute;t sau đ&oacute; rửa sạch bằng nước lạnh. Một tuần sử dụng từ 2 đến 3 lần sẽ khiến l&agrave;n da thay đổi r&otilde; rệt, khắc phục t&igrave;nh trạng bỏng da đồng thời c&ograve;n l&agrave;m đẹp da.</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong><br />\r\n&ndash; Đối với những v&ugrave;ng da bị thương tổn, bạn n&ecirc;n chăm s&oacute;c một c&aacute;ch nhẹ nh&agrave;ng để tr&aacute;nh x&acirc;y xước.<br />\r\n&ndash; Tr&ecirc;n đ&acirc;y l&agrave; những tips chế biến, sử dụng nguy&ecirc;n liệu từ thi&ecirc;n nhi&ecirc;n, n&ecirc;n cần phải ki&ecirc;n tr&igrave; trong một thời gian.<br />\r\n&ndash; Những người c&oacute; tiền sử bị dị ứng với một trong những th&agrave;nh phần tr&ecirc;n h&atilde;y c&acirc;n nhắc kỹ trước khi &aacute;p dụng.<br />\r\n&ndash; Kết hợp với kem chống nắng để hiệu quả điều trị da được tốt hơn.</p>\r\n', NULL, NULL, '2020-07-31 08:43:47', 1);
INSERT INTO `new` (`NewID`, `NewCategoryID`, `Title`, `Description`, `NewImage`, `Detail`, `TopHot`, `ViewCount`, `CreatedDate`, `Status`) VALUES
(13, 13, 'Đây mới chính là sản phẩm dưỡng da trắng mịn được các sao nữ tin yêu trong mùa hè này', '<p>Cứ ngỡ mới nhưng lại quen, sản phẩm kem dưỡng n&agrave;y đ&atilde; khiến giới Beauty Blogger tin d&ugrave;ng từ 2015 với khả năng dưỡng trắng cực hiệu quả v&agrave; sở hữu bảng th&agrave;nh phần an to&agrave;n.&nbsp;</p>\r\n', '1596162382rv6.jpg', '<p><strong>Cứ ngỡ mới nhưng lại quen, sản phẩm kem dưỡng n&agrave;y đ&atilde; khiến giới Beauty Blogger tin d&ugrave;ng từ 2015 với khả năng dưỡng trắng cực hiệu quả v&agrave; sở hữu bảng th&agrave;nh phần an to&agrave;n.&nbsp;</strong></p>\r\n\r\n<p>Đ&oacute; ch&iacute;nh l&agrave; d&ograve;ng sản phẩm Perfect White đến từ nh&agrave; Hada Labo đ&atilde; l&agrave;m mưa l&agrave;m gi&oacute; một thời. Gần đ&acirc;y h&atilde;ng đ&atilde; quyết định cho t&aacute;i xuất trọn bộ d&ograve;ng sản phẩm dưỡng trắng n&agrave;y với bao b&igrave; mới v&agrave; cải tiến về c&ocirc;ng thức, gi&uacute;p mang đến l&agrave;n da vừa s&aacute;ng mịn vừa căng khoẻ.</p>\r\n\r\n<p>Hada Labo Perfect White mang đến 3 cam kết dưỡng trắng &ndash; da khỏe &ndash; sản phẩm an to&agrave;n. Kế thừa từ d&ograve;ng tiền nhiệm, Hada Labo Perfect White c&oacute; khả năng dưỡng trắng hiệu quả với Arbutin tinh khiết chiết xuất từ l&aacute; bearberry, vitamin C v&agrave; khả năng dưỡng ẩm đa tầng nhờ hệ HA độc quyền từ Nhật Bản (kết hợp HA v&agrave; Nano HA) nhằm tối ưu h&oacute;a khả năng cấp nước v&agrave; dưỡng ẩm to&agrave;n diện gi&uacute;p da lu&ocirc;n mướt m&aacute;t, khoẻ đẹp.</p>\r\n\r\n<p>Kh&ocirc;ng những vậy, trong c&ocirc;ng thức Perfect White được bổ sung th&ecirc;m vitamin E gi&uacute;p hỗ trợ khả năng dưỡng trắng, cải thiện c&aacute;c đốm n&acirc;u, l&agrave;m đều m&agrave;u da hiệu quả. C&ugrave;ng với đ&oacute;, chiết xuất hạt &Yacute; Dĩ gi&uacute;p dưỡng da mịn mượt đ&agrave;n hồi l&ecirc;n tr&ocirc;ng thấy.</p>\r\n\r\n<p>Lần t&aacute;i xuất n&agrave;y, Perfect White sở hữu diện mạo mới v&ocirc; c&ugrave;ng bắt mắt. Vẫn theo lối thiết kế tối giản nhưng kh&ocirc;ng k&eacute;m phần chuy&ecirc;n nghiệp, sử dụng t&ocirc;ng xanh chủ đạo c&ugrave;ng h&igrave;nh ảnh giọt nước nổi bật v&agrave; v&ocirc; c&ugrave;ng thu h&uacute;t.</p>\r\n\r\n<p>Ch&iacute;nh v&igrave; thế, Kiều Trinh, Minh Hằng, An Phương, Hạnh Trần,&hellip; đều m&ecirc; mẩn bộ sản phẩm n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/06/hanalabo-1.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<p>Kiều Trinh X&iacute;u sau khi sử dụng c&aacute;c sản phẩm thuộc d&ograve;ng Perfect White phi&ecirc;n bản cải tiến cảm nhận hiệu quả bước đầu rất ưng &yacute; với l&agrave;n da ẩm mịn, mướt m&aacute;t, c&aacute;c đốm n&acirc;u cũng dần cải thiện rất nhanh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/06/hanalabo-2.jpg\" style=\"height:1067px; width:800px\" /></p>\r\n\r\n<p>Minh Hằng th&iacute;ch th&uacute; với lần t&aacute;i xuất n&agrave;y của Perfect White.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/06/hanalabo-3.jpg\" style=\"height:1002px; width:800px\" /></p>\r\n\r\n<p>Beauty blogger An Phương ưng &yacute; với kem dưỡng trắng da ho&agrave;n hảo trong bộ sản phẩm Hada Labo Perfect White. Sử dụng trọn bộ sản phẩm gi&uacute;p c&ocirc; n&agrave;ng tự tin với l&agrave;n da trắng bất chấp nắng h&egrave;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dep.com.vn/wp-content/uploads/2020/06/hanalabo-4.jpg\" style=\"height:1038px; width:800px\" /></p>\r\n\r\n<p>Hạnh Chipp, c&ocirc; mẫu đang được c&aacute;c IG-ers theo d&otilde;i đ&ocirc;ng đảo, khoe d&aacute;ng với bộ sản phẩm Hada Labo Perfect White nhưng cũng kh&ocirc;ng qu&ecirc;n chia sẻ sự y&ecirc;u th&iacute;ch của m&igrave;nh đối với kết quả dưỡng trắng m&agrave; sản phẩm mang lại.</p>\r\n\r\n<p>Để nhanh ch&oacute;ng sở hữu l&agrave;n da trắng mịn, c&aacute;c bạn h&atilde;y nhanh tay sắm ngay cho m&igrave;nh bộ sản phẩm dưỡng da trắng mướt Hada Labo, d&ograve;ng sản phẩm vừa t&aacute;i xuất với c&aacute;c th&agrave;nh phần dưỡng trắng chuy&ecirc;n s&acirc;u, an to&agrave;n cho l&agrave;n da. Tham khảo v&agrave; trải nghiệm ngay chu tr&igrave;nh dưỡng trắng với d&ograve;ng sản phẩm Perfect White từ Hada Labo cho l&agrave;n da trắng mượt, đ&oacute;n h&egrave; rạng rỡ n&agrave;ng nh&eacute;!</p>\r\n\r\n<p>&ndash; Bước 1: L&agrave;m sạch da với Kem rửa mặt dưỡng trắng</p>\r\n\r\n<p>&ndash; Bước 2: Thấm Dung dịch dưỡng trắng ra b&ocirc;ng tẩy trang lau nhẹ hoặc cho sản phẩm ra tay vỗ khắp mặt</p>\r\n\r\n<p>&ndash; Bước 3: Vỗ Sữa dưỡng trắng để da hấp thụ c&aacute;c hoạt chất tốt nhất c&oacute; thể</p>\r\n\r\n<p>&ndash; Bước 4: M&aacute;t xa với Tinh chất dưỡng trắng gi&uacute;p k&iacute;ch th&iacute;ch tuần ho&agrave;n m&aacute;u, cho da căng mịn</p>\r\n\r\n<p>&ndash; Bước 5: Thoa Kem dưỡng trắng nhằm cấp v&agrave; kh&oacute;a ẩm to&agrave;n diện cho l&agrave;n da.</p>\r\n', NULL, NULL, '2020-07-31 09:26:22', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new_category`
--

CREATE TABLE `new_category` (
  `NewCategoryID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MetaTitle` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `new_category`
--

INSERT INTO `new_category` (`NewCategoryID`, `Name`, `MetaTitle`, `CreatedDate`, `Status`) VALUES
(12, 'Chống Nắng', 'Bí quyết chăm sóc da khi ra ngoài ánh nắng', '2020-07-31 08:13:16', 1),
(13, 'Chăm sóc da ', 'Chăm sóc da ', '2020-07-31 08:26:37', 1),
(14, 'Chăm sóc sắc đẹp', 'Chăm sóc về sắc đẹp', '2020-07-31 08:27:01', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `TotalMoney` float NOT NULL,
  `Note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status_order` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`OrderID`, `CustomerID`, `TotalMoney`, `Note`, `CreatedDate`, `UpdateDate`, `Status_order`) VALUES
(16, 29, 2400000, 'Giao hàng trước 9h', '2020-07-03 11:43:43', '2020-07-03 11:43:43', 4),
(17, 30, 900000, '', '2020-07-03 13:40:38', '2020-07-03 13:40:38', 4),
(18, 31, 960000, '', '2020-07-03 15:52:51', '2020-07-03 15:52:51', 4),
(19, 32, 940000, '', '2020-07-03 15:54:33', '2020-07-03 15:54:33', 4),
(20, 33, 960000, '', '2020-07-03 17:35:29', '2020-07-03 17:35:29', 4),
(21, 34, 1920000, '', '2020-07-03 19:17:09', '2020-07-03 19:17:09', 0),
(22, 35, 1620000, '', '2020-07-03 20:26:49', '2020-07-03 20:26:49', 4),
(23, 36, 2060000, 'kcj', '2020-07-11 12:36:16', '2020-07-11 12:36:16', 4),
(24, 37, 3460000, 'ádasd', '2020-07-11 12:39:25', '2020-07-11 12:39:25', 4),
(25, 38, 900000, '', '2020-07-22 22:35:14', '2020-07-22 22:35:14', 4),
(26, 39, 900000, '', '2020-07-22 22:57:46', '2020-07-22 22:57:46', 4),
(27, 40, 400000, 'Giao hàng trước 11h\r\n', '2020-07-24 12:31:05', '2020-07-24 12:31:05', 4),
(28, 41, 200000, '', '2020-07-27 20:43:44', '2020-07-27 20:43:44', 0),
(29, 42, 900000, 'gọi điện tới số điện thoại 0964053230', '2020-07-30 15:32:56', '2020-07-30 15:32:56', 0),
(30, 43, 1000000, '', '2020-07-30 15:37:20', '2020-07-30 15:37:20', 0),
(31, 44, 900000, '', '2020-07-30 15:40:00', '2020-07-30 15:40:00', 0),
(32, 45, 100000, '', '2020-07-30 16:12:20', '2020-07-30 16:12:20', 2),
(33, 46, 4800000, '', '2020-07-30 17:23:51', '2020-07-30 17:23:51', 2),
(34, 47, 1220000, '', '2020-07-30 17:32:34', '2020-07-30 17:32:34', 4),
(35, 48, 1100000, '', '2020-08-07 08:20:30', '2020-08-07 08:20:30', 2),
(36, 49, 2760000, '', '2020-08-07 08:25:41', '2020-08-07 08:25:41', 1),
(37, 50, 1220000, 'giao hàng trước ngày 8/8\r\n', '2020-08-07 09:02:27', '2020-08-07 09:02:27', 2),
(38, 51, 2980000, '', '2020-08-07 11:50:49', '2020-08-07 11:50:49', 0),
(39, 52, 0, '', '2020-08-07 11:50:54', '2020-08-07 11:50:54', 2),
(40, 53, 1850000, '', '2020-08-07 13:49:16', '2020-08-07 13:49:16', 4),
(41, 54, 120000, 'Gọi điện đến số điện thoại 0989898989\r\n', '2020-08-07 21:54:06', '2020-08-07 21:54:06', 4),
(42, 55, 1910000, '', '2020-08-08 15:18:45', '2020-08-08 15:18:45', 1),
(43, 56, 3100000, 'gọi điện thoại tới số 09999999', '2020-08-08 16:21:39', '2020-08-08 16:21:39', 4),
(44, 57, 1910000, '', '2020-08-08 16:23:26', '2020-08-08 16:23:26', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(4) NOT NULL,
  `Total` float NOT NULL,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`OrderID`, `ProductID`, `Price`, `Quantity`, `Total`, `Status`) VALUES
(27, 2, 200000, 2, 400000, 2),
(34, 39, 160000, 2, 320000, 2),
(37, 39, 160000, 2, 320000, 1),
(19, 42, 200000, 2, 400000, 2),
(23, 42, 200000, 1, 200000, 1),
(28, 42, 100000, 2, 200000, 1),
(30, 42, 100000, 1, 100000, 1),
(32, 42, 100000, 1, 100000, 1),
(35, 43, 200000, 1, 200000, 1),
(16, 44, 540000, 1, 540000, 1),
(19, 44, 540000, 1, 540000, 2),
(22, 44, 540000, 3, 1620000, 1),
(16, 47, 960000, 1, 960000, 1),
(18, 47, 960000, 1, 960000, 2),
(20, 47, 960000, 1, 960000, 2),
(21, 47, 960000, 2, 1920000, 1),
(23, 47, 960000, 1, 960000, 1),
(24, 47, 960000, 1, 960000, 1),
(33, 47, 960000, 5, 4800000, 1),
(36, 47, 960000, 1, 960000, 1),
(42, 47, 960000, 1, 960000, 1),
(44, 47, 960000, 1, 960000, 1),
(24, 48, 1600000, 1, 1600000, 1),
(16, 49, 900000, 1, 900000, 1),
(17, 49, 900000, 1, 900000, 2),
(23, 49, 900000, 1, 900000, 1),
(24, 49, 900000, 1, 900000, 1),
(25, 49, 900000, 1, 900000, 2),
(26, 49, 900000, 1, 900000, 2),
(29, 49, 900000, 1, 900000, 1),
(30, 49, 900000, 1, 900000, 1),
(31, 49, 900000, 1, 900000, 1),
(34, 49, 900000, 1, 900000, 1),
(35, 49, 900000, 1, 900000, 1),
(36, 49, 900000, 2, 1800000, 1),
(37, 49, 900000, 1, 900000, 1),
(40, 49, 900000, 1, 900000, 1),
(41, 53, 20000, 6, 120000, 2),
(38, 54, 1080000, 1, 1080000, 1),
(38, 55, 950000, 2, 1900000, 1),
(40, 55, 950000, 1, 950000, 1),
(42, 55, 950000, 1, 950000, 1),
(43, 55, 950000, 2, 1900000, 2),
(44, 55, 950000, 1, 950000, 1),
(43, 56, 1200000, 1, 1200000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `TradeMarkID` int(11) NOT NULL,
  `ProductName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ProductCode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductImage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Price` float NOT NULL,
  `Sale` tinyint(4) NOT NULL DEFAULT '0',
  `PromotionPrice` float NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Detail` text COLLATE utf8_unicode_ci,
  `ViewCount` int(11) DEFAULT NULL,
  `Rate` float(2,1) NOT NULL DEFAULT '0.0',
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductID`, `CategoryID`, `TradeMarkID`, `ProductName`, `ProductCode`, `Description`, `ProductImage`, `Price`, `Sale`, `PromotionPrice`, `Quantity`, `Detail`, `ViewCount`, `Rate`, `CreatedDate`, `Status`) VALUES
(2, 1, 3, 'Sữa rửa mặt ', 'A1102', '<p>Sữa rửa mặt Muji Face Soap Moisture Nhật bản mang tới cho bạn g&aacute;i sự h&agrave;i l&ograve;ng v&agrave; trải nghiệm tuyệt vời về giấc mơ c&oacute; l&agrave;n da sạch, khỏe mạnh v&agrave; kh&ocirc;ng b&oacute;ng nhờn. Bạn g&aacute;i sẽ kh&ocirc;ng cần phải e ngại về th&agrave;nh phần trong sữ', 'pro1.jpg', 200000, 0, 200000, 996, '<p>?-D&ograve;ng sản phẩm chăm s&oacute;c da sử dụng nước kho&aacute;ng thi&ecirc;n nhi&ecirc;n từ đ&aacute; n&uacute;i ở tỉnh Iwate Nhật Bản, Sửa rửa mặt MUJI dịu nhẹ sẽ cung cấp độ ẩm cho l&agrave;n da kh&ocirc; v&agrave; bị hư tổn. Sản phẩm dưỡng ẩm nhẹ nh&agrave;ng m&agrave; kh&ocirc;ng hề g&acirc;y k&iacute;ch ứng kể cả với những l&agrave; da dễ nhạy cảm. ?-D&ograve;ng sản phẩm chăm s&oacute;c da của MUJi c&oacute; một điểm kh&aacute;c biệt so với c&aacute;c sản phẩm kh&aacute;c đ&oacute; l&agrave; được l&agrave;m từ nguồn nước đặc biệt. Chỉ sử dụng nước kho&aacute;ng thi&ecirc;n nhi&ecirc;n chỉ b&aacute;n tại địa phương để tạo n&ecirc;n d&ograve;ng sản phẩm chăm s&oacute;c dưỡng ẩm to&agrave;n diện n&agrave;y. ?-SP kh&ocirc;ng m&ugrave;i , kh&ocirc;ng m&agrave;u,kh&ocirc;ng chứa dầu kho&aacute;ng,t&iacute;nh oxy nhẹ,kh&ocirc;ng chất bảo quản,cồn,đ&atilde; test độ k&iacute;ch ứng da ?-Được chiết xuất ho&agrave;n to&agrave;n từ thi&ecirc;n nhi&ecirc;n ?Cung cấp c&aacute;c th&agrave;nh phần như tinh chất từ hạt bưởi, tinh chất rau sam chứa th&agrave;nh phần bảo vệ da, Polyquaternium-51 c&oacute; hiệu quả dưỡng ẩm cao v&agrave; đặc biệt chứa dưỡng chất hyaluronic acid gi&uacute;p l&agrave;n da được phục hồi, cải thiện t&igrave;nh trạng da bị kh&ocirc; v&agrave; hư tổn. ??? *Face soap (Tu&yacute;p trắng) sữa rửa mặt d&ograve;ng dịu nhẹ, th&iacute;ch hợp với cả l&agrave;n da nhạy cảm nhất. Ph&ugrave; hợp với da dầu, da hỗn hợp. ???Sản phẩm kh&ocirc;ng chứa hương liệu, m&agrave;u nh&acirc;n tạo, kh&ocirc;ng chứa cồn hay mineral oil, PH c&acirc;n bằng ???- Hướng dẫn sử dụng: ?Lấy một lượng sữa rửa mặt vừa phải ra l&ograve;ng b&agrave;n tay. ?Th&ecirc;m một ch&uacute;t nước d&ugrave;ng tay đ&aacute;nh để tạo bọt. Xoa bọt mềm l&ecirc;n khắp mặt v&agrave; matxa nhẹ, sau đ&oacute; rửa sạch với nước</p>\r\n', 1, 5.0, '2020-06-24 19:00:53', 1),
(36, 1, 3, 'Sữa rửa mặt Muji Face', 'A1336', '<p>Sữa rửa mặt Muji Face</p>\r\n', 'pro1.jpg', 200000, 0, 200000, 20, '<p>Sữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji Face</p>\r\n', 0, 0.0, '2020-06-26 15:51:54', 1),
(39, 1, 3, 'Sữa rửa mặt Muji Face', 'A1339', '<p>Sữa rửa mặt Muji Face</p>\r\n', 'product-02.jpg', 200000, 20, 160000, 28, '<p>Sữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji Face</p>\r\n', 1, 4.0, '2020-06-26 15:52:28', 2),
(42, 1, 3, 'Sữa rửa mặt Muji Face', 'A1342', 'Sữa rửa mặt Muji Face', 'product-02.jpg', 200000, 50, 100000, 45, 'Sữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji Face', 1, 3.0, '2020-06-26 15:52:53', 2),
(43, 1, 1, 'Sữa rửa mặt Muji Face', 'A1143', 'Sữa rửa mặt Muji Face', 'product-07.jpg', 200000, 50, 200000, 80, 'Sữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji FaceSữa rửa mặt Muji Face', 0, 0.0, '2020-06-26 15:53:06', 1),
(44, 3, 3, 'Kem chống nắng\r\nAnthelios Pocket SPF50', 'A3344', 'Kem chống nắng dành cho da thường & da khô nhạy cảm. Độ bảo vệ cao SPF 50+', 'product-06.jpg', 600000, 10, 540000, 0, 'Kem chống nắng dành cho da nhạy cảm, đặc biệt là những làn da cực kỳ nhạy cảm với ánh nắng mặt trời, với độ bảo vệ cao SPF 50+, bảo vệ da trước những tác hại từ ánh nắng & ô nhiễm: lão hóa sớm, đốm nâu, kích ứng ánh nắng.\r\n\r\n\r\nCông nghệ độc quyền XL-PROTECT chống nắng tối ưu, bảo vệ da trước tia UVA-UVB, tia hồng ngoại & tác hại từ ô nhiễm, kết hợp với nước khoáng La Roche-Posay giúp làm dịu và chống oxy hoá.\r\nGồm nhiều màng lọc tia UV có quang phổ rộng giúp bảo vệ da trước ngay cả tia UVA dài\r\nBảo vệ da trước những tác hại từ ánh nắng & ô nhiễm: lão hóa sớm, đốm nâu, nám, kích ứng ánh nắng\r\nKích thước 30ml nhỏ gọn, thiết kế nắp bật tiện lợi, nhỏ gọn dễ dàng bỏ vào túi.\r\nCÔNG DỤNG\r\nDa được bảo vệ tối ưu khỏi tia UVA, UVB, tia hồng ngoại & tác hại từ ô nhiễm.\r\nKhô thoáng tức thì nhưng không làm quá khô bề mặt da.\r\nKhông để lại vệt trắng, không gây kích ứng da\r\nC', 1, 5.0, '2020-06-26 15:53:11', 2),
(47, 1, 2, 'Kem dưỡng giảm mụn\r\nEffaclar DUO (+)', 'A1247', 'Sp có tác dụng cung cấp các chất giúp làn da phục hồi trở lên sáng mịn và căng tràn sức sống', 'product-02.jpg', 1200000, 20, 960000, 27, 'Sp có tác dụng cung cấp các chất giúp làn da phục hồi trở lên sáng mịn và căng tràn sức sống\r\nThành phần của sp bao gồm: .....\r\nTrong đó: ...\r\nHướng dẫn: ...', 2, 4.5, '2020-06-29 02:50:25', 2),
(48, 2, 2, 'Kem dưỡng da Toleriane Sensitive Creme', 'A2248', 'Sp có tác dụng cung cấp các chất giúp làn da phục hồi trở lên sáng mịn và căng tràn sức sống', 'product-03.jpg', 2000000, 20, 1600000, 59, 'Sp có tác dụng cung cấp các chất giúp làn da phục hồi trở lên sáng mịn và căng tràn sức sống\r\nThành phần của sp bao gồm: .....\r\nTrong đó: ...\r\nHướng dẫn: ...', 0, 0.0, '2020-06-29 02:52:20', 1),
(49, 3, 2, 'Kem chống nắng cơ thể Anthelios XL Lotion', 'A3200', 'Kem chống nắng dạng sữa dành cho cơ thể. Độ bảo vệ cao SPF 50+\r\n', 'product-04.jpg', 1000000, 10, 900000, 42, 'Kem chống nắng dạng sữa dành cho cơ thể Anthelios XL Lotion SPF 50+ UVB & UV với màng lọc MEXOPLEX® độc quyền, giúp chống nắng, ngăn ngừa tia UVB & UVA gây tác hại lên da như bỏng rát, kích ứng với ánh nắng (mẩn đỏ, ngứa) & lão hoá da do tia UV (sạm nám, đốm nâu, nếp nhăn, da chảy xệ)\r\nDành cho da nhạy cảm & dễ kích ứng với ánh nắng', 4, 4.5, '2020-06-29 09:40:25', 2),
(50, 2, 2, 'Kem dưỡng da Toleriane Sensitive Creme', 'A2248', 'Sp có tác dụng cung cấp các chất giúp làn da phục hồi trở lên sáng mịn và căng tràn sức sống', 'product-03.jpg', 2000000, 20, 1600000, 59, 'Sp có tác dụng cung cấp các chất giúp làn da phục hồi trở lên sáng mịn và căng tràn sức sống\r\nThành phần của sp bao gồm: .....\r\nTrong đó: ...\r\nHướng dẫn: ...', 0, 0.0, '2020-06-29 02:52:20', 1),
(53, 1, 1, 'Sữa rửa mặt Muji Face ', 'A11', '<p>Kem dưỡng da Toleriane Sensitive CremeKem dưỡng da Toleriane Sensitive CremeKem dưỡng da Toleriane Sensitive CremeKem dưỡng da Toleriane Sensitive CremeKem dưỡng da Toleriane Sensitive Creme</p>\r\n', '1595157523pro1.jpg', 20000, 0, 20000, 19994, '<p>Kem dưỡng da Toleriane Sensitive CremeKem dưỡng da Toleriane Sensitive CremeKem dưỡng da Toleriane Sensitive CremeKem dưỡng da Toleriane Sensitive CremeKem dưỡng da Toleriane Sensitive Creme</p>\r\n', 1, 4.0, '2020-07-19 16:37:01', 1),
(54, 75, 3, 'Kem chống nắng Kosé', 'B1132', '<p>Kem chống nắng to&agrave;n th&acirc;n&nbsp;Kos&eacute;</p>\r\n', '15961190681595151391pro3.jpg', 1200000, 10, 1080000, 50, '<p><u><strong>Kem chống nắng to&agrave;n th&acirc;n&nbsp;Kos&eacute;&nbsp;</strong></u>gi&uacute;p bảo vệ l&agrave;n da khỏi c&aacute;c t&aacute;c hại từ m&ocirc;i trường đồng thời dưỡng da......</p>\r\n\r\n<p>Thể t&iacute;ch: 160ml</p>\r\n\r\n<p>Sản phẩm kiềm dầu tốt</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, 0.0, '2020-07-30 21:24:28', 2),
(55, 75, 1, 'Bình xịt chống nắng', 'B11224', '<p>B&igrave;nh xịt chống nắng Shisedo</p>\r\n', '15961192641595427970product-06.jpg', 1000000, 5, 950000, 147, '<p>B&igrave;nh xịt chống nắng Shisedo tiện lơi, dung t&iacute;ch 150ml gọn nhẹ tiện mang theo,......</p>\r\n', 1, 5.0, '2020-07-30 21:27:44', 2),
(56, 75, 2, 'kem chống nắng 2', 'A1134', '<p>kem chống nắng 2 fggfhf</p>\r\n', '1596812570product-06.jpg', 1200000, 0, 1200000, 49, '<p><strong>hjjh&aacute;hdfgsdhgaaaaa</strong></p>\r\n', NULL, 0.0, '2020-08-07 22:02:50', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

CREATE TABLE `product_category` (
  `CategoryID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MetaTitle` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`CategoryID`, `Name`, `MetaTitle`, `CreatedDate`, `Status`) VALUES
(1, 'Chăm sóc da mặt', 'Chuyên mục dành cho các sản phẩm về mỹ phẩm chăm sóc da mặt', '2020-06-24 18:31:37', 1),
(2, 'Chăm sóc cơ thể', 'Chuyên mục dành cho các sản phẩm về dược mỹ phẩm chăm sóc cơ thể', '2020-06-29 02:44:50', 1),
(3, 'Chống nắng new', 'Chuyên mục dành cho các sản phẩm chống năng', '2020-06-29 09:28:01', 1),
(75, 'Chống nắng', 'ábdhfd', '2020-07-16 19:31:54', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

CREATE TABLE `rate` (
  `CustomerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `RatePoint` int(2) NOT NULL DEFAULT '0',
  `Summary` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Comment` text COLLATE utf8_unicode_ci NOT NULL,
  `DateCreate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rate`
--

INSERT INTO `rate` (`CustomerID`, `ProductID`, `RatePoint`, `Summary`, `Comment`, `DateCreate`, `Status`) VALUES
(29, 49, 5, 'Giao hàng nhanh', 'Hôm qua đặt, nay tôi đã nhận được sản phẩm', '2020-07-03 11:51:26', 1),
(30, 49, 4, 'Sản phẩm đóng gói đẹp và cẩn thận', 'Sản phẩm đóng gói đẹp và cẩn thận', '2020-07-03 15:45:12', 1),
(31, 47, 5, 'Chất lượng sản phẩm tuyệt vời', 'Chất lượng sản phẩm tuyệt vời', '2020-07-03 16:01:08', 1),
(32, 42, 3, 'Giao hàng chậm', 'Giao hàng chậm', '2020-07-03 17:32:39', 1),
(32, 44, 5, 'Chất lượng sản phẩm tuyệt vời', 'Chất lượng sản phẩm tuyệt vời', '2020-07-03 17:34:03', 1),
(33, 47, 4, '', 'Giao hàng nhanh', '2020-07-03 19:20:31', 1),
(38, 49, 4, '', 'Sản phẩm đóng gói đẹp và cẩn thận\r\nGiao hàng nhanh', '2020-07-22 22:57:16', 1),
(39, 49, 5, '', 'rteỷyt', '2020-07-27 20:48:05', 1),
(40, 2, 5, 'Sản phẩm đóng gói đẹp và cẩn thận', 'Sản phẩm đóng gói đẹp và cẩn thận', '2020-07-24 12:51:54', 1),
(47, 39, 4, 'Giao hàng nhanh', 'giao hàng nhanh', '2020-07-30 21:11:47', 1),
(54, 53, 4, 'Giao hàng nhanh', 'Giao hàng nhanh', '2020-08-07 22:13:57', 1),
(56, 55, 5, 'aaaa', 'giao hàng nhanh', '2020-08-08 16:30:06', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `SlideID` int(11) NOT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`SlideID`, `Image`, `Description`, `CreatedDate`, `Status`) VALUES
(1, '15968718421596164286banner.png', 'Item1', '2020-07-11 12:29:54', 1),
(2, '159687171315952387481595238231banner-1.jpg', 'item2', '2020-07-11 12:29:54', 1),
(3, '1596164286banner.PNG', 'Item3', '2020-07-11 12:29:54', 1),
(7, 'promotion-banner-1.jpg', NULL, '2020-07-11 12:29:54', 2),
(8, '1595239105promotion-banner-2.jpg', '', '2020-07-11 12:29:54', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trademark`
--

CREATE TABLE `trademark` (
  `TradeMarkID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MetaTitle` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trademark`
--

INSERT INTO `trademark` (`TradeMarkID`, `Name`, `MetaTitle`, `Status`) VALUES
(1, 'Shisedo', 'Mỹ phẩm Nhật Bản ở Việt Nam rất được yêu thích vì chất lượng cao và đa dạng. Ngoài ra về giá cả cũng phù hợp với thu nhập của phần lớn người dùng mỹ phẩm. Các dòng mỹ phẩm đến từ nước Nhật Bản nổi tiếng đều lành tình với da, chiết xuất từ thiên nhiên', 1),
(2, 'SK-II', 'Mỹ phẩm Nhật Bản ở Việt Nam rất được yêu thích vì chất lượng cao và đa dạng. Ngoài ra về giá cả cũng phù hợp với thu nhập của phần lớn người dùng mỹ phẩm. Các dòng mỹ phẩm đến từ nước Nhật Bản nổi tiếng đều lành tình với da, chiết xuất từ thiên nhiên', 1),
(3, 'Kosé', 'Kosé là một trong 3 thương hiệu mỹ phẩm Nhật nổi tiếng nhất hiện nay. Số lượng sản phẩm tiêu thụ hằng năm cực kỳ lớn. Thương hiệu Kosé có mặt trên thị trường mỹ phẩm Nhật Bản từ năm 1946. Các sản phẩm của Kosé nổi tiếng lành tính, được sản xuất từ nh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreatedBy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(10) NOT NULL DEFAULT '1',
  `Stt` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`, `FirstName`, `LastName`, `Address`, `Email`, `Phone`, `CreatedDate`, `CreatedBy`, `Status`, `Stt`) VALUES
(4, 'nguyennhung3299', '58f35e4cd8cb7d1392b18c856f2c3ff5', 'Nguyễn Thị', 'Nhung', 'Hà Nội', 'nguyennhung3299@gmail.com', '0964053230', '2020-06-29 22:51:28', 'nguyennhung3299', 3, 1),
(32, 'Pvtinh044', '1561427b511f8345389ede8472bfc852', 'Phạm', 'Tĩnh', 'Hải hậu', 'pvtinh01678187820@gmail.com', '0378187820', '2020-07-11 12:31:34', '', 3, 1),
(42, 'dong123', '6201161aeabf95940ee7330bbe64f519', 'Nguyễn Thị', 'Đồng', 'Hải Phòng', 'dong123@gmail.com', '0983662344', '2020-07-24 12:30:38', 'dong123', 1, 1),
(43, 'teo123', '7e8b07800ef8b0511ddaa3a632be87da', 'Nguyễn Văn', 'Tèo', 'Hải Dương', 'teo123@gmail.com', '0989898989', '2020-07-27 20:23:46', 'teo123', 1, 1),
(44, 'ntn3299', '29e6fe3b2f45e49793361a558290fe2a', 'Nguyễn Thị', 'Nhung', 'Ha Noi', 'nguyenthinhung3299@gmail.com', '0964053231', '2020-07-30 15:32:13', 'ntn3299', 2, 1),
(46, 'teo1234', 'cc3b7d904b113d8f3f228069ef9ecb84', 'Nguyễn Văn', 'Tèo', 'Hải Phòng', 'teo1234@gmail.com', '0989998889', '2020-08-07 21:53:20', 'teo1234', 1, 1),
(47, 'vanluong123', '5fff6a6eba6c13223d88eb691a718879', 'Lê Văn', 'Lương', 'vanluong123', 'vanluong123@gmail.com', '0977888999', '2020-08-08 09:16:54', 'nguyennhung3299', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`AboutID`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactID`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `fk_customer_rate` (`CustomerID`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackID`);

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`FooterID`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ImageID`),
  ADD KEY `fk_product_image` (`ProductID`);

--
-- Chỉ mục cho bảng `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`LogoID`);

--
-- Chỉ mục cho bảng `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`NewID`),
  ADD KEY `fk_newcategory_new` (`NewCategoryID`);

--
-- Chỉ mục cho bảng `new_category`
--
ALTER TABLE `new_category`
  ADD PRIMARY KEY (`NewCategoryID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `order_ibfk_1` (`CustomerID`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ProductID`,`OrderID`) USING BTREE,
  ADD KEY `order_detail_ibfk_1` (`ProductID`),
  ADD KEY `order_detail_ibfk_2` (`OrderID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `fk_product_category` (`CategoryID`),
  ADD KEY `fk_trademark_product` (`TradeMarkID`) USING BTREE;

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`CategoryID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Chỉ mục cho bảng `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`CustomerID`,`ProductID`),
  ADD KEY `fk` (`CustomerID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`SlideID`);

--
-- Chỉ mục cho bảng `trademark`
--
ALTER TABLE `trademark`
  ADD PRIMARY KEY (`TradeMarkID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `AboutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `footer`
--
ALTER TABLE `footer`
  MODIFY `FooterID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `logo`
--
ALTER TABLE `logo`
  MODIFY `LogoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `NewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `new_category`
--
ALTER TABLE `new_category`
  MODIFY `NewCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `product_category`
--
ALTER TABLE `product_category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `SlideID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `trademark`
--
ALTER TABLE `trademark`
  MODIFY `TradeMarkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_product_image` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `new`
--
ALTER TABLE `new`
  ADD CONSTRAINT `fk_newcategory_new` FOREIGN KEY (`NewCategoryID`) REFERENCES `new_category` (`NewCategoryID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`OrderID`) REFERENCES `order` (`OrderID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`CategoryID`) REFERENCES `product_category` (`CategoryID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`TradeMarkID`) REFERENCES `trademark` (`TradeMarkID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
