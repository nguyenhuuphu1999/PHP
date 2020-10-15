<?php
    
    if(isset($_GET['page']))
    {
        if($_GET['page'] == 'sach')
        {
            include_once("./page/ds_sach.php");
        }else
        {
            echo" thu muc rong";
        }
    
    }
    else{
        echo 'Khong tim thay thu muc';
    }
?>