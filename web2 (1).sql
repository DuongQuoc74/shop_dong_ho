-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2023 lúc 10:53 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `STT` int(11) NOT NULL,
  `quyen` int(11) NOT NULL,
  `congviec` varchar(50) NOT NULL,
  `tenchucvu` varchar(50) NOT NULL,
  `luongnv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`STT`, `quyen`, `congviec`, `tenchucvu`, `luongnv`) VALUES
(1, 1, 'Quản lý', 'Nhân viên quản lý', '10000.000'),
(3, 3, 'Quản lý kho', 'Nhân viên kho', '7000.000'),
(4, 2, 'Mua hàng', 'Khách hàng', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `idanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`idanhmuc`, `tendanhmuc`, `thutu`) VALUES
(0, 'bánh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idcart` int(11) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `codecart` varchar(100) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `huydonhang` int(11) NOT NULL,
  `ngaydat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`idcart`, `taikhoan`, `codecart`, `tinhtrang`, `huydonhang`, `ngaydat`) VALUES
(20, 'vinh0044', '997', 1, 1, ''),
(26, 'vinh0044', '558', 0, 0, ''),
(27, 'vinh0044', '126', 0, 0, ''),
(28, 'vinh0044', '163', 0, 0, ''),
(29, 'vinh0044', '627', 0, 0, ''),
(32, 'namtu123', '895', 0, 0, ''),
(33, 'namtu123', '199', 0, 0, '08/04/23'),
(34, 'mon12345', '208', 0, 0, '11/04/23'),
(35, 'mon12345', '453', 0, 0, '11/04/23'),
(36, 'mon12345', '708', 0, 0, '11/04/23'),
(37, 'mon12345', '351', 0, 0, '11/04/23'),
(38, 'mon12345', '837', 0, 0, '11/04/23'),
(39, 'mon12345', '264', 0, 0, '11/04/23'),
(40, 'mon12345', '895', 0, 0, '11/04/23'),
(41, 'mon12345', '20', 0, 0, '11/04/23'),
(42, 'mon12345', '936', 0, 0, '11/04/23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `iddonhangchitiet` int(11) NOT NULL,
  `codecart` varchar(100) NOT NULL,
  `idsanpham` varchar(100) NOT NULL,
  `soluongdh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`iddonhangchitiet`, `codecart`, `idsanpham`, `soluongdh`) VALUES
(20, '997', 'SP03', 1),
(21, '558', 'SP03', 1),
(22, '126', 'SP12', 1),
(23, '163', 'SP11', 3),
(24, '627', 'SP01', 3),
(25, '627', 'SP10', 4),
(26, '895', 'SP03', 1),
(27, '199', 'SP03', 1),
(28, '351', 'SP1', 1),
(29, '837', 'SP1', 1),
(30, '20', 'SP1', 2),
(31, '936', 'SP1', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `STT` int(11) NOT NULL,
  `idhoadon` int(11) NOT NULL,
  `taikhoanhd` varchar(100) NOT NULL,
  `tinhtranghd` int(11) NOT NULL,
  `huyhoadon` int(11) NOT NULL,
  `ngaydat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`STT`, `idhoadon`, `taikhoanhd`, `tinhtranghd`, `huyhoadon`, `ngaydat`) VALUES
(1, 534, 'vinh', 0, 1, 0),
(2, 198, 'vinh', 1, 0, 0),
(3, 295, 'vinh', 0, 0, 0),
(4, 820, 'vinh', 0, 0, 0),
(5, 665, 'DieuThan', 0, 0, 11),
(6, 244, 'DieuThan', 0, 0, 11),
(7, 963, 'DieuThan', 0, 0, 11),
(8, 144, 'DieuThan', 0, 0, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `STT` int(11) NOT NULL,
  `idhoadonchitiet` int(11) NOT NULL,
  `masphd` varchar(50) NOT NULL,
  `soluonghd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`STT`, `idhoadonchitiet`, `masphd`, `soluonghd`) VALUES
(1, 534, 'SP03', 4),
(2, 534, 'SP12', 1),
(3, 198, 'SP03', 2),
(4, 295, 'SP03', 1),
(5, 820, 'SP01', 5),
(6, 144, 'SP1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) NOT NULL,
  `makh` char(4) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `tenkh` varchar(100) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `quyen` int(11) NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `makh`, `ten`, `tenkh`, `gmail`, `sdt`, `gioitinh`, `ngaysinh`, `diachi`, `quyen`, `trangthai`) VALUES
