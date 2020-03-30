-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 03:11 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bai4json`
--

-- --------------------------------------------------------

--
-- Table structure for table `homepageattr`
--

CREATE TABLE `homepageattr` (
  `id` int(11) NOT NULL,
  `attr_name` varchar(255) NOT NULL,
  `attr_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepageattr`
--

INSERT INTO `homepageattr` (`id`, `attr_name`, `attr_value`) VALUES
(1, 'sliders_topbanner', '[{\"title\":\"title 1\",\"description\":\"Desription 1\",\"btnLink\":\"Button Link 1\",\"btnText\":\"Button Text 1\",\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/5.png\"},{\"title\":\"Title 2\",\"description\":\"Desription2\",\"btnLink\":\"Button Link 2\",\"btnText\":\"Button Text 2\",\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/9.jpg\"},{\"title\":\"title 3\",\"description\":\"Desription 3\",\"btnLink\":\"Button Link 3\",\"btnText\":\"Button Text 3\",\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/11.jpg\"},{\"title\":\"Ui\\/MW-46 ui contact groups\",\"description\":\"A Unbelieveable Saga of a Teacher And a Monkey\",\"btnLink\":\"111111111111\",\"btnText\":\"aaa\",\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/60a2d8e117a4a986cddfec324f65afd4.png\"},{\"title\":null,\"description\":null,\"btnLink\":null,\"btnText\":null,\"slideImage\":\"http:\\/\\/localhost.bai5slide\\/uploads\\/\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `newscategory`
--

CREATE TABLE `newscategory` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newscategory`
--

INSERT INTO `newscategory` (`id`, `category_name`) VALUES
(256, 'category1'),
(257, 'category2');

-- --------------------------------------------------------

--
-- Table structure for table `newscontent`
--

CREATE TABLE `newscontent` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_category` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` double NOT NULL,
  `image` text NOT NULL,
  `quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newscontent`
--

