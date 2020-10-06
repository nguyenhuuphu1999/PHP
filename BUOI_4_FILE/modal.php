<?php
    class sach{
        public $ten_sach,$ma_sach,$tac_gia,$don_gia,$nha_xuat_ban,$hinh;
        function sach($ten_sach="",$ma_sach="",$tac_gia="",$don_gia="",$nha_xuat_ban="",$hinh="")
        {
            $this->ten_sach=$ten_sach;
            $this->ma_sach=$ma_sach;
            $this->tac_gia=$tac_gia;
            $this->don_gia=$don_gia;
            $this->nha_xuat_ban=$nha_xuat_ban;
            $this->hinh=$hinh;
        }

        function ghi_sach(){
            $file=fopen('danh_sach.txt',"a+");
            $noidung =$this->ten_sach.'||'.$this ->ma_sach.'||'.$this ->tac_gia.'||'.$this->don_gia.'||'.$this->nha_xuat_ban.'||'.$this->hinh."\n";
            fwrite($file,$noidung);
            fclose($file);
        }
        function chuyen_dong_thanh_thong_tin($chuoi){
            $mang_thong_tin= explode('||',$chuoi);
            $this->ten_sach=$mang_thong_tin[0];
            $this->ma_sach=$mang_thong_tin[1];
            $this->tac_gia=$mang_thong_tin[2];
            $this->don_gia=$mang_thong_tin[3];
            $this->nha_xuat_ban=$mang_thong_tin[4];
            $this->hinh=$hinh[5];

        }

        function in_sach()
        {
            ?>
            <tr>
                <td><?php echo $this ->ten_sach;?></td>

                <td><?php echo $this ->ma_sach;?></td>

                <td><?php echo $this ->tac_gia;?></td>

                <td><?php echo $this ->don_gia;?></td>

                <td><?php echo $this ->nha_xuat_ban;?></td>

                <td><?php echo $this->hinh;?></td>
            </tr>
            <?php
        }

         
    }
?>