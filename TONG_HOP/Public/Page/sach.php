<?php

$link_image='./images';
//    include_once('../OOP/SQL.php');
   
//    $data = new database();
//    $data->database();
//    $sql="SELECT * FROM bs_sach"
//    $data->getsql($sql);

$db =new PDO('mysql:host=localhost;dbname=bookstore','root',"");
$db->query("set name utf-8");

$sql="SELECT * FROM bs_slide_banner";

$statement= $db->prepare($sql);
$statement->execute();

$result=$statement->fetchAll(PDO::FETCH_OBJ);


$sql_sach="SELECT bs_sach.*,ten_tac_gia FROM bs_sach  JOIN bs_tac_gia  on bs_sach.id_tac_gia = bs_tac_gia.id where noi_bat=1";
$statement_sach=$db->prepare($sql_sach);
$statement_sach->execute();
$result_sach=$statement_sach->fetchAll(PDO::FETCH_OBJ);

$sql_sach_id_most="SELECT bs_sach.*,ten_tac_gia FROM bs_sach  JOIN bs_tac_gia  on bs_sach.id_tac_gia = bs_tac_gia.id ORDER BY bs_sach.id DESC LIMIT 8";
$statement_sach_id_most=$db->prepare($sql_sach_id_most);
$statement_sach_id_most->execute();
$result_sach_id_most=$statement_sach_id_most->fetchAll(PDO::FETCH_OBJ);



$sql_sach_ban_chay="SELECT bs_sach.* ,bs_tac_gia.ten_tac_gia ,sum(bs_chi_tiet_don_hang.so_luong) FROM `bs_chi_tiet_don_hang` JOIN bs_sach on bs_sach.id = bs_chi_tiet_don_hang.id_sach JOIN bs_tac_gia on bs_sach.id_tac_gia = bs_tac_gia.id GROUP BY id_sach ORDER by sum(bs_chi_tiet_don_hang.so_luong) DESC LIMIT 8";
$statement_sach_ban_chay=$db->prepare($sql_sach_ban_chay);
$statement_sach_ban_chay->execute();
$result_sach_ban_chay=$statement_sach_ban_chay->fetchAll(PDO::FETCH_OBJ);

// echo"<pre>",print_r($result_sach_ban_chay),"</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./Css/style.css">
</head>
<body>
    
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                foreach($result as$key=>$sliede)
                {
                    $active =($key ==0)?'active':'';
                    ?>
                    <li data-target="#carousel-id" data-slide-to="0" class="<?php echo $active?>"></li>
                    <?php
                }
            ?>
        </ol>
        <div class="carousel-inner">

                <?php
                    foreach($result as$key =>$slide)
                    {
                        $active=($key == 0)?'active':'';
                        ?>
                            <div class="item <?php echo $active?>">
                               <img  alt="First slide" src="<?php echo $link_image?>/slide_banner/<?php echo $slide->hinh?>">
                            </div>
                        <?php
                    }
                ?>

           
            
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

  
  
  <div class="navbar">
      <a class="navbar-brand" href="#">Title</a>
      <ul class="nav navbar-nav">
          <li class="active">
              <a href="" onclick="">Home</a>
          </li>
          <li>
              <a href="">Tin Tuc</a>
          </li>
      </ul>
  </div>
  
  
  <?php echo include_once('tin_tuc.php')?>



</div>


        

</body>
</html>