(1, 'KH01', 'Vinh0011', '', 'huynhthevinh0611@gmail.com', '0938107521', 'Nam', '2023-04-04', 'a1254', 2, 1),
(6, 'KH03', 'vinh0044', 'Huỳnh Thế Vinh', 'huynhthevinh0611@gmail.com', '0938107521', 'Nam', '2023-04-04', 'a1254', 2, 1),
(12, 'KH2', 'kiemko152', 'Trường Thất Kiếm', 'kiemko152@gmail.com', '090985642', 'Nữ', '2023-04-23', '964c', 2, 1),
(13, 'KH4', 'Do1254', 'Trần Như Đỗ', 'Do1254@gmail.com', '0909852456', 'Nữ', '2023-04-28', 'SSS', 2, 1),
(14, 'KH', 'mon12345', 'Thế Vinh', 'chomon0022@gmail.com', '0909146144', 'Nữ', '2023-04-12', '84C', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `tenmenu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`idmenu`, `thutu`, `tenmenu`) VALUES
(1, 0, 'Trang chủ'),
(2, 1, 'Bánh theo đối tượng'),
(3, 2, 'Bánh theo dịp lễ'),
(4, 3, 'Bánh theo chủ đề'),
(5, 4, 'Bánh cúng, lễ dâng'),
(6, 5, 'Bánh hộp, bánh set'),
(9, 6, 'Bánh trung thu'),
(10, 7, 'Phụ kiện trang trí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menuadmin`
--

CREATE TABLE `menuadmin` (
  `idmenu` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `tenmenu` varchar(50) NOT NULL,
  `quyenmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menuadmin`
--

INSERT INTO `menuadmin` (`idmenu`, `thutu`, `tenmenu`, `quyenmenu`) VALUES
(1, 0, 'Quản lý sản phẩm', 1),
(2, 1, 'Quản lý nhân viên', 1),
(3, 2, 'Quản lý thể loại', 1),
(4, 3, 'Quản lý đơn hàng', 2),
(5, 4, 'Quản lý nhà cung cấp', 1),
(7, 5, 'Quản lý khách hàng', 1),
(8, 6, 'Quản lý tài khoản', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menunhanvienbanhang`
--

CREATE TABLE `menunhanvienbanhang` (
  `STT` int(11) NOT NULL,
  `mamenu` int(50) NOT NULL,
  `tenmenu` varchar(50) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menunhanvienkho`
--

CREATE TABLE `menunhanvienkho` (
  `STT` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `mamenu` varchar(50) NOT NULL,
  `tenmenu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menunhanvienkho`
--

INSERT INTO `menunhanvienkho` (`STT`, `thutu`, `mamenu`, `tenmenu`) VALUES
(1, 0, 'NN1', 'Quản lý đơn hàng'),
(2, 1, 'NN2', 'Quản lý hóa đơn'),
(3, 2, 'NN3', 'Quản lý sản phẩm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `STT` int(11) NOT NULL,
  `mancc` char(4) NOT NULL,
  `tenncc` varchar(100) NOT NULL,
  `mathang` varchar(100) NOT NULL,
  `sdtncc` varchar(11) NOT NULL,
  `emailncc` varchar(100) NOT NULL,
  `diachincc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`STT`, `mancc`, `tenncc`, `mathang`, `sdtncc`, `emailncc`, `diachincc`) VALUES
(8, 'NC1', 'Huynh The Vinh', 'Đồng hồ', '0938107521', 'chomon0011@gmail.com', '21451A'),
(9, 'NC2', 'Kim Nguyễn', 'Bàn ghế', '0909146144', 'mon123@gmail.com', '8754S'),
(10, 'NC3', 'Lý Thường Kiệt', 'Nội thất', '0939813019', 'Huhu@gmail.com', '25879A'),
(12, 'NC4', 'Kiến Trần Du', 'Đất sét', '0909133256', 'Duthe@gmail.com', '867A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnhanvien` int(11) NOT NULL,
  `manv` char(4) NOT NULL,
  `tennhanvien` varchar(100) NOT NULL,
  `sdtnv` varchar(11) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `ngaydilam` date NOT NULL,
  `ngaysinh` date NOT NULL,
  `quyen` int(11) NOT NULL,
  `matk` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnhanvien`, `manv`, `tennhanvien`, `sdtnv`, `gioitinh`, `diachi`, `ngaydilam`, `ngaysinh`, `quyen`, `matk`) VALUES
(2, 'NV1', 'Huỳnh Thế Vinh', '0938107521', 'Nam', 'HFSC', '2023-04-08', '2023-04-07', 1, 'TK1'),
(3, 'NV2', 'Hùng Thiên Cường', '0987526120', 'Nam', '875A', '2023-04-09', '2023-04-08', 3, ''),
(4, 'NV3', 'Hồng Nguyên Soái', '0965412352', 'Nam', '879A', '2023-04-15', '2023-04-06', 4, ''),
(5, 'NV4', 'Thủy Xuất Thần', '0909562321', 'Nữ', '8521A', '2023-04-02', '2023-04-16', 1, '0'),
(6, 'NV5', 'Thế Yêu Em', '0909146321', 'Nữ', '521 Chạnh lòng', '2023-04-01', '2023-04-05', 3, 'TK4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `idphanquyen` int(11) NOT NULL,
  `khachhang` int(11) NOT NULL,
  `nhanvien` int(11) NOT NULL,
  `quanly` int(11) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(11) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `danhmuc` char(4) NOT NULL,
  `giatien` int(11) NOT NULL,
  `ngaynhapsp` date NOT NULL,
  `nhacungcap` varchar(100) NOT NULL,
  `tinhtrang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `masp`, `tensanpham`, `soluong`, `hinhanh`, `danhmuc`, `giatien`, `ngaynhapsp`, `nhacungcap`, `tinhtrang`) VALUES
(1, 'SP1', 'Capeland', 14, 's1.jpg', 'TL1', 15, '2022-09-28', 'NC1', 1),
(65, 'SP2', 'Linea', 0, 'classima.jpg', 'TL1', 500000, '2023-02-10', 'NC1', 1),
(78, 'SP3', 'Promesse', 12, 'classima1.jpg', 'TL1', 15, '2022-09-28', 'NC1', 1),
(79, 'SP4', 'Clifton', 5, 'clifon.jpg', 'TL1', 500000, '2023-02-10', 'NC1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `idsilder` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `noidung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`idsilder`, `thutu`, `hinhanh`, `noidung`) VALUES
(1, 1, '1.jpg', 'nội dung 1'),
(2, 2, '2.jpg', 'nội dung 2'),
(7, 3, '3.png', ''),
(8, 4, '4.jpg', ''),
(9, 5, '5.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtaikhoan` int(11) NOT NULL,
  `matk` varchar(50) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idtaikhoan`, `matk`, `taikhoan`, `matkhau`, `quyen`) VALUES
(1, 'TK1', 'DieuThan', 'e100a41957d6faa27eba71720dcd3b6e', 1),
(14, 'TK2', 'mon12345', '5ae3430d0d452ff23cae1084b617a641', 2),
(15, 'TK3', 'mon123456', 'ed82d64515ce4b1daf66775d449dc991', 2),
(16, 'TK4', 'yeuem123', '66554cd0029ad960b72841677e50c572', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `STT` int(11) NOT NULL,
  `tentl` varchar(50) NOT NULL,
  `matlsp` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`STT`, `tentl`, `matlsp`) VALUES
(1, 'BAUME & MERCIER', 'TL1'),
(2, 'BELL & ROSS', 'TL2'),
(3, 'BREMONT', 'TL3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`STT`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`idanhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idcart`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`iddonhangchitiet`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`STT`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`STT`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Chỉ mục cho bảng `menuadmin`
--
ALTER TABLE `menuadmin`
  ADD PRIMARY KEY (`idmenu`);

--
-- Chỉ mục cho bảng `menunhanvienbanhang`
--
ALTER TABLE `menunhanvienbanhang`
  ADD PRIMARY KEY (`STT`);

--
-- Chỉ mục cho bảng `menunhanvienkho`
--
ALTER TABLE `menunhanvienkho`
  ADD PRIMARY KEY (`STT`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`STT`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnhanvien`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`idphanquyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`idsilder`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtaikhoan`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`STT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `iddonhangchitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `menuadmin`
--
ALTER TABLE `menuadmin`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `menunhanvienbanhang`
--
ALTER TABLE `menunhanvienbanhang`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menunhanvienkho`
--
ALTER TABLE `menunhanvienkho`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `idphanquyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `idsilder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtaikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
