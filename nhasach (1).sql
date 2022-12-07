-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 01, 2022 lúc 11:02 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhasach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `maSP` int(11) NOT NULL,
  `maDH` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `maDH` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `maKH` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`maDH`, `maSP`, `ngay`, `maKH`, `soLuong`) VALUES
(1, 6, '2022-06-29', 1, 20),
(3, 24, '2022-06-30', 1, 3),
(4, 16, '2022-06-30', 1, 5),
(11, 2, '2022-06-30', 1, 4),
(12, 16, '2022-06-30', 1, 1),
(13, 2, '2022-06-30', 1, 56),
(14, 12, '2022-07-01', 1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soDT` bigint(20) NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenKH`, `diaChi`, `soDT`, `mail`, `matKhau`) VALUES
(1, 'Nguyễn Văn Tài', 'Trung Hòa, Trung Kính, Cầu Giấy, Hà Nội', 398398324, 'tai@gmail.com', '2222'),
(2, 'Hạ Ngọc Nam', 'Tu Hoàng, Nam Từ Liêm, Hà Nội', 922221452, 'nam@gmail.com', '3333'),
(3, 'Nguyễn Văn Nam', 'Mễ Trì, Nam Từ Liêm, Hà Nội', 3932625509, 'nam@gmail.com', '1111'),
(4, 'Phạm Ngọc Sâm', 'Nguyên Xá, Nam Từ Liêm, Hà Nội', 987654321, 'sam@gmail.com', '4444'),
(5, 'Nguyễn Văn Tân', 'Trung Kính, Cầu Giấy, Hà Nội', 938478261, 'tan@gmail.com', '6666');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `maNSX` int(11) NOT NULL,
  `tenNSX` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soDT` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`maNSX`, `tenNSX`, `diaChi`, `soDT`) VALUES
(1, 'Giáo Dục', 'Cầu Giấy - Hà Nội', 343857123),
(2, 'Kim Đồng', 'Phủ Lý - Hà Nam', 238836502),
(3, 'Thiên Long', 'Trung Hòa - Cầu Giấy - Hà Nội', 3983593324);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `moTa` text COLLATE utf8_unicode_ci NOT NULL,
  `soLuongSP` int(11) NOT NULL,
  `maTL` int(11) NOT NULL,
  `maNSX` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `image`, `gia`, `ngay`, `moTa`, `soLuongSP`, `maTL`, `maNSX`) VALUES
(1, 'Bút ký Parker', 'a5.jpg', 420000, '2022-02-22', 'Sản phẩm mới nhất năm 2022', 45, 2, 2),
(2, 'Giá đỡ tranh', 'a8.jpg', 620000, '2022-02-22', '*Giá vẽ gỗ thông tự nhiên  được thiết kế nhỏ gọn rất phù hợp làm quà cho mọi người.', 222, 1, 1),
(6, 'Giấy ăn', '8339a2117dc1707076a4e42cad823dfa.jpg', 12000, '2022-03-18', 'Sử dụng để vệ sinh cá nhân', 120, 3, 2),
(12, 'Bàn căt giấy A3', 'a2.jpg', 480000, '2021-11-10', 'Bàn cắt giấy có đế được làm bằng gỗ chắc chắn và lưỡi dao sắc bén nên có thể dễ dàng cắt tập giấy.', 15, 1, 1),
(13, 'Sổ da ghi chép', 'tapso1.jpg', 35000, '2022-06-08', 'Sổ tay có bìa được làm từ da mềm tạo cảm giác thoải mái khi cầm.', 50, 3, 3),
(14, 'Sổ A4 bìa cứng', 'tapso2.jpg', 25000, '2022-06-26', 'Bìa được bọc nhiều màu và được làm bằng giấy ép cứng đảm bảo cho giấy trong sổ không bị cong.', 60, 1, 1),
(15, 'Bút bi Thiên Long', 'butbi1.jpg', 5000, '2022-06-17', 'Bút bi rẻ đẹp, được thiết kế đẹp và gọn gàng phù hợp với mọi người.', 200, 2, 3),
(16, 'Bút bi ngòi to', 'montblanc-rollerball-mozart-refill.jpg', 30000, '2022-06-16', 'Bút được thiết kế có ngòi to khi viết sẽ ra những nét bút rất đậm và rõ.', 100, 2, 1),
(17, 'Sổ Tay Kiếm Hiệp', 'tapso3.jpg', 20000, '2022-06-25', 'Sổ tay được thiết kế theo hình dáng của các cuốn sách và bí kíp võ công trong phim kiếm hiệp của Trung Quốc.', 60, 1, 1),
(18, 'Máy Tính Học Sinh Casio FX-570ES PLUS', 'dientu1.jpg', 300000, '2022-06-25', 'Máy tính cầm tay gọn nhẹ và cần thiết cho học sinh, sinh viên.', 200, 4, 1),
(19, ' Máy tính CASIO fx-580VN X ', 'dientu.jpg', 600000, '2022-06-12', 'Máy tínhđời mới cầm tay gọn nhẹ và cần thiết cho học sinh, sinh viên.', 200, 4, 1),
(20, 'Máy Tính Vinacal 570 ES Plus II Xanh Dương', 'dientu3.jpg', 500000, '2022-06-20', 'Máy tính cầm tay gọn nhẹ  nhiều chức năng với khả năng tính toán nhanh và cần thiết cho học sinh, sinh viên.', 400, 4, 1),
(21, 'Bộ 35 dụng cụ vẽ phác thảo', 'dungcuve.jpg', 250000, '2022-06-21', 'Bộ 35 dụng cụ vẽ phác thảo chuyên nghiệp gồm bút chì và phụ kiện khác dành cho vẽ tranh nghệ thuật.', 50, 5, 2),
(22, 'Bút Màu Marker Cao Cấp', 'dungcuve1.jpg', 105000, '2022-06-25', 'Bút Marker , Bút Dạ, Bút Touch Sketch Cao Cấp 30/40/60/80 Màu Vẽ Tranh, Tô Màu Chuyên Nghiệp', 60, 5, 2),
(23, 'Dập ghim đại KW 50LA', 'vanphongpham1.jpg', 100000, '2022-06-24', 'Dập ghim đại KW 50LA cỡ lớn,máy dập ghim đại dập 240 tờ', 300, 1, 3),
(24, 'Compa kỹ thuật', 'a7.jpg', 20000, '2022-06-17', 'Thân vỏ inox, khay kẹp bút chì. Chức năng: tạo đường tròn, đường cong kỹ thuật.  Đáp ứng tiêu chuẩn sức khỏe người dùng văn phòng.', 300, 1, 2),
(25, 'Đinh ấn màu', 'dungcuvanphong1.jpg', 5000, '2022-06-23', 'aaaa', 200, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `maTL` int(11) NOT NULL,
  `tenTL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `moTa` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`maTL`, `tenTL`, `moTa`) VALUES
(1, 'Gia dụng', 'Đồ đẹp, bền, giá rẻ'),
(2, 'Bút', 'Bền, đẹp'),
(3, 'Tập sổ', 'Chất lượng giấy viết tốt, thiết kế bìa sách đẹp và tinh tế.'),
(4, 'Đồ điện tử', 'không'),
(5, 'Dụng cụ vẽ', 'Chât lượng đồ vẽ tốt, chất lượng.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `Fk4_maSP` (`maSP`),
  ADD KEY `maDH` (`maDH`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDH`),
  ADD KEY `Fk3_maKH` (`maKH`),
  ADD KEY `maSP` (`maSP`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`maNSX`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `Fk1_maTL` (`maTL`),
  ADD KEY `Fk2_maNSX` (`maNSX`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`maTL`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `maNSX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `maTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `Fk4_maSP` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`),
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`maDH`) REFERENCES `donhang` (`maDH`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `Fk1_maTL` FOREIGN KEY (`maTL`) REFERENCES `theloai` (`maTL`),
  ADD CONSTRAINT `Fk2_maNSX` FOREIGN KEY (`maNSX`) REFERENCES `nhasanxuat` (`maNSX`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
