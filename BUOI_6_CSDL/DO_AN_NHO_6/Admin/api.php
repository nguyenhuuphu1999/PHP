<?php
    $so_trang=10;
    $db= new PDO("mysql:host=localhost;dbname=bookstore","root","");
    $db->query('set name utf-8');

    // $trang_hien_tai=(isset($_GET['trang']))?$_GET['trang']:0;


    $sql="SELECT * FROM bs_loai_sach" ;
    $statement = $db->prepare($sql);
    $statement->execute();
    $danh_muc_sach=$statement->fetchAll(PDO::FETCH_OBJ);


    echo json_encode($danh_muc_sach);



?>