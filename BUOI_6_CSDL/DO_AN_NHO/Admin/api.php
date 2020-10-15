<?php
    $so_sach_tren_trang = 10;
    $db = new PDO('mysql:host=localhost;dbname=bookstore', 'root', '');

    $db->query("set name utf-8");

    // $sql = "SELECT * FROM bs_sach";

    // $statement = $db->prepare($sql);
    // $statement->execute();

    // $ds_sach = $statement->fetchAll(PDO::FETCH_OBJ);
    
    // $tong_sl_sach = count($ds_sach);
   
    // $so_trang = ceil($tong_sl_sach / $so_sach_tren_trang);
    
    $trang_hien_tai=(isset($_GET['trang']))?$_GET['trang']:0;

    $SQL_QUERY = "SELECT * FROM  bs_sach LIMIT ".$trang_hien_tai * $so_sach_tren_trang." ,$so_sach_tren_trang";
    
    $statement = $db ->prepare($SQL_QUERY);
    $statement->execute();
    $ds_sach = $statement->fetchAll(PDO::FETCH_OBJ);
    echo json_encode( $ds_sach);
?>