<?php
    class nhan_vien{
        public $ho_ten,$ngay_sinh,$gioi_tinh,$ngay_vao_lam,$he_so_luong,$so_con,$tham_nien,$luong_co_ban=450000;

        function __construct( $ho_ten,$ngay_sinh,$gioi_tinh,$ngay_vao_lam,$he_so_luong,$so_con,$tham_nien,$luong_co_ban)
        {
            $this->ho_ten=$ho_ten;
            $this->ngay_sinh=$ngay_sinh;
            $this->gioi_tinh=$gioi_tinh;
            $this->ngay_vao_lam=$ngay_vao_lam;
            $this->he_so_luong=$he_so_luong;
            $this->so_con=$so_con;
            $this->tham_nien=$tham_nien;
            $this->luong_co_ban=$luong_co_ban;
        }

        function tro_cap()
        {
            return $this->so_con *100000;
        }

        function tien_luong()
        {
            return $this->luong_co_ban * $this->he_so_luong;
        }

    }

    class nhan_vien_van_phong  extends nhanvien{
        public $so_ngay_vang,$dinh_muc_vang = 2,$don_gia_phat=25000;

        function __construct($ho_ten,$ngay_sinh,$gioi_tinh,$ngay_vao_lam,$he_so_luong,$so_con,$tham_nien,$luong_co_ban,$so_ngay_vang)
        {
            parent:: __construct( $ho_ten,$ngay_sinh,$gioi_tinh,$ngay_vao_lam,$he_so_luong,$so_con,$tham_nien,$luong_co_ban)
            $this->so_ngay_vang =$so_ngay_vang;


        }
        function tien_phat(){
            return parent::tien_luong()-($this->so_ngay_vang - $this ->dinh_muc_vang)* $this->dinh_muc_phat;
        }

        function tro_cap_van_phong(){
            return parent::trocap()+($this->socon *100000);
        }
        function tien_luong(){
            return parent::tien_luong() - tien_phat();
        }
    }


    class nhan_vien_san_xuat_{
        public $san_pham,$dinh_muc_san_pham = 100,$don_gia_san_pham = 12000;
        function __construct( $ho_ten,$ngay_sinh,$gioi_tinh,$ngay_vao_lam,$he_so_luong,$so_con,$tham_nien,$luong_co_ban)
        {
            parent:: __construct( $ho_ten,$ngay_sinh,$gioi_tinh,$ngay_vao_lam,$he_so_luong,$so_con,$tham_nien,$luong_co_ban)
            $this->san_pham =$san_pham;
        }

        function tien_thuong()
        {
            if($this ->san_pham > $dinh_muc_san_pham)
            {
                $gia_tri=parent::tien_luong() + ($this->san_pham - $this ->dinh_muc_san_pham) * $this ->don_gia_san_pham * 0.05;
            }
            else{
                $gia_tri=parent::tien_luong() + ($this->san_pham - $this ->dinh_muc_san_pham) * $this ->don_gia_san_pham * 0.01;
  
            }
            return $gia_tri;
        }

        function tang_ca()
        {
            return $this->so_con *100000;
        }


        function tien_luong()
        {
            return ($this->san_pham * $this->don_gia_san_pham) +tien_thuong();
        }
    }

?>