INSERT INTO `newscontent` (`id`, `title`, `id_category`, `content`, `created_at`, `image`, `quote`) VALUES
(20, 'Sao Anh Chưa Về Nhà', 257, '', 1583640756, 'http://localhost.bai5slide/uploads_news_image/3.png', 'Bài hát kết thúc chuỗi series bốn mùa của AMEE '),
(21, 'Ca khúc solo của V123', 257, '', 1583640938, 'http://localhost.bai5slide/uploads_news_image/2.jpg', 'Ngày 21/2, BTS đã chính thức trở lại với khán giả toàn thế giới sau gần một năm vắng bóng cùng album '),
(24, 'Jack (J97) đã chính thức trở lại 1', 256, '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chỉ sau 1 giờ, ảnh đại diện của Jack đ&atilde; nhận được hơn 205.000 lượt like , hơn 30.800 lượt b&igrave;nh luận v&agrave; 5.700 lượt chia sẻ..</p>\r\n\r\n<p>C&oacute; thể thấy, đ&acirc;y l&agrave; lần trở lại ch&iacute;nh thức của Jack dưới nghệ danh mới J97 từ sau loạt ồn &agrave;o thị phi giữa anh, K-ICM v&agrave; quản l&yacute; cũ. C&acirc;u chuyện ấy đ&atilde; g&acirc;y ra kh&ocirc;ng &iacute;t tổn thất về mặt tinh thần của Jack. Ấy thế m&agrave;, chỉ sau một thời gian ngắn, ch&agrave;ng trai sinh năm 1997 n&agrave;y đ&atilde; vượt qua tất cả v&agrave; lần nữa quyết t&acirc;m thực hiện niềm đam m&ecirc; ca h&aacute;t ch&aacute;y bỏng của m&igrave;nh. B&ecirc;n cạnh đ&oacute;, tuy&ecirc;n bố &quot;kh&ocirc;ng chi&ecirc;u tr&ograve;&quot; như một lời khẳng định của Jack - dứt bỏ qu&aacute; khứ v&agrave; hướng đến tương lai, chỉ tập trung cho &acirc;m nhạc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>L&agrave; 1 thằng con trai Official Teaser - Jack | J97</p>\r\n\r\n<p>V&agrave;o s&aacute;ng nay 8/3, Jack cũng đ&atilde; cho ra mắt teaser MV &quot;L&agrave; 1 Thằng Con Trai&quot;. Đ&acirc;y được xem l&agrave; sản phẩm &acirc;m nhạc đầu tay của anh ch&agrave;ng dưới nghệ sanh J97. Sau v&agrave;i giờ ra mắt, teaser của MV đ&atilde; nhanh ch&oacute;ng leo l&ecirc;n Top 9 Trending tr&ecirc;n Youtube với lượt view ở thời điểm hiện tại hơn 836 ngh&igrave;n view, tuy nhi&ecirc;n, với m&agrave;n comeback ch&iacute;nh thức của Jack sau loạt l&ugrave;m x&ugrave;m, những con số tr&ecirc;n vẫn chưa qu&aacute; ấn tượng như những g&igrave; Jack l&agrave;m được trước đ&oacute;. Nhưng nếu x&eacute;t kĩ về t&igrave;nh h&igrave;nh hiện tại, với k&ecirc;nh YouTube mới chỉ lập được trong thời gian ngắn v&agrave; đoạn teaser được đăng v&agrave;o thời điểm... &quot;v&ocirc; thưởng v&ocirc; phạt&quot; l&uacute;c 8h s&aacute;ng ng&agrave;y 8/3 - chủ nhật cuối tuần th&igrave; th&agrave;nh t&iacute;ch như tr&ecirc;n đ&atilde; l&agrave; qu&aacute; đ&aacute;ng khen.</p>\r\n\r\n<p>Teaser MV mở đầu bằng h&igrave;nh ảnh một c&ocirc; g&aacute;i giấu mặt trong trang phục kh&aacute; lộng lẫy. Tuy nhi&ecirc;n, ngay sau đ&oacute; l&agrave; chiếc si&ecirc;u xe c&ugrave;ng d&ograve;ng chữ Jack được l&agrave;m bằng đ&egrave;n led kh&aacute; lớn khiến nhiều người li&ecirc;n tưởng đến ph&acirc;n cảnh của những MV dance. Chỉ h&eacute; lộ một c&acirc;u h&aacute;t duy nhất cũng l&agrave; tựa đề của MV - &quot;L&agrave; Một Thằng Con Trai&quot; nhưng giọng h&aacute;t của Jack vẫn giữ nguy&ecirc;n phong c&aacute;ch ng&agrave;y n&agrave;o khiến nhiều người kh&ocirc;ng khỏi t&ograve; m&ograve; về sản phẩm lần n&agrave;y sẽ được anh ch&agrave;ng thể hiện ra sao.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/8/capture-158367765960626086800.png\" title=\"Thành tích của đoạn teaser \"><img alt=\"Jack tuyên bố không chiêu trò trong lần trở lại đường đua âm nhạc, teaser Là 1 Thằng Con Trai lại không bùng nổ như kì vọng? - Ảnh 3.\" id=\"img_fbda51b0-6148-11ea-b08e-c552152607ce\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/8/capture-158367765960626086800.png\" title=\"Jack tuyên bố không chiêu trò trong lần trở lại đường đua âm nhạc, teaser Là 1 Thằng Con Trai lại không bùng nổ như kì vọng? - Ảnh 3.\" /></a></p>\r\n\r\n<p>Th&agrave;nh t&iacute;ch của đoạn teaser &quot;L&agrave; 1 thằng con trai&quot;.</p>\r\n\r\n<p>Đoạn teaser vỏn vẹn 27 gi&acirc;y nh&aacute; h&agrave;ng v&agrave;i h&igrave;nh ảnh trong MV k&egrave;m theo ng&agrave;y ra mắt đ&atilde; được ấn định l&agrave; 20h ng&agrave;y 10/3. So với những g&igrave; mọi người kỳ vọng về m&agrave;n comeback ho&agrave;nh tr&aacute;ng của Jack th&igrave; teaser MV c&oacute; lẽ đ&atilde; g&acirc;y một ch&uacute;t... hụt hẫng. Đ&atilde; c&oacute; rất nhiều b&igrave;nh luận cho rằng teaser kh&aacute; &quot;nhạt nho&agrave;&quot; v&agrave; chẳng cho thấy được g&igrave; đặc biệt hay bất ngờ. Nhưng đ&acirc;y mới chỉ l&agrave; 1 đoạn teaser nh&aacute; h&agrave;ng, h&atilde;y c&ugrave;ng chờ đ&oacute;n MV ch&iacute;nh thức xem sao!</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/8/dogeihn2nshv5prubmeu68sycl6oe9infoajbsto-15836772742591248109225.jpeg\" target=\"_blank\" title=\"\"><img alt=\"Jack tuyên bố không chiêu trò trong lần trở lại đường đua âm nhạc, teaser Là 1 Thằng Con Trai lại không bùng nổ như kì vọng? - Ảnh 4.\" id=\"img_1264b1b0-6148-11ea-9fc4-e94b04894a60\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/8/dogeihn2nshv5prubmeu68sycl6oe9infoajbsto-15836772742591248109225.jpeg\" title=\"Jack tuyên bố không chiêu trò trong lần trở lại đường đua âm nhạc, teaser Là 1 Thằng Con Trai lại không bùng nổ như kì vọng? - Ảnh 4.\" /></a></p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n\r\n<p>&quot;&gt;</p>\r\n', 1583738205, 'http://localhost.bai5slide/uploads_news_image/j.jpg', 'đây là lần trở lại chính thức của Jack dưới nghệ danh mới J97'),
(26, '4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt', 257, '<p>N&oacute;i đến l&agrave;n da trắng s&aacute;ng mềm mại, ta kh&ocirc;ng thể kh&ocirc;ng nhắc đến những c&ocirc; g&aacute;i ở đất nước mặt trời mọc. Ở Nhật, l&agrave;n da trắng mịn ch&iacute;nh l&agrave; biểu tượng cho sự cao qu&yacute; v&agrave; n&eacute;t đẹp của người phụ nữ. Ch&iacute;nh v&igrave; vậy, dưỡng trắng ch&iacute;nh l&agrave; c&ocirc;ng đoạn quan trọng nhất nh&igrave; trong quy tr&igrave;nh dưỡng da của c&aacute;c c&ocirc; g&aacute;i Nhật Bản. V&agrave; đ&acirc;y l&agrave; những sản phẩm được ph&aacute;i&nbsp;đẹp Nhật&nbsp;coi l&agrave; tinh hoa trong c&ocirc;ng cuộc dưỡng trắng, trị th&acirc;m cho l&agrave;n da của m&igrave;nh.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/9/photo-1-15837422734731981989640.jpg\" target=\"_blank\" title=\"\"><img alt=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 1.\" id=\"img_68fbdfc0-61df-11ea-b08e-c552152607ce\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/9/photo-1-15837422734731981989640.jpg\" title=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 1.\" /></a></p>\r\n\r\n<p><strong>1. Haku Botanic Science</strong></p>\r\n\r\n<p>Tinh chất serum Haku Botanic Science g&acirc;y ức chế hiệu quả sự hoạt động của enzym Tyrosinase l&agrave; t&aacute;c nh&acirc;n h&igrave;nh th&agrave;nh c&aacute;c si&ecirc;u Melamin - nguy&ecirc;n nh&acirc;n của n&aacute;m da, t&agrave;n nhang v&agrave; đen sạm, cải thiện v&ugrave;ng da th&acirc;m sạm, vết nhăn v&agrave; tối m&agrave;u. Đồng thời tạo điều kiện thuận lợi cho việc t&aacute;i tạo v&agrave; trẻ ho&aacute; da c&aacute;c v&ugrave;ng da bị th&acirc;m do mụn, v&ugrave;ng da xuất hiện nếp nhăn tr&ecirc;n khu&ocirc;n mặt, l&agrave;m trắng v&ugrave;ng da sẫm kh&ocirc;ng đều m&agrave;u tr&ecirc;n khu&ocirc;n mặt, v&igrave; vậy hầu như tất cả phụ nữ Nhật đều tin d&ugrave;ng sản phẩm n&agrave;y.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/9/photo-1-1583742277142285792733.jpg\" target=\"_blank\" title=\"\"><img alt=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 2.\" id=\"img_6aff02c0-61df-11ea-8451-2f04341c6fb7\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/9/photo-1-1583742277142285792733.jpg\" title=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 2.\" /></a></p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/9/photo-2-1583742277145605227690.png\" target=\"_blank\" title=\"\"><img alt=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 3.\" id=\"img_6b5c8c10-61df-11ea-97bc-632f7c5ac8c8\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/9/photo-2-1583742277145605227690.png\" title=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 3.\" /></a></p>\r\n\r\n<p>Haku Botanic Science l&agrave; một trong những lọ serum nổi tiếng nhất đến từ thương hiệu Shiseido - h&atilde;ng mỹ phẩm cao cấp đến từ Nhật Bản.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/9/photo-3-15837422771462103508627.png\" target=\"_blank\" title=\"\"><img alt=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 4.\" id=\"img_6b5befd0-61df-11ea-a501-3fa0c66a23e4\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/9/photo-3-15837422771462103508627.png\" title=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 4.\" /></a></p>\r\n\r\n<p>Serum Haku t&aacute;i tạo da sau qu&aacute; tr&igrave;nh bị mụn, hỗ trợ collagen, tạo độ đ&agrave;n hồi v&agrave; săn chắc cho da. Ức chế tăng tiết nhờn, se nhỏ lỗ ch&acirc;n l&ocirc;ng. Giữ cho l&agrave;n da sạch, gi&agrave;u ẩm, khỏe mạnh.</p>\r\n\r\n<p><strong>2. One By Kos&eacute; Melanoshot White</strong></p>\r\n\r\n<p>Hoạt chất l&agrave;m trắng Kojic acid c&oacute; trong c&aacute;c loại mỹ phẩm l&agrave;m trắng nổi tiếng của Kos&eacute;, v&agrave; tạo ra một tinh chất l&agrave;m trắng ho&agrave;n to&agrave;n mới để giải quyết trực tiếp nguồn gốc h&igrave;nh th&agrave;nh c&aacute;c đốm sậm m&agrave;u, ngăn chặn sự h&igrave;nh th&agrave;nh hắc tố của c&aacute;c chuỗi Melanin đến tận gốc, l&agrave;m cho c&aacute;c đốm đen trở n&ecirc;n trong suốt. Đ&oacute; l&agrave; tinh chất One By Kos&eacute; Melanoshot White với hoạt chất l&agrave;m trắng Kojic acid được cải tiến tăng tối đa khả năng l&agrave;m s&aacute;ng da, l&agrave;n da cải thiện ngay sau lần đầu ti&ecirc;n d&ugrave;ng tinh chất n&agrave;y.</p>\r\n\r\n<p><iframe frameborder=\"no\" id=\"native_ad_ifr_504816_3191\" scrolling=\"no\" src=\"javascript:void(0)\"></iframe></p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/9/photo-4-1583742277148339494635.jpeg\" target=\"_blank\" title=\"\"><img alt=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 5.\" id=\"img_6ae70df0-61df-11ea-a315-790bd7b0bd78\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/9/photo-4-1583742277148339494635.jpeg\" title=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 5.\" /></a></p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/9/photo-5-1583742277153526001558.jpg\" target=\"_blank\" title=\"\"><img alt=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 6.\" id=\"img_6ac63f80-61df-11ea-884e-6d7ba5445a86\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/9/photo-5-1583742277153526001558.jpg\" title=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 6.\" /></a></p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/9/photo-6-1583742277154417362593.jpg\" target=\"_blank\" title=\"\"><img alt=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 7.\" id=\"img_6af4f0a0-61df-11ea-a730-2faeb99b0794\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/9/photo-6-1583742277154417362593.jpg\" title=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 7.\" /></a></p>\r\n\r\n<p>Bạn sẽ cảm nhận được một l&agrave;n da ẩm mượt, mềm mịn v&agrave; trắng mịn ngay khi sử dụng One By Kos&eacute; Melanoshot White.</p>\r\n\r\n<p><strong>3. Shiseido White Lucent Total Brightening</strong></p>\r\n\r\n<p>Serum dưỡng da White Lucent Total Brightening Serum được t&iacute;nh hợp c&ocirc;ng nghệ dưỡng trắng tối ưu của Shiseido, gi&uacute;p mang lại hiệu quả dưỡng trắng da to&agrave;n diện s&acirc;u tới 5 lớp tế b&agrave;o, cải thiện sắc tố da trắng mịn v&agrave; tỏa s&aacute;ng.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/9/photo-7-15837422771561352325190.png\" target=\"_blank\" title=\"\"><img alt=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 8.\" id=\"img_6ba6db80-61df-11ea-884e-6d7ba5445a86\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/9/photo-7-15837422771561352325190.png\" title=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 8.\" /></a></p>\r\n\r\n<p>Serum c&oacute; dạng sữa lỏng, tản ra si&ecirc;u mỏng khi được thoa nhẹ bằng ng&oacute;n tay. Kết cấu n&agrave;y gi&uacute;p serum dễ d&agrave;ng hấp thụ v&agrave;o da, kh&ocirc;ng chỉ l&agrave;m mềm lớp sừng bề mặt m&agrave; thấm xuống tận những tầng biểu b&igrave; b&ecirc;n dưới. L&agrave;n da sau khi &quot;ngấm&quot; serum trở n&ecirc;n căng mịn hơn hẳn. C&aacute;c vết n&aacute;m, t&agrave;n nhang được cải thiện chỉ sau v&agrave;i lần d&ugrave;ng, đ&acirc;y cũng l&agrave; một trong những b&iacute; quyết dưỡng trắng da của ph&aacute;i&nbsp;đẹp Nhật&nbsp;Bản.</p>\r\n\r\n<p><strong>4. Serum Vitamin C Melano CC</strong></p>\r\n\r\n<p>Serum Melano CC l&agrave; tinh chất dưỡng chứa th&agrave;nh phần ch&iacute;nh l&agrave; vitamin C v&agrave; Vitamin E c&oacute; t&aacute;c dụng hỗ trợ cải thiện c&aacute;c vết th&acirc;m mụn đồng thời dưỡng trắng da hiệu quả. V&agrave; cũng l&agrave; sản phẩm &quot;key&quot; trong bộ sản phẩm dưỡng trắng da Melano CC của h&atilde;ng Rohto bao gồm: serum, lotion, xịt kho&aacute;ng v&agrave; mặt nạ giấy dưỡng trắng.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/9/photo-8-15837422771581957382876.jpg\" target=\"_blank\" title=\"\"><img alt=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 9.\" id=\"img_6bb8dce0-61df-11ea-a4c6-fff5ad6bddf6\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/9/photo-8-15837422771581957382876.jpg\" title=\"4 loại serum được phụ nữ Nhật tôn vinh là tinh hoa trị thâm nám, trong đó có một loại giá chỉ hơn 200k cực kỳ quen mặt - Ảnh 9.\" /></a></p>\r\n\r\n<p>Kh&aacute;c hẳn với c&aacute;c loại serum kh&aacute;c, sản phẩm đựng trong tu&yacute;p kem bạc, n&ecirc;n giảm thiểu tối đa hiện tượng oxi h&oacute;a của Vitamin C n&ecirc;n rất tiện trong việc bảo quản trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n', 1583746825, 'http://localhost.bai5slide/uploads_news_image/3.jpg', 'Nói đến làn da trắng sáng mềm mại, ta không thể không nhắc đến những cô gái ở đất nước mặt trời mọc. Ở Nhật, làn da trắng mịn chính là biểu tượng cho sự cao quý và nét đẹp của người phụ nữ. Chính vì vậy, dưỡng trắng chính là công đoạn quan trọng nhất nhì trong quy trình dưỡng da của các cô gái Nhật Bản. Và đây là những sản phẩm được phái đẹp Nhật coi là tinh hoa trong công cuộc dưỡng trắng, trị thâm cho làn da của mình.'),
(27, 'Những bí kíp làm đẹp của các mỹ nhân châu Á đều rất đơn giản, nhưng hiệu quả \"hack\" nhan sắc thì không thể đùa được.', 256, '<p><img alt=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 1.\" id=\"img_9c74b090-6098-11ea-8a18-2da5c33cc5bb\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/8/photo-1-1583601922398646721843.jpg\" title=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 1.\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Park Shin Hye: Kh&ocirc;ng bao giờ ngủ với m&aacute;i t&oacute;c c&ograve;n ướt</strong></p>\r\n\r\n<p>M&aacute;i t&oacute;c sẽ ở trong t&igrave;nh trạng yếu ớt, mỏng manh nhất khi c&ograve;n ướt. Bởi vậy, nếu ngủ với m&aacute;i đầu chưa được sấy kh&ocirc;, t&igrave;nh trạng g&atilde;y rụng rất dễ xảy ra. Đ&oacute; c&ograve;n chưa kể, vi khuẩn từ gối, chăn m&agrave;n sẽ dễ d&agrave;ng x&acirc;m nhập khi t&oacute;c bạn c&ograve;n ướt, khiến t&oacute;c nhanh bẩn, tệ hơn l&agrave; dẫn đến t&igrave;nh trạng g&agrave;u v&agrave; ngứa da đầu. Đ&acirc;y ch&iacute;nh l&agrave; l&yacute; do, Park Shin Hye sẽ lu&ocirc;n bảo đảm, m&aacute;i t&oacute;c được sấy hoặc để kh&ocirc; tự nhi&ecirc;n rồi mới y&ecirc;n t&acirc;m đi ngủ được.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/8/photo-1-1583601925790527838398.jpg\" target=\"_blank\" title=\"\"><img alt=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 2.\" id=\"img_9e6ab430-6098-11ea-9fc4-e94b04894a60\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/8/photo-1-1583601925790527838398.jpg\" title=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 2.\" /></a></p>\r\n\r\n<p><strong>3. Lisa: Mascara l&agrave; ch&acirc;n &aacute;i</strong></p>\r\n\r\n<p>Để t&ocirc;n trọn đ&ocirc;i mắt to tr&ograve;n, long lanh đ&atilde; trở th&agrave;nh thương hiệu của Lisa, c&aacute;c chuy&ecirc;n gia makeup của c&ocirc; n&agrave;ng lu&ocirc;n h&agrave;o ph&oacute;ng trong khoản chuốt mascara để tạo độ d&agrave;i mượt, cong v&uacute;t. Đ&acirc;y cũng l&agrave; b&iacute; k&iacute;p c&aacute;c n&agrave;ng rất n&ecirc;n thuộc l&ograve;ng để cần l&agrave; c&oacute; thể &quot;hack&quot; đ&ocirc;i mắt th&ecirc;m long lanh, huyền ảo.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/8/photo-2-1583601925795119930228.jpg\" target=\"_blank\" title=\"\"><img alt=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 3.\" id=\"img_9e5e5820-6098-11ea-8633-3b12238a3cae\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/8/photo-2-1583601925795119930228.jpg\" title=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 3.\" /></a></p>\r\n\r\n<p><iframe frameborder=\"no\" id=\"native_ad_ifr_504816_3191\" scrolling=\"no\" src=\"javascript:void(0)\"></iframe></p>\r\n\r\n<p><strong>4. Phạm Băng Băng: Đắp mặt nạ mỗi ng&agrave;y</strong></p>\r\n\r\n<p>Phạm Băng Băng nổi tiếng l&agrave; một t&iacute;n đồ trung th&agrave;nh của mặt nạ giấy. C&ocirc; đắp mặt nạ cho da &iacute;t nhất 1 lần/ng&agrave;y v&agrave; số lượng mặt nạ d&ugrave;ng hằng năm của Phạm Băng Băng l&ecirc;n tới hơn 600 miếng.</p>\r\n\r\n<p>Đắp mặt nạ giấy l&agrave; c&aacute;ch tuyệt vời gi&uacute;p bổ sung độ ẩm v&agrave; dưỡng chất để l&agrave;n da c&oacute; được vẻ căng mọng, mướt m&aacute;t. Tuy nhi&ecirc;n, việc đắp mặt nạ giấy hằng ng&agrave;y kh&ocirc;ng hẳn l&agrave; ph&ugrave; hợp cho tất cả mọi người, nếu đ&atilde; d&ugrave;ng m&agrave; thấy da c&oacute; mụn vi&ecirc;m, mụn ẩn hay k&iacute;ch ứng, bạn chỉ n&ecirc;n r&uacute;t ngắn khoảng 1 &ndash; 2 lần/tuần đắp mặt nạ giấy m&agrave; th&ocirc;i.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/8/photo-3-1583601925798826926578.jpg\" target=\"_blank\" title=\"\"><img alt=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 4.\" id=\"img_9e555770-6098-11ea-8f5f-0df4b4244415\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/8/photo-3-1583601925798826926578.jpg\" title=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 4.\" /></a></p>\r\n\r\n<p><strong>5. L&acirc;m Ch&iacute; Linh: Massage mặt</strong></p>\r\n\r\n<p>Ở tuổi 46, L&acirc;m Ch&iacute; Linh khiến c&ocirc;ng ch&uacute;ng thực sự sửng sốt v&igrave; gương mặt trẻ trung hơn rất nhiều so với tuổi thật. L&acirc;m Ch&iacute; Linh đ&atilde; thử nghiệm những sản phẩm xa xỉ, những liệu ph&aacute;p chăm da đắt tiền nhưng đệ nhất mỹ nh&acirc;n xứ Đ&agrave;i chỉ &quot;ghi c&ocirc;ng&quot; một điều duy nhất gi&uacute;p c&ocirc; c&oacute; được nhan sắc trẻ m&atilde;i, đ&oacute; ch&iacute;nh l&agrave; th&oacute;i quen massage mặt.</p>\r\n\r\n<p>Chỉ v&agrave;i ph&uacute;t massage, bạn sẽ tạo điều kiện cho c&aacute;c sản phẩm skincare thẩm thấu tốt hơn, k&iacute;ch th&iacute;ch m&aacute;u lưu th&ocirc;ng để da th&ecirc;m tươi s&aacute;ng, hồng h&agrave;o v&agrave; c&ograve;n mang lại vẻ săn chắc cho l&agrave;n da. Để trải nghiệm massage th&ecirc;m th&uacute; vị v&agrave; hiệu quả, bạn c&oacute; thể d&ugrave;ng thanh lăn ngọc, hoặc miếng đ&aacute; Gua Sha.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/8/photo-4-15836019258001203248453.jpg\" target=\"_blank\" title=\"\"><img alt=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 5.\" id=\"img_9e814970-6098-11ea-aed5-9785d84ab657\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/8/photo-4-15836019258001203248453.jpg\" title=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 5.\" /></a></p>\r\n\r\n<p><strong>6. Son Ye Jin: Trang điểm tự nhi&ecirc;n nhất c&oacute; thể</strong></p>\r\n\r\n<p>Trong &quot;Crash Landing On You&quot;, Son Ye Jin từng g&acirc;y sốc khi l&ecirc;n h&igrave;nh với gương mặt gần như mộc ho&agrave;n to&agrave;n. C&ocirc; chỉ thoa một ch&uacute;t phấn, n&oacute;i kh&ocirc;ng với phấn mắt, mascara v&agrave; thậm ch&iacute; chỉ t&ocirc; son dưỡng cho những ph&acirc;n cảnh ở Triều Ti&ecirc;n. Kiểu trang điểm nhẹ như kh&ocirc;ng n&agrave;y sẽ gi&uacute;p vẻ đẹp tự nhi&ecirc;n của chủ nh&acirc;n th&ecirc;m tỏa s&aacute;ng, v&agrave; kh&ocirc;ng tạo th&ecirc;m g&aacute;nh nặng cho l&agrave;n da.</p>\r\n\r\n<p><a href=\"https://kenh14cdn.com/2020/3/8/photo-5-15836019258031995510455.jpg\" target=\"_blank\" title=\"\"><img alt=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 6.\" id=\"img_9e72a370-6098-11ea-8a18-2da5c33cc5bb\" src=\"https://kenh14cdn.com/thumb_w/620/2020/3/8/photo-5-15836019258031995510455.jpg\" title=\"Thần chú làm đẹp của các mỹ nhân châu Á nổi tiếng: Kỳ diệu đến nỗi có thể nâng tầm nhan sắc của bạn từ da đến tóc - Ảnh 6.\" /></a></p>\r\n\r\n<p><em>Nguồn: Her World</em></p>\r\n\r\n<p>&quot;&gt;</p>\r\n', 1583746900, 'http://localhost.bai5slide/uploads_news_image/4.jpg', '1. Song Hye Kyo: Dùng tinh chất dưỡng để hack da căng mọng  Là một sao nữ hạng A, Song Hye Kyo luôn bận bịu với những buổi chụp hình, điều này khiến da dẻ của cô rất dễ trở nên mất nước, khô héo sau hàng tiếng đồng hồ đứng dưới ánh đèn studio. Và để duy trì vẻ căng mọng, tràn đầy sức sống 24/7 cho làn da, Song Hye Kyo đã kết nạp một lọ tinh chất dưỡng thật xịn vào quy trình skincare của mình. Và nếu bạn cũng mong ước một làn da đẹp đỉnh cao như Song Hye Kyo, đừng quên dùng serum hoặc essence hằng ngày nhé!');

--
-- Triggers `newscontent`
--
DELIMITER $$
CREATE TRIGGER `auto insert time create` BEFORE INSERT ON `newscontent` FOR EACH ROW BEGIN
SET NEW.created_at = UNIX_TIMESTAMP();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `name`, `data`) VALUES
(9, 'contact', '[{\"name\":null,\"phone\":null}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepageattr`
--
ALTER TABLE `homepageattr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscategory`
--
ALTER TABLE `newscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscontent`
--
ALTER TABLE `newscontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homepageattr`
--
ALTER TABLE `homepageattr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newscategory`
--
ALTER TABLE `newscategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `newscontent`
--
ALTER TABLE `newscontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
