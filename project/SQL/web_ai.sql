-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2022 lúc 04:53 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_ai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `content`, `iduser`, `time`, `trang_thai`) VALUES
(9, 'Đức Mạnh', '0326661111', 'ducmanh@gmail.com', 'web của bạn hoạt động không tốt hãy sửa lại', 33, '09:49 10-06-22', 0),
(10, 'Ông giáo', '0326660198', 'onggiao@gmail.com', 'web hoạt động không được tốt cho lắm cần làm thêm nhiều chức năng hơn', 34, '09:50 10-06-22', 0),
(11, 'Thanh Lâm', '0369871121', 'thanhlam@gmail.com', 'cần thêm nhiều chức năng hơn nữa ....', 35, '09:51 10-06-22', 0),
(12, 'Văn Hiền', '0326660728', 'vanhien592002@gmail.com', 'test phản hồi của khách hàng', 1, '09:52 10-06-22', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_rights` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `phone`, `name`, `password`, `access_rights`) VALUES
(1, '0326660728', 'Văn Hiền', '12345678', 1),
(2, '0326660999', 'Administrators', '12345678', 1),
(31, '0962543002', 'Anh Thái', '12345678', 1),
(32, '0393199855', 'Minh Cường', '12345678', 1),
(33, '0326661111', 'Đức Mạnh', '87897669688', 0),
(34, '0326660198', 'Ông giáo', '98678546', 0),
(35, '0369871121', 'Thanh Lâm', '45645644', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id`, `name`, `src`) VALUES
(1, 'Tổng quan Trí tuệ nhân tạo AI', 'https://www.youtube.com/embed/9t1IsxTeyHQ'),
(2, 'Python cơ bản cho AI (phần 1)', 'https://www.youtube.com/embed/MpppDoAWDdA'),
(3, 'Python cơ bản cho AI (phần 2)', 'https://www.youtube.com/embed/muS8I4Unnyc'),
(4, 'Python cơ bản cho AI (phần 3)', 'https://www.youtube.com/embed/Usr6ikXu-M4'),
(5, 'Tìm kiếm lời giải [BFS, DFS]', 'https://www.youtube.com/embed/ZQozkaatPEg'),
(6, 'Thuật toán Uniform cost search', 'https://www.youtube.com/embed/11xhp8Ec3zE'),
(7, 'Thuật toán Best first search', 'https://www.youtube.com/embed/t95XLNhS6IQ'),
(8, 'Thuật toán A* algorithm', 'https://www.youtube.com/embed/G7XnNtF7UEE'),
(9, 'Cài đặt 8-puzzle (A* algorithm)', 'https://www.youtube.com/embed/Xkthjd9is4w'),
(10, 'Thuật toán Minimax, alpha-beta', 'https://www.youtube.com/embed/CAEI_J50B18'),
(11, 'Cài đặt Minimax và alpha-beta', 'https://www.youtube.com/embed/m4ThIoOezxU'),
(12, 'Logic mệnh đề cấp một (phần 1)', 'https://www.youtube.com/embed/ONxr7v3HaKo');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
