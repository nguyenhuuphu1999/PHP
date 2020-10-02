<?php
    class nhan_vien {
        public $ma_so_nhan_vien,$ten_nhan_vien,$ngay_vao_lam,$ngay_sinh,$he_so_luong,$So_con;
        
        function nhan_vien($ma_so_nhan_vien,$ten_nhan_vien,$ngay_vao_lam,$ngay_sinh,$he_so_luong,$So_con)
        {
            $this ->ma_so_nhan_vien=$ma_so_nhan_vien;
            $this ->ten_nhan_vien=$ten_nhan_vien;
            $this ->ngay_vao_lam=$ngay_vao_lam;
            $this ->ngay_sinh=$ngay_sinh;
            $this ->he_so_luong=$he_so_luong;
            $this ->So_con=$So_con;
        }
        function tien_luong(){
           return $this->he_so_luong * 5000000;
        }
        function set_luong($value)
        {
            $this ->he_so_luong = $value; 
        }
       function get_name(){
           return $this -> ten_nhan_vien;
       }


      
    }

    class nhan_vien_van_phong extends nhan_vien{
        public $so_ngay_vang;
        public $dinh_muc_vang = 1;
        public $dinh_muc_phat = 250000;
        function nhan_vien_van_phong($ma_so_nhan_vien,$ten_nhan_vien,$ngay_vao_lam,$ngay_sinh,$he_so_luong,$So_con,$so_ngay_vang)
        {
            parent:: nhan_vien($ma_so_nhan_vien,$ten_nhan_vien,$ngay_vao_lam,$ngay_sinh,$he_so_luong,$So_con);
            $this ->so_ngay_vang= $so_ngay_vang;
        }
        function tien_luong_nhan_vien_van_phong()
        {
           return parent::tien_luong() - ($this->so_ngay_vang - $this->dinh_muc_vang) * $this->dinh_muc_phat;
            //return parent::tien_luong() - ($this->so_ngay_vang - $this->dinh_muc_vang) * $this->dinh_muc_phat;
        }
       
     }

    
?>