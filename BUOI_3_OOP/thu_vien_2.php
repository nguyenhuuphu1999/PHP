<?php
class image{
    public $tieu_de,$duon_dan,$ghi_chu,$chieu_rong,$chieu_cao,$duong_vien,$canh_le;

    function __construct($tieu_de,$duon_dan,$ghi_chu,$chieu_rong,$chieu_cao,$duong_vien,$canh_le)
    {
        $this ->tieu_de =$tieu_de;
        $this ->duon_dan =$duon_dan;
        $this ->ghi_chu =$ghi_chu;
        $this ->chieu_rong =$chieu_rong;
        $this ->chieu_cao =$chieu_cao;
        $this ->duong_vien =$duong_vien;
        $this ->canh_le =$canh_le;
        
    }

}
?>