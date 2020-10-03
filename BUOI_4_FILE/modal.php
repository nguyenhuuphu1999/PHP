<?php
    class sach{
        public $ten_sach,$ma_sach,$tac_gia,$don_gia,$nha_xuat_ban;
        function sach($ten_sach,$ma_sach,$tac_gia,$don_gia,$nha_xuat_ban)
        {
            $this->ten_sach=$ten_sach;
            $this->ma_sach=$ma_sach;
            $this->tac_gia=$tac_gia;
            $this->don_gia=$don_gia;
            $this->nha_xuat_ban=$nha_xuat_ban;
        }

        function ghi_sach(){
            $file=fopen('danh_sach.txt',"a+");

            $noidung =$this->ten_sach.'||'.$this ->ma_sach.'||'.$this ->tac_gia.'||'.$this->don_gia.'||'.$this->nha_xuat_ban;
            fwrite($file,$noidung);
            fclose($file);


        }
        function doc_sach(){
            if(file_exists('danh_sach.txt'))
            {
                $file=fopen('danh_sach.txt',"r");
                while(!feof($file))
                {
                    fget($file);
                }
                fclose();
            }
        }

         
    }
?>