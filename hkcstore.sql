-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3307
-- Thời gian đã tạo: Th6 08, 2024 lúc 01:08 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hkcstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbl` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbl`, `iduser`, `idsp`, `noidung`, `ngaybl`) VALUES
(1, 3, 23, 'hayyyy', '2024-03-14'),
(10, 3, 30, 'hihihih', '0000-00-00'),
(11, 1, 30, 'kekekek\r\n', '2024-04-01'),
(12, 1, 24, 'quá nice xừ\r\n', '2024-04-03'),
(13, 1, 30, 'hádas', '2024-04-10'),
(14, 1, 30, 'kakakakaka', '2024-04-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdh`
--

CREATE TABLE `chitietdh` (
  `idctdh` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `iddh` int(11) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdh`
--

INSERT INTO `chitietdh` (`idctdh`, `idsp`, `iddh`, `gia`, `soluong`) VALUES
(2, 34, 43, 55555, 1),
(3, 29, 43, 22222, 1),
(4, 30, 44, 22222, 2),
(5, 30, 45, 22222, 1),
(6, 29, 45, 22222, 2),
(7, 29, 46, 22222, 1),
(8, 23, 46, 66666, 1),
(9, 24, 46, 12375, 2),
(10, 27, 46, 66666, 1),
(11, 35, 46, 55555, 1),
(12, 34, 46, 55555, 2),
(13, 24, 47, 12375, 2),
(14, 30, 47, 22222, 2),
(15, 24, 48, 12375, 2),
(16, 38, 49, 750000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddm` int(11) NOT NULL,
  `tendm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddm`, `tendm`) VALUES
(1, 'Ghế'),
(2, 'Bàn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `iddh` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tongtien` decimal(10,0) NOT NULL,
  `pttt` varchar(255) NOT NULL,
  `ngaymua` date NOT NULL,
  `idtt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`iddh`, `iduser`, `tongtien`, `pttt`, `ngaymua`, `idtt`) VALUES
(43, 1, 77777, 'Tiền mặt', '2024-04-03', 1),
(44, 1, 44444, 'Tiền mặt', '2024-04-03', 1),
(45, 1, 66666, 'Tiền mặt', '2024-04-05', 4),
(46, 1, 346969, 'Tiền mặt', '2024-04-10', 3),
(47, 1, 69194, 'Tiền mặt', '2024-04-10', 1),
(48, 1, 24750, 'Tiền mặt', '2024-04-10', 1),
(49, 1, 1500000, 'Tiền mặt', '2024-04-12', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `mota` text NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `soluong` int(10) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `hinh`, `mota`, `gia`, `soluong`, `iddm`) VALUES
(23, 'Ghế 1', 'images (2).jpg', 'ádasdasdasd', 450000, 234234, 1),
(24, 'Bàn 1', 'images (1).jpg', 'rte', 1200000, 3342, 2),
(27, 'Ghế 2', 'images (3).jpg', 'dsasdas', 600000, 324, 1),
(29, 'Ghế 3', 'Ghe-FAUTEUIL-7.jpg', 'gyfhjgjhh', 200000, 89898, 1),
(30, 'Bàn 2', 'images.jpg', 'sgdgdgg', 2999000, 47, 2),
(34, 'Bàn 3', 'tải xuống (1).jpg', 'huhihc', 550000, 3333, 2),
(35, 'Bàn 4', 'tải xuống (2).jpg', 'huhihc', 554999, 3333, 2),
(38, 'Ghế 4', 'ghe-an-122t.webp', 'đẹp\r\n', 750000, 44, 1),
(39, 'Ghế 5', 'Ghe-FAUTEUIL-7.jpg', 'hay dẹp', 1200000, 123, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `idtt` int(11) NOT NULL,
  `tentt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`idtt`, `tentt`) VALUES
(1, 'Đang xử lý'),
(2, 'Đã xử lý'),
(3, 'Hủy'),
(4, 'Đang giao'),
(5, 'Đã giao\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `vaitro` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`iduser`, `hoten`, `email`, `sdt`, `diachi`, `taikhoan`, `matkhau`, `vaitro`) VALUES
(1, 'Admin', 'Admin@gmail.com', '0123456789', 'hà nội', 'admin', '123456', 1),
(3, 'non12345', 'hihi@gmail.com', '0332333951', 'địa ngục', 'hihihi', '123456', 0),
(5, 'vụt chịt', 'ichigo12012001@gmail.com', '0123456789', 'địa ngục', 'hihihi12313123', '123456', 0),
(6, 'non12345', 'hoangndh41065@fpt.edu.vn', '12341234132', 'Hà nội', 'kokoko', '123456', 0),
(7, 'lol', 'hoangndh41065@fpt.edu.vn', '1230123', '14 trịnh văn bô', 'hihihi12313123', '123456', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbl`),
  ADD KEY `lk_iduserbl_user` (`iduser`),
  ADD KEY `lk_idsp_ssanpham` (`idsp`);

--
-- Chỉ mục cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD PRIMARY KEY (`idctdh`),
  ADD KEY `lk_idsp_sanpham` (`idsp`),
  ADD KEY `lk_iddh_donhang` (`iddh`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddh`),
  ADD KEY `lk_iduser_user` (`iduser`),
  ADD KEY `lk_idtt_trangthai` (`idtt`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `lk_iddm_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`idtt`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  MODIFY `idctdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `iddh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `idtt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_idsp_ssanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`),
  ADD CONSTRAINT `lk_iduserbl_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Các ràng buộc cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `lk_iddh_donhang` FOREIGN KEY (`iddh`) REFERENCES `donhang` (`iddh`),
  ADD CONSTRAINT `lk_idsp_sanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `lk_idtt_trangthai` FOREIGN KEY (`idtt`) REFERENCES `trangthai` (`idtt`),
  ADD CONSTRAINT `lk_iduser_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_iddm_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`iddm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
