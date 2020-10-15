<?php
    if(isset($_GET['page']))
    {
        if($_GET['page']== 'sach')
        {
            include_once './page/show_sach.php';
        }
    }
?>