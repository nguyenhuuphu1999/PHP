<?php
    include './library.php';
    //$nhan_vien_1 = new nhan_vien('nv_001', 'Nguyễn Xuân Hùng', '09-2011', '08-1898', 1.7, 1);
    $nhan_vien_van_phong = new nhan_vien_van_phong('nv_001', 'Nguyễn Xuân Hùng', '09-2011', '08-1898', 2.1, 1, 10);
    //$nhan_vien_van_phong->$he_so_luong = 3.0;
    //  echo $nhan_vien_van_phong->so_ngay_vang;    
     echo "<pre>", print_r ($nhan_vien_van_phong) ,"</pre>";                              
    //echo $nhan_vien_1->ten_cua_nhan_vien();
  //echo  $nhan_vien_van_phong->tien_luong_nhan_vien_van_phong();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        <?php

       // echo $nhan_vien_1 -> tien_luong();
            // echo '<pre>', print_r($nhan_vien_van_phong), '</pre>';
          // echo $nhan_vien_1->get_name();
        
          echo $nhan_vien_van_phong ->tien_luong_nhan_vien_van_phong();
        ?>
    </div>
    
</body>
</html>