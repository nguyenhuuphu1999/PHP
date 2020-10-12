<?php
    class nhan_vien{
        public $ho_ten,$ngay_sinh,$gioi_tinh,$so_con,$ngay_vao_lam,$he_so_luong,$tien_luong,$tro_cap;
        
        function nhan_vien($ho_ten,$ngay_sinh,$gioi_tinh,$so_con,$ngay_vao_lam,$he_so_luong,$tien_luong,$tro_cap){
                $this->ho_ten=$ho_ten;
                $this->ngay_sinh=$ngay_sinh;
                $this->gioi_tinh=$gioi_tinh;
                $this->so_con=$so_con;
                $this->ngay_vao_lam=$ngay_vao_lam;
                $this->he_so_luong=$he_so_luong;
                $this->tien_luong=$tien_luong;
                $this->tro_cap=$tro_cap;
            
           
        }
        function tro_cap(){
            return $this->so_con * 100000;
        }
    

        function tien_luong()
        {
            return $this->tien_luong* $this->he_so_luong;
        }
    }

    class van_phong extends nhan_vien{
        public $so_ngay_vang;
        public $quy_dinh_so_ngay_vang =2;
        public $muc_phat=25000;

        function van_phong($ho_ten,$ngay_sinh,$gioi_tinh,$so_con,$ngay_vao_lam,$he_so_luong,$tien_luong,$tro_cap,$so_ngay_vang)
        {
            parent::nhan_vien($ho_ten,$ngay_sinh,$gioi_tinh,$so_con,$ngay_vao_lam,$he_so_luong,$tien_luong,$tro_cap);
            $this->so_ngay_vang = $so_ngay_vang;
    
        }
        
    
    

        function tien_phat()
        {
            if($this->so_ngay_vang > $this->quy_dinh_so_ngay_vang)
                return ($this->so_ngay_vang - $this ->quy_dinh_so_ngay_vang)*25000;
            else
                return 0;
        }

        function tro_cap()
        {
            if($this->gioi_tinh == 'nu')
            {
                return ($this ->so_con *100000)*1.2;
            }
            else{
                return $this->so_con *100000;
            }
        }

        function tien_luong(){
            return ($this->tien_luong  * $this->he_so_luong) - $this-> tien_phat();
        }
    }

   class cong_nhan extends van_phong{

        public $so_san_pham,$dinh_muc=100,$don_gia_sp=12000;
        function cong_nhan($ho_ten,$ngay_sinh,$gioi_tinh,$so_con,$ngay_vao_lam,$he_so_luong,$tien_luong,$tro_cap,$so_ngay_vang,$so_san_pham)
        {
            parent::nhan_vien($ho_ten,$ngay_sinh,$gioi_tinh,$so_con,$ngay_vao_lam,$he_so_luong,$tien_luong,$tro_cap,$so_ngay_vang);
            $this ->so_san_pham=$so_san_pham;
        }
      

        function tien_thuong(){
            if($this->so_san_pham > $this->dinh_muc)
            {
                return ($this->so_san_pham - $this ->dinh_muc)*$this->don_gia_sp *0.05;
            }
            else{
                return 0;
            }
        }
        function tang_ca(){
            return $this->so_con *100000;
        }
        function tien_luong(){
            return ($this->so_san_pham * $this->don_gia_sp) + $this-> tien_thuong();
        }
    }
?>