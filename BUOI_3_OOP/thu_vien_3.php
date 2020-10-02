<?php
    class table{
        public $so_dong,$so_coc,$do_rong,$vien,$khoan_canh_o,$khoan_cach_dong;

        function __construct($so_dong,$so_coc,$do_rong,$vien,$khoan_canh_o,$khoan_cach_dong)
        {
            $this->so_dong=$so_dong;
            $this->so_coc=$so_coc;
            $this->do_rong=$do_rong;
            $this->vien=$vien;
            $this->khoan_canh_o=$khoan_canh_o;
            $this->khoan_cach_dong=$khoan_cach_dong;
        }
    }

    class conten_table {
        public $bg_color;
        public $conten;
        public $so_dong;
        public $so_coc,$content;
        function __construct($so_dong,$so_coc,$bg_color,$content)
        {
            $this->so_dong = $so_dong;
            $this ->so_coc=$so_coc;
            $this->bg_color = $bg_color;
            $this ->content=$content;
            
        }
    }
?>