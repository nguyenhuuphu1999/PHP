
--1
SELECT ten_nha_xuat_ban,dia_chi,dien_thoai from bs_nha_xuat_ban

--2
SELECT ho_ten,dia_chi,dien_thoai FROM `bs_nguoi_dung`

--3
SELECT ten_tac_gia,gioi_thieu FROM `bs_tac_gia`

--4
SELECT ho_ten,email,ngay_sinh,dia_chi,dien_thoai FROM `bs_nguoi_dung` ORDER by ho_ten ASC 

--5
SELECT ten_sach,sku,gioi_thieu,kich_thuoc,trong_luong,don_gia,gia_bia FROM `bs_sach` ORDER BY `bs_sach`.`ten_sach` DESC

--6
SELECT ten_sach,sku,gioi_thieu,kich_thuoc,trong_luong,don_gia,gia_bia FROM `bs_sach` WHERE ten_sach like 'Series%';

--7
SELECT * FROM `bs_tin_tuc` WHERE hinh_dai_dien like '%.jpg'

--8
SELECT * FROM `bs_sach` WHERE ten_sach LIKE '%tai ban%'

--9

SELECT ten_sach,sku,gioi_thieu,kich_thuoc,trong_luong,don_gia,gia_bia FROM `bs_sach` ORDER BY ten_sach DESC

--10
SELECT ten_sach,sku,gioi_thieu,kich_thuoc,trong_luong,don_gia,gia_bia FROM `bs_sach`

WHERE id_loai_sach =17 and id_nha_xuat_ban = 11 

--11
SELECT * FROM `bs_sach` WHERE trong_luong >= 500 and gia_bia > 150000

--12
SELECT * FROM `bs_sach` WHERE don_gia >=500000 and don_gia <=2500000

--13
SELECT * FROM `bs_sach` WHERE don_gia<=60000 and id_loai_sach =56 or id_loai_sach=90 or id_loai_sach=92

--14
SELECT * FROM `bs_sach` WHERE id_loai_sach = 45 or don_gia <=60000

--15
SELECT * FROM `bs_sach` WHERE gioi_thieu like '%huyen bi%' or gioi_thieu like'%du lich%'

--16
SELECT * FROM `bs_sach` WHERE trong_luong = 280 or trong_luong = 350 or trong_luong = 380

--18
SELECT ten_sach,gioi_thieu,trong_luong,don_gia,gia_bia 
FROM bs_sach 
WHERE gioi_thieu like'%manh%' or gioi_thieu like'%magic%'
ORDER BY don_gia ASC 
LIMIT 3

--17
SELECT ten_sach,gioi_thieu,trong_luong,gia_bia,don_gia
FROM bs_sach 
ORDER BY don_gia ASC
LIMIT 10

--19
SELECT * FROM `bs_nha_xuat_ban` WHERE ID <>" " AND ten_nha_xuat_ban <> " " AND dia_chi <> " " AND dien_thoai <> " " AND email <> " "

--20
SELECT * FROM `bs_sach` WHERE SO_TRANG >=500 AND trong_luong >= 500

