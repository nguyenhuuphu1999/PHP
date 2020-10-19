
<?php
$so_trang =8; 
    $db= new PDO('mysql:host=localhost;dbname=bookstore','root','');
    $db->query('set name utf-8');

    $so_trang_hien_tai =(isset($_GET['trang']))?$_GET['trang']:0;

    $sql = "SELECT * FROM `bs_tin_tuc` LIMIT ".$so_trang_hien_tai*$so_trang.",$so_trang";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result= $statement->fetchAll(PDO::FETCH_OBJ);

   echo json_encode($result);
?>