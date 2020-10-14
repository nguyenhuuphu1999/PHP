<?php
// print_r(PDO::getAvailableDrivers());
    $db = new PDO('mysql:host=localhost;dbname=bookstore', 'root', '');
    // $db->query("set name utf8");
    $sql = "SELECT * FROM bs_sach";
    // $max ="SELECT max(id) from bs_sach";


    $statement =$db->prepare($sql);
    $statement->execute();

    // $statement_max=$db->prepare($sql);
    // $statement_max ->execute();

//    $result = $statement->fetch(PDO::FETCH_OBJ);
   $result = $statement->fetchAll(PDO::FETCH_OBJ);
    // $result_max = $statement_max->fetchAll(PDO::FETCH_OBJ);

//    print_r($result) ;
            foreach($result as $id)
            {
                // echo $id->id;
                $mang = $id->id;
                
            }
          
          
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 1</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <label for="">ID</label>
            <br>
            <?php
                foreach($result as $id_sach)
                {
                    echo $id_sach->id."<br>"."<br>";
                }
            ?>
        </div>

        
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <label for="">Tên Sách</label>
            <br>
            <?php
                foreach($result as $ten_sach)
                {
                    echo $ten_sach->ten_sach."<br>"."<br>";
                }
            ?>
        </div>

        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label for="">Đơn Giá</label>
            <br>
            <?php
                foreach($result as $don_gia)
                {
                    echo $don_gia->don_gia.'<br>'.'<br>';
                }
            ?>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label for="">Giá bìa</label>
            <br> 
            <?php
                foreach($result as $gia_bia)
                {   
                    echo $gia_bia->gia_bia.'<br>'.'<br>';
                }
            ?>
       </div>

       
       <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
           <label for="">Chọn</label>
                <br>
            <?php
           for($i =1 ; $i < $mang ; $i++)
           {
               
                ?>
                <div>
                    <input type="checkbox" name="<?php $i?>" id="">
                </div>
                <br>
                <?php
              
           }
                
                
            ?>
           
       </div>
       
        
        
    </div>
    
</body>
</html>