-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 11:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `anime_id` int(11) NOT NULL,
  `anime_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `ep_num` int(11) DEFAULT 0,
  `price` float DEFAULT NULL,
  `air_date` date DEFAULT NULL,
  `sub` tinyint(1) DEFAULT NULL,
  `small_href` varchar(255) DEFAULT NULL,
  `big_href` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`anime_id`, `anime_name`, `description`, `ep_num`, `price`, `air_date`, `sub`, `small_href`, `big_href`, `youtube_link`) VALUES
(1, 'Sousou no Frieren', 'Tổ đội anh hùng đã đánh bại được quỷ vương và kết thúc cuộc hành trình của họ. Nhưng thế chưa phải là hết, cuộc đời của cô nàng pháp sư Elf này sẽ còn rất dài, hơn cả những người đồng đội cũ của cô, một cuộc phiêu lưu mới để cô trải qua nhiều cung bậc cảm xúc, cũng như là học hỏi thêm về con người.', 24, 0, '2025-03-03', 0, 'https://vn.e-muse.com.tw/wp-content/uploads/2023/09/%E8%91%AC%E9%80%81%E7%9A%84%E8%8A%99%E8%8E%89%E8%93%AE_%E8%B6%8A%E5%AE%98%E7%B6%B2-2.jpg', 'https://images4.alphacoders.com/134/thumb-1920-1340929.jpeg', 'PLdM751AKK4aPt-L1NtFn99KdiKdYKJKAX'),
(2, 'I\'ve been killing slimes for 300 years', 'Tái sinh vào một thế giới mới với tư cách là một phù thủy bất tử.', 12, 0, '2025-03-04', 1, 'https://static.animecorner.me/2024/03/1709987330-17567.jpg', 'https://cdn.wallpapersafari.com/57/17/AJCPyt.jpg', 'PLdM751AKK4aMIuTodm8gu3oxZlOjGQxuG'),
(3, 'Pseudo harem', 'Eiji Kitahama, học sinh trung học năm thứ hai, chỉ muốn được nổi tiếng. Để giúp anh thực hiện ước mơ này, Rin Nanakura, đàn em trong câu lạc bộ kịch, đã sử dụng kỹ năng diễn xuất của mình để tạo ra một hậu cung gồm những cô gái yêu thương anh', 12, 0, '2025-03-05', 1, 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1640306628i/59919745.jpg', 'https://image.tmdb.org/t/p/original/O73v49LoRycd7wv3Eme7heciZv.jpg', 'PLOVZwvNm10lX42YRzD4-WG6fWKaTZ_SY-'),
(4, 'Wistoria: Wand and Sword Tsue to Tsurugi no Wistoria', 'Will là một cậu bé bước vào học viện ma pháp với mục tiêu trở thành một ma pháp sư. Tuy là một người chăm chỉ thế nhưng cậu có một điểm yếu chết người đó là không thể sử dụng ma pháp. ', 12, 1, '2025-03-07', 1, 'https://external-preview.redd.it/wistoria-wand-and-sword-anime-announced-teaser-visual-v0-ZBfM49mT4xN15tgdS2IOIvfk5e-S_bcDebICxhCpP8g.jpg?width=1080&crop=smart&auto=webp&s=4773ed317ed68f6eb254d97af2c29e7d2d77522c', NULL, 'PLdM751AKK4aOHWK-VAKjfE_DvRCO1GazS'),
(5, 'Dandadan', 'Momo Ayase là con gái của một dòng họ sở hữu linh lực còn Takakura Ken (biệt danh Okarun), bạn cùng lớp của cô là một Otaku cuồng những điều huyền bí. Sau khi được Momo cứu khỏi lũ bắt nạt, hai người đã bắt đầu trò chuyện với nhau. Thế rồi, cả hai đã cùng gặp những chuyện phi thường. ', 12, 2, '2025-03-09', 1, 'https://vn.e-muse.com.tw/wp-content/uploads/2024/10/膽大黨_英官網.jpg', NULL, 'PLdM751AKK4aM0J8dx3g2db75z4s34amsR'),
(6, 'Hành trình cô độc nơi dị giới', 'Haraka là người đã trải qua những năm tháng học cấp ba mà không có bạn bè. Một ngày nọ, cậu cùng các bạn cùng lớp đột nhiên bị triệu hồi đến thế giới khác ngay trong giờ học.', 12, 0, '2025-03-06', 1, 'https://vn.e-muse.com.tw/wp-content/uploads/2024/10/孤單一人的異世界攻略_越官網.jpg', NULL, 'PLdM751AKK4aORxR4Du8NfmNF66obCMq-0'),
(7, 'Vong linh đau khổ muốn giải nghệ ~Cách thợ săn yếu nhất đào tạo tổ đội mạnh nhất~', 'Cùng làm thợ săn kho báu nào!\r\nMục tiêu chỉ có một: Trở thành anh hùng mạnh nhất thế giới!\r\nXưa kia, có 6 người đã thề hứa như vậy với nhau. Duy chỉ có một chàng trai trong số đó cực kì thiếu tài năng.', 13, 4, '2025-03-06', 1, 'https://vn.e-muse.com.tw/wp-content/uploads/2024/10/嘆氣的亡靈想隱退_越官網-1.jpg', NULL, 'PLdM751AKK4aNiBe_y0YffH5ggu_SkZqKq'),
(8, 'Vòng lặp thứ 7 – Nữ phản diện tận hưởng cuộc sống vô ưu sau khi cưới kẻ thù truyền kiếp', 'Tiểu thư nhà công tước, Rishe Imgard Wertsner, có một bí mật. Đó là vào năm 20 tuổi, cô sẽ chết và trở lại khoảnh khắc 5 năm trước. Tại vòng lặp thứ bảy, cô hạ quyết tâm rằng mình phải sống một cuộc đời trường thọ và hạnh phúc.', 12, 100, '2025-03-06', 1, 'https://vn.e-muse.com.tw/wp-content/uploads/2023/12/輪迴7次的惡役千金，在前敵國享受隨心所欲的新婚生活_官網越.jpg', NULL, 'PLdM751AKK4aPrdQd4hvzCAQSwqoe2gI8P'),
(9, 'Bạo thực cuồng nhân', 'Tại một thế giới nơi tính ưu việt của kỹ năng quyết định tất cả thì Fate, một người gác cổng, lại chỉ có một kỹ năng duy nhất là “”phàm ăn””. Chàng trai từng bị cho là kém cỏi và vô năng sẽ bắt đầu cuộc hành trình vươn đến đỉnh cao của thế giới.', 12, 9, '2025-03-06', 1, 'https://vn.e-muse.com.tw/wp-content/uploads/2023/09/暴食狂戰士-唯有我突破了所謂「等級」的概念_官網越.jpg', NULL, 'PLdM751AKK4aNyWamQ3GPBnKxcd3awXlUx'),
(10, 'Nô lệ của ma đô tinh binh', 'Bỗng nhiên những cánh cổng bí ẩn đã xuất hiện trên khắp Nhật Bản.\r\nBên kia cánh cổng là dị thứ nguyên được gọi là Ma Đô, nơi có những trái đào ban cho các thiếu nữ năng lực đặc biệt nếu ăn chúng. Để tiêu diệt Xú Quỷ đến từ nơi này, một lực lượng chiến đấu toàn các nữ chiến binh đã được thành lập với tên gọi Kháng Ma Đội.', 12, 1, '2025-03-06', 1, 'https://vn.e-muse.com.tw/wp-content/uploads/2023/12/魔都精兵的奴隸_官網越.jpg', NULL, 'PLdM751AKK4aPR05vP33u5O97HL0kynOpA'),
(11, 'Cuộc cách mạng ma thuật của công chúa chuyển sinh và tiểu thư thiên tài', 'Anisphia, công chúa của vương quốc Palletia, khi còn nhỏ đã nhớ lại được ký ức của kiếp trước, khi mà cô mong muốn sở hữu pháp thuật và được bay lượn trên bầu trời.', 12, 1, '2023-09-29', 1, 'https://vn.e-muse.com.tw/wp-content/uploads/2022/12/轉生公主與天才千金的魔法革命_越直-scaled.jpg', NULL, 'PLdM751AKK4aNxe_XG47pLVQBbi52R2EBh'),
(12, 'MOB PSYCHO 100 ', 'Cậu bé trừ tà...', 12, 0, '2021-04-10', 1, 'https://vn.e-muse.com.tw/wp-content/uploads/2022/09/路人超能100-S3_新媒宣傳圖_v2直英.jpg', NULL, 'PLdM751AKK4aMZUQMuhiCZX_jHsn6lW5AR');

-- --------------------------------------------------------

--
-- Table structure for table `ani_cate`
--

CREATE TABLE `ani_cate` (
  `anime_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ani_cate`
--

INSERT INTO `ani_cate` (`anime_id`, `cate_id`) VALUES
(1, 2),
(2, 2),
(3, 3),
(4, 4),
(5, 4),
(6, 2),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 2),
(12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'test'),
(2, 'isekai'),
(3, 'slice of life'),
(4, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `latitude`, `longitude`, `description`) VALUES
(1, 'Tokyo Tower', 35.65860000, 139.74540000, 'A famous landmark in Tokyo, Japan.'),
(2, 'Eiffel Tower', 48.85840000, 2.29450000, 'An iconic structure in Paris, France.'),
(3, 'Statue of Liberty', 40.68920000, -74.04450000, 'A symbol of freedom in New York, USA.'),
(4, 'Ben Thanh Market', 10.77250000, 106.69830000, 'A historical market in Ho Chi Minh City, Vietnam.'),
(5, 'Sydney Opera House', -33.85680000, 151.21530000, 'A world-renowned performing arts center in Sydney, Australia.'),
(6, 'Saigon Notre Dame Cathedral', 10.77970000, 106.69920000, 'A stunning French colonial cathedral in District 1.'),
(7, 'Independence Palace', 10.77620000, 106.69540000, 'A historic landmark that played a key role in Vietnam’s history.'),
(8, 'Ben Thanh Market', 10.77250000, 106.69830000, 'A bustling market offering local goods and street food.'),
(9, 'Bui Vien Walking Street', 10.76850000, 106.69210000, 'A lively nightlife hub with bars, restaurants, and entertainment.'),
(10, 'War Remnants Museum', 10.77900000, 106.69290000, 'A museum showcasing Vietnam War history and artifacts.'),
(11, 'Bitexco Financial Tower', 10.77190000, 106.70420000, 'A skyscraper with a stunning sky deck view of the city.'),
(12, 'Tao Dan Park', 10.77350000, 106.68980000, 'A peaceful green space in the heart of Ho Chi Minh City.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `hash_pass` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `hash_pass`, `email`, `admin`, `name`) VALUES
('114086605655399008464', '9891a4a4abecf6a05f32da82a1b61e40', 'sang.doanbk1@hcmut.edu.vn', 0, 'SANG ĐOÀN TẤN'),
('12312341234', 'd41d8cd98f00b204e9800998ecf8427e', 'asdf@gmail.com', 0, 'yasuo'),
('asdf', 'a2449370e70067b7a8dee509e58f05e0', 'sang.doanbk1@hcmut.edu.vn', 0, 'asdf'),
('asdfasdfasdfasdf', 'd41d8cd98f00b204e9800998ecf8427e', 'qwer@gmail.com', 0, 'asdfasdfasdfasdf'),
('qwerqwer', 'd41d8cd98f00b204e9800998ecf8427e', 'qwerqwer@asdf.com', 0, 'sangdeptrai'),
('sang', '0cc175b9c0f1b6a831c399e269772661', 'sang.doanbk1@hcmut.edu.vn', 1, 'sang'),
('sang123', '2cf1f4f8e5d2c9ce29a4c7c4834f8620', 'doantansang1@gmail.com', 0, 'sang123'),
('user', '3410441659d0ec4ccf7e8eb341bc39ff', 'sang.doanbk1@hcmut.edu.vn', 0, 'user'),
('zxcv', 'fd2cc6c54239c40495a0d3a93b6380eb', 'sang.doanbk1@hcmut.edu.vn', 0, 'zxcv'),
('zxcvasdf', 'fd2cc6c54239c40495a0d3a93b6380eb', 'sang.doanbk1@hcmut.edu.vn', 0, 'zxcvasdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`anime_id`);

--
-- Indexes for table `ani_cate`
--
ALTER TABLE `ani_cate`
  ADD PRIMARY KEY (`anime_id`,`cate_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `anime_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ani_cate`
--
ALTER TABLE `ani_cate`
  ADD CONSTRAINT `ani_cate_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`anime_id`),
  ADD CONSTRAINT `ani_cate_ibfk_2` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
