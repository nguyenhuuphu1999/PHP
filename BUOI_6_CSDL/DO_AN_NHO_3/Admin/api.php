<?php
    $so_trang_can_chia=12;

    $db =new PDO('mysql:host=localhost;dbname=bookstore','root','');

    $db->query('set name utf-8');

    // $sql="SELECT bs_sach.*,ten_tac_gia FROM bs_sach join bs_tac_gia on bs_sach.id_tac_gia = bs_tac_gia.id WHERE  bs_sach.noi_bat = 1 ";

    // $statement =$db->prepare($sql);
    // $statement->execute();

    // $result=$statement->fetchAll(PDO::FETCH_OBJ);
    
    // $SL=count($result);

    // $so_sach_tren_trang=ceil($SL/$so_trang_can_chia);

    //Chia trang;

    $trang_hien_tai=(isset($_GET['trang']))?$_GET['trang']:0;

    $sql="SELECT bs_sach.*,ten_tac_gia FROM bs_sach join bs_tac_gia on bs_sach.id_tac_gia = bs_tac_gia.id  LIMIT " .$trang_hien_tai*$so_trang_can_chia.",$so_trang_can_chia";
    $statement=$db->prepare($sql);
    $statement->execute();
    $ds_sach=$statement->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($ds_sach);






   
?>